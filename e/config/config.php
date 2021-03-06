<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
define('EmpireCMSConfig',TRUE);
$ecms_config=array();

//数据库设置
$ecms_config['db']['usedb']='mysql';	//数据库类型
$ecms_config['db']['dbver']='5.7';	//数据库版本
$ecms_config['db']['dbserver']='localhost';	//数据库登录地址
$ecms_config['db']['dbport']='';	//端口，不填为按默认
$ecms_config['db']['dbusername']='root';	//数据库用户名
$ecms_config['db']['dbpassword']='12345';	//数据库密码
$ecms_config['db']['dbname']='cmtv';	//数据库名
$ecms_config['db']['setchar']='utf8';	//设置默认编码
$ecms_config['db']['dbchar']='utf8';	//数据库默认编码
$ecms_config['db']['dbtbpre']='phome_';	//数据表前缀
$dbtbpre=$ecms_config['db']['dbtbpre'];	//数据表前缀
$ecms_config['db']['showerror']=1;	//显示SQL错误提示(0为不显示,1为显示)


//页面编码设置
$ecms_config['sets']['pagechar']='utf-8';	//安装帝国CMS的编码版本
$ecms_config['sets']['setpagechar']=1;	//页面默认字符集,0=关闭 1=开启
$ecms_config['sets']['elang']='gb';	//语言包

//后台相关配置
$ecms_config['esafe']['openonlinesetting']=3;	//开启后台在线配置参数(0为关闭,1为开启防火墙配置,2为开启安全配置,3为全开启)
$ecms_config['esafe']['openeditdttemp']=1;	//开启后台在线修改动态模板(0为关闭,1为开启)

//易通行系统配置
$ecms_config['epassport']['open']=0;	//是否开启易通行系统(1为开启，0为关闭)

//其它配置
$ecms_config['sets']['txtpath']=ECMS_PATH.'d/txt/';	//文本型数据存放目录
$ecms_config['sets']['saveurlimgclearurl']=0;	//远程保存图片自动去除图片的链接(0为保留,1为去除)
$ecms_config['sets']['deftempid']=0;	//默认模板组ID



//-------EmpireCMS.Seting.member-------

//会员系统相关配置
$ecms_config['member']['tablename']="{$dbtbpre}enewsmember";	//会员表
$user_tablename=$ecms_config['member']['tablename'];	//会员表
$ecms_config['member']['changeregisterurl']="ChangeRegister.php";    //多会员组中转注册地址
$ecms_config['member']['registerurl']="";							//会员注册地址
$ecms_config['member']['loginurl']="";								//会员登录地址
$ecms_config['member']['quiturl']="";								//会员退出地址
$ecms_config['member']['chmember']=0;//是否使用原版会员表信息,0为原版,1为非原版
$ecms_config['member']['pwtype']=2;//密码保存形式,0为md5,1为明码,2为双重加密,3为16位md5
$ecms_config['member']['regtimetype']=1;//注册时间保存格式,0为正常时间,1为数值型
$ecms_config['member']['regcookietime']=0;//注册后登录保存时间(秒)
$ecms_config['member']['defgroupid']=0;//注册时会员组ID(ecms的会员组,0为后台默认)
$ecms_config['member']['saltnum']=6;//SALT随机码字符数
$ecms_config['member']['utfdata']=0;//数据是否是GBK编码,0为正常数据,1为GBK编码

$ecms_config['memberf']['userid']='userid';//用户ID字段
$ecms_config['memberf']['username']='username';//用户名字段
$ecms_config['memberf']['password']='password';//密码字段
$ecms_config['memberf']['rnd']='rnd';//随机密码字段
$ecms_config['memberf']['email']='email';//邮箱字段
$ecms_config['memberf']['registertime']='registertime';//注册时间字段
$ecms_config['memberf']['groupid']='groupid';//会员组字段
$ecms_config['memberf']['userfen']='userfen';//积分字段
$ecms_config['memberf']['userdate']='userdate';//有效期字段
$ecms_config['memberf']['money']='money';//帐户余额字段
$ecms_config['memberf']['zgroupid']='zgroupid';//到期转向会员组字段
$ecms_config['memberf']['havemsg']='havemsg';//提示短消息字段
$ecms_config['memberf']['checked']='checked';//审核状态字段
$ecms_config['memberf']['salt']='salt';//SALT加密字段
$ecms_config['memberf']['userkey']='userkey';//用户密钥字段

