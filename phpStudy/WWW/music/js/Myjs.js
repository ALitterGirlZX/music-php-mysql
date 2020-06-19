
function Myjs(args){
	this.elements = [];
	if(typeof args == 'string'){
		if(args.indexOf(' ') != -1){
			var selectList = args.split(' ');
			var nodeList = [];
			var parentList = [];
			for(var i = 0; i < selectList.length; i++){
				if(parentList == '') parentList.push(document);
				switch(selectList[i].charAt(0)){
					case '#' : 
						nodeList = [];
						nodeList.push(this.getId(selectList[i].substring(1)));
						parentList = nodeList;
						break;
					case '.' :
						nodeList =[];
						for(var j = 0; j < parentList.length; j++){
							var classEle = this.getClass(selectList[i].substring(1) , parentList[j]);
							for(var k = 0; k < classEle.length; k++) nodeList.push(classEle[k]);
						}
						parentList = nodeList;
						break;
					default :
						nodeList = [];
						for(var j = 0; j < parentList.length; j++){
							var tagEle = this.getTag(selectList[i] , parentList[j]);
							for(var k = 0; k < tagEle.length; k++) nodeList.push(tagEle[k]);
						}
						parentList = nodeList;
						
						break;
				}
			}
			this.elements = parentList;
		}else{
			//find
			switch(args.charAt(0)){
				case '#' : this.elements[0] = this.getId(args.substring(1)); break;
				case '.' :
					var classList = this.getClass(args.substring(1));
					for(var i = 0; i < classList.length; i++){
						this.elements.push(classList[i]);
					}
					break;
				default : 
					var tagList = this.getTag(args);
					for(var i = 0; i < tagList.length; i++){
						this.elements.push(tagList[i]);
					}
					break;
			}
		}
		
	}else if(typeof args == 'object'){
		if ( args != undefined ) this.elements.push(args);
	}else if(typeof args == 'function'){
		addDomLoaded(args);
	}
}		//在创建一个Myjs对象同时创建一个elements数组

function $(args){
	var myjs = new Myjs(args);
	return myjs;
}

//查找子元素
Myjs.prototype.find = function(str){
	var childList = [];
	for(var i = 0; i < this.elements.length; i++){
		switch(str.charAt(0)){
		case '#':
			childList.push(document.getElementById(str.substring(1)));
			break;
		case '.' : 
			childList = this.getClass( str.substring(1) , this.elements[i]);
			
			break;
		default : 
			childList = this.getTag(str,this.elements[i]);
			break;
		}
	}
	this.elements = childList;
	return this;
}


//获取id
Myjs.prototype.getId = function(id){
	return document.getElementById(id) ;
}

//获取标签
Myjs.prototype.getTag = function(tag , parentNode){
	if( arguments.length == 1 ) parentNode = document;
	return parentNode.getElementsByTagName(tag);
}

//获取name
Myjs.prototype.getName = function(name){
	this.elements = document.getElementsByName(name);
	return this;
}

//获取class
Myjs.prototype.getClass = function(classCon ,parentNode){
	if( arguments.length == 1){
		parentNode = document;
	}
	var all_element = parentNode.getElementsByTagName('*');
	var classList = []
	for ( var i =0;i < all_element.length; i++ ){
		if ((new RegExp( '(\\s|^)' + classCon + '(\\s|$)' )).test(all_element[i].className)){
			classList.push(all_element[i]);
		}
	}
	return classList;
}

//添加class
Myjs.prototype.addClass = function(classCon){
	for( var i = 0; i < this.elements.length; i++ ){
		if( this.elements[i].className == '' ){
			this.elements[i].className = classCon;
		}else if ( !this.elements[i].className.match(new RegExp( '(\\s|^)' + classCon + '(\\s|$)' )) ){
			this.elements[i].className += ' ' + classCon;
		}
		
	}
	return this;
}

