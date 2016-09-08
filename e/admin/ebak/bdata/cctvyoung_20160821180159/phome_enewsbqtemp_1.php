<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsbqtemp`;");
E_C("CREATE TABLE `phome_enewsbqtemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `modid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `temptext` text NOT NULL,
  `showdate` varchar(50) NOT NULL DEFAULT '',
  `listvar` text NOT NULL,
  `subnews` smallint(5) unsigned NOT NULL DEFAULT '0',
  `rownum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `docode` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsbqtemp` values('1','顶部栏目导航标签模板','1',' [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]','Y-m-d H:i:s','<li><a href=\\\\\"[!--classurl--]\\\\\">[!--classname--]</a></li>','0','1','0','0');");
E_D("replace into `phome_enewsbqtemp` values('13','底部栏目导航标签模板','1',' [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]','Y-m-d H:i:s','<a href=\\\\\"[!--classurl--]\\\\\">[!--classname--]</a><span>|</span>','0','1','0','0');");
E_D("replace into `phome_enewsbqtemp` values('14','内容页相关视频标签模�\�','1',' [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]','Y-m-d H:i:s','    <li><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\"><img src=\\\\\"[!--titlepic--]\\\\\" alt=\\\\\"[!--oldtitle--]\\\\\" /></a>\r\n      <p><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a></p>\r\n    </li>','0','1','0','0');");
E_D("replace into `phome_enewsbqtemp` values('15','首页循环栏目数据标签模板','1','<div class=\\\\\"boxWrap\\\\\">\r\n  <div class=\\\\\"boxWrap-title\\\\\">\r\n    <p><span></span>[!--the.classname--]</p>\r\n    <span><a href=\\\\\"[!--the.classurl--]\\\\\">更多++</a></span></div>\r\n  <ul>\r\n    [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n  </ul>\r\n</div>\r\n','Y-m-d H:i:s','    <li><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\"><img src=\\\\\"[!--titlepic--]\\\\\" alt=\\\\\"[!--oldtitle--]\\\\\" /></a>\r\n      <p><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a></p>\r\n    </li>','0','1','0','0');");
E_D("replace into `phome_enewsbqtemp` values('16','首页明星风采标签模板','1','[!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]\r\n','Y-m-d H:i:s','    <li><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\"><img src=\\\\\"[!--titlepic--]\\\\\" alt=\\\\\"[!--oldtitle--]\\\\\" /></a>\r\n      <p><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a></p>\r\n    </li>','0','1','0','0');");
E_D("replace into `phome_enewsbqtemp` values('17','首页合作媒体标签模板','10',' [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]','Y-m-d H:i:s','<li><a href=\\\\\"[!--titleurl--]\\\\\"><img src=\\\\\"[!--titlepic--]\\\\\" /></a></li>','0','1','0','0');");
E_D("replace into `phome_enewsbqtemp` values('18','活动征集标签模板','11',' [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]','Y-m-d H:i:s','<li>\r\n  <p>[!--title--]</p>\r\n  <span><a href=\\\\\"[!--file--]\\\\\" target=\\\\\"_blank\\\\\"> 点击下载活动章程>> </a></span></li>\r\n','0','1','0','0');");
E_D("replace into `phome_enewsbqtemp` values('19','首页推荐信息标签模板','12',' [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]','Y-m-d H:i:s','<dl>\r\n  <dt><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a></dt>\r\n  <dd><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--smalltext--]</a></dd>\r\n</dl>\r\n','0','1','0','0');");
E_D("replace into `phome_enewsbqtemp` values('20','首页最新信息标签模�\�','12',' [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]','Y-m-d H:i:s','<li><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a></li>','0','1','0','0');");
E_D("replace into `phome_enewsbqtemp` values('21','焦点图标�\�-图片','14',' [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]','Y-m-d H:i:s','<a href=\\\\\"[!--link--]\\\\\" target=\\\\\"_blank\\\\\"><img id=\\\\\"slide-img-[!--no.num--]\\\\\" src=\\\\\"[!--titlepic--]\\\\\" class=\\\\\"slide\\\\\" alt=\\\\\"\\\\\" /></a>','0','1','0','0');");
E_D("replace into `phome_enewsbqtemp` values('22','焦点图标�\�-文字','14','    [!--empirenews.listtemp--]\r\n    <script type=\\\\\"text/javascript\\\\\">\r\n    if(!window.slider) {\r\n		var slider={};\r\n	}\r\n\r\n	slider.data= [\r\n    {\r\n        <!--list.var1-->\r\n    },\r\n    {\r\n        <!--list.var2-->\r\n    },\r\n    {\r\n        <!--list.var3-->\r\n    },\r\n    {\r\n        <!--list.var4-->\r\n    },\r\n    {\r\n        <!--list.var5-->\r\n    }\r\n	];\r\n   </script> \r\n   [!--empirenews.listtemp--]\r\n','Y-m-d H:i:s','\\\\\"id\\\\\":\\\\\"slide-img-[!--no.num--]\\\\\",\r\n\\\\\"client\\\\\":\\\\\"[!--title--]\\\\\",\r\n\\\\\"desc\\\\\":\\\\\"[!--ftitle--]\\\\\"','0','5','0','0');");
E_D("replace into `phome_enewsbqtemp` values('23','首页热门视屏标签模板','1','[!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]','Y-m-d H:i:s','<li><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\"><img src=\\\\\"[!--bigpic--]\\\\\" /></a><p><a href=\\\\\"[!--titleurl--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\">[!--title--]</a></p></li>','0','1','0','0');");
E_D("replace into `phome_enewsbqtemp` values('24','底部合作伙伴标签模板','15','[!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]','Y-m-d H:i:s','<a href=\\\\\"[!--link--]\\\\\" title=\\\\\"[!--oldtitle--]\\\\\" target=\\\\\"_blank\\\\\"><img src=\\\\\"[!--titlepic--]\\\\\" /></a>','0','1','0','0');");

@include("../../inc/footer.php");
?>