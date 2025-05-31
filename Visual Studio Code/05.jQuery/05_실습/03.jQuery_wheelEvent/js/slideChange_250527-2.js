//slideChange

// alert('연결!')

var pageCount = 0;
var total;

var stat = 0;

$(document).ready(function () {

    total = $('.page').length;
    console.log('총 페이지 갯수: ' + total);

    $(document).on('mousewheel DOMMouseScroll', function () {

        if (stat === 1) return false;
        stat = 1;

        var evt = window.event;
        console.log(evt);

        var delta = evt.wheelDelta ? evt.wheelDelta : evt.detail;
        console.log('마우스휠 델타값: ' + delta);

        if (/FireFox/i.test(navigator.userAgent)) {
            delta = -evt.detail;
            console.log('파이어폭스 detail: ' + delta);
        }

        if (delta < 0) {
            pageCount++;
            if (pageCount === total) pageCount = total - 1;
        } else {
            pageCount--;
            if (pageCount === -1) pageCount = 0;
        }

        console.log('현재 페이지번호: ' + pageCount);

        var pageTop = $('.page').eq(pageCount).offset().top;
        console.log('페이지 offset: ' + pageTop);

        $('html, body').animate({
            scrollTop: pageTop + 'px'
        }, 800, function () {
            stat = 0;

            menuChg();
        });
        
    });

    $('.gnb a, .side-pager a').on('click', function (e) {
            e.preventDefault();

            var idx = $(this).parent().index();
            console.log('클릭된 a의 부모(li) index값: ' + idx);

            pageCount = idx;
            console.log('변경된 page번호: ' + pageCount);
            

            var pageTop = $('.page').eq(pageCount).offset().top;
            

            $('html, body').animate({
                scrollTop: pageTop
            }, 800);

            menuChg();
        });
});

function menuChg (){
    $('.gnb li').eq(pageCount).addClass('on').siblings().removeClass('on');
    $('.side-pager li').eq(pageCount).addClass('on').siblings().removeClass('on');
}