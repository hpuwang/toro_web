var BrowserUpgrade = function(){ 
	var IsbrowserUpgrade = 0;	 
	if(IsbrowserUpgrade!=1){
		browserUpgrade = '<div class="lteie6_transparent"></div>';
		browserUpgrade +='<div class="lteie6_main">';
		browserUpgrade +=    '<h2 class="lteie6_title" title="��Internet Explorer 6"><span>��Internet Explorer 6</span></h2>';
		browserUpgrade +=    '<p class="lteie6_cont">Ϊ�ƶ��������W3C��׼�����õ��û����飬��վǿ�ҽ�����ʹ��<a target="_blank" title="����Chrome" href="http://www.google.com/chrome/">Google Chrome</a>��װ/ʹ�������°汾��������ڴ˸м���Ϊ�ƶ��������������ס�</p>';
		browserUpgrade +=    '<ul class="lteie6_browser">';
		browserUpgrade +=        '<li><a class="ie8" title="����Internet Explorer 8" href="http://www.microsoft.com/windows/internet-explorer/beta/worldwide-sites.aspx">Internet Explorer 8</a></li>';
		browserUpgrade +=        '<li><a class="firefox" target="_blank" title="����Firefox" href="http://www.mozillaonline.com/">Firefox</a></li>';
		browserUpgrade +=        '<li><a class="opera" target="_blank" title="����Opera" href="http://cn.opera.com/download/thanks/win/">Opera</a></li>';
		browserUpgrade +=        '<li><a class="safari" target="_blank" title="����Safari" href="http://www.apple.com.cn/safari/download/">Safari</a></li>';
		browserUpgrade +=    '</ul>';
		browserUpgrade +=    '<p class="more"><a class="link" title="��ϸ���Ϣ" href="http://www.webrebuild.org/">���ϸ<strong class="support"><span class="em">web</span><span class="strong">rebuild.</span><span class="important">org</span></strong></a></p>';
		browserUpgrade +=    '<p class="close"></p>';
		browserUpgrade +='</div>';
		browserUpgrade +='<style type="text/css">';
		browserUpgrade +='body{height:100%;}';
		browserUpgrade +='.lteie6_transparent{position:absolute;top:0;left:0;width:100%;height:100%;background:#000000;filter:alpha(opacity=100);opacity: 0.2;}';
		browserUpgrade +='.lteie6_main *{margin:0;padding:0;border:none; font-family:Verdana,"����";}';
		browserUpgrade +='.lteie6_main .lteie6_title,';
		browserUpgrade +='.lteie6_main .ie8,';
		browserUpgrade +='.lteie6_main .firefox,';
		browserUpgrade +='.lteie6_main .chrome,';
		browserUpgrade +='.lteie6_main .opera,';
		browserUpgrade +='.lteie6_main .safari,';
		browserUpgrade +='.lteie6_main .close{padding-left:19px;background:url(http://www.webrebuild.org/browser_upgrade/img/lte_ie6.png) no-repeat;}';
		browserUpgrade +='.lteie6_main .close span,';
		browserUpgrade +='.lteie6_main .lteie6_title span{display:none}';
		browserUpgrade +='.lteie6_main{position:absolute;top:50%;left:50%;margin:-80px 0 0 -250px;border:4px solid #1D6120;width:500px;height:185px;background:#FFFFFF;}';
		browserUpgrade +='.lteie6_main .lteie6_title{float:left;display:inline;margin:20px;padding:0;width:155px;height:86px;}';
		browserUpgrade +='.lteie6_main .lteie6_cont{float:left;margin-top:20px;width:290px;font:12px/200% Verdana!important;text-align:left;color:#5B5B5B;}';
		browserUpgrade +='.lteie6_main .lteie6_cont a{color:#000; padding:2px 2px 2px 2px;}';
		browserUpgrade +='.lteie6_main .lteie6_browser{position:absolute;top:105px;left:0;}';
		browserUpgrade +='.lteie6_main .lteie6_browser li{display:inline;padding-left:18px;}';
		browserUpgrade +='.lteie6_main .lteie6_browser a{display:inline-block;text-decoration:underline;font:12px/18px Verdana;color:#5B5B5B;padding-left:40px;height:40px;line-height:40px;}';
		browserUpgrade +='.lteie6_main .lteie6_browser a:hover{color:#1D6120;}';
		browserUpgrade +='.lteie6_main .ie8{background-position:-0px -120px;}';
		browserUpgrade +='.lteie6_main .firefox{background-position:0 -160px;;}';
		browserUpgrade +='.lteie6_main .chrome{background-position:0 -280px;}';
		browserUpgrade +='.lteie6_main .opera{background-position:0 -200px;}';
		browserUpgrade +='.lteie6_main .safari{background-position:0 -240px;}';
		browserUpgrade +='.lteie6_main .close{position:absolute;top:4px;right:4px;padding:0;overflow:hidden;border:none;line-height:50px;width:14px;height:14px;font-size:0;cursor:pointer;background-position:-158px -93px;}';
		browserUpgrade +='.lteie6_main .close button{width:14px;height:14px;background:1px solid #f00;cursor:pointer;}';
		browserUpgrade +='.lteie6_main .more{position:absolute;top:162px;right:6px; font-size:11px;font-family:Verdana}';
		browserUpgrade +='.lteie6_main .more .link{color:#5B5B5B;}';
		browserUpgrade +='.lteie6_main .more .support span{font-weight:bold;}';
		browserUpgrade +='.lteie6_main .more .em{color:#9FE222;}';
		browserUpgrade +='.lteie6_main .more .strong{color:#1D6120;}';
		browserUpgrade +='.lteie6_main .more .important{color:#5B5B5B;}';
		browserUpgrade +='</style>';
		var browserUpgradeContainer = document.createElement("div");
		browserUpgradeContainer.id='browserUpgrade';
		browserUpgradeContainer.className='lte_ie6';
		browserUpgradeContainer.innerHTML=browserUpgrade;
		var browserUpgradeCloser = document.createElement("button");
		browserUpgradeCloser.onclick=function(){document.getElementById('browserUpgrade').style.display='none';}
		browserUpgradeCloser.innerHTML='�ر�';
		browserUpgradeContainer.getElementsByTagName('p')[2].appendChild(browserUpgradeCloser);
		document.body.appendChild(browserUpgradeContainer);
	} 

} 
window.attachEvent('onload',BrowserUpgrade);