//删除class
Myjs.prototype.removeClass = function(classCon){
	for( var i = 0; i < this.elements.length; i++ ){
		if ( this.elements[i].className.match(new RegExp( '(\\s|^)' + classCon + '(\\s|$)' )) ){
			this.elements[i].className = this.elements[i].className.replace(new RegExp( '(\\s|^)' + classCon + '(\\s|$)' ) , ' ');
		}
	}
	return this;
}

//判断class
Myjs.prototype.hasClass = function(classCon){
	for( var i = 0; i < this.elements.length; i++ ){
		if ( this.elements[i].className.match(new RegExp( '(\\s|^)' + classCon + '(\\s|$)' )) ){
			return true;
		}
	}
	return false;
}


//css方法
Myjs.prototype.css = function(attr , value){
	for(var i = 0; i < this.elements.length; i++){
		if( arguments.length == 1 ){
			if( typeof window.getComputedStyle != 'undefined' ){	//W3C
				return window.getComputedStyle(this.elements[i] , null)[attr];
			}else if ( typeof this.elements[i].currentStyle != 'undefined' ){	//IE
				return this.elements[i].currentStyle[attr];
			}
		}
		
		this.elements[i].style[attr] = value;
	}
	return this;
}

//html方法
Myjs.prototype.html = function(str){
	for(var i = 0; i < this.elements.length; i++){
		if( arguments.length == 0 ){
			return this.elements[i].innerHTML;
		}
		this.elements[i].innerHTML = str;
	}
	return this;
}

//返回长度
Myjs.prototype.length = function(){
	return this.elements.length;
}
Myjs.prototype.name = function(str){
	var name = [];
	for(var i = 0; i < this.elements.length; i++){
		if(this.elements[i].name == str) name.push(this.elements[i]);
	}
	this.elements = name;
	return this;
}


//text 方法
Myjs.prototype.text = function(str){
	for(var i = 0; i < this.elements.length; i++){
		if( arguments.length == 0 ){
			return typeof(this.elements[i].textContent) == 'string' ? this.elements[i].textContent : this.elements[i].innerText;
		}
		typeof(this.elements[i].textContent) == 'string' ? this.elements[i].textContent = str : this.elements[i].innerText = str;
	}
	return this;
}




//表单元素的val方法
Myjs.prototype.val = function(str){
	for(var i = 0; i < this.elements.length; i++){
		if( arguments.length == 0 ){
			return this.elements[i].value;
		}
		this.elements[i].value = str;
	}
	return this;
}



//事件绑定
Myjs.prototype.bind = function(event,fun){
	for(var i = 0; i < this.elements.length; i++){
		addEvent(this.elements[i] ,event, fun);
	}
	return this;
}

//单击事件
Myjs.prototype.click = function(fun){
	for(var i = 0; i < this.elements.length; i++){
		addEvent(this.elements[i] ,'click', fun);
	}
	return this;
}




//获取下标元素
Myjs.prototype.eq = function(num){
	var obj = new Myjs();
	obj.elements[0] = this.elements[num];
	return obj;
}

//获取当前元素下一个同级节点
Myjs.prototype.next = function(){
	var nextList = [];
	for(var i = 0; i < this.elements.length; i++){
		var childList = getChild(this.elements[i].parentNode);
		for(var k = 0; k < childList.length ; k++){
			if( this.elements[i] == childList[k] ){
				nextList.push(childList[k+1]);
			}	
		}
	}
	this.elements = nextList;
	return this;
}

//获取当前元素上一个同级节点
Myjs.prototype.prev = function(){
	var prevList = [];
	for(var i = 0; i < this.elements.length; i++){
		var childList = getChild(this.elements[i].parentNode);
		for(var k = 0; k < childList.length ; k++){
			if( this.elements[i] == childList[k] && k>0 )
				prevList.push(childList[k-1]);
		}
	}
	this.elements = prevList;
	return this;
}

