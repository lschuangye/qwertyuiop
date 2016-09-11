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
      <div class="mainBody-content-T">[!--class.name--]</div>
      <div class="clear"></div>
      <div class="mainBody-content-body"> [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--] </div>
<div class="guestbook">
<form name='feedback' method='post' action='/e/enews/index.php'>
  <input type="hidden" name="ecmsfrom" value="/contact-us/">
  <input type=hidden name=bid value="1">
  <input name='enews' type='hidden' value='AddFeedback'>
  <p><span class="other-span">您的姓名:</span>
    <input name='title' type='text' value=''>
    <span>(*)</span></p>
  <p><span class="other-span">邮箱地址:</span>
    <input name='email' type='text' value=''>
    <span>(*)</span></p>
  <p><span class="other-span">留言内容:</span>
    <textarea name='saytext' cols='60' rows='12'></textarea>
    <span>(*)</span></p>
  <input id="submit" type='submit' name='submit' value='提交'>
</form>
</div>
    </div>
  </div>
</div>
<div class="foot">
  <div class="footer">
    <div class="footer-menu">
     <!-- <ul>
        <? @sys_ShowClassByTemp('0',13,0,11);?>
      </ul>-->
<ul>
        <a href="http://tv.cctv.com/">央视网</a>
<span>|</span>
<a href="http://www.vmovier.com/">V电影</a>
<span>|</span><a href="http://www.baofeng.com/">暴风影音</a>
<span>|</span><a href="http://www.iqiyi.com/">爱奇艺</a>
<span>|</span><a href="http://v.qq.com/">腾讯视频</a>
<span>|</span><a href="http://www.youku.com/">优酷</a>
<span>|</span><a href="http://www.le.com/">乐视</a>
<span>|</span><a href="http://www.pptv.com/">PPTV</a>
<span>|</span><a href="http://tv.sohu.com/">搜狐视频</a>
<span>|</span><a href="http://www.fun.tv/" >风行网</a>
      </ul>
    </div>
    
    <div class="footer-info">央影星际影视频道<br/>
      <p class="foot-team">
<a title="华夏微电影" href="/foot-team/"><img src="/d/file/e47e7eeb52e7892f6ff5632ee0e351e2.jpg"></a>
<a title="中央微电影台" href="/foot-team/"><img src="/d/file/8023c2bfad6fe338f057b986641ca625.jpg"></a>
<a title="CCTV电影频道" href="/foot-team/"><img src="/d/file/0b59fe92f69290cb3ec61046b47c1563.jpg"></a>
<a title="中国搜索" href="/foot-team/"><img src="/d/file/9ffc9d680c34c47ad23dc0bcc2e715c1.jpg"></a></p>
  </div>
</div>
</body>
</html>