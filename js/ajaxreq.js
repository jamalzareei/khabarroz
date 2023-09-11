$(document).ready(function(){
    var answer=null;
    var question_id=null;
    var action=null;
    
        $('input:radio[name=group]').click(function(){
            answer=$(this).val();
        });
        $('#send').on('click',function(){
           question_id=$('#question_id').val();
           if(answer==null)
               {
                   alert('لطفا یکی از گزینه ها را انتخاب نمایید');
                   return;
               }
               else
             {
               action='vote';
               question_id=$('#question_id').val();
               call_ajax(action,question_id,answer);
           }
         
    });
        $('#results').on('click',function(){
            action='result';
            question_id=$('#question_id').val();
            call_ajax(action,question_id,answer);
        });
    
});

function call_ajax(action,question_id,answer)
{
     $('#loader').text('لطفا صبر کنید ...').fadeIn(1000);
    $.ajax({
               url:'ajax.php',
               data:{action:action,question_id:question_id,answer:answer},
               type:'post',
               success:function(data){
                   $('.btn').fadeOut(1000);
                   $('#loader').fadeOut(1000).delay(500);
                   $('.title').text('نتایج نظرسنجی').delay(500);
                    $('.options').html(data).fadeIn(1000).delay(500,function(){
                                 $('.s_result').each(function(){
                                   var width=$(this).attr('data-width');
                                   $(this).animate({'width':width+'%'},1000);
                               });
                               });
               },
            });
}