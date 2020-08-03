-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 12:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `special` tinyint(1) DEFAULT 0,
  `sale_off` int(3) DEFAULT 0,
  `picture` text DEFAULT NULL,
  `created` date DEFAULT '0000-00-00',
  `created_by` varchar(255) DEFAULT NULL,
  `modified` date DEFAULT '0000-00-00',
  `modified_by` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `ordering` int(11) DEFAULT 10,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `description`, `price`, `special`, `sale_off`, `picture`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`, `category_id`) VALUES
(12, 'UnrealScript Game Programming Cookbook', ' Designed for high-level game programming, UnrealScript is used in tandem with the Unreal Engine to provide a scripting language that is ideal for ', '2500000', 1, 20, 'gt48z0w1.jpg', '2013-12-12', 'admin', '2013-12-25', 'admin', 1, 3, 2),
(13, 'Functional Programming in Scala', 'Functional programming (FP) is a programming style emphasizing functions that return consistent and predictable results regardless of a program\'s state. As a result, functional code is easier to test and reuse, simpler to parallelize, and less prone to bugs. Scala is an emerging JVM language that offers strong support for FP. Its familiar syntax and transparent interoperability with existing Java libraries make Scala a great place to start learning FP ', '35000', 1, 3, 'aw1tkgn0.jpg', '2013-12-12', 'admin', '2013-12-13', 'admin', 1, 1, 5),
(14, 'iOS 7 Programming Fundamentals', 'Sinh viên không vi phạm qui chế thi', '45000', 1, 0, 'ywhp70fj.jpg', '2013-12-12', 'admin', '2013-12-12', 'admin', 0, 2, 2),
(16, 'Advanced Programming in the UNIX Environment, 3rd Edition', ' He also thoroughly covers threads and multithreaded programming, and socket-based IPC.', '36000', 1, 2, 'wd6f4nlr.jpg', '2013-12-12', 'admin', '2013-12-13', 'admin', 0, 3, 1),
(17, 'jMonkeyEngine 3.0 Beginner', ' Progressing from elementary concepts to advanced effects, budding game developers will have their first game up and running by the end of this book.', '36000', 0, 12, 'x5h6onws.jpg', '2013-12-12', 'admin', '2013-12-12', 'admin', 1, 3, 2),
(18, 'Scala Cookbook', '\r\nAuthor Alvin Alexander (creator of DevDaily.com) provides solutions based on his experience using Scala for highly scalable, component-based applications that support concurrency and distribution.', '46000', 0, 0, 'lsary56t.jpg', '2013-12-12', 'admin', '2013-12-12', 'admin', 1, 10, 4),
(19, 'PostgreSQL Server Programming', 'PostgreSQL Server Programming will show you that PostgreSQL is so much more than a database server. In fact, it could even be seen as an application development framework, with the added bonuses of transaction support, massive data storage, journaling, recovery and a host of other features that the PostgreSQL engine provides.', '54000', 0, 5, 'lgr9kpbs.jpg', '2013-12-12', 'admin', '2013-12-12', 'admin', 1, 3, 6),
(20, 'Programming Drupal 7 Entities', 'Programming Drupal 7 Entities is a practical, hands-on guide that provides you with a thorough knowledge of Drupal entity paradigm and a number of clear step-by-step exercises, which will help you take advantage of the real power that is available when developing using entities.', '58000', 0, 4, 'rfl1qdst.jpg', '2013-12-12', 'admin', '2013-12-12', 'admin', 1, 3, 2),
(21, 'Moving from C to C++', 'The author says it best, I hope to move you, a little at a time,from understanding C to the point where C++ becomes your mindset. This remarkable book is designed to streamline the process of learning C++ in a way that discusses programming problems, why they exist, and the approach C++ has taken to solve such problems.\r\n\r\nYou cant just look at C++ as a collection of features; some of the features make no sense in isolation. You can only use the sum of the parts if you are thinking about design, not simply coding. To understand C++, you must understand the problems with C and with programming in general. This book discusses programming problems, why they are problems, and the approach C++ has taken to solve such problems. Thus, the set of features that I explain in each chapter will be based on the way that I see a particular type of problem being solved in C++.', '36000', 0, 3, '0lzxvrag.jpg', '2013-12-12', 'admin', '2013-12-12', 'admin', 0, 3, 8),
(22, 'C Programming for Arduino', 'Physical computing allows us to build interactive physical systems by using software & hardware in order to sense and respond to the real world. C Programming for Arduino will show you how to harness powerful capabilities like sensing, feedbacks, programming and even wiring and developing your own autonomous systems.\r\n\r\nC Programming for Arduino contains everything you need to directly start wiring and coding your own electronic project. You will learn C and how to code several types of firmware for your Arduino, and then move on to design small typical systems to understand how handling buttons, leds, LCD, network modules and much more.', '38000', 1, 0, '6qzesvax.jpg', '2013-12-12', 'admin', '2013-12-13', 'admin', 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` varchar(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `books` text NOT NULL,
  `prices` text NOT NULL,
  `quantities` text NOT NULL,
  `names` text NOT NULL,
  `pictures` text NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `username`, `books`, `prices`, `quantities`, `names`, `pictures`, `status`, `date`) VALUES
