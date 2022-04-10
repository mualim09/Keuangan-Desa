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

    <title>DATA REKAP</title>

    <!-- Bootstrap Core CSS -->
    <link href="../baru/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../baru/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../baru/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts --> 
    <link href="../baru/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <style>
        #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
        }
    </style>
</head>
 <body onload="window.print();" style="font-size: 15px">

    <?php
    include '../koneksi.php';
    ?>



  <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-success">
                <div class="panel-heading" style="font-size: 20px;">
                    Data Rekapitulasi Keseluruhan
                </div>
                <br>
                 <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                                                  <tr>
  <th style="align-content: center;">NO</th>
  <th style="text-align: center;">kode</th>
  <th >Tanggal</th>
  <th >Penerima</th>
  <th >Uraian</th>
  <th style="text-align: center;">Debit</th>
  <th style="text-align: center; background-color: yellow; " >Kredit</th>
   
  <th >Saldo</th> 
  <th>KET</th>
 
 
  
  
 
  
 </tr>
                            </thead>
                            <tbody>

        <?php 
        $no = 1;
        $sql = mysqli_query($koneksi,"select * from dolar");
        while($data = mysqli_fetch_array($sql)){
          
           error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
           $total1 = $total1+$data['ddo'];
                                    $total2 = $total2+$data['pemasukan'];

                                    $total7 = $total7+$data['pengeluaran'];

                                    $total_semua = $total2-$total7; 
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['kode']; ?></td>
            <td><?php echo $data['tgl']; ?></td>
            <td><?php echo $data['pembuat']; ?></td>
            <td><?php echo $data['keterangan']; ?></td>
            
           
                                                <td ><?php echo "".number_format(''.$sa = ltrim($data['pengeluaran'], '0').'-')."-";   ?>
</td>
                                                  <td >
                                                <?php echo "".number_format(''.$sa = ltrim($data['pemasukan'], '0').'-')."-";   ?></td> 
                                                
                                           

        <?php  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
         <td><?php echo number_format($total_semua); ?></td>

          
    
        <td><?php echo $data['jeniss']; ?></td>
                
            
        </tr>

         <?php   
                                }?> <tr>
                                     <?php 
           error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>



 <tr>
                                    <td colspan="5" style="text-align: left; font-size: 15px; ">Total  :</td>
                                    <td style="font-size: 17px; text-align: right; "><?php echo " Rp." . number_format($total2).",-"; ?></td>
                                    <td style="font-size: 17px; text-align: right; "><?php echo " Rp." . number_format($total7).",-"; ?></td>
                                    <td style="font-size: 17px; text-align: right; "><?php echo " Rp." . number_format($total_semua).",-"; ?></td>
                               
                                
                                </tr>
                                
                              

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../baru/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../baru/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../baru/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../baru/dist/js/sb-admin-2.js"></script>

</body>

</html>