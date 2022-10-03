-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018 年 4 朁E20 日 12:52
-- サーバのバージョン： 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_growup`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gu_submitted_contact`
--

CREATE TABLE `gu_submitted_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `filename` varchar(30) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `gu_submitted_contact`
--

INSERT INTO `gu_submitted_contact` (`id`, `name`, `filename`, `created_at`) VALUES
(1, '太郎 太郎', '1524048442.csv', 1524048442),
(2, '太郎 太郎', '1524048575.csv', 1524048575),
(3, '太郎 太郎', '1524049292.csv', 1524049292),
(4, '太郎 太郎', '1524049306.csv', 1524049306),
(5, 'ああ ああ', '1524135675.csv', 1524135675),
(6, 'ああ ああ', '1524135881.csv', 1524135881),
(7, 'ああ ああ', '1524136231.csv', 1524136231),
(8, '太郎 太郎', '1524188189.csv', 1524188189),
(9, '太郎 太郎', '1524188352.csv', 1524188352),
(10, '太郎 太郎', '1524189017.csv', 1524189017),
(11, '太郎 太郎', '1524189020.csv', 1524189020),
(12, '太郎 太郎', '1524189030.csv', 1524189030),
(13, '太郎 太郎', '1524189044.csv', 1524189044),
(14, '太郎 太郎', '1524189512.csv', 1524189512),
(15, '太郎 太郎', '1524189557.csv', 1524189557),
(16, '太郎 太郎', '1524189569.csv', 1524189569),
(17, '太郎 太郎', '1524189712.csv', 1524189712),
(18, '太郎 太郎', '1524189786.csv', 1524189786),
(19, '太郎 太郎', '1524189920.csv', 1524189920),
(20, '太郎 太郎', '1524189960.csv', 1524189960),
(21, '太郎 太郎', '1524190239.csv', 1524190239),
(22, '太郎 太郎', '1524190317.csv', 1524190317),
(23, '太郎 太郎', '1524193494.csv', 1524193494),
(24, '太郎 太郎', '1524194163.csv', 1524194163),
(25, '太郎 太郎', 'data/logs/contact_log.csv', 1524195709),
(26, '太郎 太郎', 'contact_log.csv', 1524195742),
(27, '太郎 太郎', 'contact_log.csv', 1524195785),
(28, '太郎 太郎', 'contact_log.csv', 1524195793),
(29, '太郎 太郎', 'contact_log.csv', 1524195820),
(30, '太郎 太郎', 'contact_log.csv', 1524195827),
(31, '太郎 太郎', 'contact_log.csv', 1524196493),
(32, '太郎 太郎', 'contact_log.csv', 1524196500),
(33, '太郎 太郎', 'contact_log.csv', 1524196549),
(34, '太郎 太郎', 'contact_log.csv', 1524196599),
(35, '太郎 太郎', 'contact_log.csv', 1524196702),
(36, '太郎 太郎', 'contact_log.csv', 1524196713),
(37, '太郎 太郎', 'contact_log.csv', 1524196719),
(38, '太郎 太郎', 'contact_log.csv', 1524196721),
(39, '太郎 太郎', 'contact_log.csv', 1524196735),
(40, '太郎 太郎', 'contact_log.csv', 1524196771),
(41, '太郎 太郎', 'contact_log.csv', 1524196797),
(42, '太郎 太郎', 'contact_log.csv', 1524196977),
(43, '太郎 太郎', 'contact_log.csv', 1524196993),
(44, '太郎 太郎', 'contact_log.csv', 1524197012),
(45, '太郎 太郎', 'contact_log.csv', 1524197014),
(46, '太郎 太郎', 'contact_log.csv', 1524197219),
(47, '太郎 太郎', 'contact_log.csv', 1524197231),
(48, '太郎 太郎', 'contact_log.csv', 1524197287),
(49, '太郎 太郎', 'contact_log.csv', 1524197320),
(50, '太郎 太郎', 'contact_log.csv', 1524197327),
(51, '太郎 太郎', 'contact_log.csv', 1524197914),
(52, '太郎 太郎', 'contact_log.csv', 1524197921),
(53, '太郎 太郎', 'contact_log.csv', 1524197944),
(54, '太郎 太郎', 'contact_log.csv', 1524198032),
(55, '太郎 太郎', 'contact_log.csv', 1524198542),
(56, '太郎 太郎', 'contact_log.csv', 1524198575),
(57, '太郎 太郎', 'contact_log.csv', 1524199007),
(58, '太郎 太郎', 'contact_log.csv', 1524199137),
(59, '太郎 太郎', 'contact_log.csv', 1524199149),
(60, '太郎 太郎', 'contact_log.csv', 1524199240),
(61, '太郎 太郎', 'contact_log.csv', 1524199548),
(62, '太郎 太郎', 'contact_log.csv', 1524199579),
(63, '太郎 太郎', 'contact_log.csv', 1524199625),
(64, '太郎 太郎', 'contact_log.csv', 1524199739),
(65, '太郎 太郎', 'contact_log.csv', 1524199787),
(66, '太郎 太郎', 'contact_log.csv', 1524199809),
(67, '太郎 太郎', 'contact_log.csv', 1524199860),
(68, '太郎 太郎', 'contact_log.csv', 1524199909),
(69, '太郎 太郎', 'contact_log.csv', 1524200126),
(70, 'クララ クララ', 'contact_log.csv', 1524200229),
(71, '太郎 太郎', 'contact_log.csv', 1524200704),
(72, '太郎 太郎', 'contact_log2018.csv', 1524201421),
(73, '太郎 太郎', 'contact_log2018.csv', 1524201597),
(74, '太郎 太郎', 'contact_log2018.csv', 1524201616),
(75, '太郎 太郎', 'contact_log2018.csv', 1524201622),
(76, '太郎 太郎', 'contact_log2019.csv', 1524201672),
(77, '太郎 太郎', 'contact_log2020.csv', 1524201689);

-- --------------------------------------------------------

--
-- テーブルの構造 `gu_users`
--

CREATE TABLE `gu_users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `token` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `address` varchar(200) NOT NULL,
  `is_activated` tinyint(1) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `updated_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gu_users`
