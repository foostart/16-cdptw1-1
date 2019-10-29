<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1230">
    <!--CONTAINER-->
    <div class="container">
        <!--ROW-->
        <div class="row">
            <!--CONTENT-->
            <div class="content">
                <!--BLOG-TOP-->
                <div class="blog-top">
                    <h4>Featured introduction</h4>
                </div>
                <!--/BLOG-TOP-->
                <div class=" clearfix"></div>
                <!--SW-CONTAINER-->
                <div class="swiper-container">
                    <!--WRAPPER-->
                    <div class="swiper-wrapper">
                        <!--SLIDE-->
                        <div class="swiper-slide col-md-4 col-sm-6 col-xs-12">
                            <!--blog-content-->
                            <div class="blog-content">
                                <!--BOLG-->
                                <div class="blog">
                                    <!--IMG-->
                                    <div class="blog-img">
                                        <a href="#">
                                            <img src="<?php echo $url_path ?>/images/1.jpg" alt="" />
                                        </a>
                                    </div>
                                    <!--/IMG-->
                                    <div class="portfolio-overlay">
                                        <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                                    </div>
                                </div>
                                <!--/BOLG-->
                                <h2 class="blog-title">
                                    <a href="#">Yanicke Taichung Flagship Store</a>
                                </h2>
                                <p class="blog-description">
                                    <a href="#">Taipei City,Daan District,46 pings</a>
                                    <a class="right" href="#">Gray system</a>
                                </p>
                            </div>
                            <!--/blog-content-->
                        </div>
                        <!--/SLIDE-->
                        <!--SLIDE-->
                        <div class="swiper-slide col-md-4 col-sm-6 col-xs-12">
                            <!--blog-content-->
                            <div class="blog-content">
                                <!--BOLG-->
                                <div class="blog">
                                    <!--IMG-->
                                    <div class="blog-img">
                                        <a href="#">
                                            <img src="<?php echo $url_path ?>/images/2.jpg" alt="" />
                                        </a>
                                    </div>
                                    <!--/IMG-->
                                    <div class="portfolio-overlay">
                                        <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                                    </div>
                                </div>
                                <!--/BOLG-->
                                <h2 class="blog-title">
                                    <a href="#">Yanicke Taichung Flagship Store</a>
                                </h2>
                                <p class="blog-description">
                                    <a href="#">Taipei City,Daan District,46 pings</a>
                                    <a class="right" href="#">Gray system</a>
                                </p>
                            </div>
                            <!--/blog-content-->
                        </div>
                        <!--/SLIDE-->
                        <!--SLIDE-->
                        <div class="swiper-slide col-md-4 col-sm-6 col-xs-12">
                            <!--blog-content-->
                            <div class="blog-content">
                                <!--BOLG-->
                                <div class="blog">
                                    <!--IMG-->
                                    <div class="blog-img">
                                        <a href="#">
                                            <img src="<?php echo $url_path ?>/images/3.jpg" alt="" />
                                        </a>
                                    </div>
                                    <!--/IMG-->
                                    <div class="portfolio-overlay">
                                        <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                                    </div>
                                </div>
                                <!--/BOLG-->
                                <h2 class="blog-title">
                                    <a href="#">Yanicke Taichung Flagship Store</a>
                                </h2>
                                <p class="blog-description">
                                    <a href="#">Taipei City,Daan District,46 pings</a>
                                    <a class="right" href="#">Gray system</a>
                                </p>
                            </div>
                            <!--/blog-content-->
                        </div>
                        <!--/SLIDE-->
                        <!--SLIDE-->
                        <div class="swiper-slide col-md-4 col-sm-6 col-xs-12">
                            <!--blog-content-->
                            <div class="blog-content">
                                <!--BOLG-->
                                <div class="blog">
                                    <!--IMG-->
                                    <div class="blog-img">
                                        <a href="#">
                                            <img src="<?php echo $url_path ?>/images/4.jpg" alt="" />
                                        </a>
                                    </div>
                                    <!--/IMG-->
                                    <div class="portfolio-overlay">
                                        <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                                    </div>
                                </div>
                                <!--/BOLG-->
                                <h2 class="blog-title">
                                    <a href="#">Yanicke Taichung Flagship Store</a>
                                </h2>
                                <p class="blog-description">
                                    <a href="#">Taipei City,Daan District,46 pings</a>
                                    <a class="right" href="#">Gray system</a>
                                </p>
                            </div>
                            <!--/blog-content-->
                        </div>
                        <!--/SLIDE-->
                        <!--SLIDE-->
                        <div class="swiper-slide col-md-4 col-sm-6 col-xs-12">
                            <!--blog-content-->
                            <div class="blog-content">
                                <!--BOLG-->
                                <div class="blog">
                                    <!--IMG-->
                                    <div class="blog-img">
                                        <a href="#">
                                            <img src="<?php echo $url_path ?>/images/5.jpg" alt="" />
                                        </a>
                                    </div>
                                    <!--/IMG-->
                                    <div class="portfolio-overlay">
                                        <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                                    </div>
                                </div>
                                <!--/BOLG-->
                                <h2 class="blog-title">
                                    <a href="#">Yanicke Taichung Flagship Store</a>
                                </h2>
                                <p class="blog-description">
                                    <a href="#">Taipei City,Daan District,46 pings</a>
                                    <a class="right" href="#">Gray system</a>
                                </p>
                            </div>
                            <!--/blog-content-->
                        </div>
                        <!--/SLIDE-->
                        <!--SLIDE-->
                        <div class="swiper-slide col-md-4 col-sm-6 col-xs-12">
                            <!--blog-content-->
                            <div class="blog-content">
                                <!--BOLG-->
                                <div class="blog">
                                    <!--IMG-->
                                    <div class="blog-img">
                                        <a href="#">
                                            <img src="<?php echo $url_path ?>/images/6.jpg" alt="" />
                                        </a>
                                    </div>
                                    <!--/IMG-->
                                    <div class="portfolio-overlay">
                                        <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                                    </div>
                                </div>
                                <!--/BOLG-->
                                <h2 class="blog-title">
                                    <a href="#">Yanicke Taichung Flagship Store</a>
                                </h2>
                                <p class="blog-description">
                                    <a href="#">Taipei City,Daan District,46 pings</a>
                                    <a class="right" href="#">Gray system</a>
                                </p>
                            </div>
                            <!--/blog-content-->
                        </div>
                        <!--/SLIDE-->
                        <!--SLIDE-->
                        <div class="swiper-slide col-md-4 col-sm-6 col-xs-12">
                            <!--blog-content-->
                            <div class="blog-content">
                                <!--BOLG-->
                                <div class="blog">
                                    <!--IMG-->
                                    <div class="blog-img">
                                        <a href="#">
                                            <img src="<?php echo $url_path ?>/images/7.jpg" alt="" />
                                        </a>
                                    </div>
                                    <!--/IMG-->
                                    <div class="portfolio-overlay">
                                        <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                                    </div>
                                </div>
                                <!--/BOLG-->
                                <h2 class="blog-title">
                                    <a href="#">Yanicke Taichung Flagship Store</a>
                                </h2>
                                <p class="blog-description">
                                    <a href="#">Taipei City,Daan District,46 pings</a>
                                    <a class="right" href="#">Gray system</a>
                                </p>
                            </div>
                            <!--/blog-content-->
                        </div>
                        <!--/SLIDE-->
                        <!--SLIDE-->
                        <div class="swiper-slide col-md-4 col-sm-6 col-xs-12">
                            <!--blog-content-->
                            <div class="blog-content">
                                <!--BOLG-->
                                <div class="blog">
                                    <!--IMG-->
                                    <div class="blog-img">
                                        <a href="#">
                                            <img src="<?php echo $url_path ?>/images/8.jpg" alt="" />
                                        </a>
                                    </div>
                                    <!--/IMG-->
                                    <div class="portfolio-overlay">
                                        <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                                    </div>
                                </div>
                                <!--/BOLG-->
                                <h2 class="blog-title">
                                    <a href="#">Yanicke Taichung Flagship Store</a>
                                </h2>
                                <p class="blog-description">
                                    <a href="#">Taipei City,Daan District,46 pings</a>
                                    <a class="right" href="#">Gray system</a>
                                </p>
                            </div>
                            <!--/blog-content-->
                        </div>
                        <!--/SLIDE-->
                        <!--SLIDE-->
                        <div class="swiper-slide col-md-4 col-sm-6 col-xs-12">
                            <!--blog-content-->
                            <div class="blog-content">
                                <!--BOLG-->
                                <div class="blog">
                                    <!--IMG-->
                                    <div class="blog-img">
                                        <a href="#">
                                            <img src="<?php echo $url_path ?>/images/9.jpg" alt="" />
                                        </a>
                                    </div>
                                    <!--/IMG-->
                                    <div class="portfolio-overlay">
                                        <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                                    </div>
                                </div>
                                <!--/BOLG-->
                                <h2 class="blog-title">
                                    <a href="#">Yanicke Taichung Flagship Store</a>
                                </h2>
                                <p class="blog-description">
                                    <a href="#">Taipei City,Daan District,46 pings</a>
                                    <a class="right" href="#">Gray system</a>
                                </p>
                            </div>
                            <!--/blog-content-->
                        </div>
                        <!--/SLIDE-->
                        <!--SLIDE-->
                        <div class="swiper-slide col-md-4 col-sm-6 col-xs-12">
                            <!--blog-content-->
                            <div class="blog-content">
                                <!--BOLG-->
                                <div class="blog">
                                    <!--IMG-->
                                    <div class="blog-img">
                                        <a href="#">
                                            <img src="<?php echo $url_path ?>/images/10.jpg" alt="" />
                                        </a>
                                    </div>
                                    <!--/IMG-->
                                    <div class="portfolio-overlay">
                                        <a href="#" class="center-icon"><i class="fa fa-ellipsis-h"></i></a>
                                    </div>
                                </div>
                                <!--/BOLG-->
                                <h2 class="blog-title">
                                    <a href="#">Yanicke Taichung Flagship Store</a>
                                </h2>
                                <p class="blog-description">
                                    <a href="#">Taipei City,Daan District,46 pings</a>
                                    <a class="right" href="#">Gray system</a>
                                </p>
                            </div>
                            <!--/blog-content-->
                        </div>
                        <!--/SLIDE-->
                    </div>
                    <!--/WRAPPER-->
                    <!--BTN-->
                    <div id="swiper_btn_prev" class="swiper_btn">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div id="swiper_btn_next" class="swiper_btn">
                        <i class="fa fa-angle-right"></i>
                    </div>
                    <!--/BTN-->
                </div>
                <!--/SW-CONTAINER-->
            </div>
            <!--/CONTENT-->
        </div>
        <!--/ROW-->
    </div>
    <!--/CONTAINER-->
</div>