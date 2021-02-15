<!-- PHP -->
<!-- Need Koneksi php -->
<?php
require_once 'config/koneksi.php';
// coba
try{
    $sql = 'SELECT * FROM `data_pendaftar` ORDER BY `nama_depan` ASC';

    $q = $database_connection ->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    die("Tidak bisa connect ke database $dbname :" . $e->getMessage());
}
?>