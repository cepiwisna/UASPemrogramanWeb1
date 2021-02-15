<?php
require_once "koneksi.php";
$username = $_POST["username"];
$email= $_POST["email"];


$q = $database_connection ->prepare ("UPDATE `users` SET `username` = ?, `email` = ? WHERE `users`.`username` = ?;");
$q->execute ([$username, $email, $username]);
header("Location: ../profile.php");
?>