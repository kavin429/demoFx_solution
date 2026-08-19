@extends('layouts.app')

@section('title', 'Platform - DemoFX Solution')

@section('content')
<section class="platform-layout">
    <div class="container platform-layout-grid">

      <div class="platform-left">
        <section class="platform-section">
          <h1 class="page-title">DemoFX Solution Financial Services Platform</h1>
          <p class="page-desc">
              The DemoFX Solution platform is designed to provide efficient and secure
  access to professional accounting, bookkeeping, tax consultancy, and financial
  management services. Our system enables clients to manage financial records,
  monitor reports, and access essential documentation through a user-friendly interface.
  <br/><br/>
  Built for individuals and businesses alike, the platform ensures accuracy,
  confidentiality, and compliance with UK regulations. With secure data protection,
  streamlined reporting tools, and reliable support, we help our clients make
  informed financial decisions and maintain long-term financial stability.
          </p>
        </section>
      </div>

      <div class="platform-right">
        <section class="cta padding-top padding-bottom bg-color">
          <div class="cta__wrapper">
            <div class="cta__newsletter justify-content-center">
              <div class="cta__newsletter-inner aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                <div class="cta__subscribe">
                  <h2><span>Download</span> Our Platform</h2>

                  <div class="store-list">
                    <div class="store store-row">
                      <a href="{{ url('/download/android') }}">
                        <img src="{{ asset('pics/googlePlay.png') }}" alt="Download for Android">
                      </a>
                    </div>

                    <div class="store store-row">
                      <a href="{{ url('/download/windows') }}">
                        <img src="{{ asset('pics/windowsStore.png') }}" alt="Download for Windows">
                      </a>
                    </div>

                    <div class="store store-row">
                      <a href="{{ url('/download/ios') }}">
                        <img src="{{ asset('pics/appStore.png') }}" alt="Download for iOS">
                      </a>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

    </div>
  </section>
@endsection

@push('scripts')
<script src="{{ asset('js/platform.js') }}"></script>
@endpush
