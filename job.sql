-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 16, 2019 at 02:47 PM
-- Server version: 5.6.38
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`%` PROCEDURE `insert_admin_post` (IN `job_name` VARCHAR(255), IN `branch_name` VARCHAR(255), IN `vil_nomi` VARCHAR(255), IN `bolim` VARCHAR(255), IN `lavozim` VARCHAR(255), IN `stavka` VARCHAR(255), IN `maosh` VARCHAR(255), IN `malaka` VARCHAR(255), IN `ish_soni` VARCHAR(255), IN `daraja` VARCHAR(255), IN `ish_turi` VARCHAR(255), IN `tolov_shakli` VARCHAR(255), IN `tashkilot_nomeri` VARCHAR(255), IN `kadr_nomeri` VARCHAR(255), IN `qisqacha` VARCHAR(255), IN `date` DATETIME, IN `job_id` VARCHAR(255), IN `vil_id` VARCHAR(255))  NO SQL
INSERT INTO `admin_post` (job_name, branch_name, vil_nomi, bolim, lavozim, stavka, maosh, malaka, ish_soni, daraja, ish_turi, tolov_shakli, tashkilot_nomeri, kadr_nomeri, qisqacha, date, job_id, vil_id) 
   VALUES(job_name,branch_name,vil_nomi,bolim,lavozim,stavka,maosh,malaka,
          ish_soni,daraja,ish_turi,
     	  tolov_shakli,tashkilot_nomeri,kadr_nomeri, qisqacha, dt2, 				  job_id,staff_login)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_post`
--

CREATE TABLE `admin_post` (
  `id` int(11) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `vil_nomi` varchar(255) NOT NULL,
  `bolim` varchar(255) NOT NULL,
  `lavozim` varchar(255) NOT NULL,
  `stavka` varchar(255) NOT NULL,
  `maosh` varchar(255) NOT NULL,
  `malaka` varchar(255) NOT NULL,
  `ish_soni` varchar(255) NOT NULL,
  `daraja` varchar(255) NOT NULL,
  `ish_turi` varchar(255) NOT NULL,
  `tolov_shakli` varchar(255) NOT NULL,
  `tashkilot_nomeri` varchar(255) NOT NULL,
  `kadr_nomeri` varchar(255) NOT NULL,
  `qisqacha` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `vil_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_post`
--

INSERT INTO `admin_post` (`id`, `job_name`, `branch_name`, `vil_nomi`, `bolim`, `lavozim`, `stavka`, `maosh`, `malaka`, `ish_soni`, `daraja`, `ish_turi`, `tolov_shakli`, `tashkilot_nomeri`, `kadr_nomeri`, `qisqacha`, `date`, `job_id`, `vil_id`) VALUES
(114, 'Dasturchi', 'Бўка', '1', 'IT', 'mutahasis', '1', '2mln', '2', '20', 'Oliy', 'toliq', 'oylik maosh', '998712777677', '998712346575', 'yii2 va php ni bilishi shart', '2019-01-16 15:49:12', '0e2c608291fb17ab94d19b0686b3a7c7', 'admin'),
(115, 'Bugalter', 'Сардоба', '2', 'Bugalteriya', 'bugalter', '3', '3mln', '3', '4', 'oliy', 'toliq', 'oylik maosh', '998726574312', '998796578312', 'bugalteriyadan xabari bolishi kerak', '2019-01-16 15:50:33', '9903afb65d06bbc49d6af15942b1e94f', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `resume` blob NOT NULL,
  `phone` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `job_n` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `viloyat_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `size` int(10) NOT NULL,
  `inn` varchar(255) NOT NULL,
  `pass_num` varchar(255) NOT NULL,
  `pass_ser` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `viloyat` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `work_anketa` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `resume_name` varchar(255) NOT NULL,
  `get_job_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `branch_emp`
--

CREATE TABLE `branch_emp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `branch_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch_emp`
--

INSERT INTO `branch_emp` (`id`, `name`, `login`, `password`, `branch_id`) VALUES
(1, 'Xodim 1', 'admin', 'admin', 'Тошкент'),
(2, 'Xodim 2', '2', '2', 'Сирдарё'),
(3, 'Xodim 3', '3', '3', 'Жиззах'),
(4, 'Xodim 4', '4', '4', 'Самарқанд'),
(5, 'Xodim 5', '5', '5', 'Фарғона'),
(6, 'Xodim 6', '6', '6', 'Наманган'),
(7, 'Xodim 7', '7', '7', 'Андижон'),
(8, 'Xodim 8', '8', '8', 'Қашқадарё'),
(9, 'Xodim 9', '9', '9', 'Сурхондарё'),
(10, 'Xodim 10', '10', '10', 'Бухоро'),
(11, 'Xodim 11', '11', '11', 'Навоий'),
(12, 'Xodim 12', '12', '12', 'Хоразм'),
(13, 'xodim 13', '13', '13', 'Қорақалпогистон Республикаси');

