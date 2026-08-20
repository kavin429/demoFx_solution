@extends('layouts.app')

@section('title', 'DemoFX Solution')

@section('content')
<!-- ===== HERO SECTION ===== -->
<section class="hero">

   <div class="hero-content scroll-animate">
<h1 id="hero-title" class="gradient-text">Empower Your Trading Journey to Success</h1>
<p id="hero-text" class="gradient-text-small">Where strategy meets opportunity without limits</p>

    <div class="hero-buttons">
      <a href="https://trade.DemoFXsolutions.com">Get Started</a>
     <!-- <a href="#" id="watchVideoBtn">Watch Video</a> -->
    </div>
  </div>


  <div class="hero-image scroll-animate">
    <img src="{{ asset('pics/test.png') }}" alt="Trading Illustration">
  </div>
</section>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright">
    <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank">
      </a></div>
  <script type="text/javascript" 
  src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500 Index"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "US 100 Cash CFD"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR to USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    }
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

<!-- ===== VIDEO POPUP MODAL ===== 
<div id="videoPopup" class="video-popup">
  <div class="video-popup-content">
    <span id="closeVideo">&times;</span>
    <iframe id="videoFrame" width="100%" height="400" frameborder="0" allowfullscreen></iframe>
  </div>
</div> -->

<!-- ========== ABOUT US SECTION ========== -->
<section class="about">

  <div class="about-coins">
    <img src="{{ asset('pics/img1.png') }}" alt="coin">
    <img src="{{ asset('pics/img2.png') }}" alt="coin">
    <img src="{{ asset('pics/img3.png') }}" alt="coin">
 
 
  </div>

  <div class="about-container">
    <!-- Left Side: Company Info -->
<div class="about-info">
  <div class="about-grid">

      <!-- Stats Cards -->
    <div class="about-stats">
      <div class="stat-card green-dark">
        <h3><span class="counter" data-target="95">0</span>%</h3>
        <p>Client Satisfaction</p>
      </div>
      <div class="stat-card green-emerald">
        <h3><span class="counter" data-target="90">0</span>%</h3>
        <p>Transparency</p>
      </div>
      <div class="stat-card green-olive">
        <h3><span class="counter" data-target="85">0</span>%</h3>
        <p>Trading Success</p>
      </div>
    </div>
    
        <!-- Company Image -->
    <div class="about-image">
      <img src="{{ asset('pics/about1.png') }}" alt="About ITrade Solutions LTD">
    </div>


  </div>
 <div class="about-text">
  <h2>About <span>DemoFX Solution</span></h2>

  <p>
    DemoFX Solution is a trading platform and financial service developed under 
    CORE FINANCE LIMITED, a globally recognized company specializing in innovative 
    financial solutions. Through this platform, we provide clients with seamless access 
    to a wide range of trading instruments including Forex, Cryptocurrencies, Metals, 
    and Indices.
  </p>

  <p>
    Backed by the expertise and infrastructure of CORE FINANCE LIMITED, DemoFX Solution 
    delivers a secure, transparent, and technology-driven trading environment. Our mission 
    is to empower traders and investors with reliable tools, competitive conditions, 
    and real-time market insights to achieve their financial goals.
  </p>

  <p>
    We are committed to excellence in customer experience. Our dedicated support team 
    is available 24/7 to assist with account management, technical support, and trading 
    guidance — ensuring a smooth and efficient trading journey for every client.
  </p>

  <a href="{{ route('about') }}" class="about-btn">More About Us</a>
</div>

      <!-- Right Side: Features -->

