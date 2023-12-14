<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="img/favicon.ico">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="style.css">

    <!--Style Tampilan-->
    <style>
        :root{
            --cream: #F6F1E9;
            --yellow: #FFD93D;
            --orange: #FF8400;
            --brown: #4F200D;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            margin: 5px;
        }

        .container h1 {
            text-align: center;
            margin-bottom: 50px;
        }

        .container form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            background-color: var(--orange);
        }

        .container table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .container td, .container th {
            padding: 10px;
        }

        .container input[type="text"],
        .container input[type="file"],
        .container textarea,
        .container input[type="button"],
        .container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        .container input[type="radio"] {
            margin-right: 5px;
        }

        .container hr {
            border-top: 5px solid var(--cream);
            margin-bottom: 15px;
        }

        .container input[type="submit"],
        .container input[type="button"] {
            background-color: var(--brown);
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            font-size: 16px;
            margin: 5px 5px;
            cursor: pointer;
            border-radius: 20px;
            width: auto; /* Change this line to auto */
        }

        .container input[type="submit"]:hover,
        .container input[type="button"]:hover {
            color: rgb(51,102,204);
        }
    </style>

    <title>Aplikasi CRUD dengan PHP</title>
</head>

<body>
    <div class="container">
    <h1>Tambah Data Siswa</h1>
    <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
        <table cellpadding="8">
            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="telp"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="foto"></td>
            </tr>
        </table>

        <hr>
            <input type="submit" value="Simpan">
            <a href="index.php"><input type="button" value="Batal"></a>
    </form>
    </div>
</body>
</html>
