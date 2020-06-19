<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>首页</title>
<link rel="stylesheet" type="text/css" href="css/nav.css" />
<link rel="stylesheet" type="text/css" href="css/slider.css" />
<link rel="stylesheet" type="text/css" href="css/swiper.min.css" />
<link rel="stylesheet" type="text/css" href="css/animate.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
<link rel="stylesheet" type="text/css" href="css/player.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<?php
		require_once("config.php");
		$tb = "songlist";
		$tb1 = "shop";
		
		//连接数据库
		$con = mysql_connect("localhost","root","root")or die("连接数据库失败");
		
		//设置数据库字符集  
		mysql_query("SET NAMES UTF8");
		
		//查询数据库
		mysql_select_db($db, $con);
	
		//查询数据库
		//获取最新的1条数据
		$all = mysql_num_rows(mysql_query("select * from $tb"));
		$sql="select * from $tb limit 5,10";
		$sql2="select * from $tb limit 1,10";
		$sql3="select * from $tb limit 8,10";
		$sql4="select * from $tb limit 12,8";
		$sql5="select * from $tb1 limit 0,8";
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
		
		<!--导航结束 轮播开始-->
		<div class="swiper-banner swiper-container">
			<div class="swiper-wrapper">
				<a href="#" class="swiper-slide slide1"></a>
				<a href="#" class="swiper-slide slide2"></a>
				<a href="#" class="swiper-slide slide3"></a>
				<a href="#" class="swiper-slide slide4"></a>    
				<a href="#" class="swiper-slide slide5"></a>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination swiper-pagination-white"></div>
			<div class="swiper-nav pa">
				<ul class="w1200 clearfix">
					<li id="g1" class="active">
						<div class="icon">
							<img src="images/banner/icon3.png" alt="">
						</div>
						<div class="info">
							<div>Future</div>
							<p>穿梭未来的声域</p>
						</div>
					</li>
					<li id="g2">
						<div class="icon">
							<img src="images/banner/icon1.png" alt="">
						</div>
						<div class="info">
							<div>Imagination</div>
							<p>把想象力唱给你听</p>
						</div>
					</li>
					<li id="g3">
						<div class="icon">
							<img src="images/banner/icon4.png" alt="">
						</div>
						<div class="info">
							<div>Artistic Talent</div>
							<p>才华与音乐的碰撞</p>
						</div>
					</li>
					<li id="g4">
						<div class="icon">
							<img src="images/banner/icon2.png" alt="">
						</div>
						<div class="info">
							<div>Warm</div>
							<p>我的温度只有你知道</p>
						</div>
					</li>
					<li id="g5">
						<div class="icon">
							<img src="images/banner/icon5.png" alt="">
						</div>
						<div class="info">
							<div>Free And Easy</div>
							<p>说给你的故事</p>
						</div>
					</li>
				</ul>
			</div>
			<!-- 音乐播放 -->
			<div id="QPlayer">
				<div id="pContent">
				<div id="player">
					<span class="cover"></span>
					<div class="ctrl">
						<div class="musicTag marquee">
							<strong>Title</strong>
							 <span> - </span>
							<span class="artist">Artist</span>
						</div>
						<div class="progress">
							<div class="timer left">0:00</div>
							<div class="contr">
								<div class="rewind icon"></div>
								<div class="playback icon"></div>
								<div class="fastforward icon"></div>
							</div>
							<div class="right">
								<div class="liebiao icon"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="ssBtn">
						<div class="adf"></div>
				</div>
			</div>
				<ol id="playlist"></ol>
			</div>
			
		</div>
		
		<!--轮播结束 音乐分栏部分-->
		<div class="classification">
			<h2 id="aaa">榜单</h2>
			<hr>
			<ul>
				<li>
					<h3>音乐飙升榜</h3>
					<?php
						$rest=mysql_query($sql);
						while($row=mysql_fetch_row($rest)){
							$id = $row[0];     //row[i]该行的第几个字段（即第几列）
							$songName = $row[1];
					?>
					<?php
						echo "<p>";
						echo "<span>$id</span>";
						echo "<a title='$songName' href='detail.php?id=$id'>$songName</a>";
						echo "</p>";
						}
					?>
				</li>
				<li>
					<h3>音乐新歌榜</h3>
					<?php
						$rest=mysql_query($sql2);
						while($row=mysql_fetch_row($rest)){
							$id = $row[0];     //row[i]该行的第几个字段（即第几列）
							$songName = $row[1];
					?>
					<?php
						echo "<p>";
						echo "<span>$id</span>";
						echo "<a title='$songName' href='detail.php?id=$id'>$songName</a>";
						echo "</p>";
						}
					?>
				</li>
				<li>
					<h3>原创歌曲榜</h3>
					<?php
						$rest=mysql_query($sql3);
						while($row=mysql_fetch_row($rest)){
							$id = $row[0];     //row[i]该行的第几个字段（即第几列）
							$songName = $row[1];
					?>
					<?php
						echo "<p>";
						echo "<span>$id</span>";
						echo "<a title='$songName' href='detail.php?id=$id'>$songName</a>";
						echo "</p>";
						}
					?>
				</li>
			</ul>
		</div>
		
		<!-- 商城推荐 -->
		<div class="shop">
			<h2 id="bbb">商城浏览
			<div class="se-kl">
				<div class="se-info">距离八折优惠结束还剩</div>
				<div class="se-count">
					<div class="se-day"></div>
					<div class="se-hour"><span class="se-txt">00</span></div>
					<div class="se-min"><span class="se-txt">00</span></div>
					<div class="se-sec"><span class="se-txt">00</span></div>
				</div>
			</div>
			</h2>
			<!-- 秒杀倒计时 -->
			<hr>
			<ul>
				<?php
					$rest=mysql_query($sql5);
					while($row=mysql_fetch_row($rest)){
						$id = $row[0];
						$songName = $row[1];
						$img = $row[6];
				?>
				<?php
					echo "<li>";
					echo "	<div id='$id'>";
					echo "		<img src='$img'>";
					echo "	</div>";
					echo "	<a title='$songName' href='shopDetail.php?id=$id'>$songName</a>";
					echo "</li>";
					}
				?>
			</ul>
		</div>
		
		<!-- 专辑分类 -->
		<div class="coverAlbum">
			<h2 id="ccc">专辑</h2>
			<hr>
			<ul>
				<?php
					$rest=mysql_query($sql3);
					while($row=mysql_fetch_row($rest)){
						$id = $row[0];
						$songName = $row[1];
						$singer = $row[2];
						$img = $row[6];
				?>
				<?php
					echo "<li>";
					echo "	<div class='ico_play'></div>";
					echo "	<div class='coverimg'>";
					echo "		<img src='$img'>";
					echo "	</div>";
					echo "	<a title='$songName' href='detail.php?id=$id'>$songName</a>";
					echo "	<p>$singer</p>";
					echo "</li>";
					}
				?>
			</ul>
		</div>
		
		<!-- 精彩推荐 -->
		<div class="recommed">
			<h2 id="ddd">精彩推荐</h2>
			<hr>
			<div class="leftBtn"></div>
			<div class="wonderful">
				<img src="images/cover/recom1.jpg">
				<img src="images/cover/recom2.jpg" class="reco2">
			</div>
			<div class="rightBtn"></div>
		</div>
		
		<!-- MV -->
		<div class="mvplayer">
			<h2 id="eee">MV</h2>
			<hr>
			<ul>
				<?php
					$rest=mysql_query($sql4);
					while($row=mysql_fetch_row($rest)){
						$id = $row[0];
						$songName = $row[1];
						$singer = $row[2];
						$img = $row[6];
				?>
				<?php
					echo "<li>";
					echo "	<div class='ico_play'></div>";
					echo "	<div class='coverimg'>";
					echo "		<img src='$img'>";
					echo "	</div>";
					echo "	<a title='$songName' href='detail.php?id=$id'>$songName</a>";
					echo "	<p>$singer</p>";
					echo "</li>";
					}
				?>
			</ul>
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
<script>
	var	playlist = [
		{title:"Gravity",artist:"Jessica",mp3:"http://p2.music.126.net/lkK28FliZQJwQ5r1XAZ-KA==/3285340747760477.mp3",cover:"http://p4.music.126.net/7VJn16zrictuj5kdfW1qHA==/3264450024433083.jpg?param=106x106",},
		{title:"-エンディング- 世界の约束 ~ 人生のメリーゴーランド",artist:"久石譲",mp3:"",cover:"http://p4.music.126.net/KLw_TLTRUe9pClPv4vlEtQ==/936783906865219.jpg?param=106x106",},
		{title:"Luv Letter",artist:"DJ OKAWARI",mp3:"http://p2.music.126.net/hpNIN9n-_GeBCv0jMSIxww==/3172091046155063.mp3",cover:"http://p4.music.126.net/YXY1vPG5rtdV7w_cWDnNWw==/884007348732141.jpg?param=106x106",},
		{title:"Flower Dance",artist:"DJ OKAWARI",mp3:"http://p2.music.126.net/lEtKDG2hAnhw4V2z4dxMpQ==/3086329139187024.mp3",cover:"http://p3.music.126.net/P1ac-TWkFzjDqcvl5_oK7Q==/881808325476577.jpg?param=106x106",},
		{title:"먼저 말해줘 (Farewell)",artist:"金泰妍",mp3:"http://p2.music.126.net/bjngndk8YaiOpID7Fl-EgQ==/3344714372820105.mp3",cover:"http://p3.music.126.net/Oiw-e2oZ_Mj52e4copv7WQ==/3413983604265136.jpg?param=106x106",},
		{title:"마음길",artist:"Jessica",mp3:"http://p2.music.126.net/5GCZvneHLGp-jTOoqzaL-g==/5761440929559203.mp3",cover:"http://p4.music.126.net/EsS7Sriv-Ho4kTV6ecqgIw==/2459607511395665.jpg?param=106x106",},
		{title:"울컥",artist:"Krystal",mp3:"http://p2.music.126.net/8Sd3wLlNvspQJeyYgO1h3Q==/2538772348755620.mp3",cover:"http://p4.music.126.net/HC1ZPOlaooXxNZdsiiOi8A==/6639950720797133.jpg?param=106x106",},
		{title:"SHAKE THE WORLD",artist:"G-Dragon",mp3:"http://p2.music.126.net/bZi5Cnr6ourHHhdxSQo7Ng==/6652045349600169.mp3",cover:"http://p3.music.126.net/O-xfpcLtMByG3gXEOyhf6Q==/1902155116188033.jpg?param=106x106",},
		{title:"잊어버리지마",artist:"Crush",mp3:"http://p2.music.126.net/VmFWlVqD-Aefv-qafGoU2Q==/6631154628890002.mp3",cover:"http://p4.music.126.net/_mSHo891adnUsAyF3Rg7WQ==/6664139977735905.jpg?param=106x106",},
		{title:"들리나요...",artist:"金泰妍",mp3:"http://p2.music.126.net/ggjq7dAKAYieKWAHio8IXQ==/5725157045876751.mp3",cover:"http://p4.music.126.net/2zWUKyXGY5yyd1-aO2DRxA==/569547023192127.jpg?param=106x106",},
		{title:"12월 24일 (D.ear Cover)",artist:"IU",mp3:"http://p2.music.126.net/L_fV92D5ALuJq0VurUaRZw==/7975857348596951.mp3",cover:"http://p3.music.126.net/FjM0XL9lW_H4lZaSMI3HJw==/7697680908005337.jpg?param=106x106",},
		{title:"너랑 나",artist:"IU",mp3:"http://p2.music.126.net/_2i4FVQJ8RpXKs445iz8fg==/1413971964613726.mp3",cover:"http://p3.music.126.net/aJkrJm0p2pW_5rSCxVbDAw==/3275445140711469.jpg?param=106x106",},
		{title:"나의 옛날이야기",artist:"IU",mp3:"http://p2.music.126.net/_VueJD6ndr8BL1J3J60HqQ==/6001134464694369.mp3",cover:"http://p4.music.126.net/vvep8oWbYOhpWchNu4C8qg==/6022025185715205.jpg?param=106x106",},
		{title:"THIS COULD B US",artist:"Prince",mp3:"http://p2.music.126.net/qFPTdQnQ-MdGhkVaq4P7bw==/3335918279103131.mp3",cover:"http://p4.music.126.net/2I1puY4RWneNmVhWLtE-nA==/7735064302586287.jpg?param=106x106",},
		{title:"Bila",artist:"Candy",mp3:"http://p2.music.126.net/iH1HT5Giq9N1lma9A7wHIg==/6041816395113477.mp3",cover:"http://p3.music.126.net/fIv14Wd9nlpmAoUqPGEhAA==/3405187512278988.jpg?param=106x106",},
		{title:"그대라는 한 사람",artist:"Jessica",mp3:"http://p2.music.126.net/N5MyzQh73z5KRqhmQe_WPg==/5675679022587512.mp3",cover:"http://p3.music.126.net/DkVjogF-Ga8_FX0Kf7p7Pw==/2328765627693725.jpg?param=106x106",},
		{title:"그리고 하나",artist:"金泰妍",mp3:"http://p2.music.126.net/F2qApXV5v2g_MpZ2MZdRNA==/2791660022930910.mp3",cover:"http://p3.music.126.net/M8AAx8RvouJiwffq8mJLjw==/2261695418357199.jpg?param=106x106",},
		{title:"만약에",artist:"金泰妍",mp3:"http://p2.music.126.net/_W3MHbGYREJYhooqUCFw0w==/7936274929553895.mp3",cover:"http://p4.music.126.net/3-Xl4UGcpgl2I3YbbC3QFg==/2933497024962579.jpg?param=106x106",},
		{title:"사랑인걸요",artist:"Sunny",mp3:"http://p2.music.126.net/Sivjnm7WQUfWvMp3R5rzkA==/2085773557903270.mp3",cover:"http://p3.music.126.net/XvyFir715vf0xbVpI7L34g==/583840674353190.jpg?param=106x106",},
		{title:"쌍둥이자리 (Gemini)",artist:"金泰妍",mp3:"http://p2.music.126.net/r7vM1JwsKhqqli8faUsivA==/3415083116322530.mp3",cover:"http://p4.music.126.net/Oiw-e2oZ_Mj52e4copv7WQ==/3413983604265136.jpg?param=106x106",},
		{title:"I",artist:"金泰妍",mp3:"http://p2.music.126.net/RQET5JRaaUfnSVW15Qpwhg==/3427177744227312.mp3",cover:"http://p4.music.126.net/Oiw-e2oZ_Mj52e4copv7WQ==/3413983604265136.jpg?param=106x106",},
		{title:"美好的旧时光 (In My Heart)",artist:"G.E.M.邓紫棋",mp3:"",cover:"http://p4.music.126.net/4AlMpHmXuNSBf3Nn6xj2WQ==/2444214348569851.jpg?param=106x106",},
		{title:"저 높은곳에 펼쳐",artist:"YG Family",mp3:"http://p2.music.126.net/exc30s0WC0uSMFCGriIorA==/5632798069157260.mp3",cover:"http://p3.music.126.net/GocfGJGMdvfyPxOoFHZNHg==/526666069716184.jpg?param=106x106",},
		{title:"回电我",artist:"卫兰",mp3:"http://p2.music.126.net/Yu0eLWs57kEuA8DLB-ef5g==/2750978092718675.mp3",cover:"http://p3.music.126.net/gFEst-n0ykOFL3Uf_x-O0Q==/1666859627714552.jpg?param=106x106",},
		{title:"BAD BOY",artist:"BIGBANG",mp3:"http://p2.music.126.net/aeePqXtZZjDyPwSGckGAwQ==/7897792023496393.mp3",cover:"http://p4.music.126.net/DACbuAsZkYFpDFJGhGXTsQ==/5649290743585546.jpg?param=106x106",},
		{title:"你知道我在等你们分手吗?",artist:"卫兰",mp3:"http://p2.music.126.net/LPJgXdWZDN4wpG5ls7Rhvg==/6642149743618917.mp3",cover:"http://p3.music.126.net/kfoJciI85e1e6p4jawa4yQ==/4438728441347732.jpg?param=106x106",},
		{title:"Can't Help Falling in Love",artist:"Elvis Presley",mp3:"http://p2.music.126.net/EyHtAORjTU_H42LKLpjEcg==/2086873069529079.mp3",cover:"http://p3.music.126.net/cSvhoo3M8xDVOA6J5BiBGg==/1728432278863915.jpg?param=106x106",},
		{title:"Mad World",artist:"Adam Lambert",mp3:"http://p2.music.126.net/FlGczNX1KXKfJKGdESpJMQ==/2002210674197433.mp3",cover:"http://p3.music.126.net/Scvgjpqap-i855331pQZxg==/1760318116076551.jpg?param=106x106",},
		{title:"For All Time",artist:"Michael Jackson",mp3:"http://p2.music.126.net/UMIJ9QjSJRbm7NTSUIlA_g==/5648191231957298.mp3",cover:"http://p3.music.126.net/nGFJF1DBUNUSvGHLkub8YQ==/2535473814012575.jpg?param=106x106",},
		{title:"贝加尔湖畔",artist:"李健",mp3:"http://p2.music.126.net/vXnnAZFGZ30g5eCK_ccnUA==/1207263767307060.mp3",cover:"http://p4.music.126.net/aSxiiy01L3Q35IqsaAUgvQ==/100055558133714.jpg?param=106x106",},
		{title:"The Long And Winding Road",artist:"The Beatles",mp3:"http://p2.music.126.net/2ZjEbGJ85XkhL4D2W2jqig==/2008807743950444.mp3",cover:"http://p3.music.126.net/M_Fq_76xXkZI4eeCe7E6xg==/1758119092823101.jpg?param=106x106",},
		{title:"Fix You",artist:"Coldplay",mp3:"http://p2.music.126.net/uicbTn9oi070td-b-K8yAw==/2030797976512403.mp3",cover:"http://p4.music.126.net/-dry4FZ9bwTK4ZxUgy_mZw==/1731730813754588.jpg?param=106x106",},
		{title:"Speed Of Sound",artist:"Coldplay",mp3:"http://p2.music.126.net/XGEBBSDsq8bKKCZz1j-pKA==/2093470139295642.mp3",cover:"http://p4.music.126.net/-dry4FZ9bwTK4ZxUgy_mZw==/1731730813754588.jpg?param=106x106",},
		{title:"Storm",artist:"Perry",mp3:"http://p2.music.126.net/_z-I1TmrKCJxRUaMeSqEdA==/6649846326093096.mp3",cover:"http://p4.music.126.net/gVN81NmJZVrxayKi1bP9QQ==/6627856093537433.jpg?param=106x106",},
		{title:"Watch Me (Whip / Nae Nae)",artist:"Silento",mp3:"http://p2.music.126.net/GDKUQnS0vigzXuuFUPhsXw==/7738362836841506.mp3",cover:"http://p3.music.126.net/zqIbO5mzddeRoGHzAfey5A==/7722969674031059.jpg?param=106x106",},
		{title:"两忘烟水里",artist:"关菊英",mp3:"http://p2.music.126.net/Ret3MJRTBPir09D-tXKiuw==/1155586720801612.mp3",cover:"http://p4.music.126.net/d5ryd0uwq29KWk3bRZ1wsA==/45079976751142.jpg?param=106x106",},
		{title:"怀念着你",artist:"许冠英",mp3:"http://p2.music.126.net/bABQ-2zcKnZt-7e6G3709Q==/1108307720806903.mp3",cover:"http://p3.music.126.net/d5ryd0uwq29KWk3bRZ1wsA==/45079976751142.jpg?param=106x106",},
		{title:"니가 뭔데 (Who You?)",artist:"G-Dragon",mp3:"http://p2.music.126.net/3lXe3mIy_zsUns10IrTH0Q==/3405187514546500.mp3",cover:"http://p3.music.126.net/iYG3tZ2xSKrzf65BaDtEJQ==/7929677860524772.jpg?param=106x106",},
		{title:"Trap Queen",artist:"Fetty Wap",mp3:"http://p2.music.126.net/80BvS6ksXqWtiBzrH44cSw==/7771348185439540.mp3",cover:"http://p4.music.126.net/Nn8kTtc14uWJw_UWbEc5mg==/7909886650478099.jpg?param=106x106",},
		{title:"Can't Feel My Face",artist:"The Weeknd",mp3:"http://p2.music.126.net/3hgLxYkHD6jXf19ptDq8sg==/2933497025034124.mp3",cover:"http://p3.music.126.net/1ODgbpkXF6O5KVholm2FZw==/7952767603909010.jpg?param=106x106",},
		{title:"Sugar",artist:"Maroon 5",mp3:"http://p2.music.126.net/PyGLVH9skbsJofDCrSFMQQ==/1393081240556825.mp3",cover:"http://p4.music.126.net/SwbJDnhHO0DUDWvDXJGAfQ==/6655343883051583.jpg?param=106x106",},
		{title:"A-G-A-I-N",artist:"篠崎愛",mp3:"http://p2.music.126.net/6UuX1yFaRLBB_EHYd3NWeQ==/2927999465678649.mp3",cover:"http://p4.music.126.net/y4jE_gHuX-JOiNm1AjNhjg==/7821925720753715.jpg?param=106x106",},
		{title:"微熱案内人 (Acoustic Piano Version)",artist:"篠崎愛",mp3:"http://p2.music.126.net/L5FN9EVHfGrbXPspxxi64Q==/2942293116835737.mp3",cover:"http://p3.music.126.net/y4jE_gHuX-JOiNm1AjNhjg==/7821925720753715.jpg?param=106x106",},
		{title:"Rainy blue",artist:"篠崎愛",mp3:"http://p2.music.126.net/bJ47RN7Lq-vn9PuY0XpGrg==/2945591651716272.mp3",cover:"http://p3.music.126.net/y4jE_gHuX-JOiNm1AjNhjg==/7821925720753715.jpg?param=106x106",},
		{title:"LOSER",artist:"BIGBANG",mp3:"http://p2.music.126.net/TrhAlAzpmOJeRfZmF1Kk1A==/7957165650487044.mp3",cover:"http://p4.music.126.net/18ZF3M8ZMjeBzuRnnNvBKA==/2889516558887956.jpg?param=106x106",},
		{title:"No Promises",artist:"Shayne Ward",mp3:"http://p2.music.126.net/nzMSn6i8febqE9QWtK6Mlw==/1990116046286526.mp3",cover:"http://p4.music.126.net/qZFNCSJTRy10c1t6T43f7g==/919191720872374.jpg?param=106x106",},
		{title:"Morning",artist:"卫兰",mp3:"http://p2.music.126.net/X1F5OaNuu-2Rg_waRVA0yw==/3212772976369502.mp3",cover:"http://p3.music.126.net/xqwP_U1CVaJWK_WrA7_l5Q==/2248501278845535.jpg?param=106x106",},
		{title:"BLACK -JPN-",artist:"G-Dragon",mp3:"http://p2.music.126.net/9fBn2YT_swcGzjaGzL-U-Q==/5782331650524910.mp3",cover:"http://p4.music.126.net/O-xfpcLtMByG3gXEOyhf6Q==/1902155116188033.jpg?param=106x106",},
		{title:"THAT XX",artist:"G-Dragon",mp3:"http://p2.music.126.net/7JojFEF2HpPes-Ma-yIugA==/3273246122007103.mp3",cover:"http://p3.music.126.net/O-xfpcLtMByG3gXEOyhf6Q==/1902155116188033.jpg?param=106x106",},
		{title:"죽을 만큼 아파서",artist:"MC 梦",mp3:"http://p2.music.126.net/gYFkBWCy2R-D6_1L91c_5Q==/5773535557574782.mp3",cover:"http://p4.music.126.net/sMvNgKL0EwlsomFrT1lOjA==/5796625301757325.jpg?param=106x106",},
		{title:"Butterfly",artist:"G-Dragon",mp3:"http://p2.music.126.net/5-D0ymnq8SrgI7WP_EnBzQ==/3298534892574719.mp3",cover:"http://p4.music.126.net/5BdnSRhKuy8oNa6oH4UHzw==/798245441810786.jpg?param=106x106",},
		{title:"소년이여",artist:"G-Dragon",mp3:"http://p2.music.126.net/zWsJPmHVa70FyoLeL85ByQ==/1364493976508846.mp3",cover:"http://p4.music.126.net/5BdnSRhKuy8oNa6oH4UHzw==/798245441810786.jpg?param=106x106",},
		{title:"BLUE",artist:"BIGBANG",mp3:"http://p2.music.126.net/db2Apbz6ijvxzh26gnToaw==/7998947093790162.mp3",cover:"http://p4.music.126.net/DACbuAsZkYFpDFJGhGXTsQ==/5649290743585546.jpg?param=106x106",},
		{title:"거짓말",artist:"BIGBANG",mp3:"http://p2.music.126.net/gHe4rsAUsWA1PyTsziay0g==/7960464187509860.mp3",cover:"http://p3.music.126.net/AZY9h8NpSotAJqu2aQbTlA==/6653144859773779.jpg?param=106x106",},
		{title:"再度重相逢",artist:"伍佰",mp3:"http://p2.music.126.net/QAthGw9coWJN-OjY9Wx9Kw==/7964862233065975.mp3",cover:"http://p3.music.126.net/1TOMfRL4qxJEqsi9h6qXKQ==/51677046517806.jpg?param=106x106",},
		{title:"TMD我爱你",artist:"李宇春",mp3:"http://p2.music.126.net/8EtdHYZd9GSQzGh3xo4ajw==/3187484209003594.mp3",cover:"http://p3.music.126.net/XMtajjQSdUXXGsFZvkRVgQ==/47279000006723.jpg?param=106x106",},
		{title:"暧昧",artist:"杨丞琳",mp3:"http://p2.music.126.net/-BQcSG5fAqw3tsCGXkDCWQ==/5505254720365750.mp3",cover:"http://p4.music.126.net/Z8jDSXNrj9A31WYkapNMuQ==/3180887139235475.jpg?param=106x106",},
		{title:"笔记",artist:"周笔畅",mp3:"http://p2.music.126.net/jYl58Zsu1viU-d-RhSB37w==/2011006767211601.mp3",cover:"http://p3.music.126.net/9WvlVAqDesQshpIuZ_Knew==/112150186046307.jpg?param=106x106",},
		{title:"Love me tender",artist:"Elvis Presley",mp3:"http://p2.music.126.net/yYTgjVEazc1doKKaC24X5w==/1345802232434941.mp3",cover:"http://p4.music.126.net/S3bqyf6bjoJzo7gyfIYTFQ==/5757042883120439.jpg?param=106x106",},
		{title:"沉默是金",artist:"张国荣",mp3:"http://p2.music.126.net/VkRVLNB6_EirMRQQ2haM2Q==/1032441418489686.mp3",cover:"http://p3.music.126.net/cmvsHFnVKXO409hZdrbacA==/102254581395221.jpg?param=106x106",},
		{title:"风继续吹",artist:"张国荣",mp3:"http://p2.music.126.net/uLdeqTZsAdxRSW08wnM9gw==/7949469070463566.mp3",cover:"http://p4.music.126.net/5BhQJrnd5LsP78XSJI8q4Q==/2306775395096470.jpg?param=106x106",},
		{title:"追",artist:"张国荣",mp3:"http://p2.music.126.net/-QRwWG0o2lL6xm60vlbOmw==/2797157581107175.mp3",cover:"http://p3.music.126.net/UI_5fJZa9AHRfJ1AywjSog==/78065325577772.jpg?param=106x106",},
		{title:"左右手",artist:"张国荣",mp3:"http://p2.music.126.net/QkoQxYfzsNw3bQpLo_CcZQ==/1083018953367577.mp3",cover:"http://p4.music.126.net/ZSWk8X3Xx9I3QhKmRKf7kA==/120946279070247.jpg?param=106x106",},
		{title:"我",artist:"张国荣",mp3:"http://p2.music.126.net/YrLqugQC1onbTHHW0dad-w==/1119302837084065.mp3",cover:"http://p3.music.126.net/Sbhanu6TSPEOq655lj34Gg==/98956046505532.jpg?param=106x106",},
		{title:"追族",artist:"张国荣",mp3:"http://p2.music.126.net/0AU3bhIp2mSMY0uRWCeb6Q==/7971459303146759.mp3",cover:"http://p3.music.126.net/1odRfg3HXWmYw02EMXKRKQ==/116548232557498.jpg?param=106x106",},
		{title:"平凡之路",artist:"朴树",mp3:"http://p2.music.126.net/at0wmUoxoCMqDJbJt1QFeQ==/5935163767130356.mp3",cover:"http://p4.music.126.net/F2fqWwTTT2DAOKPQKQ-G0A==/5892282813545901.jpg?param=106x106",},
		{title:"Uptown Funk",artist:"Mark Ronson",mp3:"http://p2.music.126.net/ru4rRgSHFFixWfQZVtPSMQ==/3249056861081712.mp3",cover:"http://p4.music.126.net/G2nCsXpMc81lcUY-pOHr9Q==/2528876745541310.jpg?param=106x106",},
	];
  var isRotate = true;
  var autoplay = false;
