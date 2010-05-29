<?php
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Blue_Sidebar',
		'before_widget' => '<div class="item">', 
		'after_widget' => '</div>', 
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Orange_Sidebar',
		'before_widget' => '<div class="item">', 
		'after_widget' => '</div>', 
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Red_Sidebar',
		'before_widget' => '<div class="item">', 
		'after_widget' => '</div>', 
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));	
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Welcome_Sidebar',
		'before_widget' => '<div class="item">', 
		'after_widget' => '</div>', 
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));	

function field_func($atts) {
    global $post;
    $name = $atts['name'];
    if (empty($name)) return;
    return get_post_meta($post->ID, $name, true);
}

add_shortcode('field', 'field_func');

#function exclude_category($query) {
#    if ( $query->is_home ) {
#        $query->set('cat', '-2');
#    }
#    return $query;
#}
#
#add_filter('pre_get_posts', 'exclude_category');

?>
