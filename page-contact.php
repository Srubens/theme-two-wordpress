<?php get_header(); ?>

<?php while( have_posts() ){ ?>
    <?php the_post(); ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php bloginfo('template_url'); ?>/img/contact-bg.jpg')">
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

      <form name="sentMessage" id="contactForm" novalidate>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Nome</label>
            <input type="text" class="form-control" placeholder="Seu Nome" id="name" required data-validation-required-message="Please enter your name.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Seu Email" id="email" required data-validation-required-message="Please enter your email address.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Telefone</label>
            <input type="tel" class="form-control" placeholder="Seu Telefone" id="phone" required data-validation-required-message="Please enter your phone number.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Mensagem</label>
            <textarea rows="5" class="form-control" placeholder="Mensagem" id="message" required data-validation-required-message="Please enter a message."></textarea>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <br>
        <div id="success"></div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar Mensagem</button>
        </div>
      </form>

    </div>
  </div>
</div>

<?php } ?>


<?php get_footer(); ?>