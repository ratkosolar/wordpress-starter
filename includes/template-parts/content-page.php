<!-- Page Item -->
<article id="page-<?php the_ID(); ?>" <?php post_class('page-item page-item-single'); ?>>
	<header class="page-item-header">
		<h3 class="page-item-title">
			<a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
		</h3>
	</header>
	<div class="page-item-excerpt">
		<?php if(has_post_thumbnail()): ?>
			<div class="page-item-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php endif; ?>

		<?php the_content(); ?>
	</div>
</article>
<!-- /Page Item -->
