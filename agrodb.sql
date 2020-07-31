-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 12:00 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(11) NOT NULL,
  `fn` varchar(50) NOT NULL,
  `ln` varchar(50) NOT NULL,
  `un` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `fn`, `ln`, `un`, `pwd`, `date_added`) VALUES
(2, 'host', 'admin', 'trier', 'qwerty', '2020-03-07 23:31:06'),
(3, 'test', 'test', 'tester', 'poiuy', '2020-02-24 13:00:00'),
(4, 'james', 'juma', 'jj', 'qwerty', '2020-02-24 15:09:22');

-- --------------------------------------------------------

--
-- Table structure for table `agrovet`
--

CREATE TABLE `agrovet` (
  `p_id` int(11) NOT NULL,
  `p_pic` blob NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_details` text NOT NULL,
  `p_location` varchar(50) NOT NULL,
  `p_phone` int(50) NOT NULL,
  `p_date` datetime NOT NULL,
  `p_agrovet` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agrovet`
--

INSERT INTO `agrovet` (`p_id`, `p_pic`, `p_name`, `p_price`, `p_details`, `p_location`, `p_phone`, `p_date`, `p_agrovet`) VALUES
(3, 0x4265616e732e6a7067, 'beans', 3500, 'High breed Rosecoco beans 50kg bag', 'Nyeri', 736823047, '2020-03-07 00:23:26', 'AgriTech investments'),
(4, 0x636869636b322e504e47, 'Chick Mash', 430, ' 30kg Chick mash for chicks before 2 weeks old', 'Kakamega', 747219033, '2020-03-07 01:11:20', 'Chicken Feeds'),
(5, 0x706c616e74352e6a706567, 'Maize', 4000, 'high breed type 640 maize seeds of 20kg', 'Eldoret', 712436708, '2020-03-07 01:24:06', 'Eldy Agrovet'),
(7, 0x66657274696c697a652e6a7067, 'Maize fertilizer', 2300, 'dap fertilizer 10kg', 'Laikipia', 744612895, '2020-03-09 10:08:00', 'Fertilizer Investments'),
(8, 0x74756265722e6a706567, 'tuber crops seeds', 5500, 'high yield potato seeds of 100kg', 'Busia', 711420386, '2020-03-09 22:41:41', 'tuber-Busia agrovet'),
(11, 0x62756c6c322e6a706567, 'Cow', 40000, '300kg castrated bull', 'Kakamega', 2147483647, '2020-04-27 17:45:44', 'Narosto');

-- --------------------------------------------------------

--
-- Table structure for table `animalreply`
--

CREATE TABLE `animalreply` (
  `id` int(11) NOT NULL,
  `par_code` varchar(11) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animalreply`
--

INSERT INTO `animalreply` (`id`, `par_code`, `description`, `date`, `author`) VALUES
(44, 'oiVZ2kxv', 'yuyyuyg', '2020-04-23 16:36:25', 'Oliver'),
(45, '0ZKSM2AI', 'first you have to have enough land', '2020-04-29 15:38:14', 'Oliver'),
(46, 'WmAzj3Ok', 'yea', '2020-04-30 19:43:27', 'Oliver');

-- --------------------------------------------------------

--
-- Table structure for table `animals_pane`
--

CREATE TABLE `animals_pane` (
  `id` int(11) NOT NULL,
  `code` varchar(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `pic_upload` blob NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animals_pane`
--

INSERT INTO `animals_pane` (`id`, `code`, `author`, `title`, `pic_upload`, `description`, `date`) VALUES
(61, '0ZKSM2AI', 'Oliver', 'cow', 0x636174746c652e6a706567, 'how to build a cattle shed', '2020-04-29 15:37:17'),
(62, 'WmAzj3Ok', 'Oliver', 'chicken', 0x636869636b322e504e47, 'how incubate chicks ', '2020-04-30 19:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `medreply`
--

CREATE TABLE `medreply` (
  `id` int(11) NOT NULL,
  `par_code` varchar(11) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meds`
--

CREATE TABLE `meds` (
  `id` int(11) NOT NULL,
  `code` varchar(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `pic_upload` blob NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meds`
--

INSERT INTO `meds` (`id`, `code`, `title`, `author`, `description`, `pic_upload`, `date`) VALUES
(19, '33R3wmip', 'cattle', 'Mulaku', 'what disease causes milk reduction', 0x636f772e6a7067, '2020-04-27 16:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `plantreply`
--

CREATE TABLE `plantreply` (
  `id` int(11) NOT NULL,
  `par_code` varchar(11) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plant_pane`
--

CREATE TABLE `plant_pane` (
  `id` int(11) NOT NULL,
  `code` varchar(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `pic_upload` blob NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plant_pane`
--

INSERT INTO `plant_pane` (`id`, `code`, `title`, `author`, `description`, `pic_upload`, `date`) VALUES
(10, 'NKeSmFzl', 'Beans', 'Oliver', 'what cause this disease on tomatoes and how do I mitigate it', 0x705f646973656173652e6a706567, '2020-04-29 12:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `fn` varchar(255) NOT NULL,
  `ln` varchar(255) NOT NULL,
  `un` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `cpwd` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fn`, `ln`, `un`, `email`, `pwd`, `cpwd`, `gender`) VALUES
(116, 'Oliver', 'Mulaku', 'Joe', 'oliver@gmail.com', 'qwertyui', 'qwertyui', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `vets`
--

CREATE TABLE `vets` (
  `vet_id` int(11) NOT NULL,
  `vet_pic` blob NOT NULL,
  `vet_name` varchar(50) NOT NULL,
  `vet_spec` text NOT NULL,
  `vet_phone` int(15) NOT NULL,
  `vet_email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `cpwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vets`
--

INSERT INTO `vets` (`vet_id`, `vet_pic`, `vet_name`, `vet_spec`, `vet_phone`, `vet_email`, `pwd`, `cpwd`) VALUES
(11, 0x5053585f32303230303131325f3134353034332e6a7067, 'Proff. Mulaku', 'specialised in the soil pH and fertility', 2147483647, 'mulaku@gmail.com', 'mulaku123', ''),
(12, 0x616e6f6e796d6f75732e6a706567, 'doctor mimea', 'plant husbandry', 707410872, 'mimea@gmail.com', '123456', ''),
(13, 0x494d475f32303139303530375f3133323630392e6a7067, 'Mbogi', 'Animal social', 788888888, 'mbogi@gmail.com', 'qwertyui', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `agrovet`
--
ALTER TABLE `agrovet`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `animalreply`
--
ALTER TABLE `animalreply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animals_pane`
--
ALTER TABLE `animals_pane`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medreply`
--
ALTER TABLE `medreply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meds`
--
ALTER TABLE `meds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plantreply`
--
ALTER TABLE `plantreply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plant_pane`
--
ALTER TABLE `plant_pane`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vets`
--
ALTER TABLE `vets`
  ADD PRIMARY KEY (`vet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `agrovet`
--
ALTER TABLE `agrovet`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `animalreply`
--
ALTER TABLE `animalreply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `animals_pane`
--
ALTER TABLE `animals_pane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `medreply`
--
ALTER TABLE `medreply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `meds`
--
ALTER TABLE `meds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `plantreply`
--
ALTER TABLE `plantreply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `plant_pane`
--
ALTER TABLE `plant_pane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `vets`
--
ALTER TABLE `vets`
  MODIFY `vet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
