<?php
require_once "koneksi.php";


$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$q = $database_connection ->prepare("INSERT INTO `users` (`id`, `username`, `email`,  `password`) VALUES (NULL, ?, ?,  SHA1(?));");
$q->execute([ $username, $email, $password]);
header("Location: ../login.php");
?>