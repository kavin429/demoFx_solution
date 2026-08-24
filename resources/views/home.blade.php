@extends('layouts.app')

@section('title', 'Fundamental Capital Ltd')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home-sections.css') }}">
@endpush

@section('content')

<!-- ===== HERO SECTION ===== -->
<section class="gc-hero">
  <div class="gc-hero-inner">
    <div class="gc-hero-copy reveal">
      <span class="gc-badge"><i class="ph ph-gift"></i> Limited-Time &middot; 100% Deposit Bonus</span>

      <h1 class="gc-hero-title">Trade Smarter.<br><span class="grad">Grow Faster.</span></h1>

      <p class="gc-hero-sub">
        Forex, Metals, Indices &amp; Cryptocurrencies on professional platforms &mdash;
        raw spreads from 0.0 pips and lightning-fast execution.
      </p>

      <div class="gc-hero-buttons">
        <a href="https://trade.fundamentalcapitalltd.com/register" class="btn-solid">Start Trading <i class="ph ph-arrow-right"></i></a>
        <a href="#markets" class="btn-ghost">Explore Markets</a>
      </div>

      <ul class="gc-hero-trust">
        <li><strong>4.8/5</strong><span>50+ countries</span></li>
        <li><strong>1:500</strong><span>leverage</span></li>
        <li><strong>From 0.0</strong><span>pips</span></li>
      </ul>
    </div>

    <div class="gc-hero-visual reveal">
      <img src="{{ asset('pics/test.png') }}" alt="Trading Illustration">

      <div class="gc-feature-grid">
        <div class="gc-feature">
          <i class="ph ph-chart-line-up"></i>
          <div><strong>Raw spreads on majors</strong><span>No requotes, no dealing desk</span></div>
        </div>
        <div class="gc-feature">
          <i class="ph ph-lightning"></i>
          <div><strong>Fast execution</strong><span>No requotes, no dealing desk</span></div>
        </div>
        <div class="gc-feature">
          <i class="ph ph-globe-hemisphere-west"></i>
          <div><strong>180+ markets</strong><span>FX, metals, indices, crypto</span></div>
        </div>
        <div class="gc-feature">
          <i class="ph ph-headset"></i>
          <div><strong>24/5 support</strong><span>Real people, fast replies</span></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Rating strip -->
  <div class="gc-rating-strip reveal">
    <div class="gc-rating-left">
      <i class="ph ph-star-fill"></i>
      <div>
        <strong>Excellent 4.8 / 5</strong>
        <span>based on 54,477 reviews</span>
      </div>
    </div>
    <a href="https://trade.fundamentalcapitalltd.com/register" class="rating-link">Open an Account</a>
    <div class="gc-rating-right">
      <i class="ph ph-headset"></i>
      <span>24/7 Support</span>
    </div>
  </div>
</section>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright">
    <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a>
  </div>
  <script type="text/javascript"
  src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    { "proName": "FOREXCOM:SPXUSD", "title": "S&P 500 Index" },
    { "proName": "FOREXCOM:NSXUSD", "title": "US 100 Cash CFD" },
    { "proName": "FX_IDC:EURUSD", "title": "EUR to USD" },
    { "proName": "BITSTAMP:BTCUSD", "title": "Bitcoin" },
    { "proName": "BITSTAMP:ETHUSD", "title": "Ethereum" }
  ],
  "colorTheme": "dark",
  "locale": "en",
  "largeChartUrl": "",
  "isTransparent": false,
  "showSymbolLogo": true,
  "displayMode": "adaptive"
}
  </script>
</div>
<!-- TradingView Widget END -->

