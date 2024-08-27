<?php
/**
 * Nama : Arif Rahman Hakim 
 * Nim  : 2257401013
 * Kelas : MI22A 
 */
?>

<?php 
    session_start();

    session_destroy();
    session_unset();

    header('location: login.php');
?>