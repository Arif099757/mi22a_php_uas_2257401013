<?php
/**
 * Nama : Arif Rahman Hakim 
 * Nim  : 2257401013
 * Kelas : MI22A 
 */
?>

<style>
    table {
        width: 500px;
    }
</style>
<!-- Navigasi -->
<div class="navbar">
<ul>
      <li><a href="index.php">Beranda </a></li>
      <li><a href="Produk.php"> Produk</a></li>
      <li><a href="Katagori.php"> Katagori</a></li>
      <li><a href="User.php">User</a></li>
      <li><a href="logout.php">Keluar</a></li>
      
    </div>
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
    background color: greenyellow;
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

<table>
  <tr>
    <th>Produk</th>
    <th>Katagori</th>
    <th>User</th>
  </tr>
  <tr>
    <td>17</td>
    <td>5</td>
    <td>2</td>
  
  <?php   
        include 'koneksi.php';

        $sql = "SELECT id,name FROM barang";
        $query = mysqli_query($koneksi, $sql);
    ?>
       
    

</table>