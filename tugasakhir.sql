-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2020 pada 13.31
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_wisata`
--

CREATE TABLE `tempat_wisata` (
  `Id` int(50) NOT NULL,
  `Nama_tempat` varchar(50) NOT NULL,
  `Jenis_tempat` varchar(50) NOT NULL,
  `Lokasi` varchar(50) NOT NULL,
  `Ringkasan` varchar(1000) NOT NULL,
  `Foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tempat_wisata`
--

INSERT INTO `tempat_wisata` (`Id`, `Nama_tempat`, `Jenis_tempat`, `Lokasi`, `Ringkasan`, `Foto`) VALUES
(67788, 'Danau Tondano', 'Danau', 'Tondano', 'Danau Tondano adalah danau terluas di sulawesi utara', '051220190713230512201903215102122019165600Mahawu_Mountain_Crater.jpg'),
(373883, 'Gunung Mahawu', 'Gunung, perbukitan', 'Kota Tomohon', 'Di lereng mahawu, kita dapat menemukan pemukiman-pemukiman, hutan, dan juga area persawahan.[3] Kita juga dapat melihat burung-madu sangihe di sekitar gunung ini, yang merupakan burung endemik Sulawesi.[6] Untuk para penduduk, mereka cukup banyak melakukan aktivitas di [kaki]] gunung mahawu, di antaranya berprofesi sebagai petani yang menanam berbagai sayuran sampai pada wilayah tengah gunung.[5]  Berbeda dengan gunung berapi lainnya yang cenderung berpasir-pasir di puncaknya, gunung Mahawu ini puncaknya hijau dan banyak tumbuhannya.[5] Saat sampai di puncak kita dapat melihat putihnya kabut awan dan pemandangan di bawah yang menakjubkan, selain itu ada juga hutan lindung kecil yang dihiasi oleh bunga warna-warni.[5] Menuju Mahawu wisatawan akan disuguhi pemandangan perkebunan holtikultura yang tidak kalah indahnya.[2] Warna hijau sayur mayur berpadu dengan warna cokelat tanah yang subur menjadi sebuah kombinasi keindahan yang menakjubkan.', '0512201903215102122019165600Mahawu_Mountain_Crater.jpg'),
(477474, 'Danau Linow', 'Danau, wisata kuliner', 'Tomohon', 'Danau Linouw (atau Linow) adalah sebuah danau vulkanik yang terletak diluar Tomohon, dekat Manado, Indonesia. Beberapa lubang hidrotermal memuntahkan gas panas dari tepi dan kedalaman danau. Komposisi kimiawi yang berubah dari danau berarti warnanya sering berubah warna, mulai dari merah, hijau tua, dan bahkan biru gelap.[1] Danau ini berbatasan di sisi-sisinya oleh Gunung Lokon dan Gunung Mahawu. Danau ini memiliki bau seperti telur busuk dikarenakan oleh jumlah belerang yang sangat besar di danau tersebut. Kata \"Linouw\" berasal dari bahasa Minahasa yang berarti \"tempat berkumpulnya air\".', '05122019032541Danau-Linow.jpg'),
(3733773, 'Air terjun kali', 'Air terjun', 'Desa Kali, Pineleng, Kab. Minahasa', 'Air terjun kali berada di Kecamatan Pineleng, Kabupaten Minahasa, Sulut.  Jika beranjak dari Kota Manado, air Terjun Kali bisa ditempuh sekitar 30 menit.  Sesampainya di Desa Kali, anda harus memarkir kendaraan berjalan kaki sekitar 30 menit menuju lokasi jatuhnya air.  Biaya masuk pun tergolong murah, yakni Rp 5000 perorang.  Namun keindahan yang didapatkan setelah sampai, dijamin bikin pengunjung langsung mencari spot foto.', '051220190330545ac73a55d9dfe-air-terjun-kali-pineleng-minahasa_665_374.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `Nama`, `Username`, `Password`, `Level`) VALUES
(883393, 'Rando', 'Rando', 'okokok', 'admin'),
(2233443, 'Admin web', 'Admin', 'admin', 'admin'),
(2737282, 'Hanya Pengunjung', 'Pengunjung', 'pengunjung', 'admin'),
(7272882, 'Ayub', 'Ayub', 'Ayub', 'pengunjung'),
(8737287, 'Andre', 'Andre', 'Andre', 'pengunjung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata_bahari`
--

