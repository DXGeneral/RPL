<?php
	require_once("dbconf.php");
	
	$nama = $_POST["nama"];
	$nim = $_POST["nim"];
	$gender = $_POST["gender"];
	$year = $_POST["tahun"];
	$month = $_POST["bulan"];
	$date = $_POST["tanggal"];
	$hp = $_POST["hp"];
	$angkatan = $_POST["angkatan"];
	$divisi = $_POST["divisi"];
	$alamat = $_POST["alamat"];
	
	// Pengecekan data kosong
	if(empty($nama) || empty($nim) || empty($gender) || empty($month) || empty($year) || empty($date)
	|| empty($hp) ||empty($angkatan) || empty($divisi) || empty($alamat))
	
	{
		echo "Fail!!!";
		header ("Location: tambahAnggota.php?error=true");
	}
	else {
		$query = "
					INSERT INTO data_anggota
					(NIM, Nama, Divisi, Angkatan, TanggalLahir, Alamat, NoHP, JenisKelamin)
					VALUES ('$nim', '$nama', '$divisi', '$angkatan', '$year-$month-$date', '$alamat', '$hp', '$gender')
				";
		
		mysqli_query($conn, $query);
		echo "Success!";
		header("Location: anggota.php");
	}
?>

<!-- BUAT CHECK DOANG echo "'$nim', '$nama', '$divisi', '$angkatan', '$year-$month-$date', $alamat, '$hp', '$gender'"; -->
	