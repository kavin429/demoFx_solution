@extends('layouts.app')

@section('title', 'Contact - Fundamental Capital Ltd')

@section('content')
<!-- ======= Contact Hero ======= -->
<section class="contact-hero"></section>

<!-- ======= Get In Touch ======= -->
<section class="contact-modern">
  <div class="contact-details">
    <div class="contact-card">

      <h2 class="section-title contact-card__title">Contact Details</h2>
      <p class="contact-card__intro">
        Have a question about your account, our platforms or the markets?
        Reach out and we'll respond promptly.
      </p>

      <div class="contact-grid contact-grid--six">

        <div class="contact-item">
          <i class="bi bi-envelope-fill contact-icon"></i>
          <div>
            <span>Email</span>
            <p><a href="mailto:support@fundamentalcapitalltd.com">support@fundamentalcapitalltd.com</a></p>
          </div>
        </div>

        <div class="contact-item">
          <i class="bi bi-whatsapp contact-icon"></i>
          <div>
            <span>WhatsApp</span>
            <p><a href="https://wa.me/447451209400">+44 7451 209400</a></p>
          </div>
        </div>

        <div class="contact-item">
          <i class="bi bi-telegram contact-icon"></i>
          <div>
            <span>Telegram</span>
            <p><a href="https://t.me/+447451209400">+44 7451 209400</a></p>
          </div>
        </div>

        <div class="contact-item">
          <i class="bi bi-geo-alt-fill contact-icon"></i>
          <div>
            <span>Address</span>
            <p>No. 145, WeWork Building, City Road,<br>London EC1V 1AZ, United Kingdom</p>
          </div>
        </div>

        <div class="contact-item">
          <i class="bi bi-patch-check-fill contact-icon"></i>
          <div>
            <span>License</span>
            <p>975143 </p>
          </div>
        </div>

        <div class="contact-item">
          <i class="bi bi-patch-check-fill contact-icon"></i>
          <div>
            <span>Company number</span>
            <p>12548364</p>
          </div>
        </div>

      </div>

      <p class="contact-note">Form handling will be connected to the backend later.</p>

    </div>
  </div>
</section>

<!-- ======= Ways to Reach Us ======= -->
<section class="reach-us">
  <div class="container">
    <span class="eyebrow eyebrow--center">We're here to help</span>
    <h2>Ways to Reach Us</h2>
    <p class="reach-us__intro">
      Pick the channel that suits you — our team responds around the clock.
    </p>

    <div class="reach-grid">

      <div class="reach-card">
        <i class="bi bi-headset"></i>
        <h3>Customer Support</h3>
        <p>Account, deposits, withdrawals and general help, 24/7.</p>
        <a href="mailto:support@fundamentalcapitalltd.com" class="arrow-link">Email support</a>
      </div>

      <div class="reach-card">
        <i class="bi bi-graph-up-arrow"></i>
        <h3>Trading Desk</h3>
        <p>Questions about instruments, spreads or execution.</p>
        <a href="tel:+447451209400" class="arrow-link">Call us</a>
      </div>

      <div class="reach-card">
        <i class="bi bi-people-fill"></i>
        <h3>Partnerships</h3>
        <p>IB, affiliate and institutional enquiries.</p>
        <a href="mailto:support@fundamentalcapitalltd.com" class="arrow-link">Get in touch</a>
      </div>

    </div>
  </div>
</section>

<!-- ======= Our Offices ======= -->
<section class="offices">
  <div class="container">
    <span class="eyebrow eyebrow--center">Our offices</span>
    <h2>Visit Us</h2>
    <p class="offices__intro">
      A global presence with local support — our multilingual team is available 24/7.
    </p>

    <div class="offices-grid offices-grid--single">

      <div class="office-card">
        <div class="office-card__body">
          <h3>London, United Kingdom</h3>
          <p>No. 145, WeWork Building, City Road, London EC1V 1AZ, United Kingdom</p>
        </div>
        <div class="office-card__map">
          <iframe
            src="https://www.google.com/maps?q=145+City+Road,+London,+EC1V+1AZ,+United+Kingdom&output=embed"
            allowfullscreen=""
            loading="lazy"
            style="border:0;">
          </iframe>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('js/platform.js') }}"></script>
@endpush