-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 23 Oca 2021, 00:11:29
-- Sunucu sürümü: 5.7.32-cll-lve
-- PHP Sürümü: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mucahitg_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_title` varchar(250) NOT NULL,
  `ayar_desc` text NOT NULL,
  `ayar_keywords` varchar(250) NOT NULL,
  `ayar_author` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `ayar_title`, `ayar_desc`, `ayar_keywords`, `ayar_author`) VALUES
(1, 'Mücahit GEVEZ', 'Mücahit Gevez Cv Tanıtım Sitesi', 'Cv, tanıtım, meta tags', 'Mücahit GEVEZ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `beceri`
--

CREATE TABLE `beceri` (
  `id` int(11) NOT NULL,
  `yetenek` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `beceri`
--

INSERT INTO `beceri` (`id`, `yetenek`) VALUES
(1, 'C# İLE MVC KURALINA UYGUN WEB TASARIMI'),
(2, 'C + + PROGRAMLAMA DİLİ'),
(3, 'Php İle Web Sitesi Tasarımı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `deneyim`
--

CREATE TABLE `deneyim` (
  `id` int(11) NOT NULL,
  `baslik` varchar(500) NOT NULL,
  `altbaslik` varchar(50) NOT NULL,
  `icerik` text NOT NULL,
  `tarih` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `deneyim`
--

INSERT INTO `deneyim` (`id`, `baslik`, `altbaslik`, `icerik`, `tarih`) VALUES
(3, 'BİLGİSAYAR MÜHENDİSLERİ DAYANIŞMA VE YARDIMLAŞMA DERNEĞİ', 'Sayman', 'Bu dernekte saymanlık görevini bir yıldır yapmaktayım.', '2020-01-01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim`
--

CREATE TABLE `egitim` (
  `id` int(11) NOT NULL,
  `baslik` varchar(500) NOT NULL,
  `altbaslik` varchar(50) NOT NULL,
  `icerik` text NOT NULL,
  `tarih` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `egitim`
--

INSERT INTO `egitim` (`id`, `baslik`, `altbaslik`, `icerik`, `tarih`) VALUES
(1, 'Mehmet Akif Üniversitesi', 'Bilgisayar Mühendisliği', '2016 yılında başlayan üniversite öğrenimim, 2021 yılında son sınıf olarak devam etmekte.', '2016-09-12'),
(5, 'İstanbul Ticaret Üniversitesi', 'İngilizce Hazırlık Eğitimi', 'İstanbul Ticaret Üniversitesinde ingilizce hazırlık eğitimi aldım.', '10-09-2016');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimda`
--

CREATE TABLE `hakkimda` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `adres` varchar(250) NOT NULL,
  `telefon` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `icerik` text NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `github` varchar(50) NOT NULL,
  `youtube` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hakkimda`
--

INSERT INTO `hakkimda` (`id`, `ad`, `soyad`, `adres`, `telefon`, `mail`, `icerik`, `facebook`, `instagram`, `github`, `youtube`) VALUES
(1, 'Mücahit', 'Gevez', 'Burdur Merkez', '0(535) 050 66 36', 'mucahitgevez@hotmail.com', 'Mehmet Akif Ersoy Üniversitesi 4. sınıf öğrencisi olarak eğitim görmekteyim. Bu siteyi final projem için yazıyorum.', 'https://www.facebook.com/mucahit.gevez.7', 'https://www.instagram.com/mucahitgvz', 'https://www.github.com/mucahitgvz', 'https://www.youtube.com/bmdersleri');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `ad` varchar(25) NOT NULL,
  `soyad` varchar(25) NOT NULL,
  `kullanici_mail` varchar(250) NOT NULL,
  `kullanici_sifre` varchar(252) NOT NULL,
  `kullanici_yetki` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `ad`, `soyad`, `kullanici_mail`, `kullanici_sifre`, `kullanici_yetki`) VALUES
(1, 'Mücahit', 'Gevez', 'mucahitgvz', 'm1m2m3m4', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sertifika`
--

CREATE TABLE `sertifika` (
  `id` int(11) NOT NULL,
  `sertifika` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sertifika`
--

INSERT INTO `sertifika` (`id`, `sertifika`) VALUES
(1, 'İstanbul Ticaret Üniversitesi İngilizce Hazırlık Sertifikası'),
(2, 'MVC Kurs Tamamlama Sertifikası');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `beceri`
--
ALTER TABLE `beceri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `deneyim`
--
ALTER TABLE `deneyim`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `egitim`
--
ALTER TABLE `egitim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimda`
--
ALTER TABLE `hakkimda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sertifika`
--
ALTER TABLE `sertifika`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `beceri`
--
ALTER TABLE `beceri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `deneyim`
--
ALTER TABLE `deneyim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `egitim`
--
ALTER TABLE `egitim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimda`
--
ALTER TABLE `hakkimda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `sertifika`
--
ALTER TABLE `sertifika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