//获取当前节点的所有兄弟
Myjs.prototype.siblings = function(){
	var siblingList = [];
	for(var i =0; i < this.elements.length; i++){
		var parent = this.elements[i].parentNode;
		var childrens = getChild(parent);
		for(var k =0; k < childrens.length; k++){
			if( this.elements[i] != childrens[k] )
				siblingList.push(childrens[k]);
		}
	}
	this.elements = siblingList;
	return this;
}

//鼠标移入移出事件
Myjs.prototype.hover = function(over ,out){
	for(var i = 0; i < this.elements.length; i++){
		this.elements[i].onmouseover = over;
		this.elements[i].onmouseout = out;
	}
	return this;
}

//隐藏事件
Myjs.prototype.hide = function(){
	for(var i = 0; i < this.elements.length; i++){
		this.elements[i].style.display = 'none';
	}
	return this;
}

//显示事件
Myjs.prototype.show = function(){
	for(var i = 0; i < this.elements.length; i++){
		this.elements[i].style.display = 'block';
	}
	return this;
}

Myjs.prototype.fadeIn = function(){
	for(var i = 0; i < this.elements.length; i++){
		var ele = this.elements[i];
		
		if( getStyle(ele,'visibility') == 'hidden' || getStyle(ele,'opacity') == 0){
			this.animate({
			'attr' : 'opacity',
			'target' : '100',
			'method' : 'buffer'
			});
		}
	}
	return this;
}

Myjs.prototype.fadeOut = function(){
	for(var i = 0; i < this.elements.length; i++){
		var ele = this.elements[i];
		if( getStyle(ele,'visibility') == 'visible' || getStyle(ele,'opacity') > 0 ){
			this.animate({
			'attr' : "opacity",
			'target' : '0',
			'method' : 'buffer'
			});
		}
	}
	return this;
}
Myjs.prototype.fadeTo = function(val){
	if(typeof val == 'number') val += '';
	for(var i = 0; i < this.elements.length ; i++){
		var ele = this.elements[i];
		this.animate({
			'attr' : "opacity",
			'target' : val,
			'buffer_step' : 80,
			'method' : 'buffer'
		});
	}
	return this;
}

//单击事件的切换方法
Myjs.prototype.toggle = function(){
	for(var i = 0; i < this.elements.length ; i++){
		(function(element , argu){
			var cont = 0;
			addEvent(element, 'click' , function(){
				var num = cont++ % argu.length + 1;
				if ( num ) argu[--num].call(this);
			});
		})(this.elements[i] ,arguments);
	}
	return this;
}



//浏览器居中方法
Myjs.prototype.center = function(width,height){
	var screen_width = document.documentElement.clientWidth;
	var screen_height = document.documentElement.clientHeight;
	for(var i = 0; i < this.elements.length; i++){
		this.elements[i].style.top = (screen_height - height)/2 + 'px';
		this.elements[i].style.left = (screen_width - width)/2 +'px';
	}
	return this;
}

//浏览器尺寸改变事件
Myjs.prototype.resize = function(fun){
	for(var i = 0; i < this.elements.length; i++){
		var elem = this.elements[i];
		window.onresize = function(){
			if( elem.offsetLeft > (window.innerWidth ? window.innerWidth : document.documentElement.clientWidth) - elem.offsetWidth ){
				elem.style.left = (window.innerWidth ? window.innerWidth : document.documentElement.clientWidth) - elem.offsetWidth+'px';
			}
			if( elem.offsetTop >  (window.innerHeight ? window.innerHeight : document.documentElement.clientHeight) - elem.offsetHeight){
				elem.style.top = (window.innerHeight ? window.innerHeight : document.documentElement.clientHeight) - elem.offsetHeight + 'px';
			}
		};
	}
	return this;
}



