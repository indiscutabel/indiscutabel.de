<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
	<div id="sidebar">
		<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?>
			<li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p><?php printf(__('You are currently browsing the archives for the %s category.', 'kubrick'), single_cat_title('', false)); ?></p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives for the day %3$s.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), get_the_time(__('l, F jS, Y', 'kubrick'))); ?></p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives for %3$s.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), get_the_time(__('F, Y', 'kubrick'))); ?></p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives for the year %3$s.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), get_the_time('Y')); ?></p>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p><?php printf(__('You have searched the <a href="%1$s/">%2$s</a> blog archives for <strong>&#8216;%3$s&#8217;</strong>. If you are unable to find anything in these search results, you can try one of these links.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name'), wp_specialchars(get_search_query(), true)); ?></p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives.', 'kubrick'), get_bloginfo('url'), get_bloginfo('name')); ?></p>

			<?php } ?>
			</li>
		<?php }?>
		</ul>
		<ul>
			<li>
				<a id="facebook_group" href="http://www.facebook.com/group.php?gid=118247871523860" title="Indiscutabel Facebook Group"><img src="<?php bloginfo('template_directory'); ?>/images/facebook_gruppe.png" alt="Indiscutabel Facebook Group"/></a>
<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FIndiscutabel%2F118301658216442&amp;width=232&amp;colorscheme=light&amp;connections=10&amp;stream=true&amp;header=false&amp;height=587" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:232px; height:587px; margin-left:5px; margin-top:-4px;" allowTransparency="true"></iframe>
			</li>
		</ul>
		<ul>
			<h3><?php printf(__('Bookmarks')) ?></h3>
			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) {
				wp_list_bookmarks(); }  ?>
			
			<?php endif; ?>
		</ul>
		<!-- <ul>
	                <li>
                        </li>
		</ul> -->
<ul>
	                <li>
<div style="margin-left: 10px;">
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 5,
  interval: 6000,
  width: 220,
  height: 280,
  theme: {
    shell: {
      background: '#0066cc',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#000000',
      links: '#4f4f4f'
    }
  },
  features: {
    scrollbar: true,
    loop: false,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('indiscutabel').start();
</script></div>
  </li>

			<li>
                                <h3><?php printf(__('Search for:')) ?></h3>
				<?php get_search_form(); ?>
			</li>
		</ul>
		<ul>
			<?php wp_list_categories('show_count=1&title_li=<h3>' . __('Categories', 'kubrick') . '</h3>'); ?>
			<li><h3><?php _e('Archives', 'kubrick'); ?></h3>
				<ul class="archive-ul">
					<?php /* wp_get_archives('type=monthly'); */ ?>
					<select id="archive-select" name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
						<option value=""><?php echo attribute_escape(__('Select Month')); ?></option>
						<?php wp_get_archives('type=monthly&format=option&show_p ost_count=1'); ?>
					</select>
				</ul>
			</li>
		</ul>

	</div>

