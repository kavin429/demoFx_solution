<!-- ===== HEADER ===== -->
<header>
    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('pics/logo.png') }}" alt="DemoFX Solution Logo" class="logo-img">
        </a>
    </div>

    @php
        $activeTab = request()->route()?->getName();
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

            <li class="dropdown">
                <button type="button" class="dropdown-btn" aria-expanded="false">
                    <span>Trading</span>
                    <svg class="chevron" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 3l3 3 3-3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('products.show', 'forex') }}">Forex</a></li>
                    <li><a href="{{ route('products.show', 'metals') }}">Metals</a></li>
                    <li><a href="{{ route('products.show', 'indices') }}">Indices</a></li>
                    <li><a href="{{ route('products.show', 'crypto') }}">Crypto Currencies</a></li>
                    <li><a href="{{ route('products.show', 'commodities') }}">Commodities</a></li>
                </ul>
            </li>

            <!-- <li class="dropdown">
                <button type="button" class="dropdown-btn" aria-expanded="false">
                    <span>Offering</span>
                    <svg class="chevron" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 3l3 3 3-3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('platform') }}">Platform</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                </ul>
            </li> -->

            <li class="dropdown">
                <button type="button" class="dropdown-btn" aria-expanded="false">
                    <span>Resources</span>
                    <svg class="chevron" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 3l3 3 3-3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <button type="button" class="dropdown-btn" aria-expanded="false">
                    <span>Company</span>
                    <svg class="chevron" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 3l3 3 3-3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('contact') }}">Why DemoFX Solution</a></li>
                    <li><a href="{{ route('contact') }}">Reviews</a></li>
                    <li><a href="{{ route('contact') }}">DemoFX Solution Blog</a></li>
                    <li><a href="{{ route('contact') }}">Market Updates</a></li>
                    <li><a href="{{ route('contact') }}">Forecast & Predictions</a></li>
                    <li><a href="{{ route('contact') }}">FAQs</a></li>
                </ul>
            </li>
            <li><a href="{{ route('home') }}#pricing">Contact Us</a></li>
            <li><a href="{{ route('home') }}#pricing">Accounts</a></li>
        </ul>
        <div class="hero-buttons">
           <a href="https://trade.DemoFXsolutions.com/login">Login</a>
</div>
    </nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.querySelector('.hamburger');
    const nav = document.querySelector('header nav');
    const body = document.body;

    // Create the overlay dynamically so you don't have to touch other templates
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

    // Tap outside the panel closes it
    overlay.addEventListener('click', closeMenu);

    // Tapping a nav link closes the menu too (so it doesn't stay open after navigation on same-page anchors)
    nav.querySelectorAll('ul.menu > li > a').forEach(function (link) {
        link.addEventListener('click', closeMenu);
    });

    // Dropdown toggles — accordion style on mobile
    document.querySelectorAll('header .dropdown-btn, header .lang-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            if (window.innerWidth > 768) return;
            const parent = btn.closest('.dropdown, .lang-selector');
            const isOpen = parent.classList.contains('active');

            // Close all other dropdowns first
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