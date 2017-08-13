<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	    			<h2><strong><?php the_title(); ?></strong></h2>
	    			<?php the_content(); ?>
	           
<?php endwhile; endif; ?>	
<?php get_footer(); ?>