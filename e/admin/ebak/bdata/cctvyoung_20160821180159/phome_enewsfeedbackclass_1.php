<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfeedbackclass`;");
E_C("CREATE TABLE `phome_enewsfeedbackclass` (
  `bid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bname` varchar(60) NOT NULL DEFAULT '',
  `btemp` mediumtext NOT NULL,
  `bzs` varchar(255) NOT NULL DEFAULT '',
  `enter` text NOT NULL,
  `mustenter` text NOT NULL,
  `filef` varchar(255) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `checkboxf` text NOT NULL,
  `usernames` text NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfeedbackclass` values('1','默认反馈分类','[!--cp.header--]<table width=100% align=center cellpadding=3 cellspacing=1 bgcolor=''#DBEAF5''><form name=''feedback'' method=''post'' enctype=''multipart/form-data'' action=''../../enews/index.php''><input name=''enews'' type=''hidden'' value=''AddFeedback''><tr><td width=''16%'' height=25 bgcolor=''ffffff''>您的姓名</td><td bgcolor=''ffffff''><input name=''title'' type=''text'' value=''''>(*)</td></tr><tr><td width=''16%'' height=25 bgcolor=''ffffff''>邮箱地址</td><td bgcolor=''ffffff''><input name=''email'' type=''text'' value=''''>(*)</td></tr><tr><td width=''16%'' height=25 bgcolor=''ffffff''>留言内容</td><td bgcolor=''ffffff''><textarea name=''saytext'' cols=''60'' rows=''12''></textarea>(*)</td></tr><tr><td bgcolor=''ffffff''></td><td bgcolor=''ffffff''><input type=''submit'' name=''submit'' value=''提交''></td></tr></form></table>[!--cp.footer--]','','您的姓名<!--field--->title<!--record-->邮箱地址<!--field--->email<!--record-->留言内容<!--field--->saytext<!--record-->',',title,email,saytext,',',','0',',','');");

@include("../../inc/footer.php");
?>