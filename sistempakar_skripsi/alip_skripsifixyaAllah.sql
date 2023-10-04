-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 11:15 PM
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
(1, 'P1', 'Hipokondriasis'),
(2, 'P2', 'Paranoid'),
(3, 'P3', 'Psikopat'),
(4, 'P4', 'Schizoprenia'),
(5, 'P5', 'Hyphomania');

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
-- Table structure for table `riwayat_backward`
--

CREATE TABLE `riwayat_backward` (
  `id_riwayat` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `penyakit` varchar(50) NOT NULL,
  `hasil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_backward`
--

INSERT INTO `riwayat_backward` (`id_riwayat`, `user_id`, `penyakit`, `hasil`) VALUES
(1, 0, 'Paranoid', '71.428571428571');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_forward`
--

CREATE TABLE `riwayat_forward` (
  `id_forward` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gangguan` varchar(20) NOT NULL,
  `gejala` varchar(50) NOT NULL,
  `prosentase` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_forward`
--

INSERT INTO `riwayat_forward` (`id_forward`, `user_id`, `gangguan`, `gejala`, `prosentase`) VALUES
(1, 0, 'Paranoid', '3', '42.857'),
(2, 0, 'Hipokondriasis', '3', '42.857'),
(3, 0, 'Hipokondriasis', '3', '42.857'),
(4, 0, 'Paranoid', '3', '42.857'),
(5, 0, 'Hipokondriasis', '3', '42.857'),
(6, 0, 'Hipokondriasis', '3', '42.857'),
(7, 0, 'Hipokondriasis', '1', '14.286'),
(8, 0, 'Hipokondriasis', '1', '14.286'),
(9, 0, 'Hipokondriasis', '1', '14.286'),
(10, 0, 'Psikopat', '1', '14.286');

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
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(5) NOT NULL,
  `kode_saran` varchar(50) NOT NULL,
  `saran` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `kode_saran`, `saran`) VALUES
(1, 'S01', 'Konsultasi dengan ahli kesehatan seperti Psikolog'),
(2, 'S02', 'Olahraga yang cukup agar pasien selalu dalam kondisi sehat'),
(3, 'S03', 'Kurangi berfikir berlebihan'),
(4, 'S04', 'Belajar untuk lebih peka terhadap stress dan bagaimana tubuh merespon'),
(5, 'S05', 'Cek secara langsung penyakit atau gangguan agar mendapatkan komitmen dari para ahli'),
(6, 'S06', 'Merespon stres dengan aktivitas yang positif dengan olahraga atau meditasi'),
(7, 'S07', 'Kurangi pola pikir yang tidak diperlukan'),
(8, 'S08', 'Mengevaluasi dan memahami cara menjalin hubungan dengan orang lain'),
(9, 'S09', 'Mengendalikan perilaku dan emosi'),
(10, 'S10', 'Terapi perilaku kognitif (cognitive behavioral therapy)untuk  mengendalikan kondisi dengan mengubah cara pikir dan perilaku yang negatif menjadi positif'),
(11, 'S11', 'Terapi berbasis mentalitas (mentalization-based therapy), untuk memahami bagaimana kondisi mental memengaruhi perilaku'),
(12, 'S12', 'Terapi psikodinamika, untuk meningkatkan kesadaranterhadap pikiran dan perilaku negatif dan impulsif'),
(13, 'S13', 'Saat halusinasi muncul, cobalah untuk mengabaikan halusinasi itu dengan memfokuskan diriAnda pada hal lain, seperti membaca buku, mendengarkan musik, berdoa, atau berbicara dengan teman'),
(14, 'S14', 'Ikut berpartisipasi dalam program atau aktivitas yang dianjurkan seperti, bakti sosial dan sebagainya'),
(15, 'S15', 'Pertimbangkan untuk ikut dalam support group pekerja sosial'),
(16, 'S16', 'Kurangi Stres berlebihan , pola tidur dan makan yang seimbang'),
(17, 'S17', 'Memiliki gaya hidup sehat bisa membantu mengontrol gejala dari gangguan bipolar'),
(18, 'S18', 'Rutinitas seperti diet sehat, tidur teratur dan cukup, serta berolahraga bisa menjaga stabilitas suasana hati seseorang'),
(19, 'S19', 'Belajar mengenali perubahan suasana hati'),
(20, 'S20', 'Waspadai gejala-gejala yang bisa berakibat buruk, seperti hasrat ingin bunuh diri');

-- --------------------------------------------------------

--
-- Table structure for table `saran_rules`
--

CREATE TABLE `saran_rules` (
  `id_rule` int(5) NOT NULL,
  `kode_rule` varchar(30) NOT NULL,
  `kode_saran` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saran_rules`
--

INSERT INTO `saran_rules` (`id_rule`, `kode_rule`, `kode_saran`) VALUES
(1, 'Hipokondriasis', 'S01,S02,S03,S04,S05'),
(2, 'Paranoid', 'S06,S07,S08,S09'),
(3, 'Psikopat', 'S10,S11,S12'),
(4, 'Schizoprenia', 'S13,S14,S15,S16'),
(5, 'Hyphomania', 'S17,S18,S19,S20');

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
-- Indexes for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`id_kuesioner`);

--
-- Indexes for table `riwayat_backward`
--
ALTER TABLE `riwayat_backward`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `riwayat_forward`
--
ALTER TABLE `riwayat_forward`
  ADD PRIMARY KEY (`id_forward`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id_rule`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `saran_rules`
--
ALTER TABLE `saran_rules`
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
-- AUTO_INCREMENT for table `riwayat_backward`
--
ALTER TABLE `riwayat_backward`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `riwayat_forward`
--
ALTER TABLE `riwayat_forward`
  MODIFY `id_forward` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id_rule` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `saran_rules`
--
ALTER TABLE `saran_rules`
  MODIFY `id_rule` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