<!-- ===== MARKETS ===== -->
<section id="markets" class="gc-section gc-markets">
  <p class="gc-label">What you can trade</p>
  <h2 class="gc-title">Access <span class="grad">World-Class Markets</span></h2>
  <p class="gc-subtitle">Diversify across the most liquid asset classes from a single account.</p>

  <div class="gc-market-grid">
    <a href="{{ route('products.show', 'forex') }}" class="gc-market-card reveal">
      <span class="gc-icon"><i class="ph ph-currency-circle-dollar"></i></span>
      <h3>Forex</h3>
      <p>Major, minor &amp; exotic pairs, 24/5.</p>
      <span class="card-arrow"><i class="ph ph-arrow-right"></i></span>
    </a>
    <a href="{{ route('products.show', 'metals') }}" class="gc-market-card reveal">
      <span class="gc-icon"><i class="ph ph-coin-vertical"></i></span>
      <h3>Metals</h3>
      <p>Gold, silver, platinum &amp; palladium.</p>
      <span class="card-arrow"><i class="ph ph-arrow-right"></i></span>
    </a>
    <a href="{{ route('products.show', 'indices') }}" class="gc-market-card reveal">
      <span class="gc-icon"><i class="ph ph-chart-bar"></i></span>
      <h3>Indices</h3>
      <p>Exposure to global economies.</p>
      <span class="card-arrow"><i class="ph ph-arrow-right"></i></span>
    </a>
    <a href="{{ route('products.show', 'crypto') }}" class="gc-market-card reveal">
      <span class="gc-icon"><i class="ph ph-currency-btc"></i></span>
      <h3>Crypto</h3>
      <p>Digital assets, around the clock.</p>
      <span class="card-arrow"><i class="ph ph-arrow-right"></i></span>
    </a>
  </div>
</section>

<!-- ===== SPONSORSHIP ===== -->
<section class="gc-section gc-sponsor">
  <p class="gc-label">Official Trading Partners</p>
  <h2 class="gc-title">Different Arenas. <span class="grad">The Same Pursuit of Excellence.</span></h2>
  <p class="gc-subtitle">
    We share the mindset of elite athletes &mdash; discipline, precision and performance under pressure.
    Fundamental Capital Ltd is proud to support sport at the highest level, bringing that winning spirit to every trade.
  </p>

  <div class="gc-sponsor-tabs" role="tablist">
    <button type="button" class="sponsor-tab active" data-cat="football">Football</button>
    <button type="button" class="sponsor-tab" data-cat="motorsport">Motorsport</button>
    <button type="button" class="sponsor-tab" data-cat="athletics">Athletics</button>
  </div>

  <div class="gc-sponsor-stage reveal">
    <div class="sponsor-panel active" data-cat="football">
      <i class="ph ph-soccer-ball panel-icon"></i>
      <h3>On the pitch, precision wins.</h3>
      <p>One touch decides the game. We sponsor top-tier football clubs that live and breathe performance under pressure &mdash; exactly how we approach execution on every order.</p>
    </div>
    <div class="sponsor-panel" data-cat="motorsport">
      <i class="ph ph-car-profile panel-icon"></i>
      <h3>GC Racing &mdash; built for pace.</h3>
      <p><span class="new-tag">NEW</span> Trade at race pace. Our GC Racing partnership reflects millisecond execution, relentless engineering and the pursuit of zero compromise &mdash; 0.0 pip spreads at racing speed.</p>
    </div>
    <div class="sponsor-panel" data-cat="athletics">
      <i class="ph ph-person-simple-run panel-icon"></i>
      <h3>Every millisecond counts.</h3>
      <p>Elite athletes train for marginal gains. Traders do too. We back athletics programmes that celebrate discipline, endurance and the drive to be consistently faster.</p>
    </div>
  </div>
</section>

