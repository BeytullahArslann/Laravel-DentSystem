-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Oca 2022, 16:18:07
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `dent`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_10_30_092442_users', 1),
(3, '2021_10_30_095345_orders', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `tooth_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loc_sum` double NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isPaid` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `tooth_no`, `quantity`, `type`, `color`, `offer`, `loc_sum`, `currency`, `date`, `created_at`, `updated_at`, `description`, `isPaid`) VALUES
(22, 2, '45-89', 11, 17, 'Black', NULL, 440, 'EUR', '2021-12-04', '2021-12-03 06:20:05', '2021-12-11 06:30:39', NULL, b'1'),
(26, 2, '96', 20, 5, 'White', NULL, 2000, 'EUR', '2021-12-15', '2021-12-03 08:12:02', '2021-12-09 05:08:37', NULL, b'1'),
(27, 2, '7', 8, 1, 'White', NULL, 600, 'EUR', '2021-12-16', '2021-12-03 08:13:00', '2021-12-11 10:17:19', NULL, b'1'),
(28, 2, '8', 19, 10, 'White', NULL, 2470, 'TL', '2021-12-12', '2021-12-05 12:08:00', '2021-12-11 10:26:34', NULL, b'1'),
(29, 2, '45-89', 12, 4, 'Black', NULL, 1200, 'EUR', '2022-01-15', '2021-12-05 12:10:52', '2021-12-07 10:01:39', NULL, b'0'),
(30, 2, '89', 15, 9, 'Black', NULL, 1500, 'TL', '2021-12-09', '2021-12-06 04:42:06', '2021-12-09 05:11:52', NULL, b'1'),
(32, 2, '96', 20, 5, 'White', NULL, 2000, 'EUR', '2021-12-15', '2021-12-03 08:12:02', '2021-12-11 11:19:42', NULL, b'1'),
(33, 2, '7', 5, 1, 'White', NULL, 375, 'EUR', '2021-12-16', '2021-12-03 08:13:00', '2021-12-11 11:20:35', NULL, b'0'),
(34, 2, '8', 10, 10, 'White', NULL, 1300, 'TL', '2021-12-12', '2021-12-05 12:08:00', '2021-12-11 11:33:30', NULL, b'0'),
(35, 2, '45-89', 12, 4, 'Black', NULL, 1200, 'EUR', '2022-01-15', '2021-12-05 12:10:52', '2021-12-07 10:01:39', NULL, b'0'),
(36, 2, '89', 14, 9, 'Black', NULL, 1400, 'TL', '2021-12-09', '2021-12-06 04:42:06', '2021-12-11 10:30:08', NULL, b'1'),
(37, 2, '45-89', 1, 15, 'Black', NULL, 75, 'TL', '2021-12-10', '2021-12-07 13:12:34', '2021-12-07 13:12:34', NULL, b'0'),
(38, 2, '96', 1, 11, 'White', NULL, 75, 'TL', '2021-11-18', '2021-12-07 13:25:03', '2021-12-11 11:33:48', NULL, b'0'),
(39, 2, '89', 31, 1, 'Black', NULL, 2325, 'EUR', '2021-12-07', '2021-12-07 13:54:53', '2021-12-07 13:54:53', NULL, b'0'),
(40, 2, '78', 31, 10, 'White', NULL, 4030, 'TL', '2021-12-31', '2021-12-07 14:02:03', '2021-12-07 14:02:03', NULL, b'0'),
(41, 2, '96', 14, 13, 'Black', NULL, 280, 'TL', '2021-12-30', '2021-12-09 09:01:27', '2021-12-09 09:01:27', NULL, b'0'),
(42, 2, '89', 44, 14, 'Black', NULL, 440, 'EUR', '2021-12-12', '2021-12-11 11:21:46', '2021-12-11 11:21:46', NULL, b'0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sub_work`
--

CREATE TABLE `sub_work` (
  `sub_work_id` int(11) NOT NULL,
  `sub_work_name` varchar(255) NOT NULL,
  `work_id` int(11) NOT NULL,
  `unit_price` float NOT NULL,
  `currency` varchar(50) NOT NULL DEFAULT '''TL'''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `sub_work`
--

INSERT INTO `sub_work` (`sub_work_id`, `sub_work_name`, `work_id`, `unit_price`, `currency`) VALUES
(1, 'MONOBLOK ZİRKONYUM', 1, 75, 'EUR'),
(2, 'E-MAX CAD - VITA SUBPRINITY CAD', 1, 90, 'EUR'),
(3, 'E-MAX - VITA MARYLAND KÖPRÜ', 1, 150, 'EUR'),
(4, 'E-MAX INLAY PRESS', 1, 100, 'EUR'),
(5, 'E-MAX ONLAY PRESS', 1, 100, 'EUR'),
(6, 'LAMINATE E-MAX ESTETİK PRESS', 1, 100, 'EUR'),
(7, 'VITA ESTETİK ZİRKONYUM (GARANTİLİ)', 1, 60, 'EUR'),
(8, 'UPCERA ZİRKONYUM (GARANTİSİZ)', 1, 20, 'EUR'),
(9, 'PORSELEN KRON KONVEKSİYONEL (DÖKÜM)', 2, 100, 'TL'),
(10, 'PORSELEN KRON LAZER SYSTEM', 2, 130, 'TL'),
(11, 'PORSELEN TAMİRİ VE DEĞİŞİMİ', 2, 75, 'TL'),
(12, 'FULL KRON', 2, 100, 'TL'),
(13, 'GEÇİCİ KRON (BASİT)', 3, 20, 'TL'),
(14, 'GEÇİCİ KRON (ESTETİK CAD-CAM)', 3, 10, 'EUR'),
(15, 'POST-CORE', 3, 75, 'TL'),
(16, 'COPING', 3, 75, 'TL'),
(17, 'KOMPOZİT LAMINA', 3, 40, 'EUR'),
(18, 'INLEY ONLEY (KOMPOZİT SHFOU-GC)', 3, 25, 'EUR'),
(19, 'MUMLU SETUP (WAX UP TEK ÇENE', 3, 150, 'TL'),
(20, 'DÖKÜM YER TUTUCU', 3, 100, 'TL');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `isAdmin`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 1, NULL, NULL, NULL, NULL),
(2, 'Doctor', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 0, 'Deneme@gmail.com', '05123456789', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `work_title`
--

CREATE TABLE `work_title` (
  `work_id` int(11) NOT NULL,
  `work_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `work_title`
--

INSERT INTO `work_title` (`work_id`, `work_name`) VALUES
(1, 'Tam Porselen'),
(2, 'Metal Destekli Protez'),
(3, 'Diğer Sabit Protezler'),
(4, 'İmplant Üstü Protezler'),
(5, 'İskelet Dökümleri'),
(6, 'Hareketli Protez Akrilik Bitim'),
(7, 'Deflex Uygulamaları'),
(8, 'Hassas Tutucular'),
(9, 'Freze Uygulamaları');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `sub_work`
--
ALTER TABLE `sub_work`
  ADD PRIMARY KEY (`sub_work_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Tablo için indeksler `work_title`
--
ALTER TABLE `work_title`
  ADD PRIMARY KEY (`work_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sub_work`
--
ALTER TABLE `sub_work`
  MODIFY `sub_work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `work_title`
--
ALTER TABLE `work_title`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
