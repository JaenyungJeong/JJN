// 1cutslide-1_250516.js


$(document).ready(function () {

    $('.slide ul li:last').prependTo('.slide ul');
    console.log(this);

    var liW = $('.slide ul li').width();
    console.log('li하나의 너비: ' + liW); //900

    $('.slide ul').css('marginLeft', -liW);

    $('.next a').click(function (evt) {
        evt.preventDefault();

        $('.slide ul').animate({
            scrollLeft: '-=' + liW
        }, 800 function () {
            $('.slide ul li').first().appendTo('.slide ul');
            $('.slide ul').css('marginLeft', -liW);
        });

    });

    // 이전버튼

    $('.prev a').click(function () {
        $('.slide ul').animate({
            scrollLeft: '+=' + liW
        }, 800 function(){
            $('.slide ul li').last().prependTo('.slide ul');
            $('.slide ul').css('marginLeft', -liW)
        });
    });


});