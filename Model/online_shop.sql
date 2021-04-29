-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 02:12 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(40) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_license_no` varchar(40) NOT NULL,
  `manager_name` varchar(40) NOT NULL,
  `manager_nationality` varchar(40) NOT NULL,
  `manager_age` int(11) NOT NULL,
  `manager_type` varchar(25) NOT NULL,
  `manager_matches` int(11) NOT NULL,
  `manager_wins` int(11) NOT NULL,
  `manager_draws` int(11) NOT NULL,
  `manager_loses` int(11) NOT NULL,
  `manager_weekly_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_license_no`, `manager_name`, `manager_nationality`, `manager_age`, `manager_type`, `manager_matches`, `manager_wins`, `manager_draws`, `manager_loses`, `manager_weekly_salary`) VALUES
('123456789', 'Ernesto Valvarde', 'Spain', 55, 'Head Coach', 774, 0, 165, 198, 485000),
('987654321', 'Jon Aspiazu', 'Spain', 51, 'Assistant Coach', 455, 0, 135, 95, 125000);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_id` varchar(15) NOT NULL,
  `player_name` varchar(40) NOT NULL,
  `player_position` varchar(40) NOT NULL,
  `player_height` double NOT NULL,
  `player_weight` double NOT NULL,
  `player_transferfee` int(11) NOT NULL,
  `player_age` int(11) NOT NULL,
  `player_nationality` varchar(40) NOT NULL,
  `player_appearances` int(11) NOT NULL,
  `player_goals` int(11) NOT NULL,
  `player_assists` int(11) NOT NULL,
  `player_keypass` double NOT NULL,
  `player_passacc` double NOT NULL,
  `player_crossacc` double NOT NULL,
  `player_shotacc` double NOT NULL,
  `player_tackleratio` double NOT NULL,
  `player_yellowcard` int(11) NOT NULL,
  `player_redcard` int(11) NOT NULL,
  `player_cleansheet` int(11) NOT NULL,
  `player_wages` int(11) NOT NULL,
  `player_contract` date NOT NULL,
  `player_teamrole` varchar(40) NOT NULL,
  `player_value` int(11) NOT NULL,
  `player_rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `player_name`, `player_position`, `player_height`, `player_weight`, `player_transferfee`, `player_age`, `player_nationality`, `player_appearances`, `player_goals`, `player_assists`, `player_keypass`, `player_passacc`, `player_crossacc`, `player_shotacc`, `player_tackleratio`, `player_yellowcard`, `player_redcard`, `player_cleansheet`, `player_wages`, `player_contract`, `player_teamrole`, `player_value`, `player_rating`) VALUES
('1', 'Marc-Andre ter Stegen', 'GK', 1.87, 80, 45000000, 27, 'Germany', 287, 1, 3, 0, 99, 91, 4, 3, 6, 0, 65, 220000, '0000-00-00', 'First Team', 70000000, 8.7),
('10', 'Lionel Messi', 'RW', 1.7, 73, 0, 32, 'Argentina', 700, 613, 242, 4.1, 92, 82, 76, 24, 18, 2, 0, 646000, '2020-06-30', 'First Team', 15000000, 9.2),
('11', 'Ousmane Dembele', 'RW', 1.78, 67, 65000000, 22, 'France', 240, 87, 43, 2.6, 78, 78, 54, 17, 32, 0, 0, 170000, '2021-06-30', 'Second Team', 75000000, 7.5),
('13', 'Neto', 'GK', 1.9, 83, 25000000, 30, 'Brazil', 215, 0, 0, 0, 98, 87, 6, 1, 3, 0, 39, 180000, '0000-00-00', 'Second Team', 25000000, 7.3),
('15', 'Clement Lenglet', 'CB', 1.86, 81, 40000000, 24, 'France', 264, 7, 8, 0.1, 79, 71, 32, 61, 6, 1, 0, 150000, '2020-06-30', 'First Team', 35000000, 7.7),
('16', 'Moussa Wague', 'RB', 1.77, 70, 0, 21, 'Senegal', 54, 0, 1, 0.7, 84, 62, 14, 27, 6, 0, 0, 15000, '2021-06-30', 'Second Team', 5000000, 6.2),
('17', 'Antoine Griezmann', 'ST', 1.75, 75, 120000000, 28, 'France', 474, 189, 59, 2.1, 78, 41, 68, 21, 60, 1, 0, 450000, '2024-06-30', 'First Team', 100000000, 8.6),
('18', 'Jordi Alba', 'LB', 1.7, 68, 25000000, 30, 'Spain', 416, 27, 65, 1.4, 66, 71, 45, 52, 74, 6, 0, 250000, '2021-06-30', 'First Team', 45000000, 7.8),
('19', 'Carles Alena', 'CM', 1.8, 73, 0, 21, 'Spain', 32, 1, 1, 0.9, 81, 63, 37, 27, 3, 0, 0, 15000, '2023-06-30', 'Youngstar', 15000000, 6.6),
('20', 'Sergi Roberto', 'RB', 1.78, 71, 35000000, 27, 'Spain', 298, 29, 74, 1.2, 73, 76, 46, 53, 24, 1, 0, 170000, '2022-06-30', 'First Team', 50000000, 8),
('21', 'Frankie De Jong', 'CM', 1.81, 67, 75000000, 22, 'Netherlands', 210, 6, 67, 3.1, 90, 82, 46, 31, 24, 0, 0, 250000, '2021-06-30', 'First Team', 85000000, 8.4),
('22', 'Arturo Vidal', 'CM', 1.8, 81, 35000000, 32, 'Chile', 453, 89, 124, 1.6, 82, 64, 68, 42, 84, 6, 0, 210000, '2021-06-30', 'First Team', 50000000, 7.9),
('23', 'Sammuel Umtiti', 'CB', 1.82, 75, 40000000, 26, 'France', 189, 8, 4, 0.3, 88, 67, 17, 59, 24, 1, 0, 190000, '2022-06-30', 'First Team', 50000000, 8.1),
('24', 'Junior Firpo', 'CB', 1.84, 78, 0, 23, 'Dominican Republic', 72, 3, 12, 0.3, 81, 70, 43, 37, 10, 0, 0, 54000, '2022-06-30', 'Youngstar', 15000000, 6.4),
('26', 'Riqui Puig', 'CM', 1.69, 56, 0, 20, 'Spain', 31, 1, 4, 1.3, 74, 64, 42, 42, 12, 0, 0, 85000, '2025-06-30', 'Second Team', 10000000, 6.1),
('27', 'Carles Perez', 'RW', 1.73, 75, 0, 21, 'Spain', 87, 11, 23, 1.8, 79, 74, 57, 21, 14, 0, 0, 70000, '2024-06-24', 'Second Team', 30000000, 6.7),
('3', 'Gerard Pique', 'CB', 1.94, 82, 0, 32, 'Spain', 656, 35, 64, 0.1, 81, 56, 21, 64, 213, 17, 0, 470000, '2021-06-30', 'First Team', 85000000, 7.7),
('31', 'Ansu Fati', 'LW', 1.74, 65, 0, 17, 'Spain', 31, 7, 13, 2.3, 74, 56, 57, 12, 1, 0, 0, 75000, '2024-06-30', 'Youngstar', 30000000, 8.1),
('33', 'Ronald Arujo', 'CB', 1.91, 91, 0, 20, 'Uruguay', 13, 0, 0, 0.1, 78, 43, 11, 54, 1, 0, 0, 25000, '2022-06-30', 'Backup', 22000000, 6.4),
('4', 'Ivan Rakitic', 'CM', 1.84, 76, 34000000, 31, 'Croatia', 413, 67, 125, 2.1, 86, 71, 61, 47, 56, 2, 0, 300000, '2022-06-30', 'First Team', 80000000, 8.1),
('5', 'Sergio Busquets', 'CDM', 1.89, 76, 25000000, 31, 'Spain', 556, 14, 27, 0.6, 86, 69, 37, 58, 102, 4, 0, 350000, '2024-06-30', 'First Team', 45000000, 8.2),
('6', 'Jean Clair Todibo', 'CB', 1.9, 81, 0, 19, 'France', 6, 0, 1, 0.2, 76, 62, 24, 56, 1, 0, 0, 45000, '2022-06-30', 'Youngstar', 10000000, 6.4),
('8', 'Arthur Melo', 'CM', 1.71, 73, 37000000, 23, 'Brazil', 213, 23, 97, 3.4, 83, 72, 57, 32, 32, 1, 0, 200000, '2025-06-30', 'First Team', 65000000, 7.9),
('9', 'Luis Suarez', 'ST', 1.82, 80, 70000000, 32, 'Uruguay', 456, 254, 126, 1.2, 67, 61, 81, 28, 87, 4, 0, 450000, '2024-06-30', 'First Team', 80000000, 8.1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_ssn` varchar(17) NOT NULL,
  `staff_name` varchar(40) NOT NULL,
  `staff_nationality` varchar(40) NOT NULL,
  `staff_age` int(11) NOT NULL,
  `staff_designation` varchar(40) NOT NULL,
  `staff_joining_date` date NOT NULL,
  `staff_contract` date NOT NULL,
  `staff_weekly_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_ssn`, `staff_name`, `staff_nationality`, `staff_age`, `staff_designation`, `staff_joining_date`, `staff_contract`, `staff_weekly_salary`) VALUES
