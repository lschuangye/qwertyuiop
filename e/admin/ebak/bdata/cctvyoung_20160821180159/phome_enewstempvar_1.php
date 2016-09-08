<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewstempvar`;");
E_C("CREATE TABLE `phome_enewstempvar` (
  `varid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `myvar` varchar(60) NOT NULL DEFAULT '',
  `varname` varchar(60) NOT NULL DEFAULT '',
  `varvalue` mediumtext NOT NULL,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isclose` tinyint(1) NOT NULL DEFAULT '0',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`varid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewstempvar` values('1','topMenuVar','顶部公共导航','<div class=\\\\\"topMenu\\\\\">\r\n      <ul>\r\n        [showclasstemp]\\\\''0\\\\'',1,0,8[/showclasstemp]\r\n      </ul>\r\n    </div>','0','0','1');");
E_D("replace into `phome_enewstempvar` values('2','footer','页面尾部','<div class=\\\\\"foot\\\\\">\r\n  <div class=\\\\\"footer\\\\\">\r\n    <div class=\\\\\"footer-menu\\\\\">\r\n      <ul>\r\n        [showclasstemp]\\\\''0\\\\'',13,0,11[/showclasstemp]\r\n      </ul>\r\n    </div>\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    <div class=\\\\\"footer-info\\\\\">成都宙斯影视文化传播有限公司 2016 版权所�\�<br/>\r\n      违法和不良信息举报电�\�:028-962377  蜀ICP�\�15024548�\�-3<br/>\r\n      <p class=\\\\\"foot-team\\\\\">\r\n<a title=\\\\\"华夏微电影\\\\" href=\\\\\"/foot-team/\\\\\"><img src=\\\\\"/d/file/e47e7eeb52e7892f6ff5632ee0e351e2.jpg\\\\\"></a>\r\n<a title=\\\\\"中央微电影台\\\\\" href=\\\\\"/foot-team/\\\\\"><img src=\\\\\"/d/file/8023c2bfad6fe338f057b986641ca625.jpg\\\\\"></a>\r\n<a title=\\\\\"CCTV电影频道\\\\\" href=\\\\\"/foot-team/\\\\\"><img src=\\\\\"/d/file/0b59fe92f69290cb3ec61046b47c1563.jpg\\\\\"></a>\r\n<a title=\\\\\"中国搜索\\\\\" href=\\\\\"/foot-team/\\\\\"><img src=\\\\\"/d/file/9ffc9d680c34c47ad23dc0bcc2e715c1.jpg\\\\\"></a></p>\r\n  </div>\r\n</div>','0','0','0');");
E_D("replace into `phome_enewstempvar` values('3','topPicVar','顶部图片公共变量','<div class=\\\\\"topImg\\\\\"><img src=\\\\\"/images/banner.jpg\\\\\" /></div>','0','0','0');");
E_D("replace into `phome_enewstempvar` values('8','header-2','其他页面头部公共变量','<div class=\\\\\"head-2\\\\\">\r\n\r\n<div class=\\\\\"head-2-wrap\\\\\">\r\n<div class=\\\\\"logo\\\\\"><a href=\\\\\"/\\\\\"><img src=\\\\\"/images/logo.png\\\\\"/></a></div>\r\n<div class=\\\\\"head-2-right\\\\\">\r\n<div class=\\\\\"head-2-topInfo\\\\\"><a href=\\\\\"#\\\\\">官方微博</a><a href=\\\\\"#\\\\\">官方微博</a></div>\r\n<div class=\\\\\"head-2-menu\\\\\"><ul><li><a href=\\\\\"/\\\\\">首页</a></li>\r\n<li><a href=\\\\\"/<?=\$class_r[14][\\\\''classpath\\\\'']?>\\\\\"><?=\$class_r[14][\\\\''classname\\\\'']?></a></li>\r\n<li><a href=\\\\\"/<?=\$class_r[15][\\\\''classpath\\\\'']?>\\\\\"><?=\$class_r[15][\\\\''classname\\\\'']?></a></li>\r\n<li><a href=\\\\\"/<?=\$class_r[16][\\\\''classpath\\\\'']?>\\\\\"><?=\$class_r[16][\\\\''classname\\\\'']?></a></li>\r\n<li><a href=\\\\\"/<?=\$class_r[17][\\\\''classpath\\\\'']?>\\\\\"><?=\$class_r[17][\\\\''classname\\\\'']?></a></li>\r\n<li><a href=\\\\\"/<?=\$class_r[11][\\\\''classpath\\\\'']?>\\\\\"><?=\$class_r[11][\\\\''classname\\\\'']?></a></li>\r\n<li><a href=\\\\\"/<?=\$class_r[8][\\\\''classpath\\\\'']?>\\\\\"><?=\$class_r[8][\\\\''classname\\\\'']?></a></li></ul></div>\r\n\r\n</div>\r\n</div>\r\n\r\n</div>','0','0','0');");
E_D("replace into `phome_enewstempvar` values('9','guestbook','留言板公共变�\�','<div class=\\\\\"guestbook\\\\\">\r\n<form name=\\\\''feedback\\\\'' method=\\\\''post\\\\'' action=\\\\''/e/enews/index.php\\\\''>\r\n  <input type=\\\\\"hidden\\\\\" name=\\\\\"ecmsfrom\\\\\" value=\\\\\"/contact-us/\\\\\">\r\n  <input type=hidden name=bid value=\\\\\"1\\\\\">\r\n  <input name=\\\\''enews\\\\'' type=\\\\''hidden\\\\'' value=\\\\''AddFeedback\\\\''>\r\n  <p><span class=\\\\\"other-span\\\\\">您的姓名:</span>\r\n    <input name=\\\\''title\\\\'' type=\\\\''text\\\\'' value=\\\\''\\\\''>\r\n    <span>(*)</span></p>\r\n  <p><span class=\\\\\"other-span\\\\\">邮箱地址:</span>\r\n    <input name=\\\\''email\\\\'' type=\\\\''text\\\\'' value=\\\\''\\\\''>\r\n    <span>(*)</span></p>\r\n  <p><span class=\\\\\"other-span\\\\\">留言内容:</span>\r\n    <textarea name=\\\\''saytext\\\\'' cols=\\\\''60\\\\'' rows=\\\\''12\\\\''></textarea>\r\n    <span>(*)</span></p>\r\n  <input id=\\\\\"submit\\\\\" type=\\\\''submit\\\\'' name=\\\\''submit\\\\'' value=\\\\''提交\\\\''>\r\n</form>\r\n</div>','0','0','0');");

@include("../../inc/footer.php");
?>