('ePfD6au', 'admin', '[\"13\",\"19\"]', '[\"33950\",\"51300\"]', '[\"1\",\"1\"]', '[\"Functional Programming in Scala\",\"PostgreSQL Server Programming\"]', '[\"7kyub3oi.jpg\",\"x3et42jv.jpg\"]', 0, '2013-12-18 11:20:51'),
('GoFw4UN', 'admin', '[\"13\",\"24\",\"16\",\"23\"]', '[\"33950\",\"31680\",\"35280\",\"34400\"]', '[\"2\",\"3\",\"3\",\"1\"]', '[\"Functional Programming in Scala\",\"Programming Logics\",\"Advanced Programming in the UNIX Environment, 3rd Edition\",\"Advanced Network Programming - Principles and Techniques\"]', '[\"7kyub3oi.jpg\",\"sbx52yne.jpg\",\"2yo48fgm.jpg\",\"vradhky9.jpg\"]', 0, '2013-12-25 06:41:06'),
('iKYZHlr', 'admin', '[\"13\",\"24\",\"16\"]', '[\"33950\",\"31680\",\"35280\"]', '[\"1\",\"2\",\"2\"]', '[\"Functional Programming in Scala\",\"Programming Logics\",\"Advanced Programming in the UNIX Environment, 3rd Edition\"]', '[\"7kyub3oi.jpg\",\"sbx52yne.jpg\",\"2yo48fgm.jpg\"]', 0, '2013-12-18 06:04:48'),
('zdebsc3', 'admin', '[\"13\"]', '[\"33950\"]', '[\"1\"]', '[\"Functional Programming in Scala\"]', '[\"7kyub3oi.jpg\"]', 0, '2013-12-18 06:04:11');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` text DEFAULT NULL,
  `created` date DEFAULT '0000-00-00',
  `created_by` varchar(255) DEFAULT NULL,
  `modified` date DEFAULT '0000-00-00',
  `modified_by` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `ordering` int(11) DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `picture`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`) VALUES
