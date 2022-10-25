-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 02:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_sample_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 1),
(2, 'news', 'news', 2);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `plus2_db_images`
--

CREATE TABLE `plus2_db_images` (
  `p_id` int(3) NOT NULL DEFAULT 0,
  `p_name` varchar(100) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plus2_db_images`
--

INSERT INTO `plus2_db_images` (`p_id`, `p_name`, `price`, `img`) VALUES
(1, 'Rose', '20.34', 'rose.jpg'),
(2, 'Dragon Fly', '12.45', 'dragon-fly.jpg'),
(3, 'Butter Fly', '22.34', 'butterfly.jpg'),
(4, 'Anchor', '20.12', 'anchor.jpg'),
(5, 'njn', '23.20', 'a1.jpg'),
(5, 'njn', '23.20', 'a1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `img` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `name`, `description`, `img`) VALUES
(1, 'Breaking Bad', 'Created by Vince Gilligan, the series follows the exploits of Walter White, a modest high school chemistry teacher, who discovers a new purpose in life when he learns he has terminal cancer and turns to a life of crime to provide for his family.', 'medias/breakingbad.jpg'),
(2, 'Sing 2', 'Sing 2 is a 2021 American computer-animated jukebox musical comedy film produced by Illumination, and distributed by Universal Pictures. It is the sequel to Sing (2016) and the second film in the franchise, Garth Jennings returns as the director and writer with Christophe Lourdelet as co-director.', 'medias/sing2.jpg'),
(3, 'The Foster', 'The series follows the lives of police officer Stef Foster and her life partner Lena Adams, a school vice principal, and their multiethnic, blended family. Stef and Lena are the parents of Brandon, Stef\'s biological son from her previous marriage, and twins Jesus and Mariana, who were adopted as children.', 'medias/foster.jpg'),
(4, 'New Girl', 'After a bad break-up, Jess, an offbeat young woman, moves into an apartment loft with three single men. Although they find her behavior very unusual, the men support her - most of the time. Jess, a bubbly, off-beat teacher, who is known to burst into song, catches her boyfriend with another woman.', 'medias/newgirl.jpg'),
(5, 'Are You Here', 'The plot follows a bipolar man who inherits his estranged father\'s fortune and must then battle his sister in court for it while simultaneously battling his psychological issues.', 'medias/ruhere.jpg'),
(6, 'Babydaddy', 'The series follows Ben, a man in his twenties, who gets the surprise of his life when a one-night stand leaves his baby at his doorstep. Ben decides to raise his daughter with the help of his brother, Danny, his two close friends, Riley and Tucker, and his sometimes-overbearing mother, Bonnie.', 'medias/babydaddy.jpg'),
(7, 'Friends', 'Friends is a 90\'s Comedy TV show, based in Manhattan, about 6 friends who go through just about every life experience imaginable together; love, marriage, divorce, children, heartbreaks, fights, new jobs and job losses and all sorts of drama.', 'medias/friends.jpg'),
(8, 'Money Heist', 'Eight thieves take hostages and lock themselves in the Royal Mint of Spain as a criminal mastermind manipulates the police to carry out his plan. Watch all you want. This riveting crime series won Best Drama at the International Emmy Awards, Premios Fénix and Premios Iris (plus six more Iris wins).', 'medias/moneyheist.jpg'),
(9, 'Shameless ', 'Shameless is the story of a family of six kids and their drunk and selfish father. The eldest daughter Fiona has to raise the rest of the family on her own. They need to steal food and steal money to live while their father takes everything and offers nothing.', 'medias/shameless.jpg'),
(10, 'Orange is the Black', 'Convicted of a decade old crime of transporting drug money to an ex-girlfriend, normally law-abiding Piper Chapman is sentenced to a year and a half behind bars to face the reality of how life-changing prison can really be.', 'medias/orange.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'a', 'a', '2022-10-19 03:12:30'),
(2, 1, 'a', 'a', '2022-10-19 03:12:34'),
(3, 0, 'good movie', 'abhi', '2022-10-19 03:22:12'),
(4, 0, 'hh', 'abhi', '2022-10-19 03:22:50'),
(5, 3, 'fk', 'eeee', '2022-10-19 03:23:56'),
(6, 0, 'hhh', 'abhi', '2022-10-19 03:31:53'),
(7, 0, 'hai', 'abhijith', '2022-10-19 03:32:39'),
(8, 7, 'hooi', 'abhi', '2022-10-19 03:32:50'),
(9, 0, 'vgood', 'adhi', '2022-10-19 03:34:48'),
(10, 0, '123', 'adhi', '2022-10-19 03:37:13'),
(19, 0, 'hai', 'abhijith', '2022-10-24 08:26:06'),
(20, 0, 'b', 'njn', '2022-10-24 08:27:54'),
(21, 20, 't', 't', '2022-10-24 08:28:01'),
(22, 0, 'j', 'abhijith', '2022-10-24 08:35:02'),
(23, 22, 'm', 'm', '2022-10-24 08:35:10'),
(24, 0, 'd', 'dd', '2022-10-24 13:23:26'),
(25, 0, 'good', 'abu', '2022-10-24 13:41:55'),
(26, 25, 'nice', 'abu', '2022-10-24 13:42:04'),
(27, 0, 'j', 'j', '2022-10-24 15:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `upi_user`
--

CREATE TABLE `upi_user` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `upi_id` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upi_user`
--

INSERT INTO `upi_user` (`id`, `user_id`, `user_name`, `password`, `upi_id`, `date`) VALUES
(1, 6008548302, 'abhijith', '123', '987765432345', '2022-10-19 04:02:08'),
(2, 6432210391, 'a', '123', '987765432345', '2022-10-19 04:03:23'),
(3, 2708755431211960876, 'e', 'e', '123456789987', '2022-10-19 04:05:36'),
(4, 829546177, 'e', 'e', '987765432345', '2022-10-19 04:09:02'),
(5, 6061899608378062945, 'q', 'q', '9877654', '2022-10-19 04:16:17'),
(6, 988293460133506, 'abhijit', '12345678', 'abhijith@gmail.com', '2022-10-24 06:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `card_no` varchar(100) NOT NULL,
  `expiry_date` date NOT NULL,
  `cvv` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `card_no`, `expiry_date`, `cvv`, `role`, `date`) VALUES
(1, 92166, 'abhijith', '123', '98765432', '2022-03-12', 233, 1, '2022-10-24 12:46:45'),
(6, 77208881916261298, 's', 's', '123456789', '2022-03-12', 432, 2, '2022-10-24 12:46:55'),
(7, 0, 'abhi', '123', '12345678', '2022-12-12', 321, 0, '2022-10-23 04:07:29'),
(8, 943154867963245, 'qwe', 'qwe', '12345678', '2022-03-12', 765, 0, '2022-10-23 04:15:49'),
(9, 669380734565754, 'abhijit', 'abhijith1', '4991 1866 5247', '2022-02-13', 123, 0, '2022-10-24 06:00:28'),
(10, 925052696301, 'abhijit', 'abhijith1', '4991 1866 5247', '2022-02-13', 123, 0, '2022-10-24 06:02:56'),
(11, 46141748, 'sona', '12345678', '5234 3214 3453', '2022-12-12', 321, 0, '2022-10-24 08:23:20'),
(12, 849810235, 'abu', '12345678', '5674 7898 3243', '2022-12-12', 231, 0, '2022-10-24 13:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_name`, `location`) VALUES
(1, '202210191666169021', 'video/202210191666169021.mp4'),
(2, '202210191666169831', 'video/202210191666169831.mp4'),
(3, '202210221666452115', 'video/202210221666452115.mp4'),
(4, '202210241666625440', 'video/202210241666625440.mp4'),
(5, '202210241666625473', 'video/202210241666625473.mp4'),
(8, '202210241666625532', 'video/202210241666625532.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `video_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `upi_user`
--
ALTER TABLE `upi_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `upi_user`
--
ALTER TABLE `upi_user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
