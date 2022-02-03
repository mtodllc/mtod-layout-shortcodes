<?php
/**
 * Plugin Name: Layout Shortcodes for Matsutomo Design G.K.
 * Description:
 * Requires at least: 5.8
 * Requires PHP: 7.3
 * Version: 0.0.0
 * Legacy Version: 0.0.0
 * Author: Matsutomo Design G.K.
 * Author URI:
 * Plugin URI:
 * Text Domain: mtod-layout-shortcodes
 * Domain Path: /languages
 * License: GPL-2.0+
 */

/**
 * ===========================================
 * ルール
 * ===========================================
 * Plugin Name
 * -------------------------------------------
 * Matsutomo Design G.K.部分は納品する事業者名を記入
 *
 * -------------------------------------------
 * 定数の接続句 MTODLS
 * -------------------------------------------
 * MTODLS
 * 意味はMTOD(会社名)＋LS(プラグイン名のイニシャル)
 *
 * -------------------------------------------
 * incフォルダー
 * -------------------------------------------
 * プラグインの挙動に関するプログラムを記述します
 * プラグインのアップデートは
 * このフォルダーだけで済むようにする事（努力目標）
 *
 * -------------------------------------------
 * moduleフォルダー
 * -------------------------------------------
 * ショートコードで出力させるプログラムを記述します
 * 納品する会社によって変わります。
 *
 * -------------------------------------------
 * languagesフォルダー
 * -------------------------------------------
 * 翻訳フォルダーです
 * 海外使用・公式に登録する際に使用
 * 現状は登録予定はないので使用することはありません
 *
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once __DIR__ . '/inc/core-constant.php';
require_once __DIR__ . '/inc/core-execution.php';
require_once __DIR__ . '/module/module-execution.php';
