<?php
include "koneksi.php";
$sql = "select * from users order by id_user";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #Table {
            border-collapse: collapse;
            width: 100%;
        }

        #Table td,
        #Table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #Table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan User</title>
</head>

<body>
    <h2>User</h2>
    <form method=POST action=form_user.php>
        <input type=submit value='Tambah User'>
    </form>
    <table id="Table">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>NamaLengkap</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php
        $sql = "select * from users order by id_user";
        $tampil = mysqli_query($con, $sql);
        if (mysqli_num_rows($tampil) > 0) {
            $no = 1;
            while ($r = mysqli_fetch_array($tampil)) {

        ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $r['id_user']; ?></td>
                    <td><?= $r['nama_lengkap']; ?></td>
                    <td><?= $r['email']; ?></td>
                    <td><a href='hapus_user.php?id=$r[id_user]'>Hapus</a></td>
                </tr>

        <?php
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        mysqli_close($con);
        ?>
</body>

</html>