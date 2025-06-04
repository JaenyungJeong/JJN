//1cutslide-2_250528.js


// 이동 슬라이드의 너비값

$(function(){

    var imgWidth = $('#gallery img').width();

    $('#pager li').click(function(){

        var idx = $(this).index();

        /* $('#gallery').animate({
            marginLeft : -(imgWidth*idx )
        },1000); */

        /* $('#gallery').animate({
            marginLeft : -(100*idx) + '%'
        },1000); */

        $('#gallery').animate({
            left : -(100*idx) + '%'
        },1000);
        $(this).addClass('active').siblings().removeClass('active');
    });

    
});