</div>
<div class="circle-container">
  <!-- SVG lines connecting cards -->
  <svg class="connect-lines" width="100%" height="100%">
    <path class="line-top-right" />
    <path class="line-right-bottom" />
    <path class="line-bottom-left" />
    <path class="line-left-top" />
  </svg>

  <!-- Cards -->
  <div class="feature-card top">
    <i class="ph ph-seal-check"></i>
    <h3>Experienced</h3>
    <p>Our team of seasoned professionals brings years of expertise to deliver top-notch services and support.</p>
  </div>

  <div class="feature-card right">
    <i class="ph ph-users-three"></i>
    <h3>Professionals</h3>
    <p>Our dedicated team of skilled experts is committed to providing personalized guidance and analysis.</p>
  </div>

  <div class="feature-card bottom">
    <i class="ph ph-clock"></i>
    <h3>Always Available</h3>
    <p>Our platform offers 24/7 accessibility, ensuring you can trade anytime, anywhere.</p>
  </div>

  <div class="feature-card left">
    <i class="ph ph-shield-check"></i>
    <h3>We're Responsible</h3>
    <p>We prioritize safety, compliance, and ethical practices, ensuring responsible trading environments.</p>
  </div>
</div>
  </div>
  <script>
    // JavaScript to dynamically connect lines between cards
const container = document.querySelector('.circle-container');
const lines = {
  topRight: document.querySelector('.line-top-right'),
  rightBottom: document.querySelector('.line-right-bottom'),
  bottomLeft: document.querySelector('.line-bottom-left'),
  leftTop: document.querySelector('.line-left-top'),
};

function connectCards() {
  const svg = container.querySelector('.connect-lines');
  if (!svg || getComputedStyle(svg).display === 'none') return;

  const top = document.querySelector('.feature-card.top').getBoundingClientRect();
  const right = document.querySelector('.feature-card.right').getBoundingClientRect();
  const bottom = document.querySelector('.feature-card.bottom').getBoundingClientRect();
  const left = document.querySelector('.feature-card.left').getBoundingClientRect();
  const svgRect = container.getBoundingClientRect();

  function setCurve(line, start, end) {
    const x1 = start.x - svgRect.left;
    const y1 = start.y - svgRect.top;
    const x2 = end.x - svgRect.left;
    const y2 = end.y - svgRect.top;

    const midX = (x1 + x2) / 2;
    const midY = (y1 + y2) / 2;
    const dx = x2 - x1;
    const dy = y2 - y1;
    const dist = Math.hypot(dx, dy) || 1;

    const nx = -dy / dist;
    const ny = dx / dist;
    const curveStrength = Math.min(70, Math.max(28, dist * 0.12));

    const cx = midX + nx * curveStrength;
    const cy = midY + ny * curveStrength;

    line.setAttribute('d', `M ${x1} ${y1} Q ${cx} ${cy} ${x2} ${y2}`);
  }

  setCurve(lines.topRight, {x: top.left + top.width/2, y: top.top + top.height/2}, {x: right.left + right.width/2, y: right.top + right.height/2});
  setCurve(lines.rightBottom, {x: right.left + right.width/2, y: right.top + right.height/2}, {x: bottom.left + bottom.width/2, y: bottom.top + bottom.height/2});
  setCurve(lines.bottomLeft, {x: bottom.left + bottom.width/2, y: bottom.top + bottom.height/2}, {x: left.left + left.width/2, y: left.top + left.height/2});
  setCurve(lines.leftTop, {x: left.left + left.width/2, y: left.top + left.height/2}, {x: top.left + top.width/2, y: top.top + top.height/2});
}

// Run on load and on resize
window.addEventListener('load', connectCards);
window.addEventListener('resize', connectCards);
    </script>
</section>

