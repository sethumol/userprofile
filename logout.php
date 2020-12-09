<?php
include 'connection.php';
if(!isset($_SESSION['uname'])){
	header('Location: reg.html');
	session_destroy();
}
	
?>