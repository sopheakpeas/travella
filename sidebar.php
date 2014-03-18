<?php
/**
 * The sidebar containing the main widget area.
 */

global $post;
?>

	<aside id="sidebar" class="widget-area" role="complementary">

	<?php if ( is_single() || is_page() || is_archive() ) {	
		if ( is_active_sidebar('default-sidebar') ) :	
			dynamic_sidebar('default-sidebar');
		else:?>	
			<div class="non-widget widget">
		    <h3><?php _e('About This '.$sidebar_choice, SP_TEXT_DOMAIN); ?></h3>
		    <p class="noside"><?php _e('To edit this sidebar, go to admin backend\'s <strong><em>Appearance -&gt; Widgets</em></strong> and place widgets into the <strong><em>'.$sidebar_choice.'</em></strong> Area', SP_TEXT_DOMAIN); ?></p>
		    </div>
		<?php endif;
	} ?>
	</aside> <!--End #Sidebar-->
