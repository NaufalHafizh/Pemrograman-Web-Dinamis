<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .error {
            color: #FF0000;
        }

        #tableinput {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #tableinput td,
        #tableinput th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #tableinput th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>

</head>

<body>
    <?php
    // define variables and set to empty values
    $namaErr = $emailErr = $genderErr = $websiteErr = "";
    $nama = $email = $gender = $comment = $website = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) {
            $namaErr = "Nama harus diisi";
        } else {
            $nama = test_input($_POST["nama"]);
        }
        if (empty($_POST["email"])) {

            $emailErr = "Email harus diisi";
        } elseif (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {

            $email = test_input($_POST["email"]);
        } else {

            $emailErr = "Email tidak sesuai format";
        }
        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
        }
        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }
        if (empty($_POST["gender"])) {
            $genderErr = "Gender harus dipilih";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <section>
        <h2>Posting Komentar </h2>
        <p><span class="error">* Harus Diisi.</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <table>
                <tr>
                    <td>Nama:</td>
                    <td><input type="text" name="nama"><span class="error">* <?php echo $namaErr; ?></span></td>
                </tr>
                <tr>
                    <td>E-mail: </td>
                    <td><input type="text" name="email"><span class="error">* <?php echo $emailErr; ?></span></td>
                </tr>
                <tr>
                    <td>Website:</td>
                    <td><input type="text" name="website"><span class="error"><?php echo $websiteErr; ?></span></td>
                </tr>
                <tr>
                    <td>Komentar:</td>
                    <td><textarea name="comment" rows="5" cols="40"></textarea></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><input type="radio" name="gender" value="L">Laki-Laki <input type="radio" name="gender" value="P">Perempuan <span class="error">* <?php echo $genderErr; ?></span></td>
                </tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </table>
        </form>
    </section>
    <section id="tableinput">
        <h2>Data yang anda isi:</h2>
        <table>
            <tr>
                <th>Nama</th>
                <th>E-Mail</th>
                <th>Website</th>
                <th>Komentar</th>
                <th>Gender</th>
            </tr>
            <tr>
                <td> <?php echo $nama; ?> </td>
                <td> <?php echo $email; ?> </td>
                <td> <?php echo $website; ?> </td>
                <td> <?php echo $comment; ?> </td>
                <td> <?php echo $gender; ?> </td>
            </tr>
        </table>
    </section>
</body>

</html>