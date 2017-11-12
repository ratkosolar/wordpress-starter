<?php

/**
 * Archive template file
 */

?>

<?php get_header(); ?>

<!-- Content Main -->
<main class="content-main" role="main">
	<div class="container">

		<!-- Page Header -->
		<header class="page-header">
			<h1 class="page-title"><?php printf(__('Category Archives: %s', 'wordpress-starter'), single_cat_title('', false )); ?></h1>
			<?php
				// Show category description if available
				$cat_description = term_description();
				if (!empty($cat_description)) :
					printf('<div class="page-description">%s</div>', $cat_description);
				endif;
			?>
		</header>
		<!-- /Page Header -->

		<div class="row">
			<div class="col-sm-9 content-main-col">
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
			<div class="col-sm-3 content-sidebar-col">
				<?php get_sidebar(); ?>
			</div>
		</div>
		
	</div>
</main>
<!-- Content Main -->

<?php get_footer(); ?>
