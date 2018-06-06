<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  query_posts(array(
    'post_type'      => 'post',
    'paged'          => $paged,
    'posts_per_page' => get_option('posts_per_page')
  ));

  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?> <div class="post-preview post-preview-full"><a class="section--button" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a><small> <?php the_time('F jS, Y'); ?> </small> <?php the_excerpt(); ?> </div> <?php
    endwhile;
    my_pagination();
    ?> <?php
    wp_reset_postdata();
    else:
      echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
    endif;
    ?>