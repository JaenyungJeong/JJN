var add_option_0 = document.getElementById("add_option_0"); 
$("#add_option_0").attr("pattern",  /^[A-Z0-9. +]*$/);
$("#add_option_0").on("change keyup paste", function() {
    var currentVal = $(this).val();
    var pattern = /^[A-Z0-9. +]*$/;

    if (pattern.test(currentVal) == true){
    } else {    
        add_option_0.value = "";
    }
});

$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("OdoramaCities", "오도라마 시티"); 
});

$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("GentleNight", "젠틀 나잇"); 
});


$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("InTheShower", "인 더 샤워"); 
});

$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("SantalCream", "상탈 크림"); 
});

$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("ForRest", "포 레스트"); 
});

$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("ForgetMeNot", "포겟 미 낫"); 
});

$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("SimpleGarden", "심플 가든"); 
});


$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("NeroliDream", "네롤리 드림"); 
});

$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("GaiacFlower", "가이악 플라워"); 
});

$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("OpenArms", "오픈 암스"); 
});

$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("LapsangSong", "랍상 송"); 
});

$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("TableGuest", "테이블 게스트"); 
});

$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("PeaceTalk", "피스 토크"); 
});

$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("LongAutumn", "롱 어텀"); 
});

$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("", ""); 
});

$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("RosePale", "로즈 페일"); 
});

$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("TheBeige", "더베이지"); 
});

$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("TheGrey", "더그레이"); 
});

$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("TheRose", "더 로즈"); 
});

$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("YoungMemories", "영 메모리즈"); 
});

$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("IrisConcrete", "아이리스 콘크리트"); 
});


$(".searchData .content ul li button").text(function () {
    return $(this).text().replace("BoisdYlang", "브와 드 일랑"); 
});
/**
 * 움직이는 배너 Jquery Plug-in
 * @author  cafe24
 */

(function($){

    $.fn.floatBanner = function(options) {
        options = $.extend({}, $.fn.floatBanner.defaults , options);

        return this.each(function() {
            var aPosition = $(this).position();
            var jbOffset = $(this).offset();
            var node = this;

            $(window).on('scroll', function() {
                var _top = $(document).scrollTop();
                _top = (aPosition.top < _top) ? _top : aPosition.top;

                setTimeout(function () {
                    var newinit = $(document).scrollTop();

                    if ( newinit > jbOffset.top ) {
                        _top -= jbOffset.top;
                        var container_height = $("#wrap").height();
                        var quick_height = $(node).height();
                        var cul = container_height - quick_height;
                        if(_top > cul){
                            _top = cul;
                        }
                    } else {
                        _top = 0;
                    }

                    $(node).stop().animate({top: _top}, options.animate);
                }, options.delay);
            });
        });
    };

    $.fn.floatBanner.defaults = {
        'animate'  : 500,
        'delay'    : 500
    };

})(jQuery);

/**
 * 문서 구동후 시작
 */

function reloadFrame(){
	document.getElementById('basket-iframe').src = document.getElementById('basket-iframe').src;
}

function checkSoldout(e) {
        $('.thumbnail-info').each(function () {
            let soldOut = $(this).find('.thumbnail-soldout.displaynone').text();

            if (soldOut ==! '품절') {
                $(this).addClass('soldout-item');
                
            }
        });
    }

    checkSoldout();

