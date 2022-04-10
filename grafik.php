<?php
include('koneksi.php');
$label = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];

for($bulan = 1;$bulan < 13;$bulan++)
{
  $query = mysqli_query($koneksi,"select sum(pemasukan) as jumlah from dolar where MONTH(tgl)='$bulan'");
  $row = $query->fetch_array();
  $jumlah_produk[] = $row['jumlah'];
}

?>
<?php
for($bulan = 1;$bulan < 13;$bulan++)
{
  $queryy = mysqli_query($koneksi,"select sum(pengeluaran) as jumlahh from dolar where MONTH(tgl)='$bulan'");
  $row = $queryy->fetch_array();
  $jumlah_produkk[] = $row['jumlahh'];
}?>
<?php
include 'koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='DD' AND jenis='masuk'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     $jml_dd = $jml_dd + $data['pemasukan'];}
$sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='ADD' AND jenis='masuk'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     

     
      $jml_add = $jml_add + $data['pemasukan'];
     }

     $sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='BANPROV' AND jenis='masuk'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     

     
      $jml_banprov = $jml_banprov + $data['pemasukan'];
     }

     $sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='BANKEU' AND jenis='masuk'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     

     
      $jml_bankeu = $jml_bankeu + $data['pemasukan'];
     }

     $sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='DLL' AND jenis='masuk'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     

     
      $jml_dll = $jml_dll + $data['pemasukan'];
     }
     

     include 'koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='DD' AND jenis='keluar'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     $jml_ddo = $jml_ddo + $data['pengeluaran'];}



$sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='ADD' AND jenis='keluar'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     $jml_addo = $jml_addo + $data['pengeluaran'];}


$sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='BANPROV' AND jenis='keluar'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     $jml_banprovo = $jml_banprovo + $data['pengeluaran'];}


$sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='BANKEU' AND jenis='keluar'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     $jml_bankeuo = $jml_bankeuo + $data['pengeluaran'];}


$sql = mysqli_query($koneksi, "SELECT * FROM dolar WHERE jeniss='DLL' AND jenis='keluar'");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     $jml_dllo = $jml_dllo + $data['pengeluaran'];}




include'koneksi.php';


$sql = mysqli_query($koneksi, "SELECT * FROM dolar ");
while($data=mysqli_fetch_assoc($sql)) {

  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     

     $jml_masuk =  $data['pemasukan'];
        
          error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    $total_masuk = $total_masuk + $jml_masuk;


   $jml_keluar = $data['pengeluaran'] ;
$total_keluar = $total_keluar+$jml_keluar;

$total5 = $total_masuk-$total_keluar;

     }
    
         
                              
                                    
                             

                                  
                               



?>

<!DOCTYPE html>
<html>
<head>
 <title>maribelajarcoding.com</title>
 <link rel="stylesheet" type="text/css" href="Chartjs/Chart.min.css">
 <script type="text/javascript" src="Chartjs/Chart.min.js"> </script>
 <script type="text/javascript" src="Chart.js"></script>
<script type="text/javascript" src="Chart.js/Chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap Core CSS -->
    
    <!-- Custom Fonts -->
    <link href="baru/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
    <li class="breadcrumb-item">GRAFIK</a></li>
   </ol>
</nav>

   <h1 class="page-header">GRAFIK</h1>
   <h4 class="page-header">Berdasarkan Jenis</h4>


 <div class="panel-heading">  
  <center><h1 class="page-header">PEMASUKAN</h1>
  <div style="height: auto; width: 1000px;" class="col-lg-12 col-md-12">
    <canvas id="myChart" class="chart"></canvas>
</div>

 <style type="text/css">
  body{
    font-family: roboto;
  }
 
  table{
    margin: 0px auto;
  }
  </style>

  <?php
   include 'koneksi.php';
  ?>







  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["dd", "add", "banprov", "bankeu", "dll"],
        datasets: [{
          label: 'masuk',
          data: [

        
        
           <?php  echo ($jml_dd);
         
          ?>,
           <?php   echo ($jml_add);
         
          ?>,
           <?php  echo ($jml_banprov);
          ?>,
           <?php  echo ($jml_bankeu);
         
          ?>,
           <?php  echo ($jml_dll);
         
          ?>
         

          ],
          backgroundColor: "purple", 
          borderColor: "black",
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script></center>
  <br><br>

  <center><h1>PENGELUARAN</h1>

  <div style="height: auto; width: 1000px;" >
    <canvas id="myChartt" class="chart"></canvas>
</div>

  <script>
    var ctx = document.getElementById("myChartt").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["dd", "add", "banprov", "bankeu", "dll"],
        datasets: [{
          label: 'keluar',
          data: [

        
        
           <?php  echo ($jml_ddo);
         
          ?>,
           <?php   echo ($jml_addo);
         
          ?>,
           <?php  echo ($jml_banprovo);
          ?>,
           <?php  echo ($jml_bankeuo);
         
          ?>,
           <?php  echo ($jml_dllo);
         
          ?>
         

          ],backgroundColor: "red",
          borderColor: "black",
         
         
          borderWidth: 0
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script></center>
  <br>
  <br>
  <center><h1 class="page-header">GRAFIK PERBULAN</h1>


<div style="width: 1100px;" >
 <canvas id="myCharts"></canvas>
</div>
<script>

var barChartData = {
  labels: [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember"
  ],

  datasets: [
    {
      label: "Pemasukan",
      backgroundColor: "purple",
      borderColor: "black",
      borderWidth: 1,
      data: <?php echo json_encode($jumlah_produk); ?>
    },
    {
      label: "Pengeluaran",
      backgroundColor: "red",
      borderColor: "black",
      borderWidth: 1,
      data: <?php echo json_encode($jumlah_produkk); ?>
    }
  ]
};

var chartOptions = {
  responsive: true,
  legend: {
    position: "top"
  },
  title: {
    display: true,
    text: "REUSMANA"
  },
  scales: {
    yAxes: [{
      ticks: {
        beginAtZero: true
      }
    }]
  }
}

  var ctx = document.getElementById("myCharts").getContext("2d");
  window.myBar = new Chart(ctx, {
    type: "bar",
    data: barChartData,
    options: chartOptions
  });

</script>
</center>

 

<div class="panel-footer">
    <?php
$tanggal = time () ;
//Untuk mengambil data waktu dan tanggal saat ini dari server 
$tahun= date("Y",$tanggal);
//Memformat agar hanya menampilkan tahun 4 digit angka dengan Y (kapital)
echo "<center> Reusmana_065117046 Copyright @ 2020 - " . $tahun; "</center>"
/* baris ini mencetak rentang copyright,
Anda perlu mengganti 2011 dengan tahun pertama kali website Anda diluncurkan */
?></div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>