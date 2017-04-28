<?php
    require_once("dbconf.php");
	
	$error = false;
	if (isset($_GET["error"])) {
		$error = $_GET["error"];
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
                <h1 class="page-header">Tambah Data Anggota
                    <small>HIMASTI</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="anggota.php">Anggota</a></li>
                    <li class="active">Tambah</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-9">

                <div class="row">
                    <div class="col-md-8">
                        <h3>Input Data Anggota</h3>
                        <hr>
                        <form action="tambahAnggota_keSQL.php" method="POST" name="newanggota">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Nama Lengkap:</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>NIM:</label>
                                    <input type="number" class="form-control" name="nim">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Jenis Kelamin </label>
                                    <div class="radio">
                                        <label><input type="radio" name="gender" value="L">Laki-laki</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="gender" value="P">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Tanggal Lahir:</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><small>Tahun</small></label>
                                                    <select class="form-control" name="tahun">
                                                        <option value="2000">2000</option>
                                                        <option value="1999">1999</option>
                                                        <option value="1998">1998</option>
                                                        <option value="1997">1997</option>
                                                        <option value="1996">1996</option>
                                                        <option value="1995">1995</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-4">
                                               <label><small>Bulan</small></label>
                                                <select class="form-control" name="bulan">
                                                        <option value="01">Januari</option>
                                                        <option value="02">Februari</option>
                                                        <option value="03">Maret</option>
                                                        <option value="04">April</option>
                                                        <option value="05">Mei</option>
                                                        <option value="06">Juni</option>
                                                        <option value="07">Juli</option>
                                                        <option value="08">Agustus</option>
                                                        <option value="09">September</option>
                                                        <option value="10">Oktober</option>
                                                        <option value="11">November</option>
                                                        <option value="12">Desember</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label><small>Tanggal</small></label>
                                                <select class="form-control" name="tanggal">
                                                        <option value="01">1</option>
                                                        <option value="02">2</option>
                                                        <option value="03">3</option>
                                                        <option value="04">4</option>
                                                        <option value="05">5</option>
                                                        <option value="06">6</option>
                                                        <option value="07">7</option>
                                                        <option value="08">8</option>
                                                        <option value="09">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20"> 20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>No. Hp:</label>
                                    <input type="number" class="form-control" name="hp">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Angkatan:</label>
                                    <select class="form-control" name="angkatan">
										<option value="2012">2012</option>
										<option value="2013">2013</option>
										<option value="2014">2014</option>
										<option value="2015">2015</option>
									</select>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Divisi:</label>
                                    <input type="text" class="form-control" name="divisi">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Alamat:</label>
                                    <textarea rows="5" cols="100" class="form-control" name="alamat" maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <input type="submit" class="btn btn-primary" value="Tambahkan">
                        </form>
						<?php
							if ($error) {
								echo "<br>
									<div class='alert alert-danger'>
											<strong>Warning!</strong> All fields are required to fill.
									</div>";
							}
						?>
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
