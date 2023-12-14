
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
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            text-align: center;
            color: #333;
            margin-bottom: 50px;
        }

        .container a {
            display: inline-block;
            margin-top: 50px;
            padding: 15px 25px;
            background-color: var(--brown);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .container a:hover {
            color: rgb(51,102,204);
        }

        .container table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .container th, .container td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        .container th {
            background-color: var(--orange);
            color: white;
            text-align: center;
        }

        .container tr:hover {
            background-color: #f5f5f5;
        }

        .container td img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
        }

        .container td a {
            display: inline-block;
            padding: 8px 12px;
            background-color: var(--yellow);
            color: black;
            text-decoration: none;
            border-radius: 10px;
            font-size: 14px;
            margin-right: 5px;
        }

        .container td a:hover {
            color: red;
        }

        .container td:last-child a {
            margin-right: 0;
        }
    </style>

    <title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
</head>
<body>
    <div class="container">
    <h1>Data Siswa Sekolah</h1>
    <!--a href="form_simpan.php">Tambah Data</a><br><br-->
    <table border="1" width="100%">
        <tr>
            <th>Foto</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        // Load file koneksi.php
        include "koneksi.php";

        // Buat query untuk menampilkan semua data siswa
        $sql = $pdo->prepare("SELECT * FROM siswa");
        $sql->execute(); // Eksekusi querynya
        while ($data = $sql->fetch()) { // Ambil semua data dari hasil eksekusi $sql
            echo "<tr>";
            echo "<td><img src='images/" . $data["foto"] . "' width='100' height='100'></td>";
            echo "<td>", $data["nis"], "</td>";
            echo "<td>", $data["nama"], "</td>";
            echo "<td>", $data['jenis_kelamin'], "</td>";
            echo "<td>", $data["telp"], "</td>";
            echo "<td>", $data["alamat"], "</td>";
            echo "<td><a href='form_ubah.php?id=", $data["id"], "'>Ubah</a></td>";
            echo "<td><a href='proses_hapus.php?id=", $data['id'], "'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <a href="form_simpan.php">Tambah Data</a><br><br>
    </div>
</body>
</html>
