-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Oca 2024, 07:34:18
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kütüphane`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `books`
--

CREATE TABLE `books` (
  `id` int(5) NOT NULL,
  `ad` text NOT NULL,
  `yazar` text NOT NULL,
  `yayınevi` text NOT NULL,
  `ucret` int(10) NOT NULL,
  `kategori` text NOT NULL,
  `details` varchar(255) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `photoUrl` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `books`
--

INSERT INTO `books` (`id`, `ad`, `yazar`, `yayınevi`, `ucret`, `kategori`, `details`, `stock`, `photoUrl`) VALUES
(531, 'Doğu Ekspresinde Cinayet', 'Agatha Christie', 'BKM', 85, 'Polisiye', 'Gece yarısından sonra artan şiddetli tipi yüzünden Doğu Ekspresi artık yoluna devam edemeyecek durumdadır. Yılın bu zamanlarında lüks tren tamamen doludur. Ertesi sabah yapılan kontroller sonucu tüm yolcuların sağsalim trende olduğu anlaşılır. Ancak defal', 16, NULL),
(354, 'Doğu Ekspresinde Cinayet	', 'Agatha Christie	', 'Mavi Yayın Evi	', 50, 'Polisiye', 'Gece yarısından sonra artan şiddetli tipi yüzünden Doğu Ekspresi artık yoluna devam edemeyecek durumdadır. Yılın bu zamanlarında lüks tren tamamen doludur. Ertesi sabah yapılan kontroller sonucu tüm yolcuların sağsalim trende olduğu anlaşılır. Ancak defal', 9, 'https://img.kitapyurdu.com/v1/getImage/fn:5558946/wh:true/wi:800'),
(594, 'Sherlock Holmes - Bir Suçun Portresi	', 'Sir Arthur Doyle	', 'BKM', 100, 'Polisiye', '', 63, 'https://i.dr.com.tr/cache/600x600-0/originals/0000000701301-1.jpg'),
(567, 'Kızıl Dosya (A Study in Scarlet)', 'Sir Arthur Doyle	', 'Mavi', 62, 'Polisiye', '“I consider that a man’s brain originally is like a little empty attic, and you have to stock it with such furniture as you choose. A fool takes in all the lumber of every sort that he comes across, so that the knowledge which might be useful to him gets ', 24, 'https://static.ticimax.cloud/60561/uploads/urunresimleri/thumb/a-study-in-scarlet-02c5.jpg'),
(624, 'İki Şehrin Hikâyesi', 'Charles Dickens', 'Can', 120, 'Tarihi Roman', 'İki Şehrin Hikâyesi', 59, 'https://img.kitapyurdu.com/v1/getImage/fn:4094551/wh:true/miw:200/mih:200'),
(67, 'Bir Idam Mahkmunun Son Günü', 'Victor Hugo', 'Can', 20, 'Kurgu', 'Konu Bir İdam Mahkumunun Son Günü ise “Bir kitap okudum ve hayatım değişti.” cümlesi, tüm mecazlardan sıyrılıp gerçek bir anlama bürünüyor. Ölümsüz yazar Victor Hugo’nun 1829 yılında kaleme aldığı roman, yazarın Paris’teki ünlü Greve Meydanı’nda gerçekleş', 80, 'https://i.dr.com.tr/cache/600x600-0/originals/0000000567745-1.jpg'),
(660, 'Mutlu Bir Yaşam Üzerine-Yaşamın Kısalığı Üzerine', 'Seneca', 'İş Bankası Kültür Yayınları', 20, 'Kurgusal Olmayan', 'Seneca (MÖ 4’e doğru-MS 65): Devlet adamı ve filozofluğunun yanı sıra Roma tarihinin en önemli söylev ustalarından ve tragedya yazarlarından biridir. Babasının bir siyaset adamı ve hatip olarak yetiştirmek istediği Seneca, bir süre devlet işleriyle uğraşt', 50, 'https://img.kitapyurdu.com/v1/getImage/fn:7571395/wh:true/wi:800'),
(43, 'Martin Eden', 'Jack London', 'İş Bankası Kültür Yayınları', 54, 'Roman', 'Jack London’ın yarı otobiyografik romanı Martin Eden, 20. yüzyıl başında sosyal ve ideolojik meseleler ağırlıklı içeriğiyle Amerikan edebiyatında büyük ölçüde kabul görmüştür. London farklı sınıflar arasındaki zihniyet ve değer farklarını gözlerimizin önü', 30, 'data:image/jpeg;base64,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'),
(907, 'Ayıcık Hooop Yatağa', 'Armelle Modere', '1001 Çiçek', 50, 'Çocuk Kitabı', 'Çok değil birkaç dakika sonra kaşınmaya başladı yavru ayı. Kırt kırt! Patisini kaşıdı. Fırt fırt!  Burnunu kaşıdı. Léon kıpırdanıp durdu. Ama babasının gözleri kapanmaya başlamıştı bile…   Uyku gelmek bilmediğinde… Bir babayla oğlunun tatlı mı tatlı atışm', 30, 'https://img.kitapyurdu.com/v1/getImage/fn:11815302/wh:true/miw:200/mih:200'),
(421, 'Beyaz Zambaklar Ülkesinde', 'Grigory Petrov', 'İş Bankası Kültür Yayınları', 20, 'Kurgusal Olmayan', 'Rus edebiyatının büyük yazarlarından Grigory Petrov tarafından kaleme alınan Beyaz Zambaklar Ülkesinde, her sayfasında altı çizilecek önemli dersler veriyor. Dünya klasikleri arasında yer alan roman, uzun yıllar farklı ülkelerin egemenliğinde yaşamış bir ', 48, 'https://i.dr.com.tr/cache/500x400-0/originals/0000000289056-1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;