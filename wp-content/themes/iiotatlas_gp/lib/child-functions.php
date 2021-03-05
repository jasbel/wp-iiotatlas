<?php

/* Custom Post Types
 --------------------------------------------- */
function iiotatlas_team() {
    $labels = [
        'name' => __('Team'),
        'singular_name' => __('Team'),
        'all_items' => __('All Team'),
        'add_new' => _x('Add new Team', 'Team'),
        'add_new_item' => __('Add new Team'),
        'edit_item' => __('Edit Team'),
        'new_item' => __('New Team'),
        'view_item' => __('View Team'),
        'search_items' => __('Search in Team'),
        'not_found' => __('No Team found'),
        'not_found_in_trash' => __('No Team found in trash'),
        'parent_item_colon' => '',
    ];
    $args = [
        'labels' => $labels,
        'public' => true,
        'has_archive' => false, // Set to false hides Archive Pages
        'menu_icon' => 'dashicons-admin-users', //pick one here ~> https://developer.wordpress.org/resource/dashicons/
        'rewrite' => ['slug' => 'team'],
        'taxonomies' => [],
        'query_var' => true,
        'menu_position' => 5,
        'capability_type' => 'page',
        'publicly_queryable' => false, // Set to false hides Single Pages
        'supports' => [
            'thumbnail',
            'custom-fields',
            'excerpt',
            'comments',
            'title',
            'editor',
        ],
    ];
    register_post_type('team', $args);
}
add_action('init', 'iiotatlas_team');

function iiotatlas_faq() {
    $labels = [
        'name' => __('Faq'),
        'singular_name' => __('Faq'),
        'all_items' => __('All Faq'),
        'add_new' => _x('Add new Faq', 'Faq'),
        'add_new_item' => __('Add new Faq'),
        'edit_item' => __('Edit Faq'),
        'new_item' => __('New Faq'),
        'view_item' => __('View Faq'),
        'search_items' => __('Search in Faq'),
        'not_found' => __('No Faq found'),
        'not_found_in_trash' => __('No Faq found in trash'),
        'parent_item_colon' => '',
    ];
    $args = [
        'labels' => $labels,
        'public' => false,  // it's not public, it shouldn't have it's own permalink, and so on
        'publicly_queryable' => true,  // you should be able to query it
        'show_ui' => true,  // you should be able to edit it in wp-admin
        'exclude_from_search' => true,  // you should exclude it from search results
        'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
        'has_archive' => false,  // it shouldn't have archive page
        'rewrite' => false,
        'menu_icon' => 'dashicons-warning', //pick one here ~> https://developer.wordpress.org/resource/dashicons/
        'taxonomies' => [],
        'query_var' => true,
        'menu_position' => 5,
        'capability_type' => 'page',
        'publicly_queryable' => false, // Set to false hides Single Pages
        'supports' => [
            'title',
        ],
    ];
    register_post_type('faq', $args);
}
add_action('init', 'iiotatlas_faq');

/* Taxonomies
 --------------------------------------------- */
// register_taxonomy('team-category', 'team', [
//     'labels' => [
//         'name' => _x(
//             'Team Categories',
//             'taxonomy general name',
//             'genesis-base'
//         ),
//         'singular_name' => _x(
//             'Team Category',
//             'taxonomy singular name',
//             'genesis-base'
//         ),
//         'search_items' => __('Search Team Categories', 'genesis-base'),
//         'popular_items' => __('Popular Team Categories', 'genesis-base'),
//         'all_items' => __('All Team', 'genesis-base'),
//         'edit_item' => __('Edit Team Category', 'genesis-base'),
//         'update_item' => __('Update Team Category', 'genesis-base'),
//         'add_new_item' => __('Add New Team Category', 'genesis-base'),
//         'new_item_name' => __('New Team Category Name', 'genesis-base'),
//         'separate_items_with_commas' => __(
//             'Separate Team Categories with commas',
//             'genesis-base'
//         ),
//         'add_or_remove_items' => __(
//             'Add or remove Team Categories',
//             'genesis-base'
//         ),
//         'choose_from_most_used' => __(
//             'Choose from the most used Team Categories',
//             'genesis-base'
//         ),
//         'not_found' => __('No Team Categories found.', 'genesis-base'),
//         'menu_name' => __('Team Categories', 'genesis-base'),
//         'parent_item' => null,
//         'parent_item_colon' => null,
//     ],
//     'exclude_from_search' => true,
//     'has_archive' => true,
//     'hierarchical' => true,
//     'rewrite' => [
//         'slug' => _x('team-type', 'team-type slug', 'genesis-team-pro'),
//         'with_front' => false,
//     ],
//     'show_ui' => true,
//     'show_tagcloud' => false,
// ]);

