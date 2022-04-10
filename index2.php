

<?php

session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    die();
}

include 'koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='DD' AND jenis='masuk'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     $jml_dd = $jml_dd + $data['pemasukan'];}
$sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='ADD' AND jenis='masuk'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     

     
      $jml_add = $jml_add + $data['pemasukan'];
     }

     $sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='BANPROV' AND jenis='masuk'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     

     
      $jml_banprov = $jml_banprov + $data['pemasukan'];
     }

     $sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='BANKEU' AND jenis='masuk'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     

     
      $jml_bankeu = $jml_bankeu + $data['pemasukan'];
     }

     $sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='DLL' AND jenis='masuk'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     

     
      $jml_dll = $jml_dll + $data['pemasukan'];
     }
     

     include 'koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='DD' AND jenis='keluar'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     $jml_ddo = $jml_ddo + $data['pengeluaran'];}



$sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='ADD' AND jenis='keluar'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     $jml_addo = $jml_addo + $data['pengeluaran'];}


$sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='BANPROV' AND jenis='keluar'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     $jml_banprovo = $jml_banprovo + $data['pengeluaran'];}


$sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='BANKEU' AND jenis='keluar'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     $jml_bankeuo = $jml_bankeuo + $data['pengeluaran'];}


$sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='DLL' AND jenis='keluar'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     $jml_dllo = $jml_dllo + $data['pengeluaran'];}




include'koneksi.php';


$sql = mysqli_query($koneksi, "SELECT * FROM dolar ");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     

     $jml_masuk =  $data['pemasukan'];
        
          error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    $total_masuk = $total_masuk + $jml_masuk;


   $jml_keluar = $data['pengeluaran'] ;
$total_keluar = $total_keluar+$jml_keluar;

$total5 = $total_masuk-$total_keluar;

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

    <title>INDEX</title>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <style type="text/css">
 
    h1,h2,p,a{
        font-family: aria-label;
        font-weight: normal;
    }
 
    .jam_analog_malasngoding {
        background: #e7f2f7;
        position: relative;
        width: 240px;
        height: 240px;
        border: 16px solid #52b6f0;
        border-radius: 50%;
        padding: 20px;
        margin:20px auto;
    }
 
    .xxx {
        height: 100%;
        width: 100%;
        position: relative;
    }
 
    .jarum {
        position: absolute;
        width: 50%;
        background: #232323;
        top: 50%;
        transform: rotate(90deg);
        transform-origin: 100%;
        transition: all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1);
    }
 
    .lingkaran_tengah {
        width: 12px;
        height: 12px;
        background: #232323;
        border: 4px solid #52b6f0;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -5px;
        margin-top: -5px;
        border-radius: 50%;
    }
 
    .jarum_detik {
        height: 2px;
        border-radius: 8px;
        background: #F0C952;
    }
 
    .jarum_menit {
        height: 9px;
        border-radius: 4px;
    }
 
    .jarum_jam {
        height: 8px;
        border-radius: 4px;
        width: 35%;
        left: 15%;
    }
</style>
 

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
                <a class="navbar-brand" href="index2.php">HOME</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                        <li class="divider"></li>
                        <li> <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <a href="index2.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>

         

    
          
        
                        </li>
                       
                          <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>PEMASUKAN<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="new/dd.php">DANA DESA</a>
                                </li>
                                <li>
                                    <a href="new/add.php">ANGGARAN DANA DESA</a>
                                </li>
                                <li>
                                    <a href="new/banprov.php">BANTUAN PROVINSI</a>
                                </li>
                                <li>
                                    <a href="new/bankeu.php">BANTUAN KEUANGAN</a>
                                </li>
                                <li>
                                    <a href="new/dll.php">Dan Lain-Lain</a>
                                </li>
                                 <li>
                                    <a href="new/baru.php">Cetak Pemasukan</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                          <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i>PENGELUARAN<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="olds/ddout.php">DANA DESA</a>
                                </li>
                                <li>
                                    <a href="olds/addo.php">ANGGARAN DANA DESA</a>
                                </li>
                                <li>
                                    <a href="olds/banprovo.php">BANTUAN PROVINSI</a>
                                </li>
                                <li>
                                    <a href="olds/bankeuo.php">BANTUAN KEUANGAN</a>
                                </li>
                                <li>
                                    <a href="olds/dllo.php">Dan Lain-Lain</a>
                                </li>
                                 <li>
                                    <a href="olds/baru.php">Cetak Pengeluaran</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                                            <li>
                            <a href="page/rekap/rekap.php"><i class="fa fa-edit fa-fw"></i>REKAP</a>
                        </li>
                       <li>
                            <a href="#"><i class="fa fa-print fa-fw"></i>CETAK PDF<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="cetak/aya.php">DANA DESA</a>
                                </li>
                                <li>
                                    <a href="cetak/home1.php">ANGGARAN DANA DESA</a>
                                </li>
                                <li>
                                    <a href="cetak/home2.php">BANTUAN PROVINSI</a>
                                </li>
                                <li>
                                    <a href="cetak/home3.php">BANTUAN KEUANGAN</a>
                                </li>
                                <li>
                                    <a href="cetak/home4.php">Dan Lain-Lain</a>
                                </li>

                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-print fa-fw"></i>CETAK EXCEL<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               <li>
                                    <a href="cetak/excel1.php">DANA DESA</a>
                                </li>
                                <li>
                                    <a href="cetak/excel2.php">ANGGARAN DANA DESA</a>
                                </li>
                                <li>
                                    <a href="cetak/excel3.php">BANTUAN PROVINSI</a>
                                </li>
                                <li>
                                    <a href="cetak/excel4.php">BANTUAN KEUANGAN</a>
                                </li>
                                <li>
                                    <a href="cetak/excel5.php">Dan Lain-Lain</a>
                                </li>



                                
                            </ul>

                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="rekening/no.php"><i class="fa fa-comments"> Rekening Penerima <span class=></span></i></a>
                        </li>
                          <li>
                            <a href="about.html"><i class="fa fa-comments"> ABOUT <span class=></span></i></a>
                        </li>
                       
                         
                    </ul>
                   
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
            <!-- /.navbar-top-links -->

         

        <div id="page-wrapper">
            <div class="row">

                <div class="col-lg-6">

