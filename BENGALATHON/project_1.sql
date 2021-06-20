-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 03:58 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied_a_user`
--

CREATE TABLE `applied_a_user` (
  `id` int(11) NOT NULL,
  `aadhar_number` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `ph_number` text NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `acct_hold_name` text NOT NULL,
  `acct_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied_a_user`
--

INSERT INTO `applied_a_user` (`id`, `aadhar_number`, `first_name`, `last_name`, `ph_number`, `email_id`, `address`, `bank_name`, `branch`, `acct_hold_name`, `acct_number`) VALUES
(1, '3454', 'arijit', 'hh', '3223', 'ajhouH', 'ANJU', 'JIJOI', 'NJH', 'JIOHJO', 'NJO'),
(2, '31', 'arijit', 'k', '97', 'AA', 'k', 's', 'AA', 'AA', '156'),
(3, 'jjmm m ', 'njm,, ', 'm m,m ', '55112', 'nj,,,m', ' ,,k ,m', ', , , , ', ', ,  , ,', ', , , ,', ',,  , ,'),
(4, 'jjmm m ', 'njm,, ', 'm m,m ', '55112', 'nj,,,m', ' ,,k ,m', ', , , , ', ', ,  , ,', ', , , ,', ',,  , ,'),
(5, '555', 'lkmmmkk', 'mkkkkm', '512', 'klmklklklm', 'kmkmkmmkl', 'kmmkkmlkml', 'klmmklklmkl', 'kmklmklkml', 'kmkmkmlkml'),
(6, '555', 'lkmmmkk', 'mkkkkm', '512', 'klmklklklm', 'kmkmkmmkl', 'kmmkkmlkml', 'klmmklklmkl', 'kmklmklkml', 'kmkmkmlkml'),
(7, '555', 'lkmmmkk', 'mkkkkm', '512', 'klmklklklm', 'kmkmkmmkl', 'kmmkkmlkml', 'klmmklklmkl', 'kmklmklkml', 'kmkmkmlkml'),
(8, '555', 'lkmmmkk2', 'mkkkkm', '512', 'klmklklklm', 'kmkmkmmkl', 'kmmkkmlkml', 'klmmklklmkl', 'kmklmklkml', 'kmkmkmlkml'),
(9, 'hbjb', 'njnjjm', 'jmmj', '22', 'mmmm', 'lml', 'hjhb', 'jjjm', ',,m,m', 'mmm'),
(10, '', '', '', '', 'hjn@hhnn', '', '', '', '', ''),
(11, '', '', '', '', 'hjnb@hnhn.com', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `applied_bcw_user`
--

CREATE TABLE `applied_bcw_user` (
  `id` int(11) NOT NULL,
  `aadhar_number` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `ph_number` text NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `acct_hold_name` text NOT NULL,
  `acct_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied_bcw_user`
--

INSERT INTO `applied_bcw_user` (`id`, `aadhar_number`, `first_name`, `last_name`, `ph_number`, `email_id`, `address`, `bank_name`, `branch`, `acct_hold_name`, `acct_number`) VALUES
(1, '65', 'ayon', 'malick', '566551', 'ayon@gmail.com', 'yuadug,', 'sbi', 'bb', 'hgscvgh', '6');

-- --------------------------------------------------------

--
-- Table structure for table `applied_cdwdsw_user`
--

CREATE TABLE `applied_cdwdsw_user` (
  `id` int(11) NOT NULL,
  `aadhar_number` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `ph_number` text NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `acct_hold_name` text NOT NULL,
  `acct_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applied_e_user`
--

CREATE TABLE `applied_e_user` (
  `id` int(11) NOT NULL,
  `aadhar_number` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `ph_number` text NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `acct_hold_name` text NOT NULL,
  `acct_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applied_he_user`
--

CREATE TABLE `applied_he_user` (
  `id` int(11) NOT NULL,
  `aadhar_number` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `ph_number` text NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `acct_hold_name` text NOT NULL,
  `acct_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied_he_user`
--

INSERT INTO `applied_he_user` (`id`, `aadhar_number`, `first_name`, `last_name`, `ph_number`, `email_id`, `address`, `bank_name`, `branch`, `acct_hold_name`, `acct_number`) VALUES
(1, '245511551', 'njkj', 'jkjkjk', '545454', 'mklklkmmk@', 'kkjjk', 'knkkj', 'knjjn', 'jkjkjkj', '123'),
(2, '245511551', 'njkj', 'jkjkjk', '545454', 'mklklkmmk@', 'kkjjk', 'knkkj', 'knjjn', 'jkjkjkj', '123');

-- --------------------------------------------------------

--
-- Table structure for table `applied_hfw_user`
--

CREATE TABLE `applied_hfw_user` (
  `id` int(11) NOT NULL,
  `aadhar_number` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `ph_number` text NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `acct_hold_name` text NOT NULL,
  `acct_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applied_pw_user`
--

CREATE TABLE `applied_pw_user` (
  `id` int(11) NOT NULL,
  `aadhar_number` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `ph_number` text NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `acct_hold_name` text NOT NULL,
  `acct_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applied_school_user`
--

CREATE TABLE `applied_school_user` (
  `id` int(11) NOT NULL,
  `aadhar_number` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `ph_number` text NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `acct_hold_name` text NOT NULL,
  `acct_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied_school_user`
--

INSERT INTO `applied_school_user` (`id`, `aadhar_number`, `first_name`, `last_name`, `ph_number`, `email_id`, `address`, `bank_name`, `branch`, `acct_hold_name`, `acct_number`) VALUES
(1, '', 'hhghg', 'kkkmmk', '', 'jkjjnj', '2021-12-12', '', '', '', ''),
(2, '', 'hhjbhbj', 'hbjhhbjb', '', 'nkknkkn', 'jjjjkjk', '', '', '', ''),
(3, '', 'hhjbhbj', 'hbjhhbjb', '', 'nkknkkn', 'jjjjkjk', '', '', '', ''),
(5, '', 'HHHN', 'NKNKKNKN', '', 'JJJNJK', 'KKK', '', '', '', ''),
(6, '', 'HHHN', 'NKNKKNKN', '', 'JJJNJK', 'KKK1', '', '', '', ''),
(7, '', 'vhhhg', 'jkjjbjb', 'kknnkn', 'nknkknkn', 'nnkjk', 'nkkknk', 'kknknkkn', 'nknknkknkn', 'nknknknk'),
(8, '1', 'nkk', 'nkkk', 'nknkkn', 'nkkknnk', 'klknknk', 'knnkkn', 'knknkn', 'kn', 'kknkn'),
(9, 'uiuiii', 'tgdtfggt', 'gtgtgtgt', 'tggtrgt', 'tggtgtgt', 'ggtgtgt', 'bgffhf', 'gggf', 'bgbgbgffg', 'gbgffggf'),
(10, '', '', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', '', '', ''),
(13, 'jbjbjb', 'nklknknl', 'nknkk', 'llnkkn', 'nnknknk', 'knlnkknkn', 'knkknnk', 'knnkknn', 'nknkk', 'kknnkk'),
(14, 'hjbhjbhbj', 'jkjn', 'jn', 'jjnjj', 'jn', 'jn', 'jjk', 'jnjn', 'kj', 'j'),
(15, '1551511515551', 'hujbjbhyhjbhjb', 'nkkj', '325151551522252', 'pratikdeb91&gamil.com', 'bjhjbjj', 'knj', 'knkknkn', 'knjk', 'jkjkjk'),
(16, '2121', 'jjkj', 'jj', '254222', 'lkkk', ',kkkkk', 'kklklmkm', 'kkkkj', 'kkknkn', 'nkkk');

-- --------------------------------------------------------

--
-- Table structure for table `applied_st_user`
--

CREATE TABLE `applied_st_user` (
  `id` int(11) NOT NULL,
  `aadhar_number` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `ph_number` text NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `acct_hold_name` text NOT NULL,
  `acct_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applied_tevtsd_user`
--

CREATE TABLE `applied_tevtsd_user` (
  `id` int(11) NOT NULL,
  `aadhar_number` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `ph_number` text NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `acct_hold_name` text NOT NULL,
  `acct_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gov_id_table`
--

CREATE TABLE `gov_id_table` (
  `id_nodal` int(10) NOT NULL,
  `org_gov_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gov_id_table`
--

INSERT INTO `gov_id_table` (`id_nodal`, `org_gov_id`) VALUES
(21, 'gov12'),
(22, 'gov13');

-- --------------------------------------------------------

--
-- Table structure for table `register_admin`
--

CREATE TABLE `register_admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_admin`
--

INSERT INTO `register_admin` (`id`, `name`, `admin_id`, `password`, `email`) VALUES
(1, 'pr', 'system', 'admin', 'pratikdeb91@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `register_can`
--

CREATE TABLE `register_can` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `status` enum('V','N') NOT NULL DEFAULT 'N' COMMENT 'V=>Verified,N=>Not Verified'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_can`
--

