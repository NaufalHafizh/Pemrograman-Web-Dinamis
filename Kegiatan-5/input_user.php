
<?php
include "koneksi.php";
$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = md5($_POST['password']);
$level = "";
$sql = mysqli_query($con, "INSERT INTO users (id_user, password, nama_lengkap, email, level) VALUES ('$id_user', '$pass', '$nama','$email', '$level')");
header('location:tampil_user.php');
?>