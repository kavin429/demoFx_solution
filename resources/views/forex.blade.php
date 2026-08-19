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
      <h1>Forex Trading</h1>
      <p>Unlock the world's largest financial market</p>
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

@push('scripts')
<script src="{{ asset('js/products.js') }}"></script>
@endpush
