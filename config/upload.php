<?php
require_once  "koneksi.php";
require_once  "../sesion.php";
$username = $_SESSION['username'];
$namafile = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];

if($username == ""){
    echo "tidak bisa upload file";
}else{
    move_uploaded_file($tmp_name, "../upload/".$namafile);
    $q = $database_connection->prepare("UPDATE `users` SET `gambar` = ? WHERE `username` = ?");
$q->execute(["upload/".$namafile,$username]);
header("Location: ../profile.php");
}

?>