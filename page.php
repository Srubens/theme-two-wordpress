<?php get_header(); ?>

<?php while( have_posts() ){ ?>
    <?php the_post(); ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php 
  if( has_post_thumbnail() ){
      echo get_the_post_thumbnail_url($post->ID,'full');
   }
?>'); ?>/img/about-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">

      <p><?php the_content(); ?></p>
    
    </div>
  </div>
</div>

<?php } ?>


<?php get_footer(); ?>