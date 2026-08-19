<!-- Footer -->
<footer class="footer">
  <div class="footer-container">

    <!-- Row 1: Logo + tagline + Social (full width) -->
    <div class="footer-brand-full">
      <img src="<?php echo e(asset('pics/logo.png')); ?>" alt="DemoFX Solution Logo" class="footer-logo">
      <p class="footer-tagline">
        A leading global trading company offering Forex, Metals, Indices and Cryptocurrencies on every device. (Demo platform)
      </p>
      <a href="https://trade.DemoFXsolutions.com/login" class="footer-cta">Open an Account</a>
      <div class="footer-social">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
    </div>

    <!-- Row 2: 4 Columns -->
    <div class="footer-cols">
      <div class="footer-col">
        <h4>Markets</h4>
        <ul>
          <li><a href="<?php echo e(route('forex')); ?>">Forex Trading</a></li>
          <li><a href="<?php echo e(route('metals')); ?>">Metals Trading</a></li>
          <li><a href="<?php echo e(route('indices')); ?>">Indices Trading</a></li>
          <li><a href="<?php echo e(route('crypto')); ?>">Cryptocurrencies Trading</a></li>
          <li><a href="#">Shares</a></li>
          <li><a href="#">ETFs</a></li>
          <li><a href="#">Commodities</a></li>
          <li><a href="#">Futures</a></li>
          <li><a href="#">Real Stocks</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>News & Analysis</h4>
        <ul>
          <li><a href="<?php echo e(route('platform')); ?>">Market Updates</a></li>
          <li><a href="<?php echo e(route('platform')); ?>">Forecast & Predictions</a></li>
          <li><a href="<?php echo e(route('platform')); ?>">FUNDS - AXIS LIMITED Insights</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Platforms</h4>
        <ul>
          <li><a href="<?php echo e(route('platform')); ?>">Desktop</a></li>
          <li><a href="<?php echo e(route('platform')); ?>">WebTrader</a></li>
          <li><a href="<?php echo e(route('platform')); ?>">Mobile</a></li>
          <li><a href="https://trade.DemoFXsolutions.com/login">Platform Login</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="<?php echo e(route('about')); ?>">Why DemoFX Solution</a></li>
          <li><a href="#">Reviews</a></li>
          <li><a href="#">DemoFX Solution Blog</a></li>
          <li><a href="#">Market Updates</a></li>
          <li><a href="#">Forecast &amp; Predictions</a></li>
          <li><a href="<?php echo e(route('contact')); ?>">Contact Us</a></li>
          <li><a href="#">FAQs</a></li>
        </ul>
      </div>
    </div>

    <!-- Row 3: Global offices & support (full width) -->
    <div class="footer-global-full">
      <h4>Global Offices &amp; Support</h4>
      <ul>
        <li><i class="fas fa-building"></i> London &mdash; 9 Scott Court, 50 Silverthorne Road, London, United Kingdom, SW8 3HD</li>
        <li><i class="fab fa-whatsapp"></i> WhatsApp: <a href="#">Demo &mdash; not a live number</a></li>
        <li><i class="fab fa-telegram"></i> Telegram: <a href="#">Demo &mdash; not a live number</a></li>
        <li><i class="fas fa-envelope"></i> <a href="mailto:support@DemoFXsolutions.com">support@DemoFXsolutions.com</a></li>
      </ul>
    </div>
  </div>

  <!-- Bottom -->
  <div class="footer-bottom">
    <p>© <?php echo e(date('Y')); ?> DemoFX Solution &mdash; Demo Project. Not a real financial entity.</p>
      <!-- Legal -->
    <section class="partner-section">
      <div class="footer-legal">
    <div class="legal-titles">
      <h3 class="legal-title"><a href="<?php echo e(route('legal')); ?>">Legal</a></h3>
      <h3 class="legal-title"><a href="<?php echo e(route('risk-warning')); ?>">General Risk Warning</a></h3>
      <h3 class="legal-title"><a href="<?php echo e(route('risk-disclosure')); ?>">Risk Disclosure</a></h3>
    </div>
  </div>
    </section>
  </div>

</footer><?php /**PATH C:\projects\demo_solutions\resources\views/components/footer.blade.php ENDPATH**/ ?>