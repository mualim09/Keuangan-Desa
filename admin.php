<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
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

    <title>INDEX</title>
    <script type="text/javascript" src="Chart.js/Chart.js"></script>

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

        <div id="page-wrapper">
            <div class="row">
<h1 style="border-color: rgb();"><b>REUS</b></h1>
          

<?php
include 'koneksi.php';
?>

         
            <div class="panel panel-success">
                <div class="panel-heading" style="font-size: 20px;">
                    ADMIN
                </div>
                <b>
                 <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Aksi</th>
                                                                       
                                     
                                </tr>
                            </thead>
                            <tbody>

        <?php 
        $no = 1;
        $sql = mysqli_query($koneksi,"select * from tb_user ");
        while($data = mysqli_fetch_array($sql)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td><a  name="hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-danger" href="admin.php?aksi=delete&id=<?php echo $data['id']; ?>">hapus</a></td>
        </tr>

         <?php
                              
             } 
            ?>
        
                               
                             
                            </tbody>
                            

                           
                        </table>




<?php
function hapus ($koneksi)
{
    # code...function hapus($koneksi){
    if(isset($_GET['id']) && isset($_GET['aksi'])){
        $id = $_GET['id'];
        $sql_hapus = "DELETE FROM tb_user WHERE id=" . $id;
        $hapus = mysqli_query($koneksi, $sql_hapus);
        
        if($hapus){
            if($_GET['aksi'] == 'delete'){
               error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                header('location: add.php');
                if($hapus) {
                        echo "
                                <script>
                                alert('Data Berhasil Di Hapus');
                                document.location.href = 'admin.php';
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

if (isset($_GET['aksi'])){
    switch($_GET['aksi']){
        case "create":
            echo '<a href="add.php"> &laquo; Home</a>';
           
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
          }
      }

?>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
      </div>
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