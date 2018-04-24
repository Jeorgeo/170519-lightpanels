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
			<p><a class="first-crumb" href="<?php echo esc_url( home_url( '/home-page' ) ); ?>">главная</a>/<a class="current-crumb">контакты</a></p>
		</div>
	</div>
	<section class="contacts-contacts">
		<div class="container clearfix">
			<h3>наши <span class="yellow-text">контакты</span></h3>
			<div class="contacts-descriptions">
				<div class="contacts-descriptions-adress">
					<div class="descriptions-title">
						<p>Адрес</p>
					</div>
					<div class="descriptions-text">
						<p>Офис Slim Panels расположен по адресу:<br>
						Москва, ул. Бутырская, 62, БЦ «Z-Плаза» (в пешей доступности от м. Дмитровская),<br>
						Время работы пн-пт 09:00-18:00</p>
					</div>
				</div>
				<div class="contacts-descriptions-phone">
					<div class="descriptions-title">
						<p>телефон</p>
					</div>
					<div class="descriptions-text">
						<p>+7 950 000 00 00</p>
						<p>+7 950 000 00 00</p>
					</div>
				</div>
				<div class="contacts-descriptions-email">
					<div class="descriptions-title">
						<p>E-mail</p>
					</div>
					<div class="descriptions-text">
						<p>sales@slim-panels.ru</p>
					</div>
				</div>
			</div>
			<div class="contacts-map">

			</div>
		</div>
	</section>
	<section class="contacts-form">
		<div class="container">
			<h4>форма обратной связи</h4>
			<form class="contacts-form-box clearfix" action="https://svetolimp.ru/post.php" method="post">
				<label for="name"></label>
				<input class="form-box-name" id="name" type="text" name="name" placeholder="Имя" required>
				<label for="phone"></label>
				<input class="form-box-phone" id="phone" type="text" name="phone" pattern="[0-9_-]{10}" title="Телефон: (099) 999 99 99" placeholder="(___) ___ __ __" required>
				<label for="message"></label>
				<textarea id="message" name="message" rows="1" placeholder="Сообщение..." required></textarea>
				<input id="send" class="form-btn" type="submit" name="send" value="отправить заявку">
			</form>
		</div>
	</section>
</main>

<?php
get_footer();
