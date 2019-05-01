<h1 class="text-lg text-blue-dark uppercase tracking-wide"><?php echo App::title(); ?></h1>
<?php the_content() ?>
<?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

