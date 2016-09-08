<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewssearchtemp`;");
E_C("CREATE TABLE `phome_enewssearchtemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `subnews` smallint(6) NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `listvar` text NOT NULL,
  `rownum` smallint(6) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `showdate` varchar(50) NOT NULL DEFAULT '',
  `subtitle` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `docode` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewssearchtemp` values('1','默认搜索模板','<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"UTF-8\\\\\">\r\n<title>[!--keyboard--] 搜索结果-[!--keyboard--]</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/ui.css?344\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/global.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n<style>\r\n#submit:hover {\r\n  background: #de2910 none repeat scroll 0 0;\r\n  border: medium none;\r\n  color: #fff;\r\n  cursor: pointer;\r\n  padding: 7px;\r\n}\r\n</style>\r\n</head>\r\n\r\n<body>\r\n[!--temp.header-2--]\r\n<div class=\\\\\"mainBody\\\\\">\r\n  <div class=\\\\\"mainBody-wrap\\\\\">\r\n    <div class=\\\\\"position\\\\\"><span class=\\\\\"name\\\\\">搜索结果:[!--keyboard--]</span><span class=\\\\\"current\\\\\">当前位置：[!--newsnav--]</span></div>\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    <div class=\\\\\"search\\\\\">\r\n    	<form name=\\\\\"searchform\\\\\" method=\\\\\"post\\\\\" action=\\\\\"/e/search/index.php\\\\\">\r\n    	<input name=\\\\\"keyboard\\\\\" type=\\\\\"text\\\\\">\r\n    	<input type=\\\\\"hidden\\\\\" name=\\\\\"show\\\\\" value=\\\\\"title,newstext\\\\\">\r\n    	<input type=\\\\\"hidden\\\\\" name=\\\\\"classid\\\\\" value=\\\\\"11\\\\\">\r\n    	<input type=\\\\\"hidden\\\\\" name=\\\\\"classid\\\\\" value=\\\\\"11\\\\\">\r\n    	<input style=\\\\\"margin-left: 0;\\\\\" type=\\\\\"submit\\\\\" id=\\\\\"submit\\\\\" name=\\\\\"submit\\\\\" value=\\\\\"搜索\\\\\">\r\n\r\n    	</form>\r\n    </div>\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    <div class=\\\\\"other-news-list\\\\\"> [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]\r\n      <div class=\\\\\"clear\\\\\"></div>\r\n      <div class=\\\\\"pagelist\\\\\">[!--show.page--]</div>\r\n    </div>\r\n  </div>\r\n</div>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','180','1','<li>\r\n  <p class=\\\\\"p3\\\\\"><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a><span>[!--newstime--]</span></p>\r\n  <span class=\\\\\"span3\\\\\">[!--smalltext--]</span>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  <span class=\\\\\"span4\\\\\"><a href=\\\\\"[!--titleurl--]\\\\\">查看详情++</a></span>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n</li>\r\n','1','1','Y-m-d','0','0','0');");

@include("../../inc/footer.php");
?>