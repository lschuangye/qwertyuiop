<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile_1`;");
E_C("CREATE TABLE `phome_enewsfile_1` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfile_1` values('1','1000010000000001','17a594825d705f8109712fa5a11bfd0d.flv','80012470','','administrator','1469608150','2','6609014F06AE1C8E99DE142502A2B157.flv','0','0','1','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('2','1000010000000001','9601832e7dbd94050de4d0e82d6ad1b3.jpg','83574','','administrator','1469608404','2','爱,季节-image.jpg','1','0','1','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('3','1000010000000001','d7d549adb19ab79eaa51890fa2fb7743.jpg','10457','','administrator','1469608483','2','1.jpg','1','0','1','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('4','1000010000000002','e3cedc7e6f7de3c1ba1e40bf984b99fa.jpg','10706','','administrator','1469608911','2','-M-465102d132cc89bb0ab319c17d4f3651_240x135.jpg','1','0','2','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('5','1000010000000002','5b315d2ac8725ae0e713d986c3a69319.jpg','163773','','administrator','1469608921','2','最初的梦想 电影微微一笑很倾城插曲-image.jpg','1','0','2','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('6','1000010000000003','1f69db065a71faa8d87e135dd2d7209f.jpg','14066','','administrator','1469609186','2','1.jpg','1','0','3','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('7','1000010000000003','95d88a0e54c0a4bbfeb1d047d6361fa2.jpg','85933','','administrator','1469609361','2','其实都没有 官方版-image.jpg','1','0','3','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('8','1000010000000004','418f40284018591c405267cd6aa2ca5b.jpg','14066','','administrator','1469610215','5','1.jpg','1','0','4','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('9','1000010000000004','9dc9df162fb28c4abe9c806ad20fb962.jpg','47660','','administrator','1469610243','5','1.jpg','1','0','4','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('10','1000010000000005','c041fa36364683f0e7fcf5dfabead82e.jpg','44130','','administrator','1469610395','5','1.jpg','1','0','5','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('11','1000010000000006','b385d07887aa11090c5f8b1e06d9a3ef.jpg','57403','','administrator','1469610879','5','1.jpg','1','0','6','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('12','1000010000000007','8ae4e08b69a67ec56e4384447b1ea122.jpg','41174','','administrator','1469610936','5','1.jpg','1','0','7','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('13','1000010000000008','5a0945366b92d1e061178c6405506d9e.jpg','58013','','administrator','1469611019','5','1.jpg','1','0','8','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('14','1000010000000009','646e5b94a60551fce3619656274a7779.jpg','46356','','administrator','1469611143','5','1.jpg','1','0','9','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('15','1000010000000003','dbb59520788aa6f96c467224dd57884c.jpg','47623','','administrator','1469611202','2','1.jpg','1','0','3','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('16','1000010000000002','12b1f72ec3fbfad31576450ec20d7b5b.jpg','35204','','administrator','1469611297','2','1.jpg','1','0','2','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('17','1000010000000001','6bbf9290c62a1510bc91f636ce5f80ba.jpg','41739','','administrator','1469611358','2','1.jpg','1','0','1','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('18','1000010000000052','6fa79184fd131b1b240275b412d45edb.jpg','101916','','administrator','1469612278','9','1.jpg','1','0','52','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('19','1000010000000053','43760be0b41abab4a13513c68c9735ec.jpg','101434','','administrator','1469612458','9','1.jpg','1','0','53','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('20','1000010000000054','de358e4c35567ede501e825768930602.jpg','65297','','administrator','1469612580','9','1.jpg','1','0','54','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('21','1000010000000055','bd3dda4d135ced8b318121118c533cc7.jpg','106103','','administrator','1469612668','9','1.jpg','1','0','55','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('22','0','6057e0ad22572766ef9dd25e61484515.docx','14129','','administrator','1469613801','10','2016482dybaomingbiao.docx','0','0','1469613740','1469613740','2','0');");
E_D("replace into `phome_enewsfile_1` values('23','1000010000000056','426e6a9c64af33db0d7ecbcb21e869b7.docx','14129','','administrator','1469613818','10','2016482dybaomingbiao.docx','0','0','56','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('24','1000010000000057','556d41299d4f05e8bc1f11ceca39c7c0.docx','14129','','administrator','1469613870','10','2016482dybaomingbiao.docx','0','0','57','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('25','1000010000000058','eb414d865cf1ab314d81ce91be518529.docx','14129','','administrator','1469613886','10','2016482dybaomingbiao.docx','0','0','58','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('26','1000010000000072','8b6da2a283d63d5ed2dea0a3f53743f3.jpg','195674','','administrator','1469616830','12','1463736362985_916.jpg','1','0','72','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('27','1000010000000073','e5dbe3e3c15f46e362f83c1350f258e8.jpg','138338','','administrator','1469616875','12','1459244427960_449.jpg','1','0','73','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('28','1000010000000074','4f5ac2be06aa7a09804a2e9fffbc1c99.jpg','37108','','administrator','1469616924','12','1469086174241_867.jpg','1','0','74','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('29','1000010000000075','d811b2118444d62197ad1c44191a7c16.jpg','15700','','administrator','1469616961','12','1458206116775_849.jpg','1','0','75','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('30','1000010000000076','3ca6220cbae2ee79be51b338cd9d3410.jpg','157426','','administrator','1469617016','12','1461919255998_56.jpg','1','0','76','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('31','1000010000000088','fabcdda958fe8ed4d12c1e1a7fe4ae54.png','22207','','administrator','1469861049','13','partner.1.png','1','0','88','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('32','1000010000000089','9762af3fe631d52db23c730b31a0a8bc.png','18272','','administrator','1469861103','13','partner.2.png','1','0','89','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('33','1000010000000090','13a426f49f4192c6b4f7d32e2f98184d.png','20183','','administrator','1469861137','13','partner.3.png','1','0','90','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('34','1000010000000091','a576eb6fb09cc153e231a7387ec95a3d.png','20616','','administrator','1469861159','13','partner.4.png','1','0','91','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('35','1000010000000092','3489ad7ed1be8c45b56612c5c408f542.jpg','235559','','administrator','1469867847','14','1-151223201JMU.jpg','1','0','92','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('36','1000010000000100','3e3e94a349ae7559204ba63aeadb82a4.jpg','89430','','administrator','1469868845','17','1-151015162JU96.jpg','1','0','100','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('37','1000010000000071','45dd585e3720d630fb9fd7e35f50da06.jpg','859492','','administrator','1470118022','8','未标题-1 副本.jpg','1','0','71','0','2','0');");

@include("../../inc/footer.php");
?>