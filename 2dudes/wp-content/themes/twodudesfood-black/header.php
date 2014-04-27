<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package TwoDudesFood
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<!--
Created by Eric Segev, 2013
-->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container" id="page">
    <?php do_action( 'before' ); ?>
    <header role="banner">
      <div class="row no-pad block" id="header">
        <div class="medium-8 columns centered logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title" rel="home" style="color: #222222;"><img src="<?php bloginfo('stylesheet_directory'); ?>/2dudesfood/stylesheets/header.png" alt="header"></a>
        </div>

        <div class="medium-4 columns hide-for-small no-pad">
          <div class="top-nav">
            <ul>
              <li><a class="text" href="#">About</a></li><li><a>|</a></li><li><a href="#" class="text">Press</a></li><li><a>|</a></li><li><a href="#" class="text">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="bottom">
        <div class="row search-toggle">
          <div class="medium-6 medium-offset-6 columns">
          <?php get_search_form(); ?>
          </div>
        </div>
      </div>
<!--
      <nav class="row no-pad" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu' ) ); ?>
        <ul class="search-ul">
          <li class="search-toggle-button"><a href="#"></a></li>
        </ul>
      </nav>
      <a class="toggleMenu" href="#">Menu</a>
-->
    </header>

    <div class="page-container row">
      <nav class="row" role="navigation" style="margin-left: 0px; margin-right: 0px;">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu' ) ); ?>
        <ul class="search-ul">
          <li class="search-toggle-button"><a href="#">Search <img id="srch" src="<?php bloginfo('stylesheet_directory'); ?>/2dudesfood/stylesheets/search.png" alt="search"></a></li>
        </ul>
      </nav>
      <a class="toggleMenu" href="#">Menu</a>

<!--       <div class="divider white"></div> -->

      <main class="body medium-9 columns" role="main">


