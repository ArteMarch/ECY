<?php
    include_once("bd.php");
	$resultat = mysql_query("SELECT * FROM users WHERE id='$id_user'");
	$array = mysql_fetch_array($resultat);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Документ без названия</title>
</head>

<body>

<?php
		if(empty($_POST['username']))
		{
			$log_mes = $array['name_user'];
			$id_mes = $id_user;
		}
		else
		{
			$log_mes = $_POST['username'];
			$id_mes = -1;
		}
		
		if(empty($_POST['email']))
		{
			$email_mes = $array['email'];
		}
		else
		{
			$email_mes = $_POST['email'];
		}
		
		$text_mes = $_POST['message'];
		$time = date("d-m-Y");
		mysql_query("INSERT INTO message VALUES ('NULL','$id_mes','$email_mes','$log_mes','$text_mes','$time')");
		echo " <meta http-equiv='Refresh' content='1; URL=guest_proc.php?view=index&page=1'>";
		
		
		
		
		// обрабатываем результаты запроса
	

?>
?>
</body>
</html>