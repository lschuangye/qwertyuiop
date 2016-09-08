<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width='100%' align=center cellpadding=3 cellspacing=1 bgcolor='#DBEAF5'><tr><td width='16%' height=25 bgcolor='ffffff'>标题</td><td bgcolor='ffffff'><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
<tr> 
  <td height="25" bgcolor="#FFFFFF">
	<?=$tts?"<select name='ttid'><option value='0'>标题分类</option>$tts</select>":""?>
	<input type=text name=title value="<?=ehtmlspecialchars(stripSlashes($r[title]))?>" size="60"> 
	<input type="button" name="button" value="图文" onclick="document.add.title.value=document.add.title.value+'(图文)';"> 
  </td>
</tr>
<tr> 
  <td height="25" bgcolor="#FFFFFF">属性: 
	<input name="titlefont[b]" type="checkbox" value="b"<?=$titlefontb?>>粗体
	<input name="titlefont[i]" type="checkbox" value="i"<?=$titlefonti?>>斜体
	<input name="titlefont[s]" type="checkbox" value="s"<?=$titlefonts?>>删除线
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;颜色: <input name="titlecolor" type="text" value="<?=stripSlashes($r[titlecolor])?>" size="10"><a onclick="foreColor();"><img src="../data/images/color.gif" width="21" height="21" align="absbottom"></a>
  </td>
