<?php
//include '../config.php';

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1233 type-1227-sub">

    <!--HEADING-->
    <div class="header">
        <img class="image-s" src="<?php echo $url_path ?>/images/bg-header-6.jpg">
        <div class="text-center-image">
            <div class="text-1">
                <span>KT-ROYAL</span>
            </div>
            <hr class="hr-size-color">
            <div class="text-2">Cung cấp dịch vụ</div>
        </div>
    </div>

    <!--CONTENT-->
    <div class="container rescure">

        <!--PD-HEARDER-->
        <div class="pading-header">
            <div class="text-3">
                <span>Sứ mạng</span>
                <span class="color">KT-ROYAL</span>
            </div>
            <hr class="hr-size-color2">
            <div class="text-5">
                <span>Công trình của bạn là niềm hãnh diện cho đội ngủ KT-ROYAL chúng tôi</span>
            </div>
        </div>
        <!--/PD-HEARDER-->
        <div class="clear"></div>

        <div class="row">

            <div class="col-md-12 list-items">

                <div class="nav1 rescure1">

                    <!--TAB -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#menu1">NGOẠI THẤT</a></li>
                        <li><a data-toggle="tab" href="#menu2">NỘI THẤT</a></li>
                        <li><a data-toggle="tab" href="#menu3">PHÒNG THAY ĐỒ</a></li>
                        <li><a data-toggle="tab" href="#menu4">THI CÔNG THỰC TẾ</a></li>
                        <li><a data-toggle="tab" href="#menu5">WC</a></li>
                    </ul>
                    <!--ITEMS-->
                    <div class="tab-content">

                        <!--MENU1-->
                        <div id="menu1" class="tab-pane fade in active">

                            <div class="row">
                                <!--COL-->
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <!--TEXT-->
                                    <div class="center-text">
                                        <div class="pading-top">
                                            <i class="border glyphicon glyphicon-stats fa-3x " aria-hidden="true"></i>
                                        </div>
                                        <div class="text-6">
                                            <span>Tổng thầu xây dựng</span>
                                        </div>
                                        <div class="hr-size-color3"></div>
                                        <div class="text-7">
                                            <span>The standard chunk of Lorem Ipsum </span>
                                        </div>
                                        <div class="text-7">
                                            <span>chunk of Lorem Ipsum </span>
                                        </div>
                                    </div>
                                    <!--/TEXT-->
                                </div>
                                <!--/COL-->
                                <!--COL-->
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <!--TEXT-->
                                    <div class="center-text">
                                        <div class="pading-top">
                                            <i class="border glyphicon glyphicon-equalizer fa-3x " aria-hidden="true"></i>
                                        </div>
                                        <div class="text-6">
                                            <span>Thiết kế và thi công</span>
                                        </div>
                                        <div class="hr-size-color3"></div>
                                        <div class="text-7">
                                            <span>The standard chunk of Lorem Ipsum </span>
                                        </div>
                                        <div class="text-7">
                                            <span>chunk of Lorem Ipsum </span>
                                        </div>
                                    </div>
                                    <!--/TEXT-->
                                </div>
                                <!--/COL-->
                                <!--COL-->
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <!--TEXT-->
                                    <div class="center-text">
                                        <div class="pading-top">
                                            <i class="border glyphicon glyphicon-tower fa-3x " aria-hidden="true"></i>
                                        </div>
                                        <div class="text-6">
                                            <span>Nội thất</span>
                                        </div>
                                        <div class="hr-size-color3"></div>
                                        <div class="text-7">
                                            <span>The standard chunk of Lorem Ipsum </span>
                                        </div>
                                        <div class="text-7">
                                            <span>chunk of Lorem Ipsum </span>
                                        </div>
                                    </div>
                                    <!--/TEXT-->
                                </div>
                                <!--/COL-->

                                <!--COL-->
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <!--TEXT-->
                                    <div class="center-text">
                                        <div class="pading-top">
                                            <i class="border glyphicon glyphicon-tasks fa-3x " aria-hidden="true"></i>
                                        </div>
                                        <div class="text-6">
                                            <span>Hạ tầng</span>
                                        </div>
                                        <div class="hr-size-color3"></div>
                                        <div class="text-7">
                                            <span>The standard chunk of Lorem Ipsum </span>
                                        </div>
                                        <div class="text-7">
                                            <span>chunk of Lorem Ipsum </span>
                                        </div>
                                    </div>
                                    <!--/TEXT-->
                                </div>
                                <!--/COL-->

                                <!--COL-->
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <!--TEXT-->
                                    <div class="center-text">
                                        <div class="pading-top">
                                            <i class="border glyphicon glyphicon-flash fa-3x " aria-hidden="true"></i>
                                        </div>
                                        <div class="text-6">
                                            <span>Cơ điện</span>
                                        </div>
                                        <div class="hr-size-color3"></div>
                                        <div class="text-7">
                                            <span>The standard chunk of Lorem Ipsum </span>
                                        </div>
                                        <div class="text-7">
                                            <span>chunk of Lorem Ipsum </span>
                                        </div>
                                    </div>
                                    <!--/TEXT-->
                                </div>
                                <!--/COL-->

                                <!--COL-->
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <!--TEXT-->
                                    <div class="center-text">
                                        <div class="pading-top">
                                            <i class="border glyphicon glyphicon-fullscreen fa-3x " aria-hidden="true"></i>
                                        </div>
                                        <div class="text-6">
                                            <span>Dịch vụ khác</span>
                                        </div>
                                        <div class="hr-size-color3"></div>
                                        <div class="text-7">
                                            <span>The standard chunk of Lorem Ipsum </span>
                                        </div>
                                        <div class="text-7">
                                            <span>chunk of Lorem Ipsum </span>
                                        </div>
                                    </div>
                                    <!--/TEXT-->
                                </div>
                                <!--/COL-->

                            </div>
                        </div>
                        <!--/MENU1-->

                        <!--MENU2-->
                        <div id="menu2" class="tab-pane fade">

                            <div class="related">
                                <div class="row products">

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/4.jpg" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">CĂN HỘ SUNRISE</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>
                                                            ,
                                                            <a href="#">Shulin District</a>
                                                            ,
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/5.jpg" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">Beautiful, craftsman</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>
                                                             ,
                                                            <a href="#">Shulin District</a>
                                                            ,
                                                            
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/6.jpg" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">Beautiful, craftsman</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>
                                                            ,
                                                            <a href="#">Shulin District</a>
                                                            ,
                                                            
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                </div>
                                <!--/END ROW-->
                            </div>
                            <!--/END RELATED-->
                        </div>
                        <!--/MENU2-->

                        <!--MENU3-->
                        <div id="menu3" class="tab-pane fade">

                            <div class="related">
                                <div class="row products">

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/7.jpg" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">CĂN HỘ SUNHOUSE</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>
                                                            ,
                                                            <a href="#">Shulin District</a>
                                                            ,
                                                            
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/8.jpg" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">Beautiful, craftsman</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>
                                                            ,
                                                            <a href="#">Shulin District</a>
                                                            ,
                                                            
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/9.jpg" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">Beautiful, craftsman</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>
                                                            ,
                                                            <a href="#">Shulin District</a>
                                                            ,
                                                            
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                </div>
                                <!--/END ROW-->
                            </div>
                            <!--/END RELATED-->
                        </div>
                        <!--/MENU3-->

                        <!--MENU4-->
                        <div id="menu4" class="tab-pane fade">

                            <div class="related">
                                <div class="row products">

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/10.jpg" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">CĂN HỘ SUNHOME</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>
                                                            ,
                                                            <a href="#">Shulin District</a>
                                                            ,
                                                            
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/11.jpg" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">Beautiful, craftsman</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>
                                                            ,
                                                            <a href="#">Shulin District</a>
                                                            ,
                                                            
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/12.jpg" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">Beautiful, craftsman</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>
                                                            ,
                                                            <a href="#">Shulin District</a>
                                                            ,
                                                            
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                </div>
                                <!--/END ROW-->
                            </div>
                            <!--/END RELATED-->
                        </div>
                        <!--/MENU4-->

                        <!--MENU5-->
                        <div id="menu5" class="tab-pane fade">

                            <div class="related">
                                <div class="row products">

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/13.jpg" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">CĂN HỘ SUNKIT</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>
                                                            ,
                                                            <a href="#">Shulin District</a>
                                                            ,
                                                            
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/14.jpg" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">Beautiful, craftsman</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>
                                                            ,
                                                            <a href="#">Shulin District</a>
                                                            ,
                                                            
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure id="img" class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/15.jpg" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">Beautiful, craftsman</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>
                                                            ,
                                                            <a href="#">Shulin District</a>
                                                            ,
                                                            
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                </div>
                                <!--/END ROW-->
                            </div>
                            <!--/END RELATED-->
                        </div>
                        <!--/MENU5-->
                    </div>
                    <!--/END ITEMS-->

                </div>
            </div>
            <!--/END COL-MD-12-->
        </div>
        <!--/END ROW-->
    </div>
    <!--/CONTENT-->
</div>
