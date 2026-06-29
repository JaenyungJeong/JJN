$(function(){
        //메뉴
        $("nav>ul>li").mouseenter(function(){
            $(this).children(".sub").stop().slideDown();
        })
        //마우스 가져가 데었을때
        $("nav>ul>li").mouseleave(function(){
            $(".sub").stop().slideUp();
        })
        // stop 기능 여러번 마우스엔터 했을 때 컴퓨터가 기억해서 계속 클릭하는 수행 정지


        //슬라이드
        let i=0;

        function slide(){
            if(i<2){
                i++;
            }else{
                i=0
            }
            $(".slide ul").animate({marginLeft:-1200*i}, 1000)

        }

        setInterval(slide, 3000);
        
})