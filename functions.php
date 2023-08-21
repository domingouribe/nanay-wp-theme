<?php
require get_template_directory() . '/inc/queries.php';

if (! function_exists('nanay_setup')):
    function nanay_setup(){
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        
        add_theme_support( 'post-thumbnails' );
        //Definición tamaños imgenes
        add_image_size( 'post', 800, 800, true );
        add_image_size( 'hero-image', 1600, 900, true );
        
        add_theme_support( '
            post-formats', 
            array( 
                'image', 
                'video', 
                'aside'
             )
        );

        add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
        );


        /*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);
        
        
        //Menus
        register_nav_menus(
            array(
                'principal'     => __( 'Principal' ),
                'top-menu'      => __( 'Superior' ),
                'social-menu'   => __( 'Social Menú' ),
                'footer-menu' => __( 'Menú Pie de Página' ),          
            ) 
        );
    }
endif;
add_action('after_setup_theme', 'nanay_setup');

function nanay_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar Principal', 'nanay' ),
			'id'            => 'main-sidebar',
			'description'   => __( 'Agregar widgets en el sidebar principal.', 'nanay' ),
			'before_widget' => '<div class="widget" id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div class="widget">',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
    );
    
    register_sidebar(
		array(
			'name'          => __( 'Sidebar Píe de Página', 'nanay' ),
			'id'            =>  'footer-sidebar',
			'description'   => __( 'Agregar widgets en el sidebar del Blog.', 'nanay' ),
			'before_widget' => '<div class="widget" id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div class="widget">',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
    );

}
add_action( 'widgets_init', 'nanay_widgets_init' );

function fontawesome_script() { ?>
<script src="https://kit.fontawesome.com/a3785a1622.js" crossorigin="anonymous"></script>
<?php
}
add_action( 'wp_head', 'fontawesome_script' );
// include custom jQuery


function preconnectGoogleFonts() { ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php
}
add_action( 'wp_head', 'preconnectGoogleFonts', 7 );

function add_theme_scripts() {
    wp_enqueue_style('normalize',       get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style('google-fonts',    'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap', array(), '1.0.0', 'all' );
    wp_enqueue_style('style',           get_stylesheet_uri(), array(), '1.0.0');
        wp_enqueue_script('main',       get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0.0', true);
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


/* Eliminamos las <p> de Contact Form 7 */
add_filter( 'wpcf7_autop_or_not', '__return_false' );

/* Eliminamos los <span> de Contact Form 7 */
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    $content = str_replace('<br />', '', $content);
        
    return $content;
});

function remove_headlinks() {
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'start_post_rel_link' );
    remove_action( 'wp_head', 'index_rel_link' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );
    remove_action( 'wp_head', 'adjacent_posts_rel_link' );
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
    remove_action( 'wp_head', 'parent_post_rel_link' );
    remove_action( 'wp_head', 'feed_links', 2 );
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
}
add_action( 'init', 'remove_headlinks' );


//Agregar mis favicons
function agregarFavicons(){ ?>
    <link rel="shortcut icon"    href="<?php echo get_template_directory_uri();?>/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri();?>/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri();?>/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri();?>/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri();?>/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri();?>/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri();?>/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri();?>/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/apple-touch-icon-180x180.png" />
<?php
}//Agregar mis favicons
add_action( 'wp_head', 'agregarFavicons', 11 );