<section id="products">

   <!-- Floating Background Coins -->
   <!-- Floating Background Trading Images -->
  <div class="products-bg">
   <img src="{{ asset('pics/coin4 (1).png') }}" alt="Trading Icon 1">
   <img src="{{ asset('pics/coin5 (2).png') }}" alt="Trading Icon 2">
   <img src="{{ asset('pics/coin6 (3).png') }}" alt="Trading Icon 3">

  </div>

  <h2>Trading <span>Products</span></h2>
  <div class="products-slider">
    <div class="product-card">
      
      <h3>Forex</h3>
      <p>The foreign exchange market (Forex) is the largest and most liquid market in the world, 
        open 24 hours a day, five days a week.</p>
      <a href="{{ route('products.show', 'forex') }}" class="arrow-link">Learn More</a>
    </div>
    <div class="product-card">
      
      <h3>Metals</h3>
      <p>Precious metals like gold, silver, platinum, and palladium 
        are considered safe-haven assets, widely used by traders.</p>
      <a href="{{ route('products.show', 'metals') }}" class="arrow-link">Learn More</a>
    </div>
    <div class="product-card">
      
      <h3>Indices</h3>
      <p>Stock market indices represent the performance of groups of leading companies 
        across global economies. Popular indices like S&P 500, NASDAQ, and FTSE provide exposure.</p>
      <a href="{{ route('products.show', 'indices') }}" class="arrow-link">Learn More</a>
    </div>
    <div class="product-card">
      
      <h3>Crypto Currency</h3>
      <p>Cryptocurrencies are decentralized digital assets built on blockchain technology. 
        Popular coins like Bitcoin, and Ripple are known for high volatility and growth potential.</p>
      <a href="{{ route('products.show', 'crypto') }}" class="arrow-link">Learn More</a>
    </div>
    
    <!-- more cards -->
  </div>
  <div class="slider-dots"></div>
</section>


<!-- Onboarding Steps -->
<section id="create-account">
   <h2>Get Started <span> in Minutes</span></h2>
  <div class="steps-wrapper">
    <div class="step left">
      <div class="step-number">1</div>
      <div class="step-content">
        <h3>Create Account</h3>
        <p>Sign up and open your live trading account with Core Finance LTD.</p>
      </div>
    </div>
    <div class="step right">
      <div class="step-number">2</div>
      <div class="step-content">
        <h3>Verify</h3>
        <p>Upload your documents to verify your account with Core Finance LTD.</p>
      </div>
    </div>
    <div class="step left">
      <div class="step-number">3</div>
      <div class="step-content">
        <h3>Invest</h3>
        <p>Log in and fund your account to start investing.</p>
      </div>
    </div>
    <div class="step right">
      <div class="step-number">4</div>
      <div class="step-content">
        <h3>Trade</h3>
        <p>Enjoy hassle-free trading on multiple financial products.</p>
      </div>
    </div>
    <div class="step left">
      <div class="step-number">5</div>
      <div class="step-content">
        <h3>Withdraw</h3>
        <p>Withdraw your profit safe and securely.</p>
      </div>
    </div>
  </div>
</section>



<!-- Pricing / Account Types -->
<section id="pricing">
  <div class="pricing-container">
    <h2>Our <span>Plans</span></h2>
    <div class="pricing-grid">

@foreach($plans as $plan)
    <article class="pricing-card @if($loop->last) highlight-card @endif">
      <div class="price">${{ number_format($plan->price, 0) }}</div>
      <h3>{{ $plan->name }}</h3>
      <ul>
        <li>Leverage {{ $plan->leverage }}</li>
        <li>Min lot size {{ $plan->min_lot_size }}</li>
        <li>Starting from {{ $plan->starting_pips }} pips</li>
        <li>{{ $plan->swap }}</li>
        <li>Commission {{ $plan->commission }}%</li>
        <li>{{ $plan->spread }}</li>
      </ul>
      <a href="https://trade.DemoFXsolutions.com/login" class="btn">Choose plan</a>
    </article>
@endforeach

    </div>
  </div>
</section>

