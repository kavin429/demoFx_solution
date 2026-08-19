<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DemoFX Solution</title>
  <link rel="icon" type="pics/icon.png" href="<?php echo e(asset('pics/logo.png')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


</head>
<body>

<?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>  

<!-- ===== PAGE WRAPPER CARD ===== -->
<div class="page-card">



  <!-- ===== HERO SECTION ===== -->
  <section class="hero">
    <video autoplay muted loop playsinline class="hero-video">
      <source src="<?php echo e(asset('pics/Indices1.mp4')); ?>" type="video/mp4">
    </video>
    <div class="overlay"></div>
    <div class="hero-content">
      <h1>Indices Trading</h1>
      <p>Unlock the world’s largest financial market</p>
    </div>
  </section>

  <!-- ===== PRODUCT DESCRIPTION ===== -->
  <section class="product-description fade-section">
    <div class="container">
      <h2>INDICES</h2>
      <p>
       More than 20 Major Indices. DemoFX Solution provides exposure 
       to the major stock indices across the world through index 
       CFDs, at competitive leverage on world-class trading platforms. 
       Online CFD indices trading is a great way to participate in 
       the top global stock markets such as the NASDAQ, DAX and the 
       FTSE and trade with some of the best possible spreads An index is 
       the easiest way to track the overall performance of the economy. 
       It provides a general insight whether the economy is in a boom or in a recession.
    </p>
    </div>
  </section>

</div>


<?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- Dark Mode Toggle
<button id="darkModeToggle" class="dark-toggle">
  🌙
</button> -->

<!-- Back to Top Button -->
<button id="backToTop" class="back-to-top">
  ↑
</button>


<script src="<?php echo e(asset('js/products.js')); ?>"></script>
<script src="<?php echo e(asset('js/test.js')); ?>"></script>

<!--Start of Tawk.to Script
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/691d584acbe5561957e7e179/1jada1p7f';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script-->

</body>
</html>

<?php /**PATH C:\projects\demo_solutions\resources\views/indices.blade.php ENDPATH**/ ?>