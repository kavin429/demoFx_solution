@extends('layouts.app')

@section('title', 'Metals Trading - DemoFX Solution')

@section('content')
<!-- ===== PAGE WRAPPER CARD ===== -->
<div class="page-card">

  <!-- ===== HERO SECTION ===== -->
  <section class="hero">
    <video autoplay muted loop playsinline class="hero-video">
      <source src="{{ asset('pics/Metals1.mp4') }}" type="video/mp4">
    </video>
    <div class="overlay"></div>
    <div class="hero-content">
      <h1>Metals <span>Trading</span></h1>
      <p>Trade precious metals as safe-haven assets to diversify your portfolio and hedge against volatility.</p>
    </div>
  </section>

  <!-- ===== INTRO / WHY TRADE METALS ===== -->
  <section class="page-intro fade-section">
    <div class="container">
      <p class="eyebrow">Safe-Haven Investing</p>
      <h2>Protect and Grow with <span>Precious Metals</span></h2>
      <p class="page-intro__lead">
        Precious metals have been a store of value for thousands of years. Whether you are looking to
        hedge against inflation, diversify your portfolio, or speculate on price movements, trading gold,
        silver, platinum and palladium offers unique opportunities in all market conditions.
      </p>
    </div>
  </section>

  <!-- ===== GOLD / SILVER / PLATINUM / PALLADIUM ===== -->
  <section class="highlights-section">
    <div class="container">
      <div class="grid-cards">

        <!-- ===== GOLD ===== -->
        <div class="row-card fade-section">
          <div class="card-row">
            <img src="{{ asset('pics/platform/gold.png') }}" alt="Gold trading">
            <div class="card-copy">
              <p class="eyebrow">Yellow Metal</p>
              <h3>Gold</h3>
              <p>
                The most widely traded precious metal. Gold is viewed as a safe-haven asset that
                retains value during economic uncertainty, geopolitical tension, and market volatility.
                Trade spot gold (XAU/USD) with competitive spreads and deep liquidity.
              </p>
              <a href="{{ route('home') }}#pricing" class="about-btn">Trade Gold</a>
            </div>
          </div>
        </div>

        <!-- ===== SILVER ===== -->
        <div class="row-card fade-section">
          <div class="card-row reverse">
            <img src="{{ asset('pics/platform/silver.png') }}" alt="Silver trading">
            <div class="card-copy">
              <p class="eyebrow">White Metal</p>
              <h3>Silver</h3>
              <p>
                Silver is both a precious metal and an industrial commodity, prized for its use in
                electronics, solar panels, and jewellery. Its price tends to be more volatile than
                gold, offering active traders greater short-term opportunities.
              </p>
              <a href="{{ route('home') }}#pricing" class="about-btn">Trade Silver</a>
            </div>
          </div>
        </div>

        <!-- ===== PLATINUM ===== -->
        <div class="row-card fade-section">
          <div class="card-row">
            <img src="{{ asset('pics/platform/platinum.png') }}" alt="Platinum trading">
            <div class="card-copy">
              <p class="eyebrow">Industrial Metal</p>
              <h3>Platinum</h3>
              <p>
                Platinum is one of the rarest precious metals, valued for its use in catalytic
                converters, jewellery, and investment. Its supply constraints and growing industrial
                demand make it an appealing asset for diversification.
              </p>
              <a href="{{ route('home') }}#pricing" class="about-btn">Trade Platinum</a>
            </div>
          </div>
        </div>

        <!-- ===== PALLADIUM ===== -->
        <div class="row-card fade-section">
          <div class="card-row reverse">
            <img src="{{ asset('pics/platform/palladium.png') }}" alt="Palladium trading">
            <div class="card-copy">
              <p class="eyebrow">Auto-Catalyst Metal</p>
              <h3>Palladium</h3>
              <p>
                Palladium has seen surging demand due to its essential role in automotive catalytic
                converters. With tight supply fundamentals and increasing industrial use, palladium
                offers distinctive trading opportunities for the discerning investor.
              </p>
              <a href="{{ route('home') }}#pricing" class="about-btn">Trade Palladium</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===== SUPERIOR TRADING CONDITIONS ===== -->
  <section class="highlights fade-section">
    <div class="container">
      <p class="eyebrow eyebrow--center">Why Trade With Us</p>
      <h2>Superior Trading Conditions</h2>
      <p class="highlights-lead">Everything you need to trade the markets with an edge.</p>

      <div class="grid-4">
        <div class="card">
          <i class="ph ph-chart-line-up"></i>
          <h3>Tight Spreads</h3>
          <span>Raw spreads from 0.0 pips on our most popular instruments.</span>
        </div>
        <div class="card">
          <i class="ph ph-lightning"></i>
          <h3>Fast Execution</h3>
          <span>Low-latency order fills with no dealing-desk intervention.</span>
        </div>
        <div class="card">
          <i class="ph ph-gauge"></i>
          <h3>High Leverage</h3>
          <span>Flexible leverage up to 1:500 to suit your strategy.</span>
        </div>
        <div class="card">
          <i class="ph ph-clock"></i>
          <h3>24/5 Markets</h3>
          <span>Trade around the clock across global trading sessions.</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== CTA ===== -->
  <section class="content-cta fade-section">
    <div class="container">
      <h2>Start Trading Metals <span>Today</span></h2>
      <p>Open an account and access gold, silver, platinum and palladium markets.</p>
      <a href="{{ route('home') }}#pricing" class="content-cta__btn">Open an Account</a>
    </div>
  </section>

  <!-- ===== PRODUCT DESCRIPTION ===== -->
  <section class="product-description fade-section">
    <div class="container">
      <h2>METALS</h2>
      <p>
        Precious metals trading gives investors exposure to some of the world's oldest and most trusted
        stores of value. Unlike currencies, metals are physical commodities whose prices are driven by
        supply constraints, industrial demand, and their role as a hedge during periods of inflation or
        market stress. Gold and silver have traded as monetary assets for millennia, while platinum and
        palladium carry additional demand from the automotive and industrial sectors. Metals markets are
        available to trade nearly around the clock, and with leverage, traders can gain amplified exposure
        to price movements without committing the full capital required to own the physical metal outright.
      </p>
    </div>
  </section>

</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/platform.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/products.js') }}"></script>
@endpush