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
header("Content-Disposition: attachment; filename=Data uang Keluar.xls");
?>
 
    <h1> &nbsp;&nbsp;LAPORAN PENGELUARAN</h1>


 <p class="body">

          <h4>  &nbsp;&nbsp;&nbsp; Laporan Keuangan Dari Tanggal <b><?php echo($dari2)?></b> Sampai <b><?php echo($sampai2)?></b> </h4>:

                        <table border="1"><thead>    <tr>
                                <th >No</th>
       
        <th >Tanggal</th>
        <th >Penerima</th>
        <th >Uraian</th>
        <th >Kredit</th>
          <th>Saldo</th>
          <th>KET</th>
       
       
      

    </tr>
</thead>
<tbody>
    <?php
    $no=1;
    $sql = "select * from dolar where tgl BETWEEN '$dari' AND '$sampai' and jenis='keluar'  ";
$query = $conn->query($sql);
    while ($baris = $query->fetch(PDO::FETCH_NUM)) 

    {
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

  
 