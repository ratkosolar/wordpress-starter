<?php

/**
 * Search Form Template
 */

?>

<form class="search-form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
	<label>
		<span><?php _e('Search for:', 'wordpress-starter'); ?></span>
		<input class="form-control" type="search" placeholder="<?php _e('Search', 'wordpress-starter'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button class="btn btn-submit" type="submit">
		<span class="btn-label"><?php _e('Search', 'wordpress-starter'); ?></span>
	</button>
</form>
