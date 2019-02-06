-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Июн 06 2018 г., 23:54
-- Версия сервера: 5.7.16
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `english`
--

-- --------------------------------------------------------

--
-- Структура таблицы `registr`
--

CREATE TABLE `registr` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `passwordagain` tinytext NOT NULL,
  `mail` tinytext NOT NULL,
  `regdata` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `registr`
--

INSERT INTO `registr` (`id`, `name`, `password`, `passwordagain`, `mail`, `regdata`) VALUES
(2, 'Anton', '123', '123', 'rockmen2016@mail.ru', '2017-09-27 13:43:36'),
(3, 'Сергей', '14', '14', 'rockm17@mail.ru', '2018-05-21 15:07:08');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `registr`
--
ALTER TABLE `registr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `registr`
--
ALTER TABLE `registr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
