-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Jan 2015 um 22:23
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Daten für Tabelle `contentdb`
--

INSERT INTO `contentdb` (`id`, `thumbimage`, `thumbtext`, `time`, `subject`, `content`, `tags`, `title`) VALUES
(3, 'none', '', '1421959175760', 'maths', 'maths_1421959175760_201.html', '', 'Test'),
(4, 'none', '', '1421960943421', 'french', 'french_1421960943421_202.html', '', 'Franzosen Kakka'),
(5, 'none', '', '1421961307311', 'art', 'art_1421961307311_203.html', '', 'Kunst ist kakke');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Daten für Tabelle `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `color`, `img`, `tag`) VALUES
(1, 'Chemi', '#8DB255', 'img/icons/chemi.png', 'chemi'),
(2, 'Mathematik', '#1F4788', 'img/icons/math.png', 'maths'),
(3, 'Franz&ouml;sisch', '#8F1D21', 'img/icons/french.png', 'french'),
(4, 'Musik', '#E29C45', 'img/icons/music.png', 'music'),
(5, 'Kunst', '#4DAF7C', 'img/icons/art.png', 'art');

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
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
