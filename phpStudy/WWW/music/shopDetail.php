<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>详情页</title>
		<link rel="stylesheet" type="text/css" href="css/nav.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/shopDetail.css"/>
		<link rel="stylesheet" type="text/css" href="css/shouye.css"/>
	</head>
	<body>
		<?php
			require_once("config.php");
			$tb = "shop";
			$id = $_GET['id'];
			
			//连接数据库
			$con = mysql_connect("localhost","root","root")or die("连接数据库失败");
			
			//设置数据库字符集  
			mysql_query("SET NAMES UTF8");
			
			//查询数据库
			mysql_select_db($db, $con);
		
			//查询数据库
			//获取最新的1条数据
			$all = mysql_num_rows(mysql_query("select * from $tb"));
			$sql="select * from $tb where id = $id";
		?>
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
								<p class="good-tips marginB10"><a id="btnForgetpsw" class="fr">忘记密码？</a>还没有账号？<a href="javascript:;" target="_blank" id="btnRegister">立即注册</a></p>
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
		
		<div class="countdetail">
			<div class="Xcontent">
				<ul class="Xcontent01">
					<?php
						$rest=mysql_query($sql);
						while($row=mysql_fetch_row($rest)){
							$id = $row[0];
							$shopName = $row[1];
							$price = $row[2];
							$img = $row[3];
							$img1 = $row[4];
							$img2 = $row[5];
							$img3 = $row[6];
							$img4 = $row[7];
							$img5 = $row[8];
					?>
					<div class="Xcontent06">
						<?php echo "<img src='$img4'>"?>
					</div>
					<ol class="Xcontent08">
						<div class="Xcontent07">
							<?php echo "<img src='$img'>"?>
						</div>
						<div class="Xcontent09">
							<?php echo "<img src='$img2'>"?>
						</div>
						<div class="Xcontent10">
							<?php echo "<img src='$img3'>"?>
						</div>
						<div class="Xcontent11">
							<?php echo "<img src='$img1'>"?>
						</div>
						<div class="Xcontent12">
							<?php echo "<img src='$img5'>"?>
						</div>
					</ol>
					<ol class="Xcontent13">
						<?php
							echo "<div class='Xcontent14'>";
							echo "	<a href='#'>";
							echo "		<p>$shopName</p>";
							echo "	</a>";
							echo "</div>";
						?>
						<div class="Xcontent16"><p></p></div>
						<div class="Xcontent17">
							<p class="Xcontent18">售价</p>
							<p class="Xcontent19"><span><?php echo $price?></span></p>
							<div class="Xcontent20">
								<p class="Xcontent21"></p>
								<p class="Xcontent22"></p>
							</div>
							<div class="Xcontent23">
								<p class="Xcontent24">服务</p>
								<p class="Xcontent25">30天无忧退货&nbsp;&nbsp;&nbsp;&nbsp;       48小时快速退款 &nbsp;&nbsp;&nbsp;&nbsp;        满88元免邮</p>
							</div>
						</div>
						<div class="Xcontent26">
							<p class="Xcontent27">颜色</p>
							<div class="Xcontent28">白色</div>
							<div class="Xcontent29">黑色</div>
						</div>
						<div class="Xcontent30">
							<p class="Xcontent31">数量</p>
							<div class="Xcontent32">
								<img src="images/shangpinxiangqing/X15.png">
							</div>
							<form><input class="input" value="1"></form>
							<div class="Xcontent33">
								<img src="images/shangpinxiangqing/16.png">
							</div>
						</div>
						<div class="Xcontent34">
							<a href="#">
								<img src="images/shangpinxiangqing/X17.png">
							</a>
						</div>
						<div class="Xcontent35">
							<a href="#">
								<img src="images/shangpinxiangqing/X18.png">
							</a>
						</div>
						<?php
							}
						?>
					</ol>
				</ul>
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
	</body>
	<script src="js/jquery2.2.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script   src="js/modernizr-custom-v2.7.1.min.js"></script>
	<script type="text/javascript" src="js/comment.js"></script>
	<script type="text/javascript">
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
		
		$(function(){
		   getData();
		   $('.owenRcommed textarea').click(function(){
			   $(this).html('');
			   $(this).css('color','#999999');
		   })
		});
		  
	    $(document).ready(function(){
		   var $miaobian=$('.Xcontent08>div');
		   var $huantu=$('.Xcontent06>img');
		   var $miaobian1=$('.Xcontent26>div');
			   $miaobian.mousemove(function(){miaobian(this);});
			   $miaobian1.click(function(){miaobian1(this);});
			   
		    function miaobian(thisMb){
				for(var i=0; i<$miaobian.length; i++){
					$miaobian[i].style.borderColor = '#dedede';
				}
				thisMb.style.borderColor = '#cd2426';
				$huantu[0].src = thisMb.children[0].src;
		   }
		   
		    function miaobian1(thisMb1){
				for(var i=0; i<$miaobian1.length; i++){
					$miaobian1[i].style.borderColor = '#dedede';
				}
				$miaobian.css('border-color','#dedede');
				thisMb1.style.borderColor = '#cd2426';
				$huantu[0].src = thisMb1.children[0].src;
		   }
		   
			$(".Xcontent33").click(function(){
				var value=parseInt($('.input').val())+1;
				$('.input').val(value);
			})
		   
			$(".Xcontent32").click(function(){	
				var num = $(".input").val()
				if(num>0){
					$(".input").val(num-1);
				}			
				
			})
	   
	   	})
		
	</script>
</html>
