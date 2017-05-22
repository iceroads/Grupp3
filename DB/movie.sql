-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 22 maj 2017 kl 14:45
-- Serverversion: 10.1.16-MariaDB
-- PHP-version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `movie`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `producer` int(11) NOT NULL,
  `writer` int(11) NOT NULL,
  `rate` int(2) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `release_year` date NOT NULL,
  `info` text NOT NULL,
  `bild` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `movies`
--

INSERT INTO `movies` (`id`, `titel`, `producer`, `writer`, `rate`, `trailer`, `release_year`, `info`, `bild`, `genre`, `created_at`, `updated_at`) VALUES
(1, 'Titanic', 1, 1, 3, '<iframe width="560" height="315" src="https://www.youtube.com/embed/ZQ6klONCq4s" frameborder="0" allowfullscreen></iframe>', '1997-01-01', 'A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMDdmZGU3NDQtY2E5My00ZTliLWIzOTUtMTY4ZGI1YjdiNjk3XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Drama', '2017-05-22 11:22:59', '0000-00-00 00:00:00'),
(2, 'Guardians of the Galaxy Vol. 2', 5, 5, 5, '<iframe width="560" height="315" src="https://www.youtube.com/embed/dW1BIid8Osg" frameborder="0" allowfullscreen></iframe>', '2017-01-01', 'The team have some struggles as they meet some new people and interact with old adversaries.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTg2MzI1MTg3OF5BMl5BanBnXkFtZTgwNTU3NDA2MTI@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Adventure', '2017-05-22 11:47:51', '0000-00-00 00:00:00'),
(3, 'Fast & Furious 8', 9, 10, 3, '<iframe width="560" height="315" src="https://www.youtube.com/embed/uisBaTkQAEs" frameborder="0" allowfullscreen></iframe>', '2017-01-01', 'When a mysterious woman seduces Dom into the world of terrorism and a betrayal of those closest to him, the crew face trials that will test them as never before.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjMxODI2NDM5Nl5BMl5BanBnXkFtZTgwNjgzOTk1MTI@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Action', '2017-05-22 12:25:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabellstruktur `movie_user`
--

CREATE TABLE `movie_user` (
  `movie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `movie_user`
--

INSERT INTO `movie_user` (`movie_id`, `user_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(2, 6),
(2, 7),
(2, 8);

-- --------------------------------------------------------

--
-- Tabellstruktur `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `roles`
--

INSERT INTO `roles` (`id`, `roll`, `created_at`, `updated_at`) VALUES
(1, 'Star', '2017-05-22 12:34:07', '0000-00-00 00:00:00'),
(2, 'Writer', '2017-05-22 12:34:15', '0000-00-00 00:00:00'),
(3, 'Director', '2017-05-22 12:34:24', '0000-00-00 00:00:00'),
(4, 'Producer', '2017-05-22 12:35:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabellstruktur `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(2, 1),
(3, 1),
(4, 1),
(1, 2),
(2, 2),
(4, 2),
(1, 3),
(1, 4),
(4, 4),
(2, 5),
(4, 5),
(3, 5),
(1, 6),
(4, 6),
(1, 7),
(2, 7),
(1, 8),
(4, 8),
(1, 9),
(3, 9),
(4, 9),
(2, 10),
(3, 10),
(4, 10);

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_namn` varchar(255) NOT NULL,
  `e_namn` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `info` text NOT NULL,
  `bild` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `f_namn`, `e_namn`, `birthdate`, `info`, `bild`, `created_at`, `updated_at`) VALUES
(1, 'James', 'Cameron', '1945-08-16', 'James Francis Cameron was born on August 16, 1954 in Kapuskasing, Ontario, Canada. He moved to the United States in 1971. The son of an engineer, he majored in physics at California State University before switching to English, and eventually dropping out. He then drove a truck to support his screenwriting ambition. He landed his first professional film job as art director, miniature-set builder, and process-projection supervisor on Roger Corman''s Kriget bortom stjärnorna (1980) and had his first experience as a director with a two week stint on Piraya 2 - De flygande mördarna (1981) before being fired. In 1984, he wrote and directed Terminator (1984), a futuristic action-thriller starring Arnold Schwarzenegger, Michael Biehn and Linda Hamilton. It was a huge success. After this came a string of successful science-fiction action films such as Aliens - Återkomsten (1986), Avgrunden (1989) and Terminator 2 - Domedagen (1991). In 1990, Cameron formed his own production company, Lightstorm Entertainment. In 1997, he wrote and directed Titanic (1997), a romance epic about two young lovers from social classes who meet on board the famous ship. The movie went on to break all box office records and earned eleven Academy Awards. It became the highest grossing movie of all time. The rest is history. James Cameron is now one of the most sought-after directors in Hollywood. He was formerly married to producer Gale Anne Hurd, who produced several of his films. In 2000, he married actress Suzy Amis, who appeared in Titanic, and they have three children.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjI0MjMzOTg2MF5BMl5BanBnXkFtZTcwMTM3NjQxMw@@._V1_UX214_CR0,0,214,317_AL_.jpg', '2017-05-22 11:17:17', '0000-00-00 00:00:00'),
(2, 'Leonardo', 'DiCaprio', '1974-11-11', 'Few actors in the world have had a career quite as diverse as Leonardo DiCaprio''s. DiCaprio has gone from relatively humble beginnings, as a supporting cast member of the sitcom Pappa vet bäst (1985) and low budget horror movies, such as Critters 3 (1991), to a major teenage heartthrob in the 1990s, as the hunky lead actor in movies such as Romeo & Julia (1996) and Titanic (1997), to then become a leading man in Hollywood blockbusters, made by internationally renowned directors such as Martin Scorsese and Christopher Nolan.\r\n\r\nLeonardo Wilhelm DiCaprio was born November 11, 1974 in Los Angeles, California, the only child of Irmelin DiCaprio (née Indenbirken) and former comic book artist George DiCaprio. His father is of Italian and German descent, and his mother, who is German-born, is of German and Russian ancestry. His middle name, "Wilhelm", was his maternal grandfather''s first name. Leonardo''s father had achieved minor status as an artist and distributor of cult comic book titles, and was even depicted in several issues of American Splendor, the cult semi-autobiographical comic book series by the late ''Harvey Pekar'', a friend of George''s. Leonardo''s performance skills became obvious to his parents early on, and after signing him up with a talent agent who wanted Leonardo to perform under the stage name "Lenny Williams", DiCaprio began appearing on a number of television commercials and educational programs.\r\n', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjI0MTg3MzI0M15BMl5BanBnXkFtZTcwMzQyODU2Mw@@._V1_UY317_CR10,0,214,317_AL_.jpg', '2017-05-22 11:18:25', '0000-00-00 00:00:00'),
(3, 'Kate', 'Winslet', '1975-10-05', 'Ask Kate Winslet what she likes about any of her characters, and the word "ballsy" is bound to pop up at least once. The British actress has made a point of eschewing straightforward pretty-girl parts in favor of more devilish damsels; as a result, she''s built an eclectic resume that runs the gamut from Shakespearean tragedy to modern-day mysticism and erotica.\r\n\r\nKate Elizabeth Winslet was born in Reading, Berkshire, into a family of thespians -- parents Roger Winslet and Sally Anne Bridges-Winslet were both stage actors, maternal grandparents Oliver and Linda Bridges ran the Reading Repertory Theatre, and uncle Robert Bridges was a fixture in London''s West End theatre district. Kate came into her talent at an early age. She scored her first professional gig at eleven, dancing opposite the Honey Monster in a commercial for a kids'' cereal. She started acting lessons around the same time, which led to formal training at a performing arts high school. Over the next few years, she appeared on stage regularly and landed a few bit parts in sitcoms. Her first big break came at age 17, when she was cast as an obsessive adolescent in Svarta änglar (1994). The film, based on the true story of two fantasy-gripped girls who commit a brutal murder, received modest distribution but was roundly praised by critics.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BODgzMzM2NTE0Ml5BMl5BanBnXkFtZTcwMTcyMTkyOQ@@._V1_UX214_CR0,0,214,317_AL_.jpg', '2017-05-22 11:20:25', '0000-00-00 00:00:00'),
(4, 'Billy', 'Zane', '1966-02-24', 'William George Zane, better known as Billy Zane, was born on February 24, 1966 in Chicago, Illinois, to Thalia (Colovos) and William Zane, both of Greek ancestry. His parents were amateur actors and managed a medical technical school. Billy has an older sister, actress and singer Lisa Zane. Billy was bitten by the acting bug early on. In his early teens, he attended Harand Camp of the Theater Arts in Elkhart Lake, Wisconsin. In 1982, he attended the American School in Switzerland. His high school days were spent at Francis Parker High School in Chicago, Illinois. Daryl Hannah and Jennifer Beals also attended Parker, prior to Billy''s attendance.\r\n\r\nSoon after graduating from high school, Billy decided to venture out to California to attempt acting for the first time. Within three weeks, he won his very first big screen role in Tillbaka till framtiden (1985), playing the role of Match, one of Biff Tannen''s thugs. He would later reprise that role for the sequel Tillbaka till framtiden del II (1989). Then after a small role in the science fiction horror film Critters (1986), he landed starring roles in several television films. Billy played villain Hughie Warriner in the Australian thriller film Lugnt vatten (1989), where he met his future wife, Lisa Collins.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTI5NzA2NTE0NF5BMl5BanBnXkFtZTcwNzAxMTUxMw@@._V1_UY317_CR15,0,214,317_AL_.jpg', '2017-05-22 11:21:13', '0000-00-00 00:00:00'),
(5, 'James', 'Gunn', '1966-08-05', 'James Gunn was born and raised in St. Louis, Missouri in a large Irish Catholic family. His father and his uncles were all lawyers. He has been writing and performing as long as he can remember. He began making 8mm films at the age of 12. Many of these were comedic splatter films featuring his brothers being disemboweled by zombies. Gunn dropped', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTYxMDgzMjA5OV5BMl5BanBnXkFtZTcwMzMwMTUxNw@@._V1_UY317_CR11,0,214,317_AL_.jpg', '2017-05-22 11:45:52', '0000-00-00 00:00:00'),
(6, 'Chris', 'Pratt', '1979-05-21', 'Christopher Michael Pratt is an American film and television actor. He came to prominence from his television roles, including Bright Abbott in Everwood (2002), Ché in O.C. (2003), and Andy Dwyer and Parks and Recreation (2009), and notable film roles in Moneyball (2011), The Five-Year Engagement (2012), Zero Dark Thirty (2012),', 'https://images-na.ssl-images-amazon.com/images/M/MV5BNzg3MTgwOTgzMV5BMl5BanBnXkFtZTgwODIxMTUwMjE@._V1_UX214_CR0,0,214,317_AL_.jpg', '2017-05-22 12:12:10', '0000-00-00 00:00:00'),
(7, 'Zoe', 'Saldana', '1978-06-19', 'Zoe Saldana was born on June 19, 1978 in Passaic, New Jersey, to Asalia Nazario and Aridio Saldaña. Her father was Dominican and her mother is Puerto Rican. She was raised in Queens, New York. When she was 10 years old, she and her family moved to the Dominican Republic where they would live for the next seven years. While living in the Dominican', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjA4NDk1NTA1OV5BMl5BanBnXkFtZTcwMTIzMjQ4Ng@@._V1_UY317_CR8,0,214,317_AL_.jpg', '2017-05-22 12:14:56', '0000-00-00 00:00:00'),
(8, 'Dave', 'Bautista', '1969-01-18', 'David Michael Bautista, Jr. was born on January 18, 1969 in Washington, D.C., to Donna Raye (Mullins) and David Michael Bautista. His father is Filipino, and his mother has Greek ancestry. When WCW officials told him he''d never make it in sports entertainment, Bautista pushed himself to achieve his dream of being a Superstar. In May 2002, he made ', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjI4NjQ5NDA5M15BMl5BanBnXkFtZTgwNDE0MjQzMjE@._V1_UY317_CR142,0,214,317_AL_.jpg', '2017-05-22 12:16:10', '0000-00-00 00:00:00'),
(9, 'F. Gary', 'Gray', '1969-06-17', 'F. Gary Gray was born on July 17, 1969 in New York City, New York, USA as Felix Gary Gray. He is a director and actor, known for The Italian Job (2003), Law Abiding Citizen (2009) and Straight Outta Compton (2015)', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTQzNTAwNzY4N15BMl5BanBnXkFtZTcwOTU5MzE0NQ@@._V1_UX214_CR0,0,214,317_AL_.jpg', '2017-05-22 12:22:46', '0000-00-00 00:00:00'),
(10, 'Gary', 'Scott Thompson', '1959-11-07', 'Gary Scott Thompson is a writer, producer, and director. Among his many films and TV series: writer of "The Fast and the Furious," creator and executive producer of NBC''s "Las Vegas," co-developer, writer, and executive producer of TF1 and NBC''s "Taxi Brooklyn," and executive producer of NBC''s reboot "Knight Rider." Thompson grew up in Pago Pago', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMzUzNDU2Mzg5NV5BMl5BanBnXkFtZTcwMzUwNDcyMg@@._V1_UX214_CR0,0,214,317_AL_.jpg', '2017-05-22 12:24:11', '0000-00-00 00:00:00');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `movie_user`
--
ALTER TABLE `movie_user`
  ADD KEY `film_id` (`movie_id`),
  ADD KEY `person_id` (`user_id`);

--
-- Index för tabell `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `roll_id` (`role_id`),
  ADD KEY `person_id` (`user_id`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT för tabell `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `movie_user`
--
ALTER TABLE `movie_user`
  ADD CONSTRAINT `movie_user_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_user_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriktioner för tabell `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