</script>
<script src="js/player.js"></script>
<script>
	function run(enddate) {
		getDate(enddate);
		setInterval("getDate('" + enddate + "')", 500);
	}
	
	function bgChange(){
		var lis= $('.lib');
		for(var i=0; i<lis.length; i+=2)
		lis[i].style.background = 'rgba(246, 246, 246, 0.5)';
	}
	
	window.onload = bgChange;
	
	function getDate(enddate) {
		var oDate = new Date(); //获取日期对象
		var nowTime = oDate.getTime(); //现在的毫秒数
		var enddate = new Date(enddate);
		var targetTime = enddate.getTime(); // 截止时间的毫秒数
		var second = Math.floor((targetTime - nowTime) / 1000); //截止时间距离现在的秒数
		var day = Math.floor(second / 24 * 60 * 60); //整数部分代表的是天；一天有24*60*60=86400秒 ；
			second = second % 86400; //余数代表剩下的秒数；
		var hour = Math.floor(second / 3600); //整数部分代表小时；
			second %= 3600; //余数代表 剩下的秒数；
		var minute = Math.floor(second / 60);
			second %= 60;
		var spanH = $('.se-txt')[0];
		var spanM = $('.se-txt')[1];
		var spanS = $('.se-txt')[2];
			spanH.innerHTML = tow(hour);
			spanM.innerHTML = tow(minute);
			spanS.innerHTML = tow(second);
	}
	
	function tow(n) {
		return n >= 0 && n < 10 ? '0' + n : '' + n;
	}
	
	$(function(){
		var num1 = 6,
			num2 = 1;
		var oDate = new Date();
		var nowTime = oDate.getTime(); //现在的毫秒数
			oDate.setDate(oDate.getDate() + 1); // 设定截止时间为第二天
		var targetDate = new Date(oDate.toLocaleDateString());
		run(targetDate);
		
		//榜单鼠标移入移出事件
	    $('.classification p').on({
		  mouseover : function(){
			$(this).addClass('activeSpan');
			$(this).children('a').addClass('activeSpan');
			$(this).children('span').addClass('activeSpan');
		  },
		  mouseout : function(){
			$(this).removeClass('activeSpan');
			$(this).children('a').removeClass('activeSpan');
			$(this).children('span').removeClass('activeSpan');
		  } 
		});
		
		//左右按钮的显示隐藏
		$('.recommed').on({
		  mouseover : function(){
			$('.leftBtn').show();
			$('.rightBtn').show();
		  },
		  mouseout : function(){
			$('.leftBtn').hide();
			$('.rightBtn').hide();
		  } 
		}) ;
		
		//左点击按钮图片路径由大到小
		$('.leftBtn').click(function(){
			var now = $('.wonderful').find('img').eq(0).attr('src').substr(18,19);
			$('.wonderful').find('img').eq(0).attr('src','images/cover/recom'+num1+'.jpg');
			$('.wonderful').find('img').eq(1).attr('src','images/cover/recom'+now);
			num1--;
			if(num1 == 0){
				num1 = 6;
			}
		})
		
		//右点击按钮图片路径由小到大
		$('.rightBtn').click(function(){
			var now = $('.wonderful').find('img').eq(1).attr('src').substr(18,19);
			$('.wonderful').find('img').eq(0).attr('src','images/cover/recom'+now);
			$('.wonderful').find('img').eq(1).attr('src','images/cover/recom'+num2+'.jpg');
			num2++;
			if(num2 == 7){
				num2 = 1;
			}
		})
		
		for(var i = 0;i < $('.classification').find('li').eq(0).find('p').length;i++){
			var num = i+1;
			$('.classification').find('li').eq(0).find('p').eq(i).find('span').eq(0).html(num);
			$('.classification').find('li').eq(1).find('p').eq(i).find('span').eq(0).html(num);
			$('.classification').find('li').eq(2).find('p').eq(i).find('span').eq(0).html(num);
		}
		
	});
	
</script>
</body>
</html>
