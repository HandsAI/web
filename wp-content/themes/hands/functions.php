<?php

/*
 *  Características del tema
 */
/*
add_action( 'after_setup_theme', 'dv_setup' );

if ( ! function_exists( 'dv_setup' ) ):

function dv_setup() {

    // This theme styles the visual editor with editor-style.css to match the theme style.
    add_editor_style();

    // Post Format support. You can also use the legacy "gallery" or "asides" (note the plural) categories.
    add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

    // This theme uses post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Make theme available for translation
    // Translations can be filed in the /languages/ directory
    load_theme_textdomain( 'dv', get_template_directory() . '/languages' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'dv' ),
    ) );
}
endif;
*/

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
    'primary' => __( 'Primary Menu',      'hands' ),
    'social'  => __( 'Social Links Menu', 'hands' ),
) );


add_filter('wp_nav_menu_args', 'prefix_nav_menu_args');
function prefix_nav_menu_args($args = ''){
    $args['container'] = false;
    return $args;
}


add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );

add_image_size( 'hands-featured-image', 2000, 1200, true );

add_image_size( 'hands-thumbnail-avatar', 100, 100, true );


function remove_footer_admin () {
 
echo 'Fueled by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Designed by <a href="http://www.uzzz.net" target="_blank">Uzzz Productions</a> | WordPress Tutorials: <a href="http://www.wpbeginner.com" target="_blank">WPBeginner</a></p>';
 
}
 
add_filter('admin_footer_text', 'remove_footer_admin');


//include_once 'functions-dv.php';

function register_post_types(){

     $solution_args = array(
        'public' => true,
        'query_var' => 'solution',
        'rewrite' => array(
            'slug' => 'solution',
            'with_front' => false,
        ),
        'supports' => array(
            'title',
            'thumbnail',
            'revisions',
            'editor',
            'custom-fields',
            'comments'
        ),
        'labels' => array(
            'name' => 'Solutions',
            'singular_name' => 'Solutions',
            'add_new' => 'Add Solution',
            'add_new_item' => 'Add Solution',
            'edit_item' => 'Edit Solution',
            'new_item' => 'New Solution',
            'view_item' => 'View Solution',
            'search_items' => 'Search Solutions',
            'not_found' => 'Solutions not found'
        ),
        'taxonomies' => array(),
        'has_archive' => true
    );
    
    register_post_type('solution', $solution_args );


    $roadmap_args = array(
        'public' => true,
        'query_var' => 'roadmap',
        'rewrite' => array(
            'slug' => 'roadmap',
            'with_front' => false,
        ),
        'supports' => array(
            'title',
            'thumbnail',
            'revisions',
            'editor',
            'custom-fields',
            'comments'
        ),
        'labels' => array(
            'name' => 'RoadMap',
            'singular_name' => 'RoadMaps',
            'add_new' => 'Add RoadMap',
            'add_new_item' => 'Add RoadMap',
            'edit_item' => 'Edit RoadMap',
            'new_item' => 'New RoadMap',
            'view_item' => 'View RoadMap',
            'search_items' => 'Search RoadMap',
            'not_found' => 'RoadMaps not found'
        ),
        'taxonomies' => array(),
        'has_archive' => true
    );
    
    register_post_type('roadmap', $roadmap_args );
    
    
   
}

add_action( 'init', 'register_post_types' );

//PAGINATION

add_action( 'wp_ajax_demo-pagination-load-posts', 'cvf_demo_pagination_load_posts' );

add_action( 'wp_ajax_nopriv_demo-pagination-load-posts', 'cvf_demo_pagination_load_posts' ); 

