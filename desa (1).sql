-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Jul 2021 pada 03.52
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `id_agenda` int(11) NOT NULL,
  `nama_agenda` varchar(200) NOT NULL,
  `tgl` date NOT NULL,
  `isi_agenda` text NOT NULL,
  `mulai_agenda` date NOT NULL,
  `selesai_agenda` date NOT NULL,
  `keterangan_agenda` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`id_agenda`, `nama_agenda`, `tgl`, `isi_agenda`, `mulai_agenda`, `selesai_agenda`, `keterangan_agenda`) VALUES
(1, 'Dani Ceballos', '2021-05-23', '<p>assalamualaikum wr wb&nbsp;</p>\r\n\r\n<p><img src="https://tse1.mm.bing.net/th?id=OIP.k4eQsXrLWzuCNtZc6MT8RQHaHa&amp;pid=Api&amp;P=0&amp;w=300&amp;h=300" /></p>\r\n', '2021-05-26', '2021-05-26', 'wajib membawa masker');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(15) NOT NULL,
  `tgl` date NOT NULL,
  `judul_berita` varchar(60) NOT NULL,
  `isi_berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `tgl`, `judul_berita`, `isi_berita`) VALUES
(2, '2021-05-26', 'Jadwal Final Liga Champions dan Liga Europa: Duo Manchester ', '<p>&nbsp;</p>\r\n\r\n<p><img src="https://cdn0-production-images-kly.akamaized.net/WIFDdDkMm76s52FGFfq2G1T7lQY=/1280x1280/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3203464/original/044492900_1596976873-Liga_Champions_-_Ilustrasi_Piala_Liga_Champions.jpg" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dalam beberapa ke depan, pencinta sepak bola Eropa akan disuguhi dua pertandingan akbar. Duo Manchester bakal terlibat final berbeda, Manchester City di&nbsp;<strong><a href="https://www.bola.com/tag/liga-champions">Liga Champions</a></strong>, sementara Manchester United di Liga Europa.</p>\r\n\r\n<p>Jadwal final<strong>&nbsp;<a href="https://www.bola.com/tag/liga-champions">Liga Champions</a></strong>&nbsp;mempertemukan Manchester City vs Chelsea. All English final ini akan disiarkan secara langsung di SCTV, Minggu 30 Mei 2021.</p>\r\n\r\n<p>Liga Champions - Ilustrasi Piala Liga Champions (Bola.com/Adreanus Titus)</p>\r\n\r\n<p><strong>Bola.com, Jakarta -</strong>&nbsp;Dalam beberapa ke depan, pencinta sepak bola Eropa akan disuguhi dua pertandingan akbar. Duo Manchester bakal terlibat final berbeda, Manchester City di&nbsp;<strong><a href="https://www.bola.com/tag/liga-champions">Liga Champions</a></strong>, sementara Manchester United di Liga Europa.</p>\r\n\r\n<p>Jadwal final<strong>&nbsp;<a href="https://www.bola.com/tag/liga-champions">Liga Champions</a></strong>&nbsp;mempertemukan Manchester City vs Chelsea. All English final ini akan disiarkan secara langsung di SCTV, Minggu 30 Mei 2021.</p>\r\n\r\n<p>BACA JUGA</p>\r\n\r\n<ul>\r\n	<li><a href="https://www.bola.com/dunia/read/4566742/menebak-starter-manchester-united-di-lini-depan-pada-final-liga-europa-kontra-villarreal-edinson-cavani-jadi-kunci" target="_blank">Menebak Starter Manchester United di Lini Depan pada Final Liga Europa Kontra Villarreal: Edinson Cavani Jadi Kunci</a></li>\r\n	<li><a href="https://www.bola.com/dunia/read/4566698/mengenal-markas-klub-egy-maulana-vikri-yang-bakal-menggelar-final-liga-europa-malam-ini-villarreal-vs-manchester-united" target="_blank">Mengenal Markas Klub Egy Maulana Vikri yang Bakal Menggelar Final Liga Europa Malam Ini: Villarreal Vs Manchester United</a></li>\r\n	<li><a href="https://www.bola.com/dunia/read/4566860/podcast-prediksi-liga-europa-lini-belakang-manchester-united-rapuh-usai-ditinggal-harry-maguire" target="_blank">PODCAST: Prediksi Liga Europa, Lini Belakang Manchester United Rapuh Usai Ditinggal Harry Maguire</a></li>\r\n</ul>\r\n\r\n<p>Sementara Manchester United akan meladeni wakil Spanyol, Villarreal, yang pada semifinal menyingkirkan Arsenal. Duel final Liga Europa akan digelar tengah pekan ini.</p>\r\n\r\n<p>Jika kedua tim Manchester ini mampu keluar sebagai juara, maka sepak bola Eropa musim 2020/2021 mutlak menjadi mereka. Keduanya juga akan berjumpa pada Piala Super Eropa yang mempertemukan pemenang Liga Champions dan Liga Europa.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul_galeri` varchar(100) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gambar_galeri` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(100) NOT NULL,
  `jabatan_kontak` varchar(100) NOT NULL,
  `telp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(60) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `tgl` date NOT NULL,
  `pengumuman_author` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `tgl`, `pengumuman_author`) VALUES
(2, 'juara lomba', '<p>liga inggris 2020-21</p>\r\n\r\n<p>juara 1 . machester city</p>\r\n\r\n<p>juara 2. manchester united</p>\r\n', '2021-05-24', 'MUHAMMAD AFIF FAHRUROZI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
