<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Charis Sutehall
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div id="footer-sidebar" class="secondary clearfix">
				<div id="footer-sidebar1" class="footer-widgets">
					<?php
					if(is_active_sidebar('footer-sidebar-1')){
					dynamic_sidebar('footer-sidebar-1');
					}
					?>
				</div>
				<div id="footer-sidebar2" class="footer-widgets">
					<?php
					if(is_active_sidebar('footer-sidebar-2')){
					dynamic_sidebar('footer-sidebar-2');
					}
					?>
				</div>
				<div id="footer-sidebar3" class="footer-widgets">
					<?php
					if(is_active_sidebar('footer-sidebar-3')){
					dynamic_sidebar('footer-sidebar-3');
					}
					?>
				</div>
			</div>
		</div><!-- .site-info -->
		<div class="copyright">
			<p>Copyright &copy; <?php echo date("Y"); ?> Charis Sutehall</p>
			<ul class="social-icons">
				<li><a href="http://instagram.com/charissutehall" target="_blank"><img src="/wp-content/uploads/icon-instagram.png" /></a></li>
				<li><a href="https://www.etsy.com/shop/charissutehall" target="_blank"><img src="/wp-content/uploads/icon-etsy.png" /></a></li>
				<li><a href="https://www.facebook.com/charissutehall/" target="_blank"><img src="/wp-content/uploads/2016/02/icon-facebook.png" /></a></li>
			<ul>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