INSERT INTO `register_can` (`id`, `name`, `email`, `password`, `status`) VALUES
(42, 'hyjhjhj', 'pratikdeb91@gmail.com', 'njk', 'N'),
(43, 'vggvhg', 'pratikdeb91@gmail.com', 'nkjkn', 'N'),
(46, 'userid', 'pratikdeb91@gmail.com', '123', 'N'),
(47, 'ayon', 'ayonavomalick@gmail.com', '123', 'V'),
(48, 'deepa', 'ayonavomalick@gmail.com', '123', 'V'),
(49, 'ayonavo', 'ayonavomalick@gmail.com', '123', 'V'),
(50, 'pratik', 'pratikdeb91@gmail.com', '2433', 'N'),
(51, 'pratik', 'pratikdeb91@gmail.com', '2433', 'N'),
(52, 'pratik', 'pratikdeb91@gmail.com', '12345', 'N'),
(53, 'pratik', 'pratikdeb91@gmail.com', 'cvc', 'N'),
(54, 'pratik', 'odpbyquibits@gmail.com', 'csxcs', 'N'),
(55, 'pratik', 'odpbyquibits@gmail.com', 'dds', 'N'),
(56, 'cscs', 'pratikdeb91@gmail.com', 'dfdf', 'N'),
(57, 'cscs', 'pratikdeb91@gmail.com', 'cscs', 'N'),
(58, 'cscs', 'pratikdeb91@gmail.com', 'cscs', 'N'),
(59, 'cscs', 'pratikdeb91@gmail.com', '2433', 'N'),
(60, 'ffcfc', 'pratikdeb91@gmal.com', 'hghg', 'N'),
(61, 'ffcfc', 'pratikdeb91@gmal.com', 'hjhjb', 'N'),
(62, 'jkjkmjbh', 'pratikdeb91@gmail.com', 'kjbmjs,m', 'N'),
(63, 'jkjkmjbh', 'pratikdeb91@gmail.com', 'kjbmjs,m', 'N'),
(64, 'jkjkmjbh', 'pratikdeb91@gmail.com', 'cxcx', 'N'),
(65, 'xxaxa', 'pratikdeb91@gmail.com', 'hjbch s', 'N'),
(66, 'hjbahbhb', 'pratikdeb91@gmail.com', 'jkejd', 'N'),
(67, 'hjbahbhb', 'pratikdeb91@gmail.com', 'xcdsc', 'N'),
(68, 'hjbahbhb', 'pratikdeb91@gmail.com', 'xcdsc', 'N'),
(69, 'hjbahbhb', 'pratikdeb91@gmail.com', 'xccs', 'N'),
(70, '', '', '', ''),
(71, '', '', '', ''),
(72, 'hjbahbhb', 'pratikdeb91@gmail.com', 'zxz', 'N'),
(73, 'dsd', 'pratikdeb91@gmail.com', 'hkssw', 'N'),
(74, 'dsd', 'pratikdeb91@gmail.com', 'hkssw', 'N'),
(75, 'dsd', 'pratikdeb91@gmail.com', 'hbjhjb', 'N'),
(76, 'yhv', 'pratikdeb91@gmail.com', 'hg', 'N'),
(77, 'yhv', 'pratikdeb91@gmail.com', 'hg', 'N'),
(78, 'yhv', 'pratikdeb91@gmail.com', 'gvvggvg', 'N'),
(79, 'jbkb mjmb', 'pratikdeb91@gmail.com', 'yhjjhjbh', 'N'),
(80, 'jbkb mjmb', 'pratikdeb91@gmail.com', 'yhjjhjbh', 'N'),
(81, 'jbkb mjmb', 'pratikdeb91@gmail.com', 'xccsc', 'N'),
(82, 'ajamn', 'pratikdeb91@gmail.com', 'dmjswddw', 'N'),
(83, 'ajamn', 'pratikdeb91@gmail.com', 'dmjswddw', 'N'),
(84, 'ajamn', 'pratikdeb91@gmail.com', 'dmjswddw', 'N'),
(85, 'axx', 'axxnb@smns.com', 'sds', 'N'),
(86, 'axx', 'axxnb@sqdwdwmns.com', 'scsc', 'N'),
(87, 'can', 'pratikdeb91@gmail.com', '123', 'N'),
(88, 'aasa', 'sasa@gmail.com', 'asaa', 'N'),
(89, 'aasa', 'sasa@gmail.com', 'dads', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `register_docverifier`
--

CREATE TABLE `register_docverifier` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `doc_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_docverifier`
--

INSERT INTO `register_docverifier` (`id`, `name`, `doc_id`, `password`) VALUES
(7, 'arijit', 'doc12', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `register_nodal`
--

CREATE TABLE `register_nodal` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `nodal_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_nodal`
--

INSERT INTO `register_nodal` (`id`, `name`, `nodal_id`, `password`, `email`) VALUES
(42, 'jkjj', 'gov12', '1234', 'pratikdeb91@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `schemes_of_a`
--

CREATE TABLE `schemes_of_a` (
  `id` int(10) NOT NULL,
  `scheme_number` varchar(255) NOT NULL,
  `schemes_criteria` varchar(255) NOT NULL,
  `exp_date` date NOT NULL,
  `certificates` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schemes_of_a`
--

INSERT INTO `schemes_of_a` (`id`, `scheme_number`, `schemes_criteria`, `exp_date`, `certificates`) VALUES
(7, 'ODPA01', 'For Farmer', '2020-06-20', '(1)Land Certificate  (2)Addhar Card (3)Family income certificate');

-- --------------------------------------------------------

--
-- Table structure for table `schemes_of_bcw`
--

CREATE TABLE `schemes_of_bcw` (
  `id` int(10) NOT NULL,
  `scheme_number` varchar(255) NOT NULL,
  `schemes_criteria` varchar(255) NOT NULL,
  `exp_date` date NOT NULL,
  `certificates` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schemes_of_bcw`
--

INSERT INTO `schemes_of_bcw` (`id`, `scheme_number`, `schemes_criteria`, `exp_date`, `certificates`) VALUES
(9, 'odpbcw02', 'For Scheduled Castes (SC)', '2020-08-15', '(1) Education Qualification (2)Scheduled Castes Certificate (3)Family income certiftcate'),
(10, 'odpbcw01', 'For Scheduled Tribes (ST) or OBC', '2020-09-30', '(1) Education Qualification (2)Scheduled Tribes (ST) or OBC Certificate (3)Family income certiftcate');

-- --------------------------------------------------------

--
-- Table structure for table `schemes_of_cdwdsw`
--

CREATE TABLE `schemes_of_cdwdsw` (
  `id` int(10) NOT NULL,
  `scheme_number` varchar(255) NOT NULL,
  `schemes_criteria` varchar(255) NOT NULL,
  `exp_date` date NOT NULL,
  `certificates` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schemes_of_cdwdsw`
--

INSERT INTO `schemes_of_cdwdsw` (`id`, `scheme_number`, `schemes_criteria`, `exp_date`, `certificates`) VALUES
(8, 'ODPCD01', 'FOR SPECIAL CHILD', '2020-10-22', '(1) Birth Certificate (2)Addhar Card (3)Family income certificate');

-- --------------------------------------------------------

--
-- Table structure for table `schemes_of_e`
--

CREATE TABLE `schemes_of_e` (
  `id` int(10) NOT NULL,
  `scheme_number` varchar(255) NOT NULL,
  `schemes_criteria` varchar(255) NOT NULL,
  `exp_date` date NOT NULL,
  `certificates` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schemes_of_e`
--

INSERT INTO `schemes_of_e` (`id`, `scheme_number`, `schemes_criteria`, `exp_date`, `certificates`) VALUES
(8, 'ODPE01', 'For Forest', '2020-08-20', '(1)Forest map (2)Addhar Card (3)Annual payment details');

-- --------------------------------------------------------

--
-- Table structure for table `schemes_of_he`
--

CREATE TABLE `schemes_of_he` (
  `id` int(10) NOT NULL,
  `scheme_number` varchar(255) NOT NULL,
  `schemes_criteria` varchar(255) NOT NULL,
  `exp_date` date NOT NULL,
  `certificates` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schemes_of_he`
--

INSERT INTO `schemes_of_he` (`id`, `scheme_number`, `schemes_criteria`, `exp_date`, `certificates`) VALUES
(5, 'odphe02', 'For Bachelor Degree', '2021-09-20', '(1) Education Qualification (2)Addhar Card (3)Family income certificate'),
(6, 'odphe01', 'For Master Degree', '2020-08-09', '(1) Education Qualification (2)Addhar Card (3)Family income certificate	');

-- --------------------------------------------------------

--
-- Table structure for table `schemes_of_hfw`
--

CREATE TABLE `schemes_of_hfw` (
  `id` int(10) NOT NULL,
  `scheme_number` varchar(255) NOT NULL,
  `schemes_criteria` varchar(255) NOT NULL,
  `exp_date` date NOT NULL,
  `certificates` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schemes_of_hfw`
--

INSERT INTO `schemes_of_hfw` (`id`, `scheme_number`, `schemes_criteria`, `exp_date`, `certificates`) VALUES
(9, 'ODPHFW01', 'For Accident Purpose', '2020-07-05', '(1)Medical Certificate (2)Addhar Card (3)Family income certificate');

-- --------------------------------------------------------

--
-- Table structure for table `schemes_of_pw`
--

CREATE TABLE `schemes_of_pw` (
  `id` int(10) NOT NULL,
  `scheme_number` varchar(255) NOT NULL,
  `schemes_criteria` varchar(255) NOT NULL,
  `exp_date` date NOT NULL,
  `certificates` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schemes_of_pw`
--

INSERT INTO `schemes_of_pw` (`id`, `scheme_number`, `schemes_criteria`, `exp_date`, `certificates`) VALUES
(4, 'ODPPW01', 'For Social Work', '2020-05-01', '(1)Work details  ');

-- --------------------------------------------------------

--
-- Table structure for table `schemes_of_school`
--

CREATE TABLE `schemes_of_school` (
  `id` int(20) NOT NULL,
  `scheme_number` varchar(255) NOT NULL,
  `schemes_criteria` varchar(255) NOT NULL,
  `exp_date` date NOT NULL,
  `certificates` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schemes_of_school`
--

INSERT INTO `schemes_of_school` (`id`, `scheme_number`, `schemes_criteria`, `exp_date`, `certificates`) VALUES
(82, 'odpsc02', 'Matriculation with 75% marks', '2020-06-15', '(1) 10th pass marksheet (2)Addhar Card (3)Family income certificate'),
(85, 'odpsc01', 'Higher Secondary with 80% marks', '2020-06-20', '(1) Higher Secondary marksheet (2)Addhar Card (3)Family income certificate');

-- --------------------------------------------------------

--
-- Table structure for table `schemes_of_st`
--

CREATE TABLE `schemes_of_st` (
  `id` int(10) NOT NULL,
  `scheme_number` varchar(255) NOT NULL,
  `schemes_criteria` varchar(255) NOT NULL,
  `exp_date` date NOT NULL,
  `certificates` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schemes_of_st`
--

INSERT INTO `schemes_of_st` (`id`, `scheme_number`, `schemes_criteria`, `exp_date`, `certificates`) VALUES
(6, 'ODPSC01', 'Science Project', '2020-12-31', '(1)Project Idea (2) Cost for Project (3)Problem Statement');

-- --------------------------------------------------------

--
-- Table structure for table `schemes_of_tevtsd`
--

CREATE TABLE `schemes_of_tevtsd` (
  `id` int(10) NOT NULL,
  `scheme_number` varchar(255) NOT NULL,
  `schemes_criteria` varchar(255) NOT NULL,
  `exp_date` date NOT NULL,
  `certificates` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schemes_of_tevtsd`
--

INSERT INTO `schemes_of_tevtsd` (`id`, `scheme_number`, `schemes_criteria`, `exp_date`, `certificates`) VALUES
(14, 'ODPTE02', 'TRAINING FOR COMPUTER COURSE', '2019-12-10', '(1) Higher Secondary marksheet (2)Addhar Card (3)Family income certificate	'),
(15, 'ODPTE01', 'TRAINING FOR SPOKEN ENGLISH', '2021-09-05', '(1) 10th pass marksheet (2)Addhar Card (3)Family income certificate');

-- --------------------------------------------------------

--
-- Table structure for table `table_gov_login`
--

CREATE TABLE `table_gov_login` (
  `id_gov` int(10) NOT NULL,
  `login_id` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_gov_login`
--

INSERT INTO `table_gov_login` (`id_gov`, `login_id`, `password`) VALUES
(1, 'ggg', '12433'),
(2, 'ggg', '45678'),
(3, 'hhhhh', 'hhh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `image_id` int(11) NOT NULL,
  `userid` text NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`image_id`, `userid`, `image_name`) VALUES
(145, 'ayon', '157393454017724499185dd055cc12643.jpg'),
(146, 'deepa', '157397066411972030935dd0e2e862abb.jpg'),
(147, 'ayonavo', '157397308821289266345dd0ec6080bfc.jpg'),
(148, 'ayonavo', '15739731095542018715dd0ec7572bf9.jpg'),
(149, 'ayonavo', '157397312618019041365dd0ec865252e.jpg'),
(150, 'hyjhjhj', '15890948332166799285eb7a9b1000fe.jpg'),
(151, 'ayon', '15897002303359455215ec0e6865da6b.jpg'),
(152, 'pratik', '158970230114542959635ec0ee9dc5c3a.jpg'),
(153, 'pratik', '158970310617427130435ec0f1c2b8f90.jpg'),
(154, 'yhv', '158981301415923368475ec29f162e59b.jpg'),
(155, 'yhv', '15898130429395777895ec29f3228fde.jpg'),
(156, 'ayon', '159103772214502369185ed54f1a7995f.jpg'),
(157, 'dsd', '159103779319390518185ed54f610d19d.jpg'),
(158, 'dsd', '15910379958108676915ed5502bed28c.jpg'),
(159, 'userid', '15916296584181279455ede575a4debe.jpg'),
(160, 'ayon', '159163845113951307425ede79b3d4e4f.jpg'),
(161, 'ayon', '159163847412127748335ede79ca603d1.jpg'),
(162, 'ayon', '15916384955464776645ede79df08b34.jpg'),
(163, 'ayon', '1591638534329940025ede7a06f163c.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied_a_user`
--
ALTER TABLE `applied_a_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applied_bcw_user`
--
ALTER TABLE `applied_bcw_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applied_cdwdsw_user`
--
ALTER TABLE `applied_cdwdsw_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applied_e_user`
--
ALTER TABLE `applied_e_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applied_he_user`
--
ALTER TABLE `applied_he_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applied_hfw_user`
--
ALTER TABLE `applied_hfw_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applied_pw_user`
--
ALTER TABLE `applied_pw_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applied_school_user`
--
ALTER TABLE `applied_school_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applied_st_user`
--
ALTER TABLE `applied_st_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applied_tevtsd_user`
--
ALTER TABLE `applied_tevtsd_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gov_id_table`
--
ALTER TABLE `gov_id_table`
  ADD PRIMARY KEY (`id_nodal`);

--
-- Indexes for table `register_admin`
--
ALTER TABLE `register_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_can`
--
ALTER TABLE `register_can`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_docverifier`
--
ALTER TABLE `register_docverifier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_nodal`
--
ALTER TABLE `register_nodal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schemes_of_a`
--
ALTER TABLE `schemes_of_a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schemes_of_bcw`
--
ALTER TABLE `schemes_of_bcw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schemes_of_cdwdsw`
--
ALTER TABLE `schemes_of_cdwdsw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schemes_of_e`
--
ALTER TABLE `schemes_of_e`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schemes_of_he`
--
ALTER TABLE `schemes_of_he`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schemes_of_hfw`
--
ALTER TABLE `schemes_of_hfw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schemes_of_pw`
--
ALTER TABLE `schemes_of_pw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schemes_of_school`
--
ALTER TABLE `schemes_of_school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schemes_of_st`
--
ALTER TABLE `schemes_of_st`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schemes_of_tevtsd`
--
ALTER TABLE `schemes_of_tevtsd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_gov_login`
--
ALTER TABLE `table_gov_login`
  ADD PRIMARY KEY (`id_gov`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applied_a_user`
--
ALTER TABLE `applied_a_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `applied_bcw_user`
--
ALTER TABLE `applied_bcw_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applied_cdwdsw_user`
--
ALTER TABLE `applied_cdwdsw_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applied_e_user`
--
ALTER TABLE `applied_e_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applied_he_user`
--
ALTER TABLE `applied_he_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applied_hfw_user`
--
ALTER TABLE `applied_hfw_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applied_pw_user`
--
ALTER TABLE `applied_pw_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applied_school_user`
--
ALTER TABLE `applied_school_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `applied_st_user`
--
ALTER TABLE `applied_st_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applied_tevtsd_user`
--
ALTER TABLE `applied_tevtsd_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gov_id_table`
--
ALTER TABLE `gov_id_table`
  MODIFY `id_nodal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `register_admin`
--
ALTER TABLE `register_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register_can`
--
ALTER TABLE `register_can`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `register_docverifier`
--
ALTER TABLE `register_docverifier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register_nodal`
--
ALTER TABLE `register_nodal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `schemes_of_a`
--
ALTER TABLE `schemes_of_a`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `schemes_of_bcw`
--
ALTER TABLE `schemes_of_bcw`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `schemes_of_cdwdsw`
--
ALTER TABLE `schemes_of_cdwdsw`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `schemes_of_e`
--
ALTER TABLE `schemes_of_e`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `schemes_of_he`
--
ALTER TABLE `schemes_of_he`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schemes_of_hfw`
--
ALTER TABLE `schemes_of_hfw`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `schemes_of_pw`
--
ALTER TABLE `schemes_of_pw`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schemes_of_school`
--
ALTER TABLE `schemes_of_school`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `schemes_of_st`
--
ALTER TABLE `schemes_of_st`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schemes_of_tevtsd`
--
ALTER TABLE `schemes_of_tevtsd`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `table_gov_login`
--
ALTER TABLE `table_gov_login`
  MODIFY `id_gov` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
