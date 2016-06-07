<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Вход</title>
<link rel="stylesheet" href="entrance_css.css" />
</head>

<body>
    
	 <div class="left_blok">
     	<br /><br />
    	<h3>Наши партнеры</h3>
    </div>
    
    <div class="right_blok">
    	<br /><br />
    	<h3>Полезные ссылки</h3>
    </div>
    
    <div class="main_ent">
    <br /><br /><br /><br />
    <h2> Войти </h2>
    <form action="testreg.php" method="post">
        <p>
            <label>Ваш логин:<br></label>
            <input name="login" type="text" size="15" maxlength="15">
        </p>     
        <p>
            <label>Ваш пароль:<br></label>
            <input name="password" type="password" size="15" maxlength="15">
        </p>    
        <p>
            <input type="submit" name="submit" value="Войти">    
        <br>
            <a href="reg.php">Зарегистрироваться</a> 
        </p>
        <input type="hidden" name="PHPSESSID"  value="db711b560810e7f90d67a4c8e6a873af" />
    </form>
    <br>
    
   
    
    
    

    </div>
    <?
    	require ("cascade_processing.php");
	?>
</body>
</html>