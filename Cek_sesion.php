<?php
/**
 * Nama : Arif Rahman Hakim
 * Nim  : 2257401013
 * Kelas : MI22A 
 */
?>
<?php 
    session_start();
    if (!isset($_SESSION['user'])) {
        $_SESSION['error'] = "Login dahulu";
        header('location: login.php');
    }
?>