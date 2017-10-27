<?php
/**
 * WP Simplify - by OSW3
 * Plugin URI: http://osw3.net/wp/simplify
 * Version: 1.1
 * Author: OSW3
 * Author URI: http://osw3.net
 * Description: Clean up the Control Panel.
 *
 * -- 
 * Usage:
 * at the end of ./wp-config.php, replace
 * => require_once(ABSPATH . 'wp-settings.php');
 * by
 * => include_once(ABSPATH . 'wp-simplify.php');
 */

$simplify = true;

if (isset($_GET['simplify']) && $_GET['simplify'] === 'false') 
{
    $simplify = false;
}




/**
 * PLUGINS SETTINGS
 * --
 * Define plugins name must be disabled
 */

$plugins_menu = [
	'wp-google-maps-menu',
	'wpcf7'
];




/**
 * GLOBAL SETTINGS
 * --
 * Define settings for wordpress interface
 */


/*
 * Change WordPress content folder name
 * @type bool
 * @default false
 *
 * If TRUE:
 * 1) don't forget to change the name of the folder manualy
 * 2) search and replace on all files "WP_CONTENT_FOLDERNAME.'/" by "WP_CONTENT_FOLDERNAME.'/"
 *    ~ 44 results in 20 files
 * 3) into wp-includes/default-constants.php, change
 * 	  define( 'WP_CONTENT_URL', get_option('siteurl') . '/wp-content');
 *    by
 *    define( 'WP_CONTENT_URL', get_option('siteurl') . '/'.WP_CONTENT_FOLDERNAME);
 */
/*
 * WordPress Content folder name
 * @type string
 * @default 'wp-content'
 */
$simplify_wp_content_folder_name = 'wp-content';



/*
 * Display the WordPress version number
 * @type bool
 * @default false
 */
$display_wp_version = false;

/*
 * Display the WordPress credit
 * @type bool
 * @default false
 */
$display_wp_credit = false;
/*
 * Text to override the WordPress Credits from the footer
 * $display_wp_credit must be define at TRUE
 * @type string
 */
$simplify_wp_credit_text = false;

/*
 * Add a FavIcon to the WordPress Admin
 * @type string
 *
 * Just write the url of your FavIcon
 * ex : TEMPLATEPATH./assets/images/favicon.png";
 */
$simplify_wp_favicon_url = "/".$simplify_wp_content_folder_name;
$simplify_wp_favicon_url.= "/themes/assets/images/favicon.ico";

/*
 * Disable the WordPress Update Notifications & Links
 * @type bool
 * @default true
 */
$disable_wp_update = true;

/*
 * Display the WordPress Help tab from the Admin
 * @type bool
 * @default false
 */
$display_wp_help_tab = false;
/*
 * Display the WordPress Options tab from the Admin
 * @type bool
 * @default false
 */
$display_wp_options_tab = false;



/**
 * ADMIN BAR SETTINGS
 * --
 * Define settings for the Admin Bar
 */


/*
 * Display the WordPress Admin Bar on website
 * @type bool
 * @default false
 */
$display_wp_admin_bar = false;

/*
 * Display the WordPress logo from AdminBar
 * @type bool
 * @default false
 */
$display_wp_admin_bar_logo = false;

/* !!
 * Display the WordPress Admin Bar Menu Toggle
 * @type bool
 * @default true
 */
$display_wp_admin_bar_menu_toggle = false;

/*
 * Display the WordPress Admin Bar My Account
 * This is the user menu tab
 * @type bool
 * @default true
 */
$display_wp_admin_bar_user_tab = true;

/* !!
 * Display the WordPress Admin Bar View
 * @type bool
 * @default false
 */
$display_wp_admin_bar_view = false;

/*
 * Display the WordPress Admin Bar Comments
 * This is the tab with new comments notification
 * @type bool
 * @default false
 */
$display_wp_admin_bar_comments = false;

/*
 * Display the WordPress Admin Bar Site Name
 * This is the tab with the name of the website and links to view website
 * @type bool
 * @default true
 */
