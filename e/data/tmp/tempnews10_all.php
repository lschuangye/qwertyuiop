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
<script type="text/javascript" src="/jwplayer/jwplayer.js"></script>
</head>

<body>
<div class="homeTop" id="subTopHeader">
  <div class="homeTopWrap">
<div class="topMenu">
      <ul>
        <? @sys_ShowClassByTemp('0',1,0,8);?>
      </ul>
    </div>
    <div class="clear"></div>
    <div class="topImg"><img src="/images/banner.jpg" /></div>
    <div class="clear"></div>
  </div>
</div>
<div class="subTop">
  <p>当前位置：<?=$grurl?></p>
</div>
<div class="clear"></div>
<div class="boxWrap">
  <div class="boxWrap-title">
    <p><span></span><?=$class_r[$ecms_gr[classid]][classname]?></p>
  </div>
  <div class="content-box">
    <div id="jwplayer">视频正在加载，请稍后... ...</div>
    <script type="text/javascript">
    jwplayer("jwplayer").setup({
        file: "<?=$ecms_gr[file]?>",
        image: "<?=$ecms_gr[bigpic]?>",
		width: 960,//播放器宽
		height:480,//播放器高
    });
</script> 
  </div>
</div>
<div class="v-other-list">
  <ul>
<? @sys_GetEcmsInfo('selfinfo',7,32,0,0,14,0);?>  </ul>
  <div class="clear"></div>
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
