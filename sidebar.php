<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Grad Student Finances 1.0
 */

if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : ?>
	<div id="secondary" class="secondary">

		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'nav-menu',
						'theme_location' => 'primary',
					) );
				?>
			</nav><!-- .main-navigation -->
		<?php endif; ?>

		<?php if ( has_nav_menu( 'social' ) ) : ?>
			<nav id="social-navigation" class="social-navigation" role="navigation">
				<?php
					// Social links navigation menu.
					wp_nav_menu( array(
						'theme_location' => 'social',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>',
					) );
				?>
			</nav><!-- .social-navigation -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div id="widget-area" class="widget-area" role="complementary">
				<?php if(!is_front_page()){?>
					<aside class="widget widget_search">
						<h2 class="widget-title">Categories</h2>
						<ul>
							<li><a href="<?php echo site_url(); ?>/get-paid">Pay/Get Paid for School</a></li>
							<li><a href="<?php echo site_url(); ?>/stretch">Stretch that Stipend</a></li>
							<li><a href="<?php echo site_url(); ?>/taxes">Figure Out Your Taxes </a></li>
							<li><a href="<?php echo site_url(); ?>/wealth">Protect and Grow Wealth</a></li>
							<li><a href="<?php echo site_url(); ?>/life">Have a Life, Too</a></li>
						</ul>
					</aside>
				<?php } ?>


				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>

	</div><!-- .secondary -->

<?php endif; ?>
