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
register_taxonomy('team-category', 'team', [
    'labels' => [
        'name' => _x(
            'Team Categories',
            'taxonomy general name',
            'genesis-base'
        ),
        'singular_name' => _x(
            'Team Category',
            'taxonomy singular name',
            'genesis-base'
        ),
        'search_items' => __('Search Team Categories', 'genesis-base'),
        'popular_items' => __('Popular Team Categories', 'genesis-base'),
        'all_items' => __('All Team', 'genesis-base'),
        'edit_item' => __('Edit Team Category', 'genesis-base'),
        'update_item' => __('Update Team Category', 'genesis-base'),
        'add_new_item' => __('Add New Team Category', 'genesis-base'),
        'new_item_name' => __('New Team Category Name', 'genesis-base'),
        'separate_items_with_commas' => __(
            'Separate Team Categories with commas',
            'genesis-base'
        ),
        'add_or_remove_items' => __(
            'Add or remove Team Categories',
            'genesis-base'
        ),
        'choose_from_most_used' => __(
            'Choose from the most used Team Categories',
            'genesis-base'
        ),
        'not_found' => __('No Team Categories found.', 'genesis-base'),
        'menu_name' => __('Team Categories', 'genesis-base'),
        'parent_item' => null,
        'parent_item_colon' => null,
    ],
    'exclude_from_search' => true,
    'has_archive' => true,
    'hierarchical' => true,
    'rewrite' => [
        'slug' => _x('team-type', 'team-type slug', 'genesis-team-pro'),
        'with_front' => false,
    ],
    'show_ui' => true,
    'show_tagcloud' => false,
]);

// /* Register Widgets
//  --------------------------------------------- */
// genesis_register_sidebar([
//     'id' => 'custom-widget',
//     'name' => __('Custom Widget', 'genesis'),
//     'description' => __('Custom Widget Area', 'childtheme'),
// ]);


/* Custom Header
 --------------------------------------------- */
//remove initial header functions
remove_action('genesis_header', 'genesis_header_markup_open', 5);
remove_action('genesis_header', 'genesis_header_markup_close', 15);
remove_action('genesis_header', 'genesis_do_header');

//add in the new header markup - prefix the function name - here sm_ is used
add_action('genesis_header', 'sm_genesis_header_markup_open', 5);
add_action('genesis_header', 'sm_genesis_header_markup_close', 15);
add_action('genesis_header', 'sm_genesis_do_header');

//New Header functions
function sm_genesis_header_markup_open()
{
    genesis_markup([
        'html5' => '<header %s>',
        'context' => 'site-header',
    ]);

    genesis_structural_wrap('header');
}

function sm_genesis_header_markup_close()
{
    // Added in content
    echo '<ul class="nav-right">';
    echo '<li class="nav-login">';
    echo '<a class="cart-login menu-item" href="' .
        get_site_url() .
        '/my-account/" title="Login / Account">
	        <span class="cart-login-item"></span>
          </a>';
    echo '</li>';
    echo do_shortcode('[woo_cart_but]');
    echo '<li class="nav-buy-now"><a class="btn btn--buy-now" href="'.get_site_url() .'/shop">Buy Now</a></li>';
    echo '<li class="menu__mobile"><a id="custom_toggle" href="#"><i class="fas fa-bars"></i></a></li>';
    echo '</ul>';
    
    genesis_structural_wrap('header', 'close');

    genesis_markup([
        'close' => '</header>',
        'context' => 'site-header',
    ]);
}

function sm_genesis_do_header()
{
    global $wp_registered_sidebars;
    
    genesis_markup([
        'open' => '<div %s>',
        'context' => 'title-area',
    ]);

    $header_logo = get_field('header_logo', 'option')
        ? get_field('header_logo', 'option')
        : '';
    $second_logo = get_field('second_logo', 'option')
        ? get_field('second_logo', 'option')
        : '';
    echo '<a href="' .
        get_site_url() .
        '" class="custom-logo-link" rel="home">
			<img src="' .
        $header_logo['url'] .
        '" class="custom-logo logo-white" alt="' .
        $header_logo['alt'] .
        '" loading="lazy">
			<img src="' .
        $second_logo['url'] .
        '" class="custom-logo logo-blue" alt="' .
        $second_logo['alt'] .
        '" loading="lazy">
		  </a>';

    genesis_markup([
        'close' => '</div>',
        'context' => 'title-area',
    ]);


    if (
        (isset($wp_registered_sidebars['header-right']) &&
            is_active_sidebar('header-right')) ||
        has_action('genesis_header_right')
    ) {
        genesis_markup([
            'open' => '<div %s>' . genesis_sidebar_title('header-right'),
            'context' => 'header-widget-area',
        ]);

        do_action('genesis_header_right');
        add_filter('wp_nav_menu_args', 'genesis_header_menu_args');
        add_filter('wp_nav_menu', 'genesis_header_menu_wrap');
        dynamic_sidebar('header-right');
        remove_filter('wp_nav_menu_args', 'genesis_header_menu_args');
        remove_filter('wp_nav_menu', 'genesis_header_menu_wrap');

        genesis_markup([
            'close' => '</div>',
            'context' => 'header-widget-area',
        ]);
    }

    

}

/* Theme Options
 --------------------------------------------- */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'HappyTeeth Settings',
        'menu_title' => 'HappyTeeth Settings',
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
                    'title' => __('HappyTeath Headers', 'mlp-admin'),
                ],
            ],
            [
                [
                    'slug' => 'customblocks',
                    'title' => __('HappyTeath Blocks', 'mlp-admin'),
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
    // // Custom Title
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

    // Block We
    acf_register_block([
        'name' => 'section-we',
        'title' => __('Block - We'),
        'description' => __('A custom Home We.'),
        'render_template' => 'lib/acf/blocks/block-about-us.php',
        'category' => 'customblocks',
        'icon' => 'editor-insertmore',
        'mode' => 'edit',
        'keywords' => ['block', 'we', 'home'],
    ]);
}
// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}