<!-- ===== PLATFORMS ===== -->
<section class="gc-section gc-platforms">
  <div class="gc-split">
    <div class="split-copy reveal">
      <p class="gc-label">Powerful platforms</p>
      <h2 class="gc-title left">Trade Anywhere, <span class="grad">On Any Device</span></h2>
      <p class="gc-subtitle left">
        Professional-grade tools with advanced charting, fast execution and automated trading &mdash;
        synced across all your devices.
      </p>
      <ul class="check-list">
        <li><i class="ph ph-check-circle"></i> Low-latency order execution</li>
        <li><i class="ph ph-check-circle"></i> Advanced charts &amp; indicators</li>
        <li><i class="ph ph-check-circle"></i> Automated &amp; algorithmic trading</li>
        <li><i class="ph ph-check-circle"></i> Secure, encrypted connections</li>
      </ul>
      <a href="{{ route('platform') }}" class="btn-solid">Discover Platforms <i class="ph ph-arrow-right"></i></a>
    </div>

    <div class="split-visual reveal">
      <div class="device-frame">
        <div class="frame-bar"><span></span><span></span><span></span></div>
        <svg viewBox="0 0 420 240" class="mock-chart" aria-hidden="true">
          <defs>
            <linearGradient id="areaFill" x1="0" y1="0" x2="0" y2="1">
              <stop offset="0%" stop-color="#a78bfa" stop-opacity=".35"/>
              <stop offset="100%" stop-color="#a78bfa" stop-opacity="0"/>
            </linearGradient>
          </defs>
          <g stroke="#1f1f22" stroke-width="1">
            <line x1="0" y1="60" x2="420" y2="60"/><line x1="0" y1="120" x2="420" y2="120"/>
            <line x1="0" y1="180" x2="420" y2="180"/>
          </g>
          <path d="M0,190 L40,175 L80,182 L120,150 L160,158 L200,120 L240,128 L280,95 L320,105 L360,70 L420,55 L420,240 L0,240 Z" fill="url(#areaFill)"/>
          <path d="M0,190 L40,175 L80,182 L120,150 L160,158 L200,120 L240,128 L280,95 L320,105 L360,70 L420,55" fill="none" stroke="#a78bfa" stroke-width="2.5" stroke-linecap="round"/>
          <g fill="#ffffff" opacity=".85">
            <rect x="30" y="160" width="8" height="26" rx="2"/><rect x="70" y="168" width="8" height="20" rx="2"/>
            <rect x="110" y="140" width="8" height="28" rx="2"/><rect x="190" y="112" width="8" height="26" rx="2"/>
            <rect x="270" y="86" width="8" height="28" rx="2"/><rect x="350" y="62" width="8" height="30" rx="2"/>
          </g>
          <g fill="#a78bfa" opacity=".55">
            <rect x="50" y="172" width="8" height="18" rx="2"/><rect x="90" y="176" width="8" height="14" rx="2"/>
            <rect x="150" y="148" width="8" height="16" rx="2"/><rect x="230" y="118" width="8" height="20" rx="2"/>
            <rect x="310" y="96" width="8" height="18" rx="2"/><rect x="390" y="52" width="8" height="22" rx="2"/>
          </g>
        </svg>
        <div class="frame-caption">Desktop &middot; Web &middot; Mobile</div>
      </div>
      <div class="chip-float chip-a"><i class="ph ph-lightning"></i> 0.0 pips</div>
      <div class="chip-float chip-b"><i class="ph ph-shield-check"></i> Encrypted</div>
    </div>
  </div>
</section>

<!-- ===== TRADINGVIEW PARTNER ===== -->
<section class="gc-section gc-tvpartner">
  <div class="tv-inner reveal">
    <p class="gc-label">Official Charting Partner</p>
    <h2 class="gc-title left">Advanced charts &amp; market analysis <span class="grad">powered by TradingView</span></h2>
    <p class="gc-subtitle left">
      Fundamental Capital Ltd has partnered with TradingView, a global leader in charting and market analysis trusted by millions of traders.
      Access real-time market data and powerful tools &mdash; explore the Stock Screener, stay ahead of market-moving events with the Economic Calendar,
      and follow live S&amp;P 500 indices, USD/JPY forex and gold commodities with advanced live charting.
    </p>
    <div class="tv-chips">
      <a href="https://www.tradingview.com/screener/" target="_blank" rel="noopener" class="tv-chip"><i class="ph ph-funnel"></i> Stock Screener</a>
      <a href="https://www.tradingview.com/economic-calendar/" target="_blank" rel="noopener" class="tv-chip"><i class="ph ph-calendar-blank"></i> Economic Calendar</a>
      <a href="https://www.tradingview.com/symbols/SPX/" target="_blank" rel="noopener" class="tv-chip"><i class="ph ph-chart-line"></i> S&amp;P 500</a>
      <a href="https://www.tradingview.com/symbols/USDJPY/" target="_blank" rel="noopener" class="tv-chip"><i class="ph ph-chart-line"></i> USD/JPY</a>
      <a href="https://www.tradingview.com/symbols/XAUUSD/" target="_blank" rel="noopener" class="tv-chip"><i class="ph ph-chart-line"></i> Gold</a>
    </div>
  </div>
