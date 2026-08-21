<!-- Footer -->
<footer class="footer">
  <div class="footer-container">

    <!-- Row 1: Logo + tagline + Social (full width) -->
    <div class="footer-brand-full">
      <div class="footer-brand-left">
        <img src="{{ asset('pics/logo.png') }}" alt="Fundamental Capital Ltd Logo" class="footer-logo">
        <p class="footer-tagline">A leading global trading company offering Forex, Metals, Indices and Cryptocurrencies on every device. (Demo platform)</p>
      </div>
      <div class="footer-brand-right">
        <div class="footer-social">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <a href="https://trade.fundamentalcapitalltd.com/login" class="footer-cta">Open an Account</a>
      </div>
    </div>

    <!-- Row 2: 4 Columns -->
    <div class="footer-cols">
      <div class="footer-col">
        <h4>Markets</h4>
        <ul>
          <li><a href="{{ route('products.show', 'forex') }}">Forex Trading</a></li>
          <li><a href="{{ route('products.show', 'metals') }}">Metals Trading</a></li>
          <li><a href="{{ route('products.show', 'indices') }}">Indices Trading</a></li>
          <li><a href="{{ route('products.show', 'crypto') }}">Cryptocurrencies Trading</a></li>
          <li><a href="{{ route('products.show', 'commodities') }}">Commodities</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>News & Analysis</h4>
        <ul>
          <li><a href="{{ route('platform') }}">Market Updates</a></li>
          <li><a href="{{ route('platform') }}">Forecast & Predictions</a></li>
          <li><a href="{{ route('platform') }}">FUNDS - AXIS LIMITED Insights</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Platforms</h4>
        <ul>
          <li><a href="{{ route('platform') }}">Desktop</a></li>
          <li><a href="{{ route('platform') }}">WebTrader</a></li>
          <li><a href="{{ route('platform') }}">Mobile</a></li>
          <li><a href="https://trade.fundamentalcapitalltd.com/login">Platform Login</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="{{ route('about') }}">Why Fundamental Capital Ltd</a></li>
          <li><a href="#">Reviews</a></li>
          <li><a href="#">Fundamental Capital Ltd Blog</a></li>
          <li><a href="#">Market Updates</a></li>
          <li><a href="#">Forecast &amp; Predictions</a></li>
          <li><a href="{{ route('contact') }}">Contact Us</a></li>
          <li><a href="#">FAQs</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Resources</h4>
        <ul>
          <li><a href="{{ route('about') }}">Why Fundamental Capital Ltd</a></li>
          <li><a href="#">Trading Calculators</a></li>
          <li><a href="#">Economic Calendar</a></li>
          <li><a href="#">Trading Glossary</a></li>
          <li><a href="#">Education Center</a></li>
          <li><a href="{{ route('contact') }}">Risk Disclosure</a></li>
        </ul>
      </div>
    </div>

 <div class="footer-global-full">
  <h4>Global Offices &amp; Support</h4>
  <div class="office-grid">
    <div class="office-card">
      <span class="office-icon"><i class="ph ph-buildings"></i></span>
      <div class="office-text">
        <strong>Address</strong>
        <p>9 Scott Court, 50 Silverthorne Road, London, United Kingdom, SW8 3HD</p>
      </div>
    </div>
    <div class="office-card">
      <span class="office-icon"><i class="fab fa-whatsapp"></i></span>
      <div class="office-text">
        <strong>WhatsApp</strong>
        <p><a href="#">Demo &mdash; not a live number</a></p>
      </div>
    </div>
    <div class="office-card">
      <span class="office-icon"><i class="fab fa-telegram"></i></span>
      <div class="office-text">
        <strong>Telegram</strong>
        <p><a href="#">Demo &mdash; not a live number</a></p>
      </div>
    </div>
    <div class="office-card">
      <span class="office-icon"><i class="ph ph-envelope-simple"></i></span>
      <div class="office-text">
        <strong>Email</strong>
        <p><a href="mailto:support@fundamentalcapitalltd.com">support@fundamentalcapitalltd.com</a></p>
      </div>
    </div>
  </div>
</div>

  <!-- Bottom -->
  <div class="footer-bottom">
    <p class="footer-reg"> &middot; Company Number: 12548364</p>
    <p>© {{ date('Y') }} Fundamental Capital Ltd &mdash;Licence Number: 975143 (FCA).</p>
    <div class="legal-titles">
      <h3 class="legal-title"><a href="{{ route('legal') }}">Legal</a></h3>
      <h3 class="legal-title"><a href="{{ route('risk-warning') }}">General Risk Warning</a></h3>
      <h3 class="legal-title"><a href="{{ route('risk-disclosure') }}">Risk Disclosure</a></h3>
    </div>
  </div>

</footer>