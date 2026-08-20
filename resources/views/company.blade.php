@extends('layouts.app')

@section('title', 'Company - DemoFX Solution')

@section('content')

    {{-- ===== HERO ===== --}}
    <section class="hero">
        <div class="hero-content">
            <h1><span>Who</span> We Are</h1>
            <p>DemoFX Solution is a demo trading platform built to help traders explore forex, metals, indices, and more in a risk-free environment — est. 2026, Dubai, United Arab Emirates.</p>
            <div class="hero-buttons">
                <a href="{{ route('contact') }}">Get in Touch</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="{{ asset('pics/company-hero.png') }}" alt="DemoFX Solution Team">
        </div>
    </section>

    {{-- ===== WHY DEMOFX SOLUTION ===== --}}
    <section class="who-section" id="why-demofx">
        <div class="who-container">
            <div class="who-text-block">
                <h2 class="section-title">Why <span>DemoFX Solution</span></h2>
                <p class="who-text">
                    We built DemoFX Solution to give traders a realistic, pressure-free space to learn the markets.
                    From transparent pricing to fast execution, everything is designed around trust and clarity.
                </p>
                <p class="who-text">
                    Whether you're just starting out or refining an existing strategy, our platform gives you the
                    tools to practice with confidence before trading live.
                </p>

                <div class="who-cards">
                    <div class="who-card">
                        <i class="ph ph-shield-check who-icon"></i>
                        <h3>Trusted & Transparent</h3>
                        <p>No hidden fees, no surprises — just clear, honest pricing.</p>
                    </div>
                    <div class="who-card">
                        <i class="ph ph-lightning who-icon"></i>
                        <h3>Fast Execution</h3>
                        <p>Low-latency order execution across all supported instruments.</p>
                    </div>
                    <div class="who-card">
                        <i class="ph ph-headset who-icon"></i>
                        <h3>Real Support</h3>
                        <p>A responsive team ready to help whenever you need it.</p>
                    </div>
                    <div class="who-card">
                        <i class="ph ph-graduation-cap who-icon"></i>
                        <h3>Built for Learning</h3>
                        <p>Resources and tools designed to help you grow as a trader.</p>
                    </div>
                </div>
            </div>

            <div class="who-image">
                <img src="{{ asset('pics/company-about.png') }}" alt="About DemoFX Solution">
            </div>
        </div>
    </section>

    {{-- ===== REVIEWS / HIGHLIGHTS ===== --}}
    <section class="highlights" id="reviews">
        <div class="container">
            <h2>Company <span>Highlights</span></h2>
            <div class="grid-4">
                <div class="card">
                    <i class="ph ph-star"></i>
                    <h3>4.8/5</h3>
                    <span>Average client rating</span>
                </div>
                <div class="card">
                    <i class="ph ph-users"></i>
                    <h3>50K+</h3>
                    <span>Registered demo accounts</span>
                </div>
                <div class="card">
                    <i class="ph ph-globe"></i>
                    <h3>120+</h3>
                    <span>Countries reached</span>
                </div>
                <div class="card">
                    <i class="ph ph-calendar"></i>
                    <h3>Est. 2026</h3>
                    <span>Founded in Dubai, UAE</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== ROW CARDS: BLOG / MARKET UPDATES / FORECASTS ===== --}}
    <section class="highlights-section">
        <div class="container">
            <div class="grid-cards">

                <div class="row-card show" id="blog">
                    <h3>DemoFX Solution Blog</h3>
                    <div class="card-row">
                        <img src="{{ asset('pics/company-blog.png') }}" alt="DemoFX Solution Blog">
                        <div class="card-copy">
                            <p>Stay up to date with trading insights, platform updates, and tips from our team — written to help you trade smarter, not just harder.</p>
                        </div>
                    </div>
                </div>

                <div class="row-card show" id="market-updates">
                    <h3>Market Updates</h3>
                    <div class="card-row reverse">
                        <img src="{{ asset('pics/company-market-updates.png') }}" alt="Market Updates">
                        <div class="card-copy">
                            <p>Get daily and weekly breakdowns of what's moving the forex, metals, and indices markets — so you're never trading blind.</p>
                        </div>
                    </div>
                </div>

                <div class="row-card show" id="forecasts">
                    <h3>Forecast & Predictions</h3>
                    <div class="card-row">
                        <img src="{{ asset('pics/company-forecasts.png') }}" alt="Forecast & Predictions">
                        <div class="card-copy">
                            <p>Our analysts share short and medium-term outlooks across major instruments, helping you plan ahead with more confidence.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ===== FAQ ===== --}}
    <section id="faqs">
        <h2>Frequently Asked <span>Questions</span></h2>
        <div class="faq-container">

            <div class="faq-item">
                <button type="button" class="faq-question">
                    Is DemoFX Solution free to use?
                    <i class="ph ph-plus faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, creating a demo account and exploring the platform is completely free.</p>
                </div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question">
                    What can I trade on DemoFX Solution?
                    <i class="ph ph-plus faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Forex pairs, metals, indices, crypto currencies, and commodities — all in one place.</p>
                </div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question">
                    Where is DemoFX Solution based?
                    <i class="ph ph-plus faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>We're headquartered in Dubai, United Arab Emirates, established in 2026.</p>
                </div>
            </div>

        </div>
    </section>

@endsection