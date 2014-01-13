-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Mar 08 Octobre 2013 à 08:34
-- Version du serveur: 5.5.32
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `siteweb`
--
CREATE DATABASE IF NOT EXISTS `aionscript` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aionscript`;

-- --------------------------------------------------------

--
-- Structure de la table `t_client`
--

CREATE TABLE IF NOT EXISTS `t_client` (
  `CLIE_ID` int(3) NOT NULL AUTO_INCREMENT,
  `CLIE_LOGIN` varchar(50) NOT NULL UNIQUE,
  `CLIE_NOM` varchar(50) NOT NULL,
  `CLIE_PRENOM` varchar(50) NOT NULL,
  `CLIE_ADRESSE` varchar(50) NOT NULL,
  `CLIE_CP` varchar(5) NOT NULL,
  `CLIE_VILLE` varchar(50) NOT NULL,
  `CLIE_COURRIEL` varchar(50) NOT NULL UNIQUE,
  `CLIE_MDP` varchar(50) NOT NULL,
  PRIMARY KEY (`CLIE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE USER 'userAS'@'localhost' IDENTIFIED BY  'as';

GRANT USAGE ON * . * TO  'userAS'@'localhost' IDENTIFIED BY  'as' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;

GRANT ALL PRIVILEGES ON  `aionscript` . * TO  'userAS'@'localhost';