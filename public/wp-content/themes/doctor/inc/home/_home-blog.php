<section class="home-blog container section"><div class="section--title"><h1>Blog</h1></div><div class="section--content"> <?php
      $args = array(
        'post_type' => 'post', 
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'ignore_sticky_posts' => true,
        'order' => 'DESC',
        'orderby' => 'date'
      );
      $query = new WP_Query( $args );
      while ( $query->have_posts() ) : $query->the_post();
    ?> <div class="post-preview"><a class="section--button" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a><small> <?php the_time('F jS, Y'); ?> </small> <?php the_excerpt(); ?> </div> <?php endwhile; ?> <a class="section--button" href="<?php echo esc_url(site_url('/blog')); ?>">All Blog Posts</a></div></section>