$(function(){
    $('#banner:visible, #quick:visible').floatBanner();
    
    /* Top Ban */
    
    var top_B = $('#top_ban').css('display');
    if ( top_B == 'block' ) {
    	$('body').addClass('top_ban');
    }
    
    var swiper_top = new Swiper("#top_ban", {
    	direction: "vertical",
        loop: true,
        slidesPerView: 1,
        spaceBetween: 0,
        autoplay: {
    		delay: 4000,
  		},
    });
    
    $('header #category > ul > li.child').mouseenter(function () {
    	$('#headBlock').fadeIn(700);
        $('header').addClass('main');
        var className = $(this).attr('class');
        
        if (className == "seller child") {
            /*
        	$('#sub_cat_wrap > div').removeClass('on');
            $('#sub_category').addClass('on');
            $('#sub_category.cate_hidden, #header-background').addClass("slideup");
            $("#sub_category.cate_hidden").addClass("cate_visible");

            $("#sub_perfume, #sub_hand, #sub_body, #sub_hair, #sub_fragrance, #sub_gift, #sub_about").removeClass("cate_visible");
            $('#header-background').css("height", $("#sub_category").innerHeight());
            setTimeout(function () {
            	$('#header-background').css("height", $("#sub_category").innerHeight());
            }, 100);
            */
        } else if (className == "flowers child") {
        	$('#sub_cat_wrap > div').removeClass('on');
            $('#sub_flowers').addClass('on');
            $('#sub_flowers.cate_hidden, #header-background').addClass("slideup");
            $("#sub_flowers.cate_hidden").addClass("cate_visible");

            $("#sub_category, #sub_perfume, #sub_hand, #sub_body, #sub_hair, #sub_fragrance, #sub_gift, #sub_about").removeClass("cate_visible");
            $('#header-background').css("height", $("#sub_flowers").innerHeight());
        } else if (className == "perfume child") {
        	$('#sub_cat_wrap > div').removeClass('on');
            $('#sub_perfume').addClass('on');
            $('#sub_perfume.cate_hidden, #header-background').addClass("slideup");
            $("#sub_perfume.cate_hidden").addClass("cate_visible");

            $("#sub_category, #sub_hand, #sub_body, #sub_hair, #sub_fragrance, #sub_gift, #sub_about").removeClass("cate_visible");
            $('#header-background').css("height", $("#sub_perfume").innerHeight());
        } else if (className == "hand child") {
        	$('#sub_cat_wrap > div').removeClass('on');
            $('#sub_hand').addClass('on');
            $('#sub_hand.cate_hidden, #header-background').addClass("slideup");
            $("#sub_hand.cate_hidden").addClass("cate_visible");

            $("#sub_category, #sub_perfume, #sub_body, #sub_hair, #sub_fragrance, #sub_gift, #sub_about").removeClass("cate_visible");
            $('#header-background').css("height", $("#sub_hand").innerHeight());
        } else if (className == "body child") {
        	$('#sub_cat_wrap > div').removeClass('on');
            $('#sub_body').addClass('on');
            $('#sub_body.cate_hidden, #header-background').addClass("slideup");
            $("#sub_body.cate_hidden").addClass("cate_visible");

            $("#sub_category, #sub_perfume, #sub_hand, #sub_hair, #sub_fragrance, #sub_gift, #sub_about").removeClass("cate_visible");
            $('#header-background').css("height", $("#sub_body").innerHeight());
         } else if (className == "hair child") {
        	$('#sub_cat_wrap > div').removeClass('on');
            $('#sub_hair').addClass('on');
            $('#sub_hair.cate_hidden, #header-background').addClass("slideup");
            $("#sub_hair.cate_hidden").addClass("cate_visible");

            $("#sub_category, #sub_perfume, #sub_hand, #sub_body, #sub_fragrance, #sub_gift, #sub_about").removeClass("cate_visible");
            $('#header-background').css("height", $("#sub_hair").innerHeight());
        } else if (className == "fragrance child") {
        	$('#sub_cat_wrap > div').removeClass('on');
            $('#sub_fragrance').addClass('on');
            $('#sub_fragrance.cate_hidden, #header-background').addClass("slideup");
            $("#sub_fragrance.cate_hidden").addClass("cate_visible");

            $("#sub_category, #sub_perfume, #sub_hand, #sub_body, #sub_hair, #sub_gift, #sub_about").removeClass("cate_visible");
            $('#header-background').css("height", $("#sub_fragrance").innerHeight());
        
        } else if (className == "gift child") {
        	$('#sub_cat_wrap > div').removeClass('on');
            $('#sub_gift').addClass('on');
            $('#sub_gift.cate_hidden, #header-background').addClass("slideup");
            $("#sub_gift.cate_hidden").addClass("cate_visible");

            $("#sub_category, #sub_perfume, #sub_hand, #sub_body, #sub_hair, #sub_fragrance, #sub_about").removeClass("cate_visible");
            $('#header-background').css("height", $("#sub_gift").innerHeight());
        
        }
        else if (className == "about child") {
        	$('#sub_cat_wrap > div').removeClass('on');
            $('#sub_about').addClass('on');
            $('#sub_about.cate_hidden, #header-background').addClass("slideup");
            $("#sub_about.cate_hidden").addClass("cate_visible");

            $("#sub_category, #sub_perfume, #sub_hand, #sub_body, #sub_fragrance, #sub_gift").removeClass("cate_visible");
            $('#header-background').css("height", $("#sub_about").innerHeight());
        
        }
    });
    
    $('header #category > ul > li.nochild').mouseenter(function () {
        
        $('#headBlock').fadeOut(700);
    	$('#header-background').removeClass("slideup");
        $('#sub_cat_wrap > div').removeClass('on');
        $('#sub_cat_wrap > div').removeClass('cate_visible');
    });
    
    $('#headBlock').mouseenter(function () {
        $(this).fadeOut(700);
        $('header').removeClass('main');
    	$('#header-background').removeClass("slideup");
        $('#sub_cat_wrap > div').removeClass('on');
        $('#sub_cat_wrap > div').removeClass('cate_visible');
    });
    
    $('.search_cat a, .search_box svg').click(function () {
    	$('.search_box').toggleClass('open');
        $('.currency_box, #aside').removeClass('open');
    });
    
    $('.lang_cat a, .currency_box svg').click(function () {
    	$('.currency_box').toggleClass('open');
        $('.search_box, #aside').removeClass('open');
    });
    
    $('#lang_select').change(function(){ 
    	var value = $(this).val();
        $('.lang_btn a').attr('href', value);
    });
    
    $('#footer .footer-wrap > section').click(function () {
    	$('#footer .footer-wrap > section').not(this).removeClass('open');
        $(this).toggleClass('open');
    });
    
    $('.header-menu').click(function () {
    	
        $('#aside').toggleClass('open');
        $('html').toggleClass('expand');
        $('#side-wrap #slideCateList').removeClass('open');
        $('#sideBlock').toggleClass('open');
    });
    
    $('#sideBlock').click(function () {
    	$('.header-menu').trigger('click');
    });
    
    $('#side-wrap .cat-wrap > ul > li.side-best-cat').click(function () {
        /*
    	$('#side-wrap .best-wrap').addClass('open');
        */
    });
    
    $('#side-wrap .best-wrap .best-path').click(function () {
    	$('#side-wrap .best-wrap').removeClass('open');
    });
    
    $('#side-wrap .cat-wrap > ul > li.side-flowers-cat').click(function () {
    	$('#side-wrap .flowers-wrap').addClass('open');
    });
    
    $('#side-wrap .flowers-wrap .flowers-path').click(function () {
    	$('#side-wrap .flowers-wrap').removeClass('open');
    });
    
    $('#side-wrap .cat-wrap > ul > li.side-perfume-cat').click(function () {
    	$('#side-wrap .perfume-wrap').addClass('open');
    });
    
    $('#side-wrap .perfume-wrap .perfume-path').click(function () {
    	$('#side-wrap .perfume-wrap').removeClass('open');
    });
    
    $('#side-wrap .cat-wrap > ul > li.side-hand-cat').click(function () {
    	$('#side-wrap .hand-wrap').addClass('open');
    });
    
    $('#side-wrap .hand-wrap .hand-path').click(function () {
    	$('#side-wrap .hand-wrap').removeClass('open');
    });
    
    $('#side-wrap .cat-wrap > ul > li.side-body-cat').click(function () {
    	$('#side-wrap .body-wrap').addClass('open');
    });
    
    $('#side-wrap .body-wrap .body-path').click(function () {
    	$('#side-wrap .body-wrap').removeClass('open');
    });
    
    $('#side-wrap .cat-wrap > ul > li.side-hair-cat').click(function () {
    	$('#side-wrap .hair-wrap').addClass('open');
    });
    
    $('#side-wrap .hair-wrap .hair-path').click(function () {
    	$('#side-wrap .hair-wrap').removeClass('open');
    });
    
    $('#side-wrap .cat-wrap > ul > li.side-fragrance-cat').click(function () {
    	$('#side-wrap .fragrance-wrap').addClass('open');
    });
    
    $('#side-wrap .fragrance-wrap .fragrance-path').click(function () {
    	$('#side-wrap .fragrance-wrap').removeClass('open');
    });
    
    $('#side-wrap .cat-wrap > ul > li.side-gift-cat').click(function () {
    	$('#side-wrap .gift-wrap').addClass('open');
    });
    
    $('#side-wrap .gift-wrap .gift-path').click(function () {
    	$('#side-wrap .gift-wrap').removeClass('open');
    });
    
    $('#side-wrap .cat-wrap > ul > li.side-about-cat').click(function () {
    	$('#side-wrap .about-wrap').addClass('open');
    });
    
    $('#side-wrap .about-wrap .about-path').click(function () {
    	$('#side-wrap .about-wrap').removeClass('open');
    });
    
    $('#side-wrap #slideCateList > ul > li').click(function () {
    	$('#side-wrap #slideCateList > ul > li').not(this).removeClass('open');
        $(this).toggleClass('open');
    });
    
    
    /* List */
    
    $('.filter-cat a, .filter-close').click(function () {
    	$('.filter-box, #contents').toggleClass('open');
    });
    
    
    /* Detail */
    
    $('#prdDtl .accordion-container .set a').click(function (e) {
        $('#prdDtl .accordion-container .set a').not(this).removeClass('active');
        $(this).toggleClass('active');
        var target = $(this).siblings("div");
        var other = $("#prdDtl .accordion-container .set a").not(this).siblings("div");
        target.slideToggle(300);
        other.slideUp(300);
    });
    
    $('.product-board-list tr a').click(function () {
    	$('.product-board-list tr a').not(this).parent().parent().removeClass('noborder');
        $(this).parent().parent().toggleClass('noborder');
    });
    
    $('#prdDtl .infoArea .product-desc h4').click(function () {
    	$('#prdDtl .infoArea .product-desc p').show();
        $(this).hide();
    });
    
    $('#prdDtl .prd-opt-box .addoption a').on('click', function(event) {
        event.preventDefault(); // 기본 동작 방지 (선택 사항)
        handleOptionPopup(this);
    });
    
    
    /* Join */
    
    $('#passwd').attr('placeholder', '(영문 대소문자/숫자/특수문자 중 2가지 이상 조합, 8자~16자)');
    $('#address_addr2, #addr2').attr('placeholder', '상세주소');
    
    $('.register-agreement .agree a').click(function (e) {
        var target = $(this).siblings("div");
        var other = $(".register-agreement .agree a").not(this).siblings("div");
        target.slideToggle(1);
        other.slideUp(1);
    });
    
    
    /* My Page */
    
    $('.recent_order a').click(function () {
    	$('.recent_order a').removeClass('active');
        $(this).addClass('active');
    });
    
    $('.myaccount-menu > ul').click(function () {
    	$(this).toggleClass('open');
    });
    
    $('.back-path').click(function () {
    	parent.history.back();
		return false;
    });
    
    
    /* Service */
    
    $('.tab > section p').click(function (e) {
        $('.tab > section p').not(this).removeClass('active');
        $(this).toggleClass('active');
        var target = $(this).siblings("div");
        var other = $(".tab > section p").not(this).siblings("div");
        target.slideToggle(300);
        other.slideUp(300);
    });
    
    $('ul.tabs-menu li').click(function() {
    	var $thisIndex = $(this).index();
        $('ul.tabs-menu li').removeClass('active');
        $(this).addClass('active');
        $('.tabs > div').removeClass('active');
        $('.tabs > div').eq($thisIndex).addClass('active');
    });
    
    
    /* Cart */
    
    $('.cart-trigger').click(function() {
        $('body').addClass('cart-active');
    });

    $('.cart-back, .basket-pop-close').click(function() {
        $('body').removeClass('cart-active');
    });
    
    $(".cart-list-option p, .list-item .option").text(function () {
    	return $(this).text().replace("[옵션:", ""); 
    });
    $(".cart-list-option p, .list-item .option").text(function () {
    	return $(this).text().replace("]", ""); 
    });
    
    $('.basket_btn').click(function () {
    	
    });
    
    
    /* Order */
    
    $('#orderForm .order-same button').click(function () {
    	$('.order-info-box').toggleClass('open');
    });
    
    $('#orderForm .shippingList > li input').click(function () {
        setTimeout(function() {
    		$('.order-info-box').toggleClass('open');
        },300);
    });
    
    $('.order-product #path-wrap').click(function () {
    	$(this).parent().toggleClass('open');
    });
    
    
    /* Benefit */
    
    $('.benefit-menu-select').on('change', function() {
        var selectedValue = $(this).val();
        if (selectedValue) {
            var element = $('#' + selectedValue);
            if (element.length) {
                $('html, body').animate({
                    scrollTop: element.offset().top - 180
                }, 1);
            }
        }
    });
    
    $(window).scroll(function(){
    	var scrollTops = $(window).scrollTop();
        if( scrollTops > 0 )
        	$('body').addClass('rolling');
        else	
        	$('body').removeClass('rolling');
    });
    
    
    
    /* 1:1 문의 */
    

    //placeholder
    $(".ePlaceholder input, .ePlaceholder textarea").each(function(i){
        var placeholderName = $(this).parents().attr('title');
        $(this).attr("placeholder", placeholderName);
    });
    /* placeholder ie8, ie9 */
    $.fn.extend({
        placeholder : function() {
            //IE 8 버전에는 hasPlaceholderSupport() 값이 false를 리턴
           if (hasPlaceholderSupport() === true) {
                return this;
            }
            //hasPlaceholderSupport() 값이 false 일 경우 아래 코드를 실행
            return this.each(function(){
                var findThis = $(this);
                var sPlaceholder = findThis.attr('placeholder');
                if ( ! sPlaceholder) {
                   return;
                }
                findThis.wrap('<label class="ePlaceholder" />');
                var sDisplayPlaceHolder = $(this).val() ? ' style="display:none;"' : '';
                findThis.before('<span' + sDisplayPlaceHolder + '>' + sPlaceholder + '</span>');
                this.onpropertychange = function(e){
                    e = event || e;
                    if (e.propertyName == 'value') {
                        $(this).trigger('focusout');
                    }
                };
                //공통 class
                var agent = navigator.userAgent.toLowerCase();
                if (agent.indexOf("msie") != -1) {
                    $(".ePlaceholder").css({"position":"relative"});
                    $(".ePlaceholder span").css({"position":"absolute", "padding":"0 4px", "color":"#878787"});
                    $(".ePlaceholder label").css({"padding":"0"});
                }
            });
        }
    });

    $(':input[placeholder]').placeholder(); //placeholder() 함수를 호출

    //클릭하면 placeholder 숨김
    $('body').on('click', '.ePlaceholder span', function(){
        $(this).hide();
    });

    //input창 포커스 인 일때 placeholder 숨김
    $('body').on('focusin', '.ePlaceholder :input', function(){
        $(this).prev('span').hide();
    });

    //input창 포커스 아웃 일때 value 가 true 이면 숨김, false 이면 보여짐
    $('body').on('focusout', '.ePlaceholder :input', function(){
        if (this.value) {
            $(this).prev('span').hide();
        } else {
            $(this).prev('span').show();
        }
    });

    //input에 placeholder가 지원이 되면 true를 안되면 false를 리턴값으로 던져줌
    function hasPlaceholderSupport() {
        if ('placeholder' in document.createElement('input')) {
            return true;
        } else {
            return false;
        }
    }
});

