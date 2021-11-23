-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 23 2021 г., 16:38
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `list_co`
--

-- --------------------------------------------------------

--
-- Структура таблицы `sotr`
--

CREATE TABLE IF NOT EXISTS `sotr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `fname` text NOT NULL,
  `oname` text NOT NULL,
  `dol` text NOT NULL,
  `zp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `sotr`
--

INSERT INTO `sotr` (`id`, `name`, `fname`, `oname`, `dol`, `zp`) VALUES
(2, 'Михаил', 'Лобачевский', 'Игоревич', 'Кассир', 20000),
(3, 'Константин', 'Козырёв', 'Олегович', 'Менеджер', 30000),
(4, 'Палина', 'Гусова', 'Викторовна', 'Главная', 5000000),
(5, 'Фёдор', 'Васильев', 'Игоревич', 'Оператор', 25000),
(7, 'Златья', 'Чижиткова', 'Натальевна', 'Секретарша', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
