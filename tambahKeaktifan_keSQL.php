<?php
	require_once("dbconf.php");
	
	if (isset($_GET["nim"])) {
		$nim = $_GET["nim"];
	}
	$aktif = $_POST["keaktifan"];
	
	$query = "
				INSERT INTO keaktifan_anggota
				(NIM, Keaktifan)
				VALUES ('$nim', '$aktif')
			";
	
	mysqli_query($conn, $query);
	echo "Success!";
	header("Location: keaktifanPerAnggota.php?nim=$nim");
?>

<!-- BUAT CHECK DOANG echo "'$nim', '$nama', '$divisi', '$angkatan', '$year-$month-$date', $alamat, '$hp', '$gender'"; -->
	