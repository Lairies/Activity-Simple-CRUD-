-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2024 at 12:41 PM
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
-- Database: `simplecrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Description` text NOT NULL,
  `Prize` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Barcode` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Name`, `Description`, `Prize`, `Quantity`, `Barcode`, `created_at`, `updated_at`) VALUES
(2, 'Platform Gladiator Sandals', 'A flat sandal with several wide cross straps holding the sole to the foot and with a solitary strap around the ankle, can see your feet through the summer season in style.', 600, 1, 11111002, '2024-08-28 10:04:17', '2024-08-28 10:04:17'),
(3, 'Low Heels Summer Sandals', 'The right pair of sandals will make your feet ‘oh so comfortable’ as soon as you put them on. These black closed-toe sandals will make you look exotic and will bring a great feeling of true confidence.', 899, 2, 11111003, '2024-08-28 10:05:03', '2024-08-28 10:22:04'),
(4, 'High-Heeled Open-toed Sandals', 'These red high heel open-toed sandals will make you look bewitching and exquisite. These open-toed designs will show off your perfectly polished nails and are perfect for keeping your feet cool on hot summer days.', 999, 1, 11111004, '2024-08-28 10:05:48', '2024-08-28 10:05:48'),
(6, 'Black Silk Night Dress', 'This sultry black nightdress will be cuddly, soft and warm while naturally emphasizing your feminine shape.', 399, 1, 11111006, '2024-08-28 10:24:44', '2024-08-28 10:30:31'),
(7, 'Bohemian Beach Dress', 'This dress comes with a belt tie that fastens in the front which gives you look taller and slimmer look.', 456, 1, 11111000, '2024-08-28 10:25:57', '2024-08-28 10:30:43'),
(8, 'Summer  Floral Dress', 'Elbow-length sleeves have been trending steadily for some time now, and these cute elbow length sleeves really enhance the simple elegance of this dress.', 199, 1, 11111007, '2024-08-28 10:28:27', '2024-08-28 10:28:27'),
(9, 'Striped Summer Chiffon Dress with Roll-up Sleeves', 'The above the knee hemline creates a short and sassy look that makes gives you a long-legged slimming look.', 235, 1, 111110091, '2024-08-28 10:29:47', '2024-08-28 10:30:56'),
(10, 'Summer floral dress', 'This dress is designed for looks and ease, made to be breathable and built for comfort.', 123, 2, 11111032, '2024-08-28 10:31:53', '2024-08-28 10:31:53'),
(11, 'Summer Slip On Dress', 'The hem comes to just above the knee, for a look that’s both smart and eye-catching.', 1959, 3, 11111095, '2024-08-28 10:33:40', '2024-08-28 10:33:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
