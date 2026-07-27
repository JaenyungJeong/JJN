$(function(){
    //메뉴
    $("nav>ul>li").mouseenter(function(){
        $(this).children(".sub").stop().slideDown();
    })
    $("nav>ul>li").mouseleave(function(){
        $(".sub").stop().slideUp();
    })

    //슬라이드
    let i = 0;

    function slide(){
        if(i<2){
            i++;
        }else{
            i=0;
        }
        
        $(".slide ul").animate({marginLeft:i * -100 + "%"},1000)

    }
    setInterval(slide,1000);
    
    
})