<?php get_header(); ?>
	<main>
      <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,600i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
        <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
        <link href="<?php echo get_template_directory_uri(); ?>/css/wh.css">
		<section>
			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</section>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
