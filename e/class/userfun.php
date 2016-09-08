<?php
//---------------------------用户自定义标签函数文件
function user_PhotoMorepic($tempid){
	global $navinfor,$public_r;
	$morepic=$navinfor['morepic'];
	$rexp="\r\n";
	$fexp="::::::";
	$rstr="";
	$sdh="";
	$w_morepic="";
	$rr=explode($rexp,$morepic);
	$count=count($rr);
	$num=$count;
	
	//取得模板
	$tr=sys_ReturnBqTemp($tempid);
	if(empty($tr['tempid']))
	{return "";}
	$listtemp=str_replace('[!--news.url--]',$public_r[newsurl],$tr[temptext]);
	$subnews=$tr[subnews];
	$listvar=str_replace('[!--news.url--]',$public_r[newsurl],$tr[listvar]);
	$rownum=$tr[rownum];
	$formatdate=$tr[showdate];
	if(empty($rownum))
	{$rownum=1;}
	
	
	//列表
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	$listtext=$list_r[1];
	$no=1;
	$changerow=1;
	
	for($i=0;$i<$count;$i++)
	{
		
		$fr=explode($fexp,$rr[$i]);
	
		$smallpic=$fr[0]?$fr[0]:$public_r[newsurl]."e/data/images/notimg.gif";	//小图
		$bigpic=$fr[1]?$fr[1]:$public_r[newsurl]."e/data/images/notimg.gif";	//大图
		if(empty($bigpic))
		{
			$bigpic=$smallpic;
		}
		$picname=htmlspecialchars($fr[2]);	//名称
		$val[picname]=$picname;
		$val[bigpic]=$bigpic;
		$val[smallpic]=$smallpic;
		/////////////////
		$strF=",picname,bigpic,smallpic,";
		$repvar=user_ReplaceShowpicsVars($listvar,$strF,$val,$no);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
		$changerow=1;
		$string.=$listtext;
		$listtext=$list_r[1];
		}
		$no++;
			
	}
   $string=$list_r[0].$string.$list_r[2];
	echo $string;
}

