-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 05:27 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upline`
--

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `block_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `width` varchar(40) NOT NULL,
  `length` varchar(40) NOT NULL,
  `height` varchar(40) NOT NULL,
  `mortar` varchar(40) NOT NULL,
  `price` varchar(40) NOT NULL,
  `down_labour` varchar(40) NOT NULL,
  `up_labour` varchar(40) NOT NULL,
  `normal_mortar` varchar(40) NOT NULL,
  `missing_value` varchar(40) NOT NULL,
  `gable_mortar` varchar(40) NOT NULL,
  `fence_mortar` varchar(40) NOT NULL,
  `fence_mortar_for_column` varchar(40) NOT NULL,
  `a_course_of_block` varchar(40) NOT NULL,
  `boq_price_per_area` varchar(40) NOT NULL,
  `missing_value2` varchar(40) NOT NULL,
  `cement1` varchar(40) NOT NULL,
  `cement2` varchar(40) NOT NULL,
  `cement3` varchar(40) NOT NULL,
  `sand1` varchar(40) NOT NULL,
  `sand2` varchar(40) NOT NULL,
  `sand3` varchar(40) NOT NULL,
  `engr_fee` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`block_id`, `name`, `width`, `length`, `height`, `mortar`, `price`, `down_labour`, `up_labour`, `normal_mortar`, `missing_value`, `gable_mortar`, `fence_mortar`, `fence_mortar_for_column`, `a_course_of_block`, `boq_price_per_area`, `missing_value2`, `cement1`, `cement2`, `cement3`, `sand1`, `sand2`, `sand3`, `engr_fee`) VALUES
(1, '0.225 Hollow Block', '0.225', '0.45', '0.225', '0.025', '270.00', '80.00', '90.00', '0.0135', '0.11875', '0.01519', '0.01603', '0.01772', '0.25', '3690.00', '2981.05', '140.3508772\r\n', '0.154120343', '393.01', '0.033626257', '0.039100298', '72.61', '241.27'),
(2, '0.15m Hollow Block', '0.15', '0.45', '0.225', '0.025', '230.00', '70.00', '80.00', '0.01519', '0.11875', '0.01688', '0.01772', '0.01941', '0.25', '3,125.00', '2,555.79', '83.17089019', '0.115590257', '294.76', '0.025219692', '0.029325224', '54.46', '217.88'),
(4, '0.15m Solid Block', '0.15', '0.45', '0.225', '0.03', '160.00', '65.00', '75.00', '0.02025', '0.11875', '0.02126', '0.02329', '0.02531', '0.25', '2,580.00', '1,922.11', '62.37816764', '0.154120343', '393.01', '0.033626257', '0.039100298', ' 72.61', '191.02'),
(6, '0.125m Solid Block', '0.125', '0.45', '0.225', '0.03', '135.00', '55.00', '65.00', '0.02025', '0.11875', '0.02126', '0.02329', '0.02531', '0.25', '2,185.00', '1,623.16', '51.98180637', '0.128433619', '327.51', '0.028021881', '0.032583582', '60.51', '170.95');

-- --------------------------------------------------------

--
-- Table structure for table `blocks_result`
--

