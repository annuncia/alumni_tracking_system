-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 08:52 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `from_rollno` varchar(15) NOT NULL,
  `message` varchar(50) NOT NULL,
  `to_rollno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chat_contacts`
--

CREATE TABLE `chat_contacts` (
  `rollno` varchar(20) NOT NULL,
  `chated_rollno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `name` varchar(30) NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `job_name` varchar(50) NOT NULL,
  `job_loc` varchar(50) NOT NULL,
  `type` varchar(25) NOT NULL,
  `link` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`name`, `rollno`, `job_name`, `job_loc`, `type`, `link`, `date`) VALUES
('Ajay', '18itr004', 'software Engg', 'Chennai', 'Full time', 'link', '11/2/2021'),
('Dinesh  Kumar', '18itr021', 'Software Engg', 'Chennai', 'Full time', 'link', '12/2/2022');

-- --------------------------------------------------------

--
-- Table structure for table `notable_alumni`
--

CREATE TABLE `notable_alumni` (
  `name` varchar(30) NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `des` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `company_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notable_alumni`
--

INSERT INTO `notable_alumni` (`name`, `rollno`, `des`, `photo`, `company_name`) VALUES
('Govind Raj', '17mts028', 'CEO', 'https://cdn.pixabay.com/photo/2018/03/30/15/11/deer-3275594_960_720.jpg', 'Kaar'),
('Hari Sanjay', '18CSE032', 'CEO', 'https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg', 'Vuram'),
('Abishek', '18itr002', 'CEO', 'https://cdn.pixabay.com/photo/2017/12/15/13/51/polynesia-3021072__340.jpg', 'Musigm'),
('Dinesh  Kumar', '18itr021', 'CEO', 'https://cdn.pixabay.com/photo/2017/10/17/16/10/fantasy-2861107_960_720.jpg', 'Trimable');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `name` varchar(30) NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `des` varchar(10) NOT NULL,
  `para` varchar(500) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`name`, `rollno`, `des`, `para`, `profile_pic`, `path`) VALUES
('Ajay', '18itr004', 'Software e', 'As June came to an end, Facebook CEO Mark Zuckerberg told his employees about an ambitious new initiative. The future of the company would go far beyond its current project of building a set of connected social apps and some hardware to support them. Instead, he said, Facebook would strive to build a maximalist, interconnected set of experiences straight out of sci-fi — a world known as the metaverse.\r\n\r\nMore at : https://www.theverge.com/22588022/mark-zuckerberg-facebook-ceo-metaverse-interview', 'https://bestprofilepictures.com/wp-content/uploads/2021/04/Cool-Profile-Picture.jpg', 'https://cdn.vox-cdn.com/thumbor/WAZprCnpWrvrfZFGzQ8kP5lMgYg=/0x0:2040x1360/925x925/filters:focal(857x517:1183x843):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/69616727/acastro_072121_4674_zuckerberg_3.5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `name` varchar(30) NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `search_roll` varchar(15) NOT NULL,
  `batch` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(30) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dept` text NOT NULL,
  `batch` varchar(10) NOT NULL,
  `class` varchar(5) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `C_company` varchar(50) DEFAULT NULL,
  `C_des` varchar(30) DEFAULT NULL,
  `profile_pic_path` varchar(500) DEFAULT NULL,
  `salary` int(20) DEFAULT NULL,
  `PASSWORD` varchar(10) DEFAULT NULL,
  `age` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `rollno`, `email`, `dept`, `batch`, `class`, `phonenumber`, `C_company`, `C_des`, `profile_pic_path`, `salary`, `PASSWORD`, `age`) VALUES