</tr>
</table></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>地域</td><td bgcolor='ffffff'><select name="eare" id="eare"><option value="北京市"<?=$r[eare]=="北京市"?' selected':''?>>北京市</option><option value="天津市"<?=$r[eare]=="天津市"?' selected':''?>>天津市</option><option value="上海市"<?=$r[eare]=="上海市"?' selected':''?>>上海市</option><option value="重庆市"<?=$r[eare]=="重庆市"?' selected':''?>>重庆市</option><option value="河北省"<?=$r[eare]=="河北省"?' selected':''?>>河北省</option><option value="山西省"<?=$r[eare]=="山西省"?' selected':''?>>山西省</option><option value="辽宁省"<?=$r[eare]=="辽宁省"?' selected':''?>>辽宁省</option><option value="吉林省"<?=$r[eare]=="吉林省"?' selected':''?>>吉林省</option><option value="黑龙江省"<?=$r[eare]=="黑龙江省"?' selected':''?>>黑龙江省</option><option value="江苏省"<?=$r[eare]=="江苏省"?' selected':''?>>江苏省</option><option value="浙江省"<?=$r[eare]=="浙江省"?' selected':''?>>浙江省</option><option value="安徽省"<?=$r[eare]=="安徽省"?' selected':''?>>安徽省</option><option value="福建省"<?=$r[eare]=="福建省"?' selected':''?>>福建省</option><option value="江西省"<?=$r[eare]=="江西省"?' selected':''?>>江西省</option><option value="山东省"<?=$r[eare]=="山东省"?' selected':''?>>山东省</option><option value="河南省"<?=$r[eare]=="河南省"?' selected':''?>>河南省</option><option value="湖北省"<?=$r[eare]=="湖北省"?' selected':''?>>湖北省</option><option value="湖南省"<?=$r[eare]=="湖南省"?' selected':''?>>湖南省</option><option value="广东省"<?=$r[eare]=="广东省"?' selected':''?>>广东省</option><option value="海南省"<?=$r[eare]=="海南省"?' selected':''?>>海南省</option><option value="四川省"<?=$r[eare]=="四川省"?' selected':''?>>四川省</option><option value="贵州省"<?=$r[eare]=="贵州省"?' selected':''?>>贵州省</option><option value="云南省"<?=$r[eare]=="云南省"?' selected':''?>>云南省</option><option value="陕西省"<?=$r[eare]=="陕西省"?' selected':''?>>陕西省</option><option value="甘肃省"<?=$r[eare]=="甘肃省"?' selected':''?>>甘肃省</option><option value="青海省"<?=$r[eare]=="青海省"?' selected':''?>>青海省</option><option value="台湾省"<?=$r[eare]=="台湾省"?' selected':''?>>台湾省</option><option value="内蒙古"<?=$r[eare]=="内蒙古"?' selected':''?>>内蒙古</option><option value="广西省"<?=$r[eare]=="广西省"?' selected':''?>>广西省</option><option value="西藏"<?=$r[eare]=="西藏"?' selected':''?>>西藏</option><option value="宁夏省"<?=$r[eare]=="宁夏省"?' selected':''?>>宁夏省</option><option value="新疆省"<?=$r[eare]=="新疆省"?' selected':''?>>新疆省</option><option value="香港"<?=$r[eare]=="香港"?' selected':''?>>香港</option><option value="澳门"<?=$r[eare]=="澳门"?' selected':''?>>澳门</option></select></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>行业类别</td><td bgcolor='ffffff'><select name="hyclass" id="hyclass"><option value="机构组织"<?=$r[hyclass]=="机构组织"?' selected':''?>>机构组织</option><option value="农林牧渔"<?=$r[hyclass]=="农林牧渔"?' selected':''?>>农林牧渔</option><option value="医药卫生"<?=$r[hyclass]=="医药卫生"?' selected':''?>>医药卫生</option><option value="建筑建材"<?=$r[hyclass]=="建筑建材"?' selected':''?>>建筑建材</option><option value="冶金矿产"<?=$r[hyclass]=="冶金矿产"?' selected':''?>>冶金矿产</option><option value="石油化工"<?=$r[hyclass]=="石油化工"?' selected':''?>>石油化工</option><option value="水利水电"<?=$r[hyclass]=="水利水电"?' selected':''?>>水利水电</option><option value="交通运输"<?=$r[hyclass]=="交通运输"?' selected':''?>>交通运输</option><option value="信息产业"<?=$r[hyclass]=="信息产业"?' selected':''?>>信息产业</option><option value="机械机电"<?=$r[hyclass]=="机械机电"?' selected':''?>>机械机电</option><option value="轻工食品"<?=$r[hyclass]=="轻工食品"?' selected':''?>>轻工食品</option><option value="服装纺织"<?=$r[hyclass]=="服装纺织"?' selected':''?>>服装纺织</option><option value="专业服务"<?=$r[hyclass]=="专业服务"?' selected':''?>>专业服务</option><option value="安全防护"<?=$r[hyclass]=="安全防护"?' selected':''?>>安全防护</option><option value="环保绿化"<?=$r[hyclass]=="环保绿化"?' selected':''?>>环保绿化</option><option value="旅游休闲"<?=$r[hyclass]=="旅游休闲"?' selected':''?>>旅游休闲</option><option value="办公文教"<?=$r[hyclass]=="办公文教"?' selected':''?>>办公文教</option><option value="电子电工"<?=$r[hyclass]=="电子电工"?' selected':''?>>电子电工</option><option value="玩具礼品"<?=$r[hyclass]=="玩具礼品"?' selected':''?>>玩具礼品</option><option value="家居用品"<?=$r[hyclass]=="家居用品"?' selected':''?>>家居用品</option><option value="物资"<?=$r[hyclass]=="物资"?' selected':''?>>物资</option><option value="包装"<?=$r[hyclass]=="包装"?' selected':''?>>包装</option><option value="体育"<?=$r[hyclass]=="体育"?' selected':''?>>体育</option><option value="办公  "<?=$r[hyclass]=="办公  "?' selected':''?>>办公  </option><option value="其他行业"<?=$r[hyclass]=="其他行业"?' selected':''?>>其他行业</option></select></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>特殊属性</td><td bgcolor='ffffff'><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
  <tr>
    <td height="25" bgcolor="#FFFFFF">信息属性: 
      <input name="checked" type="checkbox" value="1"<?=$r[checked]?' checked':''?>>
      审核 &nbsp;&nbsp; 推荐 
      <select name="isgood" id="isgood">
        <option value="0">不推荐</option>
	<?=$ftnr['igname']?>
      </select>
      &nbsp;&nbsp; 头条 
      <select name="firsttitle" id="firsttitle">
        <option value="0">非头条</option>
	<?=$ftnr['ftname']?>
      </select></td>
  </tr>
</table></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>小图</td><td bgcolor='ffffff'><input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[titlepic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=titlepic','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a></td></tr></table>