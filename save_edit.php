<?php 
	include_once("bd.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Изменение данных <?php echo $login; ?></title>
</head>
<body>
<?php
 
////////изменение фото
   if(!empty($_POST['button'])) // если кнопка "button"  нажата
	{    
		
		// Выводим сообщение 
		
	$extensions = array('jpg', 'jpeg', 'png', 'gif');  
    $upload_dir = 'profoto';  // папка для загрузки (создать на сервере)
 	$max_file_size = 8;
 //   function uploadHandle($max_file_size = 1024, $valid_extensions = array(), $upload_dir = '.')  
 //   {  
      $valid_extensions = $extensions;
	  
        $error = null;  
        $info  = null;  
        $max_file_size *= 1048576;  // размер файла в Mb
        if ($_FILES['file']['error'] === UPLOAD_ERR_OK)  
        {  
            // проверяем расширение файла  
            $file_extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);  
            if (in_array(strtolower($file_extension), $valid_extensions))  
            {  
                // проверяем размер файла  
                if ($_FILES['file']['size'] < $max_file_size)  
                {  
          $file_name = time() . $_FILES['file']['name'];  // к имени файла добавляем метку времени, чтобы исключить одинаковые имена
                    $destination = $upload_dir .'/' . $file_name;  
       
                    if (move_uploaded_file($_FILES['file']['tmp_name'], $destination))  
					{
                        $info = 'Файл успешно загружен';  
						$up =mysql_query("UPDATE users SET avatar='$destination' WHERE id='$id_user'");		
						if ($up=='TRUE') 
						{//если верно, то обновляем его в сессии
      						  $_SESSION['avatar'] = $destination;
						}
						echo " <meta http-equiv='Refresh' content='1; URL=profile_proc.php'>";
					}
                    else 
                        $error = 'Не удалось загрузить файл';  
                }   
                else 
                    $error = 'Размер файла больше допустимого';  
            }   
            else 
                $error = 'У файла недопустимое расширение';  
        }   
        else 
        {  
            // массив ошибок  
            $error_values = array( 
 
                UPLOAD_ERR_INI_SIZE   => 'Размер файла больше разрешенного директивой upload_max_filesize в php.ini',  
                UPLOAD_ERR_FORM_SIZE  => 'Размер файла превышает указанное значение в MAX_FILE_SIZE',                            
                UPLOAD_ERR_PARTIAL    => 'Файл был загружен только частично',   
                UPLOAD_ERR_NO_FILE    => 'Не был выбран файл для загрузки',   
                UPLOAD_ERR_NO_TMP_DIR => 'Не найдена папка для временных файлов',   
                UPLOAD_ERR_CANT_WRITE => 'Ошибка записи файла на диск'
 
                                  );  
       
            $error_code = $_FILES['file']['error'];  
       
            if (!empty($error_values[$error_code]))  
                $error = $error_values[$error_code];  
            else 
                $error = 'Случилось что-то непонятное';  
        }  
       
        return array('info' => $info, 'error' => $error);  
 //   }
//		$message = uploadHandle(8, $extensions, $upload_dir);
	//	echo $message['error'] ? $message['error'] : $message['info'];
		
}

////////Изменение имени
 
if (isset($_POST['name'])){//Если существует имя
    $name = $_POST['name'];
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $name = trim($name);//удаляем все лишнее
    
    if ($name == '') {
        exit("Вы не ввели имя<br><a href='edit.php'>Вернуться назад</a>");
    }
 
    $up = mysql_query("UPDATE users SET name_user='$name' WHERE id='$id_user'");//обновляем имя
    if ($up == true) {
        echo "<meta http-equiv='Refresh' content='0; URL=profile.php?id=".$id_user."'>";
    }
}
 
////////Изменение фамилии
 
else if (isset($_POST['lastname'])){//Если существует фамилия
    $lastname = $_POST['lastname'];
    $lastname = stripslashes($lastname);
    $lastname = htmlspecialchars($lastname);
    $lastname = trim($lastname);//удаляем все лишнее
    
    if ($lastname == '') {
        exit("Вы не ввели фамилию<br><a href='edit.php'>Вернуться назад</a>");
    }
 
    $up = mysql_query("UPDATE users SET lastname='$lastname' WHERE id='$id_user'");//обновляем фамилию
    if ($up=='TRUE') {//если верно, то обновляем его в сессии
        $_SESSION['lastname'] = $lastname;
        echo "<meta http-equiv='Refresh' content='0; URL=profile.php?id=".$id_user."'>";
    }
}
 
////////Изменение страны
 
else if (isset($_POST['country'])){//Если существует фамилия
    $country = $_POST['country'];
    $country = stripslashes($country);
    $country = htmlspecialchars($country);
    $country = trim($country);//удаляем все лишнее
    
    if ($country == '') {
        exit("Вы не ввели страну<br><a href='edit.php'>Вернуться назад</a>");
    }
 
    $up = mysql_query("UPDATE users SET country='$country' WHERE id='$id_user'");//обновляем страну
    if ($up == true) {
        echo "<meta http-equiv='Refresh' content='0; URL=profile.php?id=".$id_user."'>";
    }
}
 
////////Изменение города
 
else if (isset($_POST['city'])){//Если существует фамилия
    $city = $_POST['city'];
    $city = stripslashes($city);
    $city = htmlspecialchars($city);
    $city = trim($city);//удаляем все лишнее
    
    if ($city == '') {
        exit("Вы не ввели город<br><a href='edit.php'>Вернуться назад</a>");
    }
 
    $up = mysql_query("UPDATE users SET city='$city' WHERE id='$id_user'");//обновляем город
    if ($up == true) {//если верно, то обновляем его в сессии
        $_SESSION['city'] = $city;
        echo "<meta http-equiv='Refresh' content='0; URL=profile.php?id=".$id_user."'>";
    }
}
 
////////Изменение пола
 
else if (isset($_POST['sex'])){//Если существует фамилия
    $sex = $_POST['sex'];
    $sex = stripslashes($sex);
    $sex = htmlspecialchars($sex);
    $sex = trim($sex);//удаляем все лишнее
    
    if ($sex == '') {
        exit("Вы не ввели пол<br><a href='edit.php'>Вернуться назад</a>");
    }
 
    $up = mysql_query("UPDATE users SET sex='$sex' WHERE id='$id_user'");//обновляем пол
    if ($up == true) {
        echo "<meta http-equiv='Refresh' content='0; URL=profile.php?id=".$id_user."'>";
    }
}
?>
</body>
</html>