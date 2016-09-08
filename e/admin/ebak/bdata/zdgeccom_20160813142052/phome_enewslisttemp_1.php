<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslisttemp`;");
E_C("CREATE TABLE `phome_enewslisttemp` (
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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslisttemp` values('1','默认视频列表模板','<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"UTF-8\\\\\">\r\n<title>[!--pagetitle--]</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/ui.css?344\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/global.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n</head>\r\n\r\n<body>\r\n<div class=\\\\\"homeTop\\\\\" id=\\\\\"subTopHeader\\\\\">\r\n  <div class=\\\\\"homeTopWrap\\\\\"> [!--temp.topMenuVar--]\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    [!--temp.topPicVar--]\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n  </div>\r\n</div>\r\n<div class=\\\\\"subTop\\\\\">\r\n  <p>当前位置：[!--newsnav--]</p>\r\n</div>\r\n<div class=\\\\\"clear\\\\\"></div>\r\n<div class=\\\\\"boxWrap\\\\\">\r\n  <div class=\\\\\"boxWrap-title\\\\\">\r\n    <p><span></span>[!--class.name--]</p>\r\n  </div>\r\n  <ul>\r\n    [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    <div class=\\\\\"pagelist\\\\\">[!--show.listpage--]</div>\r\n  </ul>\r\n</div>\r\n[!--temp.footer--]\r\n</body>\r\n</html>\r\n','0','0','    <li><a href=\\\\\"[!--titleurl--]\\\\\"><img src=\\\\\"[!--titlepic--]\\\\\" alt=\\\\\"[!--oldtitle--]\\\\\" /></a>\r\n      <p><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a></p>\r\n    </li>','1','1','Y-m-d','0','0','0');");
E_D("replace into `phome_enewslisttemp` values('9','默认明星列表模板','<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"UTF-8\\\\\">\r\n<title>[!--pagetitle--]</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/ui.css?344\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/global.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n</head>\r\n\r\n<body>\r\n<div class=\\\\\"homeTop\\\\\" id=\\\\\"subTopHeader\\\\\">\r\n  <div class=\\\\\"homeTopWrap\\\\\"> [!--temp.topMenuVar--]\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    [!--temp.topPicVar--]\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n  </div>\r\n</div>\r\n<div class=\\\\\"subTop\\\\\">\r\n  <p>当前位置：[!--newsnav--]</p>\r\n</div>\r\n<div class=\\\\\"clear\\\\\"></div>\r\n<div class=\\\\\"person\\\\\">\r\n  <div class=\\\\\"boxWrap-title\\\\\">\r\n    <p><span></span>[!--class.name--]</p>\r\n  </div>\r\n  <ul>\r\n    [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    <div class=\\\\\"pagelist\\\\\">[!--show.listpage--]</div>\r\n  </ul>\r\n</div>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','0','0','    <li><a href=\\\\\"[!--titleurl--]\\\\\"><img src=\\\\\"[!--titlepic--]\\\\\" alt=\\\\\"[!--oldtitle--]\\\\\" /></a>\r\n      <p><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a></p>\r\n    </li>','1','9','Y-m-d','0','0','0');");
E_D("replace into `phome_enewslisttemp` values('10','合作媒体列表模板','<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"UTF-8\\\\\">\r\n<title>[!--pagetitle--]</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/ui.css?344\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/global.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n</head>\r\n\r\n<body>\r\n<div class=\\\\\"homeTop\\\\\" id=\\\\\"subTopHeader\\\\\">\r\n  <div class=\\\\\"homeTopWrap\\\\\"> [!--temp.topMenuVar--]\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    [!--temp.topPicVar--]\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n  </div>\r\n</div>\r\n<div class=\\\\\"subTop\\\\\">\r\n  <p>当前位置：[!--newsnav--]</p>\r\n</div>\r\n<div class=\\\\\"clear\\\\\"></div>\r\n<div class=\\\\\"team-jion\\\\\">\r\n  <div class=\\\\\"boxWrap-title\\\\\">\r\n    <p><span></span>[!--class.name--]</p>\r\n  </div>\r\n  <ul>\r\n    [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    <div class=\\\\\"pagelist\\\\\">[!--show.listpage--]</div>\r\n  </ul>\r\n</div>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','0','0','<li><a href=\\\\\"[!--titleurl--]\\\\\"><img src=\\\\\"[!--titlepic--]\\\\\" /></a></li>','1','10','Y-m-d','0','0','0');");
E_D("replace into `phome_enewslisttemp` values('11','默认新闻列表模板','<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"UTF-8\\\\\">\r\n<title>[!--pagetitle--]</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/ui.css?344\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/global.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n</head>\r\n\r\n<body>\r\n[!--temp.header-2--]\r\n<div class=\\\\\"mainBody\\\\\">\r\n  <div class=\\\\\"mainBody-wrap\\\\\">\r\n    <div class=\\\\\"position\\\\\"><span class=\\\\\"name\\\\\">[!--class.name--]</span><span class=\\\\\"current\\\\\">当前位置：[!--newsnav--]</span></div>\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    <div class=\\\\\"other-news-list\\\\\"> [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]\r\n      <div class=\\\\\"clear\\\\\"></div>\r\n      <div class=\\\\\"pagelist\\\\\">[!--show.listpage--]</div>\r\n    </div>\r\n  </div>\r\n</div>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','0','0','<li>\r\n  <p class=\\\\\"p3\\\\\"><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a><span>[!--newstime--]</span></p>\r\n  <span class=\\\\\"span3\\\\\">[!--smalltext--]</span>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n  <span class=\\\\\"span4\\\\\"><a href=\\\\\"[!--titleurl--]\\\\\">查看详情++</a></span>\r\n  <div class=\\\\\"clear\\\\\"></div>\r\n</li>\r\n','1','12','Y-m-d','0','0','0');");
E_D("replace into `phome_enewslisttemp` values('16','联系我们列表模板','<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"UTF-8\\\\\">\r\n<title>[!--pagetitle--]</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/ui.css?344\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/global.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n</head>\r\n\r\n<body>\r\n[!--temp.header-2--]\r\n<div class=\\\\\"mainBody\\\\\">\r\n  <div class=\\\\\"mainBody-wrap\\\\\">\r\n    <div class=\\\\\"position\\\\\"><span class=\\\\\"name\\\\\">[!--class.name--]</span><span class=\\\\\"current\\\\\">当前位置：[!--newsnav--]</span></div>\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    <div class=\\\\\"mainBody-content\\\\\">\r\n      <div class=\\\\\"mainBody-content-T\\\\\">[!--class.name--]</div>\r\n      <div class=\\\\\"clear\\\\\"></div>\r\n      <div class=\\\\\"mainBody-content-body\\\\\"> [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--] </div>\r\n[!--temp.guestbook--]\r\n    </div>\r\n  </div>\r\n</div>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','0','0','[!--newstext--]','1','13','Y-m-d','0','0','0');");
E_D("replace into `phome_enewslisttemp` values('12','单页面列表模板','<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"UTF-8\\\\\">\r\n<title>[!--pagetitle--]</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/ui.css?344\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/global.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n</head>\r\n\r\n<body>\r\n<div class=\\\\\"homeTop\\\\\" id=\\\\\"subTopHeader\\\\\">\r\n  <div class=\\\\\"homeTopWrap\\\\\"> [!--temp.topMenuVar--]\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    [!--temp.topPicVar--]\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n  </div>\r\n</div>\r\n<div class=\\\\\"subTop\\\\\">\r\n  <p>当前位置：[!--newsnav--]</p>\r\n</div>\r\n<div class=\\\\\"clear\\\\\"></div>\r\n<div class=\\\\\"team-jion\\\\\">\r\n  <div class=\\\\\"boxWrap-title\\\\\">\r\n    <p><span></span>[!--class.name--]</p>\r\n  </div>\r\n  <div class=\\\\\"sigepage\\\\\">\r\n    [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]\r\n    </div>\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n</div>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','0','0','[!--newstext--]','1','13','Y-m-d','0','0','0');");
E_D("replace into `phome_enewslisttemp` values('13','其他页面列表模板','<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"UTF-8\\\\\">\r\n<title>[!--pagetitle--]</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/ui.css?344\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/global.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n</head>\r\n\r\n<body>\r\n[!--temp.header-2--]\r\n<div class=\\\\\"mainBody\\\\\">\r\n  <div class=\\\\\"mainBody-wrap\\\\\">\r\n    <div class=\\\\\"position\\\\\"><span class=\\\\\"name\\\\\">[!--class.name--]</span><span class=\\\\\"current\\\\\">当前位置：[!--newsnav--]</span></div>\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    <div class=\\\\\"mainBody-content\\\\\">\r\n      <div class=\\\\\"mainBody-content-T\\\\\">[!--class.name--]</div>\r\n      <div class=\\\\\"clear\\\\\"></div>\r\n      <div class=\\\\\"mainBody-content-body\\\\\"> [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--] </div>\r\n    </div>\r\n  </div>\r\n</div>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','0','0','[!--newstext--]','1','13','Y-m-d','0','0','0');");
E_D("replace into `phome_enewslisttemp` values('14','管理中心列表模板','<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"UTF-8\\\\\">\r\n<title>[!--pagetitle--]</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/ui.css?344\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/global.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n</head>\r\n\r\n<body>\r\n[!--temp.header-2--]\r\n<div class=\\\\\"mainBody\\\\\">\r\n  <div class=\\\\\"mainBody-wrap\\\\\">\r\n    <div class=\\\\\"position\\\\\"><span class=\\\\\"name\\\\\">[!--class.name--]</span><span class=\\\\\"current\\\\\">当前位置：[!--newsnav--]</span></div>\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    <div class=\\\\\"manage-center\\\\\"> [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]\r\n      <div class=\\\\\"clear\\\\\"></div>\r\n      <div class=\\\\\"pagelist\\\\\">[!--show.listpage--]</div>\r\n    </div>\r\n  </div>\r\n</div>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','0','0','      <dl>\r\n        <dd><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\"><img src=\\\\\"[!--titlepic--]\\\\\" alt=\\\\\"[!--oldtitle--]\\\\\"/></a>\r\n          <p>[!--title--]</p>\r\n        </dd>\r\n        <dt><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a></dt>\r\n        <p>[!--smalltext--]</p>\r\n        <span><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">查看详情++</a></span>\r\n        <div class=\\\\\"clear\\\\\"></div>\r\n      </dl>','1','16','Y-m-d','0','0','0');");
E_D("replace into `phome_enewslisttemp` values('15','团队介绍列表模板','<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"UTF-8\\\\\">\r\n<title>[!--pagetitle--]</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/ui.css?344\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/global.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n</head>\r\n\r\n<body>\r\n[!--temp.header-2--]\r\n<div class=\\\\\"mainBody\\\\\">\r\n  <div class=\\\\\"mainBody-wrap\\\\\">\r\n    <div class=\\\\\"position\\\\\"><span class=\\\\\"name\\\\\">[!--class.name--]</span><span class=\\\\\"current\\\\\">当前位置：[!--newsnav--]</span></div>\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    <div class=\\\\\"team-list\\\\\"> <ul>[!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]</ul>\r\n      <div class=\\\\\"clear\\\\\"></div>\r\n      <div class=\\\\\"pagelist\\\\\">[!--show.listpage--]</div>\r\n    </div>\r\n  </div>\r\n</div>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','0','0','\r\n<li> <a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\"><img src=\\\\\"[!--titlepic--]\\\\\" alt=\\\\\"[!--oldtitle--]\\\\\"/></a>\r\n  <p class=\\\\\"p1\\\\\">[!--title--]</p>\r\n  <p class=\\\\\"p2\\\\\">[!--ftitle--]</p>\r\n  <span class=\\\\\"span1\\\\\">[!--smalltext--]</span> <span class=\\\\\"span2\\\\\"><a href=\\\\\"[!--titleurl--]\\\\\">查看详情++</a></span> </li>\r\n','1','17','Y-m-d','0','0','0');");
E_D("replace into `phome_enewslisttemp` values('17','底部合作媒体列表模板','<!doctype html>\r\n<html>\r\n<head>\r\n<meta charset=\\\\\"UTF-8\\\\\">\r\n<title>[!--pagetitle--]</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/ui.css?344\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"/css/global.css\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\">\r\n</head>\r\n\r\n<body>\r\n[!--temp.header-2--]\r\n<div class=\\\\\"mainBody\\\\\">\r\n  <div class=\\\\\"mainBody-wrap\\\\\">\r\n    <div class=\\\\\"position\\\\\"><span class=\\\\\"name\\\\\">[!--class.name--]</span><span class=\\\\\"current\\\\\">当前位置：[!--newsnav--]</span></div>\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    <div class=\\\\\"mainBody-content\\\\\">\r\n      <div class=\\\\\"bt-class\\\\\"><span>行业类别：</span>\r\n        <ul>\r\n          [e:loop={\\\\''select tname,typeid,mid from zdgeccom.phome_enewsinfotype order by typeid\\\\'',20,24,0}]\r\n          <li><a href=\\\\\"/e/action/ListInfo.php?ttid=<?=\$bqr[typeid]?>&tempid=17\\\\\">\r\n            <?=\$bqr[tname]?>\r\n            </a></li>\r\n          [/e:loop]\r\n        </ul>\r\n        <div class=\\\\\"clear\\\\\"></div>\r\n      </div>\r\n      <div class=\\\\\"clear\\\\\"></div>\r\n      <div class=\\\\\"mainBody-content-body\\\\\" id=\\\\\"bt-class\\\\\"> <ul>[!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]</ul> <div class=\\\\\"clear\\\\\"></div></div>\r\n    </div>\r\n  </div>\r\n</div>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','0','0','<li><a href=\\\\\"[!--link--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\" target=\\\\\"_blank\\\\\"><img src=\\\\\"[!--titlepic--]\\\\\"  alt=\\\\\"[!--oldtitle--]\\\\\"/></a></li>','1','15','Y-m-d','0','0','0');");

@include("../../inc/footer.php");
?>