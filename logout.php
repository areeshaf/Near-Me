

<?php 
include 'includes/connection.php';
session_start();
if(isset($_SESSION['id'])){
	$_SESSION['id']=null;
}

header("Location: home.php?logout=success");
 ?>