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
<link rel="stylesheet" href="/css/ui.css?344" type="text/css" media="all">
<link rel="stylesheet" href="/css/global.css" type="text/css" media="all">
<style>
  .bt-class b{display: block; width: 50px; text-align: center; float: left; height: 70px;}
  .bt-class a {
  color: #999;
  display: block;
  float: left;
  line-height: 30px;
  padding: 0 5px;
}
.changefieldandcss{color:#EC4552 !important; font-weight: bold;}
</style>
</head>

<body>
<div class="head-2">

<div class="head-2-wrap">
<div class="logo"><a href="/"><img src="/images/logo.png"/></a></div>
<div class="head-2-right">
<div class="head-2-topInfo"><a href="#">官方微博</a><a href="#">官方微博</a></div>
<div class="head-2-menu"><ul><li><a href="/">首页</a></li>
<li><a href="/<?=$class_r[14]['classpath']?>"><?=$class_r[14]['classname']?></a></li>
<li><a href="/<?=$class_r[15]['classpath']?>"><?=$class_r[15]['classname']?></a></li>
<li><a href="/<?=$class_r[16]['classpath']?>"><?=$class_r[16]['classname']?></a></li>
<li><a href="/<?=$class_r[17]['classpath']?>"><?=$class_r[17]['classname']?></a></li>
<li><a href="/<?=$class_r[11]['classpath']?>"><?=$class_r[11]['classname']?></a></li>
<li><a href="/<?=$class_r[8]['classpath']?>"><?=$class_r[8]['classname']?></a></li></ul></div>

</div>
</div>

</div>
<div class="mainBody">
  <div class="mainBody-wrap">
    <div class="position"><span class="name">[!--class.name--]</span><span class="current">当前位置：[!--newsnav--]</span></div>
    <div class="clear"></div>
    <div class="mainBody-content">
      <div class="bt-class"><?=user_ShowFieldandChange()?>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
      <div class="mainBody-content-body" id="bt-class"> <ul>[!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]</ul> <div class="clear"></div></div>
    </div>
  </div>
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