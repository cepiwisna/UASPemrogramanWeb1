<!-- PHP -->
<!-- data akses Mysql -->
<?php
    $database_hostname = 'localhost';
    $database_username = 'root';
    $database_password = '';
    $database_name     = 'pram';
// coba
    try{
        $database_connection = new PDO("mysql:host=$database_hostname;dbname=$database_name",
        $database_username, $database_password);
        $cek = "koneksi Berhasil";
    }catch(PDOExtension $x){
        die($x->getMessage());
    }