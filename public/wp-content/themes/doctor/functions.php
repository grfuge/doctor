<?php
  function custom_editor_styles() {
    add_editor_style( bloginfo('template_url') . '/css/style.css');
  }
  add_action( 'admin_init', 'custom_editor_styles' );
  function wpdocs_custom_excerpt_length( $length ) {
    return 20;
  }
  add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
  function wpdocs_excerpt_more( $more ) {
      return '&hellip;';
  }
  add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

  function is_posts_nav() {
    global $wp_query;
    return ($wp_query->max_num_pages > 1);
  }

  if ( ! function_exists( 'my_pagination' ) ) :
    function my_pagination() {
      global $wp_query;

      $big = 999999999;
    ?> <div class="pagination"> <?php
      echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages
      ) );
    ?> </div> <?php
  } endif; ?>