('', 'Josep Maria Bartomeu', 'Spain', 56, 'President ', '2014-01-23', '2021-06-30', 300000),
('289-19-0116', 'Javier Bordas', 'Spain', 58, 'Director or Sports', '2015-07-01', '2020-06-30', 150000),
('519-19-0216', 'Ariedo Braida', 'Italy', 73, 'Scout', '2015-07-21', '2021-06-30', 80000),
('589-19-0129', 'Alex Garcia', 'Spain', 49, 'Scout', '2015-07-01', '2021-06-30', 80000),
('589-19-0356', 'Jordi Roura', 'Spain', 52, 'Youth Academy Manager', '2014-05-19', '2023-06-30', 80000),
('589-19-2020', 'Jose Mari Bakero', 'Spain', 56, 'Youth Academy Manager', '2017-07-10', '2023-06-30', 80000),
('589-19-2316', 'Ricard Pruna', 'Spain', 55, 'Club Doctor', '2007-07-01', '2023-06-30', 50000),
('589-44-0188', 'Jordi Mestre', 'Spain', 57, 'Vice-President ', '2015-07-18', '2020-06-30', 200000),
('589-69-0116', 'Pep Boada', 'Spain', 57, 'Head of Scouting ', '2015-07-01', '2021-06-30', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fullname`, `user_username`, `user_password`, `user_email`) VALUES
(15, 'Kazi Ehsanul Mubin', 'kmubin', '1234', 'kmubin@gm.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_name`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_license_no`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_ssn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
