<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	
    // Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Sidebar Widgets',
            'id'   => 'sidebar-widgets',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(

            'main_nav' => 'Main Navigation Menu'
            )

        );
    }

    function custom_excerpt_length( $length ) {
    return 30;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

    add_theme_support( 'post-thumbnails' ); 

    function new_excerpt_more( $more ) {
    return '...';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    function wpprogrammer_post_name_in_body_class( $classes ){
    if( is_singular() ) {
     global $post;
     $parent = get_page($post->post_parent);
     array_push( $classes, "{$post->post_type}-{$post->post_name}" );
     array_push( $classes, "{$post->post_type}-parent-{$parent->post_name}" );
     }
    return $classes;
    }
    add_filter( 'body_class', 'wpprogrammer_post_name_in_body_class' );

    function beopen_pagination() {
        global $wp_query;

        $big = 999999999; // This needs to be an unlikely integer
        // For more options and info view the docs for paginate_links()
        // http://codex.wordpress.org/Function_Reference/paginate_links
        $paginate_links = paginate_links(array(
            'base' => str_replace($big, '%#%', get_pagenum_link($big)),
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
            'mid_size' => 2,
            'prev_next' => True,
            'prev_text' => __('&lsaquo;', 'beopen'),
            'next_text' => __('&rsaquo;', 'beopen'),
            'type' => 'list'
        ));

        // Display the pagination if more than one page is found
        if ($paginate_links) {
            echo '<div class="blog-pagination">';
            echo $paginate_links;
            echo '</div>';
        }
    }

?>