/**
 *  썸네일 이미지 엑박일경우 기본값 설정
 */
$(window).on('load', function() {
    $("img.thumb,img.ThumbImage,img.BigImage, .thumb img").each(function($i,$item){
        var $img = new Image();
        $img.onerror = function () {
            $item.src="//img.echosting.cafe24.com/thumb/img_product_big.gif";
        }
        $img.src = this.src;
    });
});

/**
 *  tooltip
 */
$('.eTooltip').each(function(i){
    $(this).find('.btnClose').attr('tabIndex','-1');
});
//tooltip input focus
$('.eTooltip').find('input').on('focus', function() {
    var targetName = returnTagetName(this);
    targetName.siblings('.ec-base-tooltip').show();
});
$('.eTooltip').find('input').on('focusout', function() {
    var targetName = returnTagetName(this);
    targetName.siblings('.ec-base-tooltip').hide();
});
function returnTagetName(_this){
    var ePlacename = $(_this).parent().attr("class");
    var targetName;
    if(ePlacename == "ePlaceholder"){ //ePlaceholder 대응
        targetName = $(_this).parents();
    }else{
        targetName = $(_this);
    }
    return targetName;
}

/**
 *  eTab
 */
$("body").on("click", ".eTab a", function(e){
    // 클릭한 li 에 selected 클래스 추가, 기존 li에 있는 selected 클래스는 삭제.
    var _li = $(this).parent("li").addClass("selected").siblings().removeClass("selected"),
    _target = $(this).attr("href"),
    _siblings = $(_target).attr("class"),
    _arr = _siblings.split(" "),
    _classSiblings = "."+_arr[0];

    //클릭한 탭에 해당하는 요소는 활성화, 기존 요소는 비활성화 함.
    $(_target).show().siblings(_classSiblings).hide();


    //preventDefault 는 a 태그 처럼 클릭 이벤트 외에 별도의 브라우저 행동을 막기 위해 사용됨.
    e.preventDefault();
});



