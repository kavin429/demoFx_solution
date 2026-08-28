<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MarketauxService
{
    protected string $baseUrl = 'https://api.marketaux.com/v1';

    public function getMarketUpdates(array $symbols = ['EURUSD', 'XAUUSD', 'GBPUSD'], int $limit = 12): array
    {
        $response = Http::get("{$this->baseUrl}/news/all", [
            'api_token'       => config('services.marketaux.token'),
            'symbols'         => implode(',', $symbols),
            'filter_entities' => 'true',
            'language'        => 'en',
            'limit'           => $limit,
            'sort'            => 'published_at',
        ]);

        return $response->successful() ? $this->mapArticles($response->json('data', [])) : [];
    }

    public function getLatestNews(int $limit = 12): array
    {
        $response = Http::get("{$this->baseUrl}/news/all", [
            'api_token'     => config('services.marketaux.token'),
            'language'      => 'en',
            'limit'         => $limit,
            'sort'          => 'published_at',
            'group_similar' => 'true',
        ]);

        return $response->successful() ? $this->mapArticles($response->json('data', [])) : [];
    }

    protected function mapArticles(array $articles): array
    {
        return collect($articles)->map(function ($article) {
            $raw = $article['description'] ?: $article['snippet'];

            return [
                'title' => $article['title'],
                'text'  => Str::limit(strip_tags($raw), 140),
                'date'  => Carbon::parse($article['published_at'])->format('M j, Y'),
                'url'   => $article['url'],
                'image' => $article['image_url'] ?? null,
            ];
        })->toArray();
    }
}