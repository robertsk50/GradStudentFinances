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
				<img class="img-responsive center" src="<?php echo get_template_directory_uri(); ?>/img/PGPFS_home_225x225.jpg">
			</div></a>

			<a href="<?php echo site_url(); ?>/stretch">
				<div class="front_cat">
					<img class="img-responsive center" src="<?php echo get_template_directory_uri(); ?>/img/StS_home_225x225.jpg">
				</div>
			</a>

			<a href="<?php echo site_url(); ?>/taxes">
			<div class="front_cat">
				<img class="img-responsive center" src="<?php echo get_template_directory_uri(); ?>/img/FOYT_home_225x225.jpg">
			</div>
			</a>

			<a href="<?php echo site_url(); ?>/wealth">
			<div class="front_cat bump-right">
				<img class="img-responsive center" src="<?php echo get_template_directory_uri(); ?>/img/PaGW_home2_225x225.jpg">
			</div></a>


			<a href="<?php echo site_url(); ?>/life">
			<div class="front_cat">
				<img class="img-responsive center" src="<?php echo get_template_directory_uri(); ?>/img/HILT_home_225x225.jpg">
			</div></a>

			<div class="spacer" style="clear: both;"></div>
			</div>

			<div class="hentry">
                <h1>Most Recent Articles</h1>
                <!-- Get the recent 6 articles-->
                <div class="fp_article_container">
                <?php
                    $args = array( 'posts_per_page' => 6, 'offset'=> 0);
                    $myposts = new WP_Query($args);
                    if( $myposts->have_posts() ) {
	                    while ( $myposts->have_posts() ) : $myposts->the_post();
		                    ?>
                            <div class="fp_article">


                                <!-- Get the article picture -->
                                <div class="center">
                                <a href="<?php echo the_permalink(); ?>">
			                    <?php frontpage_image( $post ) ?>
                                </a>
                            </div>

                                <!-- Get the title of the article -->
                                <div class="fp_title">
                                    <a href="<?php echo the_permalink(); ?>">
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                </div>

                                <div class="fp_article_text">
                                <!-- Get the article text -->
			                    <?php frontpage_article_blurb() ?>
                                </div>
                            </div>

	                    <?php endwhile;
                    } ?>
                </div>



		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