--

INSERT INTO `gu_users` (`id`, `name`, `username`, `email`, `token`, `password`, `address`, `is_activated`, `created_at`, `created_user_id`, `updated_at`, `updated_user_id`) VALUES
(25, 'アフマドサムライ', 'deer', 'deer@gmail.com', '5ad8726047eaa', 'f6789f7d86f1ceec5090657bbad68e327b449c00', '川崎市高津区', 1, 1523858330, 0, 1524134532, 25),
(26, 'Mark', 'mark', 'mark@gmail.com', '5ad85d593e2d6', 'ea2f648e7864400eed3d7e1756d28e4747fb84e7', 'Japan', 1, 1524129113, 0, 0, 0),
(27, 'クララ', 'clara', 'clara@gmail.com', '5ad9412a66e3c', 'b2ee6ce8dc3a8f7f358a0c89a6ebee37a920ea06', '東京都', 1, 1524187169, 0, 1524187750, 27);

-- --------------------------------------------------------

--
-- テーブルの構造 `gu_user_reset_password`
--

CREATE TABLE `gu_user_reset_password` (
  `user_id` int(11) NOT NULL,
  `token` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `gu_user_reset_password`
--

INSERT INTO `gu_user_reset_password` (`user_id`, `token`, `password`, `created_at`) VALUES
(25, '5ad973816ef84', '', 1524200321);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gu_submitted_contact`
--
ALTER TABLE `gu_submitted_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gu_users`
--
ALTER TABLE `gu_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `gu_user_reset_password`
--
ALTER TABLE `gu_user_reset_password`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gu_submitted_contact`
--
ALTER TABLE `gu_submitted_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `gu_users`
--
ALTER TABLE `gu_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
