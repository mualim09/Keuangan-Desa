<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    die();
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

    <title>In Rekening</title>

    <!-- Bootstrap Core CSS -->
    <link href="../baru/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../baru/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../baru/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../baru/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../baru/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../baru/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>

        <script type="text/javascript" src="source/jquery.fancybox.js?.v=2.1.5"></script>

    <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen"/>

  <script type="text/javascript">
        $(document).ready(function() {
            $(".perbesar")fancybox();
        });
    </script>

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
                <a class="navbar-brand" href="../index2.php">HOME</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                        <li class="divider"></li>
                        <li> <a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <a href="../index2.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>

         

    
          
        
                        </li>
                       
                          <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>PEMASUKAN<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../new/dd.php">DANA DESA</a>
                                </li>
                                <li>
                                    <a href="../new/add.php">ANGGARAN DANA DESA</a>
                                </li>
                                <li>
                                    <a href="../new/banprov.php">BANTUAN PROVINSI</a>
                                </li>
                                <li>
                                    <a href="../new/bankeu.php">BANTUAN KEUANGAN</a>
                                </li>
                                <li>
                                    <a href="../new/dll.php">Dan Lain-Lain</a>
                                </li>
                                 <li>
                                    <a href="../new/baru.php">Cetak Pemasukan</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                          <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i>PENGELUARAN<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../olds/ddout.php">DANA DESA</a>
                                </li>
                                <li>
                                    <a href="../olds/addo.php">ANGGARAN DANA DESA</a>
                                </li>
                                <li>
                                    <a href="../olds/banprovo.php">BANTUAN PROVINSI</a>
                                </li>
                                <li>
                                    <a href="../olds/bankeuo.php">BANTUAN KEUANGAN</a>
                                </li>
                                <li>
                                    <a href="../olds/dllo.php">Dan Lain-Lain</a>
                                </li>
                                 <li>
                                    <a href="../olds/baru.php">Cetak Pengeluaran</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                                            <li>
                            <a href="../page/rekap/rekap.php"><i class="fa fa-edit fa-fw"></i>REKAP</a>
                        </li>
                       <li>
                            <a href="#"><i class="fa fa-print fa-fw"></i>CETAK PDF<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../cetak/aya.php">DANA DESA</a>
                                </li>
                                <li>
                                    <a href="../cetak/home1.php">ANGGARAN DANA DESA</a>
                                </li>
                                <li>
                                    <a href="../cetak/home2.php">BANTUAN PROVINSI</a>
                                </li>
                                <li>
                                    <a href="../cetak/home3.php">BANTUAN KEUANGAN</a>
                                </li>
                                <li>
                                    <a href="../cetak/home4.php">Dan Lain-Lain</a>
                                </li>

                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-print fa-fw"></i>CETAK EXCEL<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               <li>
                                    <a href="../cetak/excel1.php">DANA DESA</a>
                                </li>
                                <li>
                                    <a href="../cetak/excel2.php">ANGGARAN DANA DESA</a>
                                </li>
                                <li>
                                    <a href="../cetak/excel3.php">BANTUAN PROVINSI</a>
                                </li>
                                <li>
                                    <a href="../cetak/excel4.php">BANTUAN KEUANGAN</a>
                                </li>
                                <li>
                                    <a href="../cetak/excel5.php">Dan Lain-Lain</a>
                                </li>



                                
                            </ul>

                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="no.php"><i class="fa fa-comments"> Rekening Penerima <span class=></span></i></a>
                        </li>
                          <li>
                            <a href="../about.html"><i class="fa fa-comments"> ABOUT <span class=></span></i></a>
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
include '../koneksi.php';
// --- Fngsi tambah data (Create)
function tambah($koneksi){
    
    
    if (isset($_POST['btn_simpan'])){

         $id = time();
         $nama = $_POST['nama'];
         $ket = $_POST['ket'];
          $nomrek = $_POST['nomrek'];
         

           if(!empty($nama)&&!empty($nomrek)){
         error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
           $sql = "INSERT INTO rekening (id, nama, ket, nomrek, jenis) VALUES(".$id.",'".$nama."','".$ket."','".$nomrek."','".IN."')";
           


 if($sql) {

                            echo "
                                <script>
                                alert('Data Berhasil Ditambahkan');
                                document.location.href = '';
                                </script>"; 
                                  
                        
                      }else{
                            echo "
                                <script>
                                alert('Data gagal');
                                document.location.href = '';
                                </script>";
                              
                    }

            $simpan = mysqli_query($koneksi, $sql);
            if($simpan && isset($_GET['aksi'])){
                if($_GET['aksi'] == 'create'){
                    header('location: no.php');

                }
            }
        } else {
             echo "
                                <script>
                                alert('Data Nama Dan Rekening Tidak Boleh Kosong');
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



          
        <form action="" method="POST" enctype="multipart/form-data">

            <fieldset>
                <legend><h2>Tambah Data</h2></legend>
                  
                  <label >Nama </label><input type="text" class="form-control" name="nama"/>
                  <label >Jabatan </label><input type="text" class="form-control" name="ket"/>
                  <label >No. Rekening </label><input type="number" class="form-control" name="nomrek" />
                       
               

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
                <div class="col-lg-12">
                    <h1 class="page-header">Rekening Penerima</h1>
                </div>
               <div align="right" class="col-md-12">
<a href='#' class='btn btn-success' data-toggle='modal' data-target='#tambahuser'> + Tambah Data</a></div>
<br>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                               <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            
                                <thead>
                                    <tr>
  <th>No</th>
  <th>Nama</th>
  <th>Jabatan</th>
  <th>No. Rekening</th>
  <th>Aksi</th>
 </tr>
                                </thead>
                                <tbody>
                                   <?php  function cari($koneksi){

include '../koneksi.php';}

                                    $no = 1;
                                    $sql = mysqli_query($koneksi, "SELECT * FROM rekening WHERE jenis='IN' ");
                                    while ($data = mysqli_fetch_assoc($sql)) {

                                ?>
                                      <tr class="odd gradeX">
                                            <td>
                                                <?php echo $no++; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['nama']; ?>
                                            </td>
                                          
                                            <td>
                                                <?php echo $data['ket']; ?>
                                            </td>
                                            <td align="right">
                                                <?php echo number_format( $data['nomrek']); ?>
                                            </td>
                                             
                                             <td>
                                                 <a class="btn btn-primary"  href="no.php?aksi=update&id=<?php echo $data['id']; ?>&nama=<?php echo $data['nama']; ?>&ket=<?php echo $data['ket']; ?>&nomrek=<?php echo $data['nomrek']; ?>">Ubah</a> |
                    <a class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="no.php?aksi=delete&id=<?php echo $data['id']; ?>">Hapus</a>

                                            </td>
                                        
                                        </tr>
                                        <?php 
                                         
                                  
                                    } 

                                ?>
                              

                               

                               
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                          
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
             <?php









       

       

// --- Tutup Fungsi Baca Data (Read)
// --- Fungsi Ubah Data (Update)

include '../koneksi.php';

function ubah($koneksi){
    // ubah data
    if(isset($_POST['btn_ubah'])){


   $id = $_POST['id'];
         $nama = $_POST['nama'];
         $ket = $_POST['ket'];
          $nomrek = $_POST['nomrek'];
            

      
      
        
        if(!empty($nama) && !empty($ket)){
            $perubahan = "nama='".$nama."',nomrek='".$nomrek."',ket='".$ket."'";
            $sql_update = "UPDATE rekening SET ".$perubahan." WHERE id=$id";



            $update = mysqli_query($koneksi, $sql_update);
            if($update && isset($_GET['aksi'])){
                if($_GET['aksi'] == 'update'){
                   error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                    header('location:no.php'); 
                    if($update) {
                        echo "
                                <script>
                                alert('Data Berhasil Di Update');
                                document.location.href = 'no.php';
                                </script>";  
}else{ 
    echo "
                                <script>
                                alert('Data gagal');
                                document.location.href = '';
                                </script>"; 

                                }   
                      
                      
                }
            }
        } else {
             echo "
                                <script>
                                alert('Data Tidak Boleh Kosong');
                                document.location.href = '';
                                </script>"; 
            $pesan = "Data tidak lengkap!";
        }
    }
    
    // tampilkan form ubah


    if(isset($_GET['id'])){
        ?>
            <hr>
             <div id="page-wrapper">
            <div class="row">
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
            
            <form action="" method="POST" enctype="multipart/form-data">
                  <div class="col-md-4">
                 <div class="form-group">
            <fieldset>
              <a href="no.php"><button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button></a>

                <legend><h2>Ubah Data</h2></legend>
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"/>
                  <label for="nama">Nama </label><input type="text" class="form-control" name="nama" value="<?php echo $_GET['nama'] ?>"/>
                  <label for="ket">Jabatan </label><input type="text" class="form-control" name="ket" value="<?php echo $_GET['ket'] ?>"/>
                  <label for="nomrek">No Rekening </label><input type="number" class="form-control" name="nomrek" value="<?php echo $_GET['nomrek'] ?>"/>
                  
                  <br>
                <label>
                    <input type="submit" name="btn_ubah" class="btn btn-primary" value="Simpan Perubahan"/>  atau 
                    <br>
                    <br><a  class="btn btn-danger" href="no.php">Batal</a>
                </label>
                <br>
                <p><?php echo isset($pesan) ? $pesan : "" ?></p>
                
            </fieldset>
            
            <hr>
        </div>
    </div>
    </form></div></div></div></div>
        <?php
    }
    
}
// --- Tutup Fungsi Update
// --- Fungsi Delete
function hapus($koneksi){
    if(isset($_GET['id']) && isset($_GET['aksi'])){
        $id = $_GET['id'];
        $sql_hapus = "DELETE FROM rekening WHERE id=" . $id;
        $hapus = mysqli_query($koneksi, $sql_hapus);
        
        if($hapus){
            if($_GET['aksi'] == 'delete'){
               error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                header('location: no.php');
                if($hapus) {
                        echo "
                                <script>
                                alert('Data Berhasil Di Hapus');
                                document.location.href = 'no.php';
                                </script>";  
}else{ 
    echo "
                                <script>
                                alert('Data gagal');
                                document.location.href = '';
                                </script>"; 

                                }   
            }
        }
    }
    
}
// --- Tutup Fungsi Hapus
// ===================================================================
// --- Program Utama
if (isset($_GET['aksi'])){
    switch($_GET['aksi']){
        case "create":
            echo '<a href="no.php"> &laquo; Home</a>';
            tambah($koneksi);
            break;
        case "read":
            cari($koneksi);
            break;
        case "update":
            ubah($koneksi);

         break;
            cari($koneksi);
            break;
        case "delete":
            hapus($koneksi);
            break;
        default:
            echo "<h3>Aksi <i>".$_GET['aksi']."</i> tidaka ada!</h3>";
            echo '<h1>Tidak ADA DATA</h1>';
            echo  "<script>
                                alert('Data Berhasil Ditambahkan');
                                document.location.href = '';
                                </script>";
            tambah($koneksi);
            cari($koneksi);
    }
} else {
    tambah($koneksi);
   
}
?>


<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
            <!-- /.row -->
           
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../baru/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../baru/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../baru/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../baru/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../baru/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../baru/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../baru/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
           
        });
    });
    </script>
    
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

</body>

</html>
