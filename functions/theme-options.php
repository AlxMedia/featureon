<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'magazinertwo', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'magazinertwo' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'magazinertwo' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'magazinertwo' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'magazinertwo' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'magazinertwo' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'magazinertwo' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'magazinertwo' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'magazinertwo' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'magazinertwo' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Responsive Layout
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'responsive',
	'label'			=> esc_html__( 'Responsive Layout', 'magazinertwo' ),
	'description'	=> esc_html__( 'Mobile and tablet optimizations (responsive.css)', 'magazinertwo' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Mobile Sidebar
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'magazinertwo' ),
	'description'	=> esc_html__( 'Hide sidebar content on low-resolution mobile devices (320px)', 'magazinertwo' ),
	'section'		=> 'general',
	'default'		=> '1',
	'choices'		=> array(
		'1'			=> esc_html__( 'Show sidebars', 'magazinertwo' ),
		's1'		=> esc_html__( 'Hide primary sidebar', 'magazinertwo' ),
		's2'		=> esc_html__( 'Hide secondary sidebar', 'magazinertwo' ),
		's1-s2'		=> esc_html__( 'Hide both sidebars', 'magazinertwo' ),
	),
) );
// General: Post Comments
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'post-comments',
	'label'			=> esc_html__( 'Post Comments', 'magazinertwo' ),
	'description'	=> esc_html__( 'Comments on posts', 'magazinertwo' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Page Comments
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'page-comments',
	'label'			=> esc_html__( 'Page Comments', 'magazinertwo' ),
	'description'	=> esc_html__( 'Comments on pages', 'magazinertwo' ),
	'section'		=> 'general',
	'default'		=> 'off',
) );
// General: Recommended Plugins
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'magazinertwo' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'magazinertwo' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Blog Layout
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'blog-layout',
	'label'			=> esc_html__( 'Blog Layout', 'magazinertwo' ),
	'section'		=> 'blog',
	'default'		=> 'blog-standard',
	'choices'		=> array(
		'blog-standard'	=> esc_html__( 'Standard', 'magazinertwo' ),
		'blog-grid'		=> esc_html__( 'Grid', 'magazinertwo' ),
		'blog-list'		=> esc_html__( 'List', 'magazinertwo' ),
	),
) );
// Blog: Heading
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'magazinertwo' ),
	'description'	=> esc_html__( 'Your blog heading', 'magazinertwo' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'magazinertwo' ),
	'description'	=> esc_html__( 'Your blog subheading', 'magazinertwo' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Featured Post Count (Home)
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count (Home)', 'magazinertwo' ),
	'description'	=> esc_html__( 'Max number of featured posts to display on the homepage. Set it to 0 to disable.', 'magazinertwo' ),
	'section'		=> 'blog',
	'default'		=> '5',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '5',
		'step'	=> '1',
	),
) );
// Blog: Featured Post Count (Category)
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count-category',
	'label'			=> esc_html__( 'Featured Post Count (Category)', 'magazinertwo' ),
	'description'	=> esc_html__( 'Max number of featured posts to display on category pages. Set it to 0 to disable.', 'magazinertwo' ),
	'section'		=> 'blog',
	'default'		=> '5',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '5',
		'step'	=> '1',
	),
) );
// Blog: Featured Category
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'magazinertwo' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'magazinertwo' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'magazinertwo' ),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'checkbox',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'magazinertwo' ),
	'description'	=> esc_html__( 'To show featured posts in the slider AND the content below. Usually not recommended.', 'magazinertwo' ),
	'section'		=> 'blog',
	'default'		=> false,
) );
// Blog: Highlights Category Count
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'highlight-posts-count',
	'label'			=> esc_html__( 'Highlight Post Count', 'magazinertwo' ),
	'description'	=> esc_html__( 'Max number of highlight posts to display. Set it to 0 to disable.', 'magazinertwo' ),
	'section'		=> 'blog',
	'default'		=> '7',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '12',
		'step'	=> '1',
	),
) );
// Blog: Highlights Category
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'select',
	'settings'		=> 'highlight-category',
	'label'			=> esc_html__( 'Highlights Category', 'magazinertwo' ),
	'description'	=> esc_html__( 'The 3 latest posts', 'magazinertwo' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'magazinertwo' ),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'magazinertwo' ),
	'description'	=> esc_html__( '2 columns of widgets', 'magazinertwo' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'magazinertwo' ),
	'description'	=> esc_html__( '2 columns of widgets', 'magazinertwo' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Thumbnail Comment Count
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Thumbnail Comment Count', 'magazinertwo' ),
	'description'	=> esc_html__( 'Comment count on thumbnails', 'magazinertwo' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Excerpt Length
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'magazinertwo' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'magazinertwo' ),
	'section'		=> 'blog',
	'default'		=> '26',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Single - Authorbox
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'magazinertwo' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'magazinertwo' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'magazinertwo' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'magazinertwo' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'magazinertwo' ),
		'categories'=> esc_html__( 'Related by categories', 'magazinertwo' ),
		'tags'		=> esc_html__( 'Related by tags', 'magazinertwo' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'magazinertwo' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'magazinertwo' ),
	'section'		=> 'blog',
	'default'		=> 's1',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'magazinertwo' ),
		's1'		=> esc_html__( 'Sidebar Primary', 'magazinertwo' ),
		's2'		=> esc_html__( 'Sidebar Secondary', 'magazinertwo' ),
		'content'	=> esc_html__( 'Below content', 'magazinertwo' ),
	),
) );
// Header: Ads
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-ads',
	'label'			=> esc_html__( 'Header Ads', 'magazinertwo' ),
	'description'	=> esc_html__( 'Header widget ads area', 'magazinertwo' ),
	'section'		=> 'header',
	'default'		=> 'off',
) );
// Header: Search
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'magazinertwo' ),
	'description'	=> esc_html__( 'Header search button', 'magazinertwo' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'magazinertwo' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'magazinertwo' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Footer: Ads
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'magazinertwo' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'magazinertwo' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'magazinertwo' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'magazinertwo' ),
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
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'magazinertwo' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'magazinertwo' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'magazinertwo' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'magazinertwo' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'magazinertwo' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'magazinertwo' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'magazinertwo' ),
	'description'	=> esc_html__( 'Footer credit text', 'magazinertwo' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'magazinertwo' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'magazinertwo' ),
	'section'		=> 'layout',
	'default'		=> 'col-3cm',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'magazinertwo' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'magazinertwo' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'magazinertwo' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'magazinertwo' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'magazinertwo' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'magazinertwo' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'magazinertwo' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'magazinertwo' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'magazinertwo' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'magazinertwo' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'magazinertwo' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'magazinertwo' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'magazinertwo' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'magazinertwo' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );


