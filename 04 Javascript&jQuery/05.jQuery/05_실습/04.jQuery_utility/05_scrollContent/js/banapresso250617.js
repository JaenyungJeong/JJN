// banapresso250617.js


$(document).ready(function(){

    var box = $('.box:eq(0) , .box:eq(1)');  /* 선택자를 변수에 담는 이유: 반복되거나 여러군데에서 쓰일때 */

    box.find('.img-box').animate({
        width : '50%' 
    }, 800, function(){
        box.find('.txt-box').fadeIn(600)
    });
});

// 스크롤이 될 수 있는 범위는 스크롤이 넘치는 안보이는 영역만큼

$(window).scroll(function(){

    var scTop = $(this).scrollTop();
    console.log(scTop);

    var winHeight = $(this).height();
    console.log('브라우저 화면의 높잇값: ' + winHeight);
    
    var gap = Math.ceil(winHeight * 0.9);
    console.log('gap: ' + gap);

    /* 
    수학객체 메서드를 통해 정수 반환받기

    Math.ceil(값); - 소숫점 첫째자리에서 '무조건' 올림
    Math.floor(값); - 소숫점 첫째자리에서 '무조건' 내림
    Math.round(값); - 소숫점 첫째자리에서 반올림

    
    */

    //3번 박스 등장

    var box3pos = $('.box').eq(2).offset().top - gap; 
    console.log('3번째 박스 등장 스크롤 기준값: ' + box3pos);

    if (scTop > box3pos) {
        $('.box').eq(2).find('.img-box').animate({
            width: '50%'
        },800 , function(){
            $(this).next().fadeIn(600);
        });
    }

    //4번 박스 등장
    var box4pos = $('.box').eq(3).offset().top - gap;

    if(scTop > box4pos) {
        $('.box').eq(3).find('.img-box').animate({
            width: '50%'
        },800, function(){
            $(this).prev().fadeIn(600);
        });
    }
});