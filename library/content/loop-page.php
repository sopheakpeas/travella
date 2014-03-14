<?php if ( have_posts() ) :	while ( have_posts() ) :	the_post(); ?>	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>		<?php if ( has_post_thumbnail() ) { 			$full_image_size = sp_post_thumbnail( 'full' );			$thumb = sp_post_thumbnail('page-featured-image');			$output = '<div class="page-featured-image"><a rel="prettyPhoto" href="' . $full_image_size . '"><img src="' . $thumb . '" /></a></div>';			echo $output;		} ?>		<?php $is_page_title = get_post_meta( $post->ID, 'sp_is_page_title', true );			if ( !$is_page_title ) : ?>		<header class="entry-header">			<h1 class="entry-title"><?php the_title(); ?></h1>		</header>		<?php endif; ?>		<div class="entry-content">			<?php the_content(); ?>		</div><!-- .entry-content -->	</article><!-- #post --><?php endwhile;else : ?>		<?php get_template_part('library/content/error404'); ?>	<?php endif; ?>