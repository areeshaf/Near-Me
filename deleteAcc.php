<?php

include 'includes/connection.php';
session_start();
$id=$_SESSION['id'];

$query="DELETE FROM shop WHERE owner_id=$id";
$result=mysqli_query($connect,$query);

$query="DELETE FROM user WHERE user_id=$id";
$result=mysqli_query($connect,$query);

if($result){
	$_SESSION['id']=null;
	header("Location: home.php?delete=success");
}

?>