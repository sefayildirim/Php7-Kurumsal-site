-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Şub 2019, 13:11:15
-- Sunucu sürümü: 10.1.32-MariaDB
-- PHP Sürümü: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `81il81hayat`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_adres` varchar(250) NOT NULL,
  `ayar_telefon` varchar(20) NOT NULL,
  `ayar_mail` varchar(250) NOT NULL,
  `ayar_facebook` varchar(250) NOT NULL,
  `ayar_twitter` varchar(250) NOT NULL,
  `ayar_instagram` varchar(250) NOT NULL,
  `ayar_aciklama` text NOT NULL,
  `ayar_yol` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_adres`, `ayar_telefon`, `ayar_mail`, `ayar_facebook`, `ayar_twitter`, `ayar_instagram`, `ayar_aciklama`, `ayar_yol`) VALUES
(1, 'Ergenekon Mah. Prof.Dr. Celal Öker Sokak No:3 D:2 Harbiye Şişli - İSTANBUL', '0212 256 32 27', 'info@anatoliasystem.com', 'https://www.facebook.com/AnatoliaSystem', 'https://twitter.com/anatoliasystem', 'https://www.instagram.com/anatoliasystem', '<p>En son haberleri ve teklifleri almak i&ccedil;in B&uuml;ltenimize kaydolun.En son haberleri ve teklifleri almak i&ccedil;in B&uuml;ltenimize kaydolun.En son haberleri ve teklifleri almak i&ccedil;in B&uuml;ltenimize kaydolun.En son haberleri ve teklifleri almak i&ccedil;in B&uuml;ltenimize kaydolun</p>\r\n', 'images/hayal.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dernegimiz`
--

CREATE TABLE `dernegimiz` (
  `dernegimiz_id` int(11) NOT NULL,
  `dernegimiz_baslik` varchar(250) NOT NULL,
  `dernegimiz_icerik` text NOT NULL,
  `dernegimiz_yol` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `dernegimiz`
--

INSERT INTO `dernegimiz` (`dernegimiz_id`, `dernegimiz_baslik`, `dernegimiz_icerik`, `dernegimiz_yol`) VALUES
(1, 'Derneğimiz', '<p>Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n', 'images/155004806401.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `etkinlikler`
--

CREATE TABLE `etkinlikler` (
  `etkinlikler_id` int(11) NOT NULL,
  `etkinlikler_tarih` varchar(100) NOT NULL,
  `etkinlikler_baslik` varchar(100) NOT NULL,
  `etkinlikler_icerik` text NOT NULL,
  `etkinlikler_yol` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `etkinlikler`
--

INSERT INTO `etkinlikler` (`etkinlikler_id`, `etkinlikler_tarih`, `etkinlikler_baslik`, `etkinlikler_icerik`, `etkinlikler_yol`) VALUES
(1, '10 Aralık 2011', 'Kim klinik ne de Masaj vardır.', 'Dignissimos, sadece doğasını çocuğun zamanını excepturi: ama sorgulamak için zahmetli, öven için seçilebilir O\'nun nefretine, çok düşme zevk ihtiyaçlarını ortaya çıkacak.', 'images/01.jpg'),
(2, '15 Ocak 2014', 'Nibh hamile mikrodalga veya muz açık yazar.', 'Hazreti Süleyman ın neşideleri ile övgü yönü için seçildi, daha ziyade, dürüst adamdır bu insanların düşme zamanı ağırlamaktan zevk layık sıkıcı varlığı, ihtiyaçları halinde ortaya çıkacak His danışmaya nefret eden.', 'images/02.jpg'),
(3, '05 Temmuz 2017', 'sempre pretium Cum Mauris fermentum feugiat egestas Daha', 'Dignissimos, sadece doğasını çocuğun zamanını excepturi: ama sorgulamak için zahmetli, öven için seçilebilir O\'nun nefretine, çok düşme zevk ihtiyaçlarını ortaya çıkacak.', 'images/03.jpg'),
(4, '22 Ocak 2018', 'Yasemin bakımı, içki lorem yazar', '<p>Hazreti S&uuml;leyman ın neşideleri ile &ouml;vg&uuml; y&ouml;n&uuml; i&ccedil;in se&ccedil;ildi, daha ziyade, d&uuml;r&uuml;st adamdır bu insanların d&uuml;şme zamanı ağırlamaktan zevk layık sıkıcı varlığı, ihtiya&ccedil;ları halinde ortaya &ccedil;ıkacak His danışmaya nefret eden.</p>\r\n', 'images/04.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `haberler_id` int(11) NOT NULL,
  `haberler_baslik` varchar(250) NOT NULL,
  `haberler_detay` text NOT NULL,
  `haberler_yol` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`haberler_id`, `haberler_baslik`, `haberler_detay`, `haberler_yol`) VALUES
(1, 'HABER1', 'MEDRESEDEN ÜNİVERSİTEYE BİLGİNİN SERÜVENİ – PROF. DR. MAHMUT KAYA\r\nEğitime Destek Programları Merkezi(EDEP)’in 2018-2019 Eğitim Yılı Onur Programı konferanslarının ikincisi Üsküdar Reyyan Eğitim Binası’nda 1 Aralık 2018 tarihinde gerçekleştirildi. Program konuğu Prof. Dr. Mahmut Kaya idi. Hocamızın konuşmasını iki bölüm olarak gerçekleştirdi. Konuşmasının birinci kısmında öğrencilerimize tavsiyelerde bulunan hocamız, ikinci kısımda ise kendi hayatından kesitler sundu, imam hatip liselerinin ve ilahiyat fakültelerinin durumuna değindi, topluma karşı sorumluluklarımızı hatırlattı.\r\n\r\nProf. Dr. Mahmut Kaya, konuşmasının birinci bölümünde, kız öğrencilerin başlamış olduğu bu ilim yolunu muvaffakiyetle tamamlayabilmeleri için temennilerde bulunarak sözlerine başladı. Hocamız,  öğrencilere tahsil hayatlarının son aşamasına geldiklerini belirterek insan hayatının bazı dönemlerinde verilen doğru kararların geleceklerini etkilediğini, tahsil hayatında iyi arkadaş seçiminin bu doğru kararların başında geldiğini, böyle kurumlarda kurulan arkadaşlıkların,  dostlukların, samimiyetlerin hayat boyunca hep hatırlandığını, bu kurumlarda edinilen dostlukların ileriki dönemlerde daha iyi anlaşılacağını ifade etti.\r\n\r\nHocamız, bir de, evlenirken iyi karar verilirse ömür boyu mutlu olunacağını, ülkemizde modern hayatın getirmiş olduğu kaoslar neticesinde gerek dindar ailelerin gerekse dine mesafeli ailelerin bu konuda isabetli kararlar veremediğini, neredeyse her yıl evlenen kişi kadar boşanan kişi olduğunu, bunun sebebinin ise iyi seçim yapamamak ya da seçim yaparken göz önünde bulundurulması gereken şaşmaz değerleri dikkate almadan tercih yapmak olduğunu, hâlbuki evlilik kararının insan hayatında verilen en önemli karar olduğunu belirtti.\r\n\r\nİnsan fıtratının sahip olduğu duygu durumlarına ve gönül dünyasına da değinen Mahmut Kaya gençlik döneminde yapılan tercihlerde duygu ve gönül işlerinin daha çok öne çıktığını ve bu yüzden isabetli karar verilemediğini ifade etti.  Gençlikteki fiziki yapıyı bir güle benzeten hocamız, mevsimi geçen güllerin çabuk solduğunu, evlilikte sadece fiziki güzellik ve mükemmellik arayan gençlerin birçoğunun evliliklerinin hüsranla, nedametle sonuçlandığını belirtti.\r\n\r\nHocamız, kişinin müstakbel zevcinde veya zevcesinde manevi, ahlaki, insani hasletler araması gerektiğini, öncelikle kimliği oturmuş, karakter ve şahsiyet sahibi kişilerin tercih edilmesi gerektiğini, ülkemizde şimdilerde gerçekleşen evliliklerde ise erkek ya da kız tarafının kendi yaşantılarını, düşündüklerini ve beklentilerini sakladıklarını, evlendikten kısa bir süre sonra da  ‘’umduğumu bulamadım’’ demeye başladıklarını ifade etti.\r\n\r\nModern dünyada feminizm hareketinin çıkarıldığını, bu akımın geleneksel aile yapısını yıktığını, erkek ve kadınların dünyasının birbirlerinden çok farklı olduğunu,  Bakara suresi 187. ayetindeki ‘’Onlar, sizin için örtüdür; siz de onlar için örtüsünüz.’’ düsturundan yola çıkarak her iki tarafın fedakârlık yapması gerektiğini, tek taraflı fedakarlığın olmadığını dile getirdi.\r\n\r\nProf. Dr. Mahmut Kaya Hocamız, konuşmasının ikinci kısmında ise 1945’te Tokat’ın Artova ilçesine bağlı 60 haneli Kunduzağlı köyünde yedi çocuklu ailenin altıncı çocuğu olarak dünya geldiğini, o dönemde modern hayatın izlerinin Anadolu’da pek görülmediğini, insanların imkânsızlıklar içerisinde yaşadığını, hatta köylülerin kendi ürettiklerinin çoğunu tüketemediklerini, bunları satarak daha temel ihtiyaçlarını karşıladıklarını, ulaşım imkanlarının son derece sınırlı olduğunu, bu durumun ticareti neredeyse imkansız hale getirdiğini söyledi.\r\n\r\nHocamız kendisinin köyde okul olmadığı için ilkokul diplomasını 18 yaşında aldığını, babasının yanında hafızlık yaptığını, babasının kendisine hafızların sayısının çok fakat ilim ehlinin sayısının az olduğunu söylediğini, yakındaki kasabada Fevzi Hoca’nın yanına giderek ilim tahsil etmesini istediğini, Fevzi Hoca’dan dini ilimleri ve Arapçayı tahsil ettiğini ifade etti.\r\n\r\nFevzi Hoca’nın yanında dört sene okuduktan sonra 1955’te İstanbul’a geldiğini, Sultan Ahmet Cami imamı Gönenli Mehmet Efendi’nin kendisi gibi birçok talebeye yardımcı olduğunu, bu süreçte mektep öğrencilerine imrendiğini, ilk ve ortaöğretimini dışarıdan tamamladığını belirtti.\r\n\r\nProf. Kaya, Türkiye’de 1951’de İmam Hatiplerin açıldığını, 1982’de İslam Enstitülerinin İlahiyat Fakültelerine dönüştürüldüğünü, süreç içerisinde İlahiyat Fakültelerinin tefsir, hadis, kelam, tasavvuf, fıkıh külliyatlarını Türkçeye çevirdiğini, akademisyenlerin bilimsel makaleler yazdıklarını, sempozyumlarda tebliğler sunduklarını, 46 ciltlik İslam Ansiklopedisini oluşturduklarını, kendisinin bu işe 35 senesini verdiğini, İslam felsefesi, ilimler tarihi, ahlak konuları üzerine ilk kaynaklardan modern kaynaklara kadar araştırmalar yaparak bir ansiklopedi oluşturduğunu, bu çalışmaların da diğer İslam ülkelerine göre ileri bir performans olduğunu söyledi.\r\n\r\nHocamız, bütün bu çalışmalara rağmen toplumu dönüştürme konusunda başarısız olduğumuzu, kabuğumuzu kırıp İslam’a aşkla sarılmamız gerektiğini, peygamber efendimizin bedevi ve müşrik bir toplumu Kur’an sayesinde nasıl dönüştürüp medeni bir hale getirdiyse bizim de Kur’an ve sünnet sayesinde bunu başarabileceğimizi, Peygamber Efendimizin:’’Beni ihtiyarlattı.’’dediği Hud Suresi’nde belirtildiği gibi “dosdoğru olmamız” gerektiğini, bu dünyaya bir defa geleceğimizi, bunun için de bulunduğumuz her ortamda İslam’ı temsil etmemiz gerektiğini vurgulayarak konuşmasını tamamladı.', 'images/01.jpg'),
(2, 'HABER2', 'Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. this exercise dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur, assumenda provident this exercise dolor sit amet, consectetur adipisicing elit.', 'images/02.jpg'),
(3, 'HABER3', 'Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. this exercise dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur, assumenda provident this exercise dolor sit amet, consectetur adipisicing elit.', 'images/03.jpg'),
(4, 'HABER4', 'Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. this exercise dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur, assumenda provident this exercise dolor sit amet, consectetur adipisicing elit.\r\n', 'images/04.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(250) NOT NULL,
  `hakkimizda_baslik2` varchar(250) NOT NULL,
  `hakkimizda_icerik` text NOT NULL,
  `hakkimizda_yol` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_baslik2`, `hakkimizda_icerik`, `hakkimizda_yol`) VALUES
(1, 'HAKKIMIZDA', 'BİZ KİMİZ', '<p>&Ouml;ld&uuml;recekler bazı insanların başarı i&ccedil;in, ama nasıl bilmiyorum &ccedil;&uuml;nk&uuml;. bazı insanlar i&ccedil;in olduğunu, ancak ger&ccedil;eğin başarı i&ccedil;in onlar sonbaharda ihtiya&ccedil;larını itham edecek bilmiyorum &ccedil;&uuml;nk&uuml;&Ouml;ld&uuml;recekler bazı insanların başarı i&ccedil;in, ama nasıl bilmiyorum &ccedil;&uuml;nk&uuml;. bazı insanlar i&ccedil;in olduğunu, ancak ger&ccedil;eğin başarı i&ccedil;in onlar sonbaharda ihtiya&ccedil;larını itham edecek bilmiyorum &ccedil;&uuml;nk&uuml;&Ouml;ld&uuml;recekler bazı insanların başarı i&ccedil;in, ama nasıl bilmiyorum &ccedil;&uuml;nk&uuml;. bazı insanlar i&ccedil;in olduğunu, ancak ger&ccedil;eğin başarı i&ccedil;in onlar sonbaharda ihtiya&ccedil;larını itham edecek bilmiyorum &ccedil;&uuml;nk&uuml;&Ouml;ld&uuml;recekler bazı insanların başarı i&ccedil;in, ama nasıl bilmiyorum &ccedil;&uuml;nk&uuml;. bazı insanlar i&ccedil;in olduğunu, ancak ger&ccedil;eğin başarı i&ccedil;in onlar sonbaharda ihtiya&ccedil;larını itham edecek bilmiyorum &ccedil;&uuml;nk&uuml; &Ouml;ld&uuml;recekler bazı insanların başarı i&ccedil;in, ama nasıl bilmiyorum &ccedil;&uuml;nk&uuml;. bazı insanlar i&ccedil;in olduğunu, ancak ger&ccedil;eğin başarı i&ccedil;in onlar sonbaharda ihtiya&ccedil;larını itham edecek bilmiyorum &ccedil;&uuml;nk&uuml;&Ouml;ld&uuml;recekler bazı insanların başarı i&ccedil;in, ama nasıl bilmiyorum &ccedil;&uuml;nk&uuml;. bazı insanlar i&ccedil;in olduğunu, ancak ger&ccedil;eğin başarı i&ccedil;in onlar sonbaharda ihtiya&ccedil;larını itham edecek bilmiyorum &ccedil;&uuml;nk&uuml;&Ouml;ld&uuml;recekler bazı insanların başarı i&ccedil;in, ama nasıl bilmiyorum &ccedil;&uuml;nk&uuml;. bazı insanlar i&ccedil;in olduğunu, ancak ger&ccedil;eğin başarı i&ccedil;in onlar sonbaharda ihtiya&ccedil;larını itham edecek bilmiyorum &ccedil;&uuml;nk&uuml;&Ouml;ld&uuml;recekler bazı insanların başarı i&ccedil;in, ama nasıl bilmiyorum &ccedil;&uuml;nk&uuml;. bazı insanlar i&ccedil;in olduğunu, ancak ger&ccedil;eğin başarı i&ccedil;in onlar sonbaharda ihtiya&ccedil;larını itham edecek bilmiyorum &ccedil;&uuml;nk&uuml;</p>\r\n', 'images/154964004601.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `kisi_adi` varchar(50) NOT NULL,
  `kisi_eposta` varchar(100) NOT NULL,
  `kisi_mesaj` text NOT NULL,
  `kisi_tel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kadi` char(50) NOT NULL,
  `parola` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kadi`, `parola`) VALUES
(4, 'admin', 'cb43d3a8162fc9783834984f96f7b6b6');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resim`
--

CREATE TABLE `resim` (
  `resim_id` int(11) NOT NULL,
  `resim_yol` varchar(250) NOT NULL,
  `resim_sira` int(2) NOT NULL,
  `resim_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `resim`
--

INSERT INTO `resim` (`resim_id`, `resim_yol`, `resim_sira`, `resim_durum`) VALUES
(1, 'images/01.jpg', 1, 1),
(2, 'images/02.jpg', 1, 1),
(3, 'images/03.jpg', 1, 1),
(4, 'images/04.jpg', 1, 1),
(5, 'images/01.jpg', 1, 1),
(6, 'images/02.jpg', 1, 1),
(7, 'images/03.jpg', 1, 1),
(8, 'images/04.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_yol` varchar(250) NOT NULL,
  `slider_sira` int(2) NOT NULL,
  `slider_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_yol`, `slider_sira`, `slider_durum`) VALUES
(1, 'images/01.jpg', 1, 1),
(2, 'images/02.jpg', 1, 1),
(3, 'images/03.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_url` text NOT NULL,
  `video_sira` int(11) NOT NULL,
  `video_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `video`
--

INSERT INTO `video` (`video_id`, `video_url`, `video_sira`, `video_durum`) VALUES
(1, 'https://www.youtube.com/watch?v=1PVdhKQAK48', 1, 1),
(2, 'https://www.youtube.com/watch?v=1PVdhKQAK48', 1, 1),
(3, 'https://www.youtube.com/watch?v=1PVdhKQAK48', 1, 1),
(5, 'https://www.youtube.com/watch?v=1PVdhKQAK48', 1, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `dernegimiz`
--
ALTER TABLE `dernegimiz`
  ADD PRIMARY KEY (`dernegimiz_id`);

--
-- Tablo için indeksler `etkinlikler`
--
ALTER TABLE `etkinlikler`
  ADD PRIMARY KEY (`etkinlikler_id`);

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`haberler_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `resim`
--
ALTER TABLE `resim`
  ADD PRIMARY KEY (`resim_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayar`
--
ALTER TABLE `ayar`
  MODIFY `ayar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `dernegimiz`
--
ALTER TABLE `dernegimiz`
  MODIFY `dernegimiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `etkinlikler`
--
ALTER TABLE `etkinlikler`
  MODIFY `etkinlikler_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `haberler_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `hakkimizda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `resim`
--
ALTER TABLE `resim`
  MODIFY `resim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
