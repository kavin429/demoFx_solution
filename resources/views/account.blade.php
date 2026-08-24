@extends('layouts.app')

@section('title', 'Account Types - Fundamental Capital Ltd')

@section('content')

<!-- ===== PLANS HERO SECTION ===== -->
<section class="plans-hero">
  <span class="eyebrow eyebrow--center">Account Types</span>
  <h1>Accounts for every trader</h1>
  <p>Choose the account that matches your trading style and goals.</p>
</section>

<!-- ===== PLANS INTRO + GRID SECTION ===== -->
<section class="plans-intro" id="plans">
  <div class="container">
    <h2>Pick a Plan, Start in Minutes</h2>
    <p>
      Whether you're just starting out or trading serious size, there's a
      GrowthCapital account built for you. Every account includes access to
      all markets, our full platform suite and 24/7 support — you can
      upgrade as you grow.
    </p>
  </div>

  <div class="plans-grid">

    <!-- Lite -->
    <div class="plan-card">
      <div class="plan-card__name">Lite</div>
      <div class="plan-card__price">
        <span class="amount">$250</span>
        <span class="label">min. deposit</span>
      </div>
      <ul class="plan-card__features">
        <li>Forex</li>
        <li>5% withdrawal commission</li>
        <li>Standard spreads</li>
        <li>24/7 support</li>
      </ul>
      <a href="https://trade.fundamentalcapitalltd.com/register?type=LIVE" class="plan-card__cta">Open Lite</a>
    </div>

    <!-- Pro (Popular) -->
    <div class="plan-card plan-card--popular">
      <span class="plan-card__badge">Popular</span>
      <div class="plan-card__name">Pro</div>
      <div class="plan-card__price">
        <span class="amount">$2,500</span>
        <span class="label">min. deposit</span>
      </div>
      <ul class="plan-card__features">
        <li>Forex &amp; Commodities</li>
        <li>5% withdrawal commission</li>
        <li>Standard spreads</li>
        <li>Priority support</li>
      </ul>
      <a href="https://trade.fundamentalcapitalltd.com/register?type=LIVE" class="plan-card__cta">Open Pro</a>
    </div>

    <!-- VIP -->
    <div class="plan-card">
      <div class="plan-card__name">VIP</div>
      <div class="plan-card__price">
        <span class="amount">$25,000</span>
        <span class="label">min. deposit</span>
      </div>
      <ul class="plan-card__features">
        <li>All markets &amp; assets</li>
        <li>5% withdrawal commission</li>
        <li>Standard spreads</li>
        <li>VIP support</li>
      </ul>
      <a href="https://trade.fundamentalcapitalltd.com/register?type=LIVE" class="plan-card__cta">Open VIP</a>
    </div>

    <!-- Raw (0 Spread) -->
    <div class="plan-card">
      <div class="plan-card__name">Raw (0 Spread)</div>
      <div class="plan-card__price">
        <span class="amount">$500</span>
        <span class="label">min. deposit</span>
      </div>
      <ul class="plan-card__features">
        <li>Commodities</li>
        <li>5% withdrawal commission</li>
        <li>0 spreads</li>
        <li>24/7 support</li>
      </ul>
      <a href="https://trade.fundamentalcapitalltd.com/register?type=LIVE" class="plan-card__cta">Open Raw</a>
    </div>

  </div>

  <p class="plans-disclaimer">
    Leverage involves a high level of risk and may not be suitable for all investors.
  </p>
</section>

<!-- ===== GET STARTED / STEPS SECTION ===== -->
<section class="steps-section" id="get-started">
  <div class="container">
    <span class="eyebrow eyebrow--center">Get started</span>
    <h2>Open Your Account in 3 Steps</h2>

    <div class="steps-row">
      <div class="step-card">
        <div class="step-card__num">1</div>
        <h3>Register</h3>
        <p>Complete the quick online registration with your details — it only takes a few minutes.</p>
      </div>

      <div class="step-card">
        <div class="step-card__num">2</div>
        <h3>Verify &amp; Fund</h3>
        <p>Verify your identity and fund your account using any of our secure payment methods.</p>
      </div>

      <div class="step-card">
        <div class="step-card__num">3</div>
        <h3>Start Trading</h3>
        <p>Log in to the platform and trade global markets across all asset classes.</p>
      </div>
    </div>

    <a href="https://trade.fundamentalcapitalltd.com/register?type=LIVE" class="steps-cta">Open an Account</a>
  </div>
</section>

<!-- ===== FAQ SECTION ===== -->
<section id="faq">
  <div class="container">
    <span class="eyebrow eyebrow--center">Good to know</span>
    <h2>Account FAQs</h2>

    <div class="faq-container">

      <div class="faq-item">
        <button type="button" class="faq-question">
          How much do I need to start?
          <i class="ph ph-plus faq-icon"></i>
        </button>
        <div class="faq-answer">
          <p>You can open a Lite account with a minimum deposit of just $250. Other account types have higher minimums that unlock tighter spreads and additional benefits.</p>
        </div>
      </div>

      <div class="faq-item">
        <button type="button" class="faq-question">
          Can I upgrade my account later?
          <i class="ph ph-plus faq-icon"></i>
        </button>
        <div class="faq-answer">
          <p>Yes. You can move to a higher tier at any time as your trading grows — just contact our support team or top up to the required level.</p>
        </div>
      </div>

      <div class="faq-item">
        <button type="button" class="faq-question">
          What can I trade?
          <i class="ph ph-plus faq-icon"></i>
        </button>
        <div class="faq-answer">
          <p>All accounts give you access to Forex, Metals, Indices and Cryptocurrencies — over 180 instruments in total.</p>
        </div>
      </div>

      <div class="faq-item">
        <button type="button" class="faq-question">
          How do I deposit and withdraw?
          <i class="ph ph-plus faq-icon"></i>
        </button>
        <div class="faq-answer">
          <p>We support cards, bank wire, e-wallets and crypto. Deposits are typically instant, and withdrawals are processed promptly to your original payment method.</p>
        </div>
      </div>

      <div class="faq-item">
        <button type="button" class="faq-question">
          Is there a demo account?
          <i class="ph ph-plus faq-icon"></i>
        </button>
        <div class="faq-answer">
          <p>Yes — you can practise risk-free on a demo account with virtual funds before trading live.</p>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection