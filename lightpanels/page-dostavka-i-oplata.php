<?php
/**
 * Template Name: Доставка
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lightpanels
 */

get_header(); ?>

<main>
	<div class="breadcrumbs">
		<div class="container">
			<p><a class="first-crumb" href="<?php echo esc_url( home_url( '/home-page' ) ); ?>">главная</a>/<a class="current-crumb">доставка и оплата</a></p>
		</div>
	</div>
	<?php the_post(); ?>
	<?php the_content(); ?>
</main>

<?php
get_footer();
