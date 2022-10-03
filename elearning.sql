-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 22 Jul 2022 pada 08.16
-- Versi server: 10.6.7-MariaDB-2ubuntu1
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `siswa` int(11) NOT NULL,
  `guruwali` int(11) NOT NULL,
  `bulan` varchar(64) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `status` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id`, `siswa`, `guruwali`, `bulan`, `tanggal`, `status`) VALUES
(169, 13, 30, 'Februari', 1, 'H'),
(170, 14, 30, 'februari', 2, 'H'),
(171, 13, 30, 'Februari', 3, 'A'),
(172, 14, 30, 'Februari', 1, 'S'),
(173, 14, 30, 'Februari', 2, 'A'),
(174, 14, 30, 'februari', 3, 'H'),
(175, 13, 30, 'Februari', 3, 'I'),
(177, 15, 30, 'Februari', 2, 'I'),
(178, 15, 30, 'Februari', 1, 'A'),
(179, 15, 30, 'Februari', 3, 'H'),
(180, 15, 30, 'Februari', 4, 'S'),
(181, 13, 30, 'februari', 2, 'I'),
(182, 14, 30, 'Februari', 8, 'I'),
(183, 13, 30, 'Februari', 7, 'H'),
(184, 13, 30, 'Februari', 6, 'I'),
(185, 13, 30, 'Februari', 4, 'A'),
(186, 15, 30, 'Februari', 5, 'A'),
(187, 15, 30, 'Februari', 6, 'H'),
(188, 14, 30, 'Februari', 4, 'H'),
(189, 13, 30, 'Februari', 5, 'I'),
(190, 14, 30, 'februari', 5, 'I'),
(191, 15, 30, 'Februari', 7, 'A'),
(192, 13, 30, 'Februari', 31, 'A'),
(193, 13, 30, 'Februari', 28, 'I'),
(194, 15, 30, 'Februari', 18, 'S'),
(195, 14, 30, 'Februari', 9, 'H'),
(196, 14, 30, 'Februari', 20, 'A'),
(197, 15, 30, 'Februari', 20, 'I'),
(198, 13, 30, 'Februari', 1, 'H'),
(199, 13, 30, 'Februari', 12, 'S'),
(200, 13, 30, 'januari', 1, 'I'),
(201, 15, 30, 'januari', 31, 'A'),
(202, 13, 30, 'Agustus', 1, 'I'),
(203, 13, 30, 'Agustus', 1, 'A'),
(204, 13, 30, 'februari', 10, 'H'),
(205, 14, 30, 'februari', 10, 'H'),
(206, 15, 30, 'februari', 10, 'H'),
(207, 13, 30, 'januari', 9, 'H'),
(208, 14, 30, 'januari', 9, 'H'),
(209, 15, 30, 'januari', 9, 'H'),
(210, 13, 30, 'April', 1, 'I'),
(211, 13, 30, 'April', 2, 'I'),
(212, 13, 30, 'April', 3, 'H'),
(213, 14, 30, 'April', 8, 'I'),
(214, 13, 30, 'januari', 2, 'S'),
(215, 13, 30, 'januari', 3, 'I'),
(216, 13, 30, 'januari', 4, 'I'),
(217, 13, 30, 'Desember', 1, 'L'),
(218, 15, 30, 'November', 31, 'I'),
(219, 14, 30, 'januari', 1, 'L'),
(220, 22, 31, 'januari', 1, 'I'),
(221, 22, 31, 'januari', 31, 'L'),
(222, 22, 31, 'Desember', 30, 'A'),
(223, 22, 31, 'Desember', 12, 'A'),
(224, 22, 31, 'januari', 2, 'S'),
(225, 22, 31, 'januari', 3, 'L'),
(226, 22, 31, 'januari', 4, 'L'),
(227, 22, 31, 'januari', 14, 'L'),
(228, 22, 31, 'januari', 21, 'L'),
(229, 22, 31, 'januari', 27, 'L'),
(230, 22, 31, 'februari', 10, 'I'),
(231, 13, 30, 'Oktober', 1, 'H'),
(232, 13, 30, 'Oktober', 7, 'L'),
(233, 14, 30, 'Oktober', 1, 'S'),
(234, 14, 30, 'Oktober', 2, 'S'),
(235, 14, 30, 'Oktober', 3, 'S'),
(236, 14, 30, 'Oktober', 4, 'S'),
(237, 14, 30, 'Oktober', 5, 'S'),
(238, 14, 30, 'Oktober', 6, 'S'),
(239, 15, 30, 'Oktober', 1, 'A'),
(240, 15, 30, 'Oktober', 2, 'H'),
(241, 15, 30, 'Oktober', 3, 'I'),
(242, 15, 30, 'Oktober', 4, 'I'),
(243, 15, 30, 'Oktober', 5, 'S'),
(244, 15, 30, 'Oktober', 6, 'A'),
(245, 13, 30, 'Oktober', 2, 'H'),
(246, 13, 30, 'Oktober', 3, 'H'),
(247, 13, 30, 'Oktober', 4, 'I'),
(248, 13, 30, 'Oktober', 4, 'H'),
(249, 13, 30, 'Oktober', 5, 'H'),
(250, 13, 30, 'Oktober', 6, 'H');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataadmin`
--

