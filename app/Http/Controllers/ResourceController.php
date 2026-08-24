<?php

namespace App\Http\Controllers;

use App\Services\MarketauxService;
use Illuminate\View\View;

class ResourceController extends Controller
{
    public function show(string $slug): View
    {
        $page = config("resources.{$slug}", [
            'title'     => ucfirst(str_replace('-', ' ', $slug)),
            'heroTitle' => ucfirst(str_replace('-', ' ', $slug)),
            'heroText'  => '',
        ]);

        if ($slug === 'news') {
            $page['articles'] = app(MarketauxService::class)->getLatestNews();
        } elseif ($slug === 'market-updates') {
            $page['articles'] = app(MarketauxService::class)->getMarketUpdates();
        }

        return view('products.resource', ['page' => $page]);
    }
}
