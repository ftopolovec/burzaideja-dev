<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<div id="carousel-example-generic" class="carousel slide home-banner-top bi-primary-color" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    	<div class="container">
    	<div class="row">
	  		<div class="col-md-12">
	  			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/demo/img-1140x500-1.jpg">
	  		</div>
	  	</div>
	  	</div>
      <div class="carousel-caption">
		<h2>IZRADA WEB STRANICA</h2>
        <p>Burza ideja je specijalizirana tvrtka za izradu responzivnih web stranica, izradu responzivnih web trgovina</p>
      </div>
    </div>
<div class="item">
    	<div class="container">
    	<div class="row">
	  		<div class="col-md-12">
	  			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/demo/img-1140x500-2.jpg">
	  		</div>
	  	</div>
	  	</div>
      <div class="carousel-caption">
		<h2>IZRADA WEB STRANICA</h2>
        <p>Burza ideja je specijalizirana tvrtka za izradu responzivnih web stranica, izradu responzivnih web trgovina</p>
      </div>
    </div>
    
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container bi-home-4icons">
<div class="row">	
	<div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <a href="#" title="Saznajte više"><img src="<?php echo get_template_directory_uri(); ?>/images/demo/img-600x316-1.jpg"></a>
      <div class="caption">
        <a href="#"><h3>IZRADA WEB STRANICA</h3></a>
        <p>Burza ideja je specijalizirana tvrtka za izradu responzivnih web
		stranica, izradu responzivnih web trgovina, održavanje web stranica
		i web trgovina.</p>
      </div>
    </div>
  </div>
  
	<div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <a href="#" title="Saznajte više"><img src="<?php echo get_template_directory_uri(); ?>/images/demo/img-600x316-2.jpg"></a>
      <div class="caption">
        <a href="#"><h3>IZRADA WEB TRGOVINA</h3></a>
        <p>Burza ideja je specijalizirana tvrtka za izradu responzivnih web
		stranica, izradu responzivnih web trgovina, održavanje web stranica
		i web trgovina.</p>
      </div>
    </div>
  </div>
	<div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <a href="#" title="Saznajte više"><img src="<?php echo get_template_directory_uri(); ?>/images/demo/img-600x316-3.jpg"></a>
      <div class="caption">
        <a href="#"><h3>SEO OPTIMIZACIJA</h3></a>
        <p>Burza ideja je specijalizirana tvrtka za izradu responzivnih web
		stranica, izradu responzivnih web trgovina, održavanje web stranica
		i web trgovina.</p>
      </div>
    </div>
  </div>
	<div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <a href="#" title="Saznajte više"><img src="<?php echo get_template_directory_uri(); ?>/images/demo/img-600x316-4.jpg"></a>
      <div class="caption">
        <a href="#"><h3>SEO ANALIZA</h3></a>
        <p>Burza ideja je specijalizirana tvrtka za izradu responzivnih web
		stranica, izradu responzivnih web trgovina, održavanje web stranica
		i web trgovina.</p>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container">
<div class="row">
  <div class="col-md-6">
  <div class="thumbnail">
  <div class="caption">
<div class="page-header">
  <h1>Example page header <small>Subtext for header</small></h1>
</div>

	<p>Burza ideja je specijalizirana tvrtka za izradu responzivnih web
		stranica, izradu responzivnih web trgovina, održavanje web stranica
		i web trgovina, izradu SEO analiza te za provođenje SEO optimizacije
		Vaših web stranica. Ukratko, mi brinemo da Vaše web stranice budu u
		skladu s današnjim trendovima i dobro pozicionirane na Googleu.</p>
		<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/animacija-1.gif">
			<?php /* while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'page' ); ?>
		<?php //comments_template( '', true ); ?>
	<?php endwhile; // end of the loop. */ ?>
  	</div>
  	</div>
  </div>
  
  <div class="col-md-6">
  	<div class="thumbnail">
  <div class="caption contactForm">
<div class="page-header">
  <h3>KONTAKTIRAJTE NAS <small>Subtext for header</small></h3>
</div>
<p>Burza ideja je specijalizirana tvrtka za izradu responzivnih web
		stranica, izradu responzivnih web trgovina.</p>
<div class="row">
  <div class="col-xs-6">
    <input type="text" class="form-control" placeholder="Vaše ime">
  </div>
  <div class="col-xs-6">
    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <textarea class="form-control" rows="3"></textarea>
  </div>
</div>
<div class="row">
  <div class="col-xs-6">
    <button type="submit" class="btn btn-primary">POŠALJI</button>
  </div>
</div>

			<?php /* while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'page' ); ?>
		<?php //comments_template( '', true ); ?>
	<?php endwhile; // end of the loop. */ ?>
<div class="row">
  <div class="col-xs-6 col-sm-4">
    <a class="fancybox" rel="img-gallery" title="Neki title opis" href="<?php echo get_template_directory_uri(); ?>/images/demo/img-600x316-1.jpg">
    	<img src="<?php echo get_template_directory_uri(); ?>/images/demo/img-600x316-1.jpg" alt="IMG" class="img-responsive img-rounded">
    </a>
  </div>
  <div class="col-xs-6 col-sm-4">
  	<a class="fancybox" rel="img-gallery" title="Neki title opis 2" href="<?php echo get_template_directory_uri(); ?>/images/demo/img-600x316-2.jpg">
    	<img src="<?php echo get_template_directory_uri(); ?>/images/demo/img-600x316-2.jpg" alt="IMG" class="img-responsive img-circle">
    </a>
  </div>
  <div class="col-xs-6 col-sm-4">
    <img src="<?php echo get_template_directory_uri(); ?>/images/demo/img-600x316-3.jpg" alt="IMG" class="img-responsive img-thumbnail">
  </div>
</div>	
  	</div>
  	</div>
  </div>
  </div>
  
</div>
</div>	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>