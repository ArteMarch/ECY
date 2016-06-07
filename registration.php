<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Регистрация</title>
	<link rel="stylesheet" href="css_3.css" />
</head>

<body>
    
    <div class="main_body">
        <br /><br /><br />
        
        <table>     
              <form action="verification.php" method="POST">
                  <tr>
                      <td> Логин <font color="red">*</font>: </td>
                      <td> <input type="text" required size="20" name="login" > </td>
                  </tr>
                  <tr>
                      <td> Пароль <font color="red">*</font>: </td>
                      <td> <input type="password" required size="20" maxlength="20" name="password" > </td>
                  </tr>
                  <tr>
                      <td> Подтверждения пароля <font color="red">*</font>: </td>
                      <td> <input type="password" required size="20" maxlength="20" name="password2"> </td>
                  </tr>
                  <tr>
                      <td> E-mail <font color="red">*</font>: </td>
                      <td> <input type="email" required size="20" name="email"> </td>
                  </tr>
                  <tr>
                      <td> Имя: </td>
                      <td> <input type="text" size="20" name="name"> </td>
                  </tr>
                  <tr>
                      <td> Фамилия: </td>
                      <td> <input type="text" size="20" name="lastname"> </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td colspan="2"> <input type="submit" value="Зарегистроваться" name="submit" > </td>
                  </tr>
                 
                 <br/>
              </form>
        </table>
        
        <font face="Verdana" size="4"> Поля со значком <font color="red">*</font> должны быть обязательно заполнены! </font> 
    </div>
    
    <?	include_once("cascade_processing.php");	?>
    
 </body>
 </html>