</section>

<!-- ===== PRICING / ACCOUNTS ===== -->
<section class="gc-section gc-pricing" id="plans">
  <p class="gc-label">Trading accounts</p>
  <h2 class="gc-title">Pick a Plan, <span class="grad">Start in Minutes</span></h2>
  <p class="gc-subtitle">
    Whether you're just starting out or trading serious size, there's a Fundamental Capital account built for you.
    Every account includes access to all markets, our full platform suite and 24/7 support &mdash; upgrade as you grow.
  </p>

  <div class="plan-grid">
    <!-- Lite -->
    <article class="plan-card reveal">
      <header><h3>Lite</h3><span class="plan-price">$250</span><span class="plan-note">min. deposit</span></header>
      <ul class="plan-list">
        <li><i class="ph ph-check"></i> Forex</li>
        <li><i class="ph ph-check"></i> 5% withdrawal commission</li>
        <li><i class="ph ph-check"></i> Standard spreads</li>
        <li><i class="ph ph-check"></i> 24/7 support</li>
      </ul>
      <a href="https://trade.fundamentalcapitalltd.com/register" class="btn-outline full">Open Lite</a>
    </article>

    <!-- Pro -->
    <article class="plan-card popular reveal">
      <span class="popular-tag"><i class="ph ph-fire"></i> Popular</span>
      <header><h3>Pro</h3><span class="plan-price">$2,500</span><span class="plan-note">min. deposit</span></header>
      <ul class="plan-list">
        <li><i class="ph ph-check"></i> Forex &amp; Commodities</li>
        <li><i class="ph ph-check"></i> 5% withdrawal commission</li>
        <li><i class="ph ph-check"></i> Standard spreads</li>
        <li><i class="ph ph-check"></i> Priority support</li>
      </ul>
      <a href="https://trade.fundamentalcapitalltd.com/register" class="btn-solid full">Open Pro</a>
    </article>

    <!-- VIP -->
    <article class="plan-card reveal">
      <header><h3>VIP</h3><span class="plan-price">$25,000</span><span class="plan-note">min. deposit</span></header>
      <ul class="plan-list">
        <li><i class="ph ph-check"></i> All markets &amp; assets</li>
        <li><i class="ph ph-check"></i> 5% withdrawal commission</li>
        <li><i class="ph ph-check"></i> Standard spreads</li>
        <li><i class="ph ph-check"></i> VIP support</li>
      </ul>
      <a href="https://trade.fundamentalcapitalltd.com/register" class="btn-outline full">Open VIP</a>
    </article>

    <!-- Raw -->
    <article class="plan-card reveal">
      <header><h3>Raw (0 Spread)</h3><span class="plan-price">$500</span><span class="plan-note">min. deposit</span></header>
      <ul class="plan-list">
        <li><i class="ph ph-check"></i> Commodities</li>
        <li><i class="ph ph-check"></i> 5% withdrawal commission</li>
        <li><i class="ph ph-check"></i> 0 spreads</li>
        <li><i class="ph ph-check"></i> 24/7 support</li>
      </ul>
      <a href="https://trade.fundamentalcapitalltd.com/register" class="btn-outline full">Open Raw</a>
    </article>
  </div>

  <a href="{{ route('account') }}" class="compare-link">Compare All Accounts <i class="ph ph-arrow-right"></i></a>
  <p class="plan-risk"><i class="ph ph-warning-circle"></i> Leverage involves a high level of risk and may not be suitable for all investors.</p>
</section>

