<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo $__env->yieldContent('title', 'DemoFX Solution'); ?></title>
  <link rel="icon" type="pics/icon.png" href="pics/logo.png" />

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/components.css')); ?>">
  <link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" rel="stylesheet">

  <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>

  <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <?php echo $__env->yieldContent('content'); ?>

  <?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <!-- Back to Top Button -->
  <button id="backToTop" class="back-to-top">
    &uarr;
  </button>

  <script src="<?php echo e(asset('js/test.js')); ?>"></script>

  <!-- Mobile menu toggle (shared across all pages) -->
  <script>
    function toggleMenu() {
      const header = document.querySelector("header");
      const nav = header ? header.querySelector("nav") : null;
      const hamburger = header ? header.querySelector(".hamburger") : null;
      if (!nav || !hamburger) return;

      nav.classList.toggle("active");
      hamburger.classList.toggle("active");
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
        });
      });
    });
  </script>

  <!-- Page-specific scripts get injected here -->
  <?php echo $__env->yieldPushContent('scripts'); ?>

</body>
</html><?php /**PATH C:\projects\demo_solutions\resources\views/layouts/app.blade.php ENDPATH**/ ?>