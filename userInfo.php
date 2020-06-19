<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>个人中心</title>
<link rel="stylesheet" type="text/css" href="css/nav.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/info.css"/>
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
					<li class="user_info">
						<div class="user_img"></div>
						<span class="s1">小怪兽爱吃鱼</span>
						<span class="s2">关注：0 &nbsp;&nbsp; 粉丝：1</span>
					</li>
					<li class="a1">
						个人资料
					</li>
					<li class="a2">
						歌单
					</li>
					<li class="a3">
						我喜欢
					</li>
				</ul>
			</div>
			<div class="info_right">
				<div class="a1">
					<ul>
						<li>
							<span>昵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;称：</span><input type="text" value="小怪兽爱吃鱼" class="niko">
						</li>
						<li>
							<span>性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</span>
							<input type="radio" name="sex" value="男">男
							<input type="radio" name="sex" value="女" checked="checked">女
							<input type="radio" name="sex" value="保密">保密
						</li>
						<li>
							<span>账&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号：</span><input type="text" value="dinhbv" class="niko">
						</li>
						<li>
							<span>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：</span><input type="text" value="14582654720@qq.com" class="niko">
						</li>
						<li>
							<span>住&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址：</span><input type="text" value="福建省厦门市富强镇和谐村10组" class="niko">
						</li>
						<li>
							<span>联系方式：</span><input type="text" value="18824358940" class="niko">
						</li>
						<li>
							<span>登录密码：</span><input maxlength="16" type="password" name="password" id="lPassword" class="form-text" value="123456xwt">
							<span class="r loginI iconfont icon-biyanjing" id="togglePassword"><img src="images/openeye.jpg" ></span>
						</li>
						<li>
							<button type="button" class="reset">重置</button>
							<button type="button">修改</button>
						</li>
					</ul>
				</div>
				<div class="a2">
					<ul style="font-size: 18px;">
						<li>歌曲：<b>24</b>&nbsp;首&nbsp;&nbsp;&nbsp;</li>
						<li>歌单：<b>4</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
					</ul>
					<ul class="peizhi">
						<li><img src="./images/bofang.png" alt=""></li>
						<li><img src="images/addto.png" ></li>
						<li><img src="images/upto.png" ></li>
					</ul>
					<table border="0px" cellspacing="0" cellpadding="0" class="songlist">
							<thead class="th">
							<tr>
								<th>歌单</th>
								<th>曲目数</th>
								<th>创建时间</th>
								<th>收听</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					<ul class="pagelist">
						<li>&gt;</li>
						<li>2</li>
						<li class="pageActive">1</li>
						<li>&lt;</li>
					</ul>
				</div>
				<div class="a3">
					<ul style="font-size: 18px;">
						<li>歌曲：<b>62</b>&nbsp;首&nbsp;&nbsp;&nbsp;</li>
						<li>歌单：<b>0</b>&nbsp;&nbsp;&nbsp;&nbsp;</li>
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
			$('.a3 .songlist tbody').append(html);
		})
		
		$.getJSON('json/playlist.json', function (data) {
			var html = '';
			$.each(data, function (n, value) {
				html += '<tr>\n'+
						'	<td><img src="'+ value.url +'" alt="">'+value.name+'</td>\n'+
						'	<td>'+value.singer+'</td>\n'+
						'	<td>'+value.time+'</td>\n'+
						'	<td>'+value.playTime+'</td>\n'+
						'</tr>';
		    });
			$('.a2 .songlist tbody').append(html);
		})
		
		
		
		
	})
</script>
</html>
