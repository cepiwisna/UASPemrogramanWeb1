<?php
require_once "koneksi.php";

$namalengkap = $_POST["namalengkap"];
$kelas = $_POST["kelas"];
$nohp = $_POST["nohp"];
$jeniskelamin = $_POST["jeniskelamin"];
$alamat = $_POST["alamat"];
// print_r($_POST);
// die;
if (isset($_POST['submit'])) {
    try {
$q = $database_connection ->prepare("INSERT INTO `formulir` (`id`,  `namalengkap`, `kelas`, `nohp`, `jeniskelamin`, `alamat`) VALUES (NULL, ?, ?, ?, ?, ?);");
$q->execute([ $namalengkap, $kelas, $nohp, $jeniskelamin, $alamat]);
echo "<script>
alert('Berhasil, ditambahkan');
window.location.replace('../home.php');
</script>";
} catch (PDOException $x) {
echo $x->getMessage();
}
}
?>

