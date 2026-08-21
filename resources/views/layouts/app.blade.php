<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'Fundamental Capital Ltd')</title>
  <link rel="icon" type="image/png" href="{{ asset('pics/logo1.png') }}" />

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
  <link rel="stylesheet" href="{{ asset('css/account.css') }}">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>

  @stack('styles')
</head>
<body>

  <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  @include('components.header')

  @yield('content')

  @include('components.footer')

  <!-- Back to Top Button -->
  <button id="backToTop" class="back-to-top">
    &uarr;
  </button>

  <script src="{{ asset('js/test.js') }}"></script>

  <!-- Mobile menu toggle (shared across all pages) -->
  <div class="nav-overlay" id="navOverlay"></div>
  <script>
    function toggleMenu() {
      const header = document.querySelector("header");
      const nav = header ? header.querySelector("nav") : null;
      const hamburger = header ? header.querySelector(".hamburger") : null;
      const overlay = document.getElementById("navOverlay");
      if (!nav || !hamburger) return;

      const isOpen = nav.classList.toggle("active");
      hamburger.classList.toggle("active");
      if (overlay) overlay.classList.toggle("active", isOpen);
      document.body.style.overflow = isOpen ? "hidden" : "";
    }

    document.addEventListener("DOMContentLoaded", function () {
      const header = document.querySelector("header");
      if (!header) return;

      const nav = header.querySelector("nav");
      const hamburger = header.querySelector(".hamburger");
      const overlay = document.getElementById("navOverlay");
      if (!nav || !hamburger) return;

      function closeMenu() {
        nav.classList.remove("active");
        hamburger.classList.remove("active");
        if (overlay) overlay.classList.remove("active");
        document.body.style.overflow = "";
      }

      // Close mobile menu when a nav link is selected.
      nav.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", closeMenu);
      });

      // Close mobile menu when overlay is clicked
      if (overlay) {
        overlay.addEventListener("click", closeMenu);
      }
    });



  </script>

  <!-- Page-specific scripts get injected here -->
  @stack('scripts')

</body>
</html>