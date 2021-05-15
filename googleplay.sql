-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 15, 2021 lúc 05:18 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `googleplay`
--

CREATE DATABASE IF NOT EXISTS `googleplay` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `googleplay`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(10) NOT NULL,
  `national` int(200) NOT NULL,
  `role` int(10) NOT NULL,
  `money` int(15) NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `activated` bit(1) DEFAULT b'0',
  `activate_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dev` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `gender`, `national`, `role`, `money`, `image`, `activated`, `activate_token`, `dev`) VALUES
('1', 'Lê', 'Nguyễn Minh Tuấn', 'lnmtuan1702@gmail.com', '$2y$10$3.omeOWYvmzJUgCbM8M9QuhGml0W9RlHfxc06oqXwgIkMl9elm8w2', '0901995401', 0, 0, 0, 99000, './user_img/3d4z0uf4s2pdgr2t4l8bcat-memes.jpg', b'1', '', ''),
('2', 'Vo', 'Quoc Son', 'voquocson@gmail.com', '$2y$10$3.omeOWYvmzJUgCbM8M9QuhGml0W9RlHfxc06oqXwgIkMl9elm8w2', '', 0, 0, 0, 0, './user_img/smuge_the_cat.jpg', b'1', NULL, ''),
('3', 'Huynh', 'Nhu', 'huynhnhu@gmail.com', '$2y$10$BnFA3Dkgj1q0xBlme3GcwukDhqTO8l8V/.BrWktW8sK9boZ3z2UpG', '789', 0, 0, 0, 0, './user_img/smuge_the_cat.jpg', b'0', NULL, ''),
('4', 'Tran', 'Huyen', 'tkph@gmail.com', '$2y$10$8rSxJT76sHsDRKaAw/xbDO/sBdf.ktxKmNesJxjKf./8GltWI8Q4O', '123456789', 2, 230, 2, 1, './user_img/smuge_the_cat.jpg', b'0', NULL, ''),
('5', 'Võ', 'Quốc Sơn', 'testlogin@gmail.com', '$2y$10$dWtDMxc4FmDgr1Qtb8XyIeNcbua49JH/ickKm9jAmEwjz7iM.D5q.', '0921231232', 0, 230, 0, 0, './user_img/smuge_the_cat.jpg', b'0', NULL, ''),
('6', 'Vo', 'Quoc Son', 'testlogin1@gmail.com', '$2y$10$nBXkjyH7GlVc5w8p5A/.2OKosxr1ys8nJmo2IFNC3eoERH7CQE3hq', '0921231242', 1, 230, 1, 0, './user_img/smuge_the_cat.jpg', b'0', NULL, ''),
('7', 'Vo', 'Quoc Son', 'testlogin2@gmail.com', '$2y$10$hk2ZXJO2.XnObxfmNPaKXu/vkkU0XF81cslpYFzChCTAaeV.ieRMu', '0925372462', 0, 230, 2, 300000, './user_img/smuge_the_cat.jpg', b'0', NULL, ''),
('8', 'Từ ', 'Huy Vạn', 'tuhuyvan123@gmail.com', '$2y$10$zDC/998P01A1gIM3BQjasOnGowxcZfAnwiQFItFkK1ePuKaWfykES', '0909288174', 0, 230, 1, 0, './user_img/smuge_the_cat.jpg', b'0', NULL, 'Obama Last Name');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `application`
--

