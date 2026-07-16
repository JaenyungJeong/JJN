$(function(){//문서 로딩 후 script를 실행해주세요

    $("*").css("color","red"); //전체 선택자

    $("p").css("text-decoration","underline"); //태그 선택자

    $(".point").css("background","yellow"); //class 선택자

    $("#title").css("color","green"); //id 선택자

    $("p, button").css("font-size","22px"); //다중 선택자
    
})