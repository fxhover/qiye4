<?php 
require 'header.php'; 
$GLOBALS['page'] = 'about';
?>


<body>

<input type="hidden" value="1" name="_user_level_val" />
								<script type="text/javascript" language="javascript" src="http://static.websiteonline.cn/website/script/??jquery-1.6.4.js,jquery.custom.js,jquery.lazyload.js,jquery.rotateutility.js,lab.js,wopop_all.js,jquery.cookie.js,jquery.simplemodal.js,fullcollumn.js,ierotate.js,effects/velocity.js,effects/effects.js,fullpagescroll.js,common.js,heightAdapt.js?v=14791986"></script>
	<script type="text/javascript" language="javascript">

    	//js版本url生成函数
		var webmodel = {};
	function parseToURL(module,action,anotherparams){
		webmodel = {};
		var defaultparams = {"_m": module,"_a": action};
	
		var urlparams=$.extend({}, anotherparams, defaultparams, webmodel);
		var paramstr=$.param(urlparams);
		return "http://leather-1.view.sitestar.cn/index.php?"+paramstr;
	}
	
	function getImageProcessType(){
		     return 1;
	}
	
	function parseToAdminURL(module,action,anotherparams){
		var defaultparams={'_m':module,'_a':action,'domain':'leather-1',"SessionID":''}
		var urlparams=$.extend({}, anotherparams, defaultparams, webmodel);
		var paramstr=$.param(urlparams);
		return "http://leather-1.view.sitestar.cn/admin/index.php?"+paramstr;
	}
	function getSiteCurLang(){return 'zh_CN';}
	function getPreviewSiteCurLang(){return 'zh_CN';}

	function relativeToAbsoluteURL(relativeurl,nostatic){
		
		if(nostatic=='1'){
			return "http://leather-1.view.sitestar.cn/"+relativeurl;
		}else{
			return "http://static.websiteonline.cn/website/"+relativeurl;
		}
	}
	
	function getSystemCurrentDomain(){return 'leather-1';}
	function getWebSiteType(){return 'pc';}
	function getSystemSession(){return '';}
	// IE9以下浏览器禁止编辑手机站 2014/04/28
		if($.browser.msie && ($.browser.version < 7)){
					location.href = parseToURL("wp_frontpage","browser");
			}
	//-->
	</script>

