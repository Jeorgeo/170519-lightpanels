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

<main>
	<div class="breadcrumbs">
		<div class="container">
			<p><a class="first-crumb" href="<?php echo esc_url( home_url( '/home-page' ) ); ?>">главная</a>/<a class="current-crumb">доставка и оплата</a></p>
		</div>
	</div>
	<section class="delivery">
		<div class="container clearfix">
			<h3>доставка и <span class="yellow-text">оплата</span></h3>
			<div class="delivery-descriptions">
				<div class="descriptions-title">
					<p>Курьером по Москве и ближнему Подмосковью</p>
				</div>
				<div class="descriptions-text">
					<p>Пешим курьером мы доставляем небольшие панели (до формата А2 включительно) и постеры ко всем типам панелей. <br>Стоимость доставки составляет 400 руб., по ближнему Подмосковью – 600 руб.<br> Доставка в дальние районы МО – по договоренности.</p>
				</div>
			</div>
			<div class="delivery-descriptions">
				<div class="descriptions-title">
					<p>Доставка на автомобиле</p>
				</div>
				<div class="descriptions-text">
					<p>На легковой машине в пределах МКАД – 1500 руб,<br>
					Крупные заказы доставляются на небольшом грузовике («Газель» или «Соболь») – 2000 руб</p>
				</div>
			</div>
			<div class="delivery-descriptions">
				<div class="descriptions-title">
					<p>Самовывоз</p>
				</div>
				<div class="descriptions-text">
					<p>Также вы можете бесплатно забрать заказ самостоятельно с нашего производства. <br>Адрес и схему проезда вы найдете в разделе <a href="<?php echo esc_url( home_url( '/contacts-page' ) ); ?>">Контакты</a></p>
				</div>
			</div>
			<div class="delivery-descriptions">
				<div class="descriptions-title">
					<p>Оплата</p>
				</div>
				<div class="descriptions-text">
					<p>Оплата производится на месте наличными курьеру - 800 руб, банковскими картами VISA и MASTER CARD,<br>онлайн-сервисами Яндекс-деньги, Киви</p>
				</div>
			</div>

		</div>
	</section>
</main>

<?php
get_footer();
