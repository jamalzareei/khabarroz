// Empty JS for your own code to be here
$(document).ready(function(){
    $(".media-body").attr("contenteditable","false");
});
function left_slider(id){
    //$(".remove_slider"+id).css({"display":"none"});
    $("#remove_slider"+id).fadeOut(1000);//hide(500);
    //$(".remove_slider"+id).animate({left:'-2000px'},500);
    id-=1;
    if(id==0){
        id=3;
    }
    //$(".remove_slider"+id).css({"display":"block"});
    $("#remove_slider"+id).show(1000);
    //$(".remove_slider"+id).animate({left:'0'},500);
    $(".left_slider").attr("onclick","left_slider("+id+")");
    $(".right_slider").attr("onclick","left_slider("+id+")");
    
}
function right_slider(id){
    $("#remove_slider"+id).hide(1000);
    id+=1;
    if(id==4){
        id=1;
    }
    $("#remove_slider"+id).fadeIn(1000);
    $(".left_slider").attr("onclick","left_slider("+id+")");
    $(".right_slider").attr("onclick","left_slider("+id+")");
}
function loade_news(id){
    $.ajax({
        url : 'load_news.php',
        type : 'post',
        data : {
            min : id
        },
        success : function(data){
            if(data!="not"){
                $("#load_news").append(data);
                id+=10;
                $("#btn_load_more").attr("onclick","loade_news("+id+")");
            }
            else{
                $("#btn_load_more").css({
                    "display":"none"
                });
            }
        }
    });
//
//
//
}
function loade_media(id){
    $.ajax({
        url : 'load_media.php',
        type : 'post',
        data : {
            min : id
        },
        success : function(data){
            if(data!="not"){
                $("#load_media").append(data);
                id+=9;
                $("#btn_load_more").attr("onclick","loade_media("+id+")");
            }
            else{
                $("#btn_load_more").css({
                    "display":"none"
                });
            }
        }
    });
}
function loade_person(id){
    $.ajax({
        url : 'load_personality.php',
        type : 'post',
        data : {
            min : id
        },
        success : function(data){
            if(data!="not"){
                $("#load_news").append(data);
                id+=8;
                $("#btn_load_more").attr("onclick","loade_person("+id+")");
            }
            else{
                $("#btn_load_more").css({
                    "display":"none"
                });
            }
        }
    });
}
function loade_note(id){
    $.ajax({
        url : 'load_note.php',
        type : 'post',
        data : {
            min : id
        },
        success : function(data){
            if(data!="not"){
                $("#load_news").append(data);
                id+=8;
                $("#btn_load_more").attr("onclick","loade_note("+id+")");
            }
            else{
                $("#btn_load_more").css({
                    "display":"none"
                });
            }
        }
    });
}
function loade_magazin(id){
    var type1=$("#btn_load_more").attr("name");
    $.ajax({
        url : 'load_magazin.php',
        type : 'post',
        data : {
            min : id,
            type_magazine:type1
        },
        success : function(data){
            if(data!="not"){
                $("#load_news").append(data);
                id+=8;
                $("#btn_load_more").attr("onclick","loade_magazin("+id+")");
            }
            else{
                $("#btn_load_more").css({
                    "display":"none"
                });
            }
        }
    });
}
function loade_news_type(id){
    var type1=$("#btn_load_more").attr("name");
    $.ajax({
        url : 'load_news_type.php',
        type : 'post',
        data : {
            min : id,
            type_news:type1
        },
        success : function(data){
            if(data!="not"){
                $("#load_news").append(data);
                id+=9;
                $("#btn_load_more").attr("onclick","loade_magazin("+id+")");
            }
            else{
                $("#btn_load_more").css({
                    "display":"none"
                });
            }
        }
    });
}
function loade_search(id){
    var search=$("#btn_load_more").attr("name");
    //alert(search);
    $.ajax({
        url : 'load_search.php',
        type : 'post',
        data : {
            min : id,
            search:search
        },
        success : function(data){
            if(data!="not"){
                $("#load_news").append(data);
                id+=8;
                $("#btn_load_more").attr("onclick","loade_search("+id+")");
            }
            else{
                $("#btn_load_more").css({
                    "display":"none"
                });
            }
        }
    });
}
$(window).scroll(function () {
    var types=$("#type_index").attr("value");
    types=types*1;
    types=types+1;
    $("#type_index").attr("value",types);
    var a=(types)%50;
    var b=(types)/50;
    if(a==0 && b<10){
        $.ajax({
            url : 'load_index.php', 
            type : 'post', 
            data : {
                type_index : b
            }, 
            success : function(data){
                if(data!="not"){
                    $("#load_index").append(data);
                }
                else{
                    $(".seton2").css({"position": "static"});
                }
            }
        });
    }
    /*var scrol=$(window).scrollTop()-2500;
    var scrol1=$(window).scrollTop()-300;
    var s1=$(window).scrollTop();
    var s2=$("#load_index").height()+600;
    if(s1<=s2){
    if(scrol>0){
        var scr=scrol+"px";
        $(".seton2").css({"position": "relative","top":scr,"z-index":"-1","bottom":"0"});
        $(".maj").css({"z-index":"100","background":"#fff"});
    }
    var scrol1=$(window).scrollTop()-600;
    if(scrol1>0){
        var scr=scrol1+"px";
        $(".seton3").css({"position": "relative","top":scr,"z-index":"-1","bottom":"0"});
        $(".maj").css({"z-index":"100","background":"#fff"});
    }
    }*/
});
//begin print
function PrintElem(elem)
{
    Popup($(elem).html());
}
 
function Popup(data)
{
    var mywindow = window.open('', 'print', 'height=600,width=1000');
    mywindow.document.write('<title>خبرروز</title>');
    mywindow.document.write('<link rel="stylesheet" href="css/print.css" type="text/css" media="print">'); /*افزودن سی اس اس به صفحه پرینت*/
    mywindow.document.write('');
    mywindow.document.write(data);
    mywindow.document.write('');
 
    mywindow.print();
    mywindow.close();
 
    return true;
}
//end print


//  End -->

                   