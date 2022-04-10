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
$query2 = $conn->query("SELECT  SUM(pemasukan) AS masuk FROM dolar WHERE tgl BETWEEN '$dari' AND '$sampai' AND jenis = 'masuk' AND jeniss='DD' "); 
$data = $query2->fetch(PDO::FETCH_OBJ);
$jumlah =  $data->masuk;
$resultJumlahPemasukan = number_format($jumlah,2,',','.');
}catch(Exception $e){
    echo $e->getMessage();
}


// Pengeluaran User
$query3 = $conn->query("SELECT  SUM(pengeluaran) AS keluar FROM dolar WHERE tgl BETWEEN '$dari' AND '$sampai' AND jenis = 'keluar' AND jeniss='DD' ");
$data2 = $query3->fetch(PDO::FETCH_OBJ);
$jumlah2 =  $data2->keluar;
$resultJumlahPengeluaran = number_format($jumlah2,2,',','.');

// Sisa Saldo / Uang User 
$query4 = $conn->query("SELECT ROUND ( SUM(IF(jenis = 'masuk'  AND jeniss='DD',  pemasukan, 0))-(SUM(IF( jenis = 'keluar'  AND jeniss='DD', pengeluaran, 0))) ) AS subtotal FROM dolar WHERE tgl BETWEEN '$dari' AND '$sampai'");
$data3 = $query4->fetch(PDO::FETCH_OBJ);
$jumlah3 =  $data3->subtotal;
$resultJumlah = number_format($jumlah3,2,',','.');




    
  
   


  


  
?>

<!DOCTYPE html>
<html>
<head>

    <title>laporanDD</title>
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
         <?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Cetak DD.xls");
?>
 
    <h1> &nbsp;&nbsp;LAPORAN DD</h1>


 <p class="body">

          <h4>  &nbsp;&nbsp;&nbsp; Laporan Keuangan Dari Tanggal <b><?php echo($dari2)?></b> Sampai <b><?php echo($sampai2)?></b> </h4>:

 <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
         
            <div class="panel panel-success">
               
                <br>
                 <div class="panel-body">
                    <div class="table-responsive">
                        <table border="1">
                            <thead>    <tr>
                                <th>No</th>
        <th scope="col">Kode</th>

        <th scope="col">tgl</th>

        <th scope="col">Penerima</th>
        <th scope="col">Uraian</th>
        <th scope="col">Debit</th>
        <th scope="col">Kredit</th>
       
        <th>Saldo</th>

    </tr>
</thead>
<tbody>
    <?php
    $no = 1;
    $sql = "select * from dolar where tgl BETWEEN '$dari' AND '$sampai' and jeniss='DD'  ";
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
          <td colspan=""><?php echo ($resultJumlahPengeluaran)?></td>
         <td colspan=""><?php echo ($resultJumlahPemasukan)?></td>

           <td colspan=""><?php echo ($resultJumlah)?></td>
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

  
    
 