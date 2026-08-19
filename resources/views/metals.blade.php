@extends('layouts.app')

@section('title', 'Metals Trading - DemoFX Solution')

@section('content')
<!-- ===== PAGE WRAPPER CARD ===== -->
<div class="page-card">

  <!-- ===== HERO SECTION ===== -->
  <section class="hero">
    <video autoplay muted loop playsinline class="hero-video">
      <source src="{{ asset('pics/Forex1.mp4') }}" type="video/mp4">
    </video>
    <div class="overlay"></div>
    <div class="hero-content">
      <h1>Metals Trading</h1>
      <p>Unlock the world's largest financial market</p>
    </div>
  </section>

  <!-- ===== PRODUCT DESCRIPTION ===== -->
  <section class="product-description fade-section">
    <div class="container">
      <h2>METALS</h2>
      <p>
        Precious metals are a financial instrument that is widely 
        used to diversify the portfolios and to hedge against economic 
        downturns or inflations. Gold has an intrinsic value that is hardly 
        affected by the devaluation of the economy, hence it is usually known 
        as the 'safe haven'. When there is an economic recession or political 
        tension, there is a tendency to go long on gold. We provide four different types of metals 
        (Silver, Gold, Palladium, and Platinum) for clients to trade.
    </p>
    </div>
  </section>

</div>
@endsection

@push('scripts')
<script src="{{ asset('js/products.js') }}"></script>
@endpush
