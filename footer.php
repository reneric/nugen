<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<div id="footer-bar">
			<div class="container">
				<span class="ribbon"></span>
				<ul class="social">
					<li><a href="#" class="tw"></a></li>
					<li><a href="#" class="fb"></a></li>
					<li><a href="#" class="yt"></a></li>
					<li><a href="#" class="gp"></a></li>
				</ul>
				<div class="call">Call Us at <span>(225)382-2006</span></div>
			</div>
		</div>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<?php wp_nav_menu( array( 'menu' => 'Main', 'menu_class' => 'nav-menu' ) ); ?>
				<div class="copy">
					<p>&copy; 2013 Nu-Gen, LLC., All Rights Reserved.   Site Designed and Developed by <a target="_blank" href="http://yolodesign.com">YOLO</a></p>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
<script type="text/javascript" data-project="nugen" src="http://localhost:48626/takana.js"></script>
	<?php wp_footer(); ?>
</body>
</html>