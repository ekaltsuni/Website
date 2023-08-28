-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 30, 2023 at 04:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `str_art_donation_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation_form`
--

CREATE TABLE `donation_form` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `zip` smallint(5) NOT NULL,
  `country` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `card_type` varchar(20) NOT NULL,
  `card_number` bigint(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation_form`
--

INSERT INTO `donation_form` (`firstname`, `lastname`, `address`, `zip`, `country`, `phone`, `email`, `card_type`, `card_number`) VALUES
('Χάρυ', 'Πότερ', 'Γκρίφιντορ', 11123, 'United Kingdom', '+302102132234', 'harry@gmail.com', 'Mastercard', 1234123412341234),
('Ερμιόνη', 'Γκρέηντζερ', 'Γκρίφιντορ', 11123, 'United Kingdom', '+302101245321', 'hermione@gmail.com', 'Visa', 2345234523452345),
('Ρον', 'Γουίσλι', 'Γκρίφιντορ', 11123, 'United Kingdom', '+302103321456', 'ron@gmail.com', 'Maestro', 3456345634563456),
('Ντράκο', 'Μαλφόη', 'Σλίθεριν', 11124, 'United Kingdom', '+302102345123', 'draco@gmail.com', 'Other', 4567456745674567),
('Άλμπους', 'Ντάμπλντορ', 'Χόγκουαρτς', 11143, 'United Kingdom', '+302103762345', 'albus@gmail.com', 'Mastercard', 5678567856785678),
('Σίριους', 'Μπλακ', 'Χόγκουαρτς', 11143, 'United Kingdom', '+302104321234', 'sirius@gmail.com', 'Mastercard', 6789678967896789),
('Σέβερους', 'Σνέιπ', 'Χόγκουαρτς', 11143, 'United Kingdom', '+302103421234', 'severus@gmail.com', 'Visa', 7890789078907890),
('Μινέρβα', 'Μαγκόναγκαλ', 'Χόγκουαρτς', 11143, 'United Kingdom', '+302103245123', 'minerva@gmail.com', 'Visa', 8901890189018901),
('Ρέμους', 'Λούπιν', 'Χόγκουαρτς', 11143, 'United Kingdom', '+302103421345', 'remus@gmail.com', 'Maestro', 9012901290129012),
('Άλαστορ', 'Μούντι', 'Χόγκουαρτς', 11143, 'United Kingdom', '+302102134521', 'alastor@gmail.com', 'Other', 4321432143214321),
('Λούνα', 'Λάβγκουντ', 'Ράβενκλοου', 11145, 'United Kingdom', '+302103243123', 'luna@gmail.com', 'Visa', 1230123012301230);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
