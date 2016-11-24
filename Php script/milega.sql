-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Värd: localhost:3306
-- Tid vid skapande: 15 nov 2016 kl 14:42
-- Serverversion: 5.5.49-log
-- PHP-version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `milega`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `admin`
--

INSERT INTO `admin` (`id`, `email`) VALUES
(1, 'andre.hjalmarsson1@gmail.com');

-- --------------------------------------------------------

--
-- Tabellstruktur `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `answer` varchar(300) NOT NULL,
  `completed` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `answers`
--

INSERT INTO `answers` (`id`, `id_user`, `id_question`, `answer`, `completed`) VALUES
(1, 2, 1, 'Hejsan', 1),
(2, 2, 2, 'också', 1),
(3, 2, 6, 'Hejsan', 1),
(4, 3, 1, 'hejsan', 1),
(5, 4, 1, 'hejsans', 1),
(6, 5, 1, 'etrgr', 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `subcourse_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `questions`
--

INSERT INTO `questions` (`id`, `question`, `subcourse_id`) VALUES
(1, 'Det här vill jag med mitt ledarskap (vision):', 1),
(2, 'Vad vill jag åstadkomma med min verksamhet:', 1),
(3, 'Vilka konkreta saker måste jag ta tag i (lösa, utveckla, förbättra?', 1),
(4, 'Vilka av mina ledaregenskaper kan jag använda som bra resurser i det arbetet?', 1),
(5, 'I vilka delar behöver jag utvecklas eller anlita andra interna eller externa resurser?', 1),
(6, 'Utifrån min JTI-analys har jag följande styrkor som ledare:', 2),
(7, 'Utifrån min personliga analys har jag följande svagheter/förbättringsområden som ledare:', 2),
(8, 'I denna delövning skall du beskriva ditt uppdrag. Dvs inte bara din tjänstebeteckning utan vad skall du åstadkomma i din roll, vilka är dina intressenter, vem förväntar sig vad av dig i din roll?\r\n', 2),
(9, 'Jag har följande styrkor i min roll som ledare:', 2),
(10, 'Jag har följande svagheter/förbättringsområden i min roll som ledare:', 2),
(11, 'De allra flesta ledare vill vara bra ledare. Men att vara en bra ledare innebär olika saker för olika personer. På följande sätt vill just JAG vara en bra ledare:', 3),
(12, 'Vad vill jag att mina medarbetare, ledning och kollegor skall säga om mig som ledare?', 3),
(13, 'Enligt de intervjuer och den feedback jag fått i samband med 180-gradaren har jag tagit till mig följande viktiga aspekter beträffande mitt sätt att leda:', 4),
(14, 'Jag har nu arbetat systematiskt med att kartlägga mig själv och mitt ledarskap, inhämta feedback från andra samt fått till mig nya kunskaper här på kursen. Så här utvecklar jag mina styrkor:\r\n', 4),
(15, 'Vad måste jag fortsätta göra för att de skall säga så om mig?', 5),
(16, 'Vad skall jag börja göra mer av för att de skall säga så om mig?', 5),
(17, 'Vad skall jag börja göra mindre av för att de skall säga så om mig?', 5),
(18, 'Till vår sista träff tillsammans här på kursen vill jag berätta följande om mitt personliga ledarskap och mina mål/visioner inför framtiden (gå gärna tillbaks och ”uppgradera” din ledarskapsdeklaration på sid 2):', 6);

-- --------------------------------------------------------

--
-- Tabellstruktur `subcourses`
--

CREATE TABLE IF NOT EXISTS `subcourses` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `subcourses`
--

INSERT INTO `subcourses` (`id`, `name`) VALUES
(1, 'Introduktion'),
(2, 'Personlighet'),
(3, 'Ledarrollen'),
(4, 'Åtaganden'),
(5, 'Resultat'),
(6, 'Avslutning');

-- --------------------------------------------------------

--
-- Tabellstruktur `tokens`
--

CREATE TABLE IF NOT EXISTS `tokens` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `first` varchar(64) NOT NULL,
  `second` varchar(128) NOT NULL,
  `expire` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `tokens`
--

