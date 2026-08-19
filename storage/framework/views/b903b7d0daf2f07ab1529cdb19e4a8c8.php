

<?php $__env->startSection('title', 'Legal - DemoFX Solution'); ?>

<?php $__env->startSection('content'); ?>
<section class="legal-page">
    <div class="legal-page__container">
        <h1>Legal</h1>

        <p>
            This website is a <strong>demo platform</strong> operated under the name <strong>DemoFX Solution</strong>
            for demonstration and development purposes only. It is not a live trading service, and no real funds,
            accounts, or financial products are involved.
        </p>

        <p>
            Any names, logos, account types, or product references shown across this site are for illustrative
            purposes and do not represent an actual regulated financial services company.
        </p>

        <p>
            By using this site you acknowledge that all trading-related content, pricing, and account information
            is simulated and provided for demo/testing purposes only.
        </p>
    </div>
</section>

<style>
.legal-page{ background:#0d1117; padding:100px 24px; }
.legal-page__container{ max-width:820px; margin:0 auto; color:#c9d1d9; line-height:1.7; }
.legal-page__container h1{ color:#fff; font-size:32px; margin-bottom:24px; }
.legal-page__container p{ margin-bottom:16px; font-size:15px; }
.legal-page__container strong{ color:#fff; }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\projects\demo_solutions\resources\views/legal.blade.php ENDPATH**/ ?>