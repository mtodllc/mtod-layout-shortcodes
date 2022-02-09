<?php
/**
 * Plugin Name: Layout Shortcodes
 * Description: レイアウト用のショートコードを記述しています。
 * Requires at least: 5.9
 * Requires PHP: 7.3
 * Version: 0.0.1
 * Legacy Version: 0.0.1
 * Author: Matsutomo Design G.K.
 * Author URI:https://mtodllc.com/
 * Plugin URI:https://github.com/mtodllc/mtod-layout-shortcodes
 * Text Domain: mtod-layout-shortcodes
 * Domain Path: /languages
 * License: GPL-2.0+
 */

/**
 * ===========================================
 * ルール
 * ===========================================
 * 【重要】moduleフォルダー
 * -------------------------------------------
 * 開発時：書き換え可
 * 納品後：アップデート時の書き換え不可
 * ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 * ショートコードで出力させるプログラムを記述します
 * 納品する会社によって変わります。
 * その為プラグインのアップデート時にmoduleフォルダを
 * 上書きすると空の状態になる為、アップデート時の
 * 書き換えは不可とします。
 * 開発時は書き換え可。
 *
 *
 * -------------------------------------------
 * incフォルダー
 * -------------------------------------------
 * プラグインの挙動に関するプログラムを記述します
 * プラグインをアップデートする際はincフォルダーも
 * アップデートすること
 *
 *
 * -------------------------------------------
 * languagesフォルダー
 * -------------------------------------------
 * 翻訳フォルダーです
 * 海外使用・公式に登録する際に使用
 * 現状は登録予定はないので使用することはありません
 *
 *
 * ===========================================
 * 備考
 * ===========================================
 * 定数の接続句 MTODLS
 * -------------------------------------------
 * MTODLS
 * 意味はMTOD＋LS(プラグイン名のイニシャル)
 *
 *
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit;
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
define( 'MTODLS_URI', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'MTODLS_BASENAME', plugin_basename( __FILE__ ) );

require_once __DIR__ . '/inc/core-execution.php';
require_once __DIR__ . '/module/module-datasheet.php';
require_once __DIR__ . '/module/module-execution.php';
