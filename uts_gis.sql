-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Nov 2020 pada 00.33
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_gis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dbd`
--

CREATE TABLE `data_dbd` (
  `id_kec` int(11) NOT NULL,
  `kecamatan` varchar(150) NOT NULL,
  `kode_kab` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_dbd`
--

INSERT INTO `data_dbd` (`id_kec`, `kecamatan`, `kode_kab`, `jumlah`) VALUES
(3402010, 'Srandakan', 3402, 25),
(3402020, 'Sanden', 3402, 43),
(3402030, 'Kretek', 3402, 66),
(3402040, 'Pundong', 3402, 50),
(3402050, 'Bambang Lipuro', 3402, 77),
(3402060, 'Pandak', 3402, 92),
(3402070, 'Bantul', 3402, 139),
(3402080, 'Jetis', 3402, 88),
(3402090, 'Imogiri', 3402, 56),
(3402100, 'Dlingo', 3402, 16),
(3402110, 'Pleret', 3402, 40),
(3402120, 'Piyungan', 3402, 109),
(3402130, 'Banguntapan', 3402, 137),
(3402140, 'Sewon', 3402, 171),
(3402150, 'Kasihan', 3402, 209),
(3402160, 'Pajangan', 3402, 46),
(3402170, 'Sedayu', 3402, 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_faskes`
--

CREATE TABLE `data_faskes` (
  `id` int(11) NOT NULL,
  `longtitude` float NOT NULL,
  `latitude` float NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kota/kab` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_faskes`
--

INSERT INTO `data_faskes` (`id`, `longtitude`, `latitude`, `nama`, `alamat`, `kecamatan`, `kota/kab`, `kategori`) VALUES
(1, 110.293, -7.95572, 'Rumah Sakit D Pratama Bambanglipuro', 'Jl. Samas No.19,9, Prenggan Sidomulyo', 'Kec. Bambanglipuro', 'Kabupaten Bantul', 'Rumah Sakit'),
(2, 110.346, -7.93196, 'RSU Rachma Husada', 'JL. Parantritis, Km. 16, Gerselo Patalan, Jetis, Patalan, Bantul', 'Kec. Jetis', 'Kabupaten Bantul', 'Rumah Sakit'),
(3, 110.319, -7.92566, 'RS. Santa Elisabeth', 'Ganjuran Sumbermulyo Bambanglipuro, Kaligondang', 'Kec. Bantul', 'Kabupaten Bantul', 'Rumah Sakit'),
(4, 110.388, -7.88624, 'RS Nur Hidayah', 'Jl. Imogiri Tim. KM.11, Bembem, Trimulyo', 'Kec. Jetis', 'Kabupaten Bantul', 'Rumah Sakit'),
(5, 110.32, -7.90554, 'RS Paru Respira Yogyakarta', 'Jl. Panembahan Senopati No.4, Dagaran, Palbapang', 'Kec. Bantul', 'Kabupaten Bantul', 'Rumah Sakit'),
(6, 110.33, -7.88684, 'RSU PKU Muhammadiyah Bantul', 'Jl. Jend. Sudirman No.124, Nyangkringan, Bantul', 'Kec. Bantul', 'Kabupaten Bantul', 'Rumah Sakit'),
(7, 110.366, -7.83846, 'Rumah Sakit Umum Griya Mahardhika Yogyakarta', 'Jl. Parangtritis, Gg. Wijaya Kusuma KM.4,5 No.212, Druwo, Bangunharjo', 'Kec. Sewon', 'Kabupaten Bantul', 'Rumah Sakit'),
(8, 110.408, -7.86564, 'Rumah Sakit Permata Husada', 'JL. Raya KM 4 RT, Kauman, Pleret', 'Kec. Pleret', 'Kabupaten Bantul', 'Rumah Sakit'),
(9, 110.39, -7.84318, 'Rumah Sakit Bedah Adelia', 'Jalan Monumen Perjuangan TNI AU no 1A, Krobokan, Tamanan', 'Kec. Banguntapan', 'Kabupaten Bantul', 'Rumah Sakit'),
(10, 110.297, -7.9096, 'Rumah Sakit Universitas Islam Indonesia', 'Jl. Srandakan KM.5,5, Gedongsari, Wijirejo', 'Kec. Pandak', 'Kabupaten Bantul', 'Rumah Sakit'),
(11, 110.36, -7834090, 'Rumah Sakit Khusus Bedah (RSKB) Ring Road Selatan Bantul', 'Jalan Ringroad Selatan, Panggungharjo, Sewon, Glugo, Panggungharjo', 'Kec. Sewon', 'Kabupaten Bantul', 'Rumah Sakit'),
(12, 110.36, -7.83002, 'Rumah Sakit Umum Veteran Patmasuri', 'Jl. Lapangan Krapyak, Panggungharjo, Sewon, Krapyak Kulon, Panggungharjo', 'Kec. Sewon', 'Kabupaten Bantul', 'Rumah Sakit'),
(13, 110.265, -7.96666, 'Puskesmas Sanden Kabupaten Bantul (IGD)', 'JL. Pucanganom Murtigading, Senden, Murtigading, Bantul, Daerah Istimewa Yogyakarta 55763', 'Kec. Sanden', 'Kabupaten Bantul', 'Puskesmas'),
(14, 110.319, -7.97236, 'Puskesmas Kretek Kabupaten Bantul', 'JL. Parangtritis KM 12, Sruwuh Donotirto, Sruwuh, Donotirto, Bantul, Daerah Istimewa Yogyakarta 55772', 'Kec. Kretek', 'Kabupaten Bantul', 'Puskesmas'),
(15, 110.38, -7.91975, 'Puskesmas Imogiri I', 'Jl. Ngancar Karangtalun, Karangtalun, Barepan, Karangtalun', 'Kec. Imogiri', 'Kabupaten Bantul', 'Puskesmas'),
(16, 110.373, -7.94459, 'Puskesmas Imogiri II', 'Ngatsuro, Sriharjo, Kec. Imogiri, Bantul, Daerah Istimewa Yogyakarta ', 'Kec. Imogiri', 'Kabupaten Bantul', 'Puskesmas'),
(17, 110.465, -7.93383, 'Puskesmas Dlingo I', 'Jl. Koripan 1, Koripan I, Dlingo, Bantul, Daerah Istimewa Yogyakarta 55783', 'Kec. Dlingo', 'Kabupaten Bantul', 'Puskesmas'),
(18, 110.276, -7.80168, 'Puskesmas Sedayu I', 'Panggang, Argomulyo, Watu, Argomulyo', 'Kec. Sedayu', 'Kabupaten Bantul', 'Puskesmas'),
(19, 110.453, -7.88021, 'Puskesmas Dlingo II', 'Jl. Pencitrejo, Kebo Kuning, Terong, Dlingo', 'Kec. Dlingo', 'Kabupaten Bantul', 'Puskesmas'),
(20, 110.257, -7.81684, 'Puskesmas Sedayu II', 'Jl. Wates KM 12, Argorejo, Sedayu, Bantul, Semampir, Argorejo', 'Kec. Sedayu', 'Kabupaten Bantul', 'Puskesmas'),
(21, 110.312, -7.83829, 'Puskesmas Kasihan I', 'Jl. Bibis, Ngentak, Bangunjiwo', 'Kec. Kasihan', 'Kabupaten Bantul', 'Puskesmas'),
(22, 110.345, -7.82898, 'Puskesmas Kasihan II', 'Jl Padokan, Kec. Kasihan, Jogonalan Lor, Tirtonirmolo', 'Kec. Kasihan', 'Kabupaten Bantul', 'Puskesmas'),
(23, 110.29, -7.89346, 'Puskesmas Pajangan', 'Jl Benyo pajangan, Sendangsari, Bantul, Benyo, Sendangsari', 'Kec. Pajangan', 'Kabupaten Bantul', 'Puskesmas'),
(24, 110.375, -7.8979, 'Puskesmas Jetis I', 'Jalan Imogiri Barat KM. 12,5, Denokan, Trimulyo, Jetis, Ponggok I, Trimulyo', 'Kec. Jetis', 'Kabupaten Bantul', 'Puskesmas'),
(25, 110.459, -7.83134, 'Puskesmas Piyungan', 'Tegal, Srimulyo Kec. Piyungan, 55792, Bantaran Wetan, Srimulyo', 'Kec. Piyungan', 'Kabupaten Bantul', 'Puskesmas'),
(26, 110.465, -7.93383, 'Puskesmas Dlingo I', 'Jl. Koripan 1, Koripan I, Dlingo, Bantul', 'Kec. Dlingo', 'Kabupaten Bantul', 'Puskesmas'),
(27, 110.344, -7.95679, 'Puskesmas Pundong', 'Jl. Piring, Piring, Srihardono', 'Kec. Pundong', 'Kabupaten Bantul', 'Puskesmas'),
(28, 110.29, -7.92675, 'Puskesmas Pandak 2', 'Nglarang RT 04, Juwono, Triharjo', 'Kec. Pandak', 'Kabupaten Bantul', 'Puskesmas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `date_created`) VALUES
(2, 'Adit', 'adit@gmail.com', '$2y$10$JBcif1iv48xLwuayXhNBEeWOexs4/Hw16l5pKsmZyf4V7rIcXEuD.', 1605626501);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_dbd`
--
ALTER TABLE `data_dbd`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indeks untuk tabel `data_faskes`
--
ALTER TABLE `data_faskes`
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
-- AUTO_INCREMENT untuk tabel `data_faskes`
--
ALTER TABLE `data_faskes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