CREATE TABLE `blocks_result` (
  `block_rslt` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `width` varchar(50) NOT NULL,
  `length` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `mortar` varchar(55) NOT NULL,
  `price` varchar(55) NOT NULL,
  `down_labour` varchar(55) NOT NULL,
  `up_labour` varchar(55) NOT NULL,
  `normal_mortar` varchar(55) NOT NULL,
  `missing_value` varchar(55) NOT NULL,
  `gable_mortar` varchar(55) NOT NULL,
  `fence_mortar` varchar(55) NOT NULL,
  `fence_mortar_for_column` varchar(55) NOT NULL,
  `a_course_of_block` varchar(55) NOT NULL,
  `boq_price_per_area` varchar(55) NOT NULL,
  `missing_value2` varchar(55) NOT NULL,
  `cement1` varchar(55) NOT NULL,
  `cement2` varchar(55) NOT NULL,
  `cement3` varchar(55) NOT NULL,
  `sand1` varchar(55) NOT NULL,
  `sand2` varchar(55) NOT NULL,
  `sand3` varchar(55) NOT NULL,
  `engr_fee` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blocks_result`
--

INSERT INTO `blocks_result` (`block_rslt`, `project_id`, `name`, `width`, `length`, `height`, `mortar`, `price`, `down_labour`, `up_labour`, `normal_mortar`, `missing_value`, `gable_mortar`, `fence_mortar`, `fence_mortar_for_column`, `a_course_of_block`, `boq_price_per_area`, `missing_value2`, `cement1`, `cement2`, `cement3`, `sand1`, `sand2`, `sand3`, `engr_fee`) VALUES
(7, 3, '0.225 Hollow Block', '0.225', '0.452', '0.225', '0.025', '270.00', '80.00', '90.00', '0.25', '3690.00', '0.013540000000000003', '0.11925000000000001', '0.015232500000000003', '0.016078750000000003', '0.017771250000000002', '0.11875', '140.3508772', '0.154120343', '393.01', '0.033626257', '72.61', '72.61', '241.27'),
(8, 3, '0.15m Hollow Block', '0.15', '0.45', '0.225', '0.025', '230.00', '70.00', '80.00', '0.25', '3,125.00', '0.01519', '0.11875', '0.01688', '0.01772', '0.01941', '2,555.79', '83.17089019', '0.115590257', '294.76', '0.025219692', '0.029325224', '54.46', '217.88'),
(9, 3, '0.15m Solid Block', '0.15', '0.45', '0.225', '0.03', '160.00', '65.00', '75.00', '0.25', '2,580.00', '0.02025', '0.11875', '0.02126', '0.02329', '0.02531', '1,922.11', '62.37816764', '0.154120343', '393.01', '0.033626257', ' 72.61', ' 72.61', '191.02'),
(10, 3, '0.125m Solid Block', '0.125', '0.45', '0.225', '0.03', '135.00', '55.00', '65.00', '0.25', '2,185.00', '0.02025', '0.11875', '0.02126', '0.02329', '0.02531', '1,623.16', '51.98180637', '0.128433619', '327.51', '0.028021881', '0.032583582', '60.51', '170.95'),
(11, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cement`
--

CREATE TABLE `cement` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cement`
--

INSERT INTO `cement` (`id`, `name`, `price`) VALUES
(1, '50 (Kg) of cement', '2550'),
(2, '50 (Kg) of Plastering Cement', '2550');

-- --------------------------------------------------------

--
-- Table structure for table `excavator`
--

CREATE TABLE `excavator` (
  `id` int(11) NOT NULL,
  `size` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `excavator`
--

INSERT INTO `excavator` (`id`, `size`) VALUES
(1, '0.3'),
(2, '0.38'),
(3, '0.42'),
(4, '0.59'),
(5, '0.86'),
(6, '1.35'),
(7, '1.37'),
(8, '1.44'),
(9, '1.5'),
(10, '1.76'),
(11, '1.85'),
(12, '2.0'),
(13, '2.1'),
(14, '2.12'),
(15, '2.2'),
(16, '2.41'),
(17, '3.16'),
(18, '4.0'),
(19, '4.6'),
(20, '5.0'),
(21, '7.5');

-- --------------------------------------------------------

--
-- Table structure for table `gravel`
--

CREATE TABLE `gravel` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `name_of_truck` varchar(99) NOT NULL,
  `price` varchar(11) NOT NULL,
  `ton` varchar(11) NOT NULL,
  `size_of_excavator` varchar(11) NOT NULL,
  `number_of_excavator` varchar(20) NOT NULL,
  `price_ton` varchar(30) NOT NULL,
  `price_truck` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gravel`
--

INSERT INTO `gravel` (`id`, `name`, `name_of_truck`, `price`, `ton`, `size_of_excavator`, `number_of_excavator`, `price_ton`, `price_truck`) VALUES
(1, 'gravel', 'Trailer', '245000', '30', '0.700', '21', '8166.67', '245000');

-- --------------------------------------------------------

--
-- Table structure for table `hardcore`
--

CREATE TABLE `hardcore` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `ton` varchar(30) NOT NULL,
  `size_of_excavator` varchar(30) NOT NULL,
  `number_of_excavator` varchar(30) NOT NULL,
  `price_ton` varchar(30) NOT NULL,
  `price_truck` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hardcore`
--

INSERT INTO `hardcore` (`id`, `name`, `price`, `ton`, `size_of_excavator`, `number_of_excavator`, `price_ton`, `price_truck`) VALUES
(1, 'Hardcore', '180000', '30', '0.700', '21', '6000', '180000');

-- --------------------------------------------------------

--
-- Table structure for table `plankwoods`
--

CREATE TABLE `plankwoods` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `length` varchar(40) NOT NULL,
  `price` varchar(11) NOT NULL,
  `sqm` varchar(30) NOT NULL,
  `unknown1` varchar(11) NOT NULL,
  `unknown2` varchar(11) NOT NULL,
  `unknown3` varchar(40) NOT NULL,
  `unknown4` varchar(11) NOT NULL,
  `sawing_price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plankwoods`
--

INSERT INTO `plankwoods` (`id`, `name`, `length`, `price`, `sqm`, `unknown1`, `unknown2`, `unknown3`, `unknown4`, `sawing_price`) VALUES
(1, '1\" x 12\" x 12\' Plank', '3.6', '1250', '0.94875', '3.45', '1625', '1\" x 9\" x 12\' Plank', '1', '50'),
(2, '2\" x 2\" x 12\' Wood', '3.6', '250', '', '', '300', '1\" x 6\" x 12\' Plank', '2', '50'),
(3, '2\" x 3\" x 12\' Wood', '3.6', '300', '', '', '350', '1\" x 5\" x 12\' Plank', '2', '50'),
(4, '2\" x 4\" x 12\' Wood', '3.6', '400', '', '', '450', '1\" x 4\" x 12\' Plank', '3', '50'),
(5, '8ft Ply Boards', '2.4', '2400', '', '', '2450', '1\" x 3\" x 12\' Plank', '4', '50'),
(6, '1\" x 4\' x 8\' Marine Plywood', '2.4', '7500', '2.88', '2.4', '8750', '1\" x 2\" x 12\' Plank', '6', '50'),
(7, 'Bamboo', '', '110', '', '', '160', '1\" x 1\" x 12\' Plank', '11', '50');

-- --------------------------------------------------------

--
-- Table structure for table `plastering`
--

CREATE TABLE `plastering` (
  `id` int(11) NOT NULL,
  `part_of_building` varchar(30) NOT NULL,
  `value1` varchar(30) NOT NULL,
  `value2` varchar(30) NOT NULL,
  `value3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plastering`
--

INSERT INTO `plastering` (`id`, `part_of_building`, `value1`, `value2`, `value3`) VALUES
(1, 'Foundation', '1000', ' 3.000 ', 'Partition in (Exterior Walls)'),
(2, 'Main Building', '2500', ' 3.000 ', 'Partition in (Exterior Walls)'),
(3, 'Main Building', '2000', ' 3.000 ', 'Partition in (Interior Walls)'),
(4, 'Decking', '4000', ' 9.000 ', 'Partition in (Decking)'),
(5, 'Parapet', '4000', ' 3.000 ', 'Partition in (Parapet)'),
(6, 'Gable', '1000', ' 1.000 ', 'Partition in (Gable Walls)');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `client` varchar(40) NOT NULL,
  `project_location` varchar(150) NOT NULL,
  `prepared_by` varchar(40) NOT NULL,
  `website` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `prone` varchar(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `title`, `client`, `project_location`, `prepared_by`, `website`, `email`, `prone`, `address`, `date`) VALUES
(3, 'Duplex', 'Awulor Charles', 'Plot 272 Kosini street warri,Delta state', 'Oge', 'www', 'c.awulor@yahoo.com', '08034847135', 'No 2 Ohifeme street, addo road,', '0000-00-00 00:00:00'),
(4, 'Bungalow', 'Gladys Awulor', '3 Udu road , udu', 'Ogechukwu', 'www.da-manager.com', 'gladys@yahoo.com', '070', 'plot 272 kosini street , warri', '0000-00-00 00:00:00'),
(5, 'Duplex', 'Emmanuel Onyekuma', 'EKU, Delta state ', 'oge', 'www.da-manager.com', 'c.awulor@yahoo.com', '0803', 'Airport road ', '2020-01-21 09:23:59');

-- --------------------------------------------------------

--
-- Table structure for table `roof`
--

CREATE TABLE `roof` (
  `roofid` int(40) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roof`
--

INSERT INTO `roof` (`roofid`, `type`) VALUES
(1, 'Zink & Long Span Roofing'),
(2, 'Step Tiles & Metcoppo Roofing'),
(3, 'Gerard Roofing');

-- --------------------------------------------------------

--
-- Table structure for table `roofing_length`
--

CREATE TABLE `roofing_length` (
  `id` int(40) NOT NULL,
  `roofid` int(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `gable_length` varchar(40) NOT NULL,
  `eave_fascia_length` varchar(40) NOT NULL,
  `bottom_flashing_length` varchar(40) NOT NULL,
  `up_flashing_length` varchar(40) NOT NULL,
  `ridge_cap_length` varchar(40) NOT NULL,
  `gutter_length` varchar(40) NOT NULL,
  `gutter_trimmer_length` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roofing_length`
--

INSERT INTO `roofing_length` (`id`, `roofid`, `name`, `gable_length`, `eave_fascia_length`, `bottom_flashing_length`, `up_flashing_length`, `ridge_cap_length`, `gutter_length`, `gutter_trimmer_length`) VALUES
(1, 1, 'Zink & Long Span Roofing', '4', '4', '4', '4', '4', '4', '4'),
(2, 2, 'Step Tiles & Metcoppo Roofing', '4', '4', '4', '4', '4', '4', '4'),
(3, 3, 'Gerard Roofing', '2', '2', '4', '4', '2', '4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `roofing_measurement`
--

CREATE TABLE `roofing_measurement` (
  `id` int(40) NOT NULL,
  `name` varchar(30) NOT NULL,
  `main_roof` varchar(30) NOT NULL,
  `water_proof` varchar(40) NOT NULL,
  `soffit_louding` varchar(40) NOT NULL,
  `gable_surface` varchar(40) NOT NULL,
  `eave_surface` varchar(40) NOT NULL,
  `gable_bargeboard` varchar(40) NOT NULL,
  `eave_fascia` varchar(40) NOT NULL,
  `bottom_flashing` varchar(40) NOT NULL,
  `up_flashing` varchar(40) NOT NULL,
  `ridge_cap` varchar(40) NOT NULL,
  `gutter` varchar(40) NOT NULL,
  `gutter_trimmer` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roofing_measurement`
--

INSERT INTO `roofing_measurement` (`id`, `name`, `main_roof`, `water_proof`, `soffit_louding`, `gable_surface`, `eave_surface`, `gable_bargeboard`, `eave_fascia`, `bottom_flashing`, `up_flashing`, `ridge_cap`, `gutter`, `gutter_trimmer`) VALUES
(1, 'Zink & Long Span Roofing', '1.04', '1.1', '1.1', '1.5', '1.5', '1.1', '1.5', '1.1', '1.1', '1.1', '1.1', '1.1'),
(2, 'Step Tiles & Metcoppo Roofing', '1.1', '1.15', '1.1', '1.1', '1.5', '1.1', '1.5', '1.1', '1.1', '1.1', '1.1', '1.1'),
(3, 'Gerard Roofing', '1.1', '1.15', '1.1', '1.1', '1.5', '1.1', '1.5', '1.1', '1.1', '1.1', '1.1', '1.1');

-- --------------------------------------------------------

--
-- Table structure for table `roofing_parts`
--

CREATE TABLE `roofing_parts` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `inside_wall_plats` varchar(40) NOT NULL,
  `tie_beams` varchar(40) NOT NULL,
  `beans_of_ridges_gutters` varchar(40) NOT NULL,
  `rafters` varchar(20) NOT NULL,
  `trusses` varchar(11) NOT NULL,
  `purlins` varchar(11) NOT NULL,
  `outside_noggins` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roofing_parts`
--

INSERT INTO `roofing_parts` (`id`, `name`, `inside_wall_plats`, `tie_beams`, `beans_of_ridges_gutters`, `rafters`, `trusses`, `purlins`, `outside_noggins`) VALUES
(1, 'Zink & Long Span Roofing', '0.75', '0.95', '1.1', '2', '2', '2.04', '0.7'),
(2, 'Step Tiles & Metcoppo Roofing', '0.75', '0.85', '1.1', '3', '3', '1.5', '0.7'),
(3, 'Gerard Roofing', '0.75', '0.85', '1.1', '3', '3', '1.5', '0.7');

-- --------------------------------------------------------

--
-- Table structure for table `roofing_price`
--

CREATE TABLE `roofing_price` (
  `id` int(40) NOT NULL,
  `roofid` int(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `main_roof` varchar(40) NOT NULL,
  `water_proof` varchar(40) NOT NULL,
  `soffit_clouding` varchar(40) NOT NULL,
  `gable_surface` varchar(40) NOT NULL,
  `eave_surface` varchar(40) NOT NULL,
  `gable_bargeboard` varchar(40) NOT NULL,
  `eave_fascia` varchar(40) NOT NULL,
  `bottom_flashing` varchar(40) NOT NULL,
  `up_flashing` varchar(40) NOT NULL,
  `ridge_cap` varchar(40) NOT NULL,
  `gutter` varchar(40) NOT NULL,
  `gutter_trimmer` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roofing_price`
--

INSERT INTO `roofing_price` (`id`, `roofid`, `name`, `main_roof`, `water_proof`, `soffit_clouding`, `gable_surface`, `eave_surface`, `gable_bargeboard`, `eave_fascia`, `bottom_flashing`, `up_flashing`, `ridge_cap`, `gutter`, `gutter_trimmer`) VALUES
(1, 1, 'Zink & Long Span Roofing', '1450', '1450', '1450', '1450', '1450', '1450', '1450', '870', '870', '2320', '2320', '870'),
(2, 2, 'Step Tiles & Metcoppo Roofing', '2100', '2100', '2100', '2100', '2100', '1450', '1450', '870', '870', '2320', '2320', '870'),
(3, 3, 'Gerard Roofing', '2600', '3100', '3100', '3100', '3100', '2000', '2000', '19.05', '16.51', '2000', '3900', '11.43');

-- --------------------------------------------------------

--
-- Table structure for table `roofing_spacing`
--

CREATE TABLE `roofing_spacing` (
  `id` int(40) NOT NULL,
  `roofid` int(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `wall_plats_spacing` varchar(40) NOT NULL,
  `tie_beams_spacing` varchar(40) NOT NULL,
  `rafters_spacing` varchar(40) NOT NULL,
  `trusses_spacing` varchar(40) NOT NULL,
  `purlins_spacing` varchar(40) NOT NULL,
  `noggins_spacing` varchar(40) NOT NULL,
  `outside_noggins_spacing` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roofing_spacing`
--

INSERT INTO `roofing_spacing` (`id`, `roofid`, `name`, `wall_plats_spacing`, `tie_beams_spacing`, `rafters_spacing`, `trusses_spacing`, `purlins_spacing`, `noggins_spacing`, `outside_noggins_spacing`) VALUES
(1, 1, 'Zink & Long Span Roofing', '2.0', '1.15', '1.15', '1.15', '0.889', '0.6', '0.6'),
(2, 2, 'Step Tiles & Metcoppo Roofing', '1.75', '1.0', '1.0', '1.0', '0.406', '0.6', '0.6'),
(3, 3, 'Gerard Roofing', '1.5', '0.9', '0.9', '0.9', '0.368', '0.6', '0.6');

-- --------------------------------------------------------

--
-- Table structure for table `roofing_spacing_length`
--

CREATE TABLE `roofing_spacing_length` (
  `id` int(40) NOT NULL,
  `roofid` int(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `inside_noggin_spacing` varchar(40) NOT NULL,
  `outside_noggin_spacing` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roofing_spacing_length`
--

INSERT INTO `roofing_spacing_length` (`id`, `roofid`, `name`, `inside_noggin_spacing`, `outside_noggin_spacing`) VALUES
(1, 1, 'Zink & Long Span Roofing', '1.5', '1.5'),
(2, 2, 'Step Tiles & Metcoppo Roofing', '1.5', '1.5'),
(3, 3, 'Gerard Roofing', '1.5', '1.5');

-- --------------------------------------------------------

--
-- Table structure for table `roofing_woods`
--

CREATE TABLE `roofing_woods` (
  `id` int(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `length` varchar(40) NOT NULL,
  `price` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roofing_woods`
--

INSERT INTO `roofing_woods` (`id`, `name`, `length`, `price`) VALUES
(1, '4\" x 4\" x 12\' Abura Wood', '3.6', ' 670.00'),
(2, '3\" x 4\" x12\' Abura Wood', '3.6', ' 650.00'),
(3, '2\" x 6\" x 12\' Abura Wood', '3.6', ' 650.00'),
(4, '2\" x 4\" x 12\' Abura Wood', '3.6', ' 550.00'),
(5, '2\" x 3\" x 12\' Abura Wood', '3.6', ' 450.00'),
(6, '2\" x 2\" x 12\' Abura Wood', '3.6', ' 350.00'),
(7, '1\" x 10\" x 12\' Fascia & Bargeboards', '3.6', ' 2,000.00');

-- --------------------------------------------------------

--
-- Table structure for table `roofing_woodsrst`
--

CREATE TABLE `roofing_woodsrst` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `length` varchar(11) NOT NULL,
  `price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roofing_woodsrst`
--

INSERT INTO `roofing_woodsrst` (`id`, `project_id`, `name`, `length`, `price`) VALUES
(22, 3, '4\" x 4\" x 1', '3.6', ' 670.00'),
(23, 3, '3\" x 4\" x12', '3.6', ' 650.00'),
(24, 3, '2\" x 6\" x 1', '3.6', ' 650.00'),
(25, 3, '2\" x 4\" x 1', '3.6', ' 550.00'),
(26, 3, '2\" x 3\" x 1', '3.6', ' 450.00'),
(27, 3, '2\" x 2\" x 1', '3.6', ' 350.00'),
(28, 3, '1\" x 10\" x ', '3.6', ' 2,000.00'),
(29, 5, '4\" x 4\" x 1', '3.6', ' 670.00'),
(30, 5, '3\" x 4\" x12', '3.6', ' 650.00'),
(31, 5, '2\" x 6\" x 1', '3.6', ' 650.00'),
(32, 5, '2\" x 4\" x 1', '3.6', ' 550.00'),
(33, 5, '2\" x 3\" x 1', '3.6', ' 450.00'),
(34, 5, '2\" x 2\" x 1', '3.6', ' 350.00'),
(35, 5, '1\" x 10\" x ', '3.6', ' 2,000.00');

-- --------------------------------------------------------

--
-- Table structure for table `roofing_woods_building`
--

CREATE TABLE `roofing_woods_building` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `outside_wall_plats` varchar(40) NOT NULL,
  `inside_wall_plats` varchar(40) NOT NULL,
  `tie_beams` varchar(40) NOT NULL,
  `tie_beams_ridges` varchar(40) NOT NULL,
  `rafters` varchar(40) NOT NULL,
  `trusses` varchar(40) NOT NULL,
  `purlins` varchar(40) NOT NULL,
  `inside_noggins` varchar(40) NOT NULL,
  `outside_noggins` varchar(40) NOT NULL,
  `fascia_bargeboards` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roofing_woods_building`
--

INSERT INTO `roofing_woods_building` (`id`, `name`, `outside_wall_plats`, `inside_wall_plats`, `tie_beams`, `tie_beams_ridges`, `rafters`, `trusses`, `purlins`, `inside_noggins`, `outside_noggins`, `fascia_bargeboards`) VALUES
(1, 'Zink & Long Span Roofing', '3\" x 4\" x12\' Abura Wood', '2\" x 6\" x 12\' Abura Wood', '2\" x 6\" x 12\' Abura Wood', '2\" x 4\" x 12\' Abura Wood', '2\" x 4\" x 12\' Abura Wood', '2\" x 4\" x 12\' Abura Wood', '2\" x 3\" x 12\' Abura Wood', '2\" x 2\" x 12\' Abura Wood', '2\" x 2\" x 12\' Abura Wood', '1\" x 10\" x 12\' Fascia & Bargeboards'),
(2, 'Step Tiles & Metcoppo Roofing', '3\" x 4\" x12\' Abura Wood', '3\" x 4\" x12\' Abura Wood', '2\" x 6\" x 12\' Abura Wood', '2\" x 4\" x 12\' Abura Wood', '2\" x 4\" x 12\' Abura Wood', '2\" x 4\" x 12\' Abura Wood', '2\" x 3\" x 12\' Abura Wood', '2\" x 2\" x 12\' Abura Wood', '2\" x 2\" x 12\' Abura Wood', '1\" x 10\" x 12\' Fascia & Bargeboards'),
(3, 'Gerard Roofing', '3\" x 4\" x12\' Abura Wood', '3\" x 4\" x12\' Abura Wood', '2\" x 6\" x 12\' Abura Wood', '2\" x 6\" x 12\' Abura Wood', '2\" x 4\" x 12\' Abura Wood', '2\" x 4\" x 12\' Abura Wood', '2\" x 3\" x 12\' Abura Wood', '2\" x 2\" x 12\' Abura Wood', '2\" x 2\" x 12\' Abura Wood', '1\" x 10\" x 12\' Fascia & Bargeboards');

-- --------------------------------------------------------

--
-- Table structure for table `roofsettingrst`
--

CREATE TABLE `roofsettingrst` (
  `id` int(40) NOT NULL,
  `project_id` int(40) NOT NULL,
  `rooftype` varchar(40) NOT NULL,
  `outsidewall_wt` varchar(40) NOT NULL,
  `insidewall_wt` varchar(40) NOT NULL,
  `tiebeam_wt` varchar(40) NOT NULL,
  `tiebeamforridges_wt` varchar(40) NOT NULL,
  `rafters_wt` varchar(40) NOT NULL,
  `trusses_wt` varchar(40) NOT NULL,
  `purlins_wt` varchar(40) NOT NULL,
  `insidenoggin_wt` varchar(40) NOT NULL,
  `outsidenoggin_wt` varchar(40) NOT NULL,
  `fasciabargeboards_wt` varchar(40) NOT NULL,
  `insidewallplat_wid` int(40) NOT NULL,
  `tiebeam_wid` int(40) NOT NULL,
  `rafters_wid` int(44) NOT NULL,
  `trusses_wid` int(44) NOT NULL,
  `purlins_wid` int(44) NOT NULL,
  `insidenoggin_wid` int(44) NOT NULL,
  `outsidenoggin_wid` int(44) NOT NULL,
  `insidenoggin_hei` int(44) NOT NULL,
  `outsidenoggin_hei` int(44) NOT NULL,
  `mainroof_pri` int(44) NOT NULL,
  `waterproof_pri` int(44) NOT NULL,
  `soffitclouding_pri` int(44) NOT NULL,
  `gablesurface_pri` int(44) NOT NULL,
  `eavesurface_pri` int(44) NOT NULL,
  `garblebargeboards_pri` int(44) NOT NULL,
  `eaveflashing_pri` int(44) NOT NULL,
  `bottomflashing_pri` int(44) NOT NULL,
  `upflashing_pri` int(44) NOT NULL,
  `ridgecap_pri` int(44) NOT NULL,
  `gutter_pri` int(44) NOT NULL,
  `guttertrimmer_pri` int(44) NOT NULL,
  `gablebargeboards_len` int(44) NOT NULL,
  `eaveflashing_len` int(44) NOT NULL,
  `bottomflashing_len` int(44) NOT NULL,
  `upflashing_len` int(44) NOT NULL,
  `ridgecap_len` int(44) NOT NULL,
  `gutter_len` int(44) NOT NULL,
  `guttertrimmer_len` int(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roofsettingrst`
--

INSERT INTO `roofsettingrst` (`id`, `project_id`, `rooftype`, `outsidewall_wt`, `insidewall_wt`, `tiebeam_wt`, `tiebeamforridges_wt`, `rafters_wt`, `trusses_wt`, `purlins_wt`, `insidenoggin_wt`, `outsidenoggin_wt`, `fasciabargeboards_wt`, `insidewallplat_wid`, `tiebeam_wid`, `rafters_wid`, `trusses_wid`, `purlins_wid`, `insidenoggin_wid`, `outsidenoggin_wid`, `insidenoggin_hei`, `outsidenoggin_hei`, `mainroof_pri`, `waterproof_pri`, `soffitclouding_pri`, `gablesurface_pri`, `eavesurface_pri`, `garblebargeboards_pri`, `eaveflashing_pri`, `bottomflashing_pri`, `upflashing_pri`, `ridgecap_pri`, `gutter_pri`, `guttertrimmer_pri`, `gablebargeboards_len`, `eaveflashing_len`, `bottomflashing_len`, `upflashing_len`, `ridgecap_len`, `gutter_len`, `guttertrimmer_len`) VALUES
(1, 4, '', '2\" x 6\" x 12', '2\" x 3\" x 12', '2\" x 4\" x 12', '2\" x 4\" x 12', '2\" x 4\" x 12', '2\" x 4\" x 12', '1\" x 10\" x 12', '3\" x 4\" x12', '3', '2\" x 6\" x 12', 1, 1, 1, 1, 1, 1, 1, 2, 2, 1450, 1450, 1450, 1450, 1450, 1450, 1450, 0, 870, 2320, 2320, 870, 4, 4, 4, 4, 4, 4, 4),
(2, 4, '', '3\" x 4\" x12', '4\" x 4\" x 12', '4\" x 4\" x 12', '3\" x 4\" x12', '2\" x 6\" x 12', '4\" x 4\" x 12', '2\" x 4\" x 12', '3\" x 4\" x12', '3', '3\" x 4\" x12', 1, 1, 1, 1, 0, 1, 1, 2, 2, 2600, 3100, 3100, 3100, 3100, 2000, 2000, 0, 17, 2000, 3900, 11, 2, 2, 4, 4, 2, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sand`
--

CREATE TABLE `sand` (
  `id` int(11) NOT NULL,
  `sand_name` varchar(40) NOT NULL,
  `truck_type` varchar(40) NOT NULL,
  `price` varchar(40) NOT NULL,
  `no_of_excavator` varchar(40) NOT NULL,
  `vol_of_excavator` varchar(40) NOT NULL,
  `price_excavator` varchar(40) NOT NULL,
  `vol_truck` varchar(40) NOT NULL,
  `price_truck` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sand`
--

INSERT INTO `sand` (`id`, `sand_name`, `truck_type`, `price`, `no_of_excavator`, `vol_of_excavator`, `price_excavator`, `vol_truck`, `price_truck`) VALUES
(1, 'Good Sand', '2 in 1 Tipper', '13000', '7', '0.86', '1857.14', '6.02', '13000'),
(2, 'Plastering (Sharp) Sand', '2 in 1 Tipper', '13000', '7', '0.86', '1857.14', '6.02', '13000'),
(3, 'Plastering (Mood) Sand', '6 Tyre Tipper', '14000', '5', '0.86', '3111.11', '3.87', '14000');

-- --------------------------------------------------------

--
-- Table structure for table `sandcementgravelrst`
--

CREATE TABLE `sandcementgravelrst` (
  `id` int(99) NOT NULL,
  `name_cement` varchar(50) NOT NULL,
  `price_cement` varchar(50) NOT NULL,
  `name_of_truck_sand` varchar(50) NOT NULL,
  `price_sand` varchar(50) NOT NULL,
  `no_of_excavator_sand` varchar(50) NOT NULL,
  `name_of_sand` varchar(50) NOT NULL,
  `excavator_size_sand` varchar(50) NOT NULL,
  `name_of_truck_gravel` varchar(50) NOT NULL,
  `price_gravel` varchar(50) NOT NULL,
  `ton_gravel` varchar(50) NOT NULL,
  `name_gravel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sandcementgravelrst`
--

INSERT INTO `sandcementgravelrst` (`id`, `name_cement`, `price_cement`, `name_of_truck_sand`, `price_sand`, `no_of_excavator_sand`, `name_of_sand`, `excavator_size_sand`, `name_of_truck_gravel`, `price_gravel`, `ton_gravel`, `name_gravel`) VALUES
(1, '50 (Kg) of cement', '2550', '6 Tyre Tipper', '14000', '5', 'Plastering (Mood) Sand', '4', 'Trailer', '245000', '30', 'gravel'),
(2, '50 (Kg) of cement', '2550', '6 Tyre Tipper', '14000', '5', 'Plastering (Mood) Sand', '3', 'Trailer', '245000', '30', 'gravel'),
(3, '50 (Kg) of cement', '2550', '6 Tyre Tipper', '14000', '5', 'Plastering (Mood) Sand', '1', 'Trailer', '245000', '30', 'gravel');

-- --------------------------------------------------------

--
-- Table structure for table `steelrst`
--

CREATE TABLE `steelrst` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `tons` varchar(11) NOT NULL,
  `price_per_ton` varchar(11) NOT NULL,
  `unknown` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `steelrst`
--

INSERT INTO `steelrst` (`id`, `project_id`, `name`, `price`, `tons`, `price_per_ton`, `unknown`) VALUES
(23, 4, '6mm Steel', '700', '250', '175000', '220350'),
(24, 4, '8mm Steel', '1150', '210', '241500', '304100'),
(25, 4, '10mm Steel', '1750', '135', '236250', '297500'),
(26, 4, '12mm Steel', '2150', '94', '202100', '254500'),
(27, 4, '16mm Steel', '4200', '53', '222600', '280300'),
(28, 4, '20mm Steel', '6500', '34', '221000', '278300'),
(29, 4, '25mm Steel', '9000', '22', '198000', '249300'),
(30, 4, '30mm Steel', '10000', '20', '200000', '251850'),
(31, 4, '32mm Steel', '12500', '18', '225000', '283300'),
(32, 4, '35mm Steel', '15000', '16', '240000', '302200'),
(33, 4, '40mm Steel', '30000', '14', '420000', '528850'),
(34, 5, '6mm Steel', '700', '250', '175000', '220350'),
(35, 5, '8mm Steel', '1150', '210', '241500', '304100'),
(36, 5, '10mm Steel', '1750', '135', '236250', '297500'),
(37, 5, '12mm Steel', '2150', '94', '202100', '254500'),
(38, 5, '16mm Steel', '4200', '53', '222600', '280300'),
(39, 5, '20mm Steel', '6500', '34', '221000', '278300'),
(40, 5, '25mm Steel', '9000', '22', '198000', '249300'),
(41, 5, '30mm Steel', '10000', '20', '200000', '251850'),
(42, 5, '32mm Steel', '12500', '18', '225000', '283300'),
(43, 5, '35mm Steel', '15000', '16', '240000', '302200'),
(44, 5, '40mm Steel', '30000', '14', '420000', '528850');

-- --------------------------------------------------------

--
-- Table structure for table `steels`
--

CREATE TABLE `steels` (
  `steel_id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `price` varchar(40) NOT NULL,
  `tons` varchar(40) NOT NULL,
  `price_per_ton` varchar(40) NOT NULL,
  `unknown` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `steels`
--

INSERT INTO `steels` (`steel_id`, `name`, `price`, `tons`, `price_per_ton`, `unknown`) VALUES
(1, '6mm Steel', '700', '250', '175000', '220350'),
(3, '8mm Steel', '1150', '210', '241500', '304100'),
(4, '10mm Steel', '1750', '135', '236250', '297500'),
(5, '12mm Steel', '2150', '94', '202100', '254500'),
(6, '16mm Steel', '4200', '53', '222600', '280300'),
(9, '20mm Steel', '6500', '34', '221000', '278300'),
(10, '25mm Steel', '9000', '22', '198000', '249300'),
(11, '30mm Steel', '10000', '20', '200000', '251850'),
(12, '32mm Steel', '12500', '18', '225000', '283300'),
(13, '35mm Steel', '15000', '16', '240000', '302200'),
(14, '40mm Steel', '30000', '14', '420000', '528850');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(11) NOT NULL,
  `useremail` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `full_name`, `useremail`, `password`) VALUES
(79, 'Charles Awu', 'c.awulor@yahoo.com', '$2y$10$UFI2THZtxp/ARtUfcaiUBuC4R1FYbt8XR085AarJQ.SKK/cWlEBAu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`block_id`);

--
-- Indexes for table `blocks_result`
--
ALTER TABLE `blocks_result`
  ADD PRIMARY KEY (`block_rslt`);

--
-- Indexes for table `cement`
--
ALTER TABLE `cement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excavator`
--
ALTER TABLE `excavator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gravel`
--
ALTER TABLE `gravel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hardcore`
--
ALTER TABLE `hardcore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plankwoods`
--
ALTER TABLE `plankwoods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plastering`
--
ALTER TABLE `plastering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `roof`
--
ALTER TABLE `roof`
  ADD PRIMARY KEY (`roofid`);

--
-- Indexes for table `roofing_length`
--
ALTER TABLE `roofing_length`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roofing_measurement`
--
ALTER TABLE `roofing_measurement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roofing_parts`
--
ALTER TABLE `roofing_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roofing_price`
--
ALTER TABLE `roofing_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roofing_spacing`
--
ALTER TABLE `roofing_spacing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roofing_spacing_length`
--
ALTER TABLE `roofing_spacing_length`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roofing_woods`
--
ALTER TABLE `roofing_woods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roofing_woodsrst`
--
ALTER TABLE `roofing_woodsrst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roofing_woods_building`
--
ALTER TABLE `roofing_woods_building`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roofsettingrst`
--
ALTER TABLE `roofsettingrst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sand`
--
ALTER TABLE `sand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sandcementgravelrst`
--
ALTER TABLE `sandcementgravelrst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `steelrst`
--
ALTER TABLE `steelrst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `steels`
--
ALTER TABLE `steels`
  ADD PRIMARY KEY (`steel_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `block_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blocks_result`
--
ALTER TABLE `blocks_result`
  MODIFY `block_rslt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cement`
--
ALTER TABLE `cement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `excavator`
--
ALTER TABLE `excavator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gravel`
--
ALTER TABLE `gravel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hardcore`
--
ALTER TABLE `hardcore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plankwoods`
--
ALTER TABLE `plankwoods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `plastering`
--
ALTER TABLE `plastering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roof`
--
ALTER TABLE `roof`
  MODIFY `roofid` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roofing_length`
--
ALTER TABLE `roofing_length`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roofing_measurement`
--
ALTER TABLE `roofing_measurement`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roofing_parts`
--
ALTER TABLE `roofing_parts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roofing_price`
--
ALTER TABLE `roofing_price`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roofing_spacing`
--
ALTER TABLE `roofing_spacing`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roofing_spacing_length`
--
ALTER TABLE `roofing_spacing_length`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roofing_woods`
--
ALTER TABLE `roofing_woods`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roofing_woodsrst`
--
ALTER TABLE `roofing_woodsrst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `roofing_woods_building`
--
ALTER TABLE `roofing_woods_building`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roofsettingrst`
--
ALTER TABLE `roofsettingrst`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sand`
--
ALTER TABLE `sand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sandcementgravelrst`
--
ALTER TABLE `sandcementgravelrst`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `steelrst`
--
ALTER TABLE `steelrst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `steels`
--
ALTER TABLE `steels`
  MODIFY `steel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
