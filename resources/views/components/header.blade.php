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

    <button class="hamburger" onclick="toggleMenu()" aria-label="Toggle menu">
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
                    <li><a href="{{ route('forex') }}">Forex</a></li>
                    <li><a href="{{ route('metals') }}">Metals</a></li>
                    <li><a href="{{ route('indices') }}">Indices</a></li>
                    <li><a href="{{ route('crypto') }}">Crypto Currencies</a></li>
                </ul>
            </li>

            <li class="dropdown">
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
            </li>

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

            <li><a href="{{ route('about') }}">Company</a></li>
            <li><a href="{{ route('home') }}#pricing">Accounts</a></li>

            <li class="lang-selector">
                <button type="button" class="lang-btn" aria-expanded="false">
                    <span class="lang-flag">EN</span>
                    <svg class="chevron" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 3l3 3 3-3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </li>

            <li class="login-btn"><a href="https://trade.DemoFXsolutions.com/login">Login</a></li>
        </ul>
    </nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('header .dropdown-btn, header .lang-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            if (window.innerWidth > 768) return;
            const parent = btn.closest('.dropdown, .lang-selector');
            const isOpen = parent.classList.toggle('active');
            btn.setAttribute('aria-expanded', isOpen);
        });
    });
});
</script>