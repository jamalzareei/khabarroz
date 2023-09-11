<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

echo '

<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        <div class="panel-heading">
            <h3 class="panel-title">
                خبرهای فوری                                
            </h3>
        </div>
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">';
for ($i = 1; $i <= 5; $i++) {
    echo '     <a href="#">
                                        <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                            <button class="btn btn-default btn_news" type="button">
                                                <i class="glyphicon glyphicon-align-justify"></i>
                                               هیچ موردی یافت نشد       
                                            </button>
                                        </div>
                                    </a>';
}
echo '
      </div>
    </div>
  </div>
  <hr>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
        <div class="panel-heading">
                                <h3 class="panel-title">
                                    آخرین خبرها                                
                                </h3>
        </div>
      </a>
        </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
        ';
for ($i = 1; $i <= 5; $i++) {
    echo '
                                                <a href="News">
                                                   <div class="btn-group btn-group-sm btn-group-vertical btn_news">
                                                        <button class="btn btn-default btn_news" id="btn_news" type="button">
                                                           <img src="img/logo.gif" height="25" width="25" class="glyphicon glyphicon-align-justify">
                                             هیچ خبری وجود ندارد                                                     
                                                        </button>
                                                   </div>
                                                </a>
                                                ';
}
echo '
      </div>
    </div>
  </div>
  
<hr>
 <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
    <div class="panel-heading">

                            <h3 class="panel-title">
                               پربیننده ترین خبرها                              
                            </h3>

                        </div>
      </a>
    </div>
    <div id="collapseThree" class="accordion-body collapse">
      <div class="accordion-inner">
        ';
for($i=1;$i<=5;$i++){
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
echo '
      </div>
    </div>
  </div>
 <hr>
 <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
    <div class="panel-heading">

                            <h3 class="panel-title">
                                                                      یاد داشت ها
                              
                            </h3>

                        </div>
      </a>
    </div>
    <div id="collapseFour" class="accordion-body collapse">
      <div class="accordion-inner">
        ';
for($i=1;$i<=5;$i++){
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
echo '
      </div>
    </div>
  </div>
    <hr>
 <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
    <div class="panel-heading">

                            <h3 class="panel-title">
معرفی شخصیت ها                              
                            </h3>

                        </div>
      </a>
    </div>
    <div id="collapseFive" class="accordion-body collapse">
      <div class="accordion-inner">
        ';
for($i=1;$i<=5;$i++){
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
echo '
      </div>
    </div>
  </div>
</div>
';
?>
