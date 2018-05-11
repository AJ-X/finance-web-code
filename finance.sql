-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-05-11 13:54:33
-- 服务器版本： 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finance`
--

-- --------------------------------------------------------

--
-- 表的结构 `finance_admin`
--

CREATE TABLE `finance_admin` (
  `id` tinyint(4) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `finance_admin`
--

INSERT INTO `finance_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `finance_email`
--

CREATE TABLE `finance_email` (
  `id` tinyint(4) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `finance_email`
--

INSERT INTO `finance_email` (`id`, `username`, `email`) VALUES
(1, '111', '111@qq.com'),
(3, '222', '222@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `finance_liuyan`
--

CREATE TABLE `finance_liuyan` (
  `id` tinyint(4) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `message` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `time` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `finance_liuyan`
--

INSERT INTO `finance_liuyan` (`id`, `username`, `email`, `phone`, `message`, `time`) VALUES
(2, '222', '222@qq.com', '222', '2222', '1524118649'),
(4, '333', '333@qq.com', '333', '333333333', '1524121073');

-- --------------------------------------------------------

--
-- 表的结构 `finance_user`
--

CREATE TABLE `finance_user` (
  `id` tinyint(4) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `finance_user`
--

INSERT INTO `finance_user` (`id`, `username`, `password`) VALUES
(4, '111', '111'),
(5, '222', '222'),
(7, '333', '333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `finance_admin`
--
ALTER TABLE `finance_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_email`
--
ALTER TABLE `finance_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_liuyan`
--
ALTER TABLE `finance_liuyan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_user`
--
ALTER TABLE `finance_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `finance_admin`
--
ALTER TABLE `finance_admin`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `finance_email`
--
ALTER TABLE `finance_email`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `finance_liuyan`
--
ALTER TABLE `finance_liuyan`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `finance_user`
--
ALTER TABLE `finance_user`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
