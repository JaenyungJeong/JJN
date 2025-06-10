// slide.js

$(function () {

    //3초 간격으로 함수 실행
    setInterval(leftmove, 3000);
    
});


//슬라이드 함수 만들기 - 한 번의 이동, 한 번의 준비!!!! 
//슬라이드 이동 - margin-left값 사용!

function leftmove (){
    $('.slider').animate({
        marginLeft: -960
    }, 800, function(){
        $('.slider').append($('.slider .slide').first());
        $('.slider').css('margin-left', 0);
    });
}