// /* Register Widgets
//  --------------------------------------------- */
// genesis_register_sidebar([
//     'id' => 'custom-widget',
//     'name' => __('Custom Widget', 'genesis'),
//     'description' => __('Custom Widget Area', 'childtheme'),
// ]);


// /* Custom Header
//  --------------------------------------------- */
// //remove initial header functions
// remove_action('genesis_header', 'genesis_header_markup_open', 5);
// remove_action('genesis_header', 'genesis_header_markup_close', 15);
// remove_action('genesis_header', 'genesis_do_header');

// //add in the new header markup - prefix the function name - here sm_ is used
// add_action('genesis_header', 'sm_genesis_header_markup_open', 5);
// add_action('genesis_header', 'sm_genesis_header_markup_close', 15);
// add_action('genesis_header', 'sm_genesis_do_header');

// //New Header functions
// function sm_genesis_header_markup_open()
// {
//     genesis_markup([
//         'html5' => '<header %s>',
//         'context' => 'site-header',
//     ]);

//     genesis_structural_wrap('header');
// }

// function sm_genesis_header_markup_close()
// {
//     // Added in content
//     echo '<ul class="nav-right">';
//     echo '<li class="nav-login">';
//     echo '<a class="cart-login menu-item" href="' .
//         get_site_url() .
//         '/my-account/" title="Login / Account">
// 	        <span class="cart-login-item"></span>
//           </a>';
//     echo '</li>';
//     echo do_shortcode('[woo_cart_but]');
//     echo '<li class="nav-buy-now"><a class="btn btn--buy-now" href="'.get_site_url() .'/shop">Buy Now</a></li>';
//     echo '<li class="menu__mobile"><a id="custom_toggle" href="#"><i class="fas fa-bars"></i></a></li>';
//     echo '</ul>';
    
//     genesis_structural_wrap('header', 'close');

//     genesis_markup([
//         'close' => '</header>',
//         'context' => 'site-header',
//     ]);
// }

// function sm_genesis_do_header()
// {
//     global $wp_registered_sidebars;
    
//     genesis_markup([
//         'open' => '<div %s>',
//         'context' => 'title-area',
//     ]);

//     $header_logo = get_field('header_logo', 'option')
//         ? get_field('header_logo', 'option')
//         : '';
//     $second_logo = get_field('second_logo', 'option')
//         ? get_field('second_logo', 'option')
//         : '';
//     echo '<a href="' .
//         get_site_url() .
//         '" class="custom-logo-link" rel="home">
// 			<img src="' .
//         $header_logo['url'] .
//         '" class="custom-logo logo-white" alt="' .
//         $header_logo['alt'] .
//         '" loading="lazy">
// 			<img src="' .
//         $second_logo['url'] .
//         '" class="custom-logo logo-blue" alt="' .
//         $second_logo['alt'] .
//         '" loading="lazy">
// 		  </a>';

//     genesis_markup([
//         'close' => '</div>',
//         'context' => 'title-area',
//     ]);


//     if (
//         (isset($wp_registered_sidebars['header-right']) &&
//             is_active_sidebar('header-right')) ||
//         has_action('genesis_header_right')
//     ) {
//         genesis_markup([
//             'open' => '<div %s>' . genesis_sidebar_title('header-right'),
//             'context' => 'header-widget-area',
//         ]);

//         do_action('genesis_header_right');
//         add_filter('wp_nav_menu_args', 'genesis_header_menu_args');
//         add_filter('wp_nav_menu', 'genesis_header_menu_wrap');
//         dynamic_sidebar('header-right');
//         remove_filter('wp_nav_menu_args', 'genesis_header_menu_args');
//         remove_filter('wp_nav_menu', 'genesis_header_menu_wrap');

