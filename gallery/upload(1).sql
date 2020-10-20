-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2018 at 08:28 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL,
  `img-title` varchar(255) NOT NULL,
  `img-desc` varchar(255) NOT NULL,
  `img` varchar(300) NOT NULL DEFAULT 'Not Null'
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `img-title`, `img-desc`, `img`) VALUES
(12, 'Our Nigerian Army Are Good Guys', 'Our Nigerian Army Are Good', 'gss.JPG'),
(14, 'Mc Fada Fada Show Live Update', 'Mc Fada Fada Show Live Update', 'under-buhari-lives-of-cows-more-important-than-humans-gov-nyesom-wike.jpg'),
(15, 'Me Minding My Own Business', 'Me Minding My Own Business In 2018', 'baby.jpeg'),
(17, 'Daddy Freeze And Samklef', 'Daddy Freeze And Samklef In A Fight', 'daddy-freeze-and-music-producer-samklef-fight-dirty-on-instagram.jpg'),
(19, 'Mr Eazi On The Microphone', 'Mr Eazi On The Microphone', 'eazy.png'),
(20, 'Wizkid The Joy Album', 'Wizkid The Joy Album Photo', 'Wizkid-newalbumart2-tooXclusive.jpg'),
(22, 'Esm Party Night Of Rap', 'Esm Party Night Of Rap', 'unemployment-is-the-reason-behind-the-high-rate-of-murder-in-nigeria-dangote.jpg'),
(23, 'Webtech Class Work Picture', 'Webtech Class Work Picture', 'images.jpeg'),
(24, 'Gallery Testing Upload One', 'Gallery Testing Upload One', 'between-ik-ogbonnas-wife-sonia-ogbonna-and-a-rude-fan-1.jpg'),
(27, 'Gallery Testing Upload One 2', 'Gallery Testing Upload One', 'headies-next-rated-has-reekado-banks-been-able-to-defend-his-win-against-kiss-daniel-lil-kesh.jpg'),
(29, 'Gallery Testing Upload One 6', 'Gallery Testing Upload One', 'we-will-not-return-to-you-abducted-chibok-girls-says-in-new-video.jpg'),
(30, 'Gallery Testing Upload One 7', 'Gallery Testing Upload One', '8531928749804864577.jpeg'),
(31, 'Gallery Testing Upload One 8', 'Gallery Testing Upload One', 'nintchdbpict000378370991.jpg'),
(32, 'Gallery Testing Upload One 9', 'Gallery Testing Upload One', 'oscar-nominations-announced-shape-of-water-leads-in-technical-categories.jpg'),
(33, 'Gallery Testing Upload One 10', 'Gallery Testing Upload One', '4010595bc2fc6ad28f5c971128bc4e84.jpg'),
(34, 'Gallery Testing Upload One 10', 'Gallery Testing Upload One', 'images.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
