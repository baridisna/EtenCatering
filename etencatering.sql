-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2018 at 08:24 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `UserID` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `cart_id` int(20) NOT NULL,
  `variant_id` int(20) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `quantity` int(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`cart_id`, `variant_id`, `customer_id`, `quantity`, `status`) VALUES
(7, 4, 'isnabarid', 5, 'non-active'),
(8, 8, 'isnabarid', 23, 'non-active');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `UserID` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `postal_code` int(8) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`UserID`, `name`, `address`, `postal_code`, `phone`) VALUES
('fellanaura', 'thufaila', NULL, NULL, NULL),
('isnabarid', 'Isna Barid', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `date_created` date DEFAULT NULL,
  `date_shipped` date DEFAULT NULL,
  `order_detail_id` int(20) NOT NULL,
  `cart_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `date_created`, `date_shipped`, `order_detail_id`, `cart_id`) VALUES
(1, NULL, NULL, 4, 7),
(2, NULL, NULL, 4, 8),
(3, NULL, NULL, 5, 7),
(4, NULL, NULL, 5, 8),
(5, NULL, NULL, 7, 7),
(6, NULL, NULL, 7, 8),
(7, NULL, NULL, 8, 7),
(8, NULL, NULL, 8, 8),
(9, NULL, NULL, 9, 7),
(10, NULL, NULL, 9, 8),
(11, NULL, NULL, 10, 7),
(12, NULL, NULL, 10, 8),
(13, NULL, NULL, 11, 7),
(14, NULL, NULL, 11, 8),
(15, NULL, NULL, 12, 7),
(16, NULL, NULL, 12, 8);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_detail_id` int(20) NOT NULL,
  `recepients_name` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `shipping_date` varchar(100) NOT NULL,
  `shipping_address` varchar(200) NOT NULL,
  `billing_address` varchar(200) NOT NULL,
  `payment_method` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `recepients_name`, `contact_person`, `shipping_date`, `shipping_address`, `billing_address`, `payment_method`) VALUES
