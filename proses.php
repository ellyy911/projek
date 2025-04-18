<?php
include ('koneksi.php');    // Menghubungkan ke file koneksi.php
$proses = new Database;   // Membuat instance dari kelas database

$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : ''; // Mendapatkan aksi dari URL

// Handling setiap aksi berdasarkan nilai dari parameter aksi
if ($aksi == "loginn") {
    $proses->login(
        $_POST["user"], 
        $_POST["pass"]
    );
}

else if ($aksi == "daftarr") { // Mengecek apakah nilai dari variabel $aksi adalah "daftar", maka blok kode akan dieksekusi
    $proses->daftar( // Memanggil method 'daftar' dari objek $proses, untuk memproses data pendaftaran
     $nama    = $_POST['Nama'],         // Mengambil input 'Nama' dari form dan menyimpannya ke variabel $nama
     $jabatan = $_POST['Jabatan'],      // Mengambil input 'Jabatan' dari form dan menyimpannya ke variabel $jabatan
     $jk      = $_POST['jk'],           // Mengambil input 'jk' dari form dan menyimpannya ke variabel $jk
     $user    = $_POST['Username'],     // Mengambil input 'Username' dari form dan menyimpannya ke variabel $user     
     $pass    = $_POST['Password'],     // Mengambil input 'Password' dari form dan menyimpannya ke variabel $pass
     $level   = $_POST['Level']         // Mengambil input 'Level' dari form dan menyimpannya ke variabel $level
    );
        header("location:login.php"); // Mengarahkan pengguna ke halaman login.php

} 

else if ($aksi == "tambah_berita"){
    $judul = $_POST['judul'];
    $isi_text = $_POST['isi_text'];
    $tanggal_terbit = $_POST['tanggal_terbit'];
    $penulis = $_POST['penulis'];
    $id_kategori = $_POST['id_kategori'];
    
    $proses->input_berita($judul, $isi_text, $tanggal_terbit, $penulis, $id_kategori);
            header("location:dashboard-admin.php?page=Berita");
}


else if ($aksi == "edite_berita"){
    $id_berita = $_POST['id_berita'];
    $judul = $_POST['judul'];
    $isi_text = $_POST['isi_text'];
    $tanggal_terbit = $_POST['tanggal_terbit'];
    $id_kategori = $_POST['id_kategori'];
    $penulis = $_POST['penulis'];
            $proses->update_berita($id_berita, $judul, $isi_text, $tanggal_terbit, $id_kategori, $penulis);
            header("location:dashboard-admin.php?page=Berita");
}

else if ($aksi == "hapus_berita"){
    $proses->delete_berita($_GET['id']);
    header("location:dashboard-berita.php?page=Berita");
}

#################
#proses kategori#
#################
else if ($aksi == "tambah_kategori"){
    $proses->input_kategori(
        $nama_kategori = $_POST['nama_kategori']
    );
    header("location:dashboard-admin.php?page=kategori");
}

elseif ($_GET['aksi'] == "edite_kategori") {
    $id = isset($_POST['id_kategori']) ? $_POST['id_kategori'] : '';
    $nama = isset($_POST['nama_kategori']) ? $_POST['nama_kategori'] : '';

    if (!empty($id) && !empty($nama)) {
        $proses->update_kategori($id, $nama);
        header("location:dashboard-admin.php?page=Kategori");
    } else {
        echo "ID atau Nama Kategori kosong.";
    }
}


else if ($aksi == "hapus_kategori"){
    $proses->delete_kategori($_GET['id']);
    header("location:dashboard-admin.php?page=Kategori");
}


else if ($_GET['aksi'] == 'acc_berita') {
    // update status berita jadi 'ACC' di database
} elseif ($_GET['aksi'] == 'tolak_berita') {
    // update status berita jadi 'Ditolak' di database
}


if ($_GET['aksi'] == 'acc_kategori') {
    $id = $_GET['id'];
    mysqli_query($db->conn, "UPDATE kategori SET status='acc' WHERE id_kategori='$id'");
    header("Location: kategori.php");
}

if ($_GET['aksi'] == 'tolak_kategori') {
    $id = $_GET['id'];
    mysqli_query($db->conn, "UPDATE kategori SET status='tolak' WHERE id_kategori='$id'");
    header("Location: kategori.php");
}





?>
