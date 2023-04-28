-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 06:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` varchar(50) NOT NULL,
  `nama_dokter` varchar(80) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`) VALUES
('0a3fcbb3-e545-4117-ac6a-2b8b48b8ca6e', 'Dr. Warsita Mandala', 'Spesialis THT', 'Psr. Bakti No. 588, Binjai 90760, Bali', '066871885771'),
('499de537-0709-41c7-a835-72272cf6fa6c', 'Dr. Mila Lestari', 'Spesialis Penyakit Dalam', 'Kpg. Pasirkoja No. 367, Pematangsiantar 28807, Gorontalo', '037190270322'),
('4b2e7bb0-174c-4d19-b308-b7dc87c8cbcb', 'Dr. Febi Novitasari', 'Spesialis Mata', 'Ds. Baing No. 510, Bandar Lampung 82781, SumUt', '64876235254'),
('67fd369b-384d-4d91-8991-dc6a2494d842', 'Dr. Oni Haryanti', 'Spesialis Saraf', 'Psr. Krakatau No. 665, Salatiga 71258, SumBar', '095159841455'),
('720d3e1c-55ac-424e-a997-465e92a6f6c4', 'Dr. Ilsa Wahyuni', 'Spesialis Saraf', 'Jr. Gajah Mada No. 588, Langsa 91106, Bali', '077255674239'),
('77fee251-6671-4c57-a733-31036b35f233', 'Dr. Maria Rahimah', 'Spesialis THT', 'Ki. Bah Jaya No. 993, Malang 95862, Lampung', '02450675002'),
('7c1d163c-7e78-4944-ada1-b760fb687bca', 'Dr. Yessi Yuniar', 'Spesialis Anak', 'Kpg. Baiduri No. 121, Bekasi 87706, SumSel', '033226827567');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(200) NOT NULL,
  `ket_obat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `ket_obat`) VALUES
('29b4a858-3d53-4344-8f89-830b42e4a70d', 'Hufabethamin', 'Mengatasi alergi dan peradangan'),
('5e96ca9f-2a48-4bb0-8f90-b614e932c49d', 'Hypromellose', 'Mengatasi mata kering, melembabkan lensa kontak keras, dan melumasi mata buatan'),
('d7f1df75-8f7c-437e-b96f-2827d21c3195', 'Hufarizine', 'Mengobati gejala karena alergi, seperti bersin-bersin, gatal pada hidung dan tenggorokan, serta gatal pada kulit dan biduran, termasuk alergi seafood'),
('ebdf9821-00ee-41e6-b87b-59488c52e9a1', 'Hydromorphone', 'Meredakan nyeri sedang hingga berat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` varchar(50) NOT NULL,
  `nomor_identitas` varchar(30) NOT NULL,
  `nama_pasien` varchar(80) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nomor_identitas`, `nama_pasien`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
('0710dc41-335e-43d2-b50e-e668a632c4be', '3229168999886770', 'Bakbakjakjakl', 'P', 'Kpg. Sadang Serang No. 674, Palu 31849, JaBar222', '098269845410'),
('1028d201-f864-488b-ace4-7021e1af539b', '8520718082445322', 'Ilsa Wahyuni', 'P', 'Jr. Gajah Mada No. 588, Langsa 91106, Bali', '077255674239'),
('2f59eb56-32bb-43be-8fb8-3ba34430dc6f', '8520718082454320', 'Cicakrowo', 'P', 'Jalan jalan ke surabaha', '077255674239'),
('70511fad-bff7-4e1b-a27a-c4fb944acd2f', '3229168999882722', 'Dr. Ikin Megantara', 'L', 'Jlaan laoallaoolao', '0818818818'),
('720be5cc-f58a-4925-ab30-71b1921be745', '3456202115224230', 'Keisha Permata', 'P', 'Kpg. M.T. Haryono No. 21, Bitung 86042, JaTim', '26033086762'),
('75bd2b66-e941-4d81-a85a-a129a57269a7', '8520718082445310', 'Kayla Mandasari', 'P', 'Kpg. Sadang Serang No. 674, Palu 31849, JaBar', '098269845410'),
('96954293-6584-4983-b87f-16f52a3f0b91', '3229168999886170', 'Hama', 'L', 'Jr. Gajah Mada No. 588, Langsa 91106, Bali111', '077255674239'),
('dc9b72d7-f044-4201-a3ae-a80dd3bba451', '3229168999882770', 'Yoko', 'P', 'Kpg. Sadang Serang No. 674, Palu 31849, JaBar222', '098269845410'),
('f5f5dec2-69e9-4ff3-b83b-bfe5607df21f', '8520718082455320', 'Ukjflajdflajd', 'L', 'Jr. Gajah Mada No. 588, Langsa 91106, Bali111', '077255674239'),
('f6c51401-61fb-4e7d-b0ae-3dabbadd0f70', '3229168999886270', 'Wisnawa', 'L', 'Jalan jalan ke surabaha', '081999977969');

-- --------------------------------------------------------

--
-- Table structure for table `tb_poliklinik`
--

CREATE TABLE `tb_poliklinik` (
  `id_poli` varchar(50) NOT NULL,
  `nama_poli` varchar(50) NOT NULL,
  `gedung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_poliklinik`
--

INSERT INTO `tb_poliklinik` (`id_poli`, `nama_poli`, `gedung`) VALUES
('493d28b4-9bad-4a9f-b8db-2861e6c2f44d', 'Cempaka poli333', 'Gedung 2 lantai 1'),
('60498bd7-c600-4265-a804-edb7b638cc0d', 'Jepun Poliklinik', 'Gedung 1 lantai 3'),
('7d7085e5-7715-445c-9eb1-ae74eb14969d', 'Mawar Poliklinik', 'Gedung 1 lantai 1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekammedis`
--

