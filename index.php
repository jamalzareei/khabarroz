<?php ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="//localhost/khabarroz/" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="alexaVerifyID" content="iPb12CYgmcKzmquspnvBSX_CryQ"/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            خبر روز > سایت تحلیلی خبری خبر روز
        </title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <meta HTTP-EQUIV="CONTENT-LANGUAGE" CONTENT="fa-ir"/>
        <meta NAME="DESCRIPTION" CONTENT="خبر روز خبر های سیاسی ورزشی افتصادی فرهنگی هنری فناوری حوادث جهان گوناگون در سایت خبری تحلیلی خبر روز"/>
        <meta NAME="KEYWORDS" CONTENT="خبر روز،خبر سیاسی خبر روز،ورزشی خبر روز،خبر حوادث خبر روز،خبر جهان خبر روز،خبر سلامت خبر روز،خبر فناوری خبر روز،خبر اقتصادی خبر روز،خبر فرهنگ و هنر خبر روزوسایت خبر روز"/>
        <meta NAME="AUTHOR" CONTENT="jamal zareie جمال زارعی"/>

        <meta NAME="COPYRIGHT" CONTENT="2015 www.khabarroz.com"/>
        <meta NAME="ROBOTS" CONTENT="ALL"/>
        <!-- this script got from Pr8.ir-Design By: Pr8.ir -->

    </head>
    <body onload="clik()">

        <div class="container-fluid">
            <?php
            include 'header.php';
            ?>
            <br>
            <div class="row">
                <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-11" style="border:1px solid #337AB7;border-radius:3px;margin:0 50px">
                                <div class="border">
                                    <div class="heading-padding" style="max-width:150px;height:30px;background:#337AB7;color:#fff;border-radius:5px 5px 0 0;">
                                        <h3>
                                            خبر های ویژه
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <?php
                                    $news_vizhe = $dbclass->news_vizhe();
                                    if (is_array($news_vizhe)) 
                                        {
                                        foreach ($news_vizhe as $row_news_vizhe) {
                                            echo '
                                                  <div class="col-md-6 marg_vizhe">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="news/' . $row_news_vizhe["id_news"] . '"><img src="'.$row_news_vizhe["img"].'" alt="'.$row_news_vizhe["title"].'" width="100%" height="150"/><a>
                                                        </div>
                                                        <div class="col-md-6 height_vizhe">
                                                            <a href="news/' . $row_news_vizhe["id_news"] . '"><h3>'.$row_news_vizhe["title"].'</h3></a>
                                                            <p>'.$row_news_vizhe["link_news"].'</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                  ';
                                        }
                                    }
                                    else {
                                        echo 'jamal';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6 column ui-sortable" style="margin-right: 50px">
                    <div class="row typing">
                        <div class="border">
                            <div class="heading-padding">
                                <h3>
                                   آخرین خبرها
                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 column ui-sortable">
                            <?php
                            $type_syasi = "";
                            $news_syasi = $dbclass->news_type_one($type_syasi);
                            if (is_array($news_syasi)) {
                                foreach ($news_syasi as $row_news_main) {
                                    echo '
                                    <a class="hovering" href="news/' . $row_news_main["id_news"] . '">
                                    <img src="' . $row_news_main["video"] . '" alt="' . $row_news_main["title"] . '"
                                        class="img-thumbnail" width="100%" height="200" style="height: 190px;"/>
                                    <h3>' . $row_news_main["title"] . '</h3>
                                    </a>
                                ';
                                }
                            }
                            ?>


                        </div>
                        <?php
                        $type1 = "";
                        $news_main = $dbclass->news_type_index($type1, 0);
                        if (is_array($news_main)) {
                            foreach ($news_main as $row_news_main) {
                                echo '
                                 <div class="col-md-6 column ui-sortable">
                            <a href="news/' . $row_news_main["id_news"] . '">
                                <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                    <button class="btn btn-default btn_news" id="btn_news" type="button" style="height:100px;">
                                        <div class="row">
                                            <div class="col-xs-4 column ui-sortable" style="padding: 0">
                                                <img src="' . $row_news_main["video"] . '" alt="' . $row_news_main["title"] . '" 
                                                    class="img-thumbnail" width="100%" height="79" style="height: 79px;padding-right: 0;"/>
                                            </div>
                                            <div class="col-xs-8 column ui-sortable">
                                                <h5 style="font-weight: 600;line-height: unset;">' . $row_news_main["title"] . '...</h5>
                                            </div>
                                        </div>                                          
                                    </button>
                                </div>
                            </a>
                        </div>
                            ';
                            }
                        } 
                        else {
                            echo 'not';
                        }
                        ?>


                    </div>
                </div>
                <div class="col-md-5 column ui-sortable not_padding">
                    <div class="col-md-6 col-sm-12 col-xs-12 not_padding">
                        <div class="panel panel-primary">
                            <div class="border">
                                <div class="heading-padding">
                                    <h3>
                                        خبر های فوری
                                    </h3>
                                </div>
                            </div>
                            <div class="panel-body panle-news" id="news_fori_view">
                                <div class="view">
                                    <?php
                                    $news_day_type2 = $dbclass->news_type2();
                                    if (is_array($news_day_type2)) {
                                        foreach ($news_day_type2 as $row_type2)
                                            echo '
                                        <a href="news/' . $row_type2["id_news"] . '">
                                    <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                        <button class="btn btn-default btn_news" id="btn_news" type="button">
                                            <i class="glyphicon glyphicon-align-justify"></i>
                                          ' . $row_type2["title"] . '                      
                                        </button>
                                    </div>
                                </a>
';
                                    } else {
                                        echo '
                                        <a href="News">
                                                   <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                                        <button class="btn btn-default btn_news" id="btn_news" type="button">
                                                           <img src="img/logo.gif" height="25" width="25" class="glyphicon" alt="خبرروز">
                                             هیچ خبری وجود ندارد                                                     
                                                        </button>
                                                   </div>
                                                </a>
                                        ';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="">...</a>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="border">
                                <div class="heading-padding">
                                    <h3>
                                        پربیننده ترین خبرها
                                    </h3>
                                </div>
                            </div>
                            <div class="panel-body panle-news" id="news_fori_view">
                                <div class="view">
                                    <?php
                                    $news_view = $dbclass->news_viewer();
                                    if (is_array($news_view)) {
                                        foreach ($news_view as $row_view)
                                            echo '
                                        <a href="news/' . $row_view["id_news"] . '">
                                    <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                        <button class="btn btn-default btn_news" id="btn_news" type="button">
                                            <i class="glyphicon glyphicon-align-justify"></i>
                                          ' . $row_view["title"] . '                      
                                        </button>
                                    </div>
                                </a>
';
                                    } else {
                                        echo '
                                    <a href="News">
                                                   <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                                        <button class="btn btn-default btn_news" id="btn_news" type="button">
                                                           <img src="img/logo.gif" height="25" width="25" class="glyphicon" alt="خبرروز">
                                             هیچ خبری وجود ندارد                                                     
                                                        </button>
                                                   </div>
                                                </a>    
                                    ';
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="">...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 not_padding">
                        <div class="panel panel-primary">
                            <div class="border">
                                <div class="heading-padding">
                                    <h3>
                                        یاد داشت ها
                                    </h3>
                                </div>
                            </div>
                            <div class="panel-body panle-news" id="height_note_person_user">
                                <div class="view">

                                    <?php
                                    $note = $dbclass->note(0);
                                    if (is_array($note)) {
                                        foreach ($note as $row_note)
                                            echo '
                                        <a href="note/' . $row_note["id_note"] . '">
                                    <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                        <button class="btn btn-default btn_news" id="btn_news" type="button">
                                            <i class="glyphicon glyphicon-align-justify"></i>
                                          ' . $row_note["title"] . '                      
                                        </button>
                                    </div>
                                </a>
';
                                    } else {
                                        echo '
                                        <a href="News">
                                                   <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                                        <button class="btn btn-default btn_news" id="btn_news" type="button">
                                                           <img src="img/logo.gif" height="25" width="25" class="glyphicon" alt="خبرروز">
                                             هیچ یادداشتی وجود ندارد                                                     
                                                        </button>
                                                   </div>
                                                </a>    
                                    ';
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="note">ادامه ...</a>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="border">
                                <div class="heading-padding">
                                    <h3>
                                        معرفی شخصیت ها
                                    </h3>
                                </div>
                            </div>
                            <div class="panel-body panle-news" id="height_note_person_user">
                                <div class="view">
                                    <?php
                                    $personality = $dbclass->personality(0);
                                    if (is_array($personality)) {
                                        foreach ($personality as $row_person)
                                            echo '
                                        <a href="personal/' . $row_person["id_personality"] . '">
                                    <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                        <button class="btn btn-default btn_news" id="btn_news" type="button">
                                            <i class="glyphicon glyphicon-align-justify"></i>
                                          ' . $row_person["name_person"] . '                      
                                        </button>
                                    </div>
                                </a>
';
                                    } else {
                                        echo '
                                        <a href="News">
                                                   <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                                        <button class="btn btn-default btn_news" id="btn_news" type="button">
                                                           <img src="img/logo.gif" height="25" width="25" class="glyphicon" alt="خبرروز">
                                             هیچ بیوگرافی ثنت نگردیه است                                                     
                                                        </button>
                                                   </div>
                                                </a>    
                                    ';
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="personality">ادامه ...</a>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="border">
                                <div class="heading-padding">
                                    <h4>
                                        ثبت شده توسط کاربران
                                    </h4>
                                </div>
                            </div>
                            <div class="panel-body panle-news" id="height_note_person_user">
                                <div class="view">
                                    <?php
                                    $new_user = $dbclass->news_send_user();
                                    if (is_array($new_user)) {
                                        foreach ($new_user as $row_new_user)
                                            echo '
                                        <a href="news/' . $row_new_user["id_news"] . '">
                                    <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                        <button class="btn btn-default btn_news" id="btn_news" type="button">
                                            <i class="glyphicon glyphicon-align-justify"></i>
                                          ' . $row_new_user["title"] . '                      
                                        </button>
                                    </div>
                                </a>
';
                                    } else {
                                        echo '
                                        <a href="News">
                                                   <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                                        <button class="btn btn-default btn_news" id="btn_news" type="button">
                                                           <img src="img/logo.gif" height="25" width="25" class="glyphicon">
                                             هیچ خبری وجود ندارد                                                     
                                                        </button>
                                                   </div>
                                                </a>    
                                    ';
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="">...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-7 column ui-sortable">
                    
                    <div class="load_index" id="load_index">

                    </div>
                    <input type="text" id="type_index" class="type_index" style="display:none;" value="1" name="1" >
                </div>
                <div class="col-md-3 column ui-sortable seton3">
                    <?php
                    include 'Side_ads.php';
                    ?>
                </div>
                
            </div>
        </div>
        <hr>
        <div class="row maj">
            <div class="popover-title majaleh">
                مجله خبر روز
            </div><br>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="panel panel-info">

                            <div class="panel-heading">

                                <h3 class="panel-title">
                                    داستان کوتاه
                                </h3>

                            </div>

                            <div class="panel-body panle-news">
                                <div class="view">
                                    <?php
                                    $type_magazine = "داستان";
                                    $magazine1 = $dbclass->magazine($type_magazine, 0);
                                    if (is_array($magazine1)) {
                                        foreach ($magazine1 as $row_magazine)
                                            echo '
                                <a href="magazine/' . $row_magazine["id_magazin"] . '">
                                        <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                            <button class="btn btn-default btn_news" type="button">
                                                <i class="glyphicon glyphicon-align-justify"></i>
                                               ' . $row_magazine["title"] . '
                                            </button>
                                        </div>
                                    </a>
';
                                    } else {
                                        echo '
                                        <a href="#">
                                        <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                            <button class="btn btn-default btn_news" type="button">
                                                <i class="glyphicon glyphicon-align-justify"></i>
                                               هیچ موردی یافت نشد         
                                            </button>
                                        </div>
                                    </a>
';
                                    }
                                    ?>



                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="mag/داستان">
                                    ادامه مجله داستان های کوتاه
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="panel panel-info">

                            <div class="panel-heading">

                                <h3 class="panel-title">
                                    روانشناسی
                                </h3>

                            </div>

                            <div class="panel-body panle-news">
                                <div class="view">
                                    <?php
                                    $type_magazine = "روانشناسی";
                                    $magazine_rav = $dbclass->magazine($type_magazine, 0);
                                    if (is_array($magazine_rav)) {
                                        foreach ($magazine_rav as $row_magazine_rav)
                                            echo '
                                <a href="magazine/' . $row_magazine_rav["id_magazin"] . '">
                                        <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                            <button class="btn btn-default btn_news" type="button">
                                                <i class="glyphicon glyphicon-align-justify"></i>
                                               ' . $row_magazine_rav["title"] . '
                                            </button>
                                        </div>
                                    </a>
';
                                    } else {
                                        echo '
                                        <a href="#">
                                        <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                            <button class="btn btn-default btn_news" type="button">
                                                <i class="glyphicon glyphicon-align-justify"></i>
                                               هیچ موردی یافت نشد         
                                            </button>
                                        </div>
                                    </a>
';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="mag/روانشناسی">
                                    ادامه مجله روانشناسی
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="panel panel-info">

                            <div class="panel-heading">

                                <h3 class="panel-title">
                                    it و فناوری
                                </h3>

                            </div>

                            <div class="panel-body panle-news">
                                <div class="view">
                                    <?php
                                    $type_magazine = "فناوری";
                                    $magazine_it = $dbclass->magazine($type_magazine, 0);
                                    if (is_array($magazine_it)) {
                                        foreach ($magazine_it as $row_magazine_it)
                                            echo '
                                <a href="magazine/' . $row_magazine_it["id_magazin"] . '">
                                        <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                            <button class="btn btn-default btn_news" type="button">
                                                <i class="glyphicon glyphicon-align-justify"></i>
                                               ' . $row_magazine_it["title"] . '
                                            </button>
                                        </div>
                                    </a>
';
                                    } else {
                                        echo '
                                        <a href="#">
                                        <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                            <button class="btn btn-default btn_news" type="button">
                                                <i class="glyphicon glyphicon-align-justify"></i>
                                               هیچ موردی یافت نشد         
                                            </button>
                                        </div>
                                    </a>
';
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="mag/it">
                                    ادامه مجله فناوری و it
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="panel panel-info">

                            <div class="panel-heading">

                                <h3 class="panel-title">
                                    سلامت و پزشکی
                                </h3>

                            </div>

                            <div class="panel-body panle-news">
                                <div class="view">
                                    <?php
                                    $type_magazine = "سلامت";
                                    $magazine_sal = $dbclass->magazine($type_magazine, 0);
                                    if (is_array($magazine_sal)) {
                                        foreach ($magazine_sal as $row_magazine_sal)
                                            echo '
                                <a href="magazine/' . $row_magazine_sal["id_magazin"] . '">
                                        <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                            <button class="btn btn-default btn_news" type="button">
                                                <i class="glyphicon glyphicon-align-justify"></i>
                                               ' . $row_magazine_sal["title"] . '
                                            </button>
                                        </div>
                                    </a>
';
                                    } else {
                                        echo '
                                        <a href="#">
                                        <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                            <button class="btn btn-default btn_news" type="button">
                                                <i class="glyphicon glyphicon-align-justify"></i>
                                               هیچ موردی یافت نشد         
                                            </button>
                                        </div>
                                    </a>
';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="mag/سلامت">
                                    ادامه مجله سلامت و پزشکی
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="panel panel-info">

                            <div class="panel-heading">

                                <h3 class="panel-title">
                                    زیبایی
                                </h3>

                            </div>

                            <div class="panel-body panle-news">
                                <div class="view">
                                    <?php
                                    $type_magazine = "زیبایی";
                                    $magazine_biut = $dbclass->magazine($type_magazine, 0);
                                    if (is_array($magazine_biut)) {
                                        foreach ($magazine_biut as $row_magazine_biut)
                                            echo '
                                <a href="magazine/' . $row_magazine_biut["id_magazin"] . '">
                                        <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                            <button class="btn btn-default btn_news" type="button">
                                                <i class="glyphicon glyphicon-align-justify"></i>
                                               ' . $row_magazine_biut["title"] . '
                                            </button>
                                        </div>
                                    </a>
';
                                    } else {
                                        echo '
                                        <a href="#">
                                        <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                            <button class="btn btn-default btn_news" type="button">
                                                <i class="glyphicon glyphicon-align-justify"></i>
                                               هیچ موردی یافت نشد         
                                            </button>
                                        </div>
                                    </a>
';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="mag/زیبایی">
                                    ادامه مجله زیبایی
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="panel panel-info">

                            <div class="panel-heading">

                                <h3 class="panel-title">
                                    بیوگرافی
                                </h3>

                            </div>

                            <div class="panel-body panle-news">
                                <div class="view">
                                    <?php
                                    $type_magazine = "بیوگرافی";
                                    $magazine_bio = $dbclass->magazine($type_magazine, 0);
                                    if (is_array($magazine_bio)) {
                                        foreach ($magazine_bio as $row_magazine_bio)
                                            echo '
                                <a href="magazine/' . $row_magazine_bio["id_magazin"] . '">
                                        <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                            <button class="btn btn-default btn_news" type="button">
                                                <i class="glyphicon glyphicon-align-justify"></i>
                                               ' . $row_magazine_bio["title"] . '
                                            </button>
                                        </div>
                                    </a>
';
                                    } else {
                                        echo '
                                        <a href="#">
                                        <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                            <button class="btn btn-default btn_news" type="button">
                                                <i class="glyphicon glyphicon-align-justify"></i>
                                               هیچ موردی یافت نشد         
                                            </button>
                                        </div>
                                    </a>
';
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="mag/بیوگرافی">
                                    ادامه مجله بیوگرافی
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="panel panel-info">

                            <div class="panel-heading">

                                <h3 class="panel-title">
                                    دانستنی ها
                                </h3>

                            </div>

                            <div class="panel-body panle-news">
                                <div class="view">
                                    <?php
                                    $type_magazine = "دانستنی";
                                    $magazine_dan = $dbclass->magazine($type_magazine, 0);
                                    if (is_array($magazine_dan)) {
                                        foreach ($magazine_dan as $row_magazine_dan)
                                            echo '
                                <a href="magazine/' . $row_magazine_dan["id_magazin"] . '">
                                        <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                            <button class="btn btn-default btn_news" type="button">
                                                <i class="glyphicon glyphicon-align-justify"></i>
                                               ' . $row_magazine_dan["title"] . '
                                            </button>
                                        </div>
                                    </a>
';
                                    } else {
                                        echo '
                                        <a href="#">
                                        <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                            <button class="btn btn-default btn_news" type="button">
                                                <i class="glyphicon glyphicon-align-justify"></i>
                                               هیچ موردی یافت نشد         
                                            </button>
                                        </div>
                                    </a>
';
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="mag/دانستنی">
                                    ادامه مجله دانستنی ها
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="panel panel-info">

                            <div class="panel-heading">

                                <h3 class="panel-title">
                                    دیدنی ها
                                </h3>

                            </div>

                            <div class="panel-body panle-news">
                                <div class="view">
                                    <?php
                                    $type_magazine = "دیدنی";
                                    $magazine_view = $dbclass->magazine($type_magazine, 0);
                                    if (is_array($magazine_view)) {
                                        foreach ($magazine_view as $row_magazine_view)
                                            echo '
                                <a href="magazine/' . $row_magazine_view["id_magazin"] . '">
                                        <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                            <button class="btn btn-default btn_news" type="button">
                                                <i class="glyphicon glyphicon-align-justify"></i>
                                               ' . $row_magazine_view["title"] . '
                                            </button>
                                        </div>
                                    </a>
';
                                    } else {
                                        echo '
                                        <a href="#">
                                        <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                            <button class="btn btn-default btn_news" type="button">
                                                <i class="glyphicon glyphicon-align-justify"></i>
                                               هیچ موردی یافت نشد         
                                            </button>
                                        </div>
                                    </a>
';
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="mag/دیدنی">
                                    ادامه مجله دیدنی ها
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div style="text-align: center;width: 100%">
            <p><a href="http://critic.net/sports-betting-guide/">Sports Betting Bonus</a></p>
        </div>
        <hr/>
        <div class="row" style="background:#2C2424;color:#fff;width: 101.1%;">
            <br>
            <?php
            include 'footer.php';
            ?>

        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>