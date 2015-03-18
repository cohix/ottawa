<html>

	<head>

	<?php 
		wp_head() 
	?>

		<link href = "/wp-content/themes/ottawa/style.css" rel = "stylesheet" type = "text/css">

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>

		<title> <?php bloginfo('title'); ?> </title>
	</head>
	
	<body>
		<div id = "headerContainer"> 

			<a href = "<?php bloginfo('url'); ?>"> <h1 id = "header1"> <?php bloginfo('title') ?></h1></a>

			<h2 id = "header2"> <?php bloginfo('description'); ?> </h2>

			<div class = "menuContainer">
				<?php 
				$locations = get_nav_menu_locations();
				$menu = wp_get_nav_menu_object( $locations[ 'header-menu' ] );
				$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );

				foreach($menuitems as $item):

				$id = get_post_meta( $item->ID, '_menu_item_object_id', true );
				$page = get_page( $id );
				$link = get_page_link( $id ); ?>

				<a href = <?php echo $link; ?> > <h3> <?php echo $page->post_title; ?> </h3> </a>

				<?php endforeach;?>
			</div>

		</div>