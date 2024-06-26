<?php
/**
 * The template for displaying search results pages.
 *
 * @package topshop
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
            
            <?php if ( function_exists( 'bcn_display' ) ) : ?>
            <div class="breadcrumbs">
                <?php bcn_display(); ?>
            </div>
            <?php endif; ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'topshop' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

            <div class="topshop-list-wrap <?php echo sanitize_html_class( get_theme_mod( 'topshop-blog-layout', customizer_library_get_default( 'topshop-blog-layout' ) ) ); ?>">

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php
                    /**
                     * Run the loop for the search to output the results.
                     * If you want to overload this in a child theme then include a file
                     * called content-search.php and that will be used instead.
                     */
                    get_template_part( 'content', 'search' );
                    ?>

                <?php endwhile; ?>

            </div>

			<?php topshop_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
