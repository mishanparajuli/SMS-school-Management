-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 10:43 AM
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
-- Database: `school_ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `user_name`, `password`) VALUES
(1, 'beebee', 'bebe', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `inquires`
--

CREATE TABLE `inquires` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquires`
--

INSERT INTO `inquires` (`id`, `date`, `name`, `email`, `phone`, `message`) VALUES
(30, '2024-05-17', 'apple', 'appple@co.com', '98658741253', 'apple a day keeps doctor away'),
(31, '2024-05-17', 'haribahadur', 'bdrhari@gmail.com', '9841256301', 'What are the requirements and deadlines for admissions?'),
(32, '2024-05-17', 'guest', 'imguest@gmail.com', '9806100220', 'How does the school ensure safety and security ?'),
(36, '2024-05-18', 'MingTamang', 'iammingtamang@gmail.com', '9841230758', 'Are there any entrance exams or interviews as part of the admissions process?'),
(38, '2024-05-20', 'vivhan', 'viv@viv.com', '9847563201', 'i forgot my password  , how to get new one  !!!');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `heading` varchar(255) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `date`, `heading`, `content`, `image`) VALUES
(29, '2024-05-08', 'Exam Has Been Postponed', 'BCA 4th sem 2078 Batch Exam Has been Postponed !!!', 'IMG-6649a2298635a6.54164310.jpg'),
(30, '2024-05-15', 'Local Cat Too Cool For Town', 'Local Cat Named Mikey  Found Studying Bachelor in Computer application  ', 'IMG-6649a2dd18e825.50529460.jpg'),
(31, '2024-05-19', 'Website Hacked', 'Hackers Claimed To Have Breached School\'s  confidential data !!', 'IMG-6649c3ec7b4673.86013445.jpg'),
(33, '2024-05-21', 'Exam Date Has Been Announced', 'BCA 4th Semester exam starting from 21 of Jestha ', 'IMG-664bd27c4af6d7.45836718.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `to_whom` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `postDate` date NOT NULL DEFAULT current_timestamp(),
  `validUpto` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `to_whom`, `subject`, `message`, `postDate`, `validUpto`) VALUES
(29, 'all', 'Exam is comming Near ', 'All the students are informed by this notice about board exam to be held soon. clear all your fees and register your exam form ', '2024-03-04', '2024-06-30'),
(33, 'all', 'Sports Week', 'अर्को सातादेखि खेलकुद सप्ताह हुने भएको छ, इच्छुक विद्यार्थीले सम्बन्धित खेलमा नाम दर्ता गराउन सक्नेछन् |', '2024-05-19', '2024-06-29'),
(34, 'all', 'Test', 'this is to test notice size .......................................................... area111111111111111111111111111111111111111111111111111', '2024-05-20', '2024-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `courseName` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `contact`, `email`, `courseName`, `user_name`, `password`) VALUES
(27, 'nischal', 'taamang', '9867771234', 'nixxysenpai@gmail.com', 'BCA', 'nischall', 'nischal2'),
(29, 'krishna', 'pokhrel', '9847532522', 'krish@gmail.com', 'Bsc.CSIT', 'krish', 'krish'),
(30, 'leo', 'messi', '9825361475', 'quemerasbobo@gmail.com', 'BCA', 'campeone', 'campeone'),
(32, 'vivhan', 'parajuli', '9863201475', 'viv@gmail.com', 'Bsc.CSIT', 'viv', 'viv'),
(33, 'sandesh', 'dhakal', '9864751203', 'sandesh@gmail.com', 'BCA', 'sandy', 'sandy'),
(34, 'nischal', 'moktan', '9745612073', 'nischal@gmail.com', 'BCA', 'nischal', 'nischal'),
(35, 'kshitiz', 'maharjan', '9847562105', 'kshitiz@gmail.com', 'BBS', 'kshitiz', 'kshitiz'),
(36, 'dilipp', 'poudel', '9845761230', 'dilip@gmail.com', 'BBS', 'dilip', 'dilip'),
(37, 'aayush', 'kc', '9841523670', 'ayush@gmail.com', 'BIM', 'aayush', 'aayush'),
(38, 'sandesh', 'dhakal', '9845627103', 'sandy@san.com', 'BCA', 'sandy', 'sandy'),
(39, 'gopal', 'mahato', '9812098120', 'gopal@gg.com', 'BBS', 'gopal', 'gopal'),
(40, 'reewaz', 'niroula', '9810025486', 'reewaz@gmail.com', 'BIM', 'reewaz', 'reewaz'),
(41, 'mukunda', 'ghimire', '9841253607', 'mukunde@gmail.com', 'BIM', 'mukunde', 'mukunde'),
(42, 'hari', 'bahadur', '9863251470', 'dhungebagara@gmail.com', 'BIM', 'ihiihi', 'ihiihi');

-- --------------------------------------------------------

--
-- Table structure for table `studentinquiry`
--

CREATE TABLE `studentinquiry` (
  `studentId` int(11) NOT NULL,
  `query` varchar(255) DEFAULT NULL,
  `reply` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `fname`, `lname`, `contact`, `email`, `courseName`, `user_name`, `password`) VALUES
(18, 'Bhoj Raj', 'Joshi', '9898989898', 'BRJ@gmail.com', 'BCA', 'bhoj', '123'),
(20, 'Roshan', 'Tandukar', '9876589325', 'RSHN@gmail.com', 'BCA', 'roshan', '123'),
(33, 'Basanta', 'chapagain', '9812563024', 'BSNT@gmail.com', 'BCA', 'basanta', '123'),
(34, 'Nischal', 'Moktan', '9812345698', 'Nixsenpai@gmail.com', 'BCA', 'nixx', '123'),
(38, 'jagadish', 'bhatt', '9847586931', 'jadgish@sir.com', 'BCA', 'jagadish', 'jagadish'),
(39, 'raju', 'master', '9814572635', 'rajumaster@gmail.com', 'BBS', 'master', 'master');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `courseName` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `post_date` date NOT NULL DEFAULT current_timestamp(),
  `check_approval` int(11) NOT NULL DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `fname`, `lname`, `courseName`, `phone`, `email`, `username`, `password`, `user_type`, `post_date`, `check_approval`) VALUES