$display_wp_admin_bar_site_name = true;

/*
 * Display the WordPress Admin Bar Site Name Icon
 * This is the "Home" icon on Site Name tab
 * @type bool
 * @default true
 */
$display_wp_admin_bar_site_name_icon = false;

/*
 * Display the WordPress Admin Bar New Content
 * This is the tab with shortcuts to add contents
 * @type bool
 * @default false
 */
$display_wp_admin_bar_new_content = false;

/*
 * Display the WordPress Admin Bar View Site
 * This is a sublink of the tab with a site name
 * @type bool
 * @default false
 */
$display_wp_admin_bar_view_site = false;

/*
 * Change the WordPress Admin Bar "Welcome" message
 * @type bool
 * @default true
 */
$change_wp_admin_bar_welcome = true;
/*
 * Change the WordPress Admin Bar "Welcome" message
 * @type string
 */
$change_wp_admin_bar_welcome_text = "";




/**
 * ADMIN MENU SETTINGS
 * --
 * Define settings for the Admin sidebar menu
 */


/*
 * Display the WordPress Admin Menu Index
 * This is the tab "Dashboard" with sublinks
 * @type bool
 * @default true
 */
$display_wp_admin_menu_index = true;

/*
 * Display the WordPress Admin Menu Edit
 * This is the tab "Posts / Articles" with sublinks
 * @type bool
 * @default true
 */
$display_wp_admin_menu_edit = false;

/*
 * Display the WordPress Admin Menu Medias
 * This is the tab "Media" with sublinks
 * @type bool
 * @default true
 */
$display_wp_admin_menu_medias = false;

/*
 * Display the WordPress Admin Menu Pages
 * This is the tab "Pages" with sublinks
 * @type bool
 * @default false
 */
$display_wp_admin_menu_pages = false;

/*
 * Display the WordPress Admin Menu Comments
 * This is the tab "Comments" with sublinks
 * @type bool
 * @default false
 */
$display_wp_admin_menu_comments = false;

/*
 * Display the WordPress Admin Menu Themes
 * This is the tab "Appearance" with sublinks
 * @type bool
 * @default false
 */
$display_wp_admin_menu_themes = false;
/*
 * Display the WordPress Admin SubMenu Theme Customize
 * This is the sublink "Customize" of "Appearance"
 * @type bool
 * @default false
 */
$display_wp_admin_submenu_theme_customize = false;
/*
 * Display the WordPress Admin SubMenu Themes Editor
 * This is the sublink "Editor" of "Appearance"
 * @type bool
 * @default false
 */
$display_wp_admin_submenu_theme_editor = false;

/*
 * Display the WordPress Admin Menu Plugins
 * This is the tab "Plugins" with sublinks
 * @type bool
 * @default false
 */
$display_wp_admin_menu_plugins = false;

/*
 * Display the WordPress Admin Menu Users
 * This is the tab "Users" with sublinks
 * @type bool
 * @default true
 */
$display_wp_admin_menu_users = false;

/*
 * Display the WordPress Admin Menu Tools
 * This is the tab "Tools" with sublinks
 * @type bool
 * @default false
 */
$display_wp_admin_menu_tools = false;

/*
 * Display the WordPress Admin Menu Settings
 * @type bool
 * @default true
 */
$display_wp_admin_menu_settings = false;
/*
 * Display the WordPress Admin SubMenu Setting Writing
 * @type bool
 * @default false
 */
$display_wp_admin_submenu_setting_writing = false;
/*
 * Display the WordPress Admin SubMenu Setting reading
 * @type bool
 * @default false
 */
$display_wp_admin_submenu_setting_reading = false;
/*
 * Display the WordPress Admin SubMenu Setting discussion
 * @type bool
 * @default false
 */
$display_wp_admin_submenu_setting_discussion = false;
/*
 * Display the WordPress Admin SubMenu Setting media
 * @type bool
 * @default false
 */
$display_wp_admin_submenu_setting_media = false;
/*
 * Display the WordPress Admin SubMenu Setting Permalink
 * @type bool
 * @default false
 */
