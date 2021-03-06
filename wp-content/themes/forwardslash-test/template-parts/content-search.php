<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forwardslash_Test
 */
$image=get_field('image'); 
?>

<article class="posts">
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<h2><?php the_field('subtitle'); ?></h2>
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			forwardslash_test_posted_on();
			forwardslash_test_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php forwardslash_test_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<img style="width:300px" src="<?php echo esc_url($image['url']);?>">
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php forwardslash_test_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
