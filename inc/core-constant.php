<?php
$mtodls_data = get_file_data(
	__FILE__,
	array(
		'LegacyVersion' => 'Legacy Version',
		'Version'       => 'Version',
		'TextDomain'    => 'Text Domain',
	)
);

define( 'MTODLS_LEGACY_VERSION', $mtodls_data['LegacyVersion'] );
define( 'MTODLS_VERSION', $mtodls_data['Version'] );
define( 'MTODLS_NAMESPACE', $mtodls_data['TextDomain'] );
define( 'MTODLS_WP_VERSION', get_bloginfo( 'version' ) );
define( 'MTODLS_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'MTODLS_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'MTODLS_BASENAME', plugin_basename( __FILE__ ) );