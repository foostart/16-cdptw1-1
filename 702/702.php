<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
if (!class_exists('lessc')) {
$dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/702.less', 'css/702.css');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>702</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 , minimum-scale=1, maximum-scale=1">
        <link href="<?php echo $url_path ?>/css/bootstrap.min-3.3.6.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/font-awesome.min-4.6.3.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/swiper.min-3.4.2.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/702.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo $url_path ?>/js/swiper.min.js"></script>
        <script src="<?php echo $url_path ?>/js/jquery-1.11.0.min.js"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js" ></script>
    </head>
    <body>
        <?php include $dir_block . '/702-content.php'; ?>
        <script>
        
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            direction: 'vertical',
            spaceBetween: 10,
            slidesPerView: 'auto',
            freeMode: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
        });
        var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 10,
            thumbs: {
                swiper: galleryThumbs
            }
        });
     
        var gallerybotton = new Swiper('.gallery-botton', {
            slidesPerView: 3,
            spaceBetween: 10,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        nextButton: '#swiper_btn_next',
        prevButton: '#swiper_btn_prev',
        breakpoints: {
            1200: {
            slidesPerView: 3,
            spaceBetween: 0,
            },
            990: {
            slidesPerView: 2,
            spaceBetween: 0,
            },
            770: {
            slidesPerView: 1,
            spaceBetween: 60,
        },
        }
        });
        </script>
    </body>
</html>