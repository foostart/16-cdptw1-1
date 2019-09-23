<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container container-modify header">
    <div class="modul-702"> 
        <div class="col-md-6 col-sm-6 col-xs-12 images-container">
            <div class="img-container">
                <div class="col-md-9 col-sm-9 col-xs-9 swiper-container gallery-top image-block">
                    <div id="view_full_size" class="swiper-wrapper">
                        <div class="zoomPad swiper-slide" id="img1">
                            <img class="img-responsive" src="<?php echo $url_path ?>/images/large1.jpg" alt="">
                        </div>
                        <div class="zoomPad swiper-slide " id="img2">
                            <img class="img-responsive" src="<?php echo $url_path ?>/images/large2.jpg" alt="">
                        </div>
                        <div class="zoomPad swiper-slide">
                            <img class="img-responsive" src="<?php echo $url_path ?>/images/large3.jpg" alt="">
                        </div>
                        <div class="zoomPad swiper-slide">
                            <img class="img-responsive" src="<?php echo $url_path ?>/images/large4.jpg" alt="">
                        </div>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-3 col-xs-3 swiper-container gallery-thumbs views-block">   
                    <div class="swiper-wrapper thumbs-list">
                        <div class="swiper-slide thumb-list-frame">
                            <a href="#img1" data-toggle="tab" class="tab-list">
                            <img alt="" class="img-responsive" src="<?php echo $url_path ?>/images/large1.jpg">    
                            </a>
                        </div>
                        <div class="swiper-slide thumb-list-frame">
                            <a href="#img2" data-toggle="tab">
                            <img alt="" class="img-responsive" src="<?php echo $url_path ?>/images/large2.jpg" >   
                            </a>
                        </div>
                        <div class="swiper-slide thumb-list-frame">
                            <a href="#img2" data-toggle="tab">
                            <img alt="" class="img-responsive" src="<?php echo $url_path ?>/images/large3.jpg" >   
                            </a>
                        </div>
                        <div class="swiper-slide thumb-list-frame">
                            <a href="#img2" data-toggle="tab">
                            <img alt="" class="img-responsive" src="<?php echo $url_path ?>/images/large4.jpg" >   
                            </a> 
                        </div>
                    </div>
                </div>  
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="swiper-container gallery-botton">
                <div class="productscategory_h2">Related products</div>
                <div class="swiper-wrapper">
                        <div class="item swiper-slide">
                            
                                <a href="#1"><img src="<?php echo $url_path ?>/images/a1.jpg"  alt="">
                                </a>
                            
                        </div>
                        <div class="item swiper-slide">
                            
                                <a href="#1"><img src="<?php echo $url_path ?>/images/a2.jpg"  alt="">
                                </a>
                            
                        </div>
                        <div class="item swiper-slide">
                            
                                <a href="#1"><img src="<?php echo $url_path ?>/images/a3.jpg"  alt="">
                                </a>
                            
                        </div>
                        <div class="item swiper-slide">
                            
                                <a href="#1">
                                    <img src="<?php echo $url_path ?>/images/a4.jpg"  alt="">
                                </a>
                            
                        </div>
                        <div class="item swiper-slide">
                            
                                <a href="#1">
                                    <img src="<?php echo $url_path ?>/images/a5.jpg"  alt="">
                                </a>
                            
                        </div>
                        <div class="item swiper-slide">
                            
                                <a href="#1">
                                    <img src="<?php echo $url_path ?>/images/a6.jpg"  alt="">
                                </a>
                            
                        </div>
                        <div class="item swiper-slide">
                            
                                <a href="#1">
                                    <img src="<?php echo $url_path ?>/images/a7.jpg"  alt="">
                                </a>
                            
                        </div>

                  <a class="left gallerybotton" href="#" data-slide="prev">
                    <i class="fa fa-chevron-left"> </i>
                </a>
                <a class="right gallerybotton" href="#" data-slide="next">
                    <i class="fa fa-chevron-right"></i>
                </a>  
                </div>

               
            </div>
        </div>
    </div>
</div>
<script>
$(".tab-list").on("click",".tab", function(e){
    e.preventDefault();
    $(".tab").removeClass("active-tab");
    $(".tab-content").removeClass("show");
    $(this).addClass("active-tab");
    $($(this).attr('href')).addClass("show");
});
</script>
</body>
</html>