CREATE TABLE `dataadmin` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `dataadmin`
--

INSERT INTO `dataadmin` (`id`, `nama`, `email`, `jenis_kelamin`, `password`) VALUES
(3, 'Fredik Stefan', 'fred@gmail.com', 'laki-laki', '$2y$10$qyPJbtDpud4SAJpg.sSKSeM2uZYA3ToGOtPU65wM/otqS8Tr1GJZq'),
(6, 'angga', 'angga@mail.com', 'laki-laki', '$2y$10$DmcJog.eklhkMWneha/nJeC1LYkT9co5hvVt0qONvEhEERfKoXzAC'),
(7, 'fred', 'admin@gmail.com', 'laki-laki', '$2y$10$wZY180xUzr5ZJIv/sX7Iweg5GevpYsV1zx4pfbYPNM/iSle.Icb2e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataguru`
--

CREATE TABLE `dataguru` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `status` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `dataguru`
--

INSERT INTO `dataguru` (`id`, `nama`, `email`, `jenis_kelamin`, `status`, `password`) VALUES
(13, 'Fredik Stefan', 'stefanfredik@gmail.com', 'perempuan', 'Pengajar', '$2y$10$r8OKhBRI.yXBV8mQ6mYm2eXe.ZKXC5nq67/KkOfdtL7X9rZD7Pn5q'),
(21, 'Angga', 'sss@gmail.com', 'laki-laki', 'Pengajar', '$2y$10$VeQvHzvwyzhreFn.WY2KS.uMtdOlKyheMLppKNvu7OcU5wkP4oj1a'),
(27, 'Mr. X', 'sdsd@gmail.com', 'laki-laki', '5', '$2y$10$J92oX/R5soHublzNqoqHIuKBemgGzP4aYuVIVz3JibMIyfNYvyxIO'),
(28, 'fred', 'asasas@asdasd.ghfd', 'laki-laki', '4', '$2y$10$0adhufMQYh5IwtlnEeqsfuD9vjgzDoP1R.bYiQuf8IhMUUbPFOVFS'),
(29, 'dsfsdf', 'sdfsdfsdf@gmail.com', 'laki-laki', '9', '$2y$10$94zZkDogXIGIk7eMDyXwyuDYPaAtdcETS99FwzH3JyitH7n.zWYBi'),
(30, 'Guru 1', 'guru1@gmail.com', 'laki-laki', '7', '$2y$10$NGYEvY65FFw28Z./WwDja.RGsHn7U2wQw.r8RDBLGK0xC8y.WHw5G'),
(31, 'Aman', 'aman@gmail.com', 'laki-laki', '3', '$2y$10$sOdhqGHJkpkiR2DG4ayqYOdR..KWu3eZQczGDheuEY5dJhZWYgaGa'),
(32, 'fdasfda', 'fdasfda@gmail.com', 'laki-laki', 'Pengajar', '$2y$10$Y4VMMd2WnfT4bDzxJeZaIu7f1y.Cv7AWmsDJN/OU64LcmMq2OzhGK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datainformasi`
--

CREATE TABLE `datainformasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `datainformasi`
--

INSERT INTO `datainformasi` (`id`, `judul`, `isi`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Upload Data', 'Silahkan upload semua data yang diperlukan. Coba', 1, '2022-03-06 13:56:52', '2022-03-06 06:21:05'),
(24, 'Informasi', 'Data informasi perlu dirubah', 2, '2022-03-06 02:59:32', '2022-03-19 15:02:47'),
(25, 'ewrfewr', 'dfrdawsfasdf', 3, '2022-03-06 04:47:54', '2022-03-06 04:47:54'),
(34, 'Hallo', 'Halo,. Selamat malam-semuanya', 2, '2022-05-28 08:37:13', '2022-05-28 08:37:13'),
(35, '432432', 'fsdfsdf', 1, '2022-06-23 08:06:50', '2022-06-23 08:06:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datajadwal`
--

CREATE TABLE `datajadwal` (
  `id` int(11) NOT NULL,
  `hari` varchar(16) NOT NULL,
  `jam` varchar(16) NOT NULL,
  `kelas` int(11) NOT NULL,
  `mapel` int(11) NOT NULL,
  `guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `datajadwal`
--

INSERT INTO `datajadwal` (`id`, `hari`, `jam`, `kelas`, `mapel`, `guru`) VALUES
(9, 'Sabtu', '06:45 - 06:45', 9, 7, 27),
(10, 'Minggu', '02:52 - 02:54', 4, 3, 13),
(25, 'Senin', '01:03 - 00:03', 3, 2, 30),
(26, 'Selasa', '00:24 - 05:22', 7, 1, 30),
(27, 'Sabtu', '03:31 - 04:32', 9, 8, 30),
(28, 'Kamis', '00:38 - 00:35', 9, 8, 30),
(29, 'Senin', '21:57 - 21:57', 9, 2, 30),
(30, 'Senin', '01:09 - 01:09', 7, 2, 21),
(31, 'Kamis', '01:09 - 01:09', 9, 8, 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datajurusan`
--

CREATE TABLE `datajurusan` (
  `id_jurusan` int(11) NOT NULL,
  `kode_jurusan` varchar(64) NOT NULL,
  `nama_jurusan` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `datajurusan`
--

INSERT INTO `datajurusan` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`) VALUES
(7, 'TKJ', 'Teknik Komputer dan Jaringan'),
(15, 'HTL', 'Perhotelan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakelas`
--

CREATE TABLE `datakelas` (
  `id` int(11) NOT NULL,
  `kode_kelas` varchar(16) NOT NULL,
  `nama_kelas` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `datakelas`
--

INSERT INTO `datakelas` (`id`, `kode_kelas`, `nama_kelas`) VALUES
(1, '1', 'I'),
(2, '2', 'II'),
(3, '3', 'III');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datamapel`
--

CREATE TABLE `datamapel` (
  `id` int(11) NOT NULL,
  `kode_mapel` varchar(16) NOT NULL,
  `nama_mapel` varchar(64) NOT NULL,
  `kkm` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `datamapel`
--

INSERT INTO `datamapel` (`id`, `kode_mapel`, `nama_mapel`, `kkm`) VALUES
(1, 'ipa', 'Ilmu Pengetahuan Alam', 65),
(2, 'mtk', 'Matematika', 60),
(3, 'ips', 'Ilmu Pengetahuan Sosial', 0),
(7, 'fsk', 'Fisika', 0),
(8, 'kma', 'Kimia', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataruangankelas`
--

CREATE TABLE `dataruangankelas` (
  `id` int(11) NOT NULL,
  `kode_ruangan` varchar(16) NOT NULL,
  `nama_ruangan` varchar(16) NOT NULL,
  `kelas` varchar(16) NOT NULL,
  `jurusan` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `dataruangankelas`
--

INSERT INTO `dataruangankelas` (`id`, `kode_ruangan`, `nama_ruangan`, `kelas`, `jurusan`) VALUES
(3, 'HTL-1', 'Hotel 1', '1', 'HTL'),
(4, 'TKJ-1A', 'TKJ 1A', '1', 'TKJ'),
(5, 'TKJ-1B', 'TKJ 1B', '1', 'TKJ'),
(7, 'RPL-1B', 'RPL 1 B', '1', 'RPL'),
(9, 'TKJ-3B', 'TKJ 3 B', '3', 'TKJ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datasiswa`
--

CREATE TABLE `datasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `ruangan` int(11) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `datasiswa`
--

INSERT INTO `datasiswa` (`id`, `nama`, `email`, `jenis_kelamin`, `ruangan`, `password`) VALUES
(13, 'Budi Do Re Mi', 'budi@gmail.com', 'laki-laki', 7, '$2y$10$p4IE2Jo6gEmBykAAHXa12e02etq18VBbxsnIiHmsrFr/BFfj.4c7a'),
(14, 'fredefsfsd', 'fred@jinom.net', 'laki-laki', 7, '123456'),
(15, 'Siswa 2', 'siswa2@gmail.com', 'laki-laki', 7, '$2y$10$vUh13EYNLlXgFnFXHDpr4uFAyT7f5BAxlT.GTnR/aY/m.tY2ZCYWq'),
(20, 'fred', 'frediks@gmail.com', 'laki-laki', 4, '$2y$10$8cas2FIl0mJ5NZWuq2wjaO2vG.3o/2RZ5rfVz79VNSpq1N5dwcGSu'),
(21, 'Coba', 'coba@gmail.com', 'laki-laki', 4, '$2y$10$Mv0dLOw4htGrtFAxMAIgMu9Z0QbFTB0b9gZiQeMwZKxgIJc.i15j6'),
(22, 'Contoh', 'contoh@gmail.com', 'laki-laki', 3, '$2y$10$Y/8FYECQFedkhYLE.R2hf.T//VWp5N5yl4w06TK80zxMkCsmXhiHC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guruinformasi`
--

CREATE TABLE `guruinformasi` (
  `id` int(11) NOT NULL,
  `guru` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guruinformasi`
--

INSERT INTO `guruinformasi` (`id`, `guru`, `kelas`, `judul`, `isi`, `created_at`) VALUES
(11, 30, 4, 'werwer', 'ewrwerwerwer', '2022-06-23 08:56:34'),
(12, 30, 9, 'ewrewrewr', 'ewrwerew', '2022-06-23 08:56:40'),
(14, 30, 3, 'sadas trhetryetr', 'jtyhjytrj tdyerty tryetry rtyetr tryert rtytre rty try rty rty', '2022-07-21 03:41:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gurukelas`
--

CREATE TABLE `gurukelas` (
  `id` int(11) NOT NULL,
  `guru` int(11) NOT NULL,
  `kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasilquiz`
--

CREATE TABLE `hasilquiz` (
  `id` int(11) NOT NULL,
  `siswa` int(11) NOT NULL,
  `guru` int(11) NOT NULL,
  `quiz` int(11) NOT NULL,
  `waktuupload` datetime NOT NULL,
  `filequiz` varchar(256) NOT NULL,
  `keterangan` varchar(264) NOT NULL,
  `nilai` float DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasilquiz`
--

INSERT INTO `hasilquiz` (`id`, `siswa`, `guru`, `quiz`, `waktuupload`, `filequiz`, `keterangan`, `nilai`) VALUES
(10, 13, 30, 13, '2022-07-06 11:05:21', '1657123521_7762df96ca7e4adac80b.png', 'Quiz 1 Berhasil', 100),
(11, 15, 30, 14, '2022-07-21 04:25:56', '1658395556_6fe937ea2dcf9d431e64.png', 'Sukses', 0),
(12, 15, 30, 15, '2022-07-21 05:45:48', '1658400348_b6ea0e5cf1c61889bd2c.png', 'sudah pak', 90);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasiltugas`
--

CREATE TABLE `hasiltugas` (
  `id` int(11) NOT NULL,
  `siswa` int(11) NOT NULL,
  `guru` int(11) NOT NULL,
  `tugas` int(11) NOT NULL,
  `waktuupload` datetime NOT NULL,
  `filetugas` varchar(256) NOT NULL,
  `keterangan` varchar(264) NOT NULL,
  `nilai` float DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasiltugas`
--

INSERT INTO `hasiltugas` (`id`, `siswa`, `guru`, `tugas`, `waktuupload`, `filetugas`, `keterangan`, `nilai`) VALUES
(23, 13, 30, 37, '2022-07-06 07:03:11', '1657108991_977dc239642d0121cd1c.png', 'Selesai', 100),
(24, 13, 30, 38, '2022-07-06 10:50:10', '1657122610_a11c1d9ddbd83e69f23f.png', 'Beres', 100),
(25, 15, 30, 44, '2022-07-21 05:41:13', '1658400073_df8b60036777b2e3834f.jpg', 'Tugas 3 sdh beres', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasilujian`
--

CREATE TABLE `hasilujian` (
  `id` int(11) NOT NULL,
  `siswa` int(11) NOT NULL,
  `guru` int(11) NOT NULL,
  `ujian` int(11) NOT NULL,
  `waktuupload` datetime NOT NULL,
  `fileujian` varchar(256) NOT NULL,
  `keterangan` varchar(264) NOT NULL,
  `nilai` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasilujian`
--

INSERT INTO `hasilujian` (`id`, `siswa`, `guru`, `ujian`, `waktuupload`, `fileujian`, `keterangan`, `nilai`) VALUES
(7, 15, 30, 7, '2022-07-21 04:27:02', '1658395622_33e92d223c14366c67b3.jpg', 'asdasd', 100),
(8, 15, 30, 8, '2022-07-21 05:46:19', '1658400379_d545488a2cf51ea1ae29.jpg', 'selesai', 85);

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `guru` int(11) NOT NULL,
  `mapel` int(11) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `file` varchar(254) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id`, `kelas`, `guru`, `mapel`, `keterangan`, `file`, `waktu`) VALUES
(31, 3, 30, 1, 'Materi 1', '1653137031_ef879b51bc3420603c55.jpg', '2022-05-21 07:43:51'),
(32, 3, 30, 2, 'Pertemuan 1', '1653137181_99acae778992080b57ca.jpg', '2022-05-21 07:46:21'),
(39, 3, 21, 1, 'IPA Materi 1', '1653758766_2104ef5e8d134d47215f.png', '2022-05-28 12:26:06'),
(40, 4, 21, 2, 'Materi 1', '1653758787_15f55252bd03e825879d.jpg', '2022-05-28 12:26:27'),
(42, 4, 30, 1, 'Materi 1', '1658395697_6b935e300d1d70493379.jpg', '2022-07-21 04:28:17'),
(43, 7, 30, 1, 'sadasdas', '1658395715_8c32db070e3cf2a3d3c0.jpg', '2022-07-21 04:28:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-02-11-152959', 'App\\Database\\Migrations\\User', 'default', 'App', 1644594113, 1),
(3, '2022-02-25-065832', 'App\\Database\\Migrations\\DataGuru', 'default', 'App', 1645773123, 2),
(4, '2022-02-25-105142', 'App\\Database\\Migrations\\DataSiswa', 'default', 'App', 1645786362, 3),
(6, '2022-02-25-140105', 'App\\Database\\Migrations\\DataJurusan', 'default', 'App', 1645797991, 4),
(7, '2022-02-25-143112', 'App\\Database\\Migrations\\DataAdmin', 'default', 'App', 1645799558, 5),
(8, '2022-03-06-054708', 'App\\Database\\Migrations\\DataInformasi', 'default', 'App', 1646546156, 6),
(10, '2022-03-12-074309', 'App\\Database\\Migrations\\DataKelas', 'default', 'App', 1647071360, 7),
(12, '2022-03-12-080549', 'App\\Database\\Migrations\\DataRuangankelas', 'default', 'App', 1647073221, 8),
(15, '2022-03-12-100151', 'App\\Database\\Migrations\\DataMapel', 'default', 'App', 1647079815, 9),
(18, '2022-03-12-110103', 'App\\Database\\Migrations\\DataJadwal', 'default', 'App', 1647083263, 10),
(20, '2022-04-17-141233', 'App\\Database\\Migrations\\Guru\\Tugas', 'default', 'App', 1650205322, 11),
(21, '2022-04-17-111139', 'App\\Database\\Migrations\\Guru\\Quiz', 'default', 'App', 1650193939, 12),
(22, '2022-04-17-113335', 'App\\Database\\Migrations\\Guru\\Ujian', 'default', 'App', 1650195256, 13),
(23, '2022-04-24-065923', 'App\\Database\\Migrations\\Guru\\Materi', 'default', 'App', 1650783883, 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `siswa` int(11) NOT NULL,
  `guru` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `mapel` int(11) NOT NULL,
  `katogory` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaitugas`
--

CREATE TABLE `nilaitugas` (
  `id` int(11) NOT NULL,
  `tugas` int(11) NOT NULL,
  `siswa` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `status` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `dibuat` datetime NOT NULL,
  `bataswaktu` datetime NOT NULL,
  `status` varchar(32) NOT NULL,
  `kelas` varchar(64) NOT NULL,
  `mapel` varchar(64) NOT NULL,
  `guru` varchar(32) NOT NULL,
  `file` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `quiz`
--

INSERT INTO `quiz` (`id`, `keterangan`, `dibuat`, `bataswaktu`, `status`, `kelas`, `mapel`, `guru`, `file`) VALUES
(13, 'Quiz1', '2022-07-06 11:04:00', '2022-07-14 03:08:00', 'Tidak Aktif', '7', '1', '30', ''),
(14, 'dadas', '2022-07-21 04:20:00', '2022-07-22 17:23:00', 'Aktif', '7', '1', '30', '1658395218_0bdbce6a4820a6f5fc05.jpg'),
(15, 'Quiz 3', '2022-07-21 05:43:00', '2022-07-22 18:45:00', 'Aktif', '7', '2', '30', '1658400213_2a12128b172cd1d01a52.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswakelas`
--

CREATE TABLE `siswakelas` (
  `id` int(11) NOT NULL,
  `siswa` int(11) NOT NULL,
  `kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `dibuat` datetime NOT NULL,
  `bataswaktu` datetime NOT NULL,
  `status` varchar(32) NOT NULL,
  `kelas` varchar(64) NOT NULL,
  `mapel` varchar(64) NOT NULL,
  `guru` varchar(32) NOT NULL,
  `file` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id`, `keterangan`, `dibuat`, `bataswaktu`, `status`, `kelas`, `mapel`, `guru`, `file`) VALUES
(41, 'ertret', '2022-07-21 03:59:00', '2022-07-22 16:01:00', 'Aktif', '4', '8', '30', '1658393986_8011b952004d65b01f37.jpg'),
(43, 'zsxczxc', '2022-07-21 04:06:00', '2022-07-22 17:05:00', 'Aktif', '7', '1', '30', '1658394367_33833a1f5c4052e0b3cc.jpg'),
(44, 'Tugas 3', '2022-07-21 05:39:00', '2022-07-22 19:40:00', 'Aktif', '7', '2', '30', '1658399975_dad15959d004e1697422.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian`
--

CREATE TABLE `ujian` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `dibuat` datetime NOT NULL,
  `bataswaktu` datetime NOT NULL,
  `status` varchar(32) NOT NULL,
  `kelas` varchar(64) NOT NULL,
  `mapel` varchar(64) NOT NULL,
  `guru` varchar(32) NOT NULL,
  `ujian` varchar(128) NOT NULL,
  `file` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `ujian`
--

INSERT INTO `ujian` (`id`, `keterangan`, `dibuat`, `bataswaktu`, `status`, `kelas`, `mapel`, `guru`, `ujian`, `file`) VALUES
(7, 'asdfwda', '2022-07-21 04:25:00', '2022-07-23 07:25:00', 'Aktif', '7', '2', '30', '', '1658395507_ca93d767e8931451e93e.jpg'),
(8, 'Ujian Tengah Semester', '2022-07-21 05:44:00', '2022-07-22 19:44:00', 'Aktif', '7', '2', '30', '', '1658400262_512508e1e1e04380ffbc.jpg'),
(9, 'Test Upload', '2022-07-21 05:54:00', '2022-07-22 06:53:00', 'Aktif', '7', '2', '30', '', '1658400847_54f0c4f5537a16a9b496.jpg'),
(10, 'ujian ', '2022-07-21 05:55:00', '2022-07-22 18:57:00', 'Aktif', '7', '1', '30', '', '1658400957_0f35407b644be33c6574.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `role` varchar(128) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `email`, `role`, `password`) VALUES
(1, 'angga', 'Angga', 'angga@gmail.com', 'admin', '123456'),
(2, 'boby', 'Boby', 'boby@gmail.com', 'guru', '1234'),
(3, 'budi', 'Budi', 'budi@gmail.com', 'siswa', '1234');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dataadmin`
--
ALTER TABLE `dataadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dataguru`
--
ALTER TABLE `dataguru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datainformasi`
--
ALTER TABLE `datainformasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datajadwal`
--
ALTER TABLE `datajadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datajurusan`
--
ALTER TABLE `datajurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `datakelas`
--
ALTER TABLE `datakelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datamapel`
--
ALTER TABLE `datamapel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dataruangankelas`
--
ALTER TABLE `dataruangankelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datasiswa`
--
ALTER TABLE `datasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guruinformasi`
--
ALTER TABLE `guruinformasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasilquiz`
--
ALTER TABLE `hasilquiz`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasiltugas`
--
ALTER TABLE `hasiltugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasilujian`
--
ALTER TABLE `hasilujian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilaitugas`
--
ALTER TABLE `nilaitugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswakelas`
--
ALTER TABLE `siswakelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT untuk tabel `dataadmin`
--
ALTER TABLE `dataadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `dataguru`
--
ALTER TABLE `dataguru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `datainformasi`
--
ALTER TABLE `datainformasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `datajadwal`
--
ALTER TABLE `datajadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `datajurusan`
--
ALTER TABLE `datajurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `datakelas`
--
ALTER TABLE `datakelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `datamapel`
--
ALTER TABLE `datamapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `dataruangankelas`
--
ALTER TABLE `dataruangankelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `datasiswa`
--
ALTER TABLE `datasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `guruinformasi`
--
ALTER TABLE `guruinformasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `hasilquiz`
--
ALTER TABLE `hasilquiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `hasiltugas`
--
ALTER TABLE `hasiltugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `hasilujian`
--
ALTER TABLE `hasilujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `nilaitugas`
--
ALTER TABLE `nilaitugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `siswakelas`
--
ALTER TABLE `siswakelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
