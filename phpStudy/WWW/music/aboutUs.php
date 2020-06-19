<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>话题中心</title>
<link rel="stylesheet" type="text/css" href="css/nav.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" href="css/aboutUs.css">
<link rel="stylesheet" href="css/accost.css">
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
		
		<!-- 主体 -->
		<div class="aboutUs_content">
			<section id="accosttype">
				<section id="accosttypebox">
					<ul>
						<li>
							<a class="typename topictype" href="accost.php">
								<b></b><span>话题</span>
								<i>
									<em></em>
								</i>
							</a>
						</li>
						<li>
							<a class="typename findtype">
								<b></b><span>论坛</span>
								<i>
									<em></em>
								</i>
							</a>
						</li>
					</ul>
				</section>
			</section>
	
			<section id="topicpublish">
				<section id="publishbox">
					<p>话题中心</p>
					<p class="psecondline">参与热门话题讨论，把你的思想晒出来看看<span>参与人数：</span><em>320,593,292</em>
						<button onclick="publishtopic(this)" class="topicbtn">+发布话题</button>					
					</p>
				</section>
				<section id="publishtopic">
					<form>
					<p id="publishtip"><span>发布话题</span><em onclick="closetopic()"></em></p>
					
					<div id="publishthumb">
							<img id="thumb_url" src='img/nopic.jpg'>
							<input type="hidden"  id="picurl" name="thumb" value=""/> 
							<input type="hidden" name="oldPic" value="" />
							<button class="btn btn-success" id="publishimage"  type="button" >选择话题主图</button>
					</div>
					<p id="publishtitle">
						<input type="text" name="topicname" placeholder="请输入话题标题"/>
					</p>
					<div id="publishcontentbox">
						<div id="topiccontent">
							<textarea id="publishcontent" name="content"></textarea>
						</div>
					</div>
					<p id="publishsubmit">
						<button type="submit">确定发布</button>
					</p>
					</form>
				</section>
			</section>
	
			<section id="topicbigbox">
				<section id="topicbox">
					<p id="topictype">
						<a class="topnews topictitle" href="">最新</a>
						<a class="tophots topictitle" href="">热门</a>
						<a class="topmine" href="">我参与的话题>></a>
					</p>
					<ul id="topiclist">
						<li>
							<a href="">
								<div class="topic">
									<div class="topicimg">
										<img src="img/accost/firstperson.jpg"/>
									</div>
									<div class="topiccontent">
										<h3>【第<span>21</span>期】动听的歌打动听懂它的人</h3>
										<p>
											陶帅，28岁，坐标北京，学历本科，独生子女，父母退休，在某上市公司做财务资金管理，东北妹子一枚
										喜欢唱歌，旅游，烹饪。</p>
									</div>
								</div>
								<div class="topicview">
									<p>
										1314<br/>
										在谈论
									</p>
								</div>
								<div class="viewdetail">
									查看详情
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="topic">
									<div class="topicimg">
										<img src="img/accost/1.jpg"/>
									</div>
									<div class="topiccontent">
										<h3>【第<span>62</span>期】和活泼可爱超级大美女一起听歌</h3>
										<p>
										   热爱cos，喜欢看动漫的二次元美少女一枚，希望另一半也能够支持自己的爱好，平时也喜欢出去郊游，喜欢汉服，希望和另一半学习汉元素，发扬中国传统文化。	
										</p>
									</div>
								</div>
								<div class="topicview">
									<p>
										1000<br/>
										人看过
									</p>
								</div>
								<div class="viewdetail">
									查看详情
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="topic">
									<div class="topicimg">
										<img src="img/accost/2.jpg"/>
									</div>
									<div class="topiccontent">
										<h3>【第<span>63</span>期】都市缺乏安全感的白领，带你听午夜电台</h3>
										<p>
											本人女，88年临沂人，160，不算瘦也算不上胖，比较慢热，平时喜欢宅在家里，也会跟好友一起出去疯玩。
										</p>
									</div>
								</div>
								<div class="topicview">
									<p>
										2314<br/>
										人看过
									</p>
								</div>
								<div class="viewdetail">
									查看详情
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="topic">
									<div class="topicimg">
										<img src="img/accost/3.jpg"/>
									</div>
									<div class="topiccontent">
										<h3>【第<span>37</span>期】这个夏天，有我这些歌，不孤单</h3>
										<p>
											1.爱干净。
										　　2.省吃俭用买来乐器，自学了钢琴、古筝、古琴、巴扬。会英语、日语、韩语。研究了健康学、心理学、生理学、教育学、家庭学、婚姻学、情感学、爱情学。爱好越剧、唱歌。
										</p>
									</div>
								</div>
								<div class="topicview">
									<p>
										1114<br/>
										人看过
									</p>
								</div>
								<div class="viewdetail">
									查看详情
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="topic">
									<div class="topicimg">
										<img src="img/accost/4.jpg"/>
									</div>
									<div class="topiccontent">
										<h3>【第<span>36</span>期】听对的歌遇上对的人</h3>
										<p>
											我是一个广西女孩（现在也在广西），是一个护士，22岁的射手座，体重90斤左右，身高不到158（我已经很努力了），第一次见会比较害羞，熟后就是逗比，我比较感性，泪点低笑点低.
										</p>
									</div>
								</div>
								<div class="topicview">
									<p>
										814<br/>
										人看过
									</p>
								</div>
								<div class="viewdetail">
									查看详情
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="topic">
									<div class="topicimg">
										<img src="img/accost/5.jpg"/>
									</div>
									<div class="topiccontent">
										<h3>【第<span>38</span>期】运动阳光，乐观向上型美女的专属歌单</h3>
										<p>女，94年，本科大三学生，因为是师范专业所以以后得工作会是老师。河南人，现在在信阳上学。
										</p>
									</div>
								</div>
								<div class="topicview">
									<p>
										990<br/>
										人看过
									</p>
								</div>
								<div class="viewdetail">
									查看详情
								</div>
							</a>
						</li>
					</ul>
					<div class="pagestyles">
						<p>
							<em>上一页</em>
							<span>1</span>
							<span>2</span>
							<span>3</span>
							<span>4</span>
							<span>5</span>
							<span>6</span>
							<span>7</span>
							<i>...</i>
							<span>100</span>
							<em>下一页</em>
						</p>
					</div>
				</section>
			</section>
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
</html>
