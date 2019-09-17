<?php
//include '../config.php';

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1231">
    <!--section-->
    <section id="page-title">
        <!--CONTAINER-->
        <div class="container">
            <!--ROW-->
            <div class="row">
                <!--SEARCH-->
                <div class="col-md-12">
                    <h1>SEARCH</h1>
                    <ol class="bread">
                        <li><a href="#">Home page</a></li>
                        <li>/</li>
                        <li><a href="#">Search Results</a></li>
                    </ol>
                </div>
                <!--/SEARCH-->
            </div>
            <!--end ROW-->
        </div>
        <!--end CONTAINER-->
    </section>
    <!--end section-->
    <!--CONTAINER-->
    <div class="container line">
        <!--ROW-->
        <div class="row">
            <!--pagesearch-->
            <div class="pagesearch">
                <nav>
                    <!--form-->
                    <form class="sky-form nobottommargin">
                        <ul class="aa">
                            <!--LIST-->
                            <li>
                                <label class="select">
                                    <select>
                                        <option>Select the color</option>
                                        <option>All</option>
                                        <option>White system</option>
                                        <option>Light color</option>
                                        <option>Gray system</option>
                                        <option>Dark color</option>
                                    </select>
                                </label>
                            </li>
                            <!--/LIST-->
                            <!--LIST-->
                            <li>
                                <label class="select">
                                    <select>
                                        <option>apartment number</option>
                                        <option>All</option>                                              
                                        <option>small apartments(20)</option>
                                        <option>total(21-40)</option>
                                        <option>Daping (40)</option>
                                    </select>
                                    <i></i>
                                </label>
                            </li>
                            <!--/LIST-->
                            <!--LIST-->
                            <li>
                                <label class="input">
                                    <input placeholder="Enter keywords">
                                </label>
                            </li>
                            <!--/LIST-->
                            <li>
                                <a href="#"><img alt="#" src="<?php echo $url_path ?>/images/search-dark.png"></a>
                            </li>
                        </ul>
                    </form>
                    <!--end form-->
                </nav>
                <!--search-->
                <div class="">
                    <hr>
                    <div class="search">
                        <span>The following is a search result, total <span class="p1">275</span> information</span>
                    </div>
                    <hr>
                </div>
                <!--/search-->
            </div>
            <!--/pagesearch-->
        </div>
        <!--/ROW-->
    </div>
    <!--/CONTAINER-->
</div>