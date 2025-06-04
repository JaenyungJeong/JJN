//프로그래밍언어응용_정재녕.slide

/* 

1. 이미지가 보여질 페이지 변수 생성 var page = 0;
2. 함수명 topmove 설정
3. 조건식으로 마지막 페이지 보일시 첫번째 페이지로 이동
4. 이동 후 다음페이지가 보일수 있게 페이지 변경
5. 제이쿼리를 이용하여 클릭했을 시 한칸씩 내려가는 함수 구현
*/

$(document).ready(function () {
    // $('.slide-box').click(topmove);
    $('.pager li').first().css('color','green');

    setInterval(topmove, 3000);
});



var page = 0;

function topmove() {
    page++;

    if (page === 4) {
        $('.bakery').css({
            top: 0
        })
        page = 1;
    }

    var imgheight = $('.slide-box').height();

    $('.bakery').animate({
        top: -(imgheight*page)
    },800);


    $('.pager li').css('color', 'black');
    $('#btn' + page).css('color', 'green')

    if(page === 3) {
        $('#btn0').css('color','green');
    }
}