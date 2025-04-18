<?php
include ('koneksi.php');

$db = new Database();  // koneksi OOP
$conn = $db->conn;

// ambil kategori dari database
$query = mysqli_query($conn, "SELECT * FROM kategori ORDER BY id_kategori ASC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Menu Kategori Disnaker</title>
  <style>
    .navbar {
      display: flex;
      background-color: #fff;
      padding: 10px 20px;
      border-bottom: 2px solid #ddd;
    }
    .navbar a {
      text-decoration: none;
      color: #05409e;
      font-weight: bold;
      margin: 0 15px;
    }
    .navbar a:hover {
      color: #05409e;
    }
    .headline {
      background: #05409e;
      color: #fff;
      padding: 10px 20px;
      display: flex;
      align-items: center;
      border-radius: 0 0 10px 10px;
      margin-top: 20px;
    }
    .headline span {
      background: #fff;
      color: #05409e;
      padding: 5px 10px;
      font-weight: bold;
      border-radius: 20px;
      margin-right: 15px;
    }
  </style>
</head>
<body>

<div class="navbar">
  <?php
  while ($data = mysqli_fetch_array($query)) {
      echo '<a href="data-kategori.php?id_kategori='.$data['id_kategori'].'">'.$data['nama_kategori'].'</a>';
  }
  ?>
</div>

<div style="padding:20px;">
  <?php
  $id_kategori = isset($_GET['id_kategori']) ? (int)$_GET['id_kategori'] : 0;

  $berita = new Database(); // panggil class Berita
  $data_berita = $berita->tampil_berita_per_kategori($id_kategori);

  if (!empty($data_berita)) {
      foreach ($data_berita as $data) {
          echo "<h3>".$data['judul']."</h3>";
          echo "<p>".$data['isi_text']."</p>";
          echo "<hr>";
      }
  } else {
      echo "<p>Belum ada berita untuk kategori ini.</p>";
  }
  ?>
</div>

</body>
</html>
