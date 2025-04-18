<?php
require_once ('Koneksi.php');

class Berita {
    private $db;

    function __construct() {
        $koneksi = new Berita();
        $this->db = $koneksi->conn;
    }

    function tampil_berita_per_kategori($id_kategori) {
        $sql = "SELECT * FROM berita WHERE id_kategori = ?";
        $stmt = $this->db->prepare($sql);
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
