<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
            'image_data' => 'nullable|string', // Base64 from Croppie
        ]);

        if ($request->filled('image_data')) {
            $validated['image_url'] = $this->processImage($request->image_data);
        }

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
            'image_data' => 'nullable|string',
        ]);

        if ($request->filled('image_data')) {
            // Delete old image if exists
            if ($catalog->image_url && Storage::disk('public')->exists(str_replace('storage/', '', $catalog->image_url))) {
                Storage::disk('public')->delete(str_replace('storage/', '', $catalog->image_url));
            }
            $validated['image_url'] = $this->processImage($request->image_data);
        }

        $catalog->update($validated);
        return redirect()->route('dashboard')->with('success_catalog', 'Katalog program berhasil diperbarui.');
    }

    public function destroy(Catalog $catalog)
    {
        $this->authorizeAdmin();
        
        // Delete image file
        if ($catalog->image_url && Storage::disk('public')->exists(str_replace('storage/', '', $catalog->image_url))) {
            Storage::disk('public')->delete(str_replace('storage/', '', $catalog->image_url));
        }

        $catalog->delete();
        return redirect()->route('dashboard')->with('success_catalog', 'Program berhasil dihapus dari katalog.');
    }

    private function processImage($base64String)
    {
        if (strpos($base64String, ',') !== false) {
            $base64String = explode(',', $base64String)[1];
        }
        
        $image = base64_decode($base64String);
        $imageName = 'poster_' . time() . '_' . Str::random(10) . '.png';
        $path = 'posters/' . $imageName;

        Storage::disk('public')->put($path, $image);

        return 'storage/' . $path;
    }


    private function authorizeAdmin()
    {
        if (!auth()->check() || auth()->user()->role !== 'admin') {
            abort(403, 'Akses hanya untuk Administrator.');
        }
    }
}