//登录遮罩
Myjs.prototype.lock = function(){
	var width = window.innerWidth ? window.innerWidth + 'px' : document.documentElement.clientWidth + 'px';
	var height = window.innerHeight ? window.innerHeight + 'px' : document.documentElement.clientHeight + 'px';
	for(var i = 0; i < this.elements.length; i++){
		this.elements[i].style.height = height;
		this.elements[i].style.width = width;
		this.elements[i].style.display = 'block';
		//		在遮罩时屏幕不可改变大小
		addEvent(window , 'scroll' ,scroll );
	}
	return this;
}

function scroll(e){
	document.documentElement.scrollTop = 0;
	document.body.scrollTop = 0;
}


//取消遮罩
Myjs.prototype.unlock = function(){
	for(var i = 0; i < this.elements.length; i++){
		this.elements[i].style.display = 'none';
		removeEvent(this.elements[i],'scroll', scroll);
	}
	return this;
}



//拖拽方法 

Myjs.prototype.drag = function(){
	for(var i = 0; i < this.elements.length; i++){
		addEvent(this.elements[i] , 'mousedown' , function(e){
			
			if( delspace( this.innerHTML ).length == 0  ) e.preventDefault();
			var e = e || window.event;
			
			
			var _this = this;
			var level = e.clientX - this.offsetLeft;
			var verticle = e.clientY - this.offsetTop;
			
			if(e.target.tagName == 'H2'){
				_this.style.cursor = 'move';
				addEvent(document,'mousemove' , move);
				addEvent(document, 'mouseup' , up);
				
			}else{
				removeEvent(document,'mousemove' ,move);
				removeEvent(document , 'mouseup' , up);
			};
			function up(e){
				removeEvent(document,'mousemove' ,move);
				removeEvent(document , 'mouseup' , up);
				_this.style.cursor = '';
				if( typeof _this.releaseCapture != 'undefined' ) _this.releaseCapture();
			}
			
			function move(e){
				var e = e|| window.event;
				var left = e.clientX - level;
				var top = e.clientY - verticle;
				var maxLeft = (window.innerWidth ? window.innerWidth : document.documentElement.clientWidth) - _this.offsetWidth;
				var maxTop = (window.innerHeight ? window.innerHeight : document.documentElement.clientHeight) - _this.offsetHeight;
				if( left <= 0 ){
					left = 0;
				}else if ( left >= maxLeft ){
					left = maxLeft;
				}
				if(top <= 0){
					top = 0;
				}else if ( top >= maxTop ){
					top = maxTop;
				}
				
				_this.style.left = left + 'px';
				_this.style.top = top + 'px';
				if(typeof _this.setCapture != 'undefined') _this.setCapture();	
			}
		});
	}
	return this;
}

