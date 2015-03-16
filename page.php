		
		<?php
		/**
		 * The Template for displaying all single posts
		 *
		 * @package WordPress
		 * @subpackage ottawa
		 * @since ottawa 1.0
		 */?>

<html>

	<head>

		<link href = "/wp-content/themes/ottawa/style.css" rel = "stylesheet" type = "text/css">

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>

		<title> <?php bloginfo('title'); ?> </title>
	</head>

	<body>
		<?php 
		get_header();

		get_sidebar();
		?>

		<div id = "mainContent">
			<?php
			if( have_posts() ): while( have_posts() ): the_post();
			?>
				
				<div class = "contentContainer">
					
					<a href = "<?php the_permalink(); ?>"> <h2 class = "postTitle"> <?php the_title(); ?> </h2> </a>

					<?php the_content(); ?>

				</div>

			<?php endwhile; else: ?>

			<h1> Nothing Here </h1>

			<?php endif;?>

		</div>

		<?php get_footer(); ?>
		
	</body>

</html>