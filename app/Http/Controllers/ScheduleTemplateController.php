<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ScheduleTemplateController extends Controller
{
    /**
     * Generate and download the Excel schedule template as a CSV.
     */
    public function download()
    {
        $headers = [
            'Content-Type'        => 'text/csv; charset=utf-8',
            'Content-Disposition' => 'attachment; filename="template-jadwal-tv9.csv"',
        ];

        $rows = [
            ['nama_program', 'kategori', 'hari', 'waktu_mulai', 'waktu_selesai', 'deskripsi'],
            ['Kajian Pagi Nusantara', 'Religi', 'Senin', '05:00', '06:00', 'Kajian Islam pagi hari'],
            ['Warta 9 Siang', 'Berita', 'Selasa', '12:00', '13:00', 'Berita terkini Nusantara'],
        ];

        $callback = function () use ($rows) {
            $handle = fopen('php://output', 'w');
            // UTF-8 BOM for Excel compatibility
            fputs($handle, "\xEF\xBB\xBF");
            foreach ($rows as $row) {
                fputcsv($handle, $row, ',');
            }
            fclose($handle);
        };

        return Response::stream($callback, 200, $headers);
    }
}
