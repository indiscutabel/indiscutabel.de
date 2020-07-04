<?php get_header(); ?>

<div id="wrapper">
	<div id="welcome">
		<p><strong>Herzlich Willkommen bei Ultimate Frisbee an der WWU Münster!</strong><br/>
		Bei uns kann sich gerne jeder austoben, der Lust hat, mit 175g-Plastikscheiben zu schmeißen, sich die Seele aus dem Leib zu rennen und außerdem noch mit vielen netten und genauso bekloppten Leuten die Zeit zu vertreiben! Wir gehören zum Hochschulsport der WWU Münster und haben sowohl für blutige Anfänger als auch für echte Könner immer Plätze frei und freuen uns, wenn DU uns auch <a href="http://www.uni-muenster.de/Hochschulsport/ultimate/training/" title="Mitmachen!">mal besuchen kommst</a>.</p>
	</div>
	<div id="content">
	
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">

    				<div class="storytitle">
    					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h1>
    					
    					<span class="storytitlemeta"><?php the_time(__('j. F Y', 'kubrick')) ?> <!-- @ --> <?php /* the_time() */ ?> von <?php the_author() ?> <?php edit_post_link(__('Edit This')); ?></span>
    				</div>
		
				<?php /*
				<div class="storymeta"><?php _e("Filed under:"); ?> <?php the_category(',') ?> &#8212; <?php the_tags(__('Tags:', 'kubrick') . ' ', ', ', ''); ?>
				</div>
				*/ ?>
				
				<div class="storycontent">	
					<?php the_content(__('Read the rest of this entry &raquo;', 'kubrick')); ?>
				</div>
			
				<p class="storycomments">
				<?php comments_popup_link(__('No Comments &#187;', 'kubrick'), __('1 Comment &#187;', 'kubrick'), __('% Comments &#187;', 'kubrick'), '', __('Comments Closed', 'kubrick') ); ?></p>

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
	</div>
	
	<div id="righter">

<?php /*
		<div class="righter-element" id="wasistfrisbeebild">
			<a href="was-ist-ultimate"><img src="<?php bloginfo('template_directory'); ?>/images/wasistultimate.png" alt="Was ist Ultimate Frisbee? Eine Einführung von den Indies." id="wasistfrisbeebild"/></a>
		</div>
*/ ?>
<?php /*
		<div class="righter-element">
			<a href="fkt-16"><img src="http://www.uni-muenster.de/Hochschulsport/ultimate/wp-content/uploads/2012/04/fkt-announce-2012.png" alt="FKT 2012 - Das Ultimate-Turnier in Münster."/></a>
		</div>
*/ ?>
<?php /*
		<div class="righter-element">
			<a href="damen-quali-nord-2012"><img src="http://www.uni-muenster.de/Hochschulsport/ultimate/wp-content/uploads/2012/01/damen-quali-2012-nichtrot.png" alt="Damen Quali Indoor-DM Nord 2012"/></a>
		</div>
*/ ?>
		
		<?php get_sidebar(); ?>

		<div class="righter-element">
			<h3>Zufallsbilder</h3>
			<? if (class_exists("C_Widget")) {
                               $example = new C_Widget();
                               $example->echo_widget_random('8','112','84');} ?>
		</div>
	</div>
</div>
		
<?php get_footer(); ?>