-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 18, 2021 lúc 07:39 AM
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
  `content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `aplication`
--

INSERT INTO `aplication` (`id`, `name`, `price`, `stars`, `updated`, `size`, `install`, `developer`, `image`, `content`) VALUES
('A0', 'Ta Là Quan Lão Gia - 100D', 0, 4.4, 'March 25, 2021', '27M', 1000000, '100 Game', 'https://play-lh.googleusercontent.com/suYkpSmmX5fOfmmmDyUPKv2QcpZnR8xFqpn-kFlKtel9tMfGiWB3Fdu2kaM1EmBhYQ=s180-rw', 'Rated for 12+\nModerate Violence, Sexual Innuendo'),
('A1', 'MU: Vượt Thời Đại - Funtap', 0, 4, 'March 29, 2021', '98M', 1000000, 'Ambrine Studio', 'https://play-lh.googleusercontent.com/gltIihCovMOJ9SyNxK_SUPghS4VuCJRHv1T5TKQpx7_dKbFg-OJYVS73VhqgH5UTiQ=s180-rw', 'Rated for 12+\nModerate Violence, Horror'),
('A10', 'Evony: The King\'s Return', 0, 4.3, 'April 12, 2021', '74M', 10000000, 'TG Inc.', 'https://play-lh.googleusercontent.com/COHcAX5Uot8S2DgticjUQPxZGZV7-lyO0_hds7Dm7K4TWipKUbSbW144PafEDaVjZw=s180-rw', 'Rated for 12+\nModerate Violence'),
('A100', 'Eudemon League', 0, 4.3, 'March 24, 2021', '47M', 100000, 'JamesSam', 'https://play-lh.googleusercontent.com/VUax-KlDB_FsUxWKksiGKHj1VmF6Jl5pPomdpvMpW9aA9W5wdB1Q--7AyoqOQND7Gag=s180-rw', 'Rated for 12+\nModerate Violence'),
('A101', 'Idle Angels', 0, 4.5, 'April 15, 2021', '73M', 500000, 'MUJOY PTE. LTD.', 'https://play-lh.googleusercontent.com/4l59GCavtaPavbQExL2YbZyO806vAU2Wa1unpiFT0gHGcw6xXlYcvvD8qB_AmZvDx4p4=s180-rw', 'Rated for 16+\nNudity'),
('A102', 'Infinite Galaxy', 0, 4.2, 'April 14, 2021', '49M', 1000000, 'Camel Games Limited', 'https://play-lh.googleusercontent.com/50w9OC-HgK4NtlV9YYrDDTfkqY5ksfIawMB8og_EEXtoGgzl9I3jFqiKLsycmPUV1Us=s180-rw', 'Rated for 7+\nMild Violence'),
('A103', 'Gọi Rồng Online-Vũ Trụ Bi Rồng', 0, 4.1, 'April 8, 2021', '90M', 100000, 'Pantherap', 'https://play-lh.googleusercontent.com/C7EuxaCxynNbffjx0JSnVxCWe45R8EaPjPjiDXChfwf-DSLqPUYalUOweYgnU4CXX3Io=s180-rw', 'Rated for 12+\nHorror'),
('A104', 'War of Destiny', 0, 4.1, 'April 8, 2021', '47M', 500000, 'Camel Games Limited', 'https://play-lh.googleusercontent.com/2DIAZoenLR_zxhOJoPs8jdAFS8Sd4uobQ4pryTWCbnRCDSbU1iIGULCybs66DnHJVQ=s180-rw', 'Rated for 12+\nModerate Violence'),
('A105', 'Piggy Boom-Be the island king', 0, 4.5, 'April 16, 2021', '97M', 10000000, 'Aladin Fun', 'https://play-lh.googleusercontent.com/x8jxobdBsx2vJkcDvRZDK3v3x2c6XBI4Emp7hWK0AVQw31q8rSEqdRE6ufEi-5UgGA=s180-rw', 'Rated for 3+'),
('A106', 'Thần Vương Nhất Thế - Game Cày Thế Hệ Mới', 0, 4.5, 'March 17, 2021', '51M', 100000, 'NPH VTC Mobile', 'https://play-lh.googleusercontent.com/nHeTIRcSpVGvPARqWlDokvCGrqYOJzxpcFMiEnlO5a6Qy2aWQ1D9rkNB2aouwM4CVpw=s180-rw', 'Rated for 7+\nMild Violence'),
('A107', 'Brave Dungeon: Immortal Legend', 0, 4.5, 'January 27, 2021', '44M', 1000000, 'UnlockGame', 'https://play-lh.googleusercontent.com/E2EI00JVYSA5tY8WtSEDjJtIY9hRHdinrDIm6NHv0Ikz3GADNJrkKldVAt5QlrhF6oQ=s180-rw', 'Rated for 12+\nMild Swearing'),
('A108', 'KING`s RAID', 0, 4.4, 'April 7, 2021', '104M', 5000000, 'Vespa Inc.', 'https://play-lh.googleusercontent.com/lREqVdgfprl--p21Cj3nJcCvpVOGFfskiECC_kmGRMho71Jzrt40Y3-CY1JaJR2rRQ0u=s180-rw', 'Rated for 12+\nModerate Violence, Sexual Innuendo'),
('A109', 'Võ Lâm Truyền Kỳ Mobile - VNG', 0, 3.7, 'March 23, 2021', '93M', 1000000, 'VNG Game Publishing', 'https://play-lh.googleusercontent.com/eCmLFptuvPUSQHv2uVTtYbjU9nsGD39VaGzQ5MOJf2ylCIEuo44nJ-iwy7FJwKG57XY=s180-rw', 'Rated for 3+'),
('A11', 'Yong Heroes', 0, 4.3, 'March 23, 2021', '100M', 1000000, '4399en game', 'https://play-lh.googleusercontent.com/D8ZXC6yt_-uNiIHjd11YX7Zb7ONFKbesw0gMSkbKq37lHg41p_uDQ-aQjuC-hVmKdg=s180-rw', 'Rated for 12+\nModerate Violence'),
('A110', 'Cookie Run: Kingdom - Kingdom Builder & Battle RPG', 0, 4.3, 'April 16, 2021', '95M', 1000000, 'Devsisters Corporation', 'https://play-lh.googleusercontent.com/Ko4s5TSsEtTUR5iKL3oM53WNz61Or0xuAIcwNgIR6zwU_n2lvV_nJSjRHTpUe8iVbg=s180-rw', 'Rated for 7+\nMild Violence'),
('A111', 'FIFA Online 4 M by EA SPORTS™', 0, 3.9, 'April 9, 2021', '67M', 1000000, 'Garena Mobile Private', 'https://play-lh.googleusercontent.com/QoumPulZiAI1xO4ngYvXzr0ZpuHYvqYF7bIl8vh-yS9K0fAgTujH6Dbh6w4cLMl4Gu8=s180-rw', 'Rated for 3+'),
('A112', 'Texas Hold\'em & Omaha Poker: Pokerist', 0, 4, 'April 2, 2021', '139M', 10000000, 'KamaGames', 'https://play-lh.googleusercontent.com/gGaKhTJ2zyxRmbpbH0oPs6RbFwwwt9geFeE6JhmVELoWyVLg3qHFOHr7aUQtYJdzzQ=s180-rw', 'Rated for 18+\nGambling'),
('A113', 'Tam Quốc Chí Đại Chiến', 0, 3.4, 'March 8, 2021', '57M', 10000, 'Flipped Games', 'https://play-lh.googleusercontent.com/CAHPphEddQ3yAZqzNl9PYWxdQgB1YBLWWEsL6tv5_NQ3x6giSF2jdiR2n0rXxxMmgAY=s180-rw', 'Rated for 3+'),
('A114', 'Call Me Emperor - Alternate World', 0, 4.1, 'February 24, 2021', '53M', 1000000, 'Clicktouch Co., Ltd.', 'https://play-lh.googleusercontent.com/QsKXdm3j1_yZA4NpEjDHP1h-TP70v8HURqSFoI2zkbZm9TnfTpQmAsrm959I3GeFfo0=s180-rw', 'Rated for 12+\nModerate Violence, Mild Swearing'),
('A115', 'Langrisser SEA', 0, 4.6, 'April 1, 2021', '86M', 100000, 'ZlongGames', 'https://play-lh.googleusercontent.com/ZoKQPsp2FH_cHeddwo9QcOTn8MRrThe2xdlCQH8RC0AWE4-npdIuOy3qGUHRYE_zsg=s180-rw', 'Rated for 12+\nModerate Violence, Mild Swearing'),
('A116', 'GunPow - Bắn Gà Teen PK', 0, 4.2, 'March 25, 2021', '95M', 1000000, 'CÔNG TY CỔ PHẦN VNG', 'https://play-lh.googleusercontent.com/FYT9yFZkvVGDLJebfybeUlABBfxpA67qzzmu6gYENPY2KTlDs5yo3-ViUg5WD-YGdXJf=s180-rw', 'Rated for 3+'),
('A117', 'Đại Hải Trình', 0, 4.9, 'March 11, 2021', '42M', 100000, 'Thien Ha Online', 'https://play-lh.googleusercontent.com/-srzcuf6C02Odtxy0agY9xgO5CSZA8dOkwkiPJYWlVw54d5InGpGuGN1c0MTOliaKl4=s180-rw', 'Rated for 7+\nMild Violence'),
('A118', 'Dragon City', 0, 4.6, 'April 8, 2021', '130M', 100000000, 'Socialpoint', 'https://play-lh.googleusercontent.com/5dcSXVtOdnk-IeQGpx9rM3prbOtNF_RekrXcF67ORPNagY0Adl8rRe3dbqtOVSDVY6I=s180-rw', 'Rated for 7+\nMild Violence'),
('A119', 'Epic Seven', 0, 4.2, 'February 24, 2021', '58M', 5000000, 'Smilegate Megaport', 'https://play-lh.googleusercontent.com/qh_Kgftlf9UKgja5X9sB0HA_bfAQTjMjgkj3CBMaeqtIbX9e-Wve8NX5nmAu4wXmDq8=s180-rw', 'Rated for 12+\nModerate Violence, Nudity'),
('A12', 'PUBG MOBILE VN – GRAFFITI PRANK', 0, 4.2, 'March 8, 2021', '69M', 10000000, 'VNG Game Publishing', 'https://play-lh.googleusercontent.com/8_BUDeReQZHPaUU81AhdDsRaMLqjsDnGF2W-QCjDTYWK91URCRew7D5Hnoo1Bq0yJYo=s180-rw', 'Rated for 12+\nModerate Violence'),
('A120', 'Clash of Kings : Newly Presented Knight System', 0, 4.1, 'April 14, 2021', '143M', 50000000, 'Elex Wireless', 'https://play-lh.googleusercontent.com/eEXREmvN_wnP6DIS_LqKEYq2mxicnUlIMpBE1jQSIziXA-oTTgMW-xV6dHxTk67eLEc=s180-rw', 'Rated for 12+\nModerate Violence'),
('A121', 'Klondike Adventures', 0, 4.5, 'April 1, 2021', '69M', 10000000, 'VIZOR APPS LTD.', 'https://play-lh.googleusercontent.com/wsLzjBJi8UHgl71J2NvCnAuBEzq4lWK2oDnVgazAvZkCRJ-Ua5wYl0MmUffJCEEPEg=s180-rw', 'Rated for 7+\nMild Violence'),
('A122', 'Jackpot World™ - Free Vegas Casino Slots', 0, 4.5, 'March 10, 2021', '101M', 5000000, 'SpinX Games Limited', 'https://play-lh.googleusercontent.com/zmKEdPSnRUmcnXa_opqB9LZCYw9ZPmX5ZwioeTmCqa0LDoBxne0nAIIs6fy1Zb4xVzc=s180-rw', 'Rated for 18+\nSimulated Gambling'),
('A123', 'Monsters & Puzzles: Battle of God, New Match 3 RPG', 0, 4.5, 'April 1, 2021', '155M', 100000, 'INDIEZ GLOBAL PTE. LTD.', 'https://play-lh.googleusercontent.com/5yWBFH0XtwPOZSx8j4pjKtt2ZjrXpCBtiibElwYhl5BiVVo42jObVIZWFRnljUwP20I=s180-rw', 'Rated for 7+\nMild Violence'),
('A124', '바람의전쟁: 뇌명천하', 0, 4, 'September 23, 2020', '101M', 100000, '4399 KOREA', 'https://play-lh.googleusercontent.com/qK1FDQHQ-GtJh98pJnY9mPJE2d1f_EIhxY2IZ6ucdvQpVVq2YQnB-Ofha0axZyFesE0=s180-rw', 'Rated for 7+\nMild Violence'),
('A125', 'Gold Storm Casino - Asian Fishing Arcade Carnival', 0, 4.2, 'January 12, 2021', '70M', 500000, 'XieXing Studio', 'https://play-lh.googleusercontent.com/ARRTctuKw29llQPv77_V1o5O99hKSCk8PlnxVoTd1reogK-dlpUHizyG-mt8ADkWd_k=s180-rw', 'Rated for 12+\nSimulated Gambling'),
('A126', 'Sòng Bạc May Mắn - Nổ hũ，Bắn cá，Tố bài', 0, 4.5, 'January 27, 2021', '22M', 100000, 'nanshan', 'https://play-lh.googleusercontent.com/WS39XjF6qnLVI7b1BXPh4Uj34Z9CltJMfGuuNb461VZi173PyimymXAriCGd1xXgfA=s180-rw', 'Rated for 12+\nSimulated Gambling'),
('A127', 'Trials of Heroes: Idle RPG', 0, 4.4, 'April 2, 2021', '100M', 1000000, 'Jupiter Entertainment', 'https://play-lh.googleusercontent.com/QMeRneKfz184gOpRh0Aqb_n6lNuSdhDuD5JUESJNwVliArRSI7Dl3DJAsOuTHI8EXVw=s180-rw', 'Rated for 12+\nModerate Violence'),
('A128', 'Đại Hiệp Luyện Công Nào H5', 0, 3.3, 'April 8, 2021', '96M', 10000, 'Mcorp Investment & Technology Joint Stock Company', 'https://play-lh.googleusercontent.com/gyAux-IhcPrOmaVpKyoeANSWhAqLXrA-u2NQawNzRfQtDrGQBzK-OY1NSlDos2acSQ=s180-rw', 'Rated for 16+\nStrong Violence'),
('A129', 'Archero', 0, 4.4, 'April 14, 2021', '79M', 50000000, 'Habby', 'https://play-lh.googleusercontent.com/ZzvUSL8u3A4BZbivdPXYmbxUwr_qfeUj-XPJVpvug4YSxUnAFNzedJUoKgP7UQy-9VM=s180-rw', 'Rated for 7+\nMild Violence'),
('A13', 'Garena Free Fire MAX', 0, 4.6, 'April 9, 2021', '69M', 5000000, 'GARENA INTERNATIONAL I PRIVATE LIMITED', 'https://play-lh.googleusercontent.com/N5oNMCqGzLidvwfXDI0-JhJZyJL2wVJJhD882Xws-HYkS7uod9jARtn3BBouboF5lEU=s180-rw', 'Rated for 12+\nModerate Violence'),
('A130', 'Jade Sword', 0, 4.3, 'November 24, 2020', '99M', 100000, '4399en game', 'https://play-lh.googleusercontent.com/QRmmr2QyepOqKwFnpW5T3M0DttFNtBOs-yguOUfO22SPoNCP_3CLTEKOFKupc0nuJg=s180-rw', 'Rated for 12+\nHorror'),
('A131', 'Long Vũ 3D - Long Vu 3D', 0, 4.4, 'April 7, 2021', '90M', 10000, 'Funtap.vn', 'https://play-lh.googleusercontent.com/AuKoJ42bUEAcHpAamomY_x1Jr8Jag4Mf_QElpj1-LCmmvG7MI9g4CZZpRnyUfvipxZg=s180-rw', 'Rated for 7+\nMild Violence'),
('A132', 'X-HERO: Idle Avengers', 0, 4.5, 'April 14, 2021', '65M', 1000000, 'Glaciers Game', 'https://play-lh.googleusercontent.com/spac_X_FGUrFROhjYc3YP0VfMuzwNNnHxDOWQmnvrJrw6oh-tQzLcr4PJw38pfIeQA=s180-rw', 'Rated for 12+\nModerate Violence'),
('A133', 'Dragon Mania Legends', 0, 4.4, 'March 31, 2021', '119M', 50000000, 'Gameloft SE', 'https://play-lh.googleusercontent.com/Yh_smtFW6OC96MObcwROQg0Z3jxe4IuUrOknRaqTPL3fXP-TP7U6KyrUijvNP9giQsI=s180-rw', 'Rated for 3+'),
('A134', 'Hero Clash :pocket war', 0, 4.6, 'April 16, 2021', '100M', 100000, 'Mega fun Games', 'https://play-lh.googleusercontent.com/8ZRe935ebFiFYZ6uOT2IdBJzJDLExDXf-gT14Wtu10bXTKZ6gtLN4qHM3a2-__RH_A=s180-rw', 'Rated for 7+\nMild Violence'),
('A135', 'Shadow Fight 3 - RPG fighting game', 0, 4.3, 'March 25, 2021', '115M', 100000000, 'Nekki - Action and Fighting Games', 'https://play-lh.googleusercontent.com/bOrpHn6uxgQRZfiwNFkHN-idtottSkq6iDu0wUTAAXLJRNauJ3Um0qN2fm6Z6MeFYS0=s180-rw', 'Rated for 12+\nModerate Violence'),
('A136', 'Taptap Heroes:Void Cage', 0, 4.6, 'March 24, 2021', '99M', 5000000, 'Ajoy Lab Games', 'https://play-lh.googleusercontent.com/Uv16y7I_ETktU9PDo4zka1AnjkUkQ0QfCODGRj1jenvAMEa8R3juetGPd9Vgyd92GQ=s180-rw', 'Rated for 12+\nHorror'),
('A137', 'Space shooter - Galaxy attack - Galaxy shooter', 0, 4.6, 'April 17, 2021', '104M', 50000000, 'OneSoft Global PTE. LTD.', 'https://play-lh.googleusercontent.com/VsJBTv7Ta15_SDZbxM0C-GGHhYYx2e1brTFYUx8vDafNCzJrv3mRK2iX2oX8mxb3hgU=s180-rw', 'Rated for 7+\nMild Violence'),
('A138', 'World Series of Poker WSOP Free Texas Holdem Poker', 0, 4.3, 'April 6, 2021', '114M', 50000000, 'Playtika', 'https://play-lh.googleusercontent.com/O0a3V3An3_V6cVjvHENrIBON34ewgfB7f_vlJY1T82S-xbIF79akpMzz6v1xz6gJA-s6=s180-rw', 'Rated for 18+\nSimulated Gambling'),
('A139', 'Sky: Children of the Light', 0, 4.5, 'April 13, 2021', '1.0G', 10000000, 'thatgamecompany inc', 'https://play-lh.googleusercontent.com/9Oxy1BQ0TdO6LzQBJi_qyGshUh3D4V1r-QTbL-k5NMDR-6XUhof-XL3JNyJfOwm52GM=s180-rw', 'Rated for 7+\nMild Violence, Fear'),
('A14', 'Luyện Yêu Ký', 0, 4.9, 'March 29, 2021', '93M', 50000, 'TTH Games', 'https://play-lh.googleusercontent.com/2QvLN93azHsckeXARy65CFxl8ZvDuXppKjFKSp3ERUyeiudr5qZFBm84b7mVJF3CyA1I=s180-rw', 'Rated for 12+\nModerate Violence'),
('A140', 'Crypto Cards - Collect and Earn', 0, 4.5, 'April 16, 2021', '47M', 100000, 'Phoneum', 'https://play-lh.googleusercontent.com/fgSn5aQk9ScaLfwn-UW-lF9YLvit1spPKzuk0qAvWXuogyPshhTmcvRyhT2grKBwYQ=s180-rw', 'Rated for 3+'),
('A141', 'Minecraft', 0, 4.5, 'Learn More', '69M', 0, 'Flag as inappropriate', 'https://play-lh.googleusercontent.com/VSwHQjcAttxsLE47RuS4PqpC4LT7lCoSjE7Hx5AW_yCxtDvcnsHHvm5CTuL5BPN-uRTP=s180-rw', 'Varies with device'),
('A142', 'Battle Night: Cyberpunk-Idle RPG', 0, 4.4, 'April 16, 2021', '216M', 1000000, 'FT Games', 'https://play-lh.googleusercontent.com/TJS5Vo381Bt12da3eIofy-dHE2bAc3Ld4kv1OMIGbLghzkMsQjGd0_hWLNMZ0U2lNzah=s180-rw', 'Rated for 12+\nModerate Violence'),
('A143', '星城Online', 0, 4.3, 'April 14, 2021', '59M', 1000000, '網銀國際 股份有限 公司', 'https://play-lh.googleusercontent.com/Wg7bpz2QBuB2XZyYsBkLT-yIvP8XXbOtX9wyIgg2QlRQXBXbcSJb_pZWALRA7W0L1w=s180-rw', 'Rated for 12+\nSimulated Gambling'),
('A144', 'FFBE WAR OF THE VISIONS', 0, 3.9, 'March 11, 2021', '110M', 1000000, 'SQUARE ENIX Co.,Ltd.', 'https://play-lh.googleusercontent.com/YVw-o9LihDGDpfpwYRzuHMvwZxoJ8uTuJ4dLImecyRCbB9Chb3PpmAnlbtlk6sjS4N8=s180-rw', 'Rated for 12+\nMild Swearing'),
('A145', 'Đảo Kho Báu - Arena Island', 0, 3.9, 'March 9, 2021', '50M', 100000, 'Long Nhat', 'https://play-lh.googleusercontent.com/f7L9juhz8fGTDD_b2kB4wnZSuSNLt8-qntxAHMIxXQg5l8dcPOVVfqBPbjUL81trChD2=s180-rw', 'Rated for 7+\nMild Violence'),
('A146', 'Blockman Go', 0, 4.4, 'April 15, 2021', '122M', 50000000, 'Blockman GO Studio', 'https://play-lh.googleusercontent.com/W63zkFxgY8YrLDkRV6J2mTaNvnsJOf17rutyWEtkxflgCUj3E295NjEltG3EDbx7aKo=s180-rw', 'Rated for 7+\nMild Violence'),
('A147', 'Dungeon & Heroes: 3D RPG', 0, 4.2, 'May 20, 2020', '69M', 1000000, 'DroidHen', 'https://play-lh.googleusercontent.com/5v1ULyBsOWf__a0BrkxpJadu9Ut2icGXqd8ShpP346U6soFJGeUiRTRuByO5ybb0K6A=s180-rw', 'Rated for 12+\nModerate Violence'),
('A148', 'Rush Royale - Tower Defense game PvP', 0, 4.6, 'April 9, 2021', '70M', 1000000, 'My.com B.V.', 'https://play-lh.googleusercontent.com/dfkYwlT-rzTThVdy1hbVd00UYSN9bBw1vjuizgDzX8iVtdV5oeWt03sux5XH1EbhDjw=s180-rw', 'Rated for 3+'),
('A149', 'DDTank Mobile', 0, 3.8, 'June 29, 2020', '82M', 1000000, '7road International HK Limited', 'https://play-lh.googleusercontent.com/AYqXlyrKoLJaF56IsQaQtQ8wCtI7BGHI2THMeTwiY-D_XUJgBo9aP0zRHIJyzuYLdA=s180-rw', 'Rated for 12+\nModerate Violence'),
('A15', 'MU Đại Thiên Sứ H5', 0, 3.7, 'July 12, 2020', '22M', 5000000, 'ASM MOBILE GAME COMPANY', 'https://play-lh.googleusercontent.com/MHXC6lfj6S4XOGNlfxIM4jOGwyZza7-ob9RU_3hoS7eC4-oxMxGcRDuB_KLbc6Hfs3I=s180-rw', 'Rated for 16+\nStrong Violence'),
('A150', 'Art of War 3: PvP RTS modern warfare strategy game', 0, 4.5, 'April 15, 2021', '137M', 10000000, 'Gear Games', 'https://play-lh.googleusercontent.com/U3pjgKaqxQps2AMLScVJ2SL9RIuscxuZyb7IXGAr5cvtvslGD5ulpZR--tth4rdZr5A=s180-rw', 'Rated for 12+\nModerate Violence'),
('A151', 'Tân Thiên Long Mobile', 0, 3.4, 'November 10, 2020', '89M', 500000, 'VNG Game Publishing', 'https://play-lh.googleusercontent.com/IxzmzpNiFK3OxXjR2h3NEeKA0vREB1muF-X2Cxf51dQDlu-rTp4NZPC0eqwWI1h_vOqW=s180-rw', 'Rated for 12+\nModerate Violence'),
('A152', 'MORTAL KOMBAT: The Ultimate Fighting Game!', 0, 4.2, 'March 29, 2021', '69M', 50000000, 'Warner Bros. International Enterprises', 'https://play-lh.googleusercontent.com/WLdYPX4Zj9XgNIWKncRBLP1-BunQpiCoLCgqRq3v98eWaN1R-9SksxH3DIARMrH25t4=s180-rw', 'Rated for 18+\nExtreme Violence'),
('A153', 'Mini World: Block Art', 0, 4.3, 'March 18, 2021', '95M', 50000000, 'SuperNice Digital Marketing Co., Ltd.', 'https://play-lh.googleusercontent.com/XFzmw6S93ftOVMvNI4wUz5gG9bSylLMAlCPWyrs04_DA8LAJ4biDECOQw3cAVH24i5WX=s180-rw', 'Rated for 7+\nImplied Violence'),
('A154', 'NagaVip', 0, 4.6, 'January 24, 2021', '120M', 50000, 'Cesoyo Studio', 'https://play-lh.googleusercontent.com/LKMj69kbFnU9UAyjEdhdipqhUgGwUJ4PnMEv1tbQgKg1L1HRFwk7Znl3el4ELYnGnck=s180-rw', 'Rated for 12+\nSimulated Gambling'),
('A155', 'OMG 3Q – Đấu tướng chiến thuật cực mạnh', 0, 4.3, 'February 1, 2021', '84M', 1000000, 'VNG Game Publishing', 'https://play-lh.googleusercontent.com/Bb_oOdhljBjyv8cFYdyTAcm8ks4czkQS5C3Qd9jLqhBw43u-cpLtiw2f2uy-Xn2HQxA=s180-rw', 'Rated for 12+\nModerate Violence'),
('A156', 'MythWars & Puzzles: RPG Match 3', 0, 4.3, 'April 1, 2021', '174M', 5000000, 'KARMA GAME', 'https://play-lh.googleusercontent.com/by7DnkpZYLhIvysz0llTJRS4du6aZ6Z0eExA__TExbl6FZ3mBeeDOfZyD9QhMTRTQM0=s180-rw', 'Rated for 7+\nMild Violence'),
('A157', 'Township', 0, 4.2, 'March 13, 2021', '147M', 100000000, 'Playrix', 'https://play-lh.googleusercontent.com/MSAoxaUbx0yXM1X8ddGicFx97fT-aXumU5624QsGhPKubRhz-JD7XMJHjDDAKpHarqg=s180-rw', 'Rated for 3+'),
('A158', 'Fishdom', 0, 4.4, 'March 24, 2021', '136M', 100000000, 'Playrix', 'https://play-lh.googleusercontent.com/kuY68EFH5J1G_Gu-f5mJKn5knmKo7-aCOl9Ik9Xv65Ivc6vzoRjKFNa35OCpsLIP3Jw=s180-rw', 'Rated for 3+'),
('A159', 'Tank Hero - Awesome tank war games', 0, 4.5, 'April 15, 2021', '63M', 1000000, 'Betta Games', 'https://play-lh.googleusercontent.com/slTeefhQmNAT0KMj6vRsmwan7NVOK4LKT-jqoam9wsoznJXDXY3OJ6OdZyJxX6EM6Njj=s180-rw', 'Rated for 3+'),
('A16', 'Rise of the Kings', 0, 4.1, 'March 30, 2021', '94M', 10000000, 'ONEMT', 'https://play-lh.googleusercontent.com/al7gJTTZlJJ5U_g2LIObA6SnViH3B46oRF9Jd1ujhxKxmaDJ2oPeqsPt7ZK__tGxtSDy=s180-rw', 'Rated for 12+\nModerate Violence'),
('A160', 'Fishing Clash', 0, 4.7, 'April 8, 2021', '106M', 50000000, 'Ten Square Games', 'https://play-lh.googleusercontent.com/wOPJYrDBOH341lPdj9i6i_IrnasbHrLGqsDbvHJHEOSdF5cCmvhHTmt579ZDboDcnro=s180-rw', 'Rated for 3+'),
('A161', 'Family Island™ - Farm game adventure', 0, 4.3, 'April 12, 2021', '83M', 10000000, 'Melsoft Games Ltd', 'https://play-lh.googleusercontent.com/HbH1hDE1EFa3RyYiRM5aY4tA8FTx0KAHGWImyseVw9UDSggwPiLadUYjIrjbmoux01U=s180-rw', 'Rated for 3+'),
('A162', 'Giang Sơn Của Trẫm', 0, 4, 'April 12, 2021', '89M', 10000, 'Jedi Việt Nam', 'https://play-lh.googleusercontent.com/bNavDS-QjhiBPKnTX48VaONZHyeN252BhAj-cqJjpYPO_3mK3q5e629N8PTaIuTNg0w=s180-rw', 'Rated for 3+'),
('A163', 'KOF AllStar -Quyền Vương Chiến', 0, 3.5, 'November 11, 2020', '28M', 500000, 'VNG Game Publishing', 'https://play-lh.googleusercontent.com/dGsuD3kHMa0bRUcv1EFYwpPuSt2714GpTPISyuMTA3lzzV2aZG3kQ23_robB4uPW-g=s180-rw', 'Rated for 12+\nModerate Violence'),
('A164', 'Pocket Knights 2', 0, 4.4, 'April 9, 2021', '71M', 1000000, 'Enjoy mobile game limited', 'https://play-lh.googleusercontent.com/IfikPjaOr3wOEImNczv1Ush6-bsNzQYJOYTHSUhgNgv3ScNp-_RSHL6tJJBt1e1NAVRo=s180-rw', 'Rated for 12+\nModerate Violence'),
('A165', 'MARVEL Strike Force - Squad RPG', 0, 3.8, 'March 19, 2021', '132M', 10000000, 'Scopely', 'https://play-lh.googleusercontent.com/Ql3xzeRYVEqsOleQEltZSpK2bxo63VUn51iLllfdTk3BqSV7fkkrAbD4v_x0tdvTVSk=s180-rw', 'Rated for 12+\nModerate Violence'),
('A166', 'Modern Strike Online: Free PvP FPS shooting game', 0, 4.4, 'February 25, 2021', '69M', 50000000, 'Azur Interactive Games Limited', 'https://play-lh.googleusercontent.com/Ud1lAc0FoYLl_zv70-JHMVRHyuWAFOq4PpEKNevV_g5eyfYqRrc2kE-pC26XlSUitA=s180-rw', 'Rated for 16+\nStrong Violence'),
('A167', 'Island King', 0, 4.6, 'March 30, 2021', '106M', 5000000, 'Forever9 Games', 'https://play-lh.googleusercontent.com/ge5EtdTfFx_8iphgc5Y2vh8LyIcL9tdFCCUkaRVCboTwlJ3l73uH1J1cioIwARqxS7A=s180-rw', 'Rated for 3+'),
('A168', 'Poker VN - Mậu Binh – Binh Xập Xám - ZingPlay', 0, 4.6, 'February 1, 2021', '58M', 5000000, 'VNG ZingPlay Game Studios', 'https://play-lh.googleusercontent.com/iKLxWyfZZWAQb2z27MnCeZvLPC7okUTLoEqfZpEGZdr8OVrwSRBXeCOsNfb00FuuAw=s180-rw', 'Rated for 12+\nGambling'),
('A169', 'Fate/Grand Order (English)', 0, 4.5, 'March 31, 2021', '71M', 1000000, 'Aniplex Inc.', 'https://play-lh.googleusercontent.com/WRixOqWRZQHfCgFhqfWbjCh6myA4hO4bOPQ_KJJEKrB_G8KZvl0IvNEUmRuxnfx8Tbw=s180-rw', 'Rated for 12+\nModerate Violence, Sexual Innuendo'),
('A17', 'Top War: Battle Game', 0, 4.2, 'April 15, 2021', '149M', 10000000, 'Topwar Studio', 'https://play-lh.googleusercontent.com/nYZO9INxVvQYJ13VjE18-b7oAfwAk88xAUJJRw8FkpOnz2U7TxAKyXtUNtdr0ZR9Ae7c=s180-rw', 'Rated for 7+\nMild Violence'),
('A170', 'Asphalt 9: Legends - Epic Car Action Racing Game', 0, 4.5, 'April 16, 2021', '96M', 50000000, 'Gameloft SE', 'https://play-lh.googleusercontent.com/cQBJ7Jwvz0jex8sL7LjgLId-wOdmMajSZbpC-bzHDhS5uK9Zms0fFsXEVNGvlIUk_g=s180-rw', 'Rated for 7+\nMild Violence, Implied Violence'),
('A171', 'Solitaire Grand Harvest - Free Solitaire Tripeaks', 0, 4.6, 'April 13, 2021', '159M', 10000000, 'Supertreat - A Playtika Studio', 'https://play-lh.googleusercontent.com/5z57ByuV7uyQ-u96f1-Ltse4420iMIxZlxw1LWFMS8g_9aMdff69bHGw9h97S-DtJ7Q=s180-rw', 'Rated for 3+'),
('A172', 'Battleship & Puzzles: Warship Empire Match', 0, 4.2, 'March 10, 2021', '138M', 10000, 'Skymoons Technology, Inc', 'https://play-lh.googleusercontent.com/aFbOP2GG1ViI6i8NgKlP48Rl3_SmnFjyGI_RmSeM3CTnb9kScIC7LI65eu1CC-7ZxM29=s180-rw', 'Rated for 3+'),
('A173', 'LifeAfter', 0, 4.1, 'March 10, 2021', '75M', 10000000, 'NetEase Games', 'https://play-lh.googleusercontent.com/cXqh_5BH2N-0QbQv4B5R6d02hcrUJ-Fpj-poO1uihuIANjsAxIgXa9vhIHwbFpS-SKc=s180-rw', 'Rated for 12+\nModerate Violence, Horror'),
('A174', 'Lightning Link Casino: Best Vegas Casino Slots!', 0, 4.2, 'April 14, 2021', '158M', 5000000, 'Product Madness', 'https://play-lh.googleusercontent.com/AW0bzqveVrGkEAIxK-jld4ryHAAtNui9B4LDJMpNF31P_FYfVo5lvNHHqVNpnCr1ng=s180-rw', 'Rated for 18+\nGambling'),
('A175', 'Date A Live: Spirit Pledge - Global', 0, 4.4, 'March 3, 2021', '92M', 500000, 'Moonwalk Interactive Hong Kong Limited', 'https://play-lh.googleusercontent.com/9lWRV--bbBVqN79jCoi7vBbXGirjbFe2RSDaZMfMmPp48s9zeMAb7oICWHmLVEyNCQ=s180-rw', 'Rated for 12+\nModerate Violence, Nudity, Sexual Innuendo'),
('A18', 'Soul Land: Đấu La Đại Lục-Funtap', 0, 4.1, 'December 7, 2020', '67M', 1000000, 'Glitter star Studio', 'https://play-lh.googleusercontent.com/cPTVe-Ry3DZLBFa-1W_41n2cNV0Im3FAptORPWpU25Zzjy79u4IlG-zmPGJXllQCswQ=s180-rw', 'Rated for 12+\nModerate Violence'),
('A19', 'Thế Chiến Z', 0, 3.4, 'April 8, 2021', '52M', 100000, 'Camel Games Limited', 'https://play-lh.googleusercontent.com/eXy11kVkWO_PkA791Oqt-iR-fVgPCabv6uN2PgnlfsSrTYxdjI6PS4AD3I0BsqL30io=s180-rw', 'Rated for 12+\nHorror'),
('A2', 'Rise of Kingdoms: Lost Crusade', 0, 4.2, 'April 12, 2021', '104M', 10000000, 'LilithGames', 'https://play-lh.googleusercontent.com/OmRFgoSS-iZDwzkMpygYEjbBkpY-_fpE2CEiEgj2KG0yoj2DcP01fbGMutWEf8ip2tiv=s180-rw', 'Rated for 18+\nSimulated Gambling'),
('A20', 'Roblox', 0, 4.5, 'April 16, 2021', '97M', 100000000, 'Roblox Corporation', 'https://play-lh.googleusercontent.com/R5hLCLt947e0R9q0KZJeMQJu-zkeB601mKyJqYZIvb1sVz0xgplkH0etKIvZOmlRXDU=s180-rw', 'Rated for 7+\nMild Violence, Fear'),
('A21', 'Chiến Thần Kỷ Nguyên - Dragon Impact', 0, 3.8, 'March 1, 2021', '98M', 100000, 'NPH VTC Mobile', 'https://play-lh.googleusercontent.com/niz6_52NO2iDX1mu6IJmhzmIOdsLAJ6L4JLuGLdgHy5TNgC80vcYkGrjBD_Fg6XcR_U=s180-rw', 'Rated for 7+\nMild Violence'),
('A22', 'Crasher: Origin', 0, 4.2, 'April 10, 2021', '100M', 1000000, '4399en game', 'https://play-lh.googleusercontent.com/93lkapJvWh5Weh9APfhKGnKjURZ5oVECo_0zHDC3nV2LCtUSitM89tdNhNDOx8sqdg=s180-rw', 'Rated for 12+\nModerate Violence'),
('A23', 'Mobile Legends: Adventure', 0, 4.6, 'April 12, 2021', '94M', 10000000, 'Moonton', 'https://play-lh.googleusercontent.com/0SCI8i6tqM670aeUhRqHJgb4DiuPKz2FQfYT6845XhvSlV547ndgxCfklPyutPnyMgE=s180-rw', 'Rated for 12+\nModerate Violence'),
('A24', 'State of Survival:The Walking Dead - Funtap', 0, 4.6, 'April 12, 2021', '138M', 500000, 'KingsGroup Holdings', 'https://play-lh.googleusercontent.com/N2eUEwAjIqDHigMo2yrHBxbumtFvsvy2nloqbf0aQulwF8zUzJjEsPqGO0fjGFBt7A=s180-rw', 'Rated for 7+\nMild Violence'),
('A25', 'LMHT: Tốc Chiến', 0, 3.6, 'March 28, 2021', '69M', 1000000, 'CÔNG TY CỔ PHẦN VNG', 'https://play-lh.googleusercontent.com/jIx4WDO0zwKE1cmcnFgTeFt72BJDGNQAN6JYOTcqR4o0I1434-20AHLlTED68njYQpk=s180-rw', 'Rated for 12+\nModerate Violence, Sexual Innuendo'),
('A26', 'Goddess MUA', 0, 4.4, 'September 4, 2020', '98M', 1000000, '4399en game', 'https://play-lh.googleusercontent.com/8ckjjlFOgDyNNtyey_RVFAJniXJ15amkF31O4udx9QC-cyNMe-2ReBQ7YgtZ8YiOew=s180-rw', 'Rated for 12+\nModerate Violence'),
('A27', 'Summoners War', 0, 4.3, 'April 8, 2021', '1.1G', 50000000, 'Com2uS', 'https://play-lh.googleusercontent.com/UbdpbnAWSOFU_35tULIOPLmV5ey0bq6NTL59Ko7nNfig8WqNPbO3xAHsoQA9Sk8-_V0=s180-rw', 'Rated for 12+\nModerate Violence'),
('A28', 'Coin Master', 0, 4.3, 'April 11, 2021', '69M', 100000000, 'Moon Active', 'https://play-lh.googleusercontent.com/zPqwtC-BSqkaqNHb1r-GI_Ss1mUINKC4_GnHaZ1a-nuYppIhNVkVq90g3X2zTdgWZmcR=s180-rw', 'Rated for 12+\nSimulated Gambling'),
('A29', 'Slots (Golden HoYeah) - Casino Slots', 0, 4.3, 'April 16, 2021', '143M', 10000000, 'International Games System Co., Ltd.', 'https://play-lh.googleusercontent.com/zWXvJ-MAEN6HDMCoCBdQ1txCVFVkWTd6XIUHkBTu9AkWttpK5YhN1Hu1JNDVSg7NWgrk=s180-rw', 'Rated for 18+\nSimulated Gambling'),
('A3', 'Võ Lâm Truyền Kỳ 1 Mobile', 0, 2.7, 'April 5, 2021', '57M', 100000, 'CÔNG TY CỔ PHẦN VNG', 'https://play-lh.googleusercontent.com/KOJrBveCPD9tAPwB8bc56E_DujYLulkr6uWV4FRR8khMheYclRb_JGuGAHSJE6rHzdo=s180-rw', 'Rated for 12+\nModerate Violence'),
('A30', 'Empires & Puzzles: Epic Match 3', 0, 4.2, 'March 30, 2021', '110M', 50000000, 'Small Giant Games', 'https://play-lh.googleusercontent.com/kZt3UcwT9HmEio2fhnlExf-AsMP2A0HxtQ15hjt0PSPRkjcyL77FNfBhLMsEeXvH9Q=s180-rw', 'Rated for 7+\nMild Violence'),
('A31', 'FIFA Soccer', 0, 4.2, 'March 22, 2021', '90M', 100000000, 'ELECTRONIC ARTS', 'https://play-lh.googleusercontent.com/h93ERM8cgHatXAlApNqOTT-yT8Xa2wXMH1VYcB6JcGIEUM_Q0742j2OFkbm61McB6Q=s180-rw', 'Rated for 3+'),
('A32', 'THỢ SĂN CÁ', 0, 4.3, 'April 14, 2021', '149M', 1000000, 'TPC mobile', 'https://play-lh.googleusercontent.com/baZwY9YzgzPOaFB_CcaD4lcJ1SviCaVD_k4lYsJxKk7W23429C5Zz2Dgjvtw_QeYT8Lu=s180-rw', 'Rated for 12+\nSimulated Gambling'),
('A33', 'Idle Goddess', 0, 4.6, 'April 16, 2021', '75M', 100000, 'FIFUN', 'https://play-lh.googleusercontent.com/UujTxeRLfAagp_0LE57AjRn6NO3go5TVHQOeVtrzVY6TxjbuhySzqvCPUJn2iWzqew=s180-rw', 'Rated for 7+\nMild Violence'),
('A34', 'AFK Arena', 0, 4.6, 'April 6, 2021', '95M', 10000000, 'LilithGames', 'https://play-lh.googleusercontent.com/i6eGogfqG0kJ8w7_HZAU9pyLgYVgz8b46kKYDfco2tAZuYYmH5xAccMbvjGCyOBPpFA=s180-rw', 'Rated for 7+\nMild Violence'),
('A35', 'Castle Clash: Quyết Chiến-Gamota', 0, 4.6, 'April 16, 2021', '562M', 1000000, 'IGG.COM', 'https://play-lh.googleusercontent.com/ZZGACUNMgtTGamEf3LjwzCyerRkFpj4THlNOvYHpATmuknuRPTxLW4kCZhAUIB3rDg=s180-rw', 'Rated for 7+\nMild Violence'),
('A36', 'Epic War: Thrones', 0, 4.6, 'March 30, 2021', '74M', 100000, 'Archosaur Games', 'https://play-lh.googleusercontent.com/LL_PS65AHzwIBaBexry7d17JXfCKZ53moZ5w6vOFCpiYNrNYRwCeb4UVUw72IeAx=s180-rw', 'Rated for 12+\nModerate Violence'),
('A37', 'Phong Vân Chí – Cày Nhiệm Vụ Free Vip 3', 0, 4.8, 'December 11, 2020', '90M', 100000, 'VTC Mobile Entertainment & Sport Center', 'https://play-lh.googleusercontent.com/Y2BYGj7MpsB7zFRqgX68B6MB157NcnPk4MnRtmzJGfZvz8-vEjhg_MpgUMVhSM_17NQ=s180-rw', 'Rated for 3+'),
('A38', 'Thiếu Niên 3Q - VNG: Tam Quốc Chiến Thuật', 0, 4.2, 'November 1, 2020', '107M', 500000, 'MINH PHUONG THINH COMMUNICATION COMPANY LIMITED', 'https://play-lh.googleusercontent.com/_kepDZC_JBbB5GAQi5UnV-fOsLem_qXawfvpoWkYdKVcf7LIv2EzRx7PdHQF0xpOkno=s180-rw', 'Rated for 12+\nModerate Violence'),
('A39', 'D-MEN：The Defenders', 0, 4.3, 'March 18, 2021', '100M', 1000000, 'ACE GAME INTERNATIONAL LIMITED', 'https://play-lh.googleusercontent.com/V79mLq0cMWdQv5iIMvBxJLevGHFEhC42D9c2ZG7uxIIBazUbqSVZxD3VVRIJIYabq1g=s180-rw', 'Rated for 12+\nModerate Violence'),
('A4', 'Garena Free Fire- World Series', 0, 4.3, 'April 9, 2021', '69M', 500000000, 'GARENA INTERNATIONAL I PRIVATE LIMITED', 'https://play-lh.googleusercontent.com/NE5J766YoDwc3a76vBcF-DLRHSzrzpAscPv8Uez26HxgEOCPFDzsDKITQ3_oImWCvSg=s180-rw', 'Rated for 12+\nModerate Violence'),
('A40', '8 Ball Pool', 0, 4.4, 'April 13, 2021', '66M', 500000000, 'Miniclip.com', 'https://play-lh.googleusercontent.com/PqtBSK2Bu75H9rwi-6-0mvUQ1UaR85c_26xbA6xay8zvcXeC97iFl9xVqSHO6qq1r-s=s180-rw', 'Rated for 12+\nSimulated Gambling'),
('A41', 'War and Order', 0, 4.2, 'April 13, 2021', '44M', 10000000, 'Camel Games Limited', 'https://play-lh.googleusercontent.com/zMHIH7m99q9gT6td1TJhLGF4I-oSjp6shUSj6ei0Myqth1JsCNFvJqbzVoVZbu65juo=s180-rw', 'Rated for 12+\nModerate Violence'),
('A42', 'Tam Quốc Chí 2020', 0, 4.2, 'December 29, 2020', '74M', 500000, 'Hoang Thuy Linh', 'https://play-lh.googleusercontent.com/pdNPnWZQd8p_bd1x9IeeHI1HoNtFkEVeHx7-9EU4tKJc5evlXiqn53odUMlqGWM1ExU=s180-rw', 'Rated for 12+\nMild Swearing'),
('A43', 'Gardenscapes', 0, 4.4, 'April 12, 2021', '140M', 100000000, 'Playrix', 'https://play-lh.googleusercontent.com/le-V79LkOvLsmOcwYPjCW80LVX0OTeuYUPUm-kSIJKB8kQfiradjtZOzjlZFNMkYvd8=s180-rw', 'Rated for 3+'),
('A44', 'Rise of Empires: Ice and Fire', 0, 4.7, 'April 8, 2021', '69M', 10000000, 'Long Tech Network Limited', 'https://play-lh.googleusercontent.com/GjzMYh65fMwtCMLzcNpmjqb-rADUftfGpfkBI-rbAbrN0ncT5VEmff42E2AmHJuXPcU=s180-rw', 'Rated for 12+\nModerate Violence'),
('A45', 'Puzzles & Survival', 0, 4.2, 'April 14, 2021', '147M', 5000000, '37GAMES', 'https://play-lh.googleusercontent.com/tN4FM9Duc5-Qmnm_F5ppHmzCMihH8MZ4xVBifSaTmcGrMqzKZ9atE0omNUl3ZA0L2ixS=s180-rw', 'Rated for 12+\nModerate Violence'),
('A46', 'Immortal Legend: Idle RPG', 0, 4, 'April 6, 2021', '7.5M', 500000, 'UnlockGame', 'https://play-lh.googleusercontent.com/K03z41jDCCLV2eGrmlaKUQG-jdGpgpF3oLXvji3cd2Uquoiai8r_xxGzRAzwaJrTryY=s180-rw', 'Rated for 12+\nModerate Violence'),
('A47', 'Dragon King Fishing Online-Arcade Fish Games', 0, 4.4, 'March 24, 2021', '92M', 1000000, 'Yue Studio', 'https://play-lh.googleusercontent.com/lDcJ8k8_QU5QE698OMW8DzAnb5JFelAkQv8MwwVxIFl-Wm-YtnWcFWlJeRDnusPo1kg=s180-rw', 'Rated for 3+'),
('A48', 'Ta Là Hoàng Thượng - VegaGame', 0, 4.3, 'March 17, 2021', '55M', 500000, 'Clicktouch Co., Ltd.', 'https://play-lh.googleusercontent.com/9W4MvRpWX_qe7-o421wEU1sWksz83UnO-pn1o0EmY-M_u3lnmS6KMt7Drd7u21piay4=s180-rw', 'Rated for 12+\nModerate Violence'),
('A49', 'Honkai Impact 3', 0, 4.3, 'February 26, 2021', '209M', 5000000, 'miHoYo Limited', 'https://play-lh.googleusercontent.com/tZBzw3_5J4n3VkRIy9URdnsyUMUK_epeJqZ95T0X5T1xNPm7K6rPAxWhRXnn3HaISFQ=s180-rw', 'Rated for 12+\nSexual Innuendo'),
('A5', 'Lords Mobile - Gamota', 0, 4.4, 'March 29, 2021', '80M', 1000000, 'IGG.COM', 'https://play-lh.googleusercontent.com/mM0R93uKq8REjvujCIXzQbsBnF_OY4I6POWZTtzAFfchJN9y9w87sOpC9SWvaAru9CU=s180-rw', 'Rated for 7+\nMild Violence'),
('A50', 'Liên Minh Mạo Hiểm', 0, 3.5, 'March 9, 2021', '58M', 100000, 'PHOENIX ENTERTAINMENT SERVICE COMPANY LIMITED', 'https://play-lh.googleusercontent.com/dh4nm37z7KORaeozOz8v1tJmGqBFlwfqkUXBibIKByFxB3V9yUbF1lQwxC6QVcdKpw=s180-rw', 'Rated for 12+\nModerate Violence'),
('A51', 'Candy Crush Saga', 0, 4.6, 'April 9, 2021', '69M', 1000000000, 'King', 'https://play-lh.googleusercontent.com/gU9NKwpgLDYA6LIYK4dnkAkVyqNHUfTIqklEiNuO4oZ2OCpWQhQdqhnDh8Yb9B8SWIM=s180-rw', 'Rated for 3+'),
('A52', 'Chiến Thần Tam Quốc-Tranh Bá', 0, 3.9, 'April 15, 2021', '69M', 500000, 'Heyshell HK Limited', 'https://play-lh.googleusercontent.com/MnTNwXusvv0MAt_MCeZBaQPIGdRBe_S5DlAZIUgrVubvVfD5P0krvNkWMIAGoJ0QXNs=s180-rw', 'Rated for 7+\nMild Violence'),
('A53', 'Mobile Legends: Bang Bang VNG', 0, 4, 'April 13, 2021', '103M', 10000000, 'VNG Game Publishing', 'https://play-lh.googleusercontent.com/ha1vofCWS5lFhVe0gabwIetwjT4fUY5d6iDOP10KWRwnXci8lWI3ClxrqjoRuPZidg=s180-rw', 'Rated for 12+\nModerate Violence'),
('A54', 'Call Of Duty: Mobile VN', 0, 4.5, 'March 9, 2021', '86M', 1000000, 'VNG Game Publishing', 'https://play-lh.googleusercontent.com/jV2b-yL-qsi_-E6h3kTx_6TPDhZOKgU68G3wR4jUG20NUZqZtQHmQAO8VIA_OiZRjV8=s180-rw', 'Rated for 16+\nStrong Violence'),
('A55', 'Cực Phẩm Đại Nhân - tthgame', 0, 3.9, 'November 25, 2020', '22M', 100000, 'TTH MOBI', 'https://play-lh.googleusercontent.com/oKjL0xrNGhMxnxUvdSBRpkCyL7Q_5zJ0mRVP4TZc3JKzsZyk1GhWjMHlqiMTsfz1PQ=s180-rw', 'Rated for 16+\nNudity'),
('A56', 'Vĩnh Hằng Kỷ Nguyên-Kỵ Sĩ Rồng thức tỉnh', 0, 3.7, 'March 22, 2021', '81M', 1000000, 'ASM MOBILE GAME COMPANY', 'https://play-lh.googleusercontent.com/1J2DBHYoAYuDBXfVBy9kPFB0rXMzQZ-aRAHy6hYrcqqgfb0T6y7BKnAVb3av-3w6SsA=s180-rw', 'Rated for 16+\nStrong Violence'),
('A57', 'FaFaFa™ Gold Casino: Free slot machines', 0, 3.8, 'January 12, 2021', '124M', 1000000, 'Product Madness', 'https://play-lh.googleusercontent.com/C596dRWpLpxGG3wVomzFC7cqaX5t5W8IGjM8hIQKr-TZheVJ-5gxgmd70jpeSwehwV4=s180-rw', 'Rated for 18+\nSimulated Gambling'),
('A58', 'The King\'s Army:Idle RPG', 0, 3.5, 'January 21, 2021', '132M', 100000, 'Merry Realm', 'https://play-lh.googleusercontent.com/Y2i024adbU-ih-YxH5FsU19dGaMwAsMkeuSdIiWPsrQvgbcovcmS_4CrxbNO-mYNKho=s180-rw', 'Rated for 7+\nMild Violence'),
('A59', 'Dragon raja-Long tộc huyễn tưởng', 0, 4.4, 'April 15, 2021', '66M', 500000, 'Archosaur Games', 'https://play-lh.googleusercontent.com/-V7TqD6KkO3rDGlLvP8UOeGV-QVegIq8MBE79g4Y4WcNrEt21lNZ9gDLOU78UvYLM0o=s180-rw', 'Rated for 12+\nModerate Violence'),
('A6', 'Garena Liên Quân Mobile', 0, 4.1, 'March 17, 2021', '69M', 50000000, 'Garena Mobile Private', 'https://play-lh.googleusercontent.com/SdHyO-nmpQb600ZzVd79RsrIhj-tQ0J9kJ_usdsjXf2co8efuRQgg5UWLfTIhFruiw=s180-rw', 'Rated for 12+\nModerate Violence, Sexual Innuendo, Horror'),
('A60', 'ZingSpeed Mobile', 0, 4.2, 'February 1, 2021', '89M', 5000000, 'VNG Game Publishing', 'https://play-lh.googleusercontent.com/wXXdqi5YTIMg84WyB3R34Jna8pxdrS20YyRZhdC5Wxm-EA-f5Pg5P2HSBe9vBCEIHz4=s180-rw', 'Rated for 12+\nModerate Violence'),
('A61', 'Nghịch Thiên Kiếm Thế - Thế Thiên Hành Đạo', 0, 4.4, 'January 22, 2021', '69M', 100000, 'NPH VTC Mobile', 'https://play-lh.googleusercontent.com/cnxN511bRDEj6V77V_M6igE0A_5CF4u6HH9Drlbscp2-yCccdqOFWRXI8g9YoKywDKc=s180-rw', 'Rated for 7+\nMild Violence'),
('A62', 'War Robots. 6v6 Tactical Multiplayer Battles', 0, 4, 'April 16, 2021', '928M', 50000000, 'PIXONIC', 'https://play-lh.googleusercontent.com/67AtnAZEKOR_bm1MAYaapEyMFsKyLQzPMoyg6dmk-x8GzfmhEhcvDWSsHJLP_bkMAPE=s180-rw', 'Rated for 12+\nMild Swearing'),
('A63', 'Days of Empire - Heroes Never Die!', 0, 4.1, 'April 13, 2021', '98M', 5000000, 'ONEMT', 'https://play-lh.googleusercontent.com/-2FOgjGzB32muaVa_e69dq97U_E21IWhXEd7phasi9FpJTEEvNENV9pcWvXD3-RxOvoA=s180-rw', 'Rated for 12+\nSexual Innuendo'),
('A64', 'Con Đường Tơ Lụa', 0, 2.9, 'March 17, 2021', '75M', 10000, '4GAMOTA', 'https://play-lh.googleusercontent.com/zPv289-p7mcFOfeKbpMhHsnSBMoPD3GcyubX25ksJNUNU2ndau0cX-_vnk4SCAMY2-g=s180-rw', 'Rated for 16+\nStrong Violence'),
('A65', 'Dream League Soccer 2021', 0, 4.4, 'April 8, 2021', '389M', 50000000, 'First Touch Games Ltd.', 'https://play-lh.googleusercontent.com/EwZ3JYb8nD0HLul-djQLT4OkIejg1hiFaDYhqLivKXDt362YC0MYKDZCTIT1p4b18ps=s180-rw', 'Rated for 3+'),
('A66', 'Thợ Săn Ma 3D', 0, 4.6, 'April 8, 2021', '94M', 100000, '1618PLAY LLC', 'https://play-lh.googleusercontent.com/D3bcx3cBPeENpxSrxeQs3ErqesxNdGf_8dnfW9C44tB36fdgtIleBN6maVE5coQfj4E=s180-rw', 'Rated for 18+\nExtreme Violence'),
('A67', 'Danh Tướng 3Q', 0, 4.2, 'November 28, 2019', '79M', 1000000, 'VNG Game Publishing', 'https://play-lh.googleusercontent.com/PINHkvL0LyyWFNrv3f29RcD2sqzRWMnXKRVgqs5TnEMs9ebhxKpRR4NB1E5pb5e7tOk=s180-rw', 'Rated for 12+\nModerate Violence'),
('A68', '封神異世錄', 0, 4.5, 'March 2, 2021', '91M', 50000, 'Trigirls Studio', 'https://play-lh.googleusercontent.com/y9wvOFZcOFazQsx9Du_LDFWKzZ9AB7MDhyOtzb6t9Z20Vv55PZYnM6RMZeEtBHSe56Y=s180-rw', 'Rated for 12+\nModerate Violence, Mild Swearing'),
('A69', 'Laplace M - Vùng Đất Gió', 0, 4.3, 'February 7, 2021', '54M', 500000, 'ZlongGames', 'https://play-lh.googleusercontent.com/siAy8Ga7gp8tFALiEU4BKZ2ji7bkStEaLJpd6R89yf1qYnhCom8iboJdGZDYkcvOQ5A=s180-rw', 'Rated for 3+'),
('A7', 'Genshin Impact', 0, 4.5, 'March 22, 2021', '543M', 10000000, 'miHoYo Limited', 'https://play-lh.googleusercontent.com/So91qs_eRRralMxUzt_tkj4aBXvVSYqWiEJrzrk_LBd5071mSMv_gBKslyulIOrPsiQ=s180-rw', 'Rated for 12+\nModerate Violence'),
('A70', 'Homescapes', 0, 4.3, 'March 22, 2021', '148M', 100000000, 'Playrix', 'https://play-lh.googleusercontent.com/tZEKWZPpNftDetL64nJajcLusF3iHnSmPY8_7BO6lD_Yya0m-4PiZ1HrAR2PDzHkknuZ=s180-rw', 'Rated for 3+'),
('A71', 'Ace Defender: War of Dragon Slayer', 0, 4.6, 'April 12, 2021', '69M', 500000, 'ACE GAME INTERNATIONAL LIMITED', 'https://play-lh.googleusercontent.com/Vnw2taHSbc0f48tnxgEEJT_Ln9ysD4Hd_totxRafTuk-1hCwool_chMkCHvv37FK0DE=s180-rw', 'Rated for 12+\nHorror'),
('A72', 'Dragon Age: Bóng Đêm Thức Tỉnh', 0, 4.8, 'February 3, 2021', '80M', 100000, 'TTH Games', 'https://play-lh.googleusercontent.com/SACwjTod9m1bQjAf6IuQ6h3A1ZEjdk8e60f715C7AIhq5a0BG0YpwWYGiNOsqJxu78k=s180-rw', 'Rated for 12+\nModerate Violence'),
('A73', 'RAID: Shadow Legends', 0, 4.2, 'April 8, 2021', '150M', 10000000, 'Plarium Global Ltd', 'https://play-lh.googleusercontent.com/VwJOgj0Papli5Xqe2ATOvDhe94L1_f4OHGB4h_9qVAvTFojEFXiqrHMyp8H6iJmpeg=s180-rw', 'Rated for 12+\nHorror'),
('A74', 'Tiên Kiếm Tiêu Dao', 0, 3.6, 'March 5, 2021', '98M', 50000, 'Dream Asia', 'https://play-lh.googleusercontent.com/3MBuqqd83ElLZ4IsbJiC_IsPU_YtFnbZs88pDwUJj5tcxr87ChpvAI7Oz6TwypgU4aU=s180-rw', 'Rated for 12+\nModerate Violence, Sexual Innuendo'),
('A75', 'Three Kingdoms: Art of War', 0, 4.7, 'March 16, 2021', '97M', 100000, 'ZBJoy Games', 'https://play-lh.googleusercontent.com/bTHlqnuZl9kHQgsO_RFxe1_tJuSxoXmoWe-lRQWwQLfRogOTBT-om0W8XZHjOhsAmJk=s180-rw', 'Rated for 7+\nImplied Violence'),
('A76', 'Top Eleven 2021: Be a Soccer Manager', 0, 4.6, 'April 9, 2021', '110M', 50000000, 'Nordeus', 'https://play-lh.googleusercontent.com/LNCKgYdhGCcS9rHrYAZMGCJwROgrYK32b36lq8jrA58rvx7yOUV7KawIQG3lvQ0misY=s180-rw', 'Rated for 3+'),
('A77', 'Mighty Party: Magic Arena', 0, 3.8, 'April 9, 2021', '66M', 5000000, 'PANORAMIK GAMES LTD', 'https://play-lh.googleusercontent.com/Y9nPjad0UfCSp9wlt8iv08r8qeMXb8uyF37M2hMS6Ui--vs7-JmQt-tWyj8-_lJwHg=s180-rw', 'Rated for 12+\nModerate Violence, Sexual Innuendo'),
('A78', 'Ngôi Sao Thời Trang 360Mobi', 0, 4.1, 'October 23, 2019', '96M', 5000000, 'VNG Game Publishing', 'https://play-lh.googleusercontent.com/pbv6ed4E1_m3OTZEEJU7vPNWVx0eoNvV4kEYtGMuuEr2roiJLKEncM5CG7Xn8vJYq8I=s180-rw', 'Rated for 18+\nSex'),
('A79', 'ILLUSION CONNECT', 0, 4.6, 'April 16, 2021', '36M', 1000000, 'Superprism Technology Co., Ltd', 'https://play-lh.googleusercontent.com/7NSohrcpoBK3km40lmIJsJZD40YiEUCx7RGXySuJdkWgjI_ed3Za8QFHIvjmhwBfhxQ=s180-rw', 'Rated for 12+\nSexual Innuendo'),
('A8', 'hoàng hậu cát tường', 0, 4.3, 'December 21, 2020', '94M', 1000000, 'Hoang Thuy Linh', 'https://play-lh.googleusercontent.com/RNyDk_nNJymrr1fjHAhbGMuV5hFuAte-P87ubVYVyULdHTc2y-ltE0tf-GDyyuEhPxU=s180-rw', 'Rated for 3+'),
('A80', 'Pokémon GO', 0, 4.1, 'April 15, 2021', '69M', 100000000, 'Niantic, Inc.', 'https://play-lh.googleusercontent.com/nK_-VeI5OLlQYOucqEMOjsmAa_xgkxyZw4QKWDI4jk0crWYuZyi4wxhcqrGgc14E7g=s180-rw', 'Rated for 7+\nMild Violence'),
('A81', 'Heroic Expedition', 0, 4, 'April 7, 2021', '75M', 50000, 'DHGAMES', 'https://play-lh.googleusercontent.com/kNnFremQ6mgR1cjuGMlsZFTf3mFymy-jqUdUszAysHbav__zM59xNh3uPGO6hhn7Q00=s180-rw', 'Rated for 7+\nMild Violence'),
('A82', 'Vương Bài Chiến Cơ', 0, 4.7, 'March 16, 2021', '100M', 100000, 'PhoneCool', 'https://play-lh.googleusercontent.com/swr95nRsGNZTXrzMKe1RLnv1C7DmpcNcg1mABLkHRP6jydpy1QO20bEifSk6mMUj5dc=s180-rw', 'Rated for 3+'),
('A83', 'Idle Heroes', 0, 4.5, 'March 11, 2021', '391M', 10000000, 'DHGAMES', 'https://play-lh.googleusercontent.com/a3e4zzK9Xea2y9eYW-drG8CCOPvAjKzveM5wLlc1V9HPfVP00YnfA2NlwAOz59SSBRti=s180-rw', 'Rated for 7+\nMild Violence'),
('A84', 'World of Tanks Blitz PVP MMO 3D tank game for free', 0, 4.2, 'April 16, 2021', '120M', 100000000, 'Wargaming Group', 'https://play-lh.googleusercontent.com/8K2IjeQcN8E4unTGFqWDaSUSBxGtVlr8_potdZ58u0wNyHceQnVC5U7VzI65kT3kLCo=s180-rw', 'Rated for 7+\nImplied Violence'),
('A85', 'Last Shelter: Survival', 0, 4.3, 'April 8, 2021', '69M', 10000000, 'Long Tech Network Limited', 'https://play-lh.googleusercontent.com/DVGGdf1jXL0dQQzUCe_TvYhSysFdL_imCgZtAMdlY7eWjUAF1x4UzZtkX1KAXiXISQ=s180-rw', 'Rated for 12+\nModerate Violence'),
('A86', 'Three Kingdoms:Heroes of Legend', 0, 3.9, 'March 3, 2021', '69M', 100000, 'KunYue Game', 'https://play-lh.googleusercontent.com/-zQapMKwHdaskKCxPZO7jnz0GrN7pD9HDmG6TH1tq7oozq5jm9CF9Xh1Bl-0E7-gz2o=s180-rw', 'Rated for 3+'),
('A87', 'NPLAY: Game Bài Online, Tiến Lên, Mậu Binh, Xì Tố', 0, 3.7, 'March 29, 2021', '101M', 1000000, 'NGame Company', 'https://play-lh.googleusercontent.com/8xGgeU22hR_xLieedOADNUmXCy5kuP9zJqkstEqRIoZqjSrITe88LiudB6Wmk8V2lg=s180-rw', 'Rated for 12+\nGambling'),
('A88', 'Gunship Battle Total Warfare', 0, 4.2, 'April 6, 2021', '101M', 5000000, 'JOYCITY Corp.', 'https://play-lh.googleusercontent.com/1rm1zwoJnOdvz7aGlLvj1oBepNLxAxqlCeMUG2BBazvTXqutweehv6XtBarvqw2HNw=s180-rw', 'Rated for 12+\nModerate Violence'),
('A89', 'Captain Tsubasa (Flash Kicker): Dream Team', 0, 4.1, 'April 5, 2021', '92M', 5000000, 'KLab', 'https://play-lh.googleusercontent.com/PPFnDfmAG1ChmI3Ian_UwkerrjVRNfJISAg9vQwTzCcEZH9WXAg78r6Rrn_LknfcCxI=s180-rw', 'Rated for 3+'),
('A9', 'Warpath', 0, 4.4, 'March 29, 2021', '71M', 5000000, 'LilithGames', 'https://play-lh.googleusercontent.com/J6Pp5FAnI3EzO82ScPjsHPjUA-Qd8wMOpdi3NIOye2Sr9mj2_rzXSdORR3fY2ziOLQ=s180-rw', 'Rated for 12+\nModerate Violence'),
('A90', 'Kỷ Nguyên Triệu Hồi', 0, 4.5, 'March 5, 2021', '113M', 100000, 'Sungame Vietnam', 'https://play-lh.googleusercontent.com/CdMqqS2cnXSD--UIaTbcgS1X3QiXUz89-YYjxX3OwmFukGSssx2jvX74Xwgi1ux3hC0=s180-rw', 'Rated for 12+\nModerate Violence'),
('A91', 'KOF\'98 UM OL', 0, 4.1, 'March 15, 2021', '87M', 5000000, 'FingerFun Limited.', 'https://play-lh.googleusercontent.com/qd39GjS-m1DbztLfOoP4pGbWmsmetVE3fG2g4rp_j_0Be0Cfp3us4gCZ8hpjSCYSYjo6=s180-rw', 'Rated for 12+\nSexual Innuendo, Gambling'),
('A92', 'Gunny Mobi - Bắn Gà Teen & Cute', 0, 3.6, 'April 25, 2020', '92M', 10000000, 'VNG Game Publishing', 'https://play-lh.googleusercontent.com/7GUfua49ucDHLqA-8imI9ZSefYtUXGTN5aZsizaSi18tYkR3el0WBT2XbichWC9J1ID5=s180-rw', 'Rated for 7+\nMild Violence'),
('A93', 'Ngạo Thế Phi Tiên', 0, 4.5, 'April 16, 2021', '76M', 100000, 'MOC GAME', 'https://play-lh.googleusercontent.com/8jTh7XfDqQB7bmwhG4SD2eAKseK18_W1cSIH1QwfKbyysdd9wVE5E4sYo3WbJ8mZV2s=s180-rw', 'Rated for 12+\nModerate Violence'),
('A94', 'Art of War: Legions', 0, 4.5, 'April 7, 2021', '140M', 10000000, 'Fastone Games HK', 'https://play-lh.googleusercontent.com/MQwFF3iMbezpwhOyoKinhC4R3HdI5rgfxbP-8CZvgG0_97pKQt6QgLGd4ri0ej_UrSc=s180-rw', 'Rated for 3+'),
('A95', 'EverMerge', 0, 4.4, 'April 7, 2021', '120M', 5000000, 'Big Fish Games', 'https://play-lh.googleusercontent.com/_DmLDLUHtcLZyJQe2l351NcfQBAFIdTiNiUUfj5NJn9V0v7iguEI6nYHDYlCIrGtrA=s180-rw', 'Rated for 3+'),
('A96', '삼국지Global', 0, 4.3, 'April 6, 2021', '89M', 100000, '4399 KOREA', 'https://play-lh.googleusercontent.com/n7Tl53u9CSPmPn0l4M0spoHYuU_gAFtfxrkRBOFJ9j0fS2iaXcoJv2RqmoaZQTM_wsQ=s180-rw', 'Rated for 12+\nModerate Violence'),
('A97', 'Might & Magic: Era of Chaos', 0, 4.2, 'April 13, 2021', '51M', 1000000, 'Ubisoft Mobile Games', 'https://play-lh.googleusercontent.com/2hbPGkYJ4uNpplCwV9bOTkantwm7007ZhgfL78RpEcCMvTEpNmFP14dKDyOGY0J9hTw=s180-rw', 'Rated for 12+\nModerate Violence'),
('A98', 'World War Heroes: WW2 FPS', 0, 4.5, 'April 13, 2021', '69M', 50000000, 'Azur Interactive Games Limited', 'https://play-lh.googleusercontent.com/lHKqAt-PZSz-7ifRyOKr6D8Y2xal4rmhpA1_qKRUpCBLlV-QlZWLuOcG8Li9mcqJqA=s180-rw', 'Rated for 16+\nStrong Violence'),
('A99', 'Art of Conquest: Dark Horizon', 0, 3.9, 'April 13, 2021', '67M', 10000000, 'LilithGames', 'https://play-lh.googleusercontent.com/hKxGt45x4aCbb3u_iu4lT9pPs8c6OkebkrwVTP4oADhM_n0LJjYBsrT1Tx14rqFxrA=s180-rw', 'Rated for 7+\nMild Violence');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
