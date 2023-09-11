<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
         <base href="//localhost/khabarroz/" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
             خبر روز > استخدام خبر روز
        </title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <meta HTTP-EQUIV="CONTENT-LANGUAGE" CONTENT="fa-ir"/>
        <meta NAME="DESCRIPTION" CONTENT="استخدام در پایگاه خبری تحلیلی خبر روز استخدم خبر نگار در خبر روز"/>
        <meta NAME="KEYWORDS" CONTENT="خبر روز، استخدام خبر روز،استخدام در خبر روز،استخدام خبر نگار،استخدام در پایگاه خبری تحلیلی خبر روز"/>
        <meta NAME="AUTHOR" CONTENT="jamal zareie جمال زارعی"/>

        <meta NAME="COPYRIGHT" CONTENT="2015 www.khabarroz.com"/>
        <meta NAME="ROBOTS" CONTENT="ALL"/>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="container-fluid">
            <?php
            include 'header.php';
            ?>
            <hr>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-7 panel-footer">
                    <h4>
                        <?php
                        if ($_GET["success"] = "true" && isset($_GET["success"])) {
                            echo '
                                <div class="alert alert-info" role="alert" style="text-align:center">
                                    <string class="soal">
                                    با تشکر
                                    <br>
اطلاعات شما با موفقیت ارسایل گردید
                                    </string>
                                    <br>
                                    <a href="khabarroz.com" target="_blank">
                                    www.khabarroz.com
                                    </a>
                                    </div>    
                                ';
                        }
                        ?>
                    </h4>
                    <hr>
                    <h3>
                        فرم استخدام
                    </h3>
                    <form role="form" method="post" action="Email.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        نام 
                                    </label>
                                    <input class="form-control" id="exampleInputEmail1" placeholder="نام " name="f_name" type="text" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
نام خانوادگی
                                    </label>
                                    <input class="form-control" id="exampleInputEmail1" placeholder="نام خانوادگی " name="l_name" type="text" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
نام پدر
                                    </label>
                                    <input class="form-control" id="exampleInputEmail1" placeholder="نام پدر " name="father" type="text" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        تاریخ تولد 
                                    </label>
                                    <input class="form-control" id="exampleInputEmail1" placeholder="تاریخ تولد " name="birthdaye" type="date" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        محل تولد
 
                                    </label>
                                    <input class="form-control" id="exampleInputEmail1" placeholder="محل تولد " name="m_birth" type="text" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        شماره شناسنامه 
                                    </label>
                                    <input class="form-control" id="exampleInputEmail1" placeholder="شماره شناسنامه " name="shenasnameh" type="text" pattern="[0-9]{1,10}" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        کد ملی 
                                    </label>
                                    <input class="form-control" id="exampleInputEmail1" placeholder="کد ملی " name="code_meli" type="text" pattern="[0-9]{10}" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
     جنسیت                                   
                                    </label>
                                    <select name="jensiat" class="form-control">
                                        <option value="مذکر">
                                            مذکر
                                        </option>
                                        <option value="مونث">
                                            مونث
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
    وضعیت تاهل                                     
                                    </label>
                                     <select name="taeahol" class="form-control">
                                        <option value="مجرد">
                                            مجرد
                                        </option>
                                        <option value="متاهل">
                                            متاهل
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        آدرس
                                    </label>
                                    <input class="form-control" id="exampleInputEmail1" placeholder="آدرس " name="address" type="text" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        تلفن تماس
                                    </label>
                                    <input class="form-control" id="exampleInputEmail1" placeholder="شماره تماس" name="tell" type="tel" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
ایمیل 
                                    </label>
                                    <input class="form-control" id="exampleInputEmail1" placeholder=" ایمیل " name="email" type="email" required="required">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
عنوان مدرک
                                    </label>
                                    <input class="form-control" id="exampleInputEmail1" placeholder="آخرین مدرک " name="madrak_title" type="text" required="required">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        محل اخذ
                                    </label>
                                    <input class="form-control" id="exampleInputEmail1" placeholder="محل اخذ " name="m_akhz" type="text" required="required">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
معدل
                                    </label>
                                    <input class="form-control" id="exampleInputEmail1" placeholder="معدل " name="moadel" type="text" required="required">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        توضیحات
                                    </label>
                                    <input class="form-control" id="exampleInputEmail1" placeholder="توضیحات اضافه " name="about" type="text" required="required">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        توضیحات اضافی
                                    </label>
                            <textarea class="form-control" name="message" placeholder="توضیحات اضافی در مورد خودتان را اینجا وارد کنید" id="textarea"></textarea>
                                </div>
                        <button type="submit" class="btn btn-primary btn-lg">
                            ارسال 
                        </button>
                    </form>

                </div>
                <div class="col-md-3">
                    <?php
                    include 'Side_bar.php';
                    ?>
                </div>
                <div class="col-md-1"></div>
                <!--<div class="col-md-3">
                <?php
                //include 'Side_ads.php';
                ?>
                </div>-->

            </div>
            <hr>
            <div class="row" style="background:#2C2424;color:#fff; ">
                <br>
                <?php
                include 'footer.php';
                ?>

            </div>
        </div>

    </body>
</html>
