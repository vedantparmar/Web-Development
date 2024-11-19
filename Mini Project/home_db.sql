-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2024 at 06:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
('1', 'admin', '111'),
('ivWjzhTOL447ET5Qm7pJ', 'abhi', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Table structure for table `messsages`
--

CREATE TABLE `messsages` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messsages`
--

INSERT INTO `messsages` (`id`, `name`, `email`, `number`, `message`) VALUES
('DzImZ9keFEksHzWbyYEM', 'abhi', 'shetaabhi91718.abs@gmail.com', '123456', 'your website is very good'),
('piEJfSw0TLeDj5O4umVd', 'thy', 'cavamig227@fashlend.com', '1223', 'v bf b '),
('OXdb6JvqFvY0qE2DQTFE', 'abhi', 'shetaabhi91718.abs@gmail.com', '123', 'ffgnghmhgm'),
('VTCbsftWSCs3S7YIkGyq', 'Jeni', 'jenisheta0211@gmail.com', '123', 'Hello this is CoastalAir');

-- --------------------------------------------------------

--
-- Table structure for table `otptable`
--

CREATE TABLE `otptable` (
  `sno` int(11) NOT NULL,
  `otp no.` int(11) NOT NULL,
  `exp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otptable`
--

INSERT INTO `otptable` (`sno`, `otp no.`, `exp`) VALUES
(76, 290473, 0),
(78, 316252, 0),
(80, 287445, 0);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `property_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `offer` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `furnished` varchar(10) NOT NULL,
  `bhk` varchar(10) NOT NULL,
  `deposite` varchar(10) NOT NULL,
  `bedroom` varchar(10) NOT NULL,
  `bathroom` varchar(10) NOT NULL,
  `balcony` varchar(10) NOT NULL,
  `carpet` varchar(10) NOT NULL,
  `age` varchar(2) NOT NULL,
  `total_floors` varchar(2) NOT NULL,
  `room_floor` varchar(2) NOT NULL,
  `loan` varchar(50) NOT NULL,
  `lift` varchar(3) NOT NULL,
  `security_guard` varchar(3) NOT NULL,
  `play_ground` varchar(3) NOT NULL,
  `garden` varchar(3) NOT NULL,
  `water_supply` varchar(3) NOT NULL,
  `power_backup` varchar(3) NOT NULL,
  `parking_area` varchar(3) NOT NULL,
  `gym` varchar(3) NOT NULL,
  `shopping_mall` varchar(3) NOT NULL,
  `hospital` varchar(3) NOT NULL,
  `school` varchar(3) NOT NULL,
  `market_area` varchar(3) NOT NULL,
  `image_01` varchar(50) NOT NULL,
  `image_02` varchar(50) NOT NULL,
  `image_03` varchar(50) NOT NULL,
  `image_04` varchar(50) NOT NULL,
  `image_05` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `user_id`, `property_name`, `address`, `price`, `type`, `offer`, `status`, `furnished`, `bhk`, `deposite`, `bedroom`, `bathroom`, `balcony`, `carpet`, `age`, `total_floors`, `room_floor`, `loan`, `lift`, `security_guard`, `play_ground`, `garden`, `water_supply`, `power_backup`, `parking_area`, `gym`, `shopping_mall`, `hospital`, `school`, `market_area`, `image_01`, `image_02`, `image_03`, `image_04`, `image_05`, `description`, `date`) VALUES
