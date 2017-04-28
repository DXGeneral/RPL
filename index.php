<!--
	Website ini dibuat untuk calon himpunan kami tercinta dan pemenuhan tugas besar IF3152 Rekayasa Perangkat Lunak.
		Leo Harisma Sadewo 	- 18214004
		Ahmad Idham T Lubis - 18214027
		M. Aji Ismail 		- 18214036
		Theo Aditya 		- 18214043
		Nikolaus 			- 18214053
		
	Ver 1.0 - 29 November 2016 Pukul 17:23
-->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HIMASTI</title>

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

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill">
                    <img src="images/gambar1.jpg">
                </div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill">
                    <img src="images/gambar2.jpg">
                </div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill">
                    <img src="images/gambar3.jpg">
                </div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill">
                    <img src="images/gambar4.jpg">
                </div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to HIMASTI-BASE&copy
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><span class="glyphicon glyphicon-list-alt"></span> Data Anggota</h4>
                    </div>
                    <div class="panel-body">
                        <p>Pada halaman web ini, Anda dapat melakukan berbagai aktivitas yang berkaitan dengan Data Anggota Himpunan Mahasiswa Sistem dan Teknologi Informasi ITB. Aktivitas tersebut antara lain: Melihat, Mencari, Menambah, Merubah, maupun Menghapus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><span class="glyphicon glyphicon-lock"></span> Keaktifan Anggota  </h4>
                    </div>
                    <div class="panel-body">
                        <p>Anda juga dapat melakukan aktivitas-aktivitas Melihat, Mencari, Menambah, Merubah, dan Menghapus pada data Keaktifan Anggota Himpunan Mahasiswa Sistem dan Teknologi Informasi ITB yang tertera dalam halaman web ini. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Birthday Date Anggota</h4>
                    </div>
                    <div class="panel-body">
                        <p><i><b>Happy Birthday! </b></i> Ulang tahun adalah suatu momen berkesan yang dialami oleh setiap anggota HIMASTI setiap tahunnya. Oleh karena itu, agar massa himpunan dapat memberikan ucapan selamat kepada anggota yang berulang tahun, halaman web ini akan menampilkan tanggal ulang tahun anggota tiap bulannya.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
<!--
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Portfolio Heading</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.php">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.php">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.php">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.php">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.php">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.php">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
        </div>
-->
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Himpunan Mahasiswa Sistem dan Teknologi Informasi</h2>
            </div>
            <div class="col-md-9">
                <p>About Us</p>
                <ul>
                    <li>Berdiri 14 November 2012</li>
                    <li>Organisasi pengayom : ASSIST</li>
                    <li>Font Awesome v4.2.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Website ini dibuat untuk calon himpunan kami tercinta dan pemenuhan tugas besar IF3152 Rekayasa Perangkat Lunak.</p>
				<p>Leo Harisma Sadewo 	- 18214004</p>
				<p>Ahmad Idham T Lubis 	- 18214027</p>
				<p>M. Aji Ismail 		- 18214036</p>
				<p>Theo Aditya 			- 18214043</p>
				<p>Nikolaus 			- 18214053</p>
            </div>
            <div class="col-md-3">
                <img class="img-responsive" src="images/STI.png" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
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

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
