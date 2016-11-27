<div id="site_footer" style="width:980px;position:absolute;height:70px;z-index:500;margin-top:0px">
		<div class="full_width" margintopheight=0 style="position:absolute;height:70px;background-repeat:repeat-x;background-color:#f6f5f1;"></div>
		<div id="footer_content" class="full_content" style="width:980px; position:absolute;left:0;top:0;margin-left: 0px;background-repeat:repeat-x;height:70px;text-align:center;font-size:12px;color:#999;padding-top:10px;line-height: 25px;">
			<p>
				<span class="sf_font">2013-2016 <?php echo $config['company'];?> All Rights Reserved</span>
			</p>
			<p>
				<span>地址：<?php echo $config['address']; ?>  邮箱：<?php echo $config['email']; ?></span>
			</p>
		</div>
</div>
<script>
(function(){
	$('#copyright2').css('left',($('#canvas').width()-$('#copyright2').width())/2);
	var minzindex=2000;
	$('#site_footer .full_content .cstlayer,#site_footer .full_content .full_column').each(function(){
		var zindex=parseInt($(this).css('z-index'));
		if(zindex>=minzindex) minzindex=zindex+1;
	})
	$('#copyright2').css('z-index',minzindex);
})()
</script>
<!--//wp-mobile_navigate end-->
</div>


<script type="text/javascript">
//解决ugilify压缩的问题
var b;    
 

doc_end_exec();
</script>
<script>
function wx_open_login_dialog(func){
	func();
}
</script>
 		
</body>
</html>