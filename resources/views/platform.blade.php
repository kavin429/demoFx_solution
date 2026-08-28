@extends('layouts.app')

@section('title', 'Platform - Fundamental Capital Ltd')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="{{ asset('css/platform.css') }}">
@endpush

@section('content')

{{-- HERO BANNER --}}
<section class="platform-banner">
    <div class="platform-banner__inner">
        <span class="platform-banner__tag">Financial Services Platform</span>
        <h1 class="platform-banner__title">Fundamental Capital Ltd</h1>
        <p class="platform-banner__desc">
            Secure, easy access to professional accounting, bookkeeping, tax consultancy,
            and financial management — built for individuals and businesses, fully compliant
            with UK regulations.
        </p>
        <a href="https://trade.fundamentalcapitalltd.com/login" target="_blank" rel="noopener" class="btn btn-primary">Get Started</a>
    </div>
</section>

{{-- SYNC / ONE ACCOUNT SECTION --}}
<section class="platform-sync padding-top padding-bottom">
    <div class="container platform-sync__wrapper">
        <div class="platform-sync__content" data-aos="fade-up" data-aos-duration="1000">
            <span class="section-tag">One Account, Every Device</span>
            <h2 class="section-title">Stay Connected, Wherever You Work</h2>
            <p class="section-desc">
                Start reviewing your accounts on desktop, check in from your browser during
                the day, and approve a report from your phone in the evening — your data,
                documents, and dashboard stay perfectly synced across every device.
            </p>
            <a href="https://trade.fundamentalcapitalltd.com/login" target="_blank" rel="noopener" class="btn btn-primary">Launch Platform</a>
        </div>
    </div>
</section>

{{-- CHOOSE YOUR PLATFORM --}}
<section class="platform-options padding-top padding-bottom bg-color">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up" data-aos-duration="1000">
            <span class="section-tag">Choose Your Platform</span>
            <h2 class="section-title">Access Fundamental Capital Your Way</h2>
            <p class="section-desc">Each version is built around how and where you like to work.</p>
        </div>

        <div class="platform-options__grid">

            <div class="platform-card" data-aos="fade-up" data-aos-duration="1000">
                <i class="ph ph-desktop platform-card__icon"></i>
                <span class="platform-card__label">Desktop</span>
                <h3 class="platform-card__title">Desktop Application</h3>
                <p class="platform-card__desc">
                    A complete workspace with advanced reporting tools, document management
                    and offline access for accountants and finance teams who need full control.
                </p>
                <a href="https://trade.fundamentalcapitalltd.com/login" target="_blank" rel="noopener" class="btn btn-outline">Download</a>
            </div>

            <div class="platform-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <i class="ph ph-globe platform-card__icon"></i>
                <span class="platform-card__label">Web Portal</span>
                <h3 class="platform-card__title">Client Web Portal</h3>
                <p class="platform-card__desc">
                    Log in instantly from any browser — nothing to install. View statements,
                    upload documents and message your accountant in a clean, fast interface.
                </p>
                <a href="https://trade.fundamentalcapitalltd.com/login" target="_blank" rel="noopener" class="btn btn-outline">Open Web Portal</a>
            </div>

            <div class="platform-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <i class="ph ph-device-mobile platform-card__icon"></i>
                <span class="platform-card__label">Mobile</span>
                <h3 class="platform-card__title">Mobile App</h3>
                <p class="platform-card__desc">
                    Manage your finances on the move with real-time notifications, secure
                    biometric login, and instant access to your reports on iOS and Android.
                </p>
                <a href="https://trade.fundamentalcapitalltd.com/login" target="_blank" rel="noopener" class="btn btn-outline">Get the App</a>
            </div>

        </div>
    </div>
</section>

{{-- FEATURES / BUILT FOR --}}
<section class="platform-features padding-top padding-bottom">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up" data-aos-duration="1000">
            <span class="section-tag">Built for Reliability</span>
            <h2 class="section-title">Why Clients Trust Our Platform</h2>
        </div>

        <div class="platform-features__grid">

            <div class="feature-item" data-aos="fade-up" data-aos-duration="1000">
                <i class="ph ph-lightning feature-item__icon"></i>
                <h3 class="feature-item__title">Fast Processing</h3>
                <p class="feature-item__desc">Quick, reliable handling of your records on secure, institutional-grade infrastructure.</p>
            </div>

            <div class="feature-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <i class="ph ph-clock-countdown feature-item__icon"></i>
                <h3 class="feature-item__title">Automated Reporting</h3>
                <p class="feature-item__desc">Generate recurring statements and tax summaries automatically, with full audit trails.</p>
            </div>

            <div class="feature-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <i class="ph ph-chart-line-up feature-item__icon"></i>
                <h3 class="feature-item__title">Financial Insights</h3>
                <p class="feature-item__desc">Clear dashboards and analysis tools that help you track performance at a glance.</p>
            </div>

            <div class="feature-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <i class="ph ph-shield-check feature-item__icon"></i>
                <h3 class="feature-item__title">Secure by Design</h3>
                <p class="feature-item__desc">End-to-end encryption and robust account protection across every device you use.</p>
            </div>

        </div>
    </div>
</section>

{{-- FINAL CTA --}}
<section class="platform-final-cta padding-top padding-bottom bg-color">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="section-title">Your Finances, On Every Screen</h2>
        <p class="section-desc">Open an account and manage your finances seamlessly across desktop, web and mobile.</p>
        <a href="https://trade.fundamentalcapitalltd.com/login" target="_blank" rel="noopener" class="btn btn-primary">Open an Account</a>
    </div>
</section>

@endsection

@push('scripts')
<script src="{{ asset('js/platform.js') }}"></script>
@endpush