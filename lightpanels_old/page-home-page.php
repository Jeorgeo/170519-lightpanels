<?php
/**
 * Template Name: Главная
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

<main class="main-index">
	<section class="main-slider">
		<div class="container">
			<article class="clearfix">
				<div class="main-slider-title">
					<h1>световые панели “Олимп”</h1>
				</div>
				<div class="main-slider-img">
					<img  src="<?php bloginfo("template_directory"); ?>/pics/slide-1.png" width="421" height="418" alt="Световые панели “Олимп”">
				</div>
				<div class="main-slider-description">
					<?php the_field('home_slide_title'); ?>
				</div>
			</article>
		</div>
	</section>
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
					<li><?php the_field('catalog-2-link'); ?><?php the_field('catalog-2-title'); ?></a></li>
					<li><?php the_field('catalog-3-link'); ?><?php the_field('catalog-3-title'); ?></a></li>
					<li><?php the_field('catalog-4-link'); ?><?php the_field('catalog-4-title'); ?></a></li>
					<li><?php the_field('catalog-5-link'); ?><?php the_field('catalog-5-title'); ?></a></li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="main-gallery-img">
				<?php the_field('catalog-1-link'); ?>
				<?php the_field('catalog-1-img'); ?>
				<p class="gallery-p"><?php the_field('catalog-1-title'); ?></p></a>
				<?php the_field('catalog-2-link'); ?>
				<?php the_field('catalog-2-img'); ?>
				<p class="gallery-p"><?php the_field('catalog-2-title'); ?></p></a>
				<?php the_field('catalog-3-link'); ?>
				<?php the_field('catalog-3-img'); ?>
				<p class="gallery-p"><?php the_field('catalog-3-title'); ?></p></a>
				<?php the_field('catalog-4-link'); ?>
				<?php the_field('catalog-4-img'); ?>
				<p class="gallery-p"><?php the_field('catalog-4-title'); ?></p></a>
				<?php the_field('catalog-5-link'); ?>
				<?php the_field('catalog-5-img'); ?>
				<p class="gallery-p"><?php the_field('catalog-5-title'); ?></p></a>
			</div>
		</div>
	</section>

			<?php the_post(); ?>
			<?php the_content(); ?>


</main>

<?php
get_footer();
