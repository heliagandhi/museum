-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Nov 2019 pada 10.32
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_museum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` text NOT NULL,
  `isi_fasilitas` text NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `isi_fasilitas`, `gambar`) VALUES
(5, 'RuangCinema', 'Ruang Cinema', '____.jpg'),
(7, 'Caffe', 'Caffe', 'Rooftop3.jpg'),
(15, 'RuangPertemuan', 'Ruang Pertemuan', 'RuangPertemuan1.jpg'),
(16, 'Penginapan', 'Penginapan', 'Penginapan2.jpg'),
(17, 'Musolah', 'Musolah', 'Musolah.jpg'),
(18, 'Rooftop', 'rooftop', 'Rooftop4.jpg'),
(19, 'Caffe', 'Caffe', 'Caffe.jpg'),
(20, 'Penginapan', 'Penginapan', 'Penginapan3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `isi`) VALUES
(1, 'Muhammad Reza Fahlevi', 'dxdreza@gmail.com', 'saya mengirim pesan'),
(2, 'adi', 'adi@gmail.com', 'Mencoba'),
(3, 'aku', 'aku@gmail.com', 'saya'),
(4, 'Muhammad Reza Fahlevi', 'dxdreza@gmail.com', '<p><strong>Saya ingin bertanya dimana alamat lengkapnya ?</strong></p>'),
(5, 'Algifari Syahputra', 'algif@gmail.com', '<p>semoga makin berkembang</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `strukturorganisasi`
--

CREATE TABLE `strukturorganisasi` (
  `id_gambar` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `strukturorganisasi`
--

INSERT INTO `strukturorganisasi` (`id_gambar`, `gambar`) VALUES
(9, 'struktur_organisasi1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_file_photo1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `user_name`, `password`, `nama_file_photo1`) VALUES
(11, 'reza', '123', 'pp_reza.jpg'),
(13, 'admin', 'admin', 'defalut.jpg'),
(14, 'reza', '123', 'defalut1.jpg'),
(15, 'gema', '1234', 'defalut2.jpg'),
(16, 'bima', '123', 'defalut3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(6) NOT NULL,
  `jdl_berita` varchar(100) NOT NULL,
  `tgl_berita` date NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `jdl_berita`, `tgl_berita`, `isi_berita`, `gambar`) VALUES
(4, 'Penambahan Koleksi Baru', '2019-11-13', '<p>Museum Nasional tengah berbenah diri demi menyambut kemungkinan datangnya koleksi-koleksi baru dari berbagai wilayah Indonesia. Hanya saja, hingga kini pihak museum belum bisa mengungkapkan koleksi baru apa yang dimaksud.</p>\r\n\r\n<p>Salah satu upaya pembenahan yang dilakukan ialah pembangunan satu gedung baru yang terdiri dari empat lantai.</p>\r\n\r\n<p>Kepala Museum Nasional, Dra. Intan Mardiana, M.Hum, mengatakan, gedung &nbsp;baru ini nantinya akan diperuntukan sebagai tempat penyimpanan koleksi (storage), laboratorium dan tempat pementasan teater.</p>\r\n\r\n<p>&quot;... lebih ke prioritas pembangunan museum, seperti di bagian belakang gedung ini. Saya berharap ada beberapa pengadaan atau pengembalian... Penambahan koleksi bisa saja kami lakukan,&quot; ujar Intan di sela acara perayaan Hari Museum Internasional, di kawasan Museum Nasional, Jakarta, Minggu.</p>\r\n\r\n<p>Sebelumnya, museum yang berdiri di atas lahan seluas 26.500 m2 itu mempunyai dua buah gedung, yakni gedung A dan B. Gedung A atau gedung lama digunakan untuk memamerkan koleksi museum dan ruang penyimpanan koleksi.</p>\r\n', 'Penambahan_Koleksi_Baru.jpg'),
(9, 'Pembukaan Galeri Masadepan', '2019-11-15', '<p>Adanya pembukaan gaeri masadepan yang berlokasi di gedung B pada museum Tanah dan Pertanian Bogor pada tanggal 15/11/2019. mernjadi sarana pembelajaraan baru bagi warga bogoor.</p>\r\n\r\n<p>pada galeri masadepan ini di pamerkan hasil atau teknologi pertanian yang akan ada beberapa tahun yang akan datang</p>\r\n', 'Pembukaan_Galeri_Masadepan.jpg'),
(12, 'Pembukaan Museum Tanah dan Pertanian', '2019-11-17', '<p>Museum Nasional tengah berbenah diri demi menyambut kemungkinan datangnya koleksi-koleksi baru dari berbagai wilayah Indonesia. Hanya saja, hingga kini pihak museum belum bisa mengungkapkan koleksi baru apa yang dimaksud.</p>\r\n\r\n<p>Salah satu upaya pembenahan yang dilakukan ialah pembangunan satu gedung baru yang terdiri dari empat lantai.</p>\r\n\r\n<p>Kepala Museum Nasional, Dra. Intan Mardiana, M.Hum, mengatakan, gedung &nbsp;baru ini nantinya akan diperuntukan sebagai tempat penyimpanan koleksi (storage), laboratorium dan tempat pementasan teater.</p>\r\n\r\n<p>&quot;... lebih ke prioritas pembangunan museum, seperti di bagian belakang gedung ini. Saya berharap ada beberapa pengadaan atau pengembalian... Penambahan koleksi bisa saja kami lakukan,&quot; ujar Intan di sela acara perayaan Hari Museum Internasional, di kawasan Museum Nasional, Jakarta, Minggu.</p>\r\n\r\n<p>Sebelumnya, museum yang berdiri di atas lahan seluas 26.500 m2 itu mempunyai dua buah gedung, yakni gedung A dan B. Gedung A atau gedung lama digunakan untuk memamerkan koleksi museum dan ruang penyimpanan koleksi.</p>\r\n', 'Pembukaan_Museum_Tanah_dan_Pertanian4.jpg'),
(13, 'Pembukaan Galeri Pangan', '2019-11-15', '<p>Adanya pembukaan gaeri masadepan yang berlokasi di gedung B pada museum Tanah dan Pertanian Bogor pada tanggal 15/11/2019. mernjadi sarana pembelajaraan baru bagi warga bogoor.</p>\r\n\r\n<p>pada galeri masadepan ini di pamerkan hasil atau teknologi pertanian yang akan ada beberapa tahun yang akan datang</p>\r\n', 'Pembukaan_Galeri_Pangan1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id` int(11) NOT NULL,
  `nama_event` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `isi_event` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_event`
--

INSERT INTO `tbl_event` (`id`, `nama_event`, `tanggal`, `isi_event`, `gambar`) VALUES
(7, 'Diadakannya Lomba Menyanyi', '2019-11-13', '<p>Aakan diadakain lm ba menyanyi yang diadakan pada tanggal 13/11/2019.</p>\r\n\r\n<p>Lokasi diadakan di area rooftop caffe pada gedung C museum tanah dan pertanian bogor&nbsp;</p>\r\n', 'Diadakannya_Lomba_Menyanyi.jpg'),
(8, 'Senam Bersama', '2019-11-11', '<p>Akan diadakknya senam bersama yang akan dilakukan di halaman parkir Museum Tanah dan Pertanian Bogro pada tanggal 11/11/2019.</p>\r\n\r\n<p>Kegiatan senam ini akan diikuti oleh seluruh staff museum tanah dan pertanian dan juga warga sekitar yang berminat melakukannya.</p>\r\n', 'Senam_Bersama1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `strukturorganisasi`
--
ALTER TABLE `strukturorganisasi`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `strukturorganisasi`
--
ALTER TABLE `strukturorganisasi`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
