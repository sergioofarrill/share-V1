
	

		<?php if ( have_posts() ) : ?>
			

			<article <?php post_class(); ?>>

  <?php
$args = array( 'category' => 43, 'posts_per_page' => 10, 'order'=> 'DESC', 'orderby' => 'post_date' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 
	<article class="thepost">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<br />
	<div class="the-f-img">
		<?php
		// Must be inside a loop.

		if ( has_post_thumbnail() ) {
		the_post_thumbnail('thumbnail');
		}	
		else {
			echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/img/share_arrow_post_default.png" />';
		}
		?>
	</div>
	<div class="theexc">
		<?php the_excerpt(); ?>
	</div>
	</article>
<?php
endforeach; 
wp_reset_postdata();
?>
</article>
<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