//         genesis_markup([
//             'close' => '</div>',
//             'context' => 'header-widget-area',
//         ]);
//     }

    

// }

/* Theme Options in backer
 --------------------------------------------- */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Iotatlas Settings',
        'menu_title' => 'Iotatlas Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
        
    ]);
    // acf_add_options_page([
    //     'page_title' => 'FAQ',
    //     'menu_title' => 'FAQ',
    //     'menu_slug' => 'theme-faq-settings',
    //     'capability' => 'edit_posts',
    //     'redirect' => false,
    //     'position' => '10',
    //     'icon_url' => 'dashicons-warning',
    // ]);
}

/* ACF Blocks
--------------------------------------------- */
function ff_block_category($categories, $post)
{
    if ($post->post_type == 'page') {
        $welcoop_blocks = array_merge(
            $categories,
            [
                [
                    'slug' => 'headers',
                    'title' => __('Iio Headers', 'mlp-admin'),
                ],
            ],
            [
                [
                    'slug' => 'customblocks',
                    'title' => __('Iio Blocks', 'mlp-admin'),
                ],
            ]
        );
    } else {
        return $categories;
    }

    return $welcoop_blocks;
}
add_filter('block_categories', 'ff_block_category', 10, 2);

// Blocks
function register_acf_block_types()
{
    // acf_register_block([
    //     'name' => 'section-hero',
    //     'title' => __('Block - Hero'),
    //     'description' => __('A custom title.'),
    //     'render_template' => 'lib/acf/blocks/block-hero.php',
    //     'category' => 'headers',
    //     'icon' => 'editor-insertmore',
    //     'mode' => 'edit',
    //     'keywords' => ['block', 'hero'],
    // ]);

    /* float */
    /* TODO: Cambiar el float a general, averigura como */
    acf_register_block([
        'name' => 'section-float',
        'title' => __('Block - Float'),
        'description' => __('A custom Home float.'),
        'render_template' => 'lib/acf/blocks/block-float.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'float', 'home'],
    ]);

    /* About Us */
    acf_register_block([
        'name' => 'section-about',
        'title' => __('Block - About'),
        'description' => __('A custom Home About.'),
        'render_template' => 'lib/acf/blocks/block-about.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'about', 'home'],
    ]);

     /* Integrate */
    acf_register_block([
        'name' => 'section-integrate',
        'title' => __('Block - Integrate'),
        'description' => __('A custom Home Integrate.'),
        'render_template' => 'lib/acf/blocks/block-integrate.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'integrate', 'home'],
    ]);
    
    /* why Choose */
    acf_register_block([
        'name' => 'section-choose',
        'title' => __('Block - Choose'),
        'description' => __('A custom Home choose.'),
        'render_template' => 'lib/acf/blocks/block-choose.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'choose', 'home'],
    ]);
    /* Extension */
     acf_register_block([
        'name' => 'section-extension',
        'title' => __('Block - Extension'),
        'description' => __('A custom Home extension.'),
        'render_template' => 'lib/acf/blocks/block-extension.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'extension', 'home'],
    ]);

    /* Project */
    acf_register_block([
        'name' => 'section-project',
        'title' => __('Block - Project'),
        'description' => __('A custom Home project.'),
        'render_template' => 'lib/acf/blocks/block-project.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'project', 'home'],
    ]);

    /* Contact us */
    acf_register_block([
        'name' => 'section-contact',
        'title' => __('Block - Contact'),
        'description' => __('A custom Home Contact.'),
        'render_template' => 'lib/acf/blocks/block-contact.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'contact us', 'home'],
    ]);
    /* Mentors */
    acf_register_block([
        'name' => 'section-mentors',
        'title' => __('Block - Mentors'),
        'description' => __('A custom Home mentors.'),
        'render_template' => 'lib/acf/blocks/block-mentors.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'mentors', 'home'],
    ]);


    /* Services */
    /* floating Video */
    acf_register_block([
        'name' => 'section-floating',
        'title' => __('Block - Floating'),
        'description' => __('A custom Service Floating.'),
        'render_template' => 'lib/acf/blocks/block-floating.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'float', 'Service'],
    ]);
    /* Service */
    acf_register_block([
        'name' => 'section-service',
        'title' => __('Block - Service'),
        'description' => __('A custom Home service.'),
        'render_template' => 'lib/acf/blocks/block-service.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'service', 'home'],
    ]);

    /* functionality */
    acf_register_block([
        'name' => 'section-functionality',
        'title' => __('Block - Functionality'),
        'description' => __('A custom functionality.'),
        'render_template' => 'lib/acf/blocks/block-functionality.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'functionality'],
    ]);
    /* compatible */
    acf_register_block([
        'name' => 'section-compatible',
        'title' => __('Block - Compatible'),
        'description' => __('A custom compatible.'),
        'render_template' => 'lib/acf/blocks/block-compatible.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'compatible'],
    ]);
    /* advantage */
    acf_register_block([
        'name' => 'section-advantage',
        'title' => __('Block - Advantage'),
        'description' => __('A custom advantage.'),
        'render_template' => 'lib/acf/blocks/block-advantage.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'advantage'],
    ]);
    /* architecture */
    acf_register_block([
        'name' => 'section-architecture',
        'title' => __('Block - Architecture'),
        'description' => __('A custom architecture.'),
        'render_template' => 'lib/acf/blocks/block-architecture.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'architecture'],
    ]);
    /* actual */
    acf_register_block([
        'name' => 'section-actual',
        'title' => __('Block - Actual'),
        'description' => __('A custom actual.'),
        'render_template' => 'lib/acf/blocks/block-actual.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'actual'],
    ]);

    /* Nosotros */
    /* we */
    acf_register_block([
        'name' => 'section-we',
        'title' => __('Block - We'),
        'description' => __('A custom we.'),
        'render_template' => 'lib/acf/blocks/block-we.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'we'],
    ]);
    /* mvsion */
    acf_register_block([
        'name' => 'section-mvsion',
        'title' => __('Block - Mission - Vision'),
        'description' => __('A custom Mission and Vision.'),
        'render_template' => 'lib/acf/blocks/block-mvsion.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'mvsion'],
    ]);
    /* achievement */
    acf_register_block([
        'name' => 'section-achievement',
        'title' => __('Block - Achievement'),
        'description' => __('A custom achievement.'),
        'render_template' => 'lib/acf/blocks/block-achievement.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'achievement'],
    ]);
    /* team */
    acf_register_block([
        'name' => 'section-team',
        'title' => __('Block - Team'),
        'description' => __('A custom Home Team.'),
        'render_template' => 'lib/acf/blocks/block-team.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'team', 'home'],
    ]);

    /* Contact */
    
    /* form */
    acf_register_block([
        'name' => 'section-form',
        'title' => __('Block - Form'),
        'description' => __('A custom form.'),
        'render_template' => 'lib/acf/blocks/block-form.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'form'],
    ]);
    /* location */
    acf_register_block([
        'name' => 'section-location',
        'title' => __('Block - Location'),
        'description' => __('A custom location.'),
        'render_template' => 'lib/acf/blocks/block-location.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'location'],
    ]);
    /* map */
    acf_register_block([
        'name' => 'section-map',
        'title' => __('Block - Map'),
        'description' => __('A custom map.'),
        'render_template' => 'lib/acf/blocks/block-map.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'map'],
    ]);

    /* Contact */
    acf_register_block([
        'name' => 'page-contact',
        'title' => __('Page - Contact'),
        'description' => __('Page Contact'),
        'render_template' => 'lib/acf/page-contact.php',
        'category' => 'custompage',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'form'],
    ]);
}
// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}

//Disabled force Generate press style inline 
// https://stackoverflow.com/questions/43170587/how-to-remove-only-one-inline-style-from-wordpress-head
//TODO: Averigurar si afecta con el tema padre
function wp_force_remove_style(){
    add_filter( 'print_styles_array', function($styles) {
        #Set styles to remove
        $styles_to_remove = array('generate-style');
        if(is_array($styles) AND count($styles) > 0)
            foreach($styles AS $key => $code){
                if(in_array($code, $styles_to_remove)) unset($styles[$key]);
            }
        return $styles;
        });
}
//add_action('wp_enqueue_scripts', 'wp_force_remove_style', 99);

// function generate_replace_inline_css() {
//     wp_dequeue_style( 'generate-style' );
// }
// add_action( 'wp_enqueue_scripts', 'generate_replace_inline_css', 100 );