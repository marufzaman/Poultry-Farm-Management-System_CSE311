-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2017 at 06:08 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse311project`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `Home_Address` varchar(60) NOT NULL,
  `Postal_Code` varchar(12) NOT NULL,
  `City` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `Home_Address`, `Postal_Code`, `City`) VALUES
(1, 'House No - 74/B, Shantinagar', '1217', 'Khulna ');

-- --------------------------------------------------------

--
-- Table structure for table `chickens`
--

CREATE TABLE `chickens` (
  `id` int(11) NOT NULL,
  `C_Types` varchar(40) NOT NULL,
  `Price_Per_KG` decimal(5,2) NOT NULL,
  `Current_Quantity` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chickens`
--

INSERT INTO `chickens` (`id`, `C_Types`, `Price_Per_KG`, `Current_Quantity`) VALUES
(1, 'Broiler', '110.00', 8000),
(2, 'Layer', '115.00', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `chicken_morality`
--

CREATE TABLE `chicken_morality` (
  `CM_Date` date NOT NULL,
  `C_Types` varchar(40) NOT NULL,
  `Quantity` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chicken_purchase`
--

CREATE TABLE `chicken_purchase` (
  `CP_Date` date NOT NULL,
  `C_Types` varchar(40) NOT NULL,
  `Quantity` int(6) NOT NULL,
  `Total_Expenses` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Address_ID` int(11) NOT NULL,
  `Contact_No` int(11) NOT NULL,
  `Email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `First_Name`, `Last_Name`, `Address_ID`, `Contact_No`, `Email`) VALUES
(1, 'Karim', 'Sheikh', 2, 1722556640, 'sheikh@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `day_income`
--

CREATE TABLE `day_income` (
  `date` date NOT NULL,
  `Total_Income` decimal(10,2) NOT NULL,
  `Total_Expenditure` decimal(10,2) NOT NULL,
  `Final_Income` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eggs`
--

CREATE TABLE `eggs` (
  `C_Types` varchar(40) NOT NULL,
  `Price_Per_Dozen` decimal(5,2) NOT NULL,
  `Current_Quantity` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eggs`
--

INSERT INTO `eggs` (`C_Types`, `Price_Per_Dozen`, `Current_Quantity`, `id`) VALUES
('Broiler', '155.00', 39200, 1),
('Layer', '120.00', 36800, 2);

-- --------------------------------------------------------

--
-- Table structure for table `egg_lay`
--

CREATE TABLE `egg_lay` (
  `EL_Date` date NOT NULL,
  `E_Types` varchar(40) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `egg_sales`
--

CREATE TABLE `egg_sales` (
  `ES_Date` date NOT NULL,
  `E_Types` varchar(40) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Job` varchar(20) NOT NULL,
  `Salary` decimal(8,2) NOT NULL,
  `Join_Date` date NOT NULL,
  `Address_ID` int(11) NOT NULL,
  `Contact_No` int(11) NOT NULL,
  `Email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `First_Name`, `Last_Name`, `Gender`, `DOB`, `Job`, `Salary`, `Join_Date`, `Address_ID`, `Contact_No`, `Email`) VALUES
(1, 'Muntasir', 'Karim', 'Male', '1989-08-27', 'Manager', '50000.00', '0000-00-00', 2000, 1779767477, 'karim@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `feed_consumption`
--

CREATE TABLE `feed_consumption` (
  `FC_Date` date NOT NULL,
  `Amount_In_KG` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feed_for_sale`
--

CREATE TABLE `feed_for_sale` (
  `id` int(11) NOT NULL,
  `feed_name` varchar(255) NOT NULL,
  `feed_price_per_kg` decimal(8,2) NOT NULL,
  `stock` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_for_sale`
--

INSERT INTO `feed_for_sale` (`id`, `feed_name`, `feed_price_per_kg`, `stock`) VALUES
(1, 'BARASTOC LAYER PELLET', '95.00', '50KG'),
(2, 'BARASTOC LAYER PREMIUM', '135.00', '50KG'),
(3, 'BARASTOC DARLING', '125.00', '40KG'),
(4, 'BARASTOC LAYER PELLETS', '130.00', '20KG'),
(5, 'Provita', '120.00', '90KG'),
(6, 'Brac', '100.00', '100KG'),
(7, 'Kazi Feed', '95.00', '80KG'),
(8, 'CP Top Layer', '120.00', '100KG');

-- --------------------------------------------------------

--
-- Table structure for table `feed_purchase`
--

CREATE TABLE `feed_purchase` (
  `FP_Date` date NOT NULL,
  `Amount_In_KG` decimal(6,2) NOT NULL,
  `Total_Expenses` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feed_stock`
--

CREATE TABLE `feed_stock` (
  `Current_Ammount_In_KG` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_stock`
--

INSERT INTO `feed_stock` (`Current_Ammount_In_KG`) VALUES
('96.25');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `Name` varchar(30) NOT NULL,
  `Total_Pack` int(6) NOT NULL,
  `Pack_Size` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`Name`, `Total_Pack`, `Pack_Size`) VALUES
('Aminovit Plus injection', 500, '100ml'),
('DO-2 powder', 150, '1kg');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_consumption`
--

CREATE TABLE `medicine_consumption` (
  `MC_Date` date NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Pack_Size` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicine_purchase`
--

CREATE TABLE `medicine_purchase` (
  `MP_Date` date NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Total_Pack` int(6) NOT NULL,
  `Pack_Size` varchar(30) NOT NULL,
  `Total_Expenses` decimal(9,2) NOT NULL,
  `EXP_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Address_ID` int(11) NOT NULL,
  `Contact_No` int(11) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `First_Name`, `Last_Name`, `Gender`, `DOB`, `Address_ID`, `Contact_No`, `Email`, `Password`) VALUES
(1, 'Mokhlesh', 'Kabir', 'Male', '1984-09-16', 1, 1955649825, 'kabir25@email.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chickens`
--
ALTER TABLE `chickens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chicken_morality`
--
ALTER TABLE `chicken_morality`
  ADD PRIMARY KEY (`CM_Date`);

--
-- Indexes for table `chicken_purchase`
--
ALTER TABLE `chicken_purchase`
  ADD PRIMARY KEY (`CP_Date`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day_income`
--
ALTER TABLE `day_income`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `eggs`
--
ALTER TABLE `eggs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `egg_lay`
--
ALTER TABLE `egg_lay`
  ADD PRIMARY KEY (`EL_Date`);

--
-- Indexes for table `egg_sales`
--
ALTER TABLE `egg_sales`
  ADD PRIMARY KEY (`ES_Date`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed_consumption`
--
ALTER TABLE `feed_consumption`
  ADD PRIMARY KEY (`FC_Date`);

--
-- Indexes for table `feed_for_sale`
--
ALTER TABLE `feed_for_sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed_purchase`
--
ALTER TABLE `feed_purchase`
  ADD PRIMARY KEY (`FP_Date`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `medicine_consumption`
--
ALTER TABLE `medicine_consumption`
  ADD PRIMARY KEY (`MC_Date`);

--
-- Indexes for table `medicine_purchase`
--
ALTER TABLE `medicine_purchase`
  ADD PRIMARY KEY (`MP_Date`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `chickens`
--
ALTER TABLE `chickens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `eggs`
--
ALTER TABLE `eggs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feed_for_sale`
--
ALTER TABLE `feed_for_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
