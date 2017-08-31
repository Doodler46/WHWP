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

			<setion class="testimonial">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<!-- check if the repeater field has rows of data (quote content custom fields) -->
						<div class="cycle-slideshow" data-cycle-slides="> .slide">
							<?php if( have_rows('quote_left') ): ?>
								<!-- loop through the rows of data -->
								<?php while ( have_rows('quote_left') ) : the_row(); ?>
									<div class="slide">
										<!-- display a sub field value -->
										<p>
											<?php the_sub_field('quote_text_left'); ?>
										</p>
										<p>
											<?php the_sub_field('quote_name_left'); ?>
										</p>
										<img src="<?php the_sub_field('quote_image_left'); ?>" alt="<?php the_sub_field('quote_name'); ?>" />
									</div><!--/.slide-->
								<?php endwhile; ?>
							<?php endif; ?>
						</div><!--/.cycle-sldieshow-->
					</div>	<!--/.col-->
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<!-- check if the repeater field has rows of data (quote content custom fields) -->
						<div class="cycle-slideshow" data-cycle-slides="> .slide">
							<?php if( have_rows('quote_right') ): ?>
								<!-- loop through the rows of data -->
								<?php while ( have_rows('quote_right') ) : the_row(); ?>
									<div class="slide">
										<!-- display a sub field value -->
										<p>
											<?php the_sub_field('quote_text_right'); ?>
										</p>
										<p>
											<?php the_sub_field('quote_name_right'); ?>
										</p>
										<img src="<?php the_sub_field('quote_image_right'); ?>" alt="<?php the_sub_field('quote_name'); ?>" />
									</div><!--/.slide-->
								<?php endwhile; ?>
							<?php endif; ?>
						</div><!--/.cycle-slideshow-->
					</div>	<!--/.col-->
				</div><!--/.row-->
			</setion>
			
		<!-- End WordPress loop -->
		<?php endwhile; endif; ?> 
	
      </div>    
    </div>
  </div><!--jumbotron-->
</div><!--container-->
	           
<?php get_footer(); ?>