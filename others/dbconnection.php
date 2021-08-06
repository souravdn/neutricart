<?php
//connect to db
$servername="mysql-43037-0.cloudclusters.net";
 $database="neutrify";
  $username="sourav";
 $password="Debnath@1";
$dname="neutrify";
$host="17303";


$con=new mysqli($servername, $username, $password,$dname,$host);
if(!$con){
    // echo "db connection failed";
}
else{
    // echo "connected to db";
}


//select db
if($con->query("USE neutrify")){
    // echo "db selected";
}
else{
    // echo "db not selected";
}

$sql="-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 09:53 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_log`
--

CREATE TABLE `order_log` (
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pymethod` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `pno` int(11) NOT NULL,
  `qntty` int(11) NOT NULL,
  `ph` varchar(255) DEFAULT NULL,
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_log`
--

INSERT INTO `order_log` (`fullname`, `email`, `address`, `pincode`, `country`, `pymethod`, `pname`, `price`, `pno`, `qntty`, `ph`, `time`) VALUES
('Sourav Debnath', 'soruavdebnath.code@gmail.com', 'Kowai,Ganki,Agartala', '799203', 'India', 'Cash On Delivery', 'Spike Protein Shaker Blender Bottle for Whey Protein Mix, Cycling, Gym Water Bottle with Stainless Steel Blender Ball 700ml', 499, 3, 1, '8413990777', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `discount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`id`, `name`, `image`, `price`, `discount`) VALUES
(1, 'MuscleBlaze Super Gainer XXL Weight Gainer', 'mb.jpg', 2449, 20),
(2, 'MuscleBlaze Whey Gold', 'mbg.jpg', 2659, 60),
(3, 'Spike Protein Shaker Blender Bottle for Whey Protein Mix, Cycling, Gym Water Bottle with Stainless Steel Blender Ball 700ml', 'ps.jpg', 499, 50),
(4, 'Creatine Monohydrate Powder', 'creatin.jpg', 2599, 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
";

$conn->query($sql);
?>
