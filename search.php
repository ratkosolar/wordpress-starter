<?php

/**
 * Search template file
 */

?>

<?php get_header(); ?>

<!-- Content Main -->
<main class="content-main" role="main">
	<div class="container">

		<!-- Page Header -->
		<header class="page-header">
			<?php if (have_posts()): ?>
				<h1 class="page-title">
					<?php 
						printf(
							__('Search Results for: "%s"', 'wordpress-starter'), 
							'<span>' . get_search_query() . '</span>'
						); 
					?>	
				</h1>
			<?php else : ?>
				<h1 class="page-title">
					<?php 
						printf(
							__('Nothing found for: "%s"', 'wordpress-starter'), 
							'<span>' . get_search_query() . '</span>'
						); 
					?>	
				</h1>
			<?php endif; ?>
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
				get_search_form();
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
