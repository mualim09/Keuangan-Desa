<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: ../../login.php");
    die();
}
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>REKAP </title>

    <!-- Bootstrap Core CSS -->
    <link href="../../baru/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../baru/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../../baru/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../../baru/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../baru/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../baru/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
                <a class="navbar-brand" href="../../index2.php">HOME</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                        <li class="divider"></li>
                        <li> <a href="../../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <a href="../../index2.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>

         

    
          
        
                        </li>
                       
                          <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>PEMASUKAN<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../../new/dd.php">DANA DESA</a>
                                </li>
                                <li>
                                    <a href="../../new/add.php">ANGGARAN DANA DESA</a>
                                </li>
                                <li>
                                    <a href="../../new/banprov.php">BANTUAN PROVINSI</a>
                                </li>
                                <li>
                                    <a href="../../new/bankeu.php">BANTUAN KEUANGAN</a>
                                </li>
                                <li>
                                    <a href="../../new/dll.php">Dan Lain-Lain</a>
                                </li>
                                 <li>
                                    <a href="../../new/baru.php">Cetak Pemasukan</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                          <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i>PENGELUARAN<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../../olds/ddout.php">DANA DESA</a>
                                </li>
                                <li>
                                    <a href="../../olds/addo.php">ANGGARAN DANA DESA</a>
                                </li>
                                <li>
                                    <a href="../../olds/banprovo.php">BANTUAN PROVINSI</a>
                                </li>
                                <li>
                                    <a href="../../olds/bankeuo.php">BANTUAN KEUANGAN</a>
                                </li>
                                <li>
                                    <a href="../../olds/dllo.php">Dan Lain-Lain</a>
                                </li>
                                 <li>
                                    <a href="../../olds/baru.php">Cetak Pengeluaran</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                                            <li>
                            <a href="rekap.php"><i class="fa fa-edit fa-fw"></i>REKAP</a>
                        </li>
                       <li>
                            <a href="#"><i class="fa fa-print fa-fw"></i>CETAK PDF<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../../cetak/aya.php">DANA DESA</a>
                                </li>
                                <li>
                                    <a href="../../cetak/home1.php">ANGGARAN DANA DESA</a>
                                </li>
                                <li>
                                    <a href="../../cetak/home2.php">BANTUAN PROVINSI</a>
                                </li>
                                <li>
                                    <a href="../../cetak/home3.php">BANTUAN KEUANGAN</a>
                                </li>
                                <li>
                                    <a href="../../cetak/home4.php">Dan Lain-Lain</a>
                                </li>

                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-print fa-fw"></i>CETAK EXCEL<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               <li>
                                    <a href="../../cetak/excel1.php">DANA DESA</a>
                                </li>
                                <li>
                                    <a href="../../cetak/excel2.php">ANGGARAN DANA DESA</a>
                                </li>
                                <li>
                                    <a href="../../cetak/excel3.php">BANTUAN PROVINSI</a>
                                </li>
                                <li>
                                    <a href="../../cetak/excel4.php">BANTUAN KEUANGAN</a>
                                </li>
                                <li>
                                    <a href="../../cetak/excel5.php">Dan Lain-Lain</a>
                                </li>



                                
                            </ul>

                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="../../rekening/no.php"><i class="fa fa-comments"> Rekening Penerima <span class=></span></i></a>
                        </li>
                          <li>
                            <a href="../../about.html"><i class="fa fa-comments"> ABOUT <span class=></span></i></a>
                        </li>
                       
                         
                    </ul>
                   
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>





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


    <?php
