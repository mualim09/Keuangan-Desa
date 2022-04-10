<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

 <div id="page-wrapper">
            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">BANTUAN PROVINSI</h1>
                </div>
               <div align="right" class="col-md-12">

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          HAHAH  
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                               <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            
                      <thead>
                                   <tr>
  <th rowspan="2" style="align-content: center;">NO</th>
  <th rowspan="2"> Tanggal</th>
  <th rowspan="2"> Penerima</th>
  <th rowspan="2">Uraian</th>
  <th rowspan ="2" style="text-align: center;">Debit</th>
  <th rowspan ="2" style="text-align: center; background-color: yellow; " >Kredit</th>
 
  <th rowspan="2">Saldo</th>
   
 
 
  
  
 
  
 </tr>
                                </thead>
                                <tbody>
                                                                     <?php  function cari($koneksi){
}
include 'koneksi.php';

                                    $no = 1;
                                    $sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='BANPROV' ");
                                    while ($data = mysqli_fetch_assoc($sql)) {

                                         error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                                   $total1 = $total1+$data['pengeluaran'];
                                   


                                    $total7 = $total7+$data['pemasukan'];
                                   

                                    $total_semua = $total7-$total1; 

                                ?>
                                     <tr>


  <td><?php echo $data['kode']; ?></td>
    <td> <?php echo date('d F Y', strtotime($data['tgl'])); ?></td>
    <td><?php echo $data['pembuat']; ?></td>
   <td><?php echo $data['keterangan']; ?></td>


   <td><?php echo ''.number_format(''.$sa = ltrim($data['pengeluaran'], '0').'-').'-' ?></td>
   <td><?php echo ''. number_format(''.$sa = ltrim($data['pemasukan'], '0').'-') .'-' ?></td>


  <?php  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));?>
  <td><?php echo number_format($total_semua); ?></td>


  
  
  
 </tr>
                                        <?php 
                                         
                                }?> 

                              </tbody>


                                <tr>
                                    <td colspan="4" style="text-align: left; font-size: 17px; " align="center">Total SEMUA :</td>
                                     <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
                                    <td style="font-size: 17px; text-align: right; "><?php echo " Rp." . number_format($total1).",-"; ?></td>

                                    <td style="font-size: 17px; text-align: right; "><?php echo " Rp." . number_format($total7 ).",-"; ?></td>

                                    <td style="font-size: 17px; text-align: right; "><?php echo " Rp." . number_format($total_semua).",-"; ?></td>
                                   
                            </tr>

 
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
          </div></div></div>
                            <div class="footer" style="background-color: black; color: white; height: 20px;"  align="center" >Reusmana Copyright @unpak.ac.id</div> </div>
</body>
</html>