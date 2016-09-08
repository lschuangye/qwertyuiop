<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>[!--pagetitle--]</title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link href="/d/file/8e4e53d801c13e53a21e9bc7cb42abe2.ico" rel="icon" type="image/x-icon" />
<link rel="stylesheet" href="/css/ui.css?344" type="text/css" media="all">
<link rel="stylesheet" href="/css/global.css" type="text/css" media="all">
</head>

<body>
<div class="homeTop" id="subTopHeader">
  <div class="homeTopWrap"> <div class="topMenu">
      <ul>
        <? @sys_ShowClassByTemp('0',1,0,9);?>
      </ul>
    </div>
    <div class="clear"></div>
    <div class="topImg"><img src="/images/banner.jpg" /></div>
    <div class="clear"></div>
  </div>
</div>
<div class="subTop">
  <p>当前位置：[!--newsnav--]</p>
</div>
<div class="clear"></div>
<div class="boxWrap">
  <div class="boxWrap-title">
    <p><span></span>[!--class.name--]</p>
  </div>
  <ul>
    [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]
    <div class="clear"></div>
    <div class="pagelist">[!--show.listpage--]</div>
  </ul>
</div>
<div class="foot">
  <div class="footer">
    <div class="footer-menu">
      <ul>
        <? @sys_ShowClassByTemp('0',13,0,11);?>
      </ul>
    </div>
    <div class="clear"></div>
    <div class="footer-info">央视微电影青春频道唯一指定运营企业：成都宙斯影视文化传播有限公司<br/>
      违法和不良信息举报网站：028-962377     蜀ICP备16000955号-1<br/>
      <p class="foot-team">
<a title="华夏微电影" href="/foot-team/"><img src="/d/file/e47e7eeb52e7892f6ff5632ee0e351e2.jpg"></a>
<a title="中央微电影台" href="/foot-team/"><img src="/d/file/8023c2bfad6fe338f057b986641ca625.jpg"></a>
<a title="CCTV电影频道" href="/foot-team/"><img src="/d/file/0b59fe92f69290cb3ec61046b47c1563.jpg"></a>
<a title="中国搜索" href="/foot-team/"><img src="/d/file/9ffc9d680c34c47ad23dc0bcc2e715c1.jpg"></a></p>
  </div>
</div>
</body>
</html>
