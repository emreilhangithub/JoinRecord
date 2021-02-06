-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Oca 2021, 13:11:19
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yenideneme`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mail`
--

CREATE TABLE `mail` (
  `Mailid` int(11) NOT NULL,
  `Personelid` int(11) NOT NULL,
  `MailAdresi` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mail`
--

INSERT INTO `mail` (`Mailid`, `Personelid`, `MailAdresi`) VALUES
(1, 23, 'safaktest@hotmail.com'),
(3, 24, 'asli@test.com'),
(4, 1, 'ayse@test.com'),
(11, 36, 'melih@hotmail.com'),
(12, 26, 'sedatkilic@hotmai.com'),
(15, 24, 'asfdfas@hotmai.com'),
(16, 35, 'erdem@hotmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel`
--

CREATE TABLE `personel` (
  `Personelid` int(11) NOT NULL,
  `isim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `soyisim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yas` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `personel`
--

INSERT INTO `personel` (`Personelid`, `isim`, `soyisim`, `yas`) VALUES
(1, 'Ahmet', 'lale', '12'),
(19, 'Mehmet', 'kıvırcık ', '21'),
(23, 'ayşe', 'artmut', '60'),
(24, 'aslı', 'ova', '20'),
(26, 'sedat', 'hakan', '22'),
(32, 'ahmet', 'arnavut', '34'),
(33, 'safak', 'kaçak', '54'),
(34, 'hicran', 'aktepe', '20'),
(35, 'erdem', 'okçu', '27'),
(36, 'melih', 'gardolap', '44'),
(39, 'ayse', 'kırık', '58'),
(40, 'jale', 'oktay', '22'),
(41, 'hale', 'bilgin', '21'),
(42, 'ilkay', 'tok', '19'),
(43, 'ekrem', 'sanlı', '23'),
(44, 'saf', 'afsdafsd', '65');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `telefon`
--

CREATE TABLE `telefon` (
  `Telefonid` int(11) NOT NULL,
  `Personelid` int(11) NOT NULL,
  `TelefonNo` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `telefon`
--

INSERT INTO `telefon` (`Telefonid`, `Personelid`, `TelefonNo`) VALUES
(1, 1, '5692622007'),
(4, 33, '5356456595'),
(5, 1, '5342569858'),
(10, 34, '5413121811'),
(11, 36, '5369952565'),
(12, 35, '5322325865'),
(13, 19, '12312321321'),
(14, 35, '5368900252'),
(15, 35, '5368902421'),
(16, 24, '5328952594'),
(23, 19, '05368980208'),
(42, 44, ' 5369896259'),
(43, 43, '5635644564');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`Mailid`),
  ADD KEY `Personelid` (`Personelid`);

--
-- Tablo için indeksler `personel`
--
ALTER TABLE `personel`
  ADD PRIMARY KEY (`Personelid`);

--
-- Tablo için indeksler `telefon`
--
ALTER TABLE `telefon`
  ADD PRIMARY KEY (`Telefonid`),
  ADD KEY `Personelid` (`Personelid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `mail`
--
ALTER TABLE `mail`
  MODIFY `Mailid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `personel`
--
ALTER TABLE `personel`
  MODIFY `Personelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Tablo için AUTO_INCREMENT değeri `telefon`
--
ALTER TABLE `telefon`
  MODIFY `Telefonid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `mail`
--
ALTER TABLE `mail`
  ADD CONSTRAINT `mail_ibfk_2` FOREIGN KEY (`Personelid`) REFERENCES `personel` (`Personelid`);

--
-- Tablo kısıtlamaları `telefon`
--
ALTER TABLE `telefon`
  ADD CONSTRAINT `telefon_ibfk_2` FOREIGN KEY (`Personelid`) REFERENCES `personel` (`Personelid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
