<?php
try {
    $koneksi = new PDO('mysql:host=localhost;dbname=keuangan', "root", "");
    echo "koneksi berhasil";
} catch (PDOExcetion $mesaage) {
    echo "koneksi gagal" . $message->getMessage();
}

$sql = "select * from dolar where ddm AND jenis='masuk'";
$query = $koneksi->query($sql);
?>

<table>
    <tr>
        <th>Kode</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>ISBN</th>
    </tr>
    <?php
    while ($baris = $query->fetch(PDO::FETCH_NUM)) {
        echo "<tr>";
        echo "<td>" . $baris[0] . "</td>";
        echo "<td>" . $baris[1] . "</td>";
        echo "<td>" . $baris[2] . "</td>";
        echo "<td>" . $baris[3] . "</td>";
        echo "</tr>";
    }
    ?>
</table>