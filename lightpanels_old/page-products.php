<?php
/**
 * Template Name: Продукция
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

<main class="production">
	<div class="breadcrumbs">
		<div class="container">
			<p><a class="first-crumb" href="<?php echo esc_url( home_url( '/home-page' ) ); ?>">главная</a>/<a class="current-crumb">наша продукция</a></p>
		</div>
	</div>
	<section class="main-gallery">
		<div class="container">
			<h3>Наша <span class="yellow-text">продукция</span>
			</h3>
		</div>
		<div class="main-gallery-menu">
			<div class="container clearfix">
				<ul>
					<li><?php the_field('catalog-1-link'); ?>
						<?php the_field('catalog-1-title'); ?></a></li>
					<li><?php the_field('catalog-2-link'); ?>
						<?php the_field('catalog-2-title'); ?></a></li>
					<li><?php the_field('catalog-3-link'); ?>
						<?php the_field('catalog-3-title'); ?></a></li>
					<li><?php the_field('catalog-4-link'); ?>
						<?php the_field('catalog-4-title'); ?></a></li>
					<li><?php the_field('catalog-5-link'); ?>
						<?php the_field('catalog-5-title'); ?></a></li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="main-gallery-img">
				<?php the_field('catalog-1-link'); ?>
				<?php the_field('catalog-1-img'); ?>
				<p><?php the_field('catalog-1-title'); ?></p></a>
				<?php the_field('catalog-2-link'); ?>
				<?php the_field('catalog-2-img'); ?>
				<p><?php the_field('catalog-2-title'); ?></p></a>
				<?php the_field('catalog-3-link'); ?>
				<?php the_field('catalog-3-img'); ?>
				<p><?php the_field('catalog-3-title'); ?></p></a>
				<?php the_field('catalog-4-link'); ?>
				<?php the_field('catalog-4-img'); ?>
				<p><?php the_field('catalog-4-title'); ?></p></a>
				<?php the_field('catalog-5-link'); ?>
				<?php the_field('catalog-5-img'); ?>
				<p><?php the_field('catalog-5-title'); ?></p></a>
			</div>
		</div>
	</section>
	<section class="main-descriptions">
		<div class="container">
			<?php the_post(); ?>
			<?php the_content(); ?>
		</div>
	</section>
</main>

<?php
get_footer();
