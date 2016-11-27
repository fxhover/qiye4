<?php 
require 'header.php'; 
$GLOBALS['page'] = 'index';
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
/*layerBCD015965537EFE9E83D01C815E1092D*/.wp-diy-selectedc{ width:auto; height:22px;line-height:22px; background:#fff;-moz-border-radius:2px; -webkit-border-radius:2px; border-radius:2px; border:1px solid #b5b5b5; }  .wp-diy-selectedc-left{ float:left; padding:0 5px; }  .wp-diy-selectedc-button{ float:right;}  .wp-diy-selectedc-button a{ display:block; width:14px; height:22px; overflow:hidden; background:url(http://static.websiteonline.cn/website/plugin/multilingual/styles/simple/images/wp-diy-selected-button.png) no-repeat;}  .wp-diy-selectedc-button a.disabled {background:url(http://static.websiteonline.cn/website/plugin/multilingual/styles/simple/images/wp-diy-selected-button2.gif) no-repeat;cursor:default;}  .wp-diy-selectedc-content{ margin-left:1px;background:#FFF; border:1px solid #b5b5b5; border-top:none; display:none; position:absolute; max-height:110px; overflow-y:auto; overflow-x:hidden; z-index:1111; }  .wp-diy-selectedc-content ul li{ height:22px; line-height:22px; text-indent:5px;}  .wp-diy-selectedc-content ul li.local{ background:#333333; color:#FFF; cursor:pointer;}/*layerBCD015965537EFE9E83D01C815E1092D*//*layer233174DC0EA1CE18D43FF8F3BC4E7D7E*/  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E,#nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul,#nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li{list-style-type:none; margin:0px; padding:0px; border:thin none;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E { position:relative;padding-left:20px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_bg.jpg);background-repeat:repeat;background-position:top left;background-color:transparent;height:42px;-moz-border-radius:5px; -webkit-border-radius:5px; border-radius:5px;behavior: url(script/pie.htc);}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop{padding-left:5px;padding-right:5px;text-align:center;height:42px;line-height:42px;position: relative; float:left; width:120px; padding-bottom:0px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_line.jpg);background-color:transparent;background-repeat:no-repeat;background-position:top right;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop:hover{height:42px;line-height:42px;width:120px;text-align:center;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_hover.jpg);background-repeat:repeat-x;background-color:transparent;background-position:top left;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop>a{white-space:nowrap;font-style:normal;font-weight:normal;font-family:arial;font-size:12px;display:block; padding:0px; color:#ffffff; text-align:center; text-decoration: none;overflow:hidden;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop>a:hover{color:#fff; text-decoration: none;font-size:12px;font-style:normal;font-weight:normal;font-family:arial;color:#ffffff;text-align:center;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul {position:absolute;left:0px;display:none; background-color:transparent;margin-left:0px;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li {padding-left:5px;padding-right:5px;text-align:center;position:relative; float: left;padding-bottom:0px;background-image:none;background-color:#fc6701;height:25px;line-height:25px;background-position:top left;background-repeat:repeat;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li:hover{text-align:center;background-image:none; background-color:#dc3200;width:120px;height:25px;line-height:25px;background-position:top left;background-repeat:repeat;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li a {text-align:center;color:#fff;font-size:12px;font-family:arial;font-style:normal;font-weight:normal;white-space:nowrap;display:block;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li a:hover{ color:#fff;font-size:12px;font-family:arial;text-align:center;font-style:normal;font-weight:normal;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul ul {position: absolute; margin-left: 120px; margin-top: -25px;display: none; } #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop:hover{background-image:url("http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/colorstyle/limegreen/menu1_21_2W9G.jpg");}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li{background-color:#09cf2d;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li:hover{background-color:#008419;} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E{background-color:transparent;} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop{background-color:transparent;} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop>a{color:#333333;} /*layer233174DC0EA1CE18D43FF8F3BC4E7D7E*//*layer233174DC0EA1CE18D43FF8F3BC4E7D7E*/  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E,#nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul,#nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li{list-style-type:none; margin:0px; padding:0px; border:thin none;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E { position:relative;padding-left:20px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_bg.jpg);background-repeat:repeat;background-position:top left;background-color:transparent;height:42px;-moz-border-radius:5px; -webkit-border-radius:5px; border-radius:5px;behavior: url(script/pie.htc);}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop{padding-left:5px;padding-right:5px;text-align:center;height:42px;line-height:42px;position: relative; float:left; width:120px; padding-bottom:0px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_line.jpg);background-color:transparent;background-repeat:no-repeat;background-position:top right;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop:hover{height:42px;line-height:42px;width:120px;text-align:center;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_hover.jpg);background-repeat:repeat-x;background-color:transparent;background-position:top left;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop>a{white-space:nowrap;font-style:normal;font-weight:normal;font-family:arial;font-size:12px;display:block; padding:0px; color:#ffffff; text-align:center; text-decoration: none;overflow:hidden;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop>a:hover{color:#fff; text-decoration: none;font-size:12px;font-style:normal;font-weight:normal;font-family:arial;color:#ffffff;text-align:center;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul {position:absolute;left:0px;display:none; background-color:transparent;margin-left:0px;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li {padding-left:5px;padding-right:5px;text-align:center;position:relative; float: left;padding-bottom:0px;background-image:none;background-color:#fc6701;height:25px;line-height:25px;background-position:top left;background-repeat:repeat;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li:hover{text-align:center;background-image:none; background-color:#dc3200;width:120px;height:25px;line-height:25px;background-position:top left;background-repeat:repeat;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li a {text-align:center;color:#fff;font-size:12px;font-family:arial;font-style:normal;font-weight:normal;white-space:nowrap;display:block;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li a:hover{ color:#fff;font-size:12px;font-family:arial;text-align:center;font-style:normal;font-weight:normal;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul ul {position: absolute; margin-left: 120px; margin-top: -25px;display: none; } #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop:hover{background-image:url("http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/colorstyle/limegreen/menu1_21_2W9G.jpg");}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li{background-color:#09cf2d;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li:hover{background-color:#008419;} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E{background-color:transparent;} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop{background-color:transparent;} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop>a{color:#333333;}  /*layer233174DC0EA1CE18D43FF8F3BC4E7D7E*/	
</style>	
</div><input type="hidden" id="page_id" name="page_id" value="153" rpid="153">
<div id="scroll_container" class="scroll_contain" style="">
	<div id="scroll_container_bg" style="">&nbsp;</div>
<script>
initScrollcontainerHeight();	
</script>
	<div id="canvas" style="border-bottom: 2px solid transparent;margin: 0 auto;width:980px;;height:1334px">
	<div id='layer1077B1020A332BEA219ADF3D79B7EC72' type='title'  class='cstlayer' style='left: 0px; top: 14px; position: absolute; z-index: 100; width: 980px; height: 1320px;'  mid=""   deg='0'><div class="wp-title_content" style="border-radius:1px;-moz-border-radius:1px;-webkit-border-radius:1px; word-wrap: break-word; padding: 0px; border-color: rgb(255, 255, 255); border-width: 1px; height: 1318px; width: 978px; border-style: solid; background-color: rgb(255, 255, 255); display: block;"><br></div>
<script type="text/javascript">
$(function(){
	$('.wp-title_content').each(function(){
		if($(this).find('div').attr('align')=='justify'){
			$(this).find('div').css({'text-justify':'inter-ideograph','text-align':'justify'});
		}
	})	
})
</script>
</div><script>		         if($.browser.msie && $.browser.version < 9) $('#layer1077B1020A332BEA219ADF3D79B7EC72').find('div:first').addClass('layer_content'); 		         $('#layer1077B1020A332BEA219ADF3D79B7EC72').triggerHandler('layer_ready');</script><div id='layerC3EE1942886D56F78912E4555B52E09B' type='media'  class='cstlayer' style='left: 18px; top: 39px; position: absolute; z-index: 102; width: 316px; height: 97px;'  mid=""   deg='0'><script>
create_pc_media_set_pic('layerC3EE1942886D56F78912E4555B52E09B',false);
</script>
<div class="wp-media_content"  style="overflow: hidden; width: 316px; height: 97px; border-width: 0px; border-style: solid; padding: 0px;" type="0">
<div class="img_over"  style='overflow: hidden; border-color: transparent; border-width: 0px; width: 316px; height: 97px;'>

<div class="imgloading" style="z-index:100;"> </div>
<img  id="wp-media-image_layerC3EE1942886D56F78912E4555B52E09B" class="img_lazy_load paragraph_image"  data-original="/images/logo.jpg" type="zoom" src="http://static.websiteonline.cn/website/template/default/images/blank.gif" style="width: 316px; height: auto;;" />
</div>

</div>
<script>
(function(){
	var imgover=$('#wp-media-image_layerC3EE1942886D56F78912E4555B52E09B').closest('.img_over');
	imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
	$('#layerC3EE1942886D56F78912E4555B52E09B').layer_ready(function(){
		layer_img_lzld('layerC3EE1942886D56F78912E4555B52E09B');
	})
})()	
</script>
</div><script>		         $('#layerC3EE1942886D56F78912E4555B52E09B').triggerHandler('layer_ready');</script><div id='layerAC3CA10B8EAD3813A557DE324C9E3B75' type='title'  class='cstlayer' style='left: 19px; top: 39px; position: absolute; z-index: 101; width: 944px; height: 97px;'  mid=""   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent; border-width: 0px; height: 97px; width: 944px; border-style: solid; background-color: rgb(249, 249, 249); display: block;"><br></div>
</div><script>		         $('#layerAC3CA10B8EAD3813A557DE324C9E3B75').triggerHandler('layer_ready');</script><div id='layerBCD015965537EFE9E83D01C815E1092D' type='multilingual'  class='cstlayer' style='left: 852px; top: 66px; position: absolute; z-index: 103; width: 113px; height: 48px;'  mid=""   deg='0'><script type="text/javascript">
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
	var fatherid = $("#layerBCD015965537EFE9E83D01C815E1092D").attr('fatherid');
	var fartherInfixed = $("#"+fatherid).attr('infixed')||0;
	if(fartherInfixed==1) $("#layerBCD015965537EFE9E83D01C815E1092D").find('.wp-diy-selectedc-outside').remove();
	$("#layerBCD015965537EFE9E83D01C815E1092D").find('select').cstselect({selectclass:'wp-diy-selectedc'});
			  
})
 