//-------EmpireCMS.Seting.member-------




//-------EmpireCMS.Seting.area-------

//后台安全设置
$ecms_config['esafe']['loginauth']='';	//登录认证码,如果设置登录需要输入此认证码才能通过
$ecms_config['esafe']['ecookiernd']='UUUUUUUUUUUUUUUUUUUUUUUUUUUUUU';	//后台登录COOKIE认证码(填写10~50个任意字符，最好多种字符组合)
$ecms_config['esafe']['ckhloginfile']=0;	//后台是否启用文件验证,0为验证,1为不验证
$ecms_config['esafe']['ckhloginip']=0;	//后台是否验证登录IP,0为不验证,1为验证
$ecms_config['esafe']['ckhsession']=0;	//后台是否启用SESSION验证,0为不验证,1为验证
$ecms_config['esafe']['theloginlog']=0;	//是否记录登陆日志(0为记录,1为不记录)
$ecms_config['esafe']['thedolog']=0;		//是否记录操作日志(0为记录,1为不记录)
$ecms_config['esafe']['ckfromurl']=0;	//是否启用来源地址验证,0为不验证,1为全部验证,2为后台验证,3为前台验证

//COOKIE设置
$ecms_config['cks']['ckdomain']='';		//cookie作用域
$ecms_config['cks']['ckpath']='/';		//cookie作用路径
$ecms_config['cks']['ckvarpre']='xxxxx';		//前台cookie变量前缀
$ecms_config['cks']['ckadminvarpre']='xxxxx';		//后台cookie变量前缀
$ecms_config['cks']['ckrnd']='UUUUUUUUUUUUUUUUUUUUUUUUUUUUUU';	//COOKIE验证随机码(填写10~50个任意字符，最好多种字符组合)
$ecms_config['cks']['ckrndtwo']='UUUUUUUUUUUUUUUUUUUUUUUUUUUUUU';	//COOKIE验证随机码2(填写10~50个任意字符，最好多种字符组合)

//网站防火墙配置
$ecms_config['fw']['eopen']=0;	//开启防火墙(0为关闭,1为开启)
$ecms_config['fw']['epass']='';	//防火墙加密密钥(填写10~50个任意字符，最好多种字符组合)
$ecms_config['fw']['adminloginurl']='';	//允许后台登陆的域名,设置后必须通过这个域名才能访问后台
$ecms_config['fw']['adminhour']='';	//允许登陆后台的时间：0~23小时，多个时间点用半角逗号格开
$ecms_config['fw']['adminweek']='';	//允许登陆后台的星期：星期0~6，多个星期用半角逗号格开
$ecms_config['fw']['adminckpassvar']='';	//后台预登陆验证变量名
$ecms_config['fw']['adminckpassval']='';	//后台预登陆认证码
$ecms_config['fw']['cleargettext']='';	//屏蔽提交敏感字符，多个用半角逗号格开

//-------EmpireCMS.Seting.area-------


//文件类型
$ecms_config['sets']['tranpicturetype']=',.jpg,.gif,.png,.bmp,.jpeg,';	//图片
$ecms_config['sets']['tranflashtype']=',.swf,.flv,.dcr,';	//FLASH
$ecms_config['sets']['mediaplayertype']=',.wmv,.asf,.wma,.mp3,.asx,.mid,.midi,';	//mediaplayer
$ecms_config['sets']['realplayertype']=',.rm,.ra,.rmvb,.mp4,.mov,.avi,.wav,.ram,.mpg,.mpeg,';	//realplayer




//***************** 以下部分为缓存，不用设置 **************

//-------EmpireCMS.Public.Cache-------

