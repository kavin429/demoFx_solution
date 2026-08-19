@extends('layouts.app')

@section('title', 'Forex Trading - DemoFX Solution')

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
      <h1>Forex <span>Trading</span></h1>
      <p>Trade the world's largest financial market. Major, minor, and exotic currency pairs with tight spreads.</p>
    </div>
  </section>

  <!-- ===== INTRO / WHY TRADE FOREX ===== -->
  <section class="forex-intro fade-section">
    <div class="container">
      <p class="eyebrow">Global Currency Market</p>
      <h2>Why Trade Forex with <span>DemoFX Solution</span></h2>
      <p class="forex-intro__lead">
        The foreign exchange market is the largest and most liquid financial market in the world,
        with over $6.6 trillion traded daily. From major pairs that move the global economy to exotic
        pairs offering unique opportunities, we provide competitive spreads, fast execution, and
        professional-grade tools.
      </p>
    </div>
  </section>

    <!-- ===== MAJOR / MINOR / EXOTIC / LEVERAGE — COLUMN CARDS ===== -->
  <section class="highlights-section">
    <div class="container">
      <div class="pairs-grid">

        <article class="pairs-card fade-section">
          <img src="{{ asset('pics/platform/major-pairs.png') }}" alt="Major currency pairs">
          <div class="pairs-card-body">
            <p class="eyebrow">Largest Market</p>
            <h3>Major Pairs</h3>
            <p>
              Major currency pairs pair the US dollar with other strong currencies: EUR/USD, GBP/USD,
              USD/JPY, USD/CHF, AUD/USD, NZD/USD and USD/CAD. They offer the tightest spreads and
              deepest liquidity, making them ideal for traders of all experience levels.
            </p>
            <a href="{{ route('home') }}#pricing" class="about-btn">Trade Majors</a>
          </div>
        </article>

        <article class="pairs-card fade-section">
          <img src="{{ asset('pics/platform/minor-pairs.png') }}" alt="Minor currency pairs">
          <div class="pairs-card-body">
            <p class="eyebrow">Cross Pairs</p>
            <h3>Minor Pairs</h3>
            <p>
              Minor (or cross) currency pairs don't include the US dollar. Popular crosses include
              EUR/GBP, EUR/JPY, GBP/JPY, EUR/AUD and AUD/JPY. These pairs offer excellent trading
              opportunities with slightly wider spreads than the majors.
            </p>
            <a href="{{ route('home') }}#pricing" class="about-btn">Trade Minors</a>
          </div>
        </article>

        <article class="pairs-card fade-section">
          <img src="{{ asset('pics/platform/exotic-pairs.png') }}" alt="Exotic currency pairs">
          <div class="pairs-card-body">
            <p class="eyebrow">Emerging Markets</p>
            <h3>Exotic Pairs</h3>
            <p>
              Exotic pairs pair a major currency with the currency of an emerging economy: USD/TRY,
              USD/ZAR, USD/MXN, USD/SGD and EUR/TRY. They feature higher volatility and wider spreads,
              offering significant profit potential for experienced traders.
            </p>
            <a href="{{ route('home') }}#pricing" class="about-btn">Trade Exotics</a>
          </div>
        </article>

        <article class="pairs-card fade-section">
          <img src="{{ asset('pics/platform/leverage.png') }}" alt="Flexible leverage">
          <div class="pairs-card-body">
            <p class="eyebrow">Leverage &amp; Margin</p>
            <h3>Flexible Leverage</h3>
            <p>
              Forex trading with leverage allows you to control larger positions with a smaller
              capital outlay. We offer flexible leverage up to 1:500, enabling you to tailor your
              risk exposure to match your trading strategy and experience level.
            </p>
            <a href="{{ route('home') }}#pricing" class="about-btn">Start Trading</a>
          </div>
        </article>

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
          <span>Raw spreads from 0.0 pips on major currency pairs.</span>
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
          <span>Trade forex around the clock across global trading sessions.</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== CTA ===== -->
  <section class="content-cta fade-section">
    <div class="container">
      <h2>Start Trading Forex <span>Today</span></h2>
      <p>Open an account and access the world's largest financial market.</p>
      <a href="{{ route('home') }}#pricing" class="content-cta__btn">Open an Account</a>
    </div>
  </section>

  <!-- ===== PRODUCT DESCRIPTION ===== -->
  <section class="product-description fade-section">
    <div class="container">
      <h2>FOREX</h2>
      <p>
        Compared to other financial securities, the liquidity in forex is relatively high.
        As currencies have developed to be the medium of exchange, users require foreign currency to travel,
        purchase products in the foreign country, and run a business overseas. With the increasing demand and supplies,
        investors can enjoy competitive spreads. Unlike equity markets, the forex market is carried out 24 hours daily,
        from Sunday night until Friday evening. It allows the investor to be flexible with their trading styles. Traders
        can use their deposited funds as their collateral, also known as a margin, to borrow up to 1000 times of their capital.
        By leveraging, traders can increase their position size, and subsequently to achieve a larger profit.
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