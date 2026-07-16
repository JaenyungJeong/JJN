$(function(){//html 문서를 모두 로딩후 스크립트를 읽겠다
    //메뉴
    $("nav>ul>li").mouseover(function(){
        $(".sub, .menuBg").stop().slideDown();
    })
    $("nav>ul>li").mouseout(function(){
        $(".sub, .menuBg").stop().slideUp();
    })
    //슬라이드
    let i=0;
    function slide(){
        if(i<2){
            i++;
        }else{
            i=0;
        }
        $(".slide ul li").fadeOut();
        $(".slide ul li").eq(i).fadeIn();
    }
    
    setInterval(slide, 1000)

    
    // //2초후
    // $(".slide ul li").fadeOut();
    // $(".slide ul li").eq(2).fadeIn();
    // //2초후
    // $(".slide ul li").fadeOut();
    // $(".slide ul li").eq(0).fadeIn();

    //탭메뉴
    let t;
    $(".tabmenu>li").click(function(){
        $(".tabmenu>li").removeClass("on");
        $(this).addClass("on");

        t = $(this).index();
        console.log(t);

        $(".tabcon").hide();
        $(".tabcon").eq(t).show();
        return false;
    })

    //팝업
    $(".pop").click(function(){
        $(".popup").show();
    })
    $(".close button").click(function(){
        $(".popup").hide();
    })
})