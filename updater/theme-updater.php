<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'https://alx.media', // Site where EDD is hosted
		'item_name'      => 'Featureon', // Name of theme
		'theme_slug'     => 'featureon', // Theme slug
		'version'        => '2.3.7', // The current version of this theme
		'author'         => 'AlxMedia', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => '', // Optional, allows for a custom license renewal link
		'beta'           => false, // Optional, set to true to opt into beta versions
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'featureon' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'featureon' ),
		'license-key'               => __( 'License Key', 'featureon' ),
		'license-action'            => __( 'License Action', 'featureon' ),
		'deactivate-license'        => __( 'Deactivate License', 'featureon' ),
		'activate-license'          => __( 'Activate License', 'featureon' ),
		'status-unknown'            => __( 'License status is unknown.', 'featureon' ),
		'renew'                     => __( 'Renew?', 'featureon' ),
		'unlimited'                 => __( 'unlimited', 'featureon' ),
		'license-key-is-active'     => __( 'License key is active.', 'featureon' ),
		'expires%s'                 => __( 'Expires %s.', 'featureon' ),
		'expires-never'             => __( 'Lifetime License.', 'featureon' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'featureon' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'featureon' ),
		'license-key-expired'       => __( 'License key has expired.', 'featureon' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'featureon' ),
		'license-is-inactive'       => __( 'License is inactive.', 'featureon' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'featureon' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'featureon' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'featureon' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'featureon' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'featureon' ),
	)

);