function user_ReplaceShowpicsVars($listtemp,$strF,$val,$no) {
$fr=explode(',',$strF);
$fcount=count($fr)-1;;
for($i=1;$i<$fcount;$i++)
{
$f=$fr[$i];
$value=$val[$f];
$listtemp=str_replace('[!--'.$f.'--]',$value,$listtemp);
}
$listtemp=str_replace('[!--no.num--]',$no,$listtemp);

return $listtemp;
}
//显示结合项筛选选项
function user_ShowFieldandChange($ecms=0){
	global $public_r;

	//------- 函数参数设置开始 -----

	//要显示的结合项字段列表，多个字段用半角逗号“,”隔开
	$fieldandvar='eare,hyclass';

	//字段显示选项设置，多项用双“#”号隔开，格式：选项说明|==|内容1,值1##内容2,值2
	$fieldandval=array();
	$fieldandval['eare']='<b>地区：</b>|==|不限,##北京市,北京市##天津市,天津市##上海市,上海市##重庆市,重庆市##河北省,河北省##山西省,山西省##辽宁省,辽宁省##吉林省,吉林省##黑龙江省,黑龙江省##江苏省,江苏省##浙江省,浙江省##安徽省,安徽省##福建省,福建省##江西省,江西省##山东省,山东省##河南省,河南省##湖北省,湖北省##湖南省,湖南省##广东省,广东省##海南省,海南省##四川省,四川省##贵州省,贵州省##云南省,云南省##陕西省,陕西省##甘肃省,甘肃省##青海省,青海省##台湾省,台湾省##内蒙古,内蒙古##广西省,广西省##西藏,西藏##宁夏省,宁夏省##新疆省,新疆省##香港,香港##澳门,澳门';
	$fieldandval['hyclass']='<b>行业：</b>|==|不限,##机构组织,机构组织##农林牧渔,农林牧渔##医药卫生,医药卫生##建筑建材,建筑建材##冶金矿产,冶金矿产##石油化工,石油化工##水利水电,水利水电##交通运输,交通运输##信息产业,信息产业##机械机电,机械机电##轻工食品,轻工食品##服装纺织,服装纺织##专业服务,专业服务##安全防护,安全防护##环保绿化,环保绿化##旅游休闲,旅游休闲##办公文教,办公文教##电子电工,电子电工##玩具礼品,玩具礼品##家居用品,家居用品##物资,物资##包装,包装##体育,体育##办公,办公##物流,物流##装修,装修##其他行业,其他行业';

	//正常链接样式
	$fieldandcss='fieldandcss';

	//已选的选项链接样式
	$changefieldandcss='changefieldandcss';

	//字段与字段的显示间隔符，格式：开始显示字符|结束显示字符
	$fieldexp='<table><tr><td>|</td></tr></table>';

	//选项与选项的显示间隔符，格式：开始显示字符|结束显示字符
	$valexp='| ';

	//------- 函数参数设置结束 -----


	$userfunecmsver=function_exists('ehtmlspecialchars')?1:0;
	//附加参数
	$urlcs='';
	$mid=(int)$_GET['mid'];
	if($mid)
	{
		$urlcs.='&mid='.$mid;
	}
	if($_GET['classid'])
	{
		$classid=RepPostVar($_GET['classid']);
		$urlcs.='&classid='.$classid;
	}
	else
	{
		if(!$_GET['mid']&&!$_GET['ttid']&&!$_GET['ztid'])
		{
			$classid=intval($GLOBALS['navclassid']);
			$urlcs.='&classid='.$classid;
		}
	}
	if($_GET['ttid'])
	{
		$ttid=RepPostVar($_GET['ttid']);
		$urlcs.='&ttid='.$ttid;
	}
	if($_GET['ztid'])
	{
		$ztid=RepPostVar($_GET['ztid']);
		$urlcs.='&ztid='.$ztid;
	}
	if($_GET['firsttitle'])
	{
		$firsttitle=(int)$_GET['firsttitle'];
		$urlcs.='&firsttitle='.$firsttitle;
	}
	if($_GET['isgood'])
	{
		$isgood=(int)$_GET['isgood'];
		$urlcs.='&isgood='.$isgood;
	}
	if($_GET['endtime'])
	{
		$starttime=RepPostVar($_GET['starttime']);
		$endtime=RepPostVar($_GET['endtime']);
		$urlcs.='&starttime='.$starttime.'&endtime='.$endtime;
	}
	$line=(int)$_GET['line'];
	if($line)
	{
		$urlcs.='&line='.$line;
	}
	$tempid=(int)$_GET['tempid'];
	if($tempid)
	{
		$urlcs.='&tempid='.$tempid;
	}
	if($_GET['orderby'])
	{
		$orderby=RepPostVar($_GET['orderby']);
		$myorder=(int)$_GET['myorder'];
		$urlcs.='&orderby='.$orderby.'&myorder='.$myorder;
	}
	//间隔字符
	$fieldexpr=explode('|',$fieldexp);
	$valexpr=explode('|',$valexp);
	//输出选项
	$fr=explode(',',$fieldandvar);
	$fcount=count($fr);
	$allstr='';
	$urladd='';
	for($i=0;$i<$fcount;$i++)
	{
		$field=$fr[$i];
		//选项链接
		$getval='';
		if($_GET[$field])
		{
			$getval=$userfunecmsver==1?ehtmlspecialchars($_GET[$field],ENT_QUOTES):htmlspecialchars($_GET[$field],ENT_QUOTES);
			$urladd.='&'.$field.'='.urlencode($getval);
		}
		//选项说明
		$vsayr=explode('|==|',$fieldandval[$field]);
		//选项内容
		$valallstr='';
		$vr=explode('##',$vsayr[1]);
		$vcount=count($vr);
		for($vi=0;$vi<$vcount;$vi++)
		{
			$vtr=explode(',',$vr[$vi]);
			if($getval==$vtr[1])
			{
				$css=$changefieldandcss;
			}
			else
			{
				$css=$fieldandcss;
			}
			$valallstr.=$valexpr[0].'<a href="'.$public_r['newsurl'].'e/action/ListInfo.php?'.$urlcs.'&ph=1<!--url.add-->&'.$field.'='.urlencode($vtr[1]).'" class="'.$css.'">'.$vtr[0].'</a>'.$valexpr[1];
		}
		$allstr.=$fieldexpr[0].$vsayr[0].$valallstr.$fieldexpr[1];
	}
	$allstr=str_replace('<!--url.add-->',$urladd,$allstr);
	echo $allstr;
}
?>