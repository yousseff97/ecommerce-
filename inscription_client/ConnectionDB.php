<?php
class ConnectionDB
{
    private static $_dbname = "mcd";
    private static $_user = "root";
    private static $_pwd = "";
    private static $_host = "localhost";
    private static $_bdd = null;
    private function __construct()
    {
        try {
            /*
            self::$_bdd = new PDO("mysql:host=" . self::$_host . ";dbname="
            .self::$_dbname . ";charset=utf8", self::$_user, self::$_pwd,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));

            self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            */

            self::$_bdd = new PDO("mysql:host=" . self::$_host, self::$_user);
            self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $dbname = "`".str_replace("`","``",self::$_dbname)."`";
            self::$_bdd->query("CREATE DATABASE IF NOT EXISTS $dbname");
            self::$_bdd->query("use $dbname");

        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }


    public static function getInstance()
    {
        if (!self::$_bdd) {
            new ConnectionDB();
            self::$_bdd->query("
-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 04 Mai 2018 à 20:48
-- Version du serveur :  5.7.20-log
-- Version de PHP :  5.5.12

SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
SET time_zone = '+00:00';


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mcd`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `montant` float NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT 'enattente',
  `etat` varchar(255) NOT NULL,
  UNIQUE KEY `12` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`id`, `montant`, `description`, `etat`) VALUES
(16, 50, 'combo1:1', 'payé'),
(19, 100, '1517968966228:1', 'en attente');

--
-- Database: `mcd`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `FName` varchar(40) NOT NULL,
  `LName` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `date_p` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `CN` varchar(10) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `admin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FName`, `LName`, `Email`, `date_p`, `Password`, `CN`, `Adresse`, `admin`) VALUES
(1, 'Admin', 'Admin', 'Admin@gmail.com', '03/05/2018', 'admin', '01234567', 'Tunis', 1),
(2, 'User', 'User', 'User@gmail.com', '03/05/2018', 'user', '76543210', 'Tunis', 0);
COMMIT;

--
-- Base de données :  `bdmenu`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `image` longblob NOT NULL,
  `prix` float NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=236 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;"
            );
            return self::$_bdd;
        }
        return self::$_bdd;
    }
}

?>
