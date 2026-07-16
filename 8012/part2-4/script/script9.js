$(function(){//문서 로딩 후 script를 실행해주세요
    $(".box1").animate({"left":"600px"},1000);//.box1를 왼쪽에서 600만큼 1초 동안 이동
    $(".box2").animate({"left":"600px"},1000,function(){//.box2를 왼쪽에서 600만큼 1초 동안 이동한 후
            $(".box2").animate({"left":"0px"},1000);//.box2를 왼쪽에서 0만큼 1초 동안 이동
    })
})