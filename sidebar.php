<div class = "sidebarContainer">
	
	<?php 
		wp_nav_menu( array( 
			'theme_location' => 'header-menu', 
			'container' => 'div', 
			'container_class' => 'sidebarMenuContainer', 
			'items_wrap' => '%3$s'
		) );
	?>

	<?php if( ! dynamic_sidebar( 'Left Sidebar' ) ) : ?>
		
		<h4> No Sidebar! </h4>

	<?php endif; ?>

</div>