$display_wp_admin_submenu_setting_permalink = false;

/*
 * Display the WordPress Admin Collapse Menue
 * @type bool
 * @default false
 */
$display_wp_admin_collapse_menu = false;




/**
 * ADMIN DASHBOARD WIDGETS SETTINGS
 * --
 * Define settings for dashboard widgets
 */



/*
 * Disable All WordPress Admin Widgets
 * @type bool
 * @default true
 */
$disable_wp_all_widgets = true;

/*
 * Disable the Welcome Panel
 * @type bool
 * @default true
 */
$disable_wp_welcome_panel = false;

/*
 * Disable WordPress Widget QuickPress
 * @type bool
 * @default true
 */
$disable_wp_widget_quick_press = false;

/*
 * Disable WordPress Widget Activity
 * @type bool
 * @default true
 */
$disable_wp_widget_activity = false;

/*
 * Disable WordPress Widget Incomming Links
 * @type bool
 * @default true
 */
$disable_wp_widget_incoming_links = false;

/*
 * Disable WordPress Widget Right Now
 * @type bool
 * @default true
 */
$disable_wp_widget_right_now = true;

/*
 * Disable WordPress Widget Plugins
 * @type bool
 * @default true
 */
$disable_wp_widget_plugins = true;

/*
 * Disable WordPress Widget Recent Draft
 * @type bool
 * @default true
 */
$disable_wp_widget_recent_draft = true;

/*
 * Disable WordPress Widget Recent Comments
 * @type bool
 * @default true
 */
$disable_wp_widget_recent_comments = true;

/*
 * Disable WordPress Widget dashboard primary
 * @type bool
 * @default true
 */
$disable_wp_widget_dashboard_primary = true;

/*
 * Disable WordPress Widget dashboard secondary
 * @type bool
 * @default true
 */
$disable_wp_widget_dashboard_secondary = true;






// ------ DO NOT EDIT AFTER THIS LINE ------------------------------------------


// // rename 'wp-content'
if (simplify) {
	define('WP_CONTENT_FOLDERNAME', $simplify_wp_content_folder_name);
	define('WP_CONTENT_DIR', ABSPATH . WP_CONTENT_FOLDERNAME);
}

require_once(ABSPATH . 'wp-settings.php');