//------------e_public
$public_r=array('sitename'=>'央视微电影青春频道',
'newsurl'=>'/',
'filetype'=>'|.gif|.jpg|.swf|.rar|.zip|.mp3|.wmv|.txt|.doc|.flv|.mp4|.docx|.png|.ico|',
'filesize'=>204800,
'relistnum'=>8,
'renewsnum'=>100,
'min_keyboard'=>2,
'max_keyboard'=>20,
'search_num'=>20,
'search_pagenum'=>16,
'newslink'=>0,
'checked'=>0,
'searchtime'=>3,
'loginnum'=>5,
'logintime'=>60,
'addnews_ok'=>0,
'register_ok'=>0,
'indextype'=>'.html',
'goodlencord'=>0,
'goodtype'=>'',
'searchtype'=>'.html',
'exittime'=>40,
'smalltextlen'=>160,
'defaultgroupid'=>1,
'fileurl'=>'/d/file/',
'install'=>0,
'phpmode'=>0,
'dorepnum'=>300,
'loadtempnum'=>50,
'bakdbpath'=>'bdata',
'bakdbzip'=>'zip',
'downpass'=>'Rex5yiTD4CkUU3Fjiz2H',
'filechmod'=>1,
'loginkey_ok'=>0,
'tbname'=>'news',
'limittype'=>0,
'redodown'=>1,
'downsofttemp'=>'[ <a href=\"#ecms\" onclick=\"window.open(\'[!--down.url--]\',\'\',\'width=300,height=300,resizable=yes\');\">[!--down.name--]</a> ]',
'onlinemovietemp'=>'[ <a href=\"#ecms\" onclick=\"window.open(\'[!--down.url--]\',\'\',\'width=300,height=300,resizable=yes\');\">[!--down.name--]</a> ]',
'lctime'=>1222406370,
'candocode'=>1,
'opennotcj'=>0,
'listpagetemp'=>'页次：[!--thispage--]/[!--pagenum--]&nbsp;每页[!--lencord--]&nbsp;总数[!--num--]&nbsp;&nbsp;&nbsp;&nbsp;[!--pagelink--]&nbsp;&nbsp;&nbsp;&nbsp;转到:[!--options--]',
'reuserpagenum'=>50,
'revotejsnum'=>100,
'readjsnum'=>100,
'qaddtran'=>1,
'qaddtransize'=>50,
'ebakthisdb'=>1,
'delnewsnum'=>300,
'markpos'=>5,
'markimg'=>'../data/mark/maskdef.gif',
'marktext'=>'',
'markfontsize'=>'5',
'markfontcolor'=>'',
'markfont'=>'../data/mark/cour.ttf',
'adminloginkey'=>1,
'php_outtime'=>0,
'listpagefun'=>'sys_ShowListPage',
'textpagefun'=>'sys_ShowTextPage',
'adfile'=>'thea',
'notsaveurl'=>'',
'rssnum'=>50,
'rsssub'=>300,
'savetxtf'=>',',
'dorepdlevelnum'=>300,
'listpagelistfun'=>'sys_ShowListMorePage',
'listpagelistnum'=>12,
'infolinknum'=>100,
'searchgroupid'=>0,
'opencopytext'=>0,
'reuserjsnum'=>100,
'reuserlistnum'=>8,
'opentitleurl'=>1,
'searchtempvar'=>1,
'showinfolevel'=>0,
'navfh'=>'->',
'spicwidth'=>105,
'spicheight'=>118,
'spickill'=>1,
'jpgquality'=>80,
'markpct'=>65,
'redoview'=>24,
'reggetfen'=>0,
'regbooktime'=>30,
'revotetime'=>30,
'fpath'=>2,
'filepath'=>'',
'nreclass'=>',',
'nreinfo'=>',',
'nrejs'=>',',
'nottobq'=>',',
'defspacestyleid'=>1,
'canposturl'=>'',
'openspace'=>0,
'defadminstyle'=>1,
'realltime'=>0,
'closeip'=>'',
'openip'=>'',
'hopenip'=>'',
'textpagelistnum'=>6,
'memberlistlevel'=>0,
'ebakcanlistdb'=>0,
'keytog'=>2,
'keytime'=>30,
'keyrnd'=>'P4qGmYuFHDPZTjqcG8d7nDQTFfkqnN',
'checkdorepstr'=>',0,0,0,0,',
'regkey_ok'=>0,
'opengetdown'=>0,
'gbkey_ok'=>0,
'fbkey_ok'=>0,
'newaddinfotime'=>0,
'classnavs'=>'<a href=\"/index.html\">首页</a>&nbsp;|&nbsp;<a href=\"/remen/\">热门视频</a>&nbsp;|&nbsp;<a href=\"/foot-team/\">推荐企业</a>&nbsp;|&nbsp;<a href=\"/contact-us/\">联系我们</a>&nbsp;|&nbsp;<a href=\"/news/\">央影新片</a>&nbsp;|&nbsp;<a href=\"/cai-bian/\">采编中心</a>&nbsp;|&nbsp;<a href=\"/about-company/\">公司简介</a>&nbsp;|&nbsp;<a href=\"/myteam/\">团队介绍</a>',
'adminstyle'=>',1,2,',
'docnewsnum'=>300,
'openschall'=>0,
'schallfield'=>1,
'schallminlen'=>3,
'schallmaxlen'=>20,
'schallnum'=>20,
'schallpagenum'=>16,
'dtcanbq'=>1,
'dtcachetime'=>43200,
'repkeynum'=>0,
'regacttype'=>0,
'opengetpass'=>0,
'hlistinfonum'=>30,
'qlistinfonum'=>25,
'dtncanbq'=>1,
'dtncachetime'=>43200,
'readdinfotime'=>0,
'qeditinfotime'=>0,
'onclicktype'=>0,
'onclickfilesize'=>10,
'onclickfiletime'=>60,
'schalltime'=>0,
'defprinttempid'=>1,
'opentags'=>1,
'tagstempid'=>1,
'usetags'=>',1,2,3,4,5,6,7,8,',
'chtags'=>'',
'tagslistnum'=>25,
'closeqdt'=>0,
'settop'=>4,
'qlistinfomod'=>0,
'gb_num'=>20,
'member_num'=>20,
'space_num'=>25,
'infolday'=>0,
'filelday'=>0,
'dorepkey'=>0,
'dorepword'=>0,
'onclickrnd'=>'',
'indexpagedt'=>0,
'keybgcolor'=>'',
'keyfontcolor'=>'',
'keydistcolor'=>'',
'indexpageid'=>0,
'closeqdtmsg'=>'',
'openfileserver'=>0,
'fs_purl'=>'',
'closemods'=>'',
'fieldandtop'=>0,
'fieldandclosetb'=>'',
'filedatatbs'=>',1,',
'filedeftb'=>1,
'pldeftb'=>1,
'plurl'=>'/e/pl/',
'plkey_ok'=>1,
'plface'=>'||[~e.jy~]##1.gif||[~e.kq~]##2.gif||[~e.se~]##3.gif||[~e.sq~]##4.gif||[~e.lh~]##5.gif||[~e.ka~]##6.gif||[~e.hh~]##7.gif||[~e.ys~]##8.gif||[~e.ng~]##9.gif||[~e.ot~]##10.gif||',
'plf'=>'',
'pldatatbs'=>',1,',
'defpltempid'=>1,
'pl_num'=>12,
'plgroupid'=>0,
'closelisttemp'=>'',
'chclasscolor'=>'#99C4E3',
'timeclose'=>'',
'timeclosedo'=>'',
'ipaddinfonum'=>0,
'ipaddinfotime'=>0,
'rewriteinfo'=>'',
'rewriteclass'=>'',
'rewriteinfotype'=>'',
'rewritetags'=>'',
'memberconnectnum'=>0,
'closehmenu'=>',shop,',
'deftempid'=>0);
//------------e_public

