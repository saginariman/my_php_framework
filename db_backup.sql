-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.3.13-MariaDB-log - mariadb.org binary distribution
-- Операционная система:         Win32
-- HeidiSQL Версия:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных framework_php
CREATE DATABASE IF NOT EXISTS `framework_php` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `framework_php`;

-- Дамп структуры для таблица framework_php.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='Новости';

-- Дамп данных таблицы framework_php.news: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT IGNORE INTO `news` (`id`, `title`, `text`, `img`) VALUES
	(1, 'Превая статья', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ab nam facere? Itaque a fugiat consequatur maiores labore error sapiente exercitationem asperiores ex optio accusantium, rerum ullam aut corporis illum.', '1ef8491a8b1a55e954f0db1051b591ad.jpeg'),
	(2, 'Вторая статья', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ab nam facere? Itaque a fugiat consequatur maiores labore error sapiente exercitationem asperiores ex optio accusantium, rerum ullam aut corporis illum.', '173.jpg');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
