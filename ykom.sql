-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2024 at 11:35 AM
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
-- Database: `ykom`
--

-- --------------------------------------------------------

--
-- Table structure for table `klient`
--

CREATE TABLE `klient` (
  `id` int(11) NOT NULL,
  `imie` varchar(10) NOT NULL,
  `nazwisko` varchar(20) NOT NULL,
  `adres` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `miasto` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `klient`
--

INSERT INTO `klient` (`id`, `imie`, `nazwisko`, `adres`, `email`, `miasto`, `username`, `password`) VALUES
(1, 'Anna', 'Kowalska', 'Krakowska ', 'annakowalska@gmail.com', 'Warszawa', 'annakowalska', 'password1'),
(2, 'Piotr', 'Nowak', 'Łódzka 5', 'piotrnowak@gmail.com', 'Kraków', 'piotrnowak', 'password2'),
(3, 'Maria', 'Wiśniewska', 'Gdańska 8', 'mariawisniewska@gmail.com', 'Gdańsk', 'mariawisniewska', 'password3'),
(4, 'Andrzej', 'Dąbrowski', 'Świerkowa ', 'andrzejdabrowski@gmail.com', 'Katowice', 'andrzejdabrowski', 'password4'),
(5, 'Magdalena', 'Lewandowska', 'Paderewski', 'magdalenalewandowska@gmail.com', 'Wrocław', 'magdalenalewandowska', 'password5'),
(6, 'Michał', 'Wójcik', 'Kościuszki', 'michalwojcik@gmail.com', 'Szczecin', 'michalwojcik', 'password6'),
(7, 'Katarzyna', 'Kamińska', 'Sienkiewic', 'katarzynakaminska@gmail.com', 'Łódź', 'katarzynakaminska', 'password7'),
(8, 'Tomasz', 'Kowalczyk', 'Mickiewicz', 'tomaszkowalczyk@gmail.com', 'Poznań', 'tomaszkowalczyk', 'password8'),
(9, 'Alicja', 'Zielińska', 'Rynek 7', 'alicjazielinska@gmail.com', 'Gdynia', 'alicjazielinska', 'password9'),
(10, 'Marcin', 'Szymański', 'Piłsudskie', 'marcinszymanski@gmail.com', 'Olsztyn', 'marcinszymanski', 'password10'),
(62, 'Michal', 'Nowak', 'wodna 2', 'mihacl@wp.pl', 'warszawa', 'michalnowakwar', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `produkty`
--

CREATE TABLE `produkty` (
  `id` int(11) NOT NULL,
  `producent` varchar(15) NOT NULL,
  `typ` varchar(15) NOT NULL,
  `model` varchar(50) NOT NULL,
  `cena` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produkty`
--

INSERT INTO `produkty` (`id`, `producent`, `typ`, `model`, `cena`) VALUES
(1, 'NVIDIA', 'karta graficzna', 'GeForce RTX 3080', 799),
(2, 'AMD', 'karta graficzna', 'Radeon RX 6900 XT', 899),
(3, 'Intel', 'procesor', 'Core i9-11900K', 549),
(4, 'AMD', 'procesor', 'Ryzen 9 5900X', 549),
(5, 'Corsair', 'RAM', 'Vengeance RGB Pro 32GB (2 x 16GB) DDR4-3600', 199),
(6, 'G.Skill', 'RAM', 'Trident Z RGB 16GB (2 x 8GB) DDR4-3200', 129),
(7, 'ASUS', 'karta graficzna', 'ROG Strix GeForce RTX 3070', 699),
(8, 'MSI', 'karta graficzna', 'GeForce RTX 3060 Ti GAMING X TRIO', 499),
(9, 'EVGA', 'karta graficzna', 'GeForce RTX 3090 FTW3 ULTRA GAMING', 1599),
(10, 'GIGABYTE', 'karta graficzna', 'AORUS GeForce RTX 3080 XTREME', 899),
(11, 'ZOTAC', 'karta graficzna', 'GAMING GeForce RTX 3060', 399),
(12, 'Sapphire', 'karta graficzna', 'NITRO+ Radeon RX 6800 XT', 799),
(13, 'Crucial', 'RAM', 'Ballistix 16GB (2 x 8GB) DDR4-3600', 119),
(14, 'HyperX', 'RAM', 'Predator RGB 32GB (2 x 16GB) DDR4-3200', 229),
(15, 'AMD', 'procesor', 'Ryzen 7 5800X', 449),
(16, 'NVIDIA', 'karta graficzna', 'GeForce RTX 3060', 329),
(17, 'Intel', 'procesor', 'Core i7-11700K', 399),
(18, 'TeamGroup', 'RAM', 'T-Force Delta RGB 16GB (2 x 8GB) DDR4-3200', 139),
(19, 'ASRock', 'karta graficzna', 'Radeon RX 6700 XT', 479),
(20, 'G.SKILL', 'RAM', 'Trident Z Royal 32GB (2 x 16GB) DDR4-3600', 259),
(21, 'GALAX', 'karta graficzna', 'GeForce RTX 3070 SG', 649),
(22, 'Patriot', 'RAM', 'Viper Steel 16GB (2 x 8GB) DDR4-3600', 129),
(23, 'Colorful', 'karta graficzna', 'iGame GeForce RTX 3080 Advanced OC', 899),
(24, 'PNY', 'karta graficzna', 'XLR8 Gaming GeForce RTX 3060', 329),
(25, 'ADATA', 'RAM', 'XPG SPECTRIX D60G 32GB (2 x 16GB) DDR4-3600', 199);

-- --------------------------------------------------------

--
-- Table structure for table `szczegoly_zamowienia`
--

CREATE TABLE `szczegoly_zamowienia` (
  `id_zamowienia` int(11) NOT NULL,
  `id_produktu` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `szczegoly_zamowienia`
--

INSERT INTO `szczegoly_zamowienia` (`id_zamowienia`, `id_produktu`, `ilosc`) VALUES
(1, 2, 1),
(1, 4, 2),
(2, 6, 1),
(2, 8, 3),
(3, 10, 1),
(3, 12, 2),
(4, 14, 1),
(4, 16, 1),
(5, 18, 2),
(5, 20, 1),
(1, 2, 1),
(1, 4, 2),
(2, 6, 1),
(2, 8, 3),
(3, 10, 1),
(3, 12, 2),
(4, 14, 1),
(4, 16, 1),
(5, 18, 2),
(5, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `zamowienie`
--

CREATE TABLE `zamowienie` (
  `id` int(11) NOT NULL,
  `klient_id` int(11) NOT NULL,
  `kwota` float NOT NULL,
  `data_zamowienia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zamowienie`
--

INSERT INTO `zamowienie` (`id`, `klient_id`, `kwota`, `data_zamowienia`) VALUES
(1, 1, 1500, '2024-05-08'),
(2, 3, 2500, '2024-05-08'),
(3, 5, 3200, '2024-05-08'),
(4, 7, 200, '2024-05-08'),
(8, 5, 3200, '2024-05-08'),
(35, 10, 4200, '2024-05-08'),
(36, 1, 1500, '2024-05-08'),
(37, 3, 2500, '2024-05-08'),
(38, 5, 3200, '2024-05-08'),
(39, 7, 200, '2024-05-08'),
(40, 10, 4200, '2024-05-08'),
(56, 1, 1500, '2024-05-08'),
(57, 3, 2500, '2024-05-08'),
(59, 7, 200, '2024-05-08'),
(60, 10, 4200, '2024-05-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `szczegoly_zamowienia`
--
ALTER TABLE `szczegoly_zamowienia`
  ADD KEY `id_zamowienia` (`id_zamowienia`),
  ADD KEY `id_produktu` (`id_produktu`);

--
-- Indexes for table `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `klient_id` (`klient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klient`
--
ALTER TABLE `klient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `zamowienie`
--
ALTER TABLE `zamowienie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
