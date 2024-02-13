drop database if EXISTS pawii;

CREATE DATABASE pawii;

USE pawii;

CREATE TABLE `tipo` (  `id` int unsigned NOT NULL AUTO_INCREMENT,  `cod` int unsigned NOT NULL,  `nome` tinytext,  PRIMARY KEY (`id`) );

INSERT INTO `tipo` (`id`, `nome`) VALUES
(1, 'Presencial'),
(2, 'EaD (Educação a Distância)'),
(3, 'Semipresencial');

