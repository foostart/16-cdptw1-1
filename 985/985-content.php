<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-985">
    <div class="container header">
        <div class="cover-header">
            <div class="swiper-container slide-show">
                <div class="swiper-wrapper slide">
                    <div class="swiper-slide" style="background-image:url(./images/slide_1.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(./images/slide_2.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(./images/slide_3.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(./images/slide_4.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(./images/slide_5.jpg)"></div>
                </div>

            </div>
            <div class="arrow left"></div>
            <div class="arrow right"></div>
        </div>
    </div>
</div>