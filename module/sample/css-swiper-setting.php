<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$csscode = <<< EOD
<style>

.swiper--wrapper {
    /* wrapperのサイズを調整 */
    width: 100%;
    height: 300px;
}

.swiper-slide {
    /* スライドのサイズを調整、中身のテキスト配置調整、背景色 */
    color: #ffffff;
    width: 100%;
    height: 100%;
    text-align: center;
    line-height: 300px;
}

.swiper-slide:nth-child(3n + 1) {
    /*1、4、7、3n+1枚目の背景色 */
    background-color: #de4439;
}

.swiper-slide:nth-child(3n + 2) {
    /*2、5、8、3n+2枚目の背景色 */
    background-color: #fcd500;
}

.swiper-slide:nth-child(3n + 3) {
    /*3、6、9、3n+3枚目の背景色 */
    background-color: #53c638;
}
</style>

EOD;