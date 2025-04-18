<?php 
class Database{

    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $Database = "pusdin_disnaker";
    var $conn;
    function __construct(){
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->Database);
        if (mysqli_connect_errno()){
            echo "KONEKSI DATABASE GAGAL :" . mysqli_connect_error(); //fungsi dari (`.`) Operator Penggabungan string (concatenation operator) : 
                                                                     //menggabungkan dua atau lebih string menjadi satu string
        }
    }

    #######
    #LOGIN#
    #######
    function login($Username, $Password){
        session_start();//menyimpan informasi pengguna yang telah berhasil login
        $sql = "SELECT * FROM pengguna WHERE Username = ?";
        $stmt = $this->conn->prepare($sql);//
        $stmt->bind_param("s", $Username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            //cek password (diproduksi gunakan password_hash dan password_verify)
            if ($Password === $user['Password']) {
                $_SESSION['Username'] = $user['Username'];
                $_SESSION['Level'] = $user['Level'];
                
                if ($user['Level'] === "Admin") {
                    header("location: dashboard-admin.php");
                }elseif ($user['Level'] === "Owner"){
                    header("location: dashboard-owner.php");
                }
                exit();
            } else {
                return "Password Salah!";
            }
        } else {
            return "username tidak ditemukan!";
        }
    }

    ########
    #DAFTAR#
    ########
    function daftar($Nama, $jabatan, $jk, $Username, $Password, $Level){
        mysqli_query($this->conn, "INSERT INTO pengguna VALUES
        (NULL, '$Nama', '$jabatan', '$jk', '$Username', '$Password', '$Level')");
    }

    ###############
    #PROSES BERITA#
    ###############
    function tampil_berita(){
        $data = [];
        $result = $this->conn->query("SELECT * FROM berita INNER JOIN kategori on berita.id_kategori = kategori.id_kategori");
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
      
    function input_berita($judul, $isi_text, $tanggal_terbit, $penulis, $id_kategori){
        mysqli_query($this->conn, "INSERT INTO berita 
        (judul, isi_text, tanggal_terbit, penulis, id_kategori) 
        VALUES 
        ('$judul', '$isi_text', '$tanggal_terbit','$penulis', '$id_kategori')");
    }
    

    function edit_berita($id){
        $id = mysqli_real_escape_string($this->conn, $id);
        $data = mysqli_query($this->conn, "SELECT * FROM berita WHERE id_berita = '$id' LIMIT 1");
        if ($data) {
            return mysqli_fetch_assoc($data); // langsung satu array
        } else {
            echo "Error: " . mysqli_error($this->conn);
            return null;
        }
    }

    function update_berita($id_berita, $judul, $isi_text, $tanggal_terbit, $id_kategori, $penulis){
        //mencegah sql injection
        $id_berita = mysqli_real_escape_string($this->conn, $id_berita);
        $isi_text = mysqli_real_escape_string($this->conn, $isi_text);
        $tanggal_terbit = mysqli_real_escape_string($this->conn, $tanggal_terbit);
        $id_kategori = mysqli_real_escape_string($this->conn, $id_kategori);
        $penulis = mysqli_real_escape_string($this->conn, $penulis);

        $query = "UPDATE berita SET
                    judul = '$judul',
                    isi_text = '$isi_text',
                    tanggal_terbit = '$tanggal_terbit',
                    id_kategori = '$id_kategori',
                    penulis = '$penulis'
                    WHERE id_berita = '$id_berita'";

        $result = mysqli_query($this->conn, $query);
        if(!$result){
            echo "Error: " . mysqli_error($this->conn);
        }

    }

    function delete_berita($id){
        mysqli_query($this->conn, "DELETE FROM berita WHERE id_berita = '$id'");
    }

    #################
    #PROSES KATEGORI#
    #################

    function tampil_kategori(){
        $data = [];
        $result = $this->conn->query("SELECT * FROM kategori ORDER BY id_kategori ASC"); // Urutan berdasarkan ID yang pertama
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    function input_kategori($nama_kategori){
        mysqli_query($this->conn, "INSERT INTO kategori VALUES 
        (NULL, '$nama_kategori')");
    }

    function edit_kategori($id){
        $hasil = array(); //inisialisasi array
        $id = mysqli_real_escape_string($this->conn, $id); //menghindari SQL injection
        $data = mysqli_query($this->conn, "SELECT * FROM kategori WHERE id_kategori = '$id'");
        if($data){
            while($row = mysqli_fetch_array($data)){
                $hasil[] = $row;
            }
        }else{
            echo "error: ". mysqli_error($this->conn);
        }
        return $hasil;
    }

    function update_kategori($id, $nama){
        $query = "UPDATE kategori SET nama_kategori = '$nama' WHERE id_kategori = '$id'";
        return mysqli_query($this->conn, $query);
        }

    function delete_kategori($id){
        mysqli_query($this->conn, "DELETE FROM kategori WHERE id_kategori = '$id'");
    }

    function get_kategori_list() {
        $result = $this->conn->query("SELECT * FROM kategori ORDER BY id_kategori ASC");
        $kategori = [];

        while ($row = $result->fetch_assoc()) {
            $kategori[] = $row;
        }

        return $kategori;
    }

    function tampil_berita_per_kategori($id_kategori) {
        $sql = "SELECT * FROM berita WHERE id_kategori = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id_kategori);
        $stmt->execute();
        $result = $stmt->get_result();

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

}
?>