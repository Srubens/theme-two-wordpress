<!DOCTYPE html>
<html lang="pt-br">

  <head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="<?php bloginfo('author'); ?>">

  <title><?php bloginfo('name'); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">

      <?php 

         //LOGO CUSTOMIZADA
         if( has_custom_logo() ){
            the_custom_logo();
         } 

      ?>

  <div class="container">

      <a class="navbar-brand" href="<?= home_url('/') ?>">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>

      <?php 
         
         if( has_nav_menu('primary') ){
            wp_nav_menu([
              'theme_location' => 'primary',
              'fallback_cb' => false,
              'container_class' => 'collapse navbar-collapse',
              'container_id' => 'navbarResponsive',
              'menu_class' => 'navbar-nav ml-auto',
              'walker' => new WP_Bootstrap_Navwalker(),
              'depth' => 2
            ]);
          }
   
      ?>
  </div>

  </nav>
