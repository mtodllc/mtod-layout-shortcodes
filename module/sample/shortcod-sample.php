<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/*
 * ===========================================
 * サンプルプログラム
 * ===========================================
 */


//--------------------------------------------
// Hello World! & images & JavaScript
//--------------------------------------------
class mtodls_shortcodeclass_helloworld{
    public
    function __construct() {
        add_action( 'wp_head', array( $this, 'add_css_class' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'add_javascript' ) );
        add_shortcode('mtodls-helloworld', array( $this, 'helloworld_func' ) );
    }

    public
    function add_css_class(){
        global $post;
        include_once( MTODLS_PATH. '/module/sample/css-helloworld.php');
        if( has_shortcode( $post->post_content, 'mtodls-helloworld' ) ) {
            echo $csscode;
        }
    }

    public
    function add_javascript(){
        global $post;
        if( has_shortcode( $post->post_content, 'mtodls-helloworld' ) ) {
            wp_enqueue_script ( 'mtodls-helloworld', MTODLS_URI. '/module/sample/js-helloworld.js', array( 'jquery' ), false ,true  );
        }
    }

    public
    function helloworld_func() {
        $imguri = MTODLS_IMGURI.'/sample';
        $code = <<< EOD
        <div id="mtodls-helloworld">
        <p>Hello World!</p>
        <figure><img src="{$imguri}/sample.png"><figcaption>サンプル画像</figcaption></figure>
        </div>
        EOD;
        return $code;
    }
}
new mtodls_shortcodeclass_helloworld();



//--------------------------------------------
// Swiper Demo
//--------------------------------------------
class mtodls_shortcodeclass_swiper_demo{
    public
    function __construct() {
        add_action( 'wp_head', array( $this, 'add_css_class' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'add_javascript' ) );
        add_shortcode('mtodls-swiper-demo', array( $this, 'swiper_demo_func' ) );
    }

    public
    function add_css_class(){
        global $post;
        include_once( MTODLS_PATH. '/module/sample/css-swiper-bundle.php');
        include_once( MTODLS_PATH. '/module/sample/css-swiper-setting.php');
        if( has_shortcode( $post->post_content, 'mtodls-swiper-demo' ) ) {
            echo $csscode_swiper_bundle;
            echo $csscode;
        }
    }

    public
    function add_javascript(){
        global $post;
        if( has_shortcode( $post->post_content, 'mtodls-swiper-demo' ) ) {
            wp_enqueue_script ( 'mtodls-swiper-demo-bundle', MTODLS_URI. '/module/sample/js-swiper-bundle.min.js', array( 'jquery' ), false ,true  );
            wp_enqueue_script ( 'mtodls-swiper-demo-custom', MTODLS_URI. '/module/sample/js-swiper-setting.js', array( 'jquery' ), false ,true  );
        }
    }

    public
    function swiper_demo_func() {
        $code = <<< EOD
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
            </div>
        <!-- pagination -->
        <div class="swiper-pagination"></div>
        <!-- navbutton -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        </div>
        EOD;
        return $code;
    }
}
new mtodls_shortcodeclass_swiper_demo();

