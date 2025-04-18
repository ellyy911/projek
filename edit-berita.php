<?php
include ('koneksi.php');
$db = new Database;

if (!isset($_GET['id'])) {
    echo "Parameter ID tidak ditemukan di URL.";
    exit;
}

$id = $_GET['id'];
$d = $db->edit_berita($id); // mengembalikan 1 data berita (array)

if (!$d) {
    echo "Data tidak ditemukan.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <link rel="website icon" type="jpeg" href="depok.png">
  <title>Edit Berita - Pusat Data Disnaker Depok</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f7f9fc;
      padding: 40px;
    }
    h2 {
      color: #05409e;
    }
    form {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 30px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    input, select, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    button {
      background: #05409e;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>

<h2>📝 Edit Berita</h2>
<form action="proses.php?aksi=edite_berita" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id_berita" value="<?= htmlspecialchars($d['id_berita']) ?>">

  <label>Judul Berita</label>
  <input type="text" name="judul" value="<?= htmlspecialchars($d['judul']) ?>" required placeholder="Masukkan judul berita">

  <label>Isi Berita</label>
  <textarea name="isi_text" rows="5" required placeholder="Masukkan isi berita"><?= htmlspecialchars($d['isi_text']) ?></textarea>

  <label>Tanggal Terbit</label>
  <input type="date" id="tanggal_terbit" name="tanggal_terbit" value="<?= htmlspecialchars($d['tanggal_terbit']) ?>" required>

  <label>Kategori</label>
  <select name="id_kategori" required>
    <option disabled>-- Pilih Kategori --</option>
    <?php
      $kategori_list = $db->get_kategori_list();
      foreach ($kategori_list as $kategori) {
        $selected = ($kategori['id_kategori'] == $d['id_kategori']) ? 'selected' : '';
        echo "<option value='{$kategori['id_kategori']}' $selected>{$kategori['nama_kategori']}</option>";
      }
    ?>
  </select>

  <label>Penulis</label>
  <input type="text" name="penulis" value="<?= htmlspecialchars($d['penulis']) ?>" required placeholder="Masukkan penulis">

  <br><br>
  <button type="submit" name="update">Proses</button>
</form>

</body>
</html>