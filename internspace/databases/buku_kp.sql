-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2019 at 08:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `perguruan_tinggi` varchar(255) NOT NULL,
  `jurusan_angkatan` varchar(255) NOT NULL,
  `bagian_divisi` varchar(255) NOT NULL,
  `tugas_pekerjaan` varchar(255) NOT NULL,
  `socmed` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama_lengkap`, `nim`, `perguruan_tinggi`, `jurusan_angkatan`, `bagian_divisi`, `tugas_pekerjaan`, `socmed`, `foto`) VALUES
(14, 'James', 'Hua', 'Hua', 'asdasdasdasd', 'Divisi Information Technology', 'asdasdasd', 'ASDAS', 'James.jpg'),
(15, 'Ujang', 'asdasd', 'asdasd', 'asdasd', 'Divisi Information Technology', 'asdasd', 'asdasd', 'Ujang.jpg'),
(20, 'Hardiansyah Shidek', '1301164097', 'Telkom University', 'S1 Informatika / 2016', 'Divisi Information Technology', 'Buat web', 'Line: shidek24', 'Hardiansyah Shidek.jpg'),
(21, 'Hompimpa', '1409182321', 'ITB', 'S1 Teknik Geologi', 'Divisi Information Technology', 'Nyari batu', 'hehe', 'Hompimpa.jpg'),
(22, 'Gareth Bale', '1231324223', 'Oxford', 'Bachelor of Injury', 'EPD', 'Moan', 'injurieesss', 'Gareth Bale.jpg'),
(24, 'Neymar Jr.', '2131231231', 'Santos', 'D3 Diving', 'Human Capital Information System', 'Dive', 'dvee', 'Neymar Jr..png'),
(25, 'Jamal Wisaksono', '1301192837', 'Telkom University', 'S1 Informatika / 2016', 'Human Capital Information System', 'Main Tenis Meja', 'jamal', 'Jamal Wisaksono.jpg'),
(26, 'Mobil', '1320922213', 'Oxford', 'Bachelor of Injury', 'EPD', 'Gambar', 'Facebook : Mobil', 'Mobil.png'),
(27, 'Jack', '1231234122', 'Telkom University', 'S1 Informatika / 2016', 'Divisi Information Technology', 'tidur', 'ASDAS', 'Jack.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
