<?php

/*

	Template Name: Blog

*/

?>
<?php get_header(); ?>
	<div class="news">

	 <section class="news-posts">
    	<div class="wrapper">
    		<div class="full inner">
    			<h1>Latest News</h1>
    			<div class="divider"></div>
    		</div>
	<div class="post twothird inner">
	<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array(
	  'posts_per_page' => 4,
	  'paged' => $paged
	);

	query_posts($args); 
	?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="ind-post" <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<div class="full post-title">
			<a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
			<div class="postinfo full">

				<span class="when"><?php the_time('F jS, Y') ?></span>
			</div>
			<div class="divider red-divider"></div>
		</div>
		<div class="full feat-img">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="excerpt full">
			<p><?php the_excerpt(); ?></p>
		</div>
		<div class="full read-more">
			<a href="<?php the_permalink() ?>">Read More</a>
		</div>
	</div>


	<?php endwhile; ?>
	<!--
	<div class="oldpost">
		<div class="wrapper">
			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
		</div>
	</div>-->

		<?php beopen_pagination(); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
		</div>
<?php get_sidebar(); ?>
		</div>
    </section>


<?php get_footer(); ?>