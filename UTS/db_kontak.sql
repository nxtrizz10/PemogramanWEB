-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2024 pada 18.32
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kontak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sd_yadika`
--

CREATE TABLE `sd_yadika` (
  `id` int(11) NOT NULL,
  `sdyadika` varchar(500) NOT NULL,
  `uploaded-at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sd_yadika`
--

INSERT INTO `sd_yadika` (`id`, `sdyadika`, `uploaded-at`) VALUES
(1, '<a href=\"https://www.instagram.com/explore/locations/798881593/sd-yadika-3-palem-ganda-karang-tengah-cileduk/?hl=id\">\r\n                        <h3 style=\"font-size: 2rem;\r\n    color: aqua;\r\n    margin-bottom: 1rem;\">Yadika 3 Elementary School</h3>\r\n                        <p style=\"font-size: 1.4rem;\r\n    color: aliceblue;\">Top 10 graduates with an average score of 86 and stable in computer-related subjects.</p>\r\n                    </a>  ', '2024-10-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `smkyadika`
--

CREATE TABLE `smkyadika` (
  `id` int(11) NOT NULL,
  `smkyadika` varchar(500) NOT NULL,
  `uploaded-at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `smkyadika`
--

INSERT INTO `smkyadika` (`id`, `smkyadika`, `uploaded-at`) VALUES
(1, '<a href=\"https://www.instagram.com/smkyadika4/?hl=id\">\r\n                        <h3 style=\"font-size: 2rem;\r\n    color: aqua;\r\n    margin-bottom: 1rem;\">Yadika 4 Vocational School</h3>\r\n                        <p style=\"font-size: 1.4rem;\r\n    color: aliceblue;\">Study computer engineering with the highest score in the Competency Test as a network technician.</p>\r\n                    </a>', '2024-10-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `smp_yadika`
--

CREATE TABLE `smp_yadika` (
  `id` int(11) NOT NULL,
  `smpyadika` varchar(500) NOT NULL,
  `uploaded-at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `smp_yadika`
--

INSERT INTO `smp_yadika` (`id`, `smpyadika`, `uploaded-at`) VALUES
(1, '<a href=\"https://www.instagram.com/smpyadika3/?hl=id\">\r\n                        <h3 style=\"font-size: 2rem;\r\n    color: aqua;\r\n    margin-bottom: 1rem;\">Yadika 3 Junior High School</h3>\r\n                        <p style=\"font-size: 1.4rem;\r\n    color: aliceblue;\">Becoming an outstanding student with top 5 achievements in grade 7, top 1 in grade 8, and top 10 in grade 9.</p>\r\n                    </a>', '2024-10-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `text_tulisan`
--

CREATE TABLE `text_tulisan` (
  `id` int(11) NOT NULL,
  `textdepan` varchar(1000) NOT NULL,
  `uploaded-at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `text_tulisan`
--

INSERT INTO `text_tulisan` (`id`, `textdepan`, `uploaded-at`) VALUES
(1, '<h1 style=\"font-size: 6rem; font-weight: 700; line-height: 1.3;\">Hallo, It\'s Me <span style=\"color: aqua;\">Rizcy</span></h1>', '2024-10-21'),
(2, '<p style=\"font-size: 1.6rem\">Mahasiswa Universitas Pembangunan Jaya angakatan 2022 dan sekarang sedang menempati semester 5.</p>', '2024-10-24'),
(3, '<h1 style=\" font-size: 6rem;\r\n    font-weight: 700;\r\n    line-height: 1.3;\">This My Instagram\r\n                <a href=\"https://www.instagram.com/nxtrizz_10/\"><span style=\"color: aqua;\">@nxtrizz_10</span></a>\r\n            </h1> ', '2024-10-24'),
(4, '<p style=\"font-size: 1.8rem;\">Bantu saya untuk terus bisa menyempurnakan WEB ini.</p>\r\n            <br>\r\n            <h3 style=\"font-size: 4rem;\r\n    margin-bottom: 1rem;\r\n    font-weight: 700;\">THANK YOU GUYS :)</h3>', '2024-10-24'),
(5, '<p style=\"font-size: 2rem;\r\n    color: aliceblue;\r\n    margin-bottom: 2rem;\">Informatics Study Program, Students of Pembangunan Jaya University 2022</p>', '2024-10-24'),
(6, '<h2 style=\"font-size: 2.5rem;\r\n    color: white;\">Futsal Tournament</h2>\r\n                    <p style=\"font-size: 1.6rem;\r\n    color: #ccc;\r\n    margin-top: 1rem;\r\n    line-height: 1.5;\">2nd place of the National Futsal Tournament 2024 with Sanberna Futsal Team.</p>', '2024-10-24'),
(7, '<h2 style=\"font-size: 2.5rem;\r\n    color: white;\">Mobile Legends Tournament</h2>\r\n                    <p style=\"font-size: 1.6rem;\r\n    color: #ccc;\r\n    margin-top: 1rem;\r\n    line-height: 1.5;\">2nd place in the church competition to commemorate the 75th anniversary of the independence of the Republic of Indonesia with Kapten Muslihat Team.</p>', '2024-10-24'),
(8, '<h2 style=\"font-size: 2.5rem;\r\n    color: white;\">Badminton Competition</h2>\r\n                    <p style=\"font-size: 1.6rem;\r\n    color: #ccc;\r\n    margin-top: 1rem;\r\n    line-height: 1.5;\">3rd place in the Badminton competition held by BEM Universitas Pembangunan Jaya with the Informatics Team.</p>', '2024-10-24'),
(9, '<h1 style=\"font-size: 4rem;\r\n    color: aqua;\r\n    margin-bottom: 2rem;\">About Me</h1>\r\n                    <p style=\"font-size: 1.8rem;\r\n    color: #ccc;\r\n    margin-bottom: 1.5rem;\r\n    line-height: 1.6;\">Hi guys! Let me introduce myself, I am Gregorius Rizcy. I am an active student at Universitas Pembangunan Jaya majoring in Informatics.</p>\r\n                    <p style=\"font-size: 1.8rem;\r\n    color: #ccc;\r\n    margin-bottom: 1.5rem;\r\n    line-height: 1.6;\">Besides that, I am also an athlete in the Futsal & Badminton sports branch. I also have a hobby in the field of E-Sports.</p>\r\n                    <p style=\"font-size: 1.8rem;\r\n    color: #ccc;\r\n    margin-bottom: 1.5rem;\r\n    line-height: 1.6;\">Currently, I am developing this WEB for my mid-semester assignment. If this WEB is successful, I will develop it further to be able to help you users in solving various problems in society and your daily lives. Thank you for your attention.</p>', '2024-10-24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sd_yadika`
--
ALTER TABLE `sd_yadika`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `smkyadika`
--
ALTER TABLE `smkyadika`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `smp_yadika`
--
ALTER TABLE `smp_yadika`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `text_tulisan`
--
ALTER TABLE `text_tulisan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sd_yadika`
--
ALTER TABLE `sd_yadika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `smkyadika`
--
ALTER TABLE `smkyadika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `smp_yadika`
--
ALTER TABLE `smp_yadika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `text_tulisan`
--
ALTER TABLE `text_tulisan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
