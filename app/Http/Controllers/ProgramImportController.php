<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramImportController extends Controller
{
    private array $dayMap = [
        'senin'     => 1, 'monday'    => 1,
        'selasa'    => 2, 'tuesday'   => 2,
        'rabu'      => 3, 'wednesday' => 3,
        'kamis'     => 4, 'thursday'  => 4,
        'jumat'     => 5, 'jum\'at'   => 5, 'friday'    => 5,
        'sabtu'     => 6, 'saturday'  => 6,
        'minggu'    => 7, 'sunday'    => 7,
        '1' => 1, '2' => 2, '3' => 3, '4' => 4,
        '5' => 5, '6' => 6, '7' => 7,
    ];

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:csv,txt,xlsx,xls|max:2048',
        ], [
            'file.required' => 'Silakan pilih file terlebih dahulu.',
            'file.mimes'    => 'Format file harus CSV atau Excel (.xlsx/.xls).',
            'file.max'      => 'Ukuran file maksimal 2MB.',
        ]);

        $file = $request->file('file');
        $ext  = strtolower($file->getClientOriginalExtension());

        if (in_array($ext, ['xlsx', 'xls'])) {
            return redirect()->back()->with('import_error', 'Format Excel (.xlsx) membutuhkan library tambahan. Gunakan format CSV (.csv) yang bisa disimpan dari Excel via "Save As → CSV".');
        }

        // Parse CSV
        $handle  = fopen($file->getRealPath(), 'r');
        $headers = null;
        $imported = 0;
        $skipped  = 0;
        $errors   = [];

        while (($row = fgetcsv($handle, 1000, ',')) !== false) {
            // Skip BOM on first row
            if ($headers === null) {
                $row[0]  = ltrim($row[0], "\xEF\xBB\xBF");
                $headers = array_map(fn($h) => strtolower(trim($h)), $row);
                continue;
            }

            if (count($row) < count($headers)) continue;

            $data = array_combine($headers, $row);

            $dayRaw     = strtolower(trim($data['hari'] ?? ''));
            $dayOfWeek  = $this->dayMap[$dayRaw] ?? null;

            if (!$dayOfWeek) {
                $skipped++;
                $errors[] = "Baris dilewati – hari tidak valid: \"{$data['hari']}\"";
                continue;
            }

            $title = trim($data['nama_program'] ?? '');
            if (empty($title)) {
                $skipped++;
                continue;
            }

            Program::create([
                'title'       => $title,
                'category'    => trim($data['kategori'] ?? ''),
                'day_of_week' => $dayOfWeek,
                'start_time'  => $this->parseTime($data['waktu_mulai'] ?? '00:00'),
                'end_time'    => $this->parseTime($data['waktu_selesai'] ?? '00:00'),
                'description' => trim($data['deskripsi'] ?? ''),
            ]);
            $imported++;
        }

        fclose($handle);

        $message = "{$imported} jadwal berhasil diimport.";
        if ($skipped > 0) {
            $message .= " {$skipped} baris dilewati.";
        }

        return redirect()->route('dashboard')
            ->with('import_success', $message)
            ->with('import_errors', $errors);
    }

    private function parseTime(string $value): string
    {
        $value = trim($value);
        if (empty($value)) return '00:00:00';
        // Ensure HH:MM:SS format
        if (preg_match('/^\d{1,2}:\d{2}$/', $value)) {
            return $value . ':00';
        }
        return date('H:i:s', strtotime($value)) ?: '00:00:00';
    }

    /**
     * Download a sample CSV template
     */
    public function template()
    {
        $headers = [
            'Content-Type'        => 'text/csv; charset=utf-8',
            'Content-Disposition' => 'attachment; filename="template-jadwal-tv9.csv"',
            'Cache-Control'       => 'no-store',
        ];

        $rows = [
            ['nama_program', 'kategori', 'hari', 'waktu_mulai', 'waktu_selesai', 'deskripsi'],
            ['Kajian Pagi Nusantara', 'Religi', 'Senin', '05:00', '06:00', 'Kajian inspirasi pagi hari'],
            ['Warta 9 Siang', 'Berita', 'Senin', '12:00', '13:00', 'Berita terkini Nusantara'],
            ['Talkshow Budaya', 'Budaya', 'Selasa', '19:00', '20:30', 'Mengeksplorasi budaya Nusantara'],
            ['Dokumenter Islam', 'Sejarah', 'Rabu', '21:00', '22:00', 'Sejarah Islam Nusantara'],
        ];

        $callback = function () use ($rows) {
            $handle = fopen('php://output', 'w');
            fputs($handle, "\xEF\xBB\xBF"); // UTF-8 BOM for Excel
            foreach ($rows as $row) {
                fputcsv($handle, $row, ',');
            }
            fclose($handle);
        };

        return response()->stream($callback, 200, $headers);
    }
}
