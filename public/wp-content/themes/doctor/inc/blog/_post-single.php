<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
?> <div class="post-preview"><h1> <?php the_title(); ?> </h1><small> <?php the_time('F jS, Y'); ?> </small> <?php the_content(); ?> </div> <?php endwhile;endif; ?>