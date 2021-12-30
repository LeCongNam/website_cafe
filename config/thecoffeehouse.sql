-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 07:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thecoffeehouse`
--
--
use `id18197759_thecoffeehouse`;
-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` int(11) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(64) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `phone_number`, `address`, `email`, `birthday`) VALUES
(5, 0, '01234567', 'Võ chí thanh, Hà Nội', 'chiyeuminhem@gmail.com', '2019-10-21'),
(6, 0, '01234567', 'Võ chí thanh, Hà Nội', 'chiyeuminhem@gmail.com', '2019-10-21'),
(7, 0, '01234567', 'Võ chí thanh, Hà Nội', 'chiyeuminhem@gmail.com', '2019-10-21'),
(8, 0, '01234567', 'Võ chí thanh, Hà Nội', 'chiyeuminhem@gmail.com', '2019-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `price_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `description`, `image`) VALUES
(1, 'Trà Đào Cam Sả Đá', 45000, 'Vị thanh ngọt của đào Hy Lạp, vị chua dịu của Cam Vàng nguyên vỏ, vị chát của trà đen tươi được ủ mới mỗi 4 tiếng, cùng hương thơm nồng đặc trưng của sả chính là điểm sáng làm nên sức hấp dẫn của thức uống này.', 'tra-dao1.jpg'),
(2, 'Trà Đào Cam Sả Nóng', 45000, 'Vị thanh ngọt của đào Hy Lạp, vị chua dịu của Cam Vàng nguyên vỏ, vị chát của trà đen tươi được ủ mới mỗi 4 tiếng, cùng hương thơm nồng đặc trưng của sả chính là điểm sáng làm nên sức hấp dẫn của thức uống này.', 'tra-dao2.jpg'),
(3, 'Trà Hạt Sen Đá', 45000, 'Nền trà ô long hảo hạng kết hợp cùng hạt sen tươi, bùi bùi và lớp foam cheese béo ngậy. Trà hạt sen là thức uống thanh mát, nhẹ nhàng phù hợp cho cả buổi sáng và chiều tối.', 'hat-sen1.jpg'),
(4, 'Trà Hạt Sen Nóng', 52000, 'Nền trà ô long hảo hạng kết hợp cùng hạt sen tươi, bùi bùi và lớp foam cheese béo ngậy. Trà hạt sen là thức uống thanh mát, nhẹ nhàng phù hợp cho cả buổi sáng và chiều tối.', 'hat-sen1.jpg'),
(5, 'Trà Sữa ô long Nướng Trân Châu', 52000, 'Hương vị chân ái đúng gu đậm đà với trà Oolong được “sao” (nướng) lâu hơn cho hương vị đậm đà, hòa quyện với sữa thơm béo mang đến cảm giác mát lạnh, lưu luyến vị trà sữa đậm đà nơi vòm họng.', 'hongdao.jpg'),
(6, 'Hồng Trà Sữa Trân Châu', 52000, 'Thêm chút ngọt ngào cho ngày mới với hồng trà nguyên lá, sữa thơm ngậy được cân chỉnh với tỉ lệ hoàn hảo, cùng trân châu trắng dai giòn có sẵn để bạn tận hưởng từng ngụm trà sữa ngọt ngào thơm ngậy thiệt đã', 'tran-chau1.jpg'),
(7, 'Hồng Trà Sữa Trân Châu 2', 52000, 'Thêm chút ngọt ngào cho ngày mới với hồng trà nguyên lá, sữa thơm ngậy được cân chỉnh với tỉ lệ hoàn hảo, cùng trân châu trắng dai giòn có sẵn để bạn tận hưởng từng ngụm trà sữa ngọt ngào thơm ngậy thiệt đã.', 'tran-chau1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pass_word` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `pass_word`, `email`, `phone_number`) VALUES
(10, 'user1', 'e99a18c428cb38d5f260853678922e03', 'abc@gmail.com', '1212 1212'),
(11, 'user2', '1344c1a4c0574551a99df86d8769741f', 'abc1@gmail.com', '1212 1212'),
(12, 'user3', '6df546ce5a70dc4385556597e04eb274', '502200027@stu.itc.edu.vn', '12112134343'),
(13, 'user6', '912ec803b2ce49e4a541068d495ab570', 'abc@gmail.com', '1212 1212'),
(14, 'user7', '6a204bd89f3c8348afd5c77c717a097a', 'namlem4u@gmail.com', '1212 1212'),
(15, 'user8', '5e64fe04bfd8363b6c74ea86f5c867f1', 'namlem4u@gmail.com', '1212 1212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`price_id`),
  ADD KEY `FK_product_id_price` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `price`
--
ALTER TABLE `price`
  ADD CONSTRAINT `FK_product_id_price` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
