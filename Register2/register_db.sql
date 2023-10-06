-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 08:20 PM
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
-- Database: `register_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment`, `date`, `id`, `user_id`) VALUES
(1, 'แกจะทำอะไรหนะ', '2023-10-05 00:50:59', 1, 5),
(2, 'บาดแผลที่กลางหลังเป็นความอับอายของนักดาบ', '2023-10-05 00:52:23', 1, 4),
(3, 'ยอดเยี่ยม!!', '2023-10-05 00:52:59', 1, 5),
(4, '** ฟัน **', '2023-10-05 00:53:32', 1, 5),
(5, 'โซโล!!!', '2023-10-05 00:57:40', 1, 6),
(6, 'ผมไม่ชอบ มันอันตราย', '2023-10-05 01:47:15', 2, 2),
(7, 'อย่าลอยโคมเลยนะครับเพื่อนๆ', '2023-10-05 17:36:38', 2, 2),
(8, 'พวกเบียว', '2023-10-05 17:51:38', 1, 2),
(9, 'โอเคครับพี่', '2023-10-05 18:55:08', 5, 8),
(10, 'โอเคครับพี่ ', '2023-10-05 18:55:49', 4, 8),
(11, 'ขอบคุณสำหรับความคิดเห็นดีๆครับ', '2023-10-05 19:44:58', 5, 2),
(12, '\"ลูฟี่ ฉันคงทำให้นายลำบากใจสินะ\"', '2023-10-05 21:52:51', 1, 4),
(13, '\"เพราะฉะนั้นตั้งแต่วันนี้ไป ฉันสัญญาว่าจะไม่แพ้ใครอีกเป็นอันขาด ตกลงมั้ย!!? ราชาโจรสลัด!!\"', '2023-10-05 21:53:04', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `detail` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `reply` int(11) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `detail`, `date`, `reply`, `id`) VALUES
(1, '5555 ฉันแพ้แล้วหละ', 'ฉันแพ้แล้วหละ (ถึง : Dracule Mihawk นักดาบอันดับหนึ่งของโลก)', '2023-10-05 00:48:28', 8, 4),
(2, 'ผมชอบประเพณีลอยโคมมากๆเลยครับ', 'ลอยโคมสวยมาก ยิ่งมีโคมเยอะๆผมยิ่งชอบเลย', '2023-10-05 01:03:13', 2, 7),
(3, 'ลอยกระทงกันดีกว่า', 'ลอยกระทงจะได้บูชาพระแม่คงคาด้วย', '2023-10-05 17:38:34', 0, 2),
(5, 'ไก่มี 2 ขานะครับ', 'ไก่มี 2 ขานะครับ เผื่อไม่รู้กัน', '2023-10-05 18:53:53', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, '1234', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'RORONOA ZORO', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Dracule Mihawk', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'MONKEY D LUFFY ', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'ภราดร', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'BOAT', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
