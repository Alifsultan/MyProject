-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 03:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alip_skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `gangguan`
--

CREATE TABLE `gangguan` (
  `id_gangguan` int(11) NOT NULL,
  `kode_penyakit` varchar(11) NOT NULL,
  `nama_gangguan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gangguan`
--

INSERT INTO `gangguan` (`id_gangguan`, `kode_penyakit`, `nama_gangguan`) VALUES
(1, 'P1', 'HIPOKONDRIASIS'),
(2, 'P2', 'PARANOID'),
(3, 'P3', 'PSIKOPAT'),
(4, 'P5', 'SCHIZOPRENIA'),
(5, 'P5', 'HYPHOMANIA');

-- --------------------------------------------------------

--
-- Table structure for table `kritik_saran`
--

CREATE TABLE `kritik_saran` (
  `id_kritikSaran` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `kritikSaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE `kuesioner` (
  `id_kuesioner` varchar(11) NOT NULL,
  `pernyataan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuesioner`
--

INSERT INTO `kuesioner` (`id_kuesioner`, `pernyataan`) VALUES
('P001', 'Aku merasa bahwa hidup ini tidak adil'),
('P002', 'Aku terganggu oleh serangan rasa mual dan muntah'),
('P003', 'Dalam seminggu aku beberapa kali terganggu oleh penyakit lambung(maag)'),
('P004', 'Tidurku sering terganggu dan terjaga'),
('P005', 'Aku tiap-tiap terganggu oleh sakit ulu hati'),
('P006', 'Kepalaku sering sekali terasa berat atau hidungku mampat'),
('P007', 'Aku sering merasa seakan-akan ada ikatan yang menjepit kepalaku'),
('P008', 'Aku pernah ingin sekali lari dari rumah'),
('P009', 'Aku merasa tak seorang pun yang mengerti akan diriku'),
('P010', 'Aku merasa sukar memusatkan perhatian pada suatu pekerjaan'),
('P011', 'Aku ingin dapat berbahagia seperti orang lain'),
('P012', 'Keluargaku tidak senang pada pekerjaan yang telah atau akan ku pilih'),
('P013', 'Aku menjalani hidup yang tidak dibenarkan'),
('P014', 'Aku sering merasa seolah-olah ada yang menyumbat dalam leherku'),
('P015', 'Sekali-kali aku berfikir tentang hal yang buruk untuk diutarakan'),
('P016', 'Pada waktu-waktu tertentu aku tertawa dan menangis tanpa dapat kukuasai'),
('P017', 'Aku sering murung'),
('P018', 'Aku banyak melakukan hal-hal yang kemudian kusesalkan dan rasanya aku lebih sering menyesal dibandingkan orang lain'),
('P019', 'Aku pernah ingin sekali lari dari rumah'),
('P020', 'Pada waktu-waktu tertentu aku tertawa dan menangis tanpa dapat kukuasai'),
('P021', 'Pada umumnya aku lebih senang duduk melamun dari pada mengerjakan yang lain'),
('P022', 'Bila aku berpapasan dengan teman-teman sekolah atau kenalan lama, aku lebih suka menghindari mereka, kecuali bila mereka menegurku lebih dulu'),
('P023', 'Aku sering harus menerima perintah dari seseorang yang tidak lebih pandai dariku'),
('P024', 'Aku kadang-kadang tetap bertahan pada suatu hal sehingga orang lain menjadi tidak sabar'),
('P025', 'Aku pernah dihadapkan pada persoalan yang begitu banyak kemungkinannya, sehingga aku tidak dapat mengambil keputusan'),
('P026', 'Aku tau siapa yang menjadi biang keladi dari kesulitan-kesulitanku'),
('P027', 'Ada kalanya aku terdorong dengan kuat untuk mengerjakan sesuatu yang merugikan dan menghebohkan'),
('P028', 'Semasa muda aku menjadi anggota kelompok yang kompak dalam suka dan duka'),
('P029', 'Perjuanganku yang paling berat adalah melawan diri sendiri');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `gangguan` varchar(50) NOT NULL,
  `gejala` varchar(30) NOT NULL,
  `prosentase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `gangguan`, `gejala`, `prosentase`) VALUES
(1, 'Gangguan', 'Gejala', 0),
(2, 'Gangguan', 'Gejala', 0),
(3, 'Gangguan', 'Gejala', 0),
(4, 'Gangguan', 'Gejala', 0),
(5, 'Gangguan', 'Gejala', 0),
(6, 'Gangguan', 'Gejala', 0),
(7, '', 'Gejala', 0),
(8, '', 'Gejala', 0),
(9, '', 'Gejala', 0),
(10, 'Gangguan', 'Gejala', 0),
(11, 'gangguan', 'Gejala', 0),
(12, 'Paranoid', 'Gejala', 0),
(13, 'Paranoid', 'Gejala', 0),
(14, 'Hyphomania', 'P019,P023,P024,P025,P026,P027,', 0),
(15, 'Hipokondriasis', 'P019,P023,P024,P025,P026,P027,', 0),
(16, 'Hipokondriasis', 'P001,P002, P003,P004,P005,P006', 0),
(17, 'Hipokondriasis', 'P001,P002, P003,P004,P005,P006', 0),
(18, 'Psikopat', 'P011,P014,P015,P017,P018,P020,', 0),
(19, 'Psikopat', '1', 14),
(20, 'Hyphomania', '1', 14),
(21, 'Hyphomania', '1', 14),
(22, 'Hyphomania', '1', 14),
(23, 'Hyphomania', '2', 29),
(24, 'Hipokondriasis', '3', 43),
(25, 'Hipokondriasis', '3', 43),
(26, 'Hyphomania', '2', 29),
(27, 'Hyphomania', '1', 14),
(28, 'Hyphomania', '1', 14),
(29, 'Hyphomania', '1', 14),
(30, 'Hipokondriasis', '3', 43),
(31, 'Hipokondriasis', '2', 29),
(32, 'Hipokondriasis', '1', 14),
(33, 'Paranoid', '2', 29);

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id_rule` int(5) NOT NULL,
  `kode_rule` varchar(30) NOT NULL,
  `kode_gejala` varchar(1000) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id_rule`, `kode_rule`, `kode_gejala`, `kode_penyakit`) VALUES