(24, 'hola', 'bhola', 'BBS', '9847562103', 'bholaloversir@gmail.com', 'bhola', 'bhola', 'teacher', '2024-05-16', 1),
(25, 'sandesh', 'dhakal', 'BCA', '9864751203', 'sandesh@gmail.com', 'sandy', 'sandy', 'student', '2024-05-17', 1),
(26, 'fghj', 'fghj', 'BCA', '9874563201', 'fgh@gh.com', 'asd', 'asd', 'student', '2024-05-17', 0),
(27, 'bipin', 'parajuli', 'BCA', '9841300727', 'bipin@gmail.com', 'bipin', 'bipin', 'student', '2024-05-17', -1),
(28, 'nischal', 'moktan', 'BCA', '9745612073', 'nischal@gmail.com', 'nischal', 'nischal', 'student', '2024-05-17', 1),
(29, 'kshitiz', 'maharjan', 'BBS', '9847562105', 'kshitiz@gmail.com', 'kshitiz', 'kshitiz', 'student', '2024-05-17', 1),
(30, 'dilipp', 'poudel', 'BBS', '9845761230', 'dilip@gmail.com', 'dilip', 'dilip', 'student', '2024-05-17', 1),
(31, 'aayush', 'kc', 'BIM', '9841523670', 'ayush@gmail.com', 'aayush', 'aayush', 'student', '2024-05-17', 1),
(32, 'sandesh', 'dhakal', 'BCA', '9845627103', 'sandy@san.com', 'sandy', 'sandy', 'student', '2024-05-17', 1),
(33, 'reewaz', 'niroula', 'BIM', '9810025486', 'reewaz@gmail.com', 'reewaz', 'reewaz', 'student', '2024-05-17', 1),
(34, 'gopal', 'mahato', 'BBS', '9812098120', 'gopal@gg.com', 'gopal', 'gopal', 'student', '2024-05-17', 1),
(35, 'test', 'test', 'BBS', '98456327025', 'tst@test.com', 'testt', 'testt', 'teacher', '2024-05-20', 0),
(36, 'check', 'two', 'BIM', '98562', 'no@email.com', 'check', 'check', 'student', '2024-05-20', 0),
(37, 'last', 'check', 'BIM', '984523614', 'last@try.com', 'try', 'try', 'teacher', '2024-05-20', 0),
(38, 'mukunda', 'ghimire', 'BIM', '9841253607', 'mukunde@gmail.com', 'mukunde', 'mukunde', 'student', '2024-05-20', 1),
(39, 'hari', 'bahadur', 'BIM', '9863251470', 'dhungebagara@gmail.com', 'ihiihi', 'ihiihi', 'student', '2024-05-20', 1),
(40, 'madan', 'bahadur', 'Bsc.CSIT', '9856412570', 'madan@bdr.com', 'madan', 'madan', 'student', '2024-05-20', -1),
(41, 'jagadish', 'bhatt', 'BCA', '9847586931', 'jadgish@sir.com', 'jagadish', 'jagadish', 'teacher', '2024-05-20', 1),
(42, 'raju', 'master', 'BBS', '9814572635', 'rajumaster@gmail.com', 'master', 'master', 'teacher', '2024-05-20', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquires`
--
ALTER TABLE `inquires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentinquiry`
--
ALTER TABLE `studentinquiry`
  ADD PRIMARY KEY (`studentId`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquires`
--
ALTER TABLE `inquires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentinquiry`
--
ALTER TABLE `studentinquiry`
  ADD CONSTRAINT `studentInquiry_ibfk_1` FOREIGN KEY (`studentId`) REFERENCES `student` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
