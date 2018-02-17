<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Slam-Wordpress
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container text-center">
			<p>	&copy; Sweet Life and Mortgage Limited, <?php echo date('Y');?>.</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<!-- <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/bootstrap.min.js"></script>
<?php wp_footer(); ?>

</body>
</html>
