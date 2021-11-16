-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 15 2021 г., 19:33
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `firma`
--

-- --------------------------------------------------------

--
-- Структура таблицы `sotr`
--

CREATE TABLE IF NOT EXISTS `sotr` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `fame` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `dol` varchar(255) NOT NULL,
  `zp` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `sotr`
--

INSERT INTO `sotr` (`id`, `name`, `fame`, `lname`, `dol`, `zp`) VALUES
(1, 'Петр', 'Сидоров', 'Иванович', 'Директор', 50000),
(2, 'Игорь', 'Сидоренко', 'Петрович', 'Менеджер', 35000),
(3, 'Ольга', 'Петренко', 'Сергеевна', 'Бухгалтер', 40000),
(4, 'Анатолий', 'Гребанов', 'Геннадьевич', 'Менеджер', 37000),
(5, 'Светлана', 'Грибанова', 'Андреевна', 'Кассир', 30000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
