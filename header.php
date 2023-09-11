<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include ('DB/jdf.php');
include 'DB/db_con.php';

$day_number = jdate('d');
$month_number = jdate('F');
$year_number = jdate('Y');
$hour = jdate('H');
$min = jdate('i');
$sec = jdate('s');
$day_name = jdate('l');
$up_view=$dbclass->up_bazdid();
echo '
    <div class="row"><div class="col-md-12 col-sm-12 col-xs-12">
                <div class="headeringha">
                    <nav class="navbar navbar-default navbar-inverse header_menu_top" style="margin-bottom: 0 " role="navigation">
                        <div class="navbar-header col-md-2" style="float:right">
                            <button type="button" class="navbar-toggle header_menu_top" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand header_menu_top" href="http://khabarroz.com" id="brand_header">
                                <img src="img/logo.gif" class="img-circle logoing" height="25" width="25" />خبر روز
                            </a>
                        </div>

                        <div class="collapse navbar-collapse col-md-10 header_menu_top" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-left header_menu_top">
                                <li class="header_menu_top">
                                    <a href="rss.xml" target="_blank" id="rss_header">
                                        <div class="img_rss"></div>
                                    </a>
                                </li>
                                <li class="header_menu_top">
                                    <a href="" class="" id="timer" dir="ltr">';

                                        echo "امروز $day_name ، $day_number-$month_number-$year_number , $hour:$min:$sec";
                                        
                                    echo ' </a>
                                </li>
                            </ul>
                            <form class="navbar-form navbar-left form_header" role="search" method="post" action="in_search.php">
                                <div class="form-group header_menu_top control_header">
                                    <input type="text" class="form-control" name="searchering" style="width: 300px;height: 25px;">
                                </div> 
                                <button type="submit" class="btn btn-default btn_headers">
                                    جستجو
                                </button>
                            </form>
                            <ul class="nav navbar-nav navbar-right header_menu_top">
                                <li>
                                    <a href="connect-us">ارتباط با ما</a>
                                </li>
                                <li>
                                    <a href="insert-news">ثبت خبر</a>
                                </li>
                                <li>
                                    <a href="estekhdam">استخدام </a>
                                </li>
                                
                            </ul>
                        </div>
                            

                    </nav>
                    <a href="http://www.khabarroz.com" class="a_logo">
                    <div class="row">
                        <div class="col-md-12 img_logo"></div>
                        </div>
                    </a>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul class="nav nav-pills">
                            <li class="';if(strstr($_SERVER["PHP_SELF"],"index")=="index.php")echo active;echo'">
                                <a href="http://khabarroz.com">صفحه اصلی</a>
                            </li>
                            <li class="';if(strstr($_SERVER["PHP_SELF"],"magazine")=="magazine.php")echo active;echo'">
                                <a href="magazine">مجله سایت</a>
                            </li>
                            <li class="';if($_GET["type"]=="سیاسی")echo active;echo'">
                                <a href="newstype/سیاسی">
                                    سیاسی 

                                </a>
                            </li>
                            <li class="';if($_GET["type"]=="هنر")echo active;echo'">
                                <a href="newstype/هنر">
                                    فرهنگ و هنر
                                </a>
                            </li>
                            <li class="';if($_GET["type"]=="اقتصادی")echo active;echo'">
                                <a href="newstype/اقتصادی">
                                    اقتصادی
                                </a>
                            </li>
                            <li class="';if($_GET["type"]=="ورزشی")echo active;echo'">
                                <a href="newstype/ورزشی">
                                    ورزشی
                                </a>
                            </li>
                            <li class="';if($_GET["type"]=="فناوری")echo active;echo'">
                                <a href="newstype/فناوری">
                                    فناوری
                                </a>
                            </li>
                            <li class="';if($_GET["type"]=="جهان")echo active;echo'">
                                <a href="newstype/جهان">
                                    جهان
                                </a>
                            </li>
                            <li class="';if($_GET["type"]=="حوادث")echo active;echo'">
                                <a href="newstype/حوادث">
                                    حوادث
                                </a>
                            </li>
                            <li class="';if($_GET["type"]=="سلامت")echo active;echo'">
                                <a href="newstype/سلامت">
                                    سلامت
                                </a>
                            </li>
                            <li class="';if($_GET["type"]=="گوناگون")echo active;echo'">
                                <a href="newstype/گوناگون">
                                    گوناگون
                                </a>
                            </li>
                            <li class="';if( strstr($_SERVER["PHP_SELF"],"media")=="media_news.php")echo active;echo'">
                                <a href="media_news">
                                    مدیا ( فیلم و عکس )
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div></div>
';
//echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
<div style="height: 100%;width: 100%;position: absolute;background: #00BAF8;z-index: 20;top: 0;right: 0">
    <div class="row">
        <div class="col-lg-4">
            jamal
        </div>
        <div class="col-lg-8">
            zareie
        </div>
    </div>
</div>