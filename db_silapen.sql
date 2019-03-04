-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Feb 2019 pada 03.44
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_silapen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`id`, `nama`) VALUES
(1, 'Islam'),
(2, 'Kristen Protestan'),
(3, 'Katolik'),
(4, 'Hindu'),
(5, 'Buddha'),
(6, 'Kong Hu Cu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kematian`
--

CREATE TABLE `data_kematian` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_meninggal` date NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kematian`
--

INSERT INTO `data_kematian` (`id`, `nama`, `umur`, `tempat_lahir`, `tgl_lahir`, `tgl_meninggal`, `alamat`) VALUES
(1, 'ipul', '56', 'indramayu', '2019-01-08', '2019-09-21', 'dukuh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_lahir`
--

CREATE TABLE `data_lahir` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_agama` int(11) NOT NULL,
  `nik_ayah` varchar(100) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nik_ibu` varchar(100) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `id_jk` varchar(11) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_lahir`
--

INSERT INTO `data_lahir` (`id`, `nik`, `nama`, `tempat`, `tgl_lahir`, `id_agama`, `nik_ayah`, `nama_ayah`, `nik_ibu`, `nama_ibu`, `id_jk`, `alamat`) VALUES
(1, '', 'aa', 'aa', '2019-02-26', 0, '', 'qq', '', 'zz', '1', 'f'),
(2, '49393392', 'salmon', 'jakarta', '2019-02-27', 0, '2', 'saha', '3', 'eta', '1', 'fdkekf'),
(3, '59834922994399', 'jeq', 'jakarta', '2019-02-07', 0, '3', 'seno', '1', 'rewi', '3', 'dukuh'),
(4, '95945324923919', 'salim', 'indramayu', '2010-01-05', 0, '4', 'jenia', '1', 'race', '1', 'dukuh blok AG'),
(5, '45392349', 'jenia', 'indramayu', '2019-03-06', 0, '1', 'krjf', '1', 'dsjkjksd', '3', 'sdjflksd'),
(6, 'tjdgfkdk', 'fkdkek', 'fkdk', '2019-02-11', 0, '1', 'dsfjsjdjf', '1', 'dljfkdsk', '1', 'fksdkfk'),
(7, '594924959', 'jenia adellia', 'bekasi', '2019-02-27', 0, '6', 'sdtdkiridfyi', '6', 'fmgeskdk', '3', 'mxfgdfm'),
(8, '4865932929', 'jenia', 'bekasi', '2019-02-27', 0, '6', 'bapa adelia', '6', 'ibu adelia', '3', 'sfkdfksdfkdksdkk'),
(9, '535939439', 'jenia', 'bekasi', '2019-02-19', 0, '6', 'bapa adelia', '6', 'ibu adelia', '3', 'dukuh'),
(10, '454359429139', 'jenia', 'jkt', '2019-02-26', 0, '1', 'rkskdfke', '1', 'dsjfkds', '3', 'kfgk'),
(11, '45664399299329', 'muda', 'bekasi', '2019-02-19', 0, '1', 'sjfdskfdsk', '1', 'askfkadsk', '1', 'dskfkdsk'),
(12, '4359439439232', 'muda', 'bekasi', '2019-02-26', 0, '6', 'dajfksdk', '2', 'fdxfkks', '3', 'skdkk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `id` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` varchar(100) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_agama` int(11) NOT NULL,
  `id_jk` int(11) NOT NULL,
  `id_gol_darah` int(11) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `nama_kpl` varchar(255) NOT NULL,
  `id_statuswrg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penduduk`
--

INSERT INTO `data_penduduk` (`id`, `nik`, `nama`, `umur`, `tempat_lahir`, `tgl_lahir`, `id_agama`, `id_jk`, `id_gol_darah`, `kewarganegaraan`, `alamat`, `pekerjaan`, `nama_kpl`, `id_statuswrg`) VALUES
(1, 2147483647, 'jenia', '19', 'jakarta', '2019-01-08', 0, 3, 0, 'indonesia', 'desa dukuh blok A', 'mahasiswa', '', 0),
(2, 2147483647, 'shafa', '20', 'cirebon', '1998-11-11', 0, 3, 3, 'indonesia', 'Lohbener', 'Mahasiswa', '', 0),
(3, 459935324, 'dkfekd', '20', 'dfj', '2019-02-02', 1, 1, 4, 'indonesia', 'dukuh', 'buruh', 'yoyon', 0),
(4, 5493221, 'dfk', '30', 'fdj', '2019-02-02', 1, 1, 1, 'indonesia', 'dfkdsklfs', 'buruh', 'seno', 0),
(5, 643923, 'jenia', '56', 'bekasi', '2019-02-18', 1, 1, 1, '', 'ksdfkefkf', 'fkksfk', 'fkke', 1),
(6, 2147483647, 'jenia adellia', '32', 'jakarta', '2019-02-21', 1, 3, 1, '', 'fdsssshkmmmmmmmmmmmmmm', 'mgfgdkgkk', 'bmbkffke', 1),
(7, 5593929, 'muda', '56', 'bekasi', '2019-02-20', 1, 3, 1, '', 'sdkfkesdkf', 'pengangguran', 'jdsjf', 1),
(8, 3347922, 'Asri', '1', 'Indramayu', '2016-08-29', 1, 3, 2, '', 'Jalan Batik Gumilang', 'Wiraswasta', 'Bayu', 1),
(9, 2147483647, 'Wirananda', '21', 'Indramayu', '1997-02-19', 1, 1, 3, '', 'Jalan Purbawangi', 'Wiraswasta', 'Indra', 1),
(10, 2147483647, 'Genta Dwi Arya', '16', 'Indramayu', '2003-03-03', 1, 1, 4, '', 'Jalan Mawar ', 'Pelajar', 'Irwan', 1),
(11, 2147483647, 'Indri Pita Asih', '16', 'Indramayu', '2003-02-11', 1, 3, 2, '', 'Jalan Mekar Sari', 'Pelajar', 'Gustian', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gol_darah`
--

CREATE TABLE `gol_darah` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gol_darah`
--

INSERT INTO `gol_darah` (`id`, `nama`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'O'),
(4, 'AB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jk`
--

CREATE TABLE `jk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jk`
--

INSERT INTO `jk` (`id`, `nama`) VALUES
(1, 'Laki-Laki'),
(3, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt`
--

CREATE TABLE `rt` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rt`
--

INSERT INTO `rt` (`id`, `nama`, `alamat`, `telepon`, `email`) VALUES
(1, 'Dirga', 'jalan batik kumeli ', '085923100930', 'Dirga678@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekretaris_desa`
--

CREATE TABLE `sekretaris_desa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekretaris_desa`
--

INSERT INTO `sekretaris_desa` (`id`, `nama`, `alamat`, `telepon`, `email`) VALUES
(1, 'Indah Permata', 'Jalan Raya Batik', '089762134556', 'Indaahpermata@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id`, `nama`) VALUES
(1, 'Menikah'),
(2, 'Belum Menikah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statuswrg`
--

CREATE TABLE `statuswrg` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statuswrg`
--

INSERT INTO `statuswrg` (`id`, `nama`) VALUES
(1, 'WNI (WARGA NEGARA INDONESIA)'),
(2, 'WNA (WARGA NEGARA ASING)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_izin_ortu`
--

CREATE TABLE `surat_izin_ortu` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_jk` int(11) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `tempat_lahir_anak` varchar(255) NOT NULL,
  `tgl_lahir_anak` date NOT NULL,
  `id_jk_anak` int(11) NOT NULL,
  `bekerja_di` varchar(255) NOT NULL,
  `sebagai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_izin_ortu`
--

INSERT INTO `surat_izin_ortu` (`id`, `nama`, `tempat_lahir`, `tgl_lahir`, `id_jk`, `pekerjaan`, `alamat`, `nama_anak`, `tempat_lahir_anak`, `tgl_lahir_anak`, `id_jk_anak`, `bekerja_di`, `sebagai`) VALUES
(1, 'fdnkfskdj', 'jakarta', '2019-03-06', 3, 'flsflskd', 'fdkksgdk', 'gfdkk', 'gkdfkg', '2019-03-05', 3, 'FKDK', 'KFDSKF'),
(2, 'gkdffk', 'fkfrrek', '2019-02-18', 1, 'ndfnn', 'fdf', 'fkdfk', 'gksdfk', '2019-02-06', 3, 'dkfkerk', 'qkekf'),
(3, 'samsu', 'risd', '2019-02-18', 1, 'mdfffdk', 'fdffdfsk', 'rketewkek', 'krffekek', '2019-02-26', 3, 'kfgkdelk', 'ltrlrlrgd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_ket_desa`
--

CREATE TABLE `surat_ket_desa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik` varchar(100) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_ket_desa`
--

INSERT INTO `surat_ket_desa` (`id`, `nama`, `tempat_lahir`, `tgl_lahir`, `nik`, `pekerjaan`, `alamat`, `tujuan`) VALUES
(5, 'suji', 'indramayu', '2019-02-19', '70502340', 'suji', 'indramayu', 'beasiswa ppa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_ket_paspor`
--

CREATE TABLE `surat_ket_paspor` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_jk` int(11) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama_ortu` varchar(255) NOT NULL,
  `nama_kakek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_ket_paspor`
--

INSERT INTO `surat_ket_paspor` (`id`, `nama`, `id_jk`, `id_agama`, `tempat_lahir`, `tgl_lahir`, `pekerjaan`, `alamat`, `nama_ortu`, `nama_kakek`) VALUES
(1, 'jgdjjd', 3, 1, 'dkskrek', '2019-02-26', 'djfgkkfs', 'kdffkkd', 'kkdrkrd', 'jrfkvkrefk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_ket_usaha`
--

CREATE TABLE `surat_ket_usaha` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_jk` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tujuan_usaha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_ket_usaha`
--

INSERT INTO `surat_ket_usaha` (`id`, `nama`, `nik`, `tempat_lahir`, `tgl_lahir`, `id_jk`, `id_status`, `alamat`, `tujuan_usaha`) VALUES
(3, 'jenia', '65949391239', 'bekasi', '2019-02-12', 3, 1, 'bekasi', 'dagang buah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_tanah`
--

CREATE TABLE `surat_tanah` (
  `id` int(255) NOT NULL,
  `no_persil` varchar(22) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `letak_tanah` varchar(255) NOT NULL,
  `luas_tanah` varchar(100) NOT NULL,
  `min_harga_tanah` varchar(100) NOT NULL,
  `max_harga_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(100) NOT NULL,
  `harga_bangunan` varchar(255) NOT NULL,
  `tanah` varchar(255) NOT NULL,
  `bangunan` varchar(255) NOT NULL,
  `bts_sebelah_selatan` varchar(255) NOT NULL,
  `bts_sebelah_utara` varchar(255) NOT NULL,
  `bts_sebelah_timur` varchar(255) NOT NULL,
  `bts_sebelah_barat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_tanah`
--

INSERT INTO `surat_tanah` (`id`, `no_persil`, `nama`, `letak_tanah`, `luas_tanah`, `min_harga_tanah`, `max_harga_tanah`, `luas_bangunan`, `harga_bangunan`, `tanah`, `bangunan`, `bts_sebelah_selatan`, `bts_sebelah_utara`, `bts_sebelah_timur`, `bts_sebelah_barat`) VALUES
(5, '493549240340230', 'mahmuda', 'dukuh', '100500', '25000', '50000', '300000', '400000', '500000', '2000000', 'dukuh', 'dukuh utara', 'dukuh selatan', 'dukuh barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_wali`
--

CREATE TABLE `surat_wali` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_wali`
--

INSERT INTO `surat_wali` (`id`, `nama`, `tempat_lahir`, `tgl_lahir`, `nik`, `alamat`, `tujuan`) VALUES
(1, 'fddk', 'kkke', '2019-02-04', '342993929', 'mdfmerhgm', 'efr');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_rt` int(11) NOT NULL,
  `id_sekretaris_desa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `id_rt`, `id_sekretaris_desa`) VALUES
(1, 'admin', 'admin', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kematian`
--
ALTER TABLE `data_kematian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_lahir`
--
ALTER TABLE `data_lahir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gol_darah`
--
ALTER TABLE `gol_darah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jk`
--
ALTER TABLE `jk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sekretaris_desa`
--
ALTER TABLE `sekretaris_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `statuswrg`
--
ALTER TABLE `statuswrg`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_izin_ortu`
--
ALTER TABLE `surat_izin_ortu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_ket_desa`
--
ALTER TABLE `surat_ket_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_ket_paspor`
--
ALTER TABLE `surat_ket_paspor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_ket_usaha`
--
ALTER TABLE `surat_ket_usaha`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_tanah`
--
ALTER TABLE `surat_tanah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_wali`
--
ALTER TABLE `surat_wali`
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
-- AUTO_INCREMENT untuk tabel `data_kematian`
--
ALTER TABLE `data_kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_lahir`
--
ALTER TABLE `data_lahir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `gol_darah`
--
ALTER TABLE `gol_darah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jk`
--
ALTER TABLE `jk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rt`
--
ALTER TABLE `rt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sekretaris_desa`
--
ALTER TABLE `sekretaris_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `statuswrg`
--
ALTER TABLE `statuswrg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_izin_ortu`
--
ALTER TABLE `surat_izin_ortu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `surat_ket_desa`
--
ALTER TABLE `surat_ket_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `surat_ket_paspor`
--
ALTER TABLE `surat_ket_paspor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `surat_ket_usaha`
--
ALTER TABLE `surat_ket_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `surat_tanah`
--
ALTER TABLE `surat_tanah`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `surat_wali`
--
ALTER TABLE `surat_wali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
