<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for plugin Lonely Coconut
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'lonely_coconut_register_required_plugins' );
function lonely_coconut_register_required_plugins() {
	$plugins = array(
		array(
			'name'      			=> 'Advanced Custom Fields Pro',
			'slug'      			=> 'advanced-custom-fields-pro',
			'force_activation'   	=> true,
			'required'  			=> true,
			'source'    			=> 'https://github.com/infinityhaver/advanced-custom-fields-pro/archive/refs/heads/main.zip',
		),
		array(
			'name'      			=> 'Gravity Forms',
			'slug'      			=> 'gravityforms',
			'force_activation'   	=> true,
			'required'  			=> true,
			'source'    			=> 'https://github.com/infinityhaver/gravityforms/archive/refs/heads/main.zip',
		),
//		array(
//			'name'      			=> 'Gravity Forms Advanced Post Creation',
//			'slug'      			=> 'gravityformsadvancedpostcreation',
//			'force_activation'   	=> true,
//			'required'  			=> true,
//			'source'    			=> 'https://github.com/infinityhaver/gravityformsadvancedpostcreation/archive/refs/heads/main.zip',
//		),
		array(
			'name'      			=> 'FacetWP',
			'slug'      			=> 'facetwp',
			'force_activation'   	=> true,
			'required'  			=> true,
			'source'    			=> 'https://github.com/infinityhaver/facetwp/archive/refs/heads/main.zip',
		),
		array(
			'name'      			=> 'WP All Import Pro',
			'slug'      			=> 'wp-all-import-pro',
			'force_activation'   	=> true,
			'required'  			=> true,
			'source'    			=> 'https://github.com/infinityhaver/wp-all-import-pro/archive/refs/heads/main.zip',
		),
		array(
			'name'      			=> 'WP All Import ACF Add-On',
			'slug'      			=> 'wpai-acf-add-on',
			'force_activation'   	=> true,
			'required'  			=> true,
			'source'    			=> 'https://github.com/infinityhaver/wpai-acf-add-on/archive/refs/heads/main.zip',
		),
		array(
			'name'      			=> 'WP All Export Pro',
			'slug'      			=> 'wp-all-export-pro',
			'force_activation'   	=> true,
			'required'  			=> true,
			'source'    			=> 'https://github.com/infinityhaver/wp-all-export-pro/archive/refs/heads/main.zip',
		),
		array(
			'name'      			=> 'WP All Export ACF Add-On',
			'slug'      			=> 'wpae-acf-add-on',
			'force_activation'   	=> true,
			'required'  			=> true,
			'source'    			=> 'https://github.com/infinityhaver/wpae-acf-add-on/archive/refs/heads/main.zip',
		),
		array(
			'name'      			=> 'Admin Columns Pro',
			'slug'      			=> 'admin-columns-pro',
			'force_activation'   	=> true,
			'required'  			=> true,
			'source'    			=> 'https://github.com/infinityhaver/admin-columns-pro/archive/refs/heads/main.zip',
		),
		array(
			'name'      			=> 'Admin Columns Pro - Advanced Custom Fields (ACF)',
			'slug'      			=> 'ac-addon-acf',
			'force_activation'   	=> true,
			'required'  			=> true,
			'source'    			=> 'https://github.com/infinityhaver/ac-addon-acf/archive/refs/heads/main.zip',
		),
		array(
			'name'      			=> 'FacetWP - Relevanssi integration',
			'slug'      			=> 'facetwp-relevanssi',
			'force_activation'   	=> true,
			'source'    			=> 'https://github.com/infinityhaver/facetwp-relevanssi/archive/refs/heads/main.zip',
		),
		array(
			'name'      			=> 'Gravity Forms + Custom Post Types',
			'slug'      			=> 'gravity-forms-custom-post-types',
			'required'  			=> true,
			'force_activation'   	=> true,
		),
		array(
			'name'      			=> 'ACF RGBA Color Picker',
			'slug'      			=> 'acf-rgba-color-picker',
			'required'  			=> true,
			'force_activation'   	=> true,
		),
		array(
			'name'      			=> 'BulkPress',
			'slug'      			=> 'bulkpress',
			'required'  			=> true,
			'force_activation'   	=> true,
		),
		array(
			'name'      			=> 'Relevanssi',
			'slug'      			=> 'relevanssi',
			'required'  			=> true,
			'force_activation'   	=> true,
		),
		array(
			'name'      			=> 'Redirection',
			'slug'      			=> 'redirection',
			'required'  			=> true,
			'force_activation'   	=> true,
		)

	);
	$config = array(
		'id'           => 'ffw-plugins',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'plugins.php',
		'capability'   => 'manage_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
	);
	tgmpa( $plugins, $config );
}