<!-- ===== WHY US ===== -->
<section class="gc-section gc-why">
  <p class="gc-label">Why Fundamental Capital</p>
  <h2 class="gc-title">Built for <span class="grad">Serious Traders</span></h2>

  <div class="why-grid">
    <div class="why-card reveal">
      <span class="gc-icon"><i class="ph ph-arrows-out-line-horizontal"></i></span>
      <h3>Tight Raw Spreads</h3>
      <p>Institutional-grade pricing from 0.0 pips with fast order execution.</p>
    </div>
    <div class="why-card reveal">
      <span class="gc-icon"><i class="ph ph-headset"></i></span>
      <h3>24/7 Support</h3>
      <p>An experienced team available around the clock to help you trade with confidence.</p>
    </div>
    <div class="why-card reveal">
      <span class="gc-icon"><i class="ph ph-shield-check"></i></span>
      <h3>Safety &amp; Compliance</h3>
      <p>A firm commitment to safety, compliance and ethical practices.</p>
    </div>
  </div>
</section>

<!-- ===== STATS BAND ===== -->
<section class="gc-stats-band">
  <div class="stat-item">
    <h3><span class="counter" data-target="180">0</span>+</h3>
    <p>Tradable Instruments</p>
  </div>
  <div class="stat-item">
    <h3>1:<span class="counter" data-target="500">0</span></h3>
    <p>Max Leverage</p>
  </div>
  <div class="stat-item">
    <h3><span class="counter" data-target="24">0</span>/7</h3>
    <p>Hours Support</p>
  </div>
  <div class="stat-item">
    <h3><span class="counter" data-target="18">0</span>+</h3>
    <p>Payment Methods</p>
  </div>
</section>

<!-- ===== REVIEWS ===== -->
<section class="gc-section gc-reviews">
  <p class="gc-label">Client reviews</p>
  <h2 class="gc-title">Trusted by Traders <span class="grad">Across the Region</span></h2>
  <p class="gc-subtitle">Real feedback from our clients in India, the UAE and the Maldives.</p>

  <div class="review-grid">
    <article class="review-card reveal">
      <div class="stars"><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i></div>
      <p>"Spreads are genuinely tight and withdrawals hit my account fast. The mobile app makes it easy to manage trades between meetings."</p>
      <footer><span class="avatar">RM</span><div><strong>Rohan Mehta</strong><span>Mumbai, India</span></div></footer>
    </article>

    <article class="review-card reveal">
      <div class="stars"><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i></div>
      <p>"I started with a small Lite account and upgraded as I grew. Support answered every question patiently &mdash; highly recommended."</p>
      <footer><span class="avatar">PN</span><div><strong>Priya Nair</strong><span>Bengaluru, India</span></div></footer>
    </article>

    <article class="review-card reveal">
      <div class="stars"><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i></div>
      <p>"Execution speed is excellent even during news. As someone trading gold daily, that reliability matters a lot."</p>
      <footer><span class="avatar">AM</span><div><strong>Ahmed Al Mansoori</strong><span>Dubai, UAE</span></div></footer>
    </article>

    <article class="review-card reveal">
      <div class="stars"><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i></div>
      <p>"Clean platform, clear pricing, no hidden surprises. The managed fund plans helped me diversify beyond my own trades."</p>
      <footer><span class="avatar">LH</span><div><strong>Layla Hassan</strong><span>Dubai, UAE</span></div></footer>
    </article>

    <article class="review-card reveal">
      <div class="stars"><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i></div>
      <p>"24/7 support is real &mdash; I got help at 2am during a volatile session. Deposits and withdrawals have always been smooth."</p>
      <footer><span class="avatar">IN</span><div><strong>Ibrahim Naseer</strong><span>Mal&eacute;, Maldives</span></div></footer>
    </article>

    <article class="review-card reveal">
      <div class="stars"><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i><i class="ph ph-star-fill"></i></div>
      <p>"The SIP calculator and managed funds made investing approachable for me. Transparent and genuinely trustworthy."</p>
      <footer><span class="avatar">AR</span><div><strong>Aishath Reema</strong><span>Mal&eacute;, Maldives</span></div></footer>
    </article>
  </div>
</section>

