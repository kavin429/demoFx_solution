<!-- ===== HEADER ===== -->
<header>
    <div class="logo">
        <a href="<?php echo e(route('home')); ?>">
            <img src="<?php echo e(asset('pics/logo.png')); ?>" alt="DemoFX Solution Logo" class="logo-img">
        </a>
    </div>

    <div class="hamburger" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <nav>
        <ul class="menu" id="navMenu">
            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
            <li><a href="<?php echo e(route('about')); ?>">About Us</a></li>
            <li class="dropdown">
                <a href="#">Trading Products ▾</a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo e(route('forex')); ?>">Forex</a></li>
                    <li><a href="<?php echo e(route('metals')); ?>">Metals</a></li>
                    <li><a href="<?php echo e(route('indices')); ?>">Indices</a></li>
                    <li><a href="<?php echo e(route('crypto')); ?>">Crypto Currencies</a></li>
                </ul>
            </li>
            <li><a href="<?php echo e(route('platform')); ?>">Platform</a></li>
            <!--<li><a href="<?php echo e(route('mutualfunds')); ?>">Mutual Funds</a></li> -->
            <li><a href="<?php echo e(route('contact')); ?>">Contact Us</a></li>
            <li class="login-btn"><a href="https://trade.DemoFXsolutions.com/login">Log In</a></li>
        </ul>
    </nav>
</header><?php /**PATH C:\projects\demo_solutions\resources\views/header.blade.php ENDPATH**/ ?>