<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ScheduleApiController extends Controller
{
    /**
     * Get today's schedule.
     */
    public function today()
    {
        $today = date('N'); // 1-7
        $schedules = Program::where('day_of_week', $today)
                            ->orderBy('start_time')
                            ->get();

        return response()->json([
            'success' => true,
            'day' => $today,
            'message' => 'Jadwal hari ini berhasil diambil.',
            'data' => $schedules
        ]);
    }

    /**
     * Get the program currently being broadcast.
     */
    public function current()
    {
        $today = date('N');
        $currentTime = Carbon::now()->format('H:i:s');

        $current = Program::where('day_of_week', $today)
                          ->where('start_time', '<=', $currentTime)
                          ->where('end_time', '>=', $currentTime)
                          ->first();

        return response()->json([
            'success' => true,
            'data' => $current,
            'server_time' => $currentTime
        ]);
    }

    /**
     * Get all schedules grouped by day.
     */
    public function weekly()
    {
        $schedules = Program::orderBy('day_of_week')
                            ->orderBy('start_time')
                            ->get()
                            ->groupBy('day_of_week');

        return response()->json([
            'success' => true,
            'data' => $schedules
        ]);
    }
}
