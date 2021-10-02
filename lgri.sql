-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 09:15 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lgri`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regionID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `regionID`, `created_at`, `updated_at`) VALUES
(1, 'Ilala', 1, NULL, NULL),
(2, 'Muheza', 2, NULL, NULL),
(3, 'Kinondoni', 1, NULL, NULL),
(4, 'Temeke', 1, NULL, NULL),
(5, 'Kigamboni', 1, NULL, NULL),
(6, 'Ubungo', 1, NULL, NULL),
(7, 'Meru', 4, NULL, NULL),
(8, 'Arusha Mjini', 4, NULL, NULL),
(9, 'Arusha Vijijini', 4, NULL, NULL),
(10, 'Karatu', 4, NULL, NULL),
(11, 'Longido', 4, NULL, NULL),
(12, 'Monduli', 4, NULL, NULL),
(13, 'Ngorongoro', 4, NULL, NULL),
(14, 'Bahi', 5, NULL, NULL),
(15, 'Chamwino', 5, NULL, NULL),
(16, 'Chemba', 5, NULL, NULL),
(17, 'Dodoma Jiji', 5, NULL, NULL),
(18, 'Kondoa', 5, NULL, NULL),
(19, 'Kongwa', 5, NULL, NULL),
(20, 'Mpwapwa', 5, NULL, NULL),
(21, 'Bukombe', 6, NULL, NULL),
(22, 'Chato', 6, NULL, NULL),
(23, 'Geita Mjini', 6, NULL, NULL),
(24, 'Mbogwe', 6, NULL, NULL),
(25, 'Nyang\'hwale', 6, NULL, NULL),
(26, 'Iringa Mjini', 7, NULL, NULL),
(27, 'Iringa Vijijini', 7, NULL, NULL),
(28, 'Kilolo', 7, NULL, NULL),
(29, 'Mafinga', 7, NULL, NULL),
(30, 'Mufindi', 7, NULL, NULL),
(31, 'Biharamulo', 8, NULL, NULL),
(32, 'Bukoba Mjini', 8, NULL, NULL),
(33, 'Bukoba Vijijini', 8, NULL, NULL),
(34, 'Karagwe', 8, NULL, NULL),
(35, 'Kyerwa', 8, NULL, NULL),
(36, 'Missenyi', 8, NULL, NULL),
(37, 'Muleba', 8, NULL, NULL),
(38, 'Ngara', 8, NULL, NULL),
(39, 'Mlele', 9, NULL, NULL),
(40, 'Mpanda Mjini', 9, NULL, NULL),
(41, 'Mpanda Vijijini', 9, NULL, NULL),
(42, 'Buhigwe', 3, NULL, NULL),
(43, 'Kakonko', 3, NULL, NULL),
(44, 'Kasulu Mjini', 3, NULL, NULL),
(45, 'Kasulu Vijijini', 3, NULL, NULL),
(46, 'Kibondo', 3, NULL, NULL),
(47, 'Kigoma', 3, NULL, NULL),
(48, 'Kigoma-Ujiji', 3, NULL, NULL),
(49, 'Uvinza', 3, NULL, NULL),
(50, 'Hai', 10, NULL, NULL),
(51, 'Moshi Mjini', 10, NULL, NULL),
(52, 'Moshi Vijijini', 10, NULL, NULL),
(53, 'Mwanga', 10, NULL, NULL),
(54, 'Rombo', 10, NULL, NULL),
(55, 'Same', 10, NULL, NULL),
(56, 'Siha', 10, NULL, NULL),
(57, 'Chake Chake', 11, NULL, NULL),
(58, 'Mkoani', 11, NULL, NULL),
(59, 'Kati', 12, NULL, NULL),
(60, 'Kusini', 12, NULL, NULL),
(61, 'KIlwa', 13, NULL, NULL),
(62, 'Lindi Mjini', 13, NULL, NULL),
(63, 'Lindi Vijijini', 13, NULL, NULL),
(64, 'Liwale', 13, NULL, NULL),
(65, 'Nachingwea', 13, NULL, NULL),
(66, 'Ruangwa', 13, NULL, NULL),
(67, 'Babati Mjini', 14, NULL, NULL),
(68, 'Babati Vijijini', 14, NULL, NULL),
(69, 'Hanang', 14, NULL, NULL),
(70, 'Kiteto', 14, NULL, NULL),
(71, 'Mbulu', 14, NULL, NULL),
(72, 'Simanjiro', 14, NULL, NULL),
(73, 'Bunda', 15, NULL, NULL),
(74, 'Butiama', 15, NULL, NULL),
(75, 'Musoma Mjini', 15, NULL, NULL),
(76, 'Musoma Vijijini', 15, NULL, NULL),
(77, 'Rorya', 15, NULL, NULL),
(78, 'Serengeti', 15, NULL, NULL),
(79, 'Tarime', 15, NULL, NULL),
(80, 'Busokelo', 16, NULL, NULL),
(81, 'Chunya', 16, NULL, NULL),
(82, 'Kyela', 16, NULL, NULL),
(83, 'Mbarali', 16, NULL, NULL),
(84, 'Mbeya Mjini', 16, NULL, NULL),
(85, 'Mbeya Vijijini', 16, NULL, NULL),
(86, 'Rungwe', 16, NULL, NULL),
(87, 'Magharibi', 17, NULL, NULL),
(88, 'Mjini', 17, NULL, NULL),
(89, 'Gairo', 18, NULL, NULL),
(90, 'Kilombero', 18, NULL, NULL),
(91, 'Kilosa', 18, NULL, NULL),
(92, 'Morogoro Mjini', 18, NULL, NULL),
(93, 'Morogoro Vijijini', 18, NULL, NULL),
(94, 'Mvomero', 18, NULL, NULL),
(95, 'Ulanga', 18, NULL, NULL),
(96, 'Malinyi', 18, NULL, NULL),
(97, 'Ifakara', 18, NULL, NULL),
(98, 'Masasi Mjini', 19, NULL, NULL),
(99, 'Masasi Vijijini', 19, NULL, NULL),
(100, 'Mtwara Mjini', 19, NULL, NULL),
(101, 'Mtwara Vijijini', 19, NULL, NULL),
(102, 'Nanyumbu', 19, NULL, NULL),
(103, 'Newala', 19, NULL, NULL),
(104, 'Tandahimba', 19, NULL, NULL),
(105, 'Ilemela', 20, NULL, NULL),
(106, 'Kwimba', 20, NULL, NULL),
(107, 'Magu', 20, NULL, NULL),
(108, 'Misungwi', 20, NULL, NULL),
(109, 'Nyamagana', 20, NULL, NULL),
(110, 'Sengerema', 20, NULL, NULL),
(111, 'Ukerewe', 20, NULL, NULL),
(112, 'Ludewa', 21, NULL, NULL),
(113, 'Makambako', 21, NULL, NULL),
(114, 'Makete', 21, NULL, NULL),
(115, 'Njombe Mjini', 21, NULL, NULL),
(116, 'Njombe Vijijini', 21, NULL, NULL),
(117, 'Wanging\'ombe', 21, NULL, NULL),
(118, 'Bagamoyo', 22, NULL, NULL),
(119, 'Kibaha Mjini', 22, NULL, NULL),
(120, 'Kibaha Vijijini', 22, NULL, NULL),
(121, 'Kisarawe', 22, NULL, NULL),
(122, 'Mafia', 22, NULL, NULL),
(123, 'Mkuranga', 22, NULL, NULL),
(124, 'Rufiji', 22, NULL, NULL),
(125, 'Kalambo', 23, NULL, NULL),
(126, 'Nkasi', 23, NULL, NULL),
(127, 'Sumbawanga Mjini', 23, NULL, NULL),
(128, 'Sumbawanga Vijijini', 23, NULL, NULL),
(129, 'Mbinga', 24, NULL, NULL),
(130, 'Songea Mjini', 24, NULL, NULL),
(131, 'Songea Vijijini', 24, NULL, NULL),
(132, 'Tunduru', 24, NULL, NULL),
(133, 'Namtumbo', 24, NULL, NULL),
(134, 'Nyasa', 24, NULL, NULL),
(135, 'Kahama Mjini', 25, NULL, NULL),
(136, 'Kahama Vijijini', 25, NULL, NULL),
(137, 'Kishapu', 25, NULL, NULL),
(138, 'Shinyanga Mjini', 25, NULL, NULL),
(139, 'Shinyanga Vijijini', 25, NULL, NULL),
(140, 'Bariadi', 26, NULL, NULL),
(141, 'Busega', 26, NULL, NULL),
(142, 'Itilima', 26, NULL, NULL),
(143, 'Maswa', 26, NULL, NULL),
(144, 'Meatu', 26, NULL, NULL),
(145, 'Ikungi', 27, NULL, NULL),
(146, 'Iramba', 27, NULL, NULL),
(147, 'Manyoni', 27, NULL, NULL),
(148, 'Mkalama', 27, NULL, NULL),
(149, 'Singida Mjini', 27, NULL, NULL),
(150, 'Singida Vijijini', 27, NULL, NULL),
(151, 'Ileje', 28, NULL, NULL),
(152, 'Mbozi', 28, NULL, NULL),
(153, 'Momba', 28, NULL, NULL),
(154, 'Songwe', 28, NULL, NULL),
(155, 'Igunga', 29, NULL, NULL),
(156, 'Kaliua', 29, NULL, NULL),
(157, 'Nzega', 29, NULL, NULL),
(158, 'Sikonge', 29, NULL, NULL),
(159, 'Tabora Mjini', 29, NULL, NULL),
(160, 'Urambo', 29, NULL, NULL),
(161, 'Uyui', 29, NULL, NULL),
(162, 'Handeni Mjini', 2, NULL, NULL),
(163, 'Handeni Vijijini', 2, NULL, NULL),
(164, 'Kilindi', 2, NULL, NULL),
(165, 'Korogwe Mjini', 2, NULL, NULL),
(166, 'Korogwe Vijijini', 2, NULL, NULL),
(167, 'Lushoto', 2, NULL, NULL),
(168, 'Mkinga', 2, NULL, NULL),
(169, 'Pangani', 2, NULL, NULL),
(170, 'Tanga Mjini', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `districtsadmins`
--

CREATE TABLE `districtsadmins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districtsadmins`
--

INSERT INTO `districtsadmins` (`id`, `name`, `region`, `phonenumber`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Ilala', 'Dar es Salaam', '0785-900901', 2, '2021-05-27 06:01:26', '2021-05-27 06:01:26'),
(6, 'Songea Mjini', 'Ruvuma', '0658-969896', 28, '2021-06-01 07:05:53', '2021-06-01 07:05:53'),
(7, 'Dodoma Jiji', 'Dodoma', '0658-987987', 24, '2021-06-09 14:57:19', '2021-06-09 14:57:19'),
(8, 'Dodoma Jiji', 'Dodoma', '0756-969696', 47, '2021-07-15 09:10:07', '2021-07-15 09:10:07'),
(9, 'Kinondoni', 'Dar es Salaam', '0755-696989', 50, '2021-07-15 09:30:31', '2021-07-15 09:30:31'),
(10, 'Dodoma Jiji', 'Dodoma', '0755-567834', 51, '2021-07-15 10:10:00', '2021-07-15 10:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `HouseNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baloziID` bigint(20) UNSIGNED DEFAULT NULL,
  `LocalGovtID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminID` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `HouseNumber`, `owner`, `phonenumber`, `baloziID`, `LocalGovtID`, `adminID`, `status`, `created_at`, `updated_at`) VALUES
(4, 'TDU/001', 'Inventore lorem', '0619-241267', 12, 'SM-0268', 28, 'Kupangisha', '2021-06-01 07:58:44', '2021-06-01 07:58:44'),
(7, 'TDU/004', 'Sit libero', '0935-214936', 15, 'SM-0268', 28, 'Kupangisha', '2021-06-01 07:59:31', '2021-06-01 07:59:31'),
(11, 'KSH/001', 'Deleniti voluptatem', '0731-351700', NULL, 'SM-0256', 2, 'Binafsi', '2021-06-01 08:01:42', '2021-06-01 08:01:42'),
(12, 'KSH/002', 'Perferendis nemo', '0678-319615', 1, 'SM-0256', 2, 'Binafsi', '2021-06-01 08:01:57', '2021-06-01 08:01:57'),
(13, 'KSH/003', 'Natus corporis', '0764-551512', 9, 'SM-0256', 2, 'Kupangisha', '2021-06-01 08:02:07', '2021-06-01 08:02:07'),
(14, 'KSH/004', 'Autem suscipit', '0686-083168', 1, 'SM-0256', 2, 'Binafsi', '2021-06-01 08:02:19', '2021-06-01 08:02:19'),
(15, 'KSH/005', 'Asperiores quia haru', '0735-275456', 3, 'SM-0256', 2, 'Kupangisha', '2021-06-01 08:02:40', '2021-06-01 08:02:40'),
(16, 'KSH/006', 'Nobis esse', '0773-296843', 1, 'SM-0256', 2, 'Binafsi', '2021-06-01 08:02:55', '2021-06-01 08:02:55'),
(17, 'KSH/007', 'Ullam nisi deleniti', '0692-646579', 1, 'SM-0256', 2, 'Binafsi', '2021-06-01 15:22:22', '2021-06-01 15:22:22'),
(24, 'LPL/102', 'Recusandae Est in a', '0227-426712', 28, 'SM-0200', 2, 'Kupangisha', '2021-06-26 16:17:28', '2021-06-26 16:17:28'),
(25, 'LPL/523', 'Odit et asperiores d', '0856-796313', 24, 'SM-0200', 2, 'Binafsi', '2021-06-26 16:17:40', '2021-06-26 16:17:40'),
(26, 'LPL/155', 'Molestiae maxime err', '0612-564407', 25, 'SM-0200', 2, 'Kupangisha', '2021-06-26 16:17:54', '2021-06-26 16:17:54'),
(27, 'LPL/553', 'Omnis voluptate quis', '0475-274628', 29, 'SM-0200', 2, 'Binafsi', '2021-06-26 16:18:05', '2021-06-26 16:18:05'),
(28, 'LPL/569', 'Dolores labore repel', '0949-293569', 24, 'SM-0200', 2, 'Kupangisha', '2021-06-26 16:18:15', '2021-06-26 16:18:15'),
(29, 'LPL/469', 'Blanditiis voluptate', '0518-786406', 26, 'SM-0200', 2, 'Kupangisha', '2021-06-26 16:18:22', '2021-06-26 16:18:22'),
(30, 'MMO/293', 'Et et nostrud nostru', '0275-129219', 35, 'SM-2222', 24, 'Binafsi', '2021-06-28 16:05:44', '2021-06-28 16:05:44'),
(31, 'MMO/489', 'Tenetur sunt harum', '0992-679233', 35, 'SM-2222', 24, 'Binafsi', '2021-06-28 16:05:59', '2021-06-28 16:05:59'),
(32, 'MMO/240', 'Ut nesciunt illum', '0295-928277', 32, 'SM-2222', 24, 'Binafsi', '2021-06-28 16:06:15', '2021-06-28 16:06:15'),
(35, 'KSH/008', 'Mr Idris Kambi', '0755-969696', 9, 'SM-0256', 2, 'Binafsi', '2021-07-13 17:02:54', '2021-07-13 17:02:54'),
(37, 'TDU/002', 'Mr Juma Lorenzo', '0756-987987', 65, 'SM-0268', 28, 'Binafsi', '2021-07-13 18:02:12', '2021-07-13 18:02:12'),
(38, 'TDU/003', 'Mrs Zaina Ramadhan', '0713-698532', 11, 'SM-0268', 28, 'Binafsi', '2021-07-13 18:02:38', '2021-07-13 18:02:38'),
(40, 'KSH/009', 'Mrs Halima Khamis', '0745-896321', 9, 'SM-0256', 2, 'Kupangisha', '2021-07-13 19:01:27', '2021-07-13 19:01:27'),
(41, 'KGU/001', 'Mrs Jane Doe', '0756-989898', NULL, 'SM-0800', 2, 'Kupangisha', '2021-07-15 06:00:46', '2021-07-15 06:00:46'),
(42, 'KGU/002', 'Mr Jalious Kajuru', '0765-984489', NULL, 'SM-0800', 2, 'Binafsi', '2021-07-15 06:02:10', '2021-07-15 06:02:10'),
(43, 'KGU/003', 'Mr Elliot Robot', '0764-696969', NULL, 'SM-0800', 2, 'Kupangisha', '2021-07-15 06:05:22', '2021-07-15 06:05:22'),
(44, 'SBS/001', 'Mr Gianluigi Buffon', '0755-632541', NULL, 'SM-0900', 47, 'Binafsi', '2021-07-15 09:14:11', '2021-07-15 09:14:11'),
(45, 'SBS/002', 'Mrs Hillary Clinton', '0755-963123', NULL, 'SM-0900', 47, 'Kupangisha', '2021-07-15 09:14:39', '2021-07-15 09:14:39'),
(46, 'SBN/001', 'Mr Andrea Ter Terstegen', '0755-363214', NULL, 'SM-9999', 51, 'Kupangisha', '2021-07-15 10:12:55', '2021-07-15 10:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `lgdetails`
--

CREATE TABLE `lgdetails` (
  `id` int(11) NOT NULL,
  `LocalGovtID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leader` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AfisaMtendaji` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ManagedBy` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lgdetails`
