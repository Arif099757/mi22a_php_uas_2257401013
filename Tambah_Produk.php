<?php
/**
 * Nama : Arif Rahman Hakim
 * Nim  : 2257401013
 * Kelas : MI22A 
 */
?>


<form action="" method="post">
    <h2>Form Tambah Produk</h2>

    <label for="">Kode Produk:</label>
    <input type="Produk" id="Produk" name="Produk" ><br><br>
    <br>
    <label for="">Katagori:</label>
    <input type="Katagori" id="Katagori" name="Katagori" ><br><br>
    <br>
    <label for="">Dekripsi:</label>
    <input type="Dekripsi" id="Dekripsi" name="Dekripsi" ><br><br>
    <br>
    <label for="imageUpload">Gambar:</label>
    <input type="file" id="imageUpload" name="imageUpload" accept="image/*"><br><br>


    <br><br>

    <button type="submit" name="submit">Simpan</button>
    <a href="Produk.php">Kembali</a>

</form>

<?php 

    if (isset($_POST['submit'])) {

        include 'koneksi.php';

        $nama = $_POST['name'];

        $sql = "INSERT INTO Produk (name) VALUES ('$nama');";
        $query = mysqli_query($koneksi, $sql);

        if (!$query) {
            $_SESSION['error'] = "Gagal tambah produk";
            header('location: Tambah_Produk.php');
        }

        $_SESSION['success'] = "Berhasil tambah Produk";
        header('location: Produk.php'); // berpindah ke halaman Produk.php

    }

?>
