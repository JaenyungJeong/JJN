//1cutslide-2-250528.js

/* 
슬라이더 하나의 변수 설정
1)#pager 2번을 눌렀을 때  
2)#gallery 슬라이더가 왼쪽으로 1200px 한번 이동
3)이미지 4개 전부가 왼쪽으로의 이동을 의미 

클릭대상 : #pager li
슬라이드가 이동하려며, 이동대상은 누구? #gallery
어떻게 이동할까요?
- marginLeft (위치의 영향을 주는 속성)
- left

얼만큼 이동할까요?
1200px 만큼 -> 1200을 구해서 쓸 수 있는 방법은 없을까? 
>> 슬라이드 하나의 너비를 구해보자! - width()

1200을 구해서 쓸 수 있는 방법은 없을까?

0번을 이동했을 때 : 1번 슬라이드 0
1번을 이동했을 때 : 2번 슬라이드 -1200 -> 1200*1
2번을 이동했을 때 : 3번 슬라이드 -2400 -> 1200*2
3번을 이동했을 때 : 4번 슬라이드 -3600 -> 1200*3 패턴찾기!

>> 곱해지는 값을 내가 클릭하는 li의 인덱스 값으로 사용하자!
*/

$(function(){

    //슬라이드 하나의 너비 구하기

    var imgWidth = $('#gallery img').width(); //1200
    console.log('슬라이드 하나의 너비값: ' + imgWidth);

    $('#pager li').click(function(e){

        var idx = $(this).index();
        console.log('클릭한 li의 인덱스값: ' + idx);

        /* //이동거리를 px로 사용
        $('#gallery').animate({
            marginLeft: -(imgWidth*idx)
        },1000); */

        //이동거리를 %로 사용!
        $('#gallery').animate({
            marginLeft : -(100*idx) + '%'
            // left : -(100*idx) + '%'
        },800);
    });
});





/* $(document).ready(function(){

    var liW = $('#slider').width();
    console.log(liW);


    
    $('#pager li').click(function(){

        var btn = $(this).text();
        console.log(btn);

        $('#gallery').animate({
            marginLeft: '-=' + liW
        });
    });
}); */