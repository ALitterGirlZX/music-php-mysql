<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>音乐分类</title>
<link rel="stylesheet" type="text/css" href="css/nav.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" href="css/callCenter.css">
</head>
<body>
	<div class="main">
		<!--导航开始-->
		<div class="nav">
			<div id="menu_hover_bg" style="height: 0px; overflow: hidden;"></div>
			<div class="w1200">
				<div class="logo">
					<a href="#"><img src="images/logo.png" /></a>
				</div>
				<div class="menu">
					<ul>
						<li>
							<h2><a href="index.php">音乐馆</a></h2>
						</li>
						<li>
							<h2><a href="shop.php">音乐商城</a></h2>
						</li>
						<li>
							<h2><a href="userInfo.php">个人中心</a></h2>
						</li>
						<li>
							<h2><a href="callCenter.php">音乐分类</a></h2>
						</li>
						<li>
							<h2><a href="aboutUs.php">话题中心</a></h2>
						</li>
					</ul>
				</div>
				<div class="login">
					<a class="a globalLoginBtn">登陆</a>
					<a href="register.php">免费注册</a>
					<a href="cart.php">购物车</a>
				</div>
			</div>
		</div>
		
		<!-- 登陆 -->
		<div class="modal fade" id="loginModal" style="display:none;">
			<div class="modal-dialog modal-sm" style="width:540px;">
				<div class="modal-content" style="border:none;">
					<div class="col-left"></div>
					<div class="col-right">
						<div class="modal-header">
							<button type="button" id="login_close" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title" id="loginModalLabel" style="font-size: 18px;">登录</h4>
						</div> 
						<div class="modal-body">
							<section class="box-login v5-input-txt" id="box-login">
								<form id="login_form" action="" method="post" autocomplete="off">
									<ul>
										<li class="form-group"><input class="form-control" id="id_account_l" maxlength="50" name="account_l" placeholder="请输入邮箱账号/手机号" type="text"></li>
										<li class="form-group"><input class="form-control" id="id_password_l" name="password_l" placeholder="请输入密码" type="password"></li>
									</ul>
								</form>
								<p class="good-tips marginB10"><a id="btnForgetpsw" class="fr">忘记密码？</a>还没有账号？<a href="register.php" target="_blank" id="btnRegister">立即注册</a></p>
								<div class="login-box marginB10">
									<button id="login_btn" type="button" class="btn btn-micv5 btn-block globalLogin">登录</button>
									<div id="login-form-tips" class="tips-error bg-danger" style="display: none;">错误提示</div>
								</div>
								<div class="threeLogin"><span>其他方式登录</span><a class="nqq" href="javascript:;"></a><a class="nwx" href="javascript:;"></a><!--<a class="nwb"></a>--></div>
							</section>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 信息主体 -->
		<div class="info">
			<div class="info_left">
				<ul>
					<li class="a2" style="background: #EEEEEE;">
						热搜榜
					</li>
					<li class="a1" style="background: #EEEEEE;color: #033045;">
						动漫卡通
					</li>
					<li class="a3">
						轻音乐
					</li>
					<li class="a4">
						摇滚音乐
					</li>
					<li class="a5">
						民谣
					</li>
					<li class="a6">
						流行歌曲
					</li>
					<li class="a7">
						抒情音乐
					</li>
					<li class="a8">
						粤语歌
					</li>
					<li class="a9">
						KTV金曲
					</li>
				</ul>
			</div>
			<div class="info_right">
				<div class="a1" style="border: 0px!important;">
					<ul style="font-size: 18px;">
						<li>歌曲：<b>72</b>&nbsp;首&nbsp;&nbsp;&nbsp;</li>
						<li>歌单：<b>16</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>专辑：<b>11</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>视频：<b>9</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
					</ul>
					<ul class="peizhi">
						<li><img src="./images/bofang.png" alt=""></li>
						<li><img src="images/addto.png" ></li>
						<li><img src="images/upto.png" ></li>
						<li><img src="images/piliang.png" ></li>
						<li><img src="images/piliang6.png"></li>
					</ul>
					<table border="0px" cellspacing="0" cellpadding="0" class="songlist">
						<thead class="th">
							<tr>
								<th>歌曲</th>
								<th>歌手</th>
								<th>发行时间</th>
								<th>时长</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					<ul class="pagelist">
						<li>&gt;</li>
						<li>4</li>
						<li>3</li>
						<li>2</li>
						<li class="pageActive">1</li>
						<li>&lt;</li>
					</ul>
				</div>
				<div class="a2">
					<ul style="font-size: 18px;">
						<li>歌曲：<b>32</b>&nbsp;首&nbsp;&nbsp;&nbsp;</li>
						<li>歌单：<b>30</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>专辑：<b>2</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>视频：<b>7</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
					</ul>
					<ul class="peizhi">
						<li><img src="./images/bofang.png" alt=""></li>
						<li><img src="images/addto.png" ></li>
						<li><img src="images/upto.png" ></li>
						<li><img src="images/piliang.png" ></li>
						<li><img src="images/piliang7.png"></li>
					</ul>
					<table border="0px" cellspacing="0" cellpadding="0" class="songlist">
						<thead class="th">
							<tr>
								<th>歌曲</th>
								<th>歌手</th>
								<th>发行时间</th>
								<th>时长</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					<ul class="pagelist">
						<li>&gt;</li>
						<li>4</li>
						<li>3</li>
						<li>2</li>
						<li class="pageActive">1</li>
						<li>&lt;</li>
					</ul>
				</div>
				<div class="a3">
					<ul style="font-size: 18px;">
						<li>歌曲：<b>32</b>&nbsp;首&nbsp;&nbsp;&nbsp;</li>
						<li>歌单：<b>0</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>专辑：<b>10</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>视频：<b>21</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
					</ul>
					<ul class="peizhi">
						<li><img src="./images/bofang.png" alt=""></li>
						<li><img src="images/addto.png" ></li>
						<li><img src="images/upto.png" ></li>
						<li><img src="images/piliang.png" ></li>
						<li><img src="images/piliang8.png"></li>
					</ul>
					<table border="0px" cellspacing="0" cellpadding="0" class="songlist">
						<thead class="th">
							<tr>
								<th>歌曲</th>
								<th>歌手</th>
								<th>发行时间</th>
								<th>时长</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					<ul class="pagelist">
						<li>&gt;</li>
						<li>4</li>
						<li>3</li>
						<li>2</li>
						<li class="pageActive">1</li>
						<li>&lt;</li>
					</ul>
				</div>
				<div class="a4">
					<ul style="font-size: 18px;">
						<li>歌曲：<b>22</b>&nbsp;首&nbsp;&nbsp;&nbsp;</li>
						<li>歌单：<b>23</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>专辑：<b>0</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>视频：<b>0</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
					</ul>
					<ul class="peizhi">
						<li><img src="./images/bofang.png" alt=""></li>
						<li><img src="images/addto.png" ></li>
						<li><img src="images/upto.png" ></li>
						<li><img src="images/piliang.png" ></li>
					</ul>
					<table border="0px" cellspacing="0" cellpadding="0" class="songlist">
						<thead class="th">
							<tr>
								<th>歌曲</th>
								<th>歌手</th>
								<th>发行时间</th>
								<th>时长</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					<ul class="pagelist">
						<li>&gt;</li>
						<li>4</li>
						<li>3</li>
						<li>2</li>
						<li class="pageActive">1</li>
						<li>&lt;</li>
					</ul>
				</div>
				<div class="a5">
					<ul style="font-size: 18px;">
						<li>歌曲：<b>26</b>&nbsp;首&nbsp;&nbsp;&nbsp;</li>
						<li>歌单：<b>10</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>专辑：<b>5</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>视频：<b>11</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
					</ul>
					<ul class="peizhi">
						<li><img src="./images/bofang.png" alt=""></li>
						<li><img src="images/addto.png" ></li>
						<li><img src="images/upto.png" ></li>
						<li><img src="images/piliang.png" ></li>
						<li><img src="images/piliang1.png"></li>
					</ul>
					<table border="0px" cellspacing="0" cellpadding="0" class="songlist">
						<thead class="th">
							<tr>
								<th>歌曲</th>
								<th>歌手</th>
								<th>发行时间</th>
								<th>时长</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					<ul class="pagelist">
						<li>&gt;</li>
						<li>4</li>
						<li>3</li>
						<li>2</li>
						<li class="pageActive">1</li>
						<li>&lt;</li>
					</ul>
				</div>
				<div class="a6">
					<ul style="font-size: 18px;">
						<li>歌曲：<b>82</b>&nbsp;首&nbsp;&nbsp;&nbsp;</li>
						<li>歌单：<b>32</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>专辑：<b>15</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>视频：<b>0</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
					</ul>
					<ul class="peizhi">
						<li><img src="./images/bofang.png" alt=""></li>
						<li><img src="images/addto.png" ></li>
						<li><img src="images/upto.png" ></li>
						<li><img src="images/piliang.png" ></li>
						<li><img src="images/piliang2.png"></li>
					</ul>
					<table border="0px" cellspacing="0" cellpadding="0" class="songlist">
						<thead class="th">
							<tr>
								<th>歌曲</th>
								<th>歌手</th>
								<th>发行时间</th>
								<th>时长</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					<ul class="pagelist">
						<li>&gt;</li>
						<li>4</li>
						<li>3</li>
						<li>2</li>
						<li class="pageActive">1</li>
						<li>&lt;</li>
					</ul>
				</div>
				<div class="a7">
					<ul style="font-size: 18px;">
						<li>歌曲：<b>22</b>&nbsp;首&nbsp;&nbsp;&nbsp;</li>
						<li>歌单：<b>37</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>专辑：<b>20</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>视频：<b>0</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
					</ul>
					<ul class="peizhi">
						<li><img src="./images/bofang.png" alt=""></li>
						<li><img src="images/addto.png" ></li>
						<li><img src="images/upto.png" ></li>
						<li><img src="images/piliang.png" ></li>
						<li><img src="images/piliang3.png"></li>
					</ul>
					<table border="0px" cellspacing="0" cellpadding="0" class="songlist">
						<thead class="th">
							<tr>
								<th>歌曲</th>
								<th>歌手</th>
								<th>发行时间</th>
								<th>时长</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					<ul class="pagelist">
						<li>&gt;</li>
						<li>4</li>
						<li>3</li>
						<li>2</li>
						<li class="pageActive">1</li>
						<li>&lt;</li>
					</ul>
				</div>
				<div class="a8">
					<ul style="font-size: 18px;">
						<li>歌曲：<b>32</b>&nbsp;首&nbsp;&nbsp;&nbsp;</li>
						<li>歌单：<b>15</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>专辑：<b>7</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>视频：<b>0</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
					</ul>
					<ul class="peizhi">
						<li><img src="./images/bofang.png" alt=""></li>
						<li><img src="images/addto.png" ></li>
						<li><img src="images/upto.png" ></li>
						<li><img src="images/piliang.png" ></li>
						<li><img src="images/piliang4.png"></li>
					</ul>
					<table border="0px" cellspacing="0" cellpadding="0" class="songlist">
						<thead class="th">
							<tr>
								<th>歌曲</th>
								<th>歌手</th>
								<th>发行时间</th>
								<th>时长</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					<ul class="pagelist">
						<li>&gt;</li>
						<li>4</li>
						<li>3</li>
						<li>2</li>
						<li class="pageActive">1</li>
						<li>&lt;</li>
					</ul>
				</div>
				<div class="a9">
					<ul style="font-size: 18px;">
						<li>歌曲：<b>52</b>&nbsp;首&nbsp;&nbsp;&nbsp;</li>
						<li>歌单：<b>23</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>专辑：<b>27</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>视频：<b>24</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
					</ul>
					<ul class="peizhi">
						<li><img src="./images/bofang.png" alt=""></li>
						<li><img src="images/addto.png" ></li>
						<li><img src="images/upto.png" ></li>
						<li><img src="images/piliang.png" ></li>
						<li><img src="images/piliang5.png"></li>
					</ul>
					<table border="0px" cellspacing="0" cellpadding="0" class="songlist">
						<thead class="th">
							<tr>
								<th>歌曲</th>
								<th>歌手</th>
								<th>发行时间</th>
								<th>时长</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					<ul class="pagelist">
						<li>&gt;</li>
						<li>4</li>
						<li>3</li>
						<li>2</li>
						<li class="pageActive">1</li>
						<li>&lt;</li>
					</ul>
				</div>
			</div>
		</div>
		
		<!-- 底部 -->
		<div class="footer">
			<ul class="shareLink">
				<li>
					<h4>本网站支持的设备</h4>
					<div><img src="images/cover/window.png" alt=""><span>Window系统</span></div>
					<div><img src="images/cover/pc.png" alt=""><span>Mac系统</span></div>
					<div><img src="images/cover/andriod.png" alt=""><span>Andriod系统</span></div>
					<div><img src="images/cover/ios.png" alt=""><span>ios系统</span></div>
				</li>
				<li>
					<h4>本网站支持的设备</h4>
					<div><img src="images/cover/window.png" alt=""><span>Window系统</span></div>
					<div><img src="images/cover/pc.png" alt=""><span>Mac系统</span></div>
					<div><img src="images/cover/andriod.png" alt=""><span>Andriod系统</span></div>
					<div><img src="images/cover/ios.png" alt=""><span>ios系统</span></div>
				</li>
				<li>
					<h4>本网站支持的设备</h4>
					<div><img src="images/cover/window.png" alt=""><span>Window系统</span></div>
					<div><img src="images/cover/pc.png" alt=""><span>Mac系统</span></div>
					<div><img src="images/cover/andriod.png" alt=""><span>Andriod系统</span></div>
					<div><img src="images/cover/ios.png" alt=""><span>ios系统</span></div>
				</li>
			</ul>
			<ul class="statement">
				<li><a href="#aaa">音乐榜单</a> | <a href="#bbb">商城服务</a> | <a href="#ccc">专辑分类</a> | <a href="#ddd">精彩推荐</a> | <a href="#eee">MV</a> | <a href="#fff">关于我们</a> | <a href="#ggg">客服中心</a> | <a href="#hhh">网站导航</a></li>
				<li>Copyright © 2019 - 3000 WXT. All Rights Reserved.</li>
				<li>XWT公司 版权所有 XWT网络文化经营许可证</li>
			</ul>
		</div>
		
	</div>
