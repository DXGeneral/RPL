<?php
	require_once("dbconf.php");
	
	if (isset($_GET["nim"])) {
		if (isset($_GET["id"])) {
			$nim = $_GET["nim"];
			$id = $_GET["id"];
		}
	}
	$aktif = $_POST["keaktifan"];
	
	$query = "
				UPDATE keaktifan_anggota
				SET Keaktifan = '$aktif'
				WHERE NIM = $nim AND ID = $id
			";
	
	mysqli_query($conn, $query);
	echo "Success!";
	header("Location: keaktifanPerAnggota.php?nim=$nim");
?>

<!-- BUAT CHECK DOANG echo "'$nim','$id,'$aktif'"; -->
	