<div id="page_set_css">
<style>
/*layerFF270C3B731F4A82118DE2DC107A0621*/.wp-diy-selectedc{ width:auto; height:22px;line-height:22px; background:#fff;-moz-border-radius:2px; -webkit-border-radius:2px; border-radius:2px; border:1px solid #b5b5b5; }  .wp-diy-selectedc-left{ float:left; padding:0 5px; }  .wp-diy-selectedc-button{ float:right;}  .wp-diy-selectedc-button a{ display:block; width:14px; height:22px; overflow:hidden; background:url(http://static.websiteonline.cn/website/plugin/multilingual/styles/simple/images/wp-diy-selected-button.png) no-repeat;}  .wp-diy-selectedc-button a.disabled {background:url(http://static.websiteonline.cn/website/plugin/multilingual/styles/simple/images/wp-diy-selected-button2.gif) no-repeat;cursor:default;}  .wp-diy-selectedc-content{ margin-left:1px;background:#FFF; border:1px solid #b5b5b5; border-top:none; display:none; position:absolute; max-height:110px; overflow-y:auto; overflow-x:hidden; z-index:1111; }  .wp-diy-selectedc-content ul li{ height:22px; line-height:22px; text-indent:5px;}  .wp-diy-selectedc-content ul li.local{ background:#333333; color:#FFF; cursor:pointer;}/*layerFF270C3B731F4A82118DE2DC107A0621*//*layerF127556143670E463770FFD5DC0A9B91*/  #nav_layerF127556143670E463770FFD5DC0A9B91,#nav_layerF127556143670E463770FFD5DC0A9B91 ul,#nav_layerF127556143670E463770FFD5DC0A9B91 li{list-style-type:none; margin:0px; padding:0px; border:thin none;}  #nav_layerF127556143670E463770FFD5DC0A9B91 { position:relative;padding-left:20px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_bg.jpg);background-repeat:repeat;background-position:top left;background-color:transparent;height:42px;-moz-border-radius:5px; -webkit-border-radius:5px; border-radius:5px;behavior: url(script/pie.htc);}  #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop{padding-left:5px;padding-right:5px;text-align:center;height:42px;line-height:42px;position: relative; float:left; width:120px; padding-bottom:0px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_line.jpg);background-color:transparent;background-repeat:no-repeat;background-position:top right;}  #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop:hover{height:42px;line-height:42px;width:120px;text-align:center;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_hover.jpg);background-repeat:repeat-x;background-color:transparent;background-position:top left;}  #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop>a{white-space:nowrap;font-style:normal;font-weight:normal;font-family:arial;font-size:12px;display:block; padding:0px; color:#ffffff; text-align:center; text-decoration: none;overflow:hidden;}  #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop>a:hover{color:#fff; text-decoration: none;font-size:12px;font-style:normal;font-weight:normal;font-family:arial;color:#ffffff;text-align:center;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul {position:absolute;left:0px;display:none; background-color:transparent;margin-left:0px;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li {padding-left:5px;padding-right:5px;text-align:center;position:relative; float: left;padding-bottom:0px;background-image:none;background-color:#fc6701;height:25px;line-height:25px;background-position:top left;background-repeat:repeat;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li:hover{text-align:center;background-image:none; background-color:#dc3200;width:120px;height:25px;line-height:25px;background-position:top left;background-repeat:repeat;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li a {text-align:center;color:#fff;font-size:12px;font-family:arial;font-style:normal;font-weight:normal;white-space:nowrap;display:block;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li a:hover{ color:#fff;font-size:12px;font-family:arial;text-align:center;font-style:normal;font-weight:normal;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul ul {position: absolute; margin-left: 120px; margin-top: -25px;display: none; } #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop:hover{background-image:url("http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/colorstyle/limegreen/menu1_21_2W9G.jpg");}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li{background-color:#09cf2d;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li:hover{background-color:#008419;} #nav_layerF127556143670E463770FFD5DC0A9B91{background-color:transparent;} #nav_layerF127556143670E463770FFD5DC0A9B91{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop{background-color:transparent;} #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop>a{color:#333333;} /*layerF127556143670E463770FFD5DC0A9B91*//*layerF127556143670E463770FFD5DC0A9B91*/  #nav_layerF127556143670E463770FFD5DC0A9B91,#nav_layerF127556143670E463770FFD5DC0A9B91 ul,#nav_layerF127556143670E463770FFD5DC0A9B91 li{list-style-type:none; margin:0px; padding:0px; border:thin none;}  #nav_layerF127556143670E463770FFD5DC0A9B91 { position:relative;padding-left:20px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_bg.jpg);background-repeat:repeat;background-position:top left;background-color:transparent;height:42px;-moz-border-radius:5px; -webkit-border-radius:5px; border-radius:5px;behavior: url(script/pie.htc);}  #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop{padding-left:5px;padding-right:5px;text-align:center;height:42px;line-height:42px;position: relative; float:left; width:120px; padding-bottom:0px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_line.jpg);background-color:transparent;background-repeat:no-repeat;background-position:top right;}  #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop:hover{height:42px;line-height:42px;width:120px;text-align:center;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_hover.jpg);background-repeat:repeat-x;background-color:transparent;background-position:top left;}  #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop>a{white-space:nowrap;font-style:normal;font-weight:normal;font-family:arial;font-size:12px;display:block; padding:0px; color:#ffffff; text-align:center; text-decoration: none;overflow:hidden;}  #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop>a:hover{color:#fff; text-decoration: none;font-size:12px;font-style:normal;font-weight:normal;font-family:arial;color:#ffffff;text-align:center;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul {position:absolute;left:0px;display:none; background-color:transparent;margin-left:0px;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li {padding-left:5px;padding-right:5px;text-align:center;position:relative; float: left;padding-bottom:0px;background-image:none;background-color:#fc6701;height:25px;line-height:25px;background-position:top left;background-repeat:repeat;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li:hover{text-align:center;background-image:none; background-color:#dc3200;width:120px;height:25px;line-height:25px;background-position:top left;background-repeat:repeat;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li a {text-align:center;color:#fff;font-size:12px;font-family:arial;font-style:normal;font-weight:normal;white-space:nowrap;display:block;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li a:hover{ color:#fff;font-size:12px;font-family:arial;text-align:center;font-style:normal;font-weight:normal;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul ul {position: absolute; margin-left: 120px; margin-top: -25px;display: none; } #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop:hover{background-image:url("http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/colorstyle/limegreen/menu1_21_2W9G.jpg");}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li{background-color:#09cf2d;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li:hover{background-color:#008419;} #nav_layerF127556143670E463770FFD5DC0A9B91{background-color:transparent;} #nav_layerF127556143670E463770FFD5DC0A9B91{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop{background-color:transparent;} #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop>a{color:#333333;}  /*layerF127556143670E463770FFD5DC0A9B91*/	
</style>	
</div><input type="hidden" id="page_id" name="page_id" value="152" rpid="152">
<div id="scroll_container" class="scroll_contain" style="">
	<div id="scroll_container_bg" style="background-color:#FFFFFF;background-repeat:repeat;background-attachment:scroll;background-image:url('http://leather-1.pic1.websiteonline.cn/upload/templatefiles/bg_pattern_KI5P.gif')">&nbsp;</div>
<script>
initScrollcontainerHeight();	
</script>
	<div id="canvas" style="border-bottom: 2px solid transparent;margin: 0 auto;width:980px;background-repeat:repeat-y;background-position:center top;height:1339px">
	<div id='layerEBF8EAFBB4759DD3E4CBBB1E694C8E31' type='title'  class='cstlayer' style='left: 0px; top: 14px; position: absolute; z-index: 100; width: 980px; height: 1325px;'  mid="layer6E0835B1B5036501532583081050F867"   deg='0'><div class="wp-title_content" style="border-radius:1px;-moz-border-radius:1px;-webkit-border-radius:1px; word-wrap: break-word; padding: 0px; border-color: rgb(255, 255, 255); border-width: 1px; height: 1323px; width: 978px; border-style: solid; background-color: rgb(255, 255, 255); display: block;"><br></div>
<script type="text/javascript">
$(function(){
	$('.wp-title_content').each(function(){
		if($(this).find('div').attr('align')=='justify'){
			$(this).find('div').css({'text-justify':'inter-ideograph','text-align':'justify'});
		}
	})	
})
</script>
</div><script>		         if($.browser.msie && $.browser.version < 9) $('#layerEBF8EAFBB4759DD3E4CBBB1E694C8E31').find('div:first').addClass('layer_content'); 		         $('#layerEBF8EAFBB4759DD3E4CBBB1E694C8E31').triggerHandler('layer_ready');</script><div id='layer30448BDC06E86E3BE25219CC6875F8BC' type='title'  class='cstlayer' style='left: 19px; top: 39px; position: absolute; z-index: 101; width: 944px; height: 97px;'  mid=""   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent; border-width: 0px; height: 97px; width: 944px; border-style: solid; background-color: rgb(249, 249, 249); display: block;"><br></div>
</div><script>		         $('#layer30448BDC06E86E3BE25219CC6875F8BC').triggerHandler('layer_ready');</script><div id='layer2899FE40746984E0BF6964D39F664212' type='media'  class='cstlayer' style='left: 18px; top: 39px; position: absolute; z-index: 102; width: 316px; height: 97px;'  mid=""   deg='0'><script>
create_pc_media_set_pic('layer2899FE40746984E0BF6964D39F664212',false);
</script>
<div class="wp-media_content"  style="overflow: hidden; width: 316px; height: 97px; border-width: 0px; border-style: solid; padding: 0px;" type="0">
<div class="img_over"  style='overflow: hidden; border-color: transparent; border-width: 0px; width: 316px; height: 97px;'>

<div class="imgloading" style="z-index:100;"> </div>
<img  id="wp-media-image_layer2899FE40746984E0BF6964D39F664212" class="img_lazy_load paragraph_image"  data-original="/images/logo.jpg" type="zoom" src="http://static.websiteonline.cn/website/template/default/images/blank.gif" style="width: 316px; height: auto;;" />
</div>

</div>
<script>
(function(){
	var imgover=$('#wp-media-image_layer2899FE40746984E0BF6964D39F664212').closest('.img_over');
	imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
	$('#layer2899FE40746984E0BF6964D39F664212').layer_ready(function(){
		layer_img_lzld('layer2899FE40746984E0BF6964D39F664212');
	})
})()	
</script>
</div><script>		         $('#layer2899FE40746984E0BF6964D39F664212').triggerHandler('layer_ready');</script><div id='layerFF270C3B731F4A82118DE2DC107A0621' type='multilingual'  class='cstlayer' style='left: 852px; top: 66px; position: absolute; z-index: 103; width: 113px; height: 48px;'  mid=""   deg='0'><script type="text/javascript">
function wp_multilingual_changeLang(id)
{
	$.ajax({
		type:'POST',
		url:parseToURL('multilingual','changeLang'),
		data:"id="+id,
		success:function(js_code){
			eval(js_code);
		},
		error:function(response){
			wp_alert("Choose the language.<br/>请求失败");
		}
	});
}
</script>
<div class="wp-multilingual_content" style="border-color: transparent; border-width: 0px; width: 113px; height: 48px;" langstyle="simple">
<div skin="simple" class="wp-multilingual_css" style="display:none;"></div>
<div class="wp-content">
 
    <script type="text/javascript"> 
$(function(){
	var fatherid = $("#layerFF270C3B731F4A82118DE2DC107A0621").attr('fatherid');
	var fartherInfixed = $("#"+fatherid).attr('infixed')||0;
	if(fartherInfixed==1) $("#layerFF270C3B731F4A82118DE2DC107A0621").find('.wp-diy-selectedc-outside').remove();
	$("#layerFF270C3B731F4A82118DE2DC107A0621").find('select').cstselect({selectclass:'wp-diy-selectedc'});
			  
})
 
</script>
  
</div>
</div>
 <script type="text/javascript">
	$(function(){
		var custom_css = '';
		var langstyle = 'simple';
		var $curlayer = $('#layerFF270C3B731F4A82118DE2DC107A0621');
		var custom_a_font_size = $curlayer.find('.wp-content .custom_dom_class').css('font-size');
		var custom_a_color = $curlayer.find('.wp-content .custom_dom_class').css('color');
		if(custom_a_font_size){
			$curlayer.find('.wp-content .custom_dom_class a').css('font-size',custom_a_font_size);
		}
		if(custom_a_color){
			$curlayer.find('.wp-content .custom_dom_class a').css('color',custom_a_color);
		}
		if((langstyle == 'default' || langstyle == 'yellow') && custom_css == ''){
			$curlayer.find('.wp-content p.custom_dom_class a').css('color','red');
		}
		$curlayer.find('.wp-content .custom_dom_class a').css('font-family','microsoft yahei');
		$(".aout_over").click(function(){$(".text-a").slideToggle(100);});
		setTimeout(function(){
			var text_a_font_size = $curlayer.find('.wp-content .custom_dom_class a').css('font-size') || '12px';
			var text_a_color = $curlayer.find('.wp-content .custom_dom_class .aout').css('color') || '#ffffff';
			var text_a_bgcolor = $curlayer.find('.wp-content .custom_dom_class').css('background-color') || '#ffffff';
			var text_a_border_radius = $curlayer.find('.wp-content .custom_dom_class .aout').css('border-radius') || '5px';
			var $text_a = $curlayer.find('.wp-content .custom_dom_class .text-a');
			if(text_a_font_size){$text_a.find('a').css('font-size',text_a_font_size);}
			if(text_a_color){$text_a.find('a').css('color',text_a_color);}
			if(text_a_bgcolor){$text_a.css('background-color',text_a_bgcolor);}
			if(text_a_border_radius){$text_a.css('border-radius',text_a_border_radius);}
		},400);
	});
</script>
</div><script>		         $('#layerFF270C3B731F4A82118DE2DC107A0621').triggerHandler('layer_ready');</script><div id='layerF127556143670E463770FFD5DC0A9B91' type='new_navigation'  class='cstlayer' style='left: 18px; top: 150px; position: absolute; z-index: 115; display: block; width: 944px; height: 42px;'  mid=""   deg='0'><div class="wp-new_navigation_content" style="border-color: transparent; border-width: 0px; width: 944px; display: block; overflow: visible; height: auto;;display:block;overflow:hidden;height:0px;" type="0">
<script type="text/javascript"> 
				$("#layerF127556143670E463770FFD5DC0A9B91").data("datasty_", '@charset "utf-8";  #nav_layerF127556143670E463770FFD5DC0A9B91,#nav_layerF127556143670E463770FFD5DC0A9B91 ul,#nav_layerF127556143670E463770FFD5DC0A9B91 li{list-style-type:none; margin:0px; padding:0px; border:thin none;}  #nav_layerF127556143670E463770FFD5DC0A9B91 { position:relative;padding-left:20px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_bg.jpg);background-repeat:repeat;background-position:top left;background-color:transparent;height:42px;-moz-border-radius:5px; -webkit-border-radius:5px; border-radius:5px;behavior: url(script/pie.htc);}  #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop{padding-left:5px;padding-right:5px;text-align:center;height:42px;line-height:42px;position: relative; float:left; width:120px; padding-bottom:0px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_line.jpg);background-color:transparent;background-repeat:no-repeat;background-position:top right;}  #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop:hover{height:42px;line-height:42px;width:120px;text-align:center;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_hover.jpg);background-repeat:repeat-x;background-color:transparent;background-position:top left;}  #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop>a{white-space:nowrap;font-style:normal;font-weight:normal;font-family:arial;font-size:12px;display:block; padding:0px; color:#ffffff; text-align:center; text-decoration: none;overflow:hidden;}  #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop>a:hover{color:#fff; text-decoration: none;font-size:12px;font-style:normal;font-weight:normal;font-family:arial;color:#ffffff;text-align:center;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul {position:absolute;left:0px;display:none; background-color:transparent;margin-left:0px;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li {padding-left:5px;padding-right:5px;text-align:center;position:relative; float: left;padding-bottom:0px;background-image:none;background-color:#fc6701;height:25px;line-height:25px;background-position:top left;background-repeat:repeat;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li:hover{text-align:center;background-image:none; background-color:#dc3200;width:120px;height:25px;line-height:25px;background-position:top left;background-repeat:repeat;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li a {text-align:center;color:#fff;font-size:12px;font-family:arial;font-style:normal;font-weight:normal;white-space:nowrap;display:block;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li a:hover{ color:#fff;font-size:12px;font-family:arial;text-align:center;font-style:normal;font-weight:normal;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul ul {position: absolute; margin-left: 120px; margin-top: -25px;display: none; }');
		$("#layerF127556143670E463770FFD5DC0A9B91").data("datastys_", '#nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop:hover{background-image:url("http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/colorstyle/limegreen/menu1_21_2W9G.jpg");}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li{background-color:#09cf2d;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li:hover{background-color:#008419;} #nav_layerF127556143670E463770FFD5DC0A9B91{background-color:transparent;} #nav_layerF127556143670E463770FFD5DC0A9B91{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop{background-color:transparent;} #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop>a{color:#333333;}');
	</script>

<?php require 'menu.php';?>

<script type="text/javascript"> 
				$("#layerF127556143670E463770FFD5DC0A9B91").data("datasty_", '@charset "utf-8";  #nav_layerF127556143670E463770FFD5DC0A9B91,#nav_layerF127556143670E463770FFD5DC0A9B91 ul,#nav_layerF127556143670E463770FFD5DC0A9B91 li{list-style-type:none; margin:0px; padding:0px; border:thin none;}  #nav_layerF127556143670E463770FFD5DC0A9B91 { position:relative;padding-left:20px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_bg.jpg);background-repeat:repeat;background-position:top left;background-color:transparent;height:42px;-moz-border-radius:5px; -webkit-border-radius:5px; border-radius:5px;behavior: url(script/pie.htc);}  #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop{padding-left:5px;padding-right:5px;text-align:center;height:42px;line-height:42px;position: relative; float:left; width:120px; padding-bottom:0px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_line.jpg);background-color:transparent;background-repeat:no-repeat;background-position:top right;}  #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop:hover{height:42px;line-height:42px;width:120px;text-align:center;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_hover.jpg);background-repeat:repeat-x;background-color:transparent;background-position:top left;}  #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop>a{white-space:nowrap;font-style:normal;font-weight:normal;font-family:arial;font-size:12px;display:block; padding:0px; color:#ffffff; text-align:center; text-decoration: none;overflow:hidden;}  #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop>a:hover{color:#fff; text-decoration: none;font-size:12px;font-style:normal;font-weight:normal;font-family:arial;color:#ffffff;text-align:center;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul {position:absolute;left:0px;display:none; background-color:transparent;margin-left:0px;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li {padding-left:5px;padding-right:5px;text-align:center;position:relative; float: left;padding-bottom:0px;background-image:none;background-color:#fc6701;height:25px;line-height:25px;background-position:top left;background-repeat:repeat;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li:hover{text-align:center;background-image:none; background-color:#dc3200;width:120px;height:25px;line-height:25px;background-position:top left;background-repeat:repeat;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li a {text-align:center;color:#fff;font-size:12px;font-family:arial;font-style:normal;font-weight:normal;white-space:nowrap;display:block;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li a:hover{ color:#fff;font-size:12px;font-family:arial;text-align:center;font-style:normal;font-weight:normal;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul ul {position: absolute; margin-left: 120px; margin-top: -25px;display: none; }');
		$("#layerF127556143670E463770FFD5DC0A9B91").data("datastys_", '#nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop:hover{background-image:url("http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/colorstyle/limegreen/menu1_21_2W9G.jpg");}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li{background-color:#09cf2d;}  #nav_layerF127556143670E463770FFD5DC0A9B91 ul li:hover{background-color:#008419;} #nav_layerF127556143670E463770FFD5DC0A9B91{background-color:transparent;} #nav_layerF127556143670E463770FFD5DC0A9B91{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop{background-color:transparent;} #nav_layerF127556143670E463770FFD5DC0A9B91 li.wp_subtop>a{color:#333333;}');
	</script>

<script type="text/javascript" language="javascript" src="http://static.websiteonline.cn/website/plugin/new_navigation/js/overall.js?v=14761654"></script>
<script type="text/javascript">
function wp_get_navstyle(layer_id,key){
		var navStyle = $.trim($("#"+layer_id).data(key));
		return navStyle;	
	
}	
richtxt('layerF127556143670E463770FFD5DC0A9B91');
</script><script type="text/javascript">
function layerF127556143670E463770FFD5DC0A9B91_getSubMenuHoverCss(css_pro,type)
{
	var typeval=type;
	if(typeval==1){
		var regex = "#nav_layer[0-9|a-z|A-Z]+\\s+ul+\\s+li+\\s+a:\\s*hover\\s*{\\s*"+css_pro+"\\s*:[^;]+";
	}else{
		var regex = "#nav_layer[0-9|a-z|A-Z]+\\s+li\.wp_subtop>a:\\s*hover\\s*{\\s*"+css_pro+"\\s*:[^;]+";
	}
		var navStyle = $.trim($("#layerF127556143670E463770FFD5DC0A9B91").data("datastys_"));
		if(navStyle.length > 0)
	{
		var patt1 =new RegExp(regex,'i');
		var tmp = patt1.exec($.trim(navStyle));
		if(tmp)
		{
			return $.trim((tmp[0].match(/{[^:]+:[^;]+/)[0]).match(/:[^;]+/)[0].replace(':',''));
		}
	}

		navStyle = $.trim($("#layerF127556143670E463770FFD5DC0A9B91").data("datasty_"));
		if(navStyle.length > 0)
	{
		if(typeval==1){
			var patt1 = new RegExp("#nav_layer[0-9|a-z|A-Z]+\\s+ul+\\s+li+\\s+a:\\s*hover\\s*{[^}]+}",'i');
		}else{
			var patt1 = new RegExp("#nav_layer[0-9|a-z|A-Z]+\\s+li\.wp_subtop>a:\\s*hover\\s*{[^}]+}",'i');
		}
		var tmp = patt1.exec(navStyle);
		
		if(tmp)
		{
			var tmp1 = tmp[0].match(/{[^}]+}/)[0];
			var patt2 = new RegExp(css_pro+"\\s*:\\s*[^;]+;",'i');
			tmp = patt2.exec(tmp1);
			if(tmp) return $.trim(tmp[0].replace(/[^:]+:/,'').replace(';',''));
		}
	}

	return $.trim($("#nav_layerF127556143670E463770FFD5DC0A9B91 ul li a").css(css_pro));
}


	$('#layerF127556143670E463770FFD5DC0A9B91').layer_ready(function(){
		setTimeout(function(){
			wp_nav_addMoreButton('layerF127556143670E463770FFD5DC0A9B91');
		},0);
		$('#nav_layerF127556143670E463770FFD5DC0A9B91').find('li').hover(function(){
						$(this).children('ul').show();
			var type=$("#layerF127556143670E463770FFD5DC0A9B91").find('.wp-new_navigation_content').attr('type');
			if(type==2){
				var self = $(this);
				var pos = 0 ;
				var loops = 0;
				$('#nav_layerF127556143670E463770FFD5DC0A9B91').find('li').each(function(){
					if(loops == 1) return true;
					if(self.html() == $(this).html()){
						loops = 1;
						return true;
					}else{
						pos = pos + $(this).outerWidth();
					}	
					 
				})
				 
				$("#layerF127556143670E463770FFD5DC0A9B91").find('.ddli').hide();
				var this_width = $('#nav_layerF127556143670E463770FFD5DC0A9B91').outerWidth();
				var thisul_left = $('#nav_layerF127556143670E463770FFD5DC0A9B91').css("padding-left");
				thisul_left = parseInt(thisul_left);
				$(this).children('.ddli').outerWidth(this_width).css("margin-left","-"+(thisul_left+pos+5)+"px");
				$(this).children('.ddli').eq(0).slideDown();
			}
		},function(){
			$(this).children('ul').hide();
						var type=$("#layerF127556143670E463770FFD5DC0A9B91").find('.wp-new_navigation_content').attr('type');
			if(type==2){
				$("#layerF127556143670E463770FFD5DC0A9B91").find('.ddli').slideUp();
			}
		});


		//子菜单位置设置
		$(".menu_hs6 #nav_layerF127556143670E463770FFD5DC0A9B91").find('li').mouseenter(function(){
			var firstLi = $(this);
			var firestLiouterWidth = firstLi.outerWidth();
			var tmp_max_width = 0;
			firstLi.children('ul').children('li').width('auto').each(function(){
				if($(this).outerWidth() < firestLiouterWidth)
					$(this).width(firestLiouterWidth - parseInt($(this).css('padding-left')) - parseInt($(this).css('padding-right')));
				else if($(this).outerWidth() > tmp_max_width) tmp_max_width = $(this).outerWidth();
			});
				
			if(tmp_max_width > 0) firstLi.children('ul').children('li').each(function(){
				$(this).width(tmp_max_width - parseInt($(this).css('padding-left')) - parseInt($(this).css('padding-right')));
			});
				
			if(firstLi.parent('ul').attr('id') != 'nav_layerF127556143670E463770FFD5DC0A9B91')
				firstLi.children('ul').css('margin-left',firstLi.outerWidth());
			tmp_max_width = 0;
		});
		
		//第三级即下级菜单随高度增加位置动态修改
		$(".menu_hs6 #nav_layerF127556143670E463770FFD5DC0A9B91 ul li").hover(function(){
			if($(this).children('ul').length > 0)
			{
				var marginTop = parseInt($(this).children('ul').css('margin-top'));
				if($(this).children('ul').offset().top > $(this).offset().top)
					$(this).children('ul').css('margin-top',marginTop - ($(this).children('ul').offset().top - $(this).offset().top) + 'px');
			}
		});

		$('.menu_hs6 #nav_layerF127556143670E463770FFD5DC0A9B91').find('li').hover(function(){
			var direction=$("#layerF127556143670E463770FFD5DC0A9B91").find('.nav1').attr('direction');
			var height = parseInt($(this).outerHeight());
			if($(this).parent().hasClass('navigation'))
			{
				$('#nav_layerF127556143670E463770FFD5DC0A9B91 .wp_subtop').removeClass("lihover").children('a').removeClass("ahover");
				if(direction==1){				
					$(this).children('ul').css('top','auto').css('bottom',height + 'px');
				}else{				
					$(this).children('ul').css('top',height+'px').css('bottom','auto');	
				}
				$(this).children('a').css({'font-family':layerF127556143670E463770FFD5DC0A9B91_getSubMenuHoverCss("font-family",0),'font-size':layerF127556143670E463770FFD5DC0A9B91_getSubMenuHoverCss("font-size",0),'color':layerF127556143670E463770FFD5DC0A9B91_getSubMenuHoverCss("color",0),'font-weight':layerF127556143670E463770FFD5DC0A9B91_getSubMenuHoverCss("font-weight",0),'font-style':layerF127556143670E463770FFD5DC0A9B91_getSubMenuHoverCss("font-style",0)});
			}else{
				if(direction==1){
					$(this).children('ul').css('top','auto').css('bottom', '-0px');
				}else{
					$(this).children('ul').css('top',height+'px').css('bottom','auto');					
				}
				$(this).children('a').css({'font-family':layerF127556143670E463770FFD5DC0A9B91_getSubMenuHoverCss("font-family",1),'font-size':layerF127556143670E463770FFD5DC0A9B91_getSubMenuHoverCss("font-size",1),'color':layerF127556143670E463770FFD5DC0A9B91_getSubMenuHoverCss("color",1),'font-weight':layerF127556143670E463770FFD5DC0A9B91_getSubMenuHoverCss("font-weight",1),'font-style':layerF127556143670E463770FFD5DC0A9B91_getSubMenuHoverCss("font-style",1)});
			}
		},function(){
			if($(this).parent().hasClass('navigation'))
			{
				wp_showdefaultHoverCss('layerF127556143670E463770FFD5DC0A9B91');
			}
			 $(this).children('a').attr("style",'');
				
		});
		wp_showdefaultHoverCss('layerF127556143670E463770FFD5DC0A9B91');
		wp_removeLoading('layerF127556143670E463770FFD5DC0A9B91');
	});
</script><div class="navigation_more" data-more="darkorange" data-typeval="0" data-menudata="&quot;&quot;"></div>
</div>
<script type="text/javascript">
$(function(){
	$("#layerF127556143670E463770FFD5DC0A9B91").find('.wp-new_navigation_content').each(function(){
		  var wid = $(this).width();
		  var liwid = $(this).find('li:eq(0)');
		  var lipadd = parseInt(liwid.css('padding-right'))+parseInt(liwid.css('padding-left'));
		  // 修复“导航条的分割线引起异常(bug#825)”问题
		  if ($.inArray('hs6', ['hs9','hs11']) != -1) {
		  	  var bwidth = parseInt(liwid.css("borderRightWidth") || '0');
		  	  if(bwidth > 0) $('li.wp_subtop', this).width(function(i, h){return h - bwidth});
		  }
            if(parseInt(liwid.width())>(wid-lipadd)){
		    $(this).find('li.wp_subtop').css('width',wid-lipadd);
		  }
		});
		
	// TASK#91 导航插件的优化 2016/05/26 ↓↓↓↓
		});
</script>

</div><script>		         $('#layerF127556143670E463770FFD5DC0A9B91').triggerHandler('layer_ready');</script><div id='layer6762E72E9FA6B71E3733777190F1D6B5' type='media'  class='cstlayer' style='left: 18px; top: 192px; position: absolute; z-index: 104; width: 943px; height: 492px;'  mid=""   deg='0'><script>
create_pc_media_set_pic('layer6762E72E9FA6B71E3733777190F1D6B5',false);
</script>
<div class="wp-media_content"  style="overflow: hidden; width: 943px; height: 492px; border-width: 0px; border-style: solid; padding: 0px;" type="0">
<div class="img_over"  style='overflow: hidden; border-color: transparent; border-width: 0px; width: 943px; height: 492px;'>

<div class="imgloading" style="z-index:100;"> </div>
<img  id="wp-media-image_layer6762E72E9FA6B71E3733777190F1D6B5" class="img_lazy_load paragraph_image"  data-original="http://leather-1.pic1.websiteonline.cn/upload/templatefiles/banner9_zSKm.jpg" type="cut" src="http://static.websiteonline.cn/website/template/default/images/blank.gif" style="width: 946px; height: 492px; left: 0px; top: 0px; position: relative;;" />
</div>

</div>
<script>
(function(){
	var imgover=$('#wp-media-image_layer6762E72E9FA6B71E3733777190F1D6B5').closest('.img_over');
	imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
	$('#layer6762E72E9FA6B71E3733777190F1D6B5').layer_ready(function(){
		layer_img_lzld('layer6762E72E9FA6B71E3733777190F1D6B5');
	})
})()	
</script>
</div><script>		         $('#layer6762E72E9FA6B71E3733777190F1D6B5').triggerHandler('layer_ready');</script><div id='layer9540CFCBD361E15A6BBFA35A63CB60FA' type='title'  class='cstlayer' style='left: 17px; top: 702px; position: absolute; z-index: 105; width: 945px; height: 173px;'  mid=""   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent; border-width: 0px; height: 173px; width: 945px; border-style: solid; background-color: rgb(249, 249, 249); display: block;"><br></div>
</div><script>		         $('#layer9540CFCBD361E15A6BBFA35A63CB60FA').triggerHandler('layer_ready');</script><div id='layer16BEEE45C0F41546429598598B53A36F' type='media'  class='cstlayer' style='left: 281px; top: 724px; position: absolute; z-index: 107; width: 190px; height: 128px;'  mid=""   deg='0'><script>
create_pc_media_set_pic('layer16BEEE45C0F41546429598598B53A36F',false);
</script>
<div class="wp-media_content"  style="overflow: hidden; width: 190px; height: 128px; border-width: 0px; border-style: solid; padding: 0px;" type="0">
<div class="img_over"  style='overflow: hidden; border-color: transparent; border-width: 0px; width: 190px; height: 128px;'>

<div class="imgloading" style="z-index:100;"> </div>
<img  id="wp-media-image_layer16BEEE45C0F41546429598598B53A36F" class="img_lazy_load paragraph_image"  data-original="http://leather-1.pic1.websiteonline.cn/upload/templatefiles/25-73-home_uv49.jpg" type="zoom" src="http://static.websiteonline.cn/website/template/default/images/blank.gif" style="width: 190px; height: auto;;" />
</div>

</div>
<script>
(function(){
	var imgover=$('#wp-media-image_layer16BEEE45C0F41546429598598B53A36F').closest('.img_over');
	imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
	$('#layer16BEEE45C0F41546429598598B53A36F').layer_ready(function(){
		layer_img_lzld('layer16BEEE45C0F41546429598598B53A36F');
	})
})()	
</script>
</div><script>		         $('#layer16BEEE45C0F41546429598598B53A36F').triggerHandler('layer_ready');</script><div id='layerD29D1CDAC3C98060A9F5236E2B74EDCA' type='media'  class='cstlayer' style='left: 512px; top: 724px; position: absolute; z-index: 106; width: 190px; height: 128px;'  mid=""   deg='0'><script>
create_pc_media_set_pic('layerD29D1CDAC3C98060A9F5236E2B74EDCA',false);
</script>
<div class="wp-media_content"  style="overflow: hidden; width: 190px; height: 128px; border-width: 0px; border-style: solid; padding: 0px;" type="0">
<div class="img_over"  style='overflow: hidden; border-color: transparent; border-width: 0px; width: 190px; height: 128px;'>

<div class="imgloading" style="z-index:100;"> </div>
<img  id="wp-media-image_layerD29D1CDAC3C98060A9F5236E2B74EDCA" class="img_lazy_load paragraph_image"  data-original="http://leather-1.pic1.websiteonline.cn/upload/templatefiles/19-55-home_6d7a.jpg" type="zoom" src="http://static.websiteonline.cn/website/template/default/images/blank.gif" style="width: 190px; height: auto;;" />
</div>

</div>
<script>
(function(){
	var imgover=$('#wp-media-image_layerD29D1CDAC3C98060A9F5236E2B74EDCA').closest('.img_over');
	imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
	$('#layerD29D1CDAC3C98060A9F5236E2B74EDCA').layer_ready(function(){
		layer_img_lzld('layerD29D1CDAC3C98060A9F5236E2B74EDCA');
	})
})()	
</script>
</div><script>		         $('#layerD29D1CDAC3C98060A9F5236E2B74EDCA').triggerHandler('layer_ready');</script><div id='layer787D7A3254770606771D11E976BA15B9' type='media'  class='cstlayer' style='left: 740px; top: 724px; position: absolute; z-index: 109; width: 190px; height: 128px;'  mid=""   deg='0'><script>
create_pc_media_set_pic('layer787D7A3254770606771D11E976BA15B9',false);
</script>
<div class="wp-media_content"  style="overflow: hidden; width: 190px; height: 128px; border-width: 0px; border-style: solid; padding: 0px;" type="0">
<div class="img_over"  style='overflow: hidden; border-color: transparent; border-width: 0px; width: 190px; height: 128px;'>

<div class="imgloading" style="z-index:100;"> </div>
<img  id="wp-media-image_layer787D7A3254770606771D11E976BA15B9" class="img_lazy_load paragraph_image"  data-original="http://leather-1.pic1.websiteonline.cn/upload/templatefiles/43-127-home_ZQrj.jpg" type="zoom" src="http://static.websiteonline.cn/website/template/default/images/blank.gif" style="width: 190px; height: auto;;" />
</div>

</div>
<script>
(function(){
	var imgover=$('#wp-media-image_layer787D7A3254770606771D11E976BA15B9').closest('.img_over');
	imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
	$('#layer787D7A3254770606771D11E976BA15B9').layer_ready(function(){
		layer_img_lzld('layer787D7A3254770606771D11E976BA15B9');
	})
})()	
</script>
</div><script>		         $('#layer787D7A3254770606771D11E976BA15B9').triggerHandler('layer_ready');</script><div id='layerDEBB03AA96CAF708BA34B585EF0C1A13' type='media'  class='cstlayer' style='left: 53px; top: 724px; position: absolute; z-index: 108; width: 190px; height: 128px; display: block;'  mid=""   deg='0'><script>
create_pc_media_set_pic('layerDEBB03AA96CAF708BA34B585EF0C1A13',false);
</script>
<div class="wp-media_content"  style="overflow: hidden; width: 190px; height: 128px;" type="0">
<div class="img_over"  style='overflow: hidden; border-color: transparent; border-width: 0px; width: 190px; height: 128px;'>

<div class="imgloading" style="z-index:100;"> </div>
<img  id="wp-media-image_layerDEBB03AA96CAF708BA34B585EF0C1A13" class="img_lazy_load paragraph_image"  data-original="http://leather-1.pic1.websiteonline.cn/upload/templatefiles/31-91-home_n3T1.jpg" type="zoom" src="http://static.websiteonline.cn/website/template/default/images/blank.gif" style="width: 190px; height: auto;;" />
</div>

</div>
<script>
(function(){
	var imgover=$('#wp-media-image_layerDEBB03AA96CAF708BA34B585EF0C1A13').closest('.img_over');
	imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
	$('#layerDEBB03AA96CAF708BA34B585EF0C1A13').layer_ready(function(){
		layer_img_lzld('layerDEBB03AA96CAF708BA34B585EF0C1A13');
	})
})()	
</script>
</div><script>		         $('#layerDEBB03AA96CAF708BA34B585EF0C1A13').triggerHandler('layer_ready');</script><div id='layerFA8C6760E84A9B8446CAA78B63819D7E' type='title'  class='cstlayer' style='left: 681px; top: 891px; position: absolute; z-index: 110; width: 281px; height: 421px;'  mid=""   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent; border-width: 0px; height: 421px; width: 281px; display: block; border-style: solid; background-color: rgb(249, 114, 6);"><br></div>
</div><script>		         $('#layerFA8C6760E84A9B8446CAA78B63819D7E').triggerHandler('layer_ready');</script><div id='layer8E60510F85C5A632F1D34DB673845D23' type='title'  class='cstlayer' style='left: 26px; top: 891px; position: absolute; z-index: 116; width: 631px; height: 38px; opacity: 1;'  mid=""   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent transparent rgb(204, 204, 204); border-width: 0px 0px 1px; height: 37px; width: 631px; display: block; border-style: solid solid dashed; background-position: center bottom; background-repeat:repeat-x;"><span style="font-size: 18px; font-family: Arial,Helvetica,sans-serif;"><span style="color: rgb(51, 51, 51);">联系我们</span><br></span></div>
</div><script>		         $('#layer8E60510F85C5A632F1D34DB673845D23').triggerHandler('layer_ready');</script><div id='layer84CB373B5FA7726E8EDFC84E15323A23' type='title'  class='cstlayer' style='left: 691px; top: 897px; position: absolute; z-index: 111; width: 150px; height: 31px;'  mid=""   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent; border-width: 0px; height: 31px; width: 150px; display: block;"><span style="color: rgb(255, 255, 255); font-size: 14px;"><strong>企业文化</strong></span></div>
</div><script>		         $('#layer84CB373B5FA7726E8EDFC84E15323A23').triggerHandler('layer_ready');</script><div id='layer43F2A65391486E5B49E81904D5B7859E' type='title'  class='cstlayer' style='left: 693px; top: 931px; position: absolute; z-index: 112; width: 259px; height: 120px;'  mid=""   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent transparent rgb(255, 255, 255); border-width: 0px 0px 1px; height: 119px; width: 259px; display: block; border-style: solid solid dashed;"><span style="color:#FFFFFF;"><strong>1.企业经营管理理念</strong></span><br><span style="color:#FFFFFF;">诚实、诚信、严谨、创新。</span></div>
</div><script>		         $('#layer43F2A65391486E5B49E81904D5B7859E').triggerHandler('layer_ready');</script><div id='layer414B4FC0B1F6D87BBC41AF9DBD58F620' type='baidumap'  class='cstlayer' style='left: 25px; top: 941px; position: absolute; z-index: 118; width: 631px; height: 226px;'  mid=""   deg='0'><script type="text/javascript">
$(document).ready(function(){
	$('.lockmove').width(0).height(0);
	});
</script>
<div class="wp-baidumap_content" style="width: 631px; height: 226px; border-color: transparent; border-width: 0px;">
<div class="lockmove" style="width: 631px; height: 226px; position: absolute;"></div>
<iframe width="604" height="403" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://j.map.baidu.com/QW-8H"></iframe>
</div></div><script>		         $('#layer414B4FC0B1F6D87BBC41AF9DBD58F620').triggerHandler('layer_ready');</script><div id='layerB7311789628AB824AA263CD421DA3F00' type='title'  class='cstlayer' style='left: 693px; top: 1065px; position: absolute; z-index: 113; width: 259px; height: 95px;'  mid=""   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent transparent rgb(255, 255, 255); border-width: 0px 0px 1px; height: 94px; width: 259px; display: block; border-style: solid solid dashed;"><span style="color:#FFFFFF;"><strong>2.发展理念</strong><br>做精、做强、做大。</span><span style="color:#FFFFFF;"></span></div>
</div><script>		         $('#layerB7311789628AB824AA263CD421DA3F00').triggerHandler('layer_ready');</script><div id='layerA2A7CBB435E0B73B554BD2E6172B68FD' type='title'  class='cstlayer' style='left: 693px; top: 1176px; position: absolute; z-index: 114; width: 259px; height: 122px;'  mid=""   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent transparent rgb(255, 255, 255); border-width: 0px 0px 1px; height: 120px; width: 259px; display: block; border-style: solid solid dashed;"><span style="color:#FFFFFF;"><strong>3.人才理念</strong><br>适合就是人才。</span><span style="color:#FFFFFF;"></span></div>
</div><script>		         $('#layerA2A7CBB435E0B73B554BD2E6172B68FD').triggerHandler('layer_ready');</script><div id='layer75E037F6E186459A39F8981BCF10E33B' type='title'  class='cstlayer' style='left: 25px; top: 1182px; position: absolute; z-index: 117; width: 335px; height: 136px; display: block;'  mid=""   deg='0'>
<div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent; border-width: 0px; height: 136px; width: 335px; display: block; border-style: solid;">
	<?php echo $config['company'];?><br><br>
	联络地址：<?php echo $config['address'];?><br><br>
	电话：<?php echo $config['tel'];?><br><br>
	邮箱：<?php echo $config['email'];?><br>
</div>
</div><script>		         $('#layer75E037F6E186459A39F8981BCF10E33B').triggerHandler('layer_ready');</script>	</div>	



<?php require 'footer.php';?>