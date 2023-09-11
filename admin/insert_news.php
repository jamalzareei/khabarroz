
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            ir-newa ایر-نیوز
        </title>

        <meta name="description" content="Source code generated using layoutit.com">
        <meta name="author" content="jamal zareie جمال زارعی">

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">

    </head>
    <body>
        <?php
// put your code here
        ?>
        <div class="container-fluid">
            <br>
            <?php
                    include 'side_admin.php';
            ?>
            <br><br><br><hr>

            <div class="row">
                <div class="col-md-1 column ui-sortable"></div>
                <div class="col-md-10 column ui-sortable">
                    <h1>
                        ثبت خبر
                    </h1><hr>
                    <form class="form-horizontal" role="form" method="post" action="news_insert.php" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">
                                <span class="red">*</span> 
                                عنوان
                            </label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputEmail3" placeholder="عنوان" type="text" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">
                                <span class="red">*</span> 
                                نوع خبر
                            </label>
                            <div class="col-sm-10">
                                <select name="type1" class="form-control">
                                    <option value="سیاسی">
                                        سیاسی
                                    </option>
                                    <option value="فرهنگ و هنر">
                                        فرهنگ و هنر
                                    </option>
                                    <option value="اقتصادی">
                                        اقتصادی
                                    </option>
                                    <option value="ورزشی">
                                        ورزشی
                                    </option>
                                    <option value="فناوری">
                                        فناوری
                                    </option>
                                    <option value="جهان">
                                        جهان
                                    </option>
                                    <option value="حوادث">
                                        حوادث
                                    </option>
                                    <option value="سلامت">
                                        سلامت
                                    </option>
                                    <option value="اجتماعی">
                                        اجتماعی
                                    </option>
                                    <option value="گوناگون">
                                        گوناگون
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">
                                (اختیاری)                  نام ارسال کننده خبر   
                            </label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputPassword3" placeholder="نام ارسال کننده خبر" name="sender" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">
                                داخلی/خارجی
                            </label>
                            <div class="col-sm-10">
                                <select name="in_out" class="form-control">
                                    <option value="داخلی">
                                        داخلی                                   
                                    </option>
                                    <option value="خارجی">
                                        خارجی
                                    </option>
                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">
                                <span class="red">*</span> 
                                نوع خبر (عادی ، فوری)
                            </label>
                            <div class="col-sm-10">
                                <select name="type2" class="form-control">
                                    <option value="عادی">
                                        عادی
                                    </option>
                                    <option value="فوری">
                                        فوری
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">
                                <span class="red">*</span> 
                                خلاصه خبر 
                            </label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputPassword3" placeholder="خلاصه ای از خبر" name="summer" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">
                                <span class="red">*</span> 
                                متن خبر 
                            </label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="textarea" name="message" 
                                          placeholder="متن کامل خبر را وارد کنید"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">
                                عکس مربوط به خبر (اختیاری)
                            </label>
                            <div class="col-sm-10">
                                <input name="file" type="file" accept="image/*">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">

                            </label>
                            <div class="col-sm-10">
                                <input id="inputPassword3" name="vizhe" value="خبر ویژه" type="checkbox">
                                <label>
                                    خبر ویژه
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">
                                    ارسال مطلب
                                </button>
                            </div>
                            <div class="col-md-3 text-primary">
                                <?php
                                    if($_GET["success"]==TRUE){
                                        echo 'با موفقیت ارسال گردید';
                                    }
                                ?>
                                
                        </div>
                    </form>
                </div>
                <div class="col-md-1 column ui-sortable"></div>
            </div>

        </div>
    </body>
</html>
