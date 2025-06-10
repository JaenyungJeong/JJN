// fadeSlide.js

$(function () {

    setInterval(fadeSlide, 3000);
});


//  슬라이드 구현을 위한 함수 만들기!
function fadeSlide() {

    //1번 - 현재 보여지는 슬라이드, 첫 번째 슬라이드
    var firstSlide = $('.viewer .slide').first();

    //2번 - 현재 보여지는 슬라이드의 '다음' 슬라이드
    var nextSlide = firstSlide.next();

    nextSlide.hide().addClass('active').fadeIn(800, function () {
        //다음을 위한 준비!!
        //1번 슬라이드를 맨 뒤로 이동!!!
        $('.viewer').append(firstSlide);

        //첫번째 슬라이드의 z-index 제거!
        firstSlide.removeClass('active');
    });
}


/* 

*fade 슬라이드 전환 원리 

현재 보이는 슬라이드 >> 1번
'다음'에 보여질 슬라이드 >> 2번

1) 1번 슬라이드가 보여지도록 z-index값 설정 (active 클래스 사용)

2) 2번 슬라이드에 fadeIn 효과를 적용할 수 있도록 display:none 설정, active 클래스(z-index) 추가 -> hide(), addClass()
3) 2번 슬라이드 등! 장! (fadeIn 효과!)

4) 1번 슬라이드 .viewer의 맨 뒤로 이동 (다음을 위한 준비!!!), active 클래스(z-index) 제거 -> append() 또는 appendTo() , removeClass()

*/