<!-- Meet Our Client Section-->
<section id="testimonials">
  <div class="section-header">
    <h2>Meet Our <span>Clients</span></h2>
    <a href="https://trade.DemoFXsolutions.com/login" class="btn">Be Our Client</a>
  </div>

 


  <div class="testimonial-wrapper">

  <div class="testimonial-container">
    <div class="testimonial-track">

      <!-- Card 1 -->
      <div class="testimonial-card">
        <div class="client-top">
          <img src="{{ asset('pics/client2.jpg') }}" alt="Daniel Thompson">
          <h4>Daniel Thompson</h4>
          <span class="location">London, United Kingdom</span>
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
        </div>
        <p>
          DemoFX Solution delivers exceptional trading conditions. 
          The execution speed is impressive, and the analytics tools help 
          me make informed decisions. It's a reliable platform for serious traders.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="testimonial-card">
        <div class="client-top">
          <img src="{{ asset('pics/client.webp') }}" alt="Fatima Hassan">
          <h4>Fatima Hassan</h4>
          <span class="location">Doha, Qatar</span>
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
        </div>
        <p>
          The platform is very user-friendly and secure. 
          Deposits and withdrawals are processed smoothly, 
          and customer support is available whenever I need help.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="testimonial-card">
        <div class="client-top">
          <img src="{{ asset('pics/client3.webp') }}" alt="Rahul Mehta">
          <h4>Rahul Mehta</h4>
          <span class="location">Chennai, India</span>
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
        </div>
        <p>
          I appreciate the transparency and advanced charting tools. 
          The mobile trading experience is smooth, and I can monitor 
          markets anytime without issues.
        </p>
      </div>

      <!-- Card 4 -->
      <div class="testimonial-card">
        <div class="client-top">
          <img src="{{ asset('pics/client1.avif') }}" alt="Olivia Martinez">
          <h4>Olivia Martinez</h4>
          <span class="location">Madrid, Spain</span>
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
        </div>
        <p>
          Trading with DemoFX Solution has been a great experience. 
          The interface is modern, execution is reliable, and 
          I feel confident managing my investments here.
        </p>
      </div>

    </div>
  </div>
</div>
</section>

<!-- Place this where you want the ticker -->
<div class="tradingview-widget-container">
  <div id="tv-tape"></div>
  <div class="tradingview-widget-copyright">
    <a href="https://www.tradingview.com/markets/" target="_blank" rel="noopener nofollow">
    </a>
  </div>
</div>



<section id="faq">

  <div class="faq-wrapper">

    <!-- Full Width FAQ -->
    <div class="faq-container full-width">
      <h2>Most Common <span>FAQs</span></h2>

      <!-- FAQ Item -->
      <div class="faq-item active">
        <button class="faq-question">
          What Is CFD Trading?
          <span class="faq-icon">&#9650;</span> <!-- ▲ -->
        </button>
        <div class="faq-answer">
          <p>
  A Contract for Difference (CFD) is a financial derivative that allows traders to speculate on the price movements of various assets — such as forex, stocks, indices, commodities, and cryptocurrencies — without actually owning the underlying asset.

  Instead of purchasing the asset itself, you enter into an agreement with a broker to exchange the difference in the asset's price between the time the contract is opened and when it is closed.

  CFDs allow traders to profit in both rising and falling markets by taking either a <strong>long position</strong> (buy) if they expect the price to increase, or a <strong>short position</strong> (sell) if they expect the price to decrease. <br/><br/>

  One of the key advantages of CFD trading is the use of <strong>leverage</strong>, which enables traders to control larger positions with a smaller amount of capital. However, while leverage can increase potential profits, it also significantly increases the level of risk.

  CFDs are popular among traders because they offer flexibility, access to global markets, fast execution, and the ability to hedge existing investments. Proper risk management strategies such as stop-loss and take-profit orders are strongly recommended when trading CFDs.
