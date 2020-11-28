-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020 年 11 朁E26 日 22:58
-- サーバのバージョン： 10.4.8-MariaDB
-- PHP のバージョン: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `ecsite`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `categry`
--

CREATE TABLE `categry` (
  `id` int(11) NOT NULL,
  `categry` varchar(255) DEFAULT NULL,
  `registration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `categry`
--

INSERT INTO `categry` (`id`, `categry`, `registration_date`) VALUES
(1, 'CPU', '2020-07-27'),
(2, 'CPUクーラー', '2020-08-03'),
(3, 'マザーボード', '2020-07-28'),
(4, 'メモリ', '2020-07-28'),
(5, 'SSD', '2020-07-29'),
(6, 'グラフィックボード', '2020-07-29'),
(12, 'OS', '2020-08-17'),
(18, '電源', '2020-08-20');

-- --------------------------------------------------------

--
-- テーブルの構造 `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `options` varchar(255) DEFAULT NULL,
  `categry_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `registration_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `options`
--

INSERT INTO `options` (`id`, `options`, `categry_id`, `product_id`, `price`, `registration_date`) VALUES
(12, 'ASRock H470 Phantom Gaming 4 [Intel H470chipset]', 3, 1, -3490, '2020-07-30'),
(13, 'ASRock Z490 Extreme4 [Intel Z490chipset]', 3, 1, 7320, '2020-07-30'),
(14, 'ASUS TUF GAMING Z490-PLUS [Intel Z490chipset]', 3, 1, 3330, '2020-07-30'),
(15, 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', 3, 1, 14550, '2020-07-30'),
(16, 'ASUS PRIME Z490-P [Intel Z490chipset]', 3, 1, 0, '2020-07-30'),
(17, 'なし', 4, 1, -5820, '2020-07-30'),
(18, '8GB[4GB*2枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 4, 1, 0, '2020-07-30'),
(19, '16GB[8GB*2枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 4, 1, 3460, '2020-07-30'),
(20, '32GB[16GB*2枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 4, 1, 11920, '2020-07-30'),
(21, '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 4, 1, 29660, '2020-07-30'),
(22, 'なし', 5, 1, -8810, '2020-07-30'),
(23, 'Intel SSD 660p Series [M.2 PCI-E SSD 512GB]', 5, 1, 1860, '2020-07-30'),
(24, 'Intel SSD 660p Series [M.2 PCI-E SSD 1TB]', 5, 1, 30130, '2020-07-30'),
(25, 'Crucial CT480BX500SSD1 [SSD 480GB]', 5, 1, 0, '2020-07-30'),
(26, 'Crucial CT1000BX500SSD1 [SSD 1TB]', 5, 1, 5050, '2020-07-30'),
(27, 'オンボードグラフィック', 6, 1, 0, '2020-07-30'),
(28, 'GeForce GT710 1GB [DVI/D-Sub/HDMI]', 6, 1, 4150, '2020-07-30'),
(29, 'GeForce GT1030 2GB [DVI/HDMI]', 6, 1, 11500, '2020-07-30'),
(30, 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 6, 1, 22450, '2020-07-30'),
(31, 'GeForce GTX1650 4GB MSI製GeForce GTX 1650 AERO ITX 4G [DVI/HDMI/DisplayPort]', 6, 1, 18710, '2020-07-30'),
(34, 'Intel Core i3-9100 [3.60GHz/4Core/UHD630/TDP65W] CoffeeLake Refresh 搭載モデル★在庫限り大特価', 1, 3, 64630, '2020-08-11'),
(35, 'Intel Core i5-9400 [2.90GHz/6Core/UHD630/TDP65W] CoffeeLake Refresh 搭載モデル', 1, 3, 77100, '2020-08-11'),
(36, 'インテル純正 CPUクーラー [空冷/CPUファン]', 2, 3, 0, '2020-08-11'),
(37, 'Noctua NH-L9i [空冷/CPUファン]★高性能CPUグリス NT-H1付属★', 2, 3, 4110, '2020-08-11'),
(38, 'インテルH310チップセット搭載マザーボード', 3, 3, 0, '2020-08-11'),
(39, 'なし', 4, 3, -2970, '2020-08-11'),
(40, '4GB[4GB*1枚] DDR4-2400 SO-DIMM  Single Channel', 4, 3, 0, '2020-08-11'),
(41, '8GB[4GB*2枚] DDR4-2400 SO-DIMM  Dual Channel', 4, 3, 2980, '2020-08-11'),
(42, '16GB[8GB*2枚] DDR4-2400 SO-DIMM  Dual Channel', 4, 3, 6450, '2020-08-11'),
(43, '32GB[16GB*2枚] DDR4-2400 SO-DIMM  Dual Channel', 4, 3, 15100, '2020-08-11'),
(45, 'AMD Ryzen 3 3100 Matisse [3.6GHz/4Core/TDP65W] 搭載モデル', 1, 4, 156960, '2020-08-11'),
(46, 'AMD Ryzen 5 3600 Matisse [3.6GHz/6Core/TDP65W] 搭載モデル', 1, 4, 172800, '2020-08-11'),
(47, 'AMD Ryzen 7 3700X Matisse [3.6GHz/8Core/TDP65W] 搭載モデル★ゲームがもらえるキャンペーン第2弾対象 10/3まで★', 1, 4, 192510, '2020-08-11'),
(48, 'AMD Ryzen 9 3950X Matisse [3.5GHz/16Core/TDP105W] 搭載モデル★ゲームがもらえるキャンペーン第2弾対象 10/3まで★', 1, 4, 255870, '2020-08-11'),
(49, 'AMD純正 Wraith CPUクーラー [空冷/CPUファン]', 2, 4, -4260, '2020-08-11'),
(50, 'MSI MPG X570 GAMING PLUS [AMD X570chipset]', 3, 4, -1030, '2020-08-11'),
(51, 'GIGABYTE X570 AORUS ELITE [AMD X570chipset]', 3, 4, 0, '2020-08-11'),
(52, 'ASUS PRIME X570-PRO/CSM [AMD X570chipset] ★新入荷！★', 3, 4, 2910, '2020-08-11'),
(53, 'ASUS ROG STRIX X570-F GAMING [AMD X570chipset]★ASUS夏のキャンペーン 8/30まで2千円引き！★', 3, 4, 9090, '2020-08-11'),
(54, 'なし', 4, 4, -9700, '2020-08-11'),
(55, '8GB[8GB*1枚] DDR4-3200 [メジャーチップ・8層基板] Single Channel', 4, 4, -4850, '2020-08-11'),
(56, '16GB[8GB*2枚] DDR4-3200 [メジャーチップ・8層基板] Dual Channel', 4, 4, 0, '2020-08-11'),
(57, '32GB[16GB*2枚] DDR4-3200 [メジャーチップ・8層基板] Dual Channel', 4, 4, 9420, '2020-08-11'),
(58, '64GB[16GB*4枚] DDR4-3200 [メジャーチップ・8層基板] Dual Channel', 4, 4, 28550, '2020-08-11'),
(59, 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 6, 4, -22450, '2020-08-11'),
(60, 'GeForce GTX1660 6GB GIGABYTE製GV-N1660OC-6GD [HDMI/DisplayPort×3]', 6, 4, -14940, '2020-08-11'),
(61, 'GeForce RTX2060 6GB MSI製GeForce RTX 2060 AERO ITX 6G OC[HDMI*1/DisplayPort*3]★Rainbow Six Seigeバンドルキャンペーン対象 8/27迄数量限定★', 6, 4, 0, '2020-08-11'),
(62, 'NVIDIA TITAN RTX 24GB [HDMI*1/DisplayPort*3/USB Type-C]', 6, 4, 368820, '2020-08-11'),
(68, '8GB[4GB*2枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 5, 3, 0, '2020-08-17'),
(69, '8GB[4GB*2枚] DDR4-2400 SO-DIMM  Dual Channel', 5, 3, 2980, '2020-08-17'),
(70, '16GB[8GB*2枚] DDR4-2400 SO-DIMM  Dual Channel', 5, 3, 6450, '2020-08-17'),
(71, '32GB[16GB*2枚] DDR4-2400 SO-DIMM  Dual Channel', 5, 3, 15180, '2020-08-17'),
(72, 'なし', 5, 3, -2970, '2020-08-17'),
(73, 'オンボードグラフィックス[Displayポート/HDMI/D-SUB]', 6, 3, 0, '2020-08-17'),
(74, 'Scythe 虎徹 MarkⅡ [SCKTT-2000] [空冷/CPUファン]', 2, 4, 380, '2020-08-17'),
(75, 'ENERMAX ETS-T40F-TB[空冷/CPUファン]', 2, 4, 390, '2020-08-17'),
(76, 'CoolerMaster Hyper H412R RR-H412-20PK-R2 [空冷/CPUファン]', 2, 4, -1680, '2020-08-17'),
(77, 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 2, 4, 0, '2020-08-17'),
(78, 'なし', 5, 4, -10670, '2020-08-17'),
(79, 'CFD CSSD-M2B5GPG3VNF [M.2 PCI-E GEN4 SSD 500GB]★PCI-E4.0対応 超高速次世代SSD★', 5, 4, 6000, '2020-08-17'),
(80, 'CFD CSSD-M2B1TPG3VNF [M.2 PCI-E GEN4 SSD 1TB]★PCI-E4.0対応 超高速次世代SSD★', 5, 4, 16840, '2020-08-17'),
(81, 'CFD CSSD-M2B2TPG3VNF [M.2 PCI-E GEN4 SSD 2TB]★PCI-E4.0対応 超高速次世代SSD★', 5, 4, 58320, '2020-08-17'),
(82, 'Intel SSD 660p Series [M.2 PCI-E SSD 512GB]', 5, 4, 0, '2020-08-17'),
(83, 'Intel SSD 660p Series [M.2 PCI-E SSD 1TB]', 5, 4, 8730, '2020-08-17'),
(94, 'Intel Core i3-10100 [3.60GHz/4Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 1, 1, 94610, '2020-08-19'),
(95, 'Intel Core i3-10300 [3.70GHz/4Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 1, 1, 98770, '2020-08-19'),
(96, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 1, 1, 101540, '2020-08-19'),
(97, 'Intel Core i5-10500 [3.10GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 1, 1, 104310, '2020-08-19'),
(98, 'Intel Core i5-10600 [3.30GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 1, 1, 108470, '2020-08-19'),
(99, 'Intel Core i5-10600K [4.10GHz/6Core/HT/UHD630/TDP125W] CometLake-S 搭載モデル', 1, 1, 120950, '2020-08-19'),
(100, 'Intel Core i7-10700 [2.90GHz/8Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 1, 1, 127880, '2020-08-19'),
(101, 'Intel Core i7-10700K [3.80GHz/8Core/HT/UHD630/TDP125W] CometLake-S 搭載モデル', 1, 1, 138270, '2020-08-19'),
(102, 'インテル純正 CPUクーラー [空冷/CPUファン]', 2, 1, -4260, '2020-08-19'),
(103, 'Scythe 虎徹 MarkⅡ [SCKTT-2000] [空冷/CPUファン]', 2, 1, 380, '2020-08-19'),
(104, 'ENERMAX ETS-T40F-TB[空冷/CPUファン]', 2, 1, 390, '2020-08-19'),
(105, 'CoolerMaster Hyper H412R RR-H412-20PK-R2 [空冷/CPUファン]', 2, 1, -1680, '2020-08-19'),
(106, 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 2, 1, 0, '2020-08-19'),
(107, 'CRYORIG C7 V2 [空冷/CPUファン]', 2, 1, 810, '2020-08-19'),
(110, 'ごーるど3', 4, 4, 94610, '2020-08-20');

-- --------------------------------------------------------

--
-- テーブルの構造 `order_information`
--

CREATE TABLE `order_information` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `pc_price` int(11) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `total_price` int(255) NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `order_information`
--

INSERT INTO `order_information` (`id`, `user_id`, `item_id`, `option_id`, `pc_price`, `tax_id`, `total_price`, `registration_date`) VALUES
(1, 16, 1, 16, 168200, 10, 185020, '2020-08-05 00:00:00'),
(3, 18, 1, 18, 168200, 10, 185020, '0000-00-00 00:00:00'),
(4, 19, 1, 19, 168200, 10, 185020, '0000-00-00 00:00:00'),
(7, 22, 1, 22, 168200, 10, 185020, '0000-00-00 00:00:00'),
(8, 23, 1, 23, 168200, 10, 185020, '0000-00-00 00:00:00'),
(9, 24, 1, 24, 168200, 10, 185020, '0000-00-00 00:00:00'),
(10, 25, 1, 25, 168200, 10, 185020, '2020-08-06 11:08:22'),
(11, 26, 1, 26, 168200, 10, 185020, '2020-08-06 11:08:09'),
(12, 27, 1, 27, 168200, 10, 185020, '2020-08-06 11:08:37'),
(13, 28, 1, 28, 168200, 10, 185020, '2020-08-06 12:08:02'),
(14, 29, 1, 29, 168200, 10, 185020, '2020-08-06 12:08:06'),
(15, 30, 1, 30, 168200, 10, 185020, '2020-08-06 01:00:00'),
(19, 34, 1, 34, 64630, 10, 71093, '2020-08-11 11:03:46'),
(20, 35, 1, 35, 561330, 10, 617463, '2020-08-11 11:40:44'),
(21, 36, 1, 36, 192510, 10, 211761, '2020-08-11 03:27:17'),
(22, 37, 4, 37, 192510, 10, 211761, '2020-08-11 03:33:39'),
(23, 38, 3, 38, 101540, 10, 111694, '2020-08-12 02:41:08'),
(24, 39, 3, 39, 187770, 10, 206547, '2020-08-12 03:21:36'),
(25, 40, 3, 40, 178930, 10, 196823, '2020-08-17 10:55:37'),
(26, 41, 4, 41, 273920, 10, 301312, '2020-08-17 03:04:01'),
(27, 42, 3, 42, 113040, 10, 124344, '2020-08-20 01:27:11'),
(28, 43, 4, 43, 192510, 10, 211761, '2020-08-20 02:59:52'),
(29, 44, 3, 44, 101540, 10, 111694, '2020-08-20 03:18:34'),
(30, 45, 3, 45, 101540, 10, 111694, '2020-08-20 03:41:56'),
(31, 46, 3, 46, 101540, 10, 111694, '2020-11-26 10:48:34'),
(32, 47, 3, 47, 101540, 10, 111694, '2020-11-26 10:57:44');

-- --------------------------------------------------------

--
-- テーブルの構造 `password`
--

CREATE TABLE `password` (
  `id` int(11) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `pass2` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `password`
--

INSERT INTO `password` (`id`, `pass`, `pass2`) VALUES
(12, '$2y$10$O09lG.r0d/tY8L1wJqwtYOXjPIEU2ye0D5BZP1eD.XZr1UmpgLBOu', '$2y$10$MEHBE08OOl8iXogotqDFT.7g0f4kHcZpAB5obfZlhEy4HZSUG7EiG'),
(13, 'guest', '$2y$10$zMn.m7c1hUtMcWYSgbfpKeWDmNul/w7n/TCZtS/Pw2UX9iFyY32Ly'),
(14, 'aaa', '$2y$10$Yo.LCDvKoq39XfugN2RJfuadr4w/LZem7C/sRCGMhfMtZidGboyOa'),
(17, 'bbb', '$2y$10$W1yTVdELy/Ic.jukI.s1numQgwiDcXP5ISQk64wBLdicw0I0GXgbO');

-- --------------------------------------------------------

--
-- テーブルの構造 `pc_option`
--

CREATE TABLE `pc_option` (
  `pc_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `registration_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `pc_option`
--

INSERT INTO `pc_option` (`pc_id`, `option_id`, `registration_date`) VALUES
(1, 1, '2020-08-10'),
(1, 2, '2020-08-10'),
(1, 3, '2020-08-10'),
(1, 4, '2020-08-10'),
(1, 5, '2020-08-10'),
(1, 6, '2020-08-10'),
(1, 9, '2020-08-10'),
(1, 10, '2020-08-10'),
(1, 11, '2020-08-10'),
(1, 12, '2020-08-10'),
(1, 13, '2020-08-10'),
(1, 14, '2020-08-10'),
(1, 15, '2020-08-10'),
(1, 16, '2020-08-10'),
(1, 17, '2020-08-10'),
(1, 18, '2020-08-10'),
(1, 19, '2020-08-10'),
(1, 20, '2020-08-10'),
(1, 21, '2020-08-10'),
(1, 22, '2020-08-10'),
(1, 23, '2020-08-10'),
(1, 24, '2020-08-10'),
(1, 25, '2020-08-10'),
(1, 26, '2020-08-10'),
(1, 27, '2020-08-10'),
(1, 28, '2020-08-10'),
(1, 29, '2020-08-10'),
(1, 30, '2020-08-10'),
(1, 31, '2020-08-10'),
(3, 22, '2020-08-11'),
(3, 23, '2020-08-11'),
(3, 24, '2020-08-11'),
(3, 25, '2020-08-11'),
(3, 26, '2020-08-11'),
(3, 27, '2020-08-11'),
(3, 34, '2020-08-11'),
(3, 35, '2020-08-11'),
(3, 36, '2020-08-11'),
(3, 37, '2020-08-11'),
(3, 38, '2020-08-11'),
(3, 39, '2020-08-11'),
(3, 40, '2020-08-11'),
(3, 41, '2020-08-11'),
(3, 42, '2020-08-11'),
(3, 43, '2020-08-11'),
(4, 9, '2020-08-11'),
(4, 10, '2020-08-11'),
(4, 11, '2020-08-11'),
(4, 22, '2020-08-11'),
(4, 23, '2020-08-11'),
(4, 24, '2020-08-11'),
(4, 25, '2020-08-11'),
(4, 26, '2020-08-11'),
(4, 45, '2020-08-11'),
(4, 46, '2020-08-11'),
(4, 47, '2020-08-11'),
(4, 48, '2020-08-11'),
(4, 49, '2020-08-11'),
(4, 50, '2020-08-11'),
(4, 51, '2020-08-11'),
(4, 52, '2020-08-11'),
(4, 53, '2020-08-11'),
(4, 54, '2020-08-11'),
(4, 55, '2020-08-11'),
(4, 56, '2020-08-11'),
(4, 57, '2020-08-11'),
(4, 58, '2020-08-11'),
(4, 59, '2020-08-11'),
(4, 60, '2020-08-11'),
(4, 61, '2020-08-11'),
(4, 62, '2020-08-11'),
(5, 1, '2020-08-12'),
(5, 2, '2020-08-12'),
(5, 3, '2020-08-12'),
(5, 6, '2020-08-12'),
(5, 9, '2020-08-12'),
(5, 10, '2020-08-12'),
(5, 11, '2020-08-12'),
(5, 12, '2020-08-12'),
(5, 13, '2020-08-12'),
(5, 14, '2020-08-12'),
(5, 15, '2020-08-12'),
(5, 17, '2020-08-12'),
(5, 18, '2020-08-12'),
(5, 19, '2020-08-12'),
(5, 20, '2020-08-12'),
(5, 21, '2020-08-12'),
(5, 22, '2020-08-12'),
(5, 23, '2020-08-12'),
(5, 24, '2020-08-12'),
(5, 25, '2020-08-12'),
(5, 27, '2020-08-12'),
(5, 28, '2020-08-12'),
(5, 30, '2020-08-12'),
(5, 31, '2020-08-12');

-- --------------------------------------------------------

--
-- テーブルの構造 `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `registration_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `product`
--

INSERT INTO `product` (`id`, `item_name`, `registration_date`) VALUES
(1, 'ミドルタワーPC', '2020-07-31'),
(3, '省スペースPC', '2020-07-31'),
(4, 'ゲーミングPC', '2020-08-11'),
(5, '冷水PC', '2020-08-17'),
(7, 'PC1', '2020-08-19'),
(8, 'ミニタワー２PC', '2020-08-20');

-- --------------------------------------------------------

--
-- テーブルの構造 `select_option`
--

CREATE TABLE `select_option` (
  `id` int(11) NOT NULL,
  `cpu` varchar(255) DEFAULT NULL,
  `cpucooler` varchar(255) DEFAULT NULL,
  `board` varchar(255) DEFAULT NULL,
  `memory` varchar(255) DEFAULT NULL,
  `ssd` varchar(255) DEFAULT NULL,
  `gpu` varchar(255) DEFAULT NULL,
  `cpu_price` int(11) DEFAULT NULL,
  `cpucooler_price` int(11) DEFAULT NULL,
  `board_price` int(11) DEFAULT NULL,
  `memory_price` int(11) DEFAULT NULL,
  `ssd_price` int(11) DEFAULT NULL,
  `gpu_price` int(11) DEFAULT NULL,
  `registration_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `select_option`
--

INSERT INTO `select_option` (`id`, `cpu`, `cpucooler`, `board`, `memory`, `ssd`, `gpu`, `cpu_price`, `cpucooler_price`, `board_price`, `memory_price`, `ssd_price`, `gpu_price`, `registration_date`) VALUES
(1, 'Array', 'Array', 'Array', 'Array', 'Array', 'Array', NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-05'),
(2, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS PRIME Z490-P [Intel Z490chipset]', '8GB[4GB*2枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT1000BX500SSD1 [SSD 1TB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-05'),
(3, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS PRIME Z490-P [Intel Z490chipset]', '8GB[4GB*2枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT1000BX500SSD1 [SSD 1TB]', 'GeForce GT1030 2GB [DVI/HDMI]', 0, 0, 0, 8, 0, 0, '2020-08-05'),
(4, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS PRIME Z490-P [Intel Z490chipset]', '8GB[4GB*2枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT1000BX500SSD1 [SSD 1TB]', 'GeForce GT1030 2GB [DVI/HDMI]', 0, 0, 0, 8, 0, 0, '2020-08-05'),
(5, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS PRIME Z490-P [Intel Z490chipset]', '8GB[4GB*2枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT1000BX500SSD1 [SSD 1TB]', 'GeForce GT1030 2GB [DVI/HDMI]', 0, 0, 0, 8, 0, 0, '2020-08-05'),
(6, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-05'),
(7, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-05'),
(8, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-05'),
(9, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-05'),
(10, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-05'),
(11, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-05'),
(12, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-05'),
(13, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-05'),
(14, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-05'),
(15, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-05'),
(16, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-05'),
(17, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '0000-00-00'),
(18, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '0000-00-00'),
(19, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '0000-00-00'),
(20, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-06'),
(21, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '0000-00-00'),
(22, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '0000-00-00'),
(23, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '0000-00-00'),
(24, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '0000-00-00'),
(25, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-06'),
(26, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-06'),
(27, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-06'),
(28, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-06'),
(29, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-06'),
(30, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-06'),
(31, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-06'),
(32, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 101540, 0, 14550, 29660, 0, 22450, '2020-08-06'),
(33, 'Intel Core i5-10500 [3.10GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'インテル純正&amp;nbsp;CPUクーラー&amp;nbsp;[空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '32GB[16GB*2枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT1000BX500SSD1 [SSD 1TB]', 'GeForce GTX1650 4GB GIGABYTE製GV-N1650IXOC-4GD [HDMI*2/DisplayPort]', 104310, -4260, 14550, 11920, 5050, 22450, '2020-08-06'),
(34, 'Intel Core i3-9100 [3.60GHz/4Core/UHD630/TDP65W] CoffeeLake Refresh 搭載モデル★在庫限り大特価', 'インテル純正 CPUクーラー [空冷/CPUファン]', 'インテルH310チップセット搭載マザーボード', '4GB[4GB*1枚] DDR4-2400 SO-DIMM  Single Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'オンボードグラフィック', 64630, 0, 0, 0, 0, 0, '2020-08-11'),
(35, 'AMD Ryzen 7 3700X Matisse [3.6GHz/8Core/TDP65W] 搭載モデル★ゲームがもらえるキャンペーン第2弾対象 10/3まで★', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'GIGABYTE X570 AORUS ELITE [AMD X570chipset]', '16GB[8GB*2枚] DDR4-3200 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'NVIDIA TITAN RTX 24GB [HDMI*1/DisplayPort*3/USB Type-C]', 192510, 0, 0, 0, 0, 368820, '2020-08-11'),
(36, 'AMD Ryzen 7 3700X Matisse [3.6GHz/8Core/TDP65W] 搭載モデル★ゲームがもらえるキャンペーン第2弾対象 10/3まで★', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'GIGABYTE X570 AORUS ELITE [AMD X570chipset]', '16GB[8GB*2枚] DDR4-3200 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce RTX2060 6GB MSI製GeForce RTX 2060 AERO ITX 6G OC[HDMI*1/DisplayPort*3]★Rainbow Six Seigeバンドルキャンペーン対象 8/27迄数量限定★', 192510, 0, 0, 0, 0, 0, '2020-08-11'),
(37, 'AMD Ryzen 7 3700X Matisse [3.6GHz/8Core/TDP65W] 搭載モデル★ゲームがもらえるキャンペーン第2弾対象 10/3まで★', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'GIGABYTE X570 AORUS ELITE [AMD X570chipset]', '16GB[8GB*2枚] DDR4-3200 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce RTX2060 6GB MSI製GeForce RTX 2060 AERO ITX 6G OC[HDMI*1/DisplayPort*3]★Rainbow Six Seigeバンドルキャンペーン対象 8/27迄数量限定★', 192510, 0, 0, 0, 0, 0, '2020-08-11'),
(38, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS PRIME Z490-P [Intel Z490chipset]', '8GB[4GB*2枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'オンボードグラフィック', 101540, 0, 0, 0, 0, 0, '2020-08-12'),
(39, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'ENERMAX ETS-T40F-TB[空冷/CPUファン]', 'ASUS ROG STRIX Z490-F GAMING [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Intel SSD 660p Series [M.2 PCI-E SSD 1TB]', 'GeForce GT1030 2GB [DVI/HDMI]', 101540, 390, 14550, 29660, 30130, 11500, '2020-08-12'),
(40, 'Intel Core i5-10500 [3.10GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS TUF GAMING Z490-PLUS [Intel Z490chipset]', '64GB[16GB*4枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Intel SSD 660p Series [M.2 PCI-E SSD 1TB]', 'GeForce GT1030 2GB [DVI/HDMI]', 104310, 0, 3330, 29660, 30130, 11500, '2020-08-17'),
(41, 'AMD Ryzen 7 3700X Matisse [3.6GHz/8Core/TDP65W] 搭載モデル★ゲームがもらえるキャンペーン第2弾対象 10/3まで★', 'ENERMAX ETS-T40F-TB[空冷/CPUファン]', 'ASUS ROG STRIX X570-F GAMING [AMD X570chipset]★ASUS夏のキャンペーン 8/30まで2千円引き！★', '64GB[16GB*4枚] DDR4-3200 [メジャーチップ・8層基板] Dual Channel', 'CFD CSSD-M2B2TPG3VNF [M.2 PCI-E GEN4 SSD 2TB]★PCI-E4.0対応 超高速次世代SSD★', 'GeForce GTX1660 6GB GIGABYTE製GV-N1660OC-6GD [HDMI/DisplayPort×3]', 192510, 390, 9090, 28550, 58320, -14940, '2020-08-17'),
(42, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS PRIME Z490-P [Intel Z490chipset]', '8GB[4GB*2枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'GeForce GT1030 2GB [DVI/HDMI]', 101540, 0, 0, 0, 0, 11500, '2020-08-20'),
(43, 'AMD Ryzen 7 3700X Matisse [3.6GHz/8Core/TDP65W] 搭載モデル★ゲームがもらえるキャンペーン第2弾対象 10/3まで★', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'GIGABYTE X570 AORUS ELITE [AMD X570chipset]', '16GB[8GB*2枚] DDR4-3200 [メジャーチップ・8層基板] Dual Channel', 'Intel SSD 660p Series [M.2 PCI-E SSD 512GB]', 'GeForce RTX2060 6GB MSI製GeForce RTX 2060 AERO ITX 6G OC[HDMI*1/DisplayPort*3]★Rainbow Six Seigeバンドルキャンペーン対象 8/27迄数量限定★', 192510, 0, 0, 0, 0, 0, '2020-08-20'),
(44, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS PRIME Z490-P [Intel Z490chipset]', '8GB[4GB*2枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'オンボードグラフィック', 101540, 0, 0, 0, 0, 0, '2020-08-20'),
(45, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS PRIME Z490-P [Intel Z490chipset]', '8GB[4GB*2枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'オンボードグラフィック', 101540, 0, 0, 0, 0, 0, '2020-08-20'),
(46, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS PRIME Z490-P [Intel Z490chipset]', '8GB[4GB*2枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'オンボードグラフィック', 101540, 0, 0, 0, 0, 0, '2020-11-26'),
(47, 'Intel Core i5-10400 [2.90GHz/6Core/HT/UHD630/TDP65W] CometLake-S 搭載モデル', 'CoolerMaster Hyper 212EVO RR-212E-20PK-J1 [空冷/CPUファン]', 'ASUS PRIME Z490-P [Intel Z490chipset]', '8GB[4GB*2枚] DDR4-2666 [メジャーチップ・8層基板] Dual Channel', 'Crucial CT480BX500SSD1 [SSD 480GB]', 'オンボードグラフィック', 101540, 0, 0, 0, 0, 0, '2020-11-26');

-- --------------------------------------------------------

--
-- テーブルの構造 `tax`
--

CREATE TABLE `tax` (
  `id` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `registration_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `tax`
--

INSERT INTO `tax` (`id`, `tax`, `start_date`, `registration_date`) VALUES
(1, 10, '2022-10-30', '2020-08-30');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name_kana` varchar(255) NOT NULL,
  `last_name_kana` varchar(255) NOT NULL,
  `postal_code` varchar(8) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `registration_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `first_name_kana`, `last_name_kana`, `postal_code`, `address`, `phone_number`, `registration_date`) VALUES
(47, 'test@gmail', 'テスト', 'さん', 'test', 'san', '000-0000', 'テスト市テスト区テスト町1-1-1', '000-0000-0000', '2020-11-26');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `categry`
--
ALTER TABLE `categry`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `order_information`
--
ALTER TABLE `order_information`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `pc_option`
--
ALTER TABLE `pc_option`
  ADD PRIMARY KEY (`pc_id`,`option_id`);

--
-- テーブルのインデックス `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `select_option`
--
ALTER TABLE `select_option`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `categry`
--
ALTER TABLE `categry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- テーブルのAUTO_INCREMENT `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- テーブルのAUTO_INCREMENT `order_information`
--
ALTER TABLE `order_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- テーブルのAUTO_INCREMENT `password`
--
ALTER TABLE `password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- テーブルのAUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- テーブルのAUTO_INCREMENT `select_option`
--
ALTER TABLE `select_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- テーブルのAUTO_INCREMENT `tax`
--
ALTER TABLE `tax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルのAUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
