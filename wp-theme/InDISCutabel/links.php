<?php get_header(); ?>

<div id="wrapper">

<h1><?php _e('Links:', 'kubrick'); ?></h1>
<ul>
<?php wp_list_bookmarks(); ?>
</ul>

</div>

<?php get_footer(); ?>
