<?php 
include_once("bd.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Настройки пользователя</title>
<link rel="stylesheet" href="css_3.css" />
</head>
<body>
<div class="main_body">
<br /><br />
<div align="center"><h4>Настройки пользователя</h4></div>
 
<table width="600" border="0">
  <tr>
    <td> Изменить аватар </td>
    <td>
      	<form action="save_edit.php" enctype="multipart/form-data" method="POST" name="form_upload">
          <label><input id="file" name="file" type="file" /></label>
          <label><input name="button" type="submit" value="Изменить" /></label>
        </form>
    </td>
  </tr>
  <tr>
    <td> Изменить имя </td>
    <td>
        <form action='save_edit.php' method='post'>
        <input name='name' type='text'>
        <input type='submit' name='submit' value='Изменить'>
        </form>
    </td>
  </tr>
  <tr>
    <td> Изменить фамилию </td>
    <td>
        <form action='save_edit.php' method='post'>
        <input name='lastname' type='text'>
        <input type='submit' name='submit' value='Изменить'>
        </form>
    </td>
  </tr>
  <tr>
    <td> Изменить страну </td>
    <td>
        <form action="save_edit.php" method="post">
        <input name="country" type="text">
        <input type="submit" name="submit" value="Изменить">
        </form>    
    </td>
  </tr>
  <tr>
    <td> Изменить город </td>
    <td>
        <form action='save_edit.php' method='post'>
        <input name='city' type='text'>
        <input type='submit' name='submit' value='Изменить'>
        </form>
    </td>
  </tr>
   <tr>
    <td> Изменить пол </td>
    <td>
    <form action='save_edit.php' method='post'>
        <select name="sex" size="1" id="sex">
        <option value="Мужской">Мужской</option>
        <option value="Женский">Женский</option>
        </select>
        <input type='submit' name='submit' value='Изменить'>
       </form>
    </td>
  </tr>
</table>
</div>

<?	include_once("cascade_processing.php");	?>
</body>
</html>