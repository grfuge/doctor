<header class="container-fill header-fill">
  <nav class="container header">
    <div class="header--logo">
      <a class="<?php if( is_front_page() ) { echo 'header-active'; } ?>" href="<?php echo esc_url(site_url('/home')); ?>">Dr. Doe</a>
    </div>
    <div class="header--navigation">
      <a class="<?php if( is_front_page() ) { echo 'header-active'; } ?>" href="<?php echo esc_url(site_url('/home')); ?>">Home</a>
      <a class="<?php if( is_page('about') ) { echo 'header-active'; } ?>" href="<?php echo esc_url(site_url('/about')); ?>">About</a>
      <a class="<?php if( is_page('services') ) { echo 'header-active'; } ?>" href="<?php echo esc_url(site_url('/services')); ?>">Services</a>
      <a class="<?php if( is_page('learn') ) { echo 'header-active'; } ?>" href="<?php echo esc_url(site_url('/learn')); ?>">Learn</a>
      <a class="<?php if( is_page('contact') ) { echo 'header-active'; } ?>" href="<?php echo esc_url(site_url('/contact')); ?>">Contact</a>
      <a class="<?php if( is_page('blog') ) { echo 'header-active'; } ?>" href="<?php echo esc_url(site_url('/blog')); ?>">Blog</a>
    </div>
  </nav>
</header>