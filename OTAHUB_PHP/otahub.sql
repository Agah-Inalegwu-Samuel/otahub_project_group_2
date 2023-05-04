-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2023 at 03:12 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otahub`
--

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

DROP TABLE IF EXISTS `community`;
CREATE TABLE IF NOT EXISTS `community` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `attachment` varchar(10000) NOT NULL,
  `post` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `community`
--

INSERT INTO `community` (`id`, `user_id`, `full_name`, `date`, `attachment`, `post`) VALUES
(12, 1, 'faithy', '2023-05-03 10:21:43', '02052393648.jpg', 'Trying to text run something'),
(11, 1, 'faithy', '2023-05-03 10:21:43', '02052393529.jpg', 'I&#039;m so happy that I&#039;m rounding up my project'),
(10, 1, 'faithy', '2023-05-03 10:21:43', '02052393325.jpg', 'Hello my neighbour&#039;s '),
(9, 1, 'faithy', '2023-05-03 10:21:43', '02052392311.jpg', 'Good morning People'),
(13, 1, 'faithy', '2023-05-03 10:21:43', '02052393827.webp', 'Test run again'),
(14, 1, 'faithy', '2023-05-03 10:21:43', '02052393858.jpg', 'Test run again'),
(15, 1, 'faithy', '2023-05-03 10:21:43', '02052394143.jpg', 'Better work this time around'),
(16, 1, 'faithy', '2023-05-03 10:21:43', '02052394405.jpg', 'Test run again'),
(17, 1, 'faithy', '2023-05-03 10:21:43', '02052394624.jpg', 'comedy'),
(18, 1, 'faithy', '2023-05-03 10:21:43', '020523111130.jpg', 'Hello fellas...hope you&#039;ll slept well'),
(19, 1, 'JACHIE', '2023-05-03 10:21:43', '030523120939.jpg', 'GOOD MORNING MY NEIGHBOURS'),
(20, 38, 'agah samuel', '2023-05-03 10:21:43', '03052383227.jpg', 'Hello world'),
(21, 38, 'agah samuel', '2023-05-03 10:21:43', '03052395549.html', 'Hello my neighbour&#039;s '),
(22, 38, 'agah samuel', '2023-05-03 10:21:43', '03052395802.html', 'Hello my neighbor '),
(23, 38, 'agah samuel', '2023-05-03 10:21:43', '030523100006.html', 'Hello world'),
(24, 38, 'agah samuel', '2023-05-03 10:21:43', '030523100121.html', 'Better work well'),
(25, 38, 'agah samuel', '2023-05-03 10:21:43', '030523100243.html', 'Work pls'),
(26, 38, 'agah samuel', '2023-05-03 10:21:43', '030523100346.html', 'God is good'),
(27, 38, 'agah samuel', '2023-05-03 10:21:43', '030523100526.jpg', 'kghjkghghjghjghjg'),
(28, 38, 'agah samuel', '2023-05-03 10:21:43', '030523100550.html', 'ghjhlkjhjhjhjhjhj'),
(29, 38, 'agah samuel', '2023-05-03 10:21:43', '030523100719.jpg', 'Hello my neighbours'),
(30, 38, 'agah samuel', '2023-05-03 10:25:50', '030523102550.jpg', 'Time wasn&#039;t working well, I just debuged my code, just hoping it works well '),
(31, 38, 'agah samuel', '2023-05-03 10:59:20', '', 'hello'),
(32, 38, 'agah samuel', '2023-05-03 10:59:47', '030523105947.jpg', ''),
(33, 38, 'agah samuel', '2023-05-03 13:08:52', '03052310852.pdf', 'the man'),
(34, 38, 'agah samuel', '2023-05-03 13:09:28', '03052310928.jpg', 'the man');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `sessionofadmission` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `full_name`, `username`, `email`, `phone`, `gender`, `sessionofadmission`, `image`) VALUES
(1, 11, 'Aga', 'John', 'agahinalegwusamuel@gmail.com', '4324535', 'Female', '2001/2002', '123562342111127042023122410.jpg'),
(2, 11, 'Aga', 'John', 'agahinalegwusamuel@gmail.com', '4324535', 'Female', '2001/2002', '123562342111127042023122410.jpg'),
(3, 11, 'Aga', 'John', 'agahinalegwusamuel@gmail.com', '4324535', 'Female', '2001/2002', '123562342111127042023122410.jpg'),
(4, 11, 'Aga', 'John', 'agahinalegwusamuel@gmail.com', '4324535', 'Female', '2001/2002', '123562342111127042023122410.jpg'),
(5, 11, 'Aga', 'John', 'agahinalegwusamuel@gmail.com', '4324535', 'Female', '2001/2002', '123562342111127042023122410.jpg'),
(6, 16, 'Isama Michael', 'isamamichael', 'isama@gmail.com', '98023901', 'female', '2000/2001', '9802390128042023134033.jpg'),
(7, 1, 'JACHIE', 'CHAN', 'charabeauty001@gmail.com', '5555555555', 'Male', '2020/2021', '3132228042023134956.jpg'),
(8, 17, 'nowww', 'combat', 'n@gmail.com', '765432', 'female', '2020/2021', '76543228042023135310.jpg'),
(9, 18, 'wow', 'wow', 'g@gmail.com', '39393', 'female', '2001/2002', '3939328042023135959.jpg'),
(10, 19, 'Inalegwu Sam ', 'Inalegwu Sam ', 'me@gmail.com', '657438', 'female', '2020/2021', '65743828042023141056.jpg'),
(11, 20, 'John', 'Doe', 'h@gmail.com', '8488383', 'female', '2000/2001', '848838329042023102025.jpg'),
(12, 21, 'k', 'kanty', 'k@gmail.com', '432', 'female', '2020/2021', '43229042023103319.jpg'),
(13, 23, 'u', 'user', 'u@g.mail', '345678', 'female', '2000/2001', '34567829042023110929.jpg'),
(14, 24, 'Paul', 'Walker', 'p@gmail.com', '333333', 'female', '2020/2021', '33333329042023113335.jpg'),
(15, 25, 'Bruise', 'Lee', 'l@gmail.com', '334433', 'female', '2020/2021', '33443329042023141154.jpeg'),
(16, 27, 'jfjfjf', 'kfkfkf', 'b@gmail.com', '3232333', 'female', '2020/2021', '323233329042023143812.jpg'),
(17, 28, 'ututut', 'jrjrjr', 'kkk@gmail.com', '465455', 'female', '2020/2021', '46545529042023144102.jpg'),
(18, 29, 'Jet', 'Cha', 'q@gmail.com', '213215', 'Male', '2001/2002', '21321501052023110254.jpg'),
(21, 38, 'agah samuel', 'John', 'abc.234@gmail.com', '232333', 'female', '2022/2023', '2323330305202383139.jpg'),
(19, 36, 'fope', 'ologun', 'f@gmail.com', '5657656768', 'female', '2000/2001', '565765676802052023135543.png'),
(20, 35, 'fope', 'fopes', 'agbosamuelgabriel@gmail.com', '78787878787', 'female', '2000/2001', '7878787878702052023140217.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'charabeauty001@gmail.com', '11111'),
(11, 'agahinalegwusamuel@gmail.com', '111111'),
(10, 'ddd@gmail.com', '11111'),
(9, 'aa@gmail.com', '1234567'),
(12, 'ff@gmail.com', '11111'),
(13, 'll@gmail.com', '11111'),
(14, 'jj@gmail.com', '11111'),
(15, '6@gmail.co', '11111'),
(16, 'isama@gmail.com', 'isama'),
(17, 'n@gmail.com', '11111'),
(18, 'g@gmail.com', '11111'),
(19, 'me@gmail.com', '11111'),
(20, 'h@gmail.com', '11111'),
(21, 'k@gmail.com', '11111'),
(22, 'm@mail.com', '11111'),
(23, 'u@g.mail', '11111'),
(24, 'p@gmail.com', '11111'),
(25, 'l@gmail.com', '11111'),
(26, 'bruiselee@gmail.com', '11111'),
(27, 'b@gmail.com', '555555'),
(28, 'kkk@gmail.com', '11111'),
(29, 'q@gmail.com', '11111'),
(30, '##$$&*_++?|Q@gmail.www', '11111'),
(31, 'agah@gmail.com', 'Jedagahs1'),
(32, 'pp@gmail.com', 'Jedagahs1'),
(33, 'yy@gmail.com', 'Jutagahs1'),
(34, 'oo@gmail.com', '11111De'),
(35, 'agbosamuelgabriel@gmail.com', 'SamG107#'),
(36, 'f@gmail.com', 'A2aaa'),
(37, '#$%^@gmail.com', '11111aA'),
(38, 'abc.234@gmail.com', '11111aA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
