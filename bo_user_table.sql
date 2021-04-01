-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2021 年 4 月 01 日 03:49
-- サーバのバージョン： 5.7.32
-- PHP のバージョン: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `boo_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `bo_user_table`
--

CREATE TABLE `bo_user_table` (
  `id` int(12) NOT NULL,
  `user_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_pw` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `bo_user_table`
--

INSERT INTO `bo_user_table` (`id`, `user_name`, `user_id`, `user_pw`) VALUES
(8, '和也', 'kazuya', 'oizumi'),
(9, 'kazuya', 'kazuya', 'kazuya'),
(10, '木村', 'kimu', 'kimu'),
(11, '木村', 'kimu', 'kimu');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `bo_user_table`
--
ALTER TABLE `bo_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `bo_user_table`
--
ALTER TABLE `bo_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
