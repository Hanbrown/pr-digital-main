<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PR_Digital_Main
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="application-name" content="<?php bloginfo( 'name' ); ?>">
	<meta name="author" content="<?php echo get_user_meta( 1, 'name', true ); ?>">
	<meta name="description" content="Pranav Rao: My Digital Portfolio. This is where I showcase my works in graphic design, webs design, and programming. Feel free to peruse my portfolio, and drop me a line if you have any comments.">
	<meta name="generator" content="WordPress">
	<meta name="keywords" content="Pranav, Rao, pranav, rao, Digital, Portfolio, digital, portfolio, About, about, saratoga, Saratoga, Portal, portal">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<style type="text/css">
		a.talk, .toTop, .dropdown-menu{
			background-color: #<?php background_color(); ?>;
		}
		
		a.talk:hover, .toTop:hover{
			color: #<?php background_color(); ?>;
		}
	</style>
</head>

<body <?php body_class(); ?>>
    <span id="top"></span>
	<a class="sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'prdigital' ); ?></a>
    <nav class="navbar navbar-default navbar-inverse container">
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" id="menu-toggle" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <aside id="bars"><span class="sr-only">Toggle navigation</span> <span id="b1" class="icon-bar"></span> <span id="b2" class="icon-bar"></span> <span id="b3" class="icon-bar"></span></aside> </button>
          <?php echo the_custom_logo(); ?>      
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php wp_nav_menu( array( 
				'menu_class' => 'nav navbar-nav navbar-right',

			) ); ?>
        </div>
        <!-- /.navbar-collapse --> 
      </div>
      <!-- /.container-fluid --> 
    </nav>
	<?php get_template_part( 'template-parts/content', 'modal'); ?>
	<div id="content" class="container">