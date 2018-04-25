<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lightpanels
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link href="<?php bloginfo("template_directory"); ?>/img/lightpanel.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/css/normalize.css">
		<?php wp_head(); ?>
    <style type="text/css" media="screen">
	html { margin-top: 0 !important; }
	* html body { margin-top: 0 !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 0 !important; }
		* html body { margin-top: 0 !important; }
	}
    </style>
    <!-- Пользвательский код!-->
    <?php the_field('head_filds'); ?>
    <!-- Пользвательский код!-->
<meta name="yandex-verification" content="962d17dfc5abf874" />
  </head>
  <body>
    <span id="top"></span>
    <header class="main-header">
      <div class="container clearfix">
        <div class="main-header-logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php dynamic_sidebar( 'logo-h' ); ?></a>
          <div class="main-menu-toggle">
            <div id="menu-toggle" class="header-menu-toggle">
              <button type="button" name="button">
                <span>menu</span>
              </button>
            </div>
          </div>
        </div>
        <nav id="menu-nav" class="main-header-menu">
          <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
        </nav>
        <div class="main-header-contacts">
          <?php dynamic_sidebar( 'phone' ); ?>
          <?php dynamic_sidebar( 'phone_n' ); ?>
          <?php dynamic_sidebar( 'work_filds' ); ?>
        </div>
      </div>
    </header>
