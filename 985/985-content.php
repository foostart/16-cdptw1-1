<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/style.js" type="text/javascript"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/style.less', 'css/style.css');
        ?>

        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="mod-custom-20">
            <div id="mosaic-slideshow">
                <div class="arrow left"></div>
                <div class="arrow right"></div>
                <div class="mosaic-slide" style="z-index: 10;">
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg)  0px 0px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -60px 0px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -120px 0px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -180px 0px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -240px 0px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -300px 0px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -360px 0px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -420px 0px no-repeat rgb(85, 85, 85);"></div>
                    <div class="clear"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) 0px -60px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -60px -60px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -120px -60px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -180px -60px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -240px -60px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -300px -60px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -360px -60px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -420px -60px no-repeat rgb(85, 85, 85);"></div>
                    <div class="clear"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) 0px -120px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -60px -120px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -120px -120px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -180px -120px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -240px -120px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -300px -120px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -360px -120px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -420px -120px no-repeat rgb(85, 85, 85);"></div>
                    <div class="clear"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) 0px -180px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -60px -180px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -120px -180px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -180px -180px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -240px -180px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -300px -180px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -360px -180px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -420px -180px no-repeat rgb(85, 85, 85);"></div>
                    <div class="clear"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) 0px -240px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -60px -240px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -120px -240px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -180px -240px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -240px -240px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -300px -240px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -360px -240px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -420px -240px no-repeat rgb(85, 85, 85);"></div>
                    <div class="clear"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) 0px -300px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -60px -300px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -120px -300px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -180px -300px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -240px -300px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -300px -300px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -360px -300px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -420px -300px no-repeat rgb(85, 85, 85);"></div>
                    <div class="clear"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) 0px -360px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -60px -360px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -120px -360px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -180px -360px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -240px -360px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -300px -360px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -360px -360px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="visibility: hidden; background: url(images/slide_1.jpg) -420px -360px no-repeat rgb(85, 85, 85);"></div>
                    <div class="clear"></div>
                </div>
                <div class="mosaic-slide" style="z-index: 1;">
                    <div class="tile" style="background: url(images/slide_1.jpg) 0px 0px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -60px 0px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -120px 0px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -180px 0px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -240px 0px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -300px 0px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -360px 0px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -420px 0px no-repeat rgb(85, 85, 85);"></div>
                    <div class="clear"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) 0px -60px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -60px -60px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -120px -60px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -180px -60px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -240px -60px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -300px -60px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -360px -60px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -420px -60px no-repeat rgb(85, 85, 85);"></div>
                    <div class="clear"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) 0px -120px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -60px -120px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -120px -120px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -180px -120px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -240px -120px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -300px -120px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -360px -120px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -420px -120px no-repeat rgb(85, 85, 85);"></div>
                    <div class="clear"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) 0px -180px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -60px -180px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -120px -180px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -180px -180px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -240px -180px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -300px -180px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -360px -180px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -420px -180px no-repeat rgb(85, 85, 85);"></div>
                    <div class="clear"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) 0px -240px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -60px -240px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -120px -240px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -180px -240px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -240px -240px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -300px -240px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -360px -240px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -420px -240px no-repeat rgb(85, 85, 85);"></div>
                    <div class="clear"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) 0px -300px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -60px -300px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -120px -300px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -180px -300px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -240px -300px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -300px -300px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -360px -300px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -420px -300px no-repeat rgb(85, 85, 85);"></div>
                    <div class="clear"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) 0px -360px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -60px -360px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -120px -360px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -180px -360px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -240px -360px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -300px -360px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -360px -360px no-repeat rgb(85, 85, 85);"></div>
                    <div class="tile" style="background: url(images/slide_1.jpg) -420px -360px no-repeat rgb(85, 85, 85);"></div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </body>
</html>
