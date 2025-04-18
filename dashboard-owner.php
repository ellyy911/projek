<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="website icon" type="jpeg" href="depok.png">
    <title>PUSAT DATA INFORMASI DINAS TENAGA KERJA</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}
.sidebar {
    width: 250px;
    background-color: #343a40;
    color: #fff;
    position: fixed;
    height: 100%;
    padding-top: 20px;
    box-shadow: 6px 6px 5px rgba(0, 0, 0, 0.5);
}
.sidebar img {
    display: block;
    margin: 0 auto 10px;
}
.sidebar h2 {
    text-align: center;
    margin-bottom: 30px;
}
.sidebar ul {
    list-style-type: none;
    padding: 0;
}
.sidebar a {
    display: block;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
}
.sidebar a:hover {
    background-color: #495057;
}
.content {
    margin-left: 250px;
    padding: 20px;
}
.header {
    background-color: #05409e;
    color: #fff;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 6px 6px 5px rgba(0, 0, 0, 0.5);
}
.header .user-info {
    display: flex;
    align-items: center;
}
.card {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(134, 158, 236, 0.1);
}
.table-container {
    overflow-x: auto;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}
table, th, td {
    border: 1px solid #ddd;
}
th, td {
    padding: 10px;
    text-align: left;
}
th {
    background-color: #f8f9fa;
}
.footer {
    margin-top: 20px;
    text-align: center;
    color: #6c757d;
}
.table-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
}
.table-actions input {
    padding: 5px;
    border: 1px solid #ddd;
    border-radius: 5px;
}
.table-actions .icons i {
    margin-left: 10px;
    cursor: pointer;
}
.table-actions .icons i:hover {
    color: #007bff;
}
    </style>
    <link rel="website icon" type="jpeg" href="logo-removebg.png">
    <style>
        .profile img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body>
  <div class="sidebar">
      <img alt="User profile picture" height="150" src="depok.png" width="150">
      <ul>
          <li><a href="?page=Berita"><i class="fas fa-user"></i> Informasi Berita</a></li>
          <li><a href="?page=Kategori"><i class="fas fa-users"></i> Daftar kategori</a></li>
          <li><a href="?page=LOGOUT"><i class="fas fas-hand-holding-usd"></i>LOGOUT</a></li>

      </ul>
  </div>
  <div class="content">
      <div class="header">
        <?php if ($_SESSION['Level'] === "Owner"): ?>
            <div class="logo">
              <h1>Dinas Tenaga Kerja Kota Depok</h1>
          </div>
  
          <div class="user-info">
          <div class="profile">
            <img src="admins.png" alt="Foto Profil">
            </div>
              <span>&nbsp;<?= htmlspecialchars($_SESSION['Username']); ?></span>
          </div>
        <!-- <a href="logout.php">Logout</a> -->
    <?php else: ?>
        <div class="logo">
              <h1>Dinas Tenaga Kerja Kota Depok</h1>
          </div>
  
          <div class="user-info">
          <div class="profile">
            <img src="admins.png" alt="Foto Profil">
            </div>
              <span>&nbsp;<?php echo ($_SESSION['Username']); ?></span>
          </div>
    <?php endif; ?>
  
      </div>
      <div class="card">
          <div class="table-container">
              <div class="table-actions"></div>
              <div class="table-container">
                <?php
              // Check if the 'page' parameter is set in the URL
              if (isset($_GET['page'])) {
                  switch ($_GET['page']) {
                      case 'Berita':
                          include 'berita.php'; // Include the table from berita.php
                          break;
                      case 'Kategori':
                          include 'kategori.php'; // Include the table from kategori.php
                          break;
                          case 'LOGOUT':
                            include 'logout.php'; // Include the table from data-penerima.php
                            break;
                      default:
                          echo "<p>Pilih tabel untuk ditampilkan.</p>";
                          break;
                  }
              } else {
                
                
              }
              ?>
          </div>
                  <div class="footer">
                      APLIKASI PUSAT DATA INFORMASI DINAS TENAGA KERJA
                  </div>
              </div>
          </div>
      </div>
</body>
</html>
