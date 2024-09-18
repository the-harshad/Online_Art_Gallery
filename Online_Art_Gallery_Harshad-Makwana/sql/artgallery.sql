-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2023 at 12:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artgallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_pass`) VALUES
(1, 'harsh@gmail.com', '147');

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `art_id` int(50) NOT NULL,
  `title` varchar(20) NOT NULL,
  `artist` varchar(20) NOT NULL,
  `art_desc` varchar(100) NOT NULL,
  `price` int(20) NOT NULL,
  `creation_date` varchar(20) NOT NULL,
  `img_url` varchar(1000) NOT NULL,
  `medium` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`art_id`, `title`, `artist`, `art_desc`, `price`, `creation_date`, `img_url`, `medium`) VALUES
(9, 'Silence', 'Ram Kumar', 'this art is was owesome.', 120000, '1956', '../image/artproduct/as.jpg', 'Portrait Art'),
(10, 'Silence', 'Ram Kumar', 'this atr was owesome.', 150000, '1942', '../image/artproduct/pexels-photo-1476505.jpeg', 'Portrait Art'),
(11, 'Silence', 'Ram Kumar', 'this art was owesome.', 200000, '1936', '../image/artproduct/ass.jpg', 'Portrait Art'),
(12, 'Lord Buddha', 'Ram Kumar', 'this art was owesome', 125000, '1988', '../image/artproduct/Picsart_23-09-20_20-21-55-773.jpg', 'Sketches'),
(13, 'Elephant', 'Ram Kumar', 'This painting was owesome.', 140000, '1996', '../image/artproduct/Picsart_23-09-20_20-24-25-343.jpg', 'Sketches'),
(14, 'Lord Buddha', 'Ram Kumar', 'this sketch is good.', 199000, '1941', '../image/artproduct/Picsart_23-09-20_20-21-34-481.jpg', 'Sketches'),
(15, 'woman', 'Tyeb Mehta', 'this was owesome.', 140000, '1987', '../image/artproduct/Picsart_23-09-20_20-25-43-597.jpg', 'Colorfull'),
(16, 'swan', 'Tyeb Mehta', 'this was buetifull are.', 17999, '1997', '../image/artproduct/Picsart_23-09-20_20-25-18-745.jpg', 'Colorfull'),
(17, 'Lord Buddha', 'Tyeb Mehta', 'this is owsome.', 225500, '1947', '../image/artproduct/Picsart_23-09-20_20-28-00-820.jpg', 'Colorfull');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artist_id` int(20) NOT NULL,
  `ar_name` varchar(20) NOT NULL,
  `birth_date` varchar(10) NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `biography` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `ar_name`, `birth_date`, `nationality`, `biography`) VALUES
(9, 'Tyeb Mehta', ' 1925-07-2', ' ind ', ' Tyeb Mehta was an Indian Painter,scuptor and Film maker.'),
(10, 'Ram Kumar', ' 1924-09-2', ' ind ', ' Ram Kumar Was an indian artist and writer who has been described. '),
(11, 'Satish Gujral', ' 1925-06-2', ' ind ', ' he was indian  best artist.');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(20) NOT NULL,
  `customer_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`) VALUES
(32, 'harshd', 'harshd@gmail.com', '123'),
(33, 'rahul', 'rahul@gmail.com', '123'),
(34, 'raj', 'raj@gmail.com', '123'),
(35, 'rohit', 'rohit@gmail.com', '123'),
(36, 'mohit', 'mohit@gmail.com', '123'),
(37, 'aadil', 'aadil@gmail.com', '123'),
(38, 'mit', 'mit@gmail.com', '123'),
(39, 'vivek', 'vivek@gmail.com', '123'),
(40, 'prit', 'prit@gmail.com', '123'),
(41, 'dev', 'dev@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `c_order`
--

CREATE TABLE `c_order` (
  `ord_id` int(250) NOT NULL,
  `customer_mail` varchar(250) NOT NULL,
  `art_id` int(250) NOT NULL,
  `total_amount` int(250) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `mob` int(15) NOT NULL,
  `pin_no` int(6) NOT NULL,
  `c_add` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_order`
--

INSERT INTO `c_order` (`ord_id`, `customer_mail`, `art_id`, `total_amount`, `customer_name`, `customer_email`, `mob`, `pin_no`, `c_add`) VALUES
(7, 'harshd@gmail.com', 16, 17999, 'harshad makwana', 'harshu@gmail.com', 2147483647, 363636, 'narol,a_15 banglow,Ahmdabad,gujrat,india'),
(8, 'mohit@gmail.com', 12, 125000, 'mohit parmar', 'mo123@gmail.com', 2147483647, 251412, 'a-a23 house,mota varacha,surat'),
(9, 'rahul@gmail.com', 17, 225500, 'rahul makwana', 'roy@gmail.com', 1412151412, 121212, 'amreli,near bus stop,gujrat,india-121212');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pyament_id` int(200) NOT NULL,
  `trn_id` int(200) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `art_id` int(200) NOT NULL,
  `price` int(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pyament_id`, `trn_id`, `customer_email`, `art_id`, `price`, `status`, `date`) VALUES
(16, 71130598, 'harshd@gmail.com', 16, 17999, 'Success', '24-09-2023'),
(17, 50722539, 'mohit@gmail.com', 12, 125000, 'Success', '24-09-2023'),
(18, 64176401, 'rahul@gmail.com', 17, 225500, 'Success', '24-09-2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`art_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `c_order`
--
ALTER TABLE `c_order`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pyament_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `art`
--
ALTER TABLE `art`
  MODIFY `art_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artist_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `c_order`
--
ALTER TABLE `c_order`
  MODIFY `ord_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pyament_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