</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          What Trading Platform Do You Offer?
          <span class="faq-icon">&#9660;</span> <!-- ▼ -->
        </button>
        <div class="faq-answer">
          <p>
  We offer a powerful and secure multi-asset trading platform designed to meet the needs of both beginner and professional traders. Our platform provides real-time market data, advanced charting tools, and a wide range of technical indicators to help you analyze market movements with precision.

  Traders can access multiple asset classes including Forex, commodities, indices, stocks, and cryptocurrencies — all from a single intuitive interface. The platform supports instant trade execution, flexible order types (market, limit, stop-loss, take-profit), and customizable trading layouts.

  <br/> <br/>Our system is built with high-level encryption technology to ensure maximum security of your funds and personal data. It is accessible via desktop, web browser, and mobile devices, allowing you to trade anytime, anywhere.

  Whether you are just starting your trading journey or managing advanced strategies, our platform provides the performance, stability, and tools required to trade with confidence.
</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          How Do I Open A Trading Account?
          <span class="faq-icon">&#9660;</span>
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
        <button class="faq-question">
          What Is Online Trading, How It Work?
          <span class="faq-icon">&#9660;</span>
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
        <button class="faq-question">
          What Risk Management Tools Are Available?
          <span class="faq-icon">&#9660;</span>
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

  </div>
</section>

<section id="payment-methods" class="payment-section">
  <div class="payment-content">

    <div class="payment-head">
      <div class="payment-head-left">
        <p class="payment-label">Payment Methods</p>
        <h2>Global channels trusted by demo clients</h2>
        <p>
          We work with modern wallets, cards, and bank partners so you can top up your account
          quickly and securely. Every deposit is routed through encrypted channels and reviewed
          before it reaches your trading wallet.
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

      <div class="payment-grid" id="paymentGrid">
        <article class="payment-card" data-cat="crypto">
          <img src="{{ asset('pics/payment/c1.png') }}" alt="Tether">
          <span>Tether</span>
        </article>
        <article class="payment-card" data-cat="crypto">
          <img src="{{ asset('pics/payment/c2.png') }}" alt="Ethereum">
          <span>Ethereum</span>
        </article>
        <article class="payment-card" data-cat="wallets">
          <img src="{{ asset('pics/payment/c3.png') }}" alt="PayPal">
          <span>PayPal</span>
        </article>
        <article class="payment-card" data-cat="cards">
          <img src="{{ asset('pics/payment/c4.png') }}" alt="VISA">
          <span>VISA</span>
        </article>
        <article class="payment-card" data-cat="wallets">
          <img src="{{ asset('pics/payment/c5.png') }}" alt="PayPal">
          <span>PayPal</span>
        </article>
        <article class="payment-card" data-cat="wallets">
          <img src="{{ asset('pics/payment/c6.png') }}" alt="PaymentAsia">
          <span>PaymentAsia</span>
        </article>
        <article class="payment-card" data-cat="wallets">
          <img src="{{ asset('pics/payment/c7.png') }}" alt="PayTrust">
          <span>PayTrust</span>
        </article>
        <article class="payment-card" data-cat="wallets">
          <img src="{{ asset('pics/payment/c8.png') }}" alt="PayPort">
          <span>PayPort</span>
        </article>
        <article class="payment-card" data-cat="bank">
          <img src="{{ asset('pics/payment/c9.png') }}" alt="World Pay">
          <span>World Pay</span>
        </article>
        <article class="payment-card" data-cat="cards">
          <img src="{{ asset('pics/payment/c10.png') }}" alt="Verified by VISA">
          <span>Verified by VISA</span>
        </article>
        <article class="payment-card" data-cat="bank">
          <img src="{{ asset('pics/payment/c11.png') }}" alt="myFatoorah">
          <span>myFatoorah</span>
        </article>
        <article class="payment-card" data-cat="wallets">
          <img src="{{ asset('pics/payment/c12.png') }}" alt="Magic Pay">
          <span>Magic Pay</span>
        </article>
        <article class="payment-card" data-cat="bank">
          <img src="{{ asset('pics/payment/c13.png') }}" alt="Dragon Pay">
          <span>Dragon Pay</span>
        </article>
        <article class="payment-card" data-cat="bank">
          <img src="{{ asset('pics/payment/c14.png') }}" alt="Bank Transfer">
          <span>Bank Transfer</span>
        </article>
        <article class="payment-card" data-cat="cards">
          <img src="{{ asset('pics/payment/c15.png') }}" alt="Google Pay">
          <span>Google Pay</span>
        </article>
        <article class="payment-card" data-cat="cards">
          <img src="{{ asset('pics/payment/c16.png') }}" alt="Apple Pay">
          <span>Apple Pay</span>
        </article>
        <article class="payment-card" data-cat="cards">
          <img src="{{ asset('pics/payment/c17.png') }}" alt="MasterCard SecureCode">
          <span>MasterCard SecureCode</span>
        </article>
        <article class="payment-card" data-cat="cards">
          <img src="{{ asset('pics/payment/c18.png') }}" alt="Stripe">
          <span>Stripe</span>
        </article>
      </div>
    </div>

    <div class="payment-foot">
      <div class="payment-note">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        <span>Deposits are usually processed quickly; you will be notified once the funds reach your account.</span>
      </div>
      <div class="payment-meta">Showing <strong id="countLabel">18</strong> channels</div>
    </div>

  </div>
