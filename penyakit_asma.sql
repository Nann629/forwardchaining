-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 05:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyakit_asma`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` int(11) NOT NULL,
  `kode` varchar(200) NOT NULL,
  `gejala` varchar(200) NOT NULL,
  `pertanyaan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `kode`, `gejala`, `pertanyaan`) VALUES
(1, 'G1', 'Dada terasa seperti terhimpit, semakin berat dan sering', 'Apakah anda meresa Dada terasa seperti terhimpit, semakin berat dan sering'),
(2, 'G2', 'Jantung berdebar', 'Apakah anda merasa Jantung berdebar'),
(3, 'G3', 'Jari atau bibir anak membiru', 'Apakah anda merasa Jari atau bibir anak membiru'),
(4, 'G4', 'Bronkitis yang terjadi berulang-ulang kali (sering\r\nkambuh)\r\n', 'Apakah anda merasa Bronkitis yang terjadi berulang-ulang kali (sering\r\nkambuh)\r\n'),
(5, 'G5', 'Kejang – kejang', 'Apakah anda merasa Kejang – kejang'),
(6, 'G6', 'Sulit bernafas', 'Apakah anda merasa Sulit bernafas'),
(7, 'G7', 'Muncul bunyi saat bernafas', 'Apakah anda merasa Muncul bunyi saat bernafas'),
(8, 'G8', 'Batuk yang bersifat menetap atau tak kunjung\r\nsembuh\r\n', 'Apakah anda merasa Batuk yang bersifat menetap atau tak kunjung\r\nsembuh\r\n'),
(9, 'G9', 'Saat beraktivitas, anak tampak kurang bertenaga,\r\nmudah lemas\r\n', 'Apakah anda merasa Saat beraktivitas, anak tampak kurang bertenaga,\r\nmudah lemas\r\n'),
(10, 'G10', 'Retraksi atau dada bergerak naik turun ketika\r\nbernafas\r\n', 'Apakah anda merasa Retraksi atau dada bergerak naik turun ketika\r\nbernafas\r\n'),
(11, 'G11', 'Si kecil sering merasakan sesak di dada', 'Apakah anda merasa Si kecil sering merasakan sesak di dada'),
(12, 'G12', 'Napas terengah-engah dan cepat membuat anak\r\nbicara dengan terbata-bata\r\n', 'Apakah anda merasa Napas terengah-engah dan cepat membuat anak\r\nbicara dengan terbata-bata\r\n'),
(13, 'G13', 'Mual muntah pada anak', 'Apakah anda merasa Mual muntah pada anak'),
(14, 'G14', 'Demam tinggi pada anak', 'Apakah anda merasa Demam tinggi pada anak'),
(15, 'G15', 'Gemetaran pada tubuh anak', 'Apakah anda merasa Gemetaran pada tubuh anak');

-- --------------------------------------------------------

--
-- Table structure for table `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `id` int(11) NOT NULL,
  `benar` varchar(200) DEFAULT NULL,
  `salah` varchar(200) DEFAULT NULL,
  `penyakit_id` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengetahuan`
--

INSERT INTO `pengetahuan` (`id`, `benar`, `salah`, `penyakit_id`, `gejala_id`) VALUES
(1, '14', '10', 3, 15),
(2, '13', '-', 3, 14),
(3, '12', '-', 3, 13),
(4, '11', '-', 3, 12),
(5, '-', '-', 3, 11),
(6, '9', '5', 2, 10),
(7, '8', '-', 2, 9),
(8, '7', '-', 2, 8),
(9, '6', '-', 2, 7),
(10, '-', '-', 2, 6),
(11, '4', '-', 1, 5),
(12, '3', '-', 1, 4),
(13, '2', '-', 1, 3),
(14, '1', '-', 1, 2),
(15, '-', '-', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL,
  `kode` varchar(500) NOT NULL,
  `penyakit` varchar(500) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `kode`, `penyakit`, `solusi`) VALUES
(1, 'P1', 'Asma Mengi', '1.Konsumsi obat pengontrol asma, tujuannya untuk mengurangi peradangan sehingga tidak terjadi mengi. \n2.Inhaler atau jenis obat yang dihirup. Obat ini digunakan untuk melebarkan saluran pernapasan.\n3.Kortikosteroid hirup, yang juga digunakan untuk melegakan saluran pernapasan.\n4.Kombinasi inhaler dan kortikosteroid.\n5.Hindari faktor pemicu asma, hal ini penting dilakukan agar keluhan mengi dan sesak napas pada pengidap penyakit asma tidak muncul.'),
(2, 'P2', 'Asma Patogenesis', '1.Mengenali dan menghindari pemicu asma.\n2.Mengikuti rencana penanganan asma yang dibuat bersama dokter.\n3.Mengenali serangan asma dan melakukan langkah pengobatan yang tepat.\n4.Menggunakan obat-obatan asma yang disarankan oleh dokter secara teratur.\n5.Memonitor kondisi saluran napas Anda'),
(3, 'P3', 'Asma Sensitisasi', '1.Terapi obat. Kebanyakan pengidap asma akan dianjurkan untuk menjalani pengobatan dengan obat asma, baik dalam jangka pendek atau jangka panjang. ...\n2. Terapi pernapasan. ...\n3. Terapi obat alami atau herbal. ...\n4. Terapi yoga. ...\n5.Terapi renang. ...\n6. Akupunktur.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_basispengetahuan_penyakit_idx` (`penyakit_id`),
  ADD KEY `fk_basispengetahuan_gejala1_idx` (`gejala_id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD CONSTRAINT `fk_basispengetahuan_gejala1` FOREIGN KEY (`gejala_id`) REFERENCES `gejala` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_basispengetahuan_penyakit` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
