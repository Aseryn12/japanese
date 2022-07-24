-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 24 2022 г., 12:08
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `japanese`
--

-- --------------------------------------------------------

--
-- Структура таблицы `achivs`
--

CREATE TABLE `achivs` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cond` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `achivs`
--

INSERT INTO `achivs` (`id`, `name`, `cond`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Первый шаг', 'Выполните одно задание', 'http://japanese/storage/N80rHxRpvjgizgnJzQJEvdTH7Z8X5NVoebcuoRtv.png', '2021-10-29 14:58:22', '2021-10-29 14:58:28'),
(2, 'На пути', 'Выполните пять тестов', '/img/achivs/achiv2.png', '2021-10-29 14:58:30', '2021-10-29 14:58:32'),
(5, 'Хирагана', 'Пройдите все упражнения по хирагане', '/img/achivs/achiv3.png', '2021-11-18 19:00:00', '2021-11-18 19:00:00'),
(6, 'Катакана', 'Пройдите все упражнения по катакне', '/img/achivs/achiv4.png', '2021-11-18 19:00:00', '2021-11-18 19:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `gliphs`
--

CREATE TABLE `gliphs` (
  `id` int UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciril` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gliphs`
--

INSERT INTO `gliphs` (`id`, `img`, `latin`, `ciril`, `created_at`, `updated_at`, `type`) VALUES
(1, 'http://japanese/storage/9jS8IrdYkRCTauiYGs89w8O4h7drIxyy0GFVcF1P.png', 'a', 'а', '2021-10-29 16:17:02', '2021-10-29 16:17:05', 'hira'),
(2, 'http://japanese/storage/2NiL0y6iwAjO9vGw4sEgTJCsiwVT20v24xVu3eCx.png', 'i', 'и', '2021-10-29 16:17:08', '2021-10-29 16:17:09', 'hira'),
(3, '/img/hira/clear/h.ou.png', 'u', 'у', '2021-10-29 16:17:12', '2021-10-29 16:17:14', 'hira'),
(4, '/img/hira/clear/h.oe.png', 'e', 'э', '2021-10-29 16:17:16', '2021-10-29 16:17:18', 'hira'),
(5, '/img/hira/clear/h.oo.png', 'o', 'о', '2021-10-29 16:17:20', '2021-10-29 16:17:22', 'hira'),
(6, '/img/hira/clear/h.oka.png', 'ka', 'ка', '2021-10-29 16:17:25', '2021-10-29 16:17:27', 'hira'),
(7, '/img/hira/clear/h.oki.png', 'ki', 'ки', '2021-10-29 16:17:29', '2021-10-29 16:17:30', 'hira'),
(8, '/img/hira/clear/h.oku.png', 'ku', 'ку', '2021-10-29 16:17:33', '2021-10-29 16:17:35', 'hira'),
(9, '/img/hira/clear/h.oke.png', 'ke', 'ке', '2021-10-29 16:17:37', '2021-10-29 16:17:38', 'hira'),
(10, '/img/hira/clear/h.oko.png', 'ko', 'ко', '2021-10-29 16:17:40', '2021-10-29 16:17:41', 'hira'),
(11, '/img/hira/clear/h.oga.png', 'ga', 'га', '2021-10-29 16:17:43', '2021-10-29 16:17:45', 'hira'),
(12, '/img/hira/clear/h.ogi.png', 'gi', 'ги', '2021-10-29 16:17:46', '2021-10-29 16:17:51', 'hira'),
(13, '/img/hira/clear/h.ogu.png', 'gu', 'гу', '2021-10-29 16:17:53', '2021-10-29 16:17:48', 'hira'),
(14, '/img/hira/clear/h.oge.png', 'ge', 'ге', '2021-10-29 16:17:55', '2021-10-29 16:17:56', 'hira'),
(15, '/img/hira/clear/h.ogo.png', 'go', 'го', '2021-10-29 16:17:58', '2021-10-29 16:18:00', 'hira'),
(16, '/img/hira/clear/h.osa.png', 'sa', 'са', '2021-10-29 16:18:02', '2021-10-29 16:18:03', 'hira'),
(17, '/img/hira/clear/h.oshi.png', 'shi', 'щи', '2021-10-29 16:18:05', '2021-10-29 16:18:07', 'hira'),
(18, '/img/hira/clear/h.osu.png', 'su', 'су', '2021-10-29 16:18:08', '2021-10-29 16:18:10', 'hira'),
(19, '/img/hira/clear/h.ose.png', 'se', 'сэ', '2021-10-29 16:18:18', '2021-10-29 16:18:20', 'hira'),
(20, '/img/hira/clear/h.oso.png', 'so', 'со', '2021-10-29 16:18:13', '2021-10-29 16:18:24', 'hira'),
(21, '/img/hira/clear/h.oza.png', 'za', 'дза', '2021-10-29 16:18:22', '2021-10-29 16:18:26', 'hira'),
(22, '/img/hira/clear/h.oji.png', 'zi', 'дзи', '2021-10-29 16:18:28', '2021-10-29 16:18:30', 'hira'),
(23, '/img/hira/clear/h.ozu.png', 'zu', 'зу', '2021-10-29 16:18:32', '2021-10-29 16:18:34', 'hira'),
(24, '/img/hira/clear/h.oze.png', 'ze', 'дзэ', '2021-10-29 16:18:36', '2021-10-29 16:18:38', 'hira'),
(25, '/img/hira/clear/h.ozo.png', 'zo', 'дзо', '2021-10-29 16:18:39', '2021-10-29 16:18:41', 'hira'),
(26, '/img/hira/clear/h.ota.png', 'ta', 'та', '2021-10-29 16:18:43', '2021-10-29 16:18:45', 'hira'),
(27, '/img/hira/clear/h.ochi.png', 'chi', 'чи', '2021-10-29 16:18:46', '2021-10-29 16:18:48', 'hira'),
(28, '/img/hira/clear/h.otsu.png', 'tsu', 'цу', '2021-10-29 16:18:50', '2021-10-29 16:18:52', 'hira'),
(29, '/img/hira/clear/h.ote.png', 'te', 'тэ', '2021-10-29 16:18:55', '2021-10-29 16:18:56', 'hira'),
(30, '/img/hira/clear/h.oto.png', 'to', 'то', '2021-10-29 16:18:58', '2021-10-29 16:19:00', 'hira'),
(31, '/img/hira/clear/h.oda.png', 'da', 'да', '2021-10-29 16:19:01', '2021-10-29 16:19:03', 'hira'),
(32, '/img/hira/clear/h.odzi.png', 'dzi', 'дзи', '2021-10-29 16:19:04', '2021-10-29 16:19:06', 'hira'),
(33, '/img/hira/clear/h.odzu.png', 'zu', 'дзу', '2021-10-29 16:19:07', '2021-10-29 16:19:08', 'hira'),
(34, '/img/hira/clear/h.ode.png', 'de', 'дэ', '2021-10-29 16:19:12', '2021-10-29 16:19:13', 'hira'),
(35, '/img/hira/clear/h.odo.png', 'do', 'до', '2021-10-29 16:19:15', '2021-10-29 16:19:17', 'hira'),
(36, '/img/hira/clear/h.ona.png', 'na', 'на', '2021-10-29 16:19:20', '2021-10-29 16:19:21', 'hira'),
(37, '/img/hira/clear/h.oni.png', 'ni', 'ни', '2021-10-29 16:19:23', '2021-10-29 16:19:25', 'hira'),
(38, '/img/hira/clear/h.onu.png', 'nu', 'ну', '2021-10-29 16:19:26', '2021-10-29 16:19:28', 'hira'),
(39, '/img/hira/clear/h.one.png', 'ne', 'нэ', '2021-10-29 16:19:31', '2021-10-29 16:19:33', 'hira'),
(40, '/img/hira/clear/h.ono.png', 'no', 'но', '2021-10-29 16:19:36', '2021-10-29 16:19:38', 'hira'),
(41, '/img/hira/clear/h.oha.png', 'ha', 'ха', '2021-10-29 16:19:40', '2021-10-29 16:19:43', 'hira'),
(42, '/img/hira/clear/h.ohi.png', 'hi', 'хи', '2021-10-29 16:19:46', '2021-10-29 16:19:48', 'hira'),
(43, '/img/hira/clear/h.ofu.png', 'hu', 'ху', '2021-10-29 16:19:49', '2021-10-29 16:19:51', 'hira'),
(44, '/img/hira/clear/h.ohe.png', 'he', 'хэ', '2021-10-29 16:19:52', '2021-10-29 16:19:54', 'hira'),
(45, '/img/hira/clear/h.oho.png', 'ho', 'хо', '2021-10-29 16:19:56', '2021-10-29 16:19:57', 'hira'),
(46, '/img/hira/clear/h.oba.png', 'ba', 'ба', '2021-10-29 16:19:59', '2021-10-29 16:20:00', 'hira'),
(47, '/img/hira/clear/h.obi.png', 'bi', 'би', '2021-10-29 16:20:02', '2021-10-29 16:20:04', 'hira'),
(48, '/img/hira/clear/h.obu.png', 'bu', 'бу', '2021-10-29 16:20:08', '2021-10-29 16:20:10', 'hira'),
(49, '/img/hira/clear/h.obe.png', 'be', 'бэ', '2021-10-29 16:20:13', '2021-10-29 16:20:15', 'hira'),
(50, '/img/hira/clear/h.obo.png', 'bo', 'бо', '2021-10-29 16:20:17', '2021-10-29 16:20:19', 'hira'),
(51, '/img/hira/clear/h.opa.png', 'pa', 'па', '2021-10-29 16:20:21', '2021-10-29 16:20:28', 'hira'),
(52, '/img/hira/clear/h.opi.png', 'pi', 'пи', '2021-10-29 16:20:29', '2021-10-29 16:20:33', 'hira'),
(53, '/img/hira/clear/h.opu.png', 'pu', 'пу', '2021-10-29 16:20:35', '2021-10-29 16:20:30', 'hira'),
(54, '/img/hira/clear/h.ope.png', 'pe', 'пэ', '2021-10-29 16:20:44', '2021-10-29 16:20:57', 'hira'),
(55, '/img/hira/clear/h.opo.png', 'po', 'по', '2021-10-29 16:20:59', '2021-10-29 16:21:01', 'hira'),
(56, '/img/hira/clear/h.oma.png', 'ma', 'ма', '2021-10-29 16:21:03', '2021-10-29 16:21:04', 'hira'),
(57, '/img/hira/clear/h.omi.png', 'mi', 'ми', '2021-10-29 16:21:06', '2021-10-29 16:21:08', 'hira'),
(58, '/img/hira/clear/h.omu.png', 'mu', 'му', '2021-10-29 16:21:10', '2021-10-29 16:21:12', 'hira'),
(59, '/img/hira/clear/h.ome.png', 'me', 'мэ', '2021-10-29 16:21:13', '2021-10-29 16:21:15', 'hira'),
(60, '/img/hira/clear/h.omo.png', 'mo', 'мо', '2021-10-29 16:21:17', '2021-10-29 16:21:18', 'hira'),
(61, '/img/hira/clear/h.oya.png', 'ya', 'я', '2021-10-29 16:21:21', '2021-10-29 16:21:23', 'hira'),
(62, '/img/hira/clear/h.oyu.png', 'yu', 'ю', '2021-10-29 16:21:24', '2021-10-29 16:21:27', 'hira'),
(63, '/img/hira/clear/h.oyo.png', 'yo', 'ё', '2021-10-29 16:21:28', '2021-10-29 16:21:31', 'hira'),
(64, '/img/hira/clear/h.ora.png', 'ra', 'ра', '2021-10-29 16:21:32', '2021-10-29 16:21:34', 'hira'),
(65, '/img/hira/clear/h.ori.png', 'ri', 'ри', '2021-10-29 16:21:35', '2021-10-29 16:21:37', 'hira'),
(66, '/img/hira/clear/h.oru.png', 'ru', 'ру', '2021-10-29 16:21:39', '2021-10-29 16:21:41', 'hira'),
(67, '/img/hira/clear/h.ore.png', 're', 'рэ', '2021-10-29 16:21:42', '2021-10-29 16:21:44', 'hira'),
(68, '/img/hira/clear/h.oro.png', 'ro', 'ро', '2021-10-29 16:21:47', '2021-10-29 16:21:49', 'hira'),
(69, '/img/hira/clear/h.owa.png', 'wa', 'ва', '2021-10-29 16:21:51', '2021-10-29 16:21:53', 'hira'),
(70, '/img/hira/clear/h.owo.png', 'wo', 'во', '2021-10-29 16:21:56', '2021-10-29 16:21:58', 'hira'),
(71, '/img/hira/clear/h.on.png', 'n', 'н', '2021-10-29 16:21:59', '2021-10-29 16:22:01', 'hira'),
(93, '/img/kata/clear/k.oa.png', 'a', 'а', '2021-10-29 16:24:24', '2021-10-29 16:24:26', 'kata'),
(94, '/img/kata/clear/k.oi.png', 'i', 'и', '2021-10-29 16:24:28', '2021-10-29 16:24:30', 'kata'),
(95, '/img/kata/clear/k.ou.png', 'u', 'у', '2021-10-29 16:24:32', '2021-10-29 16:24:33', 'kata'),
(96, '/img/kata/clear/k.oe.png', 'e', 'э', '2021-10-29 16:24:35', '2021-10-29 16:24:36', 'kata'),
(97, '/img/kata/clear/k.oo.png', 'o', 'о', '2021-10-29 16:24:37', '2021-10-29 16:24:39', 'kata'),
(98, '/img/kata/clear/k.oka.png', 'ka', 'ка', '2021-10-29 16:24:42', '2021-10-29 16:24:43', 'kata'),
(99, '/img/kata/clear/k.oki.png', 'ki', 'ки', '2021-10-29 16:24:45', '2021-10-29 16:24:46', 'kata'),
(100, '/img/kata/clear/k.oku.png', 'ku', 'ку', '2021-10-29 16:24:48', '2021-10-29 16:24:50', 'kata'),
(101, '/img/kata/clear/k.oke.png', 'ke', 'ке', '2021-10-29 16:24:52', '2021-10-29 16:24:53', 'kata'),
(102, '/img/kata/clear/k.oko.png', 'ko', 'ко', '2021-10-29 16:24:55', '2021-10-29 16:24:57', 'kata'),
(103, '/img/kata/clear/k.oga.png', 'ga', 'га', '2021-10-29 16:24:58', '2021-10-29 16:25:00', 'kata'),
(104, '/img/kata/clear/k.ogi.png', 'gi', 'ги', '2021-10-29 16:25:01', '2021-10-29 16:25:03', 'kata'),
(105, '/img/kata/clear/k.ogu.png', 'gu', 'гу', '2021-10-29 16:25:04', '2021-10-29 16:25:10', 'kata'),
(106, '/img/kata/clear/k.oge.png', 'ge', 'ге', '2021-10-29 16:25:12', '2021-10-29 16:25:14', 'kata'),
(107, '/img/kata/clear/k.ogo.png', 'go', 'го', '2021-10-29 16:25:15', '2021-10-29 16:25:17', 'kata'),
(108, '/img/kata/clear/k.osa.png', 'sa', 'са', '2021-10-29 16:25:19', '2021-10-29 16:25:21', 'kata'),
(109, '/img/kata/clear/k.oshi.png', 'shi', 'щи', '2021-10-29 16:25:23', '2021-10-29 16:25:24', 'kata'),
(110, '/img/kata/clear/k.osu.png', 'su', 'су', '2021-10-29 16:25:26', '2021-10-29 16:25:28', 'kata'),
(111, '/img/kata/clear/k.ose.png', 'se', 'сэ', '2021-10-29 16:25:29', '2021-10-29 16:25:31', 'kata'),
(112, '/img/kata/clear/k.oso.png', 'so', 'со', '2021-10-29 16:25:32', '2021-10-29 16:25:34', 'kata'),
(113, '/img/kata/clear/k.oza.png', 'za', 'дза', '2021-10-29 16:25:36', '2021-10-29 16:25:37', 'kata'),
(114, '/img/kata/clear/k.oji.png', 'ji', 'дзи', '2021-10-29 16:25:39', '2021-10-29 16:25:40', 'kata'),
(115, '/img/kata/clear/k.ozu.png', 'zu', 'зу', '2021-10-29 16:25:42', '2021-10-29 16:25:43', 'kata'),
(116, '/img/kata/clear/k.oze.png', 'ze', 'дзэ', '2021-10-29 16:25:45', '2021-10-29 16:25:46', 'kata'),
(117, '/img/kata/clear/k.ozo.png', 'zo', 'дзо', '2021-10-29 16:25:48', '2021-10-29 16:25:49', 'kata'),
(118, '/img/kata/clear/k.ota.png', 'ta', 'та', '2021-10-29 16:25:51', '2021-10-29 16:25:52', 'kata'),
(119, '/img/kata/clear/k.ochi.png', 'chi', 'чи', '2021-10-29 16:25:54', '2021-10-29 16:25:55', 'kata'),
(120, '/img/kata/clear/k.otsu.png', 'tsu', 'цу', '2021-10-29 16:25:57', '2021-10-29 16:25:58', 'kata'),
(121, '/img/kata/clear/k.ote.png', 'te', 'тэ', '2021-10-29 16:26:00', '2021-10-29 16:26:01', 'kata'),
(122, '/img/kata/clear/k.oto.png', 'to', 'то', '2021-10-29 16:26:04', '2021-10-29 16:26:06', 'kata'),
(123, '/img/kata/clear/k.oda.png', 'da', 'да', '2021-10-29 16:26:08', '2021-10-29 16:26:14', 'kata'),
(124, '/img/kata/clear/k.oji.png', 'ji', 'дзи', '2021-10-29 16:26:13', '2021-10-29 16:26:16', 'kata'),
(125, '/img/kata/clear/k.odzu.png', 'dzu', 'дзу', '2021-10-29 16:26:18', '2021-10-29 16:26:20', 'kata'),
(126, '/img/kata/clear/k.ode.png', 'de', 'дэ', '2021-10-29 16:26:21', '2021-10-29 16:26:23', 'kata'),
(127, '/img/kata/clear/k.odo.png', 'do', 'до', '2021-10-29 16:26:24', '2021-10-29 16:26:26', 'kata'),
(128, '/img/kata/clear/k.ona.png', 'na', 'на', '2021-10-29 16:26:27', '2021-10-29 16:26:29', 'kata'),
(129, '/img/kata/clear/k.oni.png', 'ni', 'ни', '2021-10-29 16:26:30', '2021-10-29 16:26:32', 'kata'),
(130, '/img/kata/clear/k.onu.png', 'nu', 'ну', '2021-10-29 16:26:35', '2021-10-29 16:26:36', 'kata'),
(131, '/img/kata/clear/k.one.png', 'ne', 'нэ', '2021-10-29 16:26:38', '2021-10-29 16:26:40', 'kata'),
(132, '/img/kata/clear/k.ono.png', 'no', 'но', '2021-10-29 16:26:47', '2021-10-29 16:26:48', 'kata'),
(133, '/img/kata/clear/k.oha.png', 'ha', 'ха', '2021-10-29 16:26:50', '2021-10-29 16:26:51', 'kata'),
(134, '/img/kata/clear/k.ohi.png', 'hi', 'хи', '2021-10-29 16:26:52', '2021-10-29 16:26:54', 'kata'),
(135, '/img/kata/clear/k.ofu.png', 'hu', 'ху', '2021-10-29 16:26:55', '2021-10-29 16:26:59', 'kata'),
(136, '/img/kata/clear/k.ohe.png', 'he', 'хэ', '2021-10-29 16:27:01', '2021-10-29 16:26:57', 'kata'),
(137, '/img/kata/clear/k.oho.png', 'ho', 'хо', '2021-10-29 16:27:04', '2021-10-29 16:27:02', 'kata'),
(138, '/img/kata/clear/k.oba.png', 'ba', 'ба', '2021-10-29 16:27:08', '2021-10-29 16:27:07', 'kata'),
(139, '/img/kata/clear/k.obi.png', 'bi', 'би', '2021-10-29 16:27:11', '2021-10-29 16:27:09', 'kata'),
(140, '/img/kata/clear/k.obu.png', 'bu', 'бу', '2021-10-29 16:27:15', '2021-10-29 16:27:12', 'kata'),
(141, '/img/kata/clear/k.obe.png', 'be', 'бэ', '2021-10-29 16:27:17', '2021-10-29 16:27:18', 'kata'),
(142, '/img/kata/clear/k.obo.png', 'bo', 'бо', '2021-10-29 16:27:21', '2021-10-29 16:27:23', 'kata'),
(154, '/img/kata/clear/k.opa.png', 'pa', 'па', '2021-10-31 19:00:00', '2021-10-31 19:00:00', 'kata'),
(155, '/img/kata/clear/k.opi.png', 'pi', 'пи', '2021-10-31 19:00:00', '2021-10-31 19:00:00', 'kata'),
(156, '/img/kata/clear/k.opu.png', 'pu', 'пу', '2021-10-31 19:00:00', '2021-10-31 19:00:00', 'kata'),
(157, '/img/kata/clear/k.ope.png', 'pe', 'пэ', '2021-10-31 19:00:00', '2021-10-31 19:00:00', 'kata'),
(158, '/img/kata/clear/k.opo.png', 'po', 'по', '2021-10-31 19:00:00', '2021-10-31 19:00:00', 'kata'),
(159, '/img/kata/clear/k.oya.png', 'ya', 'я', '2021-10-31 19:00:00', '2021-10-31 19:00:00', 'kata'),
(160, '/img/kata/clear/k.oyu.png', 'yu', 'ю', '2021-10-31 19:00:00', '2021-10-31 19:00:00', 'kata'),
(161, '/img/kata/clear/k.oyo.png', 'yo', 'ё', '2021-10-31 19:00:00', '2021-10-31 19:00:00', 'kata'),
(162, '/img/kata/clear/k.ora.png', 'ra', 'ра', '2021-10-31 19:00:00', '2021-10-31 19:00:00', 'kata'),
(163, '/img/kata/clear/k.ori.png', 'ri', 'ри', '2021-10-31 19:00:00', '2021-10-31 19:00:00', 'kata'),
(164, '/img/kata/clear/k.oru.png', 'ru', 'ру', '2021-10-31 19:00:00', '2021-10-31 19:00:00', 'kata'),
(165, '/img/kata/clear/k.ore.png', 're', 'рэ', '2021-10-31 19:00:00', '2021-10-31 19:00:00', 'kata'),
(166, '/img/kata/clear/k.oro.png', 'ro', 'ро', '2021-10-31 19:00:00', '2021-10-31 19:00:00', 'kata'),
(167, '/img/kata/clear/k.owa.png', 'wa', 'ва', '2021-10-31 19:00:00', '2021-10-31 19:00:00', 'kata'),
(168, '/img/kata/clear/k.owo.png', 'wo', 'во', '2021-10-31 19:00:00', '2021-10-31 19:00:00', 'kata'),
(169, '/img/kata/clear/k.on.png', 'n', 'н', '2021-10-31 19:00:00', '2021-10-31 19:00:00', 'kata'),
(170, '0', '0', '0', NULL, NULL, '0');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_10_23_085931_create_users_table', 1),
(3, '2021_10_23_090011_create_statistics_table', 1),
(4, '2021_10_23_090041_create_gliphs_table', 1),
(5, '2021_10_23_090139_create_achivs_table', 1),
(6, '2021_10_23_090511_create_tests_table', 1),
(7, '2021_10_23_090632_create_theories_table', 1),
(8, '2021_10_23_090842_create_tasks_table', 1),
(9, '2021_10_23_091058_create_task_tests_table', 1),
(10, '2021_10_23_091122_create_theory_tests_table', 1),
(11, '2021_10_23_091155_create_theory_gliphs_table', 1),
(12, '2021_10_27_151831_statistic_tasks', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int UNSIGNED NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `a` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `b` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `d` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_gliphs` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `text`, `a`, `b`, `c`, `d`, `id_gliphs`, `created_at`, `updated_at`) VALUES
(1, 'Что это за иероглиф?', 'А', 'И', 'Э', 'У', 1, NULL, NULL),
(2, 'Что это за иероглиф?', 'Э', 'У', 'И', 'О', 4, NULL, NULL),
(3, 'Что это за иероглиф?', 'И', 'У', 'А', 'О', 2, NULL, NULL),
(4, 'Переведите это слово: ええ', 'Да', 'Нет', 'Пожалуйста', 'Хорошо', 170, NULL, NULL),
(5, 'Переведите это слово: いいえ', 'Нет', 'Да', 'Спасибо', 'Дом', 170, NULL, NULL),
(6, 'Что это за иероглиф?', 'О', 'А', 'У', 'И', 5, NULL, NULL),
(7, 'Переведите это слово: え', 'Картина', 'Да', 'Хорошо', 'Нет', 170, NULL, NULL),
(8, 'Что это за иероглиф?', 'У', 'Э', 'И', 'О', 3, NULL, NULL),
(9, 'Переведите это слово: いえ', 'Дом', 'Нет', 'Да', 'Хорошо', 170, NULL, NULL),
(10, 'Переведите это слово: いい', 'Хорошо', 'Нет', 'Да', 'Дом', 170, NULL, NULL),
(11, 'Что это за иероглиф?', 'Ки', 'Ке', 'И', 'Ку', 7, NULL, NULL),
(12, 'Что это за иероглиф?', 'Ку', 'Ко', 'Ки', 'Ка', 8, NULL, NULL),
(13, 'Переведите это слово: き', 'Дерево', 'Нет', 'Воздух', 'Пожалуйста', 170, NULL, NULL),
(14, 'Переведите это слово: くうき', 'Воздух', 'Осень', 'Спасибо', 'Красный', 170, NULL, NULL),
(15, 'Что это за иероглиф?', 'Ке', 'Ку', 'Ки', 'Ка', 9, NULL, NULL),
(16, 'Переведите это слово: いけ', 'Пруд', 'Станция', 'Осень', 'Нет', 170, NULL, NULL),
(17, 'Переведите это слово: えき', 'Станция', 'Пруд', 'Осень', 'Нет', 170, NULL, NULL),
(18, 'Что это за иероглиф?', 'Ка', 'А', 'Ко', 'Ке', 6, NULL, NULL),
(19, 'Что это за иероглиф?', 'Ко', 'Ки', 'Ке', 'О', 10, NULL, NULL),
(20, 'Переведите это слово: こい', 'Карп', 'Нет', 'Да', 'Дом', 170, NULL, NULL),
(21, 'Переведите это слово: あかい', 'Красный', 'Осень', 'Жёлтый', 'Пруд', 170, NULL, NULL),
(22, 'Переведите это слово: あき', 'Осень', 'Красный', 'Станция', 'Карп', 170, NULL, NULL),
(23, 'Что это за иероглиф?', 'Са', 'Си', 'Ки', 'И', 16, NULL, NULL),
(24, 'Что это за иероглиф?', 'Си', 'Ки', 'А', 'О', 17, NULL, NULL),
(25, 'Переведите это слово: あさ', 'Утро', 'Осень', 'День', 'Весна', 170, NULL, NULL),
(26, 'Что это за иероглиф?', 'Су', 'Щи', 'Са', 'О', 18, NULL, NULL),
(27, 'Переведите это слово: すし', 'Суши', 'Онигири', 'Стул', 'Еда', 170, NULL, NULL),
(28, 'Переведите это слово: おいしい', 'Вкусно', 'Сладости', 'Хорошо', 'Да', 170, NULL, NULL),
(29, 'Что это за иероглиф?', 'Со', 'Са', 'У', 'Ко', 20, NULL, NULL),
(30, 'Что это за иероглиф?', 'Сэ', 'Со', 'Ки', 'О', 19, NULL, NULL),
(31, 'Переведите это слово: おかし', 'Сладости', 'Вкусно', 'Нет', 'Еда', 170, NULL, NULL),
(32, 'Переведите это слово: かさ', 'Зонт', 'Дождь', 'День', 'Дом', 170, NULL, NULL),
(33, 'фвфв', 'Га', 'Го', 'Ка', 'А', 11, NULL, NULL),
(34, 'фвфв', 'Га', 'Го', 'Ка', 'А', 11, NULL, NULL),
(35, 'фвфв', 'Га', 'Го', 'Ка', 'А', 11, NULL, NULL),
(36, 'фвфв', 'Га', 'Го', 'Ка', 'А', 11, NULL, NULL),
(37, 'фвфв', 'Га', 'Го', 'Ка', 'А', 11, NULL, NULL),
(38, 'фвфв', 'Га', 'Го', 'Ка', 'А', 11, NULL, NULL),
(39, 'Что это за иероглиф?', 'Га', 'Го', 'Ка', 'А', 11, NULL, NULL),
(40, 'Переведите это слово がか:', 'Художник', 'Зонт', 'Осень', 'Красный', 170, NULL, NULL),
(43, 'eeg5rgrtg', 'h', 'h', 'g', 'h', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `task_tests`
--

CREATE TABLE `task_tests` (
  `id` int UNSIGNED NOT NULL,
  `id_tasks` int UNSIGNED NOT NULL,
  `id_tests` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `task_tests`
--

INSERT INTO `task_tests` (`id`, `id_tasks`, `id_tests`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 2),
(12, 12, 2),
(13, 13, 2),
(14, 14, 2),
(15, 15, 2),
(16, 16, 2),
(17, 17, 2),
(18, 18, 2),
(19, 19, 2),
(20, 20, 2),
(21, 21, 2),
(22, 22, 2),
(23, 23, 4),
(24, 24, 4),
(25, 25, 4),
(26, 26, 4),
(27, 27, 4),
(28, 28, 4),
(29, 29, 4),
(30, 30, 4),
(31, 31, 4),
(32, 32, 4),
(33, 39, 3),
(34, 40, 3),
(37, 43, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `tests`
--

CREATE TABLE `tests` (
  `id` int UNSIGNED NOT NULL,
  `qwCount` int NOT NULL,
  `imgTest` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_theory` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tests`
--

INSERT INTO `tests` (`id`, `qwCount`, `imgTest`, `id_theory`, `created_at`, `updated_at`) VALUES
(1, 10, 'http://japanese/storage/gHNy9F9ogWyGfrBIlNzFC5xhFG75nmmaWLZbd2pv.png', 1, NULL, NULL),
(2, 12, '/img/hira/clear/h.oka.png', 2, NULL, NULL),
(3, 9, '/img/hira/clear/h.oga.png', 3, NULL, NULL),
(4, 10, '/img/hira/clear/h.osa.png', 4, NULL, NULL),
(5, 7, '/img/hira/clear/h.oza.png', 5, NULL, NULL),
(6, 12, '/img/hira/clear/h.ota.png', 6, NULL, NULL),
(7, 7, '/img/hira/clear/h.oda.png', 7, NULL, NULL),
(8, 9, '/img/hira/clear/h.ona.png', 8, NULL, NULL),
(9, 10, '/img/hira/clear/h.oha.png', 9, NULL, NULL),
(10, 8, 'http://japanese/storage/es3kZ7p0PpDZePj9bybgik91knVfm1LQ4J33LLT2.png', 10, NULL, NULL),
(11, 5, '/img/hira/clear/h.opa.png', 11, NULL, NULL),
(12, 10, '/img/hira/clear/h.oma.png', 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `theories`
--

CREATE TABLE `theories` (
  `id` int UNSIGNED NOT NULL,
  `theoryTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theoryText` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `theories`
--

INSERT INTO `theories` (`id`, `theoryTitle`, `theoryText`, `created_at`, `updated_at`) VALUES
(1, 'Ряд \"А\"', 'В этом упражнении вы выучите ряд А - первый ряд Хираганы, а так же эти слова. Попробуйте их запомнить: <p class=\'words\'>ええ - да<br>いいえ - нет<br>え - картина<br>いえ - дом<br>いい - хорошо</p>', NULL, NULL),
(2, 'Ряд \"КА\"', 'В этом упражнении вы выучите ряд Ка, а так же эти слова. Попробуйте их запомнить: <p class=\'words\'>き - дерево<br>くうき - воздух<br>いけ - пруд<br>えき-станция<br>こい - карп<br>あかい - красный <br>あき - осень</p>', NULL, NULL),
(3, 'Ряд \"ГА\"', 'В этом упражнении вы познокомиетсь с дакутен. Это две маленькие точки (линии), распологающиеся с правой верхней стороны от иероглифа. Они выполняют роль озвончения гласных звуков в слогах. В случае со слогами из ряда \"Ка\" звук \"к\" становится звонким \"Г\". Так же вы выучите следующие слова. Попробуйте их запомнить: <p class=\"words\">えいが - ЭЙГА - фильм, кино<br>がか - ГАКА - художник<br>かぎ - КАГИ - ключь<br>かご - КАГО - карзина</p>', NULL, NULL),
(4, 'Ряд \"СА\"', 'В этом упражнении вы выучите ряд Са, а так же эти слова. Попробуйте их запомнить: <p class=\'words\'>かさ - зонт<br>おかし - сладости<br>おいしい - вкусно<br>すし - суши<br>あさ - день</p>', NULL, NULL),
(5, 'Ряд \"ЗА\"', 'В этом упражнении вы познакомитесь с озвонченными вариантами слогов из ряда \"Са\" - За. Так же вы выучите следующие слова: Попробуйте их запомнить: <p class=\"words\">ぎし - ГИСИ - инженер<br>かぞく - КАЗОКУ - семья</p>', NULL, NULL),
(6, 'Ряд \"ТА\"', 'В этом упражнении вы выучите ряд Та, а так же эти слова. Попробуйте их запомнить: <p class=\"words\">あした - АСиТА - завтра<br>あさって - АСАТТЭ - послезавтра<br>うち - УТИ - (свой) дом<br>ちいさい - ТИИСАЙ - маленький<br>たかい - ТАКАЙ - высокий;дорогой<br>とこ - ТОКО - где?<br>あつい - АЦУЙ - жаркий</p>', NULL, NULL),
(7, 'Ряд \"ДА\"', 'В этом упражнении вы познакомитесь с озвонченными вариантами слогов из ряда \"Та\" - Да. Так же вы выучите следующие слова: <p class=\"words\">だいがく - ДАИГАКУ - университет<br>だいがくせい - ДАИГАКуСЭЙ - студент</p>', NULL, NULL),
(8, 'Ряд \"НА\"', 'В этом упражнении вы выучите ряд На, а так же эти слова. Попробуйте их запомнить: <p class=\"words\">この - КОНО - этот, тот, эти<br>あに - АНИ - старший брат<br>あね - АНЭ - старшая сестра<br>なに - НАНИ - что?', NULL, NULL),
(9, 'Ряд \"ХА\"', 'В этом упражнении вы выучите ряд Ха, а так же эти слова. Попробуйте их запомнить: <p class=\"words\">はな - ХАНА - цветок<br>はい - ХАЙ - да<br>ひと - ХИТО - человек<br>ひくい - ХиКУЙ - низкий<br>ふかい - глубокий</p>', NULL, NULL),
(10, 'Ряд \"БА\"', 'В этом упражнении вы познакомитесь с озвонченными вариантами слогов из ряда \"Ха\" - Ба. Так же вы выучите следующие слова: <p class=\"words\">ふで - ФУДЭ - кисточка для письма<br>ぼく - БОКУ - я (мужчина, мальчик)<br>かべ - КАБЭ - стена</p>', NULL, NULL),
(11, 'Ряд \"ПА\"', 'В этом упражнении вы познакомитесь с уникальным для ряда \"Ха\" символом - хандакутен. Это символ круга с лева, сверху от иероглифа, он отупляет первый звук в слоге, переводя его в \"П\".<p class=\"words\"></p>', NULL, NULL),
(12, 'Ряд \"МА\"', 'В этом упражнении вы выучите ряд Са, а так же эти слова. Попробуйте их запомнить: <p class=\"words\">みせ - МИСЭ - магазин<br>さむい - САМУЙ - холодный (о погоде, ветре)<br>いもうと - ИМО:ТО - младшая сестра<br>せまい - СЭМАЙ - узкий, тесный<br>めがね - МЭГЕНЭ - очки</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `theory_gliphs`
--

CREATE TABLE `theory_gliphs` (
  `id` int UNSIGNED NOT NULL,
  `id_theories` int UNSIGNED NOT NULL,
  `id_gliphs` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `theory_gliphs`
--

INSERT INTO `theory_gliphs` (`id`, `id_theories`, `id_gliphs`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(16, 2, 6),
(17, 2, 7),
(18, 2, 8),
(19, 2, 9),
(20, 2, 10),
(21, 4, 16),
(22, 4, 17),
(23, 4, 18),
(24, 4, 19),
(25, 4, 20),
(31, 3, 11),
(32, 3, 12),
(33, 3, 13),
(34, 3, 14),
(35, 3, 15),
(36, 5, 21),
(37, 5, 22),
(38, 5, 23),
(39, 5, 24),
(40, 5, 25),
(41, 6, 26),
(42, 6, 27),
(43, 6, 28),
(44, 6, 29),
(45, 6, 30),
(46, 7, 31),
(47, 7, 32),
(48, 7, 33),
(49, 7, 34),
(50, 7, 35),
(51, 8, 36),
(52, 8, 37),
(53, 8, 38),
(54, 8, 39),
(55, 8, 40),
(56, 9, 41),
(57, 9, 42),
(58, 9, 43),
(59, 9, 44),
(60, 9, 45),
(61, 10, 46),
(62, 10, 47),
(63, 10, 48),
(64, 10, 49),
(65, 10, 50),
(66, 11, 51),
(67, 11, 52),
(68, 11, 53),
(69, 11, 54),
(70, 11, 55),
(71, 12, 56),
(72, 12, 57),
(73, 12, 58),
(74, 12, 59),
(75, 12, 60);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `logn` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patronim` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `logn`, `name`, `surname`, `patronim`, `pass`, `mail`, `remember_token`, `created_at`, `updated_at`) VALUES
(17, 'adminU', NULL, NULL, NULL, '$2y$10$N/iOjf8wPvPhZ83uRzYEX.46Uka6I7lpiYxJaRGb0JLuuMOwpRRXm', 'adminU@mail.ru', NULL, NULL, NULL),
(18, 'adminT', NULL, NULL, NULL, '$2y$10$gG6WAsyyuMHFQ3NTcrpNmuZKYtma38RAK5fY3tqL9qoT1m7ZcM9US', 'adminT@mail.ru', NULL, NULL, NULL),
(21, 'sergey1235', NULL, NULL, NULL, '$2y$10$XPghGTTkayoxgiiW2T14S.tbxZA8HXsaUPlbLtvSOfCjsppAqZUbq', 'sergey1235@mail.ru', NULL, NULL, NULL),
(23, 'aserrr', NULL, NULL, NULL, '$2y$10$3aDCKOyCOCj5njhhqkPydeZ/Ov7iu/BmlM4BwJuoQwtxDkwHsmL.u', 'aserr@maiol', NULL, NULL, NULL),
(24, 'OnLoh', NULL, NULL, NULL, '$2y$10$NOhK/dBiZ2/5vfBWsevyg.oaR5T7MpWIMIHwWnIy4mLD/xmdqGXGW', 'Loh@mail.ru', NULL, NULL, NULL),
(25, 'aseryn12', 'Егор', 'Париенко', 'Павлович', '$2y$10$M90XK/WrIaDH9O1kY4VHIejLa5helnlH9bHBXLOVdxxbWubt/oxYq', 'paregor@mail.ru', NULL, NULL, NULL),
(26, 'log12', NULL, NULL, NULL, '$2y$10$x13.G604aG/P4ojFBwfAxOa50yWab3DK5YBbMpNOXEDTWBuIoXFGy', 'log@mail.ru', NULL, NULL, NULL),
(27, 'prov34', NULL, NULL, NULL, '$2y$10$Nf.hs.LP2fH/Cnpx.gcPJ.eAYJrBF9GXsru4EDItu56yb4HX1tWwG', 'prov34@mail.ru', '842464', NULL, NULL),
(28, 'sssssss', NULL, NULL, NULL, '$2y$10$mdAZuDTUcoMIzrfFbqcBaeIyzTyshsjImjgX6QZO42h18Y/cnqGBu', 'sss@mail.ru', NULL, NULL, NULL),
(29, 'loggin22', NULL, NULL, NULL, '$2y$10$qo60pgSgdGLYfo4II1Y6/eXG6MLdW1dOHIX/ELWggDnLaaqlX7l8i', 'loggin@mail.ru', NULL, NULL, NULL),
(30, 'llll', NULL, NULL, NULL, '$2y$10$aKCmvp66uCWpWWVs1IpMKuxt08e3JPl/dSrP5/uU4JlYYnyF68PRS', 'llll@mail.ru', NULL, NULL, NULL),
(31, 'hhh', NULL, NULL, NULL, '$2y$10$R/HCf3jCWs3BMNMzMtH/..ccF0.SJG8GOwMupbM1LUnoLof26f1YK', 'hhh@mail.ru', NULL, NULL, NULL);

--
-- Триггеры `users`
--
DELIMITER $$
CREATE TRIGGER `delAll` BEFORE DELETE ON `users` FOR EACH ROW BEGIN
	DELETE FROM user_achivs WHERE id_users = OLD.id;
    DELETE FROM user_gliphs WHERE id_users = OLD.id;
    DELETE FROM user_tests WHERE id_users = OLD.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Структура таблицы `user_achivs`
--

CREATE TABLE `user_achivs` (
  `id` int UNSIGNED NOT NULL,
  `id_achivs` int UNSIGNED NOT NULL,
  `id_users` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user_achivs`
--

INSERT INTO `user_achivs` (`id`, `id_achivs`, `id_users`) VALUES
(8, 1, 21),
(10, 1, 23),
(11, 1, 24),
(12, 1, 25),
(13, 1, 26),
(14, 1, 27),
(15, 2, 25),
(16, 5, 25),
(17, 6, 25),
(18, 1, 31);

-- --------------------------------------------------------

--
-- Структура таблицы `user_gliphs`
--

CREATE TABLE `user_gliphs` (
  `id` int UNSIGNED NOT NULL,
  `id_gliphs` int UNSIGNED NOT NULL,
  `id_users` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user_gliphs`
--

INSERT INTO `user_gliphs` (`id`, `id_gliphs`, `id_users`) VALUES
(81, 1, 21),
(82, 4, 21),
(83, 2, 21),
(84, 5, 21),
(85, 3, 21),
(96, 1, 23),
(97, 4, 23),
(98, 2, 23),
(99, 5, 23),
(100, 3, 23),
(101, 1, 24),
(102, 4, 24),
(103, 2, 24),
(104, 5, 24),
(105, 3, 24),
(106, 1, 25),
(107, 4, 25),
(108, 2, 25),
(109, 5, 25),
(110, 3, 25),
(111, 1, 26),
(112, 4, 26),
(113, 2, 26),
(114, 5, 26),
(115, 3, 26),
(116, 7, 26),
(117, 8, 26),
(118, 9, 26),
(119, 6, 26),
(120, 10, 26),
(121, 1, 27),
(122, 4, 27),
(123, 2, 27),
(124, 5, 27),
(125, 3, 27),
(126, 7, 27),
(127, 8, 27),
(128, 9, 27),
(129, 6, 27),
(130, 10, 27),
(449, 6, 25),
(450, 7, 25),
(451, 8, 25),
(452, 9, 25),
(453, 10, 25),
(454, 11, 25),
(455, 12, 25),
(456, 13, 25),
(457, 14, 25),
(458, 15, 25),
(459, 16, 25),
(460, 17, 25),
(461, 18, 25),
(462, 19, 25),
(463, 20, 25),
(464, 21, 25),
(465, 22, 25),
(466, 23, 25),
(467, 24, 25),
(468, 25, 25),
(469, 26, 25),
(470, 27, 25),
(471, 28, 25),
(472, 29, 25),
(473, 30, 25),
(474, 31, 25),
(475, 32, 25),
(476, 33, 25),
(477, 34, 25),
(478, 35, 25),
(480, 36, 25),
(481, 37, 25),
(482, 38, 25),
(483, 39, 25),
(484, 40, 25),
(485, 41, 25),
(486, 42, 25),
(487, 43, 25),
(488, 44, 25),
(489, 45, 25),
(490, 46, 25),
(491, 47, 25),
(492, 48, 25),
(493, 49, 25),
(494, 50, 25),
(495, 51, 25),
(496, 52, 25),
(497, 53, 25),
(498, 54, 25),
(499, 55, 25),
(500, 56, 25),
(501, 57, 25),
(502, 58, 25),
(503, 59, 25),
(504, 60, 25),
(505, 61, 25),
(506, 62, 25),
(507, 63, 25),
(508, 64, 25),
(509, 65, 25),
(510, 66, 25),
(511, 67, 25),
(512, 68, 25),
(513, 69, 25),
(514, 70, 25),
(515, 71, 25),
(516, 93, 25),
(517, 94, 25),
(518, 95, 25),
(519, 96, 25),
(520, 97, 25),
(521, 98, 25),
(522, 99, 25),
(523, 100, 25),
(524, 101, 25),
(525, 102, 25),
(527, 103, 25),
(528, 104, 25),
(529, 105, 25),
(530, 106, 25),
(531, 107, 25),
(532, 108, 25),
(533, 109, 25),
(534, 110, 25),
(535, 111, 25),
(536, 112, 25),
(537, 113, 25),
(538, 114, 25),
(539, 115, 25),
(540, 116, 25),
(541, 117, 25),
(542, 118, 25),
(543, 119, 25),
(544, 120, 25),
(545, 121, 25),
(546, 122, 25),
(547, 123, 25),
(548, 124, 25),
(549, 125, 25),
(550, 126, 25),
(551, 127, 25),
(552, 128, 25),
(553, 129, 25),
(554, 130, 25),
(555, 131, 25),
(556, 132, 25),
(557, 133, 25),
(558, 134, 25),
(559, 135, 25),
(561, 136, 25),
(562, 137, 25),
(563, 138, 25),
(564, 139, 25),
(565, 140, 25),
(566, 141, 25),
(567, 142, 25),
(568, 154, 25),
(569, 155, 25),
(570, 156, 25),
(571, 157, 25),
(572, 158, 25),
(573, 159, 25),
(574, 160, 25),
(575, 161, 25),
(576, 162, 25),
(577, 163, 25),
(578, 164, 25),
(579, 165, 25),
(580, 166, 25),
(581, 167, 25),
(582, 168, 25),
(583, 169, 25),
(584, 1, 31),
(585, 4, 31),
(586, 2, 31),
(587, 5, 31),
(588, 3, 31);

-- --------------------------------------------------------

--
-- Структура таблицы `user_tests`
--

CREATE TABLE `user_tests` (
  `id` int UNSIGNED NOT NULL,
  `id_users` int UNSIGNED NOT NULL,
  `id_tests` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user_tests`
--

INSERT INTO `user_tests` (`id`, `id_users`, `id_tests`) VALUES
(24, 21, 1),
(27, 23, 1),
(28, 24, 1),
(29, 25, 1),
(30, 26, 1),
(31, 26, 2),
(32, 27, 1),
(33, 27, 2),
(35, 25, 2),
(36, 25, 3),
(37, 25, 4),
(38, 25, 5),
(39, 25, 6),
(40, 25, 7),
(41, 25, 8),
(42, 25, 9),
(43, 25, 10),
(44, 25, 11),
(45, 25, 12),
(46, 31, 1);

--
-- Триггеры `user_tests`
--
DELIMITER $$
CREATE TRIGGER `achivAdd` AFTER INSERT ON `user_tests` FOR EACH ROW BEGIN
IF (SELECT COUNT(id) FROM user_achivs WHERE id_achivs = 1 && id_users = NEW.id_users) = 0
THEN
INSERT INTO user_achivs (id_achivs, id_users) VALUES (1, NEW.id_users);
END IF;
END
$$
DELIMITER ;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `achivs`
--
ALTER TABLE `achivs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `achivs_name_unique` (`name`);

--
-- Индексы таблицы `gliphs`
--
ALTER TABLE `gliphs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gliphs` (`id_gliphs`);

--
-- Индексы таблицы `task_tests`
--
ALTER TABLE `task_tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tasks` (`id_tasks`),
  ADD KEY `id_tests` (`id_tests`);

--
-- Индексы таблицы `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_theory` (`id_theory`);

--
-- Индексы таблицы `theories`
--
ALTER TABLE `theories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `theory_gliphs`
--
ALTER TABLE `theory_gliphs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gliphs` (`id_gliphs`),
  ADD KEY `id_theories` (`id_theories`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_logn_unique` (`logn`),
  ADD UNIQUE KEY `users_pass_unique` (`pass`),
  ADD UNIQUE KEY `users_email_unique` (`mail`);

--
-- Индексы таблицы `user_achivs`
--
ALTER TABLE `user_achivs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_achivs` (`id_achivs`),
  ADD KEY `statistic_achivs_ibfk_2` (`id_users`);

--
-- Индексы таблицы `user_gliphs`
--
ALTER TABLE `user_gliphs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gliphs` (`id_gliphs`),
  ADD KEY `statistic_gliphs_ibfk_2` (`id_users`);

--
-- Индексы таблицы `user_tests`
--
ALTER TABLE `user_tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tests` (`id_tests`),
  ADD KEY `statistic_tests_ibfk_1` (`id_users`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `achivs`
--
ALTER TABLE `achivs`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `gliphs`
--
ALTER TABLE `gliphs`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT для таблицы `task_tests`
--
ALTER TABLE `task_tests`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `theories`
--
ALTER TABLE `theories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `theory_gliphs`
--
ALTER TABLE `theory_gliphs`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `user_achivs`
--
ALTER TABLE `user_achivs`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `user_gliphs`
--
ALTER TABLE `user_gliphs`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=589;

--
-- AUTO_INCREMENT для таблицы `user_tests`
--
ALTER TABLE `user_tests`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`id_gliphs`) REFERENCES `gliphs` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `task_tests`
--
ALTER TABLE `task_tests`
  ADD CONSTRAINT `task_tests_ibfk_1` FOREIGN KEY (`id_tasks`) REFERENCES `tasks` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `task_tests_ibfk_2` FOREIGN KEY (`id_tests`) REFERENCES `tests` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_ibfk_1` FOREIGN KEY (`id_theory`) REFERENCES `theories` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `theory_gliphs`
--
ALTER TABLE `theory_gliphs`
  ADD CONSTRAINT `theory_gliphs_ibfk_1` FOREIGN KEY (`id_gliphs`) REFERENCES `gliphs` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `theory_gliphs_ibfk_2` FOREIGN KEY (`id_theories`) REFERENCES `theories` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_achivs`
--
ALTER TABLE `user_achivs`
  ADD CONSTRAINT `user_achivs_ibfk_1` FOREIGN KEY (`id_achivs`) REFERENCES `achivs` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `user_achivs_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_gliphs`
--
ALTER TABLE `user_gliphs`
  ADD CONSTRAINT `user_gliphs_ibfk_1` FOREIGN KEY (`id_gliphs`) REFERENCES `gliphs` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `user_gliphs_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_tests`
--
ALTER TABLE `user_tests`
  ADD CONSTRAINT `user_tests_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `user_tests_ibfk_2` FOREIGN KEY (`id_tests`) REFERENCES `tests` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