//-------EmpireCMS.Public.Cache-------

$emod_pubr=Array('linkfields'=>'|');

$etable_r=array();
$etable_r['news']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>1);


$emod_r=array();
$emod_r[1]=Array('mid'=>1,
'mname'=>'视频系统模型',
'qmname'=>'视频系统',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,titlepic,newstime,bigpic,file,link,',
'qenter'=>',title,ftitle,titlepic,smalltext,writer,befrom,newstext,link,',
'listtempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,link,',
'tempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,link,',
'mustqenterf'=>',title,',
'listandf'=>',link,',
'setandf'=>0,
'searchvar'=>',title,smalltext,link,',
'cj'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'canaddf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,link,',
'caneditf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,link,',
'tbmainf'=>',title,file,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'tbdataf'=>',',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',file,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',file,',
'imgf'=>',titlepic,bigpic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>',link,',
'sonclass'=>'|24|',
'tid'=>1,
'tbname'=>'news');
$emod_r[9]=Array('mid'=>9,
'mname'=>'明星系统模型',
'qmname'=>'明星系统',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,titlepic,smalltext,newstext,link,',
'qenter'=>',special.field,link,',
'listtempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'tempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',title,',
'canaddf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'caneditf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'tbmainf'=>',title,file,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'tbdataf'=>',',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',file,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',file,',
'imgf'=>',titlepic,bigpic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|5|',
'tid'=>1,
'tbname'=>'news');
$emod_r[10]=Array('mid'=>10,
'mname'=>'合作媒体系统模型',
'qmname'=>'合作媒体',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,titlepic,newstext,',
'qenter'=>',',
'listtempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'tempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',title,',
'canaddf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'caneditf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'tbmainf'=>',title,file,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'tbdataf'=>',',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',file,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',file,',
'imgf'=>',titlepic,bigpic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|9|',
'tid'=>1,
'tbname'=>'news');
$emod_r[11]=Array('mid'=>11,
'mname'=>'活动征集系统模型',
'qmname'=>'活动征集',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,file,link,',
'qenter'=>',special.field,link,',
'listtempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'tempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',title,',
'canaddf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'caneditf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'tbmainf'=>',title,file,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'tbdataf'=>',',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',file,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',file,',
'imgf'=>',titlepic,bigpic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|10|',
'tid'=>1,
'tbname'=>'news');
$emod_r[12]=Array('mid'=>12,
'mname'=>'新闻系统模型',
'qmname'=>'新闻系统',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,newstime,smalltext,newstext,',
'qenter'=>',',
'listtempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'tempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,newstext,',
'cj'=>',title,',
'canaddf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'caneditf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'tbmainf'=>',title,file,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'tbdataf'=>',',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',file,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',file,',
'imgf'=>',titlepic,bigpic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|11|',
'tid'=>1,
'tbname'=>'news');
$emod_r[13]=Array('mid'=>13,
'mname'=>'单页面系统模型',
'qmname'=>'单页面',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,newstext,',
'qenter'=>',',
'listtempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'tempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',title,',
'canaddf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'caneditf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'tbmainf'=>',title,file,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'tbdataf'=>',',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',file,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',file,',
'imgf'=>',titlepic,bigpic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|8|15|16|',
'tid'=>1,
'tbname'=>'news');
$emod_r[14]=Array('mid'=>14,
'mname'=>'焦点图系统模型',
'qmname'=>'焦点图系统',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,special.field,titlepic,newstime,link,',
'qenter'=>',',
'listtempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,link,',
'tempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,link,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',title,',
'canaddf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,link,',
'caneditf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,link,',
'tbmainf'=>',title,file,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'tbdataf'=>',',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',file,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',file,',
'imgf'=>',titlepic,bigpic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|12|',
'tid'=>1,
'tbname'=>'news');
$emod_r[16]=Array('mid'=>16,
'mname'=>'管理中心系统模型',
'qmname'=>'管理中心',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,special.field,titlepic,smalltext,newstext,',
'qenter'=>',',
'listtempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,link,',
'tempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,link,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',title,',
'canaddf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,link,',
'caneditf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,link,',
'tbmainf'=>',title,file,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'tbdataf'=>',',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',file,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',file,',
'imgf'=>',titlepic,bigpic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|14|',
'tid'=>1,
'tbname'=>'news');
$emod_r[15]=Array('mid'=>15,
'mname'=>'底部合作伙伴系统模型',
'qmname'=>'底部合作伙伴',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,eare,hyclass,special.field,titlepic,',
'qenter'=>',',
'listtempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,link,',
'tempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,link,',
'mustqenterf'=>',title,',
'listandf'=>',title,ftitle,eare,hyclass,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,link,',
'setandf'=>0,
'searchvar'=>',title,ftitle,eare,hyclass,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,link,',
'cj'=>',title,',
'canaddf'=>',title,ftitle,eare,hyclass,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,link,',
'caneditf'=>',title,ftitle,eare,hyclass,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,link,',
'tbmainf'=>',title,file,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'tbdataf'=>',',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',file,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',file,',
'imgf'=>',titlepic,bigpic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>',title,ftitle,eare,hyclass,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,link,',
'sonclass'=>'|13|',
'tid'=>1,
'tbname'=>'news');
$emod_r[17]=Array('mid'=>17,
'mname'=>'团队介绍系统模型',
'qmname'=>'团队介绍',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,special.field,titlepic,smalltext,newstext,',
'qenter'=>',',
'listtempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'tempf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>'',
'cj'=>',title,',
'canaddf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'caneditf'=>',title,ftitle,titlepic,newstime,smalltext,writer,befrom,newstext,diggtop,bigpic,file,',
'tbmainf'=>',title,file,titlepic,newstime,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'tbdataf'=>',',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',file,ftitle,smalltext,writer,befrom,newstext,diggtop,link,bigpic,eare,hyclass,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',file,',
'imgf'=>',titlepic,bigpic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|17|',
'tid'=>1,
'tbname'=>'news');


//-------EmpireCMS.Public.Cache-------

?>