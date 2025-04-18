<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <link rel="website icon" type="jpeg" href="Depok.png">
  <title>PUSAT DATA INFORMASI DINAS TENAGA KERJA</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap">
  <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Inter', sans-serif;
}

body {
  background-color: #f5f6fa;
  color: #333;
}

header {
  background-color: #fff;
  padding: 15px 40px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
  position: sticky;
  top: 0;
  z-index: 999;
  flex-wrap: wrap;
}

.logo {
  display: flex;
  align-items: center;
  font-weight: bold;
  font-size: 20px;
  color: #05409e;
}

nav {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-end;
  flex-grow: 1;
  margin-right: 20px;
  
}

nav a {
  margin: 0 10px;
  text-decoration: none;
  color: #000;
  font-weight: 500;
  padding: 8px 0;
  transition: all 0.3s;
  border-bottom: 1px solid rgba(5, 64, 158, 0);
}

nav a:hover {
  color: #05409e;
  border-bottom: 1px solid #05409e;
}

.login-btn {
  background-color: #05409e;
  color: white;
  padding: 8px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-weight: 500;
}

.login-btn a {
  color: white;
  text-decoration: none;
}

.container {
  padding: 40px;
}

.card {
  background-color: white;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.card h2 {
  font-size: 20px;
  margin-bottom: 15px;
}

.card p {
  line-height: 1.7;
  color: #555;
}

.footer {
  background-color: #f0f0f0;
  padding: 30px 40px;
  margin-top: 40px;
}

.footer-content {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
}

.footer-logo img {
  height: 195px;
  margin-right: 20px;
  flex-shrink: 0;
}

.footer-text h2 {
  margin-bottom: 8px;
  color: #05409e;
  font-size: 22px;
}

.footer-text p {
  color: #333;
  line-height: 1.6;
  margin-right: 850px;
}

.footer-pusdin img {
  height: 200px;
  margin-left: auto;
  flex-shrink: 0;
}

/* ✅ Tambahan Responsif */
@media (max-width: 1024px) {
  nav {
    justify-content: center;
    margin: 10px 0;
    
  }

  nav a {
    margin: 8px;
  }

  .login-btn {
    margin-top: 10px;
  }

  .footer-content {
    flex-direction: column;
    text-align: center;
  }

  .footer-logo img,
  .footer-pusdin img {
    margin: 20px 0;
  }

}

@media (max-width: 600px) {
  header {
    padding: 10px 20px;
  }

  nav a {
    font-size: 14px;
    margin: 5px;
  }

  .login-btn {
    padding: 6px 15px;
    font-size: 14px;
  }

  .card {
    padding: 50px;
  }

  .container {
    padding: 50px;
  }
}
</style>


</head>

<body>

  <header>
    <div class="logo">
      <img src="Depok.png" alt="Logo" height="100" style="margin-right:10px;">
      Dinas Tenaga Kerja
    </div>
    <nav>
      <a href="?page=Struktur">Struktur Organisasi</a>
      <a href="?page=Bidang disnaker">Bidang</a>
      <a href="?page=Tentang">Tentang</a>
      <a href="?page=Bidang Kerja">Informasi </a>
      <a href="?page=Pelatihan">Pelatihan Kerja</a>
      <a href="?page=Berita">Berita</a>
      <!-- <a href="#">Regulasi SDI</a> -->
    </nav>
    <button class="login-btn">
      <a href="login.php" style="color: white; text-decoration: none;">Login</a>
    </button>
  </header>
  <div class="card">
    <div class="table-container">
      <div class="table-actions"></div>
      <div class="table-container">
        <?php
        // Check if the 'page' parameter is set in the URL
        if (isset($_GET['page'])) {
          switch ($_GET['page']) {
            case 'Login':
              include 'login.php'; // Include the table from data-amil.php
              break;
            case 'Bidang disnaker':
              include 'bidang.php'; // Include the table from data-muzakki.php
              break;
            case 'Tentang':
              include 'tentang.php'; // Include the table from data-zakat.php
              break;
            case 'Pelatihan':
              include 'Pelatihan.php'; // Include the table from data-pembayaran.php
              break;
            case 'Bidang Kerja':
              include 'bidang-kerja.php'; // Include the table from data-penerima.php
              break;
            case 'Berita':
              include 'data-berita.php'; // Include the table from data-penerima.php
              break;  
              case 'Struktur':
                include 'struktur.php'; // Include the table from data-penerima.php
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

  <!-- <div class="container">
  <div class="tentang-header">
    🏠 Tentang
  </div>  -->


  <footer class="footer">
  <div class="footer-content">
    <div class="footer-logo">
      <img src="Depok.png" alt="Logo Depok">
    </div>
    <div class="footer-text">
      <h2>DINAS TENAGA KERJA</h2>
      <p>
        Gedung Baleka II Lantai 08, Jl. Margonda Raya No.54, Depok<br>
        Email: disnaker@depok.go.id<br>
        Telp: (021) 7783-XXXX
      </p>
    </div>
  </div>
  </div>
</footer>

</body>
</html>