('Govind Raj', '17mts028', 'raj@kaar.in', 'MTS', '2021', 'MTS-A', 750228975, 'Kaar', 'CEO', 'https://cdn.pixabay.com/photo/2018/03/30/15/11/deer-3275594_960_720.jpg', 147895000, '12345', 0),
('Hari Sanjay', '18CSE032', 'hari@gmail.com', 'CSE', '2022', 'CSE-B', 2147483647, 'Vuram', 'CEO', 'https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg', 457892000, '12345', 0),
('Abinash', '18itr001', 'abinashsm.18it@kongu', 'IT', '2022', 'IT-A', 789456130, 'CTS', 'Software engg', 'image', 2022, '12345', 0),
('Abishek', '18itr002', 'abishek@gmail.com', 'IT', '2022', 'IT-A', 789456120, 'Musigm', 'CEO', 'https://cdn.pixabay.com/photo/2017/12/15/13/51/polynesia-3021072__340.jpg', 10000000, '12345', 0),
('Ajay', '18itr004', 'ajayk.18it@kongu.edu', 'IT', '2022', 'IT-A', 789456120, 'Zoho Corp', 'Software engg', 'https://bestprofilepictures.com/wp-content/uploads/2021/04/Cool-Profile-Picture.jpg', 40000, '12345', 0),
('Dinesh  Kumar', '18itr021', 'dinesh@gmail.com', 'IT', '2022', 'IT-A', 59451951, 'Trimable', 'CEO', 'https://cdn.pixabay.com/photo/2017/10/17/16/10/fantasy-2861107_960_720.jpg', 2147483647, '12345', 0),
('Aravind', '19itr008', 'aravind@gmail.com', 'IT', '2019-2023', 'IT-A', 561954984, 'Clg ', 'Student', 'i', 0, '12345', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` enum('linkedin','google','facebook','twitter') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'linkedin',
  `oauth_uid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture`, `link`, `created`, `modified`) VALUES
(2, 'linkedin', 'bza-frvDk1', 'Ajay', 'Kathirvel', 'ajaykathir1101@gmail.com', NULL, '', '', 'https://www.linkedin.com/', '2020-05-18 10:48:10', '2020-05-18 19:45:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `name` varchar(30) NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `P_address` varchar(60) NOT NULL,
  `company_1` varchar(30) NOT NULL,
  `des_1` varchar(30) NOT NULL,
  `company_2` varchar(30) NOT NULL,
  `des_2` varchar(30) NOT NULL,
  `company_3` varchar(30) NOT NULL,
  `des_3` varchar(30) NOT NULL,
  `skill_1` varchar(15) NOT NULL,
  `skill_1_per` int(3) NOT NULL,
  `skill_2` varchar(15) NOT NULL,
  `skill_2_per` int(3) NOT NULL,
  `skill_3` varchar(15) NOT NULL,
  `skill_3_per` int(3) NOT NULL,
  `C_location` varchar(30) NOT NULL,
  `website_link` varchar(30) NOT NULL,
  `linkedin_link` varchar(50) NOT NULL,
  `profile_pic` varchar(500) NOT NULL,
  `company_count` int(3) NOT NULL,
  `skills_count` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`name`, `rollno`, `P_address`, `company_1`, `des_1`, `company_2`, `des_2`, `company_3`, `des_3`, `skill_1`, `skill_1_per`, `skill_2`, `skill_2_per`, `skill_3`, `skill_3_per`, `C_location`, `website_link`, `linkedin_link`, `profile_pic`, `company_count`, `skills_count`) VALUES
('Govind Raj', '17mts028', '', 'Kaar', 'CEO', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', 'https://cdn.pixabay.com/photo/2018/03/30/15/11/deer-3275594_960_720.jpg', 0, 0),
('Hari Sanjay', '18CSE032', '', 'Vuram', 'CEO', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', 'https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg', 0, 0),
('Abinash', '18itr001', '', 'CTS', 'Software engg', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOd256TcC6vcaQ99TYzoP0pBbch9_Q-bbrmw&usqp=CAU', 0, 0),
('Abishek', '18itr002', '', 'Musigm', 'CEO', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', 'https://cdn.pixabay.com/photo/2017/12/15/13/51/polynesia-3021072__340.jpg', 0, 0),
('Ajay', '18itr004', '', 'Zoho Corp', 'Software engg', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', 'https://bestprofilepictures.com/wp-content/uploads/2021/04/Cool-Profile-Picture.jpg', 0, 0),
('Dinesh  Kumar', '18itr021', '', 'Trimable', 'CEO', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', 'https://cdn.pixabay.com/photo/2017/10/17/16/10/fantasy-2861107_960_720.jpg', 0, 0),
('Aravind', '19itr008', '', 'Clg ', 'Student', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', 'i', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `notable_alumni`
--
ALTER TABLE `notable_alumni`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
