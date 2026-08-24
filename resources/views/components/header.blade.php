<!-- ===== HEADER ===== -->
<header>
    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('pics/logo.png') }}" alt="Fundamental Capital Ltd Logo" class="logo-img">
        </a>
    </div>

    @php
        $activeTab = request()->route()?->getName();

        $megaMenus = [
    'Trading' => [
        ['url' => route('products.show', 'forex'),       'icon' => 'ph-currency-circle-dollar', 'label' => 'Forex'],
        ['url' => route('products.show', 'metals'),      'icon' => 'ph-coin',                    'label' => 'Metals'],
        ['url' => route('products.show', 'indices'),     'icon' => 'ph-chart-bar',               'label' => 'Indices'],
        ['url' => route('products.show', 'commodities'), 'icon' => 'ph-drop',                    'label' => 'Commodities'],
        ['url' => route('products.show', 'crypto'),      'icon' => 'ph-currency-btc',            'label' => 'Crypto Currencies'],
    ],
    'Resources' => [
    ['url' => route('products.resources', 'trading-calculators'),  'icon' => 'ph-calculator',     'label' => 'Trading Calculators'],
    ['url' => route('products.resources', 'economic-calendar'),    'icon' => 'ph-calendar-blank', 'label' => 'Economic Calendar'],
    ['url' => route('products.resources', 'trading-glossary'),     'icon' => 'ph-book-open',      'label' => 'Trading Glossary'],
    ['url' => route('products.resources', 'news'),                 'icon' => 'ph-newspaper', 'label' => 'News'],
    ['url' => route('products.resources', 'market-updates'),       'icon' => 'ph-trend-up',       'label' => 'Market Updates'],
    ['url' => route('risk-disclosure'),                            'icon' => 'ph-shield-check',   'label' => 'Risk Disclosure'],
],
'Company' => [
    ['url' => route('products.company', 'why-fundamentalCapital'), 'icon' => 'ph-shield-check',  'label' => 'Why Fundamental Capital Ltd'],
    ['url' => route('products.company', 'reviews'),                'icon' => 'ph-star',          'label' => 'Reviews'],
    ['url' => route('products.company', 'blog'),                   'icon' => 'ph-newspaper',     'label' => 'Fundamental Capital Ltd Blog'],
    ['url' => route('products.company', 'faqs'),                    'icon' => 'ph-question',      'label' => 'FAQs'],
],
        ];
    @endphp

    <div class="product-tabs">
        <a href="{{ route('home') }}" class="product-tab {{ $activeTab === 'home' ? 'tab-active' : '' }}">
            <span>Trade</span>
        </a>
        <a href="{{ route('platform') }}" class="product-tab {{ $activeTab === 'platform' ? 'tab-active' : '' }}">
            <span>Invest</span>
        </a>
        <span class="product-tab tab-disabled" aria-disabled="true">
            <span>Crypto</span>
            <span class="tab-soon">soon</span>
        </span>
        <span class="product-tab tab-disabled" aria-disabled="true">
            <span>Pay</span>
            <span class="tab-soon">soon</span>
        </span>
    </div>

    <button class="hamburger" aria-label="Toggle menu" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <nav>
        <ul class="menu" id="navMenu">

            @foreach ($megaMenus as $label => $items)
                <li class="dropdown dropdown-mega">
                    <button type="button" class="dropdown-btn" aria-expanded="false">
                        <span>{{ $label }}</span>
                        <svg class="chevron" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 3l3 3 3-3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <div class="dropdown-menu dropdown-mega-menu">
                        <div class="dropdown-mega-head">
                            <span class="dropdown-mega-label">{{ $label }}</span>
                        </div>

                        <div class="dropdown-mega-grid">
                            @foreach ($items as $item)
                                <a href="{{ $item['url'] }}" class="dropdown-mega-item">
                                    <span class="dropdown-mega-icon"><i class="ph {{ $item['icon'] }}"></i></span>
                                    <span class="dropdown-mega-text">
                                        <strong>{{ $item['label'] }}</strong>
                                    </span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </li>
            @endforeach

            <li><a href="{{route('contact') }}">Contact Us</a></li>
            <li><a href="{{ route('account') }}">Accounts</a></li>
        </ul>
        <div class="hero-buttons">
           <a href="https://trade.fundamentalcapitalltd.com/login">Login</a>
        </div>
    </nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.querySelector('.hamburger');
    const nav = document.querySelector('header nav');
    const body = document.body;

    const overlay = document.createElement('div');
    overlay.className = 'nav-overlay';
    document.body.appendChild(overlay);

    function openMenu() {
        hamburger.classList.add('active');
        nav.classList.add('active');
        overlay.classList.add('active');
        body.classList.add('nav-open');
        hamburger.setAttribute('aria-expanded', 'true');
    }

    function closeMenu() {
        hamburger.classList.remove('active');
        nav.classList.remove('active');
        overlay.classList.remove('active');
        body.classList.remove('nav-open');
        hamburger.setAttribute('aria-expanded', 'false');
    }

    hamburger.addEventListener('click', function () {
        nav.classList.contains('active') ? closeMenu() : openMenu();
    });

    overlay.addEventListener('click', closeMenu);

    nav.querySelectorAll('ul.menu > li > a').forEach(function (link) {
        link.addEventListener('click', closeMenu);
    });

    document.querySelectorAll('header .dropdown-btn, header .lang-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            if (window.innerWidth > 768) return;
            const parent = btn.closest('.dropdown, .lang-selector');
            const isOpen = parent.classList.contains('active');

            document.querySelectorAll('header .dropdown.active, header .lang-selector.active').forEach(function (el) {
                if (el !== parent) {
                    el.classList.remove('active');
                    const otherBtn = el.querySelector('.dropdown-btn, .lang-btn');
                    if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
                }
            });

            parent.classList.toggle('active', !isOpen);
            btn.setAttribute('aria-expanded', !isOpen);
        });
    });
});
</script>