if ($simplify) 
{
    // Global Settings

	if (!$display_wp_version) {
		add_action('admin_menu', 'simplify_remove_wp_version');
	}
	if (!$display_wp_credit) {
		add_filter('admin_footer_text', 'simplify_remove_wp_credits');
    } 
    else {
        if (!empty($simplify_wp_credit_text)) {
            add_filter('admin_footer_text', 'simplify_override_wp_credits');
        }
    }
    if (!empty($simplify_wp_favicon_url)) {
        add_action('admin_head', 'simplify_add_admin_favicon');
    }
    if ($disable_wp_update) {
        add_action('after_setup_theme', 'simplify_remove_core_update');
        remove_action('load-update-core.php', 'wp_update_plugins');
        add_filter('pre_site_transient_update_plugins', '__return_null');
        add_filter('pre_site_transient_update_core', 'simplify_remove_core_update');
        add_filter('pre_site_transient_update_plugins', 'simplify_remove_core_update');
        add_filter('pre_site_transient_update_themes', 'simplify_remove_core_update');
        add_action('admin_menu', 'simplify_wphidenag');
        add_action('admin_menu', 'simplify_remove_submenu_index_update');
    }
    if (!$display_wp_help_tab) {
        add_filter('contextual_help', 'simplify_remove_help_tab', 999, 3);
    }
    if (!$display_wp_options_tab) {
        add_filter('screen_options_show_screen', '__return_false');
    }

    // Admin Bar Settings

	if (!$display_wp_admin_bar) {
		add_action('after_setup_theme', 'simplify_wp_remove_admin_bar');
	}
	if (!$display_wp_admin_bar_logo) {
		add_action('admin_bar_menu', 'simplify_wp_remove_admin_bar_logo', 999);
	}
	if (!$display_wp_admin_bar_menu_toggle) {
		add_action('admin_bar_menu', 'simplify_wp_remove_admin_menu_toggle', 999);
	}
	if (!$display_wp_admin_bar_user_tab) {
		add_action('admin_bar_menu', 'simplify_wp_remove_admin_user_tab', 999);
	}
	if (!$display_wp_admin_bar_view) {
		add_action('admin_bar_menu', 'simplify_wp_remove_admin_view', 999);
	}
	if (!$display_wp_admin_bar_comments) {
		add_action('admin_bar_menu', 'simplify_wp_remove_admin_comments', 999);
	}
	if (!$display_wp_admin_bar_site_name) {
		add_action('admin_bar_menu', 'simplify_wp_remove_admin_site_name', 999);
	}
	if (!$display_wp_admin_bar_site_name_false) {
		add_action('admin_bar_menu', 'simplify_wp_remove_admin_site_name_icon', 999);
	}
	if (!$display_wp_admin_bar_new_content) {
		add_action('admin_bar_menu', 'simplify_wp_remove_admin_new_content', 999);
	}
	if (!$display_wp_admin_bar_view_site) {
		add_action('admin_bar_menu', 'simplify_wp_remove_admin_view_site', 999);
	}
	if ($change_wp_admin_bar_welcome) {
		add_filter('gettext', 'simplify_wp_change_admin_bar_welcome_text', 10, 3);
	}

    // Admin Menu Settings
    
	if (!$display_wp_admin_menu_index) {
		add_action('admin_menu', 'simplify_remove_menu_index');
	}
	if (!$display_wp_admin_menu_edit) {
		add_action('admin_menu', 'simplify_remove_menu_edit');
	}
    if (!$display_wp_admin_menu_medias) {
        add_action('admin_menu', 'simplify_remove_menu_medias');
    }
	if (!$display_wp_admin_menu_pages) {
		add_action('admin_menu', 'simplify_remove_menu_page');
	}
    if (!$display_wp_admin_menu_comments) {
        add_action('admin_menu', 'simplify_remove_menu_comments');
    }
	if (!$display_wp_admin_menu_themes) {
		add_action('admin_menu', 'simplify_remove_menu_themes');
	}
	if (!$display_wp_admin_submenu_theme_customize) {
		add_action('admin_menu', 'simplify_remove_submenu_theme_customize', 999);
	}
	if (!$display_wp_admin_submenu_theme_editor) {
		add_action('admin_menu', 'simplify_remove_submenu_theme_edit', 999);
	}
	if (!$display_wp_admin_menu_plugins) {
		add_action('admin_menu', 'simplify_remove_menu_plugins');
	}
	if (!$display_wp_admin_menu_users) {
		add_action('admin_menu', 'simplify_remove_menu_users');
	}
	if (!$display_wp_admin_menu_tools) {
		add_action('admin_menu', 'simplify_remove_menu_tools');
	}
	if (!$display_wp_admin_menu_settings) {
		add_action('admin_menu', 'simplify_remove_menu_settings');
	}
	if (!$display_wp_admin_submenu_setting_writing) {
		add_action('admin_menu', 'simplify_remove_submenu_setting_writing');
	}
	if (!$display_wp_admin_submenu_setting_reading) {
		add_action('admin_menu', 'simplify_remove_submenu_setting_reading');
	}
	if (!$display_wp_admin_submenu_setting_discussion) {
		add_action('admin_menu', 'simplify_remove_submenu_setting_discussion');
	}
	if (!$display_wp_admin_submenu_setting_media) {
		add_action('admin_menu', 'simplify_remove_submenu_setting_media');
	}
	if (!$display_wp_admin_submenu_setting_permalink) {
		add_action('admin_menu', 'simplify_remove_submenu_setting_permalink');
	}
	if (!$display_wp_admin_collapse_menu) {
		add_action('admin_head', 'simplify_remove_collapse_menu');
	}
    
    // Admin Dashboard Widgets Settings

	if ($disable_wp_welcome_panel || $disable_wp_all_widgets) {
		remove_action('welcome_panel', 'wp_welcome_panel');
	}
	if ($disable_wp_widget_quick_press || $disable_wp_all_widgets) {
		add_action('wp_dashboard_setup', 'simplify_wp_remove_widget_quick_press');
	}
	if ($disable_wp_widget_activity || $disable_wp_all_widgets) {
		add_action('wp_dashboard_setup', 'simplify_wp_remove_widget_activity');
	}
	if ($disable_wp_widget_incoming_links || $disable_wp_all_widgets) {
		add_action('wp_dashboard_setup', 'simplify_wp_remove_widget_incoming_links');
	}
	if ($disable_wp_widget_right_now || $disable_wp_all_widgets) {
		add_action('wp_dashboard_setup', 'simplify_wp_remove_widget_right_now');
	}
	if ($disable_wp_widget_plugins || $disable_wp_all_widgets) {
		add_action('wp_dashboard_setup', 'simplify_wp_remove_widget_plugins');
	}
	if ($disable_wp_widget_recent_draft || $disable_wp_all_widgets) {
		add_action('wp_dashboard_setup', 'simplify_wp_remove_widget_recent_drafts');
	}
	if ($disable_wp_widget_recent_comments || $disable_wp_all_widgets) {
		add_action('wp_dashboard_setup', 'simplify_wp_remove_widget_recent_comments');
	}
	if ($disable_wp_widget_dashboard_primary || $disable_wp_all_widgets) {
		add_action('wp_dashboard_setup', 'simplify_wp_remove_widget_dashboard_primary');
	}
	if ($disable_wp_widget_dashboard_secondary || $disable_wp_all_widgets) {
		add_action('wp_dashboard_setup', 'simplify_wp_remove_widget_dashboard_secondary');
	}
}


