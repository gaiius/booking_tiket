-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `film`;
CREATE TABLE `film` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `nama_film` varchar(50) NOT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `film` (`id_film`, `nama_film`) VALUES
(1,	'Ganteng ganteng sering galer');

DROP TABLE IF EXISTS `jadwal`;
CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `jadwal_jam` varchar(10) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `jadwal` (`id_jadwal`, `jadwal_jam`) VALUES
(1,	'00:01');

DROP TABLE IF EXISTS `kursi`;
CREATE TABLE `kursi` (
  `id_kursi` int(11) NOT NULL AUTO_INCREMENT,
  `urutan_angka` int(11) NOT NULL,
  `urutan_huruf` char(10) NOT NULL,
  PRIMARY KEY (`id_kursi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `kursi` (`id_kursi`, `urutan_angka`, `urutan_huruf`) VALUES
(1,	1,	'A'),
(2,	2,	'A'),
(3,	3,	'A'),
(4,	1,	'B'),
(5,	2,	'B'),
(6,	3,	'B');

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id_akun` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `terakhir_login` date NOT NULL,
  PRIMARY KEY (`id_akun`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `login` (`id_akun`, `nama_lengkap`, `username`, `password`, `terakhir_login`) VALUES
(1,	'fahmi nugraha',	'fahmi',	'202cb962ac59075b964b07152d234b70',	'2017-05-30'),
(2,	'fahmi rizky',	'rizky99',	'897c8fde25c5cc5270cda61425eed3c8',	'2014-07-17'),
(3,	'nugraha',	'nugraha',	'202cb962ac59075b964b07152d234b70',	'2017-04-01'),
(4,	'orang tamvan',	'tamvan',	'd41d8cd98f00b204e9800998ecf8427e',	'0000-00-00');

-- 2017-05-30 07:55:36
