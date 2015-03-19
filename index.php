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
				Welcome to grad student finances. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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
			<div class="front_cat">
				<img class="img-responsive center" src="<?php echo get_template_directory_uri(); ?>/img/PaGW_home.png">
			</div></a>


			<a href="<?php echo site_url(); ?>/life">
			<div class="front_cat">
				<img class="img-responsive center" src="<?php echo get_template_directory_uri(); ?>/img/HILT_home.png">
			</div></a>

			<div class="spacer" style="clear: both;"></div>
			</div>

			<?php $frontpage_catslugs= array('figure-out-your-taxes', 'have-a-life', 'pay-get-paid-for-school', 'protect-and-grow-wealth', 'stretch-that-stipend');
			      $frontpage_catnames= array('Figure Out Your Taxes', 'Have a Life', 'Pay/Get Paid for School', 'Protect and Grow Wealth', 'Stretch that Stipend');
			for ($i = 0; $i<sizeof($frontpage_catslugs); $i++): ?>
			<div class="hentry">
				<h1><?php echo $frontpage_catnames[$i] ?></h1>
				<?php
				$args = array( 'posts_per_page' => 3, 'offset'=> 0, 'category_name' => $frontpage_catslugs[$i] );

				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

					<div class = "cat-image-container">
						<a href="<?php echo the_permalink(); ?>">
							<div class="cat-image">
								<?php if ( has_post_thumbnail( $thumbnail->ID ) ) {
									echo get_the_post_thumbnail( $post->ID, 'medium' );
								} else { ?>
									<img width="300" height="200" src="<?php echo get_template_directory_uri(); ?>/img/defaultImage_300x200.jpg" class="attachment-medium wp-post-image" alt="default">
								<?php } ?>
								<h2 class=""><span><?php the_title(); ?><span class='spacer'></span></h2>
							</div>
						</a>
					</div>

				<?php endforeach;
				wp_reset_postdata();?>
				<div class="spacer" style="clear: both;"></div>
			</div>
			<?php endfor ?>


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
