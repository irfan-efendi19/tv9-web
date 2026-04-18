<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class NewsController extends Controller
{
    public function index()
    {
        // Cache external API data for 15 minutes to improve performance
        $news = Cache::remember('jurnal9_news', 900, function () {
            $response = Http::get('https://jurnal9.tv/wp-json/wp/v2/posts', [
                '_embed' => true,
                'per_page' => 9,
            ]);

            if ($response->successful()) {
                return $response->json();
            }

            return [];
        });

        return view('berita', compact('news'));
    }
}
