<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form

                   error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
 $id = time();
  $kode   = $_POST['kode'];
  $keterangan     = $_POST['keterangan'];
  $tgl    = $_POST['tgl'];
  $pembuat    = $_POST['pembuat'];
  $pemasukan = $_POST['pemasukan'];
  $foto = $_FILES['foto']['name'];


//cek dulu jika ada gambar produk jalankan coding ini
if($foto != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['foto']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$foto; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'foto/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO dolar (id,kode,pembuat,keterangan,tgl,pemasukan,foto,jenis,jeniss) VALUES (".$id.",'".$kode."','".$pembuat."','".$keterangan."','".$tgl."','".$pemasukan."','".$nama_gambar_baru."', '".masuk."','".BANKEU."')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='bankeu.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='bankeu.php';</script>";
            }
} else {
   $queryy = "INSERT INTO dolar (id,kode,pembuat,keterangan,tgl,pemasukan,foto,jenis,jeniss) VALUES (".$id.",'".$kode."','".$pembuat."','".$keterangan."','".$tgl."','".$pemasukan."','".$nama_gambar_baru."', '".masuk."','".BANKEU."')";
                  $result = mysqli_query($koneksi, $queryy);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='bankeu.php';</script>";
                  }
}

 

