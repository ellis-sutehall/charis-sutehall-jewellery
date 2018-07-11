<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Charis Sutehall
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_post_thumbnail( 'commissions-thumb' ); ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<!-- <div class="entry-meta"> -->
			<?php // charis_sutehall_posted_on(); ?>
		<!-- </div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'charis-sutehall' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php charis_sutehall_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