(1, 'Isna Barid', '3463435634', '20 Juli 2018', 'perum', 'perum', 'onthespot'),
(2, 'Isna Barid', '3463435634', '20 Juli 2018', 'perum', 'perum', 'onthespot'),
(3, 'Isna Barid', '3463435634', '20 Juli 2018', 'perum', 'perum', 'onthespot'),
(4, 'Isna Barid', '3463435634', '20 Juli 2018', 'perum', 'perum', 'onthespot'),
(5, 'Isna Barid', '3463435634', '20 Juli 2018', 'perum', 'perum', 'onthespot'),
(6, 'Isna Barid', '3463435634', '20 Juli 2018', 'perum', 'perum', 'onthespot'),
(7, 'Isna Barid', '3463435634', '20 Juli 2018', 'perum', 'perum', 'onthespot'),
(8, 'Isna Barid', '3463435634', '20 Juli 2018', 'perum', 'perum', 'onthespot'),
(9, 'Isna Barid', '3463435634', '20 Juli 2018', 'perum', 'perum', 'onthespot'),
(10, 'Isna Barid', '3463435634', '20 Juli 2018', 'perum', 'perum', 'onthespot'),
(11, 'Isna Barid', '3463435634', '20 Juli 2018', 'perum', 'perum', 'onthespot'),
(12, 'Isna Barid', '3463435634', '20 Juli 2018', 'perummm', 'perummm', 'mandiri');

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
  `origin` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_price`, `photo`, `product_review`, `origin`, `type`) VALUES
('1', 'Baked Salmon', 'Salmon panggang yang diolah dengan bumbu spesial, seperti kecap asin dan gula coklat. Dengan sedikit aroma lemon dan bawang putih, sebagai pelengkap yang sempurna untuk fillet salmon yang penuh gizi.', '70.000', 'Baked_Salmon_wetern_main_course.png', '4.5/5 (20 users)', 'Western', 'Main Course'),
('2', 'Chicken Buffalo Wings', 'Olahan sayap ayam yang digoreng dengan dilapisi dan dicelupkan ke dalam saus yang terdiri dari saus pedas cayenne lada. Dilengkapi dengan cuka dan mentega cair untuk membangkitkan aroma.', '42.000', 'Chicken Buffalo Wings-western & appetizer.jpeg', '3.5/5 (14 users)', 'Western', 'Appetizer'),
('3', 'Cinnamon Rolls', 'Cinnamon rolls yang disajikan bersama glaze cheese cream, dengan rasa yang pas tidak terlalu manis dan harum kayu manis yang semerbak. Diolah secara khusus agar menghasilkan cinnamon rolls yang halus dan tidak bantat.', '29.000', 'Cinnamon_Rolls-Western_Dessert.jpg', '3/5 (25 users)', 'Western', 'Dessert'),
('4', 'Meatball Pasta', 'Spaghetti yang diolah secara fresh dan bakso sapi asli yang hangat disajikan dengan saus marinara yang lezat untuk hidangan Italia yang melegenda.', '42.000', 'Meatball Pasta - Western main course.png', '4.3/5 (21 user)', 'Western', 'Main Course'),
('5', 'Ayam Bakar Taliwang', 'Sensasi rasa ayam taliwang yang pedas dengan kuatnya kencur. Ayam yang digunakan ialah ayam kampung muda agar terasa lebih gurih dan empuk. Ayam ini diolah dengan cara dibakar. Penyajian disertai dengan plecing kangkung dan beberuk terong.', '24.000', 'Ayam Bakar_Taliwang-Indonesian_main_course.jpg', '4/5 (25 user)', 'Indonesian', 'Main Course'),
('6', 'Es Pisang Ijo', 'Makanan penutup khas di Sulawesi Selatan, terutama di kota Makassar. Es pisang ijo yang lezat ini terbuat dari bahan utama pisang yang dibalut dengan adonan tepung berwarna hijau, disajikan bersama bubur tepung, sirup merah, dan es batu.', '13.000', 'Es Pisang Ijo - Indonesia Dessert.png', '3.4/5 (16 user)', 'Indonesian', 'Dessert'),
('7', 'Pempek Spesial', 'Pempek khas Palembang yang terbuat dari daging ikan tenggiri asli yang digiling lembut dan tepung kanji. Serta beberapa komposisi lain seperti telur, bawang putih yang dihaluskan, penyedap rasa dan garam.', '20.000', 'Pempek Spesial - Indonesia Appetizer.jpg', '3.7/5 (27 user)', 'Indonesian', 'Appetizer'),
('8', 'Sate Padang', 'Aroma khas dari kunyit dan sereh memberi kesan pertama yang menggoda. Irisan daging dan lidah sapi yang diselimuti kuah kental kekuningan. Potongan ketupat di balik siraman kuah sate dan semerbak wangi bawang goreng semakin membangkitkan selera.', '18.000', 'Sate_Padang-Indonesia_Main_Course.jpg', '4.1/5 (25 user)', 'Indonesian', 'Main Course');

-- --------------------------------------------------------

--
-- Table structure for table `product_variant`
--

CREATE TABLE `product_variant` (
  `variant_id` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `variant_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variant`
--

INSERT INTO `product_variant` (`variant_id`, `product_id`, `variant_name`, `price`) VALUES
(1, 1, 'Satuan', 70000),
(2, 1, 'Box (min 20)', 85000),
(3, 1, 'Gubug (min 100)', 98000),
(4, 2, 'Satuan', 42000),
(5, 2, 'Box (min 20)', 53000),
(6, 2, 'Gubug (min 100)', 60000),
(7, 3, 'Satuan', 29000),
(8, 3, 'Box (min 20)', 31000),
(9, 3, 'Gubug (min 100)', 38000),
(10, 4, 'Satuan', 42000),
(11, 4, 'Box (min 20)', 50000),
(12, 4, 'Gubug (min 100)', 60000),
(13, 5, 'Satuan', 24000),
(14, 5, 'Box (min 20)', 26000),
(15, 5, 'Gubug (min 100)', 28000),
(16, 6, 'Satuan', 13000),
(17, 6, 'Box (min 20)', 14000),
(18, 6, 'Gubug (min 100)', 16000),
(19, 7, 'Satuan', 20000),
(20, 7, 'Box (min 20)', 22000),
(21, 7, 'Gubug (min 100)', 25000),
(22, 8, 'Satuan', 18000),
(23, 8, 'Box (min 20)', 19000),
(24, 8, 'Gubug (min 100)', 21000);

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `promotions_id` varchar(100) NOT NULL,
  `promotions_name` varchar(100) DEFAULT NULL,
  `promotions_date` date DEFAULT NULL,
  `photo_promosi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`promotions_id`, `promotions_name`, `promotions_date`, `photo_promosi`) VALUES
('1', 'Free Fires for All', '2019-01-02', 'fries.jpg'),
('2', 'Gratis Biaya Pengiriman', '2019-01-31', 'ongkir.jpg'),
('3', 'Book Giveaway', '2018-12-12', 'buku.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `cart_id` varchar(100) NOT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `quantity` int(100) DEFAULT NULL,
  `date_added` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Password`, `email`) VALUES
('fellanaura', 'passeten', 'thufellanaura@yahoo.com'),
('isnabarid', 'apasaja', 'isnanurbarid@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `uc_UserID` (`UserID`);

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_order_detail` (`order_detail_id`),
  ADD KEY `FK_cart` (`cart_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_variant`
--
ALTER TABLE `product_variant`
  ADD PRIMARY KEY (`variant_id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`promotions_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `cart_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_detail_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product_variant`
--
ALTER TABLE `product_variant`
  MODIFY `variant_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_cart` FOREIGN KEY (`cart_id`) REFERENCES `cart_item` (`cart_id`),
  ADD CONSTRAINT `FK_order_detail` FOREIGN KEY (`order_detail_id`) REFERENCES `order_detail` (`order_detail_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