//动画
Myjs.prototype.animate = function(obj , fun){
	for(var i = 0; i < this.elements.length ; i++ ){
		var ele = this.elements[i];
		if(ele.timer != 'null') clearInterval(ele.timer);	//清楚未完成的定时器 , 防止卡死
		var attr = obj.attr == 'x' ? 'left' : obj.attr == 'y' ? 'top' :
		 obj.attr != undefined ? obj.attr : 'left';
		
		var ping = obj.ping != undefined ? obj.ping : 10;
		
		//如果没有同步动画，创建同步对象把单个动画放进去
		if(obj.syn == undefined && obj.attr != undefined){
			obj.syn = {};
			obj.syn[obj.attr] = obj.target;
		}else if ( obj.syn == undefined && obj.attr == undefined ){
			throw('animate方法应用错误');
		}
		var arr = [];
		ele.cont = 0;
		for(var i in obj.syn){
			arr.push(i);		//获取对象的键值对个数
			if(/^[\d]+$/.test(getStyle(ele,i) + '') ) ele.cont++;	//获取长度型属性个数
		}
		//定时器
		ele.timer = setInterval(function(){
			var isFinish =[];	// -- 用来判断动画是否全部完成
			for(var i in obj.syn){
				var flag = false;
				
				attr = i == 'x' ? 'left' : i == 'y'? 'top' :  i != undefined ? i : 'left';
				obj.target = obj.syn[i];
				//如果是非长度属性，直接赋值
				if( ! /^[\d]+/.test(getStyle(ele,attr) + '') ) {
					ele.style[attr] = obj.target; 
					if(ele.cont == 0 ){
						clearInterval(ele.timer);
						if(typeof fun != 'undefined')
							setTimeout(function(){fun();},10);
					} 
				}else{
					//获取数据
					var now_style = getStyle(ele, attr);
					
					if( attr == 'opacity' && now_style <= 1 ) now_style *= 100;
					var new_style = obj.target.indexOf('px') != -1 ? parseInt( obj.target.substr(0,obj.target.length-2) ) : parseInt(obj.target);
					
					var step = obj.step != undefined ? new_style > now_style ? obj.step : -obj.step : new_style > now_style ? 10 : -10;
					var method = obj.method != undefined ? obj.method : 'constant';
					//判断是否缓冲运动
					if( method == 'buffer' ){
						var buffer_step = obj.buffer_step != undefined ? new_style > now_style ? 100 - obj.buffer_step : -100 - obj.buffer_step : 
							new_style > now_style ? 20 : -20;
						var speed = Math.floor((new_style - getStyle(ele,attr))/buffer_step) != 0 ?
						Math.floor((new_style - getStyle(ele,attr))/buffer_step) : Math.ceil((new_style - getStyle(ele,attr))/buffer_step) ;
						speed = step >= 0 ? speed : -speed;
					}else if(method == 'constant'){ var speed = step }
					
					//结束运动
					if( attr == 'opacity' ){	//透明度
						if( step > 0 && getStyle(ele,attr) + speed >= new_style ){
							ele.style.opacity = new_style/100;
							
							ele.style.filter = 'alpha(opacity=' + new_style + ')';
							
						}else if( step < 0 &&  getStyle(ele,attr) + speed <= new_style ){
							ele.style.opacity = new_style/100;
							ele.style.filter = 'alpha(opacity=' + new_style + ')';

						}else{
							ele.style.opacity = (getStyle(ele, attr) + speed)/100;
							ele.style.filter = "alpha(opacity=" + (getStyle(ele, attr) + speed) + ")";
						}
						
					}else{
						//长度类
						if ( step > 0 && getStyle(ele,attr) + speed >= new_style  ){
							ele.style[attr] = new_style + 'px';

						}else if(step < 0 && getStyle(ele,attr) + speed <= new_style  ){

							ele.style[attr] = new_style + 'px';
						}else{
							ele.style[attr] = getStyle(ele, attr) + speed + 'px';
						}
					}
					//每一次for循环后都判断是否完成，没有完成数组添加一个false
					if( getStyle(ele,attr) != new_style ) isFinish.push(flag);
				}
				
				
			}
			//for循环完后，如果数组长度为0，那就是都完成；
			if(isFinish.length == 0){
				clearInterval(ele.timer);
				if(fun != undefined) fun();
			}
		},ping);
	}
	return this;
};




















//---------------------------------------------------------------------------
//加载事件
addEvent.ID = 1;
function addEvent(obj,type,fun){
	if( typeof obj.addEventListener != 'undefined' ){
		return obj.addEventListener(type,fun, false);
	}else{
		//创建一个存放对象的哈希表
		if( !obj.events ) obj.events = {};
		//第一次执行时
		if( !obj.events[type] ){
			//创建一个存放函数的数组
			obj.events[type] = [];
			//把第一次事件存放在数组中
			if( obj['on' + type] ) obj.events[type][0].fun;
		}else{
			//同一函数忽略， 不添加；
			if ( addEvent.equal(obj.events[type], fun) ) return false;
		}
		//第二次执行以后： 
		obj.events[type][addEvent.ID++] = fun;
		//事件处理
		obj['on'+type] = addEvent.exec;
		
		
	}
}
//事件处理函数
addEvent.exec = function(event){
	var e = event || addEvent.fixEvent(window.event);
	var es = this.events[e.type];
	for(var g in es) es[g].call(this,e);
}
//判断事件是否已经存在
addEvent.equal = function(es , fun){
	for(var i in es){
		if(es[i] == fun) return true;
	}
	return false;
}
//移除事件
function removeEvent(obj,type,fun){
	if( typeof obj.removeEventListener != 'undefined' ){
		return obj.removeEventListener(type,fun ,false);
	}else{
		if( obj.event ){
			for( var i in obj.events[type] ){
			if( obj.events[type][i] == fun ) delete obj.events[type][i];
		}
		}
		
	}
}

