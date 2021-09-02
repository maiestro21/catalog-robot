-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.20-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for catalog_roboti
CREATE DATABASE IF NOT EXISTS `catalog_roboti` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `catalog_roboti`;

-- Dumping structure for table catalog_roboti.producatori
CREATE TABLE IF NOT EXISTS `producatori` (
  `nume_producator` varchar(150) NOT NULL,
  `link_logo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table catalog_roboti.producatori: ~2 rows (approximately)
/*!40000 ALTER TABLE `producatori` DISABLE KEYS */;
INSERT INTO `producatori` (`nume_producator`, `link_logo`) VALUES
	('Fanuc', 'https://www.ttonline.ro/Files/Images/Companii/Fanuc/FANUC_Yellow-BG_4C_300px.jpg'),
	('Prod', 'https://www.fanuc.eu/~/media/corporate/products/generic/ban-3dh-prrange-4_480x320px.jpg?h=320&la=ro&w=480');
/*!40000 ALTER TABLE `producatori` ENABLE KEYS */;

-- Dumping structure for table catalog_roboti.roboti
CREATE TABLE IF NOT EXISTS `roboti` (
  `id_robot` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(150) NOT NULL,
  `nume_producator` varchar(150) NOT NULL,
  `nume` varchar(150) NOT NULL,
  `poza` varchar(150) NOT NULL,
  `scurta_descriere` varchar(150) NOT NULL,
  `lunga_descriere` text NOT NULL,
  `link_brosura` varchar(150) NOT NULL,
  `link_date_tehnice` varchar(150) NOT NULL,
  `link_cad` varchar(150) NOT NULL,
  `preview_cad` varchar(150) NOT NULL,
  `axe` varchar(150) NOT NULL DEFAULT '',
  `sarcina_maxima` varchar(150) NOT NULL DEFAULT '0',
  `nr_cicluri` varchar(150) NOT NULL DEFAULT '0',
  `orizontal` varchar(150) NOT NULL DEFAULT '0',
  `vertical` varchar(150) NOT NULL DEFAULT '0',
  `greutate` varchar(150) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_robot`),
  KEY `id_robot` (`id_robot`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table catalog_roboti.roboti: ~2 rows (approximately)
/*!40000 ALTER TABLE `roboti` DISABLE KEYS */;
INSERT INTO `roboti` (`id_robot`, `categorie`, `nume_producator`, `nume`, `poza`, `scurta_descriere`, `lunga_descriere`, `link_brosura`, `link_date_tehnice`, `link_cad`, `preview_cad`, `axe`, `sarcina_maxima`, `nr_cicluri`, `orizontal`, `vertical`, `greutate`) VALUES
	(1, 'Roboti colaborativi', 'Fanuc', 'CRX-10iA/L', 'https://www.fanuc.eu/~/media/corporate/products/robots/collaborative/crx/crx-10ia_left.jpg?w=400', '', '', 'https://www.fanuc.eu/~/media/files/pdf/products/robots/robots-datasheets-en/crx/datasheet%20crx-10ial.pdf?la=ro', 'https://www.fanuc.eu/~/media/files/pdf/products/robots/robots-datasheets-en/crx/datasheet%20crx-10ial.pdf?la=ro', 'https://www.fanuc.eu/~/media/files/pdf/products/robots/robots-datasheets-en/crx/datasheet%20crx-10ial.pdf?la=ro', 'https://damassets.autodesk.net/content/dam/autodesk/www/products/autocad/fy22/overview/images/autocad-web-app-2022-overview-video-poster-1152x648.jpg', '6', 'Nespecificat', 'Nespecificat', '1418 mm', 'Nespecificat', '10 kg'),
	(3, 'Robot demo2', 'Prod2', 'Robot 23', 'https://www.fanuc.eu/~/media/corporate/products/robots/collaborative/cr35ia/400x400/fea-pr-3dhw-cr35-l-1.jpg?w=400', 'asdasdasdas', 'dasdasdasdasdasdasd', 'https://www.fanuc.eu/~/media/files/pdf/products/robots/robots-datasheets-en/crx/datasheet%20crx-10ial.pdf?la=ro', 'https://www.fanuc.eu/~/media/files/pdf/products/robots/robots-datasheets-en/crx/datasheet%20crx-10ial.pdf?la=ro', 'https://www.fanuc.eu/~/media/files/pdf/products/robots/robots-datasheets-en/crx/datasheet%20crx-10ial.pdf?la=ro', '', '', '1', '1', '1', '01', '01');
/*!40000 ALTER TABLE `roboti` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
