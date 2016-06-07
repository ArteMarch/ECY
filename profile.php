<?php
include_once("bd.php");
 
$resultat = mysql_query("SELECT * FROM users WHERE id='$_GET[id]'");
$array = mysql_fetch_array($resultat);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Профиль <?php echo $login; ?></title>
<link rel="stylesheet" href="profile_css.css" />
</head>
<body>

 
 
<?php
if(isset($login) AND isset($password)){
	?>
    <div class="left_book">
    <h3>Профиль <?php echo $array['login']; ?></h3><br><br>
   	
    <? echo '<img height="200" width="200" src="'.$array['avatar'].'" />' ?>
    
    
    
    </div>
    <div class="main_book">
    <?
    echo "<br /><br /><strong>".$array['name_user']." ".$array['lastname']."</strong><br><br />";
 
    echo "  Дата регистрации: ".$array['reg_date']." <br><br />";
    echo "  Пол: ".$array['sex']." <br><br />";
    echo "  Страна: ".$array['country']." <br><br />";
    echo "  Город: ".$array['city']." <br><br />";
	
	
 
    if($_GET['id'] == $id_user)
	{//Редактировать профиль может только хозяин
        echo "<a href='edit.php'>Редактировать профиль</a>";
    }
	?>
    
    <?
}
else
{
	echo "<meta http-equiv='Refresh' content='0; URL=index.php'>";
}
 
?>
</div>

<?	include_once("cascade_processing.php");	?>
 
</body>
</html>