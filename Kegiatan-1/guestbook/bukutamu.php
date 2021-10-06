<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div align="center"><strong>
            <font size="6" face="Courier New, Courier,mono">BUKU
                TAMU </font>
        </strong></div>
    <form name="form1" method="post" action="proses.php">
        <table width="58%" border="0" align="center">
            <tr>
                <td>Nama Lengkap</td>
                <td><input name="nama" type="text" id="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input name="alamat" type="text" id="alamat"></td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td><input name="email" type="text" id="email"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><select name="status" id="status">
                        <option>Menikah</option>
                        <option>Single</option>
                    </select></td>
            </tr>
            <tr>
                <td>Komentar</td>
                <td><textarea name="komentar" id="komentar"></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
                </td>
            </tr>
        </table>
    </form>
    <div align="center"><strong><a href="lihat.php">::Lihat Buku Tamu::</a></strong></div>
</body>

</html>