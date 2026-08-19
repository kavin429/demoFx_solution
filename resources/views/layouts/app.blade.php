<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'DemoFX Solution')</title>
  <link rel="icon" type="pics/icon.png" href="pics/logo.png" />

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" rel="stylesheet">

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
  <script>
    function toggleMenu() {
      const header = document.querySelector("header");
      const nav = header ? header.querySelector("nav") : null;
      const hamburger = header ? header.querySelector(".hamburger") : null;
      if (!nav || !hamburger) return;

      nav.classList.toggle("active");
      hamburger.classList.toggle("active");
      document.body.style.overflow = nav.classList.contains("active") ? "hidden" : "";
    }

    document.addEventListener("DOMContentLoaded", function () {
      const header = document.querySelector("header");
      if (!header) return;

      const nav = header.querySelector("nav");
      const hamburger = header.querySelector(".hamburger");
      if (!nav || !hamburger) return;

      // Close mobile menu when a nav link is selected.
      nav.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", function () {
          nav.classList.remove("active");
          hamburger.classList.remove("active");
          document.body.style.overflow = "";
        });
      });
    });
  </script>

  <!-- Page-specific scripts get injected here -->
  @stack('scripts')

</body>
</html>