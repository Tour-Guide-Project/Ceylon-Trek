-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 07:02 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `address`, `contact`, `level`, `token`) VALUES
(1, 'nimeshika', 'lakmali', 'nimeshika@gmail.com', 'ae0d1b3d14d698e944ce62a75fd6ca2baa3c6830', '', '', '0', 'admins', 'e58c2ab127bc77b457217316874f15e2cbcdd60074fc021ccd037c7f5174dd40729d7a670d9d39656db37369887494991706'),
(2, 'kavindya', 'devindi', 'kavindyadewindi12345678@gmail.com', 'eb2ada7987f4eec57c39f2ad2dd13613fa35c480', '', '', '0', 'admins', 'd9d5df4179d86f2d858cfe739346b0068afafc597680cae5fe8bec3689763d0c8891acd23b59668f55db3bb2d7f915369c28'),
(3, 'viveka', 'hewapathirana', 'viveka@gmail.com', '1a288fe9ef5fb2f4671f1473436c8f6243112a71', '', '', '0', 'admins', 'b555299e71fad8fed5e5627dce4a94a815e4684027ec1b2ebab66e91ce103d19ce961e36be430b54219e1d3c1410bed36f3e'),
(4, 'Amal', 'lakshan', 'amal@gmail.com', '7a671c37cb54c6697b951e2d1519f2d53de2e78f', '', '', '0', 'admins', '2da14eba6e647b4d8ee904f0c11ec50e2dec742b64f605b759eded72cc146253d78d8c232f59a10c8f2e4fca232156b5b901');

-- --------------------------------------------------------

--
-- Table structure for table `tourguide`
--

CREATE TABLE `tourguide` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourguide`
--

INSERT INTO `tourguide` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `address`, `contact`, `level`, `token`) VALUES
(3, 'sajini', 'Ahinsa', 'amal@gmail.com', '84b7d0a7fd48b2e86dd5b37f13db786bf05d4751', 'Male', 'Maliduwa,Akuressa,Matara', '8780660644', 'tourguide', '7bd95440bfa127d9a11446f88e7ba959c27df47fcbbc24f227d8d7b331dc4a37b9850235c5603f890b41f5bdb657e875044b'),
(4, 'sajini', 'navodya', 'sajinisenarathne@gmail.com', '8fc257feb6f3836494b7130c164ebc845912d6f0', 'Female', 'ketanwila,Akuressa', '0764523678', 'tourguide', '280432c095248643876f36ed5614acbcdbbdf81a59af09819bfc5bee2f3ca4caf481052fe96c62800adde0708c4583c0f308'),
(5, 'lakshan', 'senarathne', 'amal@gmail.com', '135142a8ac44f350bbf2747f81344f400d7e80c7', 'Male', 'ketanwila,Akuressa', '8780660644', 'tourguide', 'c4fffcc917a2349de74157a83a6e66b317b31e628aec77dd82f43c3da901362435723101b945f6a6fbfa737112cf9ccd648e');

-- --------------------------------------------------------

--
-- Table structure for table `tourist`
--

CREATE TABLE `tourist` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourist`
--

INSERT INTO `tourist` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `address`, `contact`, `level`, `token`) VALUES
(17, 'kavindya', 'sureshi', 'sureshi@gmail.com', '8874084277b85cfbbe99eec25c2a9fff6a324ca5', 'Male', 'galle,srilanka', '0875332221', 'tourist', '40f2151557ff5042274c8dafdc0c4ed6928bca7da961164905afd916a98e32ff8fd387187269075a83f0b624286895e733fd'),
(18, 'kavindya', 'sureshi', 'sureshi@gmail.com', '8874084277b85cfbbe99eec25c2a9fff6a324ca5', 'Male', 'galle,srilanka', '0875332221', 'tourist', '332b2c3225551088b500c4092657944e3131aa367919d90b46237b290520ed7af41c7f999f384c0d3b13d34fada707f0f926'),
(19, 'cds', 'bfg', 'nimo123@gmail.com', '41cca738850539014b36ca07c9c89b7785fb1a74', 'Male', 'kjhlkhjlkjh', 'jqbwfbqkfrb', 'tourist', 'd94ec2f9ea026c3035392c1d57054596b9b3745f980b3a30583a37238217451e353d43a9dba747a3721eda3b73b8666bff72'),
(20, 'kavindya', 'saman,li', 'mdc@gmail.com', '0a618162204152582d7a3c075a08c094802d3ab6', 'Male', 'sdacsbd,bas,', 'hkjhgakjghds', 'tourist', 'b9be4bdd44bc49a924d276a9460c12bd4ee3cfd73fe3fb2c4ccca96964acebc0563c3ef328d8a1ea9ac0a356e3fe49384f86'),
(21, 'lakshan', 'amal', 'amal@gmail.com', 'b9c5195ee777e8afb562fe1361010bd5b0f7e81a', 'Male', 'ketanwila,Akuressa', '0764523678', 'tourist', '94f1d0dd0d33fdd3f5423f594b542003e8d5a31d5d149a7bdfa9abe48f41194656571c1bcd2d46dbba54650db1eaa27f1f3d'),
(22, 'lakshan', 'amal', 'amal@gmail.com', 'b9c5195ee777e8afb562fe1361010bd5b0f7e81a', 'Male', 'ketanwila,Akuressa', '0764523678', 'tourist', '29d4057b73bdb2baf9bfb3ec9638dcd4467ca555aad663d3e7f488783d8f95b39843e39b61d8589e552974affebef576eef9'),
(23, 'fs', 'dfv', 'nimo123@gmail.com', '5434be484343b29d4e05c239b808a4d9361a8c5a', 'Female', 'ketanwila,Akuressa', 'jqbwfbqkfrb', 'tourist', 'db0e1b6ebb7fa3e8ec1905e6b04b762eb81d0bda0eb77ed1df7d611315edc44575988aef08afc0b3345b6683a790c848b1cd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourguide`
--
ALTER TABLE `tourguide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourist`
--
ALTER TABLE `tourist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tourguide`
--
ALTER TABLE `tourguide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tourist`
--
ALTER TABLE `tourist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
