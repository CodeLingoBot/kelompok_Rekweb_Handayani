-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8889
-- Generation Time: Jan 07, 2019 at 08:08 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `inspektorat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(200) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'caa99f229fb5b30892d72469b7a2792c', 'Administrator', 'admin'),
(2, 'gubernur', 'f8a0770ed882e1f81f41326e8b1483edb4e8c1cb', 'Gubernur', 'Gub'),
(3, 'wagub', 'adff6cb30dba87e8d7e817397baa8bcd193c2a7b', 'Wakil Gubernur', 'Wagub'),
(4, 'sekda', 'ba09b363755a11c5a46f1be9a8dd6e579a1c75b7', 'Sekretaris Daerah', 'Sekda');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kabupaten`
--

CREATE TABLE `tbl_kabupaten` (
  `id_kabupaten` int(11) NOT NULL,
  `nm_kabupaten` varchar(100) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` enum('insKab','insProv') NOT NULL,
  `pass_ori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kabupaten`
--

INSERT INTO `tbl_kabupaten` (`id_kabupaten`, `nm_kabupaten`, `username`, `password`, `level`, `pass_ori`) VALUES
(1, 'Super Administrator', 'prov', '56074e216aad8a46bd0fb84128b4c13f05d1a885', 'insProv', 'prov'),
(3, 'Bulukumba', 'blk', '8da57d83e4710f0212054859934df64541f40cd0', 'insKab', 'blk'),
(4, 'Bantaeng', 'btg', '75f91d906e8f0d7e5b2ae4bc0bd9b9518cf60211', 'insKab', 'btg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kasus`
--

CREATE TABLE `tbl_kasus` (
  `id_kasus` int(11) NOT NULL,
  `nm_kasus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kasus`
--

INSERT INTO `tbl_kasus` (`id_kasus`, `nm_kasus`) VALUES
(1, 'Dokumen'),
(2, 'Barang'),
(3, 'Kerugian ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(11) NOT NULL,
  `kode_temuan` varchar(10) NOT NULL,
  `id_skpd` int(11) NOT NULL,
  `tingkat` varchar(10) NOT NULL,
  `komentar` text NOT NULL,
  `lampiran` text NOT NULL,
  `status` enum('Proses','Selesai','Tidak') NOT NULL,
  `tgl` date NOT NULL,
  `waktu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `kode_temuan`, `id_skpd`, `tingkat`, `komentar`, `lampiran`, `status`, `tgl`, `waktu`) VALUES
(17, '008', 1, 'opdProv', 'berikut hasil perbaikannya', '661a80f9a8e4e9b08b2b28dbb7424b57.pdf', 'Proses', '2019-01-04', '01:50:18'),
(18, '008', 1, 'operator', 'terima kasih. kami terima', '', 'Selesai', '2019-01-04', '01:51:00'),
(19, '007', 2, 'opdProv', 'kami telah proses', '96d8b7e0229e029d0be47c3335bead69.jpeg', 'Proses', '2019-01-04', '01:53:10'),
(20, '007', 1, 'operator', 'data anda belum lengkap..', '9010ebd5389946fed36875f1d70cc8c5.jpeg', 'Proses', '2019-01-04', '01:54:14'),
(21, '008', 1, 'operator', 'as', '', 'Proses', '2019-01-04', '02:06:05'),
(22, '008', 1, 'operator', 'asd', '', 'Proses', '2019-01-04', '02:06:17'),
(23, '008', 1, 'operator', '', '', 'Proses', '2019-01-04', '02:06:54'),
(24, '008', 1, 'operator', 'asd', '', 'Tidak', '2019-01-04', '02:07:43'),
(25, '007', 1, 'operator', 'selesai dan terbukti', '', 'Selesai', '2019-01-04', '02:17:03'),
(26, '005', 1, 'operator', 'tidak terbukti', '', 'Tidak', '2019-01-04', '02:17:32'),
(27, '002', 1, 'operator', '', '', 'Proses', '2019-01-04', '03:08:49'),
(28, '001', 1, 'operator', '', '', 'Tidak', '2019-01-04', '03:09:02'),
(29, '008', 1, 'operator', '', '', 'Proses', '2019-01-04', '04:30:11'),
(30, '009', 1, 'operator', 'proses', '', 'Proses', '2019-01-04', '04:34:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lembaga`
--

CREATE TABLE `tbl_lembaga` (
  `id_lembaga` int(11) NOT NULL,
  `nm_lembaga` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `pass_ori` text NOT NULL,
  `level` enum('lembaga') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_lembaga`
--

INSERT INTO `tbl_lembaga` (`id_lembaga`, `nm_lembaga`, `username`, `password`, `pass_ori`, `level`) VALUES
(1, 'Badan Pemeriksa Keuangan', 'bpk', '875ee007523ab196c5ab5bd9c91524d069747e86', '', 'lembaga'),
(2, 'Badan Pengawasan Keuangan dan Pembangunan', 'bpkp', 'e6ea2c6d6887531ac034f87b6a703c2d3cc2876c', '', 'lembaga'),
(3, 'Inspektorat Provinsi Sulawesi Selatan', 'inspektorat', '7e29f811b8db45b93c937fb2061655de7acb62f8', '', 'lembaga'),
(4, 'IRJEN', 'irjen', '474f88358845d40347dac8366f0bc8f97c3cf4b0', 'irjen', 'lembaga');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_operator`
--

CREATE TABLE `tbl_operator` (
  `id_operator` int(11) NOT NULL,
  `nm_operator` varchar(150) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL,
  `pass_ori` text NOT NULL,
  `level` enum('operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_operator`
--

INSERT INTO `tbl_operator` (`id_operator`, `nm_operator`, `nip`, `jabatan`, `username`, `password`, `foto`, `pass_ori`, `level`) VALUES
(1, 'Fajri', '234829749', 'Anggota', 'fajri', 'ef5739c4c3f1e47076fec10a7a9ec32aa8de1e63', '', 'fajri', 'operator'),
(2, 'Aser', '12381723', 'Operator', 'aser', 'cdd55263a233b1b9e24b8d2cb7fa328cf3e0f7cf', '', 'aser', 'operator');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemeriksa`
--

CREATE TABLE `tbl_pemeriksa` (
  `id_pemeriksa` int(11) NOT NULL,
  `nm_pemeriksa` varchar(150) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `pass_ori` text NOT NULL,
  `foto` text NOT NULL,
  `level` enum('pemeriksa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_pemeriksa`
--

INSERT INTO `tbl_pemeriksa` (`id_pemeriksa`, `nm_pemeriksa`, `nip`, `jabatan`, `username`, `password`, `pass_ori`, `foto`, `level`) VALUES
(1, 'robi', '123', 'Koor', 'robi', 'f5c8ff28ac5767c4495ca6230fa6d9fc7274bf1f', 'robi', '', 'pemeriksa'),
(2, 'Aser Parera', '123912981423', 'Pemeriksa', 'aser', 'cdd55263a233b1b9e24b8d2cb7fa328cf3e0f7cf', 'aser', '', 'pemeriksa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skpd_kab`
--

CREATE TABLE `tbl_skpd_kab` (
  `id_skpd_kab` int(11) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `nm_skpd_kab` varchar(150) NOT NULL,
  `kepala` varchar(150) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `pass_ori` text NOT NULL,
  `level` enum('opdKab') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_skpd_kab`
--

INSERT INTO `tbl_skpd_kab` (`id_skpd_kab`, `id_kabupaten`, `nm_skpd_kab`, `kepala`, `username`, `password`, `pass_ori`, `level`) VALUES
(3, 3, 'Dinas Perindustrian', 'Robi', 'industri', '9794be5e868dc80f2d38a5776dd98e83940117c2', 'industri', 'opdKab'),
(4, 4, 'Dinas Perkebunan', 'Robi Kurniawan', 'kebun', '70771edaa546aa61b54532f5e87401c82d53a1c4', 'kebun', 'opdKab'),
(5, 3, 'Dinas Pariwisata', '', 'wisatablk', 'b08b41ef241961c00bca5b927752b691c315da52', 'wisatablk', 'opdKab');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skpd_prov`
--

CREATE TABLE `tbl_skpd_prov` (
  `id_skpd_prov` int(11) NOT NULL,
  `nm_skpd_prov` varchar(150) NOT NULL,
  `kepala` varchar(150) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `pass_ori` text NOT NULL,
  `level` enum('opdProv') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_skpd_prov`
--

INSERT INTO `tbl_skpd_prov` (`id_skpd_prov`, `nm_skpd_prov`, `kepala`, `username`, `password`, `pass_ori`, `level`) VALUES
(1, 'Dinas Perhubungan', 'Robi Kurniawan,S.Kom', 'hubung', '6a0446fd8faca9ebafc93c1f4f740c19af72b330', 'hubung', 'opdProv'),
(2, 'Dinas Perdagangan', 'DR.Eng Kurniawan', 'dagang', '45a3ca2e99c3d39e2f81182290daa993c722e739', 'dagang', 'opdProv'),
(3, 'Dinas Kesehatan', '', 'dinkes', '915e18fdd64df308ae48ab9d22d54008727c91e8', 'dinkes', 'opdProv'),
(4, 'Dinas Pengelolaan Lingkungan Hidup ', 'Ir. Hasbi.M.T', 'dplh', '3b9d6031008e196525b4459bd81c81c76b01d04f', 'dplh', 'opdProv'),
(5, 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu', '-', 'ptsp', '54a9e87d20c988bc4cc18fb775344edfdb27b715', 'ptsp', 'opdProv'),
(6, 'Dinas Perindustrian', '-', 'industri', '9794be5e868dc80f2d38a5776dd98e83940117c2', 'industri', 'opdProv'),
(7, 'Dinas Koperasi, Usaha Kecil dan Menengah', '-', 'koperasi', 'bfbde8e129701fe87e5e2b6e10a93101f3e3267e', 'koperasi', 'opdProv'),
(8, 'Dinas Pemberdayaan Perempuan dan Pelindungan Anak', '-', 'perempuan', 'f5283ab9e85eee4ec9e453671dca25b0590947e7', 'perempuan', 'opdProv'),
(9, 'Biro Umum dan Perlengkapan Setda', '-', 'biroumum', '7510a54fe0079a802d44d593a68f9b24fde47833', 'biroumum', 'opdProv'),
(10, 'Biro Perekonomian Sekretariat Daerah', '', 'biroekonomi', 'b46333e4873889545b8e554166f919a77bbe86bb', 'biroekonomi', 'opdProv'),
(11, 'Biro Pengelolaan Barang dan Aset Daerah', '-', 'biroaset', '694636363f2da529dfa452ec30977be1cedf6f87', 'biroaset', 'opdProv'),
(12, 'Biro Pemerintahan Setda', '-', 'biropemerintahan', 'b9ccc5bb3943092945463c4cbd9f2d8b69d677de', 'biropemerintahan', 'opdProv');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_temuan`
--

CREATE TABLE `tbl_temuan` (
  `id_temuan` int(11) NOT NULL,
  `kode_temuan` varchar(10) NOT NULL,
  `tingkatan` enum('Prov','Kab') NOT NULL,
  `id_skpd` int(11) NOT NULL,
  `id_operator` int(11) NOT NULL,
  `tgl_input` date NOT NULL,
  `no_arsip` varchar(100) NOT NULL,
  `tgl_lhp` date NOT NULL,
  `no_lhp` varchar(100) NOT NULL,
  `tgl_surat_tugas` date NOT NULL,
  `no_surat_tugas` varchar(100) NOT NULL,
  `tgl_pkpt` date NOT NULL,
  `unit_pemeriksa` varchar(100) NOT NULL,
  `wasnal` varchar(100) NOT NULL,
  `jenis_pemeriksaan` varchar(100) NOT NULL,
  `opini_pemeriksaan` varchar(100) NOT NULL,
  `memo_opini_pemeriksaan` varchar(255) NOT NULL,
  `sumber_informasi` varchar(100) NOT NULL,
  `tgl_kasus` date NOT NULL,
  `no_kasus` varchar(100) NOT NULL,
  `status_penanganan` varchar(100) NOT NULL,
  `memo_kasus` varchar(100) NOT NULL,
  `kode_profil_kasus` int(100) NOT NULL,
  `kode_obrik` varchar(100) NOT NULL,
  `kode_loan` varchar(100) NOT NULL,
  `kode_departemen` varchar(100) NOT NULL,
  `kode_lembaga` varchar(100) NOT NULL,
  `wilayah_prov` int(100) NOT NULL,
  `wilayah_kab` int(100) NOT NULL,
  `wilayah_kec` int(100) NOT NULL,
  `tahun_anggaran` int(100) NOT NULL,
  `nilai_anggaran` int(11) NOT NULL,
  `realisasi_anggaran` int(11) NOT NULL,
  `audit_anggaran` int(11) NOT NULL,
  `jenis_anggaran` varchar(100) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `tgl_surat` date NOT NULL,
  `lampiran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_temuan`
--

INSERT INTO `tbl_temuan` (`id_temuan`, `kode_temuan`, `tingkatan`, `id_skpd`, `id_operator`, `tgl_input`, `no_arsip`, `tgl_lhp`, `no_lhp`, `tgl_surat_tugas`, `no_surat_tugas`, `tgl_pkpt`, `unit_pemeriksa`, `wasnal`, `jenis_pemeriksaan`, `opini_pemeriksaan`, `memo_opini_pemeriksaan`, `sumber_informasi`, `tgl_kasus`, `no_kasus`, `status_penanganan`, `memo_kasus`, `kode_profil_kasus`, `kode_obrik`, `kode_loan`, `kode_departemen`, `kode_lembaga`, `wilayah_prov`, `wilayah_kab`, `wilayah_kec`, `tahun_anggaran`, `nilai_anggaran`, `realisasi_anggaran`, `audit_anggaran`, `jenis_anggaran`, `no_surat`, `tgl_surat`, `lampiran`) VALUES
(8, '001', 'Prov', 3, 1, '2018-12-17', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '3', '2019-01-08', '', 'Sementara Proses', '', 1, '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '0000-00-00', ''),
(11, '002', 'Prov', 3, 1, '2018-12-17', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '3', '2019-01-14', '', 'Sementara Proses', '', 2, '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '0000-00-00', ''),
(14, '005', 'Prov', 3, 1, '2019-01-02', '123', '2019-01-01', '123', '2019-01-01', '123', '2019-01-01', '123', '123', '', '123', 'testing', '1', '2018-12-18', '123', 'Tidak Terbukti', '123', 3, '123', '123', '123', '123', 123, 3, 0, 0, 100, 100, 100, '', '123', '2019-01-01', '445a382a08365a655e6a9e2ef674879d.pdf'),
(16, '007', 'Prov', 2, 1, '2019-01-02', '123', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '1', '2019-01-15', '', 'Terbukti', '', 1, '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '0000-00-00', ''),
(17, '008', 'Prov', 1, 1, '2019-01-04', '238', '2019-01-05', '888', '2019-01-01', '123', '2019-01-01', '123', '123', '', 'xx', 'xxx', '2', '2019-01-03', '123', 'Sementara Proses', '123', 2, '12', '12', '12', '12', 12, 3, 0, 0, 100, 100, 100, '', '100', '2019-01-01', '9855b82a4cfdaca8e7a317c6e191e0a7.pdf'),
(18, '009', 'Prov', 1, 1, '2019-01-04', '32847', '2019-01-01', '123', '2019-01-01', '123', '2019-01-01', '123', '123', '', '123', 'Kegiatan Pengadaan Barang', '1', '2019-01-01', '123', 'Sementara Proses', 'Kegiatan Pengadaan Barang', 1, '12', '12', '123', '123', 12, 0, 0, 0, 100, 100, 100, '', '12', '2019-01-01', '0d147ce189f3544cb373a5ef7f1aa800.pdf'),
(19, '010', 'Prov', 2, 1, '2019-01-07', '12387', '2019-01-01', '123', '2019-01-01', '123', '2019-01-01', '12', '12', '', '12', '12', '1', '2019-03-01', '123', 'Sementara Proses', 'Mark Up Anggaran', 1, '123', '123', '123', '123', 123, 3, 0, 0, 100, 100, 100, '', '123', '2019-01-01', 'c2eb0530f4558eff18df01ccc78e0366.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tim_pemeriksa`
--

CREATE TABLE `tbl_tim_pemeriksa` (
  `id_tim_pemeriksa` int(11) NOT NULL,
  `kode_temuan` varchar(10) NOT NULL,
  `koordinator` int(11) NOT NULL,
  `anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_tim_pemeriksa`
--

INSERT INTO `tbl_tim_pemeriksa` (`id_tim_pemeriksa`, `kode_temuan`, `koordinator`, `anggota`) VALUES
(7, '002', 1, 2),
(8, '002', 1, 1),
(9, '002', 1, 2),
(10, '003', 1, 2),
(11, '003', 1, 1),
(12, '003', 1, 2),
(13, '004', 1, 1),
(14, '004', 1, 2),
(15, '004', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kabupaten`
--
ALTER TABLE `tbl_kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indexes for table `tbl_kasus`
--
ALTER TABLE `tbl_kasus`
  ADD PRIMARY KEY (`id_kasus`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tbl_lembaga`
--
ALTER TABLE `tbl_lembaga`
  ADD PRIMARY KEY (`id_lembaga`);

--
-- Indexes for table `tbl_operator`
--
ALTER TABLE `tbl_operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `tbl_pemeriksa`
--
ALTER TABLE `tbl_pemeriksa`
  ADD PRIMARY KEY (`id_pemeriksa`);

--
-- Indexes for table `tbl_skpd_kab`
--
ALTER TABLE `tbl_skpd_kab`
  ADD PRIMARY KEY (`id_skpd_kab`);

--
-- Indexes for table `tbl_skpd_prov`
--
ALTER TABLE `tbl_skpd_prov`
  ADD PRIMARY KEY (`id_skpd_prov`);

--
-- Indexes for table `tbl_temuan`
--
ALTER TABLE `tbl_temuan`
  ADD PRIMARY KEY (`id_temuan`);

--
-- Indexes for table `tbl_tim_pemeriksa`
--
ALTER TABLE `tbl_tim_pemeriksa`
  ADD PRIMARY KEY (`id_tim_pemeriksa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_kabupaten`
--
ALTER TABLE `tbl_kabupaten`
  MODIFY `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_kasus`
--
ALTER TABLE `tbl_kasus`
  MODIFY `id_kasus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tbl_lembaga`
--
ALTER TABLE `tbl_lembaga`
  MODIFY `id_lembaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_operator`
--
ALTER TABLE `tbl_operator`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_pemeriksa`
--
ALTER TABLE `tbl_pemeriksa`
  MODIFY `id_pemeriksa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_skpd_kab`
--
ALTER TABLE `tbl_skpd_kab`
  MODIFY `id_skpd_kab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_skpd_prov`
--
ALTER TABLE `tbl_skpd_prov`
  MODIFY `id_skpd_prov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_temuan`
--
ALTER TABLE `tbl_temuan`
  MODIFY `id_temuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_tim_pemeriksa`
--
ALTER TABLE `tbl_tim_pemeriksa`
  MODIFY `id_tim_pemeriksa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;