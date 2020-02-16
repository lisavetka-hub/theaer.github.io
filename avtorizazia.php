<?php
define('login',"lizavetka");
define('password',"123456");
$login=trim($_POST["login"]);
$password=trim($_POST["password"]);
if(!isset($_POST['login']) or !isset($_POST['password'])) {
die( "повторите попытку");
}
elseif(empty($login) || empty($password)){
die ("пустые поля ");
}
if(login == $login && $password == password){
	session_start();
	$_SESSION['admin']='lizavetka';
	header("Location: admin/mainKab.html");
	exit;
	//echo "привет,".$login;
}
elseif (login == $login && $password != password) {
	echo "неверный логин или пароль";
}
else {
	echo "повторите вход";
}

?>