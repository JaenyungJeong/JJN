//slideChange_Horizontal


var pageCount = 0;
var total;
var stat = 0;


$(document).ready(function(){

    total = $('.page').length;

    $(document).on('mousewheel DOMMouseScroll', function(){

        if(stat === 1) return false;
        stat = 1;

        var evt = window.event;
        
        var delta = evt.wheelDelta ? evt.wheelDelta : evt.detail;

        var browserInfo = navigator.userAgent;

        if(/FireFox/i.test(browserInfo)){
            delta = -evt.detail;
        }

        if(delta > 0) {

            pageCount--;
            if(pageCount === -1) pageCount = 0;
            
        } else {
            pageCount++;
            if(pageCount === total) pageCount = total-1;
        }

        var pageLeft = $('.page').eq(pageCount).offset().left;

        $('html, body').animate({
            scrollLeft : pageLeft
        },800 , function(){
            stat = 0;
        });

        menuChg();


    });

    $('.gnb a, .side-pager a').on('click', function(e){

        e.preventDefault();

        var idx = $(this).parent().index();

        pageCount = idx;
        
        var pid = $(this).attr('href');

        var pageLeft = $(pid).offset().left;

        $('html, body').animate({
            scrollLeft : pageLeft
        },800);

        menuChg();

    });
});


function menuChg (){
    $('.gnb li').eq(pageCount).addClass('on').siblings().removeClass('on');
    $('.side-pager li').eq(pageCount).addClass('on').siblings().removeClass('on');
}

