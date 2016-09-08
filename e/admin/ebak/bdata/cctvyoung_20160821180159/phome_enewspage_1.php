<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspage`;");
E_C("CREATE TABLE `phome_enewspage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL DEFAULT '',
  `pagetext` mediumtext NOT NULL,
  `path` varchar(255) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pagetitle` varchar(120) NOT NULL DEFAULT '',
  `pagekeywords` varchar(255) NOT NULL DEFAULT '',
  `pagedescription` varchar(255) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewspage` values('5','404错误','<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"UTF-8\\\\\">\r\n<title>[!--pagename--]_[!--pagekeywords--]]</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekeywords--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedescription--]\\\\\" />\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/global.css\\\\\" media=\\\\\"screen\\\\\"/>\r\n<style>\r\nhtml {\r\n	height: 100%;\r\n	width: 100%;\r\n}\r\nbody {\r\n	height: 100%;\r\n	width: 100%;\r\n}\r\n</style>\r\n</head>\r\n\r\n<body>\r\n<div class=\\\\\"p-404\\\\\">\r\n  <div class=\\\\\"main_404\\\\\">\r\n    <div class=\\\\\"main_404-img\\\\\"><img src=\\\\\"/images/404.png\\\\\" /></div>\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    <div class=\\\\\"waimian\\\\\">\r\n      <div class=\\\\\"main_404_ul\\\\\">\r\n        <ul>\r\n          <li><a href=\\\\\"/cai-bian/\\\\\" title=\\\\\"采编中心\\\\\">采编中心</a></li>\r\n          <li><a href=\\\\\"/news/\\\\\" title=\\\\\"最新动态\\\\">最新动�\�</a></li>\r\n          <li><a href=\\\\\"/contact-us/\\\\\" title=\\\\\"联系我们\\\\\">联系我们</a></li>\r\n          <li><a href=\\\\\"/foot-team/\\\\\" title=\\\\\"推荐企业\\\\\">推荐企业</a></li>\r\n        </ul>\r\n        <div class=\\\\\"clear\\\\\"></div>\r\n      </div>\r\n    </div>\r\n  </div>\r\n  <p class=\\\\\"footTag\\\\\"> <a href=\\\\\"/index.html\\\\\">首页</a><a href=\\\\\"/school/\\\\\">青春校园</a><a href=\\\\\"/job/\\\\\">青春创业</a><a href=\\\\\"/dasai/\\\\\">青春大赛</a><a href=\\\\\"/star/\\\\\">明星风采</a><a href=\\\\\"/laver/\\\\\">青春旅游</a><a href=\\\\\"/jiuzhu/\\\\\">青春救助</a><a href=\\\\\"/foot-team/\\\\\">推荐企业</a><a href=\\\\\"/contact-us/\\\\\">联系我们</a><a href=\\\\\"/news/\\\\\">最新动�\�</a><a href=\\\\\"/cai-bian/\\\\\">采编中心</a> \r\n</div>\r\n</body>\r\n</html>\r\n','../../404_page.html','0','央视微电影青春频�\�','宙斯影视|宙斯影视传媒|成都宙斯影视文化传播有限公司|央视微电影青春频道|宙斯微电影|青春频道','央视微电影青春频道是由成都宙斯影视文化传播有限公司与央视微电影频�\�,中央新影微电影台,华夏微视联合打造的权威媒体.央视微电影青春频道总部座落于天府之国成都国色天乡旅游度假区.网站网址:http://www.cctvyoung.com','0');");

@include("../../inc/footer.php");
?>