<!-- ===== STEPS ===== -->
<section class="gc-section gc-steps" id="steps">
  <p class="gc-label">Get started in minutes</p>
  <h2 class="gc-title">Start Trading in <span class="grad">4 Simple Steps</span></h2>

  <div class="steps-grid">
    <div class="step-box reveal">
      <span class="step-no">1</span>
      <h3>Register</h3>
      <p>Create your account in minutes with just your email and basic details.</p>
    </div>
    <div class="step-box reveal">
      <span class="step-no">2</span>
      <h3>Verify</h3>
      <p>Complete quick KYC verification to secure and activate your account.</p>
    </div>
    <div class="step-box reveal">
      <span class="step-no">3</span>
      <h3>Fund</h3>
      <p>Deposit instantly via card, bank transfer or your preferred method.</p>
    </div>
    <div class="step-box reveal">
      <span class="step-no">4</span>
      <h3>Trade</h3>
      <p>Access global markets and managed funds &mdash; start growing right away.</p>
    </div>
  </div>

  <div class="center-cta">
    <a href="https://trade.fundamentalcapitalltd.com/register" class="btn-solid big">Open an Account <i class="ph ph-arrow-right"></i></a>
  </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section class="gc-final-cta">
  <div class="cta-inner reveal">
    <h2>Ready to Start <span class="grad">Trading?</span></h2>
    <p>Open your Fundamental Capital Ltd account today and access global markets in minutes.</p>
    <a href="https://trade.fundamentalcapitalltd.com/register" class="btn-solid big">Open an Account</a>
  </div>
</section>

<!-- ========== FAQ ========== -->
<section id="faq">
  <div class="faq-container">
      <h2>Most Common <span>FAQs</span></h2>

      <div class="faq-item">
        <button type="button" class="faq-question">
          What Is CFD Trading?
          <i class="ph ph-plus faq-icon"></i>
        </button>
        <div class="faq-answer">
          <p>
  A Contract for Difference (CFD) is a financial derivative that allows traders to speculate on the price movements of various assets &mdash; such as forex, stocks, indices, commodities, and cryptocurrencies &mdash; without actually owning the underlying asset.

  Instead of purchasing the asset itself, you enter into an agreement with a broker to exchange the difference in the asset's price between the time the contract is opened and when it is closed.

  CFDs allow traders to profit in both rising and falling markets by taking either a <strong>long position</strong> (buy) if they expect the price to increase, or a <strong>short position</strong> (sell) if they expect the price to decrease. <br/><br/>

  One of the key advantages of CFD trading is the use of <strong>leverage</strong>, which enables traders to control larger positions with a smaller amount of capital. However, while leverage can increase potential profits, it also significantly increases the level of risk.

  CFDs are popular among traders because they offer flexibility, access to global markets, fast execution, and the ability to hedge existing investments. Proper risk management strategies such as stop-loss and take-profit orders are strongly recommended when trading CFDs.
</p>
        </div>
      </div>

      <div class="faq-item">
        <button type="button" class="faq-question">
          What Trading Platform Do You Offer?
          <i class="ph ph-plus faq-icon"></i>
        </button>
        <div class="faq-answer">
          <p>
  We offer a powerful and secure multi-asset trading platform designed to meet the needs of both beginner and professional traders. Our platform provides real-time market data, advanced charting tools, and a wide range of technical indicators to help you analyze market movements with precision.

  Traders can access multiple asset classes including Forex, commodities, indices, stocks, and cryptocurrencies &mdash; all from a single intuitive interface. The platform supports instant trade execution, flexible order types (market, limit, stop-loss, take-profit), and customizable trading layouts.

  <br/> <br/>Our system is built with high-level encryption technology to ensure maximum security of your funds and personal data. It is accessible via desktop, web browser, and mobile devices, allowing you to trade anytime, anywhere.

  Whether you are just starting your trading journey or managing advanced strategies, our platform provides the performance, stability, and tools required to trade with confidence.
</p>
        </div>
      </div>

      <div class="faq-item">
        <button type="button" class="faq-question">
          How Do I Open A Trading Account?
          <i class="ph ph-plus faq-icon"></i>
        </button>
        <div class="faq-answer">
          <p>
  Opening a trading account with us is a simple and secure process. First, complete the online registration form by providing your basic personal information. Once registered, you will need to verify your identity by submitting valid identification documents (such as a passport or national ID) and proof of address, in compliance with regulatory requirements.

  After verification is approved, you can fund your account using one of our secure payment methods, including bank transfer, credit/debit card, or supported online payment systems. Once your deposit is confirmed, you can access the trading platform, explore available markets, and begin trading immediately.

  Our support team is available to assist you throughout the entire onboarding process to ensure a smooth and hassle-free experience.
