<?php
if ( ! defined( 'ABSPATH' ) ) exit;
class mtod_add_class{
    public
    function __construct() {
        add_action( 'wp_head', array( $this, 'add_css_class' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'add_javascript' ) );
        add_shortcode('hello', array( $this, 'hello_func' ) );
    }

    public
    function add_css_class(){
        global $post;
        if( has_shortcode( $post->post_content, 'hello' ) ) {
            $csscode = <<< EOD
            <style>.test001{color:#ff00ff;}</style>

            EOD;
            echo $csscode;
        }
    }

    public
    function add_javascript(){
        wp_enqueue_script ( 'modernizr-custom', MTODLS_URI. '/js/sample/add.js', array(), false ,true  );
    }

    public　
    function hello_func() {
        $imguri = MTODLS_URI.'/images/sample/';
        $code = <<< EOD
        <p id="testidtext" class="test001">色は匂へど 散りぬるを</p>
        <p class="test001">我が世誰ぞ 常ならむ</p>
        <p class="test001">有為の奥山 今日越えて</p>
        <p class="test001">浅き夢見じ 酔ひもせず</p>
        <div><img src="{$imguri}sample.png"></div>
        EOD;
        return $code;
    }
}
new mtod_add_class();