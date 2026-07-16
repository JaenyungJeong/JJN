$(function(){//문서 로딩 후 script를 실행해주세요
    // mouseenter 이벤트
    $("#box1").mouseenter(function() {
            $(this).css("background-color", "yellow");
            console.log("mouseenter");//f12를 눌러 콘솔창에서 확인하세요!
    })

    // mouseover 이벤트
    $("#box2").mouseover(function() {
            $(this).css("background-color", "green");
            console.log("mouseover"); //f12를 눌러 콘솔창에서 확인하세요!
    })
})