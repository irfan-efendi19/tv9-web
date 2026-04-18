<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogApiController extends Controller
{
    /**
     * Get all catalog items.
     */
    public function index()
    {
        $catalogs = Catalog::latest()->get();
        return response()->json([
            'success' => true,
            'message' => 'Katalog program berhasil diambil.',
            'data' => $catalogs
        ]);
    }

    /**
     * Get a specific catalog item.
     */
    public function show(Catalog $catalog)
    {
        return response()->json([
            'success' => true,
            'data' => $catalog
        ]);
    }
}
