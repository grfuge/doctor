<?php
  get_header();
  include("navigation.php");
  if ( is_front_page() ) {
    include("inc/home/_home-hero.php");
    include("inc/home/_home-about.php");
    include("inc/home/_home-services.php");
    include("inc/home/_home-learn.php");
    include("inc/home/_home-contact.php");
    include("inc/home/_home-blog.php");
  }
  else if ( is_page('about') ) {
    include("inc/about/_about-article.php");
    include("inc/about/_about-facility.php");
    include("inc/about/_about-work.php");
  }
  else if ( is_page('services') ) {
    include("inc/services/_services-heading.php");
    include("inc/services/_services-diet.php");
    include("inc/services/_services-fasting.php");
    include("inc/services/_services-stress.php");
  }
  else if ( is_page('learn') ) {
    include("inc/learn/_learn-diet.php");
    include("inc/learn/_learn-nutrition.php");
    include("inc/learn/_learn-fasting.php");
    include("inc/learn/_learn-stress.php");
    include("inc/learn/_learn-stories.php");
  }
  else if ( is_page('contact') ) {
    include("inc/contact/_contact-information.php");
    include("inc/contact/_contact-staff.php");
    include("inc/contact/_contact-map.php");
  }
  else if ( is_page('blog') ) {
    include("inc/blog/_blog-list.php");
  }
  get_footer();
?>