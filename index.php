<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Grad Student Finances 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<div class="hentry">

Welcome to Grad Student Finances! This site is a resource for grad students who want to make the most of their money while still in school. Grad school isn't a time-out period from our financial lives, especially once you understand the power of habits and compound interest. Whether you want to minimize your loans, break out of living (stipend) paycheck-to-paycheck, or build your savings, we want to support you in your financial journey. Browse the pages below to learn how to improve your relationship with money, navigate the sidebar to join the GSF community, and email us with what you want to see on the site!
			</div>

			<div class="hentry">
				<h1> What would you like to learn more about?</h1>

			<!-- Pay/Get Paid for School -->
			<a href="<?php echo site_url(); ?>/get-paid">
			<div class="front_cat">
				<img class="img-responsive center" src="<?php echo get_template_directory_uri(); ?>/img/PGPFS_home.png">
			</div></a>

			<a href="<?php echo site_url(); ?>/stretch">
				<div class="front_cat">
					<img class="img-responsive center" src="<?php echo get_template_directory_uri(); ?>/img/StS_home.png">
				</div>
			</a>

			<a href="<?php echo site_url(); ?>/taxes">
			<div class="front_cat">
				<img class="img-responsive center" src="<?php echo get_template_directory_uri(); ?>/img/FOYT_home.png">
			</div>
			</a>

			<a href="<?php echo site_url(); ?>/wealth">
			<div class="front_cat bump-right">
				<img class="img-responsive center" src="<?php echo get_template_directory_uri(); ?>/img/PaGW_home.png">
			</div></a>


			<a href="<?php echo site_url(); ?>/life">
			<div class="front_cat">
				<img class="img-responsive center" src="<?php echo get_template_directory_uri(); ?>/img/HILT_home.png">
			</div></a>

			<div class="spacer" style="clear: both;"></div>
			</div>

			<div class="hentry">
				<h1>Other Finance Topics</h1>
			<?php $frontpage_catslugs= array('reporting', 'investing', 'frugality');
			      $frontpage_catnames= array('Reporting', 'Investing', 'Frugality');
			for ($i = 0; $i<sizeof($frontpage_catslugs); $i++): ?>

				<h2><?php echo $frontpage_catnames[$i] ?></h2>
				<?php
				$args = array( 'posts_per_page' => 3, 'offset'=> 0, 'tag' => $frontpage_catslugs[$i] );

				$myposts = new WP_Query( $args );
				if($myposts->have_posts() ){
					while($myposts->have_posts()) : $myposts->the_post(); ?>

						<div class = "cat-image-container">
							<a href="<?php echo the_permalink(); ?>">
								<div class="cat-image">
									<?php if ( has_post_thumbnail( $thumbnail->ID ) ) {
										echo get_the_post_thumbnail( $post->ID, 'medium' );
									} else { ?>
										<img width="300" height="200" src="<?php echo get_template_directory_uri(); ?>/img/defaultImage_300x200.jpg" class="attachment-medium wp-post-image" alt="default">
									<?php } ?>

									<h2><span>
										<?php $wrapped_title = wordwrap_title(25);
										for ($i = 0; $i < count($wrapped_title); $i++):
											if($i != 0){ ?>
											<span class='spacer'></span>
											<?php } ?>
											<?php echo $wrapped_title[$i] ?><span class='spacer'></span>
											<?php if( ($i-1) != count($wrapped_title) ) { ?>
												<br />
											<?php } ?>

										<?php endfor ?>
											</span>
								</div>
							</a>
						</div>

					<?php endwhile;
				}
				wp_reset_query();?>
				<div class="spacer" style="clear: both;"></div>

			<?php endfor ?>
			</div>

		<?php if ( have_posts() ) : ?>
		<?php
			// Start the loop.
			//while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
			//	get_template_part( 'content', get_post_format() );

			// End the loop.
			//endwhile;

			// Previous/next page navigation.
//			the_posts_pagination( array(
//				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
//				'next_text'          => __( 'Next page', 'twentyfifteen' ),
//				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
//			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
