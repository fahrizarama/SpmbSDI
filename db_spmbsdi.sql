-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2025 at 07:07 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spmbsdi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `admin_nama` varchar(40) NOT NULL,
  `admin_username` varchar(40) NOT NULL,
  `password` varchar(128) NOT NULL,
  `admin_view_password` varchar(40) NOT NULL,
  `id_akses` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_nama`, `admin_username`, `password`, `admin_view_password`, `id_akses`) VALUES
(1, 'admin', 'admin', '$2y$10$V8VXKDXn4B9Lleeya.S.i.EMDMSlQ906fJ1vEI/jkHYYvOHIf6dH.', 'admin123', 'adm'),
(2, 'dosen', 'dosen', '$2y$10$vzaVal1OZVZTJA6rTqCM5u0JgZdesLTazKak5ED/29KLvgdKnyTb2', 'dosen123', 'dos');

-- --------------------------------------------------------

--
-- Table structure for table `api`
--

CREATE TABLE `api` (
  `id_api` int(11) NOT NULL,
  `api_key` text,
  `api_token` text,
  `cache` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `api`
--

INSERT INTO `api` (`id_api`, `api_key`, `api_token`, `cache`) VALUES
(1, NULL, 'RZgDm4xFpGjyMcfGa94z', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coba`
--

CREATE TABLE `coba` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `dokumen_akta` varchar(255) NOT NULL,
  `dokumen_kk` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coba`
--

INSERT INTO `coba` (`id`, `nama`, `dokumen_akta`, `dokumen_kk`, `foto`) VALUES
(1, 'asd', '', '', 'fb691434be60ef5c5b16786a67e936e2.JPG'),
(2, 'qwewqeqwe', '6f1a07f7865c37499bee91d92bf1fcd2.pdf', '669c7fefb24d9a40d5f59e6f0b4140e5.pdf', '17778a766be8031d1177078cf8bf823d.jpg'),
(3, 'qwe', 'eae719982ed11da39fdc04bea4d2f898.pdf', 'f3a6e9d404d9468f06fafdb81a8fbed0.pdf', '36b7c09fba90d1e2a9568a157012d1ae.JPG'),
(4, 'zzzz', 'akta_coba_20250214_071736.pdf', 'kk_coba_20250214_071736.pdf', 'foto_coba_20250214_071736.JPG'),
(5, 'ddddddd', 'akta_coba_20250214_132019.pdf', 'kk_coba_20250214_132019.pdf', 'foto_coba_20250214_132019.JPG'),
(6, 'rama', 'akta_coba_20250214_133309.pdf', 'kk_coba_20250214_133309.pdf', 'foto_coba_20250214_133309.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `formulir`
--

CREATE TABLE `formulir` (
  `id_formulir` int(11) NOT NULL,
  `tanggal_formulir` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` int(17) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `anak_ke` varchar(30) NOT NULL,
  `saudara` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `nama_a` varchar(100) NOT NULL,
  `nik_a` int(17) NOT NULL,
  `alamat_a` text NOT NULL,
  `agama_a` varchar(30) NOT NULL,
  `tanggal_lahir_a` date NOT NULL,
  `email_a` varchar(60) NOT NULL,
  `profesi_a` varchar(60) NOT NULL,
  `no_hp_a` varchar(25) NOT NULL,
  `penghasilan_a` varchar(40) NOT NULL,
  `nama_b` varchar(100) NOT NULL,
  `nik_b` int(17) NOT NULL,
  `alamat_b` text NOT NULL,
  `agama_b` varchar(30) NOT NULL,
  `tanggal_lahir_b` date NOT NULL,
  `email_b` varchar(60) NOT NULL,
  `profesi_b` varchar(60) NOT NULL,
  `no_hp_b` varchar(25) NOT NULL,
  `penghasilan_b` varchar(40) NOT NULL,
  `dokumen_kk` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `dokumen_akta` varchar(255) NOT NULL,
  `token1` int(11) DEFAULT NULL COMMENT 'Untuk Data',
  `token2` int(11) DEFAULT NULL COMMENT 'Untuk Berkas',
  `token3` int(11) DEFAULT NULL COMMENT '0=Belum Submit ; 1=Sudah Submit',
  `status` int(11) DEFAULT NULL COMMENT '1=Belum Terkonfirmasi ; 2=Terkonfirmasi ; 3=Tidak Terkonfirmasi',
  `alasan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulir`
--

INSERT INTO `formulir` (`id_formulir`, `tanggal_formulir`, `id_user`, `nama`, `nik`, `alamat`, `agama`, `tanggal_lahir`, `asal_sekolah`, `anak_ke`, `saudara`, `jenis_kelamin`, `nama_a`, `nik_a`, `alamat_a`, `agama_a`, `tanggal_lahir_a`, `email_a`, `profesi_a`, `no_hp_a`, `penghasilan_a`, `nama_b`, `nik_b`, `alamat_b`, `agama_b`, `tanggal_lahir_b`, `email_b`, `profesi_b`, `no_hp_b`, `penghasilan_b`, `dokumen_kk`, `foto`, `dokumen_akta`, `token1`, `token2`, `token3`, `status`, `alasan`) VALUES
(2, '2025-02-16 06:18:10', 6, 'Fahriza Ramadhani Putra Al Malik Bin Yahya', 2147483647, 'asd', 'Islam', '2025-02-14', 'asd', 'dua', 'asd', 'Perempuan', 'asd', 123, 'asd', 'Islam', '2025-02-14', 'asd@asd', 'asd', '+6281332490394', 'Tidak Berpenghasilan', 'asd', 123, 'asd', 'Islam', '2025-02-14', 'asd@asd', 'asd', '08990505517', 'Tidak Berpenghasilan', 'kk_coba_20250216_002712.pdf', 'foto_coba_20250216_002712.jpg', 'akta_coba_20250216_002712.pdf', NULL, NULL, NULL, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(128) NOT NULL,
  `view_password` varchar(60) NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `view_password`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '$2y$10$V8VXKDXn4B9Lleeya.S.i.EMDMSlQ906fJ1vEI/jkHYYvOHIf6dH.', 'admin123', '1'),
(6, 'coba', 'coba@gmail.com', '123', '$2y$10$BTzO/TAuzwr6IAyJyB2a0OTOap.C6XjRB11Br/RqPKIFx2.GvlqZy', '123123123', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `api`
--
ALTER TABLE `api`
  ADD PRIMARY KEY (`id_api`);

--
-- Indexes for table `coba`
--
ALTER TABLE `coba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id_formulir`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `api`
--
ALTER TABLE `api`
  MODIFY `id_api` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coba`
--
ALTER TABLE `coba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
