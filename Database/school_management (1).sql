-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 07:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school management`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutimage`
--

CREATE TABLE `aboutimage` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aboutimage`
--

INSERT INTO `aboutimage` (`id`, `image`) VALUES
(5, 'uploads/e8272260dd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `aboutuspage`
--

CREATE TABLE `aboutuspage` (
  `id` int(30) NOT NULL,
  `post` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aboutuspage`
--

INSERT INTO `aboutuspage` (`id`, `post`) VALUES
(9, 'Our school goes by the name of Pallpur high school. It is one of the best and oldest schools in the district of Sunamganj. Our school is a two-storied building. It is 500 feet long and 20 feet wide. It has a six fief wide verandah.There are fifteen rooms all in our school. They are headmasterâ€™s room, a teacherâ€™s common room, an office room, a studentsâ€™ common room, a prayer room, a well-furnished library room, and a well-equipped science laboratory. The other rooms are used for classes. There are about 1300 students and 50 teachers in our school. All the teachers are good and qualified. We have a big field in front of our school. The results of our school have all along been satisfactory. We hold annual drama and annual sports every year. We are very proud of our school.');

-- --------------------------------------------------------

--
-- Table structure for table `contactimage`
--

CREATE TABLE `contactimage` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactimage`
--

INSERT INTO `contactimage` (`id`, `image`) VALUES
(11, 'uploads/28d30fdfea.jpg'),
(12, 'uploads/335d5b78ad.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `email`, `facebook`, `mobile`, `telephone`, `fax`) VALUES
(1, 'ruhulneub@gmail.com', 'ruhul amin', '01749438472', '+44565657575', '+2289');

-- --------------------------------------------------------

--
-- Table structure for table `homeimage`
--

CREATE TABLE `homeimage` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homeimage`
--

INSERT INTO `homeimage` (`id`, `image`) VALUES
(15, 'uploads/14d83e1797.jpg'),
(16, 'uploads/7dc79d580f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `post` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `title`, `image`, `post`, `date`) VALUES
(43, 'About School', 'uploads/79adaa5052.jpg', 'Our school goes by the name of Pallpur high school. It is one of the best and oldest schools in the district of Sunamganj. Our school is a two-storied building. It is 500 feet long and 20 feet wide. It has a six fief wide verandah.There are fifteen rooms all in our school. They are headmasterâ€™s room, a teacherâ€™s common room, an office room, a studentsâ€™ common room, a prayer room, a.....', '2020-01-26 08:26:23'),
(44, 'Communication of School', 'uploads/cf171a1c60.jpg', 'A school website is a communication tool between the school and community; however, its reach can extend beyond country, state lines. A school website may be used by many demographic groups such as staff/administration, parents, students, community, and potential, as well as, former students and alumni. Even across state lines a school website can connect groups of its demographics such as the alumni now living cross country looking for information on the next reunion.  The school website should also maintain communication and interaction with students and parents. It should not be just a mechanical display, so there is no vitality. Although the school website is not required to provide 24-hour customer service like a marketing website, at least there must be an â€œonline messageâ€ function to facilitate students, parents to ask questions or suggestions, and then respond promptly.', '2020-01-26 08:26:43');

-- --------------------------------------------------------

--
-- Table structure for table `homepage1`
--

CREATE TABLE `homepage1` (
  `id` int(30) NOT NULL,
  `title` longtext NOT NULL,
  `post` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homepage1`
--

INSERT INTO `homepage1` (`id`, `title`, `post`) VALUES
(1, 'About My School', 'Our school goes by the name of Pallpur high school. It is one of the best and oldest schools in the district of Sunamganj. Our school is a two-storied building. It is 500 feet long and 20 feet wide. It has a six fief wide verandah.There are fifteen rooms all in our school. They are headmasterâ€™s room, a teacherâ€™s common room, an office room, a studentsâ€™ common room, a prayer room, a well-furnished library room, and a well-equipped science laboratory. The other rooms are used for classes. There are about 1300 students and 50 teachers in our school. All the teachers are good and qualified. We have a big field in front of our school. The results of our school have all along been satisfactory. We hold annual drama and annual sports every year. We are very proud of our school.');

-- --------------------------------------------------------

--
-- Table structure for table `homepage2`
--

CREATE TABLE `homepage2` (
  `id` int(30) NOT NULL,
  `title` longtext NOT NULL,
  `post` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homepage2`
--

INSERT INTO `homepage2` (`id`, `title`, `post`) VALUES
(1, 'About My School', 'Our school goes by the name of Pallpur high school. It is one of the best and oldest schools in the district of Sunamganj. Our school is a two-storied building. It is 500 feet long and 20 feet wide. It has a six fief wide verandah.There are fifteen rooms all in our school. They are headmasterâ€™s room, a teacherâ€™s common room, an office room, a studentsâ€™ common room, a prayer room, a well-furnished library room, and a well-equipped science laboratory. The other rooms are used for classes. There are about 1300 students and 50 teachers in our school. All the teachers are good and qualified. We have a big field in front of our school. The results of our school have all along been satisfactory. We hold annual drama and annual sports every year. We are very proud of our school.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Ruhul Amin', '12345'),
('jafrul', '12345'),
('jafrul', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `pdffile`
--

CREATE TABLE `pdffile` (
  `id` int(11) NOT NULL,
  `pdf_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pdffile`
--

INSERT INTO `pdffile` (`id`, `pdf_file`) VALUES
(1, ''),
(2, ''),
(3, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutimage`
--
ALTER TABLE `aboutimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutuspage`
--
ALTER TABLE `aboutuspage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactimage`
--
ALTER TABLE `contactimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeimage`
--
ALTER TABLE `homeimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage1`
--
ALTER TABLE `homepage1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage2`
--
ALTER TABLE `homepage2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdffile`
--
ALTER TABLE `pdffile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutimage`
--
ALTER TABLE `aboutimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `aboutuspage`
--
ALTER TABLE `aboutuspage`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contactimage`
--
ALTER TABLE `contactimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `homeimage`
--
ALTER TABLE `homeimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `homepage1`
--
ALTER TABLE `homepage1`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepage2`
--
ALTER TABLE `homepage2`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pdffile`
--
ALTER TABLE `pdffile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
