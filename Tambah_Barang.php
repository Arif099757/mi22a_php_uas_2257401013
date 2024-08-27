<?php
/**
 * Nama : Arif Rahman Hakim 
 * Nim  : 2257401013
 * Kelas : MI22A 
 */
?>

<form action="" method="post">
    <h2>Form Tambah Katagori</h2>

    Nama Katagori <br>
    <input type="text" name="name">

    <br><br>

    <button type="submit" name="submit">Simpan</button>
    <a href="Katagori.php">Kembali</a>

</form>

<?php 

    if (isset($_POST['submit'])) {

        include 'koneksi.php';

        $nama = $_POST['name'];

        $sql = "INSERT INTO Katagori (name) VALUES ('$nama');";
        $query = mysqli_query($koneksi, $sql);

        if (!$query) {
            $_SESSION['error'] = "Gagal tambah barang";
            header('location: Tambah_Katagori.php');
        }

        $_SESSION['success'] = "Berhasil tambah barang";
        header('location: Katagori.php'); // berpindah ke halaman Katagori.php

    }

?>
