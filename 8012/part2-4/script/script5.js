$(function(){//문서 로딩 후 script를 실행해주세요
        $(".last").css("color","red");//css속성

        $("h1").click(function(){
                        $(this).addClass("point");//addClass속성-class추가
        })

        $(".point").click(function(){
                        $(this).removeClass("point");//removeClass속성-class제거
        })

        $(".box").prepend("앞쪽입니다.");//box 앞쪽에 생성
        $(".box").append("뒤쪽입니다.");//box 뒤쪽에 생성

        let i;//변수i 생성
        $("li").click(function(){//li요소 클릭 시
                        i = $(this).index();// i변수에 클릭한 li의 index번호 할당
           $(".txt").text(i)//.txt에 i의 값 콘텐츠 설정
        })
})