CREATE TABLE `application` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) DEFAULT NULL,
  `stars` float DEFAULT NULL,
  `updated` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `install` int(11) DEFAULT NULL,
  `developer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `application`
--

INSERT INTO `application` (`id`, `name`, `price`, `stars`, `updated`, `size`, `install`, `developer`, `detail`, `image`, `content`, `description`, `file`, `status`) VALUES
('A0', 'Ta Là Quan Lão Gia - 100D', 100000, 4.4, '1616626800', '27M', 1000000, '100 Game', '', 'image/app/A0.jpg', 'Rated for 12+\nModerate Violence, Sexual Innuendo', '', 'apk/A0.zip', 'Published'),
('A1', 'MU: Vượt Thời Đại - Funtap', 0, 4, '1616968800', '98M', 1000000, 'Ambrine Studio', '', 'image/app/A1.jpg', 'Rated for 12+\nModerate Violence, Horror', '', 'apk/A1.zip', 'Published'),
('A10', 'Evony: The King\'s Return', 0, 4.3, '1618178400', '74M', 10000000, 'TG Inc.', '', 'image/app/A10.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A10.zip', 'Published'),
('A100', 'Eudemon League', 0, 4.3, '1616540400', '47M', 100000, 'JamesSam', '', 'image/app/A100.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A100.zip', 'Published'),
('A101', 'Idle Angels', 0, 4.5, '1618437600', '73M', 500000, 'MUJOY PTE. LTD.', '', 'image/app/A101.jpg', 'Rated for 16+\nNudity', '', 'apk/A101.zip', 'Published'),
('A102', 'Infinite Galaxy', 6000, 4.2, '1618351200', '49M', 1000000, 'Camel Games Limited', '', 'image/app/A102.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A102.zip', 'Published'),
('A103', 'Gọi Rồng Online-Vũ Trụ Bi Rồng', 0, 4.1, '1617832800', '90M', 100000, 'Pantherap', '', 'image/app/A103.jpg', 'Rated for 12+\nHorror', '', 'apk/A103.zip', 'Published'),
('A104', 'War of Destiny', 0, 4.1, '1617832800', '47M', 500000, 'Camel Games Limited', '', 'image/app/A104.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A104.zip', 'Published'),
('A105', 'Piggy Boom-Be the island king', 0, 4.5, '1618524000', '97M', 10000000, 'Aladin Fun', '', 'image/app/A105.jpg', 'Rated for 3+', '', 'apk/A105.zip', 'Published'),
('A106', 'Thần Vương Nhất Thế - Game Cày Thế Hệ Mới', 0, 4.5, '1615935600', '51M', 100000, 'NPH VTC Mobile', '', 'image/app/A106.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A106.zip', 'Published'),
('A107', 'Brave Dungeon: Immortal Legend', 0, 4.5, '1611702000', '44M', 1000000, 'UnlockGame', '', 'image/app/A107.jpg', 'Rated for 12+\nMild Swearing', '', 'apk/A107.zip', 'Published'),
('A108', 'KING`s RAID', 12000, 4.4, '1617746400', '104M', 5000000, 'Vespa Inc.', '', 'image/app/A108.jpg', 'Rated for 12+\nModerate Violence, Sexual Innuendo', '', 'apk/A108.zip', 'Published'),
('A109', 'Võ Lâm Truyền Kỳ Mobile - VNG', 0, 3.7, '1616454000', '93M', 1000000, 'VNG Game Publishing', '', 'image/app/A109.jpg', 'Rated for 3+', '', 'apk/A109.zip', 'Published'),
('A11', 'Yong Heroes', 0, 4.3, '1616454000', '100M', 1000000, '4399en game', '', 'image/app/A11.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A11.zip', 'Published'),
('A110', 'Cookie Run: Kingdom - Kingdom Builder & Battle RPG', 0, 4.3, '1618524000', '95M', 1000000, 'Devsisters Corporation', '', 'image/app/A110.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A110.zip', 'Published'),
('A111', 'FIFA Online 4 M by EA SPORTS™', 250000, 3.9, '1617919200', '67M', 1000000, 'Garena Mobile Private', '', 'image/app/A111.jpg', 'Rated for 3+', '', 'apk/A111.zip', 'Published'),
('A112', 'Texas Hold\'em & Omaha Poker: Pokerist', 0, 4, '1617314400', '139M', 10000000, 'KamaGames', '', 'image/app/A112.jpg', 'Rated for 18+\nGambling', '', 'apk/A112.zip', 'Published'),
('A113', 'Tam Quốc Chí Đại Chiến', 0, 3.4, '1615158000', '57M', 10000, 'Flipped Games', '', 'image/app/A113.jpg', 'Rated for 3+', '', 'apk/A113.zip', 'Published'),
('A114', 'Call Me Emperor - Alternate World', 0, 4.1, '1614121200', '53M', 1000000, 'Clicktouch Co., Ltd.', '', 'image/app/A114.jpg', 'Rated for 12+\nModerate Violence, Mild Swearing', '', 'apk/A114.zip', 'Published'),
('A115', 'Langrisser SEA', 0, 4.6, '1617228000', '86M', 100000, 'ZlongGames', '', 'image/app/A115.jpg', 'Rated for 12+\nModerate Violence, Mild Swearing', '', 'apk/A115.zip', 'Published'),
('A116', 'GunPow - Bắn Gà Teen PK', 0, 4.2, '1616626800', '95M', 1000000, 'CÔNG TY CỔ PHẦN VNG', '', 'image/app/A116.jpg', 'Rated for 3+', '', 'apk/A116.zip', 'Published'),
('A117', 'Đại Hải Trình', 0, 4.9, '1615417200', '42M', 100000, 'Thien Ha Online', '', 'image/app/A117.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A117.zip', 'Published'),
('A118', 'Dragon City', 0, 4.6, '1617832800', '130M', 100000000, 'Socialpoint', '', 'image/app/A118.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A118.zip', 'Published'),
('A119', 'Epic Seven', 0, 4.2, '1614121200', '58M', 5000000, 'Smilegate Megaport', '', 'image/app/A119.jpg', 'Rated for 12+\nModerate Violence, Nudity', '', 'apk/A119.zip', 'Published'),
('A12', 'PUBG MOBILE VN – GRAFFITI PRANK', 0, 4.2, '1615158000', '69M', 10000000, 'VNG Game Publishing', '', 'image/app/A12.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A12.zip', 'Published'),
('A120', 'Clash of Kings : Newly Presented Knight System', 0, 4.1, '1618351200', '143M', 50000000, 'Elex Wireless', '', 'image/app/A120.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A120.zip', 'Published'),
('A121', 'Klondike Adventures', 0, 4.5, '1617228000', '69M', 10000000, 'VIZOR APPS LTD.', '', 'image/app/A121.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A121.zip', 'Published'),
('A122', 'Jackpot World™ - Free Vegas Casino Slots', 0, 4.5, '1615330800', '101M', 5000000, 'SpinX Games Limited', '', 'image/app/A122.jpg', 'Rated for 18+\nSimulated Gambling', '', 'apk/A122.zip', 'Published'),
('A123', 'Monsters & Puzzles: Battle of God, New Match 3 RPG', 0, 4.5, '1617228000', '155M', 100000, 'INDIEZ GLOBAL PTE. LTD.', '', 'image/app/A123.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A123.zip', 'Published'),
('A124', '바람의전쟁: 뇌명천하', 69000, 4, '1600812000', '101M', 100000, '4399 KOREA', '', 'image/app/A124.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A124.zip', 'Published'),
('A125', 'Gold Storm Casino - Asian Fishing Arcade Carnival', 0, 4.2, '1610406000', '70M', 500000, 'XieXing Studio', '', 'image/app/A125.jpg', 'Rated for 12+\nSimulated Gambling', '', 'apk/A125.zip', 'Published'),
('A126', 'Sòng Bạc May Mắn - Nổ hũ，Bắn cá，Tố bài', 0, 4.5, '1611702000', '22M', 100000, 'nanshan', '', 'image/app/A126.jpg', 'Rated for 12+\nSimulated Gambling', '', 'apk/A126.zip', 'Published'),
('A127', 'Trials of Heroes: Idle RPG', 0, 4.4, '1617314400', '100M', 1000000, 'Jupiter Entertainment', '', 'image/app/A127.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A127.zip', 'Published'),
('A128', 'Đại Hiệp Luyện Công Nào H5', 0, 3.3, '1617832800', '96M', 10000, 'Mcorp Investment & Technology Joint Stock Company', '', 'image/app/A128.jpg', 'Rated for 16+\nStrong Violence', '', 'apk/A128.zip', 'Published'),
('A129', 'Archero', 0, 4.4, '1618351200', '79M', 50000000, 'Habby', '', 'image/app/A129.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A129.zip', 'Published'),
('A13', 'Garena Free Fire MAX', 99000, 4.6, '1617919200', '69M', 5000000, 'GARENA INTERNATIONAL I PRIVATE LIMITED', '', 'image/app/A13.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A13.zip', 'Published'),
('A130', 'Jade Sword', 0, 4.3, '1606172400', '99M', 100000, '4399en game', '', 'image/app/A130.jpg', 'Rated for 12+\nHorror', '', 'apk/A130.zip', 'Published'),
('A131', 'Long Vũ 3D - Long Vu 3D', 0, 4.4, '1617746400', '90M', 10000, 'Funtap.vn', '', 'image/app/A131.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A131.zip', 'Published'),
('A132', 'X-HERO: Idle Avengers', 0, 4.5, '1618351200', '65M', 1000000, 'Glaciers Game', '', 'image/app/A132.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A132.zip', 'Published'),
('A133', 'Dragon Mania Legends', 0, 4.4, '1617141600', '119M', 50000000, 'Gameloft SE', '', 'image/app/A133.jpg', 'Rated for 3+', '', 'apk/A133.zip', 'Published'),
('A134', 'Hero Clash :pocket war', 0, 4.6, '1618524000', '100M', 100000, 'Mega fun Games', '', 'image/app/A134.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A134.zip', 'Published'),
('A135', 'Shadow Fight 3 - RPG fighting game', 0, 4.3, '1616626800', '115M', 100000000, 'Nekki - Action and Fighting Games', '', 'image/app/A135.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A135.zip', 'Published'),
('A136', 'Taptap Heroes:Void Cage', 0, 4.6, '1616540400', '99M', 5000000, 'Ajoy Lab Games', '', 'image/app/A136.jpg', 'Rated for 12+\nHorror', '', 'apk/A136.zip', 'Published'),
('A137', 'Space shooter - Galaxy attack - Galaxy shooter', 0, 4.6, '1618610400', '104M', 50000000, 'OneSoft Global PTE. LTD.', '', 'image/app/A137.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A137.zip', 'Published'),
('A138', 'World Series of Poker WSOP Free Texas Holdem Poker', 0, 4.3, '1617660000', '114M', 50000000, 'Playtika', '', 'image/app/A138.jpg', 'Rated for 18+\nSimulated Gambling', '', 'apk/A138.zip', 'Published'),
('A139', 'Sky: Children of the Light', 0, 4.5, '1618264800', '1.0G', 10000000, 'thatgamecompany inc', '', 'image/app/A139.jpg', 'Rated for 7+\nMild Violence, Fear', '', 'apk/A139.zip', 'Published'),
('A14', 'Luyện Yêu Ký', 0, 4.9, '1616968800', '93M', 50000, 'TTH Games', '', 'image/app/A14.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A14.zip', 'Published'),
('A140', 'Crypto Cards - Collect and Earn', 0, 4.5, '1618524000', '47M', 100000, 'Phoneum', '', 'image/app/A140.jpg', 'Rated for 3+', '', 'apk/A140.zip', 'Published'),
('A141', 'Minecraft', 0, 4.5, '1616968800', '69M', 0, 'Flag as inappropriate', '', 'image/app/A141.jpg', 'Varies with device', '', 'apk/A141.zip', 'Published'),
('A142', 'Battle Night: Cyberpunk-Idle RPG', 0, 4.4, '1618524000', '216M', 1000000, 'FT Games', '', 'image/app/A142.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A142.zip', 'Published'),
('A143', '星城Online', 0, 4.3, '1618351200', '59M', 1000000, '網銀國際 股份有限 公司', '', 'image/app/A143.jpg', 'Rated for 12+\nSimulated Gambling', '', 'apk/A143.zip', 'Published'),
('A144', 'FFBE WAR OF THE VISIONS', 0, 3.9, '1615417200', '110M', 1000000, 'SQUARE ENIX Co.,Ltd.', '', 'image/app/A144.jpg', 'Rated for 12+\nMild Swearing', '', 'apk/A144.zip', 'Published'),
('A145', 'Đảo Kho Báu - Arena Island', 899000, 3.9, '1615244400', '50M', 100000, 'Long Nhat', '', 'image/app/A145.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A145.zip', 'Published'),
('A146', 'Blockman Go', 0, 4.4, '1618437600', '122M', 50000000, 'Blockman GO Studio', '', 'image/app/A146.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A146.zip', 'Published'),
('A147', 'Dungeon & Heroes: 3D RPG', 0, 4.2, '1589925600', '69M', 1000000, 'DroidHen', '', 'image/app/A147.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A147.zip', 'Published'),
('A148', 'Rush Royale - Tower Defense game PvP', 0, 4.6, '1617919200', '70M', 1000000, 'My.com B.V.', '', 'image/app/A148.jpg', 'Rated for 3+', '', 'apk/A148.zip', 'Published'),
('A149', 'DDTank Mobile', 0, 3.8, '1593381600', '82M', 1000000, '7road International HK Limited', '', 'image/app/A149.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A149.zip', 'Published'),
('A15', 'MU Đại Thiên Sứ H5', 0, 3.7, '1594504800', '22M', 5000000, 'ASM MOBILE GAME COMPANY', '', 'image/app/A15.jpg', 'Rated for 16+\nStrong Violence', '', 'apk/A15.zip', 'Published'),
('A150', 'Art of War 3: PvP RTS modern warfare strategy game', 0, 4.5, '1618437600', '137M', 10000000, 'Gear Games', '', 'image/app/A150.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A150.zip', 'Published'),
('A151', 'Tân Thiên Long Mobile', 34000, 3.4, '1604962800', '89M', 500000, 'VNG Game Publishing', '', 'image/app/A151.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A151.zip', 'Published'),
('A152', 'MORTAL KOMBAT: The Ultimate Fighting Game!', 0, 4.2, '1616968800', '69M', 50000000, 'Warner Bros. International Enterprises', '', 'image/app/A152.jpg', 'Rated for 18+\nExtreme Violence', '', 'apk/A152.zip', 'Published'),
('A153', 'Mini World: Block Art', 0, 4.3, '1616022000', '95M', 50000000, 'SuperNice Digital Marketing Co., Ltd.', '', 'image/app/A153.jpg', 'Rated for 7+\nImplied Violence', '', 'apk/A153.zip', 'Published'),
('A154', 'NagaVip', 0, 4.6, '1611442800', '120M', 50000, 'Cesoyo Studio', '', 'image/app/A154.jpg', 'Rated for 12+\nSimulated Gambling', '', 'apk/A154.zip', 'Published'),
('A155', 'OMG 3Q – Đấu tướng chiến thuật cực mạnh', 0, 4.3, '1612134000', '84M', 1000000, 'VNG Game Publishing', '', 'image/app/A155.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A155.zip', 'Published'),
('A156', 'MythWars & Puzzles: RPG Match 3', 0, 4.3, '1617228000', '174M', 5000000, 'KARMA GAME', '', 'image/app/A156.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A156.zip', 'Published'),
('A157', 'Township', 0, 4.2, '1615590000', '147M', 100000000, 'Playrix', '', 'image/app/A157.jpg', 'Rated for 3+', '', 'apk/A157.zip', 'Published'),
('A158', 'Fishdom', 0, 4.4, '1616540400', '136M', 100000000, 'Playrix', '', 'image/app/A158.jpg', 'Rated for 3+', '', 'apk/A158.zip', 'Published'),
('A159', 'Tank Hero - Awesome tank war games', 0, 4.5, '1618437600', '63M', 1000000, 'Betta Games', '', 'image/app/A159.jpg', 'Rated for 3+', '', 'apk/A159.zip', 'Published'),
('A16', 'Rise of the Kings', 0, 4.1, '1617055200', '94M', 10000000, 'ONEMT', '', 'image/app/A16.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A16.zip', 'Published'),
('A160', 'Fishing Clash', 0, 4.7, '1617832800', '106M', 50000000, 'Ten Square Games', '', 'image/app/A160.jpg', 'Rated for 3+', '', 'apk/A160.zip', 'Published'),
('A161', 'Family Island™ - Farm game adventure', 0, 4.3, '1618178400', '83M', 10000000, 'Melsoft Games Ltd', '', 'image/app/A161.jpg', 'Rated for 3+', '', 'apk/A161.zip', 'Published'),
('A162', 'Giang Sơn Của Trẫm', 0, 4, '1618178400', '89M', 10000, 'Jedi Việt Nam', '', 'image/app/A162.jpg', 'Rated for 3+', '', 'apk/A162.zip', 'Published'),
('A163', 'KOF AllStar -Quyền Vương Chiến', 0, 3.5, '1605049200', '28M', 500000, 'VNG Game Publishing', '', 'image/app/A163.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A163.zip', 'Published'),
('A164', 'Pocket Knights 2', 0, 4.4, '1617919200', '71M', 1000000, 'Enjoy mobile game limited', '', 'image/app/A164.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A164.zip', 'Published'),
('A165', 'MARVEL Strike Force - Squad RPG', 0, 3.8, '1616108400', '132M', 10000000, 'Scopely', '', 'image/app/A165.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A165.zip', 'Published'),
('A166', 'Modern Strike Online: Free PvP FPS shooting game', 0, 4.4, '1614207600', '69M', 50000000, 'Azur Interactive Games Limited', '', 'image/app/A166.jpg', 'Rated for 16+\nStrong Violence', '', 'apk/A166.zip', 'Published'),
('A167', 'Island King', 0, 4.6, '1617055200', '106M', 5000000, 'Forever9 Games', '', 'image/app/A167.jpg', 'Rated for 3+', '', 'apk/A167.zip', 'Published'),
('A168', 'Poker VN - Mậu Binh – Binh Xập Xám - ZingPlay', 0, 4.6, '1612134000', '58M', 5000000, 'VNG ZingPlay Game Studios', '', 'image/app/A168.jpg', 'Rated for 12+\nGambling', '', 'apk/A168.zip', 'Published'),
('A169', 'Fate/Grand Order (English)', 0, 4.5, '1617141600', '71M', 1000000, 'Aniplex Inc.', '', 'image/app/A169.jpg', 'Rated for 12+\nModerate Violence, Sexual Innuendo', '', 'apk/A169.zip', 'Published'),
('A17', 'Top War: Battle Game', 0, 4.2, '1618437600', '149M', 10000000, 'Topwar Studio', '', 'image/app/A17.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A17.zip', 'Published'),
('A170', 'Asphalt 9: Legends - Epic Car Action Racing Game', 0, 4.5, '1618524000', '96M', 50000000, 'Gameloft SE', '', 'image/app/A170.jpg', 'Rated for 7+\nMild Violence, Implied Violence', '', 'apk/A170.zip', 'Published'),
('A171', 'Solitaire Grand Harvest - Free Solitaire Tripeaks', 79000, 4.6, '1618264800', '159M', 10000000, 'Supertreat - A Playtika Studio', '', 'image/app/A171.jpg', 'Rated for 3+', '', 'apk/A171.zip', 'Published'),
('A172', 'Battleship & Puzzles: Warship Empire Match', 0, 4.2, '1615330800', '138M', 10000, 'Skymoons Technology, Inc', '', 'image/app/A172.jpg', 'Rated for 3+', '', 'apk/A172.zip', 'Published'),
('A173', 'LifeAfter', 0, 4.1, '1615330800', '75M', 10000000, 'NetEase Games', '', 'image/app/A173.jpg', 'Rated for 12+\nModerate Violence, Horror', '', 'apk/A173.zip', 'Published'),
('A174', 'Lightning Link Casino: Best Vegas Casino Slots!', 0, 4.2, '1618351200', '158M', 5000000, 'Product Madness', '', 'image/app/A174.jpg', 'Rated for 18+\nGambling', '', 'apk/A174.zip', 'Published'),
('A175', 'Date A Live: Spirit Pledge - Global', 0, 4.4, '1614726000', '92M', 500000, 'Moonwalk Interactive Hong Kong Limited', '', 'image/app/A175.jpg', 'Rated for 12+\nModerate Violence, Nudity, Sexual Innuendo', '', 'apk/A175.zip', 'Published'),
('A18', 'Soul Land: Đấu La Đại Lục-Funtap', 0, 4.1, '1607295600', '67M', 1000000, 'Glitter star Studio', '', 'image/app/A18.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A18.zip', 'Published'),
('A19', 'Thế Chiến Z', 50000, 3.4, '1617832800', '52M', 100000, 'Camel Games Limited', '', 'image/app/A19.jpg', 'Rated for 12+\nHorror', '', 'apk/A19.zip', 'Published'),
('A2', 'Rise of Kingdoms: Lost Crusade', 0, 4.2, '1618178400', '104M', 10000000, 'LilithGames', '', 'image/app/A2.jpg', 'Rated for 18+\nSimulated Gambling', '', 'apk/A2.zip', 'Published'),
('A20', 'Roblox', 0, 4.5, '1618524000', '97M', 100000000, 'Roblox Corporation', '', 'image/app/A20.jpg', 'Rated for 7+\nMild Violence, Fear', '', 'apk/A20.zip', 'Published'),
('A21', 'Chiến Thần Kỷ Nguyên - Dragon Impact', 0, 3.8, '1614553200', '98M', 100000, 'NPH VTC Mobile', '', 'image/app/A21.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A21.zip', 'Published'),
('A22', 'Crasher: Origin', 0, 4.2, '1618005600', '100M', 1000000, '4399en game', '', 'image/app/A22.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A22.zip', 'Published'),
('A23', 'Mobile Legends: Adventure', 0, 4.6, '1618178400', '94M', 10000000, 'Moonton', '', 'image/app/A23.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A23.zip', 'Published'),
('A24', 'State of Survival:The Walking Dead - Funtap', 0, 4.6, '1618178400', '138M', 500000, 'KingsGroup Holdings', '', 'image/app/A24.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A24.zip', 'Published'),
('A25', 'LMHT: Tốc Chiến', 0, 3.6, '1616886000', '69M', 1000000, 'CÔNG TY CỔ PHẦN VNG', '', 'image/app/A25.jpg', 'Rated for 12+\nModerate Violence, Sexual Innuendo', '', 'apk/A25.zip', 'Published'),
('A26', 'Goddess MUA', 0, 4.4, '1599170400', '98M', 1000000, '4399en game', '', 'image/app/A26.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A26.zip', 'Published'),
('A27', 'Summoners War', 0, 4.3, '1617832800', '1.1G', 50000000, 'Com2uS', '', 'image/app/A27.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A27.zip', 'Published'),
('A28', 'Coin Master', 0, 4.3, '1618092000', '69M', 100000000, 'Moon Active', '', 'image/app/A28.jpg', 'Rated for 12+\nSimulated Gambling', '', 'apk/A28.zip', 'Published'),
('A29', 'Slots (Golden HoYeah) - Casino Slots', 0, 4.3, '1618524000', '143M', 10000000, 'International Games System Co., Ltd.', '', 'image/app/A29.jpg', 'Rated for 18+\nSimulated Gambling', '', 'apk/A29.zip', 'Published'),
('A3', 'Võ Lâm Truyền Kỳ 1 Mobile', 0, 2.7, '1617573600', '57M', 100000, 'CÔNG TY CỔ PHẦN VNG', '', 'image/app/A3.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A3.zip', 'Published'),
('A30', 'Empires & Puzzles: Epic Match 3', 0, 4.2, '1617055200', '110M', 50000000, 'Small Giant Games', '', 'image/app/A30.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A30.zip', 'Published'),
('A31', 'FIFA Soccer', 0, 4.2, '1616367600', '90M', 100000000, 'ELECTRONIC ARTS', '', 'image/app/A31.jpg', 'Rated for 3+', '', 'apk/A31.zip', 'Published'),
('A32', 'THỢ SĂN CÁ', 1000, 4.3, '1618351200', '149M', 1000000, 'TPC mobile', '', 'image/app/A32.jpg', 'Rated for 12+\nSimulated Gambling', '', 'apk/A32.zip', 'Published'),
('A33', 'Idle Goddess', 0, 4.6, '1618524000', '75M', 100000, 'FIFUN', '', 'image/app/A33.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A33.zip', 'Published'),
('A34', 'AFK Arena', 0, 4.6, '1617660000', '95M', 10000000, 'LilithGames', '', 'image/app/A34.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A34.zip', 'Published'),
('A35', 'Castle Clash: Quyết Chiến-Gamota', 0, 4.6, '1618524000', '562M', 1000000, 'IGG.COM', '', 'image/app/A35.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A35.zip', 'Published'),
('A36', 'Epic War: Thrones', 0, 4.6, '1617055200', '74M', 100000, 'Archosaur Games', '', 'image/app/A36.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A36.zip', 'Published'),
('A37', 'Phong Vân Chí – Cày Nhiệm Vụ Free Vip 3', 0, 4.8, '1607641200', '90M', 100000, 'VTC Mobile Entertainment & Sport Center', '', 'image/app/A37.jpg', 'Rated for 3+', '', 'apk/A37.zip', 'Published'),
('A3755', 'fast and speed', 0, NULL, '150521', '8M', NULL, 'Obama Last Name', '', 'image/app/whatappcar.jpg', 'Moderate Violence', 'fast and speed', 'apk/A3755.zip', 'Published'),
('A38', 'Thiếu Niên 3Q - VNG: Tam Quốc Chiến Thuật', 0, 4.2, '1604185200', '107M', 500000, 'MINH PHUONG THINH COMMUNICATION COMPANY LIMITED', '', 'image/app/A38.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A38.zip', 'Published'),
('A39', 'D-MEN：The Defenders', 0, 4.3, '1616022000', '100M', 1000000, 'ACE GAME INTERNATIONAL LIMITED', '', 'image/app/A39.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A39.zip', 'Published'),
('A3994', 'facebook 2', 0, NULL, '150521', '8M', NULL, 'Obama Last Name', '', 'image/app/facebook2.png', 'Implied Violence', 'facebook 2 facebook 2', 'apk/A3994.zip', 'Unpublished'),
('A4', 'Garena Free Fire- World Series', 0, 4.3, '1617919200', '69M', 500000000, 'GARENA INTERNATIONAL I PRIVATE LIMITED', '', 'image/app/A4.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A4.zip', 'Published'),
('A40', '8 Ball Pool', 0, 4.4, '1618264800', '66M', 500000000, 'Miniclip.com', '', 'image/app/A40.jpg', 'Rated for 12+\nSimulated Gambling', '', 'apk/A40.zip', 'Published'),
('A41', 'War and Order', 0, 4.2, '1618264800', '44M', 10000000, 'Camel Games Limited', '', 'image/app/A41.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A41.zip', 'Published'),
('A42', 'Tam Quốc Chí 2020', 0, 4.2, '1609196400', '74M', 500000, 'Hoang Thuy Linh', '', 'image/app/A42.jpg', 'Rated for 12+\nMild Swearing', '', 'apk/A42.zip', 'Published'),
('A43', 'Gardenscapes', 0, 4.4, '1618178400', '140M', 100000000, 'Playrix', '', 'image/app/A43.jpg', 'Rated for 3+', '', 'apk/A43.zip', 'Published'),
('A44', 'Rise of Empires: Ice and Fire', 0, 4.7, '1617832800', '69M', 10000000, 'Long Tech Network Limited', '', 'image/app/A44.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A44.zip', 'Published'),
('A45', 'Puzzles & Survival', 0, 4.2, '1618351200', '147M', 5000000, '37GAMES', '', 'image/app/A45.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A45.zip', 'Published'),
('A46', 'Immortal Legend: Idle RPG', 0, 4, '1617660000', '7.5M', 500000, 'UnlockGame', '', 'image/app/A46.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A46.zip', 'Published'),
('A47', 'Dragon King Fishing Online-Arcade Fish Games', 0, 4.4, '1616540400', '92M', 1000000, 'Yue Studio', '', 'image/app/A47.jpg', 'Rated for 3+', '', 'apk/A47.zip', 'Published'),
('A48', 'Ta Là Hoàng Thượng - VegaGame', 0, 4.3, '1615935600', '55M', 500000, 'Clicktouch Co., Ltd.', '', 'image/app/A48.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A48.zip', 'Published'),
('A49', 'Honkai Impact 3', 0, 4.3, '1614294000', '209M', 5000000, 'miHoYo Limited', '', 'image/app/A49.jpg', 'Rated for 12+\nSexual Innuendo', '', 'apk/A49.zip', 'Published'),
('A5', 'Lords Mobile - Gamota', 0, 4.4, '1616968800', '80M', 1000000, 'IGG.COM', '', 'image/app/A5.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A5.zip', 'Published'),
('A50', 'Liên Minh Mạo Hiểm', 0, 3.5, '1615244400', '58M', 100000, 'PHOENIX ENTERTAINMENT SERVICE COMPANY LIMITED', '', 'image/app/A50.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A50.zip', 'Published'),
('A51', 'Candy Crush Saga', 0, 4.6, '1617919200', '69M', 1000000000, 'King', '', 'image/app/A51.jpg', 'Rated for 3+', '', 'apk/A51.zip', 'Published'),
('A52', 'Chiến Thần Tam Quốc-Tranh Bá', 0, 3.9, '1618437600', '69M', 500000, 'Heyshell HK Limited', '', 'image/app/A52.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A52.zip', 'Published'),
('A53', 'Mobile Legends: Bang Bang VNG', 0, 4, '1618264800', '103M', 10000000, 'VNG Game Publishing', '', 'image/app/A53.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A53.zip', 'Published'),
('A54', 'Call Of Duty: Mobile VN', 0, 4.5, '1615244400', '86M', 1000000, 'VNG Game Publishing', '', 'image/app/A54.jpg', 'Rated for 16+\nStrong Violence', '', 'apk/A54.zip', 'Published'),
('A55', 'Cực Phẩm Đại Nhân - tthgame', 10000, 3.9, '1606258800', '22M', 100000, 'TTH MOBI', '', 'image/app/A55.jpg', 'Rated for 16+\nNudity', '', 'apk/A55.zip', 'Published'),
('A56', 'Vĩnh Hằng Kỷ Nguyên-Kỵ Sĩ Rồng thức tỉnh', 0, 3.7, '1616367600', '81M', 1000000, 'ASM MOBILE GAME COMPANY', '', 'image/app/A56.jpg', 'Rated for 16+\nStrong Violence', '', 'apk/A56.zip', 'Published'),
('A57', 'FaFaFa™ Gold Casino: Free slot machines', 0, 3.8, '1610406000', '124M', 1000000, 'Product Madness', '', 'image/app/A57.jpg', 'Rated for 18+\nSimulated Gambling', '', 'apk/A57.zip', 'Published'),
('A58', 'The King\'s Army:Idle RPG', 0, 3.5, '1611183600', '132M', 100000, 'Merry Realm', '', 'image/app/A58.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A58.zip', 'Published'),
('A59', 'Dragon raja-Long tộc huyễn tưởng', 0, 4.4, '1618437600', '66M', 500000, 'Archosaur Games', '', 'image/app/A59.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A59.zip', 'Published'),
('A6', 'Garena Liên Quân Mobile', 0, 4.1, '1615935600', '69M', 50000000, 'Garena Mobile Private', '', 'image/app/A6.jpg', 'Rated for 12+\nModerate Violence, Sexual Innuendo, Horror', '', 'apk/A6.zip', 'Published'),
('A60', 'ZingSpeed Mobile', 0, 4.2, '1612134000', '89M', 5000000, 'VNG Game Publishing', '', 'image/app/A60.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A60.zip', 'Published'),
('A61', 'Nghịch Thiên Kiếm Thế - Thế Thiên Hành Đạo', 0, 4.4, '1611270000', '69M', 100000, 'NPH VTC Mobile', '', 'image/app/A61.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A61.zip', 'Published'),
('A62', 'War Robots. 6v6 Tactical Multiplayer Battles', 0, 4, '1618524000', '928M', 50000000, 'PIXONIC', '', 'image/app/A62.jpg', 'Rated for 12+\nMild Swearing', '', 'apk/A62.zip', 'Published'),
('A63', 'Days of Empire - Heroes Never Die!', 0, 4.1, '1618264800', '98M', 5000000, 'ONEMT', '', 'image/app/A63.jpg', 'Rated for 12+\nSexual Innuendo', '', 'apk/A63.zip', 'Published'),
('A64', 'Con Đường Tơ Lụa', 0, 2.9, '1615935600', '75M', 10000, '4GAMOTA', '', 'image/app/A64.jpg', 'Rated for 16+\nStrong Violence', '', 'apk/A64.zip', 'Published'),
('A65', 'Dream League Soccer 2021', 0, 4.4, '1617832800', '389M', 50000000, 'First Touch Games Ltd.', '', 'image/app/A65.jpg', 'Rated for 3+', '', 'apk/A65.zip', 'Published'),
('A66', 'Thợ Săn Ma 3D', 0, 4.6, '1617832800', '94M', 100000, '1618PLAY LLC', '', 'image/app/A66.jpg', 'Rated for 18+\nExtreme Violence', '', 'apk/A66.zip', 'Published'),
('A67', 'Danh Tướng 3Q', 0, 4.2, '1574895600', '79M', 1000000, 'VNG Game Publishing', '', 'image/app/A67.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A67.zip', 'Published'),
('A68', '封神異世錄', 0, 4.5, '1614639600', '91M', 50000, 'Trigirls Studio', '', 'image/app/A68.jpg', 'Rated for 12+\nModerate Violence, Mild Swearing', '', 'apk/A68.zip', 'Published'),
('A69', 'Laplace M - Vùng Đất Gió', 0, 4.3, '1612652400', '54M', 500000, 'ZlongGames', '', 'image/app/A69.jpg', 'Rated for 3+', '', 'apk/A69.zip', 'Published'),
('A7', 'Genshin Impact', 0, 4.5, '1616367600', '543M', 10000000, 'miHoYo Limited', '', 'image/app/A7.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A7.zip', 'Published'),
('A70', 'Homescapes', 0, 4.3, '1616367600', '148M', 100000000, 'Playrix', '', 'image/app/A70.jpg', 'Rated for 3+', '', 'apk/A70.zip', 'Published'),
('A71', 'Ace Defender: War of Dragon Slayer', 0, 4.6, '1618178400', '69M', 500000, 'ACE GAME INTERNATIONAL LIMITED', '', 'image/app/A71.jpg', 'Rated for 12+\nHorror', '', 'apk/A71.zip', 'Published'),
('A72', 'Dragon Age: Bóng Đêm Thức Tỉnh', 0, 4.8, '1612306800', '80M', 100000, 'TTH Games', '', 'image/app/A72.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A72.zip', 'Published'),
('A73', 'RAID: Shadow Legends', 0, 4.2, '1617832800', '150M', 10000000, 'Plarium Global Ltd', '', 'image/app/A73.jpg', 'Rated for 12+\nHorror', '', 'apk/A73.zip', 'Published'),
('A74', 'Tiên Kiếm Tiêu Dao', 29000, 3.6, '1614898800', '98M', 50000, 'Dream Asia', '', 'image/app/A74.jpg', 'Rated for 12+\nModerate Violence, Sexual Innuendo', '', 'apk/A74.zip', 'Published'),
('A75', 'Three Kingdoms: Art of War', 0, 4.7, '1615849200', '97M', 100000, 'ZBJoy Games', '', 'image/app/A75.jpg', 'Rated for 7+\nImplied Violence', '', 'apk/A75.zip', 'Published'),
('A76', 'Top Eleven 2021: Be a Soccer Manager', 0, 4.6, '1617919200', '110M', 50000000, 'Nordeus', '', 'image/app/A76.jpg', 'Rated for 3+', '', 'apk/A76.zip', 'Published'),
('A77', 'Mighty Party: Magic Arena', 0, 3.8, '1617919200', '66M', 5000000, 'PANORAMIK GAMES LTD', '', 'image/app/A77.jpg', 'Rated for 12+\nModerate Violence, Sexual Innuendo', '', 'apk/A77.zip', 'Published'),
('A78', 'Ngôi Sao Thời Trang 360Mobi', 0, 4.1, '1571781600', '96M', 5000000, 'VNG Game Publishing', '', 'image/app/A78.jpg', 'Rated for 18+\nSex', '', 'apk/A78.zip', 'Published'),
('A79', 'ILLUSION CONNECT', 0, 4.6, '1618524000', '36M', 1000000, 'Superprism Technology Co., Ltd', '', 'image/app/A79.jpg', 'Rated for 12+\nSexual Innuendo', '', 'apk/A79.zip', 'Published'),
('A8', 'hoàng hậu cát tường', 0, 4.3, '1608505200', '94M', 1000000, 'Hoang Thuy Linh', '', 'image/app/A8.jpg', 'Rated for 3+', '', 'apk/A8.zip', 'Published'),
('A80', 'Pokémon GO', 0, 4.1, '1618437600', '69M', 100000000, 'Niantic, Inc.', '', 'image/app/A80.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A80.zip', 'Published'),
('A81', 'Heroic Expedition', 0, 4, '1617746400', '75M', 50000, 'DHGAMES', '', 'image/app/A81.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A81.zip', 'Published'),
('A82', 'Vương Bài Chiến Cơ', 0, 4.7, '1615849200', '100M', 100000, 'PhoneCool', '', 'image/app/A82.jpg', 'Rated for 3+', '', 'apk/A82.zip', 'Published'),
('A83', 'Idle Heroes', 0, 4.5, '1615417200', '391M', 10000000, 'DHGAMES', '', 'image/app/A83.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A83.zip', 'Published'),
('A84', 'World of Tanks Blitz PVP MMO 3D tank game for free', 0, 4.2, '1618524000', '120M', 100000000, 'Wargaming Group', '', 'image/app/A84.jpg', 'Rated for 7+\nImplied Violence', '', 'apk/A84.zip', 'Published'),
('A85', 'Last Shelter: Survival', 0, 4.3, '1617832800', '69M', 10000000, 'Long Tech Network Limited', '', 'image/app/A85.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A85.zip', 'Published'),
('A86', 'Three Kingdoms:Heroes of Legend', 0, 3.9, '1614726000', '69M', 100000, 'KunYue Game', '', 'image/app/A86.jpg', 'Rated for 3+', '', 'apk/A86.zip', 'Published'),
('A87', 'NPLAY: Game Bài Online, Tiến Lên, Mậu Binh, Xì Tố', 0, 3.7, '1616968800', '101M', 1000000, 'NGame Company', '', 'image/app/A87.jpg', 'Rated for 12+\nGambling', '', 'apk/A87.zip', 'Published'),
('A88', 'Gunship Battle Total Warfare', 0, 4.2, '1617660000', '101M', 5000000, 'JOYCITY Corp.', '', 'image/app/A88.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A88.zip', 'Published'),
('A89', 'Captain Tsubasa (Flash Kicker): Dream Team', 0, 4.1, '1617573600', '92M', 5000000, 'KLab', '', 'image/app/A89.jpg', 'Rated for 3+', '', 'apk/A89.zip', 'Published'),
('A9', 'Warpath', 0, 4.4, '1616968800', '71M', 5000000, 'LilithGames', '', 'image/app/A9.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A9.zip', 'Published'),
('A90', 'Kỷ Nguyên Triệu Hồi', 0, 4.5, '1614898800', '113M', 100000, 'Sungame Vietnam', '', 'image/app/A90.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A90.zip', 'Published'),
('A91', 'KOF\'98 UM OL', 0, 4.1, '1615762800', '87M', 5000000, 'FingerFun Limited.', '', 'image/app/A91.jpg', 'Rated for 12+\nSexual Innuendo, Gambling', '', 'apk/A91.zip', 'Published'),
('A92', 'Gunny Mobi - Bắn Gà Teen & Cute', 0, 3.6, '1587765600', '92M', 10000000, 'VNG Game Publishing', '', 'image/app/A92.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A92.zip', 'Published'),
('A93', 'Ngạo Thế Phi Tiên', 0, 4.5, '1618524000', '76M', 100000, 'MOC GAME', '', 'image/app/A93.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A93.zip', 'Published'),
('A94', 'Art of War: Legions', 0, 4.5, '1617746400', '140M', 10000000, 'Fastone Games HK', '', 'image/app/A94.jpg', 'Rated for 3+', '', 'apk/A94.zip', 'Published'),
('A95', 'EverMerge', 0, 4.4, '1617746400', '120M', 5000000, 'Big Fish Games', '', 'image/app/A95.jpg', 'Rated for 3+', '', 'apk/A95.zip', 'Published'),
('A96', '삼국지Global', 0, 4.3, '1617660000', '89M', 100000, '4399 KOREA', '', 'image/app/A96.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A96.zip', 'Published'),
('A97', 'Might & Magic: Era of Chaos', 0, 4.2, '1618264800', '51M', 1000000, 'Ubisoft Mobile Games', '', 'image/app/A97.jpg', 'Rated for 12+\nModerate Violence', '', 'apk/A97.zip', 'Published'),
('A98', 'World War Heroes: WW2 FPS', 0, 4.5, '1618264800', '69M', 50000000, 'Azur Interactive Games Limited', '', 'image/app/A98.jpg', 'Rated for 16+\nStrong Violence', '', 'apk/A98.zip', 'Published'),
('A99', 'Art of Conquest: Dark Horizon', 0, 3.9, '1618264800', '67M', 10000000, 'LilithGames', '', 'image/app/A99.jpg', 'Rated for 7+\nMild Violence', '', 'apk/A99.zip', 'Published');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bought_app`
--

CREATE TABLE `bought_app` (
  `user_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `app_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bought_app`
