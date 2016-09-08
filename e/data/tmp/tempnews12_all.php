<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?=$grpagetitle?></title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link rel="stylesheet" href="/css/ui.css?344" type="text/css" media="all">
<link rel="stylesheet" href="/css/global.css" type="text/css" media="all">
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
    <div class="position"><span class="name"><?=$class_r[$ecms_gr[classid]][classname]?></span><span class="current">当前位置：<?=$grurl?></span></div>
    <div class="clear"></div>
    <div class="mainBody-content">
      <div class="mainBody-content-T"><?=$ecms_gr[title]?></div>
      <div class="clear"></div>
      <div class="mainBody-content-body"><?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?></div>
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
    <div class="footer-info">成都宙斯影视文化传播有限公司 2016 版权所有<br/>
      违法和不良信息举报电话:028-962377  蜀ICP备15024548号-3<br/>
      <p class="foot-team">
<a title="华夏微电影" href="/foot-team/"><img src="/d/file/e47e7eeb52e7892f6ff5632ee0e351e2.jpg"></a>
<a title="中央微电影台" href="/foot-team/"><img src="/d/file/8023c2bfad6fe338f057b986641ca625.jpg"></a>
<a title="CCTV电影频道" href="/foot-team/"><img src="/d/file/0b59fe92f69290cb3ec61046b47c1563.jpg"></a>
<a title="中国搜索" href="/foot-team/"><img src="/d/file/9ffc9d680c34c47ad23dc0bcc2e715c1.jpg"></a></p>
  </div>
</div>
</body>
</html>