</p>
        </div>
      </div>

      <div class="faq-item">
        <button type="button" class="faq-question">
          What Is Online Trading, How It Work?
          <i class="ph ph-plus faq-icon"></i>
        </button>
        <div class="faq-answer">
          <p>
  Online trading is the process of buying and selling financial instruments such as Forex, stocks, commodities, indices, and cryptocurrencies through an internet-based trading platform. Instead of contacting a broker by phone, traders can access global markets instantly using a computer or mobile device.

  The process works by placing buy (long) or sell (short) orders based on your market analysis and trading strategy. When you open a trade, you speculate on the price movement of an asset. If the market moves in your favor, you can close the trade to realize a profit. If it moves against you, a loss may occur.

  Modern trading platforms provide real-time pricing, advanced charting tools, risk management features, and instant execution to help traders make informed decisions efficiently.
</p>
        </div>
      </div>

      <div class="faq-item">
        <button type="button" class="faq-question">
          What Risk Management Tools Are Available?
          <i class="ph ph-plus faq-icon"></i>
        </button>
        <div class="faq-answer">
          <p>
  We provide a comprehensive range of risk management tools to help traders protect their capital and manage market exposure effectively. These tools include Stop-Loss orders, which automatically close a trade at a predetermined loss level, and Take-Profit orders, which secure profits once a target price is reached.

  Additionally, Trailing Stop orders allow traders to lock in profits dynamically as the market moves in their favor. Margin monitoring tools and real-time account analytics are also available to help you maintain control over your risk levels.

  While these tools are designed to support disciplined trading, we strongly encourage traders to apply proper risk management strategies and never risk more than they can afford to lose.
</p>
        </div>
      </div>

    </div>
</section>

<!-- ===== PAYMENT METHODS ===== -->
<section id="payment-methods" class="payment-section">
  <div class="payment-content">

    <div class="payment-head">
      <div class="payment-head-left">
        <p class="payment-label">Fast &amp; secure funding</p>
        <h2>Flexible Funding Options</h2>
        <p>
          Cards, wallets, crypto and bank partners worldwide &mdash; fund your account quickly and securely.
          Every deposit is routed through encrypted channels and reviewed before it reaches your trading wallet.
        </p>
      </div>

      <div class="payment-tabs" role="tablist">
        <button class="payment-tab active" data-cat="all">All <span class="count">18</span></button>
        <button class="payment-tab" data-cat="crypto">Crypto <span class="count">2</span></button>
        <button class="payment-tab" data-cat="cards">Cards <span class="count">6</span></button>
        <button class="payment-tab" data-cat="wallets">Wallets <span class="count">6</span></button>
        <button class="payment-tab" data-cat="bank">Bank <span class="count">4</span></button>
      </div>
    </div>

    <div class="route-stage">
      <svg class="route-line" preserveAspectRatio="none" viewBox="0 0 1000 300">
        <path d="M0,150 C 250,60 350,240 500,150 C 650,60 750,240 1000,150" />
      </svg>

      <div class="route-endpoints">
        <div class="route-node"><span class="dot"></span> Your account</div>
        <div class="route-node end"><span class="dot"></span> Trading wallet</div>
      </div>

      @php
  $paymentMethods = [
    ['name' => 'Tether',                'image' => 'c1.png',  'category' => 'crypto'],
    ['name' => 'Ethereum',              'image' => 'c2.png',  'category' => 'crypto'],
    ['name' => 'PayPal',                'image' => 'c3.png',  'category' => 'wallets'],
    ['name' => 'VISA',                  'image' => 'c4.png',  'category' => 'cards'],
    ['name' => 'PayPal',                'image' => 'c5.png',  'category' => 'wallets'],
    ['name' => 'PaymentAsia',           'image' => 'c6.png',  'category' => 'wallets'],
    ['name' => 'PayTrust',              'image' => 'c7.png',  'category' => 'wallets'],
    ['name' => 'PayPort',               'image' => 'c8.png',  'category' => 'wallets'],
    ['name' => 'World Pay',             'image' => 'c9.png',  'category' => 'bank'],
    ['name' => 'Verified by VISA',      'image' => 'c10.png', 'category' => 'cards'],
    ['name' => 'myFatoorah',            'image' => 'c11.png', 'category' => 'bank'],
    ['name' => 'Magic Pay',             'image' => 'c12.png', 'category' => 'wallets'],
    ['name' => 'Dragon Pay',            'image' => 'c13.png', 'category' => 'bank'],
    ['name' => 'Bank Transfer',         'image' => 'c14.png', 'category' => 'bank'],
    ['name' => 'Google Pay',            'image' => 'c15.png', 'category' => 'cards'],
    ['name' => 'Apple Pay',             'image' => 'c16.png', 'category' => 'cards'],
    ['name' => 'MasterCard SecureCode', 'image' => 'c17.png', 'category' => 'cards'],
    ['name' => 'Stripe',                'image' => 'c18.png', 'category' => 'cards'],
  ];
