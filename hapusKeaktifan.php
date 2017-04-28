<?php
	require_once("dbconf.php");
	
	if (isset($_GET["nim"])) {
		if (isset($_GET["id"])) {
			$nim = $_GET["nim"];
			$id = $_GET["id"];
		}
	}
	
	$query = "
				DELETE FROM keaktifan_anggota
				WHERE ID = $id AND NIM = $nim
			";
	
	mysqli_query($conn, $query);
	echo "Success!";
	header("Location: keaktifanPerAnggota.php?nim=$nim");
?>

<!-- BUAT CHECK DOANG echo "'$nim', '$nama', '$divisi', '$angkatan', '$year-$month-$date', $alamat, '$hp', '$gender'"; -->
	