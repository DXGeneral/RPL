<?php
	require_once("dbconf.php");
	
	if (isset($_GET["nim"])) {
		$nim = $_GET["nim"];
	}


	$query = "DELETE FROM keaktifan_anggota WHERE NIM = '$nim'";

	mysqli_query($conn, $query);

	$query = "DELETE FROM data_anggota WHERE NIM = '$nim'";
	
	//echo $query; 

	mysqli_query($conn, $query);
	header("Location: anggota.php");
?>