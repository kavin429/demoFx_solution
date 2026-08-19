@extends('layouts.app')

@section('title', 'Crypto Trading - DemoFX Solution')

@section('content')
<!-- ===== PAGE WRAPPER CARD ===== -->
<div class="page-card">

  <!-- ===== HERO SECTION ===== -->
  <section class="hero">
    <video autoplay muted loop playsinline class="hero-video">
      <source src="{{ asset('pics/Crypto1.mp4') }}" type="video/mp4">
    </video>
    <div class="overlay"></div>
     <div class="hero-content">
      <h1>Crypto Currencies</h1>
      <p>Unlock the world's largest financial market</p>
    </div>
  </section>

  <!-- ===== PRODUCT DESCRIPTION ===== -->
  <section class="product-description fade-section">
    <div class="container">
      <h2>CRYPTO CURRENCIES</h2>
      <p>
       With the increasing trade volumes in cryptocurrency, 
       risk-lover traders can enjoy high volatility price 
       movements. Furthermore, as cryptocurrency is not affected 
       by country's economy or geopolitical influences, it can 
       be a feasible instrument for diversification and hedging. 
       With the DemoFX Solution's VertexFX, clients can trade bitcoins 
       against two major currencies, Euro and US dollar.
    </p>
    </div>
  </section>

</div>
@endsection

@push('scripts')
<script src="{{ asset('js/products.js') }}"></script>
@endpush
