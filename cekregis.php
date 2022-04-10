<?php include "koneksi.php"; 
$username = addslashes(strip_tags ($_POST['username'])); 
$password = addslashes(strip_tags ($_POST['password'])); 
$confirm = addslashes(strip_tags ($_POST['confirm'])); //script ini untuk mengecek apakah form sudah terisi semua 
if ($username&&$password&&$confirm) { //berfunsgi untuk mengecek form tidak boleh lebih dari 10 
  if (strlen($username) > 10){

   echo '<script language="javascript">
              alert ("username tidak boleh lebih dari 10 karakter");
              window.location="register.php";
              </script>';
}
else {
    //password harus 6-25 karakter
    if (strlen($password) > 25 || strlen($confirm) < 5){

   echo '<script language="javascript">
              alert ("Password harus antara 5-25 karakter");
              window.location="register.php";
              </script>';
    }
    else {
    //untuk mengecek apakah form password dan form konfirmasi password sudah sama
        if ($password == $confirm){
            $sql_get = mysqli_query ($koneksi, "SELECT * FROM tb_user WHERE username = '$username'");
            $num_row = mysqli_num_rows($sql_get);
        //fungsi script ini adalah untuk mengecek ketersediaan username, jika tidak tersedia maka program akan berjalan
            if ($num_row ==0) {
                $password = md5($password);
                $confirm = md5($confirm);
                $sql_insert = mysqli_query($koneksi, "INSERT INTO tb_user VALUES ('','$username','$password','$confirm')");

                echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="login.php";
              </script>';
            }
            else {
               echo '<script language="javascript">
              alert ("username sudah terdaftar!");
              window.location="register.php";
              </script>';

            }
        }   else {
          echo '<script language="javascript">
              alert ("Password yang kamu masukan tidak sama!");
              window.location="register.php";
              </script>';
            

            }
        }
    }
} else {
   echo '<script language="javascript">
              alert ("Tolong penuhi form pendaftaran!");
              window.location="register.php";
              </script>';
}
?>