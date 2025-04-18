<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
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
    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
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
    a.hapus {
      color: red;
      text-decoration: none;
    }
  </style>
</head>
<body>
<?php
include ('koneksi.php'); // Pastikan koneksi MySQL sudah ada
$db = new Database();
$kategori = $db->tampil_kategori(); 
?>

<h2>➕ Tambah Kategori</h2>
<form action="proses.php?aksi=tambah_kategori" method="POST">
  <input type="text" name="nama_kategori" required placeholder="Masukkan nama kategori">
  <button type="submit" name="tambah">Simpan</button>
</form>

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
    if (!empty($kategori)){ //mengecek apakah sebuah variabel kosong atau tidak
      foreach ($kategori as $row){
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo ($row['nama_kategori']); ?></td>

          <td>
            <a href="edit-kategori.php?id=<?php echo $row['id_kategori']; ?>"class="update">Update</a><br><br>
            <a href="proses.php?id=<?php echo $row['id_kategori']; ?>&aksi=hapus_kategori" onclick="return confirm('Apakag anda yakin ingin menghapus data ini?')" class="update">Delete</a>
          </td>
        </tr>
        <?php
      }
    } 
    
    ?>
  </tbody>
</table>

</body>
</html>
