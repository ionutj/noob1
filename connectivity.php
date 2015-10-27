<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'c9');
define('DB_USER','teststation');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/
function SignIn()
{
session_start();   //starting the session for user profile page
if(!empty($_POST['user']))   //checking the 'user' name which is from sign_in.html, is it empty or have some text
{
	$query = mysql_query("SELECT *  FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());
	$row = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($row['userName']) AND !empty($row['pass']))
	{
		$_SESSION['userName'] = $row['pass'];
		
		echo "<font color='red'>SUCCESSFULLY LOGIN To your N O O B page...</font>"; 
		echo '<p align="left"><img src="noob0.png" alt="Alex - Noob0" />';
		echo '<p align="left"><img src="alex1.jpg" alt="Alex - Yalta" />';
		echo '<p align="left"><img src="alexinvaslui.jpg" alt="Vaslui" />';
		echo '<p align="left"><img src="Apollo.jpg" alt="Apollo" />';

	}
	else
	{
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
	}
}
}
if(isset($_POST['submit']))
{
	SignIn();
}

?>
