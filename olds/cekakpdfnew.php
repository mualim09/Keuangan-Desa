<?php 

ob_start();
    // Include libary mpdf

// memangil koneksi dan data dari database
include '../koneksi2.php';






// Cetak User yang sedang Login
$dari = addslashes(date("Y-m-d",strtotime($_POST['dari'])));
$dari2 = addslashes(date("d-m-Y",strtotime($_POST['dari'])));
$sampai = addslashes(date("Y-m-d",strtotime($_POST['sampai'])));
$sampai2 = addslashes(date("d-m-Y",strtotime($_POST['sampai'])));




// Pemasukan User
try{
$query2 = $conn->query("SELECT  SUM(ddm) AS masuk FROM dolar WHERE tgl BETWEEN '$dari' AND '$sampai' AND jenis = 'masuk' "); 
$data = $query2->fetch(PDO::FETCH_OBJ);
$jumlah =  $data->masuk;
$resultJumlahPemasukan = number_format($jumlah,2,',','.');
}catch(Exception $e){
    echo $e->getMessage();
}

$query9 = $conn->query("SELECT  SUM(pengeluaran) AS keluar FROM dolar WHERE tgl BETWEEN '$dari' AND '$sampai' AND jenis = 'keluar' AND jeniss='DD' ");
$data8 = $query9->fetch(PDO::FETCH_OBJ);
$jumlah8 =  $data8->keluar;
$resultJumlahddo = number_format($jumlah8,2,',','.');

$query10 = $conn->query("SELECT  SUM(pengeluaran) AS keluar FROM dolar WHERE tgl BETWEEN '$dari' AND '$sampai' AND jenis = 'keluar' AND jeniss='BANPROV'");
$data9 = $query10->fetch(PDO::FETCH_OBJ);
$jumlah9 =  $data9->keluar;
$resultJumlahbanprovo = number_format($jumlah9,2,',','.');

$query11 = $conn->query("SELECT  SUM(pengeluaran) AS keluar FROM dolar WHERE tgl BETWEEN '$dari' AND '$sampai' AND jenis = 'keluar' AND jeniss='BANKEU'");
$data10 = $query11->fetch(PDO::FETCH_OBJ);
$jumlah10 =  $data10->keluar;
$resultJumlahbankeuo = number_format($jumlah10,2,',','.');

$query12 = $conn->query("SELECT  SUM(pengeluaran) AS keluar FROM dolar WHERE tgl BETWEEN '$dari' AND '$sampai' AND jenis = 'keluar' AND jeniss='DLL'");
$data11 = $query12->fetch(PDO::FETCH_OBJ);
$jumlah11 =  $data11->keluar;
$resultJumlahdllo = number_format($jumlah11,2,',','.');

$query3 = $conn->query("SELECT  SUM(pengeluaran) AS keluar FROM dolar WHERE tgl BETWEEN '$dari' AND '$sampai' AND jenis = 'keluar' AND jeniss='ADD'");
$data2 = $query3->fetch(PDO::FETCH_OBJ);
$jumlah2 =  $data2->keluar;
$resultJumlahPengeluaran = number_format($jumlah2,2,',','.');

//sisa

$query14 = $conn->query("SELECT ROUND (SUM(IF( jenis = 'keluar' AND jeniss='DD', pengeluaran, 0))) + (SUM(IF( jenis = 'keluar' AND jeniss='ADD', pengeluaran, 0)) +( SUM(IF( jenis = 'keluar' AND jeniss='BANPROV', pengeluaran, 0))) + (SUM(IF( jenis = 'keluar' AND jeniss='BANKEU', pengeluaran, 0))) + (SUM(IF( jenis = 'keluar' AND jeniss='DLL', pengeluaran, 0))) ) AS subtotal FROM dolar WHERE tgl BETWEEN '$dari' AND '$sampai'");
$data13 = $query14->fetch(PDO::FETCH_OBJ);
$jumlah13 =  $data13->subtotal;
$resultJumlahout = number_format($jumlah13,2,',','.');




    
  
   


  


  
?>

<!DOCTYPE html>
<html>
<head>

    <title>laporanpemasukan</title>

    <link href="../baru/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../baru/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../baru/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../baru/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../baru/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
        #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
        }
       

    </style>
</head>
<body onload="window.print();">
    <h1> &nbsp;&nbsp;LAPORAN PENGELUARAN</h1>


 <p class="body">

          <h4>  &nbsp;&nbsp;&nbsp; Laporan Keuangan Dari Tanggal <b><?php echo($dari2)?></b> Sampai <b><?php echo($sampai2)?></b> </h4>:

 <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
         
            <div class="panel panel-success">
               
                <br>
                 <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>    <tr>
                                <th rowspan="2">No</th>
       
        <th scope="col" rowspan="2">Tanggal</th>
        <th scope="col" rowspan="2">Penerima</th>
        <th scope="col" rowspan="2">Uraian</th>
        <th rowspan ="2" style="text-align: center;">Kredit</th>
          <th rowspan="2">Saldo</th>
          <th rowspan="2">KET</th>
       
       
      

    </tr>
</thead>
<tbody>
    <?php
    $no=1;
    $sql = "select * from dolar where tgl BETWEEN '$dari' AND '$sampai' and jenis='keluar'  ";
$query = $conn->query($sql);
    while ($baris = $query->fetch(PDO::FETCH_NUM)) {
         error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
        
        $judul1=$judul1+$baris[5];
        echo "<tr>";
        
        echo "<td>" .  $baris[1] . "</td>";
        echo "<td>" . $baris[4] . "</td>";
        echo "<td>" . $baris[2] . "</td>";
        echo "<td>" . $baris[3] . "</td>";
        echo "<td>" . number_format(''.$sa = ltrim($baris[5], '0').'-'). "</td>";
       

        echo "<td>" . number_format($judul1) . "</td>";
         echo "<td>" . $baris[9] . "</td>";
        echo "</tr>";




        



    }
    ?>


    <tr>
 
        <td colspan="5">TOTAL</td>
          <td colspan=""><?php echo ($resultJumlahout)?></td>
    </tr>
</tbody></table></div></div></div></div></div>

     
          
       
         
        </p>
       
       
            <table>
                 <h4>
                <tr>
                    <td><h4>&nbsp;&nbsp;Jumlah Pengeluaran </td>
                    <td>:</td>
                    <td><h4><b>Rp. <?php echo ($resultJumlahout)?></b></td>
                </tr>
                
                </h4>
            </table>
        </p>
        <br />
   
    </body>
    </html>

  
 