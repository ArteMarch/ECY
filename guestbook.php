<?php 
	include_once("bd.php");
?>
<? include_once("cascade_processing.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Гостевая книга</title>
<link rel="stylesheet" href="book_css.css" />
</head>

<body>
<!-- <div class="main_book"> -->
	<p>Рассказывайте о проблемах экологии и делитесь отзывами о местах отдыха здесь!</p>
   
   <? 
   if(isset($login) AND isset($password))
   {
	 ?><form name = "gbook" method = "post" action = "proc_b.php" >
		<table border = " 1 " width = " 60 % " align = "center" > 
			<tr>
				<td width = " 10 % " align = "right" valign = "top" > Ваше имя: &nbsp; </td>
				<td width = " 90 % " align = "left" > <input type = "text"  name = "username" > </td>
			</tr>
			<tr>
				<td width = " 10 % " align = "right" valign = "top" > Ваш e-mail: &nbsp; </td>
				<td width = " 90 % " align = "left" > <input type = "email"  name = "email" > </td>
			</tr>
			<tr>
				<td width = " 10 % " align = "right" valign = "top" > Ваше сообщение: &nbsp; </td>
				<td width = " 90 % " align = "left" > <textarea required name = "message"  rows = " 10 " cols = " 100 "  > </textarea> </td>
			</tr>
			<tr>
				<td width = " 50 % " colspan = " 2 " align = "center" > <input type = "submit" name = "send" value = "Добавить сообщение" > </td>
			</tr>
		</table>
		</form><?
   }
   else
   {
	   ?><form name = "gbook" method = "post" action = "proc_b.php" >
		<table border = " 1 " width = " 60 % " align = "center" > 
			<tr>
				<td width = " 10 % " align = "right" valign = "top" > Ваше имя: &nbsp; </td>
				<td width = " 90 % " align = "left" > <input type = "text" required name = "username" > </td>
			</tr>
			<tr>
				<td width = " 10 % " align = "right" valign = "top" > Ваш e-mail: &nbsp; </td>
				<td width = " 90 % " align = "left" > <input type = "email" required name = "email" > </td>
			</tr>
			<tr>
				<td width = " 10 % " align = "right" valign = "top" > Ваше сообщение: &nbsp; </td>
				<td width = " 90 % " align = "left" > <textarea name = "message"  rows = " 10 " cols = " 100 " required > </textarea> </td>
			</tr>
			<tr>
				<td width = " 50 % " colspan = " 2 " align = "center" > <input type = "submit" name = "send" value = "Добавить сообщение" > </td>
			</tr>
		</table>
		</form><?
   }
   
    ?>        
    
<!--    </div>  -->
     
</body>
</html>