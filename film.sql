-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2023 at 02:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `film`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_film`
--

CREATE TABLE `tbl_film` (
  `id_film` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `nama_film` varchar(20) NOT NULL,
  `tahun` year(4) NOT NULL,
  `rating` decimal(10,0) NOT NULL,
  `tautan` varchar(100) NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_film`
--

INSERT INTO `tbl_film` (`id_film`, `id_kategori`, `nama_film`, `tahun`, `rating`, `tautan`, `gambar`) VALUES
(20, 10, 'Avenger', 2020, '4', '', 0x30383034323032303130343631322e706e67),
(21, 12, 'Sonic', 2017, '4', '', 0x30383034323032303137333533372e706e67),
(22, 8, 'The Conjuring', 2018, '4', '', 0x30383034323032303136303331312e706e67),
(23, 11, 'Titanic', 2016, '4', '', 0x30383034323032303136333431342e706e67),
(25, 10, 'Spiderman', 2018, '4', '', 0x30383034323032303135343635352e706e67),
(26, 12, 'Frozen', 2016, '4', '', 0x30383034323032303137333734332e706e67),
(27, 9, 'Fast & Furious 7', 2019, '4', '', 0x30383034323032303136303531392e706e67),
(28, 11, 'Dilan 1990', 2017, '4', '', 0x646f776e6c6f61642e6a7067),
(29, 11, 'Habibie & Ainun', 2016, '4', '', 0x636f6e746f682d706f737465722d66696c6d2d33332e6a7067),
(31, 12, 'One Piece', 2021, '4', '', 0x436f6e746f682d506f737465722d46696c6d2d4b617274756e2d4f6e652d50696563652d46696c6d2d476f6c642d323031362e6a7067),
(32, 10, 'Captain Marvel', 2018, '4', '', 0x436f6e746f682d506f737465722d46696c6d2d5465726261696b2d4361707461696e2d4d617276656c2d323031392e6a7067),
(34, 8, 'Danur', 2018, '4', '', 0x696d61676573202835292e6a706567),
(35, 8, 'Ratu Ilmu Hitam', 2019, '4', '', 0x696d61676573202834292e6a706567),
(36, 11, 'KeluargaCemara', 2017, '4', '', 0x646174615f34315f636f6e746f682d706f737465722d66696c6d2d62696f736b6f702d31352e6a7067),
(37, 9, 'The Raid', 2017, '4', '', 0x5468655f526169645f506f737465722e6a7067),
(38, 9, 'Serigala Terakhir', 2009, '4', '', 0x5365726967616c615f546572616b6869725f7468655f5365726965732e6a706567),
(39, 9, 'Pertaruhan', 2017, '4', '', 0x6e4737626a70447662757a3266766f3546314850347a32514a676a2e6a7067),
(40, 10, 'Superman', 2018, '4', '', 0x30383034323032303136303833322e706e67),
(41, 14, 'WarkopDKIrebon', 2019, '4', '', 0x696d616765732e6a706567),
(42, 14, 'My Stupid Boss', 2018, '4', '', 0x696d61676573202833292e6a706567),
(43, 14, 'Mr. Bean', 2016, '4', '', 0x30383034323032303135343334382e706e67),
(44, 14, 'Cek Toko Sebelah', 2019, '4', '', 0x63656b2e6a7067),
(45, 12, 'McQueen', 2017, '4', '', 0x30383034323032303136313333352e706e67),
(46, 8, 'Pengabdi Setan', 2020, '4', '', 0x696d61676573202836292e6a706567),
(54, 8, 'Shang-Chi', 2022, '4', 'jkhjfha', 0x7368616e676368692e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(8, 'Horror'),
(9, 'Aksi'),
(10, 'Marvel'),
(11, 'Drama'),
(12, 'Kartun'),
(14, 'Komedi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paket`
--

CREATE TABLE `tbl_paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(8) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `diskon` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_paket`
--

INSERT INTO `tbl_paket` (`id_paket`, `nama_paket`, `harga`, `diskon`) VALUES
(19, 'Basic', '20000', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id` int(3) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `hargaakhir` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(3) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(3) NOT NULL,
  `tgl_akun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`, `level`, `tgl_akun`) VALUES
(1, 'Admin1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '0000-00-00'),
(2, 'Member1', 'member', 'aa08769cdcb26674c6706093503ff0a3', 2, '2023-03-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_film`
--
ALTER TABLE `tbl_film`
  ADD PRIMARY KEY (`id_film`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id` (`id`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_film`
--
ALTER TABLE `tbl_film`
  MODIFY `id_film` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_film`
--
ALTER TABLE `tbl_film`
  ADD CONSTRAINT `tbl_film_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`);

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tbl_user` (`id`),
  ADD CONSTRAINT `tbl_transaksi_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `tbl_paket` (`id_paket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
