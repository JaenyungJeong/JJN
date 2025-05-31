// slideChange_Horizontal

//////////전역변수 설정//////////////////////
var pageCount = 0; // 현재 페이지 번호를 담을 변수!(첫 페이지 0)
var total; // 페이지 총 갯수를 담을 변수, 총 페이지 갯수가 변경될 가능성이 있다면 상수가 아닌 변수로 선언!
var stat = 0; //이벤트 핸들러 실행 제어(0-실행전/허용,1-실행중/잠금)
//////////////////////////////////////////////

$(document).ready(function(){

    //전체 페이지 갯수 읽어오기

    total = $('.page').length;
    console.log('총 페이지 갯수: ' + total);

    //마우스 휠 이벤트

    $(document).on('mousewheel DOMMouseScroll', function(){

        //1. 이벤트 핸들러 제어하기 (스크롤의 이동 잠금/허용)
        //입장확인~!
        if(stat === 1) return false; //false 를 반환, 강제 종료!
        stat = 1; 

        //2. 발생한 이벤트 객체 정보 확인
        var evt = window.event;
        console.log(evt);

        //3. wheelDelta 값 구하기!
        var delta = evt.wheelDelta ? evt.wheelDelta : evt.detail;

        //4. 파이어폭스 브라우저를 위한 별도처리!
        var browserInfo = navigator.userAgent;
        console.log(browserInfo);

        if(/FireFox/i.test(browserInfo)){ //test 매개변수 참 거짓 확인
            delta = -evt.detail;
            console.log('파이어폭스 detail: ' + delta);
        }

        //5. 페이지 이동하기
        // 휠 아래 - 다음 페이지 (오른쪽 페이지), 음수(-이동거리)
        // 휠 위로 - 이전 페이지 (왼쪽 페이지), 양수(+이동거리)

        //페이지 이동을 위해 필요한 값!
        //1) 휠 델타값 - 휠 이동 방향을 확인하기 위해!
        //2) 현재 페이지 -> pageCount 변수값
        //3) (현재 페이지)문서로부터 떨어진 거리 -> 스크롤 이동값으로 사용하기 위해!

        if(delta > 0){
            //양수, 휠 위로, 이전 페이지

            pageCount--;
            if(pageCount === -1) pageCount = 0;

        } else{
            //음수, 휠 아래로, 다음 페이지

            pageCount++;
            if(pageCount === total) pageCount = total-1;

        };

        var pageLeft = $('.page').eq(pageCount).offset().left;
        
        //이동
        $('html, body').animate({
            scrollLeft : pageLeft
        }, 800, function(){
            stat = 0;
        });

        //메뉴변경 함수호출
        menuChg();

    }); // mouseWheel 이벤트!

    $('.gnb a, .side-pager a').on('click', function(e){
        e.preventDefault();
        //a페이지 순간적인 이동이 아닌 부드러운 스크롤 구현
        //현재 보고 있는 페이지와 pageCount 값 일치시키기
        //현재 보고 있는 페이지는? -> 내가 클릭한 메뉴 페이지

        var idx = $(this).parent().index();
        console.log(idx);

        //클릭된 메뉴와 현재 페이지를 일치!
        pageCount = idx;

        //페이지 이동거리 구하기
        var pid = $(this).attr('href');
        console.log('클릭된 a의 href값: ' + pid)

        var pageLeft = $(pid).offset().left;

        //이동!
        $('html, body').animate({
            scrollLeft : pageLeft
        },800);

        //메뉴변경
        menuChg();


    });

});

/*//////////////////////////////////////////
  함수명 : menuChg() 
    기능 : .gnb와 .side-pager 메뉴 동시변경
////////////////////////////////////////////*/

function menuChg (){
    $('.gnb li').eq(pageCount).addClass('on').siblings().removeClass('on');
    $('.side-pager li').eq(pageCount).addClass('on').siblings().removeClass('on');
}