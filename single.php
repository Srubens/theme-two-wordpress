<?php get_header(); 

if( have_posts() ){ 
   while( have_posts() ){
       the_post(); 

?>
<header class="masthead" style="background-image: url('<?php 
   if( has_post_thumbnail() ){
      echo get_the_post_thumbnail_url($post->ID,'full');
   }
?>')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1><?php the_title(); ?></h1>
          <span class="meta">Posted by
            <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ) ?>"><?php the_author(); ?></a>
            <?php echo get_the_date(); ?></span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Post Content -->
<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <p><?php the_content(); ?></p>
      
      </div>
    </div>
  </div>
</article>

    <?php } ?>
<?php } ?>

<?php get_footer(); ?>
