<div class="sidebar"><div class="sidebar--container"> <?php get_search_form(); ?> <h4 class="sidebar--title">Categories</h4><ul class="sidebar--list"> <?php
      wp_list_categories( array(
        'orderby'    => 'name',
        'show_count' => false,
        'title_li'   => ''
      ));
      ?> </ul> <?php 
      if( !is_page('blog') ) { ?> <a class="blog-return" href="<?php echo esc_url(site_url('/blog')); ?>">&#9664; All Posts</a> <?php } ?> </div></div>