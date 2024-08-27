<?php
/**
 * Nama : Arif Rahman Hakim
 * Nim  : 2257401013
 * Kelas : MI22A 
 */
?>
<h3 style="text-align: center; font-size: 24px;">Selamat Datang Bapak</h3>
<p>
    <?php 
        if (isset($_SESSION['error'])) {
            echo "<span style='color:#811a1a'>".$_SESSION['error']."</label>";
            unset($_SESSION['error']);
        }

        if (isset($_SESSION['success'])) {
            echo "<span style='color:green'>".$_SESSION['success']."</label>";
            unset($_SESSION['success']);
        }
    ?>
</p>

<style>
  table {
    margin: auto;
    border-collapse: collapse;
    width: 40%;
  }

  th, td {
    text-align: center; /* Teks berada di tengah secara horizontal */
    vertical-align: middle; /* Teks berada di tengah secara vertikal */
    padding: 15px; /* Menambah ruang di sekitar teks */
    border: 1px solid #ddd; /* Garis batas sel */
  }

  th {
    background-color: #f2f2f2; /* Warna latar belakang untuk header tabel */
    font-weight: bold; /* Membuat teks header tebal */
  }

  tr:nth-child(even) {
    background-color: #f9f9f9; /* Warna latar belakang untuk baris genap */
  }

  tr:nth-child(odd) {
    background-color: #ffffff; /* Warna latar belakang untuk baris ganjil */
  }
</style>

<div style="margin-bottom: 10px;">
    <a href="Tambah_Produk.php" >Tambah Produk</a>
    <br>
    <a href="logout.php">Logout</a>
</div>

<table>
  <tr>
    <th>Kode Produk</th>
    <th>Nama Produk</th>
    <th>Katagori</th>
    <th>Aksi</th>
  </tr>
  <tr>
    <th>P0001</th>
    <th>Helm</th>
    <th>Aksesoris</th>
    <th>
    <a href="hapus_barang.php?id=<?php echo $row['id']; ?>">Hapus</a>
    <a href="Edit_Produk.php?id=<?php echo $row['id']; ?>">Edit</a>
    </th>
  </tr>
  <tr>
    <th>P0002</th>
    <th>Sarung Tangan </th>
    <th>Aksesoris</th>
    <th>
    <a href="hapus_barang.php?id=<?php echo $row['id']; ?>">Hapus</a>
    <a href="Edit_Produk.php?id=<?php echo $row['id']; ?>">Edit</a>
    </th>
  </tr>
  <tr>
    <th>P0003</th>
    <th>Oli Metic</th>
    <th>Aksesoris</th>
    <th>
    <a href="hapus_barang.php?id=<?php echo $row['id']; ?>">Hapus</a>
    <a href="Edit_Produk.php?id=<?php echo $row['id']; ?>">Edit</a>
    </th>
  </tr>
</table>