</section>
@endsection

@push('scripts')
<script>
  const faqItems = document.querySelectorAll(".faq-item");

  faqItems.forEach(item => {
    const question = item.querySelector(".faq-question");

    question.addEventListener("click", () => {

      faqItems.forEach(i => {
        if (i !== item) {
          i.classList.remove("active");
          i.querySelector(".faq-icon").innerHTML = "▼";
        }
      });

      item.classList.toggle("active");

      const icon = item.querySelector(".faq-icon");
      icon.innerHTML = item.classList.contains("active") ? "▲" : "▼";
    });
  });
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const counters = document.querySelectorAll(".stat-card .counter");
  if (!counters.length) return;

  function runCounter(counter) {
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

  const cards = document.querySelectorAll(".stat-card");
  if ("IntersectionObserver" in window) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const counter = entry.target.querySelector(".counter");
          if (counter) runCounter(counter);
        }
      });
    }, { threshold: 0.1 });

    cards.forEach((card) => io.observe(card));
  } else {
    counters.forEach(runCounter);
  }

  // Backup trigger for first render
  setTimeout(() => counters.forEach(runCounter), 300);
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
  if (window.__heroSliderRunning) return;
  window.__heroSliderRunning = true;

  const titleEl = document.getElementById("hero-title");
  const textEl = document.getElementById("hero-text");
  if (!titleEl || !textEl) return;

  const slides = [
    {
      title: "Empower Your Trading Journey to Success",
      text: "Where strategy meets opportunity without limits"
    },
    {
      title: "Trade Smarter, Build Stronger Every Day",
      text: "Advanced tools and live insights crafted for your success"
    },
    {
      title: "Begin Your Journey to Financial Independence",
      text: "Join a global network of motivated traders"
    }
  ];

  let index = 0;
  const animateTo = (nextIndex) => {
    titleEl.classList.remove("zoom-in");
    textEl.classList.remove("zoom-in");
    titleEl.classList.add("zoom-out");
    textEl.classList.add("zoom-out");

    setTimeout(() => {
      index = nextIndex % slides.length;
      titleEl.classList.remove("zoom-out");
      textEl.classList.remove("zoom-out");
      titleEl.textContent = slides[index].title;
      textEl.textContent = slides[index].text;
      titleEl.classList.add("zoom-in");
      textEl.classList.add("zoom-in");
    }, 400);
  };

  setInterval(() => animateTo(index + 1), 3000);
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const steps = document.querySelectorAll("#create-account .step");
  if (!steps.length) return;

  steps.forEach((step, i) => {
    setTimeout(() => step.classList.add("show"), i * 200);
  });
});
</script>
<script>
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
