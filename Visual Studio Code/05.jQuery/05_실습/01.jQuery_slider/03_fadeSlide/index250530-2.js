

$(document).ready(function(){

    var autocall;

    autocall = setInterval(fadeSlide, 3000);

    $('.viewer').mouseover(function(){
        clearInterval(autocall);
    }).mouseout(function(){
        autocall = setInterval(fadeSlide,3000)
    });
});

function fadeSlide () {

    var firstSlide = $('.viewer .slide').first();
    var nextSlide = firstSlide.next();

    nextSlide.hide().addClass('active').fadeIn(800, function(){

        $('.viewer').append(firstSlide);
        firstSlide.removeClass('active');
    });
}