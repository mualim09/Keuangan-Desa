<?php
ob_start();
?>

<html>
    <head>
        <title>Script PHP Pencarian Data Berdasarkan Periode Tanggal</title>
    </head>
    <body>
      
        <?php

        include 'koneksi.php';
            //proses jika sudah klik tombol pencarian data
            if(isset($_POST['pencarian'])){
            //menangkap nilai form
            $tanggal_awal=$_POST['tanggal_awal'];
            $tanggal_akhir=$_POST['tanggal_akhir'];
            if(empty($tanggal_awal) || empty($tanggal_akhir)){
            //jika data tanggal kosong
            ?>
            <script language="JavaScript">
                alert('Tanggal Awal dan Tanggal Akhir Harap di Isi!');
                document.location='admin.php';
            </script>
            <?php
            }else{
            ?><i><b>Informasi : </b> Hasil pencarian data berdasarkan periode Tanggal <b><?php echo $_POST['tanggal_awal']?></b> s/d <b><?php echo $_POST['tanggal_akhir']?></b></i>
            <?php


            $query=mysqli_query($koneksi ,"select * from dolar where tgl between '$tanggal_awal' and '$tanggal_akhir' and jenis='masuk'");
            }
        ?>
        </p>
        <?php
        $html="


        <table >
            <tr>
                
                <td>'$row['keterangan'];'</td>
               </tr>

          
        </table>
      ";?>
        </body>
</html>
<?php
$content="
<h1>apa sih</h1>";

require __DIR__.'/html2pdf/vendor/autoload.php';
    use Spipu\Html2Pdf\Html2Pdf;

    $html2pdf = new Html2Pdf('P','A4','fr', true, 'UTF-8', array(15, 15, 15, 15), false); 
    $html2pdf->writeHTML($html);
    $html = ob_get_contents(); // Masukan semua kode yang ada di print.php ke dalam $html
ob_end_clean(); 
    


    $html2pdf->output(__DIR__.'/lo.pdf');
?>
