<!DOCTYPE html>
<html>
<head>
<meta charset="windows-1251" />
<title>Contact form</title>
<style>
body{ margin:5px; font-family:Arial, Helvetica, sans-serif; font-size:14px;}
input{font-size:14px;}
.error {font-size:14px; font-weight:bold; color:#FF0000;}
p{margin:5px; font-size:13px; color:#333333}
</style>
</head>

<body>
<!-- The contact form starts from here-->

<script>
// zakaz validate scripts
function tekshir(formname) {
	if(formname.ism.value == "") { alert("ismingizni yozing"); return false}
	else if (formname.email.value.length <= 4) { alert("Emailni yozing");  return false}
	else if (formname.adres.value == "") { alert("Manzilni yozing");  return false}
	else if (formname.antibot.value.length <= 3) { alert("Antibotni yozing");  return false}
	else { return true; }
}
</script>

<style>
.ijod_send_form{ width:500px; height:auto; border:1px dashed #E4CF85;  background-color:#F1ECE0; margin:5px auto}
input{font-size:14px;}
.form_r{text-align:right; color:#666666; font-size:13px; font-weight:bold; vertical-align:top;}
.minitext {font-size:11px; color:#666666;}
.error{color:#CC0000; border:1px solid red; margin:3px; padding:3px; background-color:#FFDFDF; font-family:Tahoma; font-size:12px; font-weight:bold}
.send_title{font-size:16px; margin:5px; color:#CC3300; font-weight:bold;}
.red{color:red}
</style>

<article>

<div class="ijod_send_form">
<p class="send_title">  Заполните форму </p>
   <? if($error) echo "<p class='error'>$error</p>"; ?>
<form action="?" method="post" name="form_ijod" onSubmit="return tekshir(this)" enctype="multipart/form-data">
<table width="520" border="0" cellspacing="7" cellpadding="0">
  <tr>
    <td class="form_r">Имя: <span class="red">*</span></td>
    <td><input type="text" name="ism" size="30" maxlength="30"  value="<?= stripslashes($ism);?>" />
    </td>
  </tr>
  <tr>
    <td class="form_r">Телефон:</td>
    <td><input type="text" name="tel" size="30" maxlength="30"  value="<?=$tel;?>" />
      <br />
      <span class="minitext">не объязательно</span></td>
  </tr>
  <tr>
    <td class="form_r">Ваш емаил: <span class="red">*</span></td>
    <td><input type="text" name="email" size="30" maxlength="30" value="<?=$email;?>" /> <br />
	<span class="minitext">Мы будем ответить на ваш емаил</span>
	</td>
  </tr>
  <tr>
    <td class="form_r">Загаловок: <span class="red">*</span><br /></td>
    <td><input type="text" name="title" size="30"  value="<?= stripslashes($title);?>" />
    </td>
  </tr>
  <tr>
    <td class="form_r">Подробно <span class="red">*</span><br /></td>
    <td><textarea name="text" cols="30" rows="7" wrap="virtual"><?= stripslashes($text);?></textarea>
    </td>
  </tr>
  <tr>
    <td class="form_r">Введите число: <span class="red">*</span><u>  2014</u></td>
    <td><input type="text" name="antibot" size="7" value="<?=$antibot;?>" /> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="send" value=" Отправить  " class="submit" style="cursor:pointer;" /></td>
  </tr>
</table>
</form>
</div>
<?php endif; ?> 


</body>
</html>