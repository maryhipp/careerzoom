<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-section">
				<p><?php the_field('contact_name', 'user_2'); ?></p>
				<p><?php the_field('contact_title', 'user_2'); ?></p>
			</div>
			<div class="footer-section">
				<img src="<?php echo get_template_directory_uri(); ?>/images/pin.png">
				<div class="address"><a target=_blank href="https://www.google.com/maps/place/<?php the_field('street_address', 'user_2'); ?><?php the_field('city_state_zip', 'user_2'); ?>"><p><?php the_field('street_address', 'user_2'); ?></p>
				<p><?php the_field('city_state_zip', 'user_2'); ?></p></a></div>
			</div>
			<div class="footer-section">
				<p><a target=_blank href="mailto:<?php the_field('email_address', 'user_2'); ?>"><?php the_field('email_address', 'user_2'); ?></a></p>
				<p><?php the_field('phone_number', 'user_2'); ?></p>
			</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
