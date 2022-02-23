<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'textdash', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'textdash' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'textdash' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'textdash' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'textdash' ),
	'button_url'  => 'https://wordpress.org/support/theme/textdash/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'textdash' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'textdash' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'textdash' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'textdash' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'textdash' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'textdash' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'textdash' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'textdash' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'textdash' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'textdash' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'textdash' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'textdash' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'textdash' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Enable Blog Heading
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'heading-enable',
	'label'			=> esc_html__( 'Enable Blog Heading', 'textdash' ),
	'description'	=> esc_html__( 'Show heading on blog home', 'textdash' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Heading
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'textdash' ),
	'description'	=> esc_html__( 'Your blog heading', 'textdash' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'textdash' ),
	'description'	=> esc_html__( 'Your blog subheading', 'textdash' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'textdash' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'textdash' ),
	'section'		=> 'blog',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'textdash' ),
	'description'	=> esc_html__( 'Exclude featured posts from the content below', 'textdash' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Featured Category
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'textdash' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'textdash' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'textdash' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'textdash' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'textdash' ),
	'section'		=> 'blog',
	'default'		=> '3',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '10',
		'step'	=> '1',
	),
) );
// Blog: Highlight Category
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'select',
	'settings'		=> 'highlight-category',
	'label'			=> esc_html__( 'Highlight Category', 'textdash' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'textdash' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'textdash' ),
) );
// Blog: Highlights Category Count
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'highlight-posts-count',
	'label'			=> esc_html__( 'Highlight Post Count', 'textdash' ),
	'description'	=> esc_html__( 'Max number of highlight posts to display. Set it to 0 to disable.', 'textdash' ),
	'section'		=> 'blog',
	'default'		=> '6',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '10',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'textdash' ),
	'description'	=> esc_html__( '2 columns of widgets', 'textdash' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'textdash' ),
	'description'	=> esc_html__( '2 columns of widgets', 'textdash' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Comment Count
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'textdash' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'textdash' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Post Format
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'post-format',
	'label'			=> esc_html__( 'Single - Post Format', 'textdash' ),
	'description'	=> esc_html__( 'Shows post format in post header', 'textdash' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'textdash' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'textdash' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'textdash' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'textdash' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'textdash' ),
		'categories'=> esc_html__( 'Related by categories', 'textdash' ),
		'tags'		=> esc_html__( 'Related by tags', 'textdash' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'textdash' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'textdash' ),
	'section'		=> 'blog',
	'default'		=> 'sidebar',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'textdash' ),
		'sidebar'	=> esc_html__( 'Sidebar', 'textdash' ),
		'content'	=> esc_html__( 'Below content', 'textdash' ),
	),
) );
// Header: Search
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'textdash' ),
	'description'	=> esc_html__( 'Header search button', 'textdash' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'textdash' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'textdash' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'textdash' ),
	'description'	=> esc_html__( 'Square size image', 'textdash' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'textdash' ),
	'description'	=> esc_html__( 'Your name appears below the image', 'textdash' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'textdash' ),
	'description'	=> esc_html__( 'A short description of you', 'textdash' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'textdash' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'textdash' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'textdash' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 2', 'textdash' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'textdash' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'textdash' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'textdash' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'textdash' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'textdash' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'textdash' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'textdash' ),
	'description'	=> esc_html__( 'Footer credit text', 'textdash' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'textdash' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'textdash' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cl',
	'choices'     => array(
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'textdash' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'textdash' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'textdash' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'textdash' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'textdash' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'textdash' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'textdash' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'textdash' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'textdash' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'textdash' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'textdash' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'textdash' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'textdash' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'textdash' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function textdash_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'textdash_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'textdash' ),
		'description'	=> esc_html__( '(is_home) Primary', 'textdash' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'textdash' ),
	) );
	Kirki::add_field( 'textdash_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'textdash' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'textdash' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'textdash' ),
	) );
	Kirki::add_field( 'textdash_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'textdash' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'textdash' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'textdash' ),
	) );
	Kirki::add_field( 'textdash_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'textdash' ),
		'description'	=> esc_html__( '(is_category) Primary', 'textdash' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'textdash' ),
	) );
	Kirki::add_field( 'textdash_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'textdash' ),
		'description'	=> esc_html__( '(is_search) Primary', 'textdash' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'textdash' ),
	) );
	Kirki::add_field( 'textdash_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'textdash' ),
		'description'	=> esc_html__( '(is_404) Primary', 'textdash' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'textdash' ),
	) );
	Kirki::add_field( 'textdash_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'textdash' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'textdash' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'textdash' ),
	) );
	
 } 
add_action( 'init', 'textdash_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'textdash' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'textdash' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'textdash' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'textdash' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'textdash' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'textdash' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'textdash' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'textdash' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'textdash' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'textdash' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'textdash' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'textdash' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'textdash' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'textdash' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'textdash' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'textdash' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'textdash' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Disable Social Sidebar
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'social-sidebar',
	'label'			=> esc_html__( 'Social Sidebar', 'textdash' ),
	'description'	=> esc_html__( 'Disable to hide the social and search sidebar', 'textdash' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Font
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'textdash' ),
	'description'	=> esc_html__( 'Select font for the theme', 'textdash' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'textdash' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'textdash' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'textdash' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'textdash' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'textdash' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'textdash' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'textdash' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'textdash' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'textdash' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'textdash' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'textdash' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'textdash' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'textdash' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'textdash' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'textdash' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'textdash' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'textdash' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'textdash' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'textdash' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'textdash' ),
		'arial'					=> esc_html__( 'Arial', 'textdash' ),
		'georgia'				=> esc_html__( 'Georgia', 'textdash' ),
		'verdana'				=> esc_html__( 'Verdana', 'textdash' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'textdash' ),
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'textdash' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'textdash' ),
	'section'		=> 'styling',
	'default'		=> '50',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Container Width
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'textdash' ),
	'description'	=> esc_html__( 'Max-width of the container.', 'textdash' ),
	'section'		=> 'styling',
	'default'		=> '1280',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Article Width
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'article-width',
	'label'			=> esc_html__( 'Article Max-width', 'textdash' ),
	'description'	=> esc_html__( 'Max-width of the articles.', 'textdash' ),
	'section'		=> 'styling',
	'default'		=> '700',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Primary Color
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'textdash' ),
	'section'		=> 'styling',
	'default'		=> '#027aff',
) );
// Styling: Secondary Color
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-2',
	'label'			=> esc_html__( 'Secondary Color', 'textdash' ),
	'section'		=> 'styling',
	'default'		=> '#d9ebff',
) );
// Styling: Social Sidebar Color
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-social-sidebar',
	'label'			=> esc_html__( 'Social Sidebar Color', 'textdash' ),
	'section'		=> 'styling',
	'default'		=> '#3d4e59',
) );
// Styling: Body Background
Kirki::add_field( 'textdash_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background',
	'label'			=> esc_html__( 'Background Color', 'textdash' ),
	'section'		=> 'styling',
	'default'		=> '#e0e6ea',
) );