--

INSERT INTO `lgdetails` (`id`, `LocalGovtID`, `leader`, `AfisaMtendaji`, `region`, `district`, `ward`, `street`, `slp`, `phonenumber`, `user_id`, `ManagedBy`, `created_at`, `updated_at`) VALUES
(1, 'SM-0101', 'Mr Ally Juma Ally', 'Mrs Josephine Kimaro', 'Dodoma', 'Dodoma Jiji', 'Bangata', 'Ngulelo', 'SLP 589', '0756-658658', 27, 24, '2021-06-26 14:14:29', '2021-06-26 14:14:29'),
(2, 'SM-0200', 'Mr Daniel James', 'Mrs Amina Rashidi', 'Dar es Salaam', 'Ilala', 'Isaiah Lynn', 'Lester Paul', 'SLP 5689', '0789-082392', 21, 2, '2021-06-26 16:12:10', '2021-06-26 16:12:10'),
(3, 'SM-0256', 'Mr Jackson James', 'Mr Ally Mbarouk', 'Dar es Salaam', 'Ilala', 'Kibada', 'Shule', 'SLP 100', '0765-686888', 3, 2, '2021-05-27 06:06:56', '2021-05-27 06:06:56'),
(4, 'SM-0268', 'Mr Idris Kambi', 'Mr Daniel Kisanga', 'Ruvuma', 'Songea Mjini', 'Tandale', 'Uzuri', 'SLP 06574', '0756-565656', 29, 28, '2021-06-01 07:56:58', '2021-06-01 07:56:58'),
(5, 'SM-0303', 'Mrs Janeth Magufuli', 'Mrs Neema Mwinyimvua', 'Dodoma', 'Dodoma Jiji', 'Jackson Mccullough', 'Orlando Henderson', 'SLP 01230', '0749-975866', 25, 24, '2021-06-26 16:46:49', '2021-06-26 16:46:49'),
(6, 'SM-2222', 'Mr Utopolo Utopolo', 'Mr James Munisi', 'Dodoma', 'Dodoma Jiji', 'Mkakati', 'Mpango', 'SLP 54540', '0658-658658', 26, 24, '2021-06-28 16:00:36', '2021-06-28 16:00:36'),
(7, 'SM-0555', 'Mrs Mwanaidi Busungu', 'Mrs Najma Masoud', 'Dar es Salaam', 'Ilala', 'Kariakoo', 'Kongo', 'SLP 55889', '0756-985698', 23, 2, '2021-07-04 10:16:10', '2021-07-04 10:16:10'),
(8, 'SM-0800', 'Mr Peterson Mungure', 'Mr AbdulMajeed H. Njozi', 'Dar es Salaam', 'Ilala', 'Kibada', 'Gezaulole', 'SLP 69874', '0786-969696', 43, 2, '2021-07-15 05:51:33', '2021-07-15 05:51:33'),
(9, 'SM-0900', 'Mr Cristiano Ronaldo', 'Mr Juan Cuadrado', 'Dodoma', 'Dodoma Jiji', 'Sabasaba', 'Barabara ya 7', 'SLP 3410', '0755-987987', 48, 47, '2021-07-15 09:13:41', '2021-07-15 09:13:41'),
(10, 'SM-0956', 'kivoja', 'ramadhani', 'Dodoma', 'Dodoma Jiji', 'ilazo', 'makulu', 'SLP 500', '0755-567840', 49, 47, '2021-07-15 09:19:55', '2021-07-15 09:19:55'),
(11, 'SM-9999', 'Mr Lionel Messi', 'Mr Gerard Pique', 'Dodoma', 'Dodoma Jiji', 'Sabasaba', 'Barabara ya 8', 'SLP 9000', '0755-969696', 52, 51, '2021-07-15 10:12:12', '2021-07-15 10:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_04_165524_laratrust_setup_tables', 1),
(5, '2021_05_04_175705_create_cache_table', 1),
(6, '2021_05_14_190509_create_lgdetails_table', 2),
(7, '2021_05_18_135136_create_shinas_table', 3),
(8, '2021_05_19_183738_create_houses_table', 4),
(10, '2021_05_25_104444_create_districts_table', 5),
(11, '2021_05_25_104444_create_districtsadmins_table', 6),
(12, '2021_05_26_181055_create_places_table', 7),
(14, '2021_05_31_082302_create_ten_cell_leaders_table', 8),
(15, '2021_05_31_184031_create_houses_table', 9),
(16, '2021_05_31_200604_create_houses_table', 10),
(18, '2021_06_13_194322_create_residents_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user@app.com', '$2y$10$ezQJpHLjLYXanT49Mw3DouuDQigu5M35a8SzXMpOu8tVbZZmK8qlK', '2021-05-22 18:13:11'),
('caxo@mailinator.com', '$2y$10$c4lz/mw9BHdLX6UerNM2TesOLpWrmchsmzmsBEFSrw4V9W2VPocIC', '2021-06-09 15:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2021-05-10 04:29:45', '2021-05-10 04:29:45'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-05-10 04:29:45', '2021-05-10 04:29:45'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-05-10 04:29:45', '2021-05-10 04:29:45'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-05-10 04:29:45', '2021-05-10 04:29:45'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2021-05-10 04:29:45', '2021-05-10 04:29:45'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2021-05-10 04:29:45', '2021-05-10 04:29:45'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2021-05-10 04:29:45', '2021-05-10 04:29:45'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2021-05-10 04:29:45', '2021-05-10 04:29:45'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2021-05-10 04:29:45', '2021-05-10 04:29:45'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2021-05-10 04:29:45', '2021-05-10 04:29:45'),
(11, 'module_1_name-create', 'Create Module_1_name', 'Create Module_1_name', '2021-05-10 04:29:49', '2021-05-10 04:29:49'),
(12, 'module_1_name-read', 'Read Module_1_name', 'Read Module_1_name', '2021-05-10 04:29:50', '2021-05-10 04:29:50'),
(13, 'module_1_name-update', 'Update Module_1_name', 'Update Module_1_name', '2021-05-10 04:29:50', '2021-05-10 04:29:50'),
(14, 'module_1_name-delete', 'Delete Module_1_name', 'Delete Module_1_name', '2021-05-10 04:29:50', '2021-05-10 04:29:50');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(11, 4),
(12, 4),
(13, 4),
(14, 4);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `regionID` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`regionID`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dar es Salaam', NULL, NULL),
(2, 'Tanga', NULL, NULL),
(3, 'Kigoma', NULL, NULL),
(4, 'Arusha', NULL, NULL),
(5, 'Dodoma', NULL, NULL),
(6, 'Geita', NULL, NULL),
(7, 'Iringa', NULL, NULL),
(8, 'Kagera', NULL, NULL),
(9, 'Katavi', NULL, NULL),
(10, 'Kilimanjaro', NULL, NULL),
(11, 'Kusini Pemba', NULL, NULL),
(12, 'Kusini Unguja', NULL, NULL),
(13, 'Lindi', NULL, NULL),
(14, 'Manyara', NULL, NULL),
(15, 'Mara', NULL, NULL),
(16, 'Mbeya', NULL, NULL),
(17, 'Mjini Magharibi', NULL, NULL),
(18, 'Morogoro', NULL, NULL),
(19, 'Mtwara', NULL, NULL),
(20, 'Mwanza', NULL, NULL),
(21, 'Njombe', NULL, NULL),
(22, 'Pwani', NULL, NULL),
(23, 'Rukwa', NULL, NULL),
(24, 'Ruvuma', NULL, NULL),
(25, 'Shinyanga', NULL, NULL),
(26, 'Simiyu', NULL, NULL),
(27, 'Singida', NULL, NULL),
(28, 'Songwe', NULL, NULL),
(29, 'Tabora', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` bigint(11) NOT NULL,
  `resid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `marital` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Datekuhama` date DEFAULT NULL,
  `LocalGovtID` int(11) NOT NULL,
  `HouseID` bigint(20) UNSIGNED NOT NULL,
  `balozi` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `resid`, `firstname`, `middlename`, `lastname`, `phonenumber`, `gender`, `dob`, `marital`, `work`, `pic`, `status`, `Datekuhama`, `LocalGovtID`, `HouseID`, `balozi`, `created_at`, `updated_at`) VALUES
(4, '19960910-00001-00001-01', 'Hans', 'Ben', 'Joo', '0717250141', 'Kiume', '1996-09-10', 'Nimeoa', 'Engineer', '1_1623595770.jpg', NULL, NULL, 3, 14, 'Andrew Rose', '2021-06-26 06:11:38', '2021-06-26 06:11:38'),
(5, '19970525-00001-00001-10', 'Jafari', 'Ally', 'Mungiki', '+255752517369', 'Kiume', '1997-05-25', 'Nimeoa', 'Fundi Umeme', '10_1623596279.jpg', NULL, NULL, 6, 31, 'Howard Boyd', '2021-06-26 14:08:42', '2021-06-26 14:08:42'),
(6, '19860228-00001-00001-06', 'Remeki', 'Richard', 'Mvungi', '+255621561951', 'Kiume', '1986-02-28', 'Sijaoa', 'Engineer', '6_1623596098.jpg', NULL, NULL, 2, 26, 'Fatima Whitaker', '2021-06-26 16:19:27', '2021-06-26 16:19:27'),
(7, '19980125-00001-00001-12', 'Yasinta', 'Pascal', 'Tarimo', '+255768291175', 'Kike', '1998-01-25', 'Nimeolewa', 'Daktari', '12_1623596374.jpg', NULL, NULL, 2, 26, 'Fatima Whitaker', '2021-06-26 16:21:03', '2021-06-26 16:21:03'),
(8, '19850520-00001-00001-05', 'Racheal', 'Charles', 'Macha', '0768989693', 'Kike', '1985-05-20', 'Mjane', 'Mfanyabiashara', '5_1623596044.jpg', NULL, NULL, 4, 4, 'Lucius Hamilton', '2021-06-28 08:10:23', '2021-06-28 08:10:23'),
(9, '19970726-00001-00001-04', 'Idrisa', 'Ramadhani', 'Kambiaso', '0789696969', 'Kiume', '1997-07-27', 'Nimeoa', 'Fundi Simu', '4_1623595987.jpg', NULL, NULL, 4, 4, 'Lucius Hamilton', '2021-06-28 08:10:45', '2021-06-28 08:10:45'),
(10, '19940424-00001-00001-02', 'Humphrey', 'Benedict', 'Kaendele', '0768692120', 'Kiume', '1994-04-24', 'Mtalaka', 'Web developer', '2_1623595846.jpg', NULL, NULL, 3, 15, 'Jackson Peter', '2021-06-28 16:02:41', '2021-06-28 16:02:41'),
(11, '19950725-00001-00011-01', 'Salma', 'Ally', 'Haroun', '+255698745125', 'Kike', '1995-07-25', 'Sijaoa', 'Web developer', '13_1624908501.jpg', NULL, NULL, 3, 40, 'Maxine Miller', '2021-07-07 07:23:36', '2021-07-07 07:23:36'),
(15, '19960910-00001-00001-03', 'Godwin', 'Godfrey', 'Tarimo', '0717250140', 'Kiume', '1996-09-10', 'Sijaoa', 'Fundi Gereji', '3_1623595913.jpg', NULL, NULL, 3, 16, 'Andrew Rose', '2021-07-10 04:08:03', '2021-07-10 04:08:03'),
(16, '19980715-89076-17357-32', 'Arsenio', 'Tamekah', 'Patterson', '+255 442 458-9554', 'Kiume', '1988-07-15', 'Nimeoa', 'Engineer', 'gtg_1625040333.jpg', NULL, NULL, 3, 11, 'Andrew Rose', '2021-07-14 17:08:19', '2021-07-14 17:08:19'),
(17, '19970911-09990-77777-77', 'Damon', 'Fallon Watson', 'Moses', '+255 507 848-7507', 'Kiume', '1997-09-11', 'Sijaoa', 'fundi simu', 'download (2)_1625046093.jpg', NULL, NULL, 3, 35, 'Maxine Miller', '2021-07-14 17:29:52', '2021-07-14 17:29:52'),
(19, '19970320-21000-52000-11', 'Darrel', 'Ray', 'Wong', '+255744965626', 'Kiume', '1997-03-20', 'Nimeoa', 'mfanyabiashara', '1_1625043326.jpg', NULL, NULL, 8, 41, NULL, '2021-07-15 06:07:16', '2021-07-15 06:07:16'),
(20, '19890510-54120-37777-00', 'jennifer', 'Hakeem', 'Stewart', '+255684312477', 'Kike', '1989-05-10', 'Mjane', 'msusi', 'download (11)_1625043717.jpg', NULL, NULL, 8, 43, NULL, '2021-07-15 06:09:57', '2021-07-15 06:09:57'),
(23, '19930117-23000-65000-23', 'leila', 'hango', 'Millor', '+255 712 106-8896', 'Kike', '1993-01-17', 'Sijaolewa', 'mwanafunzi', 'download (13)_1625043808.jpg', NULL, NULL, 3, 11, NULL, '2021-07-20 04:53:51', '2021-07-20 04:53:51'),
(25, '19801214-45003-98003-98', 'Malachi', 'Jemima', 'Fernandez', '+255768291175', 'Kike', '1980-12-14', 'Sijaolewa', 'mama ntilie', 'download (10)_1625043601.jpg', NULL, NULL, 11, 46, NULL, '2021-07-20 05:56:08', '2021-07-20 05:56:08');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2021-05-10 04:29:45', '2021-05-10 04:29:45'),
(2, 'administrator', 'Administrator', 'Administrator', '2021-05-10 04:29:48', '2021-05-10 04:29:48'),
(3, 'user', 'User', 'User', '2021-05-10 04:29:49', '2021-05-10 04:29:49'),
(4, 'role_name', 'Role Name', 'Role Name', '2021-05-10 04:29:49', '2021-05-10 04:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User'),
(2, 2, 'App\\Models\\User'),
(3, 3, 'App\\Models\\User'),
(4, 4, 'App\\Models\\User'),
(2, 5, 'App\\Models\\User'),
(2, 6, 'App\\Models\\User'),
(3, 20, 'App\\Models\\User'),
(3, 21, 'App\\Models\\User'),
(3, 22, 'App\\Models\\User'),
(3, 23, 'App\\Models\\User'),
(2, 24, 'App\\Models\\User'),
(3, 25, 'App\\Models\\User'),
(3, 26, 'App\\Models\\User'),
(3, 27, 'App\\Models\\User'),
(2, 28, 'App\\Models\\User'),
(3, 29, 'App\\Models\\User'),
(3, 30, 'App\\Models\\User'),
(3, 38, 'App\\Models\\User'),
(3, 43, 'App\\Models\\User'),
(2, 47, 'App\\Models\\User'),
(3, 48, 'App\\Models\\User'),
(3, 49, 'App\\Models\\User'),
(2, 50, 'App\\Models\\User'),
(2, 51, 'App\\Models\\User'),
(3, 52, 'App\\Models\\User'),
(3, 53, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `tencellleaders`
--

CREATE TABLE `tencellleaders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LocalGovtID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tencellleaders`
--

INSERT INTO `tencellleaders` (`id`, `name`, `phonenumber`, `LocalGovtID`, `created_at`, `updated_at`) VALUES
(1, 'Andrew Rose', '0762-454500', 'SM-0256', '2021-05-31 06:06:31', '2021-05-31 06:06:31'),
(2, 'Iris Evans', '0681-641914', 'SM-0256', '2021-05-31 06:06:55', '2021-05-31 06:06:55'),
(3, 'Jackson Peter', '0678-946901', 'SM-0256', '2021-05-31 06:06:59', '2021-05-31 06:06:59'),
(8, 'Armand Mullen', '0655-174724', 'SM-0256', '2021-05-31 06:22:03', '2021-05-31 06:22:03'),
(9, 'Maxine Miller', '0724-164812', 'SM-0256', '2021-05-31 06:22:10', '2021-05-31 06:22:10'),
(10, 'Zachary Hubeid', '0677-765062', 'SM-0256', '2021-05-31 06:22:15', '2021-05-31 06:22:15'),
(11, 'Preston Young', '0714-316413', 'SM-0268', '2021-06-01 07:57:24', '2021-06-01 07:57:24'),
(12, 'Lucius Hamilton', '0742-444774', 'SM-0268', '2021-06-01 07:57:30', '2021-06-01 07:57:30'),
(15, 'Sylvester Bird', '0652-679907', 'SM-0268', '2021-06-01 07:57:46', '2021-06-01 07:57:46'),
(24, 'Rebecca Dorsey', '0747-493326', 'SM-0200', '2021-06-26 16:16:28', '2021-06-26 16:16:28'),
(25, 'Fatima Whitaker', '0218-047721', 'SM-0200', '2021-06-26 16:16:36', '2021-06-26 16:16:36'),
(26, 'Donovan Dalton', '0714-526666', 'SM-0200', '2021-06-26 16:16:40', '2021-06-26 16:16:40'),
(27, 'Jaden Cervantes', '0945-279798', 'SM-0200', '2021-06-26 16:16:43', '2021-06-26 16:16:43'),
(28, 'Rina Warner', '0769-942511', 'SM-0200', '2021-06-26 16:16:48', '2021-06-26 16:16:48'),
(29, 'Solomon Willis', '0731-752461', 'SM-0200', '2021-06-26 16:16:59', '2021-06-26 16:16:59'),
(30, 'Kyla Manning', '0671-759543', 'SM-2222', '2021-06-28 16:04:53', '2021-06-28 16:04:53'),
(31, 'Cyrus Shaffer', '0245-752581', 'SM-2222', '2021-06-28 16:04:56', '2021-06-28 16:04:56'),
(32, 'Gavin Vance', '0666-852252', 'SM-2222', '2021-06-28 16:05:02', '2021-06-28 16:05:02'),
(33, 'Kalia Logan', '0276-085324', 'SM-2222', '2021-06-28 16:05:05', '2021-06-28 16:05:05'),
(34, 'Harlan Green', '0842-032388', 'SM-2222', '2021-06-28 16:05:11', '2021-06-28 16:05:11'),
(35, 'Howard Boyd', '0418-788106', 'SM-2222', '2021-06-28 16:05:15', '2021-06-28 16:05:15'),
(36, 'Elliott Fitzgerald', '0731-641508', 'SM-0256', '2021-07-04 10:12:47', '2021-07-04 10:12:47'),
(64, 'Mr Lorenzo Insigne', '0756-658965', 'SM-0256', '2021-07-13 17:02:09', '2021-07-13 17:02:09'),
(65, 'Mr Emmanuel kisanga', '0755-987456', 'SM-0268', '2021-07-13 17:49:05', '2021-07-13 17:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `AddedBy` int(11) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `role`, `email`, `email_verified_at`, `AddedBy`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Superadministrator', 'superadministrator', 'superadministrator@app.com', NULL, 0, '$2y$10$pDEfq6ojXo3NJ9pw8CMiRuA8KwTchcnVUH8MToYl/APdqNx1ATF/O', NULL, '2021-05-10 04:29:46', '2021-05-10 04:29:46'),
(2, 'administrator', 'administrator', 'administrator@app.com', NULL, 1, '$2y$10$oj4WEZj4Pquxciihufm6Le7aOaXgrw.5l6SRwzQknaMulc7dm7uYa', '5PnE63rWAchbTXFTTx39cSWBK0nWdKEgG7Zl78yavawHUvPlE6VAPsfutW2X', '2021-05-10 04:29:49', '2021-05-10 04:29:49'),
(3, 'kisiwani', 'user', 'user@app.com', NULL, 2, '$2y$10$hsa95rR9LL/jy45SjAs7j.RZmq9IRT5H0smqtt0Co6Z4874v87Uti', '2aTmS7p1PS3YycKcCruFLKnOUMImnuzH2tZIZm0q6711zkSmZTdlCjah9yov', '2021-05-10 04:29:49', '2021-05-10 04:29:49'),
(12, 'heteqyge', 'administrator', 'qepaveqok@mailinator.com', NULL, 1, '$2y$10$Aj3vlC5VIolKTdaOELZ4T.rzYtnZ2ZECAHpYPXIYJP.izVbLsa/1.', NULL, '2021-05-12 12:03:07', '2021-05-12 12:03:07'),
(21, 'Lester Paul', 'user', 'gyfy@mailinator.com', NULL, 2, '$2y$10$m0KrmKSTV3gmGNQ4q1FbX.7LsqAbW24r5iQdAFUVR53BEAQsgBTUi', NULL, '2021-05-17 09:58:56', '2021-05-17 09:58:56'),
(22, 'volynyc', 'user', 'zuny@mailinator.com', NULL, 2, '$2y$10$p9xQn.WCCjTmFeVGBD4JoeKYcHsC70rcALD6gzYOzWEW4WCKRQAfK', NULL, '2021-05-17 10:08:49', '2021-05-17 10:08:49'),
(23, 'tuvetoty', 'user', 'niwiv@mailinator.com', NULL, 2, '$2y$10$pKEGehgW58ZQK7RCsvWLdOoDjCYUKAQwknttNSy921VeYS.LwuNCi', NULL, '2021-05-19 07:55:31', '2021-05-19 07:55:31'),
(24, 'juhygapogo', 'administrator', 'xelax@mailinator.com', NULL, 1, '$2y$10$xUMwRFi5glVDvQ7wjn674ew4C22VKNFMeXjVnIUBdkNhYF6fuGOqe', NULL, '2021-05-20 05:17:06', '2021-05-20 05:17:06'),
(25, 'Orlando Henderson', 'user', 'liwam@mailinator.com', NULL, 24, '$2y$10$rxLET8OWAvUHsE1b1LY46uyNUQNRymg.kVHelPdG39LCelVEwTJdC', NULL, '2021-05-20 05:17:49', '2021-05-20 05:17:49'),
(26, 'kumogedaxu', 'user', 'zuvadyxehe@mailinator.com', NULL, 24, '$2y$10$0Ght8mepYijlUAT9UDkDeuo0GL9oWxAs6jSLRa7IO4cLOnzVs/sAq', NULL, '2021-05-25 06:59:41', '2021-05-25 06:59:41'),
(27, 'kavohequfe', 'user', 'caxo@mailinator.com', NULL, 24, '$2y$10$2eS8Ipa/zXVSS.q.LyOP..uJ.EPGaQ5XnYsfjXFvvgoXC727q95YO', NULL, '2021-05-25 06:59:54', '2021-05-25 06:59:54'),
(28, 'hosana', 'administrator', 'hosan@gmail.com', NULL, 1, '$2y$10$dpKIrPK3otA3.yznF1nO3ex.7iveTwA4j1kp3EzGbAi/NQGhm6D1W', NULL, '2021-05-27 10:17:25', '2021-05-27 10:17:25'),
(29, 'idris', 'user', 'domyp@mailinator.com', NULL, 28, '$2y$10$vbtj0zW5ZnkIGPBamggJauassms71mTQ2UGRnHoCpJxDu.hGvV1Am', NULL, '2021-05-27 10:19:50', '2021-05-27 10:19:50'),
(30, 'lameck', 'user', 'lameck@mailinator.com', NULL, 2, '$2y$10$WJ9zONiRQZJlSFIYB9N/GOtOvl1/P80mZn0Zq3LzDuHsqd/L8bvDu', NULL, '2021-07-04 07:17:16', '2021-07-04 07:17:16'),
(38, 'jumatano', 'user', 'j5@gmail.com', NULL, 2, '$2y$10$DSRY2PKNWz6uWgsTT.5bOOS5fBbyJXoc7N7lWWu1S1w8fSYmroJJK', NULL, '2021-07-13 16:03:18', '2021-07-13 16:03:18'),
(43, 'kerberos', 'user', 'kerbe@gmail.com', NULL, 2, '$2y$10$jcBCxLUwzadmbts.Jdhr0OFSHC3KYwrS18iMBEoyajWK6m7gZwr0m', NULL, '2021-07-15 05:40:30', '2021-07-15 05:40:30'),
(47, 'benedict', 'administrator', 'hansben123@gmail.com', NULL, 1, '$2y$10$9R9X90beOwt33ICe9p6Vp.Spb6N9q2pdNuzTJZW.P4Z7G9wSVNXPm', NULL, '2021-07-15 09:08:41', '2021-07-15 09:08:41'),
(48, 'ronaldo', 'user', 'cr7@gmail.com', NULL, 47, '$2y$10$oKj2IzMlYBJOtwJivnTg.uguODpJnTicKAj1gE8YPkVtXnl44HvEe', NULL, '2021-07-15 09:11:34', '2021-07-15 09:11:34'),
(49, 'idriss', 'user', 'khan@gmail.com', NULL, 47, '$2y$10$ZZ6qMGfLVXMngDleoM8PUuYDGViPrDjxc2tIEjP1d8vkb0Z5qiE.W', NULL, '2021-07-15 09:17:40', '2021-07-15 09:17:40'),
(50, 'kambi', 'administrator', 'khani@gmail.com', NULL, 1, '$2y$10$PfVvrOm3fHw.onqBn/jZeOzytBvV4s6o92xM93tAzqXD.XgAh42ci', NULL, '2021-07-15 09:22:07', '2021-07-15 09:22:07'),
(51, 'kambiaso', 'administrator', 'kambiaso122@gmail.com', NULL, 1, '$2y$10$IEwhftGzt7eydcMPzWjsbO3DdsbvDYGHpZ/scKgpveESH5LAMHDUO', NULL, '2021-07-15 10:07:45', '2021-07-15 10:07:45'),
(52, 'messi', 'user', 'messi@gmail.com', NULL, 51, '$2y$10$X2UpTEZ3qdue6vteK0D9IuQPLZnvXuZz/j0lBDjguV2fsrCsNbGkG', NULL, '2021-07-15 10:10:54', '2021-07-15 10:10:54'),
(53, 'sonaqihop', 'user', 'kedu@mailinator.com', NULL, 2, '$2y$10$xOOFUuSTn3VsJuXU98b5UeZdnb8pJYl68h64t3ae3gzPxM/VpLYpq', NULL, '2021-07-20 04:39:36', '2021-07-20 04:39:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regionID` (`regionID`);

--
-- Indexes for table `districtsadmins`
--
ALTER TABLE `districtsadmins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districtsadmins_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `HouseNumber` (`HouseNumber`),
  ADD KEY `houses_baloziid_foreign` (`baloziID`),
  ADD KEY `houses_localgovtid_foreign` (`LocalGovtID`),
  ADD KEY `houses_adminid_foreign` (`adminID`);

--
-- Indexes for table `lgdetails`
--
ALTER TABLE `lgdetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lgdetails_localgovtid_unique` (`LocalGovtID`),
  ADD KEY `lgdetails_user_id_foreign` (`user_id`),
  ADD KEY `lgdetails_ManagedBy_foreign` (`ManagedBy`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`regionID`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `resid` (`resid`),
  ADD KEY `residents_localgovtid_foreign` (`LocalGovtID`),
  ADD KEY `residents_houseid_foreign` (`HouseID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `tencellleaders`
--
ALTER TABLE `tencellleaders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tencellleaders_localgovtid_foreign` (`LocalGovtID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `districtsadmins`
--
ALTER TABLE `districtsadmins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `lgdetails`
--
ALTER TABLE `lgdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `regionID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tencellleaders`
--
ALTER TABLE `tencellleaders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`regionID`) REFERENCES `regions` (`regionID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `districtsadmins`
--
ALTER TABLE `districtsadmins`
  ADD CONSTRAINT `districtsadmins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `houses`
--
ALTER TABLE `houses`
  ADD CONSTRAINT `houses_LocalGovtID_foreign` FOREIGN KEY (`LocalGovtID`) REFERENCES `lgdetails` (`LocalGovtID`) ON DELETE CASCADE,
  ADD CONSTRAINT `houses_adminid_foreign` FOREIGN KEY (`adminID`) REFERENCES `districtsadmins` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `houses_baloziid_foreign` FOREIGN KEY (`baloziID`) REFERENCES `tencellleaders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lgdetails`
--
ALTER TABLE `lgdetails`
  ADD CONSTRAINT `lgdetails_ManagedBy_foreign` FOREIGN KEY (`ManagedBy`) REFERENCES `districtsadmins` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lgdetails_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `residents`
--
ALTER TABLE `residents`
  ADD CONSTRAINT `residents_LocalGovtID_foreign` FOREIGN KEY (`LocalGovtID`) REFERENCES `lgdetails` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `residents_houseid_foreign` FOREIGN KEY (`HouseID`) REFERENCES `houses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tencellleaders`
--
ALTER TABLE `tencellleaders`
  ADD CONSTRAINT `tencellleaders_localgovtid_foreign` FOREIGN KEY (`LocalGovtID`) REFERENCES `lgdetails` (`LocalGovtID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
