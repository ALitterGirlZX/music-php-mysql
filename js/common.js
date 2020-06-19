(function ($) {
    $.extend({
        //1、取值使用    $.Request("name")
        Request: function (name) {
            var sValue = location.search.match(new RegExp("[\?\&]" + name + "=([^\&]*)(\&?)", "i"));
            //decodeURIComponent解码
            return sValue ? decodeURIComponent(sValue[1]) : decodeURIComponent(sValue);
        },
        //2、给url加参数    $.UrlUpdateParams(url, "add", 11111);
        UrlUpdateParams: function (url, name, value) {
            var r = url;
            if (r != null && r != 'undefined' && r != "") {
                value = encodeURIComponent(value);
                var reg = new RegExp("(^|)" + name + "=([^&]*)(|$)");
                var tmp = name + "=" + value;
                if (url.match(reg) != null) {
                    r = url.replace(eval(reg), tmp);
                } else {
                    if (url.match("[\?]")) {
                        r = url + "&" + tmp;
                    } else {
                        r = url + "?" + tmp;
                    }
                }
            }
            return r;
        }
    });
	
	//定义常用路径
	function getRootUrl() {
		var rootUrl = '';
		if (window.location.host == 'xfyhpc.xft119.com') {
			rootUrl = 'http://xfyhpc.xft119.com/static/dyw';
		} else {
			rootUrl = 'http://' + window.location.host + '/dyw';
		}
		return rootUrl;
	}
	
	function getServerUrl() {
		var serverUrl = '';
		if (window.location.host == 'xfyhpc.xft119.com') {
			serverUrl = "http://xfyhpc.xft119.com/api"; //服务器地址-线上
		} else {
			serverUrl = "http://192.168.188.30:8088"; //服务器地址-本地,
		}
		return serverUrl;
	}
	
	function getLoginUrl() {
		var loginUrl = getRootUrl() + '/page/login.html'; //登录地址
		return loginUrl;
	}
	
	//判断浏览器版本
	var Sys = {};	
	var ua = navigator.userAgent.toLowerCase();
	var s;
	(s = ua.match(/rv:([\d.]+)\) like gecko/)) ? Sys.ie = s[1]:
		(s = ua.match(/msie ([\d.]+)/)) ? Sys.ie = s[1] :
		(s = ua.match(/firefox\/([\d.]+)/)) ? Sys.firefox = s[1] :
		(s = ua.match(/chrome\/([\d.]+)/)) ? Sys.chrome = s[1] :
		(s = ua.match(/opera.([\d.]+)/)) ? Sys.opera = s[1] :
		(s = ua.match(/version\/([\d.]+).*safari/)) ? Sys.safari = s[1] : 0;
	
	if (!!window.ActiveXObject || "ActiveXObject" in window) {
		// console.log(Number(Sys.ie));
		if (Number(Sys.ie) < 10) {
			window.top.location.href = getRootUrl() + '/page/update.html';
		}
	}
	
	if (GetQueryString('token'))
		localStorage.setItem('token', GetQueryString('token'));
	
	// 添加 ajax 全局事件处理。
	function ajaxFunc(type, url, param, local) {
		check();
		var res = '';
		if (!local) { //网络请求（本地请求参数为true）;
			jQuery.support.cors = true;
			jQuery.ajax({
				data: param,
				type: type,
				async: false,
				url: getServerUrl() + url,
				contentType: "application/json", //Form Data
				dataType: "json",
				timeout: 10000, //设置超时 zpy 2019-7-19
				success: function(data) {
					layui.config({
						base: "js/"
					}).use(['layer'], function() {
						if (data.status) {
							if (data.status == 200) {
	
							} else if (data.status == 401) {
								window.top.location.href = getLoginUrl(); //返回顶层窗口，即浏览器窗口。
								return false;
							} else {
								layer.msg(data.msg);
								return false;
							}
						}
					});
					res = data;
				},
				complete :function(XMLHttpRequest,status){
					if(status == "timeout"){
						alert('请求超时');
					}
				},
				error: function(xhr, status, err) {
					layui.config({
						base: "js/"
					}).use(['layer'], function() {
						layer.msg(status);
						layer.closeAll("loading");
					});
					res = err;
				}
			});
		} else {
			jQuery.support.cors = true;
			jQuery.ajax({
				data: param,
				type: type,
				async: false,
				url: url,
				// contentType:"text/plain;charset=UTF-8",//Request Payload
				contentType: "application/json", //Form Data
				dataType: "json",
				success: function(data) {
					res = data;
				},
				error: function(xhr, status, err) {
					res = err;
				}
			});
		}
		// console.log(res);
		return res;
	}
	
	//定义检查登录状态的方法;
	function check() {
		if (!localStorage.token) { //不存在跳转到登录页;
			window.top.location.href = getLoginUrl(); //返回顶层窗口，即浏览器窗口。
		}
	}
	
	
	
	
	
	
	
	
	
})(jQuery);