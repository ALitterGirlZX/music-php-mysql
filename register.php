<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>用户注册</title>
<link rel="stylesheet" type="text/css" href="css/nav.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/onlinebusinesshall/newexpand/css/index-debug.css">
<link rel="stylesheet" type="text/css" href="css/register.css">
<link rel="stylesheet" type="text/css" href="static/lib/jquery-step/css/jquery.step.css">
<script type="text/javascript" src="js/Myjs.js"></script>
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
		
		<!-- 用户注册 -->
		<div class="step-body" id="myStep">
			<div class="step-header" style="width:80%">
				<ul>
					<li><p>阅读流明</p></li>
					<li><p>填写信息</p></li>
					<li><p>完成</p></li>
				</ul>
			</div>
			<div class="step-content">
				<div class="step-list">
					<div class="page-panel-title">
						<h3 class="page-panel-title-left">网站说明</h3>
					</div>
					<div class="intro-flow">
						<div class="intro-list">
							<div class="intro-list-left">
								阅读声明
							</div>
							<div class="intro-list-right">
								<span>1</span>
								<div class="intro-list-content">
									1. 总则
									   1.1 注册用户同意本协议的全部条款并完成注册程序，才能成为本系统的正式用户。请您仔细阅读本协议，您点击"同意"按钮后即表示完全接受本协议项下的全部条款。
									   1.2 用户一旦注册，即视为用户确认自己具有享受本站服务的权利能力和行为能力，能够独立承担法律责任。
									   1.3 在注册和使用本系统时，用户应了解相关法律法规，确知享有的权利和义务；应保证注册时提交的信息合法、真实、准确，并取得相应授权。
									2. 用户
									  2.1 注册用户向本系统提供的注册资料应当是真实、准确、完整、合法有效的，用户注册资料如有变动的，应及时更新。如用户提供的注册资料不合法、不真实、不准确、不详尽的，用户需承担因此引起的相应责任及后果。
									  2.2 用户注册成功后，将产生用户名和密码等账户信息。用户可以根据本系统规定变更密码。用户应谨慎合理的保存、使用其用户名和密码。用户若发现任何非法使用用户账号或存在安全漏洞的情况，请立即通知我们。 
									  2.3 本系统需要定期或不定期地对提供网络服务的平台或相关的设备进行检修或者维护，如因此类情况而造成网络服务在合理时间内的中断，协会无需为此承担任何责任，但应尽可能事先进行通告。
									  2.4 如发生下列任何一种情形，本系统有权随时中断或终止向用户提供本协议项下的服务而无需对用户或任何第三方承担任何责任：
									    2.4.1 用户提供的个人资料不真实；
									    2.4.2 用户违反本协议中规定的使用规则；
									    2.4.3 用户名存在违反法律法规或国家政策要求，或侵犯任何第三方合法权益的情形；
									4. 义务
									  用户在使用本系统获取服务时，应当遵守以下义务：
									  4.1 遵守中国有关的法律和法规；
									  4.2 遵守所有与注册和服务有关的协议、规定和程序；
									  4.3 不得为任何非法目的而使用网络服务系统；
									 5.  隐私保护
									  5.1 用户在使用本系统进行网上注册并享有服务的过程中，涉及用户真实姓名、通信地址、联系电话、电子邮箱等隐私信息的，本系统将严格予以保密。除非以下情形：
									    5.1.1 事先获得用户的明确授权；
									    5.1.2 根据有关的法律法规要求；
									    5.1.3 按照相关政府主管部门的要求；
									    5.1.4 为维护社会公众的利益；
									    5.1.5 为维护协会的合法权益。
									  5.2 协会可能会与第三方合作向用户提供相关的网络服务，在此情况下，如该第三方同意承担与协会同等的保护用户隐私的责任，则协会有权将用户的注册资料等提供给该第三方。
									6. 知识产权
									  6.1 本系统提供的网络服务中包含的任何文本、图片、图形、音频和/或视频资料均受版权、商标和/或其它财产所有权法律的保护。
									  6.2 除法律另有强制性规定外，未经相关权利人同意，任何单位或个人不得以任何方式非法地全部或部分复制、转载、引用、链接、抓取或以其他方式使用本站的信息内容；否则，本系统所有者有权追究其法律责任。
									7. 特别提示
									  7.1 点击"同意"按钮即视为您完全接受本协议，在点击之前请您再次确认已知悉并完全理解本协议的全部内容。
								</div>
							</div>
						</div>
						<div class="intro-list intro-list-active">
							<div class="intro-list-left">
								完成
							</div>
							<div class="intro-list-right">
								<span>2</span>
								<div class="intro-list-content">
									接受并同意以上要求
								</div>
							</div>
						</div>
					</div>
					<div class="footer-btn">
						<div class="common-btn">
							<a href="javascript:void(0);" id="applyBtn">同意并申请</a>
						</div>
					</div>
				</div>
				<div class="step-list">
					<div class="page-panel-title">
						<h3 class="page-panel-title-left">填写信息</h3>
					</div>
					<div class="intro-flow">
						<form method="post" action="#">
							<dl>
								<div class="intro-list-right">
									<span>1</span>
									<dd class="user_dd">
										用&nbsp;户&nbsp;&nbsp;名 : <input type="text" name="user" value=""/>
										<span class="info user_put">请输入6个字符的用户名，可由汉字数字字母下划线组成（空格自动忽略）。</span>
										<span class="info_error user_error">请输入正确用户名!</span>
										<span class="ok user_ok"></span>
									</dd>
								</div>
								<div class="intro-list-right">
									<span>2</span>
									<dd>
										密　　码 : <input type="password" name="pass" vlaue=""/>
										<span class ="info pass_put">请输入6-18位密码，由数字字母下划线组成（不能出现空格）。</span>
										<span class="safe">安全等级：<strong class="s s1"></strong> <strong class="s s2"></strong>
											<strong class="s s3"></strong> <strong class="word"></strong>
										</span>
										<span class="info_error pass_error">请输入正确密码!</span>
										<span class="ok pass_ok"></span>
									</dd>
								</div>
								<div class="intro-list-right">
									<span>3</span>
									<dd>
										确认密码 : <input type="password" name="confirm_pass" />
										<span class="info confirm_put">请再次输入密码。</span>
										<span class="info_error confirm_error">两次密码不一致！</span>
										<span class="ok confirm_ok"></span>
									</dd>
								</div>
								<div class="intro-list-right">
									<span>4</span>
									<dd>
										电子邮箱 : <input type="text" name="email" />
										<span class="info email_put">请输入您的电子邮箱。</span>
										<span class="info_error email_error">请输入正确电子邮箱！</span>
										<span class="ok email_ok"></span>
										<ul class="auto_complete">
											<li><span></span>@qq.com</li>
											<li><span></span>@163.com</li>
											<li><span></span>@126.com</li>
											<li class="last_li"><span></span>@yahoo.com</li>
										</ul>
									</dd>
								</div>
								<div class="intro-list-right">
									<span>5</span>
									<dd>
										手机号码: <input type="text" name="phone"/>
										<span class="info phone_put">请输入您的手机号码。</span>
										<span class="info_error phone_error">请输入正确用户名!</span>
										<span class="ok phone_ok"></span>
									</dd>
								</div>
							</dl>
						</form>
					</div>
					<div class="footer-btn">
						<div class="common-btn">
							<a href="javascript:void(0);" id="submitBtn">提交</a>
						</div>
					</div>
				</div>
				<div class="step-list">
					<div class="apply-finish">
						<div class="apply-finish-header">
							<img src="images/success.png">
							<div class="apply-finish-msg">恭喜您，注册成功！</div>
						</div>
						<div class="apply-finish-footer">
							<p>尊敬的用户，您已注册成功，受理编号为<span id="proNo">LS23423432</span>。</p>
						</div>
					</div>
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
<script src="static/lib/jquery-step/js/jquery.step.js"></script>
<script>
	$(function() {
		var step= $("#myStep").step({
			animate:true,
			initStep:1,
			speed:1000
		});

		$("#preBtn").click(function(event) {
			var yes=step.preStep();
		});
		
		$("#applyBtn").click(function(event) {
			var yes=step.nextStep();
		});
		
		$("#submitBtn").click(function(event) {
			var yes=step.nextStep();
			//使用方法名字执行方法
			var t1 = window.setTimeout(hello,3000);
			// window.clearTimeout(t1);//去掉定时器
		});
		
		$("#goBtn").click(function(event) {
			var yes=step.goStep(3);
		});
			
		function hello(){
			window.location.href = 'index.php';
		}
	});
</script>
</body>
</html>
