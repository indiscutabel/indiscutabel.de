<?php get_header(); ?>

<div id="wrapper">
	
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		
		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>

		<div class="post" id="post-<?php the_ID(); ?>">

			<h1><?php the_title(); ?></h1>
			<span class="storytitlemeta"><?php printf(__('This entry was posted %1$s on %2$s at %3$s and is filed under %4$s.', 'kubrick'), $time_since, get_the_time(__('l, F jS, Y', 'kubrick')), get_the_time(), get_the_category_list(', ')); ?>&nbsp;<?php the_tags(__('Tags:', 'kubrick') . ' ', ', ', '. '); edit_post_link(__('Edit this entry', 'kubrick'), ' ', '.'); ?></span>
				
			<div class="storycontent">	
				<?php the_content(__('Read the rest of this entry &raquo;', 'kubrick')); ?>
			</div>
		
			<div class="storycomments">

			<?php if ( comments_open() && pings_open() ) {
				// Both Comments and Pings are open ?>
				<?php printf(__('You can <a href="#respond">leave a response</a>, or <a href="%s" rel="trackback">trackback</a> from your own site.', 'kubrick'), trackback_url(false)); ?>

			<?php } elseif ( !comments_open() && pings_open() ) {
				// Only Pings are Open ?>
				<?php printf(__('Responses are currently closed, but you can <a href="%s" rel="trackback">trackback</a> from your own site.', 'kubrick'), trackback_url(false)); ?>

			<?php } elseif ( comments_open() && !pings_open() ) {
				// Comments are open, Pings are not ?>
				<?php _e('You can skip to the end and leave a response. Pinging is currently not allowed.', 'kubrick'); ?>

			<?php } elseif ( !comments_open() && !pings_open() ) {
				// Neither Comments, nor Pings are open ?>
				<?php _e('Both comments and pings are currently closed.', 'kubrick'); ?>

			<?php } ?>

			</div>

			<div class="storylinkpages">
				<?php wp_link_pages(); ?>
			</div>
	
			<?php comments_template(); // Get wp-comments.php template ?>
		</div>
		
		<?php endwhile; ?>
		
		<?php else : ?>
			<h2 class="center"><?php _e('Not Found', 'kubrick'); ?></h2>
			
			<p><?php _e('Sorry, no posts matched your criteria.', 'kubrick'); ?></p>
			
			<?php get_search_form(); ?>
		<?php endif; ?>

</div>
		
<?php get_footer(); ?>