function cvf_demo_pagination_load_posts() {

    global $wpdb;
    // Set default variables
    $msg = '';

    if(isset($_POST['page'])){
        // Sanitize the received page   
        $id_cat=$_POST['cat'];
        $page = sanitize_text_field($_POST['page']);
        $cur_page = $page;
        $page -= 1;
        // Set the number of results to display
        $per_page = 4;
        $previous_btn = true;
        $next_btn = true;
        $first_btn = true;
        $last_btn = true;
        $start = $page * $per_page;

        // Set the table where we will be querying data
        $table_name = $wpdb->prefix . "posts";



        // Query the necessary posts
        $all_blog_posts = $wpdb->get_results($wpdb->prepare("
            SELECT * 
            FROM " . $table_name . "
            LEFT JOIN  ".$wpdb->term_relationships."  as t ON ID = t.object_id
            WHERE t.term_taxonomy_id = ".$id_cat." and post_type = 'post' AND post_status = 'publish' ORDER BY post_date DESC LIMIT %d, %d", $start, $per_page ) );

        
        // At the same time, count the number of queried posts
        $count = $wpdb->get_var($wpdb->prepare("
            SELECT COUNT(ID) 
            FROM " . $table_name . " 
            LEFT JOIN  ".$wpdb->term_relationships."  as t ON ID = t.object_id
            WHERE t.term_taxonomy_id = ".$id_cat." and post_type = 'post' AND post_status = 'publish'", array() ) );

        /**
         * Use WP_Query:
         *
        $all_blog_posts = new WP_Query(
            array(
                'post_type'         => 'post',
                'post_status '      => 'publish',
                'orderby'           => 'post_date',
                'order'             => 'DESC',
                'posts_per_page'    => $per_page,
                'offset'            => $start
            )
        );

        $count = new WP_Query(
            array(
                'post_type'         => 'post',
                'post_status '      => 'publish',
                'posts_per_page'    => -1
            )
        );
        */

        // Loop into all the posts
        foreach($all_blog_posts as $key => $post): 
            $image = "";
           if (has_post_thumbnail( $post->ID ) ) 
           { 
              $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail'); 

            }
            $post_short_description = get_field('post_short_description', $post->ID);

            // Set the desired output into a variable
            $msg .= '
                <div class="entry clearfix">
                <div class="entry-image">
                    <a href="' . get_permalink($post->ID) . '">
                    <img src="'.$image[0].'" class="image_fade" src="" alt="' . $post->post_title . '"></a>
                </div>
                <div class="entry-title">
                    <h2><a href="' . get_permalink($post->ID) . '">' . $post->post_title . '</a></h2>
                </div>
                <!--
                <ul class="entry-meta clearfix">
                    <li><i class="icon-calendar3"></i> 10th Feb 2014</li>
                </ul>
                -->
                <div class="entry-content">
                    <p>' . $post_short_description . '</p>
                     <a class="more-link" href="' . get_permalink($post->ID) . '"> Read More</a>
                </div>
            </div>
          
            ';

        endforeach;

        // Optional, wrap the output into a container
        $msg = "<div class='cvf-universal-content'>" . $msg . "</div><br class = 'clear' />";

        // This is where the magic happens
        $no_of_paginations = ceil($count / $per_page);

        if ($cur_page >= 7) {
            $start_loop = $cur_page - 3;
            if ($no_of_paginations > $cur_page + 3)
                $end_loop = $cur_page + 3;
            else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                $start_loop = $no_of_paginations - 6;
                $end_loop = $no_of_paginations;
            } else {
                $end_loop = $no_of_paginations;
            }
        } else {
            $start_loop = 1;
            if ($no_of_paginations > 7)
                $end_loop = 7;
            else
                $end_loop = $no_of_paginations;
        }

        // Pagination Buttons logic     
        $pag_container .= "
        <div class='cvf-universal-pagination'>
            <ul class='pagination nobottommargin'>";

        if ($first_btn && $cur_page > 1) {
            $pag_container .= "<li p='1' class='active'><span class='po'><<</span></li>";
        } else if ($first_btn) {
            $pag_container .= "<li p='1' class='inactive'><span><<</span></li>";
        }

        if ($previous_btn && $cur_page > 1) {
            $pre = $cur_page - 1;
            $pag_container .= "<li p='$pre' class='active'><span class='po'><</span></li>";
        } else if ($previous_btn) {
            $pag_container .= "<li class='inactive'><span><</span></li>";
        }
        for ($i = $start_loop; $i <= $end_loop; $i++) {

            if ($cur_page == $i)
                $pag_container .= "<li p='$i' class = 'selected' ><span >{$i}</span></li>";
            else
                $pag_container .= "<li p='$i' class='active'><span class='po'>{$i}</span></li>";
        }

        if ($next_btn && $cur_page < $no_of_paginations) {
            $nex = $cur_page + 1;
            $pag_container .= "<li p='$nex' class='active'><span class='po'>></span></li>";
        } else if ($next_btn) {
            $pag_container .= "<li class='inactive'><span>></span></li>";
        }

        if ($last_btn && $cur_page < $no_of_paginations) {
            $pag_container .= "<li p='$no_of_paginations' class='active'><span class='po'>>></span></li>";
        } else if ($last_btn) {
            $pag_container .= "<li p='$no_of_paginations' class='inactive'><span>>></span></li>";
        }

        $pag_container = $pag_container . "
            </ul>
        </div>";

        // We echo the final output
        echo 
        '<div class = "cvf-pagination-content">' . $msg . '</div>' . 
        '<div class = "cvf-pagination-nav">' . $pag_container . '</div>';

    }
    // Always exit to avoid further execution
    exit();}


function roadmap_status($st)
{

    if($st=="Planning")
    return '<span class="label label-planning">'.$st.'</span>';

    if($st=="In Progress")
    return '<span class="label label-progress">'.$st.'</span>';

    if($st=="Research")
    return '<span class="label label-research">'.$st.'</span>';

    if($st=="in development")
    return '<span class="label label-development">'.$st.'</span>';
}



function wpbeginner_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="navigation"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
 
}


function remove_p($text)
{
    $t=str_replace('<p>', '', $text);
    $t=str_replace('</p>', '', $t);
    return $t;

}
