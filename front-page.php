<?php get_header(); ?>

<!-- About us section -->
<div class="container">
  <div class="jumbotron">
    <div class="row">
      <div class="col-lg-12">

		<!-- Start WordPress loop -->
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- Main Content -->
			<?php the_content(); ?>
			
			<!-- check if the repeater field has rows of data (quote content custom fields) -->
			<?php if( have_rows('quote') ): ?>
				<!-- loop through the rows of data -->
				<?php while ( have_rows('quote') ) : the_row(); ?>
					<!-- display a sub field value -->
					<?php the_sub_field('quote_name'); ?>
					<?php the_sub_field('quote_text'); ?>
					<?php the_sub_field('quote_image'); ?>
				<?php endwhile; ?>
			<?php endif; ?>

		<!-- End WordPress loop -->
		<?php endwhile; endif; ?> 
	
      </div>    
    </div>
  </div><!--jumbotron-->
</div><!--container-->
	           
<?php get_footer(); ?>