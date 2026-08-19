@extends('layouts.app')

@section('title', 'Indices Trading - DemoFX Solution')

@section('content')
<!-- ===== PAGE WRAPPER CARD ===== -->
<div class="page-card">

  <!-- ===== HERO SECTION ===== -->
  <section class="hero">
    <video autoplay muted loop playsinline class="hero-video">
      <source src="{{ asset('pics/Indices1.mp4') }}" type="video/mp4">
    </video>
    <div class="overlay"></div>
    <div class="hero-content">
      <h1>Indices Trading</h1>
      <p>Unlock the world's largest financial market</p>
    </div>
  </section>

  <!-- ===== PRODUCT DESCRIPTION ===== -->
  <section class="product-description fade-section">
    <div class="container">
      <h2>INDICES</h2>
      <p>
       More than 20 Major Indices. DemoFX Solution provides exposure 
       to the major stock indices across the world through index 
       CFDs, at competitive leverage on world-class trading platforms. 
       Online CFD indices trading is a great way to participate in 
       the top global stock markets such as the NASDAQ, DAX and the 
       FTSE and trade with some of the best possible spreads An index is 
       the easiest way to track the overall performance of the economy. 
       It provides a general insight whether the economy is in a boom or in a recession.
    </p>
    </div>
  </section>

</div>
@endsection

@push('scripts')
<script src="{{ asset('js/products.js') }}"></script>
@endpush
