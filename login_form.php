<?php
	require_once("dbconf.php");
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	$query = "SELECT * FROM admin WHERE username = '$user' AND password = '$pass'";
	$res = mysqli_query($conn, $query);
	if ($row = $res->fetch_row()){
		header("Location: index.php");
	} else {
		echo "Invalid username or password"; //pesan kesalahan
		header("Location: Log-In.php");
	}
?>