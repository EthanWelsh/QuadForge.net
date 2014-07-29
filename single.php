<?php get_header(); ?>


<div class="news-single">
	<section class="single-post">
        	<div class="wrapper">
				<div class="post twothird inner">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="full post-title" <?php post_class() ?> id="post-<?php the_ID(); ?>">
    			<h1><?php the_title(); ?></h1>
    			<div class="postinfo full">
					<span class="who">Written by <?php the_author() ?> </span>
					<span class="when">on <?php the_time('F jS, Y') ?></span>
				</div>
    			<div class="divider red-divider"></div>
    		</div>
    		
    		<div class="full feat-img">
    			<?php the_post_thumbnail(); ?>
    		</div>

    		
    			
    		
    		<div class="post-content full">
    			<?php the_content(); ?>
    		</div>


		

	<?php endwhile; ?>
	<div class="change-post">
		<div class="old"><?php previous_post_link('%link','Older Post'); ?></div>
		<div class="new"><?php next_post_link('%link','Newer Post'); ?></div>
	</div>


	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
	</div>
<?php get_sidebar(); ?>
	</div>
</section>
</div>

<?php get_footer(); ?>