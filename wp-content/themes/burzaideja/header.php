<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Burza ideja d.o.o.">
<title><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon.ico">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="section-header-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-8">
				<ul>
					<li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> +385 91 1865 265</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:info@burza-ideja.hr">info@burza-ideja.hr</a></li>
					<li class="facebook">pratite nas na Facebooku <a class="img-responsive" href="#" target="_blank"><img class="grayscale" width="18" src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.png"></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="section-header-top">
<div class="container" id="header">
	<div class="row">
	  <div class="col-xs-6 col-sm-4 col-md-4">
	  	<a href="<?php echo home_url(); ?>"><img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-burza-ideja.png" class="img-responsive" alt="Logo Burza ideja"></a>
	  </div>
	  <div class="col-xs-6 col-sm-8 col-md-8">
		<nav class="navbar navbar-default" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		
		        <?php 
		            wp_nav_menu( array(
		                'menu'              => 'primary',
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse',
		        'container_id'      => 'bs-example-navbar-collapse-1',
		                'menu_class'        => 'nav navbar-nav',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?>
		    </div>
		</nav>
	  </div>
	</div>
</div><!-- .header -->
</div>