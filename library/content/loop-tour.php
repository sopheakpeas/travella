<?php if ( have_posts() ) :	while ( have_posts() ) :	the_post(); ?>	<article id="post-<?php the_ID(); ?>">		<header class="entry-header">			<h1 class="entry-title">			<?php 				if (is_single()) { 					the_title(); 				} else { 			?>			<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', SP_TEXT_DOMAIN ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>			<?php } ?>			</h1>		</header>		<?php sp_tour_meta(); ?>		<div class="entry-content">			<?php the_content(); ?>		</div><!-- .entry-content -->			</article>	<?php endwhile;else : ?>		<?php get_template_part('library/content/error404'); ?>	<?php endif; ?>