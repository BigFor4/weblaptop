-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 07, 2021 lúc 01:30 PM
-- Phiên bản máy phục vụ: 5.7.33-cll-lve
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `wbxleyue_laptop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `likeproduct`
--

CREATE TABLE `likeproduct` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `likeproduct`
--

INSERT INTO `likeproduct` (`id`, `user_id`, `product_id`, `status`) VALUES
(1, 133, 10, 1),
(2, 182, 6, 1),
(3, 133, 22, 1),
(4, 133, 38, 1),
(5, 133, 13, 1),
(6, 0, 7, 1),
(7, 0, 9, 1),
(8, 0, 7, 1),
(9, 8, 2, 1),
(10, 1, 4, 1),
(13, 1, 3, 1),
(16, 1, 10, 1),
(17, 1, 11, 1),
(18, 1, 12, 1),
(19, 1, 15, 1),
(20, 1, 8, 1),
(22, 1, 11, 1),
(23, 1, 33, 1),
(24, 1, 4, 1),
(25, 1, 4, 1),
(27, 1, 4, 1),
(31, 1, 6, 1),
(32, 8, 2, 1),
(33, 8, 3, 1),
(34, 8, 4, 1),
(35, 8, 5, 1),
(36, 8, 12, 1),
(37, 9, 4, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ngaydat` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `user_id`, `ngaydat`, `status`, `created_at`) VALUES
(4, 1, '0000-00-00 00:00:00', 1, '2021-11-05 04:42:19'),
(6, 8, '0000-00-00 00:00:00', 1, '2021-11-05 05:53:57'),
(5, 1, '0000-00-00 00:00:00', 1, '2021-11-05 04:46:36'),
(7, 8, '0000-00-00 00:00:00', 1, '2021-11-05 05:54:06'),
(9, 5, '0000-00-00 00:00:00', 0, '2021-11-05 06:33:00'),
(10, 5, '0000-00-00 00:00:00', 0, '2021-11-05 06:33:06'),
(11, 4, '0000-00-00 00:00:00', 0, '2021-11-05 07:19:23'),
(12, 1, '0000-00-00 00:00:00', 1, '2021-11-05 07:20:14'),
(13, 4, '0000-00-00 00:00:00', 0, '2021-11-05 17:41:27'),
(14, 1, '0000-00-00 00:00:00', 3, '2021-11-06 08:19:08'),
(15, 8, '0000-00-00 00:00:00', 1, '2021-11-06 18:06:09'),
(16, 8, '0000-00-00 00:00:00', 1, '2021-11-06 18:06:50'),
(17, 8, '0000-00-00 00:00:00', 3, '2021-11-06 18:06:55'),
(18, 8, '0000-00-00 00:00:00', 3, '2021-11-06 18:06:59'),
(19, 1, '0000-00-00 00:00:00', 2, '2021-11-06 18:15:13'),
(20, 1, '0000-00-00 00:00:00', 0, '2021-11-07 04:05:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order-details`
--

CREATE TABLE `order-details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `order-details`
--

INSERT INTO `order-details` (`id`, `order_id`, `product_id`, `price`, `quantity`) VALUES
(4, 4, 3, 33990000, 0),
(3, 3, 3, 33990000, 0),
(5, 5, 31, 28490000, 0),
(6, 6, 2, 12490000, 0),
(7, 7, 5, 19190000, 0),
(8, 8, 2, 12490000, 0),
(9, 9, 2, 12490000, 0),
(10, 10, 2, 12490000, 0),
(11, 11, 2, 12490000, 0),
(12, 12, 2, 12490000, 0),
(13, 13, 2, 12490000, 0),
(14, 14, 5, 19190000, 0),
(15, 15, 3, 33990000, 0),
(16, 16, 4, 22990000, 0),
(17, 17, 12, 1800000, 0),
(18, 18, 5, 19190000, 0),
(19, 19, 3, 33990000, 0),
(20, 20, 3, 33990000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `cardnumber` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `expires` varchar(100) NOT NULL,
  `CVC` varchar(5) NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '2',
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `payment`
--

INSERT INTO `payment` (`id`, `user_id`, `order_id`, `cardnumber`, `name`, `expires`, `CVC`, `price`, `status`, `created_at`) VALUES
(2, 1, 4, '111111111111111111', 'dang Nguyen', '11/2021', '123', 33990000, 1, '2021-11-05 04:42:54'),
(3, 1, 5, '111111111111111111', 'Duong Nguyen', '11/2022', '321', 29900000, 1, '2021-11-06 08:11:19'),
(4, 1, 12, '1111111111111111111', 'nguyen thai duong', '11/2022', '333', 12490000, 1, '2021-11-06 08:12:04'),
(5, 1, 14, '11111111111111111', 'nguyen thai duong', '11/2023', '334', 19190000, 3, '2021-11-06 08:19:19'),
(6, 8, 6, '111111111111111111', 'nguyen thai duong', '11/2022', '333', 12490000, 1, '2021-11-06 18:06:21'),
(7, 8, 7, '111111111111111111', 'nguyen thai duong', '11/2021', '321', 19190000, 1, '2021-11-06 18:06:34'),
(8, 8, 15, '111111111111111111', 'Duong Nguyen', '11/2022', '321', 33990000, 1, '2021-11-06 18:06:45'),
(9, 8, 16, '111111111111111111', 'nguyen thai duong', '11/2021', '321', 22990000, 1, '2021-11-06 18:07:12'),
(10, 8, 18, '111111111111111111', 'test genre', '12/2024', '345', 19190000, 3, '2021-11-06 18:07:32'),
(11, 8, 17, '111111111111111111', 'nguyen thai duong', '11/2025', '555', 2000000, 3, '2021-11-06 18:07:48'),
(12, 1, 19, '111111111111111111', 'Duong Nguyen', '11/2022', '321', 33990000, 2, '2021-11-06 18:15:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `image` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(50) NOT NULL,
  `cpu` varchar(100) NOT NULL,
  `tintuc` int(11) NOT NULL DEFAULT '0',
  `manhinh` varchar(100) NOT NULL,
  `card` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `giamgia` float NOT NULL,
  `trongluong` varchar(20) NOT NULL,
  `kichthuoc` varchar(100) NOT NULL,
  `xuatxu` varchar(100) NOT NULL,
  `baohanh` varchar(50) NOT NULL,
  `hedieuhanh` varchar(50) NOT NULL,
  `thongtinkhac` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `showmenu` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '2',
  `motatintuc` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `type`, `image`, `ram`, `cpu`, `tintuc`, `manhinh`, `card`, `price`, `giamgia`, `trongluong`, `kichthuoc`, `xuatxu`, `baohanh`, `hedieuhanh`, `thongtinkhac`, `showmenu`, `status`, `motatintuc`, `created_at`, `updated_at`) VALUES
(2, 'Asus Vivobook X413JA ', 4, 'https://laptopworld.vn/media/product/9005_asus_vivobook_x413ja__4.jpg', '8gb', 'Intel Core i3-1005G1 (1.20GHz up to 3.40GHz, 4MB)', 1, '14 inch FHD (1920 x 1080)', '1000', 12490000, 12490000, '1.40kg', '14 inch FHD (1920 x 1080)', 'Bahrain', '18', 'Window 10', '128GB NVMe SSD   ', 1, 0, 'Gram lÃ  dÃ²ng laptop Ä‘áº§u tiÃªn Ä‘Æ°á»£c LG giá»›i thiá»‡u á»Ÿ thá»‹ trÆ°á»ng Viá»‡t Nam. Trong Ä‘Ã³, model 14 inch cÃ³ hai phiÃªn báº£n vá»›i giÃ¡ bÃ¡n láº§n lÆ°á»£t 25,2 (Non-OS) vÃ  28,2 triá»‡u Ä‘á»“ng (Windows 10). Sáº£n pháº©m cÃ³ má»©c giÃ¡ tháº¥p hÆ¡n Dell XPS nhÆ°ng cao hÆ¡n má»™t sá»‘ laptop kiá»ƒu dÃ¡ng', '2021-10-05 12:12:01', '2021-11-05 12:12:01'),
(3, 'Acer Nitro 5 AN515-45-R86D', 2, 'https://laptopworld.vn/media/product/9632_', '8gb', 'AMD Ryzenï¿½ 7-5800H (3.3GHz up to 4.4GHz, 16MB)', 1, '15.6 inch FHD(1920 x 1080) IPS 144Hz slim bezel LCD', 'NVIDIAï¿½ GeForce RTXï¿½ 3060 6GB GDDR6', 33990000, 33990000, ' 2.2 kg', '15.6 inch FHD(1920 x 1080) IPS 144Hz slim bezel LCD', 'Japan', '18', 'Window 10', '512GB NVMe SSD ', 1, 0, 'Gram lÃ  dÃ²ng laptop Ä‘áº§u tiÃªn Ä‘Æ°á»£c LG giá»›i thiá»‡u á»Ÿ thá»‹ trÆ°á»ng Viá»‡t Nam. Trong Ä‘Ã³, model 14 inch cÃ³ hai phiÃªn báº£n vá»›i giÃ¡ bÃ¡n láº§n lÆ°á»£t 25,2 (Non-OS) vÃ  28,2 triá»‡u Ä‘á»“ng (Windows 10). Sáº£n pháº©m cÃ³ má»©c giÃ¡ tháº¥p hÆ¡n Dell XPS nhÆ°ng cao hÆ¡n má»™t sá»‘ laptop kiá»ƒu dÃ¡ng', '2021-10-05 10:27:35', '2021-11-05 10:27:35'),
(4, 'Dell Vostro 3400 V4I7015W', 1, 'https://laptopworld.vn/media/product/7760_dell_vostro_14_3400_3.jpg', '8gb', 'Intel® Core™ i7-1165G7 (2.80GHz up to 4.70GHz, 12MB)', 0, '14-inch, FHD (1920x1080), 60 Hz, Anti-Glare', 'NVIDIA GeForce MX330 2GB DDR5', 22990000, 22990000, '1.64 kg', '14-inch, FHD (1920x1080), 60 Hz, Anti-Glare', 'Jordan', '12', 'Window 10', 'Ổ cứng: 512GB M.2 PCIe NVMe SSD', 1, 0, '', '2021-10-04 15:26:22', '2021-11-04 15:26:22'),
(5, 'Dell Inspiron 15 3511 P112F001BBL', 1, 'https://laptopworld.vn/media/product/9403_', '8gb', 'Intelï¿½ Core ï¿½ i5-1135G7 (2.40GHz up to 4.20GHz, 8MB Cache)', 1, '15.6-inch FHD (1920 x 1080) WVA Anti-Glare', ' Intel Iris Xe Graphics', 19190000, 19190000, '1.85kg', '15.6-inch FHD (1920 x 1080) WVA Anti-Glare', 'Australia', '15', 'Window 10', '? c?ng: 512GB M.2 PCIe NVMe SSD ', 1, 0, 'Äá»ƒ Ä‘Ã¡p á»©ng phong cÃ¡ch â€œlÃ m viá»‡c laiâ€ Ä‘ang dáº§n trá»Ÿ nÃªn phá»• biáº¿n sau Ä‘áº¡i dá»‹ch Covid-19, DELL Ä‘Ã£ ra máº¯t bá»™ Ä‘Ã´i ExpertBook B5 & ExpertBook B5 Flip vá»«a má»ng nháº¹, trang nhÃ£, vá»«a sá»Ÿ há»¯u nhá»¯ng trang bá»‹ chuyÃªn nghiá»‡p, máº¡nh máº½ hiáº¿m cÃ³.', '2021-09-05 12:13:07', '2021-11-05 12:13:07'),
(6, 'Dell Inspiron 14 7400 N4I5134W', 1, 'https://laptopworld.vn/media/product/9059_', '8gb', 'Intel Core i5-1135G7 (2.40GHz up to 4.20GHz, 8MB Cache)', 0, '14.5Inch QHD(2560 x 1600) IPS 300nits 100%sGRB', 'NVIDIA GeForce MX350 2GB GDDR5', 27890000, 27890000, '1.259 kg', '14.5Inch QHD(2560 x 1600) IPS 300nits 100%sGRB', 'Azerbaijan', '16', 'Window 10', 'Ổ cứng: 512GB M.2 PCIe NVMe SSD', 1, 1, '', '2021-09-04 15:29:45', '2021-11-04 15:29:45'),
(7, 'Dell Inspiron 7405', 1, 'https://laptopworld.vn/media/product/8235_dell_inspiron_7405.jpg', '8gb', 'CPU: AMD Ryzen™ R5-4500U (2.30GHz up to 4.00GHz, 8MB Cache)', 0, '14.0\" FHD(1920 x 1080)WVA, 220nits, 45%NTSC, xoay gập, cảm ứng', 'AMD Radeon™ Graphics', 19890000, 19890000, '1.6kg', '14.0\" FHD(1920 x 1080)WVA, 220nits, 45%NTSC, xoay gập, cảm ứng', 'Belarus', '18', 'Linux', '\r\nỔ cứng: 256GB m.2 NVMe SSD', 1, 1, '', '2021-11-04 15:31:52', '2021-11-04 15:31:52'),
(8, 'Dell Vostro 3500 V3500C', 1, 'https://laptopworld.vn/media/product/9597_', '8gb', 'Intel Core i5-1135G7 (2.40GHz up to 4.20GHz, 8M Cache)', 0, '15.6 inch FHD (1920 x 1080) WVA Anti-glare 60Hz', 'NVIDIA GeForce MX330 2GB GDDR5', 21490000, 21490000, '1.78 Kg', '15.6 inch FHD (1920 x 1080) WVA Anti-glare 60Hz', 'Azerbaijan', '17', 'Windows 7', 'Ổ cứng: 512GB M.2 PCIe NVMe SSD', 1, 1, '', '2021-08-04 15:34:17', '2021-11-04 15:34:17'),
(9, 'Asus ZenBook Duo 14 UX482EA-KA274T', 4, 'https://laptopworld.vn/media/product/9595_asus_zenbook_duo_14_ux482_5.jpg', '8gb', 'Intel® Core™ i5-1135G7 (2.40GHz up to 4.20GHz, 8MB Cache)', 0, '14.0 inch FHD(1920 x 1080) IPS Touch, LED Backlit, 400nits, 100%sRGB, Anti-glare display', 'Intel Iris Xᵉ Graphics', 31490000, 31490000, '1.62 kg', '14.0 inch FHD(1920 x 1080) IPS Touch, LED Backlit, 400nits, 100%sRGB, Anti-glare display', 'Bangladesh', '18', 'Window 10', '12345678', 1, 1, '', '2021-11-04 15:38:08', '2021-11-04 15:38:08'),
(10, 'Asus VivoBook Flip 14 TM420UA-EC024T', 4, 'https://laptopworld.vn/media/product/9601_asus_vivobook_flip_14_tm420ia_ec031t_10.jpg', '8gb', 'AMD Ryzen™ 7-5700U (1.80GHz up to 4.30GHz, 8MB Cache)', 0, ' 14.0 inch FHD (1920 x 1080) Touch 250nits', 'AMD Radeon Graphics', 2000000, 1800000, '1.5kg', ' 14.0 inch FHD (1920 x 1080) Touch 250nits', 'Bahamas', '7', 'Window 10', 'Ổ cứng: 512GB M.2 NVMe PCIe 3.0 SSD', 1, 0, '', '2021-11-04 16:00:29', '2021-11-04 16:00:29'),
(11, 'Asus VivoBook X515EA-BR1409T', 4, 'https://laptopworld.vn/media/product/9602_asus_vivobook_x515ea_x__m.jpg', '16GB', 'Intel® Core™ i5-1135G7 (2.40GHz up to 4.20GHz, 8MB)', 0, '15.6-inch HD(1366 x 768) 200nits NTSC 45% 16:9', 'Intel Iris Xe Graphics', 17590000, 17590000, '1.80 kg', '15.6-inch HD(1366 x 768) 200nits NTSC 45% 16:9', 'Bangladesh', '18', 'Window 10', 'Ổ cứng: 512GB M.2 NVMe PCIe 3.0 SSD', 1, 0, '', '2021-07-04 16:00:20', '2021-11-04 16:00:20'),
(12, 'Asus ZenBook 14 UX425EA-KI474T', 4, 'https://laptopworld.vn/media/product/8942_zenbook_14_ux425ja_10.jpg', '8gb', ' Intel® Core™ i5-1135G7 (2.40GHz up to 4.20GHz, 8MB Cache)', 0, '14 inch FHD(1920 x 1080) WV Anti-Glare 400nits', 'Intel Iris Xᵉ Graphics', 2000000, 1800000, '1.17 kg', '14 inch FHD(1920 x 1080) WV Anti-Glare 400nits', 'Azerbaijan', '16', 'Window 8', 'Ổ cứng: 512GB PCIe NVMe 3.0x2 M.2 SSD', 1, 0, '', '2021-10-04 16:00:00', '2021-11-04 16:00:00'),
(13, 'HP 240 G8 518V7PA', 3, 'https://laptopworld.vn/media/product/9525_', '8gb', 'Intel® Core™ i5-1135G7 (2.40GHz up to 4.20GHz, 8MB Cache)', 0, '14.0 inch FHD (1920 x 1080), IPS Anti-glare WLED 250nits eDP micro-edge 45% NTSC', 'Intel® Iris Xe Graphics', 18590000, 18590000, '1.47 kg', '14.0 inch FHD (1920 x 1080), IPS Anti-glare WLED 250nits eDP micro-edge 45% NTSC', 'Austria', '8', 'Window 10', 'Ổ cứng: 512GB M.2 SSD', 1, 1, '', '2021-11-04 16:08:34', '2021-11-04 16:08:34'),
(14, 'HP 14s-dq2550TU 470D5PA', 3, 'https://laptopworld.vn/media/product/9157_hp_14s_dq_4.jpg', '8gb', 'Intel® Core™ i7-1165G7 (2.80GHz up to 4.70GHz, 12MB Cache)', 0, '14inch (1366 x 768) micro-edge, BrightView, 250 nits, 45% NTSC', 'Intel® Iris® Xe Graphics', 20290000, 20290000, 'Intel® Iris® Xe Grap', '14inch (1366 x 768) micro-edge, BrightView, 250 nits, 45% NTSC', 'Bahrain', '18', 'Window 10', 'Ổ cứng: 512GB PCIe NVMe M.2 SSD', 1, 1, '', '2021-11-04 16:10:24', '2021-11-04 16:10:24'),
(15, 'HP 14- CF2033WM', 3, 'https://laptopworld.vn/media/product/9458_hp_14__cf2033wm_6.jpg', '8gb', 'Intel® Pentium N5030 (1.10GHz up to 3.10GHz, 4MB Cache)', 0, '14inch HD(1366 x 768), micro-edge, BrightView, 220 nits, 45% NTSC', 'Intel® UHD Graphics 605', 10590000, 10590000, '1.47kg', '14inch HD(1366 x 768), micro-edge, BrightView, 220 nits, 45% NTSC', 'Aruba', '17', 'Window 10', 'Ổ cứng: 128 GB SATA M.2 SSD', 1, 0, '', '2021-11-04 16:12:02', '2021-11-04 16:12:02'),
(16, 'HP 15s-du1105TU 2Z6L3PA', 3, 'https://laptopworld.vn/media/product/9449_hp_15s_du1105tu_2z6l3pa_1.jpg', '8gb', 'Intel® Core™ i3-10110U (2.10GHz up to 4.10GHz, 4MB Cache)', 0, '15.6Inch HD(1366 × 768) Anti-Glare WLED-backlit', 'Intel UHD Graphics', 2000000, 1800000, ' 1.74 kg', '15.6Inch HD(1366 × 768) Anti-Glare WLED-backlit', 'Bahrain', '10', 'Window 10', 'Ổ cứng: 256GB M.2 PCIe NVMe SSD', 1, 0, '', '2021-11-04 16:13:29', '2021-11-04 16:13:29'),
(17, 'HP 14s-fq1066AU 4K0Z6PA', 3, 'https://laptopworld.vn/media/product/8603_', '8gb', 'AMD Ryzen 5-5500U (2.10GHz up to 4.00GHz , 8MB Cache)', 0, '14 inch HD (1366 x 768)', 'AMD Radeon Vega Graphics', 16890000, 16890000, '1.47kg', '14 inch HD (1366 x 768)', 'Bangladesh', '18', 'Window 10', 'Ổ cứng: 256GB PCIe NVMe SSD', 1, 0, '', '2021-11-04 16:14:56', '2021-11-04 16:14:56'),
(18, 'HP 15s-fq2556TU 46M24PA', 3, 'https://laptopworld.vn/media/product/8721_hp_15s_fq2556tu__4.jpg', '8gb', 'Intel® Core i7-1165G7 (2.80GHz up to 4.70GHz, 12MB Cache)', 0, '15.6 inch FHD(1920x1080) IPS 250nits 45%NTSC', 'Intel® Iris® Xe Graphics', 2000000, 1800000, '1.7Kg', '15.6 inch FHD(1920x1080) IPS 250nits 45%NTSC', 'Belgium', '18', 'Window 10', 'Ổ cứng: 512GB PCIe® NVMe™ M.2 SSD', 1, 0, '', '2021-11-04 16:16:21', '2021-11-04 16:16:21'),
(19, 'Acer TravelMate B3 ', 2, 'https://laptopworld.vn/media/product/9644_acer_travelmate_b3_tmb311_1.jpg', '8gb', 'Intel® Pentium® Silver N5030 (1.10GHz up to 3.10GHz, 4MB Cache)', 0, '11.6 inch HD (1366 x 768) Acer ComfyView LCD, 60Hz, Acer ComfyView LED-backlit TFT LCD', 'Intel®UHD Graphics 605', 11000000, 11000000, '1.4 kg', '11.6 inch HD (1366 x 768) Acer ComfyView LCD, 60Hz, Acer ComfyView LED-backlit TFT LCD', 'Aruba', '18', 'Window 10', 'Ổ cứng: 256GB PCIe NVMe SSD cắm sẵn', 1, 0, '', '2021-10-04 16:18:50', '2021-11-04 16:18:50'),
(20, 'Acer Aspire 5', 2, 'https://laptopworld.vn/media/product/9496_acer_aspire_5_a514_54_36yj__2.jpg', '8gb', 'Intel® Core™ i5-1135G7 (2.40GHz up to 4.20GHz, 8MB Cache)', 0, '14.0 inch FHD(1920 x 1080) Acer ComfyView™ IPS LED LCD, 60Hz', 'Intel® Iris® Xᵉ Graphics', 2000000, 1800000, '1.45kg', '14.0 inch FHD(1920 x 1080) Acer ComfyView™ IPS LED LCD, 60Hz', 'Bahamas', '17', 'Linux', 'Ổ cứng: 256GB PCIe NVMe SSD', 1, 0, '', '2021-07-04 16:20:26', '2021-11-04 16:20:26'),
(21, 'Acer Swift 3X ', 2, 'https://laptopworld.vn/media/product/7201_acer_swift_3x__5.jpg', '8gb', 'Intel® Core™ i5-1135G7 (2.40GHz upto 4.2Ghz, 8MB Cache)', 0, '14inch FHD(1920 x 1080) IPS panel, 60Hz', 'Intel® Iris® Xe Max Graphics (DG1)', 26990000, 25190000, '1.37 kg', '14inch FHD(1920 x 1080) IPS panel, 60Hz', 'Bahamas', '18', 'Window 10', 'Ổ cứng: 1024GB PCIe NVMe SSD', 1, 1, '', '2021-10-04 16:27:43', '2021-11-04 16:27:43'),
(22, 'Acer Swift X SFX14-41G-R61A NX.AU3SV.001', 2, 'https://laptopworld.vn/media/product/8970_acer_swift_x_sfx14_41g_4.jpg', '8gb', 'AMD Ryzen 5-5600U (2.3GHz upto 4.2GHz, 16MB Cache)', 0, '14.0 inch FHD(1920 x 1080) IPS panel, 60Hz', 'NVIDIA GeForce RTX 3050 Ti 4GB GDDR6', 29990000, 28490000, '1.39Kg', '14.0 inch FHD(1920 x 1080) IPS panel, 60Hz', 'Antigua and Barbuda', '18', 'Window 10', 'Ổ cứng: 1TB PCIe NVMe SSD', 1, 2, '', '2021-09-04 16:29:17', '2021-11-04 16:29:17'),
(23, 'Dell Latitude 9420 70261782', 1, 'https://laptopworld.vn/media/product/9426_dell_latitude_9420__4.jpg', '8gb', 'Intel Core i7-1185G7 (3.00GHz up to 4.80GHz, 12MB Cache)', 1, '14.0 inch FHD+(1920 x 1200) Non-Touch', 'Intel Iris Xe Graphics', 60990000, 59990000, '1.27 kg', '14.0 inch FHD+(1920 x 1200) Non-Touch', 'Germany', '18', 'Window 10', '? c?ng: 512GB M.2 PCIe NVMe SSD ', 1, 1, 'MÃ¡y tÃ­nh xÃ¡ch tay cao cáº¥p dÃ nh cho doanh nhÃ¢n Ä‘Ã²i há»i pháº£i Ä‘Ã¡p á»©ng Ä‘Æ°á»£c cÃ¡c tiÃªu chÃ­ an toÃ n, á»•n Ä‘á»‹nh vÃ  phÃ¹ há»£p vá»›i háº§u háº¿t cÃ¡c tÃ¡c vá»¥ vÄƒn phÃ²ng hiá»‡n Ä‘áº¡i. VÃ  Dell Latitude 7420 chÃ­nh lÃ  cÃ¢u tráº£ lá»i dÃ nh cho há».', '2021-11-05 12:18:55', '2021-11-05 12:18:55'),
(24, 'Dell XPS 15 9500', 1, 'https://laptopworld.vn/media/product/7959_', '8gb', 'Intel Core i9-10885H (16MB cache, 2.40Ghz Up to 5.30GHz)', 0, '15.6\" FHD+ (1920 x 1200) InfinityEdge Non-Touch Anti-Glare 500-Nit Display', 'VGA Nvidia Nvidia GTX 1650Ti 4GB DDR6', 56590000, 56590000, '2.05 kg', '15.6\" FHD+ (1920 x 1200) InfinityEdge Non-Touch Anti-Glare 500-Nit Display', 'Barbados', '18', 'Window 10', 'Ổ cứng: 1TB SSD', 1, 1, '', '2021-11-04 16:32:44', '2021-11-04 16:32:44'),
(25, 'Dell XPS 13 9310 2 in 1 JGNH62', 1, 'https://laptopworld.vn/media/product/8868_dell_xps_13_9310_70231343_1.jpg', '8gb', 'Intel® Core™ i7-1165G7 (2.80GHz up to 4.70GHz, 12MB Cache)', 0, '13.4-inch UHD (3840 x 2400) IPS, 60 Hz, anti-reflective, InfinityEdge, 90% DCI-P3 typical, 500 nits,', 'Intel® Iris® Xe Graphics', 60990000, 55990000, '1.27 kg', '13.4-inch UHD (3840 x 2400) IPS, 60 Hz, anti-reflective, InfinityEdge, 90% DCI-P3 typical, 500 nits,', 'Ethiopia', '18', 'Window 10', 'Ổ cứng: 512GB M.2 PCIe NVMe SSD', 1, 2, '', '2021-09-04 16:34:21', '2021-11-04 16:34:21'),
(26, 'Dell XPS 17 9710 ', 1, 'https://laptopworld.vn/media/product/9051_dell_xps_17_9710_3.jpg', '8gb', 'Intel® Core™ i7-11800H (2.30GHz up to 4.60GHz, 24MB Cache)', 0, '17.0 inch FHD+ (1920 x 1200) InfinityEdge Non-Touch Anti-Glare 500-Nit Display', 'NVIDIA® GeForce RTX™ 3050 4GB GDDR6 [60W]', 55990000, 54990000, ' 2.42 kg', '17.0 inch FHD+ (1920 x 1200) InfinityEdge Non-Touch Anti-Glare 500-Nit Display', 'Gabon', '18', 'Window 10', 'Ổ cứng: 512GB M.2 PCIe NVMe SSD', 1, 2, '', '2021-07-04 16:36:21', '2021-11-04 16:36:21'),
(27, 'Dell XPS 15 9510', 1, 'https://laptopworld.vn/media/product/9050_dell_xps_15_9510_3.jpg', '16GB', 'Intel® Core™ i7-11800H (2.30GHz up to 4.60GHz, 24MB Cache)', 0, '15.6 inch FHD+ (1920 x 1200) InfinityEdge Non-Touch Anti-Glare 500-Nit Display', 'NVIDIA® GeForce RTX™ 3050 Ti 4GB GDDR6', 50990000, 49990000, '1.92 kg', '15.6 inch FHD+ (1920 x 1200) InfinityEdge Non-Touch Anti-Glare 500-Nit Display', 'Germany', '18', 'Window 10', 'Ổ cứng: 512GB M.2 PCIe NVMe SSD', 1, 2, '', '2021-11-04 16:38:16', '2021-11-04 16:38:16'),
(28, 'Dell Latitude 7420 L7420I714NWP512-Alu', 1, 'https://laptopworld.vn/media/product/8858_', '8gb', 'Intel® Core™ i7-1185G7 (3.00GHz up to 4.80GHz, 12MB Cache)', 0, '14 inch FHD (1920x1080) AG, SLP, Non-Touch, ComfortView Plus, WVA, 400nits', 'Intel Iris Xe Graphics', 43790000, 43790000, '1.22 kg', '14 inch FHD (1920x1080) AG, SLP, Non-Touch, ComfortView Plus, WVA, 400nits', 'Aruba', '18', 'Window 10', '512GB M.2 PCIe NVMe SSD', 1, 2, '', '2021-11-04 16:40:08', '2021-11-04 16:40:08'),
(29, 'Dell XPS 17 9700', 1, 'https://laptopworld.vn/media/product/9065_dell_xps_17_9700__5.jpg', '16GB', '17.0 inch FHD+ (1920 x 1200) InfinityEdge Non-Touch Anti-Glare 500-Nit Display', 0, '17.0 inch FHD+ (1920 x 1200) InfinityEdge Non-Touch Anti-Glare 500-Nit Display', '17.0 inch FHD+ (1920 x 1200) InfinityEdge Non-Touch Anti-Glare 500-Nit Display', 49990000, 49990000, ' 2.1 kg', '17.0 inch FHD+ (1920 x 1200) InfinityEdge Non-Touch Anti-Glare 500-Nit Display', 'Algeria', '15', 'Window 10', 'Ổ cứng: 512GB M.2 PCIe NVMe SSD', 1, 2, '', '2021-11-04 16:41:45', '2021-11-04 16:41:45'),
(30, 'Asus Zenbook 14 Q407IQ', 4, 'https://laptopworld.vn/media/product/8928_6219_acer_aspire_7_a715_1.jpg', '8gb', 'AMD Ryzen 5-4500U (2.3GHz up to 4.0GHz, 8MB Cache)', 0, '14 inch Full HD(1920 x 1080)IPS, 90%SRGB', 'NVIDIA GeForce MX350 2GB GDDR5', 18690000, 18690000, '1.15 kg', '14 inch Full HD(1920 x 1080)IPS, 90%SRGB', 'Bahamas', '13', 'Window 10', '256GB M.2 NVMe™ PCIe® SSD (Nâng cấp tối đa 2TB)', 1, 0, '', '2021-11-04 16:25:32', '2021-11-04 16:25:32'),
(31, 'Acer Swift X', 2, 'https://laptopworld.vn/media/product/8970_acer_swift_x_sfx14_41g_5.jpg', '8gb', 'AMD Ryzen 5-5600U (2.3GHz upto 4.2GHz, 16MB Cache)', 0, '14.0 inch FHD(1920 x 1080) IPS panel, 60Hz', 'NVIDIA GeForce RTX 3050 Ti 4GB GDDR6', 29900000, 28490000, '1.39Kg', '14.0 inch FHD(1920 x 1080) IPS panel, 60Hz', 'Belarus', '17', 'Window 10', '? c?ng: 1TB PCIe NVMe SSD   ', 1, 2, '', '2021-11-05 12:16:44', '2021-11-05 12:16:44'),
(32, 'Acer Aspire 3 A315-58-55F3', 2, 'https://laptopworld.vn/media/product/9206_6253_acer_aspire_3_a315_3.jpg', '8gb', 'Intel® Core™ i5-1135G7 (2.40GHz up to 4.20GHz, 8MB Cache)', 0, '15.6 inch FHD(1920 x 1080) Acer ComfyView LED-backlit TFT LCD', 'Intel® Iris® Xe Graphics', 16790000, 16790000, '1.7kg', '15.6 inch FHD(1920 x 1080) Acer ComfyView LED-backlit TFT LCD', 'Antartica', '18', 'Window 10', 'Ổ cứng: 512GB PCIe NVMe SSD (nâng cấp tối đa 2TB HDD và 1TBSSD PCIe NVMe)', 1, 2, '', '2021-11-04 16:22:27', '2021-11-04 16:22:27'),
(33, 'DELL-vs', 1, 'https://vcdn-sohoa.vnecdn.net/2021/01/21/HP-Elite-Folio-Front-Left-Forw-6107-5267-1611217952.jpg', '64GB', 'abc', 0, '1000x1000', '1000', 10000000, 200000, '2kg', '1000x1000', 'Latvia', '18', 'Window 10', 'abcdef', 1, 2, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `type`
--

INSERT INTO `type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dell', '', ''),
(2, 'Acer', '', ''),
(3, 'HP', '', ''),
(4, 'Asus', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `address` varchar(200) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `phone` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `email`, `password`, `role_id`, `address`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nguyen Thai Duong', 'http://windows79.com/wp-content/uploads/2021/02/Thay-the-hinh-dai-dien-tai-khoan-nguoi-dung-mac.png', 'thaiduongngg01@gmail.com', '123456', 1, '90 Le loi', '0396577225', 0, '2021-10-03 19:11:23', '2021-11-07 03:49:04'),
(3, 'Duong Nguyen', 'https://vcdn-sohoa.vnecdn.net/2021/01/21/HP-Elite-Folio-Front-Left-Forw-6107-5267-1611217952.jpg', 'aa2aa@gmail.com', '123456', 2, '90 Le loi', '1234567890', 1, '2021-09-03 19:11:23', '2021-11-03 13:15:49'),
(4, 'test01', '', 'test@gmail.com', '123456', 2, '90 Le loi', '0396577225', 0, '2021-11-04 19:50:39', '2021-11-04 19:50:39'),
(5, 'CÃ´ng ty báº¥t Ä‘á»™ng sáº£n', '', 'nguyenvanluctl652200@gmail.com', '12345678910', 2, 'cÃ¡i Ä‘áº§u buá»“i', '1234567891', 0, '2021-11-05 10:18:47', '2021-11-05 10:18:47'),
(6, 'Anh Dang', 'https://phunugioi.com/wp-content/uploads/2020/02/hinh-nen-he-mat-troi.jpg', '2k1anhdang19ta@gmail.com', '123456', 2, 'tuyen quang', '0988077871', 0, '2021-11-05 10:30:27', '2021-11-05 04:46:59'),
(7, 'dang Nguyen', 'https://img.thuthuatphanmem.vn/uploads/2018/10/26/anh-gif-ngua-dep_054911968.gif', 'dang9x2001@gmail.com', '25102001', 2, 'CHuong My', '0357708201', 0, '2021-10-05 12:45:43', '2021-11-05 05:51:06'),
(8, 'dang Nguyen', '', 'test2@gmail.com', '25102001', 2, 'CHuong My', '0357708201', 0, '2021-08-05 12:52:23', '2021-11-05 12:52:23'),
(9, 'ÄÄƒng Nguyá»…n', 'https://img.thuthuatphanmem.vn/uploads/2018/10/26/anh-gif-ngua-dep_054911968.gif', 'haidang46625@gmail.com', '25102001', 2, 'HÃ  ná»™i', '0357708201', 0, '2021-11-07 10:36:43', '2021-11-07 05:11:43'),
(13, 'Duong Nguyen', '', 'duongntth2007003@fpt.edu.vn', 'UXRHc3dHBt', 2, '90 Le loi', '0396577225', 0, '2021-11-07 11:16:10', '2021-11-07 04:16:14'),
(14, 'Tuáº¥n anh', '', '0000019ta@gmail.com', 'shq0pDwRIE', 2, 'TuyÃªn quang', '0988077871', 0, '2021-11-07 11:20:33', '2021-11-07 04:20:42');

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `v_data`
-- (See below for the actual view)
--
CREATE TABLE `v_data` (
`order_id` int(11)
,`user_id` int(11)
,`product_id` int(11)
,`price` int(11)
,`status` int(11)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `v_order`
-- (See below for the actual view)
--
CREATE TABLE `v_order` (
`order_id` int(11)
,`user_id` int(11)
,`product_id` int(11)
,`price` int(11)
,`payment_id` int(11)
,`status` int(11)
);

-- --------------------------------------------------------

--
-- Cấu trúc cho view `v_data`
--
DROP TABLE IF EXISTS `v_data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`wbxleyue`@`localhost` SQL SECURITY DEFINER VIEW `v_data`  AS SELECT `o`.`id` AS `order_id`, `o`.`user_id` AS `user_id`, `od`.`product_id` AS `product_id`, `od`.`price` AS `price`, `o`.`status` AS `status` FROM (`order` `o` join `order-details` `od` on((`o`.`id` = `od`.`order_id`))) ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `v_order`
--
DROP TABLE IF EXISTS `v_order`;

CREATE ALGORITHM=UNDEFINED DEFINER=`wbxleyue`@`localhost` SQL SECURITY DEFINER VIEW `v_order`  AS SELECT `o`.`id` AS `order_id`, `o`.`user_id` AS `user_id`, `od`.`product_id` AS `product_id`, `od`.`price` AS `price`, `p`.`id` AS `payment_id`, `p`.`status` AS `status` FROM ((`order` `o` join `order-details` `od` on((`o`.`id` = `od`.`order_id`))) join `payment` `p` on((`o`.`id` = `p`.`order_id`))) ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `likeproduct`
--
ALTER TABLE `likeproduct`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order-details`
--
ALTER TABLE `order-details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `likeproduct`
--
ALTER TABLE `likeproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `order-details`
--
ALTER TABLE `order-details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
