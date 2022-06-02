-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 02 2022 г., 13:23
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `school`
--

-- --------------------------------------------------------

--
-- Структура таблицы `add1s_uz`
--

CREATE TABLE `add1s_uz` (
  `id` bigint UNSIGNED NOT NULL,
  `src` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `add1s_uz`
--

INSERT INTO `add1s_uz` (`id`, `src`, `title`, `content`, `created_at`, `updated_at`) VALUES
(5, 'service-6.jpg', 'Office Security', 'Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et.', '2022-03-24 02:35:36', '2022-03-29 12:03:38'),
(6, 'service-1.jpg', 'Home Security', 'Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et.', '2022-03-24 02:36:31', '2022-03-24 02:53:13'),
(7, 'service-3.jpg', 'Industry Security', 'Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et', '2022-03-24 02:37:01', '2022-03-24 02:37:01');

-- --------------------------------------------------------

--
-- Структура таблицы `insert_login`
--

CREATE TABLE `insert_login` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `login` varchar(122) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `time` date NOT NULL,
  `tip` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `insert_login`
--

INSERT INTO `insert_login` (`id`, `name`, `login`, `tel`, `time`, `tip`) VALUES
(5, 'abdulmajid sattorov', 'sattorovabdumajid4@gmail.com', '911459500', '2022-02-19', 1),
(43, 'abdumajid', 'andumajid1@gmail.com', '99 999 99 33', '2022-02-23', 0),
(46, 'abdumajid', 'abdumajid@gmail.com', '99 999 99 33', '2022-03-05', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `time`) VALUES
(16, 'abdulbosit', 'assalomu alaykum', '2022-03-05'),
(17, 'assalomu alaykum', 'Maktabimizga xush kelibsiz ', '2022-03-05');

-- --------------------------------------------------------

--
-- Структура таблицы `news_2`
--

CREATE TABLE `news_2` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `rasm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news_2`
--

INSERT INTO `news_2` (`id`, `title`, `content`, `rasm`) VALUES
(16, 'Assalomu alaykim ', 'bizning saytimizga xush kelbsz ', 'instructor.jpg'),
(17, 'Abdumajid Sattorov', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab numquam sunt, reprehenderit animi, similique, libero impedit ipsa labore vitae quasi amet. Totam excepturi numquam ad. Mollitia nostrum laboriosam commodi rerum?', 'testimonial-2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `password`
--

CREATE TABLE `password` (
  `id` int NOT NULL,
  `log` varchar(100) NOT NULL,
  `pas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `password`
--

INSERT INTO `password` (`id`, `log`, `pas`) VALUES
(1, 'admin', '000');

-- --------------------------------------------------------

--
-- Структура таблицы `s-j`
--

CREATE TABLE `s-j` (
  `id` int NOT NULL,
  `savol` varchar(100) NOT NULL,
  `j-1` text NOT NULL,
  `j-2` text NOT NULL,
  `j-3` text NOT NULL,
  `t_j` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `shikoyat`
--

CREATE TABLE `shikoyat` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `tel` varchar(122) NOT NULL,
  `text` text NOT NULL,
  `tip` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `shikoyat`
--

INSERT INTO `shikoyat` (`id`, `name`, `tel`, `text`, `tip`) VALUES
(13, 'Adbumajid', '911459500', 'salom\r\n', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `s_j`
--

CREATE TABLE `s_j` (
  `id` int NOT NULL,
  `savol` varchar(200) NOT NULL,
  `j_1` text NOT NULL,
  `j_2` text NOT NULL,
  `j_3` text NOT NULL,
  `t_j` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `s_j`
--

INSERT INTO `s_j` (`id`, `savol`, `j_1`, `j_2`, `j_3`, `t_j`) VALUES
(10, 'rrrrrrrrrrrrrrr', '', '', '', ''),
(11, 'muhammad sollolohu alayhi vassallam qaysiyili tug\'ilishgan', '661', '571', '671', 'B');

-- --------------------------------------------------------

--
-- Структура таблицы `up2`
--

CREATE TABLE `up2` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `rasm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `up2`
--

INSERT INTO `up2` (`id`, `title`, `content`, `rasm`) VALUES
(2, 'American center  tashkent GRANTS', 'Toshkentdagi Amerika markazi onlayn loyihalar uchun grant e\'lon qildi\r\n\r\nJamiyatda ijobiy o\'zgarish qiladigan onlayn loyiha haqida g\'oyangiz bormi? Loyihangizni amalga oshirish uchun sarmoya kerakmi?\r\n\r\nShunday bo\'lsa, American Center Tashkent (ACT) grantiga ariza berishingiz mumkin. (https://t.me/ACTashkent/2138)\r\n\r\nACT jismoniy shaxslarning onlayn loyihalar uchun 1000 dollardan 8000 ming dollargacha grant ajratadi.\r\n', 'photo_2022-02-23_14-19-56.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `update1`
--

CREATE TABLE `update1` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `rasm` varchar(122) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `update1`
--

INSERT INTO `update1` (`id`, `title`, `content`, `rasm`) VALUES
(1, 'Hoshiyadan tashqarida ', 'Yigit o‘g‘rilik bilan qamaldi. Buni eshitgan birinchi o‘qituvchisi mahbusni ko‘rgani keldi.\r\n—Nega unday qilding?..\r\n—Bilmadim… –ko‘zini yerga tikdi yigit. –Maktab davri esingizdami? Daftar hoshiyasidan yozuvim chetga chiqib ketsa, bo‘lib turadi, derdingiz. O‘shanda qo‘limga bir urmagan ekansiz. Shunda qonun doirasidan chiqmas va bu yerda o‘tirmagan bo‘larmidim?', 'photo_2022-02-21_08-07-58.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `video`
--

CREATE TABLE `video` (
  `id` int NOT NULL,
  `video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `video`
--

INSERT INTO `video` (`id`, `video`) VALUES
(1, '11.mp4');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `add1s_uz`
--
ALTER TABLE `add1s_uz`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `insert_login`
--
ALTER TABLE `insert_login`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news_2`
--
ALTER TABLE `news_2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `s-j`
--
ALTER TABLE `s-j`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shikoyat`
--
ALTER TABLE `shikoyat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `s_j`
--
ALTER TABLE `s_j`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `up2`
--
ALTER TABLE `up2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `update1`
--
ALTER TABLE `update1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `add1s_uz`
--
ALTER TABLE `add1s_uz`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `insert_login`
--
ALTER TABLE `insert_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `news_2`
--
ALTER TABLE `news_2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `password`
--
ALTER TABLE `password`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `s-j`
--
ALTER TABLE `s-j`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `shikoyat`
--
ALTER TABLE `shikoyat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `s_j`
--
ALTER TABLE `s_j`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `up2`
--
ALTER TABLE `up2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `update1`
--
ALTER TABLE `update1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `video`
--
ALTER TABLE `video`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
