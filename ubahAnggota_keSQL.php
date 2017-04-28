<?php
	require_once("dbconf.php");
	
	if (isset($_GET["nim"])) {
		$nim = $_GET["nim"];
	}

	$nama = $_POST["nama"];
	$gender = $_POST["gender"];
	$year = $_POST["tahun"];
	$month = $_POST["bulan"];
	$date = $_POST["tanggal"];
	$hp = $_POST["hp"];
	$angkatan = $_POST["angkatan"];
	$divisi = $_POST["divisi"];
	$alamat = $_POST["alamat"];
	
	$query = "UPDATE data_anggota SET ";
	if ($nama != '') $query .= "Nama ='$nama' ";
	if ($gender != '') $query .= ",JenisKelamin ='$gender' ";
	$query .= ",TanggalLahir = CAST('$year-$month-$date' AS DATETIME) ";
	if ($hp != '') $query .= ",NoHP ='$hp' ";
	if ($angkatan != '') $query .= ",Angkatan ='$angkatan' ";
	if ($divisi != '') $query .= ",Divisi ='$divisi' ";
	if ($alamat != '') $query .= ",Alamat ='$alamat' ";
	$query .="WHERE NIM = $nim";
	
	//echo $query;

	mysqli_query($conn, $query);
	header("Location: anggota.php");
?>
