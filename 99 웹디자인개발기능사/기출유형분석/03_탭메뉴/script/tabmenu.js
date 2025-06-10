// tabmenu.js

$(document).ready(function () {

    //1. 인덱스 번호 활용 
    /* $('.tabmenu a').click(function(e){

        e.preventDefault();

        //1. 클릭된 a태그의 부모 li에 on 클래스 적용하기 (선택된 탭메뉴 디자인 적용!)
        $(this).parent().addClass('on').siblings().removeClass('on');

        //2. 클릭된 메뉴와 컨텐츠 내용 매치하기 
        var idx = $(this).parent().index();
        console.log(idx);

        $('.content-box > div').eq(idx).addClass('on').siblings().removeClass('on');

    }); */

    //2. id값 활용
    $('#box1').show();
    $('.tabmenu a').click(function (e) {

        e.preventDefault();

        var aHref = $(this).attr('href');
        console.log(aHref);

        // 선택된 탭메뉴 디자인 변경
        $(this).parent().addClass('on').siblings().removeClass('on');

        // 내용변경
        //$(aHref).addClass('on').siblings().removeClass('on');

        $('.content-box > div').hide();
        $(aHref).fadeIn(600);


    });

});