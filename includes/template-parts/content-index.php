<!-- Post Item -->
<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
	<header class="post-item-header">
		<h3 class="post-item-title">
			<a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
		</h3>
		<div class="post-item-meta">
			<span class="post-item-date">
				<?php printf(__('Posted on %s ', 'wordpress-starter'), get_the_date('d/m/Y')); ?>
			</span>
			<span class="post-item-time">
				<?php printf(__('at %s ', 'wordpress-starter'), get_the_time('H:i')); ?>
			</span>
			<span class="post-item-author">
				<?php printf(__('by <a href="%1$s">%2$s</a>', 'wordpress-starter'), get_author_posts_url(get_the_author_meta('ID')), get_the_author()); ?>
			</span>
		</div>
	</header>
	<div class="post-item-excerpt">
		<?php if(has_post_thumbnail()): ?>
			<div class="post-item-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php endif; ?>

		<?php the_excerpt(); ?>
	</div>
	<footer class="post-item-footer">
		<a href="<?php echo esc_url(get_permalink()); ?>" class="post-item-more-link"><?php _e('Read more', 'wordpress-starter'); ?></a>
	</footer>
</article>
<!-- /Post Item -->
