-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 Haz 2023, 13:29:19
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `insider`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `form`
--

CREATE TABLE `form` (
  `id` int(30) NOT NULL,
  `name` varchar(300) NOT NULL,
  `problem_title` varchar(200) NOT NULL,
  `problem` text NOT NULL,
  `views` int(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `ss` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `form`
--

INSERT INTO `form` (`id`, `name`, `problem_title`, `problem`, `views`, `time`, `ss`) VALUES
(1, 'Mehmet Alp Arslan', 'Mahsül\'ün Böceklenmesi', 'Merhaba ben Sivas da buğday üretimi yapıyorum ancak hasat zamanına birkaç ay kala ürünlerim böceklenmeye başladı. Biyolojik mücadele, doğal düşmanların (predatörler, parazitler, hastalık etmenleri) kullanılarak böceklerin kontrol edilmesini içerir. Ancak, doğal düşmanların yeterli miktarda bulunmaması veya etkin bir şekilde kullanılamaması, biyolojik mücadele yöntemlerinin etkinliğini azaltabilir.', 16, '2023-05-29 10:20:46', 'https://r.resimlink.com/Bx9NSKk4.png'),
(2, 'Kerem Kenan Eren', 'Uygun Gübre Seçimi', ' Bitkilerin ihtiyaçlarına uygun gübrelerin seçilmesi önemlidir. Yanlış gübre seçimi, bitkilerin besin eksiklikleri veya fazlalıkları yaşamasına neden olabilir. Doğru gübre analizi yapılmalı ve bitkilerin besin ihtiyaçlarına göre uygun gübreler tercih edilmelidir. Doğru gübre seçimi için yardım edebilirmisiniz? Şimdiden Teşekkürler :)\r\n', 9, '2023-05-29 10:20:46', 'https://i.pinimg.com/564x/f3/8e/3e/f38e3efde482091f408333a79117567a.jpg'),
(3, 'Esmanur Yıldız', 'Saman balyası yapımı', 'Merhaba, küresel gıda güvenliği konusu giderek önem kazanmaktadır. Dünya nüfusunun artmasıyla birlikte, gıda üretiminin talebi karşılayabilmesi büyük bir zorluk haline gelmektedir. Sürdürülebilir ve verimli tarım yöntemleri ile gıda güvenliği sağlanması için çözümlere odaklanılması gerekmektedir.', 2, '2023-05-29 10:23:36', 'https://i.pinimg.com/originals/d6/64/cb/d664cb970d4bbc84f69fb50783c824ca.jpg'),
(4, 'Eymen Yılmaztürk', 'Mevsim şartları ', 'Yanlış veya sürekli aynı türde gübrelerin kullanımı, toprakta besin eksikliklerine ve mineral tükenmesine neden olabilir. Bu durum verimliliği düşürebilir ve toprak sağlığını olumsuz etkileyebilir. Gübreler, su ve toprak kaynaklarını etkileyebilir ve çevre kirliliğine neden olabilir. Nitratların yeraltı suyuna sızması, su kaynaklarında kirliliğe ve eutrofikasyona (aşırı bitki büyümesi) yol açabilir. Ayrıca, gübrelerin havaya yayılması atmosferik kirliliğe katkıda bulunabilir.', 2, '2023-05-29 10:23:36', 'https://i.pinimg.com/564x/cf/43/a9/cf43a9e3f9ca57bae44ec6f5d41dcde8.jpg'),
(8, 'Hande Çilingir', 'Pazarlama Zorlukları', 'Çiftçiler, ürünlerini uygun bir fiyatla satmak için mücadele edebilirler. Pazarlama stratejileri, pazar talebini karşılamak ve doğru müşterilere ulaşmak için önemlidir.\r\nTarım faaliyetlerinde bulunmak için yeterli sermayeye sahip olmak zor olabilir. Kredi erişimi, modern tarım araçlarına, tohumlara ve gübre gibi kaynaklara erişim sağlamak için önemlidir.\r\n İklim değişikliği, çiftçilerin iklimin etkileriyle başa çıkmak zorunda kaldığı bir sorundur. Kuraklık, sel, fırtına gibi hava koşulları tarım faaliyetlerini etkileyebilir ve verimi düşürebilir.', 16, '2023-06-04 16:40:12', 'https://reshapesummit.com/wp-content/uploads/2022/08/Mask-group-10.png'),
(9, 'Burak Akbulut', 'Makine ve Ekipman Arızaları', ' Hasat sürecinde kullanılan tarım makineleri ve ekipmanları arızalanabilir veya işlevini yitirebilir. Bu durumda, tamir veya yedek parçaların temini gibi sorunlar ortaya çıkabilir ve hasat süreci aksayabilir. Hasat edilen ürünlerin doğru bir şekilde depolanması ve pazarlanması önemlidir. Eğer uygun depolama koşulları sağlanamazsa, ürünler bozulabilir veya kalite kaybına uğrayabilir. Aynı zamanda, pazarlama kanallarının eksikliği veya sınırlı erişim, ürünlerin satışında zorluklara neden olabilir.', 12, '2023-06-04 16:52:37', 'https://media.licdn.com/dms/image/C4E03AQEBjf69M9nHJg/profile-displayphoto-shrink_800_800/0/1662932228601?e=1691625600&v=beta&t=WGbufWlxz8stTclh2BJqWDF74exHn-ZqkUoT3HEKWUE'),
(10, 'Esma Küçükaydın ', 'Aşırı Gübreleme', 'Aşırı gübreleme, bitkilerin ihtiyaç duyduğundan daha fazla gübre almasına neden olabilir. Bu durum bitkilerin aşırı büyümesine ve besin birikimine yol açabilir. Aşırı gübreleme, su ve toprak kirliliğine, besin dengesizliklerine ve bitki hastalıklarının artmasına neden olabilir. Gübrelerin tamamı bitkiler tarafından kullanılmayabilir ve çevreye yayılabilir. Suyun aşırı akışı, erozyon, drenaj problemleri veya yanlış uygulama teknikleri gibi faktörler gübre kaybına yol açabilir. Bu, hem maliyetleri artırır hem de çevresel etkileri olumsuz yönde etkileyebilir.', 13, '2023-06-04 17:01:39', 'https://media.licdn.com/dms/image/C4E03AQGIGVzfoCSdEg/profile-displayphoto-shrink_800_800/0/1605888951024?e=1691625600&v=beta&t=bswnNFLuSiTp7080ch7790yp7ydISZkg9AbKOT5Q27o'),
(11, 'Nur Arslan', 'İşgücü Sorunları', ' Hasat dönemi, yoğun işgücü gerektiren bir süreçtir. Eğer yeterli işgücü sağlanamazsa, hasat zamanında ürünlerin toplanması ve işlenmesi aksayabilir. İşgücü eksikliği, hasat verimliliğini düşürebilir.  Hasat sürecinde kullanılan tarım makineleri ve ekipmanları arızalanabilir veya işlevini yitirebilir. Bu durumda, tamir veya yedek parça temini gibi sorunlar ortaya çıkabilir ve hasat süreci aksayabilir.\r\nHasat edilen ürünlerin doğru bir şekilde depolanması ve pazarlanması önemlidir. Eğer uygun depolama koşulları sağlanamazsa, ürünler bozulabilir veya kalite kaybına uğrayabilir. Aynı zamanda, pazarlama kanallarının eksikliği veya sınırlı erişim, ürünlerin satışında zorluklara neden olabilir.', 16, '2023-06-04 17:01:39', 'https://media.licdn.com/dms/image/D4D03AQFqLDXeM9gtnw/profile-displayphoto-shrink_800_800/0/1669373748932?e=1691625600&v=beta&t=Pxog5pjBH7DgU9zLW9ft2iF2lwsvTMjNa8R4MucP_bs');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_data`
--

CREATE TABLE `user_data` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `tc` int(30) NOT NULL,
  `password` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `user_data`
--

INSERT INTO `user_data` (`id`, `name`, `tc`, `password`) VALUES
(9, 'mehmet', 777, 123);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `form`
--
ALTER TABLE `form`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
