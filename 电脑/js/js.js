var width=$(".bannerbox").width();
var i=-1;
var timer=0;
$(document).ready(function () {
    move();
    timer=setInterval("move()",3000);
    $(".bannerbox ul li").hover(function(){
        clearInterval(timer);
    },function(){
        timer=setInterval("move()",3000);
    })
    $('.nav dl dd').click(function(){
        var ddIndex=$(this).index()-1;
        i=ddIndex;
        move();
    })
})
function move(){
    i++;
    $('.baner-01-a').css({"top":"100px",opacity:0});
    $('.baner-01-b').css({"top":"400px",opacity:0});
    $('.banner2-02,.banner2-03').css({opacity:0});
    $('.banner2-01').css({opacity:0,"left":"-100px"});
    $('.banner3-04').css({opacity:0,"bottom":"100px"});
    $('.banner3-01').css({opacity:0});
    $('.banner3-02').css({opacity:0});
    $('.banner3-03').css({opacity:0});
    if(i>=3){
        i=0;
    }
    if(i<3){
        if(i==0){
            //$('.fst-li').fadeIn(100).siblings().fadeOut(100);
            $('.nav dl dd').eq(i).addClass('bg').siblings().removeClass('bg');
            $('.bannerbox ul li').eq(i).fadeIn(100).siblings().fadeOut();
           
        }
        if(i==1){
            //$(".sec-li").fadeIn(100).siblings().fadeOut(100);
            $('.nav dl dd').eq(i).addClass('bg').siblings().removeClass('bg');
            $('.bannerbox ul li').eq(i).fadeIn(100).siblings().fadeOut();
           
        }
        if(i==2){
            $('.nav dl dd').eq(i).addClass('bg').siblings().removeClass('bg');
            $('.bannerbox ul li').eq(i).fadeIn(100).siblings().fadeOut();
           
        }
    }
}

