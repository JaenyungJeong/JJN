$(function(){//문서 로딩 후 script를 실행해주세요
    $(".btn1").click(function(){
            $(".box").hide();//.box를 숨김
    })
    $(".btn2").click(function(){
            $(".box").show();//.box를 부여줌
    })
    $(".btn3").click(function(){
            $(".box").toggle();//.box가 숨겨져 있으면 보이게 하고, 보이면 숨김
    })
    $(".btn4").click(function(){
            $(".box").fadeIn("slow");//서서히 나타남. 괄호()안에 속도값을 넣을 수 있음
    })
    $(".btn5").click(function(){
            $(".box").fadeOut();//서서히 사라짐
    })
    $(".btn6").click(function(){
            $(".box").fadeToggle();//.box가 숨겨져 있으면 서서히 나타나고, 보여지고 있으면 서서히 사라짐
    })
    $(".btn7").click(function(){
            $(".box").slideUp();//위로 올라가면서 사라짐
    })
    $(".btn8").click(function(){
            $(".box").slideDown();//아래로 내려가면서 나타남
    })
    $(".btn9").click(function(){
            $(".box").slideToggle();//.box가 숨겨져 있으면 아래로 나타나고, 보여지고 있으면 위로 사라짐
    })
})