-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2024 at 08:28 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `study_bees`
--

-- --------------------------------------------------------

--
-- Table structure for table `study_resources`
--

CREATE TABLE `study_resources` (
  `resource_id` int(11) NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `study_resources`
--

INSERT INTO `study_resources` (`resource_id`, `subject_id`, `title`, `description`, `link`) VALUES
(1, 1, 'Advanced Algebra', 'A comprehensive guide to algebraic structures and functions, essential for solving complex mathematical problems.', 'http://example.com/advanced-algebra'),
(2, 1, 'Calculus Basics', 'Learn the fundamentals of calculus, including limits, derivatives, and integrals, to solve real-world problems.', 'http://example.com/calculus-basics'),
(3, 1, 'Geometry Fundamentals', 'Explore the principles of geometry, covering shapes, angles, and theorems critical for spatial understanding.', 'http://example.com/geometry-fundamentals'),
(4, 1, 'Trigonometry Introduction', 'Understand the basics of trigonometry, focusing on sine, cosine, and tangent functions in various applications.', 'http://example.com/trigonometry-introduction'),
(5, 2, 'Basic Physics Laws', 'Dive into the fundamental laws of physics, including Newton\'s laws, to grasp the mechanics of motion.', 'http://example.com/physics-laws'),
(6, 2, 'Chemistry Basics', 'Introduction to essential chemistry concepts such as elements, compounds, and chemical reactions.', 'http://example.com/chemistry-basics'),
(7, 2, 'Biology Overview', 'An overview of biological principles, exploring cell structure, genetics, and ecosystems for a solid foundation.', 'http://example.com/biology-overview'),
(8, 2, 'Earth Science Fundamentals', 'Learn the basics of earth science, including geology, meteorology, and oceanography, to understand our planet.', 'http://example.com/earth-science'),
(9, 3, 'English Vocabulary Basics', 'Enhance your English vocabulary with essential words and phrases used in everyday communication and writing.', 'http://example.com/vocabulary-basics'),
(10, 3, 'English Literature Overview', 'Explore significant works and authors in English literature to gain insights into literary history and themes.', 'http://example.com/literature-overview'),
(11, 3, 'English Writing Skills', 'Improve your writing skills with practical tips and exercises on grammar, composition, and style.', 'http://example.com/writing-skills'),
(12, 3, 'English Reading Comprehension', 'Develop reading comprehension strategies to understand and analyze texts effectively.', 'http://example.com/reading-comprehension'),
(13, 4, 'Introduction to ICT', 'Get an overview of Information and Communication Technology, focusing on its role in modern society.', 'http://example.com/ict-introduction'),
(14, 4, 'Computer Fundamentals', 'Learn the basics of computer systems, including hardware, software, and operating systems.', 'http://example.com/computer-fundamentals'),
(15, 4, 'Network Basics', 'Understand the fundamentals of networking, covering concepts like LAN, WAN, and internet connectivity.', 'http://example.com/network-basics'),
(16, 4, 'ICT in Everyday Life', 'Discover how ICT tools and technologies are applied in everyday scenarios for efficiency and communication.', 'http://example.com/ict-everyday'),
(17, 5, 'Basic Sinhala Grammar', 'Study the foundational grammar rules of the Sinhala language for effective communication and writing.', 'http://example.com/sinhala-grammar'),
(18, 5, 'Sinhala Literature', 'Explore key literary works in Sinhala to understand cultural heritage and literary traditions.', 'http://example.com/sinhala-literature'),
(19, 5, 'Sinhala Vocabulary', 'Expand your Sinhala vocabulary with commonly used words and phrases for everyday conversations.', 'http://example.com/sinhala-vocabulary'),
(20, 5, 'Sinhala Writing Skills', 'Enhance your writing abilities in Sinhala through structured exercises and practical tips.', 'http://example.com/sinhala-writing'),
(21, 6, 'Basic Tamil Grammar', 'Learn the essential grammar rules of Tamil to improve language proficiency and communication skills.', 'http://example.com/tamil-grammar'),
(22, 6, 'Tamil Literature', 'Dive into the rich literary tradition of Tamil, exploring classic works and contemporary literature.', 'http://example.com/tamil-literature'),
(23, 6, 'Tamil Vocabulary', 'Build a strong vocabulary in Tamil with a focus on frequently used words and practical expressions.', 'http://example.com/tamil-vocabulary'),
(24, 6, 'Tamil Writing Skills', 'Improve your Tamil writing through exercises that focus on grammar, style, and clarity.', 'http://example.com/tamil-writing'),
(25, 7, 'World History Overview', 'Gain an understanding of major historical events and their impact on the present world.', 'http://example.com/world-history'),
(26, 7, 'Ancient Civilizations', 'Study the characteristics and contributions of ancient civilizations like Egypt and Mesopotamia.', 'http://example.com/ancient-civilizations'),
(27, 7, 'Modern History', 'Learn about significant events and changes in the modern era, shaping today\'s global landscape.', 'http://example.com/modern-history'),
(28, 7, 'Historical Research Methods', 'Understand the methods used in historical research to analyze and interpret past events.', 'http://example.com/historical-research'),
(29, 8, 'Geography Basics', 'Learn fundamental geographical concepts, including map reading and the physical features of Earth.', 'http://example.com/geography-basics'),
(30, 8, 'Physical Geography', 'Explore the natural features of the Earth, such as landforms, climate, and ecosystems.', 'http://example.com/physical-geography'),
(31, 8, 'Human Geography', 'Understand the relationship between human activities and their geographical environment.', 'http://example.com/human-geography'),
(32, 8, 'Geographical Information Systems', 'Introduction to GIS technology for analyzing spatial data and making informed decisions.', 'http://example.com/gis'),
(33, 9, 'Business Management Basics', 'Understand key business management principles and practices for effective organizational leadership.', 'http://example.com/business-management'),
(34, 9, 'Entrepreneurship Overview', 'Learn the basics of entrepreneurship, including idea generation, business planning, and startup management.', 'http://example.com/entrepreneurship'),
(35, 9, 'Marketing Principles', 'Introduction to marketing concepts, strategies, and practices for successful business promotion.', 'http://example.com/marketing-principles'),
(36, 9, 'Financial Management', 'Gain insights into financial management principles and practices essential for business success.', 'http://example.com/financial-management'),
(37, 10, 'Civic Education Fundamentals', 'Learn the basics of civic principles, rights, and responsibilities as a citizen.', 'http://example.com/civic-education'),
(38, 10, 'Government Systems', 'Study various government systems and their roles in governance and policy making.', 'http://example.com/government-systems'),
(39, 10, 'Human Rights Basics', 'Understand the basic principles and significance of human rights in contemporary society.', 'http://example.com/human-rights'),
(40, 10, 'Citizenship and Society', 'Explore the roles and responsibilities of individuals within a society and the importance of active citizenship.', 'http://example.com/citizenship-society');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`) VALUES
(9, 'Business Studies'),
(10, 'Civic Education'),
(3, 'English Language'),
(8, 'Geography'),
(7, 'History'),
(4, 'ICT'),
(1, 'Mathematics'),
(2, 'Science'),
(5, 'Sinhala Language'),
(6, 'Tamil Language');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `psw` char(255) NOT NULL,
  `profile_picture` varchar(255) DEFAULT '../assets/images/default-profile/default-profile-picture.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_strong_subjects`
--

CREATE TABLE `user_strong_subjects` (
  `user_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_weak_subjects`
--

CREATE TABLE `user_weak_subjects` (
  `user_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `study_resources`
--
ALTER TABLE `study_resources`
  ADD PRIMARY KEY (`resource_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`),
  ADD UNIQUE KEY `subject_name` (`subject_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_strong_subjects`
--
ALTER TABLE `user_strong_subjects`
  ADD PRIMARY KEY (`user_id`,`subject_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `user_weak_subjects`
--
ALTER TABLE `user_weak_subjects`
  ADD PRIMARY KEY (`user_id`,`subject_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `study_resources`
--
ALTER TABLE `study_resources`
  MODIFY `resource_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `study_resources`
--
ALTER TABLE `study_resources`
  ADD CONSTRAINT `study_resources_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_strong_subjects`
--
ALTER TABLE `user_strong_subjects`
  ADD CONSTRAINT `user_strong_subjects_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_strong_subjects_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_weak_subjects`
--
ALTER TABLE `user_weak_subjects`
  ADD CONSTRAINT `user_weak_subjects_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_weak_subjects_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
