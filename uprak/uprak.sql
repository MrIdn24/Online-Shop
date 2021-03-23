-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 12:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uprak`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `stok` int(100) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, '2 in 1 Kacamata Dua Lensa Photocromic', 'kaca mata', 9700, 25, 'https://cf.shopee.co.id/file/aced14817c15b536550442b078463c64'),
(2, 'Baju Stelan Wanita Korea Baju', 'clothes', 74000, 10, 'https://cf.shopee.co.id/file/9de66593fc022e90813f06022d162701'),
(3, 'SEPATU NIKE ZOOM PEGASUS', 'shoes', 89900, 20, 'https://cf.shopee.co.id/file/5e5ac2ae6c1a69e4f8ab4a3d3681cf59'),
(5, 'HANABI LILAC tas selempang VHINA', 'bag', 32500, 53, 'https://cf.shopee.co.id/file/f75fd2aee438fcef7aafcb80d0c7288d'),
(8, 'Baju Wanita Kekinian Wanita Baju Kantor', 'clothes', 399000, 12, 'https://cf.shopee.co.id/file/eb49cb47e7f7b231a75f0981eb6bab78'),
(9, 'Stelan Wanita Kekinian|Crop Tee', 'clothes', 349000, 13, 'https://cf.shopee.co.id/file/c62c518d17ef13c52a72cdcb9414f6f8'),
(10, 'BAJU WANITA MODEL KOREA BAJU CHELSEA', 'clothes', 64990, 20, 'https://cf.shopee.co.id/file/914eb1f15930a1c2dd06e015ed6f215a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
