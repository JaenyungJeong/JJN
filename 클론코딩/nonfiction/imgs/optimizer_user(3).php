function go_order_page(){
    //window.parent.location.href='/orderform.html?basket_type=all_buy&delvtype=A';

    var aData=[];
    //aData=Object.values(aBasketProductData);

    for(var i =0 ; i<aBasketProductData.length ; i++) {
        //     console.log(typeof(aBasketProductData));
        //     console.log(aBasketProductData[i].product_no);
        // var iSeq = $(this).attr('id').replace(BASKET_CHK_ID_PREFIX, '');
        var iProdNo = aBasketProductData[i].product_no;
        var iSetProdNo = aBasketProductData[i].set_product_no;
        var iBpPrdNo = aBasketProductData[i].basket_prd_no;
        var sOptId = aBasketProductData[i].opt_id;
        var sIsSubscription = aBasketProductData[i].is_subscription;
        var bIsOverseaAble = true;
        var sIsSetProduct = 'F';
        var iCustomDataIdx = aBasketProductData[i].custom_data_idx;

        if (iSetProdNo > 0) {
            sIsSetProduct = 'T';
        } else {
            sIsSetProduct = 'F';
        }
        var cart_value =  iProdNo + ':' + sOptId + ':' + sIsSetProduct + ':' + iBpPrdNo + ':' + iCustomDataIdx
        aData.push(cart_value);
    }

    var sBasketData  = aData.join(',');
    aParam={checked_product:sBasketData,basket_type:'all_buy','delvtype':'A'};
    var sOrderUrl = '/order/orderform.html?basket_type='+ aParam.basket_type;

    if (sBasketDelvType != "") {
        sOrderUrl += '&delvtype=A';
    }
    var sLoginUrl = '/member/login.html';

    $.post('/exec/front/order/order/', aParam, function(data){
        if (data.result < 0) {
            alert(data.alertMSG);
            return;
        }

        if (data.isLogin == 'F') { // 비로그인 주문 > 로그인페이지로 이동
            window.parent.location.href = sLoginUrl + '?noMember=1&returnUrl=' + escape(sOrderUrl);
        } else {
            window.parent.location.href = sOrderUrl;
        }
    }, 'json');
// alert('2');
}

function getCookie(name) {
	var value = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
	return value ? unescape(value[2]) : null;
};

function setCookie(name, value, exp) {
	var date = new Date();
	date.setTime(date.getTime() + exp * 24 * 60 * 60 * 1000);
	document.cookie = name + '=' + escape(value) + ';expires=' + date.toUTCString() + ';path=/';
};
