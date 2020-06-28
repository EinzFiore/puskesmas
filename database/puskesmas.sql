-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31 Mei 2020 pada 13.02
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bidang`
--

CREATE TABLE `tbl_bidang` (
  `id_bidang` int(3) NOT NULL,
  `nama_bidang` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bidang`
--

INSERT INTO `tbl_bidang` (`id_bidang`, `nama_bidang`) VALUES
(1, 'Paramedis'),
(2, 'Apotek'),
(3, 'Administrasi'),
(5, 'Bendahara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_diagnosa_penyakit`
--

CREATE TABLE `tbl_diagnosa_penyakit` (
  `kode_diagnosa` varchar(6) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `ciri_ciri_penyakit` text NOT NULL,
  `keterangan` text NOT NULL,
  `ciri_ciri_umum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_diagnosa_penyakit`
--

INSERT INTO `tbl_diagnosa_penyakit` (`kode_diagnosa`, `nama_penyakit`, `ciri_ciri_penyakit`, `keterangan`, `ciri_ciri_umum`) VALUES
('111', 'FLU', 'Hidung Tersumbat, Demam, Pusing, Bersin-Bersin, Hidung Meler', 'Kena Flu', 'Hidung Tersumbat, Hidung Meler, Bersin-Bersin'),
('112', 'Batuk', 'Tenggorokan Gatal', 'Sakit Ringan', 'Batuk Berdahak dan Batuk Kering');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `kode_dokter` varchar(4) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `nomor_induk_dokter` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_poli` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`kode_dokter`, `nama_dokter`, `jenis_kelamin`, `nomor_induk_dokter`, `tempat_lahir`, `tgl_lahir`, `alamat`, `id_poli`) VALUES
('DA-1', 'Dr. Sarah Wijaya', 'Perempuan', '1122344655', 'Jakarta', '31-12-1982', 'cikampek', '5'),
('DA-2', 'Dr. Caca', 'Perempuan', '9908661133', 'Jakarta', '12-02-1997', 'Cibungur', '5'),
('DG-1', 'Dr. Leni', 'Perempuan', '7755331144', 'Cikarang', '11-01-1987', 'Kosambi', '1'),
('DG-2', 'Dr. Ririn', 'Perempuan', '6655337788', 'Bandung', '29-09-1986', 'Purwasari', '1'),
('DK-1', 'Dr. Fitriani April', 'Perempuan', '9977332277', 'Jakarta', '12-04-1986', 'Perum Cikampek Indah', '4'),
('DK-2', 'Dr. Sarah Wijaya', 'Laki-Laki', '8866225577', 'Cikarang', '20-07-1979', 'Dawuan', '4'),
('DU-1', 'Dr. Samsul Hadi', 'Laki-Laki', '1122334455', 'Jakarta', '20-11-1981', 'Cibungur', '2'),
('DU-2', 'Dr. Juna Arjuna', 'Laki-Laki', '9988661133', 'Jakarta', '25-10-1988', 'Perum Rawamas', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hak_akses`
--

CREATE TABLE `tbl_hak_akses` (
  `id` int(2) NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_hak_akses`
--

INSERT INTO `tbl_hak_akses` (`id`, `id_user_level`, `id_menu`) VALUES
(19, 1, 3),
(30, 1, 2),
(31, 1, 10),
(32, 1, 11),
(33, 1, 12),
(34, 1, 13),
(35, 1, 14),
(36, 1, 15),
(37, 1, 16),
(38, 1, 17),
(39, 1, 18),
(40, 1, 19),
(41, 1, 20),
(42, 1, 21),
(43, 1, 1),
(44, 1, 22),
(45, 1, 23),
(46, 1, 24),
(47, 1, 9),
(48, 1, 25),
(49, 1, 26),
(50, 1, 27),
(51, 1, 28),
(52, 1, 29),
(53, 1, 30),
(55, 1, 32),
(58, 1, 35),
(72, 2, 21),
(74, 2, 23),
(76, 1, 47),
(81, 1, 50),
(82, 3, 50),
(85, 5, 33),
(87, 5, 29),
(88, 5, 31),
(89, 4, 1),
(90, 4, 31),
(92, 4, 37),
(93, 4, 38),
(94, 4, 39),
(95, 4, 40),
(96, 4, 41),
(97, 4, 46),
(98, 3, 27),
(99, 3, 29),
(100, 3, 36),
(101, 3, 34),
(102, 3, 42),
(103, 3, 43),
(104, 3, 44),
(105, 3, 49),
(106, 5, 23),
(108, 5, 27),
(109, 4, 36),
(110, 4, 34),
(111, 4, 50),
(112, 1, 48),
(113, 1, 31);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(2) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Staff Apotek'),
(2, 'Staff Administrasi'),
(3, 'Kepala Puskesmas'),
(4, 'Staff Paramedis'),
(5, 'Bendahara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal_praktek_dokter`
--

CREATE TABLE `tbl_jadwal_praktek_dokter` (
  `id_jadwal` int(2) NOT NULL,
  `kode_dokter` varchar(4) NOT NULL,
  `hari` varchar(13) NOT NULL,
  `jam_mulai` varchar(13) NOT NULL,
  `jam_selesai` varchar(13) NOT NULL,
  `id_poli` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jadwal_praktek_dokter`
--

INSERT INTO `tbl_jadwal_praktek_dokter` (`id_jadwal`, `kode_dokter`, `hari`, `jam_mulai`, `jam_selesai`, `id_poli`) VALUES
(6, 'K-02', 'Rabu', '14.30', '16.30', 2),
(7, 'S-23', 'Senin', '07.30', '11.30', 1),
(8, 'S-24', 'Sabtu', '07.30', '11.00', 2),
(9, 'K-12', 'Kamis', '08.00', '11.00', 1),
(18, 'DU-1', 'Senin - Rabu', '09.00', '12.00', 2),
(19, 'DU-2', 'Kamis & Sabtu', '09.00', '12.00', 2),
(20, 'DG-1', 'Senin - Rabu', '09.00', '12.00', 1),
(21, 'DG-2', 'Kamis - Sabtu', '08.00', '12.00', 1),
(22, 'DK-1', 'Senin - Rabu', '08.00', '12.00', 4),
(23, 'DK-2', 'Kamis & Sabtu', '08.00', '12.00', 4),
(24, 'DU-2', 'Jumat', '08.00', '11.00', 2),
(25, 'DA-2', 'Senin - Rabu', '08.00', '11.00', 5),
(26, 'DA-1', 'Kamis - Sabtu', '08.00', '11.00', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(3) NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(30) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `is_main_menu` int(3) NOT NULL,
  `is_aktif` enum('y','n') NOT NULL COMMENT 'y=yes,n=no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `title`, `url`, `icon`, `is_main_menu`, `is_aktif`) VALUES
(2, 'USER', 'user', 'fa fa-user-o', 0, 'y'),
(3, 'LEVEL USER', 'userlevel', 'fa fa-users', 0, 'y'),
(15, 'DATA PARAMEDIS', 'paramedis', 'fa fa-graduation-cap', 22, 'y'),
(19, 'DATA JABATAN', 'jabatan', 'fa fa-area-chart', 22, 'y'),
(20, 'DATA BIDANG', 'bidang', 'fa fa-user-circle', 22, 'y'),
(21, 'DATA PEGAWAI', 'pegawai', 'fa fa-user-circle', 0, 'y'),
(22, 'DATA MASTER', '#', 'fa fa-id-card', 0, 'y'),
(23, 'DATA POLI', 'poli', 'fa fa-bed', 22, 'y'),
(27, 'DATA DOKTER', 'dokter', 'fa fa-graduation-cap', 0, 'y'),
(29, 'JADWAL PRAKTEK DOKTER', 'jadwalpraktek', 'fa fa-calendar', 0, 'y'),
(31, 'DATA PASIEN', 'pasien', 'fa fa-user', 0, 'y'),
(33, 'DATA PENDAFTARAN', 'pendaftaran', 'fa fa-sign-in', 0, 'y'),
(34, 'DATA DIAGNOSA', 'diagnosa', 'fa fa-id-card', 0, 'y'),
(36, 'DATA TINDAKAN', 'tindakan', 'fa fa-flask', 0, 'y'),
(37, 'STOK OBAT', 'stokobat', 'fa fa-bed', 40, 'y'),
(38, 'PENGADAAN OBAT', 'pengadaanobat', 'fa fa-bed', 40, 'y'),
(39, 'PENGELUARAN OBAT', 'pengeluaranobat', 'fa fa-calendar', 40, 'y'),
(40, 'DATA OBAT', 'dataobat', 'fa fa-card', 0, 'y'),
(41, 'DATA SUPPLIER', 'supplier', 'fa fa-bed', 0, 'y'),
(46, 'DATA OBAT-OBATAN', 'dataobat', 'fa fa-user', 40, 'y'),
(50, 'DATA TINDAKAN BEROBAT', 'tindakanberobat', 'fa fa-graduation-cap', 0, 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `kode_obat` varchar(5) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `dosis_aturan_obat` varchar(40) NOT NULL,
  `satuan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_obat`
--

INSERT INTO `tbl_obat` (`kode_obat`, `nama_obat`, `jenis_obat`, `dosis_aturan_obat`, `satuan`) VALUES
('001', 'Obat Flu', 'Tablet', '3 x 1', 'Strip'),
('002', 'Obat Batuk', 'Sirup', '3 x 1', 'Botol');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_paramedis`
--

CREATE TABLE `tbl_paramedis` (
  `kode_paramedis` varchar(4) NOT NULL,
  `nama_paramedis` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `no_izin_paramedis` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `alamat_tinggal` text NOT NULL,
  `id_poli` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_paramedis`
--

INSERT INTO `tbl_paramedis` (`kode_paramedis`, `nama_paramedis`, `jenis_kelamin`, `no_izin_paramedis`, `tempat_lahir`, `tanggal_lahir`, `alamat_tinggal`, `id_poli`) VALUES
('PA-1', 'Rere Antika', 'Perempuan', '0112121214', 'Jakarta', '27-06-1996', 'Jomin', 5),
('PA-2', 'Susanti', 'Perempuan', '0012121422', 'Bekasi', '29-09-1994', 'Cikampek', 5),
('PG-1', 'Alissa', 'Perempuan', '9898121425', 'Bandung', '06-02-1981', 'Dawuan', 1),
('PG-2', 'Tita Ayu', 'Perempuan', '0012121414', 'Cikarang', '20-05-1988', 'Purwasari', 1),
('PK-1', 'Mulyani', 'Perempuan', '0011776655', 'Purwakarta', '22-07-1980', 'Cikopak', 4),
('PK-2', 'Herlina Susanti', 'Perempuan', '5656123476', 'Jakarta', '27-04-1991', 'Perum Kopo Permai', 4),
('PU-1', 'Kevin Susanto', 'Laki-Laki', '0012121214', 'Subang', '15-11-1986', 'Perum Griya Asri', 2),
('PU-2', 'Kukuh Prahadi', 'Laki-Laki', '9988776655', 'Bekasi', '25-09-1987', 'Perum Rawamas', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `no_rekamedis` char(6) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `no_bpjs` varchar(20) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `status_pasien` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`no_rekamedis`, `no_ktp`, `no_bpjs`, `nama_pasien`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `status_pasien`) VALUES
('000001', '3215251205000002', '-', 'Andre', 'L', 'Jakarta', '14-12-2012', 'Cikampek', 'Umum'),
('000002', '3215251405000202', '-', 'Juan', 'L', 'Jakarta', '12-01-2000', 'Cikampek', 'Umum'),
('000003', '321625140609098', '11223344556677', 'Icay', 'P', 'Cikampek', '01-11-1995', 'Cikampek', 'BPJS'),
('000004', '3254241302000003', '-', 'Tony', 'L', 'Cikampek', '27-11-1999', 'Perum CIkampek Indah', 'Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` varchar(20) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `npwp` varchar(25) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `id_jabatan` int(2) NOT NULL,
  `id_bidang` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `nama_pegawai`, `jenis_kelamin`, `npwp`, `tempat_lahir`, `tanggal_lahir`, `id_jabatan`, `id_bidang`) VALUES
('3215251306000004', 'Andi Nugraha', 'Laki-Laki', '999884443366221', 'Cilamaya', '29-08-1980', 2, 3),
('3215652412000012', 'Nana Handayani', 'Perempuan', '999886664411132', 'Karawang', '19-12-1986', 1, 2),
('3215652412000112', 'Siti Aminah', 'Perempuan', '888973322144455', 'Jakarta', '12-02-1986', 4, 1),
('3215653212000012', 'Annisa Aryani', 'Perempuan', '224457766587879', 'Bekasi', '20-09-1987', 5, 5),
('3279874561766668', 'Dr. Ahmad Hamdan', 'Laki-Laki', '997762233400988', 'Bandung', '13-09-1981', 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `no_registrasi` varchar(4) NOT NULL,
  `no_rawat` varchar(18) NOT NULL,
  `no_rekamedis` varchar(6) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `kode_dokter_penanggung_jawab` varchar(4) NOT NULL,
  `id_poli` varchar(2) NOT NULL,
  `nama_penanggung_jawab` varchar(30) NOT NULL,
  `hubungan_dengan_penanggung_jawab` varchar(30) NOT NULL,
  `alamat_penanggung_jawab` text NOT NULL,
  `status_pasien` varchar(10) NOT NULL,
  `no_bpjs` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`no_registrasi`, `no_rawat`, `no_rekamedis`, `tanggal_daftar`, `kode_dokter_penanggung_jawab`, `id_poli`, `nama_penanggung_jawab`, `hubungan_dengan_penanggung_jawab`, `alamat_penanggung_jawab`, `status_pasien`, `no_bpjs`) VALUES
('0001', '2020-04-21-0001', '000001', '2020-04-21', 'DU-2', '2', 'Siska', 'Saudara Kandung', 'Cikampek', 'Umum', '-'),
('0001', '2020-04-22-0001', '000001', '2020-04-22', 'DA-1', '5', 'Alesia', 'Saudara Kandung', 'Kopo', 'Umum', '-'),
('0001', '2020-04-24-0001', '000002', '2020-04-24', 'DU-2', '2', 'Martin', 'Saudara Kandung', 'Cikampek', 'Umum', '-'),
('0002', '2020-04-24-0002', '000001', '2020-04-24', 'DU-2', '2', 'Ibu', 'Orang Tua', 'Cikampek', 'Umum', '-'),
('0001', '2020-04-30-0001', '000002', '2020-04-30', 'DU-2', '2', 'January', 'Saudara Kandung', 'Kopo', 'Umum', '-'),
('0001', '2020-05-02-0001', '000003', '2020-05-02', 'DU-2', '2', 'Santi', 'Saudara Kandung', 'Cikampek', 'BPJS', '11223344556677'),
('0001', '2020-05-30-0001', '000004', '2020-05-30', 'DU-2', '2', 'Andi', 'Saudara Kandung', 'Perum Cikampek Indah', 'Umum', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengadaan_obat`
--

CREATE TABLE `tbl_pengadaan_obat` (
  `id_pengadaan` varchar(6) NOT NULL,
  `no_trans` varchar(15) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `kode_obat` varchar(5) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl_transaksi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengadaan_obat`
--

INSERT INTO `tbl_pengadaan_obat` (`id_pengadaan`, `no_trans`, `supplier`, `kode_obat`, `nama_obat`, `jenis_obat`, `harga_beli`, `jumlah`, `satuan`, `keterangan`, `total`, `tgl_transaksi`) VALUES
('0001', 'B-200421-0001', 'Pharos Pharmaceutical', '001', 'Obat Flu', 'Tablet', 9000, 100, 'Strip', 'Gratis', 900000, '21-04-2020'),
('0001', 'B-200502-0001', 'Pharos Pharmaceutical', '002', 'Obat Batuk', 'Sirup', 7500, 100, 'Botol', 'Gratis', 750000, '02-05-2020');

--
-- Trigger `tbl_pengadaan_obat`
--
DELIMITER $$
CREATE TRIGGER `pengadaan_obat` AFTER INSERT ON `tbl_pengadaan_obat` FOR EACH ROW BEGIN
INSERT into tbl_stok_obat SET
kode_obat = NEW.kode_obat, jumlah = New.jumlah
ON DUPLICATE KEY UPDATE jumlah=jumlah+New.jumlah;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengeluaran_obat`
--

CREATE TABLE `tbl_pengeluaran_obat` (
  `id_pengeluaran` varchar(6) NOT NULL,
  `no_terima_obat` char(15) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `kode_obat` varchar(5) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `dosis_aturan_obat` varchar(50) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tgl_serah_obat` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengeluaran_obat`
--

INSERT INTO `tbl_pengeluaran_obat` (`id_pengeluaran`, `no_terima_obat`, `nama_pasien`, `kode_obat`, `nama_obat`, `jenis_obat`, `dosis_aturan_obat`, `jumlah`, `satuan`, `keterangan`, `tgl_serah_obat`) VALUES
('0001', 'S-200421-0001', 'Andre', '001', 'Obat Flu', 'Tablet', '3 x 1', 10, 'Strip', 'Gratis', '21-04-2020'),
('0001', 'S-200422-0001', 'Andre', '001', 'Obat Flu', 'Tablet', '3 x 1', 100, 'Strip', 'Gratis', '22-04-2020');

--
-- Trigger `tbl_pengeluaran_obat`
--
DELIMITER $$
CREATE TRIGGER `pengeluaran_obat` AFTER INSERT ON `tbl_pengeluaran_obat` FOR EACH ROW BEGIN
UPDATE tbl_stok_obat
SET jumlah = jumlah - new.jumlah
WHERE kode_obat= new.kode_obat;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_poli`
--

CREATE TABLE `tbl_poli` (
  `id_poli` int(2) NOT NULL,
  `nama_poli` varchar(40) NOT NULL,
  `ruang_poli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_poli`
--

INSERT INTO `tbl_poli` (`id_poli`, `nama_poli`, `ruang_poli`) VALUES
(1, 'POLI GIGI', 'RUANG POLI GIGI'),
(2, 'POLI UMUM', 'RUANG POLI UMUM'),
(5, 'POLI ANAK', 'RUANG POLI ANAK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_resep_obat`
--

CREATE TABLE `tbl_resep_obat` (
  `kode_resep` int(4) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `dosis_aturan_obat` varchar(40) NOT NULL,
  `jumlah_obat` int(2) NOT NULL,
  `no_rawat` varchar(18) NOT NULL,
  `no_rekamedis` varchar(6) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_resep_obat`
--

INSERT INTO `tbl_resep_obat` (`kode_resep`, `nama_obat`, `jenis_obat`, `dosis_aturan_obat`, `jumlah_obat`, `no_rawat`, `no_rekamedis`, `tanggal`) VALUES
(1, 'Obat Flu', 'Tablet', '3 x 1', 10, '2020-04-21-0001', '000001', '2020-04-21'),
(2, 'Obat Flu', 'Tablet', '3 x 1', 10, '2020-04-22-0001', '000001', '2020-04-22'),
(3, 'Obat Batuk', 'Sirup', '3 x 1', 1, '2020-05-02-0001', '000003', '2020-05-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_riwayat_tindakan`
--

CREATE TABLE `tbl_riwayat_tindakan` (
  `id_riwayat_tindakan` int(11) NOT NULL,
  `id_poli` varchar(2) NOT NULL,
  `kode_penyakit` varchar(6) NOT NULL,
  `kode_tindakan` varchar(6) NOT NULL,
  `no_rawat` varchar(18) NOT NULL,
  `hasil_periksa` varchar(100) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `no_rekamedis` varchar(6) NOT NULL,
  `tanggal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_riwayat_tindakan`
--

INSERT INTO `tbl_riwayat_tindakan` (`id_riwayat_tindakan`, `id_poli`, `kode_penyakit`, `kode_tindakan`, `no_rawat`, `hasil_periksa`, `nama_obat`, `no_rekamedis`, `tanggal`) VALUES
(37, '2', '111', '111', '2020-04-21-0001', 'Hidung Tersumbat', 'Obat Flu', '000001', '21-04-2020'),
(38, '5', '111', '111', '2020-04-22-0001', 'Hidung Tersumbat', 'Obat Flu', '000001', '22-04-2020'),
(39, '2', '112', '112', '2020-05-02-0001', 'Batuk Berdahak', 'Obat Batuk', '000003', '02-05-2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rujukan`
--

CREATE TABLE `tbl_rujukan` (
  `kode_rujukan` varchar(11) NOT NULL,
  `no_rujukan` varchar(18) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `nama_penyakit` varchar(30) NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `nama_rumah_sakit` varchar(40) NOT NULL,
  `poli_tujuan` varchar(25) NOT NULL,
  `tgl_rujukan` varchar(10) NOT NULL,
  `no_rawat` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_rujukan`
--

INSERT INTO `tbl_rujukan` (`kode_rujukan`, `no_rujukan`, `nama_pasien`, `nama_penyakit`, `diagnosa`, `nama_rumah_sakit`, `poli_tujuan`, `tgl_rujukan`, `no_rawat`) VALUES
('0001', 'R-20180621-0001', 'Niko Rahmad', 'Cacar', 'cacar ganas', 'RSUD Palembang', 'Poli Kulit', '2018-06-21', '2018/06/21/0002'),
('0001', 'R-20180623-0001', 'Muhammad Yogi', 'Diabetes', 'Kencing Manis', 'RS.Bayukarta', 'Poli Dalam', '2018-06-23', '2018/06/23/0001'),
('0001', 'R-20180625-0001', 'Oman', 'Diabetes', 'Mengalami Sedikit Penghambatan', 'RSUD Tembilahan ', 'Poli Saraf', '2018-06-25', '2018/06/25/0001'),
('0001', 'R-20180630-0001', 'Oman', 'Cacar', 'Bintik-Bintik Merah', 'RS Bayukarta', 'Poli Kulit', '2018-06-30', '2018/06/30/0001'),
('0001', 'R-20180706-0001', 'Muhammad Yogi', 'Cacar', 'Sakit Berdarah', 'RSUD Karawang', 'Poli Kulit', '2018-07-06', '2018/07/06/0002'),
('0001', 'R-20180714-0001', 'Niko Rahmad', 'Hidung Bengkak', 'Hidung Berdarah', 'RSUD Semarang', 'Poli Saraf', '2018-07-14', '2018-07-14-0001'),
('0001', 'R-20180717-0001', 'Muhammad Yogi', 'Gigi Berlubang', 'Pendarahan Di Gigi', 'RSUD Bandung', 'Poli Gigi', '2018-07-17', '2018-07-17-0002'),
('0001', 'R-20200414-0001', 'Jason', 'Sakit hati', 'jantung berdebar', 'heart medical centre', 'penyakit dalam', '2020-04-14', '2020-04-14-0001'),
('0001', 'R-20200422-0001', 'Andre', 'FLU', 'Bersin-Bersin Terus', 'RS MANA SAJA', 'POLI UMUM', '2020-04-22', '2020-04-22-0001'),
('0001', 'R-20200502-0001', 'Icay', 'Batuk', 'Batuk Berdahak', 'RS MANA SAJA', 'UMUM', '2020-05-02', '2020-05-02-0001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id_setting` int(11) NOT NULL,
  `nama_setting` varchar(50) NOT NULL,
  `value` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_setting`
--

INSERT INTO `tbl_setting` (`id_setting`, `nama_setting`, `value`) VALUES
(1, 'Tampil Menu', 'ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_stok_obat`
--

CREATE TABLE `tbl_stok_obat` (
  `kode_obat` varchar(5) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_stok_obat`
--

INSERT INTO `tbl_stok_obat` (`kode_obat`, `jumlah`, `satuan`) VALUES
('001', 8890, 'Strip'),
('002', 100, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `kode_supplier` varchar(6) NOT NULL,
  `nama_supplier` varchar(60) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`kode_supplier`, `nama_supplier`, `alamat`, `no_telpon`) VALUES
('PHA', 'Pharos Pharmaceutical', 'Jakarta', '021-001921');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tindakan`
--

CREATE TABLE `tbl_tindakan` (
  `kode_tindakan` varchar(6) NOT NULL,
  `nama_tindakan` varchar(30) NOT NULL,
  `tindakan_oleh` enum('dokter','petugas','dokter_dan_petugas','') NOT NULL,
  `id_poliklinik` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tindakan`
--

INSERT INTO `tbl_tindakan` (`kode_tindakan`, `nama_tindakan`, `tindakan_oleh`, `id_poliklinik`) VALUES
('111', 'Periksa Hidung', 'dokter', 2),
('112', 'Tes Tenggorokan', 'dokter', 2),
('211', 'Imunisasi', 'dokter_dan_petugas', 5),
('212', 'Periksa Kesehatan', 'dokter', 5),
('311', 'Periksa Gigi', 'dokter_dan_petugas', 1),
('312', 'Cabut Gigi', 'dokter_dan_petugas', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_users` int(2) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `images` text NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `is_aktif` enum('y','n') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_users`, `full_name`, `email`, `password`, `images`, `id_user_level`, `is_aktif`) VALUES
(13, 'Administrator', 'administratorpuskes@gmail.com', '$2y$04$wmaWOGLkbcFDosht.VkYVejHhTKQqr04.97VsF0EvCGGrmnWD3iZS', 'admin11.png', 1, 'y'),
(14, 'Apotek', 'apotek@gmail.com', '$2y$04$dMGLRL0NoywETusrGsaNo.TfHM90UewDVWUMbxoVscfGN9URGpnNK', 'apotek1.png', 4, 'y'),
(15, 'Pendaftaran', 'pendaftaran@gmail.com', '$2y$04$WDhZhQq7C3ok2BSc1LtMputAcc7k.DFxx23AEdhkxW60NgHi17NHa', 'regis1.png', 5, 'y'),
(17, 'Admin 2', 'admin.puskesmas@gmail.com', '$2y$04$VK3DNN9k3.HY6r08A0gRsOtQNC/yzunF1X8yRCYTBB9CR2MIaArrW', 'martin_garrix_is_legend_BtDE98_FO3v.jpg', 1, 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_level`
--

CREATE TABLE `tbl_user_level` (
  `id_user_level` int(2) NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user_level`
--

INSERT INTO `tbl_user_level` (`id_user_level`, `nama_level`) VALUES
(1, 'Admin'),
(4, 'Apotek'),
(5, 'Pendaftaran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tbl_diagnosa_penyakit`
--
ALTER TABLE `tbl_diagnosa_penyakit`
  ADD PRIMARY KEY (`kode_diagnosa`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`kode_dokter`);

--
-- Indexes for table `tbl_hak_akses`
--
ALTER TABLE `tbl_hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_jadwal_praktek_dokter`
--
ALTER TABLE `tbl_jadwal_praktek_dokter`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `tbl_paramedis`
--
ALTER TABLE `tbl_paramedis`
  ADD PRIMARY KEY (`kode_paramedis`),
  ADD KEY `id_spesialis` (`id_poli`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`no_rekamedis`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_bidang` (`id_bidang`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`no_rawat`);

--
-- Indexes for table `tbl_pengadaan_obat`
--
ALTER TABLE `tbl_pengadaan_obat`
  ADD PRIMARY KEY (`no_trans`);

--
-- Indexes for table `tbl_pengeluaran_obat`
--
ALTER TABLE `tbl_pengeluaran_obat`
  ADD PRIMARY KEY (`no_terima_obat`);

--
-- Indexes for table `tbl_poli`
--
ALTER TABLE `tbl_poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `tbl_resep_obat`
--
ALTER TABLE `tbl_resep_obat`
  ADD PRIMARY KEY (`kode_resep`);

--
-- Indexes for table `tbl_riwayat_tindakan`
--
ALTER TABLE `tbl_riwayat_tindakan`
  ADD PRIMARY KEY (`id_riwayat_tindakan`);

--
-- Indexes for table `tbl_rujukan`
--
ALTER TABLE `tbl_rujukan`
  ADD PRIMARY KEY (`no_rujukan`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `tbl_stok_obat`
--
ALTER TABLE `tbl_stok_obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- Indexes for table `tbl_tindakan`
--
ALTER TABLE `tbl_tindakan`
  ADD PRIMARY KEY (`kode_tindakan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  ADD PRIMARY KEY (`id_user_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  MODIFY `id_bidang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_hak_akses`
--
ALTER TABLE `tbl_hak_akses`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_jadwal_praktek_dokter`
--
ALTER TABLE `tbl_jadwal_praktek_dokter`
  MODIFY `id_jadwal` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_poli`
--
ALTER TABLE `tbl_poli`
  MODIFY `id_poli` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_resep_obat`
--
ALTER TABLE `tbl_resep_obat`
  MODIFY `kode_resep` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_riwayat_tindakan`
--
ALTER TABLE `tbl_riwayat_tindakan`
  MODIFY `id_riwayat_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_users` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  MODIFY `id_user_level` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD CONSTRAINT `tbl_pegawai_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `tbl_jabatan` (`id_jabatan`),
  ADD CONSTRAINT `tbl_pegawai_ibfk_2` FOREIGN KEY (`id_bidang`) REFERENCES `tbl_bidang` (`id_bidang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