--

INSERT INTO `bought_app` (`user_id`, `app_id`) VALUES
('[object HT', '[object HT'),
('1', 'A13'),
('1', 'A171'),
('1', 'A32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `card`
--

CREATE TABLE `card` (
  `id` int(10) NOT NULL,
  `serial` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(6) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `card`
--

INSERT INTO `card` (`id`, `serial`, `value`, `status`) VALUES
(1, 'EJNGHY797H9XIO7', 50000, 1),
(2, '5JYOTPSCZU2VAYG', 50000, 1),
(3, 'RZTZKLPSB3GDN7I', 100000, 1),
(4, 'NEANN3Y76RQAXO1', 100000, 1),
(5, 'HDGKLZ61GBDGKEU', 200000, 1),
(6, '6BEVBN9M4EHWDT6', 200000, 0),
(7, 'U08R6O7C92XLDB7', 50000, 0),
(8, '4ALWAYNT88PN9KY', 50000, 0),
(9, 'AQUL2M31RXPSV3J', 50000, 0),
(10, '6V3ZA44DZ9ESBWM', 200000, 0),
(11, 'KHVND4L9YJSUJ4X', 50000, 0),
(12, '8NGKEHLTAA1YPIT', 50000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_rating`
--

CREATE TABLE `comment_rating` (
  `id` int(10) NOT NULL,
  `user_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `application_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment_rating`
--

INSERT INTO `comment_rating` (`id`, `user_id`, `application_id`, `comment`, `rating`) VALUES
(1, '1', 'A14', '', 1),
(2, '1', 'A171', 'hay nhỉ', 4),
(3, '1', 'A28', 'game tệ', 4),
(4, '1', 'A4', 'game như cái đầu buồi vậy', 1),
(5, '1', 'A51', 'hay lắm', 4),
(6, '4', 'A51', 'như cái ...........................', 1),
(7, '2', 'A51', 'tôi mất quá nhiều thời gian vào trò này', 2),
(11, '3', 'A51', 'tuyệt vời', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `downloaded_app`
--

CREATE TABLE `downloaded_app` (
  `user_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `app_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `downloaded_app`
--

INSERT INTO `downloaded_app` (`user_id`, `app_id`) VALUES
('1', 'A0'),
('1', 'A171'),
('1', 'A20'),
('1', 'A31'),
('1', 'A4'),
('1', 'A51'),
('3', 'A51'),
('4', 'A51'),
('8', 'A51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pending_application`
--

CREATE TABLE `pending_application` (
  `app_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `developer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pending_application`
--

INSERT INTO `pending_application` (`app_id`, `developer`, `name`, `price`, `date`, `size`, `image`, `content`, `description`, `status`, `file`, `user_id`) VALUES
('A3755', 'Obama Last Name', 'fast and speed', 0, '150521', '8M', 'image/app/whatappcar.jpg', 'Moderate Violence', 'fast and speed', 'Published', 'apk/A3755.zip', '8'),
('A3994', 'Obama Last Name', 'facebook 2', 0, '150521', '8M', 'image/app/facebook2.png', 'Implied Violence', 'facebook 2 facebook 2', 'Unpublished', 'apk/A3994.zip', '8'),
('A6287', 'Obama Last Name', 'game x', 90000, '150521', '8M', 'image/app/gaming2.jpg', 'Sexual Innuendo', 'game x game x game x game x game x', 'Pending', 'apk/A6287.zip', '8');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topup`
--

CREATE TABLE `topup` (
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `serial` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `topup`
--

INSERT INTO `topup` (`email`, `serial`) VALUES
('testlogin2@gmail.com', 'EJNGHY797H9XIO7'),
('testlogin2@gmail.com', '5JYOTPSCZU2VAYG'),
('testlogin2@gmail.com', 'RZTZKLPSB3GDN7I'),
('testlogin2@gmail.com', 'NEANN3Y76RQAXO1'),
('tkph@gmail.com', 'HDGKLZ61GBDGKEU');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bought_app`
--
ALTER TABLE `bought_app`
  ADD PRIMARY KEY (`user_id`,`app_id`);

--
-- Chỉ mục cho bảng `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `serial` (`serial`);

--
-- Chỉ mục cho bảng `comment_rating`
--
ALTER TABLE `comment_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_rating_ibfk_4` (`user_id`),
  ADD KEY `comment_rating_ibfk_5` (`application_id`);

--
-- Chỉ mục cho bảng `downloaded_app`
--
ALTER TABLE `downloaded_app`
  ADD PRIMARY KEY (`user_id`,`app_id`);

--
-- Chỉ mục cho bảng `pending_application`
--
ALTER TABLE `pending_application`
  ADD PRIMARY KEY (`app_id`);

--
-- Chỉ mục cho bảng `topup`
--
ALTER TABLE `topup`
  ADD KEY `email` (`email`),
  ADD KEY `serial` (`serial`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `card`
--
ALTER TABLE `card`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `comment_rating`
--
ALTER TABLE `comment_rating`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment_rating`
--
ALTER TABLE `comment_rating`
  ADD CONSTRAINT `comment_rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `comment_rating_ibfk_2` FOREIGN KEY (`application_id`) REFERENCES `application` (`id`),
  ADD CONSTRAINT `comment_rating_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `comment_rating_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `comment_rating_ibfk_5` FOREIGN KEY (`application_id`) REFERENCES `application` (`id`);

--
-- Các ràng buộc cho bảng `topup`
--
ALTER TABLE `topup`
  ADD CONSTRAINT `topup_ibfk_1` FOREIGN KEY (`email`) REFERENCES `account` (`email`),
  ADD CONSTRAINT `topup_ibfk_2` FOREIGN KEY (`serial`) REFERENCES `card` (`serial`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
