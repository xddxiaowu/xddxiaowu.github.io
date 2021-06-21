-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2021-05-30 06:05:30
-- 服务器版本： 5.7.31
-- PHP 版本： 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `itemmessage`
--

DROP TABLE IF EXISTS `itemmessage`;
CREATE TABLE IF NOT EXISTS `itemmessage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(30) NOT NULL,
  `list` varchar(30) NOT NULL,
  `yourname` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `newfilename` varchar(30) NOT NULL,
  `text` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `itemmessage`
--

INSERT INTO `itemmessage` (`id`, `item`, `list`, `yourname`, `tel`, `date`, `time`, `newfilename`, `text`) VALUES
(1, '钥匙', 'card', '邬俊杰', '13262924752', '2021-05-27', '23:51', '2021527155325.jpg', '我在A教捡到了一把伞\r\n是蓝色的'),
(2, '埃罗芒阿老师', 'model', '小呜', '17521344328', '2021-05-28', '12:31', '20215284339.jpg', 'B教捡到的'),
(3, '加湿器', 'dailyitems', '小呜', '17521344328', '2021-05-28', '13:04', '20215285126.jpg', 'C教'),
(4, '乐高', 'model', '小呜', '17521344328', '2021-05-28', '13:59', '202152855920.jpg', 'D教教学楼');

-- --------------------------------------------------------

--
-- 表的结构 `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `repassword` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `repassword`) VALUES
(1, 'xdd_xiaowu', '1462449008@qq.com', '9aff90b6555f7418d5920c9e234f5512', '9aff90b6555f7418d5920c9e234f5512'),
(2, 'xdd_xiaowu', '1462449008@qq.com', '9aff90b6555f7418d5920c9e234f5512', '9aff90b6555f7418d5920c9e234f5512'),
(3, 'zhangsan', '2594156@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'zhangsan', '2594156@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'lisi', '2594156@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'lisis', '25941256@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'lisiss', '25941d256@qq.com', '8fa1eb0b943af7185de48a26f54e8f28', '24813ba6aca119ffdfd285cc6174b533'),
(8, 'lisissdadasd', '1689866@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'dasfafasfa', '1462449008@sdada.co', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'cdsvsfs', '13554@qq.com', '35314df2291a7ba05851ec60beef5a35', '35314df2291a7ba05851ec60beef5a35'),
(11, 'sdadasd', 'asdadsa@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(12, 'sdadasdasdafasfa', 'asdasdsasczxcza@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(13, 'sdadasdasdafasfadasda', 'asdasdsascsdadazxcza@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(14, 'sdadasdasdafasfsdaadasda', 'asdasdsascsdadasdzxcza@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(15, 'sdadasdasdafsasfsdaadasda', 'asdasdsascsdsadasdzxcza@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(16, 'dsadadaxzczxc', '1358131@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(17, 'dsadadsaxzczxc', '1358s131@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(18, 'dsadaadsaxzczxc', '135sa8s131@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(19, 'dsadaadssaxzczxc', '135ssa8s131@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(20, '13s5adada', 'sadas131@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(21, '13s5adada2', 'sadas1321@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(22, '13s5adsada2', 'sadas1s321@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(23, '13s5adssada2', 'sadas1ss321@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(24, '13s5adsssada2', 'sadas1sss321@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(25, '13ss5adsssada2', 'sadass1sss321@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(26, '13ss5adssssada2', 'sadasss1sss321@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(27, '法外狂徒', 'fawaikuangtu@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(28, '小呜', '13262924752@qq.com', '9aff90b6555f7418d5920c9e234f5512', '9aff90b6555f7418d5920c9e234f5512'),
(29, 'xiaopenyou', '123456@qq.com', '9aff90b6555f7418d5920c9e234f5512', '9aff90b6555f7418d5920c9e234f5512'),
(30, 'xdasda', '15535@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
