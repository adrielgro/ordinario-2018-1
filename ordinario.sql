-- --------------------------------------------------------
-- Host:                         192.185.131.128
-- Versión del servidor:         5.6.32-78.1 - Percona Server (GPL), Release 78.1, Revision 8bb53b6
-- SO del servidor:              Linux
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para comerci8_ordinario
CREATE DATABASE IF NOT EXISTS `comerci8_ordinario` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `comerci8_ordinario`;

-- Volcando estructura para tabla comerci8_ordinario.cursos
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `profesor` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `id_profesor` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `FK_cursos_usuarios` (`id_profesor`),
  CONSTRAINT `FK_cursos_usuarios` FOREIGN KEY (`id_profesor`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla comerci8_ordinario.cursos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` (`id`, `nombre`, `profesor`, `id_profesor`) VALUES
	(1, 'Metodologia de la programacion', 'Tonatiuh', NULL),
	(2, 'Analisis', 'Everardo', NULL);
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;

-- Volcando estructura para tabla comerci8_ordinario.horarios
CREATE TABLE IF NOT EXISTS `horarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dia` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `hora_inicio` time NOT NULL DEFAULT '00:00:00',
  `hora_fin` time NOT NULL DEFAULT '00:00:00',
  `curso_id` int(11) unsigned NOT NULL,
  `salon_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_horarios_cursos` (`curso_id`),
  KEY `FK_horarios_salones` (`salon_id`),
  CONSTRAINT `FK_horarios_cursos` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`),
  CONSTRAINT `FK_horarios_salones` FOREIGN KEY (`salon_id`) REFERENCES `salones` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla comerci8_ordinario.horarios: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `horarios` DISABLE KEYS */;
INSERT INTO `horarios` (`id`, `dia`, `hora_inicio`, `hora_fin`, `curso_id`, `salon_id`) VALUES
	(1, 'Lunes', '14:00:00', '16:00:00', 1, 1),
	(2, 'Martes', '14:00:00', '16:00:00', 1, 2),
	(3, 'Martes', '16:00:00', '18:00:00', 2, 1),
	(4, 'Miercoles', '16:00:00', '18:00:00', 2, 2);
/*!40000 ALTER TABLE `horarios` ENABLE KEYS */;

-- Volcando estructura para tabla comerci8_ordinario.salones
CREATE TABLE IF NOT EXISTS `salones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `tipo_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `FK_salones_tipo_salones` (`tipo_id`),
  CONSTRAINT `FK_salones_tipo_salones` FOREIGN KEY (`tipo_id`) REFERENCES `tipo_salones` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla comerci8_ordinario.salones: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `salones` DISABLE KEYS */;
INSERT INTO `salones` (`id`, `nombre`, `tipo_id`) VALUES
	(1, 'LD2', 2),
	(2, 'LD1', 2);
/*!40000 ALTER TABLE `salones` ENABLE KEYS */;

-- Volcando estructura para tabla comerci8_ordinario.tipo_salones
CREATE TABLE IF NOT EXISTS `tipo_salones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla comerci8_ordinario.tipo_salones: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_salones` DISABLE KEYS */;
INSERT INTO `tipo_salones` (`id`, `nombre`) VALUES
	(1, 'Aula'),
	(2, 'Laboratorio');
/*!40000 ALTER TABLE `tipo_salones` ENABLE KEYS */;

-- Volcando estructura para tabla comerci8_ordinario.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla comerci8_ordinario.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`, `tipo`) VALUES
	(1, 'Adriel', 'adrielgro@gmail.com', 'tester', 0);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
