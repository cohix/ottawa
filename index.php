<?php
/**
 * The main post feed
 *
 * @package WordPress
 * @subpackage ottawa
 * @since ottawa 1.0
 */?>


<?php 
get_header();

get_sidebar();
?>

<div id = "mainContent">
	<?php
	if( have_posts() ): while( have_posts() ): the_post();
	?>
		
		<div class = "postContainer">
			
			<a href = "<?php the_permalink(); ?>"> <h2 class = "postTitle"> <?php the_title(); ?> </h2> </a>

			 <?php the_excerpt(); ?> 

		</div>

	<?php endwhile; else: ?>

	<h1> Nothing Here </h1>

	<?php endif;?>

</div>

<?php get_footer(); ?>