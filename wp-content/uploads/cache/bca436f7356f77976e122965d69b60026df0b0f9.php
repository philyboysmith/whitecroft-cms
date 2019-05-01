<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
  <div class="container">
    <div class="content-wrapper">
      <h1 class="text-lg text-blue-dark uppercase tracking-wide"><?php echo App::title(); ?></h1>
        <div class="md:flex">
          <div class="map"></div>
          <div><?php the_content() ?></div>
        </div>  
    </div>
    </div>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>