<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<script type="text/javascript" src="Chart.js/Chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="baru/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="baru/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="baru/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="baru/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="baru/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <style type="text/css">
        * {
            font-family: "aria-label";
        }
        h1 {
            text-transform: uppercase;
            color: black;
            font-style: bold;
        }
        table {
            border: 1px solid #ddeeee;
            border-collapse: collapse;
            border-spacing: 0;
            width: 70%;
            margin: 10px auto 10px auto;
        }
        th, td {
            border: 1px solid #ddeeee;
            padding: 20px;
            text-align: left;
        }
    </style>

</head>
<body>


<div class="menu">
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">MENU UTAMA</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                        <li class="divider"></li>
                        <li> <a href="login.php"><i class="fa fa-sign-out fa-fw"></i> LogIn</a>
                        </li>
                    </ul>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                
                                <span class="input-group-btn">
                                  
                                 
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                       
                        <li>
                            <a href="index.php?page=rumah" style="color:black"><i class="fa fa-dashboard fa-fw"></i> HOME</a>

         

    
          
        
                        </li>
                       
                                                  
                                            <li>
                            <a href="index.php?page=danadesa" style="color: black"><i class="fa fa-edit fa-fw" style="color: black"></i>DANA DESA</a>
                        </li>
                        <li>
                            <a href="index.php?page=add" style="color: black"><i class="fa fa-edit fa-fw"></i>ANGGARAN DANA DESA</a>
                        </li>
                        <li>
                            <a href="index.php?page=br" style="color: black"><i class="fa fa-edit fa-fw"></i>BANTUAN PROVINSI</a>
                        </li>
                        <li>
                            <a href="index.php?page=bk" style="color: black"><i class="fa fa-edit fa-fw"></i>BANTUAN KEUANGAN</a>
                        </li>
                        <li>
                            <a href="index.php?page=dll" style="color: black"><i class="fa fa-edit fa-fw"></i>DAN LAIN LAIN</a>
                        </li>
                        <li>
                            <a href="index.php?page=rk" style="color: black"><i class="fa fa-edit fa-fw"></i>REKAP</a>
                        </li>
                       
                   
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>





       



<div class="badan">
 
 
	<?php
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'rumah':
				include "home/rumah.php";
				break;
			case 'danadesa':
				include "home/danadesa.php";
				break;
			case 'add':
				include "home/add.php";
				break;
			case 'br':
				include "home/br.php";
				break;
			case 'bk':
				include "home/bk.php";
				break;
			case 'dll':
				include "home/dll.php";
				break;
			case 'rk':
				include "home/rk.php";
				break;		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "home/rumah.php";
	}
 ?>
 
	</div>
	</div>



 <script src="baru/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="baru/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="baru/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="baru/vendor/raphael/raphael.min.js"></script>
    <script src="baru/vendor/morrisjs/morris.min.js"></script>
    <script src="baru/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="baru/dist/js/sb-admin-2.js"></script>

</body>
</html>