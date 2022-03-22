-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-03-22 19:02:36
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `portfolio`
--

-- --------------------------------------------------------

--
-- 資料表結構 `block`
--

CREATE TABLE `block` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sh` int(3) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `block`
--

INSERT INTO `block` (`id`, `name`, `sh`) VALUES
(1, 'contact', 1),
(2, 'about', 1),
(3, 'portfolio', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `contact`
--

CREATE TABLE `contact` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `msg`) VALUES
(3, 'juyy', 'iyui', 'uyiuyi'),
(5, 'wefew', 'fewf', 'wefwefewf'),
(7, 'ewfwe', 'fwef', 'ewfwefwf'),
(8, 'wefewf', 'ewfew', 'fewfewf'),
(9, 'wefewf', 'ewfew', 'fewfewf'),
(10, 'ewfew', 'fewf', 'ewfewfewf');

-- --------------------------------------------------------

--
-- 資料表結構 `contact_text`
--

CREATE TABLE `contact_text` (
  `id` int(11) UNSIGNED NOT NULL,
  `tel` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `time` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `contact_text`
--

INSERT INTO `contact_text` (`id`, `tel`, `email`, `time`) VALUES
(1, '09xxxxxxxx', 'aaaa@bbbb', '10:30~16:30');

-- --------------------------------------------------------

--
-- 資料表結構 `footer`
--

CREATE TABLE `footer` (
  `id` int(11) UNSIGNED NOT NULL,
  `color` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sh` int(3) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `footer`
--

INSERT INTO `footer` (`id`, `color`, `intro`, `sh`) VALUES
(1, '#add8e6', '預設', 1),
(2, '#FFFF00', '黃色', 0),
(3, '#00FF00', '綠色', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `footer_text`
--

CREATE TABLE `footer_text` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `footer_text`
--

INSERT INTO `footer_text` (`id`, `text`) VALUES
(1, 'Copyright © 2022 張家勳 ALL rights reserved');

-- --------------------------------------------------------

--
-- 資料表結構 `intro`
--

CREATE TABLE `intro` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `age` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `hobby` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `skill` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `intro` varchar(300) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `intro`
--

INSERT INTO `intro` (`id`, `name`, `age`, `hobby`, `skill`, `intro`) VALUES
(1, 'iuhiiygygi', '30歲', '玩遊戲、聽音樂', 'PHP、JS、Jquery、CSS', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore molestiae temporibus voluptas odio minima dolorum minus placeat nihil est vero neque sunt, repellendus, quaerat possimus quisquam maiores! Corporis, neque corrupti!AAA');

-- --------------------------------------------------------

--
-- 資料表結構 `introimg`
--

CREATE TABLE `introimg` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sh` int(3) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `introimg`
--

INSERT INTO `introimg` (`id`, `img`, `name`, `sh`) VALUES
(7, 'intro.jpg', 'intro', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `link` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link2` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `title` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `class` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `portfolios`
--

INSERT INTO `portfolios` (`id`, `img`, `sh`, `link`, `link2`, `title`, `class`) VALUES
(14, 'portfolio1.png', 1, 'http://220.128.133.15/s1100406/PHP/vote/index.php', 'https://github.com/phpgogogo/my_vote', 'Vote System', 'back'),
(15, 'portfolio2.png', 1, 'http://220.128.133.15/s1100406/PHP/calendar/index.php', 'https://github.com/phpgogogo/calendar', 'Calendar', 'back'),
(16, 'portfolio3.png', 1, 'http://220.128.133.15/s1100406/HTML/bootstrap_form.html', 'https://github.com/phpgogogo/bootstrap_form', 'Bootstrap Form', 'front'),
(17, 'turtle.png', 1, 'ai.html', '', 'Illustrator', 'etc'),
(18, 'banner.jpg', 1, 'ps.html', '', 'Photoshop', 'etc'),
(20, 'api.png', 1, 'http://220.128.133.15/s1100406/HTML/myapi/index.html', 'https://github.com/phpgogogo/API_test', 'API', 'front');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `contact_text`
--
ALTER TABLE `contact_text`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `footer_text`
--
ALTER TABLE `footer_text`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `introimg`
--
ALTER TABLE `introimg`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `block`
--
ALTER TABLE `block`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `contact_text`
--
ALTER TABLE `contact_text`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `footer_text`
--
ALTER TABLE `footer_text`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `intro`
--
ALTER TABLE `intro`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `introimg`
--
ALTER TABLE `introimg`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