-- --------------------------------------------------------

--
-- Table structure for table `filiallar`
--

CREATE TABLE `filiallar` (
  `fil_id` int(255) NOT NULL,
  `filial` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `filiallar`
--

INSERT INTO `filiallar` (`fil_id`, `filial`) VALUES
(13, 'Худудий филиал'),
(13, 'Кегейли'),
(13, 'Шуманай'),
(13, 'Кунград'),
(13, 'Муйнак'),
(13, 'Окмангит'),
(13, 'Тахтакупир'),
(13, 'Турткул'),
(13, 'Худжайли'),
(13, 'Чимбой'),
(13, 'Беруний'),
(13, 'Конликул'),
(13, 'Кораузяк'),
(13, 'Бустон'),
(13, 'Тахиатош'),
(13, 'Мангит'),
(7, 'Худудий филиал'),
(7, 'Корасув '),
(7, 'Худудий филиал'),
(7, 'Корасув '),
(7, 'Пахтаобод'),
(7, 'Асака'),
(7, 'Мархамат'),
(7, 'Шахрихон'),
(7, 'Охунбобоев'),
(7, 'Хужаобод'),
(7, 'Пайтуг'),
(7, 'Олтинкул'),
(7, 'Буз  филиали'),
(7, 'Околтин'),
(7, 'Кургонтепа'),
(7, 'Куйганёр'),
(7, 'Булокбоши'),
(7, 'Баликчи'),
(3, 'Ҳудудий филиал'),
(3, 'Уч-тепа'),
(3, 'Арнасой '),
(3, 'Зарбдор'),
(3, 'Пахтакор'),
(3, 'Галлаорол'),
(3, 'Дўстлик'),
(3, 'Мирзачўл'),
(3, 'Зомин'),
(3, 'Усмат'),
(3, 'Янгиқишлоқ'),
(3, 'Зафаробод'),
(3, 'Ҳудудий филиал '),
(3, 'Уч-тепа'),
(3, 'Арнасой'),
(3, 'Зарбдор'),
(3, 'Пахтакор'),
(3, 'Галлаорол'),
(3, 'Дўстлик'),
(3, 'Мирзачўл'),
(3, 'Зомин'),
(3, 'Усмат'),
(3, 'Янгиқишлоқ'),
(3, 'Зафаробод'),
(11, 'Ҳудудий филиал'),
(11, 'Конимех'),
(11, 'Кармана филиали'),
(11, 'Қизилтепа'),
(11, 'Нурота'),
(11, 'Томди'),
(11, 'Кескантерак'),
(11, 'Янгиробод'),
(9, 'Ҳудудий филиал'),
(9, 'Бойсун'),
(9, 'Жарқўрғон'),
(9, 'Музрабод'),
(9, 'Шеробод'),
(9, 'Шўрчи'),
(9, 'Узун'),
(9, 'Ангор'),
(9, 'Янгийўл'),
(9, 'Қумқўрғон'),
(9, 'Учқизил'),
(9, 'Қорлиқ'),
(9, 'Саросиё'),
(9, 'Бандихон'),
(9, 'Денов'),
(1, 'Ҳудудий филиали'),
(1, 'Охангарон'),
(1, 'Оққурғон'),
(1, 'Бўка'),
(1, 'Зафар'),
(1, 'Пскент'),
(1, 'Дўстобод'),
(1, 'Тўй-тепа'),
(1, 'Чиноз'),
(1, 'Янгибозор'),
(1, 'Паркент'),
(1, 'Янгийўл'),
(1, 'Гулбаҳор'),
(12, 'Ҳудудий филиал'),
(12, 'Гурлан'),
(12, 'Боғот'),
(12, 'Хазарасп'),
(12, 'Хонқа'),
(12, 'Янгиарик'),
(12, 'Кушкупир'),
(12, 'Шовот'),
(12, 'Короул'),
(12, 'Питнак'),
(12, 'Янгибозор'),
(12, 'Хива'),
(6, 'Худудий'),
(6, 'Давлатобод'),
(6, 'Жумашуй'),
(6, 'Косонсой'),
(6, 'Хакулобод'),
(6, 'Поп'),
(6, 'Туракургон'),
(6, 'Уйчи'),
(6, 'Учкургон'),
(6, 'Чуст'),
(6, 'Янгикургон'),
(6, 'Тошбулок'),
(6, 'Чорток'),
(8, 'Ҳудудий филиал'),
(8, 'Fузор'),
(8, 'Дехқонобад'),
(8, 'Қамаши'),
(8, 'Косон'),
(8, 'Шаҳрисабз'),
(8, 'Яккабоғ'),
(8, 'Бешкент'),
(8, 'Чироқчи'),
(8, 'Китоб'),
(8, 'Муғлон'),
(8, 'Янги Нишон'),
(8, 'Батош'),
(8, 'Янги Миришкор'),
(8, 'Муборак'),
(8, 'Помуг'),
(10, 'Ҳудудий филиал'),
(10, 'Олот'),
(10, 'Вобкент'),
(10, 'Ғиждувон'),
(10, 'Шофиркон'),
(10, 'Қоракўл'),
(10, 'Ромитан'),
(10, 'Жондор'),
(10, 'Гала Осиё'),
(10, 'Қоровул бозор'),
(10, 'Янги бозор'),
(2, 'Ҳудудий филиал'),
(2, 'Боёвут'),
(2, 'Деҳқонобод'),
(2, 'Меҳнатобод'),
(2, 'Наврўз'),
(2, 'Пахтаобад'),
(2, 'Сардоба'),
(2, 'Сайхунобод'),
(2, 'Сирдарё'),
(2, 'Фарход'),
(2, 'Ширин'),
(2, 'Янгиер'),
(4, 'Ҳудудий филиал'),
(4, 'Лоиш'),
(4, 'Октош'),
(4, 'Жомбой'),
(4, 'Жума'),
(4, 'Пайшанба'),
(4, 'Сиёб'),
(4, 'Булунгур'),
(4, 'Нуробод'),
(4, 'Пайарик'),
(4, 'Зиёвуддин'),
(4, 'Ургут'),
(4, 'Гузалкент'),
(4, 'Иштихон'),
(4, 'Кушрабод'),
(4, 'Каттакургон'),
(4, 'Челак'),
(4, 'Тайлок'),
(4, 'Гулобод'),
(5, 'Ҳудудий филиал'),
(5, 'Олтиариқ'),
(5, 'Боғдод'),
(5, 'Водил'),
(5, 'Данғара'),
(5, 'Учкўприк'),
(5, 'Бешариқ'),
(5, 'Куштепа (Қорақушчи)'),
(5, 'Қувасой'),
(5, 'Риштон'),
(5, 'Тошлоқ'),
(5, 'Янгиқўрғон'),
(5, 'Марғилон'),
(5, 'Қува'),
(5, 'Яйпан'),
(5, 'Ёзёвон'),
(5, 'Сўх'),
(5, 'Фурқат'),
(5, 'Қўқон'),
(1, 'yangi');

-- --------------------------------------------------------

--
-- Table structure for table `viloyatlar`
--

CREATE TABLE `viloyatlar` (
  `vil_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `viloyat` varchar(50) CHARACTER SET utf8 NOT NULL,
  `auto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `viloyatlar`
--

INSERT INTO `viloyatlar` (`vil_id`, `viloyat`, `auto_id`) VALUES
('1', 'Тошкент', 1),
('10', 'Сирдарё', 2),
('20', 'Жиззах', 3),
('30', 'Самарқанд', 4),
('40', 'Фарғона', 5),
('50', 'Наманган', 6),
('60', 'Андижон', 7),
('70', 'Қашқадарё', 8),
('75', 'Сурхондарё', 9),
('80', 'Бухоро', 10),
('85', 'Навоий', 11),
('90', 'Хоразм', 12),
('95', 'Қорақалпогистон Республикаси', 13);

-- --------------------------------------------------------

--
-- Table structure for table `vil_fil`
--

CREATE TABLE `vil_fil` (
  `viloyat_id` varchar(255) NOT NULL,
  `filial_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vil_fil`
--

INSERT INTO `vil_fil` (`viloyat_id`, `filial_id`) VALUES
('1', 1),
('20', 2),
('25', 3),
('30', 4),
('40', 5),
('50', 6),
('60', 7),
('70', 8),
('75', 9),
('80', 10),
('85', 11),
('90', 12),
('95', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_post`
--
ALTER TABLE `admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_emp`
--
ALTER TABLE `branch_emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viloyatlar`
--
ALTER TABLE `viloyatlar`
  ADD PRIMARY KEY (`vil_id`),
  ADD UNIQUE KEY `vil_id` (`vil_id`),
  ADD UNIQUE KEY `vil_id_2` (`vil_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_post`
--
ALTER TABLE `admin_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `branch_emp`
--
ALTER TABLE `branch_emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