('F98IOGgHCC6ES3D4L35Y', 'rIiqOSZSzo', 'Vrutalay', '20,Askok Nagar,ved road ,katargam,Surat', '1000000', 'house', 'rent', 'ready to move', 'furnished', '4', '20000', '4', '4', '4', '4800', '5', '0', '2', 'not available', 'no', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'yes', 'yes', 'OnnFv4YjfUIxNZusodt5.jpg', 'hBLTmcZtyj4Mayg65gAJ.jpg', 'Vf90NEGUUsWQ39FA0vis.jpg', 'vwWcduwEmp6vRNJbg76F.jpg', 'yay8XnSpcgLrlDypSMJs.jpg', 'Very Good property at Perfect Location.', '2024-04-24'),
('tQg7tNHXa5HgSl9pDdZI', 'rIiqOSZSzo', 'Gadhpur', '2,Royal Park,Dabholi ,katargam,Surat', '20000000', 'house', 'sale', 'ready to move', 'furnished', '4', '100000', '4', '5', '3', '4000', '2', '3', '2', 'available', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'BN3t9jDKRC81NMIsxOkn.jpg', '', '', '', '', 'Very Good Property available at Low Price', '2024-04-24'),
('wQi7eKUBBADSByJb1yTg', 'ogf717mhG3', 'White House', '2,BEVERLY HILLS,VESU ,Surat', '5000000', 'house', 'sale', 'ready to move', 'furnished', '5', '499998', '5', '6', '3', '5000', '3', '2', '0', 'available', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'yes', 'kacHHvQX4R9ANhTt61cT.jpg', 'Qg9Ioq7fmJAGTLCAbmbe.jpg', 'uI171nhe6dtBpjDzePYB.jpg', '0bn3b0CcA42NLwZHCJ6m.jpg', '', 'Lxurious Property at affordable price', '2024-04-24'),
('6KzkTUc46TO8ZeH5HeFA', 'qYJgWpme9m', 'Radhika Complex', '801,Radhika Complex,V.V. Nagar ,Anand', '5000000', 'flat', 'rent', 'ready to move', 'furnished', '2', '1000', '2', '3', '2', '500', '5', '0', '8', 'available', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'XR3o7499PvvrzCuFc6Vx.jpg', '7e4JPYSHtAkBt94LDLjt.jpg', '', '', '', 'ITS Highly Rated PG', '2024-04-24'),
('5e7yjSy3gOvsl8HKTpRQ', 'qYJgWpme9m', 'Radhika Complex', '901,Radha Tilak Complex,V.V. Nagar ,Anand', '7000', 'flat', 'rent', 'ready to move', 'furnished', '2', '1000', '2', '3', '2', '500', '5', '1', '7', 'available', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'g3h7fXxP633E07r3huYu.jpg', 'cLBfWkwev8aGHtzBUakS.jpg', 'KgssdCa8LEP3z0leOohp.jpg', '', '', 'Its Highly Rated PG', '2024-04-24'),
('c5R2byOzOaujtYo5xD7l', 'qYJgWpme9m', 'Oberoi HOuse', '15B,BEVERLY HILLS,VESU ,Surat', '8000000', 'house', 'sale', 'ready to move', 'furnished', '4', '500000', '4', '5', '2', '2000', '3', '1', '0', 'available', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'yje734OpGunkC3sjtSt6.jpg', 'LwZLUIyU44ceEi6EfUQR.jpg', '', '', '', 'Its Modern Styled Property', '2024-04-24'),
('CiqrS2XzfoMXJQkWtTJm', '716waZhhxo', 'Krishna Residency', '101,Krishna Residency,Dabholi ,Surat', '5000', 'flat', 'rent', 'ready to move', 'furnished', '2', '10000', '2', '2', '1', '500', '10', '1', '1', 'available', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'naRWr65G21dY9eWNG2x9.jpg', '9FJFot4Y0UhQjz4R36Zp.jpg', '6uR3Ox0nXKJfaTHp8YOf.jpg', '', '', 'Its Very Affordable', '2024-04-24'),
('i8K4HbaV4mRlU1fOpGET', 'rIiqOSZSzo', 'Mansion', '2,Gopin Bunglaws,Dabholi ,katargam,Surat', '7000000', 'house', 'sale', 'ready to move', 'furnished', '4', '400000', '4', '3', '3', '1800', '6', '2', '2', 'available', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'LSNRHwjXoZf3apHJ10gx.jpg', '', '', '', '', 'Its NRI Styled Bunglaws', '2024-04-24'),
('jCsBw8mHEqg2IrbrtEUx', 'pF2vmdCEjn', 'Malabar', '20B,BEVERLY HILLS,VESU ,Surat', '10000', 'flat', 'sale', 'ready to move', 'furnished', '4', '25000', '4', '5', '3', '1800', '4', '2', '1', 'available', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'RRHBfVH59RYPt4doJXp5.jpg', '', '', '', '', 'very nice property', '2024-04-24'),
('C1eq9tp40zk1o22Ex0kl', 'rIiqOSZSzo', 'LA MOUNT', '2,BEVERLY HILLS,VESU ,vadodara', '5000', 'house', 'rent', 'ready to move', 'furnished', '3', '15000', '3', '4', '2', '1500', '5', '2', '1', 'available', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', '6ekkq5HJoDUQDZkPSr67.jpg', '', '', '', '', 'Very Asthetic property', '2024-04-26'),
('hi7QUvhNznNOlorCO6Yr', 'rIiqOSZSzo', 'apple', '12,apple square', '12000', 'flat', 'sale', 'under construction', 'furnished', '1', '1200', '1', '1', '0', '12', '12', '12', '12', 'available', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'MpPPIRzcNf5LMz02jfvk.jpg', '9qy48WZfzS8YG13g45mp.jpg', 'Q8kNcFhI7tsLiEVsOQCY.jpg', 'Ls07BpYkZvSqpdXxgMIw.jpg', '', 'sfsf', '2024-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` varchar(20) NOT NULL,
  `property_id` varchar(20) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` int(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `property_id`, `sender`, `receiver`, `date`) VALUES
('xE3pGWcxgPlBgFjvGlWr', 'CiqrS2XzfoMXJQkWtTJm', '4HNfZVqRbJ', 716, '2024-04-24'),
('CBlUylVasZRZUKG2j7JO', 'tQg7tNHXa5HgSl9pDdZI', 'ogf717mhG3', 0, '2024-04-26'),
('4U55CRrXHNMS4TjmVu3m', 'wQi7eKUBBADSByJb1yTg', 'ogf717mhG3', 0, '2024-04-26'),
('Vev0hgtrHGZ5M3belejt', 'F98IOGgHCC6ES3D4L35Y', 'ogf717mhG3', 0, '2024-04-28'),
('VEkhWXfKu9Q4UZRybjO0', 'F98IOGgHCC6ES3D4L35Y', 'DbcD8ueZ4E', 0, '2024-09-26'),
('h60MGW12EqoJKwkfxyrN', 'C1eq9tp40zk1o22Ex0kl', 'KPriJbQcWO', 0, '2024-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `saved`
--

CREATE TABLE `saved` (
  `id` varchar(20) NOT NULL,
  `property_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saved`
--

INSERT INTO `saved` (`id`, `property_id`, `user_id`) VALUES
('ra7y4MtKWfAmkjWkvBHb', 'F98IOGgHCC6ES3D4L35Y', 'rIiqOSZSzo'),
('9AIhR0FimU9NOxewpqXq', '6KzkTUc46TO8ZeH5HeFA', 'pF2vmdCEjn');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(10) NOT NULL,
  `name` varchar(5) NOT NULL,
  `number` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `number`, `email`, `password`) VALUES
('rIiqOSZSzo', 'abhi', '123', 'abhi@gmial.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('ogf717mhG3', 'Rohan', '8320555', 'cavamig227@fashlend.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('qYJgWpme9m', 'karti', '96012', 'hello@gmial.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('716waZhhxo', 'Aarav', '43215', 'Aarav@gmial.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('MPk8Viey6T', 'Sneh', '9898976', 'sneh@gmial.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('pF2vmdCEjn', 'om', '123', 'omkevadiya69@gmail.com', '7b52009b64fd0a2a49e6d8a939753077792b0554'),
('4HNfZVqRbJ', 'nyal', '9974662359', 'nyalgadhiya335@gmail.com', '38d839a6e8fd1f7437e940049ee74fae9a4bf06a'),
('Q7KR9ieyCD', 'title', '112', 'ifdsm@gmil.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('zBHRtD8vOF', 'thy', '12', 'rf@fgh.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('DbcD8ueZ4E', 'dharm', '6355006862', 'dharmkhambhadiya99@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('KPriJbQcWO', 'priya', '1234745634', 'priyamdavra@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `otptable`
--
ALTER TABLE `otptable`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `otptable`
--
ALTER TABLE `otptable`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
