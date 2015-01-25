-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 25. Jan 2015 um 20:45
-- Server Version: 5.6.20
-- PHP-Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `abipool`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `contentdb`
--

CREATE TABLE IF NOT EXISTS `contentdb` (
`id` int(10) unsigned NOT NULL,
  `thumbimage` varchar(150) NOT NULL,
  `thumbtext` text NOT NULL,
  `time` decimal(20,0) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `content` varchar(150) NOT NULL,
  `tags` text NOT NULL,
  `title` varchar(150) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Daten für Tabelle `contentdb`
--

INSERT INTO `contentdb` (`id`, `thumbimage`, `thumbtext`, `time`, `subject`, `content`, `tags`, `title`) VALUES
(14, 'uploads/back.png', ' eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibu', '1422032522230', 'music', 'music_1422032522230_212.html', '', 'Test mit BILd'),
(15, '', 'asfasf', '1422032544922', 'french', 'french_1422032544922_213.html', '', 'sfasf'),
(16, 'uploads/14220328224221142269191.jpg', 'kakka', '1422032851867', 'maths', 'maths_1422032851867_214.html', '', 'test'),
(17, 'uploads/1422041459856-1783111291.jpg', 'is kakke', '1422041491873', 'info', 'info_1422041491873_215.html', '', 'ich bin');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
`id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `color` varchar(10) NOT NULL,
  `img` varchar(150) NOT NULL,
  `tag` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Daten für Tabelle `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `color`, `img`, `tag`) VALUES
(1, 'Chemie', '#8DB255', 'img/icons/chemi.png', 'chemi'),
(2, 'Mathematik', '#1F4788', 'img/icons/math.png', 'maths'),
(3, 'Franz&ouml;sisch', '#8F1D21', 'img/icons/french.png', 'french'),
(4, 'Musik', '#E29C45', 'img/icons/music.png', 'music'),
(5, 'Kunst', '#4DAF7C', 'img/icons/art.png', 'art'),
(6, 'Informatik', '#8d608c', 'img/icons/pc.png', 'info'),
(7, 'Sport', '#f9690e', 'img/icons/sport.png', 'sport'),
(8, 'Biologie', '#26a65b', 'img/icons/bio.png', 'bio'),
(9, 'Physik', '#4B77BE', 'img/icons/physics.png', 'physics'),
(10, 'Erdkunde', '#A17917', 'img/icons/geo.png', 'geo'),
(11, 'Politik', '#757D75', 'img/icons/politic.png', 'politic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contentdb`
--
ALTER TABLE `contentdb`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contentdb`
--
ALTER TABLE `contentdb`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
