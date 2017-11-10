<?php

/**
 * Main template file
 */

?>

<?php get_header(); ?>

<!-- Content Main -->
<main class="content-main" role="main">
	<div class="container">
	<?php 

	if (have_posts()):

		// Content-Index
	  while (have_posts()): the_post();
			get_template_part('includes/template-parts/content', 'index');
		endwhile;

		// Pagination.
		the_posts_pagination( 
			array(
				'prev_text' => __('Previous page', 'wordpress-starter'),
				'next_text' => __('Next page', 'wordpress-starter'),
			) 
		);

	// No content found template
	else :
		get_template_part('includes/template-parts/content', 'not-found');
	endif;

	?>
	</div>

</main>
<!-- Content Main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
