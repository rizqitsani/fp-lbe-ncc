-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.6015
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table pokemon.breeding
CREATE TABLE IF NOT EXISTS `breeding` (
  `Egg_Groups` varchar(250) NOT NULL,
  `Gender` varchar(60) NOT NULL,
  `Egg_Cycles` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pokemon.breeding: ~0 rows (approximately)
/*!40000 ALTER TABLE `breeding` DISABLE KEYS */;
/*!40000 ALTER TABLE `breeding` ENABLE KEYS */;

-- Dumping structure for table pokemon.egg_moves
CREATE TABLE IF NOT EXISTS `egg_moves` (
  `ID` int(11) NOT NULL,
  `Move` varchar(120) NOT NULL,
  `Type` varchar(60) NOT NULL,
  `Cat` varchar(40) NOT NULL,
  `Power` int(11) NOT NULL,
  `Acc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pokemon.egg_moves: ~0 rows (approximately)
/*!40000 ALTER TABLE `egg_moves` DISABLE KEYS */;
/*!40000 ALTER TABLE `egg_moves` ENABLE KEYS */;

-- Dumping structure for table pokemon.moves
CREATE TABLE IF NOT EXISTS `moves` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Type` varchar(60) NOT NULL,
  `Cat` varchar(30) NOT NULL,
  `Power` int(11) NOT NULL,
  `Acc` int(11) NOT NULL,
  `Pp` int(11) NOT NULL,
  `Effect` varchar(512) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pokemon.moves: ~0 rows (approximately)
/*!40000 ALTER TABLE `moves` DISABLE KEYS */;
/*!40000 ALTER TABLE `moves` ENABLE KEYS */;

-- Dumping structure for table pokemon.pokemon
CREATE TABLE IF NOT EXISTS `pokemon` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(250) NOT NULL,
  `Type` varchar(55) NOT NULL,
  `Species` varchar(60) NOT NULL,
  `Height` varchar(75) NOT NULL,
  `Weight` varchar(100) NOT NULL,
  `Abilities` varchar(120) NOT NULL,
  `Chenges` varchar(60) NOT NULL,
  `Attack` int(11) NOT NULL,
  `Health_Point` int(11) NOT NULL,
  `Speed` int(11) NOT NULL,
  `Speed_Attack` int(11) NOT NULL,
  `Speed_Defense` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pokemon.pokemon: ~0 rows (approximately)
/*!40000 ALTER TABLE `pokemon` DISABLE KEYS */;
/*!40000 ALTER TABLE `pokemon` ENABLE KEYS */;

-- Dumping structure for table pokemon.training
CREATE TABLE IF NOT EXISTS `training` (
  `Ev_Yield` varchar(120) NOT NULL,
  `Catch_Rate` varchar(55) NOT NULL,
  `Base_Friendship` varchar(55) NOT NULL,
  `Base_Exp` int(11) NOT NULL,
  `Growth_Rate` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pokemon.training: ~0 rows (approximately)
/*!40000 ALTER TABLE `training` DISABLE KEYS */;
/*!40000 ALTER TABLE `training` ENABLE KEYS */;

-- Dumping structure for table pokemon.type_defense
CREATE TABLE IF NOT EXISTS `type_defense` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Power` varchar(60) NOT NULL,
  `Point` float NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pokemon.type_defense: ~0 rows (approximately)
/*!40000 ALTER TABLE `type_defense` DISABLE KEYS */;
/*!40000 ALTER TABLE `type_defense` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
