<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Berita</title>
  <style>
    h2 {
      color: #05409e;
      font-family: Arial, sans-serif;
    }
    table {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 30px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 12px;
      border: 1px solid #ddd;
      font-family: Arial, sans-serif;
    }
    th {
      background: #05409e;
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

<?php
include ('koneksi.php');
$db = new Database();
$berita = $db->tampil_berita();
?>

<h2>📂 Daftar Berita</h2>
<table>
  <thead>
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Isi</th>
      <th>Kategori</th>
      <th>Tanggal</th>
      <th>Penulis</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach($berita as $row) {
    ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $row['judul'] ?></td>
      <td><?= $row['isi_text'] ?></td>
      <td><?= $row['nama_kategori'] ?></td>
      <td><?= $row['tanggal_terbit'] ?></td>
      <td><?= $row['penulis'] ?></td>
      <td>
        <div class="aksi">
          <a href="proses.php?id=<?= $row['id_berita'] ?>&aksi=acc_berita"
             onclick="return confirm('ACC berita ini?')" 
             class="acc">✔️</a>

          <a href="proses.php?id=<?= $row['id_berita'] ?>&aksi=tolak_berita"
             onclick="return confirm('Tolak berita ini?')"
             class="tolak">❌</a>
        </div>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>

</body>
</html>
