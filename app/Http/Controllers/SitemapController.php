<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = [
            ['url' => route('beranda'), 'lastmod' => now()->startOfDay()->toAtomString(), 'priority' => '1.0'],
            ['url' => route('live'), 'lastmod' => now()->startOfDay()->toAtomString(), 'priority' => '0.9'],
            ['url' => route('jadwal'), 'lastmod' => now()->startOfDay()->toAtomString(), 'priority' => '0.8'],
            ['url' => route('catalog.index'), 'lastmod' => now()->startOfDay()->toAtomString(), 'priority' => '0.8'],
            ['url' => route('berita.index'), 'lastmod' => now()->startOfDay()->toAtomString(), 'priority' => '0.8'],
            ['url' => route('layanan'), 'lastmod' => now()->startOfDay()->toAtomString(), 'priority' => '0.7'],
            ['url' => route('kontak'), 'lastmod' => now()->startOfDay()->toAtomString(), 'priority' => '0.7'],
            ['url' => route('tv9xlpmaarif'), 'lastmod' => now()->startOfDay()->toAtomString(), 'priority' => '0.7'],
        ];

        return response()->view('sitemap', [
            'urls' => $urls,
        ])->header('Content-Type', 'text/xml');
    }
}