@endphp

      <div class="payment-grid" id="paymentGrid">
  @foreach ($paymentMethods as $method)
    <article class="payment-card" data-cat="{{ $method['category'] }}">
      <img src="{{ asset('pics/payment/' . $method['image']) }}" alt="{{ $method['name'] }}">
      <span>{{ $method['name'] }}</span>
    </article>
  @endforeach
</div>
    </div>

    <div class="payment-foot">
      <div class="payment-note">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        <span>Risk warning: CFDs are complex instruments and carry a high risk of losing money rapidly due to leverage.</span>
      </div>
      <div class="payment-meta">Showing <strong id="countLabel">18</strong> channels</div>
    </div>

  </div>
</section>
@endsection

@push('scripts')
<script>
/* Reveal on scroll */
document.addEventListener("DOMContentLoaded", function () {
  const els = document.querySelectorAll(".reveal");
  if (!("IntersectionObserver" in window)) {
    els.forEach(el => el.classList.add("visible"));
    return;
  }
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add("visible");
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });
  els.forEach(el => io.observe(el));
});
</script>

<script>
/* Stat counters */
document.addEventListener("DOMContentLoaded", function () {
  const counters = document.querySelectorAll(".gc-stats-band .counter");
  if (!counters.length) return;

  function run(counter) {
    if (counter.dataset.done === "1") return;
    counter.dataset.done = "1";
    const target = Number(counter.getAttribute("data-target")) || 0;
    let current = 0;
    const step = Math.max(1, Math.ceil(target / 80));
    const tick = () => {
      current += step;
      if (current < target) {
        counter.textContent = current;
        requestAnimationFrame(tick);
      } else {
        counter.textContent = target;
      }
    };
    counter.textContent = "0";
    tick();
  }

  const band = document.querySelector(".gc-stats-band");
  if (!band) return;

  if ("IntersectionObserver" in window) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          band.querySelectorAll(".counter").forEach(run);
          io.disconnect();
        }
      });
    }, { threshold: 0.3 });
    io.observe(band);
  } else {
    counters.forEach(run);
  }
});
</script>

<script>
/* Sponsorship tabs */
document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".sponsor-tab");
  const panels = document.querySelectorAll(".sponsor-panel");

  tabs.forEach(tab => {
    tab.addEventListener("click", function () {
      tabs.forEach(t => t.classList.remove("active"));
      this.classList.add("active");

      const cat = this.dataset.cat;
      panels.forEach(p => p.classList.toggle("active", p.dataset.cat === cat));
    });
  });
});
</script>

<script>
/* Payment category filter */
document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".payment-tab");
  const cards = document.querySelectorAll(".payment-card");
  const countLabel = document.getElementById("countLabel");

  tabs.forEach(tab => {
    tab.addEventListener("click", function () {
      tabs.forEach(t => t.classList.remove("active"));
      this.classList.add("active");

      const cat = this.dataset.cat;
      let visible = 0;

      cards.forEach(card => {
        const show = cat === "all" || card.dataset.cat === cat;
        card.style.display = show ? "" : "none";
        if (show) visible++;
      });

      countLabel.textContent = visible;
    });
  });
});
</script>
@endpush
