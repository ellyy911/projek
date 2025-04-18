-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2025 at 05:05 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pusdin_disnaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_text` text NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `id_kategori` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi_text`, `tanggal_terbit`, `penulis`, `id_kategori`) VALUES
(1, 'Catat, Ini Jenis Pelatihan Kerja Disnaker Depok Tahun 2025', 'Pelatihan kerja yang diselenggarakan Dinas Tenaga Kerja (Disnaker) Kota Depok tahun 2025 terdiri dari 13 kategori kejuruan. \r\n\r\nBelasan pelatihan akan diikuti ratusan talent atau pencari kerja (pencaker) yang ber-KTP Kota Depok. \r\n\r\nKepala Bidang Pelatihan Produktivitas dan Bina Lembaga Pelatihan Kerja Disnaker Kota Depok, Tri Astuti Yeniretnowati mengatakan, masing-masing kategori pelatihan akan diisi 20 pencaker. \r\n\r\n\"Khusus untuk pelatihan Bahasa Jepang diberikan kuota 100 pencaker,\" jelasnya kepada berita.depok.go.id, Kamis (13/03/25). \r\n\r\nDikatakannya, pencaker yang ingin mengikuti pelatihan akan dilakukan seleksi. \r\n\r\nSehingga nantinya dapat siap memasuki dunia kerja atau ingin berwiraswasta.\r\n\r\n\"Pelatihan ini tentu sangat bermanfaat untuk meningkatkan keterampilan dan siap memasuki dunia kerja atau yang ingin berusaha,\" tambahnya.\r\n\r\nAdapun bagi masyarakat dapat melakukan pendaftaran secara online, melalui https://simpel.depok.go.id. Serta, \r\n\r\nbagi yang belum memiliki AK-1 dapat mendaftar melalui website https://ayogawe.depok.go.id/daftar_pencaker. \r\n\r\nBerikut daftar pelatihan kerja Tahun 2025:\r\n\r\n1. Pelatihan Bahasa Jepang\r\n\r\n2. ⁠Pelatihan Bahasa Mandarin kerjasama dengan JGU dan Wuzi Of Technology University serta ikatan dinas di PT GNI Morowali\r\n\r\n3. ⁠Pelatihan Bahasa Mandarin untuk program magang kerja di Taiwan dan kuliah S1\r\n\r\n4. ⁠Pelatihan Barista\r\n\r\n5. ⁠Pelatihan Content Creator\r\n\r\n6. ⁠⁠Pelatihan Desain Grafis\r\n\r\n7. ⁠Pelatihan Perbengkelan Roda 2\r\n\r\n8. ⁠Pelatihan Programmer\r\n\r\n9. ⁠Pelatihan Servis AC\r\n\r\n10. ⁠Pelatihan Tata Rias Pengantin\r\n\r\n11. ⁠Pelatihan Tata Boga\r\n\r\n12. ⁠Pelatihan Menjahit \r\n\r\n13. ⁠Pelatihan Kelistrikan', '2025-04-14', 'Nabila salsabila', 4),
(2, 'Lepas Peserta Pelatihan Magang ke Jepang, Kadisnaker Depok Sampaikan Sejumlah Pesan', 'Kepala Dinas Tenaga Kerja (Kadisnaker) Kota Depok Sidik Mulyono kembali melepas dua peserta pelatihan Bahasa Jepang yang akan menjalani magang kerja ke Negeri Matahari Terbit, Rabu (09/04/25) kemarin.\r\n\r\nDua peserta tersebut akan diberangkatkan pekan ini untuk mengikuti pemagangan kerja di Jepang usai menjalani pelatihan Bahasa Jepang. \r\n\r\nDalam kesempatan tersebut, Sidik menyampaikan sejumlah pesan kepada para peserta tersebut. \r\n\r\n\"Saya tekankan agar mereka bisa memperkuat kompetensi yang dimiliki, khususnya bidang kerja yang akan dijalaninya selama magang di Jepang,\" ungkapnya kepada berita.depok.go.id, Kamis (10/04/25). \r\n\r\nLebih lanjut, Sidik juga berpesan kepada peserta pelatihan untuk belajar mengelola perencanaan dengan matang. \r\n\r\nSerta merancang bisnis yang dapat dilakukan usai mengikuti pemagangan di Negeri Sakura. \r\n\r\nLalu, lanjut Sidik, para peserta magang ini juga diingatkan untuk bisa menabung, sehingga nantinya tabungan yang dimiliki bisa menjadi modal awal bisnis mereka saat kembali ke Indonesia \r\n\r\n\"Sehingga harapannya mereka bisa memiliki modal dan membuka usaha. Serta dapat membuka lapangan pekerjaan untuk orang lain, dan berdampak pada pengurangan pengangguran di Kota Depok,\" tutupnya. (JD 02/ED 01). ', '2025-04-10', 'Dewi Pratiwi', 6);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(4, 'Pelatihan Kerjaaaa'),
(5, 'Informasi Bursa Kerja'),
(6, 'Penghargaan & Prestasi'),
(7, 'Lowongan Kerja'),
(8, 'Event & Kegiatan'),
(9, 'Kebijakan Dinas');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jabatan` varchar(100) NOT NULL,
  `jk` enum('Perempuan','Laki-laki') NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Level` enum('Admin','Owner') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `Nama`, `Jabatan`, `jk`, `Username`, `Password`, `Level`) VALUES
(8, 'Dewi Pratiwi, S.Pd', 'Penyusun Laporan Keuangan', 'Perempuan', 'DewiPratiwi12', 'dewi12', 'Admin'),
(9, 'Yudi Saputra, SE', 'Kasubag Umum dan Kepegawaian', 'Laki-laki', 'Yudisaputra7878', 'saputra78', 'Owner'),
(12, '', '', 'Laki-laki', '', '', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
