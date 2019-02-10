<?php

include 'includes/connection.php';
session_start();
if(isset($_SESSION['id'])){
	$id=$_SESSION['id'];
}

if(isset($_GET['shop_name'])){
	$shop_name=$_GET['shop_name'];
	$query="DELETE FROM shop WHERE (owner_id=$id) AND (shop_name='$shop_name') ";
$result=mysqli_query($connect,$query);

header("Location: ownerprofile.php?deleted=1");	
}


?>