<?php

/**
 * Page template file
 */

?>

<?php get_header(); ?>

<!-- Content Main -->
<main class="content-main" role="main">
	<div class="container">

		<div class="row">
			<div class="col-sm-9 content-main-col">
			<?php 

			if (have_posts()):

				// Content-Page
			  while (have_posts()): the_post();
					get_template_part('includes/template-parts/content', 'page');
				endwhile;

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
