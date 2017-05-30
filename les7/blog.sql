-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 30 2017 г., 23:32
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Artcicles DB';

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `id_user`, `title`, `text`, `dt`) VALUES
(24, 0, 'Lorem Ipsum', 'Lorem Ipsum - это текст-&quot;рыба&quot;, часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной &quot;рыбой&quot; для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum', '2017-05-24 17:06:59'),
(25, 0, 'Nostrud fabellas', 'Lorem ipsum dolor sit amet, diceret instructior id has. Ut errem oblique voluptatum mea, ullum primis suavitate eum ad. His quas impetus posidonium ut. Vel debet corpora id, eos virtute epicuri at. Ius cu dolorum detraxit, an saepe dictas sed.\r\n\r\nNostrud fabellas moderatius eu sed. Vel et erat invenire philosophia. Mel ad aperiri patrioque definitiones, ut amet mutat impetus vix. Ea has quas tibique, nisl nihil vix ea. Ad his quis audiam hendrerit, ad dico prompta senserit duo.\r\n\r\nVelit appetere et pro, propriae vituperata te sea. Nec albucius omittantur accommodare no. Quem case euismod at eum, officiis quaestio disputationi est id. Ne vidit adolescens scriptorem vel, est cu choro everti mnesarchum. Magna eruditi ea his.\r\n\r\nAd nec eius soluta oblique, has utroque forensibus ad. Movet simul soleat ad has. Autem justo interesset vim at. Te mei inermis erroribus sententiae, in sea legimus platonem oportere, eu zril fabulas sed. Te cum lobortis corrumpit necessitatibus.\r\n\r\nEst singulis contentiones ne. Vero corrumpit euripidis eu nec. Eam id wisi iusto. Ipsum discere eum an. Graecis accusata sed te, voluptua scaevola intellegebat pro ei, ei tempor comprehensam signiferumque sea. Cu commodo quaeque perfecto ius, liber nonumy nostrud vix an. Ut accusam deterruisset eam.', '2017-05-24 17:06:48'),
(28, 0, 'asAS', 'ASDASD QADSDF SDF\r\nSDFSDF SDF\r\nSDFSDFSDF S\r\nSDFSDFSDF', '2017-05-30 21:28:26');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text CHARACTER SET utf8 NOT NULL,
  `password` text CHARACTER SET utf8 NOT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `dt`) VALUES
(14, 'user1', 'e14212cd08c96b64ef1255f319e59834a8e3940b268fb1a7efc9fc0ab3ea3c8b', '', '2017-05-16 11:34:25'),
(15, 'user2', 'e14212cd08c96b64ef1255f319e59834a8e3940b268fb1a7efc9fc0ab3ea3c8b', '', '2017-05-16 11:52:16'),
(16, 'user3', 'e14212cd08c96b64ef1255f319e59834a8e3940b268fb1a7efc9fc0ab3ea3c8b', '', '2017-05-17 09:48:10'),
(17, 'user5', 'e14212cd08c96b64ef1255f319e59834a8e3940b268fb1a7efc9fc0ab3ea3c8b', '', '2017-05-18 07:47:21');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD KEY `id` (`id`) USING BTREE,
  ADD KEY `id_2` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