// Plugins Settings

add_action('admin_menu', 'simplify_remove_plugins_menu');
function simplify_remove_plugins_menu() {
	global $plugins_menu;
	foreach ($plugins_menu as $plugin) remove_menu_page($plugin);
}


// Global Settings

// Wp Version
function simplify_remove_wp_version() {
	remove_filter('update_footer','core_update_footer');
}

// Wp Credits
function simplify_remove_wp_credits() {
    return null;
}
function simplify_override_wp_credits() {
    global $simplify_wp_credit_text;
    return $simplify_wp_credit_text;
}

// Wp Favicon
function simplify_add_admin_favicon() {
	global $simplify_wp_favicon_url;
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.$simplify_wp_favicon_url.'">';
}

// Wp Update
function simplify_remove_core_update() {
	global $wp_version;
	return (object) array(
		'last_checked' => time(),
		'version_checked' => $wp_version
	);
}
function simplify_wphidenag() {
	remove_action('admin_notices', 'update_nag', 3);
}
function simplify_remove_submenu_index_update() {
	remove_submenu_page('index.php', 'update-core.php');
}
function simplify_remove_help_tab($old_help, $screen_id, $screen) {
    $screen->remove_help_tabs();
    return $old_help;
}


// Admin Bar Settings

function simplify_wp_remove_admin_bar() {
	// if (!current_user_can('administrator') && !is_admin()) {
	show_admin_bar(false);
	// }
}
function simplify_wp_remove_admin_bar_logo($wp_admin_bar) {
	$wp_admin_bar->remove_node('wp-logo');
}
function simplify_wp_remove_admin_menu_toggle($wp_admin_bar) {
	$wp_admin_bar->remove_node('menu-toggle');
}
function simplify_wp_remove_admin_user_tab($wp_admin_bar) {
	$wp_admin_bar->remove_node('my-account');
}
function simplify_wp_remove_admin_view($wp_admin_bar) {
	$wp_admin_bar->remove_node('view');
}
function simplify_wp_remove_admin_comments($wp_admin_bar) {
	$wp_admin_bar->remove_node('comments');
}
function simplify_wp_remove_admin_site_name($wp_admin_bar) {
	$wp_admin_bar->remove_node('site-name');
}
function simplify_wp_remove_admin_site_name_icon() {
	echo '<style type="text/css">#wp-admin-bar-site-name > a::before { display: none; visibility: hidden; }</style>';
}
function simplify_wp_remove_admin_new_content($wp_admin_bar) {
	$wp_admin_bar->remove_node('new-content');
}
function simplify_wp_remove_admin_view_site($wp_admin_bar) {
	$wp_admin_bar->remove_node('view-site');
	$wp_admin_bar->remove_node('admin-bar');
}
function simplify_wp_change_admin_bar_welcome_text($translated, $text, $domain) {
    
    global $change_wp_admin_bar_welcome_text;
    
    if (!is_admin() || 'default' != $domain)
        return $translated;
    
    if (false !== strpos($translated, 'Howdy, '))
        return str_replace('Howdy, ', $change_wp_admin_bar_welcome_text, $translated);

    if (false !== strpos($translated, 'Salutations'))
        return str_replace('Salutations, ', $change_wp_admin_bar_welcome_text, $translated);

    if (false !== strpos($translated, 'Welcome, '))
        return str_replace('Welcome, ', $change_wp_admin_bar_welcome_text, $translated);

    return $translated;
}


