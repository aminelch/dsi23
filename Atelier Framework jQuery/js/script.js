$(function(){

// modifie une propriété CSS
//$("#paragraph").css("color","red")

//modifie le texte d'un element 
// $("p").text("Mon premier paragraphe")

//  $("#paragraph").on("click",function(){
//     $(this).css('font-weight','bold')

//  });
//$pargs=$('.article');
   // for(var para of $pargs){
      //  $(para).click(function(){
           // alert($(para).text())

       // });

    //}
    //alert("je suis la");
    // $(".article").each(function(){
    //     $(this).css('color','blue')
    //     alert($(this).css('color'))
    // });
    var width=$('.article').css('width')
    var color=$('.article').css('color')
   $('#btn').on('click',function(){
        if($('.article').width()===400) {
                $('.article').css('color',color).css('width',width)
        }else {
            $('.article').css('color','green')
            $('.article').css('width','400px')
        }
        

   });     

    });