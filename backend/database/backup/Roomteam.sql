-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 26 2024 г., 23:02
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Roomteam`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tours`
--

CREATE TABLE `tours` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `description` varchar(2555) NOT NULL,
  `price` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `total_users` int NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `tours`
--

INSERT INTO `tours` (`id`, `title`, `img_src`, `description`, `price`, `date`, `total_users`, `location`) VALUES
(1, 'Закопане (Польша)', 'http://roomteam-main/assets/images/b4fdc01696d52b09bfeecbcd3e2a83eb.jpg', 'Закопане — это небольшой город в южной Польше, расположенный у подножия Татр. Известен как центр зимних видов спорта и туризма, привлекая лыжников и сноубордистов. Летом Закопане предлагает пешие походы, альпинизм и красивые пейзажи.', '400', '26.05.2024', 6, 'Закопане (Польша)'),
(2, 'Дурмитор (Черногория)', 'http://roomteam-main/assets/images/1645619342_46-sportishka-com-p-chernoe-ozero-chernogoriya-turizm-krasivo-49.jpg', 'Черногория — это небольшая страна, расположенная на юго-востоке Европы, на побережье Адриатического моря. Она граничит с Хорватией, Боснией и Герцеговиной, Сербией, Косово и Албанией.Черногория обладает богатым культурным и историческим наследием, которое привлекает туристов со всего мира.', '600', '01.06.2024', 4, 'Дурмитор (Черногория)'),
(3, 'Гудаури (Грузия)', 'http://roomteam-main/assets/images/0_1c649d_b437d142_or.jpg', 'Гудаури — это популярный горнолыжный курорт, расположенный в Грузии, на южных склонах Большого Кавказа. Он находится примерно в 120 километрах к северу от Тбилиси, на высоте 2200 метров над уровнем моря.', '650', '10.06.2024', 10, 'Гудаури (Грузия)'),
(4, 'Чимбулак (Казахстан)', 'http://roomteam-main/assets/images/d31efeec94d179eb36cfd54c1016a4e3.png', 'Чимбулак (Шымбулак) — это один из самых известных горнолыжных курортов Казахстана, расположенный в живописных горах Заилийского Алатау, на высоте 2260 метров над уровнем моря. Он находится примерно в 25 километрах от Алматы, что делает его легко доступным для жителей и гостей города.', '550', '15.06.2024', 8, 'Чимбулак (Казахстан)'),
(5, 'Улудаг (Турция)', 'http://roomteam-main/assets/images/scale_1200.jpg', 'Улудал — это один из самых известных горнолыжных курортов Турции, расположенный на одноименной горе в регионе Мармара, примерно в 36 километрах южнее города Бурса.Улудал — это популярное место для зимнего отдыха как среди местных жителей, так и среди международных туристов благодаря своим природным красотам и хорошо развитой инфраструктуре.', '700', '22.06.2024', 10, 'Улудаг (Турция)'),
(6, 'Венген (Швейцария)', 'http://roomteam-main/assets/images/Wengen.jpg', 'Венген — это живописная горная деревня и популярный горнолыжный курорт в Швейцарии, расположенный в кантоне Берн, в районе Юнгфрау.Венген известен своими потрясающими видами на Альпы, уютной атмосферой и высоким уровнем сервиса, что делает его популярным местом для зимнего и летнего отдыха.', '600', '28.06.2024', 6, 'Венген (Швейцария)');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;