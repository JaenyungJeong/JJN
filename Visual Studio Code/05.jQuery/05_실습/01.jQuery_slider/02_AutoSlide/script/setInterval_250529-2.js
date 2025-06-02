//setInterval_250529.js

$(document).ready(function(){

    $('.pager li').first().css('color','red');

    // setInterval(leftmove, 3000);

    var autocall = setInterval(leftmove, 3000);

    $('.slide-box').mouseenter(function(){
        clearInterval(autocall);
    }).mouseleave(function(){
        autocall = setInterval(function(){
            leftmove();
        },3000);
    });
});

var page = 0;

function leftmove () {

    page++;

    if(page === 4) {

        $('gallery').css({
            left : 0
        });

        page = 1;

    }

    $('.gallery').animate({
        left : -(1280*page)
    });

    $('.pager li').css('color', 'black');

    $('#btn' + page).css({
        color : 'red'
    });

    if(page === 3){
        $('#btn0').css('color','red')
    }
}