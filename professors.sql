-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 19 2018 г., 15:48
-- Версия сервера: 10.1.31-MariaDB
-- Версия PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `professors`
--

-- --------------------------------------------------------

--
-- Структура таблицы `professor`
--

CREATE TABLE `professor` (
  `name` varchar(30) NOT NULL,
  `about` text NOT NULL,
  `photo` varchar(150) NOT NULL,
  `class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `professor`
--

INSERT INTO `professor` (`name`, `about`, `photo`, `class`) VALUES
('beka', 'bratan', 'images/tp3.jpg', 'batya'),
('azich', 'loh', 'images/tp3.jpg', 'urod');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
