-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 10, 2021 lúc 05:49 PM
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
  `firstname` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `admin` varchar(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `activated` bit(1) DEFAULT b'0',
  `activate_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`firstname`, `lastname`, `email`, `password`, `phone`, `admin`, `activated`, `activate_token`) VALUES
('Lê', 'Nguyễn Minh Tuấn', 'lnmtuan1702@gmail.com', '$2y$10$UA6d8dqFhh5T1WWWNZGeDetmVrMw8rGwndxxQijdKfBdte8z4l9wm', '0901995401', '0', b'1', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `aplication`
--

CREATE TABLE `aplication` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) DEFAULT NULL,
  `stars` float DEFAULT NULL,
  `updated` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `install` int(11) DEFAULT NULL,
  `developer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `aplication`
--

INSERT INTO `aplication` (`id`, `name`, `price`, `stars`, `updated`, `size`, `install`, `developer`, `image`, `content`, `description`) VALUES
('A0', 'Ta Là Quan Lão Gia - 100D', 0, 4.4, '1616626800', '27M', 1000000, '100 Game', 'image/app/A0.jpg', 'Rated for 12+\nModerate Violence, Sexual Innuendo', ''),
('A1', 'MU: Vượt Thời Đại - Funtap', 0, 4, '1616968800', '98M', 1000000, 'Ambrine Studio', 'image/app/A1.jpg', 'Rated for 12+\nModerate Violence, Horror', ''),
('A10', 'Evony: The King\'s Return', 0, 4.3, '1618178400', '74M', 10000000, 'TG Inc.', 'image/app/A10.jpg', 'Rated for 12+\nModerate Violence', ''),
('A100', 'Eudemon League', 0, 4.3, '1616540400', '47M', 100000, 'JamesSam', 'image/app/A100.jpg', 'Rated for 12+\nModerate Violence', ''),
('A101', 'Idle Angels', 0, 4.5, '1618437600', '73M', 500000, 'MUJOY PTE. LTD.', 'image/app/A101.jpg', 'Rated for 16+\nNudity', ''),
('A102', 'Infinite Galaxy', 0, 4.2, '1618351200', '49M', 1000000, 'Camel Games Limited', 'image/app/A102.jpg', 'Rated for 7+\nMild Violence', ''),
('A103', 'Gọi Rồng Online-Vũ Trụ Bi Rồng', 0, 4.1, '1617832800', '90M', 100000, 'Pantherap', 'image/app/A103.jpg', 'Rated for 12+\nHorror', ''),
('A104', 'War of Destiny', 0, 4.1, '1617832800', '47M', 500000, 'Camel Games Limited', 'image/app/A104.jpg', 'Rated for 12+\nModerate Violence', ''),
('A105', 'Piggy Boom-Be the island king', 0, 4.5, '1618524000', '97M', 10000000, 'Aladin Fun', 'image/app/A105.jpg', 'Rated for 3+', ''),
('A106', 'Thần Vương Nhất Thế - Game Cày Thế Hệ Mới', 0, 4.5, '1615935600', '51M', 100000, 'NPH VTC Mobile', 'image/app/A106.jpg', 'Rated for 7+\nMild Violence', ''),
('A107', 'Brave Dungeon: Immortal Legend', 0, 4.5, '1611702000', '44M', 1000000, 'UnlockGame', 'image/app/A107.jpg', 'Rated for 12+\nMild Swearing', ''),
('A108', 'KING`s RAID', 0, 4.4, '1617746400', '104M', 5000000, 'Vespa Inc.', 'image/app/A108.jpg', 'Rated for 12+\nModerate Violence, Sexual Innuendo', ''),
('A109', 'Võ Lâm Truyền Kỳ Mobile - VNG', 0, 3.7, '1616454000', '93M', 1000000, 'VNG Game Publishing', 'image/app/A109.jpg', 'Rated for 3+', ''),
('A11', 'Yong Heroes', 0, 4.3, '1616454000', '100M', 1000000, '4399en game', 'image/app/A11.jpg', 'Rated for 12+\nModerate Violence', ''),
('A110', 'Cookie Run: Kingdom - Kingdom Builder & Battle RPG', 0, 4.3, '1618524000', '95M', 1000000, 'Devsisters Corporation', 'image/app/A110.jpg', 'Rated for 7+\nMild Violence', ''),
('A111', 'FIFA Online 4 M by EA SPORTS™', 0, 3.9, '1617919200', '67M', 1000000, 'Garena Mobile Private', 'image/app/A111.jpg', 'Rated for 3+', ''),
('A112', 'Texas Hold\'em & Omaha Poker: Pokerist', 0, 4, '1617314400', '139M', 10000000, 'KamaGames', 'image/app/A112.jpg', 'Rated for 18+\nGambling', ''),
('A113', 'Tam Quốc Chí Đại Chiến', 0, 3.4, '1615158000', '57M', 10000, 'Flipped Games', 'image/app/A113.jpg', 'Rated for 3+', ''),
('A114', 'Call Me Emperor - Alternate World', 0, 4.1, '1614121200', '53M', 1000000, 'Clicktouch Co., Ltd.', 'image/app/A114.jpg', 'Rated for 12+\nModerate Violence, Mild Swearing', ''),
('A115', 'Langrisser SEA', 0, 4.6, '1617228000', '86M', 100000, 'ZlongGames', 'image/app/A115.jpg', 'Rated for 12+\nModerate Violence, Mild Swearing', ''),
('A116', 'GunPow - Bắn Gà Teen PK', 0, 4.2, '1616626800', '95M', 1000000, 'CÔNG TY CỔ PHẦN VNG', 'image/app/A116.jpg', 'Rated for 3+', ''),
('A117', 'Đại Hải Trình', 0, 4.9, '1615417200', '42M', 100000, 'Thien Ha Online', 'image/app/A117.jpg', 'Rated for 7+\nMild Violence', ''),
('A118', 'Dragon City', 0, 4.6, '1617832800', '130M', 100000000, 'Socialpoint', 'image/app/A118.jpg', 'Rated for 7+\nMild Violence', ''),
('A119', 'Epic Seven', 0, 4.2, '1614121200', '58M', 5000000, 'Smilegate Megaport', 'image/app/A119.jpg', 'Rated for 12+\nModerate Violence, Nudity', ''),
('A12', 'PUBG MOBILE VN – GRAFFITI PRANK', 0, 4.2, '1615158000', '69M', 10000000, 'VNG Game Publishing', 'image/app/A12.jpg', 'Rated for 12+\nModerate Violence', ''),
('A120', 'Clash of Kings : Newly Presented Knight System', 0, 4.1, '1618351200', '143M', 50000000, 'Elex Wireless', 'image/app/A120.jpg', 'Rated for 12+\nModerate Violence', ''),
('A121', 'Klondike Adventures', 0, 4.5, '1617228000', '69M', 10000000, 'VIZOR APPS LTD.', 'image/app/A121.jpg', 'Rated for 7+\nMild Violence', ''),
('A122', 'Jackpot World™ - Free Vegas Casino Slots', 0, 4.5, '1615330800', '101M', 5000000, 'SpinX Games Limited', 'image/app/A122.jpg', 'Rated for 18+\nSimulated Gambling', ''),
('A123', 'Monsters & Puzzles: Battle of God, New Match 3 RPG', 0, 4.5, '1617228000', '155M', 100000, 'INDIEZ GLOBAL PTE. LTD.', 'image/app/A123.jpg', 'Rated for 7+\nMild Violence', ''),
('A124', '바람의전쟁: 뇌명천하', 0, 4, '1600812000', '101M', 100000, '4399 KOREA', 'image/app/A124.jpg', 'Rated for 7+\nMild Violence', ''),
('A125', 'Gold Storm Casino - Asian Fishing Arcade Carnival', 0, 4.2, '1610406000', '70M', 500000, 'XieXing Studio', 'image/app/A125.jpg', 'Rated for 12+\nSimulated Gambling', ''),
('A126', 'Sòng Bạc May Mắn - Nổ hũ，Bắn cá，Tố bài', 0, 4.5, '1611702000', '22M', 100000, 'nanshan', 'image/app/A126.jpg', 'Rated for 12+\nSimulated Gambling', ''),
('A127', 'Trials of Heroes: Idle RPG', 0, 4.4, '1617314400', '100M', 1000000, 'Jupiter Entertainment', 'image/app/A127.jpg', 'Rated for 12+\nModerate Violence', ''),
('A128', 'Đại Hiệp Luyện Công Nào H5', 0, 3.3, '1617832800', '96M', 10000, 'Mcorp Investment & Technology Joint Stock Company', 'image/app/A128.jpg', 'Rated for 16+\nStrong Violence', ''),
('A129', 'Archero', 0, 4.4, '1618351200', '79M', 50000000, 'Habby', 'image/app/A129.jpg', 'Rated for 7+\nMild Violence', ''),
('A13', 'Garena Free Fire MAX', 0, 4.6, '1617919200', '69M', 5000000, 'GARENA INTERNATIONAL I PRIVATE LIMITED', 'image/app/A13.jpg', 'Rated for 12+\nModerate Violence', ''),
('A130', 'Jade Sword', 0, 4.3, '1606172400', '99M', 100000, '4399en game', 'image/app/A130.jpg', 'Rated for 12+\nHorror', ''),
('A131', 'Long Vũ 3D - Long Vu 3D', 0, 4.4, '1617746400', '90M', 10000, 'Funtap.vn', 'image/app/A131.jpg', 'Rated for 7+\nMild Violence', ''),
('A132', 'X-HERO: Idle Avengers', 0, 4.5, '1618351200', '65M', 1000000, 'Glaciers Game', 'image/app/A132.jpg', 'Rated for 12+\nModerate Violence', ''),
('A133', 'Dragon Mania Legends', 0, 4.4, '1617141600', '119M', 50000000, 'Gameloft SE', 'image/app/A133.jpg', 'Rated for 3+', ''),
('A134', 'Hero Clash :pocket war', 0, 4.6, '1618524000', '100M', 100000, 'Mega fun Games', 'image/app/A134.jpg', 'Rated for 7+\nMild Violence', ''),
('A135', 'Shadow Fight 3 - RPG fighting game', 0, 4.3, '1616626800', '115M', 100000000, 'Nekki - Action and Fighting Games', 'image/app/A135.jpg', 'Rated for 12+\nModerate Violence', ''),
('A136', 'Taptap Heroes:Void Cage', 0, 4.6, '1616540400', '99M', 5000000, 'Ajoy Lab Games', 'image/app/A136.jpg', 'Rated for 12+\nHorror', ''),
('A137', 'Space shooter - Galaxy attack - Galaxy shooter', 0, 4.6, '1618610400', '104M', 50000000, 'OneSoft Global PTE. LTD.', 'image/app/A137.jpg', 'Rated for 7+\nMild Violence', ''),
('A138', 'World Series of Poker WSOP Free Texas Holdem Poker', 0, 4.3, '1617660000', '114M', 50000000, 'Playtika', 'image/app/A138.jpg', 'Rated for 18+\nSimulated Gambling', ''),
('A139', 'Sky: Children of the Light', 0, 4.5, '1618264800', '1.0G', 10000000, 'thatgamecompany inc', 'image/app/A139.jpg', 'Rated for 7+\nMild Violence, Fear', ''),
('A14', 'Luyện Yêu Ký', 0, 4.9, '1616968800', '93M', 50000, 'TTH Games', 'image/app/A14.jpg', 'Rated for 12+\nModerate Violence', ''),
('A140', 'Crypto Cards - Collect and Earn', 0, 4.5, '1618524000', '47M', 100000, 'Phoneum', 'image/app/A140.jpg', 'Rated for 3+', ''),
('A141', 'Minecraft', 0, 4.5, '1616968800', '69M', 0, 'Flag as inappropriate', 'image/app/A141.jpg', 'Varies with device', ''),
('A142', 'Battle Night: Cyberpunk-Idle RPG', 0, 4.4, '1618524000', '216M', 1000000, 'FT Games', 'image/app/A142.jpg', 'Rated for 12+\nModerate Violence', ''),
('A143', '星城Online', 0, 4.3, '1618351200', '59M', 1000000, '網銀國際 股份有限 公司', 'image/app/A143.jpg', 'Rated for 12+\nSimulated Gambling', ''),
('A144', 'FFBE WAR OF THE VISIONS', 0, 3.9, '1615417200', '110M', 1000000, 'SQUARE ENIX Co.,Ltd.', 'image/app/A144.jpg', 'Rated for 12+\nMild Swearing', ''),
('A145', 'Đảo Kho Báu - Arena Island', 0, 3.9, '1615244400', '50M', 100000, 'Long Nhat', 'image/app/A145.jpg', 'Rated for 7+\nMild Violence', ''),
('A146', 'Blockman Go', 0, 4.4, '1618437600', '122M', 50000000, 'Blockman GO Studio', 'image/app/A146.jpg', 'Rated for 7+\nMild Violence', ''),
('A147', 'Dungeon & Heroes: 3D RPG', 0, 4.2, '1589925600', '69M', 1000000, 'DroidHen', 'image/app/A147.jpg', 'Rated for 12+\nModerate Violence', ''),
('A148', 'Rush Royale - Tower Defense game PvP', 0, 4.6, '1617919200', '70M', 1000000, 'My.com B.V.', 'image/app/A148.jpg', 'Rated for 3+', ''),
('A149', 'DDTank Mobile', 0, 3.8, '1593381600', '82M', 1000000, '7road International HK Limited', 'image/app/A149.jpg', 'Rated for 12+\nModerate Violence', ''),
('A15', 'MU Đại Thiên Sứ H5', 0, 3.7, '1594504800', '22M', 5000000, 'ASM MOBILE GAME COMPANY', 'image/app/A15.jpg', 'Rated for 16+\nStrong Violence', ''),
('A150', 'Art of War 3: PvP RTS modern warfare strategy game', 0, 4.5, '1618437600', '137M', 10000000, 'Gear Games', 'image/app/A150.jpg', 'Rated for 12+\nModerate Violence', ''),
('A151', 'Tân Thiên Long Mobile', 0, 3.4, '1604962800', '89M', 500000, 'VNG Game Publishing', 'image/app/A151.jpg', 'Rated for 12+\nModerate Violence', ''),
('A152', 'MORTAL KOMBAT: The Ultimate Fighting Game!', 0, 4.2, '1616968800', '69M', 50000000, 'Warner Bros. International Enterprises', 'image/app/A152.jpg', 'Rated for 18+\nExtreme Violence', ''),
('A153', 'Mini World: Block Art', 0, 4.3, '1616022000', '95M', 50000000, 'SuperNice Digital Marketing Co., Ltd.', 'image/app/A153.jpg', 'Rated for 7+\nImplied Violence', ''),
('A154', 'NagaVip', 0, 4.6, '1611442800', '120M', 50000, 'Cesoyo Studio', 'image/app/A154.jpg', 'Rated for 12+\nSimulated Gambling', ''),
('A155', 'OMG 3Q – Đấu tướng chiến thuật cực mạnh', 0, 4.3, '1612134000', '84M', 1000000, 'VNG Game Publishing', 'image/app/A155.jpg', 'Rated for 12+\nModerate Violence', ''),
('A156', 'MythWars & Puzzles: RPG Match 3', 0, 4.3, '1617228000', '174M', 5000000, 'KARMA GAME', 'image/app/A156.jpg', 'Rated for 7+\nMild Violence', ''),
('A157', 'Township', 0, 4.2, '1615590000', '147M', 100000000, 'Playrix', 'image/app/A157.jpg', 'Rated for 3+', ''),
('A158', 'Fishdom', 0, 4.4, '1616540400', '136M', 100000000, 'Playrix', 'image/app/A158.jpg', 'Rated for 3+', ''),
('A159', 'Tank Hero - Awesome tank war games', 0, 4.5, '1618437600', '63M', 1000000, 'Betta Games', 'image/app/A159.jpg', 'Rated for 3+', ''),
('A16', 'Rise of the Kings', 0, 4.1, '1617055200', '94M', 10000000, 'ONEMT', 'image/app/A16.jpg', 'Rated for 12+\nModerate Violence', ''),
('A160', 'Fishing Clash', 0, 4.7, '1617832800', '106M', 50000000, 'Ten Square Games', 'image/app/A160.jpg', 'Rated for 3+', ''),
('A161', 'Family Island™ - Farm game adventure', 0, 4.3, '1618178400', '83M', 10000000, 'Melsoft Games Ltd', 'image/app/A161.jpg', 'Rated for 3+', ''),
('A162', 'Giang Sơn Của Trẫm', 0, 4, '1618178400', '89M', 10000, 'Jedi Việt Nam', 'image/app/A162.jpg', 'Rated for 3+', ''),
('A163', 'KOF AllStar -Quyền Vương Chiến', 0, 3.5, '1605049200', '28M', 500000, 'VNG Game Publishing', 'image/app/A163.jpg', 'Rated for 12+\nModerate Violence', ''),
('A164', 'Pocket Knights 2', 0, 4.4, '1617919200', '71M', 1000000, 'Enjoy mobile game limited', 'image/app/A164.jpg', 'Rated for 12+\nModerate Violence', ''),
('A165', 'MARVEL Strike Force - Squad RPG', 0, 3.8, '1616108400', '132M', 10000000, 'Scopely', 'image/app/A165.jpg', 'Rated for 12+\nModerate Violence', ''),
('A166', 'Modern Strike Online: Free PvP FPS shooting game', 0, 4.4, '1614207600', '69M', 50000000, 'Azur Interactive Games Limited', 'image/app/A166.jpg', 'Rated for 16+\nStrong Violence', ''),
('A167', 'Island King', 0, 4.6, '1617055200', '106M', 5000000, 'Forever9 Games', 'image/app/A167.jpg', 'Rated for 3+', ''),
('A168', 'Poker VN - Mậu Binh – Binh Xập Xám - ZingPlay', 0, 4.6, '1612134000', '58M', 5000000, 'VNG ZingPlay Game Studios', 'image/app/A168.jpg', 'Rated for 12+\nGambling', ''),
('A169', 'Fate/Grand Order (English)', 0, 4.5, '1617141600', '71M', 1000000, 'Aniplex Inc.', 'image/app/A169.jpg', 'Rated for 12+\nModerate Violence, Sexual Innuendo', ''),
('A17', 'Top War: Battle Game', 0, 4.2, '1618437600', '149M', 10000000, 'Topwar Studio', 'image/app/A17.jpg', 'Rated for 7+\nMild Violence', ''),
('A170', 'Asphalt 9: Legends - Epic Car Action Racing Game', 0, 4.5, '1618524000', '96M', 50000000, 'Gameloft SE', 'image/app/A170.jpg', 'Rated for 7+\nMild Violence, Implied Violence', ''),
('A171', 'Solitaire Grand Harvest - Free Solitaire Tripeaks', 0, 4.6, '1618264800', '159M', 10000000, 'Supertreat - A Playtika Studio', 'image/app/A171.jpg', 'Rated for 3+', ''),
('A172', 'Battleship & Puzzles: Warship Empire Match', 0, 4.2, '1615330800', '138M', 10000, 'Skymoons Technology, Inc', 'image/app/A172.jpg', 'Rated for 3+', ''),
('A173', 'LifeAfter', 0, 4.1, '1615330800', '75M', 10000000, 'NetEase Games', 'image/app/A173.jpg', 'Rated for 12+\nModerate Violence, Horror', ''),
('A174', 'Lightning Link Casino: Best Vegas Casino Slots!', 0, 4.2, '1618351200', '158M', 5000000, 'Product Madness', 'image/app/A174.jpg', 'Rated for 18+\nGambling', ''),
('A175', 'Date A Live: Spirit Pledge - Global', 0, 4.4, '1614726000', '92M', 500000, 'Moonwalk Interactive Hong Kong Limited', 'image/app/A175.jpg', 'Rated for 12+\nModerate Violence, Nudity, Sexual Innuendo', ''),
('A18', 'Soul Land: Đấu La Đại Lục-Funtap', 0, 4.1, '1607295600', '67M', 1000000, 'Glitter star Studio', 'image/app/A18.jpg', 'Rated for 12+\nModerate Violence', ''),
('A19', 'Thế Chiến Z', 0, 3.4, '1617832800', '52M', 100000, 'Camel Games Limited', 'image/app/A19.jpg', 'Rated for 12+\nHorror', ''),
('A2', 'Rise of Kingdoms: Lost Crusade', 0, 4.2, '1618178400', '104M', 10000000, 'LilithGames', 'image/app/A2.jpg', 'Rated for 18+\nSimulated Gambling', ''),
('A20', 'Roblox', 0, 4.5, '1618524000', '97M', 100000000, 'Roblox Corporation', 'image/app/A20.jpg', 'Rated for 7+\nMild Violence, Fear', ''),
('A21', 'Chiến Thần Kỷ Nguyên - Dragon Impact', 0, 3.8, '1614553200', '98M', 100000, 'NPH VTC Mobile', 'image/app/A21.jpg', 'Rated for 7+\nMild Violence', ''),
('A22', 'Crasher: Origin', 0, 4.2, '1618005600', '100M', 1000000, '4399en game', 'image/app/A22.jpg', 'Rated for 12+\nModerate Violence', ''),
('A23', 'Mobile Legends: Adventure', 0, 4.6, '1618178400', '94M', 10000000, 'Moonton', 'image/app/A23.jpg', 'Rated for 12+\nModerate Violence', ''),
('A24', 'State of Survival:The Walking Dead - Funtap', 0, 4.6, '1618178400', '138M', 500000, 'KingsGroup Holdings', 'image/app/A24.jpg', 'Rated for 7+\nMild Violence', ''),
('A25', 'LMHT: Tốc Chiến', 0, 3.6, '1616886000', '69M', 1000000, 'CÔNG TY CỔ PHẦN VNG', 'image/app/A25.jpg', 'Rated for 12+\nModerate Violence, Sexual Innuendo', ''),
('A26', 'Goddess MUA', 0, 4.4, '1599170400', '98M', 1000000, '4399en game', 'image/app/A26.jpg', 'Rated for 12+\nModerate Violence', ''),
('A27', 'Summoners War', 0, 4.3, '1617832800', '1.1G', 50000000, 'Com2uS', 'image/app/A27.jpg', 'Rated for 12+\nModerate Violence', ''),
('A28', 'Coin Master', 0, 4.3, '1618092000', '69M', 100000000, 'Moon Active', 'image/app/A28.jpg', 'Rated for 12+\nSimulated Gambling', ''),
('A29', 'Slots (Golden HoYeah) - Casino Slots', 0, 4.3, '1618524000', '143M', 10000000, 'International Games System Co., Ltd.', 'image/app/A29.jpg', 'Rated for 18+\nSimulated Gambling', ''),
('A3', 'Võ Lâm Truyền Kỳ 1 Mobile', 0, 2.7, '1617573600', '57M', 100000, 'CÔNG TY CỔ PHẦN VNG', 'image/app/A3.jpg', 'Rated for 12+\nModerate Violence', ''),
('A30', 'Empires & Puzzles: Epic Match 3', 0, 4.2, '1617055200', '110M', 50000000, 'Small Giant Games', 'image/app/A30.jpg', 'Rated for 7+\nMild Violence', ''),
('A31', 'FIFA Soccer', 0, 4.2, '1616367600', '90M', 100000000, 'ELECTRONIC ARTS', 'image/app/A31.jpg', 'Rated for 3+', ''),
('A32', 'THỢ SĂN CÁ', 0, 4.3, '1618351200', '149M', 1000000, 'TPC mobile', 'image/app/A32.jpg', 'Rated for 12+\nSimulated Gambling', ''),
('A33', 'Idle Goddess', 0, 4.6, '1618524000', '75M', 100000, 'FIFUN', 'image/app/A33.jpg', 'Rated for 7+\nMild Violence', ''),
('A34', 'AFK Arena', 0, 4.6, '1617660000', '95M', 10000000, 'LilithGames', 'image/app/A34.jpg', 'Rated for 7+\nMild Violence', ''),
('A35', 'Castle Clash: Quyết Chiến-Gamota', 0, 4.6, '1618524000', '562M', 1000000, 'IGG.COM', 'image/app/A35.jpg', 'Rated for 7+\nMild Violence', ''),
('A36', 'Epic War: Thrones', 0, 4.6, '1617055200', '74M', 100000, 'Archosaur Games', 'image/app/A36.jpg', 'Rated for 12+\nModerate Violence', ''),
('A37', 'Phong Vân Chí – Cày Nhiệm Vụ Free Vip 3', 0, 4.8, '1607641200', '90M', 100000, 'VTC Mobile Entertainment & Sport Center', 'image/app/A37.jpg', 'Rated for 3+', ''),
('A38', 'Thiếu Niên 3Q - VNG: Tam Quốc Chiến Thuật', 0, 4.2, '1604185200', '107M', 500000, 'MINH PHUONG THINH COMMUNICATION COMPANY LIMITED', 'image/app/A38.jpg', 'Rated for 12+\nModerate Violence', ''),
('A39', 'D-MEN：The Defenders', 0, 4.3, '1616022000', '100M', 1000000, 'ACE GAME INTERNATIONAL LIMITED', 'image/app/A39.jpg', 'Rated for 12+\nModerate Violence', ''),
('A4', 'Garena Free Fire- World Series', 0, 4.3, '1617919200', '69M', 500000000, 'GARENA INTERNATIONAL I PRIVATE LIMITED', 'image/app/A4.jpg', 'Rated for 12+\nModerate Violence', ''),
('A40', '8 Ball Pool', 0, 4.4, '1618264800', '66M', 500000000, 'Miniclip.com', 'image/app/A40.jpg', 'Rated for 12+\nSimulated Gambling', ''),
('A41', 'War and Order', 0, 4.2, '1618264800', '44M', 10000000, 'Camel Games Limited', 'image/app/A41.jpg', 'Rated for 12+\nModerate Violence', ''),
('A42', 'Tam Quốc Chí 2020', 0, 4.2, '1609196400', '74M', 500000, 'Hoang Thuy Linh', 'image/app/A42.jpg', 'Rated for 12+\nMild Swearing', ''),
('A43', 'Gardenscapes', 0, 4.4, '1618178400', '140M', 100000000, 'Playrix', 'image/app/A43.jpg', 'Rated for 3+', ''),
('A44', 'Rise of Empires: Ice and Fire', 0, 4.7, '1617832800', '69M', 10000000, 'Long Tech Network Limited', 'image/app/A44.jpg', 'Rated for 12+\nModerate Violence', ''),
('A45', 'Puzzles & Survival', 0, 4.2, '1618351200', '147M', 5000000, '37GAMES', 'image/app/A45.jpg', 'Rated for 12+\nModerate Violence', ''),
('A46', 'Immortal Legend: Idle RPG', 0, 4, '1617660000', '7.5M', 500000, 'UnlockGame', 'image/app/A46.jpg', 'Rated for 12+\nModerate Violence', ''),
('A47', 'Dragon King Fishing Online-Arcade Fish Games', 0, 4.4, '1616540400', '92M', 1000000, 'Yue Studio', 'image/app/A47.jpg', 'Rated for 3+', ''),
('A48', 'Ta Là Hoàng Thượng - VegaGame', 0, 4.3, '1615935600', '55M', 500000, 'Clicktouch Co., Ltd.', 'image/app/A48.jpg', 'Rated for 12+\nModerate Violence', ''),
('A49', 'Honkai Impact 3', 0, 4.3, '1614294000', '209M', 5000000, 'miHoYo Limited', 'image/app/A49.jpg', 'Rated for 12+\nSexual Innuendo', ''),
('A5', 'Lords Mobile - Gamota', 0, 4.4, '1616968800', '80M', 1000000, 'IGG.COM', 'image/app/A5.jpg', 'Rated for 7+\nMild Violence', ''),
('A50', 'Liên Minh Mạo Hiểm', 0, 3.5, '1615244400', '58M', 100000, 'PHOENIX ENTERTAINMENT SERVICE COMPANY LIMITED', 'image/app/A50.jpg', 'Rated for 12+\nModerate Violence', ''),
('A51', 'Candy Crush Saga', 0, 4.6, '1617919200', '69M', 1000000000, 'King', 'image/app/A51.jpg', 'Rated for 3+', ''),
('A52', 'Chiến Thần Tam Quốc-Tranh Bá', 0, 3.9, '1618437600', '69M', 500000, 'Heyshell HK Limited', 'image/app/A52.jpg', 'Rated for 7+\nMild Violence', ''),
('A53', 'Mobile Legends: Bang Bang VNG', 0, 4, '1618264800', '103M', 10000000, 'VNG Game Publishing', 'image/app/A53.jpg', 'Rated for 12+\nModerate Violence', ''),
('A54', 'Call Of Duty: Mobile VN', 0, 4.5, '1615244400', '86M', 1000000, 'VNG Game Publishing', 'image/app/A54.jpg', 'Rated for 16+\nStrong Violence', ''),
('A55', 'Cực Phẩm Đại Nhân - tthgame', 0, 3.9, '1606258800', '22M', 100000, 'TTH MOBI', 'image/app/A55.jpg', 'Rated for 16+\nNudity', ''),
('A56', 'Vĩnh Hằng Kỷ Nguyên-Kỵ Sĩ Rồng thức tỉnh', 0, 3.7, '1616367600', '81M', 1000000, 'ASM MOBILE GAME COMPANY', 'image/app/A56.jpg', 'Rated for 16+\nStrong Violence', ''),
('A57', 'FaFaFa™ Gold Casino: Free slot machines', 0, 3.8, '1610406000', '124M', 1000000, 'Product Madness', 'image/app/A57.jpg', 'Rated for 18+\nSimulated Gambling', ''),
('A58', 'The King\'s Army:Idle RPG', 0, 3.5, '1611183600', '132M', 100000, 'Merry Realm', 'image/app/A58.jpg', 'Rated for 7+\nMild Violence', ''),
('A59', 'Dragon raja-Long tộc huyễn tưởng', 0, 4.4, '1618437600', '66M', 500000, 'Archosaur Games', 'image/app/A59.jpg', 'Rated for 12+\nModerate Violence', ''),
('A6', 'Garena Liên Quân Mobile', 0, 4.1, '1615935600', '69M', 50000000, 'Garena Mobile Private', 'image/app/A6.jpg', 'Rated for 12+\nModerate Violence, Sexual Innuendo, Horror', ''),
('A60', 'ZingSpeed Mobile', 0, 4.2, '1612134000', '89M', 5000000, 'VNG Game Publishing', 'image/app/A60.jpg', 'Rated for 12+\nModerate Violence', ''),
('A61', 'Nghịch Thiên Kiếm Thế - Thế Thiên Hành Đạo', 0, 4.4, '1611270000', '69M', 100000, 'NPH VTC Mobile', 'image/app/A61.jpg', 'Rated for 7+\nMild Violence', ''),
('A62', 'War Robots. 6v6 Tactical Multiplayer Battles', 0, 4, '1618524000', '928M', 50000000, 'PIXONIC', 'image/app/A62.jpg', 'Rated for 12+\nMild Swearing', ''),
('A63', 'Days of Empire - Heroes Never Die!', 0, 4.1, '1618264800', '98M', 5000000, 'ONEMT', 'image/app/A63.jpg', 'Rated for 12+\nSexual Innuendo', ''),
('A64', 'Con Đường Tơ Lụa', 0, 2.9, '1615935600', '75M', 10000, '4GAMOTA', 'image/app/A64.jpg', 'Rated for 16+\nStrong Violence', ''),
('A65', 'Dream League Soccer 2021', 0, 4.4, '1617832800', '389M', 50000000, 'First Touch Games Ltd.', 'image/app/A65.jpg', 'Rated for 3+', ''),
('A66', 'Thợ Săn Ma 3D', 0, 4.6, '1617832800', '94M', 100000, '1618PLAY LLC', 'image/app/A66.jpg', 'Rated for 18+\nExtreme Violence', ''),
('A67', 'Danh Tướng 3Q', 0, 4.2, '1574895600', '79M', 1000000, 'VNG Game Publishing', 'image/app/A67.jpg', 'Rated for 12+\nModerate Violence', ''),
('A68', '封神異世錄', 0, 4.5, '1614639600', '91M', 50000, 'Trigirls Studio', 'image/app/A68.jpg', 'Rated for 12+\nModerate Violence, Mild Swearing', ''),
('A69', 'Laplace M - Vùng Đất Gió', 0, 4.3, '1612652400', '54M', 500000, 'ZlongGames', 'image/app/A69.jpg', 'Rated for 3+', ''),
('A7', 'Genshin Impact', 0, 4.5, '1616367600', '543M', 10000000, 'miHoYo Limited', 'image/app/A7.jpg', 'Rated for 12+\nModerate Violence', ''),
('A70', 'Homescapes', 0, 4.3, '1616367600', '148M', 100000000, 'Playrix', 'image/app/A70.jpg', 'Rated for 3+', ''),
('A71', 'Ace Defender: War of Dragon Slayer', 0, 4.6, '1618178400', '69M', 500000, 'ACE GAME INTERNATIONAL LIMITED', 'image/app/A71.jpg', 'Rated for 12+\nHorror', ''),
('A72', 'Dragon Age: Bóng Đêm Thức Tỉnh', 0, 4.8, '1612306800', '80M', 100000, 'TTH Games', 'image/app/A72.jpg', 'Rated for 12+\nModerate Violence', ''),
('A73', 'RAID: Shadow Legends', 0, 4.2, '1617832800', '150M', 10000000, 'Plarium Global Ltd', 'image/app/A73.jpg', 'Rated for 12+\nHorror', ''),
('A74', 'Tiên Kiếm Tiêu Dao', 0, 3.6, '1614898800', '98M', 50000, 'Dream Asia', 'image/app/A74.jpg', 'Rated for 12+\nModerate Violence, Sexual Innuendo', ''),
('A75', 'Three Kingdoms: Art of War', 0, 4.7, '1615849200', '97M', 100000, 'ZBJoy Games', 'image/app/A75.jpg', 'Rated for 7+\nImplied Violence', ''),
('A76', 'Top Eleven 2021: Be a Soccer Manager', 0, 4.6, '1617919200', '110M', 50000000, 'Nordeus', 'image/app/A76.jpg', 'Rated for 3+', ''),
('A77', 'Mighty Party: Magic Arena', 0, 3.8, '1617919200', '66M', 5000000, 'PANORAMIK GAMES LTD', 'image/app/A77.jpg', 'Rated for 12+\nModerate Violence, Sexual Innuendo', ''),
('A78', 'Ngôi Sao Thời Trang 360Mobi', 0, 4.1, '1571781600', '96M', 5000000, 'VNG Game Publishing', 'image/app/A78.jpg', 'Rated for 18+\nSex', ''),
('A79', 'ILLUSION CONNECT', 0, 4.6, '1618524000', '36M', 1000000, 'Superprism Technology Co., Ltd', 'image/app/A79.jpg', 'Rated for 12+\nSexual Innuendo', ''),
('A8', 'hoàng hậu cát tường', 0, 4.3, '1608505200', '94M', 1000000, 'Hoang Thuy Linh', 'image/app/A8.jpg', 'Rated for 3+', ''),
('A80', 'Pokémon GO', 0, 4.1, '1618437600', '69M', 100000000, 'Niantic, Inc.', 'image/app/A80.jpg', 'Rated for 7+\nMild Violence', ''),
('A81', 'Heroic Expedition', 0, 4, '1617746400', '75M', 50000, 'DHGAMES', 'image/app/A81.jpg', 'Rated for 7+\nMild Violence', ''),
('A82', 'Vương Bài Chiến Cơ', 0, 4.7, '1615849200', '100M', 100000, 'PhoneCool', 'image/app/A82.jpg', 'Rated for 3+', ''),
('A83', 'Idle Heroes', 0, 4.5, '1615417200', '391M', 10000000, 'DHGAMES', 'image/app/A83.jpg', 'Rated for 7+\nMild Violence', ''),
('A84', 'World of Tanks Blitz PVP MMO 3D tank game for free', 0, 4.2, '1618524000', '120M', 100000000, 'Wargaming Group', 'image/app/A84.jpg', 'Rated for 7+\nImplied Violence', ''),
('A85', 'Last Shelter: Survival', 0, 4.3, '1617832800', '69M', 10000000, 'Long Tech Network Limited', 'image/app/A85.jpg', 'Rated for 12+\nModerate Violence', ''),
('A86', 'Three Kingdoms:Heroes of Legend', 0, 3.9, '1614726000', '69M', 100000, 'KunYue Game', 'image/app/A86.jpg', 'Rated for 3+', ''),
('A87', 'NPLAY: Game Bài Online, Tiến Lên, Mậu Binh, Xì Tố', 0, 3.7, '1616968800', '101M', 1000000, 'NGame Company', 'image/app/A87.jpg', 'Rated for 12+\nGambling', ''),
('A88', 'Gunship Battle Total Warfare', 0, 4.2, '1617660000', '101M', 5000000, 'JOYCITY Corp.', 'image/app/A88.jpg', 'Rated for 12+\nModerate Violence', ''),
('A89', 'Captain Tsubasa (Flash Kicker): Dream Team', 0, 4.1, '1617573600', '92M', 5000000, 'KLab', 'image/app/A89.jpg', 'Rated for 3+', ''),
('A9', 'Warpath', 0, 4.4, '1616968800', '71M', 5000000, 'LilithGames', 'image/app/A9.jpg', 'Rated for 12+\nModerate Violence', ''),
('A90', 'Kỷ Nguyên Triệu Hồi', 0, 4.5, '1614898800', '113M', 100000, 'Sungame Vietnam', 'image/app/A90.jpg', 'Rated for 12+\nModerate Violence', ''),
('A91', 'KOF\'98 UM OL', 0, 4.1, '1615762800', '87M', 5000000, 'FingerFun Limited.', 'image/app/A91.jpg', 'Rated for 12+\nSexual Innuendo, Gambling', ''),
('A92', 'Gunny Mobi - Bắn Gà Teen & Cute', 0, 3.6, '1587765600', '92M', 10000000, 'VNG Game Publishing', 'image/app/A92.jpg', 'Rated for 7+\nMild Violence', ''),
('A93', 'Ngạo Thế Phi Tiên', 0, 4.5, '1618524000', '76M', 100000, 'MOC GAME', 'image/app/A93.jpg', 'Rated for 12+\nModerate Violence', ''),
('A94', 'Art of War: Legions', 0, 4.5, '1617746400', '140M', 10000000, 'Fastone Games HK', 'image/app/A94.jpg', 'Rated for 3+', ''),
('A95', 'EverMerge', 0, 4.4, '1617746400', '120M', 5000000, 'Big Fish Games', 'image/app/A95.jpg', 'Rated for 3+', ''),
('A96', '삼국지Global', 0, 4.3, '1617660000', '89M', 100000, '4399 KOREA', 'image/app/A96.jpg', 'Rated for 12+\nModerate Violence', ''),
('A97', 'Might & Magic: Era of Chaos', 0, 4.2, '1618264800', '51M', 1000000, 'Ubisoft Mobile Games', 'image/app/A97.jpg', 'Rated for 12+\nModerate Violence', ''),
('A98', 'World War Heroes: WW2 FPS', 0, 4.5, '1618264800', '69M', 50000000, 'Azur Interactive Games Limited', 'image/app/A98.jpg', 'Rated for 16+\nStrong Violence', ''),
('A99', 'Art of Conquest: Dark Horizon', 0, 3.9, '1618264800', '67M', 10000000, 'LilithGames', 'image/app/A99.jpg', 'Rated for 7+\nMild Violence', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pending_application`
--

CREATE TABLE `pending_application` (
  `app_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `developer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL,
  `size` int(11) NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `aplication`
--
ALTER TABLE `aplication`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pending_application`
--
ALTER TABLE `pending_application`
  ADD PRIMARY KEY (`app_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
