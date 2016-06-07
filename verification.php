<?php
    include_once("bd.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
	<?php	
        if (isset($_POST['submit']))
        {
            if(empty($_POST['login']))  
            {
                echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Введите логин!"> Введите логин! </font>';
            } 
            elseif (!preg_match("/^\w{3,}$/", $_POST['login'])) 
            {
                echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="В поле "Логин" введены недопустимые символы!"> 
                     В поле "Логин" введены недопустимые символы! Только буквы, цифры и подчеркивание!</font>';
            }
            elseif(empty($_POST['password'])) 
            {
                echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Введите пароль !"> Введите пароль!</font>';
            }
            elseif (!preg_match("/\A(\w){6,20}\Z/", $_POST['password'])) 
            {
                echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Пароль слишком короткий!"> 
                     Пароль слишком короткий! Пароль должен быть не менее 6 символов! </font>';
            }
            elseif(empty($_POST['password2'])) 
            {
                echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Введите подтверждение пароля!"> 
                     Введите подтверждение пароля!</font>';
            }
            elseif($_POST['password'] != $_POST['password2']) 
            {
                echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Введенные пароли не совпадают!"> 
                     Введенные пароли не совпадают!</font>';
            }
            elseif(empty($_POST['email'])) 
            {
                echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Введите E-mail!">Введите E-mail! </font>';
            }
            elseif (!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/", $_POST['email'])) 
            {
                echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="E-mail имеет недопустимий формат!"> 
                     E-mail имеет недопустимий формат! Например, name@gmail.com! </font>';
            }
             
            else
            {
                $login = $_POST['login'];
                $password = $_POST['password'];
                $mdPassword = md5($password);
                $password2 = $_POST['password2'];
                $email = $_POST['email'];
                $rdate = date("d-m-Y в H:i");
                $name = $_POST['name'];
                $lastname = $_POST['lastname'];  
                  				
				$query4 = ("SELECT id FROM users WHERE ADM='0'");
                $sq4 = mysql_query($query4) or die(mysql_error());
				
				
                $query = ("SELECT id FROM users WHERE login='$login'");
                $sql = mysql_query($query) or die(mysql_error());
                
                if (mysql_num_rows($sql) > 0) 
                {
                    echo '<font color="red"><img border="0" src="error.gif" align="middle" alt="Пользователь с таким логином зарегистрированый!"> 
                         Пользователь с таким логином зарегистрирован!</font>';
					echo "<meta http-equiv='Refresh' content='2; URL=profile.php?id=".$id_user."'>";
                }
                else 
                {
                    $query2 = ("SELECT id FROM users WHERE email='$email'");
                    $sql = mysql_query($query2) or die(mysql_error());
                    if (mysql_num_rows($sql) > 0)
                    {
                        echo '<font color="red"><img border="0" src="error.gif"  alt="Пользователь с таким e-mail зарегистрированый!"> 
                             Пользователь с таким e-mail уже зарегистрирован!</font>';
						echo "<meta http-equiv='Refresh' content='2; URL=profile.php?id=".$id_user."'>";
                    }
                    else
                    {
                        $query = "INSERT INTO users (login, password, email, reg_date, name_user, lastname )
                                  VALUES ('$login', '$mdPassword', '$email', '$rdate', '$name', '$lastname')";
                        $result = mysql_query($query) or die(mysql_error());;
                        echo '<font color="green"><img border="0" src="ok.gif" align="middle" alt="Вы успешно зарегистрировались!"> 
                             Вы успешно зарегистрировались!</font><br>';
						echo "<meta http-equiv='Refresh' content='2; URL=profile.php?id=".$id_user."'>";
                    }
                }
            }
        }
    ?>
</body>
</html>	