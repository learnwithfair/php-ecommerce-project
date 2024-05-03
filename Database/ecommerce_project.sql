-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 02:33 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `ID` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `product_name` text NOT NULL,
  `product_des` varchar(255) NOT NULL,
  `product_stock` int(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_price_name` varchar(255) NOT NULL,
  `product_cat` text NOT NULL,
  `product_status` tinyint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`ID`, `product_id`, `product_name`, `product_des`, `product_stock`, `product_price`, `product_price_name`, `product_cat`, `product_status`) VALUES
(11, 101, 'Simple Human Product Name', 'Praesent a augue vestibulum, Praesent a augue vestibulum, Praesent a augue vestibulum, Praesent a augue vestibulum, Praesent a augue vestibulum, ', 502, 450, '$', 'Human, Lifestyle', 1),
(12, 102, 'Morbi pretium massa vel elit semp', 'Morbi pretium massa vel elit sempeMorbi pretium massa vel elit sempeMorbi pretium massa vel elit sempeMorbi pretium massa vel elit sempe', 540, 50, 'Rp', 'Human, Lifestyle', 1),
(13, 103, 'Aliquam sagittis efficitur turpis, sit ame', 'Aliquam sagittis efficitur turpis, sit ameAliquam sagittis efficitur turpis, sit ameAliquam sagittis efficitur turpis, sit ameAliquam sagittis efficitur turpis, sit ameAliquam sagittis efficitur turpis, sit ame', 120, 410, 'Rp', 'Human, Lifestyle', 1),
(14, 104, 'Sed vitae orci sit amet tortor cursus', 'Sed vitae orci sit amet tortor cursus lobortis Sed vitae orci sit amet tortor cursus lobortis Sed vitae orci sit amet tortor cursus lobortis Sed vitae orci sit amet tortor cursus lobortis ', 120, 300, '$', 'Pants, Women, Lifestyle', 1),
(15, 105, 'Praesent a augue vestibulum, fgdgh', 'Praesent a augue vestibulum, Praesent a augue vestibulum, Praesent a augue vestibulum, Praesent a augue vestibulum, Praesent a augue vestibulum, Praesent a augue vestibulum, Praesent a augue vestibulum, ', 140, 460, '$', 'Pants, Women, Lifestyle', 1),
(16, 106, 'Amet tortor cursus sed vitae orci sit', 'Sed vitae orci sit amet tortor cursus lobortis  Sed vitae orci sit amet tortor cursus lobortis  Sed vitae orci sit amet tortor cursus lobortis  Sed vitae orci sit amet tortor cursus lobortis  Sed vitae orci sit amet tortor cursus lobortis  Sed vitae orci ', 489, 495, '$', 'Pants, Women, Lifestyle', 1),
(17, 107, 'Test single Product Name', 'Test single Product Name Test single Product Name Test single Product Name Test single Product Name Test single Product Name Test single Product Name Test single Product Name Test single Product Name Test single Product Name Test single Product Name Test ', 470, 950, '$', 'Pants, Women, Lifestyle', 1),
(18, 108, 'Nulla Sollicitudin Sapien Sed', 'Nulla sollicitudin sapien Sed facilisis enim suscipit Nulla sollicitudin sapien Sed facilisis enim suscipit Nulla sollicitudin sapien Sed facilisis enim suscipit Nulla sollicitudin sapien Sed facilisis enim suscipit Nulla sollicitudin sapien Sed facilisis', 784, 750, '$', 'Pants, Women, Lifestyle', 1);

-- --------------------------------------------------------

--
-- Table structure for table `add_product_img`
--

CREATE TABLE `add_product_img` (
  `img_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `thumnail_status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_product_img`
--

INSERT INTO `add_product_img` (`img_id`, `product_id`, `product_img`, `thumnail_status`) VALUES
(30, 102, 'item-04.jpg', 1),
(32, 102, 'item-05.jpg', 0),
(33, 103, 'item-03.jpg', 1),
(36, 101, 'item-01.jpg', 1),
(37, 101, 'item-02.jpg', 0),
(38, 101, 'big-01.jpg', 0),
(39, 104, 'item-02.jpg', 1),
(40, 105, '08.jpg', 0),
(41, 105, '05.jpg', 0),
(42, 104, '02.jpg', 0),
(43, 104, '2.jpg', 0),
(44, 103, '4.jpg', 0),
(45, 103, '3.jpg', 0),
(46, 105, '5.jpg', 0),
(48, 106, 'download.png', 0),
(50, 106, '6.jpg', 0),
(54, 106, 'item-05.jpg', 1),
(56, 105, 'item-06.jpg', 1),
(57, 107, '3.jpg', 1),
(58, 107, 'about-us.jpg', 0),
(59, 108, 'rahatul_admin.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `ID` int(255) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`ID`, `Name`, `Email`, `Password`) VALUES
(1, 'MD RAHATUL RABBI', 'rahatul.ice.09.pust@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'LEARN WITH FAIR', 'learnwithfair@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(255) NOT NULL,
  `menu_title` varchar(255) NOT NULL,
  `menu_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_title`, `menu_link`) VALUES
(1, 'Home', 'index.php'),
(2, 'Products', 'products.php'),
(3, 'About Us', 'about.php'),
(4, 'Contact Us', 'contact.php'),
(5, 'Tutorial', 'https://www.youtube.com/channel/UCEU_TRk_iRoHajCocyXSK1Q');

-- --------------------------------------------------------

--
-- Table structure for table `message_info`
--

CREATE TABLE `message_info` (
  `message_id` int(255) NOT NULL,
  `message_name` text NOT NULL,
  `message_email` varchar(255) NOT NULL,
  `message_subject` varchar(255) NOT NULL,
  `message_content` varchar(255) NOT NULL,
  `message_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_info`
--

INSERT INTO `message_info` (`message_id`, `message_name`, `message_email`, `message_subject`, `message_content`, `message_date`) VALUES
(1, 'MD RAHATUL RABBI', 'rahatul.ice.09.pust@gmail.com', 'to solve the problem in our project', 'dgfdg', '0000-00-00'),
(4, 'MD SHAHANUR RAHMAN', 'suhan@gmail.com', 'to solve the problem in our project', 'to solve the problem in our projectto solve the problem in our projectto solve the problem in our project', '0000-00-00'),
(5, 'MD SHAHANUR RAHMAN', 'suhan@gmail.com', 'This is sdfhsf show in the display', 'This is sdfhsf show in the displayThis is sdfhsf show in the displayThis is sdfhsf show in the display', '2022-05-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `add_product_img`
--
ALTER TABLE `add_product_img`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `message_info`
--
ALTER TABLE `message_info`
  ADD PRIMARY KEY (`message_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `add_product_img`
--
ALTER TABLE `add_product_img`
  MODIFY `img_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message_info`
--
ALTER TABLE `message_info`
  MODIFY `message_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
