<?php
session_start();
include "koneksi.php";
$id_user = $_POST['id_user'];
$pass = md5($_POST['paswd']);
$sql = "SELECT * FROM users WHERE id_user='$id_user' AND password='$pass'";
if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {
    $login = mysqli_query($con, $sql);
    $ketemu = mysqli_num_rows($login);

    if ($ketemu > 0) {

        $r = mysqli_fetch_array($login);

        if ($r['level'] == "Admin") {

            $_SESSION['iduser'] = $r['id_user'];
            $_SESSION['passuser'] = $r['password'];
            $_SESSION['Admin'] = $r['level'];
            echo "USER BERHASIL LOGIN<br>";
            echo "id user =", $_SESSION['iduser'], "<br>";
            echo "password=", $_SESSION['passuser'], "<br>";
            echo "Level=", $_SESSION['Admin'], "<br><br>";
            echo "<button style='text-decoration: none; margin-right: 10px'><a style='text-decoration: none;' href=logout.php>Logout&nbsp;</a></button>";
            echo "<button><a style='text-decoration: none;' href=tampil_user.php>Tampil User</a></button>";
        } elseif ($r['level'] == "Staff") {

            $_SESSION['iduser'] = $r['id_user'];
            $_SESSION['passuser'] = $r['password'];
            $_SESSION['Staff'] = $r['level'];
            echo "USER BERHASIL LOGIN<br>";
            echo "id user =", $_SESSION['iduser'], "<br>";
            echo "password=", $_SESSION['passuser'], "<br>";
            echo "Level=", $_SESSION['Staff'], "<br><br>";
            echo "<button><a style='text-decoration: none;' href=logout.php>Logout&nbsp;</a></button>";
        } else {
            echo "<center>Login gagal! username & password tidak benar<br>";
            echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>";
        }
    } else {
        echo "<center>Login gagal! username & password tidak benar<br>";
        echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>";
    }
    mysqli_close($con);
} else {
    echo "<center>Login gagal! Captcha tidak sesuai<br>";
    echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>";
}
