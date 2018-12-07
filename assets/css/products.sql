-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 11:51 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etencatering`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` varchar(100) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_description` varchar(2000) DEFAULT NULL,
  `product_price` varchar(100) DEFAULT NULL,
  `photo` varchar(500) NOT NULL,
  `product_review` varchar(100) NOT NULL,
  `product_satuan` varchar(100) NOT NULL,
  `product_box` varchar(100) NOT NULL,
  `product_gubug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_price`, `photo`, `product_review`, `product_satuan`, `product_box`, `product_gubug`) VALUES
('1', 'Gudeg', 'Gudeg adalah makanan khas Yogyakarta dan Jawa Tengah yang terbuat dari nangka muda yang dimasak dengan santan. Perlu waktu berjam-jam untuk membuat masakan ini. Warna coklat biasanya dihasilkan oleh daun jati yang dimasak bersamaan. Gudeg dimakan dengan nasi dan disajikan dengan kuah santan kental (areh), ayam kampung, telur, tahu dan sambal goreng krecek.', '35.000', 'gudeg-kering-56ee4abfb793733e067b2059.jpg', '4.5/5 (20 users)', '35.000', '37.000', '40.000'),
('2', 'Tiwul', 'Tiwul adalah makanan pokok pengganti nasi beras yang dibuat dari ketela pohon atau singkong. Penduduk Wonosobo, Gunungkidul, Wonogiri, Pacitan dan Blitar dikenal mengonsumsi jenis makanan ini sehari-hari. Tiwul dibuat dari gaplek. Sebagai makanan pokok, kandungan kalorinya lebih rendah daripada beras namun cukup memenuhi sebagai bahan makanan pengganti beras. Tiwul dipercaya mencegah penyakit maag, perut keroncongan, dan lain sebagainya. Tiwul pernah digunakan untuk makanan pokok sebagian penduduk Indonesia pada masa penjajahan Jepang dan sekarang tiwul dibuat jadi tiwul instan.', '20.000', 'tiwul.jpeg', '3/5 (14 users)', '20.000', '25.000', '29.000'),
('3', 'Sate Klathak', 'Sate klatak adalah sebuah hidangan sate kambing asal Kecamatan Pleret, Kabupaten Bantul, Yogyakarta. Dalam bahasa Jawa, kegiatan membakar sate di pembakaran terbuka disebut \"klathak\". Sate ini sangat berbeda dari ragam sate lainnya, yang biasanya memakai garam dan lada sebagai bumbu utamanya. Tusukan yang dipakai untuk memanggang dan membakar terbuat dari besi, tak seperti sate lainnya yang memakai tusukan bambu. Tusukan besi sebagai konduktor penghangat akan membaut daging lebih masak dari bagian dalam.', '20.000', 'sate-klatak-pak-jede.jpg', '4.5/5 (25 users)', '20.000', '25.000', '30.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
