<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="icon" href="img/favicon.ico">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

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
            margin: 20 auto;
            background-color: var(--orange);
            padding: 20px;
            border-radius: 8px;
        }

        .container table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .container td {
            padding: 10px;
        }

        .container input[type="text"],
        .container textarea,
        .container input[type="file"],
        .container input[type="button"],
        .container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }

        .container hr {
            border-top: 5px solid var(--cream);
            margin-bottom: 15px;
        }

        .container input[type="radio"] {
            margin-right: 5px;
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
            width: auto;
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
    <h1>Ubah Data Siswa</h1>
    <?php
    // Load file koneksi.php
    include "koneksi.php";
    
    // Ambil data NIS yang dikirim oleh index.php melalui URL.
    $id = $_GET['id'];
    
    // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
    $sql = $pdo->prepare("SELECT * FROM siswa WHERE id = :id");
    $sql->bindParam(':id', $id);
    $sql->execute(); // Eksekusi query
    $data = $sql->fetch(); // Ambil semua data dari hasil eksekusi $sql
    ?>
    <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
        <table cellpadding="8">
            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis" value="<?php echo $data["nis"]; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data["nama"]; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($data['jenis_kelamin'] == "Laki-laki") ? 'checked="checked"' : ''; ?>> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($data['jenis_kelamin'] == "Perempuan") ? 'checked="checked"' : ''; ?>> Perempuan
                </td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="telp" value="<?php echo $data['telp']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>
                    <input type="file" name="foto">
                </td>
            </tr>
        </table>
        <hr>
        <input type="submit" value="Ubah">
        <a href="index.php"><input type="button" value="Batal"></a>
    </form>
    </div>
</body>
</html>
