<?php
/**
 * The template for displaying all pages
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
					<li><a href="<?php echo esc_url( home_url( '/catalog-1' ) ); ?>">Панели cristalight</a></li>
					<li><a href="<?php echo esc_url( home_url( '/catalog-2' ) ); ?>">LED панели Framelight</a></li>
					<li><a href="<?php echo esc_url( home_url( '/catalog-3' ) ); ?>">Световые панели Magnetic</a></li>
					<li><a href="<?php echo esc_url( home_url( '/catalog-4' ) ); ?>">Рамки  без подсветки</a></li>
					<li><a href="<?php echo esc_url( home_url( '/catalog-5' ) ); ?>">термогибка</a></li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="main-gallery-img">
				<a href="<?php echo esc_url( home_url( '/catalog-1' ) ); ?>"><img src="<?php bloginfo("template_directory"); ?>/pics/gallery-1.jpg" width="223" height="295" alt="Световые панели “Олимп”">
				<p>Панели cristalight</p></a>
				<a href="<?php echo esc_url( home_url( '/catalog-2' ) ); ?>"><img src="<?php bloginfo("template_directory"); ?>/pics/gallery-2.jpg" width="223" height="295" alt="Световые панели “Олимп”"><p>LED панели Framelight</p></a>
				<a href="<?php echo esc_url( home_url( '/catalog-3' ) ); ?>"><img src="<?php bloginfo("template_directory"); ?>/pics/gallery-3.jpg" width="223" height="295" alt="Световые панели “Олимп”"><p>Световые панели Magnetic</p></a>
				<a href="<?php echo esc_url( home_url( '/catalog-4' ) ); ?>"><img src="<?php bloginfo("template_directory"); ?>/pics/gallery-4.jpg" width="223" height="295" alt="Световые панели “Олимп”"><p>Рамки  без подсветки</p></a>
				<a href="<?php echo esc_url( home_url( '/catalog-5' ) ); ?>"><img src="<?php bloginfo("template_directory"); ?>/pics/gallery-5.jpg" width="223" height="295" alt="Световые панели “Олимп”"><p>термогибка</p></a>
			</div>
		</div>
	</section>
	<section class="main-descriptions">
		<div class="container">
			<p>Стильное и современное решение для рекламы бизнеса -  световая панель “Magnetic”.<br>
			В любом магазине, кафе, офисе продаж -  этот продукт станет прекрасным инструментом Вашей стратегии визуального мерчандайзинга. Стильная световая панель “Magnetic” является идеальным решением для оперативного реагирования на изменения рынка. Достаточно легко снять крышку и поменять постер – с этой задачей справится любой.<br>
			Ресурс работы светодиодов, обеспечивающих яркое и равномерное свечение по всему периметру панели - 50000 часов.<br> Акцент на черной рамке световой панели “Magnetic” усиливает этот изящный образ стильного кадра.<br>
			Тонкая световая панель “Magnetic” может быть смонтирована практически в любом месте интерьера и создана удерживать внимание клиента без перерыва.<br>
			“Magnetic” может быть установлен вертикально или горизонтально к стене, закреплен на тросовой системе в окнах -  в зависимости от предпочтений.<br>
			Очень экономичная за счет использования светодиодов, световая панель “Magnetic” потребляет небольшое количество электроэнергии и имеет минимальные требования к техническому обслуживанию. Если сравнить это с традиционными люминесцентными лампами, то они требуют плановой замены и потребляют больше энергии, в конечном счете приводя к росту эксплуатационных расходов.</p>
		</div>
	</section>
</main>

<?php
get_footer();
