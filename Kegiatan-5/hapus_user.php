
<?php
include "koneksi.php";

$id_user = $_GET['id_user'];

$sql_delete = mysqli_query($con, "DELETE FROM users WHERE id_user = '$id_user'");

header("Location: tampil_user.php");
?>