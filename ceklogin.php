<?php
session_start();
if(isset($_SESSION['username'])) {
    header("Location: index2.php");
    die();
}
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include 'koneksi.php';

$username=$_POST['username'];
$password=md5($_POST['password']);

$query="select * from tb_user where username='$username' and password='$password'";
$hasil=mysqli_query($koneksi, "$query");

$kode = mysqli_fetch_array($hasil);
$cek=mysqli_num_rows($hasil);

if ($cek==1){
$_SESSION['username']=$kode['username'];
$_SESSION['password']=$kode['password'];

    if ($kode) {

        echo "<script>
        alert('Selamat Datang Admin');
        document.location='index2.php';</script>";

    }    
} else { 
	?>
		<script>
		alert('Username atau Password Salah !!');
		document.location.href = 'login.php';
		</script>
	<?php 
}

?>

