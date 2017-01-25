<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<?php 
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 ?>

<div class="site-branding">
	<img class="profile-img" src="<?= $image[0]; ?>" alt="">
	<div class="wrap">

		<?php // the_custom_logo(); ?>

		<div class="site-branding-text">
			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>

			<?php $description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; ?></p>
				<?php endif; ?>
		</div><!-- .site-branding-text -->

		<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
		<?php endif; ?>

		<ul class="social-network">
			<li>
				<a href="https://www.linkedin.com/in/ronny-freites-a511217b" target="_blank">
					<i class="fa fa-linkedin fa-2x" aria-hidden="true"></i>
				</a>	
			</li>
			<li>
				<a href="https://github.com/rfreites" target="_blank">
					<i class="fa fa-github fa-2x" aria-hidden="true"></i>
				</a>
			</li>
			<li>
				<a href="skype:ronnyf89?call">
					<i class="fa fa-skype fa-2x" aria-hidden="true"></i>
				</a>
			</li>
			<li>
				<a href="mailto:hello@prosoftdeveloper.com" target="_blank">
					<i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>
				</a>
			</li>
		</ul>

	</div><!-- .wrap -->
</div><!-- .site-branding -->
