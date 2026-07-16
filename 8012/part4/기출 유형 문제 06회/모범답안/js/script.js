$(function () {//html문서 로딩 후 스크립트 실행
	//메뉴
	$("nav>ul>li").mouseenter(function(){
		$(".sub").stop().slideDown();
	})
	$("nav>ul>li").mouseleave(function(){
		$(".sub").stop().slideUp();
	})
	//슬라이드
	let i = 0;
	function slide() {
		if (i < 2) {
			i++;
		} else {
			i=0;
		}
		$(".slide ul li").fadeOut();
		$(".slide ul li").eq(i).fadeIn();
	}
	setInterval(slide, 3000);
	//팝업
	$(".pop").click(function(){
		$(".popup").show();
	})
	$(".close button").click(function(){
		$(".popup").hide();
	})
})
