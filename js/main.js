//导航
$(function() {
	var $obj = $('.menu ul');
	$obj.find('li').on('mouseenter', function() {
		$(this).addClass("intro");
	});
	
	$obj.find('li').on('mouseleave', function() {
		$(this).removeClass("intro");
	})
	
	function login_popup() {
	    $("#loginModal").modal("show")
	}
	
	$(".globalLoginBtn").on("click", login_popup),function() {
	    var e = [];
	    $(".modal").on("show.bs.modal",
	    function() {
	        for (var s = 0; e.length > s; s++) e[s] && (e[s].modal("hide"), e[s] = null);
	        e.push($(this));
	        var o = $(this),
	        a = o.find(".modal-dialog"),
	        t = $('<div style="display:table; width:100%; height:100%;"></div>');
	        t.html('<div style="vertical-align:middle; display:table-cell;"></div>'),
	        t.children("div").html(a),
	        o.html(t)
	    })
	} ();
	//导航展开
	$('#men_pro').on('mouseenter', function() {
		$('#menu_hover_bg').stop().animate({
			height: '610px'
		}, 500);
		$('#men_pro .sub_menu').stop().animate({
			height: '610px'
		}, 600);
	})
	$('#men_pro').on('mouseleave', function() {
		$('#menu_hover_bg').stop().animate({
			height: '0'
		}, 600);
		$('#men_pro .sub_menu').stop().animate({
			height: '0'
		}, 500);
	})
	$('#men_sol').on('mouseenter', function() {
		$('#menu_hover_bg').stop().animate({
			height: '340px'
		}, 500);
		$('#men_sol .sub_menu').stop().animate({
			height: '340px'
		}, 600);
	})
	$('#men_sol').on('mouseleave', function() {
		$('#menu_hover_bg').stop().animate({
			height: '0'
		}, 600);
		$('#men_sol .sub_menu').stop().animate({
			height: '0'
		}, 500);
	})
	$('#men_fuwu').on('mouseenter', function() {
		$('#menu_hover_bg').stop().animate({
			height: '340px'
		}, 500);
		$('#men_fuwu .sub_menu').stop().animate({
			height: '340px'
		}, 600);
	})
	$('#men_fuwu').on('mouseleave', function() {
		$('#menu_hover_bg').stop().animate({
			height: '0'
		}, 600);
		$('#men_fuwu .sub_menu').stop().animate({
			height: '0'
		}, 500);
	})
	//服务分类选项卡
    $('#men_fuwu .category li').mouseover(function() {
        var i = $(this).index();
        $(this).addClass('active').siblings().removeClass('active');
        $('#men_fuwu .content .cont_list').eq(i).show().siblings().hide();
    });				
});

//轮播图
var main_swiper = new Swiper('.swiper-banner.swiper-container', {
    direction: 'horizontal',
    slidesPerView: 1,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    on:{
        slideChangeTransitionStart: function(){
          $('#g'+(this.activeIndex+1)).addClass('active').siblings().removeClass('active');
		  var name = $('#g'+(this.activeIndex+1)).attr('id');
		  if(name == 'g1'){
			  $('.nav').css('background','#033045');
			  $('.footer').css('background','#033045');
		  }else if(name == 'g2'){
			  $('.nav').css('background','#1A0844');
			  $('.footer').css('background','#1A0844');
		  }else if(name == 'g3'){
			  $('.nav').css('background','#23262b');
			  $('.footer').css('background','#23262b');
		  }else if(name == 'g4'){
			  $('.nav').css('background','#23262b');
			  $('.footer').css('background','#23262b');
		  }else{
			  $('.nav').css('background','#070E2A');
			  $('.footer').css('background','#070E2A');
		  }
        },
        init: function(){
            swiperAnimateCache(this); //隐藏动画元素 
            swiperAnimate(this); //初始化完成开始动画
        }, 
        slideChangeTransitionEnd: function(){ 
            swiperAnimate(this); //每个slide切换结束时也运行当前slide动画
        }
    }
});
var lis = $('.swiper-nav').find('li');
	lis.each(function(i,el){
	    $('#g'+(i+1)).mouseover(function(){
	        main_swiper.slideTo(i, 1000);
	        $(el).addClass('active').siblings().removeClass('active');
	    });
	});

var musicList = $('.classification').find('li');
musicList.each(function(i,n){
	var num = $(this).find('span');
	for(var o = 0;o < num.length;o++){
		if(o%2 !=0){
			$(this).find('span').eq(o).css('background','#e6e6e6');
		}
	}
})