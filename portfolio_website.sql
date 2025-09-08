-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2025 at 03:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description`) VALUES
(1, 'I\'m Tunku. Currently a student of Diploma in Computer Science (Internet Computing).\r\nStarted to become obsessed with CyberSecurity when I played a game called \"WATCH_DOGS\".\r\nI used to dream of becoming a hacker when I was little.\r\n<br><br>\r\nExplored the world of hacking right after I finished my SPM.\r\nEnrolled and joining ethical hacking classes and courses outside of the university.\r\nSometimes I just self-learn and learn from the internet.\r\nSpent over RM 1,000 related in this field, including ethical hacking class/courses and gadgets.\r\n<br><br>\r\nI learn from experts and I am also a student of a Cybersecurity Engineer who has ever trained Polis Diraja Malaysia (PDRM), Angkatan Tentera Malaysia (ATM), Malaysian Communications and Multimedia Commission (MCMC), Jabatan Imigresen Malaysia, and Government Officials in Ethical Hacking.\r\n<br><br>\r\nEthical Hacking is the one and only my deepest passion.');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `activities_id` int(11) NOT NULL,
  `activities_name` varchar(100) NOT NULL,
  `activities_desc` varchar(200) NOT NULL,
  `activities_vid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`activities_id`, `activities_name`, `activities_desc`, `activities_vid`) VALUES
(7, 'CCTV Hacking', 'Search for exposed 1sr4eli IP Address and connect to their CCTV', 'CCTV Hacking.mp4'),
(8, 'Fake Wi-FI Portal', 'Using hacking gadget to create a fake Wi-Fi that requires user to enter their login credentials', 'Fake Wi-FI Portal.mp4'),
(9, 'Reverse Engineering', 'Make a modification on video game by reverse engineering and binary exploitation using Assembly Language', 'Reverse Engineering.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `education_id` int(11) NOT NULL,
  `education_name` varchar(100) NOT NULL,
  `education_duration` varchar(100) NOT NULL,
  `education_img` varchar(200) NOT NULL,
  `education_link` varchar(200) NOT NULL,
  `education_desc` varchar(200) NOT NULL,
  `education_logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`education_id`, `education_name`, `education_duration`, `education_img`, `education_link`, `education_desc`, `education_logo`) VALUES
(1, 'Universiti Pendidikan Sultan Idris', '2024 - Present', 'UPSI Background.jpg', 'https://www.upsi.edu.my/', 'Diploma in Computer Science (Internet Computing)', 'UPSI Logo (Outline).png'),
(4, 'Kolej Sultan Abdul Hamid', '2019 - 2023', 'KSAH Background.jpg', 'https://ms.wikipedia.org/wiki/Kolej_Sultan_Abdul_Hamid', 'Computer Science stream in SPM', 'Ksah-removebg-resized.png');

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE `interest` (
  `interest_id` int(11) NOT NULL,
  `interest_ranking` int(100) NOT NULL,
  `interest_name` varchar(100) NOT NULL,
  `interest_desc` varchar(200) NOT NULL,
  `interest_icon` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`interest_id`, `interest_ranking`, `interest_name`, `interest_desc`, `interest_icon`) VALUES
(1, 1, 'Ethical Hacking', 'I used to dream of becoming a hacker when I was little. I started focusing on this field right after I finished my SPM. WATCH_DOGS game is my huge inspiration.', 'terminal.png'),
(2, 2, 'Programming', 'I started programming since 2022 when I took Computer Science subject when I was 16 years old (Form 4). Java is my first programming language.', 'code-alt.png'),
(5, 3, 'Video Editing', 'Started learning basic video editing in 2022 when I got a new PC, then I learnt how to edit with CapCut Desktop as a minor hobby. I am not an advanced video editor, just intermediate.', 'crop.png');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `qualification_id` int(11) NOT NULL,
  `qualification_name` varchar(100) NOT NULL,
  `qualification_img` varchar(200) NOT NULL,
  `qualification_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`qualification_id`, `qualification_name`, `qualification_img`, `qualification_link`) VALUES
(2, 'Web Hacking & Intrusion', 'cert1.png', 'https://drive.google.com/file/d/1ypp2Sw951fDoLxFJKlpR01DBr0RAhdw_/view?usp=sharing'),
(3, 'Ethical Hacking: SCADA Edition', 'cert2.png', 'https://drive.google.com/file/d/1h_VTaD8KrYtOFdOU3YbTWSfxWs1uRwAN/view?usp=sharing'),
(4, 'The Social Engineering & Phishing Workshop', 'cert3.png', 'https://certs.zeroday-sec.com/certificate.php?id=SENP-151'),
(5, 'The Network Penetration Tester Course', 'cert4.png', 'https://certs.zeroday-sec.com/certificate.php?id=NPT-048');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(12) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userName`, `password`) VALUES
(1, 'admin', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`activities_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `interest`
--
ALTER TABLE `interest`
  ADD PRIMARY KEY (`interest_id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`qualification_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `activities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `interest`
--
ALTER TABLE `interest`
  MODIFY `interest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `qualification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
