-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 17, 2018 at 02:31 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `firstName` char(30) NOT NULL,
  `lastName` char(30) NOT NULL,
  `email` text NOT NULL,
  `phoneNumber` bigint(30) NOT NULL,
  `country` char(30) NOT NULL,
  `city` char(30) NOT NULL,
  `streetAndHouseNumber` text NOT NULL,
  `postalCode` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `firstName`, `lastName`, `email`, `phoneNumber`, `country`, `city`, `streetAndHouseNumber`, `postalCode`) VALUES
(1, 'Selia', 'Thurlbeck', 'sthurlbeck0@4shared.com', 4319429242, 'Benin', 'Pobé', '51353 Meadow Valley Drive', 48289),
(2, 'Demetra', 'Verdon', 'dverdon1@miibeian.gov.cn', 1903415191, 'Luxembourg', 'Kopstal', '464 Porter Parkway', 28191),
(3, 'Somerset', 'Roddick', 'sroddick2@wired.com', 3344990268, 'France', 'Brive-la-Gaillarde', '784 Pawling Crossing', 19318),
(4, 'Mead', 'Cecere', 'mcecere3@imageshack.us', 7386273344, 'Bangladesh', 'Nalchiti', '285 Sunfield Point', 84218),
(5, 'Marcos', 'Marling', 'mmarling4@elpais.com', 8944833416, 'China', 'Shimen', '9429 Westend Avenue', 49832),
(6, 'Graeme', 'Bonin', 'gbonin5@stumbleupon.com', 8049923175, 'Croatia', 'Viškovci', '47 Tennessee Crossing', 34310),
(7, 'Rem', 'Kalinsky', 'rkalinsky6@barnesandnoble.com', 9354076485, 'China', 'Nanqiao', '5 Colorado Parkway', 48939),
(8, 'Helena', 'Lindemann', 'hlindemann7@mtv.com', 7446563131, 'Cameroon', 'Douala', '024 Stone Corner Circle', 79315),
(9, 'Rosetta', 'Halward', 'rhalward8@hugedomains.com', 4088781291, 'Russia', 'Slyudyanka', '8928 Weeping Birch Hill', 65911),
(10, 'Gay', 'Domney', 'gdomney9@blogspot.com', 4039093644, 'Laos', 'Muang Xay', '800 Dennis Lane', 82394),
(11, 'Blakelee', 'Beviss', 'bbevissa@fema.gov', 3437080551, 'Mexico', 'Benito Juarez', '9777 Carey Way', 91716),
(12, 'Chevalier', 'Whitrod', 'cwhitrodb@nationalgeographic.com', 1299835493, 'Philippines', 'Ternate', '862 Oriole Trail', 41151),
(13, 'Maurice', 'Golding', 'mgoldingc@bravesites.com', 2724715379, 'Dominican Republic', 'Sabana Grande de Palenque', '52 Mandrake Alley', 11704),
(14, 'Ellwood', 'Gerardi', 'egerardid@slashdot.org', 8759030167, 'China', 'Mingjing', '8 Anthes Way', 79263),
(15, 'Douglass', 'Jann', 'djanne@yolasite.com', 4155174565, 'United States', 'San Francisco', '870 Scoville Terrace', 94159),
(16, 'Margeaux', 'McWhin', 'mmcwhinf@mac.com', 4017318132, 'Malaysia', 'Johor Bahru', '2 Walton Pass', 80560),
(17, 'Gratiana', 'Windsor', 'gwindsorg@bizjournals.com', 4567548444, 'Russia', 'Kurkino', '59389 Arapahoe Avenue', 30363),
(18, 'Camila', 'Halfhead', 'chalfheadh@cdc.gov', 1054855365, 'Germany', 'Dillenburg', '44 Dottie Alley', 35687),
(19, 'Sindee', 'Simonou', 'ssimonoui@bigcartel.com', 3008137410, 'Ukraine', 'Dobryanka', '038 Almo Terrace', 79214),
(20, 'Milli', 'Overland', 'moverlandj@ovh.net', 4527215503, 'Pakistan', 'Fort Abbas', '121 Green Ridge Pass', 62021),
(21, 'Salem', 'Gladtbach', 'sgladtbachk@comsenz.com', 8393812229, 'Peru', 'Yanahuaya', '4093 Prairie Rose Center', 75631),
(22, 'Junie', 'Ashment', 'jashmentl@twitpic.com', 2636251933, 'Greece', 'Néa Flogitá', '957 4th Road', 82196),
(23, 'Wakefield', 'Dering', 'wderingm@slate.com', 2676801332, 'United States', 'Philadelphia', '6964 Fordem Center', 19120),
(24, 'Finley', 'Harrismith', 'fharrismithn@sciencedaily.com', 9083000800, 'Ukraine', 'Andrushivka', '34 Bartelt Drive', 14328),
(25, 'Pace', 'Ivermee', 'pivermeeo@cyberchimps.com', 4744814932, 'Indonesia', 'Bedayu', '13 Clove Point', 87362),
(26, 'Chick', 'Beelby', 'cbeelbyp@paginegialle.it', 6544824932, 'Yemen', 'Mawza‘', '3 Brentwood Center', 79256),
(27, 'Yancey', 'Sporrij', 'ysporrijq@dmoz.org', 5065199809, 'Portugal', 'Ribeira', '9 Cottonwood Crossing', 46480),
(28, 'Rasia', 'Somner', 'rsomnerr@engadget.com', 8591378650, 'Poland', 'Osieczna', '08304 Ohio Way', 83242),
(29, 'Lockwood', 'Elves', 'lelvess@reuters.com', 8933123548, 'China', 'Balitai', '3 Sloan Place', 41236),
(30, 'Henrieta', 'Balnave', 'hbalnavet@webs.com', 5341117595, 'Brazil', 'Pará de Minas', '4095 Eliot Alley', 35662),
(31, 'Federico', 'Streeter', 'fstreeteru@zdnet.com', 7989572767, 'China', 'Mulong', '0 Sundown Crossing', 79631),
(32, 'Pamela', 'Sinnie', 'psinniev@mlb.com', 9386009094, 'Dominican Republic', 'Azua', '621 Randy Drive', 10607),
(33, 'Jacintha', 'Andrez', 'jandrezw@jugem.jp', 7438382832, 'Azerbaijan', 'Sirvan', '37 Burrows Terrace', 79123),
(34, 'Bendix', 'Frichley', 'bfrichleyx@shareasale.com', 7443675173, 'Poland', 'Filipowice', '4619 Judy Alley', 32327),
(35, 'Henrieta', 'Coger', 'hcogery@ucla.edu', 9681543483, 'Portugal', 'Castanheira do Campo', '021 Spohn Point', 30511),
(36, 'Ashlie', 'Sainsbury', 'asainsburyz@hatena.ne.jp', 1132149420, 'France', 'Ivry-sur-Seine', '60 Butternut Terrace', 94209),
(37, 'Gayler', 'Dafter', 'gdafter10@sciencedirect.com', 2829172178, 'Serbia', 'Medveda', '8 Bay Lane', 46932),
(38, 'Charmian', 'Strang', 'cstrang11@wired.com', 8826948841, 'China', 'Shangde', '0 6th Avenue', 49732),
(39, 'Tommie', 'Magister', 'tmagister12@csmonitor.com', 6747803986, 'New Caledonia', 'Dumbéa', '7430 Crowley Center', 98839),
(40, 'Thorin', 'Benadette', 'tbenadette13@sun.com', 2731033019, 'Republic of the Congo', 'Kampene', '675 Anderson Court', 49328),
(41, 'Joanna', 'Langridge', 'jlangridge14@answers.com', 7729256725, 'China', 'Jiaotan', '48 Forest Dale Circle', 87236),
(42, 'Jermain', 'Heathcoat', 'jheathcoat15@upenn.edu', 8561825344, 'Dominican Republic', 'Salsipuedes', '566 Annamark Parkway', 11005),
(43, 'Levey', 'Armfield', 'larmfield16@nps.gov', 9204959906, 'Indonesia', 'Sinarbakti', '2633 Blue Bill Park Center', 89246),
(44, 'Inger', 'Frayne', 'ifrayne17@mysql.com', 8204794282, 'Brazil', 'Ipatinga', '78623 Eliot Trail', 35160),
(45, 'Dario', 'Ray', 'dray18@kickstarter.com', 4955704252, 'Poland', 'Koniaków', '22 Hazelcrest Circle', 43474),
(46, 'Inessa', 'Vedenichev', 'ivedenichev19@fotki.com', 8713731925, 'China', 'Rushanzhai', '23 Gateway Circle', 86549),
(47, 'Helsa', 'Baughen', 'hbaughen1a@ibm.com', 5049464916, 'Afghanistan', 'Paghman', '641 Moulton Lane', 47962),
(48, 'Charis', 'Walbridge', 'cwalbridge1b@nps.gov', 5122060965, 'Russia', 'Vereshchagino', '99 Bunting Pass', 30642),
(49, 'Fallon', 'Sandaver', 'fsandaver1c@ucsd.edu', 6295938551, 'Guatemala', 'Guazacapán', '15801 Lien Lane', 6011),
(50, 'Ardenia', 'Catlette', 'acatlette1d@booking.com', 7241899126, 'Tajikistan', 'Ishqoshim', '14 Fordem Lane', 49827);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
