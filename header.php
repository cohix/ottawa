<div id = "headerContainer"> 
	
	<a href = "<?php bloginfo('url'); ?>"> <h1 id = "header1"> <?php bloginfo('title') ?></h1></a>

	<h2 id = "header2"> <?php bloginfo('description'); ?> </h2>

	<!-- <img id = "headerLogo" src = ""> -->

	<?php 
	
		wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'menuContainer', 'items_wrap' => '%3$s') );

	?>


</div>