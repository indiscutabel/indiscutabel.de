		<div id="footer">
			<div id="footermenu" class="menulist">
				<ul>
					<li><a href="<?php echo get_permalink(9); ?>">Kontakt</a></li>
					<li><a href="<?php echo get_permalink(11); ?>">Impressum</a></li>
					<li><?php wp_loginout(); ?></li>
					<li><a href="<?php bloginfo_rss('rss2_url') ?>">Feed <img src="<?php bloginfo('template_directory'); ?>/images/feed.gif" alt="RSS Feed" class="feedimage"/></a></li>
				</ul>			
			</div>
		</div>

		<div id="wordpress">
			&copy; 2014 InDISCutabel Münster<br /><?php printf(__('%1$s is proudly powered by %2$s', 'InDISCutabel'), get_bloginfo('name'), '<a href="http://wordpress.org/">WordPress</a>'); ?>
		</div>

		<?php wp_footer(); ?>
		
	</div>
</body>
</html>
