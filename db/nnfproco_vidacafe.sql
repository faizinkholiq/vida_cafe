-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2023 at 11:30 PM
-- Server version: 10.3.37-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nnfproco_vidacafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `bgcolor` varchar(7) DEFAULT NULL,
  `fgcolor` varchar(7) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `bgcolor`, `fgcolor`) VALUES
(1, 'Area Espresso', '#2d98da', '#ffffff'),
(2, 'Robusta', '#a55eea', '#ffffff'),
(3, 'Kopi Kekinian', '#f7b731', '#ffffff'),
(4, 'Tea & Beverage', '#20bf6b', '#ffffff'),
(5, 'Juice', '#eb3b5a', '#ffffff');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` text NOT NULL,
  `icon` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `source` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `source`) VALUES
(43, '20210421223005.jpeg'),
(44, '20210421223018.jpeg'),
(45, '20210421223029.jpeg'),
(46, '20210421223038.jpeg'),
(47, '20210421223051.jpeg'),
(48, '20210421223102.jpeg'),
(49, '20210421223117.jpeg'),
(50, '20210421223130.jpeg'),
(51, '20210421223146.jpeg'),
(52, '20210421223205.jpeg'),
(53, '20210421223215.jpeg'),
(54, '20210421223253.jpeg'),
(55, '20210421223303.jpeg'),
(56, '20210421223326.jpeg'),
(57, '20210421223338.jpeg'),
(58, '20210421223408.jpeg'),
(59, '20210421223426.jpeg'),
(40, '20210421151548.jpeg'),
(41, '20210421152336.jpeg'),
(42, '20210421152746.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `order_no` int(10) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL,
  `showed` tinyint(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `name`, `email`, `message`, `time`, `showed`) VALUES
(7, 'Idw1k7v0s1', 'elina.throw.pichugina@inbox.ru', ' \r\n ??? ????????: +49182.00 ?. ??????? ? ?????? ??????? ? ??????? K44f0S  \r\n \r\n?????????: https://forms.yandex.ru/u/AAAAAvidacafe.nnf-pro.comBBBBB/success/', '2022-05-17 21:59:58', 0),
(8, 'Idpgc11ih9', 'brosalina.lina@list.ru', ' ????a?a ?????e??  \r\n?????????: https://docs.google.com/document/d/AAAvidacafe.nnf-pro.comBBB/view', '2022-09-02 17:13:14', 0),
(9, 'Willie P.', 'pat@aneesho.com', 'Do you need help with graphic design - brochures, banners, flyers, advertisements, social media posts, logos etc.?\r\n\r\nWe charge a low fixed monthly fee. Let me know if you\'re interested and would like to see our portfolio.\r\n\r\n \r\n\r\n', '2022-12-10 14:19:10', 0),
(3, 'Ibnu Khalim', 'inoe.site@yahoo.com', 'Semangat terus vida.. semoga selalu sukses', '2021-04-16 20:54:56', 1),
(4, 'Adam Khan', 'adam@gmail.com', 'Makanan disini enak enak, saran dong untuk vida bikin event musik pasti bagus deh', '2021-04-28 19:08:28', 1),
(6, 'Mila Anissa', 'mila.anisa@gmail.com', 'Suka banget.. suasana nya enak.. Free wifi lagi.. jadi betah', '2021-05-01 12:11:12', 1),
(5, 'Rokhman', 'ali..rokhman@gmail.com', 'Rekomended untuk tempat nongkrong', '2021-05-01 12:06:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(100) NOT NULL,
  `category` tinyint(1) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `special` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `favorite` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `price`, `photo`, `category`, `description`, `special`, `favorite`) VALUES
(77, 'Americano', 23000, '20210421222555.JPG', 1, '', 0, 0),
(78, 'BABY CINO', 15000, '20210421211654.jpeg', 2, '', 0, 0),
(13, 'Kopi Dewa Vida', 28000, '20210421215540.jpeg', 1, 'Secangkir kopi yang beraroma khas akan budaya, rasa rempah yang menghangatkan jiwa, terselip rasa manis didalamnya', 1, 0),
(14, 'Espresso Singgle', 18000, '20210421224700.jpeg', 1, '', 0, 0),
(15, 'Espresso Double', 20000, '20210421215334.jpeg', 1, '', 0, 0),
(16, 'Sanger Arabica', 25000, '20210427210616.jpg', 1, 'Memadukan rasa manisnya susu dan pahitnya kopi untuk menciptakan keseimbangan rasa', 0, 1),
(17, 'Sanger Machiato', 27000, '20210427210431.jpeg', 1, '', 0, 0),
(18, 'Cappucino', 27000, '20210421215043.JPG', 1, 'Terciptanya manis yang lembut tanpa menghilangkan rasa pahitnya kopi didalamnya, terselipkan rasa gurih yang terasa saat cicipan pertama', 0, 0),
(19, 'Coffee Latte', 30000, '20210421214810.JPG', 1, 'Perpaduan antara rasa dan rupa keselarasan manis, pahit dan rupa yang tertuang dalam secangkir kopi, cocok untukmu yang berjiwa seni', 0, 0),
(20, 'BABYSANGER', 15000, '20210421214724.jpeg', 1, '', 0, 0),
(21, 'PICCOLO', 20000, '20210421214705.jpeg', 1, '', 0, 0),
(22, 'KOPI TUBRUK', 23000, '20210421214644.jpeg', 1, 'Mengajarkan kepada kita bahwa tampilan diluar bukan cerminan isi, terlihat berantakan dan tak beraturan namun akan memberikan kenangan didalamnya', 0, 0),
(23, 'KOPI WINE', 40000, '20210421214623.jpeg', 1, '', 0, 0),
(24, 'KOPI FRENCH PRESS', 30000, '20210421214534.jpeg', 1, '', 0, 0),
(25, 'KOPI HITAM', 13000, '20210421220850.jpeg', 2, 'Cocok untukmu yang berjiwa petualang dimana kepahitan akan berakhir dengan sesuatu yang manis', 0, 0),
(26, 'KOPI SUSU', 18000, '20210421220804.jpeg', 2, 'Memadukan rasa manisnya susu dan pahitnya kopi untuk menciptakan keseimbangan rasa', 0, 0),
(27, 'KOPI OREO', 22000, '20210421214354.jpeg', 2, '', 0, 0),
(28, 'GEBETAN VIDA', 18000, '20210421214336.jpeg', 3, 'Identik dengan kata yang bermakna negatif, namun sebenarnya awal dari hubungan baik untuk menggapai mimpi', 0, 1),
(29, 'VIDA BERSANDAR', 20000, '20210421214309.jpeg', 3, 'Relaksasi diri sambil menikmati secangkir kopi untuk menumbuhkan sebuah gagasan problematika duniawi', 0, 0),
(30, 'VIDA BERLABUH', 20000, '20210427212158.jpeg', 3, 'Hasil dari petualangan yang panjang akan berlabuh di Vida', 0, 0),
(31, 'SENJA DI VIDA', 22000, '20210421214222.jpeg', 3, 'Senja mengajarkan kita bahwa apapun yang terjadi hari ini pasti akan berakhir indah begitu juga dengan Vida', 0, 0),
(32, 'CARAMEL LATTE JELLY', 25000, '20210421214129.jpeg', 3, '', 0, 0),
(33, 'HAZELNUT LATTE JELLY', 25000, '20210421214113.jpeg', 3, '', 0, 0),
(34, 'VANILLA LATTE JELLY', 25000, '20210421214055.jpeg', 3, '', 0, 0),
(35, 'COFFECADO', 30000, '20210421214020.JPG', 3, '', 0, 0),
(36, 'COFEE BEER', 25000, '20210421213902.jpeg', 3, '', 0, 0),
(37, 'BASIC TEA', 8000, '20210421213835.jpeg', 4, '', 0, 0),
(38, 'LYCEE TEA', 25000, '20210421213820.jpeg', 4, '', 0, 0),
(39, 'LEMON TEA', 20000, '20210421213723.jpeg', 4, '', 0, 0),
(40, 'PEACH TEA', 23000, '20210421213708.jpeg', 4, '', 0, 0),
(41, 'GREEN TEA', 20000, '20210421213450.jpeg', 4, '', 0, 0),
(42, 'GREEN TEA LATTE', 23000, '20210421213655.jpeg', 4, '', 0, 0),
(43, 'TEH TARIK', 20000, '20210421213612.jpeg', 4, '', 0, 0),
(44, 'MILO DOUBLE', 23000, '20210421213547.jpeg', 4, '', 0, 0),
(45, 'COKLAT PREMIUM', 25000, '20210421213435.jpeg', 4, '', 0, 0),
(46, 'MOJITO', 25000, '20210421213421.jpeg', 4, '', 0, 0),
(47, 'YOGURT', 25000, '20210421213357.jpeg', 4, '', 0, 0),
(49, 'TIMUN KURNIA', 18000, '20210421213337.JPG', 4, '', 0, 0),
(50, 'SINGGLE JUICE', 18000, '20210421213302.jpeg', 5, 'Alpukat, Semangka, Nanas, Mangga, Strawbery, Jeruk', 0, 0),
(51, 'TAHU CRISPY', 18000, '20210421213121.jpeg', 4, '', 0, 0),
(52, 'TEMPE CRSPY', 18000, '20210421213106.jpeg', 4, '', 0, 0),
(53, 'PISANG SCRISPY', 18000, '20210421213045.jpeg', 4, '', 0, 1),
(54, 'PISANG COKLAT', 20000, '20210421213032.jpeg', 4, '', 0, 0),
(55, 'SOSIS GORENG', 20000, '20210421212858.jpeg', 4, '', 0, 0),
(56, 'KRIPIK PANGSIT', 15000, '20210421212816.jpeg', 4, '', 0, 0),
(57, 'SINGKONG', 18000, '20210421212556.jpeg', 4, '', 0, 0),
(58, 'ONION RING', 20000, '20210421212542.jpeg', 4, '', 0, 0),
(59, 'FRENCH FRIES', 25000, '20210421212530.jpeg', 4, '', 0, 0),
(60, 'CHICKEN WINGS', 25000, '20210421212510.jpeg', 4, '', 0, 1),
(61, 'CIRENG', 18000, '20210421212458.jpeg', 4, '', 0, 0),
(62, 'OTAK-OTAK', 20000, '20210421212448.jpeg', 4, '', 0, 0),
(63, 'ROTI BAKAR', 20000, '20210421212416.jpeg', 4, '', 0, 0),
(64, 'MARTABAK MIE', 25000, '20210421212405.jpeg', 4, '', 0, 0),
(65, 'NASI GORENG TELUR', 20000, '20210421212349.jpeg', 4, '', 0, 0),
(66, 'NASI GORENG BAKSO', 25000, '20210421212318.jpeg', 4, '', 0, 0),
(67, 'NASI GORENG SOSIS', 25000, '20210421212305.jpeg', 4, '', 0, 0),
(68, 'NASI GORENG AYAM', 30000, '20210421212251.jpeg', 4, '', 0, 0),
(69, 'SMOKED CHICKEN NOODLE', 35000, '20210421212236.jpeg', 4, '', 1, 0),
(70, 'SMOKED CHICKEN RICE', 35000, '20210421212141.jpg', 4, '', 1, 0),
(71, 'RICE CHICKEN KATSU', 35000, '20210421211950.jpeg', 4, '', 0, 0),
(72, 'INDOMIE GORENG', 20000, '20210421211930.jpeg', 4, '', 0, 0),
(73, 'INDOMIE KUAH', 18000, '20210421211829.jpeg', 4, '', 0, 0),
(76, 'MILK SHAKE', 20000, '20210421211741.jpeg', 5, '', 0, 0),
(75, 'Kopi V60', 49000, '20210421211818.jpeg', 1, '', 0, 0),
(79, 'KOPI PANCONG', 10000, '20210421211644.jpeg', 1, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `story` text DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `cover` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `motto` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `description`, `story`, `logo`, `cover`, `address`, `city`, `state`, `zip`, `motto`) VALUES
(1, 'Vida Cafe & Bistro', 'Vida cafe&bistro,tempat nongkrong buat smua kalangan juga menerima resevasi baik acara formal maupun non formal. ', 'Berawal dari sebuah rutinitas dan senda gurau diteras untuk melepas penat kami ditemani secangkir kopi,berbagi cerita banyak hal dari hobby  sampai pekerjaan.kami yang hidup dari latar belakang berbeda yaitu(koki, barista juga lainnya) tetapi memiliki kecintaan yang sama sebagai penikmat kopi.\r\nDari sinilah tercetus sebuah ide untuk bekerja sama mendirikan kedai kopi dan resto.pada tanggal 02-02-2020 berdirilah VIDA CAFE&BISTRO,nama itu sepakat kami gunakan untuk usaha bersama. \r\nVida berasal dari bahasa spanyol yang berarti kehidupan, bisa diartikan memiliki rencana yang besar untuk kehidupan orang-orang yang ada disekitarnya. Kehidupan yang bukan sekedar hidup tetapi kehidupan yang berbahagia.\r\nVida  bertekad menghadirkan kopi yang berkualitas dengan harga yang ekonomis agar dapat dinikmati semua kalangan. \r\nAneka varietas kopi dari berbagai penjuru nusantara,dari jenis arabica dan robusta kami sajikan dalam bentuk ekspreso dan manual brewing.\r\nSemoga kehadiran vida dapat mewarnai dunia kopi dan menjadi legenda di Indonesia. Terima kasih', 'logo.png', 'cover.jpeg', 'Jalan Raya Pasar Minggu no 29b, Rt 008/Rw 02, Pancoran, Kec. Pancoran', 'Jakarta Selatan', 'DKI Jakarta', 12780, 'Orang pintar kebanyakan ide dan akhirnya tidak ada satu pun yang jadi kenyataan. Orang goblok cuma punya satu ide dan itu jadi kenyataan.');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `people` enum('1','2','3','4+') NOT NULL DEFAULT '1',
  `time` datetime NOT NULL,
  `contact` varchar(50) NOT NULL,
  `book_date` datetime NOT NULL,
  `status` enum('Approved','Refused') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `name`, `people`, `time`, `contact`, `book_date`, `status`) VALUES
(1, 'Test', '3', '2021-04-13 09:29:21', '00897567342', '0000-00-00 00:00:00', 'Refused'),
(2, 'Super Admin', '4+', '0000-00-00 00:00:00', '08975639274', '0000-00-00 00:00:00', 'Refused'),
(3, 'ibnu khalim', '1', '0000-00-00 00:00:00', '085713994548', '0000-00-00 00:00:00', 'Refused'),
(4, 'ibnu khalim', '1', '2021-04-02 00:00:00', '085713994548', '0000-00-00 00:00:00', 'Refused'),
(5, 'Welinda Re', '2', '2021-04-29 16:44:00', '085713994548', '2021-04-28 17:02:41', 'Refused'),
(6, 'Mohammad', '2', '2021-04-30 19:13:00', '085713994548', '2021-04-28 17:14:14', 'Refused'),
(7, 'Anton', '4+', '2021-04-28 18:20:00', '081314247114', '2021-04-28 18:21:25', 'Refused'),
(8, 'Nisa Ardani', '2', '2021-05-03 17:00:00', '085713994548', '2021-05-01 12:37:55', 'Refused'),
(9, 'Ibnu Khalim', '4+', '2021-06-17 19:30:00', '085713994548', '2021-06-13 19:23:02', 'Refused'),
(10, 'ali', '3', '2021-06-13 20:01:00', '081314247114', '2021-06-13 20:01:30', 'Refused'),
(11, 'Bambang', '2', '2023-02-06 20:38:00', '0182312312', '2023-02-04 20:38:40', NULL),
(12, 'jhdajhakhd', '2', '2023-02-04 21:00:00', '7821727', '2023-02-04 21:00:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(60) NOT NULL,
  `role` enum('owner','member') DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `role`, `avatar`, `active`) VALUES
(1, 'admin', 'a', 'Super Admin', 'owner', '20210425150156.png', 1),
(2, 'gondani', '125', 'ali', 'owner', NULL, 1),
(3, 'fanny', 'f', 'fanny', 'owner', NULL, 1),
(4, 'ican', 'i', 'ican', 'owner', NULL, 1),
(5, 'herman', 'h', 'herman', 'owner', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
