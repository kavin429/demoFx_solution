
<?php
    $active = $active ?? request()->route()?->getName();
?>

<div class="product-tabs">
    <a href="<?php echo e(route('home')); ?>" class="product-tab <?php echo e($active === 'home' ? 'tab-active' : ''); ?>">
        <span>Trade</span>
    </a>
    <a href="<?php echo e(route('platform')); ?>" class="product-tab <?php echo e($active === 'platform' ? 'tab-active' : ''); ?>">
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
</div><?php /**PATH C:\projects\demo_solutions\resources\views/components/product-tabs.blade.php ENDPATH**/ ?>