//把IE中的event对象配对到W3C
addEvent.fixEvent = function(event){
	event.preventDefault = addEvent.fixEvent.preventDefault;
	event.stopPropagation = addEvent.fixEvent.stopPropagation;
	event.target = event.srcElement;
	return event;
}
//ie阻止默认事假兼容w3c
addEvent.fixEvent.preventDefault = function(){
	this.returnValue = false;
}
//ie阻止冒泡事件兼容w3c
addEvent.fixEvent.stopPropagation = function(){
	this.cancelBubble = true;
}
//---------------------------------------------------------------------------

//取消空格
function delspace(str){
	return str.replace(/(^\s*)(\s*$)/g,'');
}

//创建xhr对象

function createXHR(){
	if( typeof (XMLHttpRequest) != 'undefined' ){
		return new XMLHttpRequest();
	}else if ( ActiveXObject != 'undefined'){
		var arr = [
			'MSXML2.DOMDocument6.0',
			'MSXML2.DOMDocument3.0',
			'MSXML2.DOMDocument',
		];
		for( var i = 0; i < arr.length; i++){
			try{
				return new ActiveXObject(arr[i]);
			}catch(e){
				//跳过
			}
		}
	}else{
		alert('您的浏览器或系统不支持XHR！');
	}
}
//向选定元素的后面添加一个元素
function insertAfter(newElement,selectedElement){
	var parent = selectedElement.parentNode;
	var lastElement = parent.lastChild;
	while( lastElement.nodeType != 1 ){
		lastElement = parent.lastChild.previousSibling;
	}
	if( selectedElement == lastElement ){
		parent.appendChild(newElement);
	}else{
		parent.insertBefore(newElement, selectedElement.nextSibling);
	}
}
//获取子元素节点,不改变元素
function getChild(element){
	var parent = element;
	var list = [];
	for(var i = 0; i < parent.childNodes.length ; i++){
		if( parent.childNodes[i].nodeType == 1 ){
			list.push(parent.childNodes[i]);
		}
	}
	return list;
}

//DOM加载事件， dom结构加载完后就执行；
function addDomLoaded(fun){
	if(typeof document.addEventListener != 'undefined'){//W3C
		document.addEventListener('DOMContentLoaded' , function(){
			fun();
			document.removeEventListener('DOMContentLoaded',arguments.callee);
		},'false');
	}else{			//IE678
		var timer = null;
		timer = setInterval(function(){
			try{
				document.documentElement.doScroll('left');
				fun();
			}catch(e){}
		},1);
	}
}


//获取外联样式表
function getStyle(ele , attr){
	if(attr == 'opacity' ){
		var attr_value = window.getComputedStyle ? window.getComputedStyle(ele, null).opacity  : /[\d]{2,3}/.exec(ele.currentStyle.filter)[0];
		return parseInt(attr_value) <= 1 ? parseFloat(attr_value).toFixed(2)*100 : parseInt(attr_value);
	}else{
		var attr_value = window.getComputedStyle ? window.getComputedStyle(ele, null)[attr]: ele.currentStyle[attr];
		return attr_value.indexOf('px') != -1 ? parseInt(attr_value.substr(0,attr_value.length-2)) : attr_value.indexOf('pt') != -1 ? parseInt(attr_value.substr(0,attr_value.length-2)) : attr_value;
	}
	
}

