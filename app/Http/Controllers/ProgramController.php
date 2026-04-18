<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function create()
    {
        $this->authorizeAdmin();
        return view('program.create');
    }

    public function store(Request $request)
    {
        $this->authorizeAdmin();
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:100',
            'start_time' => 'required',
            'end_time' => 'required',
            'day_of_week' => 'required|integer|between:1,7',
        ]);

        Program::create($validated);
        return redirect()->route('dashboard')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    public function edit(Program $program)
    {
        $this->authorizeAdmin();
        return view('program.edit', compact('program'));
    }

    public function update(Request $request, Program $program)
    {
        $this->authorizeAdmin();
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:100',
            'start_time' => 'required',
            'end_time' => 'required',
            'day_of_week' => 'required|integer|between:1,7',
        ]);

        $program->update($validated);
        return redirect()->route('dashboard')->with('success', 'Jadwal berhasil diperbarui.');
    }

    public function destroy(Program $program)
    {
        $this->authorizeAdmin();
        $program->delete();
        return redirect()->route('dashboard')->with('success', 'Jadwal berhasil dihapus.');
    }

    private function authorizeAdmin()
    {
        if (!auth()->check() || auth()->user()->role !== 'admin') {
            abort(403, 'Akses hanya untuk Administrator.');
        }
    }
}
