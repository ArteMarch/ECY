<?php
    include_once("bd.php");
//	$resultat5 = mysql_query("SELECT * FROM message id='$id_user'");
//    $array5 = mysql_fetch_array($resultat5);
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
<div class="main_book">
<?
	include_once("guestbook.php");
?>
</div>
<div class="main_book_ans">

<?php
	
	$count=0;
	$sql='select id from `message`';
	$res=mysql_query($sql);
	while($row=mysql_fetch_assoc($res)){
			$users_name[]=$row['name'];
			$count++;
	}
 
		$max_posts = 6;/*Максимальное число статей*/
		$num_posts = $count;/*Количество записей в базе*/
		$num_pages=intval($num_posts-1)/$max_posts+1;/*Подсчёт числа страниц выводимых на сайте*/
		 
		 
		for($i=1;$i<=$num_pages;$i++)
		{
		  echo"<a href='guest_proc.php?view=index&page=$i'>$i </a>";   /*Вывод ссылок пагинации*/
		}
		 echo "<br />";
		
		
		$k = $_GET['page'] ;
		
		for($j=$count;$j>=1;$j--)
		if ( ($j <= ($count-($k-1)*$max_posts)) && ($j > ($count-$max_posts-($k-1)*$max_posts) ))
		{
			$resultat5 = mysql_query("SELECT * FROM message WHERE id='$j'");
		    $array5 = mysql_fetch_array($resultat5); ?>
			 <table border = " 1 " height="200" width = " 800 " align = "center" >
                <tr>
                    <td width = " 15% " align="center" valign = "top" > <br />
                        <? 
                            $us_mes= $array5['id_user'] ;
                            if($us_mes == -1)
                            {
                                echo '<img height="100" width="100" src="profoto/no_men.jpg" />' ?><br /><br />
                                <? echo $array5['name_user']; ?><br />
                                <? echo "not logged"; 							
                            }
                            else
                            {
                                $resultat2 = mysql_query("SELECT * FROM users WHERE id='$us_mes'");
                                $array2 = mysql_fetch_array($resultat2);
                                echo '<img height="100" width="100" src="'.$array2['avatar'].'" />' ?><br /><br />
                                <? echo $array2['name_user']; ?><br />
                                <? if( $array2['ADM'] == 1 ) echo "Администратор"; else echo "Пользователь"; 
                            }
                        ?>
                    </td>
                    <td width = " 85% " align="center" > 
                        <? 
                            echo $array5['mess']."<br /><br />";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td width = " 15% " align="center" valign = "top" >
                        <? echo $array5['data']; ?>
                    </td>
                    <td width = " 85% " align="right" > 
                        <? echo $array5['id']; ?>
                    </td>
                 </tr>
            </table> <?
		}
		
		?> 
        <br /><br /><br />
    
    
	</div>





</body>
</html>