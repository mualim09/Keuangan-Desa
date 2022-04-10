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

$query5 = $conn->query("SELECT  SUM(pemasukan) AS masuk FROM dolar WHERE tgl BETWEEN '$dari' AND '$sampai' AND jenis = 'masuk' AND jeniss='ADD'");
$data4 = $query5->fetch(PDO::FETCH_OBJ);
$jumlah4 =  $data4->masuk;
$resultJumlahadd = number_format($jumlah4,2,',','.');

$query6 = $conn->query("SELECT  SUM(pemasukan) AS masuk FROM dolar WHERE tgl BETWEEN '$dari' AND '$sampai' AND jenis = 'masuk' AND jeniss='BANPROV' ");
$data5 = $query6->fetch(PDO::FETCH_OBJ);
$jumlah5 =  $data5->masuk;
$resultJumlahbanprov = number_format($jumlah5,2,',','.');

$query7 = $conn->query("SELECT  SUM(pemasukan) AS masuk FROM dolar WHERE tgl BETWEEN '$dari' AND '$sampai' AND jenis = 'masuk' AND jeniss='BANKEU'");
$data6 = $query7->fetch(PDO::FETCH_OBJ);
$jumlah6 =  $data6->masuk;
$resultJumlahbankeu = number_format($jumlah6,2,',','.');

$query8 = $conn->query("SELECT  SUM(pemasukan) AS masuk FROM dolar WHERE tgl BETWEEN '$dari' AND '$sampai' AND jenis = 'masuk'AND jeniss='DLL' ");
$data7 = $query8->fetch(PDO::FETCH_OBJ);
$jumlah7 =  $data7->masuk;
$resultJumlahdll = number_format($jumlah7,2,',','.');


//sisa
$query13 = $conn->query("SELECT ROUND ( SUM(IF(jenis = 'masuk' AND jeniss='DD', pemasukan, 0)) + (SUM(IF( jenis = 'masuk' AND jeniss='ADD', pemasukan, 0))) + (SUM(IF( jenis = 'masuk' AND jeniss='BANPROV', pemasukan, 0)) ) + (SUM(IF( jenis = 'masuk' AND jeniss='BANKEU', pemasukan, 0))) + (SUM(IF( jenis = 'masuk' AND jeniss='DLL', pemasukan, 0)))) AS subtotal FROM dolar WHERE tgl BETWEEN '$dari' AND '$sampai'");
$data12 = $query13->fetch(PDO::FETCH_OBJ);
$jumlah12 =  $data12->subtotal;
$resultJumlahin = number_format($jumlah12,2,',','.');




    
  
   


  


  
?>


<!DOCTYPE html>
<html>
<head>

    <title>laporanpemasukan</title>

    
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
header("Content-Disposition: attachment; filename=Data Uang Masuk.xls");
?>
    <h1> &nbsp;&nbsp;LAPORAN PEMASUKAN</h1>


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
                            <thead> 
                              <tr>

                                <th >No</th>
        
        <th >Tanggal</th>
        <th >Penerima</th>

        <th >Uraian</th>
        
        <th >Kredit</th>
          <th >Saldo</th>
          <th >KET</th>
       
       
      

    </tr>
</thead>
<tbody>
    <?php
    $no=1;
    $sql = "select * from dolar where tgl BETWEEN '$dari' AND '$sampai' and jenis='masuk'  ";
$query = $conn->query($sql);
    while ($baris = $query->fetch(PDO::FETCH_NUM)) {
         error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
        
        $judul1=$judul1+$baris[6];
         echo "<tr>";
        
        echo "<td>" .  $baris[1] . "</td>";
        echo "<td>" . $baris[4] . "</td>";
        echo "<td>" . $baris[2] . "</td>";
        echo "<td>" . $baris[3] . "</td>";
        echo "<td>" . number_format(''.$sa = ltrim($baris[6], '0').'-'). "</td>";
        echo "<td>" . number_format($judul1) . "</td>";
        echo "<td>" . $baris[9] . "</td>";
        echo "</tr>";



        



    }
    ?>


    <tr>
        <td colspan="5">TOTAL</td>
         <td colspan=""><?php echo ($resultJumlahin)?></td>
         
    </tr>
</tbody></table></div></div></div></div></div>

     
          
       
         
        </p>
       
       
            <table>
                 <h4>
                <tr>
                    <td><h4>&nbsp;&nbsp;Jumlah Pemasukan </td>
                    <td>:</td>
                    <td><h4><b>Rp. <?php echo ($resultJumlahin)?></b></td>
                </tr>
                
                </h4>
            </table>
        </p>
        <br />
   
    </body>
    </html>