//window popup script
function winPop(url) {
    window.open(url, "popup", "width=300,height=300,left=10,top=10,resizable=no,scrollbars=no");
}
/**
 * document.location.href split
 * return array Param
 */
function getQueryString(sKey)
{
    var sQueryString = document.location.search.substring(1);
    var aParam       = {};

    if (sQueryString) {
        var aFields = sQueryString.split("&");
        var aField  = [];
        for (var i=0; i<aFields.length; i++) {
            aField = aFields[i].split('=');
            aParam[aField[0]] = aField[1];
        }
    }

    aParam.page = aParam.page ? aParam.page : 1;
    return sKey ? aParam[sKey] : aParam;
};

$(function(){
    // tab
    $.eTab = function(ul){
        $(ul).find('a').on('click', function(){
            var _li = $(this).parent('li').addClass('selected').siblings().removeClass('selected'),
                _target = $(this).attr('href'),
                _siblings = '.' + $(_target).attr('class');
            $(_target).show().siblings(_siblings).hide();
            return false
        });
    }
    if ( window.call_eTab ) {
        call_eTab();
    };
});
(function($){
    $.fn.extend({
        center: function() {
            this.each(function() {
                var
                    $this = $(this),
                    $w = $(window);
                $this.css({
                    position: "absolute",
                    top: ~~(($w.height() - $this.outerHeight()) / 2) + $w.scrollTop() + "px",
                    left: ~~(($w.width() - $this.outerWidth()) / 2) + $w.scrollLeft() + "px"
                });
            });
            return this;
        }
    });
    $(function() {
        var $container = function(){/*
    <div id="modalContainer">
        <iframe id="modalContent" scroll="0" scrolling="no" frameBorder="0"></iframe>
    </div>');
    */}.toString().slice(14,-3);
        $('body')
        .append($('<div id="modalBackpanel"></div>'))
        .append($($container));
        function closeModal () {
            $('#modalContainer').hide();
            $('#modalBackpanel').hide();
        }
        $('#modalBackpanel').on('click',closeModal);
        zoom = function ($piProductNo, $piCategoryNo, $piDisplayGroup) {
            var $url = '/product/image_zoom.html?product_no=' + $piProductNo + '&cate_no=' + $piCategoryNo + '&display_group=' + $piDisplayGroup;
            $('#modalContent').attr('src', $url);
            $('#modalContent').on("load",function(){
                $(".header .close",this.contentWindow.document.body).on("click", closeModal);
            });
            $('#modalBackpanel').css({width:$("body").width(),height:$("body").height(),opacity:.4}).show();
            $('#modalContainer').center().show();
        }
    });
})(jQuery);
