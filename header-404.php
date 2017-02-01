<?php
/**
 * The header for 404 not found.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content"> for 404
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
<meta name="author" content="Pranav Rao">
<meta name="description" content="PR Digital: Your Digital Needs, Delivered. If you are looking for graphic design, logos, flyers, posters, publishing, websites, WordPress theme development and all else digital, then PR Digital can deliver the perfect product on time and on a budget. I strive to maintain low prices and affordable rates, without compromising on quality.">
<meta name="generator" content="WordPress">
<meta name="keywords" content="">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
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

        <!-- /.navbar-collapse --> 
      </div>
      <!-- /.container-fluid --> 
    </nav>
	<div id="content" class="container">