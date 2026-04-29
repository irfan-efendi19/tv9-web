<?php

namespace App\Imports;

use App\Models\Program;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\SkipsFailures;

class ProgramImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure
{
    use SkipsFailures;

    public function model(array $row): ?Program
    {
        // Map day names to numbers (flexible input)
        $dayMap = [
            'senin' => 1, 'monday' => 1, '1' => 1,
            'selasa' => 2, 'tuesday' => 2, '2' => 2,
            'rabu' => 3, 'wednesday' => 3, '3' => 3,
            'kamis' => 4, 'thursday' => 4, '4' => 4,
            'jumat' => 5, 'friday' => 5, '5' => 5,
            'sabtu' => 6, 'saturday' => 6, '6' => 6,
            'minggu' => 7, 'sunday' => 7, '7' => 7,
        ];

        $dayRaw = strtolower(trim($row['hari'] ?? ''));
        $dayOfWeek = $dayMap[$dayRaw] ?? (int)$dayRaw;

        if ($dayOfWeek < 1 || $dayOfWeek > 7) {
            return null;
        }

        return new Program([
            'title'       => trim($row['nama_program'] ?? ''),
            'category'    => trim($row['kategori'] ?? ''),
            'day_of_week' => $dayOfWeek,
            'start_time'  => $this->parseTime($row['waktu_mulai'] ?? ''),
            'end_time'    => $this->parseTime($row['waktu_selesai'] ?? ''),
            'description' => trim($row['deskripsi'] ?? ''),
        ]);
    }

    public function rules(): array
    {
        return [
            'nama_program'  => 'required|string',
            'hari'          => 'required',
            'waktu_mulai'   => 'required',
            'waktu_selesai' => 'required',
        ];
    }

    private function parseTime($value): string
    {
        // Handle Excel numeric time format (fraction of a day)
        if (is_numeric($value)) {
            $totalSeconds = round($value * 86400);
            $hours        = floor($totalSeconds / 3600);
            $minutes      = floor(($totalSeconds % 3600) / 60);
            return sprintf('%02d:%02d:00', $hours, $minutes);
        }
        return date('H:i:s', strtotime($value));
    }
}
