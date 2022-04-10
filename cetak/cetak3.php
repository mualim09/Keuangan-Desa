<?php 


// memangil koneksi dan data dari database
include '../koneksi2.php';






// Cetak User yang sedang Login
$dari = addslashes(date("Y-m-d",strtotime($_POST['dari'])));
$dari2 = addslashes(date("d-m-Y",strtotime($_POST['dari'])));
$sampai = addslashes(date("Y-m-d",strtotime($_POST['sampai'])));
$sampai2 = addslashes(date("d-m-Y",strtotime($_POST['sampai'])));




// Pemasukan User
try{
$query2 = $conn->query("SELECT  SUM(pemasukan) AS masuk FROM dolar WHERE tgl BETWEEN '$dari' AND '$sampai' AND jenis = 'masuk' AND jeniss='BANKEU' "); 
$data = $query2->fetch(PDO::FETCH_OBJ);
$jumlah =  $data->masuk;
$resultJumlahPemasukan = number_format($jumlah,2,',','.');
}catch(Exception $e){
    echo $e->getMessage();
}


// Pengeluaran User
$query3 = $conn->query("SELECT  SUM(pengeluaran) AS keluar FROM dolar WHERE tgl BETWEEN '$dari' AND '$sampai' AND jenis = 'keluar' AND jeniss='BANKEU' ");
$data2 = $query3->fetch(PDO::FETCH_OBJ);
$jumlah2 =  $data2->keluar;
$resultJumlahPengeluaran = number_format($jumlah2,2,',','.');

// Sisa Saldo / Uang User 
$query4 = $conn->query("SELECT ROUND ( SUM(IF(jenis = 'masuk' AND jeniss='BANKEU', pemasukan, 0))-(SUM(IF( jenis = 'keluar' AND jeniss='BANKEU', pengeluaran, 0))) ) AS subtotal FROM dolar WHERE tgl BETWEEN '$dari' AND '$sampai'");
$data3 = $query4->fetch(PDO::FETCH_OBJ);
$jumlah3 =  $data3->subtotal;
$resultJumlah = number_format($jumlah3,2,',','.');




    
  
   


  


  
?>

<!DOCTYPE html>
<html>
<head>

    <title>Laporan Bankeu</title>
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



<h1>&nbsp;&nbsp;LAPORAN Bankeu</h1>

 <p class="body">
           <h4> &nbsp;&nbsp;&nbsp; Laporan Keuangan Dari Tanggal <b><?php echo($dari2)?></b> Sampai <b><?php echo($sampai2)?></b> :
<div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
         
            <div class="panel panel-success">
               
                <br>
                 <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
    <tr>
        <th>No</th>
        <th width="50px">Kode</th>
        <th scope="col" width="100px">Tanggal</th>
        <th scope="col" width="100px">Penerima</th>
        <th scope="col" width="200px">Uraian</th>
        <th scope="col">Debit</th>
        <th scope="col">Kredit</th>
       
        <th>Saldo</th>

    </tr>
    <?php
    $no = 1;
    $sql = "select * from dolar where tgl BETWEEN '$dari' AND '$sampai' and jeniss='BANKEU'  ";
$query = $conn->query($sql);
    while ($baris = $query->fetch(PDO::FETCH_NUM)) {
        
         error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
         $judul1=$judul1+$baris[6];
        $judul2=$judul2+$baris[5];
        $judul3=$judul1-$judul2;
        echo "<tr>";
          echo "<td>" . $no++ . "</td>";
        echo "<td>" .  $baris[1] . "</td>";
        echo "<td>" . $baris[4] . "</td>";
        echo "<td>" . $baris[2] . "</td>";
        echo "<td>" . $baris[3] . "</td>";
        echo "<td>" .''. number_format(''.$sa = ltrim($baris[5], '0').'-').'-'. "</td>";
        echo "<td>" .''. number_format(''.$sa = ltrim($baris[6], '0').'-').'-'. "</td>";
        echo "<td>" . number_format($judul3) . "</td>";
        echo "</tr>";





       
        



    }
    ?>
    <tr>
        <td colspan="5">TOTAL</td>
          <td colspan="">Rp <?php echo ($resultJumlahPengeluaran)?></td>
         <td colspan="">Rp <?php echo ($resultJumlahPemasukan)?></td>

           <td colspan="">Rp <?php echo ($resultJumlah)?></td>
    </tr>
</tbody></table></div></div></div></div></div>

     
 </p>
       
       
            <table>
                 <h4>
                <tr>
                    <td><h4>&nbsp;&nbsp;Jumlah Pemasukan </td>
                    <td>:</td>
                    <td><h4><b>Rp. <?php echo ($resultJumlahPemasukan)?></b></td>
                </tr>
                <tr>
                    <td><h4>&nbsp;&nbsp;Jumlah Pengeluaran </td>
                    <td>:</td>
                    <td><b><h4>Rp. <?php echo ($resultJumlahPengeluaran)?></b></td>
                </tr>
                <tr>
                    <td><h4>&nbsp;&nbsp;Saldo / Total  </td>
                    <td>:</td>
                    <td><b><h4>Rp. <?php echo($resultJumlah)?></b></td>
                </tr>
                </h4>
            </table>
        </p>
        <br />
   
    </body>
    </html>