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
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfile_1` values('1','1000010000000001','17a594825d705f8109712fa5a11bfd0d.flv','80012470','','administrator','1469608150','2','6609014F06AE1C8E99DE142502A2B157.flv','0','0','1','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('2','1000010000000001','9601832e7dbd94050de4d0e82d6ad1b3.jpg','83574','','administrator','1469608404','2','�\�,季节-image.jpg','1','0','1','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('3','1000010000000001','d7d549adb19ab79eaa51890fa2fb7743.jpg','10457','','administrator','1469608483','2','1.jpg','1','0','1','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('4','1000010000000002','e3cedc7e6f7de3c1ba1e40bf984b99fa.jpg','10706','','administrator','1469608911','2','-M-465102d132cc89bb0ab319c17d4f3651_240x135.jpg','1','0','2','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('5','1000010000000002','5b315d2ac8725ae0e713d986c3a69319.jpg','163773','','administrator','1469608921','2','最初的梦想 电影微微一笑很倾城插曲-image.jpg','1','0','2','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('6','1000010000000003','1f69db065a71faa8d87e135dd2d7209f.jpg','14066','','administrator','1469609186','2','1.jpg','1','0','3','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('7','1000010000000003','95d88a0e54c0a4bbfeb1d047d6361fa2.jpg','85933','','administrator','1469609361','2','其实都没�\� 官方�\�-image.jpg','1','0','3','0','2','0');");
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
E_D("replace into `phome_enewsfile_1` values('58','1000010000000073','7b1931ddc798ef07e45b3887f3e6cf1d.jpg','404369','','administrator','1471590124','12','QQ图片20160819150135.jpg','1','0','73','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('61','1000010000000121','7271d2058fe68d46b97d0177beed6944.jpg','411144','','administrator','1471592225','12','QQ图片20160819153553.jpg','1','0','121','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('51','1000010000000072','a113ad02062c556c307c4386c55d095f.png','122948','','administrator','1471575127','12','1f1011a46f3747c787c89d7fc20fd285 (1).png','1','0','72','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('62','1000010000000122','9ffc9d680c34c47ad23dc0bcc2e715c1.jpg','28992','','administrator','1471771194','13','T-1.jpg','1','0','122','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('63','1000010000000123','0b59fe92f69290cb3ec61046b47c1563.jpg','28489','','administrator','1471771290','13','T-2.jpg','1','0','123','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('64','1000010000000124','8023c2bfad6fe338f057b986641ca625.jpg','34777','','administrator','1471771336','13','T-3.jpg','1','0','124','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('65','1000010000000125','e47e7eeb52e7892f6ff5632ee0e351e2.jpg','39700','','administrator','1471771360','13','T-4.jpg','1','0','125','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('57','1000010000000075','382c4b5cfa61c049c7f00512fad652d8.jpg','1277121','','administrator','1471589433','12','QQ图片20160819144916.jpg','1','0','75','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('36','1000010000000100','3e3e94a349ae7559204ba63aeadb82a4.jpg','89430','','administrator','1469868845','17','1-151015162JU96.jpg','1','0','100','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('37','1000010000000071','45dd585e3720d630fb9fd7e35f50da06.jpg','859492','','administrator','1470118022','8','未标�\�-1 副本.jpg','1','0','71','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('38','1000010000000120','c5540c5e7c7e1bf467b46f35d317f012.png','173616','','administrator','1471245738','11','图片1.png','1','0','120','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('39','1000010000000120','25244a6812982e49d351c305f5826b74.png','232268','','administrator','1471245781','11','图片2.png','1','0','120','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('40','1000010000000120','85670cb5f8f8e7eba5cb8c4ef3a663b3.png','222404','','administrator','1471245813','11','图片3.png','1','0','120','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('41','1000010000000120','7a8175f0c8e6339490b34e9898317caf.png','258876','','administrator','1471245847','11','图片4.png','1','0','120','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('42','1000010000000120','c8111fc3b4dc1a00892bf13ec3453571.png','173616','','administrator','1471246963','11','图片1.png','1','0','120','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('43','1000010000000120','70d5878e55c873f36799f17777fe957a.png','232268','','administrator','1471247005','11','图片2.png','1','0','120','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('44','1000010000000120','6d6848d64ba3a5aeaca896f38092084c.png','222404','','administrator','1471247048','11','图片3.png','1','0','120','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('45','1000010000000120','f6bd5ac7441d2f304ff90b44d5f31349.png','258876','','administrator','1471247080','11','图片4.png','1','0','120','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('50','1000010000000018','0d6981702cc41ff3838687ad539fac83.png','313111','','administrator','1471574033','2','图片17.png','1','0','18','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('60','1000010000000076','e0b46bc821aec07ae148a45f488b8df6.jpg','1335490','','administrator','1471591766','12','QQ图片20160819152837.jpg','1','0','76','0','2','0');");

@include("../../inc/footer.php");
?>