// Admin Menu Settings

function simplify_remove_menu_index() {
	remove_menu_page('index.php');
}
function simplify_remove_menu_edit() {
	remove_menu_page('edit.php');
}
function simplify_remove_menu_medias() {
	remove_menu_page('upload.php');
}
function simplify_remove_menu_page() {
	remove_menu_page('edit.php?post_type=page');
}
function simplify_remove_menu_comments() {
	remove_menu_page('edit-comments.php');
}
function simplify_remove_menu_themes() {
	remove_menu_page('themes.php');
}
function simplify_remove_submenu_theme_customize() {
    global $submenu;
    
    if ( isset( $submenu[ 'themes.php' ] ) ) {
        foreach ( $submenu[ 'themes.php' ] as $index => $menu_item ) {
            if ( in_array( 'Customize', $menu_item ) ) {
                unset( $submenu[ 'themes.php' ][ $index ] );
            }
        }
    }
}
function simplify_remove_submenu_theme_edit() {
	remove_submenu_page('themes.php', 'theme-editor.php');
}
function simplify_remove_menu_plugins() {
	remove_menu_page('plugins.php');
}
function simplify_remove_menu_users() {
	remove_menu_page('users.php');
}
function simplify_remove_menu_tools() {
	remove_menu_page('tools.php');
}
function simplify_remove_menu_settings() {
	remove_menu_page('options-general.php');
}
function simplify_remove_submenu_setting_writing() {
	remove_submenu_page('options-general.php', 'options-writing.php');
}
function simplify_remove_submenu_setting_reading() {
	remove_submenu_page('options-general.php', 'options-reading.php');
}
function simplify_remove_submenu_setting_discussion() {
	remove_submenu_page('options-general.php', 'options-discussion.php');
}
function simplify_remove_submenu_setting_media() {
	remove_submenu_page('options-general.php', 'options-media.php');
}
function simplify_remove_submenu_setting_permalink() {
	remove_submenu_page('options-general.php', 'options-permalink.php');
}
function simplify_remove_collapse_menu() {
    echo '<style type="text/css">#collapse-menu { display: none; visibility: hidden; }</style>';
}

// Admin Dashboard Widgets Settings

function simplify_wp_remove_widget_quick_press() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
}
function simplify_wp_remove_widget_activity() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
}
function simplify_wp_remove_widget_incoming_links() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
}
function simplify_wp_remove_widget_right_now() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
}
function simplify_wp_remove_widget_plugins() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
}
function simplify_wp_remove_widget_recent_drafts() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
}
function simplify_wp_remove_widget_recent_comments() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
}
function simplify_wp_remove_widget_dashboard_primary() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
}
function simplify_wp_remove_widget_dashboard_secondary() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}