-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 05:53 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `macetpku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jalan`
--

CREATE TABLE `tb_jalan` (
  `id_jalan` int(50) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `nama_jalan` varchar(255) NOT NULL,
  `kondisi_jalan` varchar(255) NOT NULL,
  `volume_kendaraan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jalan`
--

INSERT INTO `tb_jalan` (`id_jalan`, `latitude`, `longitude`, `nama_jalan`, `kondisi_jalan`, `volume_kendaraan`, `gambar`) VALUES
(1, '0,536166', '101,443263', 'JL. Ir Juanda', 'Kerusakan Parah', '30', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609902/GIS/1._JL._Ir_Juanda_kijka8.jpg'),
(2, '0,524434', '101,442267', 'JL. Ahmad Yani', 'Kerusakan Sedang', '40', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609959/GIS/2._JL._Ahmad_Yani_cnr9rx.jpg'),
(3, '0,523566', '101,442211', 'JL. Ahmad Yani', 'Kerusakan Sedang', '40', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609915/GIS/3._JL._Ahmad_Yani_gmbxwv.jpg'),
(4, '0,514917', '101,419685', 'JL. Soekarno - Hatta (Simp. Durian)', 'Tidak Rusak', '80', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609908/GIS/4._JL._Soekarno_-_Hatta_Simp._Durian_bh67uo.jpg'),
(5, '0,479874', '101,418416', 'JL. Soekarno - Hatta', 'Tidak Rusak', '75', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609913/GIS/5._JL._Soekarno_-_Hatta_skowpu.jpg'),
(6, '0,474381', '101,420737', 'JL. Arifin Ahmad', 'Tidak Rusak', '65', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609921/GIS/6._JL._Arifin_Ahmad_zukje0.jpg'),
(7, '0,480392', '101,43501', 'JL. Arifin Ahmad', 'Tidak Rusak', '55', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609940/GIS/7._JL._Arifin_Ahmad_bqk66t.jpg'),
(8, '0,486836', '101,492744', 'JL. Bukit Barisan', 'Kerusakan Parah', '45', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609951/GIS/8._JL._Bukit_Barisan_irs3xx.jpg'),
(9, '0,488035', '101,490735', 'JL. Bukit Barisan', 'Kerusakan Kecil', '45', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609946/GIS/9._JL._Bukit_Barisan_ryehwo.jpg'),
(10, '0,49721', '101,482725', 'JL. Imam Munandar', 'Tidak Rusak', '60', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609942/GIS/10._JL._Imam_Munandar_xac0hf.jpg'),
(11, '0,49917', '101,479972', 'JL. Imam Munandar', 'Tidak Rusak', '75', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609942/GIS/11._JL._Imam_Munandar_v1w5ii.jpg'),
(12, '0,499306', '101,46414', 'JL. Harapan Raya', 'Tidak Rusak', '80', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609943/GIS/12._JL._Harapan_Raya_ib8l6d.jpg'),
(13, '0,499371', '101,459286', 'JL. Harapan Raya', 'Tidak Rusak', '75', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609947/GIS/13._JL._Harapan_Raya_fisp84.jpg'),
(14, '0,504865', '101,461914', 'JL. Lembaga Permasyarakatan', 'Kerusakan Sedang', '75', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609949/GIS/14._JL._Lembaga_Pemasyarakatan_jje9jf.jpg'),
(15, '0,5104', '101,460792', 'JL. Mulyorejo', 'Kerusakan Kecil', '55', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609947/GIS/15._JL._Mulyorejo_bubnfd.jpg'),
(16, '0,51227', '101,460805', 'JL. Mulyorejo', 'Kerusakan Kecil', '55', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609959/GIS/16._JL._Mulyorejo_qg2kfe.jpg'),
(17, '0,509323', '101,46118', 'JL. Pattimura', 'Kerusakan Kecil', '80', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609953/GIS/17._JL._Pattimura_qgbdlj.jpg'),
(18, '0,49963', '101,462155', 'JL. Samarinda', 'Kerusakan Sedang', '55', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609953/GIS/18._JL._Samarinda_leolhf.jpg'),
(19, '0,49592', '101,501625', 'JL. Sekuntum', 'Kerusakan Sedang', '55', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609951/GIS/19._JL._Sekuntum_y9csmn.jpg'),
(20, '0,494876', '101,487076', 'JL. Imam Munandar', 'Tidak Rusak', '60', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609956/GIS/20._JL._Imam_Munandar_c7sefd.jpg'),
(21, '0,463804', '101,422335', 'JL. Adi Sucipto', 'Kerusakan Sedang', '45', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609965/GIS/21._JL._Adi_Sucipto_z2lfk9.jpg'),
(22, '0,499052', '101,479757', 'JL. Harapan Raya', 'Kerusakan Sedang', '60', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609974/GIS/22._JL._Harapan_Raya_ni2fc0.jpg'),
(23, '0,463882', '101,412165', 'JL. HR Soebrantas', 'Tidak Rusak', '50', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609975/GIS/23._JL._HR_Soebrantas_xyjpma.jpg'),
(24, '0,463941', '101,408078', 'JL. HR Soebrantas', 'Tidak Rusak', '80', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609965/GIS/24._JL._HR_Soebrantas_xwuqru.jpg'),
(25, '0,468141', '101,455734', 'JL. Ikhlas', 'Tidak Rusak', '20', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609966/GIS/25._JL._Ikhlas_u3tweb.jpg'),
(26, '0,499908', '101,41925', 'JL. Soekarno - Hatta (Simp. Mall SKA)', 'Tidak Rusak', '90', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609972/GIS/26._JL._Soekarno_-_Hatta_Simp._Mall_SKA_ewaihk.jpg'),
(27, '0,537591', '101,422411', 'JL. Jambu', 'Kerusakan Kecil', '35', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609984/GIS/27._JL._Jambu_tgkkxz.jpg'),
(28, '0,500494', '101,471083', 'JL. Harapan Raya', 'Kerusakan Kecil', '60', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609978/GIS/28._JL._Harapan_Raya_gr2uio.jpg'),
(29, '0,470237', '101,454263', 'JL. Kaharuddin Nasution', 'Tidak Rusak', '80', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609979/GIS/29._JL._Kaharuddin_Nasution_sh11w2.jpg'),
(30, '0,46262', '101,452927', 'JL. Kaharuddin Nasution', 'Tidak Rusak', '85', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609981/GIS/30._JL._Kaharuddin_Nasution_ehgcge.jpg'),
(31, '0,446267', '101,425769', 'JL. Kartama', 'Kerusakan Kecil', '40', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609983/GIS/31._JL._Kartama_q9ok4y.jpg'),
(32, '0,458798', '101,425311', 'JL. Kartama', 'Kerusakan Parah', '35', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609983/GIS/32._JL._Kartama_s4smjm.jpg'),
(33, '0,538534', '101,430229', 'JL. Kulim', 'Kerusakan Parah', '50', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609987/GIS/33._JL._Kulim_bu20dw.jpg'),
(34, '0,53892', '101,428996', 'JL. Kulim', 'Kerusakan Sedang', '40', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609994/GIS/34._JL._Kulim_w2botu.jpg'),
(35, '0,487984', '101,452833', 'JL. Letkol Syariefuddin', 'Tidak Rusak', '25', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609993/GIS/35._JL._Letkol_Syariefuddin_ir0vts.jpg'),
(36, '0,499224', '101,4663', 'JL. Harapan Raya', 'Kerusakan Sedang', '55', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609999/GIS/36._JL._Harapan_Raya_kuortm.jpg'),
(37, '0,48699', '101,448844', 'JL. Merak', 'Kerusakan Parah', '10', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609994/GIS/37._JL._Merak_pzvitl.jpg'),
(38, '0,486644', '101,448827', 'JL. Merak', 'Kerusakan Sedang', '10', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669610003/GIS/38._JL._Merak_a0lwlk.jpg'),
(39, '0,456565', '101,45001', 'JL. Pahlawan Kerja', 'Tidak Rusak', '40', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669610002/GIS/39._JL._Pahlawan_Kerja_fvwots.jpg'),
(40, '0,471025', '101,453967', 'JL. Sudirman (Konsulat Malaysia)', 'Tidak Rusak', '80', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669610017/GIS/40._JL._Sudirman_Konsulat_Malaysia_nlcp23.jpg'),
(41, '0,521742', '101,441074', 'JL. Teratai', 'Kerusakan Parah', '50', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669610011/GIS/41._JL._Teratai_pcct4r.jpg'),
(42, '0,535123', '101,420395', 'JL. Riau', 'Tidak Rusak', '85', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669610001/GIS/42._JL._Riau_letecn.jpg'),
(43, '0,553802', '101,435229', 'JL. Yos Sudarso', 'Kerusakan Kecil', '20', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669610017/GIS/43._JL._Yos_Sudarso_mpmmsr.jpg'),
(44, '0,470758', '101,453809', 'JL. Sudirman', 'Tidak Rusak', '80', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669610011/GIS/44._JL._Sudirman_vli9v9.jpg'),
(45, '0,483839', '101,454235', 'JL. Sudirman', 'Tidak Rusak', '80', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609898/GIS/45._JL._Sudirman_mu20up.jpg'),
(46, '0,479255', '101,453998', 'JL. Sudirman', 'Tidak Rusak', '75', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609909/GIS/46._JL._Sudirman_asqmae.jpg'),
(47, '0,569001', '101,4253', 'JL. Umban Sari', 'Tidak Rusak', '30', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609898/GIS/47._JL._Umban_Sari_tmdnbz.jpg'),
(48, '0,569008', '101,425295', 'JL. Umban Sari', 'Kerusakan Parah', '50', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609907/GIS/48._JL._Umban_Sari_p0ti0s.jpg'),
(49, '0,507916', '101,442196', 'JL. Tuanku Tambusai', 'Tidak Rusak', '75', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609915/GIS/49._JL._Tuanku_Tambusai_nramua.jpg'),
(50, '0,57133', '101,439488', 'JL. Tuanku Tambusai', 'Tidak Rusak', '80', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609923/GIS/50._JL._Tuanku_Tambusai_ujisor.jpg'),
(51, '0,476788', '101,447768', 'JL. Rw.Indah', 'Tidak Rusak', '80', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609921/GIS/51._JL._Rw._Indah_mfvstz.jpg'),
(52, '0,477474', '101,44803', 'JL. Rw.Indah', 'Tidak Rusak', '65', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609921/GIS/52._JL._Rw._Indah_zl8bfd.jpg'),
(53, '0,463746', '101,457434', 'JL. Tengku Bey', 'Tidak Rusak', '40', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609927/GIS/53._JL._Tengku_Bey_gf4inh.jpg'),
(54, '0,46353', '101,458164', 'JL. Tengku Bey', 'Kerusakan Parah', '50', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609923/GIS/54._JL._Tengku_Bey_gik5rn.jpg'),
(55, '0,463925', '101,457072', 'JL. Tengku Bey', 'Tidak Rusak', '80', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609929/GIS/55._JL._Tengku_Bey_tgxixz.jpg'),
(56, '0,490144', '101,438629', 'JL. Paus', 'Kerusakan Parah', '60', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609936/GIS/56._JL._Paus_tttinm.jpg'),
(57, '0,49653', '101,438622', 'JL. Paus', 'Tidak Rusak', '60', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609932/GIS/57._JL._Paus_ajt1rf.jpg'),
(58, '0,501035', '101,439087', 'JL. Paus', 'Kerusakan Parah', '40', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609941/GIS/58._JL._Paus_hgpvhz.jpg'),
(59, '0,502822', '101,438903', 'JL. Paus', 'Kerusakan Sedang', '20', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609936/GIS/59._JL._Paus_yv8zem.jpg'),
(60, '0,474157', '101,449352', 'JL. Rw.Mulia', 'Tidak Rusak', '20', 'https://res.cloudinary.com/dhtm65gqj/image/upload/v1669609938/GIS/60._JL._Rw._Mulia_qfplde.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `password`, `role`, `date_created`) VALUES
(1, 'Adin', 'adin@gmail.com', 'adin123', 'User', 0),
(2, 'Aji', 'fajri@gmail.com', '$2y$10$Uq0Ourgq4io11ntRLjdtw.rsguRziifXVAyO2t1DJKfjgb2t2PMcO', 'User', 1670213558);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jalan`
--
ALTER TABLE `tb_jalan`
  ADD PRIMARY KEY (`id_jalan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jalan`
--
ALTER TABLE `tb_jalan`
  MODIFY `id_jalan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
