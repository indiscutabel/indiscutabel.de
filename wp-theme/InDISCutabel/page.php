<?php get_header(); ?>

<div id="wrapper">
	<? /* <div id="content"> */ ?>
	
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">

			<?php if (is_user_logged_in()) : ?>
				<span class="storytitlemeta"><?php the_title(); ?> &#8212; letzte Änderung: <?php the_modified_date(__('j. F Y', 'kubrick')) ?> @ <?php the_modified_time() ?> <?php edit_post_link(__('Edit This')); ?></span>
			<?php else : ?>
				<span class="storytitlemeta">&nbsp;</span>
			<?php endif; ?>
				
			<div class="storycontent">	
				<?php the_content(__('Read the rest of this entry &raquo;', 'kubrick')); ?>
			</div>
			
			<div class="storylinkpages">
				<?php wp_link_pages(); ?>
			</div>
		
			<?php comments_template(); // Get wp-comments.php template ?>
		</div>
		
		<?php endwhile; ?>
		
		<div id="navigation" class="menulist">
			<ul>
				<li><?php previous_posts_link(__('Newer Entries &raquo;', 'kubrick')) ?></li>
				<li><?php next_posts_link(__('&laquo; Older Entries', 'kubrick')) ?></li>
			</ul>
		</div>
		
		<?php else : ?>
			<h2 class="center"><?php _e('Not Found', 'kubrick'); ?></h2>
			<p class="center"><?php _e('Sorry, but you are looking for something that isn&#8217;t here.', 'kubrick'); ?></p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	<? /*
	</div>
	
	<div id="righter">
		<?php get_sidebar(); ?>
	</div>
	*/ ?>
</div>

<?php get_footer(); ?>
