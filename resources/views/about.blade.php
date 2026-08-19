@extends('layouts.app')

@section('title', 'About - DemoFX Solution')

@section('content')
<!-- ===== HERO SECTION ===== -->
<section class="hero">
    <video autoplay muted loop playsinline class="hero-video">
      <source src="pics/AboutVideo.mp4" type="video/mp4">
    </video>
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <h1> <span>DemoFX Solution</span></h1>
      <p>One of the leading financial venture firms revolutionizing online forex trading.</p>
    </div>
  </section>

<!-- ===== WHO WE ARE SECTION ===== -->
<section class="who-section" id="who-we-are">
  <div class="who-container">
    <!-- Left Side Text -->
    <div class="who-content">
      <h1 class="section-title">Who We Are</h1>

<p class="who-text">
  DemoFX Solution is a digital trading platform developed and operated under 
  DemoFX Solution LIMITED, a United Kingdom registered private limited company, 
  incorporated on 11 September 2017 and officially registered with Companies House 
  under company number 10956602.
</p>

<p class="who-text">
  DemoFX Solution LIMITED provides a strong foundation of financial expertise, with 
  core business activities including accounting and auditing services, bookkeeping, 
  tax consultancy, and financial management solutions. Building on this experience, 
  DemoFX Solution delivers advanced online trading services to clients worldwide.
</p>

      <!-- Cards -->
      <div class="who-cards">
        <div class="who-card">
           <i class="ti ti-building-bank who-icon"></i>
          <h3>Our Mission</h3>
          <p>
            To deliver reliable accounting, tax consultancy, and financial 
      management services with integrity, precision, and full regulatory compliance.
          </p>
        </div>
        <div class="who-card">
           <i class="ti ti-shield-check who-icon"></i>
          <h3>Our Commitment</h3>
          <p>
            We are committed to supporting individuals and businesses with 
      transparent financial solutions, professional guidance, and 
      long-term strategic growth planning.
          </p>
        </div>
      </div>
    </div>

    <!-- Right Side Image -->
    <div class="who-image">
      <img src="{{ asset('pics/about1.png') }}" alt="About Tradefxm">
    </div>
  </div>
</section>


<!-- ===== HIGHLIGHTS ===== -->
<section class="highlights" id="highlights">
  <div class="container grid-4">
    <div class="card">
      <i class="fas fa-bolt"></i>
      <h3>1m ToB</h3>
      <span>on average across FX instruments</span>
    </div>
    <div class="card">
      <i class="fas fa-chart-line"></i>
      <h3>100 Lots</h3>
      <span>per click trading</span>
    </div>
    <div class="card">
      <i class="fas fa-balance-scale"></i>
      <h3>BBO Pricing</h3>
      <span>Best Bid-Offer</span>
    </div>
    <div class="card">
      <i class="fas fa-server"></i>
      <h3>Free VPS</h3>
      <span>Elite & Pro Accounts</span>
    </div>
    <div class="card">
      <i class="fas fa-shield-alt"></i>
      <h3>Segregated</h3>
      <span>Client accounts</span>
    </div>
  </div>
</section>



<!-- ===== HIGHLIGHT CARDS ===== -->
<section class="highlights-section">
  <div class="container grid-cards">

    <!-- Card 1 -->
    <div class="card fade-in row-card">
      <h3>Financial Products</h3>
      <div class="card-row">
        <img src="{{ asset('pics/a33.png') }}" alt="Financial Products">
        <div class="card-copy">
          <p>
            We sincerely understand the importance of diversification. To protect our customers from investment risks,
            we offer seven types of trading products with over 200+ individual securities to trade with.
            Furthermore, we have integrated Cryptocurrency exchange to our platform.
            Traders can enjoy trading future generation currencies, along with classical products.
          </p>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="card fade-in row-card">
      <h3>Customer Satisfaction</h3>
      <div class="card-row reverse">
        <img src="{{ asset('pics/a55.png') }}" alt="Customer Satisfaction">
        <div class="card-copy">
          <p>
            Earning loyalty and outstanding customer satisfaction is our top priority.
            We have secured a customer service team that is available 24 hours during Monday to Friday,
            in case you need any assistance. To improve and enhance our client-facing services, we always welcome
            incoming opinions and suggestions from you.ve our services.
          </p>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="card fade-in row-card">
      <h3>Our Professional Team</h3>
      <div class="card-row">
        <img src="{{ asset('pics/a4.png') }}" alt="Our Team">
        <div class="card-copy">
          <p>
            A diverse group of finance and investment professionals committed to helping
            our clients achieve success in forex trading.
            We are a collection of professionals from the finance and investment sectors.
            We are knowledgeable in all the intricacies of forex trading and we are happy to assist
            all stakeholders to guarantee the best experiences.
          </p>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="card fade-in row-card">
      <h3>Technology</h3>
      <div class="card-row reverse">
        <img src="{{ asset('pics/a3.png') }}" alt="Technology">
        <div class="card-copy">
          <p>
            We are a forward-thinking forex brokerage that aims to revolutionize the forex industry.
            We have the finest technology setup for our clients to trade safely and successfully.
            Our payment system is conducted with reputable third parties, ensuring high-level
            security when we handle your money.
            We are constantly striving to explore better solutions that we can add to our business
            that will benefit you, as well as our company.
          </p>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/about.js') }}"></script>
@endpush
