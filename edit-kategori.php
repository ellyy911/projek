<?php
include ('koneksi.php'); // mengikut sertakan file koneksi.php
$db = new Database(); // membuat instance dari class database
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <link rel="website icon" type="jpeg" href="depok.png">
  <title>PUSAT DATA INFORMASI DINAS TENAGA KERJA</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f9fc;
    }
    h2 {
      color: #05409e;
    }
    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 30px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      width: fit-content;
    }
    input[type="text"] {
      padding: 10px;
      width: 300px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      padding: 10px 20px;
      background-color: #05409e;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-left: 10px;
    }
  </style>
</head>
<body>

<?php
foreach($db->edit_kategori($_GET['id']) as $d){
?>
<h2>✏️ Edit Kategori</h2>
<form action="proses.php?aksi=edite_kategori" method="POST">
<input type="hidden" name="id_kategori" value="<?= $d['id_kategori'] ?>">

  
  <label>Nama Kategori:</label><br>
  <input type="text" name="nama_kategori" value="<?= $d['nama_kategori'] ?>" required>
  <button type="submit">Simpan</button>
</form>
<?php } ?>

</body>
</html>
