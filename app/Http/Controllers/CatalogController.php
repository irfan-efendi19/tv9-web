<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $catalogs = Catalog::all();
        return view('catalog.index', compact('catalogs'));
    }

    public function create()
    {
        $this->authorizeAdmin();
        return view('catalog.create');
    }

    public function store(Request $request)
    {
        $this->authorizeAdmin();
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:100',
            'image_url' => 'nullable|url',
        ]);

        Catalog::create($validated);
        return redirect()->route('dashboard')->with('success_catalog', 'Program berhasil ditambahkan ke katalog.');
    }

    public function edit(Catalog $catalog)
    {
        $this->authorizeAdmin();
        return view('catalog.edit', compact('catalog'));
    }

    public function update(Request $request, Catalog $catalog)
    {
        $this->authorizeAdmin();
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:100',
            'image_url' => 'nullable|url',
        ]);

        $catalog->update($validated);
        return redirect()->route('dashboard')->with('success_catalog', 'Katalog program berhasil diperbarui.');
    }

    public function destroy(Catalog $catalog)
    {
        $this->authorizeAdmin();
        $catalog->delete();
        return redirect()->route('dashboard')->with('success_catalog', 'Program berhasil dihapus dari katalog.');
    }

    private function authorizeAdmin()
    {
        if (!auth()->check() || auth()->user()->role !== 'admin') {
            abort(403, 'Akses hanya untuk Administrator.');
        }
    }
}
