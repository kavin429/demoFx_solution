@extends('layouts.app')

@section('title', $product['title'])

@section('content')
<div class="page-card">

  <section class="hero" style="background-image: url('{{ asset($product['heroImage']) }}')">
    <div class="overlay"></div>
    <div class="hero-content">
      <h1>{{ $product['heroTitle'] }} <span>{{ $product['heroTitleSpan'] }}</span></h1>
      <p>{{ $product['heroText'] }}</p>
    </div>
  </section>

  <section class="forex-intro fade-section">
    <div class="container">
      <p class="eyebrow">{{ $product['introEyebrow'] }}</p>
      <h2>{{ $product['introTitle'] }} <span>{{ $product['introTitleSpan'] }}</span></h2>
      <p class="forex-intro__lead">{{ $product['introLead'] }}</p>
    </div>
  </section>

  <section class="highlights-section">
    <div class="container">
      <div class="pairs-grid">
        @foreach ($product['cards'] as $card)
          <article class="pairs-card fade-section">
            <img src="{{ asset($card['image']) }}" alt="{{ $card['alt'] }}">
            <div class="pairs-card-body">
              <p class="eyebrow">{{ $card['eyebrow'] }}</p>
              <h3>{{ $card['title'] }}</h3>
              <p>{{ $card['text'] }}</p>
              <a href="https://trade.fundamentalcapitalltd.com/login" class="about-btn">{{ $card['btnText'] }}</a>
            </div>
          </article>
        @endforeach
      </div>
    </div>
  </section>

  <section class="highlights fade-section">
    <div class="container">
      <p class="eyebrow eyebrow--center">Why Trade With Us</p>
      <h2>Superior Trading Conditions</h2>
      <p class="highlights-lead">Everything you need to trade the markets with an edge.</p>

      <div class="grid-4">
        @foreach ($product['highlights'] as $item)
          <div class="card">
            <i class="ph {{ $item['icon'] }}"></i>
            <h3>{{ $item['title'] }}</h3>
            <span>{{ $item['text'] }}</span>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="content-cta fade-section">
    <div class="container">
      <h2>{{ $product['ctaTitle'] }} <span>{{ $product['ctaTitleSpan'] }}</span></h2>
      <p>{{ $product['ctaText'] }}</p>
      <a href="https://trade.fundamentalcapitalltd.com/login" class="content-cta__btn">Open an Account</a>
    </div>
  </section>

 <section class="product-description fade-section">
  <div class="container">
    <div class="product-description-inner">
      <h2>{{ $product['descriptionTitle'] }}</h2>
      <p>{{ $product['descriptionText'] }}</p>
    </div>
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