CREATE TABLE `wisata_bahari` (
  `Id` int(50) NOT NULL,
  `Nama_tempat` varchar(50) NOT NULL,
  `Jenis_tempat` varchar(50) NOT NULL,
  `Lokasi_tempat` varchar(50) NOT NULL,
  `Ringkasan` varchar(1000) NOT NULL,
  `Foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wisata_bahari`
--

INSERT INTO `wisata_bahari` (`Id`, `Nama_tempat`, `Jenis_tempat`, `Lokasi_tempat`, `Ringkasan`, `Foto`) VALUES
(0, 'Pantai malalayang', 'Pantai, wisata kuliner', 'Kec. Malalayang, Manado', 'Pantai malalayang memiliki keindahan saat sunset yang luar biasa biasanya sunset di pantai malalayang akan terlihat benar benar bagus saat hari cerah', '021220192009450212201916370602122019161431pantai-malalayang-sulawesi-utara.jpg'),
(9292929, 'Pantai Pal', 'Pantai', 'Minahasa utara', 'Walaupun terbilang cukup baru, namun lokasi Pantai Pal ini sudah tertata dengan baik, ada beberapa fasilitas yang disediakan seperti rumah-rumah panggung untuk kegiatan ibadah, toilet dan lahan parkir yang memadai. Ketika memasuki pantai ini, Anda akan disambut dengan untaian pasir putih cantik yang memanjang sekitar 100 meter di bibir pantai. Ditambah lagi dengan udaranya yang sejuk karena rindangnya pepoponan yang tumbuh di sekitar pantai. air laut yang jernih sebening kristal pun  menambah daya tarik tersendiri. Sapuan ombak dari tengah laut di bibir pantai tampak seperti gulungan kertas putih.  Hamparan pasir putih dan gulungan ombaknya yang menantang serta pemandangan laut lepas yang indah membuat pantai ini disebut Balinya Sulawesi Utara. Tidak puas menikmati pantai yang masih alami, Anda dapat memilih aktivitas yang memicu adrenalin. Cukup membayar Rp 25 ribu per orang, sensasi tantangan dengan Banana Boat Sport Air dan UFO Boat akan menjadi tantangan yang menarik. Namun disaran', '051220190357411200px-Pantai_Pal.jpg'),
(73282828, 'Taman laut Bunaken', 'Terumbu karang', 'Pulau Bunaken', 'Taman laut bunaken merupakan destinasi wisata andalan Manado, Sulawesi Utara dan merupakan salah satu taman laut terindah di dunia. Berbagai terumbu karang dan biota laut hidup dan berdesakan di taman laut bunaken. Bagi anda yang gemar dengan wisata bawah laut, bunaken bisa menjadi salah satu tempat pilihan untuk anda.', '05122019040127Gambar-Pantai-Bunaken.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata_buatan`
--

CREATE TABLE `wisata_buatan` (
  `Id` int(50) NOT NULL,
  `Nama_tempat` varchar(50) NOT NULL,
  `Jenis_tempat` varchar(50) NOT NULL,
  `Lokasi_tempat` varchar(50) NOT NULL,
  `Ringkasan` varchar(1000) NOT NULL,
  `Foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wisata_buatan`
--

INSERT INTO `wisata_buatan` (`Id`, `Nama_tempat`, `Jenis_tempat`, `Lokasi_tempat`, `Ringkasan`, `Foto`) VALUES
(281928, 'Patung Tuhan Yesus Memberkati', 'Monumen', 'Manado', 'Monumen Yesus Memberkati atau lebih dikenal sebagai Yesus Memberkati (Bahasa Manado: Yesus Kase Berkat) adalah patung Yesus Kristus yang terletak di Manado, Indonesia. Patung itu berdiri setinggi 50 meter (158 kaki) dan terdiri dari penopang 20 meter dan patung itu sendiri yang memiliki ketinggian 30 meter. Patung ini terbuat dari 25 ton serat logam dan 35 ton baja, dan terletak di puncak perumahan Citraland Manado. Patung ini telah menjadi ikon baru kota Manado dan pada tahun 2010, ini adalah patung tertinggi ke-2 di Asia dan patung Yesus tertinggi ke-4 di dunia (tidak termasuk alas tumpuan yang dipasangnya).', '051220190351152__IMG_9010_Monumen_ini_kerap_disamakan_dengan_Patung_Cristo_Redentor,_Patung_Yesus_yang_berada_di_Rio_Jenerio,_Brasil-CROP.jpg'),
(774783838, 'Kawasan Megamas', 'Pusat perbelanjaan, pusat bisnis', 'Manado', 'merupakan salah satu kawasan bisnis yang sedang berkembang di kota Manado.  Kawasan reklamasi seluas 36 Ha. ini terletak di ruas Jln. Piere Tendean (Boulevard) Manado. Kawasan ini dikelola oleh PT. Megasurya Nusalestari yang merupakan perusahaan properti dan konstruksi terkemuka di Sulawesi.  PT. Megasurya Nusalestari merupakan perusahaan properti dan konstruksi terkemuka di Sulawesi. Memulai bisnis konstruksinya di Makasar, PT. Megasurya Nusalestari kemudian mengembangkan sayapnya ke Manado dengan melakukan proyek reklamasi kawasan seluas 36 Ha yang kemudian dikenal secara luas sebagai Kawasan Megamas Manado, kawasan yang tumbuh sebagai lingkungan bisnis seribu pengusaha.', '05122019034506a.-1megamas-ok.jpg'),
(2147483647, 'Benteng Moraya', 'Tugu peringatan', 'Tondano', 'Bangunan serupa menara pengintai dengan 4 lantai ini, menjulang tinggi seolah mengingatkan era kejayaan Tou Minahasa di zaman dahulu.  Tempat wisata ini belum lama dibangun oleh pemerintah kabupaten Minahasa, setelah penemuan beragam kayu pondasi rumah orang Minahasa jaman dulu, serta waruga-waruga di tempat ini.  Kini monumen benteng Moraya sudah dibuka untuk umum, bagi yang berminat untuk berkunjung serta belajar sejarah seputar suku Minahasa di zaman dulu, tempat ini wajib Anda kunjungi.', '05122019034750Featured-Benteng-Moraya.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wisata_bahari`
--
ALTER TABLE `wisata_bahari`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `wisata_buatan`
--
ALTER TABLE `wisata_buatan`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62627273;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
