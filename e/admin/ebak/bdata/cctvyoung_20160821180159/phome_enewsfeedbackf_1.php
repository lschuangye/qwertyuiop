<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfeedbackf`;");
E_C("CREATE TABLE `phome_enewsfeedbackf` (
  `fid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `f` varchar(30) NOT NULL DEFAULT '',
  `fname` varchar(30) NOT NULL DEFAULT '',
  `fform` varchar(20) NOT NULL DEFAULT '',
  `fzs` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `ftype` varchar(30) NOT NULL DEFAULT '',
  `flen` varchar(20) NOT NULL DEFAULT '',
  `fformsize` varchar(12) NOT NULL DEFAULT '',
  `fvalue` text NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfeedbackf` values('1','title','标题','text','','0','VARCHAR','120','','');");
E_D("replace into `phome_enewsfeedbackf` values('2','saytext','内容','textarea','','2','TEXT','','','');");
E_D("replace into `phome_enewsfeedbackf` values('4','email','邮箱','text','','1','VARCHAR','80','','');");

@include("../../inc/footer.php");
?>