// --- koneksi ke database
include '../../koneksi.php';
// --- Fngsi tambah data (Create)
function tambah($koneksi){
    
    
    if (isset($_POST['btn_simpan'])){

        $id = time();
         $kode = $_POST['kode'];
          $keterangan = $_POST['keterangan'];
           $tgl = $_POST['tgl'];
            $addo = $_POST['addo'];
            
       


        if(!empty($addo)){
         error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
           $sql = "INSERT INTO dolar (id, kode, keterangan, tgl, addo, jenis) VALUES(".$id.",'".$kode."','".$keterangan."','".$tgl."','".$addo."','".keluar."')";

 if($sql) {

                            echo "
                                <script>
                                alert('Data Berhasil Ditambahkan');
                                document.location.href = '';
                                </script>";   
                        }

            $simpan = mysqli_query($koneksi, $sql);
            if($simpan && isset($_GET['aksi'])){
                if($_GET['aksi'] == 'create'){
                    header('location: addo.php');
                }
            }
        } else {
              echo "
                                <script>
                                alert('GAGAL SIMPAN');
                                document.location.href = '';
                                </script>";   
                        
            $pesan = "Tidak dapat menyimpan, data belum lengkap!";
        }
    }
    }



?>



   <div class="example-modal">
  <div id="tambahuser" class="modal fade" role="dialog" style="display:none;">
    <div class="modal-dialog"> 
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>



          
        <form action="" method="POST">

            <fieldset>
                <legend><h2>Tambah Data</h2></legend>

                  <label >kode </label><input type="text" class="form-control" name="kode"/>
                  <label for="keterangan">keterangan </label><input type="text" class="form-control" name="keterangan" />
                  <label for="tgl">Tanggal </label><input type="date" class="form-control" name="tgl"/>
                  <label for="addo">ADD </label><input type="number" class="form-control" name="addo"/>
                 
              
                
               

                <br>
                <label>
                    <input type="submit" name="btn_simpan" value="Simpan"/>
                    <input type="reset" name="reset" value="Besihkan"/>
                </label>
                <br>
                <p><?php echo isset($pesan) ? $pesan : "" ?></p>
            </fieldset>
        </form>
    </div>
</div></div></div>


                 <div id="page-wrapper">
            <div class="row">
<hr>

<link href="../../baru/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../../cetak/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">



<div class="container">
    <form action="cetakrekap.php" method="post" target="_blank">
 <legend>Date Time Picker(cetak REKAP)</legend>
        <fieldset>
   <div class="form-group">
                <label for="dtp_input2" class="col-md-2 control-label">Tanggal</label>
                <div class="input-group date form_date col-md-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="10" type="text" name="dari">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                    <input type="hidden" id="dtp_input2" value=""/><br/>
            </div>

             <div class="form-group">
                <label for="dtp_input2" class="col-md-2 control-label">Tanggal</label>
                <div class="input-group date form_date col-md-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="10" type="text" name="sampai">
     <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                <br>

                <div align="center">
    <input type="submit" value="cetak" class="btn btn-primary"   id="dtp_input2" /><br/>
            </div></div>
        </fieldset>
  
    </form>
</div>
<hr>
<h4>Ingin Cetak Semuanya?</h4>Klik Disini  <a href="../../cetak/cetakpdf.php" target="_blank" class="btn btn-primary">cetak</a>
<script type="text/javascript" src="../../cetak/date_picker_bootstrap/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="../../cetak/date_picker_bootstrap/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../cetak/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="../../cetak/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
<script type="text/javascript">
 $('.form_date').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  minView: 2,
  forceParse: 0
    });
</script>


 <script src="../../baru/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../baru/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../baru/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../../baru/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../../baru/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../../baru/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../baru/dist/js/sb-admin-2.js"></script>
</div></div></div></div>
<div class="panel-footer">
    <?php
$tanggal = time () ;
//Untuk mengambil data waktu dan tanggal saat ini dari server 
$tahun= date("Y",$tanggal);
//Memformat agar hanya menampilkan tahun 4 digit angka dengan Y (kapital)
echo "Reusmana_065117046 Copyright @ 2020 - " . $tahun;
/* baris ini mencetak rentang copyright,
Anda perlu mengganti 2011 dengan tahun pertama kali website Anda diluncurkan */
?>
   </div>
</body>
</html>