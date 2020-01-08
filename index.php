<?php get_header(); ?>

<!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php bloginfo('template_url'); ?>/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Clean Blog</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
          </div>
        </div>
      </div>
    </div>
  </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        
          <!-- AQUI VEM OS POSTS -->

          <?php if( have_posts() ){ ?>
            <?php while( have_posts() ){ ?>
              <?php the_post(); ?>

            <!-- FOI PARA PASTA TEMPLATE_PARTS -->
            <?php get_template_part('template_parts/post'); ?>
                  
                <?php } ?>
          <?php } ?>

          <!-- AQUI VEM OS POSTS -->

          <!-- Pager -->
          <div class="clearfix">
            <?php next_posts_link('Proxima Pagina'); ?>
            <?php previous_posts_link('Post Anterior'); ?>
          </div>
        </div>
      </div>
    </div>

 <?php get_footer(); ?>