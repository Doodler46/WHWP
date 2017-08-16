<?php get_header(); ?>

<head>
  <link href="//www.google-analytics.com" rel="dns-prefetch">
  <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
  <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,600i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/wh.css">
</head>

<main>


	<section>
		<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
		<?php get_template_part('loop'); ?>
		<?php get_template_part('pagination'); ?>
	</section>

<!--  Benifits section -->
<section>
  <div class="row green-band">
      <div class="container">
        <div class="col-lg-1 page-header col-xs-3">
          <center>
            <img class="img-responsive" src="img/spine.png" style="padding-top:25px" alt="spine"/>
          </center>
        </div>
        <div class="col-lg-11 page-header col-xs-9">
          <h1></h1>
          <p></p>
          <button type="button" class="btn" style="padding-left:15px; padding-right:15px"><a href="http://www.wholehealthmn.com/benefits.html">Learn how we can help</a></button>
        </div>
      </div><!--container div-->
  </div><!--green band row-->
</section>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
