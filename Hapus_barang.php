<?php
/**
 * Nama : Arif Rahman Hakim
 * Nim  : 2257401013
 * Kelas : MI22A 
 */
?>

<?php include 'cek_session.php'; ?>

<?php 

    $id = $_GET['id'];

    include 'koneksi.php';

    $sql = "DELETE FROM barang WHERE id = '$id';";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        $_SESSION['success'] = "Berhasil hapus barang";
        header('location: barang.php');  // pindah ke halaman barang.php
    } else {
        $_SESSION['error'] = "Gagal hapus barang";
        header('location: barang.php');  
    }

?>