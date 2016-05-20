-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 20 2016 г., 15:15
-- Версия сервера: 10.0.17-MariaDB
-- Версия PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `final_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(32) CHARACTER SET utf8 NOT NULL,
  `message` varchar(128) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`id`, `name`, `message`) VALUES
(1, 'diana', 'hello world'),
(2, 'diana', 'hr'),
(3, 'diana', ''),
(4, 'Dias', 'svsv'),
(5, 'Dias', 'ssv'),
(6, 'Dias', 'diana hello'),
(7, 'Dias', 'svsvsvsvsvsvsvsvsv'),
(8, 'Assiya', 'hell oworld'),
(9, '', ''),
(10, '', ''),
(11, '', ''),
(12, '', ''),
(13, 'num', 'hello'),
(14, '', ''),
(15, '', ''),
(16, 'name', 'name'),
(17, 'num', 'cdc'),
(18, 'hh', 'hii world'),
(19, 'bb', 'nhngbf'),
(20, 'dd', '  j h'),
(21, 'dd', 'zm nanknnkaknxknx'),
(22, 'bsv', 'bsdb'),
(23, 'bsv', 'nvvnd\r\n'),
(24, '', 'hvvvhh'),
(25, '', 'knk'),
(26, '', ''),
(27, '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `email` varchar(32) CHARACTER SET utf8 NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 NOT NULL,
  `name` varchar(32) CHARACTER SET utf8 NOT NULL,
  `surname` varchar(32) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `registration`
--

INSERT INTO `registration` (`id`, `email`, `password`, `name`, `surname`) VALUES
(3, 'a', 'a9ced3dad556814ed46042de696e1849', 'caca', 'ac'),
(4, 'durak@durak.durak', '102342371ebf48c94c3659cf20805eab', 'durak', 'durak'),
(5, 'diana@mail', '202cb962ac59075b964b07152d234b70', '', ''),
(6, 'dian@hj', '73278a4a86960eeb576a8fd4c9ec6997', '', ''),
(35, 'name@name', 'name', 'name', 'name'),
(36, 'he@he', 'he', 'he', 'he'),
(37, 'di@ana', 'diana', 'diana', 'diana'),
(40, 'dia@na', '123', 'di', 'di'),
(41, 'dian@a', 'diana', 'di', 'di'),
(42, 'num@num', 'num', 'num', 'num'),
(43, 'hh', 'hh', 'hh', 'hh'),
(44, 'hh@hh', 'hh', 'hh', ' hh'),
(45, 'bb@b', 'bb', 'bb', 'bb'),
(46, 'ss', 'ss', 'ss', 'ss'),
(47, 'dd@dd', 'dd', 'dd', 'ddd'),
(48, 'bb@bb', 'bb', 'bsv', 'bvdb'),
(49, 'fgh', 'fgh', 'fghcv', 'dfghj');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT для таблицы `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
