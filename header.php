<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">	
  	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
  	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
  	<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" rel="stylesheet">
  	<link href="<?php echo get_template_directory_uri(); ?>/css/wh.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,600i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
	<link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Blue contact band -->
	<div class="blue-row blue-band">
		<div class="container">
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-9"><!--schedule div-->
  			<a href="<?php the_field('appt_link',4)?>"><i class="fa fa-calendar" aria-hidden="true"></i> <?php the_field('appt_link_text',4)?></a>
			</div><!--column (schedule) div-->
			<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3" style="float:right">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><!--phone div-->
					<a href="tel:651-459-2000"><i class="fa fa-phone" aria-hidden="true"></i></a>
				</div><!--column (phone) div-->
				<div class="col-lg-9 col-md-9 col-sm-9 hidden-xs"><!--number div-->
					<a href="tel://<?php the_field('phone',4)?>"><?php the_field('phone',4)?></a>
				</div><!--column (number) div-->
			</div><!--column (call) div-->
		</div><!--container-->
	</div><!--blue band-->


		<!-- Wordpress Nav bar --> 
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button><!--button div-->
			</div><!--navbar div-->
			<div id="navbar" class="navbar-collapse collapse">
				<a href="<?php bloginfo('url'); ?>" class="home fa fa-home"></a>
				<?php wp_nav_menu( array(
					'menu_id' => 'green-header-nav',
					'theme_location' => 'header-menu'
				)); ?>

			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	</nav>

	<!-- HEADER -->
	<header>
	  	<div class="container">
	    	<div class="row">
			  	<div class="col-lg-12 col-lg-offset-0 col-xs-8 col-xs-offset-2">
	 	   			<center><a href="<?php bloginfo('url'); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/WH_logo.png" alt="logo"/></a></center>
		      </div><!--col div-->
		    </div><!--row div-->
	  	</div><!--container div-->
  <!-- hero image -->
	    <img class="arch img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/hero_arch.png" alt="curve"/>
  		<div class="hero hidden-xs">
  		</div>	
  		<div class="hero_sm visible-xs">
  		</div>
  </header>





