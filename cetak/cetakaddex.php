
<!DOCTYPE html>
<html>
<head lang="en">
  <title>CETAK DD</title>

    <style>
        #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
        }
       

    </style></head>
<body onload="window.print();">


   <?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Cetak DD.xls");
?>

  <?php
    include '../koneksi.php';
    ?>


  <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
         
            <div class="panel panel-success">
                <div class="panel-heading" style="font-size: 20px;">
                    Data Rekap DD ( DANA DESA )
                </div>
                <br>
                 <div class="panel-body">
                    <div class="table-responsive">
                        <table border="1">
                            <thead>
                                <tr>
 <th>No.</th>
                                    <th>Kode</th>
                                    <th>Tanggal</th>
                                    <th>Penerima</th>
                                    <th>Uraian</th>
                                    <th>Debit</th>
                                    <th>Kredit</th>
                                    <th>Saldo</th>
                                    
                                     
                                </tr>
                            </thead>
                            <tbody>

        <?php 
        $no = 1;
        $sql = mysqli_query($koneksi,"select * from dolar  WHERE  jeniss='DD'  ");
        while($data = mysqli_fetch_array($sql)){
             error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
                                             $total = $total+$data['pemasukan'];
                                    $total_keluar = $total_keluar+$data['pengeluaran'];

                                    $saldo_akhir = $total - $total_keluar;

        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['kode']; ?></td>
            <td><?php echo $data['tgl']; ?></td>
            <td><?php echo $data['pembuat']; ?></td>
            <td><?php echo $data['keterangan']; ?></td>


           <td >
                                           <?php echo "".number_format("".$sa = ltrim($data['pengeluaran'], '0')."-")."-";   ?></td>
           
           
           <td >
                                           <?php echo "".number_format("".$sa = ltrim($data['pemasukan'], '0')."-")."-";   ?></td>
                                        
                                     

                                         <td align="right">
                                             <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
                                          <?php echo number_format($saldo_akhir); ?>  
                                        </td>
           
           
          
    
      
                
            
        </tr>

          <?php
                              
             } 
            ?>
        
                               
                             
                            </tbody>
                              <tr>
                                 <?php
          error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
                                <td colspan="7" style="text-align: left; font-size: 16px; color: red;">Saldo Akhir :</td>
                                <th style="font-size: 17px; text-align: right;"><font style="color: purple;"><?php echo " Rp." . number_format($saldo_akhir).",-"; ?></font></th>
                            </tr>

                             <tr>
                                <td colspan="5" style="text-align: left; font-size: 16px; color: maroon;">Total DD :</td>
                                 <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
                                     <td  style="font-size: 17px; text-align: right; "><font style="color: green;"><?php echo " Rp." . number_format($total_keluar).",-"; ?></font></td>
                                <td style="font-size: 17px; text-align: right; "><font style="color: green;"><?php echo " Rp." . 
                                number_format($total).",-"; ?></font></td>
                        
                             <td style="font-size: 17px; text-align: right; "><font style="color: green;"><?php echo " Rp." . number_format($saldo_akhir).",-"; ?></font></td>
                            

                            </tr>
                           

                           
                        </table>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
    
</body>
</html>