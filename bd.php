<?php
session_start();

mysql_connect ("localhost","1152857","MedVsadASP47");
mysql_select_db ("1152857");
mysql_query("SET NAMES utf8");

$login = $_SESSION['login'];
$password = $_SESSION['password'];
$id_user = $_SESSION['id'];
?>