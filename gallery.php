<?php
/*
Template Name: Gallery Page

NOTE: Do NOT touch this code. This is a code template directly from wordpress. In order to add more pictures, you must do so using wordpress itself. Login using quadforge.net/WP-admin

*/
?>
<?php get_header(); ?>
<div class="news gallery-page">

	 <section class="news-posts">
    	<div class="wrapper">
    		<div class="full inner">
    			<h1>Gallery</h1>
    			<div class="divider"></div>
    		</div>
    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    			<?php the_content(); ?>
	

			<?php endwhile; ?>




			<?php else : ?>

				<h2>Not Found</h2>

			<?php endif; ?>
    	</div>
    </section>
</div>

<?php get_footer(); ?>