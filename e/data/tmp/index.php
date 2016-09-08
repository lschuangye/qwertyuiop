<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>央视微电影青春频道</title>
<meta name="keywords" content="宙斯影视|宙斯影视传媒|成都宙斯影视文化传播有限公司|央视微电影青春频道|宙斯微电影|青春频道" />
<meta name="description" content="央视微电影青春频道是由成都宙斯影视文化传播有限公司与央视微电影频道,中央新影微电影台,华夏微视联合打造的权威媒体.央视微电影青春频道总部座落于天府之国成都国色天乡旅游度假区.网站网址:http://www.cctvyoung.com" />
<link href="/d/file/8e4e53d801c13e53a21e9bc7cb42abe2.ico" rel="icon" type="image/x-icon" />
<link rel="stylesheet" href="/css/ui.css?344" type="text/css" media="all">
<link rel="stylesheet" href="/css/global.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/lrtk.js"></script>
</head>

<body>
<style>
	.home-box-1-right-title a {
  color: #4edafd;
  float: right;
  font-size: 12px;
  font-weight: normal;
}

    .footer-menu .ulclass{
            color:#fff;
    }
</style>
<div class="homeTop">
  <div class="homeTopWrap"> <div class="topMenu">
      <ul>
        <? @sys_ShowClassByTemp('0',1,0,9);?>
      </ul>
    </div>
    <div class="clear"></div>
    <div class="topImg"><img src="/images/banner.jpg" /></div>
    <div class="clear"></div>
    <div class="home-box-1">
      <div class="home-box-1-left">
        <div id="header">
          <div class="wrap">
            <div id="slide-holder">
              <div id="slide-runner"> <? @sys_GetEcmsInfo(12,5,32,0,0,21,0);?>
                <div id="slide-controls">
                  <p id="slide-client" class="text"><strong></strong><span></span></p>
                  <p id="slide-desc" class="text"></p>
                </div>
              </div>
            </div>
<? @sys_GetEcmsInfo(12,5,62,0,0,22,0);?>          </div>
        </div>
        <p id="slide-nav"></p>
      </div>
      <div class="home-box-1-right">
        <div class="home-box-1-right-title"><?=$class_r[11]['classname']?><span><a href="/<?=$class_r[11]['classpath']?>">More++</span></div>
        <div class="clear"></div>
        <? @sys_GetEcmsInfo(11,2,62,0,2,19,0);?>
        <div class="clear"></div>
        <ul>
          <? @sys_GetEcmsInfo(11,4,62,0,0,20,0);?>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="notice">
      <div class="notice-title"><?=$class_r[10]['classname']?></div>
      <ul>
        <? @sys_GetEcmsInfo(10,3,92,0,0,18,0);?>
      </ul>
    </div>
  </div>
</div>

<div class="footer-menu"  style="font-size:18px;">
      <ul>
        <a href="http://tv.cctv.com/" style="color:#fff;">央视网</a>
<span>|</span>
<a href="http://www.vmovier.com/" style="color:#fff;">V电影</a>
<span>|</span><a href="http://www.baofeng.com/" style="color:#fff;">暴风影音</a>
<span>|</span><a href="http://www.iqiyi.com/" style="color:#fff;">爱奇艺</a>
<span>|</span><a href="http://v.qq.com/" style="color:#fff;">腾讯视频</a>
<span>|</span><a href="http://www.youku.com/" style="color:#fff;">优酷</a>
<span>|</span><a href="http://www.le.com/" style="color:#fff;">乐视</a>
<span>|</span><a href="http://www.pptv.com/" style="color:#fff;">PPTV</a>
<span>|</span><a href="http://tv.sohu.com/" style="color:#fff;">搜狐视频</a>
<span>|</span><a href="http://www.fun.tv/" style="color:#fff;">风行网</a>
      </ul>
    </div>

<div class="clear"></div>
<div class="topAd" style="height:130px;align-content:center;margin-top:1%;text-align:center;;">
   <div style="display:inline-block;width:25%;height:100%;float:left;">
    <a href="http://www.qyttchina.com">
         <img src="/d/file/quanya.png" style="height:100%;width:auto;">
    </a>
   </div>
   <div style="display:inline-block;width:25%;height:100%;float:left;">
    <a href="http://www.bfechina.com">
         <img src="/d/file/Bcaijing.png" style="height:100%;width:auto;">
    </a>
   </div>
   <div style="display:inline-block;width:25%;height:100%;float:left;">
    <a href="http://www.yjplchina.com">
         <img src="/d/file/yunjian.png" style="height:100%;width:auto;">
    </a>
   </div>
   <div style="display:inline-block;width:25%;height:100%;float:left;">
    <a href="http://www.bosswbw.com">
         <img src="/d/file/wangbaowang.png" style="height:100%;width:auto;">
    </a>
   </div>
</div>
<div class="clear"></div>

<? @sys_ForSonclassData('2,3',10,52,1,0,15,0,0,0,32,0,0);?>
<div class="clear"></div>
<div class="team-jion">
  <div class="boxWrap-title">
    <p><span></span>
      <?=$class_r[9]['classname']?>
    </p>
    <span><a href="/<?=$class_r[9]['classpath']?>">更多++</a></span></div>
  <ul>
    <? @sys_GetEcmsInfo(9,4,32,0,0,17,0);?>
    <div class="clear"></div>
  </ul>
</div>
<div class="clear"></div>

<? @sys_ForSonclassData('21,6',10,52,1,0,15,0,0,0,32,0,0);?>
<? @sys_ForSonclassData('20,22',10,52,1,0,15,0,0,0,32,0,0);?>


<div class="topAd" style="width: 960px;margin: 0 auto;"><img src="/d/file/507610fdbc64d8ed1dc5021b49dda82d.jpg"></div><div class="clear"></div>

<div class="person">
  <div class="boxWrap-title">
    <p><span></span>
      <?=$class_r[5]['classname']?>
    </p>
    <span><a href="/<?=$class_r[5]['classpath']?>">更多++</a></span></div>
  <ul>
    <? @sys_GetEcmsInfo(5,12,32,0,0,16,0);?>
    <div class="clear"></div>
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