<?php /* Template Name: Page - green bar */ ?>
<?php get_header(); ?>

<!-- About us section -->
<div class="container">
  <div class="jumbotron">
    <div class="row">
      <div class="col-lg-12">

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	    			<h2><strong><?php the_title(); ?></strong></h2>
	    			<?php the_content(); ?>

<?php endwhile; endif; ?> 

      </div>    
    </div>
  </div><!--jumbotron-->
</div><!--container-->

            <section class="green-band">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <?php the_field('green_section_content')?>
                  </div>
                </div>
              </div>
            </section>
	           
<?php get_footer(); ?>