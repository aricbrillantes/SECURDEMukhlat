-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2018 at 03:00 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mukhlatV2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attachments`
--

DROP DATABASE IF EXISTS mukhlat;
CREATE DATABASE mukhlat;
USE mukhlat;


CREATE TABLE `tbl_attachments` (
  `attachment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `file_url` varchar(256) NOT NULL,
  `attachment_type_id` int(11) NOT NULL,
  `date_uploaded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `caption` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_attachments`
--

INSERT INTO `tbl_attachments` (`attachment_id`, `post_id`, `file_url`, `attachment_type_id`, `date_uploaded`, `caption`) VALUES
(34, 22, './uploads/_20/de0fc9bf228a6430f140a5ac9a5e3572.jpg', 1, '2017-06-23 04:58:37', NULL),
(35, 24, './uploads/_24/2740e00b8a431713d879425b913f0796.png', 1, '2017-06-23 05:02:39', NULL),
(36, 34, './uploads/_34/99b7bb17960a1db82f7fc995de61a2f7.png', 1, '2017-06-23 05:05:45', NULL),
(37, 38, './uploads/_38/60d76cf3eccfef5d9d2628336d56458d.jpg', 1, '2017-06-23 05:52:17', NULL),
(38, 42, './uploads/_42/142fd6fe4bfa3b1c825e89faec24d30b.png', 1, '2017-06-27 02:16:34', NULL),
(39, 43, './uploads/_43/a44d2348c6e591113b97690e7c3008b7.png', 1, '2017-06-27 02:16:42', NULL),
(40, 45, './uploads/_45/acffe9ad161c68e2abe41b63d27fc29f.png', 1, '2017-06-28 11:59:56', NULL),
(41, 72, './uploads/_72/125930fdc665ff22b6a8d41700c80b6e.jpg', 1, '2017-06-29 09:12:50', NULL),
(42, 81, './uploads/_81/81e786bd067b82bf8b69f53bd83e856a.jpg', 1, '2017-06-29 09:50:23', NULL),
(44, 84, './uploads/_83/dac7e6fd62f7b877079cf6dcc406dd24.jpg', 1, '2017-07-11 18:37:08', 'ooopsie'),
(45, 85, './uploads/_83/01c0f0c314e10e755453bf01575f9b49.jpg', 1, '2017-07-11 18:34:26', 'wellll'),
(46, 86, './uploads/_86/184cefa0842bcabb2a5059a689f1c9b1.jpg', 1, '2017-07-11 18:48:10', 'girl version of me'),
(47, 83, './uploads/_83/6e3566eb338c37df5222e7841dd64290.jpg', 1, '2017-07-19 14:15:07', 'Scared Kris'),
(48, 87, './uploads/_87/1fc57f7f6f55371126088a5af0366a3b.jpg', 1, '2017-07-19 14:16:54', '??????'),
(49, 89, './uploads/_89/d60fb34278809b25319489ea20f4db12.png', 1, '2017-07-19 14:17:28', 'look at that cool Yoda'),
(50, 90, './uploads/_0/66ea4cd95b3e3b68f750957850ffe2bc.jpg', 1, '2017-07-19 14:22:45', '*crown emoji*'),
(51, 91, './uploads/_0/0b47bf1bd3af36411740d467ed0910c7.png', 1, '2017-07-19 14:29:43', '*dragon emoji*'),
(52, 92, './uploads/_92/de2a9c1b16d1d2465680aea2e1cc9025.jpg', 1, '2017-07-19 14:31:26', '*bird emoji*'),
(53, 93, './uploads/_93/118d4e2967451390263ce905772d820f.jpg', 1, '2017-07-19 14:32:31', '*ship emoji*'),
(54, 94, './uploads/_94/8ffc3dc78968df942df0c58a0d18107a.jpg', 1, '2017-07-19 14:34:36', '??????'),
(55, 95, './uploads/_95/b3b87da6835e8f25133138b5fef213f0.jpg', 1, '2017-07-19 14:35:31', '??????'),
(56, 96, './uploads/_95/044b7bbe394173e03b0caf46c56e8dcc.jpg', 1, '2017-07-19 14:39:04', 'Arya avenged the Red Wedding.'),
(57, 103, './uploads/_103/a2cbb2cfe8c7196bf853da260999ec81.mp4', 3, '2017-07-19 14:53:34', 'BOOM'),
(58, 105, './uploads/_99/7d8ebbd688b7e9d582cde65b9a339756.gif', 1, '2017-07-19 15:06:26', ''),
(59, 106, './uploads/_98/c5f5894411b0dc790e828878c8e0bc63.png', 1, '2017-07-19 15:09:19', ''),
(60, 107, './uploads/_98/7f3c6377cdc276d05512bf23c3117b69.gif', 1, '2017-07-19 15:10:43', ''),
(61, 108, './uploads/_98/54a0be17f7b3e1d35463c6d46b74d78c.gif', 1, '2017-07-20 07:23:53', 'luv luv luv'),
(62, 110, './uploads/_100/6e0c9ef0ddae4bbc556907db03dd8e56.gif', 1, '2017-07-20 07:25:49', ''),
(63, 113, './uploads/_99/dce8716eac9f70eb2e86f8f6a0b9a938.gif', 1, '2017-07-20 07:33:29', ''),
(64, 126, './uploads/_125/b1de9ab3348854f21d15323aa2eca9b8.JPG', 1, '2017-07-20 07:53:07', ''),
(65, 136, './uploads/_88/61a22adba889937bdab0db20c9cb8e62.png', 1, '2017-07-20 14:29:49', ''),
(66, 138, './uploads/_88/8ede60b03964774bc69822e6c9b1b1fe.png', 1, '2017-07-20 14:31:54', ''),
(67, 139, './uploads/_88/935796a520e8cdcb23c707f7f55849c7.png', 1, '2017-07-20 14:32:48', ''),
(68, 140, './uploads/_88/443f981346e89e55a978e4dfb54ae46e.png', 1, '2017-07-20 14:37:33', 'RAWR'),
(69, 144, './uploads/_137/f466dce1dc6d02d4aca9d53056ad597c.jpg', 1, '2017-07-20 14:45:25', ''),
(70, 145, './uploads/_88/b43f9ee61486ca260bbd1e01b3a6fdd0.gif', 1, '2017-07-20 14:48:51', ''),
(71, 146, './uploads/_134/f5ba354b0c2d8836712a574ca877dfcb.PNG', 1, '2017-07-20 14:49:00', ''),
(72, 147, './uploads/_134/57e8cf12c412ed2f779acb90fe60a03a.JPG', 1, '2017-07-20 14:51:54', ''),
(73, 152, './uploads/_117/7aac3b20c9bfc4164c3c6d5bb665df75.png', 1, '2017-07-20 15:13:49', ''),
(74, 153, './uploads/_134/06686740f3df1f9e3534165f2530c265.PNG', 1, '2017-07-20 16:15:58', ''),
(75, 154, './uploads/_134/1c51070a2a32d9fe94dc9d73e67a1ea9.JPG', 1, '2017-07-20 16:18:46', ''),
(76, 157, './uploads/_134/65043f0b342764f318f79932440803e1.mp4', 3, '2017-07-20 17:46:47', 'listen to it!'),
(77, 162, './uploads/_134/0977d02ba2403f30662d68e377a28f3d.PNG', 1, '2017-07-21 16:53:09', ''),
(78, 165, './uploads/_134/15f53c4906cf08150c5d4e4b0f2f2aee.mp4', 3, '2017-07-21 17:07:11', ''),
(79, 166, './uploads/_134/843475e5706e322a1b5d9b1fd7200be8.PNG', 1, '2017-07-22 06:24:07', ''),
(80, 169, './uploads/_134/b8770099b03b4cfe578338b3d5f51baa.gif', 1, '2017-07-22 15:37:25', ''),
(81, 171, './uploads/_164/6e69ada7db309ab1250f4dfbd8a9bd55.jpg', 1, '2017-07-28 04:40:16', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attachment_type`
--

CREATE TABLE `tbl_attachment_type` (
  `attachment_type_id` int(11) NOT NULL,
  `type_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_attachment_type`
--

INSERT INTO `tbl_attachment_type` (`attachment_type_id`, `type_name`) VALUES
(1, 'image'),
(2, 'audio'),
(3, 'video'),
(4, 'file');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_genders`
--

CREATE TABLE `tbl_genders` (
  `gender_id` int(11) NOT NULL,
  `gender_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_messages`
--

CREATE TABLE `tbl_messages` (
  `message_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `message` varchar(45) NOT NULL,
  `date_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_moderator_invite`
--

CREATE TABLE `tbl_moderator_invite` (
  `invite_id` int(11) NOT NULL,
  `inviter_id` int(11) NOT NULL,
  `invited_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_moderator_invite`
--

INSERT INTO `tbl_moderator_invite` (`invite_id`, `inviter_id`, `invited_id`, `topic_id`, `status`) VALUES
(1, 21, 3, 26, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_moderator_request`
--

CREATE TABLE `tbl_moderator_request` (
  `request_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_moderator_request`
--

INSERT INTO `tbl_moderator_request` (`request_id`, `user_id`, `topic_id`, `status`) VALUES
(1, 5, 1, 1),
(2, 3, 26, 1),
(3, 33, 33, 1),
(6, 3, 36, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notifications`
--

CREATE TABLE `tbl_notifications` (
  `notification_id` int(11) NOT NULL,
  `notification_type_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doer_id` int(11) NOT NULL,
  `source_id` int(11) NOT NULL,
  `is_read` int(1) NOT NULL,
  `date_performed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_notifications`
--
/*
INSERT INTO `tbl_notifications` (`notification_id`, `notification_type_id`, `user_id`, `doer_id`, `source_id`, `is_read`, `date_performed`) VALUES
(1, 5, 3, 5, 3, 1, '2017-06-21 06:06:25'),
(2, 2, 5, 6, 4, 1, '2017-06-22 05:35:52'),
(4, 2, 5, 10, 3, 0, '2017-06-22 06:23:32'),
(5, 2, 5, 9, 3, 0, '2017-06-22 06:24:02'),
(6, 2, 5, 12, 3, 0, '2017-06-22 06:31:19'),
(7, 2, 5, 8, 3, 0, '2017-06-22 06:35:06'),
(8, 2, 5, 11, 3, 0, '2017-06-22 06:39:42'),
(9, 3, 5, 12, 7, 0, '2017-06-23 01:38:45'),
(13, 3, 5, 6, 7, 0, '2017-06-23 04:34:37'),
(14, 2, 12, 9, 10, 1, '2017-06-23 04:40:37'),
(15, 5, 12, 9, 10, 1, '2017-06-23 04:41:01'),
(17, 3, 5, 10, 7, 0, '2017-06-23 04:42:25'),
(18, 5, 12, 7, 11, 1, '2017-06-23 04:42:55'),
(19, 2, 12, 10, 10, 1, '2017-06-23 04:44:07'),
(20, 1, 7, 10, 11, 1, '2017-06-23 04:44:20'),
(21, 5, 12, 7, 13, 1, '2017-06-23 04:46:35'),
(22, 5, 12, 10, 14, 1, '2017-06-23 04:47:12'),
(23, 3, 9, 17, 10, 1, '2017-06-23 04:47:47'),
(24, 5, 12, 7, 15, 1, '2017-06-23 04:48:30'),
(25, 5, 12, 7, 16, 1, '2017-06-23 04:50:09'),
(26, 5, 12, 10, 17, 1, '2017-06-23 04:50:11'),
(27, 2, 12, 8, 10, 1, '2017-06-23 04:50:14'),
(28, 1, 12, 10, 18, 1, '2017-06-23 04:51:04'),
(29, 3, 10, 9, 17, 1, '2017-06-23 04:53:16'),
(30, 3, 9, 10, 10, 1, '2017-06-23 04:54:50'),
(31, 5, 12, 8, 20, 1, '2017-06-23 04:56:15'),
(32, 5, 12, 7, 21, 1, '2017-06-23 04:56:56'),
(33, 2, 12, 6, 10, 1, '2017-06-23 04:57:37'),
(34, 2, 5, 6, 3, 0, '2017-06-23 04:57:54'),
(35, 1, 8, 17, 20, 1, '2017-06-23 04:58:37'),
(36, 3, 8, 10, 20, 1, '2017-06-23 05:00:23'),
(37, 3, 8, 9, 20, 1, '2017-06-23 05:00:34'),
(38, 5, 12, 8, 23, 1, '2017-06-23 05:02:36'),
(39, 5, 12, 9, 24, 1, '2017-06-23 05:02:39'),
(40, 3, 9, 8, 24, 1, '2017-06-23 05:03:20'),
(41, 5, 12, 10, 25, 1, '2017-06-23 05:03:43'),
(42, 5, 12, 17, 26, 1, '2017-06-23 05:05:19'),
(43, 5, 12, 17, 27, 1, '2017-06-23 05:05:20'),
(44, 5, 12, 17, 28, 1, '2017-06-23 05:05:20'),
(45, 5, 12, 17, 29, 1, '2017-06-23 05:05:26'),
(46, 5, 12, 17, 30, 1, '2017-06-23 05:05:27'),
(47, 5, 12, 17, 31, 1, '2017-06-23 05:05:29'),
(48, 5, 12, 17, 32, 1, '2017-06-23 05:05:29'),
(49, 5, 12, 17, 33, 1, '2017-06-23 05:05:33'),
(50, 5, 12, 17, 34, 1, '2017-06-23 05:05:45'),
(51, 3, 10, 8, 25, 1, '2017-06-23 05:06:35'),
(52, 5, 12, 10, 36, 1, '2017-06-23 05:14:43'),
(53, 3, 12, 10, 35, 1, '2017-06-23 05:15:07'),
(54, 3, 17, 10, 34, 1, '2017-06-23 05:15:16'),
(55, 5, 12, 10, 37, 1, '2017-06-23 05:16:15'),
(56, 2, 12, 17, 10, 1, '2017-06-23 05:17:36'),
(57, 5, 12, 17, 38, 1, '2017-06-23 05:52:17'),
(65, 4, 7, 18, 11, 0, '2017-06-23 07:56:08'),
(66, 4, 8, 18, 11, 1, '2017-06-23 07:56:08'),
(67, 4, 9, 18, 11, 1, '2017-06-23 07:56:08'),
(68, 4, 10, 18, 11, 1, '2017-06-23 07:56:08'),
(69, 4, 12, 18, 11, 1, '2017-06-23 07:56:08'),
(70, 4, 16, 18, 11, 1, '2017-06-23 07:56:08'),
(71, 4, 17, 18, 11, 1, '2017-06-23 07:56:08'),
(72, 3, 10, 9, 37, 1, '2017-06-23 09:04:14'),
(73, 1, 5, 18, 6, 0, '2017-06-23 09:12:57'),
(74, 3, 5, 18, 6, 0, '2017-06-23 09:16:41'),
(75, 5, 12, 8, 40, 1, '2017-06-23 16:19:37'),
(77, 3, 19, 12, 46, 1, '2017-06-29 01:15:58'),
(79, 3, 7, 10, 43, 0, '2017-06-29 01:23:34'),
(80, 3, 19, 10, 46, 1, '2017-06-29 01:23:54'),
(81, 2, 17, 10, 16, 1, '2017-06-29 01:42:21'),
(82, 2, 19, 10, 15, 1, '2017-06-29 01:42:31'),
(83, 2, 19, 10, 14, 1, '2017-06-29 01:42:37'),
(84, 5, 17, 10, 47, 1, '2017-06-29 01:50:32'),
(85, 2, 19, 8, 14, 1, '2017-06-29 04:45:24'),
(86, 2, 19, 8, 15, 1, '2017-06-29 04:46:10'),
(87, 2, 19, 17, 15, 1, '2017-06-29 08:46:29'),
(90, 3, 19, 16, 46, 1, '2017-06-29 08:52:25'),
(91, 3, 7, 16, 11, 0, '2017-06-29 08:53:18'),
(92, 5, 18, 16, 50, 1, '2017-06-29 08:58:44'),
(93, 1, 16, 18, 50, 1, '2017-06-29 09:10:36'),
(94, 5, 16, 18, 58, 1, '2017-06-29 09:11:09'),
(95, 5, 12, 17, 61, 0, '2017-06-29 09:12:39'),
(96, 5, 12, 17, 62, 0, '2017-06-29 09:12:39'),
(97, 5, 12, 17, 63, 0, '2017-06-29 09:12:40'),
(98, 5, 12, 17, 64, 0, '2017-06-29 09:12:40'),
(99, 5, 12, 17, 65, 0, '2017-06-29 09:12:41'),
(100, 5, 12, 17, 66, 0, '2017-06-29 09:12:41'),
(101, 5, 12, 17, 67, 0, '2017-06-29 09:12:42'),
(102, 5, 12, 17, 68, 0, '2017-06-29 09:12:43'),
(103, 5, 12, 17, 69, 0, '2017-06-29 09:12:43'),
(104, 5, 12, 17, 70, 0, '2017-06-29 09:12:44'),
(105, 5, 12, 17, 71, 0, '2017-06-29 09:12:45'),
(106, 5, 12, 17, 72, 0, '2017-06-29 09:12:50'),
(107, 5, 16, 18, 73, 1, '2017-06-29 09:13:43'),
(108, 2, 16, 18, 20, 1, '2017-06-29 09:15:01'),
(109, 5, 16, 18, 77, 1, '2017-06-29 09:19:26'),
(110, 5, 16, 18, 78, 1, '2017-06-29 09:20:34'),
(111, 1, 18, 16, 73, 1, '2017-06-29 09:21:49'),
(112, 2, 19, 20, 15, 1, '2017-06-29 09:31:30'),
(113, 2, 16, 20, 18, 1, '2017-06-29 09:32:05'),
(114, 5, 19, 20, 81, 1, '2017-06-29 09:50:23'),
(115, 2, 19, 9, 14, 1, '2017-07-01 14:07:59'),
(116, 4, 7, 18, 24, 0, '2017-07-02 11:09:33'),
(117, 4, 8, 18, 24, 0, '2017-07-02 11:09:33'),
(118, 4, 9, 18, 24, 0, '2017-07-02 11:09:33'),
(119, 4, 10, 18, 24, 0, '2017-07-02 11:09:33'),
(120, 4, 12, 18, 24, 0, '2017-07-02 11:09:33'),
(121, 4, 16, 18, 24, 0, '2017-07-02 11:09:33'),
(122, 4, 17, 18, 24, 0, '2017-07-02 11:09:33'),
(123, 4, 20, 18, 24, 0, '2017-07-02 11:09:33'),
(124, 3, 16, 18, 79, 0, '2017-07-02 11:11:06'),
(125, 5, 12, 3, 82, 0, '2017-07-10 01:16:45'),
(126, 5, 19, 3, 83, 1, '2017-07-10 01:18:56'),
(127, 2, 5, 21, 3, 0, '2017-07-11 18:12:48'),
(128, 4, 3, 21, 26, 1, '2017-07-11 18:16:45'),
(129, 4, 5, 21, 26, 0, '2017-07-11 18:16:45'),
(130, 4, 6, 21, 26, 0, '2017-07-11 18:16:45'),
(131, 2, 21, 3, 26, 1, '2017-07-11 18:18:10'),
(132, 2, 19, 3, 15, 1, '2017-07-11 18:38:27'),
(133, 2, 5, 3, 2, 0, '2017-07-11 18:43:42'),
(134, 2, 5, 3, 3, 0, '2017-07-11 18:43:45'),
(135, 2, 12, 3, 10, 0, '2017-07-11 18:43:48'),
(136, 2, 18, 3, 11, 1, '2017-07-11 18:43:51'),
(137, 2, 18, 3, 12, 1, '2017-07-11 18:43:58'),
(138, 2, 7, 3, 13, 0, '2017-07-11 18:44:02'),
(139, 2, 19, 3, 14, 1, '2017-07-11 18:44:07'),
(140, 2, 17, 3, 16, 0, '2017-07-11 18:44:11'),
(141, 2, 16, 3, 18, 0, '2017-07-11 18:44:14'),
(142, 2, 16, 3, 19, 0, '2017-07-11 18:44:18'),
(143, 2, 16, 3, 20, 0, '2017-07-11 18:44:29'),
(144, 3, 21, 3, 86, 0, '2017-07-11 18:48:27'),
(146, 3, 7, 3, 41, 0, '2017-07-11 19:09:35'),
(147, 2, 22, 23, 27, 1, '2017-07-19 13:56:14'),
(148, 2, 23, 24, 29, 1, '2017-07-19 14:01:26'),
(149, 2, 3, 24, 30, 1, '2017-07-19 14:01:39'),
(150, 2, 23, 22, 29, 1, '2017-07-19 14:03:32'),
(151, 2, 23, 3, 29, 1, '2017-07-19 14:04:19'),
(152, 2, 22, 24, 27, 1, '2017-07-19 14:06:31'),
(153, 2, 22, 3, 27, 1, '2017-07-19 14:13:31'),
(154, 5, 23, 3, 89, 1, '2017-07-19 14:17:28'),
(155, 3, 23, 22, 88, 1, '2017-07-19 14:40:11'),
(156, 3, 3, 23, 89, 1, '2017-07-19 14:41:51'),
(157, 4, 3, 23, 31, 1, '2017-07-19 14:55:00'),
(158, 4, 6, 23, 31, 0, '2017-07-19 14:55:00'),
(159, 4, 19, 23, 31, 1, '2017-07-19 14:55:01'),
(160, 4, 22, 23, 31, 1, '2017-07-19 14:55:01'),
(161, 4, 24, 23, 31, 1, '2017-07-19 14:55:01'),
(162, 1, 3, 23, 89, 1, '2017-07-19 14:55:50'),
(163, 3, 22, 23, 87, 1, '2017-07-19 15:03:49'),
(164, 3, 22, 23, 90, 1, '2017-07-19 15:03:51'),
(165, 3, 22, 23, 91, 1, '2017-07-19 15:03:53'),
(166, 3, 22, 23, 92, 1, '2017-07-19 15:03:54'),
(167, 3, 22, 23, 93, 1, '2017-07-19 15:03:55'),
(168, 3, 22, 23, 94, 1, '2017-07-19 15:03:56'),
(169, 3, 22, 23, 95, 1, '2017-07-19 15:03:58'),
(170, 2, 23, 22, 31, 1, '2017-07-19 15:04:57'),
(171, 3, 23, 22, 103, 1, '2017-07-19 15:05:00'),
(172, 3, 23, 22, 102, 1, '2017-07-19 15:05:03'),
(173, 3, 23, 22, 101, 1, '2017-07-19 15:05:05'),
(174, 3, 23, 22, 100, 1, '2017-07-19 15:05:08'),
(175, 3, 23, 22, 99, 1, '2017-07-19 15:05:12'),
(176, 3, 23, 22, 98, 1, '2017-07-19 15:05:15'),
(179, 1, 23, 22, 98, 1, '2017-07-19 15:10:43'),
(180, 3, 22, 23, 106, 1, '2017-07-20 07:18:01'),
(181, 3, 22, 23, 107, 1, '2017-07-20 07:18:02'),
(182, 1, 22, 23, 107, 1, '2017-07-20 07:23:53'),
(183, 1, 23, 24, 99, 1, '2017-07-20 07:25:07'),
(184, 2, 23, 24, 31, 1, '2017-07-20 07:25:37'),
(185, 3, 22, 23, 105, 1, '2017-07-20 07:26:50'),
(186, 1, 24, 23, 109, 1, '2017-07-20 07:27:40'),
(187, 1, 23, 24, 111, 1, '2017-07-20 07:30:21'),
(188, 3, 23, 22, 111, 1, '2017-07-20 07:32:16'),
(189, 3, 23, 22, 108, 1, '2017-07-20 07:32:33'),
(190, 1, 23, 24, 113, 1, '2017-07-20 07:35:33'),
(191, 2, 23, 28, 31, 1, '2017-07-20 07:35:52'),
(192, 1, 24, 28, 114, 1, '2017-07-20 07:36:30'),
(193, 5, 19, 24, 118, 1, '2017-07-20 07:39:09'),
(194, 2, 19, 29, 32, 1, '2017-07-20 07:41:32'),
(195, 2, 19, 23, 33, 1, '2017-07-20 07:45:06'),
(196, 2, 19, 23, 34, 1, '2017-07-20 07:45:14'),
(197, 2, 19, 23, 32, 1, '2017-07-20 07:45:16'),
(198, 2, 19, 23, 35, 1, '2017-07-20 07:45:25'),
(199, 3, 3, 23, 83, 1, '2017-07-20 07:50:53'),
(200, 2, 19, 3, 32, 1, '2017-07-20 07:50:54'),
(204, 3, 19, 29, 123, 1, '2017-07-20 07:55:19'),
(205, 2, 23, 3, 31, 1, '2017-07-20 08:00:31'),
(207, 2, 19, 3, 34, 1, '2017-07-20 08:01:22'),
(208, 2, 19, 3, 33, 1, '2017-07-20 08:01:25'),
(209, 2, 19, 3, 35, 1, '2017-07-20 08:01:37'),
(210, 1, 23, 28, 88, 1, '2017-07-20 13:42:00'),
(212, 2, 28, 33, 36, 1, '2017-07-20 14:24:43'),
(213, 2, 19, 28, 15, 1, '2017-07-20 14:27:42'),
(219, 2, 23, 28, 29, 1, '2017-07-20 14:30:55'),
(220, 5, 28, 33, 137, 1, '2017-07-20 14:31:23'),
(222, 1, 28, 23, 133, 1, '2017-07-20 14:32:48'),
(223, 3, 23, 3, 136, 1, '2017-07-20 14:33:51'),
(224, 1, 28, 3, 133, 1, '2017-07-20 14:37:33'),
(225, 1, 28, 23, 134, 1, '2017-07-20 14:37:33'),
(226, 2, 28, 23, 36, 1, '2017-07-20 14:37:40'),
(227, 1, 33, 23, 137, 1, '2017-07-20 14:38:36'),
(233, 3, 23, 33, 142, 1, '2017-07-20 14:44:55'),
(234, 1, 23, 33, 142, 1, '2017-07-20 14:45:25'),
(235, 3, 33, 3, 137, 0, '2017-07-20 14:47:07'),
(237, 1, 3, 23, 140, 1, '2017-07-20 14:48:51'),
(238, 1, 33, 23, 144, 0, '2017-07-20 14:54:27'),
(239, 3, 33, 23, 137, 0, '2017-07-20 14:55:08'),
(240, 3, 33, 23, 144, 0, '2017-07-20 14:55:18'),
(241, 1, 28, 23, 146, 1, '2017-07-20 14:57:55'),
(242, 1, 19, 23, 121, 1, '2017-07-20 15:01:13'),
(243, 3, 3, 23, 140, 1, '2017-07-20 15:06:06'),
(244, 1, 19, 23, 120, 1, '2017-07-20 15:09:21'),
(245, 3, 19, 23, 120, 1, '2017-07-20 15:10:27'),
(246, 1, 19, 23, 117, 1, '2017-07-20 15:13:49'),
(247, 3, 19, 23, 117, 1, '2017-07-20 15:14:10'),
(248, 3, 23, 28, 149, 1, '2017-07-20 16:15:07'),
(249, 1, 23, 28, 149, 1, '2017-07-20 16:18:46'),
(250, 5, 33, 28, 155, 0, '2017-07-20 16:19:46'),
(252, 1, 28, 3, 134, 1, '2017-07-20 17:46:47'),
(253, 1, 3, 28, 157, 1, '2017-07-20 17:49:26'),
(254, 3, 28, 23, 158, 1, '2017-07-21 00:57:10'),
(255, 3, 3, 23, 157, 1, '2017-07-21 00:57:11'),
(256, 1, 19, 29, 124, 1, '2017-07-21 03:34:37'),
(257, 3, 3, 28, 157, 1, '2017-07-21 17:04:04'),
(258, 1, 28, 23, 164, 1, '2017-07-22 15:33:24'),
(260, 1, 28, 23, 166, 1, '2017-07-22 15:37:25'),
(261, 3, 29, 3, 160, 1, '2017-07-23 11:01:17'),
(262, 1, 28, 3, 164, 1, '2017-07-23 11:34:51'),
(263, 3, 23, 19, 152, 1, '2017-07-26 03:47:21'),
(264, 3, 28, 3, 171, 1, '2017-07-28 18:13:57'),
(265, 3, 23, 3, 150, 0, '2017-07-30 16:43:23'),
(268, 3, 23, 3, 151, 0, '2017-07-30 16:43:48'),
(271, 3, 3, 19, 83, 1, '2017-07-31 02:39:50'),
(272, 5, 28, 19, 173, 1, '2017-07-31 02:57:34'),
(273, 5, 29, 19, 174, 1, '2017-07-31 04:30:52'),
(274, 3, 3, 28, 140, 1, '2017-08-06 09:06:46'),
(275, 3, 23, 3, 169, 0, '2017-08-16 19:42:41'),
(276, 3, 28, 3, 158, 0, '2017-08-16 19:43:02'),
(279, 2, 28, 3, 36, 0, '2017-08-20 20:55:22'),
(280, 3, 7, 3, 44, 0, '2017-08-20 22:29:31'),
(281, 4, 24, 3, 36, 0, '2017-08-20 22:40:37'),
(282, 4, 25, 3, 36, 0, '2017-08-20 22:40:37'),
(283, 4, 26, 3, 36, 0, '2017-08-20 22:40:37'),
(284, 4, 29, 3, 36, 1, '2017-08-20 22:40:37'),
(285, 3, 28, 3, 154, 0, '2017-08-20 23:47:15'),
(286, 3, 23, 3, 141, 0, '2017-08-20 23:47:27'),
(297, 3, 19, 3, 173, 0, '2017-08-21 00:10:53'),
(298, 1, 19, 3, 173, 0, '2017-08-22 01:23:27'),
(299, 3, 19, 22, 119, 0, '2017-09-21 05:47:18'),
(300, 3, 3, 22, 83, 1, '2017-09-21 05:48:12'),
(301, 3, 28, 22, 163, 0, '2017-09-21 05:50:52'),
(302, 1, 23, 22, 99, 0, '2017-09-21 05:54:13'),
(303, 3, 19, 3, 121, 0, '2017-09-21 05:57:46'),
(304, 5, 19, 3, 178, 0, '2017-09-21 05:58:18'),
(305, 1, 19, 3, 121, 0, '2017-09-21 05:59:32'),
(306, 1, 23, 3, 150, 0, '2017-09-21 05:59:52'),
(307, 5, 33, 3, 182, 0, '2017-09-21 06:00:59'),
(308, 3, 19, 3, 46, 0, '2017-09-21 06:02:28'),
(309, 3, 28, 3, 164, 0, '2017-11-14 04:55:01'),
(310, 5, 3, 18, 183, 0, '2018-01-04 07:17:05'),
(312, 2, 3, 40, 40, 0, '2018-01-09 02:36:44');
*/
-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification_type`
--

CREATE TABLE `tbl_notification_type` (
  `notification_type_id` int(11) NOT NULL,
  `type_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_notification_type`
--

INSERT INTO `tbl_notification_type` (`notification_type_id`, `type_name`) VALUES
(1, 'Reply'),
(2, 'Follow'),
(3, 'Upvote'),
(4, 'Share'),
(5, 'Post');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `post_id` int(11) NOT NULL,
  `root_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `post_title` varchar(100) DEFAULT '""',
  `post_content` varchar(16000) NOT NULL,
  `date_posted` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_posts`
--
INSERT INTO `tbl_posts` (`post_id`, `root_id`, `parent_id`, `user_id`, `topic_id`, `post_title`, `post_content`, `date_posted`, `is_deleted`) VALUES
(1, 1, 0, 12, 1, 'Hello, everyone!', 'Welcome to Mukhlat', '2018-06-21 01:34:31', 0),
(2, 2, 0, 3, 2, '', 'That\'s cool!', '2018-06-21 06:05:22', 0),
(3, 3, 0, 4, 3, '', 'It\'s so cute!', '2018-06-21 06:06:25', 0),
(4, 6, 0, 6, 4, '', 'That\'s cool!', '2018-06-22 05:46:51', 0),
(5, 7, 0, 5, 5, '', 'Looks good!', '2018-06-22 05:47:51', 0),
(6, 10, 0, 7, 6, '', 'You should!', '2018-06-23 04:41:01', 0),
(7, 11, 0, 8, 7, '', 'It\'s based on the Fallout series of video games!', '2018-06-23 04:42:55', 0),
(8, 11, 11, 8, 8, '', 'Nice work!', '2018-06-23 04:44:20', 0),
(9, 13, 0, 9, 9, '', 'I do!', '2018-06-23 04:46:35', 0),
(10, 14, 0, 10, 10, '', 'Yeah they are!', '2018-06-23 04:47:12', 0),
(11, 15, 0, 11, 11, '', 'Nice work!', '2018-06-23 04:48:30', 0),
(12, 16, 0, 12, 12, '', 'It actually looks good!', '2018-06-23 04:50:09', 0),
(13, 17, 0, 3, 13, '', 'Aww, they\'re so cute!', '2018-06-23 04:50:11', 0),
(14, 18, 0, 14, 14, '', 'Looks good!', '2018-06-23 04:50:26', 0),
(15, 18, 18, 15, 15, '', 'You\'re right!', '2018-06-23 04:51:04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_vote`
--

CREATE TABLE `tbl_post_vote` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vote_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_post_vote`
--
/*
INSERT INTO `tbl_post_vote` (`post_id`, `user_id`, `vote_type`) VALUES
(1, 1, 1),
(1, 2, 1),
(1,3, 1),
(2, 10, 1),
(2, 12, 1),
(2, 8, 1),
(3, 7, 1),
(3, 9, 1),
(3, 10, 1),
(4, 17, 1),
(4, 8, 1),
(4, 8, 1),
(5, 8, 1),
(5, 8, 1),
(5, 8, 1),
(6, 8, 1),
(6, 7, 1),
(7, 8, 1),
(7, 10, 1),
(7, 9, 1),
(8, 9, 1),
(8, 10, 1),
(8, 17, 1),
(9, 10, 1),
(9, 8, 1),
(9, 8, 1),
(10, 10, 1),
(10, 9, 1),
(10, 8, 1),
(11, 8, 1),
(11, 10, 1),
(11, 8, 1),
(12, 10, 1),
(12, 8, 1),
(12, 10, 1),
*/

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`role_id`, `role_name`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_topics`
--

CREATE TABLE `tbl_topics` (
  `topic_id` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `topic_name` varchar(35) NOT NULL,
  `topic_description` varchar(256) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `is_cancelled` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_topics`
--

INSERT INTO `tbl_topics` (`topic_id`, `creator_id`, `topic_name`, `topic_description`, `date_created`, `is_cancelled`) VALUES
(1, 12, 'Welcome To Mukhlat!', 'Welcome to Mukhlat, guys! Feel free to talk about anything in here!', '2018-06-01 01:34:03', 0),
(2, 6, 'I found a Caterpillar!', 'I was told not to touch it!', '2018-06-02 06:04:02', 0),
(3, 12, 'My Orange Cat', 'I love my cat!', '2018-07-01 05:31:11', 0),
(4, 5, 'Black Panther', 'Me and my dad just watched Black Panther! It was so cool!', '2018-06-23 04:40:19', 0),
(5, 4, 'Chocolate Milkshake', 'I just tried a really good milkshake!', '2018-06-23 07:50:45', 0),
(6, 12, 'Ka-Chow!', 'I love Cars 3, and I really want to buy this game', '2018-06-27 02:12:19', 0),
(7, 7, 'Fallout Shelter', 'My friend really loves this game. Can anyone tell me what it\'s about?', '2018-06-27 02:12:57', 0),
(8, 4, 'Paint 3D', 'I tried using Paint 3D and made this snowman!', '2018-06-28 11:57:01', 0),
(9, 8, 'Minecraft', 'Does anyone here play Minecraft too?', '2018-06-28 12:01:15', 0),
(10, 11, 'Mini Marshmallows', 'Mini Marshmallows are great!', '2018-06-29 01:33:15', 0),
(11, 10, 'I saw a big snail!', 'And I took a picture of it!', '2018-06-29 08:51:02', 0),
(12, 9, 'Healthy Pizza', 'Look at this pizza!', '2017-07-29 08:55:06', 0),
(13, 13, 'My Cute Kittens', 'Hey guys, look at my kittens!', '2018-06-29 08:57:31', 0),
(14, 4, 'Mikmik', 'Look, I have Mikmik!', '2018-06-29 09:00:10', 0),
(15, 3, 'The Moon', 'The moon looks huge tonight!', '2018-06-29 09:01:22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_topic_follower`
--

CREATE TABLE `tbl_topic_follower` (
  `topic_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_topic_follower`
--

INSERT INTO `tbl_topic_follower` (`topic_id`, `user_id`) VALUES
(2, 5),
(5, 6),
(6, 6),
(7, 6),
(8, 6),
(4, 5),
(3, 5),
(9, 5),
(3, 10),
(3, 9),
(3, 12),
(3, 8),
(3, 11),
(10, 12),
(10, 9),
(10, 10),
(10, 8),
(10, 6),
(3, 6),
(10, 17),
(11, 18),
(12, 18),
(13, 7),
(14, 19),
(15, 19),
(16, 17),
(16, 10),
(15, 10),
(14, 10),
(14, 8),
(15, 8),
(15, 17),
(17, 18),
(18, 16),
(19, 16),
(20, 16),
(21, 18),
(22, 18),
(23, 18),
(20, 18),
(15, 20),
(18, 20),
(14, 9),
(24, 18),
(25, 3),
(26, 3),
(26, 21),
(1, 3),
(15, 3),
(3, 3),
(11, 3),
(12, 3),
(14, 3),
(16, 3),
(18, 3),
(20, 3),
(27, 22),
(28, 24),
(27, 23),
(29, 23),
(30, 3),
(29, 24),
(30, 24),
(29, 22),
(29, 3),
(27, 24),
(27, 3),
(31, 23),
(31, 22),
(31, 24),
(31, 28),
(32, 19),
(33, 19),
(32, 29),
(34, 19),
(35, 19),
(33, 23),
(34, 23),
(32, 23),
(35, 23),
(36, 28),
(31, 3),
(33, 3),
(36, 33),
(15, 28),
(29, 28),
(37, 33),
(36, 23),
(38, 29),
(36, 3),
(39, 3),
(40, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_topic_moderator`
--

CREATE TABLE `tbl_topic_moderator` (
  `topic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_topic_moderator`
--

INSERT INTO `tbl_topic_moderator` (`topic_id`, `user_id`) VALUES
(1, 13),
(2, 6),
(3, 12), 
(4, 5),
(5, 4), 
(6, 12), 
(7, 7),
(8, 4),
(9, 8),
(10, 11),
(11, 10),
(12, 9),
(13, 13),
(14, 4),
(15, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(64) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_enabled` int(1) NOT NULL,
  `is_online` binary(1) DEFAULT NULL,
  `profile_url` varchar(100) DEFAULT NULL,
  `session_id` varchar(45) DEFAULT NULL,
  `description` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `email`, `password`, `first_name`, `last_name`, `birthdate`, `role_id`, `is_enabled`, `is_online`, `profile_url`, `session_id`, `description`) VALUES
(1, 'aric_brillantes@admin.com', '8C6976E5B5410415BDE908BD4DEE15DFB167A9C873FC4BB8A81F6F2AB448A918', 'Aric', 'Brillantes', '1999-09-30', 1, 1, NULL, 'uploads/user_profiles/aric.jpg', NULL, NULL),
(2, 'klaudia_borromeo@admin.com', '8C6976E5B5410415BDE908BD4DEE15DFB167A9C873FC4BB8A81F6F2AB448A918', 'Gaia', 'Borromeo', '1997-09-01', 1, 1, NULL, 'uploads/user_profiles/gaia.jpg', NULL, NULL),
(3, 'lenard_villagantol@dlsu.edu.ph', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'Lenard', 'Villagantol', '2008-12-29', 2, 1, NULL, 'uploads/user_profiles/boy_1.jpg', NULL, NULL),
(4, 'edmund_cruz@dlsu.edu.ph', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'EG', 'Cruz', '2008-04-25', 2, 1, NULL, 'uploads/user_profiles/boy_1.jpg', NULL, NULL),
(5, 'arlan_gomez@dlsu.edu.ph', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'Arlan', 'Gomez', '2008-12-19', 2, 1, NULL, 'uploads/user_profiles/boy_1.jpg', NULL, NULL),
(6, 'rafael_tanchuan@dlsu.edu.ph', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'Raf', 'Tanchuan', '2008-08-18', 2, 1, NULL, 'uploads/user_profiles/boy_2.jpg', NULL, NULL),
(7, 'michael_noble@dlsu.edu.ph', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'Michael', 'Noble', '2008-12-02', 2, 1, NULL, 'uploads/user_profiles/boy_2.jpg', NULL, NULL),
(8, 'ramon_arca@dlsu.edu.ph', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'Ramon', 'Arca', '2008-07-17', 2, 1, NULL, 'uploads/user_profiles/boy_1.jpg', NULL, NULL),
(9, 'aron_tan@dlsu.edu.ph', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'Aaron', 'Tan', '2008-08-05', 2, 1, NULL, 'uploads/user_profiles/boy_1.jpg', NULL, NULL),
(10, 'rgee_gallega@dlsu.edu.ph', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'Rgee', 'Gallega', '2008-12-22', 2, 1, NULL, 'uploads/user_profiles/boy_2.jpg', NULL, NULL),
(11, 'arturo_caronongan@dlsu.edu.ph', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'Art', 'Caronongnan', '2008-09-26', 2, 1, NULL, 'uploads/user_profiles/boy_2.jpg', NULL, NULL),
(12, 'aric_brillantes@dlsu.edu.ph', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'Aric', 'Brillantes', '2008-09-30', 2, 1, NULL, 'uploads/user_profiles/boy_1.jpg', NULL, NULL),
(13, 'klaudia_borromeo@dlsu.edu.ph', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'Gaia', 'Borromeo', '2008-09-01', 2, 1, NULL, 'uploads/user_profiles/girl_1.jpg', NULL, NULL);

CREATE TABLE `tbl_trivias` (
  `TriviaID` int(11) NOT NULL,
  `Tquestion` varchar(255) NOT NULL,
  `Tanswer` varchar(255) NOT NULL,
  `Tcategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tbl_trivias`  (`TriviaID`, `Tquestion`, `Tanswer`, `Tcategory`)
VALUES
(1, 'What name is usually given to Bananas cultivated for cooking?', 'Plantains', 'Science'),
(2, 'What does the Kelvin scale measure?', 'Temperature', 'Science'),
(3, 'Where would you find your Glabella?', 'Between your eyebrows!', 'Science'),
(4, 'What animal lives in a lodge?', 'The Beaver!', 'Science');

CREATE TABLE `tbl_covers` (
  `cover_id` int(11) primary key NOT NULL auto_increment,
  `topic_id` int(11) NOT NULL,
  `file_url` varchar(256) NOT NULL);

INSERT INTO `tbl_covers`  (`cover_id`, `topic_id`, `file_url`)
VALUES
(1, 1, 'uploads/cover_photos/mukhlatlogo.png'),
(2, 2, 'uploads/cover_photos/I found a caterpillar.JPG'),
(3, 3, 'uploads/cover_photos/My orange cat.JPG'),
(4, 4, 'uploads/cover_photos/wakanda.jpg'),
(5, 5, 'uploads/cover_photos/this chocolate milshake is good.JPG'),
(6, 6, 'uploads/cover_photos/cars 3.JPG'),
(7, 7, 'uploads/cover_photos/fallout shelter.PNG'),
(8, 8, 'uploads/cover_photos/I tried paint 3d.jpg'),
(9, 9, 'uploads/cover_photos/minecraft.png'),
(10, 10, 'uploads/cover_photos/mini marshmallows are great.JPG'),
(11, 11, 'uploads/cover_photos/I saw big snail.JPG'),
(12, 12, 'uploads/cover_photos/healthy looking pizza.JPG'),
(13, 13, 'uploads/cover_photos/new cute kittens.JPG'),
(14, 14, 'uploads/cover_photos/I have mikmik.JPG'),
(15, 15, 'uploads/cover_photos/the moon.JPG');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_attachments`
--
ALTER TABLE `tbl_attachments`
  ADD PRIMARY KEY (`attachment_id`);

--
-- Indexes for table `tbl_attachment_type`
--
ALTER TABLE `tbl_attachment_type`
  ADD PRIMARY KEY (`attachment_type_id`);

--
-- Indexes for table `tbl_genders`
--
ALTER TABLE `tbl_genders`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tbl_moderator_invite`
--
ALTER TABLE `tbl_moderator_invite`
  ADD PRIMARY KEY (`invite_id`);

--
-- Indexes for table `tbl_moderator_request`
--
ALTER TABLE `tbl_moderator_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `tbl_notifications`
--
ALTER TABLE `tbl_notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `tbl_notification_type`
--
ALTER TABLE `tbl_notification_type`
  ADD PRIMARY KEY (`notification_type_id`);

--
-- Indexes for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_topics`
--
ALTER TABLE `tbl_topics`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_attachments`
--
ALTER TABLE `tbl_attachments`
  MODIFY `attachment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `tbl_moderator_invite`
--
ALTER TABLE `tbl_moderator_invite`
  MODIFY `invite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_moderator_request`
--
ALTER TABLE `tbl_moderator_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_notifications`
--
ALTER TABLE `tbl_notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;
--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
--
-- AUTO_INCREMENT for table `tbl_topics`
--
--
ALTER TABLE `tbl_topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
