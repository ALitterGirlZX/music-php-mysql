<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>音乐商城</title>
<link rel="stylesheet" type="text/css" href="css/nav.css" />
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
<link rel="stylesheet" type="text/css" href="css/shop.css"/>
<link rel="stylesheet" href="css/iconfont.css">
</head>
<body style="overflow-y:hidden" class="demo1">
	<?php
		require_once("config.php");
		$tb = "shop";
		
		//连接数据库
		$con = mysql_connect("localhost","root","root")or die("连接数据库失败");
		
		//设置数据库字符集  
		mysql_query("SET NAMES UTF8");
		
		//查询数据库
		mysql_select_db($db, $con);
	
		//查询数据库
		//获取最新的1条数据
		$all = mysql_num_rows(mysql_query("select * from $tb"));
		$sql="select * from $tb limit 4,6";
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
		
		<!--导航结束 轮播开始-->
		<div class="lunbo">
			<div class = "caroursel poster-main" data-setting = '{
				"width":1000,
				"height":270,
				"posterWidth":640,
				"posterHeight":270,
				"scale":0.8,
				"dealy":"2000",
				"algin":"middle"
			}'>
				<ul class = "poster-list">
					<li class = "poster-item"><img src="images/shop/slunbo1.jpg" width = "100%" height="100%"></li>
					<li class = "poster-item"><img src="images/shop/slunbo2.jpg" width = "100%" height="100%"></li>
					<li class = "poster-item"><img src="images/shop/slunbo3.jpg" width = "100%" height="100%"></li>
					<li class = "poster-item"><img src="images/shop/slunbo4.jpg" width = "100%" height="100%"></li>
					<li class = "poster-item"><img src="images/shop/slunbo5.jpg" width = "100%" height="100%"></li>
					<li class = "poster-item"><img src="images/shop/slunbo6.jpg"  width = "100%" height="100%"></li>
					<li class = "poster-item"><img src="images/shop/slunbo7.jpg"  width = "100%" height="100%"></li>
				</ul>
				<div class = "poster-btn poster-prev-btn"></div>
				<div class = "poster-btn poster-next-btn"></div>
			</div>
		</div>
	
		<!-- 部分商品展示 -->
		<div class="commodityClass1">
			<div class="commodityClass_cont">
				<h2>创意礼物</h2>
				<div class="control-box">
					<ul>
						<li class="prev">
							<img src="images/shop/left_02.png" alt="prev">
						</li>
						<li class="next">
							<img src="images/shop/right_02.png" alt="next">
						</li>
					</ul>
					<div class="bigbox">
						<div id="switcher">
							<div class="content_1">
								<?php
									$rest=mysql_query($sql);
									while($row=mysql_fetch_row($rest)){
										$id = $row[0];
										$shopName = $row[1];
										$img = $row[3];
								?>
								<?php
									echo "<div class='box' style='background-image:url($img);background-size:100%;'>";
									echo "	<div class='shadow'>";
									echo "		<a title='$shopName' href='shopDetail.php?id=$id'>$shopName</a>";
									echo "	</div>";
									echo "</div>";
									}
								?>
							</div>
							<div class="content_2"></div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		
		<!-- 商品分类 -->
		<div class="commodityClassification demo1">
			<div id="new_box">
				<div class="new_con">
					<div class="newtel">
						<ul class="new_telst">
							<li class="">演唱会</li>
							<li class="newon">歌剧演出</li>
							<li class="">LiveHouse</li>
							<p style="left: 166px;">
							</p>
						</ul>
						<div class="clear">
						</div>
					</div>
					<div class="new-wrap">
						<!--案例1-->
						<div class="new_lst" style="display: none;">
							<ul class="new_lst_cn">
								<li class="new_cnlf a">
								<p class="newlf_img"></p>
								<p class="newlf_tel">
									<a href="#">杨丞琳“青春住了谁”巡回演唱会</a>
								</p>
								<p class="newlf_tx">
									￥338起
								</p>
								</li>
								<li class="new_cnrf">
								<div class="newrf_lst">
									<dl>
										<dd>
										<p class="new_rq">
											<span>13</span>2019-6
										</p>
										<p class="newrf_tx">
											<a href="#">乐队的夏天HOT巡演—北京站</a>
											<span>2020.02.21 <br>凯迪拉克中心</span>
										</p>
										</dd>
										<dd>
										<p class="new_rq">
											<span>15</span>2019-5
										</p>
										<p class="newrf_tx">
											<a href="#">张杰【未·LIVE】全球巡回演唱会-南宁站</a>
											<span>2020.02.29 <br>南宁</span>
										</p>
										</dd>
										<dd>
										<p class="new_rq">
											<span>23</span>2019-4
										</p>
										<p class="newrf_tx">
											<a href="#">林奕匡PhilRomantics 巡回演唱会-顺德站</a>
											<span>2020.03.14 <br>佛山-演艺中心</span>
										</p>
										</dd>
										<dd>
										<p class="new_rq">
											<span>3</span>2019-4
										</p>
										<p class="newrf_tx">
											<a href="#">青花传情-周传雄巡回演唱会成都站</a>
											<span>2020.02.14 <br>成都-五粮液成都金融城演艺中心</span>
										</p>
										</dd>
										<dd>
										<p class="new_rq">
											<span>3</span>2019-4
										</p>
										<p class="newrf_tx">
											<a href="#">2020“末日浪漫大逃亡”</a>
											<span>2020.02.14 <br>深圳</span>
										</p>
										</dd>
										<dd>
										<p class="new_rq">
											<span>1</span>2019-3
										</p>
										<p class="newrf_tx">
											<a href="#">情人节演唱会“致亲爱的你”</a>
											<span>2020.02.14 <br>深圳-A8Live音乐现场</span>
										</p>
										</dd>
									</dl>
								</div>
								</li>
								<div class="clear">
								</div>
							</ul>
							<div class="new_lst_cont">
								<ul>
									<li>
										<div>
											<img src="images/shop/s1.jpg" >
										</div>
										<div>
											<h3>2020“末日浪漫大逃亡”</h3>
											<p>2020年，即将步入二十一世纪二零年代的崭新的我们，会怎样面对这个承载着恐惧、浪漫和虚无的世界末日？</p>
											<p><img src="images/shop/position.png" alt="" style="width: 30px;height: 30px;"> 深圳</p>
											<p style="margin-bottom: 30px;"><img src="images/shop/time.png" alt="" style="width: 30px;height: 30px;">2020.02.14</p>
											<p>
												<b>￥150起</b>
												<a href="">立即购买</a>
											</p>
										</div>
									</li>
									<li>
										<div>
											<img src="images/shop/s3.jpg" >
										</div>
										<div>
											<h3>“我有点紧张”新秀（中国新说唱2019殿军）全国巡演</h3>
											<p>票价：预售票160元（限量）现场票200元 VIP票220元（限量）★VIP票可享受演出前优先入场和演出后合影待遇★</p>
											<p><img src="images/shop/position.png" alt="" style="width: 30px;height: 30px;"> 深圳</p>
											<p style="margin-bottom: 30px;"><img src="images/shop/time.png" alt="" style="width: 30px;height: 30px;">2020.03.06</p>
											<p>
												<b>￥200起</b>
												<a href="">立即购买</a>
											</p>
										</div>
									</li>
									<li>
										<div>
											<img src="images/shop/s2.jpg" >
										</div>
										<div>
											<h3>2020情人节演唱会“致亲爱的你”—总有时光可回首，愿有情人终牵手</h3>
											<p>一晚的音浪满载爱情的力量,多少歌词写进心里，多少旋律触动情绪,这一晚你该听听爱情的声音</p>
											<p><img src="images/shop/position.png" alt="" style="width: 30px;height: 30px;"> 深圳-A8Live音乐现场</p>
											<p style="margin-bottom: 30px;"><img src="images/shop/time.png" alt="" style="width: 30px;height: 30px;">2020.02.14</p>
											<p>
												<b>￥180起</b>
												<a href="">立即购买</a>
											</p>
										</div>
									</li>
									<li>
										<div>
											<img src="images/shop/s4.jpg" >
										</div>
										<div>
											<h3>【深圳】Greg Laswell 2020 中国巡演</h3>
											<p>美国浪漫才子Greg Laswell 将于2020年3月下旬首次来华巡演，分别在北京、上海、广州、深圳、成都五地与乐迷们零距离接触</p>
											<p><img src="images/shop/position.png" alt="" style="width: 30px;height: 30px;"> 深圳</p>
											<p style="margin-bottom: 30px;"><img src="images/shop/time.png" alt="" style="width: 30px;height: 30px;">2020.03.20</p>
											<p>
												<b>￥240起</b>
												<a href="">立即购买</a>
											</p>
										</div>
									</li>
									<li>
										<div>
											<img src="images/shop/s5.jpg" >
										</div>
										<div>
											<h3>2020任贤齐【齐迹】演唱会-深圳站</h3>
											<p>任贤齐第一场演唱会"98齐迹"震撼上演,可谓是万人空巷,成为当时现象级的演出</p>
											<p><img src="images/shop/position.png" alt="" style="width: 30px;height: 30px;"> 深圳-华润深圳湾体育中心</p>
											<p style="margin-bottom: 30px;"><img src="images/shop/time.png" alt="" style="width: 30px;height: 30px;">2020.03.21</p>
											<p>
												<b>￥399起</b>
												<a href="">立即购买</a>
											</p>
										</div>
									</li>
									<li>
										<div>
											<img src="images/shop/s16.jpg" >
										</div>
										<div>
											<h3>【秀动呈献】2020洪辰《HER ART/HEART》新专辑巡演唱会</h3>
											<p>洪辰，华语流行女歌手、HungArtStudio厂牌主理人、独立音乐人。2011年快乐女声出道，从百万人中脱颖而出荣获杭州唱区冠军全国亚军，随后正式进入乐坛。</p>
											<p><img src="images/shop/position.png" alt="" style="width: 30px;height: 30px;">深圳-B10现场</p>
											<p style="margin-bottom: 30px;"><img src="images/shop/time.png" alt="" style="width: 30px;height: 30px;">2020.03.15</p>
											<p>
												<b>￥100起</b>
												<a href="">立即购买</a>
											</p>
										</div>
									</li>
								</ul>
							</div>
							<ul class="owenum">
								<li>&gt;</li>
								<li>3</li>
								<li>2</li>
								<li class="active">1</li>
								<li>&lt;</li>
							</ul>
						</div>
						<!--案例2-->
						<div class="new_lst" style="display: block;">
							<ul class="new_lst_cn">
								<li class="new_cnlf b">
								<p class="newlf_img"></p>
								<p class="newlf_tel">
									<a href="#">2020马克西姆跨界钢琴新年演奏会</a>
								</p>
								<p class="newlf_tx">
									￥280起
								</p>
								</li>
								<li class="new_cnrf">
								<div class="newrf_lst">
									<dl>
										<dd>
										<p class="new_rq">
											<span>26</span>2019-7
										</p>
										<p class="newrf_tx">
											<a href="#">新秀(2019中国新说唱殿军)全国巡演</a>
											<span>2020.03.26 <br>深圳</span>
										</p>
										</dd>
										<dd>
										<p class="new_rq">
											<span>25</span>2019-7
										</p>
										<p class="newrf_tx">
											<a href="#">【深圳】Greg Laswell 2020 中国巡演</a>
											<span>2020.03.20 <br>深圳</span>
										</p>
										</dd>
										<dd>
										<p class="new_rq">
											<span>24</span>2019-7
										</p>
										<p class="newrf_tx">
											<a href="#">2020任贤齐【齐迹】演唱会-深圳站</a>
											<span>2020.03.21 <br>深圳-华润深圳湾体育中心</span>
										</p>
										</dd>
										<dd>
										<p class="new_rq">
											<span>23</span>2019-7
										</p>
										<p class="newrf_tx">
											<a href="#">曹轩宾「我」2020年巡回演唱会 深圳站</a>
											<span>2020.03.28 <br>深圳-后青年 Hou Live</span>
										</p>
										</dd>
										<dd>
										<p class="new_rq">
											<span>19</span>2019-7
										</p>
										<p class="newrf_tx">
											<a href="#">Madilyn Bailey 2020中国巡演-深圳站</a>
											<span>2020.04.11 <br>深圳</span>
										</p>
										</dd>
										<dd>
										<p class="new_rq">
											<span>18</span>2019-7
										</p>
										<p class="newrf_tx">
											<a href="#">风靡爵士乐坛Karen Souza—爵士情调女王</a>
											<span>深圳-少年宫剧场 <br>2020.05.01</span>
										</p>
										</dd>
									</dl>
								</div>
								</li>
								<div class="clear">
								</div>
							</ul>
							<div class="new_lst_cont">
								<ul>
									<li>
										<div>
											<img src="images/shop/s6.jpg" >
										</div>
										<div>
											<h3>【跨乐LIVE】Madilyn Bailey 2020中国巡演-深圳站</h3>
											<p>拥有优质颜值的MADILYN BAILEY靠网络翻唱走红，她是美国创作女歌手兼知名油管主，大部分粉丝称她“麦姐”，听起来更加亲切。</p>
											<p><img src="images/shop/position.png" alt="" style="width: 30px;height: 30px;"> 深圳</p>
											<p style="margin-bottom: 30px;"><img src="images/shop/time.png" alt="" style="width: 30px;height: 30px;">2020.04.11</p>
											<p>
												<b>￥380起</b>
												<a href="">立即购买</a>
											</p>
										</div>
									</li>
									<li>
										<div>
											<img src="images/shop/s7.jpg" >
										</div>
										<div>
											<h3>林宥嘉idol世界巡回演唱会深圳站</h3>
											<p>2018年12月29日、30日林宥嘉idol世界巡回演唱会唱响首站小巨蛋，idol世界巡回演唱会正式起航！演唱会开场影片的音乐就让人惊喜万分</p>
											<p><img src="images/shop/position.png" alt="" style="width: 30px;height: 30px;">深圳-华润深圳湾体育中心“春茧” 体育馆</p>
											<p style="margin-bottom: 30px;"><img src="images/shop/time.png" alt="" style="width: 30px;height: 30px;">2020.05.16</p>
											<p>
												<b>￥380起</b>
												<a href="">立即购买</a>
											</p>
										</div>
									</li>
									<li>
										<div>
											<img src="images/shop/s8.jpg" >
										</div>
										<div>
											<h3>风靡爵士乐坛 Karen Souza —爵士情调女王凯伦索萨</h3>
											<p>来自阿根廷的呢喃之声,爵士女伶最性感代表嗓音,像是深陷罂粟般的迷恋无法转移</p>
											<p><img src="images/shop/position.png" alt="" style="width: 30px;height: 30px;">深圳-少年宫剧场</p>
											<p style="margin-bottom: 30px;"><img src="images/shop/time.png" alt="" style="width: 30px;height: 30px;">2020.05.01</p>
											<p>
												<b>￥100起</b>
												<a href="">立即购买</a>
											</p>
										</div>
									</li>
									<li>
										<div>
											<img src="images/shop/s9.jpg" >
										</div>
										<div>
											<h3>曹轩宾「我」2020年巡回演唱会 深圳站</h3>
											<p>音乐人  「曹轩宾」，2020开启全新音乐旅程，「我」全国巡回演唱会正式启动.</p>
											<p><img src="images/shop/position.png" alt="" style="width: 30px;height: 30px;"> 深圳-后青年 Hou Live</p>
											<p style="margin-bottom: 30px;"><img src="images/shop/time.png" alt="" style="width: 30px;height: 30px;">2020.03.28</p>
											<p>
												<b>￥150起</b>
												<a href="">立即购买</a>
											</p>
										</div>
									</li>
									<li>
										<div>
											<img src="images/shop/s10.jpg" >
										</div>
										<div>
											<h3>【秀动呈献】丹麦蜜桃之声Virgin Suicide 2020巡演</h3>
											<p>这只乐队从音乐到人都犹如水蜜桃一般甜蜜，使看过现场的很多观众迅速爱上了他们，至今念念不忘。</p>
											<p><img src="images/shop/position.png" alt="" style="width: 30px;height: 30px;"> 深圳-B10现场</p>
											<p style="margin-bottom: 30px;"><img src="images/shop/time.png" alt="" style="width: 30px;height: 30px;">2020.02.23</p>
											<p>
												<b>￥120起</b>
												<a href="">立即购买</a>
											</p>
										</div>
									</li>
									<li>
										<div>
											<img src="images/shop/s17.jpg" >
										</div>
										<div>
											<h3>仙羽 “悬崖的花” TOUR 2020 深圳站</h3>
											<p>演出票务由秀动（www.showstart.com）提供  参演艺人：仙羽</p>
											<p><img src="images/shop/position.png" alt="" style="width: 30px;height: 30px;"> 深圳-B10现场</p>
											<p style="margin-bottom: 30px;"><img src="images/shop/time.png" alt="" style="width: 30px;height: 30px;">2020.03.21</p>
											<p>
												<b>￥148起</b>
												<a href="">立即购买</a>
											</p>
										</div>
									</li>
								</ul>
							</div>
							<ul class="owenum">
								<li>&gt;</li>
								<li>3</li>
								<li>2</li>
								<li class="active">1</li>
								<li>&lt;</li>
							</ul>
						</div>
						<!--案例3-->
						<div class="new_lst" style="display: none;">
							<ul class="new_lst_cn">
								<li class="new_cnlf c">
								<p class="newlf_img"></p>
								<p class="newlf_tel">
									<a href="#">新裤子「最后的乐队」巡回演唱会</a>
								</p>
								<p class="newlf_tx">
									￥388起
								</p>
								</li>
								<li class="new_cnrf">
								<div class="newrf_lst">
									<dl>
										<dd>
										<p class="new_rq">
											<span>6</span>2019-7
										</p>
										<p class="newrf_tx">
											<a href="#">林宥嘉idol世界巡回演唱会深圳站</a>
											<span>2020.05.16 <br>深圳-华润深圳湾体育中心“春茧” 体育馆</span>
										</p>
										</dd>
										<dd>
										<p class="new_rq">
											<span>6</span>2019-7
										</p>
										<p class="newrf_tx">
											<a href="#">丹麦蜜桃之声Virgin Suicide 2020巡演</a>
											<span>2020.02.23 <br>深圳-B10现场</span>
										</p>
										</dd>
										<dd>
										<p class="new_rq">
											<span>3</span>2019-7
										</p>
										<p class="newrf_tx">
											<a href="#">丹麦蜜桃之声Virgin Suicide 2020巡演</a>
											<span>2020.02.23 <br>深圳-B10现场</span>
										</p>
										</dd>
										<dd>
										<p class="new_rq">
											<span>28</span>2019-6
										</p>
										<p class="newrf_tx">
											<a href="#">丹麦蜜桃之声Virgin Suicide 2020巡演</a>
											<span>2020.02.23 <br>深圳-B10现场</span>
										</p>
										</dd>
										<dd>
										<p class="new_rq">
											<span>27</span>2019-6
										</p>
										<p class="newrf_tx">
											<a href="#">丹麦蜜桃之声Virgin Suicide 2020巡演</a>
											<span>2020.02.23 <br>深圳-B10现场</span>
										</p>
										</dd>
										<dd>
										<p class="new_rq">
											<span>26</span>2019-6
										</p>
										<p class="newrf_tx">
											<a href="#">丹麦蜜桃之声Virgin Suicide 2020巡演</a>
											<span>2020.02.23 <br>深圳-B10现场</span>
										</p>
										</dd>
									</dl>
								</div>
								</li>
								<div class="clear"></div>
							</ul>
							<div class="new_lst_cont">
								<ul>
									<li>
										<div>
											<img src="images/shop/s11.jpg" >
										</div>
										<div>
											<h3>【影响呈现】Suchmos Live in China 2020 深圳站</h3>
											<p>团员HSU身体抱恙，6月Suchmos仓促取消亚巡，怕是今年，让乐迷最伤心的一件事。所有的期待，可以推迟，但是绝对不会缺席！</p>
											<p><img src="images/shop/position.png" alt="" style="width: 30px;height: 30px;"> 深圳-B10现场</p>
											<p style="margin-bottom: 30px;"><img src="images/shop/time.png" alt="" style="width: 30px;height: 30px;">2020.02.11</p>
											<p>
												<b>￥280起</b>
												<a href="">立即购买</a>
											</p>
										</div>
									</li>
									<li>
										<div>
											<img src="images/shop/s12.jpg" >
										</div>
										<div>
											<h3>【秀动呈献】江小白✖️王齐铭2020「壹銘驚人」巡演 深圳站</h3>
											<p>王齐铭，来自重庆GO$H!MUSIC厂牌音乐人。2018年参加了综艺《中国新说唱》并进入全国12强</p>
											<p><img src="images/shop/position.png" alt="" style="width: 30px;height: 30px;">深圳-B10现场</p>
											<p style="margin-bottom: 30px;"><img src="images/shop/time.png" alt="" style="width: 30px;height: 30px;">2020.02.28</p>
											<p>
												<b>￥110起</b>
												<a href="">立即购买</a>
											</p>
										</div>
									</li>
									<li>
										<div>
											<img src="images/shop/s13.jpg" >
										</div>
										<div>
											<h3>大叫控2020“飞行模式”新专辑巡演 深圳站</h3>
											<p>2019年，来自北京的独立摇滚乐队——大叫控终于发行了乐队第一张正式全场专辑《Make Me High（飞行模式）》。</p>
											<p><img src="images/shop/position.png" alt="" style="width: 30px;height: 30px;">深圳-红糖罐上步店</p>
											<p style="margin-bottom: 30px;"><img src="images/shop/time.png" alt="" style="width: 30px;height: 30px;">2020.3.01</p>
											<p>
												<b>￥60起</b>
												<a href="">立即购买</a>
											</p>
										</div>
									</li>
									<li>
										<div>
											<img src="images/shop/s14.jpg" >
										</div>
										<div>
											<h3>时光宇宙——麻园诗人2020年音乐之旅 深圳站</h3>
											<p>2020，那么冷酷的时光机器，硬生生带我而来，新的一个十年，十年已后，你会相信吗？路过春秋都写在身上……新的不知酸甜和艰险的旅途心怀</p>
											<p><img src="images/shop/position.png" alt="" style="width: 30px;height: 30px;"> 深圳-HOU LIVE</p>
											<p style="margin-bottom: 30px;"><img src="images/shop/time.png" alt="" style="width: 30px;height: 30px;">2020.03.10</p>
											<p>
												<b>￥88起</b>
												<a href="">立即购买</a>
											</p>
										</div>
									</li>
									<li>
										<div>
											<img src="images/shop/s15.jpg" >
										</div>
										<div>
											<h3>【秀动呈献】「日落之后」2020出海部巡演 深圳站</h3>
											<p>乐队成立也有四年了，我们都成为了和上学时候不同的我们。但是做好乐队和作品的初心还在延续，我们等了很久，为了说一句我来了。现在我等到了，同样希望可以等到你们。</p>
											<p><img src="images/shop/position.png" alt="" style="width: 30px;height: 30px;"> 深圳-HOU LIVE</p>
											<p style="margin-bottom: 30px;"><img src="images/shop/time.png" alt="" style="width: 30px;height: 30px;">2020.03.14</p>
											<p>
												<b>￥120起</b>
												<a href="">立即购买</a>
											</p>
										</div>
									</li>
									<li>
										<div>
											<img src="images/shop/s18.jpg" >
										</div>
										<div>
											<h3>【秀动呈献】「春游要去动物园 Spring Reverb In The Zoom</h3>
											<p>伊坂幸太郎 曾出版过一部短篇小说集，名叫《一首朋克救地球》。其中收录了四个发生在不同时空的故事，作者以跳脱且天马行空般的推理方式构造了一个中二的、温情的同时又是残酷的一些平行世界。</p>
											<p><img src="images/shop/position.png" alt="" style="width: 30px;height: 30px;"> 深圳-HOU LIVE</p>
											<p style="margin-bottom: 30px;"><img src="images/shop/time.png" alt="" style="width: 30px;height: 30px;">2020.03.22</p>
											<p>
												<b>￥60起</b>
												<a href="">立即购买</a>
											</p>
										</div>
									</li>
								</ul>
							</div>
							<ul class="owenum">
								<li>&gt;</li>
								<li>3</li>
								<li>2</li>
								<li class="active">1</li>
								<li>&lt;</li>
							</ul>
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
<script src="js/jquery.carousel.js"></script>
<script type="text/javascript" src="js/sliderx.js"></script>
<script>
	Caroursel.init($('.caroursel'))
	$(document).ready(function(){
		//设计案例切换
		$('.new_telst li').mouseover(function(){
			var liindex = $('.new_telst li').index(this);
			$(this).addClass('newon').siblings().removeClass('newon');
			$('.new-wrap div.new_lst').eq(liindex).fadeIn(150).siblings('div.new_lst').hide();
			var liWidth = $('.new_telst li').width();
			$('.newtel .new_telst p').stop(false,true).animate({'left' : liindex * liWidth + 'px'},300);
		});
	});
</script>
</body>
</html>
