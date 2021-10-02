-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 09:14 PM
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
-- Database: `residentverify`
--

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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_13_135545_create_residents_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resident_details`
--

CREATE TABLE `resident_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `resid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resident_details`
--

INSERT INTO `resident_details` (`id`, `firstname`, `middlename`, `lastname`, `phonenumber`, `gender`, `marital`, `work`, `birthdate`, `resid`, `pic`, `created_at`, `updated_at`) VALUES
(6, 'Hans', 'Ben', 'Joo', '0717250141', 'Kiume', 'Nimeoa', 'Mfanyabiashara', '1996-09-10', '19960910-00001-00001-01', '1_1623595770.jpg', '2021-06-13 11:49:30', '2021-06-13 11:49:30'),
(7, 'Humphrey', 'Benedict', 'Kaendele', '0768692120', 'Kiume', 'Mtalaka', 'Fundi Umeme', '1994-04-24', '19940424-00001-00001-02', '2_1623595846.jpg', '2021-06-13 11:50:46', '2021-06-13 11:50:46'),
(8, 'Godwin', 'Godfrey', 'Tarimo', '0717250140', 'Kiume', 'Sijaoa', 'Fundi Gereji', '1996-09-10', '19960910-00001-00001-03', '3_1623595913.jpg', '2021-06-13 11:51:53', '2021-06-13 11:51:53'),
(9, 'Idrisa', 'Ramadhani', 'Kambiaso', '0789696969', 'Kiume', 'Nimeoa', 'Fundi Simu', '1997-07-27', '19970726-00001-00001-04', '4_1623595987.jpg', '2021-06-13 11:53:07', '2021-06-13 11:53:07'),
(10, 'Racheal', 'Charles', 'Macha', '0768989693', 'Kike', 'Mjane', 'Mfanyabiashara', '1985-05-20', '19850520-00001-00001-05', '5_1623596044.jpg', '2021-06-13 11:54:04', '2021-06-13 11:54:04'),
(11, 'Remeki', 'Richard', 'Mvungi', '0745869856', 'Kiume', 'Sijaoa', 'Engineer', '1986-02-28', '19860228-00001-00001-06', '6_1623596098.jpg', '2021-06-13 11:54:58', '2021-06-13 11:54:58'),
(12, 'Haiker', 'Frazer', 'Chao', '0786565652', 'Kike', 'Sijaolewa', 'Daktari', '1990-09-10', '19900910-00001-00001-07', '7_1623596142.jpg', '2021-06-13 11:55:42', '2021-06-13 11:55:42'),
(13, 'Rose', 'Nehemiah', 'Msunga', '0657657657', 'Kike', 'Mtalaka', 'Muuguzi', '1995-05-05', '19550505-00001-00001-08', '8_1623596182.jpg', '2021-06-13 11:56:22', '2021-06-13 11:56:22'),
(14, 'Ramadhan', 'Mohammed', 'Kivoja', '0719233813', 'Kiume', 'Sijaoa', 'Fundi Umeme', '1997-07-26', '19970726-00001-00001-09', '9_1623596227.jpg', '2021-06-13 11:57:07', '2021-06-13 11:57:07'),
(15, 'Jafari', 'Ally', 'Mungiki', '0738696987', 'Kiume', 'Nimeoa', 'Fundi Umeme', '1997-05-25', '19970525-00001-00001-10', '10_1623596279.jpg', '2021-06-13 11:57:59', '2021-06-13 11:57:59'),
(16, 'Hamisi', 'Paul', 'Mwalugaje', '0756896987', 'Kiume', 'Nimeoa', 'Engineer', '1995-06-26', '19950616-00001-00001-11', '11_1623596323.jpg', '2021-06-13 11:58:43', '2021-06-13 11:58:43'),
(17, 'Yasinta', 'Pascal', 'Tarimo', '0786987987', 'Kike', 'Nimeolewa', 'Daktari', '1998-01-25', '19980125-00001-00001-12', '12_1623596374.jpg', '2021-06-13 11:59:34', '2021-06-13 11:59:34'),
(18, 'Salma', 'Ally', 'Haroun', '+255698745125', 'Kike', 'Sijaoa', 'Web developer', '1995-07-25', '19950725-00001-00011-01', '13_1624908501.jpg', '2021-06-28 16:28:22', '2021-06-28 16:28:22'),
(19, 'Arsenio', 'Tamekah', 'Patterson', '+255 442 458-9554', 'Kiume', 'Nimeoa', 'Necessitatibus', '1988-07-15', '19980715-89076-17357-32', 'gtg_1625040333.jpg', '2021-06-30 05:05:33', '2021-06-30 05:05:33'),
(20, 'Darrel', 'Ray', 'Wong', '+255 905 509-6589', 'Kiume', 'Nimeoa', 'mfanyabiashara', '1997-03-20', '19970320-21000-52000-11', '1_1625043326.jpg', '2021-06-30 05:55:26', '2021-06-30 05:55:26'),
(21, 'zakia', 'Alexa', 'Weaver', '+255 769 375-8651', 'Kike', 'Nimeolewa', 'fundi cherehani', '1987-02-16', '19870216-52000-12000-12', ' 8_1625043461.jpg', '2021-06-30 05:57:41', '2021-06-30 05:57:41'),
(22, 'Conan', 'Rose', 'Levy', '+255 628 869-8788', 'Kike', 'Nimeolewa', 'mk', '1983-12-25', '19831225-34000-90000-09', 'download (9)_1625043521.jpg', '2021-06-30 05:58:41', '2021-06-30 05:58:41'),
(23, 'Malachi', 'Jemima', 'Fernandez', '+255 146 126-6445', 'Kike', 'Sijaolewa', 'mama ntilie', '1980-12-14', '19801214-45003-98003-98', 'download (10)_1625043601.jpg', '2021-06-30 06:00:01', '2021-06-30 06:00:01'),
(24, 'jennifer', 'Hakeem', 'Stewart', '+255 178 763-8772', 'Kike', 'Mjane', 'msusi', '1989-05-10', '19890510-54120-37777-00', 'download (11)_1625043717.jpg', '2021-06-30 06:01:57', '2021-06-30 06:01:57'),
(25, 'leila', 'hango', 'Millor', '+255 712 106-8896', 'Kike', 'Sijaolewa', 'mwanafunzi', '1993-01-17', '19930117-23000-65000-23', 'download (13)_1625043808.jpg', '2021-06-30 06:03:28', '2021-06-30 06:03:28'),
(26, 'shamimu', 'abdallah', 'salum', '+255 265 242-1909', 'Kike', 'Mjane', 'mama ntilie', '1994-08-27', '19940827-54000-90898-99', 'download (14)_1625043876.jpg', '2021-06-30 06:04:36', '2021-06-30 06:04:36'),
(27, 'swalha', 'omari', 'esya', '+255 232 395-7466', 'Kike', 'Mjane', 'mhasibu', '1981-01-01', '19810101-00012-65432-09', 'download (17)_1625043954.jpg', '2021-06-30 06:05:54', '2021-06-30 06:05:54'),
(28, 'Monalisa', 'setfod', 'Singleton', '+255 503 369-9512', 'Kike', 'Nimeolewa', 'mtumishi wa mungu', '1965-09-12', '19650912-09876-09655-00', 'images_1625044077.jpg', '2021-06-30 06:07:57', '2021-06-30 06:07:57'),
(29, 'Imanuela', 'Hahn', 'Valentine', '+255 707 886-1189', 'Kike', 'Sijaolewa', 'mwanafunzi', '1998-01-19', '19980119-10001-87111-65', 'images (11)_1625044159.jpg', '2021-06-30 06:09:19', '2021-06-30 06:09:19'),
(30, 'Cholotter', 'Ava', 'Hudson', '+255 169 125-2947', 'Kike', 'Sijaolewa', 'engineer', '1991-12-25', '19911225-42000-12000-11', 'images (8)_1625044229.jpg', '2021-06-30 06:10:29', '2021-06-30 06:10:29'),
(31, 'angela', 'Clare', 'Mannusa', '+255 948 238-9988', 'Kike', 'Nimeolewa', 'muuguzi', '1987-05-25', '19870525-23029-98720-02', 'images (5)_1625044328.jpg', '2021-06-30 06:12:08', '2021-06-30 06:12:08'),
(32, 'subira', 'ayubu', 'mwiru', '+255 554 101-6243', 'Kike', 'Nimeolewa', 'mjasiriamali', '1997-01-06', '19970106-01768-45132-76', 'images (3)_1625044425.jpg', '2021-06-30 06:13:45', '2021-06-30 06:13:45'),
(33, 'evaline', 'device', 'churi', '+255 156 244-3669', 'Kike', 'Nimeolewa', 'daktari', '1991-12-07', '19911207-16541-87690-32', 'images (2)_1625044500.jpg', '2021-06-30 06:15:00', '2021-06-30 06:15:00'),
(34, 'Deacon', 'Basil Odonnell', 'Fischer', '+255 363 206-5616', 'Kiume', 'Nimeoa', 'mwalimu', '1975-06-29', '19750629-41000-65111-88', 'download (6)_1625044565.jpg', '2021-06-30 06:16:05', '2021-06-30 06:16:05'),
(35, 'shabani', 'rashidi', 'iqwe', '+255 732 549-4867', 'Kiume', 'Sijaoa', 'dereva', '1996-05-09', '19960509-21333-89700-00', 'download (7)_1625044642.jpg', '2021-06-30 06:17:22', '2021-06-30 06:17:22'),
(36, 'regnand', 'malingumu', 'kapesa', '+255 835 835-5879', 'Kiume', 'Nimeoa', 'mku', '1922-10-09', '19221009-52000-87655-22', 'images (13)_1625044757.jpg', '2021-06-30 06:19:17', '2021-06-30 06:19:17'),
(37, 'Ivan', 'Julian', 'Sharpe', '+255 578 269-7944', 'Kiume', 'Nimeoa', 'seremala', '1922-06-22', '19220622-28798-09878-00', 'images (13)_1625044906.jpg', '2021-06-30 06:21:46', '2021-06-30 06:21:46'),
(38, 'julius', 'Bernard', 'Garrison', '+255 194 539-5376', 'Kiume', 'Sijaoa', 'fundi bomba', '1976-09-06', '19760906-10001-12000-19', 'download (12)_1625045005.jpg', '2021-06-30 06:23:25', '2021-06-30 06:23:25'),
(39, 'Shafii', 'omar', 'Mohammed', '+255 887 929-5535', 'Kiume', 'Nimeoa', 'mwanasheria', '1995-07-15', '19950715-24000-11000-24', 'download (16)_1625045090.jpg', '2021-06-30 06:24:50', '2021-06-30 06:24:50'),
(40, 'Alexander', 'Amelia', 'Tyson', '+255 439 842-5748', 'Kiume', 'Nimeoa', 'dereva', '1990-11-02', '19901102-13443-98076-66', 'download (15)_1625045157.jpg', '2021-06-30 06:25:57', '2021-06-30 06:25:57'),
(41, 'Sharon', 'Myles', 'Reynolds', '+255 252 738-1178', 'Kiume', 'Nimeoa', 'kinyozi', '1994-05-20', '19940520-32000-22000-99', 'download (3)_1625045230.jpg', '2021-06-30 06:27:10', '2021-06-30 06:27:10'),
(42, 'mlacha', 'kimario', 'kweka', '+255 762 102-5019', 'Kiume', 'Nimeoa', 'mfanyabiashara', '1968-03-27', '19680327-09897-12000-21', 'images (1)_1625045311.jpg', '2021-06-30 06:28:31', '2021-06-30 06:28:31'),
(43, 'Kerrson', 'mwakyusa', 'mwendi', '+255 941 299-2686', 'Kiume', 'Sijaoa', 'muimbaji', '1994-06-06', '19940606-22222-54222-22', 'images (4)_1625045387.jpg', '2021-06-30 06:29:47', '2021-06-30 06:29:47'),
(44, 'fulko', 'matembo', 'Watelo', '+255 795 225-9022', 'Kiume', 'Nimeoa', 'kondakta', '1996-01-20', '19960120-29299-89000-88', 'images (7)_1625045468.jpg', '2021-06-30 06:31:08', '2021-06-30 06:31:08'),
(45, 'Never', 'tegere', 'Mitchell', '+255 644 962-8734', 'Kiume', 'Nimeoa', 'mchezaji', '1974-01-24', '19740124-02222-21000-22', 'images (6)_1625045531.jpg', '2021-06-30 06:32:11', '2021-06-30 06:32:11'),
(46, 'kayumba', 'richard', 'rweyemamu', '+255 696 604-5895', 'Kiume', 'Nimeoa', 'musician', '1999-07-13', '19990713-54111-87900-12', 'images (9)_1625045622.jpg', '2021-06-30 06:33:42', '2021-06-30 06:33:42'),
(47, 'jafari', 'msafiri', 'ally', '+255 948 671-9215', 'Kiume', 'Sijaoa', 'IT Manager', '1998-09-26', '19980926-54000-12000-00', 'download (4)_1625045736.jpg', '2021-06-30 06:35:36', '2021-06-30 06:35:36'),
(48, 'wema', 'sikazwe', 'richael', '+255 813 756-5859', 'Kiume', 'Nimeolewa', 'hakimu', '1990-03-21', '19900321-23111-11811-11', 'images (10)_1625045816.jpg', '2021-06-30 06:36:56', '2021-06-30 06:36:56'),
(49, 'jumanne', 'Lucas', 'Langia', '+255 958 147-8028', 'Kiume', 'Nimeoa', 'rubani', '1972-12-26', '19721226-24244-09990-00', 'images (12)_1625045895.jpg', '2021-06-30 06:38:15', '2021-06-30 06:38:15'),
(50, 'Damon', 'Fallon Watson', 'Moses', '+255 507 848-7507', 'Kiume', 'Nimeoa', 'fundi simu', '1997-09-11', '19970911-09990-77777-77', 'download (2)_1625046093.jpg', '2021-06-30 06:41:33', '2021-06-30 06:41:33'),
(51, 'Tashya', 'Idona Smith', 'Leach', '+255 968 405-6692', 'Kiume', 'Nimeoa', 'MCHUNGAJI', '1981-09-20', '19810920-45326-98721-00', 'download (5)_1625058321.jpg', '2021-06-30 10:05:21', '2021-06-30 10:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `resident_details`
--
ALTER TABLE `resident_details`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resident_details`
--
ALTER TABLE `resident_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
