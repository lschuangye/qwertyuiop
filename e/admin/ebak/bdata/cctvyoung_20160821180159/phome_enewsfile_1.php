<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile`;");
E_C("CREATE TABLE `phome_enewsfile` (
  `fileid` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(60) NOT NULL DEFAULT '',
  `filesize` int(11) NOT NULL DEFAULT '0',
  `path` varchar(20) NOT NULL DEFAULT '',
  `adduser` varchar(30) NOT NULL DEFAULT '',
  `filetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `classid` smallint(6) NOT NULL DEFAULT '0',
  `no` varchar(60) NOT NULL DEFAULT '',
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `id` bigint(20) NOT NULL DEFAULT '0',
  `cjid` bigint(20) NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=254 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfile` values('41','664ae7a605683b81b44f0cc630f61fa5.jpg','35433','2013-08-10','admin','2013-08-10 10:53:56','14','图片21.jpg','1','0','7','0','0');");
E_D("replace into `phome_enewsfile` values('2','b0b072ce68b4daca83187992d65357ff.jpg','17685','2013-08-08','administrator','2013-08-08 11:25:44','17','a201308017.jpg','1','0','23','0','0');");
E_D("replace into `phome_enewsfile` values('3','904b65ef322b0d5a7a9883e5fe708842.jpg','126427','2013-08-08','administrator','2013-08-08 11:27:03','17','01300000883639127572401825361.jpg','1','0','23','0','0');");
E_D("replace into `phome_enewsfile` values('4','cbf990909b21913099cf2e0150994ae1.jpg','17685','2013-08-08','administrator','2013-08-08 11:39:48','10','a201308017.jpg','1','0','2','0','0');");
E_D("replace into `phome_enewsfile` values('5','28767e36247be152967450003a31be3a.jpg','527424','2013-08-08','administrator','2013-08-08 11:57:36','28','1.jpg','1','0','41','0','0');");
E_D("replace into `phome_enewsfile` values('6','7ab3064f0f6a7bc316f880cb3ba757df.jpg','40009','2013-08-09','admin','2013-08-09 10:42:02','3','图片1.jpg','1','0','1','0','0');");
E_D("replace into `phome_enewsfile` values('94','4583b8f9820afb313409930923cf18f5.jpg','50791','2013-10-17','admin','2013-10-17 09:15:32','6','0.jpg','1','0','50','0','0');");
E_D("replace into `phome_enewsfile` values('95','3e1b13bf9dff8107256ef44fb0c631b6.jpg','46671','2013-10-17','admin','2013-10-17 09:15:41','6','1.jpg','1','0','50','0','0');");
E_D("replace into `phome_enewsfile` values('96','36a81e47d9dc1bc5afcc24b18ad87507.jpg','36919','2013-10-17','admin','2013-10-17 09:15:48','6','2.jpg','1','0','50','0','0');");
E_D("replace into `phome_enewsfile` values('97','59ed78353ac7871b43f5e57da4e01a65.jpg','48566','2013-10-17','admin','2013-10-17 09:15:53','6','3.jpg','1','0','50','0','0');");
E_D("replace into `phome_enewsfile` values('98','ec7cbc3a1dbc342ed7e8766a4618348e.jpg','72707','2013-10-17','admin','2013-10-17 09:15:58','6','4.jpg','1','0','50','0','0');");
E_D("replace into `phome_enewsfile` values('99','3a1df6ed9a8dc548e5d7687c9322fedd.jpg','79236','2013-10-17','admin','2013-10-17 09:16:05','6','5.jpg','1','0','50','0','0');");
E_D("replace into `phome_enewsfile` values('100','fa11ca7d5c62b6ac4421655f460eb849.jpg','65674','2013-10-17','admin','2013-10-17 09:16:11','6','6.jpg','1','0','50','0','0');");
E_D("replace into `phome_enewsfile` values('101','c03a5bc249389fe54594fcd2c29d4a46.jpg','60217','2013-10-17','admin','2013-10-17 09:16:17','6','7.jpg','1','0','50','0','0');");
E_D("replace into `phome_enewsfile` values('102','8b1fb8806280c178cf4bea535ebf7952.jpg','69172','2013-10-17','admin','2013-10-17 09:16:23','6','8.jpg','1','0','50','0','0');");
E_D("replace into `phome_enewsfile` values('103','1d578cb5b7ae475cf5eb03454d96b104.jpg','51587','2013-10-17','admin','2013-10-17 09:16:28','6','9.jpg','1','0','50','0','0');");
E_D("replace into `phome_enewsfile` values('18','a85598705c9e497313879a952579dfcb.jpg','9267','2013-08-10','admin','2013-08-10 09:47:36','15','图片1.jpg','1','0','56','0','0');");
E_D("replace into `phome_enewsfile` values('19','ed2586a67b9aceda75e0473e24a93a47.jpg','17508','2013-08-10','admin','2013-08-10 09:48:28','15','图片2.wmf','1','0','56','0','0');");
E_D("replace into `phome_enewsfile` values('21','074dfbf3d4ec30362d39c7713a75c926.jpg','34210','2013-08-10','admin','2013-08-10 09:49:47','15','图片2.wmf','1','0','56','0','0');");
E_D("replace into `phome_enewsfile` values('22','c35378cf9baf045a39077d98a6fd7f41.jpg','18175','2013-08-10','admin','2013-08-10 09:52:04','15','未命名_副本.jpg','1','0','56','0','0');");
E_D("replace into `phome_enewsfile` values('34','3dd94444c228f97fd7dddc5a9851ecba.jpg','107845','2013-08-10','admin','2013-08-10 10:42:52','15','未命�\�.jpg','1','0','61','0','0');");
E_D("replace into `phome_enewsfile` values('33','b3a03839752a9b5526b80b38795422b5.jpg','44168','2013-08-10','admin','2013-08-10 10:42:36','15','图片9.jpg','1','0','61','0','0');");
E_D("replace into `phome_enewsfile` values('32','1b37aa51f1cc974d51c18ea02df1753e.jpg','44549','2013-08-10','admin','2013-08-10 10:42:31','15','图片8.jpg','1','0','61','0','0');");
E_D("replace into `phome_enewsfile` values('31','99417eb1242a2e6a1ae158603fe291e7.jpg','39749','2013-08-10','admin','2013-08-10 10:42:26','15','图片7.jpg','1','0','61','0','0');");
E_D("replace into `phome_enewsfile` values('30','2da8156a94536adaf2ca8d426eda129a.jpg','48979','2013-08-10','admin','2013-08-10 10:42:21','15','图片6.jpg','1','0','61','0','0');");
E_D("replace into `phome_enewsfile` values('29','70b55ca3cc9c783ecf7b8447b0771fc1.jpg','41709','2013-08-10','admin','2013-08-10 10:42:13','15','图片5.jpg','1','0','61','0','0');");
E_D("replace into `phome_enewsfile` values('35','e8ecd78aa90b137686c479e646126ad2.jpg','53827','2013-08-10','admin','2013-08-10 10:48:48','15','图片15.jpg','1','0','66','0','0');");
E_D("replace into `phome_enewsfile` values('36','9ffc090a87ad1fe2abdbcc5f1811b9b8.jpg','41947','2013-08-10','admin','2013-08-10 10:49:36','15','图片16.jpg','1','0','66','0','0');");
E_D("replace into `phome_enewsfile` values('37','e22490da7b600ed120a0e70d8f85b5b8.jpg','63102','2013-08-10','admin','2013-08-10 10:49:42','15','图片17.jpg','1','0','66','0','0');");
E_D("replace into `phome_enewsfile` values('38','3142284c1f2258cb2996a12cf61d985a.jpg','61766','2013-08-10','admin','2013-08-10 10:49:47','15','图片18.jpg','1','0','66','0','0');");
E_D("replace into `phome_enewsfile` values('39','cc10337f040b6cc4b0ec103b92a4b7b4.jpg','11866','2013-08-10','admin','2013-08-10 10:49:52','15','图片19.jpg','1','0','66','0','0');");
E_D("replace into `phome_enewsfile` values('40','7f8b0c24ebf11c872ee43c3d0d9f6edd.jpg','10877','2013-08-10','admin','2013-08-10 10:49:57','15','图片20.jpg','1','0','66','0','0');");
E_D("replace into `phome_enewsfile` values('42','fe6824f4d2de62db436facf8f066cd65.jpg','48045','2013-08-10','admin','2013-08-10 10:54:00','14','图片22.jpg','1','0','7','0','0');");
E_D("replace into `phome_enewsfile` values('43','36ba097a7c71e65ec40dce6694c8129e.jpg','26743','2013-08-10','admin','2013-08-10 10:54:04','14','图片23.jpg','1','0','7','0','0');");
E_D("replace into `phome_enewsfile` values('44','0c20043b7226b20095c5ce7223502ed6.jpg','41449','2013-08-10','admin','2013-08-10 10:54:08','14','图片24.jpg','1','0','7','0','0');");
E_D("replace into `phome_enewsfile` values('45','5e41476e92a27d72f1fae24ad9dc3222.jpg','57210','2013-08-10','admin','2013-08-10 10:54:12','14','图片25.jpg','1','0','7','0','0');");
E_D("replace into `phome_enewsfile` values('46','3c4575981cd33cc0d3545f9879db95eb.jpg','44338','2013-08-10','admin','2013-08-10 10:54:17','14','图片26.jpg','1','0','7','0','0');");
E_D("replace into `phome_enewsfile` values('47','c9eb6c70111b8a8bab75ecbf7bbf18cd.jpg','69267','2013-08-10','admin','2013-08-10 10:54:22','14','图片27.jpg','1','0','7','0','0');");
E_D("replace into `phome_enewsfile` values('48','70f8b703ce4a07a3b994ad6e1fdb37c2.jpg','112174','2013-08-10','admin','2013-08-10 10:54:26','14','图片28.jpg','1','0','7','0','0');");
E_D("replace into `phome_enewsfile` values('49','be290908d2d9f16835b82128194d593c.jpg','93964','2013-08-10','admin','2013-08-10 10:54:32','14','图片29.jpg','1','0','7','0','0');");
E_D("replace into `phome_enewsfile` values('50','e6799fba2943e982e02f8e63611e755f.jpg','48833','2013-08-10','admin','2013-08-10 10:54:36','14','图片30.jpg','1','0','7','0','0');");
E_D("replace into `phome_enewsfile` values('51','be0036b39cf5075026256f8ecc99bd43.jpg','59382','2013-08-10','admin','2013-08-10 10:55:27','14','图片31.jpg','1','0','7','0','0');");
E_D("replace into `phome_enewsfile` values('52','4a8d4cfb7d27e14472699df10fb83965.jpg','227632','2013-08-16','admin','2013-08-16 09:52:59','18','图片1.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('53','9c59854320751b30fff6a08085e906f4.jpg','177443','2013-08-16','admin','2013-08-16 09:53:05','18','图片2.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('54','24ef1fa0f2c23944a61f5aeb3b4ef743.jpg','68637','2013-08-16','admin','2013-08-16 09:53:09','18','图片3.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('55','eb2b6cd5a5cabc20cc2d1d78bf170efa.jpg','226934','2013-08-16','admin','2013-08-16 09:53:16','18','图片4.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('56','0d58a6d4dd686c4c86515d1bd8db7855.jpg','30820','2013-08-16','admin','2013-08-16 09:53:21','18','图片5.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('57','07352c67e793cb8f499e6ae3b42cf8b2.jpg','206901','2013-08-16','admin','2013-08-16 09:53:27','18','图片6.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('58','dbf2476b681906e735e234fac5accf46.jpg','28138','2013-08-16','admin','2013-08-16 09:53:32','18','图片7.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('59','c46a87fe3f38f7e0e4b40f8c26b37926.jpg','43459','2013-08-16','admin','2013-08-16 09:53:36','18','图片8.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('60','8d39a3568e28798894d3ea098ac4622c.jpg','98544','2013-08-16','admin','2013-08-16 09:53:40','18','图片9.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('61','8ad4ddb40d4c06a2bc721b76b69fb56f.jpg','60634','2013-08-16','admin','2013-08-16 09:53:45','18','图片10.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('62','045195138263c61c3eb219e288b92e11.jpg','202743','2013-08-16','admin','2013-08-16 09:53:54','18','图片11.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('63','29731c70a7d66bed85b18d880b8f1142.jpg','21376','2013-08-16','admin','2013-08-16 09:53:58','18','图片12.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('64','3fb559eb8a7efbd0e89d9f346273f87c.jpg','118765','2013-08-16','admin','2013-08-16 09:54:03','18','图片13.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('65','0f51cbe031c8710c4df7b1f4ce63d0da.jpg','258211','2013-08-16','admin','2013-08-16 09:54:13','18','图片14.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('66','f9ebee65af7b18b484c7d73f7a38632d.jpg','322294','2013-08-16','admin','2013-08-16 09:54:24','18','图片15.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('67','3ce8ed28d6dde63340c14f631e2de6a2.jpg','158789','2013-08-16','admin','2013-08-16 09:54:31','18','图片16.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('68','f5bbb9eacf08c679dadbc564c92c304e.jpg','137307','2013-08-16','admin','2013-08-16 09:54:37','18','图片17.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('69','55fea6477f7bf2be40a3f71e8a1224a4.jpg','285815','2013-08-16','admin','2013-08-16 09:54:46','18','图片18.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('70','972c67afcacf178f3b524b5b86ae1359.jpg','11909','2013-08-16','admin','2013-08-16 09:54:50','18','图片19.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('71','a7c4e268a03b293240dd88c03e4ba8bd.jpg','151355','2013-08-16','admin','2013-08-16 09:54:57','18','图片20.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('72','2e66f8776920989ca86e814dea9d4046.jpg','524912','2013-08-16','admin','2013-08-16 09:55:10','18','图片21.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('73','2e7f24e005550bd3d69e24758c2fce52.jpg','8018','2013-08-16','admin','2013-08-16 09:55:14','18','图片22.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('74','cf20a0f7a731d5eec1ebc7806733ff32.jpg','20441','2013-08-16','admin','2013-08-16 09:55:18','18','图片23.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('75','fa69e0dbc4e667197203dbf908d641c9.jpg','44381','2013-08-16','admin','2013-08-16 09:55:23','18','图片24.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('76','dac7b3afd07646da27e7ab2bee378eb6.jpg','77956','2013-08-16','admin','2013-08-16 09:55:28','18','图片25.jpg','1','0','72','0','0');");
E_D("replace into `phome_enewsfile` values('77','45f80b8fbd3f9cdb2352d4f4d0baf4f6.jpg','27544','2013-08-16','admin','2013-08-16 11:06:18','32','图片26.jpg','1','0','97','0','0');");
E_D("replace into `phome_enewsfile` values('78','3a16b0b95ea4c7def11d9b89019e7337.jpg','33470','2013-08-16','admin','2013-08-16 11:06:24','32','图片27.jpg','1','0','97','0','0');");
E_D("replace into `phome_enewsfile` values('79','94f9fc9b2d84e7394d70fa0d7fcbedba.jpg','277556','2013-08-16','admin','2013-08-16 11:06:33','32','图片28.jpg','1','0','97','0','0');");
E_D("replace into `phome_enewsfile` values('80','6211ec2634287e53b21e9dd9271e3791.jpg','33470','2013-08-16','admin','2013-08-16 16:55:23','17','6211ec2634287e53b21e9dd9271e3791.jpg','1','0','23','0','0');");
E_D("replace into `phome_enewsfile` values('81','399fe5c4a5a1d263ba550f00a2f1bf7b.jpg','27544','2013-08-16','admin','2013-08-16 16:55:23','17','399fe5c4a5a1d263ba550f00a2f1bf7b.jpg','1','0','23','0','0');");
E_D("replace into `phome_enewsfile` values('82','3d85a909c153bc20d18847e4d1a6c73f.jpg','44381','2013-08-16','admin','2013-08-16 16:55:23','17','3d85a909c153bc20d18847e4d1a6c73f.jpg','1','0','23','0','0');");
E_D("replace into `phome_enewsfile` values('83','b5061696025c2624c8ec00fdd8acedce.jpg','177443','2013-08-16','admin','2013-08-16 16:57:38','17','图片2.jpg','1','0','23','0','0');");
E_D("replace into `phome_enewsfile` values('84','596f31aea0a2e1cb19733c0339655d3a.jpg','202743','2013-08-16','admin','2013-08-16 17:01:33','17','图片1.jpg','1','0','24','0','0');");
E_D("replace into `phome_enewsfile` values('85','745aef507c73b9bdf07763aaf01f5b4e.jpg','60634','2013-08-16','admin','2013-08-16 17:05:11','17','q.jpg','1','0','100','0','0');");
E_D("replace into `phome_enewsfile` values('86','ed71e5a4bec6b76f79259937d4c46969.jpg','226934','2013-08-16','admin','2013-08-16 17:05:20','17','w.jpg','1','0','100','0','0');");
E_D("replace into `phome_enewsfile` values('87','8a08bd839952574690ce8796a9c7b478.jpg','151355','2013-08-16','admin','2013-08-16 17:10:38','17','a7c4e268a03b293240dd88c03e4ba8bd.jpg','1','0','102','0','0');");
E_D("replace into `phome_enewsfile` values('88','7ddc1fdc418e2b4c36e70dc5a359575e.jpg','1502592','2013-08-22','admin','2013-08-22 10:19:49','21','1.jpg','1','0','104','0','0');");
E_D("replace into `phome_enewsfile` values('89','ee8c6b4d3c486aa7b7dd62d9583cd2be.jpg','1362508','2013-08-22','admin','2013-08-22 10:21:23','21','2.jpg','1','0','104','0','0');");
E_D("replace into `phome_enewsfile` values('90','1223f67d08da230399ffabd5640f9543.jpg','678885','2013-08-22','admin','2013-08-22 10:41:39','21','3.jpg','1','0','104','0','0');");
E_D("replace into `phome_enewsfile` values('91','221b22709f6189cf34118b900a201926.jpg','954047','2013-08-22','admin','2013-08-22 10:41:58','21','4.jpg','1','0','104','0','0');");
E_D("replace into `phome_enewsfile` values('92','1b4c4030f5504e690ae4e1c3bdeda827.jpg','780234','2013-08-22','admin','2013-08-22 10:42:37','21','5.jpg','1','0','104','0','0');");
E_D("replace into `phome_enewsfile` values('93','5be7d048a1746a820df531cf3d4048a3.jpg','401225','2013-09-02','admin','2013-09-02 14:11:54','6','对外工程承包资格证书.jpg','1','0','106','0','0');");
E_D("replace into `phome_enewsfile` values('104','9e79daf5db36016bf7032bde48d10e6f.jpg','107176','2014-07-03','admin','2014-07-03 12:42:58','4','董事长照�\�.jpg','1','0','44','0','0');");
E_D("replace into `phome_enewsfile` values('105','e44c79b17e076307ae7eeb5006afc6f5.jpg','68155','2014-07-03','admin','2014-07-03 16:15:40','8','图片1_副本.jpg','1','0','123','0','0');");
E_D("replace into `phome_enewsfile` values('106','c4342f7be79caabb2c8376aaf873df38.jpg','1338687','2014-09-09','admin','2014-09-09 10:48:35','12','c4342f7be79caabb2c8376aaf873df38.jpg','1','0','124','0','0');");
E_D("replace into `phome_enewsfile` values('107','9e17ac98bf8d620cf9fd31fe65506e06.jpg','507892','2014-09-09','admin','2014-09-09 10:48:35','12','9e17ac98bf8d620cf9fd31fe65506e06.jpg','1','0','124','0','0');");
E_D("replace into `phome_enewsfile` values('108','635fcd4d114dc8e1accf63230f91539e.jpg','701594','2014-09-09','admin','2014-09-09 10:48:35','12','635fcd4d114dc8e1accf63230f91539e.jpg','1','0','124','0','0');");
E_D("replace into `phome_enewsfile` values('109','680936381b878deedfaf7c58083b33a6.jpg','1156920','2014-09-09','admin','2014-09-09 10:48:35','12','680936381b878deedfaf7c58083b33a6.jpg','1','0','124','0','0');");
E_D("replace into `phome_enewsfile` values('110','a57613cb117dcf194412521aa3842f06.jpg','510575','2014-09-09','admin','2014-09-09 11:20:48','12','UCIT6M1N3OL@ZY{}HXKZ]~A.jpg','1','0','124','0','0');");
E_D("replace into `phome_enewsfile` values('111','03b6ba199cdf142121b5ee83fdbef494.jpg','661759','2014-09-09','admin','2014-09-09 11:21:31','12','{1[T66ZII291IS4WN5Q8)OK.jpg','1','0','124','0','0');");
E_D("replace into `phome_enewsfile` values('112','cd348f0ac2f2a37e82c8c706929ff55d.jpg','661759','2014-09-09','admin','2014-09-09 11:22:42','12','{1[T66ZII291IS4WN5Q8)OK.jpg','1','0','124','0','0');");
E_D("replace into `phome_enewsfile` values('113','7d3fe378fc41497c5eca3a385753de40.jpg','637689','2014-09-09','admin','2014-09-09 11:23:32','12','2LQALMOFXK6F%)6C1(N2L@3.jpg','1','0','124','0','0');");
E_D("replace into `phome_enewsfile` values('114','469891cd1b9c1703e8bfd456b89e347c.jpg','637689','2014-09-09','admin','2014-09-09 11:24:14','12','2LQALMOFXK6F%)6C1(N2L@3.jpg','1','0','124','0','0');");
E_D("replace into `phome_enewsfile` values('115','98b309adf6737b322b4e5d352b0300cf.jpg','590750','2014-09-09','admin','2014-09-09 11:25:00','12','B~N%]WS8JPR9XDUI]AF)C~G.jpg','1','0','124','0','0');");
E_D("replace into `phome_enewsfile` values('116','b5d4a9ade36e0710637fa8b1d2e12a34.jpg','601952','2014-10-10','admin','2014-10-10 15:15:07','12','02-01.jpg','1','0','129','0','0');");
E_D("replace into `phome_enewsfile` values('117','4e1d99688bfe8bf9851a518c82231ff8.jpg','497100','2014-10-10','admin','2014-10-10 15:15:39','12','02-02.jpg','1','0','129','0','0');");
E_D("replace into `phome_enewsfile` values('118','c975ff30f9c16a46e6c0166e89e0e258.jpg','448463','2014-10-10','admin','2014-10-10 15:16:07','12','02-03.jpg','1','0','129','0','0');");
E_D("replace into `phome_enewsfile` values('119','bce05631e91504eab7719f618f2e540c.jpg','590567','2014-10-10','admin','2014-10-10 15:16:38','12','02-04.jpg','1','0','129','0','0');");
E_D("replace into `phome_enewsfile` values('120','2a8c426bbb049b03c757c4d7225e84a1.jpg','557141','2014-10-10','admin','2014-10-10 15:17:03','12','02-05.jpg','1','0','129','0','0');");
E_D("replace into `phome_enewsfile` values('121','ebabf5d4731d185feeb1235eb7076f76.jpg','420700','2014-10-10','admin','2014-10-10 15:17:27','12','02-06.jpg','1','0','129','0','0');");
E_D("replace into `phome_enewsfile` values('122','d78bd08d1b6642f184bfecd76ef51803.jpg','437581','2014-10-10','admin','2014-10-10 15:17:50','12','02-07.jpg','1','0','129','0','0');");
E_D("replace into `phome_enewsfile` values('123','4ebda485e443aba0f4673c789f7cb207.jpg','621777','2014-10-10','admin','2014-10-10 15:18:18','12','02-08.jpg','1','0','129','0','0');");
E_D("replace into `phome_enewsfile` values('124','9dd377e1b8284bb1bcc833866d6072e8.jpg','809200','2014-11-13','admin','2014-11-13 11:26:27','12','1.jpg','1','0','130','0','0');");
E_D("replace into `phome_enewsfile` values('125','a389ba51d5e10910eefe1af1294931d6.jpg','469425','2014-11-13','admin','2014-11-13 11:27:01','12','2.jpg','1','0','130','0','0');");
E_D("replace into `phome_enewsfile` values('126','2b7e226ff4e8927b5f161f894bc8e3d5.jpg','667722','2014-11-13','admin','2014-11-13 11:27:33','12','3.jpg','1','0','130','0','0');");
E_D("replace into `phome_enewsfile` values('127','b045af498a12382efcf71fd823be66a3.jpg','511306','2014-11-13','admin','2014-11-13 11:28:08','12','4.jpg','1','0','130','0','0');");
E_D("replace into `phome_enewsfile` values('128','c5e3e9827c73ebb913279f46538d25aa.jpg','606656','2014-11-13','admin','2014-11-13 11:28:40','12','5.jpg','1','0','130','0','0');");
E_D("replace into `phome_enewsfile` values('129','bd2f03ccba83d47564c02063c46897da.jpg','776376','2014-11-13','admin','2014-11-13 11:29:24','12','6.jpg','1','0','130','0','0');");
E_D("replace into `phome_enewsfile` values('130','0b3f1a73d54e937238d3c1a2a6459c22.jpg','553681','2014-11-13','admin','2014-11-13 11:29:58','12','7.jpg','1','0','130','0','0');");
E_D("replace into `phome_enewsfile` values('131','466ce266f37e3b65a0b5773ae9770e06.jpg','441715','2014-11-13','admin','2014-11-13 11:31:48','12','8.jpg','1','0','130','0','0');");
E_D("replace into `phome_enewsfile` values('132','b95a98bf2c133599650a6b5df4ec9af5.jpg','749654','2014-11-13','admin','2014-11-13 14:28:09','4','@AKH~9LX`4}Z3VE}FK`S@9V.jpg','1','0','44','0','0');");
E_D("replace into `phome_enewsfile` values('133','f9c3410fbc33d62a86030c5339d16516.jpg','374024','2014-12-15','admin','2014-12-15 16:23:41','12','1.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('134','435dd79c75c89d7df370c36e4b52d4ce.jpg','351937','2014-12-15','admin','2014-12-15 16:24:20','12','2.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('135','2cf97ca4e7e4ac54c55d569865a3b3be.jpg','317836','2014-12-15','admin','2014-12-15 16:25:10','12','1.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('136','5a322fdf4b323f229bc68a2f23a87f91.jpg','309312','2014-12-15','admin','2014-12-15 16:25:29','12','2.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('137','8be55f2dc435eadb8925d0924a050ee8.jpg','350244','2014-12-15','admin','2014-12-15 16:26:02','12','3.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('138','68ff69d08813b21010947a0c295c3ebe.jpg','381353','2014-12-15','admin','2014-12-15 16:26:18','12','4.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('139','218da3f197a0118c23ab5d27b3923caf.jpg','326728','2014-12-15','admin','2014-12-15 16:26:34','12','5.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('140','d4e8982260b59a320ee03d5b983f581c.jpg','351632','2014-12-15','admin','2014-12-15 16:26:53','12','6.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('141','b074fe9db76b5a49679230eaa0531150.jpg','349809','2014-12-15','admin','2014-12-15 16:27:18','12','7.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('142','cda86235f9f5a86e69506a77a88688d6.jpg','347616','2014-12-15','admin','2014-12-15 16:27:36','12','8.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('143','383cf42f17b516b83bac143809332797.jpg','381353','2014-12-15','admin','2014-12-15 16:28:41','12','4.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('144','63e7a3f980de667ba91febf4a54deb58.jpg','326728','2014-12-15','admin','2014-12-15 16:29:05','12','5.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('145','8ffd2cef3dd390bc8a4bd132b7aafd6c.jpg','351632','2014-12-15','admin','2014-12-15 16:29:55','12','6.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('146','96da17eb25487e515eb21efd360c64b6.jpg','436138','2014-12-15','admin','2014-12-15 16:42:10','12','4.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('147','fb20be24a66f75d011b15811827f4c31.jpg','436138','2014-12-15','admin','2014-12-15 16:43:02','12','4.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('148','87f0e2414f0e68da1c01c40dd0d32dbd.jpg','326728','2014-12-15','admin','2014-12-15 16:43:50','12','5.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('149','e1d9318707d798579bb5d82b5b9d2e75.jpg','351632','2014-12-15','admin','2014-12-15 16:44:12','12','6.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('150','bec66fea44b3a1cd6d1071073db19c7d.jpg','349809','2014-12-15','admin','2014-12-15 16:44:29','12','7.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('151','f7230e6fb9132af2b3ffff5e833d42a3.jpg','347616','2014-12-15','admin','2014-12-15 16:44:47','12','8.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('152','d99970b117454654b8acd98b7d855c8a.jpg','421313','2014-12-15','admin','2014-12-15 17:07:28','12','4.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('153','922ddff73097fd837c864c4142438bd9.jpg','363406','2014-12-15','admin','2014-12-15 17:07:51','12','5.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('154','09513deb1f0379cb9bedca90907aacce.jpg','389875','2014-12-15','admin','2014-12-15 17:08:29','12','6.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('155','78aa9fd8e5187e9f6e8f68274ade5624.jpg','394595','2014-12-15','admin','2014-12-15 17:08:49','12','7.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('156','8c5b45034fa9b8dc4321a07a5d389732.jpg','347616','2014-12-15','admin','2014-12-15 17:10:24','12','8.jpg','1','0','131','0','0');");
E_D("replace into `phome_enewsfile` values('198','c237ba7dd5494bab753c7a605fd01fc7.jpg','296178','2015-03-09','admin','2015-03-09 11:04:44','12','1.jpg','1','0','139','0','0');");
E_D("replace into `phome_enewsfile` values('158','d734ef3a36520200887d09b95f7694d4.jpg','534024','2014-12-17','admin','2014-12-17 10:47:47','11','2.jpg','1','0','133','0','0');");
E_D("replace into `phome_enewsfile` values('199','c0af38a583f53483ec4da5cacedeb4a0.jpg','271259','2015-03-09','admin','2015-03-09 11:05:02','12','2.jpg','1','0','139','0','0');");
E_D("replace into `phome_enewsfile` values('195','7aab98aff51f5906314b9409e9d3f078.jpg','64997','2015-03-02','admin','2015-03-02 16:57:13','25','招聘主页图片.jpg','1','0','137','0','0');");
E_D("replace into `phome_enewsfile` values('194','a8cd90599b3d8d46bacdabd06f77df1b.jpg','64997','2015-03-02','admin','2015-03-02 16:52:07','25','招聘主页图片.jpg','1','0','137','0','0');");
E_D("replace into `phome_enewsfile` values('193','5f3d96936c25771e758bbe3ed60271ae.jpg','263181','2015-01-13','admin','2015-01-13 12:55:40','12','7.jpg','1','0','138','0','0');");
E_D("replace into `phome_enewsfile` values('192','bba7e087784914f6bf5d10a70f6dd4a7.jpg','253522','2015-01-13','admin','2015-01-13 12:55:20','12','6.jpg','1','0','138','0','0');");
E_D("replace into `phome_enewsfile` values('191','8aa06f362b913d9d181326c7cd4782a9.jpg','238674','2015-01-13','admin','2015-01-13 12:55:01','12','5.jpg','1','0','138','0','0');");
E_D("replace into `phome_enewsfile` values('190','080de897ea6743fc15b7e0fe17839925.jpg','260878','2015-01-13','admin','2015-01-13 12:54:42','12','4.jpg','1','0','138','0','0');");
E_D("replace into `phome_enewsfile` values('189','60e53a901e8dca137d3f977a2982011d.jpg','259311','2015-01-13','admin','2015-01-13 12:54:25','12','3.jpg','1','0','138','0','0');");
E_D("replace into `phome_enewsfile` values('187','9bc740221b89bdc7153eefedce713cd4.jpg','281476','2015-01-13','admin','2015-01-13 12:53:26','12','1.jpg','1','0','138','0','0');");
E_D("replace into `phome_enewsfile` values('188','dcb7425cdd83575b62c908213d363859.jpg','249295','2015-01-13','admin','2015-01-13 12:53:44','12','2.jpg','1','0','138','0','0');");
E_D("replace into `phome_enewsfile` values('196','0be86ed86f3cb1e23b8bdcd9ea254ef2.jpg','27126','2015-03-02','admin','2015-03-02 17:06:36','25','qrcode_for_gh_12b799bcdba8_258.jpg','1','0','137','0','0');");
E_D("replace into `phome_enewsfile` values('197','506b0f2831f44e810e135227657bacbe.jpg','22267','2015-03-02','admin','2015-03-02 17:09:56','25','流程.jpg','1','0','137','0','0');");
E_D("replace into `phome_enewsfile` values('200','4a96bd8ee80b80284f6515f8bdbe273e.jpg','239049','2015-03-09','admin','2015-03-09 11:06:21','12','3.jpg','1','0','139','0','0');");
E_D("replace into `phome_enewsfile` values('201','2df1189076a7f5cb629974a9741a358d.jpg','252625','2015-03-09','admin','2015-03-09 11:06:38','12','4.jpg','1','0','139','0','0');");
E_D("replace into `phome_enewsfile` values('202','ebfbe41fb60a2a83cf88a4b533ef9233.jpg','222144','2015-03-09','admin','2015-03-09 11:06:55','12','5.jpg','1','0','139','0','0');");
E_D("replace into `phome_enewsfile` values('203','f88d2215980e69acad0b6acbdbe26090.jpg','294779','2015-03-09','admin','2015-03-09 11:07:20','12','6.jpg','1','0','139','0','0');");
E_D("replace into `phome_enewsfile` values('204','b7665dd7e30bb0c43954e40dcd42c43b.jpg','285279','2015-03-09','admin','2015-03-09 11:07:42','12','7.jpg','1','0','139','0','0');");
E_D("replace into `phome_enewsfile` values('205','9a602d40748c819a0aa94ead600ddbd2.jpg','299386','2015-03-09','admin','2015-03-09 11:08:07','12','8.jpg','1','0','139','0','0');");
E_D("replace into `phome_enewsfile` values('206','06f5bcb8b3ff5372e6bac87d33191c7c.jpg','292442','2015-03-09','admin','2015-03-09 11:11:19','12','1.jpg','1','0','139','0','0');");
E_D("replace into `phome_enewsfile` values('207','22708fb188dd5f398c32d1a62b494b94.jpg','281476','2015-03-09','admin','2015-03-09 11:18:43','12','1.jpg','1','0','138','0','0');");
E_D("replace into `phome_enewsfile` values('208','25bfbc9400880ea94c0fadf04932dec7.jpg','249295','2015-03-09','admin','2015-03-09 11:18:59','12','2.jpg','1','0','138','0','0');");
E_D("replace into `phome_enewsfile` values('209','5879c64a64155d63af5c6c60bfc3aa54.jpg','259311','2015-03-09','admin','2015-03-09 11:19:14','12','3.jpg','1','0','138','0','0');");
E_D("replace into `phome_enewsfile` values('210','e90c0ff61dcd20b2cf5ea0cceb172eec.jpg','260878','2015-03-09','admin','2015-03-09 11:19:27','12','4.jpg','1','0','138','0','0');");
E_D("replace into `phome_enewsfile` values('211','3baf6f6d41a40eda70623d15196cc32f.jpg','238674','2015-03-09','admin','2015-03-09 11:19:46','12','5.jpg','1','0','138','0','0');");
E_D("replace into `phome_enewsfile` values('212','3cd28f1649cd51ce66ecb265b28a6db9.jpg','253522','2015-03-09','admin','2015-03-09 11:19:59','12','6.jpg','1','0','138','0','0');");
E_D("replace into `phome_enewsfile` values('213','9842d0962ea1d513fad7bd18740268ec.jpg','263181','2015-03-09','admin','2015-03-09 11:20:12','12','7.jpg','1','0','138','0','0');");
E_D("replace into `phome_enewsfile` values('214','8d219e7a4225f47a5b614630904da209.jpg','304723','2015-03-09','admin','2015-03-09 11:20:26','12','8.jpg','1','0','138','0','0');");
E_D("replace into `phome_enewsfile` values('215','e15d8c90cc162d9f48746a654921e8c7.jpg','259311','2015-03-09','admin','2015-03-09 11:32:22','12','3.jpg','1','0','138','0','0');");
E_D("replace into `phome_enewsfile` values('216','dbfd86648ed63e481905806c8b5ed062.jpg','548743','2015-03-09','admin','2015-03-09 11:32:42','12','4.jpg','1','0','138','0','0');");
E_D("replace into `phome_enewsfile` values('217','8627e8e6637013467644ab5ee21c3a35.jpg','548743','2015-03-09','admin','2015-03-09 11:33:25','12','4.jpg','1','0','138','0','0');");
E_D("replace into `phome_enewsfile` values('218','2c4aaae8f62c57728b7f2a138233f09a.jpg','641324','2015-03-09','admin','2015-03-09 11:34:08','12','8.jpg','1','0','138','0','0');");
E_D("replace into `phome_enewsfile` values('219','afb5f79ae6ae2c070a6fba223ba07a31.jpg','1507641','2015-03-11','admin','2015-03-11 14:03:29','10','_MG_9806_副本.jpg','1','0','140','0','0');");
E_D("replace into `phome_enewsfile` values('220','08250781b684bab41797a33b7b1eb46d.jpg','1503330','2015-03-11','admin','2015-03-11 14:09:59','10','_MG_9755_副本.jpg','1','0','140','0','0');");
E_D("replace into `phome_enewsfile` values('221','93e86faf448cfdbb7393874f2aa0f71b.jpg','1886629','2015-03-11','admin','2015-03-11 14:11:20','10','_MG_9832_副本.jpg','1','0','140','0','0');");
E_D("replace into `phome_enewsfile` values('222','cab376d37a5d62bc2f9fdd45d636cd34.jpg','773835','2015-03-11','admin','2015-03-11 14:34:38','10','_MG_9832_副本_编辑.jpg','1','0','140','0','0');");
E_D("replace into `phome_enewsfile` values('223','91ff2d3eb150d0d670826c0476913c43.jpg','593688','2015-03-11','admin','2015-03-11 14:35:12','10','_MG_9852_副本_编辑.jpg','1','0','140','0','0');");
E_D("replace into `phome_enewsfile` values('224','aa8ad49d0a6c20978a0445a67b63006a.jpg','524506','2015-03-11','admin','2015-03-11 14:35:43','10','_MG_9857_副本_编辑.jpg','1','0','140','0','0');");
E_D("replace into `phome_enewsfile` values('225','0f2060d8188837a96772269f76a19287.jpg','590754','2015-03-11','admin','2015-03-11 14:36:22','10','_MG_9867_副本_编辑.jpg','1','0','140','0','0');");
E_D("replace into `phome_enewsfile` values('226','431fa0ef6ec133052d5f9a726c51c86d.jpg','531747','2015-03-11','admin','2015-03-11 14:37:06','10','_MG_9872_副本_编辑.jpg','1','0','140','0','0');");
E_D("replace into `phome_enewsfile` values('227','4a0de6343d28a0d3bef03e324b29c3d1.jpg','491603','2015-03-11','admin','2015-03-11 14:37:42','10','_MG_9873_副本_编辑.jpg','1','0','140','0','0');");
E_D("replace into `phome_enewsfile` values('228','5ecc59cdb98473f2a09933d152ebd1ce.jpg','580404','2015-03-11','admin','2015-03-11 14:38:05','10','_MG_9874_副本_编辑.jpg','1','0','140','0','0');");
E_D("replace into `phome_enewsfile` values('229','fdd4bec8aee20e3f1bd2c8b0b8897c80.jpg','839611','2015-04-21','admin','2015-04-21 14:15:05','12','1.jpg','1','0','1429596830','1429596830','0');");
E_D("replace into `phome_enewsfile` values('230','de7eb03083a46b68e80161dc170271eb.jpg','753375','2015-04-21','admin','2015-04-21 14:16:54','12','2.jpg','1','0','141','0','0');");
E_D("replace into `phome_enewsfile` values('231','2d6ebfe40616439f17c3e0eb44547821.jpg','652480','2015-04-21','admin','2015-04-21 14:17:28','12','3.jpg','1','0','141','0','0');");
E_D("replace into `phome_enewsfile` values('232','2202a72d424c42408ab812fdc73c5191.jpg','686239','2015-04-21','admin','2015-04-21 14:17:53','12','4.jpg','1','0','141','0','0');");
E_D("replace into `phome_enewsfile` values('233','fb90812a7db72dad570497e1f3f45eae.jpg','781550','2015-04-21','admin','2015-04-21 14:18:32','12','5.jpg','1','0','141','0','0');");
E_D("replace into `phome_enewsfile` values('234','dd782baa9bb2fda0a0f0d7dc46e55736.jpg','743164','2015-04-21','admin','2015-04-21 14:18:58','12','6.jpg','1','0','141','0','0');");
E_D("replace into `phome_enewsfile` values('235','8e9c99024f3b7a6cc0fc0d296e81a2ff.jpg','128188','2015-04-27','admin','2015-04-27 10:10:12','8','2015组织架构�\�.jpg','1','0','123','0','0');");
E_D("replace into `phome_enewsfile` values('236','f06b9f383193535806cd9865a963129f.jpg','53371','2015-04-27','admin','2015-04-27 10:12:23','8','2015组织架构�\�1.jpg','1','0','123','0','0');");
E_D("replace into `phome_enewsfile` values('237','b91fed22ddbb7b207fb22e61471faafa.doc','30208','2015-04-29','admin','2015-04-29 15:15:01','37','2014年度职称申报人员公示通知.doc','0','0','143','0','0');");
E_D("replace into `phome_enewsfile` values('238','80c7009478538fc66d3ff26b8b3f082a.rar','13156','2015-04-29','admin','2015-04-29 15:18:21','37','2014年度专业技术职务任职资格评审申报人员基本情况表.rar','0','0','143','0','0');");
E_D("replace into `phome_enewsfile` values('239','ccdb269217b921844a82f3efd535ff80.jpg','64304','2015-05-05','admin','2015-05-05 09:24:23','37','2014年度专业技术职务任职资格评审申报人员基本情况表.jpg','1','0','143','0','0');");
E_D("replace into `phome_enewsfile` values('240','a861638211450e9875e88b7accc4632d.jpg','80036','2015-05-05','admin','2015-05-05 09:35:31','37','2014年度专业技术职务任职资格评审申报人员基本情况表_副本.jpg','1','0','143','0','0');");
E_D("replace into `phome_enewsfile` values('241','smalla861638211450e9875e88b7accc4632d1430789839.jpg','3786','2015-05-05','admin','2015-05-05 09:37:19','37','[s]2014年度专业技术职务任职资格评审申报人员基本情况表_副本.jpg','1','0','143','0','0');");
E_D("replace into `phome_enewsfile` values('242','727d934ac57474d6383ac0fb55a6e93b.jpg','76463','2015-05-05','admin','2015-05-05 09:42:28','37','2014年度专业技术职务任职资格评审申报人员基本情况表_副本.jpg','1','0','143','0','0');");
E_D("replace into `phome_enewsfile` values('243','small727d934ac57474d6383ac0fb55a6e93b.jpg','4743','2015-05-05','admin','2015-05-05 09:42:28','37','[s]2014年度专业技术职务任职资格评审申报人员基本情况表_副本.jpg','1','0','143','0','0');");
E_D("replace into `phome_enewsfile` values('244','59d920dfd0ae1a79cbcb1e949adf7434.jpg','303571','2015-05-27','admin','2015-05-27 10:54:44','10','IMG_1015_副本.jpg','1','0','1432695205','1432695205','0');");
E_D("replace into `phome_enewsfile` values('247','33f45033ff70bb79483ee472cc654ac7.jpg','79246','2016-02-25','admin','2016-02-25 09:23:09','10','33f45033ff70bb79483ee472cc654ac7.jpg','1','0','148','0','0');");
E_D("replace into `phome_enewsfile` values('250','9c65c287c93baac1763e6249ced292ca.jpg','152958','2016-03-17','admin','2016-03-17 16:24:48','37','2015年评审资�\�.jpg','1','0','149','0','0');");
E_D("replace into `phome_enewsfile` values('253','747fbedf96f2a32c0f0c2fde2492405a.rar','16117','2016-03-17','admin','2016-03-17 16:31:17','37','2015年度专业技术职务任职资格评审申报人员基本情况表.rar','0','0','149','0','0');");

@include("../../inc/footer.php");
?>