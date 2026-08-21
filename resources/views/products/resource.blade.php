{{--
    Reusable "Platforms-style" page.
    One template, many pages — pass a different $page array from the
    controller/route and everything on screen changes: hero, the 3 (or N)
    platform cards, the highlights grid and the closing CTA.

    Nothing here is hardcoded to "Platforms". Duplicate the DATA
    (resources/data/platforms.php) for a new page, not this file.
--}}
@extends('layouts.app')

@section('title', $page['title'])

@section('content')
<div class="page-card">

    {{-- ===== HERO ===== --}}
    <section class="hero">
        <div class="hero-content">
            <h1>{{ $page['heroTitle'] }}</h1>
            <p>{{ $page['heroText'] }}</p>
        </div>
        @isset($page['heroImage'])
            <div class="hero-image">
                <img src="{{ asset($page['heroImage']) }}" alt="{{ $page['heroImageAlt'] ?? $page['title'] }}">
            </div>
        @endisset
    </section>

    {{-- ===== INTRO ===== --}}
    @isset($page['intro'])
        <section class="who-section fade-section">
            <div class="who-container">
                <div class="who-text-block">
                    <p class="eyebrow">{{ $page['intro']['eyebrow'] }}</p>
                    <h2 class="section-title">{{ $page['intro']['title'] }} <span>{{ $page['intro']['titleSpan'] }}</span></h2>
                    <p class="who-text">{{ $page['intro']['text'] }}</p>
                    @isset($page['intro']['ctaText'])
                        <a href="{{ $page['intro']['ctaUrl'] ?? '#' }}" class="about-btn">{{ $page['intro']['ctaText'] }}</a>
                    @endisset
                </div>
                @isset($page['intro']['image'])
                    <div class="who-image">
                        <img src="{{ asset($page['intro']['image']) }}" alt="{{ $page['intro']['imageAlt'] ?? '' }}">
                    </div>
                @endisset
            </div>
        </section>
    @endisset

    {{-- ===== OPTION CARDS (e.g. Desktop / WebTrader / Mobile) ===== --}}
    @isset($page['cards'])
        <section class="highlights-section">
            <div class="container">
                <p class="eyebrow eyebrow--center">{{ $page['cardsEyebrow'] ?? '' }}</p>
                <h2 style="text-align:center">{{ $page['cardsTitle'] ?? '' }}</h2>
                <p class="highlights-lead" style="text-align:center">{{ $page['cardsLead'] ?? '' }}</p>

                <div class="pairs-grid">
                    @foreach ($page['cards'] as $card)
                        <article class="pairs-card fade-section">
                            <img src="{{ asset($card['image']) }}" alt="{{ $card['alt'] }}">
                            <div class="pairs-card-body">
                                <p class="eyebrow">{{ $card['eyebrow'] }}</p>
                                <h3>{{ $card['title'] }}</h3>
                                <p>{{ $card['text'] }}</p>
                                <a href="{{ $card['btnUrl'] ?? 'https://trade.fundamentalcapitalltd.com/login' }}" class="about-btn">{{ $card['btnText'] }}</a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endisset

    {{-- ===== HIGHLIGHTS GRID (4-up feature list) ===== --}}
    @isset($page['highlights'])
        <section class="highlights fade-section">
            <div class="container">
                <p class="eyebrow eyebrow--center">{{ $page['highlightsEyebrow'] ?? 'Why Trade With Us' }}</p>
                <h2>{{ $page['highlightsTitle'] ?? 'Built for Performance' }}</h2>

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

    {{-- ===== CLOSING CTA ===== --}}
    @isset($page['cta'])
        <section class="content-cta fade-section">
            <div class="container">
                <h2>{{ $page['cta']['title'] }}</h2>
                <p>{{ $page['cta']['text'] }}</p>
                <a href="{{ $page['cta']['btnUrl'] ?? route('account.open') }}" class="content-cta__btn">
                    {{ $page['cta']['btnText'] ?? 'Open an Account' }}
                </a>
            </div>
        </section>
    @endisset

</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/platform.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/products.js') }}"></script>
@endpush