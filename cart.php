<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>购物车</title>
<link rel="stylesheet" type="text/css" href="css/nav.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" href="js/layui/css/layui.css" />
<link rel="stylesheet" href="js/eleme-ui/index.css" />
<link rel="stylesheet" href="css/ShoppingCart.css" />
</head>
<body>
	<?php
		require_once("config.php");
		$tb = "cart";
		
		//连接数据库
		$con = mysql_connect("localhost","root","root")or die("连接数据库失败");
		
		//设置数据库字符集  
		mysql_query("SET NAMES UTF8");
		
		//查询数据库
		mysql_select_db($db, $con);
	
		//查询数据库
		//获取最新的1条数据
		$all = mysql_num_rows(mysql_query("select * from $tb"));
		$sql="select * from $tb";
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

		<!-- 购物车主体 -->
		<div class="row" id="myVue" v-cloak>
			<div class="layui-form">
				<table class="ShopCartTable layui-table">
					<thead>
						<tr>
							<th class="selectLeft">
								<template>
									<el-checkbox  @change="checkedAllBtn(checkedAll)" v-model="checkedAll">全选</el-checkbox>
								</template>
								<span class="selectLeftGoods">商品或服务名称</span>
							</th>
							<th>单价</th>
							<th>数量</th>
							<th>小计</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="(tabledatas,index) in shopTableDatas">
							<td  class="selectLeft">
								<template>
									<el-checkbox @change="checkedRadioBtn(tabledatas)" v-model="tabledatas.checked"></el-checkbox>
								</template>
								<span class="goodName">
									<img class="goodImg" :src="tabledatas.src" />
								</span>
								<span class="goodName goodsName">
									<h2 class="goodname" v-text="tabledatas.name"></h2>
									<p class="goodGary">
										<span>供应商：</span>
										<span v-text="tabledatas.supplier"></span>
									</p>
									<p class="goodGary">
										<span>发货地：</span>
										<span v-text="tabledatas.ConPlace"></span>
									</p>
								</span>
							</td>
							<td class="danPrice">{{tabledatas.price | moneyFiler}}</td>
							<td>
								<i @click="goodNum(tabledatas,-1)" class="fa  deleteBtn" aria-hidden="true">-</i>
								<input v-model="tabledatas.num" type="text" class="form-control numInput" aria-label="...">
								<i @click="goodNum(tabledatas,1)" class="fa  addBtn" aria-hidden="true">+</i>
							</td>
							<td>
								<p class="totalPrice">{{tabledatas.price*tabledatas.num | moneyFiler}}</p>
							</td>
							<td class="gongneng">
								<p class="deletegoods" @click="alertRadio(index)">删除</p>
								<p @click="alertmovesSavegoods(index)">移到我的收藏</p>
								<template v-if="tabledatas.saveandremove">
									<p @click="tabledatas.saveandremove = false">加入收藏</p>
								</template>
								<template v-else>
									<p :class="{'saveCheck':!tabledatas.saveandremove}" @click="tabledatas.saveandremove = true">取消收藏</p>
								</template>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="row tablefooter">
					<template>
						<el-checkbox style="padding-left:16px" @change="checkedAllBtn(checkedAll)" v-model="checkedAll">全选</el-checkbox>
					</template>
					<span class="removeMuch" @click="alertMuch">删除选中的商品或服务</span>
					<span class="removeSaves" @click="alertMuchgoods">移到我的收藏</span>
					<span class="servicenum">已选择<span class="goodsNum">{{goodsNum}}</span>件商品<span class="goodsNum">{{serviceNum}}</span>项服务</span>
					<span class="totalclassPoin">总价：<span class="totalMoneyClass">{{totalMoney | moneyFiler}}</span></span>
					<span class="SettlementBtn">去结算</span>
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
<!--js类引用-->
<script src="js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/swiper.animate.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery2.2.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
<script src="js/modal.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/vue/vue.min.js" ></script>
<script type="text/javascript" src="js/eleme-ui/index.js" ></script>
<script type="text/javascript" src="js/ShoppingCart.js" ></script>
<script>

				

</script>
</body>
</html>
