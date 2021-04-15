-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Apr 2021 pada 02.49
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bjupost`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `created_at`) VALUES
(7, 4, 'Material', '2020-12-12 08:42:23'),
(9, 4, 'Pengetahuan dan Tips', '2020-12-30 15:24:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `body`, `created_at`) VALUES
(5, 21, 'Renol', 'renolppfftt@gmail.com', 'Postingan Yang Bagus :\')', '2020-12-30 15:24:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contactus`
--

INSERT INTO `contactus` (`id`, `nama`, `email`, `nohp`, `pesan`) VALUES
(3, 'Renold Nindi Kara N', 'renol.mangood@gmail.com', '081394845127', 'Saya ingin memesan tolong hubungi nomer saya/ email saya'),
(4, 'Renold Nindi Kara N', 'renol.mangood@gmail.com', '081394845127', 'Saya Mau Pesan Jasa Penyewaan Scaffolding Mohon untuk menghubungi email/no hp saya'),
(5, 'Renold Nindi Kara N', 'renol.mangood@gmail.com', '081394845127', 'Saya Ingin Menyewa Jasa, Mohon untuk Menghubungi Saya Via Email/ No hp'),
(6, 'faishol', 'faishol.permana@gmail.com', '08937372829', 'adsa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewaan`
--

CREATE TABLE `penyewaan` (
  `id` int(11) NOT NULL,
  `nama_k` varchar(255) NOT NULL,
  `tglsewa` date NOT NULL,
  `tglbalik` date NOT NULL,
  `jenismaterial` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyewaan`
--

INSERT INTO `penyewaan` (`id`, `nama_k`, `tglsewa`, `tglbalik`, `jenismaterial`) VALUES
(7, 'PT INDOCEMENT NUSANTARA', '2020-12-10', '2020-12-24', 'DROP FORGED DOUBLE COUPLER'),
(8, 'POLINDRA', '2020-12-11', '2020-12-21', 'BAJA'),
(9, 'PT INDOMARET ID', '2020-12-12', '2020-12-18', 'DROP FORGED DOUBLE COUPLER'),
(11, 'PT ISLAMIC CENTER INDRAMAYU', '2020-12-14', '2020-12-26', 'DROP FORGED DOUBLE COUPLER'),
(12, 'PT ALFAMIDI', '2020-12-15', '2020-12-17', 'DROP FORGED DOUBLE COUPLER');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `body`, `post_image`, `created_at`) VALUES
(20, 7, 4, 'Mengenal Beban/Kapasitas Scaffolding', 'Mengenal-BebanKapasitas-Scaffolding', '<p><strong>Mengenal Kapasitas scaffolding</strong></p>\r\n\r\n<p>Oke brayyy...Berikut sedikit saya jelaskan mengenai beban/kapasitas scaffolding.<br />\r\nJadi sebelum kita dijuluki sebagai seorang ahli scaffolder,kita harus tau kapasitas dari scaffolding yang akan kita pasang.kita juga harus bisa menjelaskan ke atasan bahwa scaffolding yang akan dipasang akan memenuhi standar keselamatan yang ditentukan....</p>\r\n\r\n<p>Oke braayyy kita lanjut ke TKP...Hehe</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>A. Klasifikasi Beban</strong><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp; Kemampuan atau kapasitas scaffolding dapat diklasifikasikan, yaitu :<br />\r\n<strong><em>1. Beban Ringan (Light Duty)</em></strong><br />\r\n&nbsp;&nbsp;&nbsp; Dengan beban 225 kg/bay.<br />\r\n<strong><em>2. Beban Sedang ( Medium Duty )&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dengan beban maksimum 450kg/bay<br />\r\n<strong><em>3. Beban berat ( Heavy Duty )</em></strong> dengan beban maksimum 675kg/bay.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>B. Beban (load)</strong><br />\r\nBeban yang diterima landasan terhadap berdirinya sebuah scaffold dapat diklasifikasikan sebagai berikut :<br />\r\n<strong><em>1.&nbsp;&nbsp; Beban mati (dead load)</em></strong><br />\r\nBerat kontruksi scaffold beserta perlengkapannya.<br />\r\n<strong><em>2.&nbsp;&nbsp; Beban tambahan ( enviromental load)</em></strong><br />\r\nBerat tambahan yang dirasakan oleh scaffold yang bersumber dari luar.<br />\r\n<strong><em>3.&nbsp;&nbsp; Beban hidup ( live load) </em></strong><br />\r\nBerat pekerja atau personil,barang atau material ,perkakas atau perlengkapan kerja dan benturan benturan ( bila terjadi )</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C.&nbsp; Formulasi</strong><br />\r\n1.&nbsp; Beban pada standar beban yang ditanggung diperhitungkan hanya 3 standar pada luas 1 bay.<br />\r\n<strong><em>a.&nbsp;&nbsp; Standar tepi luar</em></strong><br />\r\n<strong><em>(Baban mati + beban hidup) : 3</em></strong></p>\r\n\r\n<p><strong><em>b.&nbsp;&nbsp; Standard dalam</em></strong><br />\r\n<strong><em>{2 X ( beban mati + beban hidup)} :3</em></strong></p>\r\n\r\n<p>2.&nbsp; Luas papan Landasan yang diperlukan pada setiap standard</p>\r\n\r\n<p>Beban pada standard (standard dalam) : daya dukung landasan</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Catatan</strong> :<br />\r\nDaya dukung landasan diperhitungkan sesuai daya dukung landasan yang terjelek untuk tanah dari kerikil 5 ton /M2</p>\r\n\r\n<p>3.&nbsp;&nbsp; Panjang papan landasan</p>\r\n\r\n<p>Luas papan : lebar papan (std)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nah mungkin hanya itu yang bisa saya tulis disini.semoga bisa menambah wawasan kita akan pekerjaan scaffolding...<br />\r\nOke brayyy....Gua pamit mundur...<br />\r\nNgantuk berat...</p>\r\n\r\n<p>Semoga bermanfaat..Good luck</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Salam</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'scaffolding1.jpg', '2020-12-30 10:49:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `email`, `username`, `password`, `register_date`) VALUES
(4, 'Renol Nindi Kara N', 'Leuwimunding Majalengka', 'renol.mangood@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2020-12-12 08:39:50'),
(5, 'Faishol Susilo Permana', 'Dawuan, Majalengka', 'faisholpermana@gmail.com', 'faishol', 'e0202cc92a128cea39084a7215fd3882', '2020-12-30 15:27:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
