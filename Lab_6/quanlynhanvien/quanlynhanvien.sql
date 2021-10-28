-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 08:09 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlynhanvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `loainv`
--

CREATE TABLE `loainv` (
  `maloainv` int(11) NOT NULL,
  `tenloainv` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loainv`
--

INSERT INTO `loainv` (`maloainv`, `tenloainv`) VALUES
(1, 'Kỹ thuật'),
(2, 'Bán hàng');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` int(11) NOT NULL,
  `hoten` varchar(30) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` bit(1) NOT NULL DEFAULT b'0',
  `diachi` varchar(100) NOT NULL,
  `anh` varchar(100) NOT NULL,
  `maloainv` int(11) NOT NULL,
  `maphong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `hoten`, `ngaysinh`, `gioitinh`, `diachi`, `anh`, `maloainv`, `maphong`) VALUES
(3, 'abc', '2021-10-02', b'1', 'Hehehehe					', '231037130_1628113480732666_3075064853416346328_n.jpg', 2, 2),
(4, 'def', '2021-09-29', b'0', 'Nha Trang									', '1.png', 1, 1),
(10, 'jkfg', '2021-10-24', b'1', 'kkkk									', '4fdf3518b87815ba6b06e740e9c65906.jpg', 1, 1),
(11, 'hàng xóm', '2021-10-10', b'1', 'Nha Trang									', 'main_banner2.jpg', 2, 2),
(32, 'sfdsf', '2021-09-29', b'1', 'ở đâu đó =))									', 'pngtree-python-snake-in-prey-png-image_4189482.jpg', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

CREATE TABLE `phongban` (
  `maphong` int(11) NOT NULL,
  `tenphong` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`maphong`, `tenphong`) VALUES
(1, 'Phòng Kỹ thuật'),
(2, 'Phòng trưởng phòng'),
(3, 'Phòng kế toán');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` int(255) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'viet', 123456, 'viet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loainv`
--
ALTER TABLE `loainv`
  ADD PRIMARY KEY (`maloainv`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`),
  ADD KEY `maloainv` (`maloainv`),
  ADD KEY `maphong` (`maphong`);

--
-- Indexes for table `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`maphong`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phongban`
--
ALTER TABLE `phongban`
  MODIFY `maphong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `maloainv` FOREIGN KEY (`maloainv`) REFERENCES `loainv` (`maloainv`),
  ADD CONSTRAINT `maphong` FOREIGN KEY (`maphong`) REFERENCES `phongban` (`maphong`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
