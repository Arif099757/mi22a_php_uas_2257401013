<?php
/**
 * Nama : Arif Rahman Hakim
 * Nim  : 2257401013
 * Kelas : MI22A 
 */
?>

<?php 

    $host       = "localhost";
    $user       = "root";
    $password   = "";
    $database   = "db_mi22b";

    $koneksi = mysqli_connect($host, $user, $password, $database);
    if (mysqli_connect_errno()) {
        die("Error Koneksi : ". mysqli_connect_error());
    }

?>