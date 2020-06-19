<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>详情页</title>
		<link rel="stylesheet" type="text/css" href="css/nav.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/Lyric.css"/>
	</head>
	<body>
	<div class="main">
		<?php
			require_once("config.php");
			$tb = "songlist";
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
		
		<!-- 封面 -->
		<div class="lyric">
			<?php
				$rest=mysql_query($sql);
				while($row=mysql_fetch_row($rest)){
					$id = $row[0];
					$songName = $row[1];
					$singer = $row[2];
					$createTime = $row[4];
					$lyric = $row[5];
					$img = $row[6];
					$lag = $row[8];
					$company = $row[7];
			?>
			<div class="lyricdetail">
				<?php echo "<div class='btns-bg' style='background:url($img) no-repeat'>"?>
					<div class="Btn"></div>
					<div class="Play">
						<audio id="audios" src="http://music.163.com/song/media/outer/url?id=504924216.mp3"></audio>
					</div>
				</div>
				<div class="musicInfo">
					<ul>
						<li>
							<?php echo "<h2>$songName</h2>"?>
						</li>
						<li><?php echo "<span>歌手：$singer</span>"?></li>
						<li><span>语种： <?php echo $lag;?></span></li>
						<li><span>唱片公司： <?php echo $company;?></span></li>
						<li><span>发行时间： <?php echo $createTime;?></span></li>
					</ul>
					<ul class="playmo">
						<li class="active"><img src="images/cover/play.png" ><span>播放</span></li>
						<li><img src="images/cover/favrite.png" alt=""><span>收藏</span></li>
						<li><img src="images/cover/talk.png" alt=""><span>评论</span></li>
						<li><img src="images/cover/commend.png" alt=""><span>分享</span></li>
					</ul>
				</div>
				<hr>
				<h4>歌词<img src="images/cover/copy.png" alt="点击复制歌词" onclick="copyText()" class="copy"></h4>
			</div>
			<div class="lyricoder">
				<h4>相关热门歌曲</h4>
				<ul>
					<li>
						<img src="images/cover/hotimage1.jpg" >
						<div>
							<p>总有些歌曲扣人心弦</p>
							<a href="">周深</a>
						</div>
					</li>
					<li>
						<img src="images/cover/hotimage10.jpg" >
						<div>
							<p>陪你度过几个春夏秋冬</p>
							<a href="">梁静茹</a>
						</div>
					</li>
					<li>
						<img src="images/cover/hotimage11.jpg" >
						<div>
							<p>花开后风吹来的味道</p>
							<a href="">蔡依林</a>
						</div>
					</li>
					<li>
						<img src="images/cover/hotimage2.jpg" >
						<div>
							<p>陪你度过几个春夏秋冬</p>
							<a href="">孙艺珍</a>
						</div>
					</li>
					<li>
						<img src="images/cover/hotimage3.jpg" >
						<div>
							<p>如夏日蝉鸣冬季温暖的茶</p>
							<a href="">周杰伦</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		
		<!-- 歌词 -->
		<div class="lyricContent">
			<?php
					echo "<p id='text'>$lyric</p>";
				}
			?>
		    <textarea id="input"></textarea>
		</div>
		
		<!-- 评论 -->
		<div class="lyricComment">
			<hr>
			<h3>评论</h3>
			<div class="owenRcommed">
				<textarea  name='test' onkeyup='textAreaChange(this)' onkeydown='textAreaChange(this)' rows='5'>期待你的神评论......</textarea>
				<div class='text-right'>
					剩余<span style='color:#31c21c'>300</span>字
					<button type="button">发表评论</button>
				</div>	
			</div>
			<h5>精彩评论</h5>
			<hr style="width: 860px;">
			<ul class="owentext">
				<li>
					<div class="commentLeft"><img src="images/cover/tou1.jpg" alt=""></div>
					<div class="commentRight">
						<p>金·卡戴珊</p>
						<p>爱别人前，先学会爱自己。痛过的人才知道，用歌曲给自己疗伤，心疼</p>
						<p>1月17日 22:11</p>
					</div>
				</li>
				<li>
					<div class="commentLeft"><img src="images/cover/tou2.jpg" alt=""></div>
					<div class="commentRight">
						<p>李小龙</p>
						<p>colors入坑 bad at love经验 without me认定终身 转眼三年啦 2020也要更爱你吖!</p>
						<p>1月18日 20:11</p>
					</div>
				</li>
				<li>
					<div class="commentLeft"><img src="images/cover/tou3.jpg" alt=""></div>
					<div class="commentRight">
						<p>叫我刘小镇</p>
						<p>今天我让媳妇听这首歌，她竟然说不好听，我当时就跟她吵了起来，可后来我就想：我一个大男人，为什么要和一个女人计较，更何况还是自己的媳妇！我当时就道歉了，道完歉，媳妇也很高兴，她把手里的菜刀放下了，她妹妹抓着我头发的手也松开了，她哥手里的砖头放下了，她弟弟手里的铁楸也放下了，丈母娘手里的擀面杖也扔了，老丈人拿出手机说道：棺材还退回去吧。看看，只要多沟通，生活还是蛮和谐的……</p>
						<p>1月18日 13:11</p>
					</div>
				</li>
				<li>
					<div class="commentLeft"><img src="images/cover/tou4.jpg" alt=""></div>
					<div class="commentRight">
						<p>王老板王思聪是也</p>
						<p>为了听这歌，开了会员，想想既然开了，就年度大会员吧，选的最高档的，开了8年的，只因为有钱人的快乐就是这么朴实无华。</p>
						<p>1月19日 15:25</p>
					</div>
				</li>
				<li>
					<div class="commentLeft"><img src="images/cover/tou5.jpg" alt=""></div>
					<div class="commentRight">
						<p>美丽人生编辑人</p>
						<p>without me入坑，Gaseline惊艳！closer洗脑！coming down膨胀！still learning再次惊艳！这女的真是个宝藏！Cool！</p>
						<p>1月19日 16:30</p>
					</div>
				</li>
				<li>
					<div class="commentLeft"><img src="images/cover/tou6.jpg" alt=""></div>
					<div class="commentRight">
						<p>冬日里的阳光</p>
						<p>那些翻着评论，却不评论的人，或许才是真正的孤独寂寞的人，路过的陌生人，愿你贪吃不胖，愿你懒惰不丑，愿你的深情不被辜负，愿你的余生都有人陪假如你活到八十岁，一共29200天70万个小时，4200万分钟，差不多25亿秒左右，这10秒你在读我的评论，这十秒你只属于我，你好，陌生人。</p>
						<p>1月19日 18:34</p>
					</div>
				</li>
			</ul>
			<ul class="owenum">
				<li>&gt;</li>
				<li>3</li>
				<li>2</li>
				<li class="active">1</li>
				<li>&lt;</li>
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
	</body>
	<script src="js/jquery2.2.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="js/comment.js"></script>
	<script src="js/modal.js" type="text/javascript" charset="utf-8"></script>
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
	   
	    function copyText() {
			var text = document.getElementById("text").innerText;
			var input = document.getElementById("input");
				input.value = text; // 修改文本框的内容
			    input.select(); // 选中文本
			document.execCommand("copy"); // 执行浏览器复制命令
	    }
	
		//显示限制输入字符method
		function textAreaChange(obj){
		    var $this = $(obj);
		    var count_total = 300;
		    var count_input = $this.next().children('span');
		    var area_val = $this.val();
		    if(area_val.len()>count_total){
		        area_val = autoAddEllipsis(area_val,count_total);//根据字节截图内容
		        $this.val(area_val);
		        count_input.text(0);//显示可输入数
		    }else{
		        count_input.text(count_total - area_val.len());//显示可输入数
		    }
		}
		
		//得到字符串的字节长度
		String.prototype.len = function(){
		    return this.replace(/[^\x00-\xff]/g, "xx").length;
		};
		
		function autoAddEllipsis(pStr, pLen) {
		    var _ret = cutString(pStr, pLen);
		    var _cutFlag = _ret.cutflag;
		    var _cutStringn = _ret.cutstring;
		    return _cutStringn;
		}
		
		function cutString(pStr, pLen) {
		    // 原字符串长度
		    var _strLen = pStr.length;
		    var _tmpCode;
		    var _cutString;
		    // 默认情况下，返回的字符串是原字符串的一部分
		    var _cutFlag = "1";
		    var _lenCount = 0;
		    var _ret = false;
		    if (_strLen <= pLen/2){_cutString = pStr;_ret = true;}
		    if (!_ret){
		        for (var i = 0; i < _strLen ; i++ ){
		            if (isFull(pStr.charAt(i))){_lenCount += 2;}
		            else {_lenCount += 1;}
		            if (_lenCount > pLen){_cutString = pStr.substring(0, i);_ret = true;break;}
		            else if(_lenCount == pLen){_cutString = pStr.substring(0, i + 1);_ret = true;break;}
		        }
		    }
		    if (!_ret){_cutString = pStr;_ret = true;}
		    if (_cutString.length == _strLen){_cutFlag = "0";}
		    return {"cutstring":_cutString, "cutflag":_cutFlag};
		}
		
		function isFull(pChar){
		    if((pChar.charCodeAt(0) > 128)){return true;}
		    else{return false;}
		}
		
	</script>
</html>