<h1><b>SIPANDA</b></h1><h6>( Sistem Pengelolaan Keuangan Tak Terduga )</h6>
                 <h4 align="pull-left">Selamat Datang <a class="btn btn-primary"><?php echo $_SESSION['username']; ?></a> | <a href="logout.php" class="btn btn-danger"> logout</a></h4>
                   
                <?php 
    $tanggal = mktime(date('m'), date("d"), date('Y'));
    echo "". date('d F Y',( $tanggal )) . "</b>";
    date_default_timezone_set("Asia/Jakarta");
    $jam = date ("H:i:s");
    echo " | Pukul :  " . $jam . " " ."  ";
    $a = date ("H");
    if (($a>=6) && ($a<=11)) {
        echo "<b>, Selamat Pagi  </b>";echo  $_SESSION['username'];
    }else if(($a>=11) && ($a<15)){
        echo " , Selamat  Siang !! ";echo $_SESSION['username'];
    }elseif(($a>=15) && ($a<=18)){
        echo ", Selamat Sore !!";echo $_SESSION['username'];
    }else{
        echo ", <b> Selamat Malam </b>";echo $_SESSION['username']; 
    }
 ?>
</div>
 <hr>


 <div class="jam_analog_malasngoding" align="center">
    <div class="xxx">
        <div class="jarum jarum_detik"></div>
        <div class="jarum jarum_menit"></div>
        <div class="jarum jarum_jam"></div>
        <div class="lingkaran_tengah"></div>
    </div>
</div>
 <hr>
                
                <div class="col-lg-6">
<br>
                  

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-search-plus fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                <?php   error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
                                    <div class="huge" style="font-size: 20px"><?php echo " Rp." . number_format($total_masuk).",-"; ?></div>
                                    <div>Total Pemasukan</div>
                                    <h1 style="font-size: 20px"></h1>
                                </div>
                            </div>
                        </div>
                        <a href="new/baru.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" style="font-size: 20px"><?php echo " Rp." . number_format($total_keluar).",-"; ?></div>
                                    <div>Total Pengeluaran</div>
                                </div>
                            </div>
                        </div>
                        <a href="olds/baru.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-money fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" style="font-size: 20px"><?php echo " Rp." . number_format($total5).",-"; ?></div>
                                    <div>SALDO</div>
                                </div>
                            </div>
                        </div>
                        <a href="page/rekap/rekap.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                       </div>
                </div>
                <?php include'koneksi.php';


$data_user = mysqli_query($koneksi, "SELECT * FROM tb_user");

$jumlah_user = mysqli_num_rows($data_user);
?>

                                
                <div class="col-lg-4 col-md-12">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $jumlah_user; ?></div>
                                    <div>Tabel Admin</div>
                                </div>
                            </div>
                        </div>
                        <a href="admin.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>

                </div>

                 <div class="col-lg-4 col-md-12">
                    <div class="panel panel-light blue">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Grafik</div>
                                    <div>Perbulan / Perjenis</div>
                                </div>
                            </div>
                        </div>
                        <a href="grafik.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>

                </div>
                 


                 
            </div>


           
            <!-- /.row -->
         


                                    </button>
                                </span>







<script type="text/javascript">
    const secondHand = document.querySelector('.jarum_detik');
    const minuteHand = document.querySelector('.jarum_menit');
    const jarum_jam = document.querySelector('.jarum_jam');
 
    function setDate(){
        const now = new Date();
 
        const seconds = now.getSeconds();
        const secondsDegrees = ((seconds / 60) * 360) + 90;
        secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
        if (secondsDegrees === 90) {
            secondHand.style.transition = 'none';
        } else if (secondsDegrees >= 91) {
            secondHand.style.transition = 'all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1)'
        }
 
        const minutes = now.getMinutes();
        const minutesDegrees = ((minutes / 60) * 360) + 90;
        minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;
 
        const hours = now.getHours();
        const hoursDegrees = ((hours / 12) * 360) + 90;
        jarum_jam.style.transform = `rotate(${hoursDegrees}deg)`;
    }
 
    setInterval(setDate, 1000)
</script>
</div></div>
<div class="panel-footer">
    <?php
$tanggal = time () ;
//Untuk mengambil data waktu dan tanggal saat ini dari server 
$tahun= date("Y",$tanggal);
//Memformat agar hanya menampilkan tahun 4 digit angka dengan Y (kapital)
echo "Reusmana_065117046 Copyright @ 2020 - " . $tahun;
/* baris ini mencetak rentang copyright,
Anda perlu mengganti 2011 dengan tahun pertama kali website Anda diluncurkan */
?></div>
       
                    <!-- /.panel


    <!-- jQuery -->
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







