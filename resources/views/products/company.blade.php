{{--
    Reusable Company page — one template, own page per slug.
    Route: /company/{slug} → config/company.php[$slug]
    Every section below is optional; only renders if that key
    exists in the page's config array.
--}}
@extends('layouts.app')

@section('title', $page['title'])

@section('content')
<div class="page-card">

    {{-- ===== HERO (always present) ===== --}}
<section class="hero" style="background-image: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url('{{ asset('pics/company.png') }}');">
    <div class="hero-content">
        <h1>{{ $page['heroTitle'] }}</h1>
        <p>{{ $page['heroText'] }}</p>
    </div>
</section>

    {{-- ===== INTRO TEXT BLOCK ===== --}}
    @isset($page['intro'])
        <section class="who-section fade-section">
            <div class="who-container">
                <div class="who-text-block">
                    <p class="eyebrow">{{ $page['intro']['eyebrow'] }}</p>
                    <h2 class="section-title">
                        {{ $page['intro']['title'] }} <span>{{ $page['intro']['titleSpan'] }}</span>
                    </h2>
                    <p class="who-text">{{ $page['intro']['text'] }}</p>
                </div>
            </div>
        </section>
    @endisset

    {{-- ===== FEATURE CARDS (Why Us) ===== --}}
    @isset($page['cards'])
        <section class="who-section fade-section" style="padding-top:0">
            <div class="who-cards">
                @foreach ($page['cards'] as $card)
                    <div class="who-card">
                        <i class="ph {{ $card['icon'] }} who-icon"></i>
                        <h3>{{ $card['title'] }}</h3>
                        <p>{{ $card['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    @endisset

    {{-- ===== REVIEWS ===== --}}
    @isset($page['reviews'])
        <section class="testimonial-wrapper">
            <div class="testimonial-track">
                @foreach ($page['reviews'] as $review)
                    <div class="testimonial-card fade-section">
                        <div class="client-top">
                            <h4>{{ $review['name'] }}</h4>
                            <span class="location">{{ $review['location'] }}</span>
                            <div class="stars">
                                @for ($i = 0; $i < $review['rating']; $i++)
                                    <i class="ph-fill ph-star"></i>
                                @endfor
                            </div>
                        </div>
                        <p>{{ $review['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    @endisset

        {{-- ===== ARTICLE LIST (Blog / Market Updates / Forecasts) — MARQUEE ===== --}}
    @isset($page['articles'])
        @php
            $articleCollection = collect($page['articles']);
            $twoRows = $articleCollection->count() > 5;
            $half     = $twoRows ? (int) ceil($articleCollection->count() / 2) : $articleCollection->count();
            $topRow   = $articleCollection->slice(0, $half)->values();
            $bottomRow = $twoRows ? $articleCollection->slice($half)->values() : collect();
            if ($twoRows && $bottomRow->isEmpty()) { $bottomRow = $topRow; }
        @endphp

        <section class="highlights-section marquee-section">

            {{-- Row 1: scrolls left → right --}}
            <div class="marquee-row marquee-row--ltr">
                <div class="marquee-track">
                    @for ($pass = 0; $pass < 2; $pass++)
                        @foreach ($topRow as $item)
                            <article class="marquee-card fade-section">
                                <h3>{{ $item['title'] }}</h3>
                                <div class="card-copy">
                                    <p>{{ $item['text'] ?? $item['excerpt'] ?? '' }}</p>
                                    @isset($item['date'])
                                        <span class="location">{{ $item['date'] }}</span>
                                    @endisset
                                </div>
                                <a href="{{ $item['url'] ?? '#' }}" class="marquee-btn">Read more</a>
                            </article>
                        @endforeach
                    @endfor
                </div>
            </div>

            {{-- Row 2: only when > 5 articles, scrolls right → left --}}
            @if ($twoRows)
            <div class="marquee-row marquee-row--rtl">
                <div class="marquee-track">
                    @for ($pass = 0; $pass < 2; $pass++)
                        @foreach ($bottomRow as $item)
                            <article class="marquee-card fade-section">
                                <h3>{{ $item['title'] }}</h3>
                                <div class="card-copy">
                                    <p>{{ $item['text'] ?? $item['excerpt'] ?? '' }}</p>
                                    @isset($item['date'])
                                        <span class="location">{{ $item['date'] }}</span>
                                    @endisset
                                </div>
                                <a href="{{ $item['url'] ?? '#' }}" class="marquee-btn">Read more</a>
                            </article>
                        @endforeach
                    @endfor
                </div>
            </div>
            @endif

        </section>
    @endisset

    {{-- ===== FAQ ACCORDION ===== --}}
    @isset($page['faqItems'])
        <section class="faq-container">
            @foreach ($page['faqItems'] as $faq)
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>{{ $faq['q'] }}</span>
                        <i class="ph ph-plus faq-icon"></i>
                    </button>
                    <div class="faq-answer">
                        <p>{{ $faq['a'] }}</p>
                    </div>
                </div>
            @endforeach
        </section>
    @endisset

    {{-- ===== HIGHLIGHTS GRID ===== --}}
    @isset($page['highlights'])
        <section class="highlights fade-section">
            <div class="container">
                <p class="eyebrow eyebrow--center">{{ $page['highlightsEyebrow'] ?? '' }}</p>
                <h2>{{ $page['highlightsTitle'] ?? '' }}</h2>
                <div class="grid-4">
                    @foreach ($page['highlights'] as $item)
                        <div class="card">
                            <i class="ph {{ $item['icon'] }}"></i>
                            <h3>{{ $item['title'] }}</h3>
                            <span>{{ $item['text'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endisset

    {{-- ===== CLOSING CTA (always shown, no per-page condition) ===== --}}
<section class="content-cta fade-section">
    <div class="container">
        <h2>{{ $page['cta']['title'] ?? 'Ready to Start Trading?' }}</h2>
        <p>{{ $page['cta']['text'] ?? 'Open an account and see the difference for yourself.' }}</p>
        <a href="{{ $page['cta']['btnUrl'] ?? 'https://trade.fundamentalcapitalltd.com/login' }}" class="content-cta__btn">
            {{ $page['cta']['btnText'] ?? 'Open an Account' }}
        </a>
    </div>
</section>
</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/trading.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/products.js') }}"></script>
    {{-- FAQ accordion is handled by the shared script (public/js/test.js) --}}
@endpush