</script>
 
  
</div>
</div>
 <script type="text/javascript">
	$(function(){
		var custom_css = '';
		var langstyle = 'simple';
		var $curlayer = $('#layerBCD015965537EFE9E83D01C815E1092D');
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
</div><script>		         $('#layerBCD015965537EFE9E83D01C815E1092D').triggerHandler('layer_ready');</script><div id='layer233174DC0EA1CE18D43FF8F3BC4E7D7E' type='new_navigation'  class='cstlayer' style='left: 17px; top: 150px; position: absolute; z-index: 121; display: block; width: 944px; height: 42px;'  mid=""   deg='0'><div class="wp-new_navigation_content" style="border-color: transparent; border-width: 0px; width: 944px; display: block; overflow: visible; height: auto;;display:block;overflow:hidden;height:0px;" type="0">
<script type="text/javascript"> 
				$("#layer233174DC0EA1CE18D43FF8F3BC4E7D7E").data("datasty_", '@charset "utf-8";  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E,#nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul,#nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li{list-style-type:none; margin:0px; padding:0px; border:thin none;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E { position:relative;padding-left:20px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_bg.jpg);background-repeat:repeat;background-position:top left;background-color:transparent;height:42px;-moz-border-radius:5px; -webkit-border-radius:5px; border-radius:5px;behavior: url(script/pie.htc);}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop{padding-left:5px;padding-right:5px;text-align:center;height:42px;line-height:42px;position: relative; float:left; width:120px; padding-bottom:0px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_line.jpg);background-color:transparent;background-repeat:no-repeat;background-position:top right;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop:hover{height:42px;line-height:42px;width:120px;text-align:center;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_hover.jpg);background-repeat:repeat-x;background-color:transparent;background-position:top left;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop>a{white-space:nowrap;font-style:normal;font-weight:normal;font-family:arial;font-size:12px;display:block; padding:0px; color:#ffffff; text-align:center; text-decoration: none;overflow:hidden;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop>a:hover{color:#fff; text-decoration: none;font-size:12px;font-style:normal;font-weight:normal;font-family:arial;color:#ffffff;text-align:center;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul {position:absolute;left:0px;display:none; background-color:transparent;margin-left:0px;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li {padding-left:5px;padding-right:5px;text-align:center;position:relative; float: left;padding-bottom:0px;background-image:none;background-color:#fc6701;height:25px;line-height:25px;background-position:top left;background-repeat:repeat;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li:hover{text-align:center;background-image:none; background-color:#dc3200;width:120px;height:25px;line-height:25px;background-position:top left;background-repeat:repeat;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li a {text-align:center;color:#fff;font-size:12px;font-family:arial;font-style:normal;font-weight:normal;white-space:nowrap;display:block;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li a:hover{ color:#fff;font-size:12px;font-family:arial;text-align:center;font-style:normal;font-weight:normal;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul ul {position: absolute; margin-left: 120px; margin-top: -25px;display: none; }');
		$("#layer233174DC0EA1CE18D43FF8F3BC4E7D7E").data("datastys_", '#nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop:hover{background-image:url("http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/colorstyle/limegreen/menu1_21_2W9G.jpg");}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li{background-color:#09cf2d;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li:hover{background-color:#008419;} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E{background-color:transparent;} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop{background-color:transparent;} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop>a{color:#333333;}');
	</script>

<?php require 'menu.php'; ?>

<script type="text/javascript"> 
				$("#layer233174DC0EA1CE18D43FF8F3BC4E7D7E").data("datasty_", '@charset "utf-8";  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E,#nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul,#nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li{list-style-type:none; margin:0px; padding:0px; border:thin none;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E { position:relative;padding-left:20px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_bg.jpg);background-repeat:repeat;background-position:top left;background-color:transparent;height:42px;-moz-border-radius:5px; -webkit-border-radius:5px; border-radius:5px;behavior: url(script/pie.htc);}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop{padding-left:5px;padding-right:5px;text-align:center;height:42px;line-height:42px;position: relative; float:left; width:120px; padding-bottom:0px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_line.jpg);background-color:transparent;background-repeat:no-repeat;background-position:top right;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop:hover{height:42px;line-height:42px;width:120px;text-align:center;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/menu6_hover.jpg);background-repeat:repeat-x;background-color:transparent;background-position:top left;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop>a{white-space:nowrap;font-style:normal;font-weight:normal;font-family:arial;font-size:12px;display:block; padding:0px; color:#ffffff; text-align:center; text-decoration: none;overflow:hidden;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop>a:hover{color:#fff; text-decoration: none;font-size:12px;font-style:normal;font-weight:normal;font-family:arial;color:#ffffff;text-align:center;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul {position:absolute;left:0px;display:none; background-color:transparent;margin-left:0px;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li {padding-left:5px;padding-right:5px;text-align:center;position:relative; float: left;padding-bottom:0px;background-image:none;background-color:#fc6701;height:25px;line-height:25px;background-position:top left;background-repeat:repeat;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li:hover{text-align:center;background-image:none; background-color:#dc3200;width:120px;height:25px;line-height:25px;background-position:top left;background-repeat:repeat;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li a {text-align:center;color:#fff;font-size:12px;font-family:arial;font-style:normal;font-weight:normal;white-space:nowrap;display:block;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li a:hover{ color:#fff;font-size:12px;font-family:arial;text-align:center;font-style:normal;font-weight:normal;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul ul {position: absolute; margin-left: 120px; margin-top: -25px;display: none; }');
		$("#layer233174DC0EA1CE18D43FF8F3BC4E7D7E").data("datastys_", '#nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop:hover{background-image:url("http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs6/colorstyle/limegreen/menu1_21_2W9G.jpg");}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li{background-color:#09cf2d;}  #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li:hover{background-color:#008419;} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E{background-color:transparent;} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop{background-color:transparent;} #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E li.wp_subtop>a{color:#333333;}');
	</script>

<script type="text/javascript" language="javascript" src="http://static.websiteonline.cn/website/plugin/new_navigation/js/overall.js?v=14761654"></script>
<script type="text/javascript">
function wp_get_navstyle(layer_id,key){
		var navStyle = $.trim($("#"+layer_id).data(key));
		return navStyle;	
	
}	
richtxt('layer233174DC0EA1CE18D43FF8F3BC4E7D7E');
</script><script type="text/javascript">
function layer233174DC0EA1CE18D43FF8F3BC4E7D7E_getSubMenuHoverCss(css_pro,type)
{
	var typeval=type;
	if(typeval==1){
		var regex = "#nav_layer[0-9|a-z|A-Z]+\\s+ul+\\s+li+\\s+a:\\s*hover\\s*{\\s*"+css_pro+"\\s*:[^;]+";
	}else{
		var regex = "#nav_layer[0-9|a-z|A-Z]+\\s+li\.wp_subtop>a:\\s*hover\\s*{\\s*"+css_pro+"\\s*:[^;]+";
	}
		var navStyle = $.trim($("#layer233174DC0EA1CE18D43FF8F3BC4E7D7E").data("datastys_"));
		if(navStyle.length > 0)
	{
		var patt1 =new RegExp(regex,'i');
		var tmp = patt1.exec($.trim(navStyle));
		if(tmp)
		{
			return $.trim((tmp[0].match(/{[^:]+:[^;]+/)[0]).match(/:[^;]+/)[0].replace(':',''));
		}
	}

		navStyle = $.trim($("#layer233174DC0EA1CE18D43FF8F3BC4E7D7E").data("datasty_"));
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

	return $.trim($("#nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li a").css(css_pro));
}


	$('#layer233174DC0EA1CE18D43FF8F3BC4E7D7E').layer_ready(function(){
		setTimeout(function(){
			wp_nav_addMoreButton('layer233174DC0EA1CE18D43FF8F3BC4E7D7E');
		},0);
		$('#nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E').find('li').hover(function(){
						$(this).children('ul').show();
			var type=$("#layer233174DC0EA1CE18D43FF8F3BC4E7D7E").find('.wp-new_navigation_content').attr('type');
			if(type==2){
				var self = $(this);
				var pos = 0 ;
				var loops = 0;
				$('#nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E').find('li').each(function(){
					if(loops == 1) return true;
					if(self.html() == $(this).html()){
						loops = 1;
						return true;
					}else{
						pos = pos + $(this).outerWidth();
					}	
					 
				})
				 
				$("#layer233174DC0EA1CE18D43FF8F3BC4E7D7E").find('.ddli').hide();
				var this_width = $('#nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E').outerWidth();
				var thisul_left = $('#nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E').css("padding-left");
				thisul_left = parseInt(thisul_left);
				$(this).children('.ddli').outerWidth(this_width).css("margin-left","-"+(thisul_left+pos+5)+"px");
				$(this).children('.ddli').eq(0).slideDown();
			}
		},function(){
			$(this).children('ul').hide();
						var type=$("#layer233174DC0EA1CE18D43FF8F3BC4E7D7E").find('.wp-new_navigation_content').attr('type');
			if(type==2){
				$("#layer233174DC0EA1CE18D43FF8F3BC4E7D7E").find('.ddli').slideUp();
			}
		});


		//子菜单位置设置
		$(".menu_hs6 #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E").find('li').mouseenter(function(){
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
				
			if(firstLi.parent('ul').attr('id') != 'nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E')
				firstLi.children('ul').css('margin-left',firstLi.outerWidth());
			tmp_max_width = 0;
		});
		
		//第三级即下级菜单随高度增加位置动态修改
		$(".menu_hs6 #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E ul li").hover(function(){
			if($(this).children('ul').length > 0)
			{
				var marginTop = parseInt($(this).children('ul').css('margin-top'));
				if($(this).children('ul').offset().top > $(this).offset().top)
					$(this).children('ul').css('margin-top',marginTop - ($(this).children('ul').offset().top - $(this).offset().top) + 'px');
			}
		});

		$('.menu_hs6 #nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E').find('li').hover(function(){
			var direction=$("#layer233174DC0EA1CE18D43FF8F3BC4E7D7E").find('.nav1').attr('direction');
			var height = parseInt($(this).outerHeight());
			if($(this).parent().hasClass('navigation'))
			{
				$('#nav_layer233174DC0EA1CE18D43FF8F3BC4E7D7E .wp_subtop').removeClass("lihover").children('a').removeClass("ahover");
				if(direction==1){				
					$(this).children('ul').css('top','auto').css('bottom',height + 'px');
				}else{				
					$(this).children('ul').css('top',height+'px').css('bottom','auto');	
				}
				$(this).children('a').css({'font-family':layer233174DC0EA1CE18D43FF8F3BC4E7D7E_getSubMenuHoverCss("font-family",0),'font-size':layer233174DC0EA1CE18D43FF8F3BC4E7D7E_getSubMenuHoverCss("font-size",0),'color':layer233174DC0EA1CE18D43FF8F3BC4E7D7E_getSubMenuHoverCss("color",0),'font-weight':layer233174DC0EA1CE18D43FF8F3BC4E7D7E_getSubMenuHoverCss("font-weight",0),'font-style':layer233174DC0EA1CE18D43FF8F3BC4E7D7E_getSubMenuHoverCss("font-style",0)});
			}else{
				if(direction==1){
					$(this).children('ul').css('top','auto').css('bottom', '-0px');
				}else{
					$(this).children('ul').css('top',height+'px').css('bottom','auto');					
				}
				$(this).children('a').css({'font-family':layer233174DC0EA1CE18D43FF8F3BC4E7D7E_getSubMenuHoverCss("font-family",1),'font-size':layer233174DC0EA1CE18D43FF8F3BC4E7D7E_getSubMenuHoverCss("font-size",1),'color':layer233174DC0EA1CE18D43FF8F3BC4E7D7E_getSubMenuHoverCss("color",1),'font-weight':layer233174DC0EA1CE18D43FF8F3BC4E7D7E_getSubMenuHoverCss("font-weight",1),'font-style':layer233174DC0EA1CE18D43FF8F3BC4E7D7E_getSubMenuHoverCss("font-style",1)});
			}
		},function(){
			if($(this).parent().hasClass('navigation'))
			{
				wp_showdefaultHoverCss('layer233174DC0EA1CE18D43FF8F3BC4E7D7E');
			}
			 $(this).children('a').attr("style",'');
				
		});
		wp_showdefaultHoverCss('layer233174DC0EA1CE18D43FF8F3BC4E7D7E');
		wp_removeLoading('layer233174DC0EA1CE18D43FF8F3BC4E7D7E');
	});
</script><div class="navigation_more" data-more="darkorange" data-typeval="0" data-menudata="&quot;&quot;"></div>
</div>
<script type="text/javascript">
$(function(){
	$("#layer233174DC0EA1CE18D43FF8F3BC4E7D7E").find('.wp-new_navigation_content').each(function(){
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

</div><script>		         $('#layer233174DC0EA1CE18D43FF8F3BC4E7D7E').triggerHandler('layer_ready');</script><div id='layerE167E5E4AAC9BFAF5A4F36164C2C6BD1' type='media'  class='cstlayer' style='left: 18px; top: 192px; position: absolute; z-index: 104; width: 943px; height: 492px;'  mid=""   deg='0'><script>
create_pc_media_set_pic('layerE167E5E4AAC9BFAF5A4F36164C2C6BD1',false);
</script>
<div class="wp-media_content"  style="overflow: hidden; width: 943px; height: 492px; border-width: 0px; border-style: solid; padding: 0px;" type="0">
<div class="img_over"  style='overflow: hidden; border-color: transparent; border-width: 0px; width: 943px; height: 492px;'>

<div class="imgloading" style="z-index:100;"> </div>
<img  id="wp-media-image_layerE167E5E4AAC9BFAF5A4F36164C2C6BD1" class="img_lazy_load paragraph_image"  data-original="http://leather-1.pic1.websiteonline.cn/upload/templatefiles/banner9_zSKm.jpg" type="cut" src="http://static.websiteonline.cn/website/template/default/images/blank.gif" style="width: 946px; height: 492px; left: 0px; top: 0px; position: relative;;" />
</div>

</div>
<script>
(function(){
	var imgover=$('#wp-media-image_layerE167E5E4AAC9BFAF5A4F36164C2C6BD1').closest('.img_over');
	imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
	$('#layerE167E5E4AAC9BFAF5A4F36164C2C6BD1').layer_ready(function(){
		layer_img_lzld('layerE167E5E4AAC9BFAF5A4F36164C2C6BD1');
	})
})()	
</script>
</div><script>		         $('#layerE167E5E4AAC9BFAF5A4F36164C2C6BD1').triggerHandler('layer_ready');</script><div id='layer41E0288EBD9DBF7FB0326EADB5BA9D93' type='title'  class='cstlayer' style='left: 17px; top: 702px; position: absolute; z-index: 105; width: 945px; height: 173px;'  mid=""   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent; border-width: 0px; height: 173px; width: 945px; border-style: solid; background-color: rgb(249, 249, 249); display: block;"><br></div>
</div><script>		         $('#layer41E0288EBD9DBF7FB0326EADB5BA9D93').triggerHandler('layer_ready');</script><div id='layer8DED077EE1592987F0A5931205C1CB56' type='media'  class='cstlayer' style='left: 512px; top: 724px; position: absolute; z-index: 106; width: 190px; height: 128px;'  mid=""   deg='0'><script>
create_pc_media_set_pic('layer8DED077EE1592987F0A5931205C1CB56',false);
</script>
<div class="wp-media_content"  style="overflow: hidden; width: 190px; height: 128px; border-width: 0px; border-style: solid; padding: 0px;" type="0">
<div class="img_over"  style='overflow: hidden; border-color: transparent; border-width: 0px; width: 190px; height: 128px;'>

<div class="imgloading" style="z-index:100;"> </div>
<img  id="wp-media-image_layer8DED077EE1592987F0A5931205C1CB56" class="img_lazy_load paragraph_image"  data-original="http://leather-1.pic1.websiteonline.cn/upload/templatefiles/19-55-home_6d7a.jpg" type="zoom" src="http://static.websiteonline.cn/website/template/default/images/blank.gif" style="width: 190px; height: auto;;" />
</div>

</div>
<script>
(function(){
	var imgover=$('#wp-media-image_layer8DED077EE1592987F0A5931205C1CB56').closest('.img_over');
	imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
	$('#layer8DED077EE1592987F0A5931205C1CB56').layer_ready(function(){
		layer_img_lzld('layer8DED077EE1592987F0A5931205C1CB56');
	})
})()	
</script>
</div><script>		         $('#layer8DED077EE1592987F0A5931205C1CB56').triggerHandler('layer_ready');</script><div id='layer646528D19C80E3B342BF413BAFD03BD1' type='media'  class='cstlayer' style='left: 740px; top: 724px; position: absolute; z-index: 109; width: 190px; height: 128px;'  mid=""   deg='0'><script>
create_pc_media_set_pic('layer646528D19C80E3B342BF413BAFD03BD1',false);
</script>
<div class="wp-media_content"  style="overflow: hidden; width: 190px; height: 128px; border-width: 0px; border-style: solid; padding: 0px;" type="0">
<div class="img_over"  style='overflow: hidden; border-color: transparent; border-width: 0px; width: 190px; height: 128px;'>

<div class="imgloading" style="z-index:100;"> </div>
<img  id="wp-media-image_layer646528D19C80E3B342BF413BAFD03BD1" class="img_lazy_load paragraph_image"  data-original="http://leather-1.pic1.websiteonline.cn/upload/templatefiles/43-127-home_ZQrj.jpg" type="zoom" src="http://static.websiteonline.cn/website/template/default/images/blank.gif" style="width: 190px; height: auto;;" />
</div>

</div>
<script>
(function(){
	var imgover=$('#wp-media-image_layer646528D19C80E3B342BF413BAFD03BD1').closest('.img_over');
	imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
	$('#layer646528D19C80E3B342BF413BAFD03BD1').layer_ready(function(){
		layer_img_lzld('layer646528D19C80E3B342BF413BAFD03BD1');
	})
})()	
</script>
</div><script>		         $('#layer646528D19C80E3B342BF413BAFD03BD1').triggerHandler('layer_ready');</script><div id='layer015A1AD6FBBB7EC32E878F8523B31F4C' type='media'  class='cstlayer' style='left: 53px; top: 724px; position: absolute; z-index: 108; width: 190px; height: 128px; display: block;'  mid=""   deg='0'><script>
create_pc_media_set_pic('layer015A1AD6FBBB7EC32E878F8523B31F4C',false);
</script>
<div class="wp-media_content"  style="overflow: hidden; width: 190px; height: 128px;" type="0">
<div class="img_over"  style='overflow: hidden; border-color: transparent; border-width: 0px; width: 190px; height: 128px;'>

<div class="imgloading" style="z-index:100;"> </div>
<img  id="wp-media-image_layer015A1AD6FBBB7EC32E878F8523B31F4C" class="img_lazy_load paragraph_image"  data-original="http://leather-1.pic1.websiteonline.cn/upload/templatefiles/31-91-home_n3T1.jpg" type="zoom" src="http://static.websiteonline.cn/website/template/default/images/blank.gif" style="width: 190px; height: auto;;" />
</div>

</div>
<script>
(function(){
	var imgover=$('#wp-media-image_layer015A1AD6FBBB7EC32E878F8523B31F4C').closest('.img_over');
	imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
	$('#layer015A1AD6FBBB7EC32E878F8523B31F4C').layer_ready(function(){
		layer_img_lzld('layer015A1AD6FBBB7EC32E878F8523B31F4C');
	})
})()	
</script>
</div><script>		         $('#layer015A1AD6FBBB7EC32E878F8523B31F4C').triggerHandler('layer_ready');</script><div id='layerE708C09A6831B1944F4FED52CE4C13F8' type='media'  class='cstlayer' style='left: 281px; top: 724px; position: absolute; z-index: 107; width: 190px; height: 128px;'  mid=""   deg='0'><script>
create_pc_media_set_pic('layerE708C09A6831B1944F4FED52CE4C13F8',false);
</script>
<div class="wp-media_content"  style="overflow: hidden; width: 190px; height: 128px; border-width: 0px; border-style: solid; padding: 0px;" type="0">
<div class="img_over"  style='overflow: hidden; border-color: transparent; border-width: 0px; width: 190px; height: 128px;'>

<div class="imgloading" style="z-index:100;"> </div>
<img  id="wp-media-image_layerE708C09A6831B1944F4FED52CE4C13F8" class="img_lazy_load paragraph_image"  data-original="http://leather-1.pic1.websiteonline.cn/upload/templatefiles/25-73-home_uv49.jpg" type="zoom" src="http://static.websiteonline.cn/website/template/default/images/blank.gif" style="width: 190px; height: auto;;" />
</div>

</div>
<script>
(function(){
	var imgover=$('#wp-media-image_layerE708C09A6831B1944F4FED52CE4C13F8').closest('.img_over');
	imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
	$('#layerE708C09A6831B1944F4FED52CE4C13F8').layer_ready(function(){
		layer_img_lzld('layerE708C09A6831B1944F4FED52CE4C13F8');
	})
})()	
</script>
</div><script>		         $('#layerE708C09A6831B1944F4FED52CE4C13F8').triggerHandler('layer_ready');</script><div id='layer25FD85298ECF168CF889B1D9162F36C0' type='title'  class='cstlayer' style='left: 15px; top: 893px; position: absolute; z-index: 110; width: 644px; height: 43px;'  mid=""   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent; border-width: 0px; height: 43px; width: 644px; border-style: solid; background-color: rgb(235, 235, 235); display: block;"><br></div>
</div><script>		         $('#layer25FD85298ECF168CF889B1D9162F36C0').triggerHandler('layer_ready');</script><div id='layer29DC37C0A069202DDC9C6BA16DC728F7' type='title'  class='cstlayer' style='left: 680px; top: 893px; position: absolute; z-index: 111; width: 281px; height: 421px;'  mid=""   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent; border-width: 0px; height: 421px; width: 281px; display: block; border-style: solid; background-color: rgb(249, 114, 6);"><br></div>
</div><script>		         $('#layer29DC37C0A069202DDC9C6BA16DC728F7').triggerHandler('layer_ready');</script><div id='layer1391077E61B798AE519155A7B038F770' type='title'  class='cstlayer' style='left: 690px; top: 899px; position: absolute; z-index: 117; width: 150px; height: 31px;'  mid=""   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent; border-width: 0px; height: 31px; width: 150px; display: block;"><span style="color: rgb(255, 255, 255); font-size: 14px;"><strong>文章中心</strong></span></div>
</div><script>		         $('#layer1391077E61B798AE519155A7B038F770').triggerHandler('layer_ready');</script><div id='layer659F6AA094273E6C2C587EA801111E94' type='title'  class='cstlayer' style='left: 26px; top: 900px; position: absolute; z-index: 112; width: 150px; height: 120px;'  mid=""   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent; border-width: 0px; height: 120px; width: 150px; display: block;"><span style="font-size: 16px;"><strong>产品中心</strong></span></div>
</div><script>		         $('#layer659F6AA094273E6C2C587EA801111E94').triggerHandler('layer_ready');</script><div id='layer653C90A7C944104B7B14B5DD30B325F5' type='title'  class='cstlayer' style='left: 692px; top: 933px; position: absolute; z-index: 120; width: 259px; height: 120px;'  mid=""   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent transparent rgb(255, 255, 255); border-width: 0px 0px 1px; height: 119px; width: 259px; display: block; border-style: solid solid dashed;"><span style="color:#FFFFFF;"><strong>1.皮具知识</strong></span><br><span style="color:#FFFFFF;">真皮是牛、羊、猪、马、鹿或某些其它动物身上剥下的原皮，经皮革厂鞣制加工后，制成各种特性、强度、手感、色彩、花纹的皮具材料，是现代真皮制品的必需材料。</span></div>
</div><script>		         $('#layer653C90A7C944104B7B14B5DD30B325F5').triggerHandler('layer_ready');</script><div id='layerFFD2EE3531A5EF76BDC2A097F6A7177A' type='title'  class='cstlayer' style='left: 217px; top: 951px; position: absolute; z-index: 115; width: 441px; height: 173px;'  mid=""   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent; border-width: 0px; height: 173px; width: 441px; display: block;"><strong><span style="font-size: 14px;">印象系列单肩包 黄杏</span></strong><br><hr><br>性别：女款材质：PU皮颜色系：黄色场合：正装,休闲,其它大小：中型包风格：休闲随意开袋方式：拉链流行元素：铆钉适合季节：通用图案：纯色适用年龄：年轻人(18-35)内部结构：手机袋,拉链夹层,内侧拉链袋,证件袋</div>
</div><script>		         $('#layerFFD2EE3531A5EF76BDC2A097F6A7177A').triggerHandler('layer_ready');</script><div id='layer497BE0F11F11C56520FAFCCA4324161A' type='media'  class='cstlayer' style='left: 16px; top: 957px; position: absolute; z-index: 114; width: 191px; height: 156px;'  mid=""   deg='0'><script>
create_pc_media_set_pic('layer497BE0F11F11C56520FAFCCA4324161A',false);
</script>
<div class="wp-media_content"  style="overflow: hidden; width: 191px; height: 156px; border-width: 0px; border-style: solid; padding: 0px;" type="0">
<div class="img_over"  style='overflow: hidden; border-color: transparent; border-width: 0px; width: 191px; height: 156px;'>

<div class="imgloading" style="z-index:100;"> </div>
<img  id="wp-media-image_layer497BE0F11F11C56520FAFCCA4324161A" class="img_lazy_load paragraph_image"  data-original="http://leather-1.pic1.websiteonline.cn/upload/templatefiles/13_Oa76.jpg" type="zoom" src="http://static.websiteonline.cn/website/template/default/images/blank.gif" style="width: 191px; height: auto;;" />
</div>

</div>
<script>
(function(){
	var imgover=$('#wp-media-image_layer497BE0F11F11C56520FAFCCA4324161A').closest('.img_over');
	imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
	$('#layer497BE0F11F11C56520FAFCCA4324161A').layer_ready(function(){
		layer_img_lzld('layer497BE0F11F11C56520FAFCCA4324161A');
	})
})()	
</script>
</div><script>		         $('#layer497BE0F11F11C56520FAFCCA4324161A').triggerHandler('layer_ready');</script><div id='layer58CDEFDB8B3A1989492C28473179F0DC' type='title'  class='cstlayer' style='left: 692px; top: 1067px; position: absolute; z-index: 119; width: 259px; height: 95px;'  mid=""   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent transparent rgb(255, 255, 255); border-width: 0px 0px 1px; height: 94px; width: 259px; display: block; border-style: solid solid dashed;"><span style="color:#FFFFFF;"><strong>2.皮包的保养知识</strong><br>要长期保持手提包完好，最重要的是不要忽视日常保养，一般来说包包使用二、三天之后可以休息一天，而外出回家之后也要及时保养</span><span style="color:#FFFFFF;"></span></div>
</div><script>		         $('#layer58CDEFDB8B3A1989492C28473179F0DC').triggerHandler('layer_ready');</script><div id='layerA9D418F40B2936B00762136EA9AA7062' type='title'  class='cstlayer' style='left: 218px; top: 1148px; position: absolute; z-index: 116; width: 436px; height: 134px;'  mid=""   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent; border-width: 0px; height: 134px; width: 436px; display: block;"><strong><span style="font-size: 14px;">高档牛皮时尚男士手包 啡色</span></strong><br><hr><br>场合：其它,休闲,正装大小：中型包风格：休闲随意开袋方式：包盖式流行元素：其它内部结构：卡位,拉链夹适合季节：通用适用年龄：年轻人(18-35),中年人(36-59)图案：纯色性别：男款材质：牛皮颜色系：褐色</div>
</div><script>		         $('#layerA9D418F40B2936B00762136EA9AA7062').triggerHandler('layer_ready');</script><div id='layerEF2DD9E8311FAA2AF51F897E10B7B39E' type='media'  class='cstlayer' style='left: 15px; top: 1154px; position: absolute; z-index: 113; width: 191px; height: 156px;'  mid=""   deg='0'><script>
create_pc_media_set_pic('layerEF2DD9E8311FAA2AF51F897E10B7B39E',false);
</script>
<div class="wp-media_content"  style="overflow: hidden; width: 191px; height: 156px; border-width: 0px; border-style: solid; padding: 0px;" type="0">
<div class="img_over"  style='overflow: hidden; border-color: transparent; border-width: 0px; width: 191px; height: 156px;'>

<div class="imgloading" style="z-index:100;"> </div>
<img  id="wp-media-image_layerEF2DD9E8311FAA2AF51F897E10B7B39E" class="img_lazy_load paragraph_image"  data-original="http://leather-1.pic1.websiteonline.cn/upload/templatefiles/12_ocO6.jpg" type="zoom" src="http://static.websiteonline.cn/website/template/default/images/blank.gif" style="width: 191px; height: auto;;" />
</div>

</div>
<script>
(function(){
	var imgover=$('#wp-media-image_layerEF2DD9E8311FAA2AF51F897E10B7B39E').closest('.img_over');
	imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
	$('#layerEF2DD9E8311FAA2AF51F897E10B7B39E').layer_ready(function(){
		layer_img_lzld('layerEF2DD9E8311FAA2AF51F897E10B7B39E');
	})
})()	
</script>
</div><script>		         $('#layerEF2DD9E8311FAA2AF51F897E10B7B39E').triggerHandler('layer_ready');</script><div id='layer41EBE02B47D437EE73D0C7EA5C3B2CBB' type='title'  class='cstlayer' style='left: 692px; top: 1178px; position: absolute; z-index: 118; width: 259px; height: 122px;'  mid=""   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent transparent rgb(255, 255, 255); border-width: 0px 0px 1px; height: 120px; width: 259px; display: block; border-style: solid solid dashed;"><span style="color:#FFFFFF;"><strong>3.分类保养</strong><br>PU是英文ploy urethane的缩写，化学中文名称聚氨酯，也叫PU革，PU配皮时一般反面用牛皮的第二层皮料，再在表面涂上一层PU树脂，所以也称贴膜牛皮。</span><span style="color:#FFFFFF;"></span></div>
</div><script>		         $('#layer41EBE02B47D437EE73D0C7EA5C3B2CBB').triggerHandler('layer_ready');</script>	</div>	
	
<?php require 'footer.php'; ?>