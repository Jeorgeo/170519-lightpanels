<?php
/**
 * Template Name: Контакты
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
						<?php the_field('adress_contacts'); ?>
					</div>
				</div>
				<div class="contacts-descriptions-phone">
					<div class="descriptions-title">
						<p>телефон</p>
					</div>
					<div class="descriptions-text">
						<?php the_field('phone_contacts'); ?>
					</div>
				</div>
				<div class="contacts-descriptions-email">
					<div class="descriptions-title">
						<p>E-mail</p>
					</div>
					<div class="descriptions-text">
						<?php the_field('email_contacts'); ?>
					</div>
				</div>
			</div>
			<div class="contacts-map">
				<?php the_field('map_contacts'); ?>
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
