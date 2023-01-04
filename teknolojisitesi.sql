-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 04 Oca 2023, 13:50:49
-- Sunucu sürümü: 8.0.31
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `teknolojisitesi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dusunceler`
--

DROP TABLE IF EXISTS `dusunceler`;
CREATE TABLE IF NOT EXISTS `dusunceler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `dusuncesi` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `dusunceler`
--

INSERT INTO `dusunceler` (`id`, `dusuncesi`, `tarih`) VALUES
(1, 'sepeti biraz daha güzel olabilirdi', '2022-12-28 21:10:19'),
(2, 'asdaw', '2022-12-28 21:28:17'),
(3, 'erenadscvb', '2022-12-28 21:30:52');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

DROP TABLE IF EXISTS `mesajlar`;
CREATE TABLE IF NOT EXISTS `mesajlar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mesajisim` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `mesajtelefon` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `mesajposta` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `mesajkonu` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `mesajyazisi` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`id`, `mesajisim`, `mesajtelefon`, `mesajposta`, `mesajkonu`, `mesajyazisi`) VALUES
(18, 'eren akova', '6666666666', 'erenakova16@gmail.com', 'yorum', 'test'),
(19, 'ayşe öztürk', '3333333333', 'ayse@gmail.com', 'test', 'test'),
(20, 'demir özdem', '33331111111', 'demir@gmail.com', 'yorum', 'Hayırlı olsun'),
(21, 'korkut özdemir', '11111111111', 'korkut@gmail.com', 'beğeni', 'çok beğendim'),
(22, 'masal akova', '22222222222', 'masal16@gmail.com', 'deneme2', 'iletişim için teşekkürler'),
(23, 'yiğit alp', '44444444444', 'yigit@gmail.com', 'deneme3', 'deneme <<<'),
(24, 'kadir', '33444444444', 'kadir@kadir.com', 'yorum', 'tebrikler asdaasd'),
(25, 'emir utku', '99999999999', 'eutk@eut.com', 'deneme', 'test yorum'),
(26, 'emir utku', '99999999999', 'eutk@eut.com', 'deneme', 'test yorum'),
(27, 'emir utku', '99999999999', 'eutk@eut.com', 'deneme', 'test yorum'),
(28, 'serra ', '11111111112', 'serra@serra.com', 'deneme 5', 'merhaba'),
(29, 'poyraz', '55555555555', 'poyraz@gmail.com', 'aslda', 'şaslkdşalsdğipşasld'),
(30, 'eren akova', '11213123123', 'akova@akova.com', 'deneme 0', 'sadawdasdawd zsxczxcz xczcxvzxbcvzvbzbzvbcx');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `satinal`
--

DROP TABLE IF EXISTS `satinal`;
CREATE TABLE IF NOT EXISTS `satinal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefon` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `posta` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `kartno` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `aciklama` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cvc` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `satinal`
--

INSERT INTO `satinal` (`id`, `ad`, `telefon`, `posta`, `kartno`, `aciklama`, `cvc`) VALUES
(1, 'eren akova', '11111111111', 'erenakova16@gmail.com', '1123455555555555', 'asdawdasdawdasd', 111),
(2, 'eren akova', '11111111111', 'erenakova16@gmail.com', '1123455555555555', 'asdawdasdawdasd', 111),
(3, 'eren akova', '11111111111', 'erenakova16@gmail.com', '1123455555555555', 'asdawdasdawdasd', 111),
(4, 'ayşe öztürk', '33333333333', 'ayse@gmail.com', '1123455555555555', 'sadawdasd', 111),
(5, 'masal akova', '55555555555', 'masal16@gmail.com', '1123455555555555', 'ğıpğıkşlkşlklil\r\niş', 666);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
