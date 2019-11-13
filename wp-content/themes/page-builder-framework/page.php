<?php
/**
 * Page template.
 *
 * @package Page Builder Framework
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

get_header();

?>

<div id="content">

	<?php do_action( 'wpbf_content_open' ); ?>
	
	<?php wpbf_inner_content(); ?>

		<?php do_action( 'wpbf_inner_content_open' ); ?>

		<main id="main" class="wpbf-main<?php echo wpbf_singular_class(); ?>">

			<?php do_action( 'wpbf_main_content_open' ); ?>

			<?php wpbf_title(); ?>

			<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="entry-content" itemprop="text">

				<?php do_action( 'wpbf_entry_content_open' ); ?>

				<?php the_content(); ?>

				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'page-builder-framework' ),
					'after'  => '</div>',
				) );
				?>

				<?php do_action( 'wpbf_entry_content_close' ); ?>

			</div>

			<?php endwhile; endif; ?>

			<?php comments_template(); ?>

			<?php do_action( 'wpbf_main_content_close' ); ?>

		</main>

		<?php do_action( 'wpbf_inner_content_close' ); ?>

	<?php wpbf_inner_content_close(); ?>

	<?php do_action( 'wpbf_content_close' ); ?>
	
</div>

<?php get_footer(); ?>
