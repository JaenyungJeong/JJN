// flow250613.js 


$(document).ready(function(){

    setInterval(flow, 20);  

});


/*////////////////////////////////////////////////////////////
함수명 : flow
기능 : 컨텐츠를 왼쪽으로 흐르게 하는 함수!
///////////////////////////////////////////////////////////*/

var moveNum = 0; // 이동하는 left 값을 담을 변수!

function flow (){

    moveNum++; //left 이동값을 1씩 증가


    //(무한반복을 위해) 다음을 위한 준비!
    // li 하나의 너비보다 이동한 left값(moveNum)이 커졌을 때

    var boxWidth = $('.flow li').first().outerWidth();  // outerWidhth 는 마진 너비까지 

    //if else 문
    if(moveNum > boxWidth) {
        // 이동한 픽셀수가 li 하나의 너비보다 커졌을 때! >> 다음을 위한 준비!
        // (왼쪽으로 흘러가서) 사라진 첫번째 li를 .flow 의 맨 뒤로 이동 >> append
        // .flow 의 li 순서가 변경되었으므로 left값 초기화!
        // 동시에 이동값 초기화 (moveNum)

        $('.flow').append('.flow li').first().css({
            left : 0
        });

        moveNum = 0;  //위치 0으로 초기화후 이미지의 이동값도 0으로 초기화


    } else {
        $('.flow').css({
            left : -moveNum
        });
    }

    
}