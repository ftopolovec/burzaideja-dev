<?php get_header(); ?>
	<div id="header-title" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
	<div class="row">
	<div class="col-xs-12">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">	
<?php $mysubpages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
print_r($mysubpages);
if ( is_page() && $mysubpages ) {
	$i=0;
	foreach( $mysubpages as $page ) {
		$i++;		
		$content = $page->post_content;
		if ( ! $content ) // Check for empty page
		continue;
		$content = apply_filters( 'the_content', $content ); ?>
		<h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
		<div class="entry">
			<a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo get_the_post_thumbnail( $page->ID ); ?></a>
			<?php echo $content; ?>
		</div>
		<div style="clear:both;"></div>
<?php 	}	
} else { 
	while ( have_posts() ) : the_post();
		get_template_part( 'content', 'page' );
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
	endwhile;
} ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->
	</div><!-- .col-md-12 -->
	</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>