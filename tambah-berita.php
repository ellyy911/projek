<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>PUSAT DATA INFORMASI DINAS TENAGA KERJA</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f7f9fc;
    }
    h2 {
      color: #05409e;
    }
    form, table {
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
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
      display: inline-block;
    }
    button:hover {
      background: #032e6c;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 10px;
      border: 1px solid #ddd;
    }
    th {
      background: #05409e;
      color: white;
    }
    .aksi a {
      margin-right: 10px;
      color: #05409e;
      text-decoration: none;
    }
    .aksi a.hapus {
      color: red;
    }
  </style>
</head>
<body>
<?php
include ('koneksi.php'); //perintah memanggil file koneksi.php
$db = new Database(); //perintah untuk membuat objek baru dari class Database
$berita = $db->tampil_berita(); //memanggil method tampil_berita() dari class Database.
?>

<h2>📝 Tambah Berita</h2>
<form action="proses.php?aksi=tambah_berita" method="POST" enctype="multipart/form-data">
  <label>Judul Berita</label>
  <input type="text" name="judul" required placeholder="Masukkan judul berita">

  <label>Isi Berita</label>
  <textarea name="isi_text" rows="5" required placeholder="Masukkan isi berita"></textarea>

  <label>Tanggal </label>
  <input type="date" id="tanggal_tebit" name="tanggal_terbit" required placeholder="Masukkan isi berita">

  <label>Kategori</label>
  <select name="id_kategori" required>
    <option disabled selected>-- Pilih Kategori --</option>
    <?php
      // Include file class database
      include_once 'koneksi.php';
      $db = new Database(); //perintah untuk membuat objek baru dari class Database
      $kategori_list = $db->get_kategori_list(); //mengambil kategori dari database melalui method get_kategori_list(), lalu menyimpangnya kedalam variabel
      foreach ($kategori_list as $kategori) { //perulangan(looping) setiap elemen didalam array $kategori_list
      echo "<option value='{$kategori['id_kategori']}'>{$kategori['nama_kategori']}</option>"; //untuk menampilkan satu item pilihan
      }
    ?>
  </select>
  <label>Penulis</label>
  <input type="text" name="penulis" required placeholder="Masukkan penulis">

  <button type="submit" name="tambah">Simpan Berita</button>

</form>

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
      foreach($berita as $row) { //perulangan(looping)
        ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?php echo ($row['judul']); ?></td>
          <td><?php echo ($row['isi_text']); ?></td>
          <td><?php echo ($row['nama_kategori']); ?></td>
          <td><?php echo ($row['tanggal_terbit']); ?></td>
          <td><?php echo ($row['penulis']); ?></td>
          <td>
            <a href="edit-berita.php?id=<?php echo $row['id_berita'] ?>" class="update">Update</a><br><br>
            <a href="proses.php?id=<?php echo $row['id_berita'] ?>&aksi=hapus_berita" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="update">Delete</a>
          </td>
        </tr>
        <?php
      
    }
    ?>
  </tbody>
  </table>
  </body>
  </table>
</html>