(1, 'Văn học', 'ojl2evrg.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 1, 10),
(2, 'Kỹ năng sống', 'ta3neb87.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 10),
(3, 'Thiếu nhi', '2bndk634.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 1, 10),
(4, 'Kinh tế', 'hqx2y0is.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 10),
(5, 'Y học', 'x2tfjy63.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 1, 10),
(6, 'Lịch sử', '1d3r506i.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 10),
(7, 'Khoa học - Kỹ thuật', '13dj2ugh.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 1, 10),
(8, 'Công nghệ thông tin', '83yoeq25.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `ordering` int(11) NOT NULL,
  `created` varchar(255) NOT NULL,
  `created_by` date NOT NULL,
  `modified` varchar(255) NOT NULL,
  `modified_by` date NOT NULL,
  `question` varchar(255) NOT NULL,
  `asked` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `status`, `ordering`, `created`, `created_by`, `modified`, `modified_by`, `question`, `asked`) VALUES
(1, 1, 1, 'Admin', '2020-06-02', 'Admin', '2020-06-02', 'Who am I making this out to?', 'Morbo can\'t understand his teleprompter because he forgot how you say that letter that\'s shaped like a man wearing a hat. Also Zoidberg. Can we have Bender Burgers again? Goodbye, cruel world. Goodbye, cruel lamp. Goodbye, cruel velvet drapes, lined with '),
(3, 0, 0, '', '0000-00-00', '', '0000-00-00', 'Các thay đổi sắp đối với lịch sử dịch', 'Sắp tới, bạn chỉ có thể thấy lịch sử dịch khi đã đăng nhập và có thể quản lý tập trung lịch sử dịch trong phần Hoạt động của tôi. Lịch sử trong quá khứ sẽ bị xóa trong quá trình nâng cấp này, vì vậy hãy đảm bảo lưu bản dịch bạn muốn ghi nhớ để dễ truy cập');

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `group_acp` tinyint(1) DEFAULT 0,
  `created` date DEFAULT '0000-00-00',
  `created_by` varchar(45) DEFAULT NULL,
  `modified` date DEFAULT '0000-00-00',
  `modified_by` varchar(45) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `ordering` int(11) DEFAULT 10,
  `privilege_id` text NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id`, `name`, `group_acp`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`, `privilege_id`, `picture`) VALUES
(1, 'Admin', 1, '0000-00-00', NULL, '0000-00-00', NULL, 0, 2, '', ''),
(2, 'Manager', 0, '0000-00-00', NULL, '0000-00-00', NULL, 1, 41, '', ''),
(3, 'Member', 0, '0000-00-00', NULL, '0000-00-00', NULL, 1, 12, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

CREATE TABLE `privilege` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `module` varchar(45) NOT NULL,
  `controller` varchar(45) NOT NULL,
  `action` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`id`, `name`, `module`, `controller`, `action`) VALUES
(1, 'Hiển thị danh sách người dùng', 'admin', 'user', 'index'),
(2, 'Thay đổi status của người dùng', 'admin', 'user', 'status'),
(3, 'Cập nhật thông tin của người dùng', 'admin', 'user', 'form'),
(4, 'Thay đổi status của người dùng sử dụng Ajax', 'admin', 'user', 'ajaxStatus'),
(5, 'Xóa một hoặc nhiều người dùng', 'admin', 'user', 'trash'),
(6, 'Thay đổi vị trí hiển thị của các người dùng', 'admin', 'user', 'ordering'),
(7, 'Truy cập menu Admin Control Panel', 'admin', 'index', 'index'),
(8, 'Đăng nhập Admin Control Panel', 'admin', 'index', 'login'),
(9, 'Đăng xuất Admin Control Panel', 'admin', 'index', 'logout'),
(10, 'Cập nhật thông tin tài khoản quản trị', 'admin', 'index', 'profile');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created` date DEFAULT '0000-00-00',
  `created_by` varchar(45) DEFAULT NULL,
  `modified` date DEFAULT '0000-00-00',
  `modified_by` varchar(45) DEFAULT NULL,
  `register_date` datetime DEFAULT '0000-00-00 00:00:00',
  `register_ip` varchar(25) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `ordering` int(11) DEFAULT 10,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `fullname`, `password`, `created`, `created_by`, `modified`, `modified_by`, `register_date`, `register_ip`, `status`, `ordering`, `group_id`) VALUES
(2, 'nvana', 'nvana@gmail.com', 'Dinh Dam Dao', 'c6c9e80333513b4dd71a81cf133fb9c8', '0000-00-00', '1', '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, 0, 40, 3),
(24, 'admin01', 'boyhotboy1299@gmail.com', 'Lê Trương Định', 'c33367701511b4f6020ec61ded352059', '0000-00-00', NULL, '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, 1, 21, 2),
(27, 'admin', 'admin123@gmail.com', 'Lê Trương Định', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', NULL, '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, 0, 12, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privilege`
--
ALTER TABLE `privilege`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `privilege`
--
ALTER TABLE `privilege`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