//将字符串转化为html
/*
function htmlStr(str){
	if( /</ )
}
*/

$(function(){
window.z = 0;

//用户名验证；
$('input[name="user"]').bind('focus',function(){
	$('.user_put').css('display','block').css('z-index', ''+ window.z++);
	$('.user_error').css('display','none');
	$('.user_ok').css('display','none');
}).bind('blur',function(){
	if( $(this).val() == '' ) $('.user_put').css('display','none');
	else{
		var str = $(this).val();
		str = str.replace(/\s/g , '');//输入空格时自动忽略，\s表示空格
		if( str.length < 6 ){
			$('.user_put').css('display','none');
			$('.user_error').css('display','block');
			$('.user_ok').css('display','none');
		}else{
			$('.user_ok').css('display','block');
			$('.user_put').css('display','none');
			$('.user_error').css('display','none');
		}
	}
}).bind('keyup',function(){
	if( $(this).val().replace(/\s/g , '').length >= 6 ){
		$('.user_ok').css('display','block');
		$('.user_put').css('display','none');
		$('.user_error').css('display','none');
	}else{
		$('.user_put').css('display','block');
		$('.user_error').css('display','none');
		$('.user_ok').css('display','none');
	}
});

//密码验证
$('input[name="pass"]').bind('focus',function(){
	$('.pass_put').css('display','block').css('z-index',''+ window.z++);
	$('.pass_error').css('display','none');
	$('.pass_ok').css('display','none');
}).bind('blur' , function(){
	if( $(this).val() == '' ){
		$('.pass_put').css('display','none');
	}else if( ! (new RegExp(/^[a-zA-Z0-9_]{6,18}$/)).test( $(this).val() ) ){
		$('.pass_put').css('display','none');
		$('.pass_error').css('display','block');
		$('.pass_ok').css('display','none');
	}else{		
		$('.pass_put').css('display','none');
		$('.pass_error').css('display','none');
		$('.safe').css('display','none');
		$('.pass_ok').css('display','block');
	}
		
}).bind('keyup',function(){
	if( (new RegExp(/^[a-zA-Z0-9_]{6,18}$/)).test( $(this).val() )){
		$('.pass_put').css('display','none');
		$('.safe').css('display','block');
		switch( safeTest($(this).val()) ){
			case 1:
				$('.s1').css('background','red');
				$('.s2').css('background','#ccc');
				$('.s3').css('background','#ccc');
				$('.word').text('低').css('color','red');
				break;
			case 2:
				$('.s1').css('background','orange');
				$('.s2').css('background','orange');
				$('.s3').css('background','#ccc');
				$('.word').text('中').css('color','orange');
				break;
			case 3:
				$('.s').css('background', 'green');
				$('.word').text('高').css('color','green');
				break;
		}
	}else{
		$('.safe').css('display','none');
		$('.pass_put').css('display','block');
	}
});


function safeTest(str){
	var strlen = str.length;
	var codeCont = 0;
	if( /\d/.test(str) ) codeCont++;
	if( /[a-zA-Z]/g.test(str) ) codeCont++;
	if( /_/g.test(str) ) codeCont++;
	if( strlen < 10 && codeCont == 1) return 1;
	else if( strlen < 10 && codeCont == 2 ) return 2;
	else return 3;
}

//确认密码验证
$('input[name="confirm_pass"]').bind('focus',function(){
	$('.confirm_put').css('display','block');
	$('.confirm_error').css('display','none');
	$('.confirm_ok').css('display','none');
}).bind('blur',function(){
	$('.confirm_put').css('display','none');
	if( $(this).val() == '' )
		$('.confirm_error').css('display','none');
	else{
		if( $(this).val() != $('input').name('pass').val() ){
		$('.confirm_error').css('display','block');
		}else{
		$('.confirm_error').css('display','none');
		$('.confirm_ok').css('display','block');
		}
	}
	
});

//电子邮箱验证
$('input[name="email"]').bind('focus',function(){
	$('.email_put').css('display','block');
	$('.email_error').css('display','none');
	$('.email_ok').css('display','none');

}).bind('blur',function(){
	window.ulIfClick = false;
	if( $(this).val() == '' ){
		$('.email_put').css('display','none');
		$('.email_error').css('display','none');
		$('.email_ok').css('display','none');
		$('.auto_complete').css('display','none');

	}else{
		if( /^\w+@[a-zA-Z0-9]+(\.[a-z]{2,3}){1,2}$/.test($(this).val()) ){
			$('.email_put').css('display','none');
			$('.email_error').css('display','none');
			$('.email_ok').css('display','block');
		}else{
			
			$('.auto_complete li').bind('click',function(){
			
				$('input').name('email').val( $(this).text() );
				if( /^\w+@[a-zA-Z0-9]+(\.[a-z]{2,3}){1,2}$/.test($('input').name('email').val()) ){
					$('.email_put').css('display','none');
					$('.email_error').css('display','none');
					$('.email_ok').css('display','block');
				}
				$('.auto_complete').css('display','none');
				window.ulIfClick = true;
			});
			setTimeout(function(){
				if(  !window.ulIfClick ){
					$('.auto_complete').css('display','none');
					$('.email_put').css('display','none');
					$('.email_error').css('display','block');
					$('.email_ok').css('display','none');
				}else{

				}
			},200);

		}
	}
}).bind('keyup',function(e){

	if( window.nextLi == undefined ) window.nextLi = 0;
	if( !$(this).val().match(/@/) ){
		if( $(this).val() == '' )
			$('.auto_complete').css('display','none');
		else{
			$('.auto_complete').css('display','block');
			if( e.keyCode != 13 ){
				$('.auto_complete li').css('background','#eee');
			}
		}
			
		var str = $(this).val();
		$('.auto_complete span').text(str);		
	}else{
		$('.auto_complete').css('display','none');
	}
	
	if(e.keyCode == 40 && $('.auto_complete').css('display') == 'block'){
		$('.auto_complete li').eq(window.nextLi++%4).css('background','#ff8').siblings().css('background','#eee');
		
	}
	if(e.keyCode == 13){
		window.nextLi = undefined;
		for(var i = 0; i < $('.auto_complete li').length(); i++){
			//alert( $('.auto_complete li').eq(i).css('backgroundColor') );
			if($('.auto_complete li').eq(i).css('backgroundColor') == 'rgb(255, 255, 136)'){
				$('input').name('email').val( $('.auto_complete li').eq(i).text() );
				$('.auto_complete').css('display','none');
				if( /^\w+@[a-zA-Z0-9]+(\.[a-z]{2,3}){1,2}$/.test($(this).val()) ){
					$('.email_put').css('display','none');
					$('.email_error').css('display','none');
					$('.email_ok').css('display','block');
				}
			}
		}
	}

//手机验证
$('input[name="phone"]').bind('focus',function(){
	$('.phone_put').css('display','block');
	$('.phone_error').css('display','none');
	$('.phone_ok').css('display','none');

}).bind('blur',function(){
	window.ulIfClick = false;
	if( $(this).val() == '' ){
		$('.phone_put').css('display','none');
		$('.phone_error').css('display','none');
		$('.phone_ok').css('display','none');
	}else{
		if( /^\w+@[a-zA-Z0-9]+(\.[a-z]{2,3}){1,2}$/.test($(this).val()) ){
			$('.phone_put').css('display','none');
			$('.phone_error').css('display','none');
			$('.phone_ok').css('display','block');
		}else{
			setTimeout(function(){
				if(!window.ulIfClick ){
					$('.phone_put').css('display','none');
					$('.phone_error').css('display','block');
					$('.phone_ok').css('display','none');
				}
			},200);
		}
	}
})

});



$('form').eq(0).bind('submit',function(e){
	e.preventDefault();
});

});

















