<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package TwoDudesFood
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
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
        <div class="medium-4 columns centered logo">
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" style="color: #222222;"><?php bloginfo( 'name' ); ?></a>
          <?php /**<main class="body large-9 columns" role="main">**/ ?>
          </h1>
        </div>

        <div class="medium-6 medium-offset-2 columns hide-for-small no-pad">
          <div class="top-nav">
            <ul>
              <li><a href="#">HOME</a></li><li><a href="#">ABOUT</a></li><li><a href="#">CONTACT</a></li>
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
      <nav class="row no-pad" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu' ) ); ?>
        <ul class="search-ul">
          <li class="search-toggle-button"><a href="#"></a></li>
        </ul>
      </nav>
      <a class="toggleMenu" href="#">Menu</a>
<!--       <div class="bottom"></div> -->
    </header>

    <div class="page-container row">

      <div class="divider white"></div>

      <main class="body large-9 columns" role="main">