INSERT INTO `tokens` (`id`, `userid`, `first`, `second`, `expire`) VALUES
(1, 12, '?z5?1?0~$W?*?U??we???????B?p?\\???p]e,??V&\nn\Z`;???????l?\0', '??????2???&@???r??IJ ??L}0??q-?s??;?[??\Z?Fwd?6\n?!???67$U????/636?Ha ???wmg?1??I??<??_?\\5???1T?@???????D??.!', '2016-12-13 12:16:53'),
(2, 12, 'E??5F?H?4??4K?;N#w]????3,?V???\Z(mh\Z?È??Q??C??k?+???A', '?YP????k^??U1????G??\Z?3????:??6?,\r8y?i>TK??=????\0u?,C?[??~f?lz?\0b????&??R*?????j??\Z;?????6y?Q?''=?}??A?	?ñ????ZG', '2016-12-13 12:17:52'),
(3, 12, '?|qjp??A????|}?3.;?l??J$?b=???]?~$"???*\n??}????/Q?{??6.', 'BVe?5??>????H???~8QwS??????????@)??oiU7???Me?g????O??y??L?!C?????????R?=????OF???l?j?\\e??j??:?0Wn}:???/k', '2016-12-13 12:24:09'),
(4, 2, '>''I1Tpfb????Ly???`????j?2,???"?v?T2Rl??d?|?8?6?9g?[/r???', '?V??????Zv???d??!?m?G?A[:?T??nB.?<?o???''	9~??;=A???s??tyy??1???\0???:_???vk?H?R???"Zp/E1Bl1-x?#??H????i_&{T`jUB', '2016-12-13 12:38:03'),
(5, 3, '?Z??Y?8E??rW?K?S??-x!uH?(%?????b??/??X??T????^?????J{', 'zho?Y>Z?PF?RV?8?#?vq??*?j??''?k??ü???%??jRuBs?Y??)5????Nf??G?w?i.R:P#ZgY?6^?\0?\\UB?G?P?NR,???1oM???9???1o5????$z?', '2016-12-13 12:42:25'),
(6, 3, '!??{\n?4?k&9???o????>_?[?!?????R??T???)???\r??K?A??m', '?I?r?Q?k???1??8$???\nm?????}??s???uz?t???? j$V?.9?h%"?.??K?:?{????n@??+B2rS?k}??TT?v??|?J?P???J?]?J]??????\n?????!-', '2016-12-14 12:58:36'),
(7, 3, '???y???&O|??_\r?!????`\\_Dd?L??????4a3"7?|??:?	{!??', '?i??4;?_&?h??	?ZC[?z]??I?????y7B??\n??O2|?]/?H`?%:u/?P???????_????g?b???g??l?S\r:?p????d??\Z9o?????"\Z?y????_?', '2016-12-14 13:01:39'),
(8, 3, '??O??`?4?OE?????????n?3K?p???\n??+X?{?cB?/qt??\Z;J???????t?#`', '????\\\Z???7M????"\n;?????m?E?jD??a??6??e??C?m?U?t??$???N-??G?????????ky(???=F-	??jL?41\Z?}?DXu??1[???KB(?y>?X-w', '2016-12-14 13:02:20');

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `userpassword` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatarPic` varchar(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `username`, `userpassword`, `firstname`, `lastname`, `email`, `avatarPic`) VALUES
(1, 'Andre', '$2y$10$SDzsZM8ME9PG2DywR4FeJuNzVyn7X/MvU9XWE/u8mE/Hm.LjlJ53a', 'Andre', 'Hjalmarsson', 'andre.hjalmarsson1@gmail.com', 'image41.jpg'),
(3, 'Hanhja', '$2y$10$DlvmayQE.dOv3ZKRgYyyvuPSMGcj4SfxVHCRLa6xlT/iSrwRga4RW', 'Hans', 'Hjalmarsson', 'hans.hjalmarsson@outokumpu.com', 'image456.jpg'),
(4, 'bertil', '$2y$10$56jFpj7mZy9AoUI3YWTAzuAXzTSH2gLOJ0VxHppdc3936HOAxqZ3i', 'Bertil', 'Olsson', 'bertil@gmail.com', 'image884.jpg'),
(5, 'simon', '$2y$10$XusdZONhquLO2LdMcznlZu37e4i.fJMtChWgWP4LwOE.OOcZxvH6W', 'Simon', 'Olsson', 'simp@nz.se', 'image8.jpg');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `subcourses`
--
ALTER TABLE `subcourses`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT för tabell `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT för tabell `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT för tabell `subcourses`
--
ALTER TABLE `subcourses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT för tabell `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
