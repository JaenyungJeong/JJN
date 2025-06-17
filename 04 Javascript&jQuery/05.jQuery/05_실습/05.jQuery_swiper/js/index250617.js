//index250617.js


$(document).ready(function(){

    //swiper 플러그인 적용하기

    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',  /* 엘레먼츠(요소)의 약자 */
            type: 'fraction'
        },
        loop: true,
        speed: 800,
        effect: 'cube', /* fade 사라지는기능, cube 도형이 돌아가는, coverflow 입체감 있게 돌아가는  */ 
    });
});

/* 
pagination type
- bullet 원 (기본값)
- fraction 숫자

effect
- slide : 슬라이드 효과 (기본값)
- fade : 페이드 효과
- cube : 큐브 효과
- coverflow : 커버 플로우 효과
- flip : 플립효과

loop(슬라이드 반복 설정)
- false : 루프 없음(기본값)
- true : 무한루프(반복)

*/