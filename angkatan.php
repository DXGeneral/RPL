<?php
require_once("dbconf.php");

if (isset($_GET["angkatan"])) {
		$value = $_GET["angkatan"];
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HIMASTI - Anggota</title>

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
                <h1 class="page-header">Data Anggota
                    <small>HIMASTI</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="anggota.php">Anggota</a></li>
                    <li class="active">2012</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-9">

                <!-- First Blog Post -->
                <h2>
                    <a href="#">Data Anggota Angkatan <?php echo "$value" ?></a>
                </h2>
                <p><i class="fa fa-clock-o"></i> Last Updated on October 18, 2016 at 10:00 PM</p>
                <hr>

                <table class="table table-striped">
                    <thead class="row">
                        <th class="col-sm-3"> NIM </th>
                        <th class="col-sm-9 "> Nama </th>
                    </thead>
                
                    <tbody>
                    <?php
						$out = "";
                        $mysqli = new mysqli('localhost', 'root', '', 'himasti');

                        $resultSet = $mysqli->query("SELECT NIM, Nama FROM data_anggota WHERE Angkatan='$value'");

                        if ($resultSet ->num_rows != 0){
                            while($rows = $resultSet->fetch_assoc())
                            {
                                $NIM = $rows['NIM'];
                                $Nama = $rows['Nama'];
                                
                                echo "
                                    <tr>
                                        <td> $NIM </td>
                                        <td> $Nama </td>
                                    </tr>";
                            }
                        } else{
                        echo "No results.";
                        }
                    ?>
                    </tbody>    
                </table>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Search by NIM</h4>
                    <form action="dataPerAnggota.php" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" name="cariNIM">
                        </div>
                    </form>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Kategori Angkatan</h4>
                    <div class="dropdown">
                        <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" >Pilih Angkatan
							<span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="angkatan.php?angkatan=2012" value="1">2012</a></li>
								<li><a href="angkatan.php?angkatan=2013" value="2">2013</a></li>
								<li><a href="angkatan.php?angkatan=2014" value="3">2014</a></li>
								<li><a href="angkatan.php?angkatan=2015" value="4">2015</a></li>
							</ul>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Ada anggota baru?</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <a class="btn btn-success" type="button" href="tambahAnggota.php">Tambah Anggota</a>
                        </div>
                    </div>
                </div>
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
