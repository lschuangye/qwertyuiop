<?php
define('EmpireCMSAdmin','1');
define('EmpireCMSAPage','login');
define('EmpireCMSNFPage','1');
require("../class/connect.php");
require("../class/functions.php");
//风格
$loginadminstyleid=EcmsReturnAdminStyle();
//变量处理
$empirecmskey1='';
$empirecmskey2='';
$empirecmskey3='';
$empirecmskey4='';
$empirecmskey5='';
if($_POST['empirecmskey1']&&$_POST['empirecmskey2']&&$_POST['empirecmskey3']&&$_POST['empirecmskey4']&&$_POST['empirecmskey5'])
{
	$empirecmskey1=RepPostVar($_POST['empirecmskey1']);
	$empirecmskey2=RepPostVar($_POST['empirecmskey2']);
	$empirecmskey3=RepPostVar($_POST['empirecmskey3']);
	$empirecmskey4=RepPostVar($_POST['empirecmskey4']);
	$empirecmskey5=RepPostVar($_POST['empirecmskey5']);
	$ecertkeyrndstr=$empirecmskey1.'#!#'.$empirecmskey2.'#!#'.$empirecmskey3.'#!#'.$empirecmskey4.'#!#'.$empirecmskey5;
	esetcookie('ecertkeyrnds',$ecertkeyrndstr,0);
}
elseif(getcvar('ecertkeyrnds'))
{
	$certr=explode('#!#',getcvar('ecertkeyrnds'));
	$empirecmskey1=RepPostVar($certr[0]);
	$empirecmskey2=RepPostVar($certr[1]);
	$empirecmskey3=RepPostVar($certr[2]);
	$empirecmskey4=RepPostVar($certr[3]);
	$empirecmskey5=RepPostVar($certr[4]);
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<title>成都百纳品牌营销策划有限公司</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="stylesheet" href="assets/css/amui.all.min.css"/>
<script>
if(self!=top)
{
	parent.location.href='index.php';
}
function CheckLogin(obj){
	if(obj.username.value=='')
	{
		alert('请输入用户名');
		obj.username.focus();
		return false;
	}
	if(obj.password.value=='')
	{
		alert('请输入登录密码');
		obj.password.focus();
		return false;
	}
	if(obj.loginauth!=null)
	{
		if(obj.loginauth.value=='')
		{
			alert('请输入认证码');
			obj.loginauth.focus();
			return false;
		}
	}
	if(obj.key!=null)
	{
		if(obj.key.value=='')
		{
			alert('请输入验证码');
			obj.key.focus();
			return false;
		}
	}
	return true;
}
</script>
<style>
.header {
	text-align: center;
}
.header h1 {
	font-size: 200%;
	color: #333;
	margin-top: 30px;
}
.header p {
	font-size: 14px;
}
</style>
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1>成都百纳品牌营销策划有限公司</h1>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="col-lg-6 col-md-8 col-sm-centered">
    <h3>网站管理员登录</h3>
    <hr>
    <br>
    <form name="login" id="login" method="post" class="am-form" action="ecmsadmin.php" onSubmit="return CheckLogin(document.login);">
    <input type="hidden" name="enews" value="login">
      <label for="email">用户名:</label>
      <input name="username" type="text" id="email" value="">
      <br>
      <label for="password">密码:</label>
      <input type="password" name="password" id="password" value="">
      <br>
      <label for="remember-me">
        <input id="remember-me" type="checkbox">
        记住密码 </label>
      <br />
      <div class="am-cf">
        <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
        
      </div>
    </form>
    <script>
if(document.login.equestion.value==0)
{
	showanswer.style.display='none';
}
</script> 
    <hr>
    <p>© 2014 CNbaina, Inc. </p>
  </div>
</div>
</body>
</html>