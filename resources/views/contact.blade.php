@extends('layouts.app')

@section('title', 'Contact - DemoFX Solution')

@section('content')
<!-- ======= Contact Section ======= -->
<section class="contact-modern">

  <!-- ROW 1 : FULL WIDTH CONTACT CARD -->
  <div class="contact-details">
    <div class="contact-card">

  <h1 class="contact-title">Get In Touch</h1>

  <div class="contact-grid">

    <div class="contact-item">
      <i class="bi bi-telephone-fill contact-icon"></i>
      <div>
        <span>Phone</span>
        <p>+61 861 865 931</p>
      </div>
    </div>

    <div class="contact-item">
      <i class="bi bi-envelope-fill contact-icon"></i>
      <div>
        <span>Email</span>
        <p>support@DemoFX Solution.com</p>
      </div>
    </div>

    <div class="contact-item">
      <i class="bi bi-geo-alt-fill contact-icon"></i>
      <div>
        <span>Our Office</span>
        <p>
          9 Scott Court, 50 Silverthorne Road,<br>
          London, United Kingdom, SW8 3HD
        </p>
      </div>
    </div>

  </div>

</div>
  </div>

  <!-- ROW 2 : FULL WIDTH MAP -->
  <div class="map-full">
    <iframe 
      src="https://www.google.com/maps?q=9+Scott+Court,+50+Silverthorne+Road,+London,+SW8+3HD,+United+Kingdom&output=embed"
      allowfullscreen="" 
      loading="lazy"
      style="border:0;" >
      
    </iframe>
  </div>

</section>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('js/platform.js') }}"></script>
@endpush
