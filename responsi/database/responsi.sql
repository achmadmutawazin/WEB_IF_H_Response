-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2021 pada 03.55
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `responsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventory`
--

CREATE TABLE `inventory` (
  `item_id` varchar(10) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `unit` varchar(15) NOT NULL,
  `arrival_date` date NOT NULL,
  `category` varchar(20) NOT NULL,
  `item_status` varchar(20) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inventory`
--

INSERT INTO `inventory` (`item_id`, `item_name`, `amount`, `unit`, `arrival_date`, `category`, `item_status`, `price`) VALUES
('ACR4370', 'Acer Laptop 4370Z', 10, 'fruit', '2015-02-07', 'Electronic', 'Damaged', 67500000),
('CMPi5', 'HP Core i5 computer', 25, 'units', '2016-05-04', 'Electronic', 'well', 127500000),
('HND01', 'Honda CR-V 2016', 3, 'units', '2015-10-10', 'Vehicle', 'Well', 570000000),
('KUR', 'Chair', 200, 'units', '2016-03-11', 'Office stationery', 'well', 75000),
('MJ01', '2x1 Office Desk', 50, 'units', '2015-12-11', 'Office stationery', 'well', 250000),
('TNH01', 'Main Building Land', 350, 'm²', '2015-11-05', 'Building', 'well', 2750000),
('TYT01', '2015 Toyota Camry', 5, 'units', '2016-04-01', 'Vehicle', 'Well', 345000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_num` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`username`, `password`, `full_name`, `email`, `phone_num`) VALUES
('admin', 'admin123', 'adminstore', 'admin@gmail.com', '081805930677'),
('user', 'user123', 'userismyname', 'user@gmail.com', '12312332123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`item_id`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