CREATE TABLE `tb_rekammedis` (
  `id_rm` varchar(50) NOT NULL,
  `id_pasien` varchar(50) NOT NULL,
  `keluhan` text NOT NULL,
  `id_dokter` varchar(50) NOT NULL,
  `diagnosa` text NOT NULL,
  `id_poli` varchar(50) NOT NULL,
  `tgl_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rekammedis`
--

INSERT INTO `tb_rekammedis` (`id_rm`, `id_pasien`, `keluhan`, `id_dokter`, `diagnosa`, `id_poli`, `tgl_periksa`) VALUES
('b73acf60-9880-4deb-ae82-8736f6e260b3', '2f59eb56-32bb-43be-8fb8-3ba34430dc6f', '<p>agagag</p>\r\n', '0a3fcbb3-e545-4117-ac6a-2b8b48b8ca6e', '<p>afadfadf</p>\r\n', '493d28b4-9bad-4a9f-b8db-2861e6c2f44d', '2023-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rm_obat`
--

CREATE TABLE `tb_rm_obat` (
  `id` int(8) NOT NULL,
  `id_rm` varchar(50) NOT NULL,
  `id_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rm_obat`
--

INSERT INTO `tb_rm_obat` (`id`, `id_rm`, `id_obat`) VALUES
(47, 'b73acf60-9880-4deb-ae82-8736f6e260b3', '29b4a858-3d53-4344-8f89-830b42e4a70d'),
(48, 'b73acf60-9880-4deb-ae82-8736f6e260b3', '5e96ca9f-2a48-4bb0-8f90-b614e932c49d'),
(49, 'b73acf60-9880-4deb-ae82-8736f6e260b3', 'd7f1df75-8f7c-437e-b96f-2827d21c3195');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(80) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
('426c3dc2-adcb-11ed-8476-18d6c702238d', 'Putu Wisnawa', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1'),
('a916a35b-adda-11ed-8476-18d6c702238d', 'putu wisnawa', 'wisnawa', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD PRIMARY KEY (`id_rm`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rm` (`id_rm`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD CONSTRAINT `tb_rekammedis_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id_dokter`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_3` FOREIGN KEY (`id_poli`) REFERENCES `tb_poliklinik` (`id_poli`);

--
-- Constraints for table `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD CONSTRAINT `tb_rm_obat_ibfk_1` FOREIGN KEY (`id_rm`) REFERENCES `tb_rekammedis` (`id_rm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rm_obat_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `tb_obat` (`id_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
