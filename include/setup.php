<?php 

/**
ADD O STYLE O SCRIPT DO SITE
*/
function rt_theme_styles(){
	/**
	 priemrio o nome
	 segundo o diretorio
	*/
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css?ver=1');
	wp_enqueue_style('clean-blog', get_template_directory_uri() . '/css/clean-blog.css?ver=1');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');

	// FONTES
	wp_enqueue_style('google-font-lora', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
	wp_enqueue_style('google-font-open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');

	// SCRIPTS

	wp_enqueue_script('theme-jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js');
	wp_enqueue_script('theme-js', get_template_directory_uri() . '/vendor/jquery/jquery.js', array('jquery'), '', true);
	
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js');
	wp_enqueue_script('clean-blog-js', get_template_directory_uri() . '/js/clean-blog.min.js');
	
}

/**
ADD MENUS AO TEMA
*/
function rt_after_setup(){

	// SUPORTE PARA IMAGENS 
	add_theme_support('post-thumbnails');

	//SUPORTE PARA TITLE DO TEMA
	add_theme_support('title-tag');

	//LOGO CUSTOMIZADA
	add_theme_support('custom-logo');

	//SUPORTE PARA MENUS
	add_theme_support('menus');

	register_nav_menu('primary', __('Primary Menu','temaOne'));
	register_nav_menu('footer', 'Menu Rodapé');

	// REMOVENDO A BARRA DO ADMIN
	show_admin_bar(false);

}

/***
CRIANDO WIDGETS
*/
function rt_widgets(){
	//CRIA A FUNÇÃO SIDEBAR
	/* SE QUISERMOS COLOCAR TAGS E CSS DIFERENTES COLOCAMOS AQUI NO BEFORE OU AFTER TITLE
	   AO MESMO SE QUISERMO COLOCAR ANTES OU DEPOIS DO WIDGETS 
	   - %1$s ISSO IRA FAZER COM QUE AUTOMATICAMENTE ELE COLOCOQUE QUANDO FOR EXIBIR OS WIDGETS 
	   O ID PADRÃO DO WIDGET ESPECIFICO O MESMO FUNCIONA COM CLASSE TB
	   EX: class="widget %2$s"
	 */
	register_sidebar(array(
		'name' => __('Meu Primeiro Sidebar', 'temaone'),
		'id' => 'rt_sidebar',
		'description' => __('Sidebar para o tema', 'temaone'),
		'before_title' => '',
		'after_title' => '',
		'before_widget' => '',
		'after_widget' => '',
	));
}

/**
* COLOCANDO CSS NOS BOTOES PREV E NEXT PAGE
*/
function posts_link_attributes(){
	return ' class="btn btn-primary float-right" ';
}

/**
* CUSTOMIZANDO O LEIA MAIS 
*/
function new_excerpt_more($length) {
	return 18;
}