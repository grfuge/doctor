<?php get_header();
  include("navigation.php");
?>
<section class="container section blog-list top bottom">
  <?php get_sidebar(); ?>
  <div class="section--content">
    <?php include("inc/blog/_blog-search.php"); ?>
  </div>
</section>
<?php 
get_footer();
?>