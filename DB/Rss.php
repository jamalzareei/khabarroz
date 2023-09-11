<?php

include '../DB/db_con.php';
//تعریف سرتیترها
$rssfeed = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
$rssfeed .= "<rss version=\"2.0\">";
$rssfeed .= "<channel>";
$rssfeed .= "<title>سایت تحلیل خبری خبر روز</title>";
$rssfeed .= "<link>http://www.khabarroz.com</link>";
$rssfeed .= "<description>khabarroz.com | سایت تحلیلی خبری خبر روز</description>";
$rssfeed .= "<language>fa</language>";
$rssfeed .= "<copyright>Copyright (C) " . date('Y') . " http://www.khabarroz.com</copyright>";
//انتخاب مطالب از پایگاه داده
$news_main = $dbclass->news_main(0);
if (is_array($news_main)) {
    foreach ($news_main as $row) {
        $id = $row['id_news'];
        $title = $row['title'];
        //ایجاد خروجی استاندارد و جلوگیری از ایجاد کاراکترهای غیر مجاز
        $title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
        $summary = $row['message'];
        //ایجاد خروجی استاندارد و جلوگیری از ایجاد کاراکترهای غیر مجاز 
        $summary = htmlspecialchars($summary, ENT_QUOTES, 'UTF-8');
        //تبدیل تاریخ دیتابیس به تاریخ استاندار
        $date = $row['date_news']; // 22-12-1999
        //$stringArray = explode("-", $date);
        //$date = mktime(0, 0, 0, $stringArray[1], $stringArray[2], $stringArray[0]);
        //$convert = date("D, j M Y", $date);
        //$date = $convert .' '. $row['date_news'].' '.'GMT';
        //$email="jzcs89@gmail.com";
        //تعریف لینک خروجی
        $link = "http://khabarroz.com/String.php?news=news&id=$id";
        //ایجاد آیتم برای فید
        $rssfeed .= "<item>";
        $rssfeed .= "<title>" . $title . "</title>";
        $rssfeed .= "<description>" . $summary . "</description>";
        $rssfeed .= "<link>" . $link . "</link>";
        $rssfeed .= "<guid>" . $link . "</guid>";
        $rssfeed .= "<pubDate>" . $date . "</pubDate>";
        //$rssfeed .= "<author>" . $email . "(url)"."</author>"; //اختیاری
        $rssfeed .= "<source url=\"http://www.khabarroz.com/rss.xml\">خبر روز</source>";
        $rssfeed .= "</item>";
    }
}
$rssfeed .= "</channel>";
$rssfeed .= "</rss>";
//نوشتن اطلاعات در فایل خروجی
$file = "../rss.xml";
chmod($file, 0755);
$fileHandle = fopen($file, 'w+')
        or die("خطا: سطح دسترسی برای ویرایش فایل در سرور تنظیم نیست!");
$stringData = $rssfeed;
fwrite($fileHandle, $stringData);
fclose($fileHandle);
?>
