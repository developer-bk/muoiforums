-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2019 at 05:54 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muoiRoom`
--

-- --------------------------------------------------------

--
-- Table structure for table `box`
--

CREATE TABLE `box` (
  `id_box` int(11) NOT NULL,
  `name_box` varchar(100) NOT NULL,
  `description_box` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `box`
--

INSERT INTO `box` (`id_box`, `name_box`, `description_box`) VALUES
(1, 'Chuyện trò linh tinh™', 'Box để mọi thành viên tham gia trò chuyện, chém gió về mọi chủ đề trên cuộc đời nhạt nhẽo này'),
(2, 'Điểm báo', 'Box đọc tin tức'),
(3, 'Truyền cảm hứng', 'Truyền cảm hứng'),
(4, 'Quan điểm-Tranh luận', 'Quan điểm-Tranh luận'),
(5, 'Phim', 'Bàn luận về Phim'),
(6, 'Sách', 'Sách'),
(7, 'Science2vn', 'Khoa học');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `post_id`, `user_id`, `comment_content`, `created_at`, `updated_at`) VALUES
(5, 3, 1, 'ccccc', '2019-06-15 16:17:45', '2019-06-15 16:17:45'),
(7, 7, 1, 'hihihi', '2019-06-15 16:32:01', '2019-06-15 16:32:01'),
(8, 3, 1, 'cccc', '2019-06-15 16:34:47', '2019-06-15 16:34:47'),
(9, 3, 1, 'cccccc', '2019-06-15 16:36:07', '2019-06-15 16:36:07'),
(10, 3, 1, 'vvvv', '2019-06-15 16:36:14', '2019-06-15 16:36:14'),
(11, 7, 1, 'ccccc', '2019-06-15 16:38:45', '2019-06-15 16:38:45'),
(12, 14, 1, 'cchchchcc', '2019-06-15 16:46:15', '2019-06-15 16:46:15'),
(13, 14, 1, 'ddddđ ccc', '2019-06-17 15:09:41', '2019-06-17 15:09:41'),
(17, 2, 1, 'hihihi', '2019-06-19 15:24:09', '2019-06-19 15:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `decentralization`
--

CREATE TABLE `decentralization` (
  `id_decentralization` int(11) NOT NULL,
  `name_decentralization` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `decentralization`
--

INSERT INTO `decentralization` (`id_decentralization`, `name_decentralization`) VALUES
(0, 'admin'),
(1, 'mod'),
(3, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` text,
  `user_created_id` int(11) NOT NULL,
  `box_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `subject`, `short_content`, `content`, `created_at`, `updated_at`, `image`, `user_created_id`, `box_id`) VALUES
(1, 'Chị Lệ bị chó cắn tiêm 3 mũi', 'Mở đầu là bản tin sau khi chuyển trọ chị Lệ đã bị con dog của chủ nhà cắn sâu 5cm. Vết thương rất nặng và có nguy cơ lây dại...', 'Mở đầu là bản tin sau khi chuyển trọ chị Lệ đã bị con dog của chủ nhà cắn sâu 5cm. Vết thương rất nặng và có nguy cơ lây dại.đâsdasdasdasdasdasdadadadadadadadd sdfsdfsdfsdf sdfsdfsdfsd dsfsdfsdfsdf sdfsdfsdfsd sdfsdfsdfsdf sdfsdfsdfsdf sdfsdfsdf Mở đầu là bản tin sau khi chuyển trọ chị Hưng đã bị con dog của chủ nhà cắn sâu 5cm. Vết thương rất nặng và có nguy cơ lây dại...Mở đầu là bản tin sau khi chuyển trọ chị Hưng đã bị con dog của chủ nhà cắn sâu 5cm. Vết thương rất nặng và có nguy cơ lây dại...Mở đầu là bản tin sau khi chuyển trọ chị Hưng đã bị con dog của chủ nhà cắn sâu 5cm. Vết thương rất nặng và có nguy cơ lây dại...', '2019-05-23 17:20:37', '2019-06-18 18:45:30', 'https://scontent.fhan5-5.fna.fbcdn.net/v/t1.0-9/49802108_1570294329781621_5470686229315977216_o.jpg?_nc_cat=101&_nc_oc=AQk0X67H47ltLDvXk_u9XpKqGxArPUf7dwFXigrWNrJ-a_pGtrDm-JiKnNH_6n2ob3VIRnnHh-48HIaEGeTX1kQc&_nc_ht=scontent.fhan5-5.fna&oh=66483d58b6eb104f6d207b56fd0faadb&oe=5D952EDE', 1, 1),
(2, 'Chị Lệ bị chó cắn tiêm 3 mũi', 'Mở đầu là bản tin sau khi chuyển trọ chị Hưng đã bị con dog của chủ nhà cắn sâu 5cm. Vết thương rất nặng và có nguy cơ lây dại...', 'Mở đầu là bản tin sau khi chuyển  trọ chị hưng đã bị con dog của chủ nhà cắn sâu 5cm. Vết thương rất nặng và có nguy cơ lây dại.đâsdasdasdasdasdasdadadadadadadadd sdfsdfsdfsdf sdfsdfsdfsd dsfsdfsdfsdf sdfsdfsdfsd sdfsdfsdfsdf sdfsdfsdfsdf sdfsdfsdf', '2019-05-23 17:21:20', '2019-06-19 15:09:31', 'https://scontent.fhan5-7.fna.fbcdn.net/v/t1.0-9/33665196_1369755483168841_7991586621931651072_n.jpg?_nc_cat=103&_nc_oc=AQmR2tJ47hdYJN7SyKgfXP6njwejv0cQpDWCdONVtkewNBPV-HiZRzjIRMD5hQcx1YCK3-QG1aVb0QGwK3RnyepE&_nc_ht=scontent.fhan5-7.fna&oh=dd73bd5380ba6e762cac71318a6beda5&oe=5D8B5487', 6, 2),
(3, 'Chị Lệ bị chó cắn tiêm 3 mũi', 'Mở đầu là bản tin sau khi chuyển trọ chị Hưng đã bị con dog của chủ nhà cắn sâu 5cm. Vết thương rất nặng và có nguy cơ lây dại...', 'Mở đầu là bản tin sau khi chuyển trọ chị hưng đã bị con dog của chủ nhà cắn sâu 5cm. Vết thương rất nặng và có nguy cơ lây dại.đâsdasdasdasdasdasdadadadadadadadd sdfsdfsdfsdf sdfsdfsdfsd dsfsdfsdfsdf sdfsdfsdfsd sdfsdfsdfsdf sdfsdfsdfsdf sdfsdfsdf ', '2019-05-23 17:21:24', '2019-06-19 15:09:33', 'https://scontent.fhan5-6.fna.fbcdn.net/v/t1.0-9/29342351_1321424588001931_7880260524158484480_o.jpg?_nc_cat=107&_nc_oc=AQmxo50GH1sJz0nfUxUI9EQp0IuEgarL-c7HTfjYgAD-Vsuwwr1Tttk5znhhLFyu7gBZauAUO6PcgXIJEwDGKZ6r&_nc_ht=scontent.fhan5-6.fna&oh=fe7264a42ebad10526e41bb8513263cf&oe=5D8402A3', 6, 2),
(5, 'đâsda', 'ádasdasdasdasd', 'ádasdasdasdasd', '2019-05-23 11:09:04', '2019-06-18 18:46:45', 'https://scontent.fhan5-7.fna.fbcdn.net/v/t1.0-9/22221549_1215532921924432_6514202790080726382_n.jpg?_nc_cat=100&_nc_oc=AQkjtGThItxuTvaRXvDZgFZQ3A6ukQpcF4oVlrzwYjvq_9z5r6fjslWYyeRXSfSoP1YlC9X20cLzIaZwJMrlg9iq&_nc_ht=scontent.fhan5-7.fna&oh=a17ebf4438afd706132e900f1af4af70&oe=5D954147', 1, 3),
(6, 'ssdfsdfsdf', 'fsdfsdfsdfsdf', 'fsdfsdfsdfsdf fv', '2019-05-23 11:09:41', '2019-06-19 15:09:26', 'https://scontent.fhan5-1.fna.fbcdn.net/v/t1.0-9/15590323_987990484678678_2257731274872484465_n.jpg?_nc_cat=109&_nc_oc=AQmJ3A4AED2l5aetPXB7MXXjJYN_wEFqPcZmPhTGptPT5kv2KVNm30IPk1ILxj7jYRFlEbkdgeVNB1UDgS4u49KJ&_nc_ht=scontent.fhan5-1.fna&oh=495fd7a54e780c67a2b69a3ba40222e6&oe=5D84C726', 1, 3),
(7, 'djtmemay', 'cacaacacacacacacacac', 'cacaacacacacacacacac', '2019-05-23 12:06:11', '2019-06-18 18:47:54', 'https://scontent.fhan5-6.fna.fbcdn.net/v/t1.0-9/14463056_923876661090061_4790424355893147911_n.jpg?_nc_cat=107&_nc_oc=AQkQOUMUjRHByXyg09Y-l8FNgNR9tmamxuS8KKrBLfPXdEEx05KkloYYuMyY0XZqudmBBpNWeHoAMcJsotPZb_Uj&_nc_ht=scontent.fhan5-6.fna&oh=0966e2a4db803172f2fd02f46ba76e0d&oe=5D8C41AF', 1, 3),
(8, 'sdszxc', 'âccaacacacac', 'âccaacacacac', '2019-05-23 19:08:19', '2019-06-18 18:48:09', 'https://scontent.fhan5-6.fna.fbcdn.net/v/t1.0-9/12802995_796334120510983_4248233663227135158_n.jpg?_nc_cat=107&_nc_oc=AQkeAiTQ7RDoXwl5ucXmSj5e6UzCRJsrxGNmruTX7Dkw8-bidaLAOMZfVK7c1HgcAueoLrYotAnJNlTtUciM_EEy&_nc_ht=scontent.fhan5-6.fna&oh=721fcf1101f3eff2096ac2f7d030f36d&oe=5D96B4BF', 1, 3),
(9, 'dfsdfsdfsdf', 'sdfsfsdfsdf', 'sdfsfsdfsdf', '2019-05-24 01:43:27', '2019-06-18 18:48:38', 'https://scontent.fhan5-7.fna.fbcdn.net/v/t1.0-1/c0.4.324.324a/18814200_2274810256078122_3539099022261614080_n.jpg?_nc_cat=103&_nc_oc=AQl0qfRdFBZOmD-wO30NgbMrEDucljnr3oiSl7MKsujGHV255lJehC43_TowveIZ4YbuJ-GFfVqy-j-Bpe-BhStE&_nc_ht=scontent.fhan5-7.fna&oh=b4d41608697f0b0ab0febb55d24197b8&oe=5D7CAC54', 1, 3),
(10, 'hâhhahahah', 'sfdsdfsdfsdf', 'sdfsdfsdfsfs', '2019-05-24 01:51:33', '2019-06-18 18:50:33', 'https://upload.wikimedia.org/wikipedia/commons/a/a1/Logo_Hust.png', 1, 1),
(11, 'Chị Lệ bị chó cắn tiêm 3 mũi', 'Mở đầu là bản tin sau khi chuyển trọ chị hưng đã bị con dog của chủ nhà cắ', 'Mở đầu là bản tin sau khi chuyển trọ chị hưng đã bị con dog của chủ nhà cắn sâu 5cm. Vết thương rất nặng và có nguy cơ lây dại.đâsdasdasdasdasdasdadadadadadadadd sdfsdfsdfsdf sdfsdfsdfsd dsfsdfsdfsdf sdfsdfsdfsd sdfsdfsdfsdf sdfsdfsdfsdf sdfsdfsdf', '2019-05-24 01:52:21', '2019-06-18 18:50:36', 'https://upload.wikimedia.org/wikipedia/commons/a/a1/Logo_Hust.png', 1, 3),
(13, 'cccccc', '<blockquote>\r\n<p>ccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc', '<blockquote>\r\n<p>ccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc ccccc cc cc cc cc</p>\r\n\r\n<p>&nbsp;</p>\r\n</blockquote>', '2019-05-29 16:12:27', '2019-06-18 18:50:38', 'https://upload.wikimedia.org/wikipedia/commons/a/a1/Logo_Hust.png', 1, 3),
(14, 'ahahah aha aha ah a ah ahah', '<p>hahaha ahah ah a hah ah aa h ah ah a ha hah a</p>', '<p>hahaha ahah ah a hah ah aa h ah ah a ha hah a</p>', '2019-05-30 06:34:05', '2019-06-18 18:50:40', 'https://upload.wikimedia.org/wikipedia/commons/a/a1/Logo_Hust.png', 1, 3),
(18, 'cccc', '<p>cccc</p>', '<p>cccc</p>', '2019-06-18 19:11:05', '2019-06-18 19:11:05', NULL, 1, 3),
(19, 'zxca kn in kjn kn jn ji', '<p>&nbsp;b hjb kj nj nk jn kjn kj nkj n jkn kn jkj&nbsp;</p>', '<p>&nbsp;b hjb kj nj nk jn kjn kj nkj n jkn kn jkj&nbsp;</p>', '2019-06-18 19:16:16', '2019-06-18 19:16:16', NULL, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `id_decentralization` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci,
  `number_phone` bigint(20) DEFAULT NULL,
  `cmt` bigint(20) DEFAULT NULL,
  `sex` text COLLATE utf8mb4_unicode_ci,
  `birth_day` date DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `first_name`, `last_name`, `avatar`, `id_decentralization`, `id_status`, `token`, `number_phone`, `cmt`, `sex`, `birth_day`, `address`) VALUES
(1, 'cpt242', '1998ntviet', NULL, '$2y$10$k90oIQWTQNRQna6lDRDWRewdffKOR2Nim.wwIw2AlfCEfHxnoIg0e', NULL, '2019-05-15 17:10:10', NULL, 'viet', 'nguyen', 'https://images-na.ssl-images-amazon.com/images/I/61JqKytwchL._SX679_.jpg', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'hungml', 'hungml@gmail.com', NULL, '$2y$10$A.xLyZACl3PlCfNY.S3Eyeq5uaH5CGnLDTYCUUVSixcc.CuMH/Fti', NULL, '2019-05-15 20:02:04', '2019-05-15 20:02:04', 'hung', NULL, 'http://chittagongit.com/images/user-account-icon/user-account-icon-13.jpg', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'zazaza', '1212121@gmail.com', NULL, '$2y$10$mZegJV8KZxiVCp8m9JWwRu4gCK3doLyhHw/xPbYOoTmbKxW8ivtOS', NULL, '2019-06-18 14:54:02', '2019-06-18 14:54:02', 'VIet', 'Nguyen', 'http://chittagongit.com/images/user-account-icon/user-account-icon-13.jpg', 3, 0, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `box`
--
ALTER TABLE `box`
  ADD PRIMARY KEY (`id_box`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `decentralization`
--
ALTER TABLE `decentralization`
  ADD PRIMARY KEY (`id_decentralization`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `user_created_id` (`user_created_id`),
  ADD KEY `box_id` (`box_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_decentralization` (`id_decentralization`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `box`
--
ALTER TABLE `box`
  MODIFY `id_box` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id_post`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`box_id`) REFERENCES `box` (`id_box`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`user_created_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_decentralization`) REFERENCES `decentralization` (`id_decentralization`);


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table box
--

--
-- Metadata for table comment
--

--
-- Metadata for table decentralization
--

--
-- Metadata for table migrations
--

--
-- Metadata for table post
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'muoiRoom', 'post', '[]', '2019-06-18 18:45:19');

--
-- Metadata for table users
--

--
-- Metadata for database muoiRoom
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
