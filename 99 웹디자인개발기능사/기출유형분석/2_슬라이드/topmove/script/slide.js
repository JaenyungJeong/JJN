// slide.js

$(function () {

    //3초 간격으로 함수 실행
    setInterval(topmove, 3000);

});

//슬라이드 함수 만들기 - 한 번의 이동, 한 번의 준비!!!
//슬라이드 이동 - top 좌표값 사용!

function topmove (){
    $('.slider').animate({
        top: -400
    }, 800, function(){
        $('.slider').append($('.slider .slide').first());
        $('.slider').css('top',0);
    });
}