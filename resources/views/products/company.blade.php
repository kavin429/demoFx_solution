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
    <section class="hero">
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

    {{-- ===== ARTICLE LIST (Blog / Market Updates / Forecasts) ===== --}}
    @isset($page['articles'])
        <section class="highlights-section">
            <div class="container">
                <div class="grid-cards">
                    @foreach ($page['articles'] as $item)
                        <article class="row-card fade-section">
                            <h3>{{ $item['title'] }}</h3>
                            <div class="card-copy">
                                <p>{{ $item['text'] ?? $item['excerpt'] ?? '' }}</p>
                                @isset($item['date'])
                                    <span class="location">{{ $item['date'] }}</span>
                                @endisset
                                @isset($item['url'])
                                    <a href="{{ $item['url'] }}" class="arrow-link">Read more</a>
                                @endisset
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
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
    @isset($page['faqItems'])
        <script>
            document.querySelectorAll('.faq-item').forEach(function (item) {
                item.querySelector('.faq-question').addEventListener('click', function () {
                    item.classList.toggle('active');
                });
            });
        </script>
    @endisset
@endpush