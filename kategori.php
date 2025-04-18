<?php
include ('koneksi.php'); // Panggil koneksi
$db = new Database();
$kategori = $db->tampil_kategori();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Kategori</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f9fc;
    }
    h2 {
      color: #05409e;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      margin-bottom: 30px;
    }
    th, td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: left;
      
    }
    th {
      background-color: #05409e;
      color: white;
    }
    .aksi {
      display: flex;
      justify-content: center;
      gap: 10px;
    }
    .aksi a {
      font-size: 22px;
      text-decoration: none;
      padding: 6px 10px;
      border-radius: 5px;
      display: inline-block;
      transition: 0.3s;
    }
    .aksi a.acc {
      background-color:rgb(148, 234, 168);
      color: white;
    }
    .aksi a.acc:hover {
      background-color:rgb(90, 177, 107);
    }
    .aksi a.tolak {
      background-color:rgb(235, 151, 159);
      color: white;
    }
    .aksi a.tolak:hover {
      background-color:rgb(197, 112, 121);
    }
  </style>
</head>
<body>

<h2>📂 Daftar Kategori</h2>

<table>
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Kategori</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    if (!empty($kategori)) {
      foreach ($kategori as $row) {
        ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $row['nama_kategori'] ?></td>
          <td class="aksi">
            <a href="proses.php?id=<?= $row['id_kategori'] ?>&aksi=acc_kategori" 
               onclick="return confirm('ACC kategori ini?')" 
               class="acc">✔️</a>

            <a href="proses.php?id=<?= $row['id_kategori'] ?>&aksi=tolak_kategori" 
               onclick="return confirm('Tolak kategori ini?')" 
               class="tolak">❌</a>
          </td>
        </tr>
        <?php
      }
    } else {
      echo "<tr><td colspan='3' style='text-align:center;'>Belum ada data kategori</td></tr>";
    }
    ?>
  </tbody>
</table>

</body>
</html>