function magazinertwo_kirki_sidebars_select() { 
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
	Kirki::add_field( 'magazinertwo_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'magazinertwo' ),
		'description'	=> esc_html__( '(is_home) Primary', 'magazinertwo' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magazinertwo' ),
	) );
	Kirki::add_field( 'magazinertwo_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-home',
		'label'			=> esc_html__( 'Home', 'magazinertwo' ),
		'description'	=> esc_html__( '(is_home) Secondary', 'magazinertwo' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magazinertwo' ),
	) );
	Kirki::add_field( 'magazinertwo_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'magazinertwo' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'magazinertwo' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magazinertwo' ),
	) );
	Kirki::add_field( 'magazinertwo_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-single',
		'label'			=> esc_html__( 'Single', 'magazinertwo' ),
		'description'	=> esc_html__( '(is_single) Secondary - If a single post has a unique sidebar, it will override this.', 'magazinertwo' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magazinertwo' ),
	) );
	Kirki::add_field( 'magazinertwo_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'magazinertwo' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'magazinertwo' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magazinertwo' ),
	) );
	Kirki::add_field( 'magazinertwo_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-archive',
		'label'			=> esc_html__( 'Archive', 'magazinertwo' ),
		'description'	=> esc_html__( '(is_archive) Secondary', 'magazinertwo' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magazinertwo' ),
	) );
	Kirki::add_field( 'magazinertwo_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'magazinertwo' ),
		'description'	=> esc_html__( '(is_category) Primary', 'magazinertwo' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magazinertwo' ),
	) );
	Kirki::add_field( 'magazinertwo_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'magazinertwo' ),
		'description'	=> esc_html__( '(is_category) Secondary', 'magazinertwo' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magazinertwo' ),
	) );
	Kirki::add_field( 'magazinertwo_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'magazinertwo' ),
		'description'	=> esc_html__( '(is_search) Primary', 'magazinertwo' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magazinertwo' ),
	) );
	Kirki::add_field( 'magazinertwo_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-search',
		'label'			=> esc_html__( 'Search', 'magazinertwo' ),
		'description'	=> esc_html__( '(is_search) Secondary', 'magazinertwo' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magazinertwo' ),
	) );
	Kirki::add_field( 'magazinertwo_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'magazinertwo' ),
		'description'	=> esc_html__( '(is_404) Primary', 'magazinertwo' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magazinertwo' ),
	) );
	Kirki::add_field( 'magazinertwo_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-404',
		'label'			=> esc_html__( 'Error 404', 'magazinertwo' ),
		'description'	=> esc_html__( '(is_404) Secondary', 'magazinertwo' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magazinertwo' ),
	) );
	Kirki::add_field( 'magazinertwo_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'magazinertwo' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'magazinertwo' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magazinertwo' ),
	) );
	Kirki::add_field( 'magazinertwo_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-page',
		'label'			=> esc_html__( 'Default Page', 'magazinertwo' ),
		'description'	=> esc_html__( '(is_page) Secondary - If a page has a unique sidebar, it will override this.', 'magazinertwo' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'magazinertwo' ),
	) );
	
 } 
