<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label for="">Search Blog Posts</label>
  <div class="search-container">
    <input class="search-input" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input class="search-button" type="submit" id="search-submit" value="&#128269;" />
  </div>
</form>