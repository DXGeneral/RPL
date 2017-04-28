<?php
	require_once("dbconf.php");
	
	if (isset($_GET["bulan"])) {
		$value = $_GET["bulan"];
	}
		$bulan = cariNamaBulan($value);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HIMASTI - Birthday</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">HIMASTI</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="anggota.php">Anggota</a>
                    </li>
                    <li>
                        <a href="keaktifan.php">Keaktifan</a>
                    </li>
                    <li>
                        <a href="birthday.php">Birthday</a>
                    </li>
                    <li>
                        <a href="Log-In.php">LogOut</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Birthday
                    <small>HIMASTI</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="birthday.php">Birthday</a></li>
                    <li class="active"><?php echo "$bulan" ?></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-9">

                <h2>
                    <a href="#">Birthday <?php echo "$bulan" ?></a>
                </h2>
                <p><i class="fa fa-clock-o"></i> Last Updated on October 18, 2016 at 10:00 PM</p>
                <hr>

                <table class="table table-striped">
                    <thead class="row">
                        <th class="col-sm-2"> NIM </th>
                        <th class="col-sm-2"> Nama </th>
                        <th class="col-sm-8"> Tanggal </th>
                    </thead>
                
                    <tbody>
					<?php
					$out = "";
					
					$result = mysqli_query($conn, "SELECT NIM, Nama, TanggalLahir FROM data_anggota WHERE MONTH(TanggalLahir) = $value");
						
					$out = "";
						while($row = mysqli_fetch_assoc($result)){
							
							$nim = $row['NIM'];
							$nama = $row['Nama'];
							$tanggal = $row['TanggalLahir'];
							
							$out .="
								<tr>
									<td> $nim </td>
									<td> $nama </td>
									<td> $tanggal </td>
								</tr>
							";
						}
                        echo $out;
					?>
                    </tbody>    
                </table>


            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Search</h4>
					<form method="POST">
						<div class="dropdown">
							<button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Pilih Bulan
							<span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="bulan.php?bulan=1" value="1">Januari</a></li>
								<li><a href="bulan.php?bulan=2" value="2">Februari</a></li>
								<li><a href="bulan.php?bulan=3" value="3">Maret</a></li>
								<li><a href="bulan.php?bulan=4" value="4">April</a></li>
								<li><a href="bulan.php?bulan=5" value="5">Mei</a></li>
								<li><a href="bulan.php?bulan=6" value="6">Juni</a></li>
								<li><a href="bulan.php?bulan=7" value="7">Juli</a></li>
								<li><a href="bulan.php?bulan=8" value="8">Agustus</a></li>
								<li><a href="bulan.php?bulan=9" value="9">September</a></li>
								<li><a href="bulan.php?bulan=10" value="10">Oktober</a></li>
								<li><a href="bulan.php?bulan=11" value="11">November</a></li>
								<li><a href="bulan.php?bulan=12" value="12">Desember</a></li>
							</ul>
						</div>
					</form>
                    <!-- /.input-group -->
                </div>

                <!-- Side Widget Well -->
            </div>

        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <hr>
            <div class="row">
                <div class="col-lg-11">
                    <p><h4>Himpunan Mahasiswa Sistem dan Teknologi Informasi
                    <br><small>Institut Teknologi Bandung </small></h4></p> 
                </div>

                <div class="col-lg-1">
                    <p><img src="images/STI.png" height="40px"></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php
	function cariNamaBulan($value){
		if ($value == 1){
			return "Januari";
		}
		else if ($value == 2){
			return "Februari";
		}
		else if ($value == 3){
			return "Maret";
		}
		else if ($value == 4){
			return "April";
		}
		else if ($value == 5){
			return "Mei";
		}
		else if ($value == 6){
			return "Juni";
		}
		else if ($value == 7){
			return "Juli";
		}
		else if ($value == 8){
			return "Agustus";
		}
		else if ($value == 9){
			return "September";
		}
		else if ($value == 10){
			return "Oktober";
		}
		else if ($value == 11){
			return "November";
		}
		else if ($value == 12){
			return "Desember";
		}
		else {
			return "ERRORR!!!";
		}
	}
?>