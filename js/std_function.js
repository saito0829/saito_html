//======================
//フェードイン
//======================
  window.onload = function () {
    if($(".fade").css("display")=="none"){
      $(".fade").fadeIn(1000);
    };
    $("#header").addClass("slide");
  };

//======================
//スクロールで画像表示
//======================
$(function(){
    var setElm = $('.scrEvent'),
    delayHeight = 100;

    // setElm.css({display:'block',opacity:'0'});
    $('html,body').animate({scrollTop:0},1);

    $(window).on('load scroll resize',function(){
        setElm.each(function(){
            var setThis = $(this),
            elmTop = setThis.offset().top,
            elmHeight = setThis.height(),
            scrTop = $(window).scrollTop(),
            winHeight = $(window).height();
            if (scrTop > elmTop - winHeight + delayHeight && scrTop < elmTop + elmHeight){
                $(".scrEvent").addClass("slide");
            }
        });
    });
});
