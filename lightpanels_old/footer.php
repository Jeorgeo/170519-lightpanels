<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lightpanels
 */

?>

<footer class="main-footer">
	<div class="container clearfix">
		<div class="footer-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php dynamic_sidebar( 'logo-f' ); ?></a>
		</div>
		<div class="footer-phone">
			<?php dynamic_sidebar( 'phone' ); ?>
		</div>
		<div class="footer-contacts">
			<div class="footer-contacts-adress">
				<?php dynamic_sidebar( 'adress' ); ?>
			</div>
			<div class="footer-contacts-social">
				<?php dynamic_sidebar( 'social_link' ); ?>
			</div>
		</div>
	</div>
</footer>
<div id="toTop">
	<a class="arrow-up" href="#">
		<span>arrow-up</span>
	</a>
</div>

<script src="<?php bloginfo("template_directory"); ?>/js/jquery-1.11.2.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/js/main.js"></script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'bBjDA8kc0B';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>
