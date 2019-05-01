<header class="banner  relative bg-semi-transparent mt-10" >

    <div class="container py-4">
      <div class="flex justify-between items-end flex-wrap">
          <h1 class="w-1/3 max-w-xl m-0">
            <a href="/">
              <img src="<?= App\asset_path('images/logo.svg'); ?>" class="block">
            </a>
          </h1>
          <button class="md:hidden appearance-none outline-none" onClick="console.log(jQuery('#main-nav').slideToggle())">
          <?php echo $__env->make('hamburger', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </button>
          <nav id="main-nav" class="nav-primary mt-4 w-full md:w-auto hidden md:block">
            <?php if(has_nav_menu('primary_navigation')): ?>
              <?php echo wp_nav_menu(['depth'=>1, 'theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

            <?php endif; ?>
          </nav>
      </div>
    </div>
</header>