<script src="js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/swiper.animate.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery2.2.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
<script src="js/modal.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.marquee.min.js" charset="utf-8"></script>
</body>
<script type="text/javascript" charset="utf-8">
	$(function(){
		$('.info_left').find('li').eq(1).addClass('active');
		$('.a1').addClass('active1');
		$('.info_left li').click(function(){
			var cname = $(this).attr('class').substring(0,2);
			if(cname == 'us'){
				return false;
			}
			if(cname == 'a2' || cname == 'a3'){
				$('.info_right div').css('border','0px');
			}
			$('.info_right').find('div').removeClass('active1');
			$('.info_left').find('li').removeClass('active');
			$('.'+cname+'').addClass('active1');
			$(this).addClass('active');
		})
		
		$("#togglePassword").click(function () {
		    var hClass= $("#togglePassword").hasClass("icon-yanjing");
		    if(hClass==true){
			    $("#togglePassword").removeClass("icon-yanjing");
			    $("#togglePassword").addClass("icon-biyanjing");
			    $("#lPassword").attr("type", "password");
		    }else if(hClass==false){
			    $("#togglePassword").addClass("icon-yanjing");
			    $("#togglePassword").removeClass("icon-biyanjing");
			    $("#lPassword").attr("type", "text");
		    }
		})
		
		$('.reset').click(function(){
			$('.a1 input').attr('value','');
		})
		
		
		$.getJSON('json/song.json', function (data) {
			var html = '';
			$.each(data, function (n, value) {
				html += '<tr>\n'+
						'	<td>'+value.name+'</td>\n'+
						'	<td>'+value.singer+'</td>\n'+
						'	<td>'+value.time+'</td>\n'+
						'	<td>'+value.playTime+'</td>\n'+
						'</tr>';
		    });
			$('.a1 .songlist tbody').append(html);
		})
		
		$.getJSON('json/song1.json', function (data) {
			var html = '';
			$.each(data, function (n, value) {
				html += '<tr>\n'+
						'	<td>'+value.name+'</td>\n'+
						'	<td>'+value.singer+'</td>\n'+
						'	<td>'+value.time+'</td>\n'+
						'	<td>'+value.playTime+'</td>\n'+
						'</tr>';
		    });
			$('.a2 .songlist tbody').append(html);
		})
		
		$.getJSON('json/song2.json', function (data) {
			var html = '';
			$.each(data, function (n, value) {
				html += '<tr>\n'+
						'	<td>'+value.name+'</td>\n'+
						'	<td>'+value.singer+'</td>\n'+
						'	<td>'+value.time+'</td>\n'+
						'	<td>'+value.playTime+'</td>\n'+
						'</tr>';
		    });
			$('.a3 .songlist tbody').append(html);
		})
		
		$.getJSON('json/song3.json', function (data) {
			var html = '';
			$.each(data, function (n, value) {
				html += '<tr>\n'+
						'	<td>'+value.name+'</td>\n'+
						'	<td>'+value.singer+'</td>\n'+
						'	<td>'+value.time+'</td>\n'+
						'	<td>'+value.playTime+'</td>\n'+
						'</tr>';
		    });
			$('.a4 .songlist tbody').append(html);
		})
		
		$.getJSON('json/song4.json', function (data) {
			var html = '';
			$.each(data, function (n, value) {
				html += '<tr>\n'+
						'	<td>'+value.name+'</td>\n'+
						'	<td>'+value.singer+'</td>\n'+
						'	<td>'+value.time+'</td>\n'+
						'	<td>'+value.playTime+'</td>\n'+
						'</tr>';
		    });
			$('.a5 .songlist tbody').append(html);
		})
		
		$.getJSON('json/song5.json', function (data) {
			var html = '';
			$.each(data, function (n, value) {
				html += '<tr>\n'+
						'	<td>'+value.name+'</td>\n'+
						'	<td>'+value.singer+'</td>\n'+
						'	<td>'+value.time+'</td>\n'+
						'	<td>'+value.playTime+'</td>\n'+
						'</tr>';
		    });
			$('.a6 .songlist tbody').append(html);
		})
		
		$.getJSON('json/song6.json', function (data) {
			var html = '';
			$.each(data, function (n, value) {
				html += '<tr>\n'+
						'	<td>'+value.name+'</td>\n'+
						'	<td>'+value.singer+'</td>\n'+
						'	<td>'+value.time+'</td>\n'+
						'	<td>'+value.playTime+'</td>\n'+
						'</tr>';
		    });
			$('.a7 .songlist tbody').append(html);
		})
		
		$.getJSON('json/song7.json', function (data) {
			var html = '';
			$.each(data, function (n, value) {
				html += '<tr>\n'+
						'	<td>'+value.name+'</td>\n'+
						'	<td>'+value.singer+'</td>\n'+
						'	<td>'+value.time+'</td>\n'+
						'	<td>'+value.playTime+'</td>\n'+
						'</tr>';
		    });
			$('.a8 .songlist tbody').append(html);
		})
		
		$.getJSON('json/song8.json', function (data) {
			var html = '';
			$.each(data, function (n, value) {
				html += '<tr>\n'+
						'	<td>'+value.name+'</td>\n'+
						'	<td>'+value.singer+'</td>\n'+
						'	<td>'+value.time+'</td>\n'+
						'	<td>'+value.playTime+'</td>\n'+
						'</tr>';
		    });
			$('.a9 .songlist tbody').append(html);
		})
		
	})
</script>
</html>