(1, 'Hipokondriasis', 'P001,P002, P003,P004,P005,P006,P007', 'P1'),
(2, 'Paranoid', 'P001,P008,P009,P010,P011,P012,P013', 'P2'),
(3, 'Psikopat', 'P011,P014,P015,P017,P018,P020,P029', 'P3'),
(4, 'Schizoprenia', 'P001,P015,P017,P019,P020,P021,P022', 'P4'),
(5, 'Hyphomania', 'P019,P023,P024,P025,P026,P027,P028', 'P5');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_lahir` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `image` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `user_access` enum('admin','user') NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `alamat`, `tgl_lahir`, `image`, `password`, `user_access`, `date`) VALUES
(23, 'Admin', 'admin@gmail.com', 'Malang', '2021-08-04 09:24:59', 'defaultm2.png', '$2y$10$fkfd3SS.Ze11sCxv11qYjOD2D3FM3hzrmY55UElugWZyNNbMKAw6K', 'admin', '2021-08-04 02:24:59'),
(25, 'Muhammad Figo Ayala', 'figoayala@gmail.com', 'Malang', '2021-08-04 09:25:05', 'default.jpg', '$2y$10$wdkPKKWuqhkNf6GlNVSGJOmcBxdY780bIx6Q.vWTr4Kf3RqhcGOHq', 'user', '2021-08-04 02:25:05'),
(26, 'Naufal Yuwana Pramudita', 'naufal@gmail.com', 'Malang', '2021-08-04 09:25:09', 'default.jpg', '$2y$10$p9W8Wfc1bfVl/5uHlwmyzuSVqGrEfNOA2IVyIJluVvMy3kS29uXMS', 'user', '2021-08-04 02:25:09'),
(28, 'Alif m sultan s', 'alifsultan22@gmail.com', 'jl.candi2/klaseman', '2021-08-07 05:48:00', 'Screenshot_2021-03-26_1742511.png', '$2y$10$hu4F/V1W.E1J8vmcJhlsq.YrljzeGHgU37MkSQ96GvgjlmqBQfEPq', 'user', '2021-08-06 22:48:00'),
(30, 'Dini', 'dyahayu@gmail.com', 'Malang', '1996-01-16 00:00:00', 'default.jpg', '$2y$10$.bS/23bw7ZD..C.9dvJED.3RbYUDEW1RmYjSmwIiHlp.EqtkTq3ta', 'user', '2021-08-04 04:20:25'),
(31, 'Yeye', 'yeye@gmail.com', 'jl.candi2/klaseman', '2021-08-20 00:00:00', 'default.jpg', '$2y$10$AGFgo/lIcik/W4T3d0Z9Ou8QaRZo/SfJyTGbIgdl8is5OKAQje342', 'user', '2021-08-04 13:33:35'),
(35, 'Izmir Tais Khasna Lugazi', 'izmirtais28@gmail.com', 'Bondowoso', '1998-08-28 00:00:00', 'default.jpg', '$2y$10$E8CZ49vTTFj5Qro1m7JSJelzR2LD3MVeaBI61BSjhp8FXXx.JmiwO', 'user', '2021-08-08 12:30:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gangguan`
--
ALTER TABLE `gangguan`
  ADD PRIMARY KEY (`id_gangguan`);

--
-- Indexes for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD PRIMARY KEY (`id_kritikSaran`);

--
-- Indexes for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`id_kuesioner`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id_rule`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gangguan`
--
ALTER TABLE `gangguan`
  MODIFY `id_gangguan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  MODIFY `id_kritikSaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id_rule` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