add_action( 'init', 'magazinertwo_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'magazinertwo' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'magazinertwo' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'magazinertwo' ) . ' <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank"><strong>' . esc_html__( 'View All', 'magazinertwo' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'magazinertwo' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'magazinertwo' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'magazinertwo' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'magazinertwo' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'magazinertwo' ) . ' <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank"><strong>' . esc_html__( 'View All', 'magazinertwo' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'magazinertwo' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'magazinertwo' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'magazinertwo' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'magazinertwo' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'magazinertwo' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'magazinertwo' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'magazinertwo' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Boxed Layout
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'boxed',
	'label'			=> esc_html__( 'Boxed Layout', 'magazinertwo' ),
	'description'	=> esc_html__( 'Use a boxed layout', 'magazinertwo' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Dark Layout
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dark',
	'label'			=> esc_html__( 'Dark Layout', 'magazinertwo' ),
	'description'	=> esc_html__( 'Dark base style', 'magazinertwo' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Font
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'magazinertwo' ),
	'description'	=> esc_html__( 'Select font for the theme', 'magazinertwo' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'magazinertwo' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'magazinertwo' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'magazinertwo' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'magazinertwo' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'magazinertwo' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'magazinertwo' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'magazinertwo' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'magazinertwo' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'magazinertwo' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'magazinertwo' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'magazinertwo' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'magazinertwo' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'magazinertwo' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'magazinertwo' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'magazinertwo' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'magazinertwo' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'magazinertwo' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'magazinertwo' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'magazinertwo' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'magazinertwo' ),
		'arial'					=> esc_html__( 'Arial', 'magazinertwo' ),
		'georgia'				=> esc_html__( 'Georgia', 'magazinertwo' ),
		'verdana'				=> esc_html__( 'Verdana', 'magazinertwo' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'magazinertwo' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'magazinertwo' ),
	'description'	=> esc_html__( 'Max-width of the container. If you use 2 sidebars, your container should be at least 1280px. Note: For 720px content (default) use 1460px for 2 sidebars and 1200px for 1 sidebar. If you use a combination of both, try something inbetween.', 'magazinertwo' ),
	'section'		=> 'styling',
	'default'		=> '1460',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1600',
		'step'	=> '1',
	),
) );
// Styling: Featured Section Height
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-height',
	'label'			=> esc_html__( 'Featured Section Height', 'magazinertwo' ),
	'description'	=> esc_html__( 'Height of the featured posts section', 'magazinertwo' ),
	'section'		=> 'styling',
	'default'		=> '540',
	'choices'     => array(
		'min'	=> '400',
		'max'	=> '700',
		'step'	=> '1',
	),
) );
// Styling: Sidebar Width
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'sidebar-padding',
	'label'			=> esc_html__( 'Sidebar Width', 'magazinertwo' ),
	'section'		=> 'styling',
	'default'		=> '30',
	'choices'		=> array(
		'30'	=> esc_html__( '280px primary (30px padding)', 'magazinertwo' ),
		'20'	=> esc_html__( '300px primary (20px padding)', 'magazinertwo' ),
	),
) );
// Styling: Primary Color
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'magazinertwo' ),
	'section'		=> 'styling',
	'default'		=> '#0fb4d2',
) );
// Styling: Mobile Menu Background
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-mobile-menu',
	'label'			=> esc_html__( 'Mobile Menu Color', 'magazinertwo' ),
	'section'		=> 'styling',
	'default'		=> '',
) );
// Styling: Topbar Menu Color
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-topbar-menu',
	'label'			=> esc_html__( 'Topbar Menu Color', 'magazinertwo' ),
	'section'		=> 'styling',
	'default'		=> '',
) );
// Styling: Header Color
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-header',
	'label'			=> esc_html__( 'Header Color', 'magazinertwo' ),
	'section'		=> 'styling',
	'default'		=> '',
) );
// Styling: Header Menu Color
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-header-menu',
	'label'			=> esc_html__( 'Header Menu Color', 'magazinertwo' ),
	'section'		=> 'styling',
	'default'		=> '',
) );
// Styling: Subheader Background
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-subheader',
	'label'			=> esc_html__( 'Subheader Background', 'magazinertwo' ),
	'section'		=> 'styling',
	'default'		=> '',
) );
// Styling: Footer Menu Background
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-footer-menu',
	'label'			=> esc_html__( 'Footer Menu Color', 'magazinertwo' ),
	'section'		=> 'styling',
	'default'		=> '#222222',
) );
// Styling: Footer Background
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-footer',
	'label'			=> esc_html__( 'Footer Background', 'magazinertwo' ),
	'section'		=> 'styling',
	'default'		=> '#282828',
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'magazinertwo' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'magazinertwo' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Image Border Radius
Kirki::add_field( 'magazinertwo_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'image-border-radius',
	'label'			=> esc_html__( 'Image Border Radius', 'magazinertwo' ),
	'description'	=> esc_html__( 'Give your thumbnails and layout images rounded corners', 'magazinertwo' ),
	'section'		=> 'styling',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '15',
		'step'	=> '1',
	),
) );