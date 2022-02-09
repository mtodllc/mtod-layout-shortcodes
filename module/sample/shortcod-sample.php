<?php
if ( ! defined( 'ABSPATH' ) ) exit;
class mtod_add_class{
    public
    function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this, 'add_css_class' ) );
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
    function hello_func() {
        $code = <<< EOD
        <p class="test001">色は匂へど 散りぬるを</p>
        <p class="test001">我が世誰ぞ 常ならむ</p>
        <p class="test001">有為の奥山 今日越えて</p>
        <p class="test001">浅き夢見じ 酔ひもせず</p>
        EOD;
        return $code;
    }
}
new mtod_add_class();