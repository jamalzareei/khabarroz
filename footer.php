<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

echo '
           <!-- <div class="row">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <h1 style="text-align:center">
                                عضویت در خبرنامه
                            </h1>
                            <form class="navbar-form navbar-left" role="search" method="post" action="">
                                <div class="form-group">
                                <input type="text" class="form-control" disabled="false" name="khabarname" style="width:295px;">
                                </div> 
                                <button type="submit" class="btn btn-primary">
                                    عضویت
                                </button>
                            </form>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div class="col-md-3">


                    <div class="list-group">
                        <a href="News.php" class="list-group-item active">
                            اخبار
                        </a>
                        <a href="note.php" class="list-group-item">
                        یادداشت ها
                        </a>
                        <a href="personality.php" class="list-group-item">
                        شخصیت ها
                        </a>
                        <a href="magazine.php" class="list-group-item">
                        مجله سایت
                        </a>
                        <a href="ads.php" target="_blank" class="list-group-item">
                        تبلیغات
                        </a>
                    </div>

                </div>
                <div class="col-md-3">
                <br>
                   ';
        include 'DB/AmarGir.php';
echo'

                </div>
                <div class="col-md-1">
                <div>
      
                          
                </div>
                </div>
            </div>
    <div class="row">
        <div class="col-md-12 copyright">
            Copyright© 2015 by khabarroz.com
        </div>
    </div>
    //////////////////////////////-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Contact us form -->
                <div class="col-md-4">
                    <div class="headline">
                        <h2>
                                عضویت در خبرنامه
                            </h2>
                    </div>
                    <hr />
                    <div class="content">
                        <p>
                            <form class="navbar-form navbar-left" role="search" method="post" action="">
                                <div class="form-group">
                                <input type="text" class="form-control" disabled="false" name="khabarname" style="width:250px;">
                                </div> 
                                <button type="submit" class="btn btn-primary">
                                    عضویت
                                </button>
                            </form>
                        </p>
                        <p class="text-center">
                            <img src="img/logo.gif" class="img-circle" height="150" />
                        </p>
                    </div>
                </div>
                <!-- Go social -->
                <div class="col-md-4">
                    <div class="headline">
                        <h2>صفحات داخلی</h2>
                    </div>
                    <hr />
                    <div class="content">
                        <p class="contentp"><a href="News" class="padd"><strong>
                            اخبار
                        </strong></a></p>
                        <p class="contentp"><a href="note" class="padd"><strong>
                        یادداشت ها
                        </strong></a></p>
                        <p class="contentp"><a href="personality" class="padd"><strong>
                        شخصیت ها
                        </strong></a></p>
                        <p class="contentp"><a href="magazine" class="padd"><strong>
                        مجله سایت
                        </strong></a></p>
                        <p class="contentp"><a href="ads" class="padd"><strong>
                        تبلیغات
                        </strong></a></p>
                    </div>
                </div>
                <!-- Subscibe -->
                <div class="col-md-4">
                    <div class="headline">
                        <h2>آمار سایت</h2>
                    </div>
                    <hr />
                    <div class="content amargir">
                         ';
        include 'DB/AmarGir.php';
echo'
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-12 copyright">
                    Copyright© 2015 by khabarroz.com
                </div>
            </div>
    </footer>
        
        <!-- Histats.com  START (hidden counter)-->
                <script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
                <a href="http://www.histats.com" target="_blank" title="" ><script  type="text/javascript" >
                try {Histats.start(1,3110007,4,0,0,0,"");
                Histats.track_hits();} catch(err){};
                </script></a>
                <noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?3110007&101" alt="" border="0"></a></noscript>
                <!-- Histats.com  END  -->
                
';
echo "
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66338723-1', 'auto');
  ga('send', 'pageview');

</script>    
";
?>
