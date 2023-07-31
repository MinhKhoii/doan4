-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 24, 2023 lúc 01:59 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan4`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadonban`
--

CREATE TABLE `chitiethoadonban` (
  `MaOp` int(11) NOT NULL,
  `MaHoaDon` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `TamTinh` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadonban`
--

INSERT INTO `chitiethoadonban` (`MaOp`, `MaHoaDon`, `SoLuong`, `TamTinh`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 50000, '2023-05-21 22:57:27', '2023-05-21 22:57:27'),
(2, 1, 2, 130000, '2023-05-18 23:20:09', '2023-05-18 23:20:09'),
(4, 2, 2, 140000, '2023-05-21 22:57:27', '2023-05-21 22:57:27'),
(5, 3, 1, 50000, '2023-05-21 22:59:38', '2023-05-21 22:59:38'),
(46, 4, 1, 150000, '2023-05-22 01:45:44', '2023-05-22 01:45:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadonnhap`
--

CREATE TABLE `chitiethoadonnhap` (
  `MaHoaDonNhap` int(11) NOT NULL,
  `MaOp` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `GiaNhap` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonban`
--

CREATE TABLE `hoadonban` (
  `id` int(11) NOT NULL,
  `MaKhachHang` int(11) DEFAULT NULL,
  `NgayTao` datetime DEFAULT NULL,
  `DiaChiNhan` varchar(250) DEFAULT NULL,
  `TrangThai` int(11) DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `TongTien` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadonban`
--

INSERT INTO `hoadonban` (`id`, `MaKhachHang`, `NgayTao`, `DiaChiNhan`, `TrangThai`, `MoTa`, `TongTien`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-05-19 06:20:09', 'hihi', 2, '', 130000, '2023-05-18 23:20:09', '2023-05-21 23:00:21'),
(2, 1, '2023-05-22 05:57:27', 'SPKT-HY', 0, '', 190000, '2023-05-21 22:57:27', '2023-05-21 22:57:27'),
(3, 1, '2023-05-22 05:59:38', 'SPKT-HY', 0, '', 50000, '2023-05-21 22:59:38', '2023-05-21 22:59:38'),
(4, 1, '2023-05-22 08:45:44', 'SPKT-HY', 0, '', 150000, '2023-05-22 01:45:44', '2023-05-22 01:45:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonnhap`
--

CREATE TABLE `hoadonnhap` (
  `id` int(11) NOT NULL,
  `MaNhaCungCap` int(11) NOT NULL,
  `MaNguoiDung` int(11) NOT NULL,
  `NgayNhap` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `UserName` varchar(500) DEFAULT NULL,
  `PassWord` varchar(500) DEFAULT NULL,
  `HoVaTen` varchar(200) DEFAULT NULL,
  `DiaChi` varchar(500) DEFAULT NULL,
  `SoDienThoai` char(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `UserName`, `PassWord`, `HoVaTen`, `DiaChi`, `SoDienThoai`, `Email`, `created_at`, `updated_at`) VALUES
(1, 'khoi', '123', 'Nguyễn Minh Khôi', 'Hưng Yên', '945395356', 'minhkhoj2002@gmail.com', NULL, NULL),
(2, 'khoi1', '123', 'Nguyễn Minh Khôi', 'Hưng Yên', '946332668', 'khoi1@gmail.com', NULL, NULL),
(3, 'khoi2', '123', 'Nguyễn Minh Khôi', 'Hưng Yênn', '946342653', 'khoi2@gmail.com', NULL, '2023-05-19 00:36:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiop`
--

CREATE TABLE `loaiop` (
  `id` int(11) NOT NULL,
  `TenLOp` varchar(255) NOT NULL,
  `MoTa` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaiop`
--

INSERT INTO `loaiop` (`id`, `TenLOp`, `MoTa`, `created_at`, `updated_at`) VALUES
(1, 'IPhone', '', NULL, NULL),
(2, 'Samsung', '', NULL, NULL),
(3, 'Xiaomi', '', NULL, NULL),
(4, 'OPPO', '', NULL, NULL),
(5, 'Vivo', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `PassWord` varchar(50) DEFAULT NULL,
  `NgayTao` datetime DEFAULT NULL,
  `Anh` varchar(100) DEFAULT NULL,
  `HoTen` varchar(100) DEFAULT NULL,
  `DienThoai` varchar(10) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `TrangThai` bit(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `UserName`, `PassWord`, `NgayTao`, `Anh`, `HoTen`, `DienThoai`, `Email`, `DiaChi`, `TrangThai`, `created_at`, `updated_at`) VALUES
(1, 'khoi', 'khoi123', '0000-00-00 00:00:00', '', 'Nguyễn Minh Khôi', '946382638', 'minhkhoj2002@gmail.com', 'Hưng Yên', b'1', NULL, NULL),
(2, 'admin', '123', '0000-00-00 00:00:00', '', 'Nguyen Minh Khoi', '356748792', 'khoi1@gmail.com', 'Hưng Yên', b'1', NULL, NULL),
(3, 'admin2', '123', '0000-00-00 00:00:00', '', 'Nguyễn Minh Khoi', '345367281', 'khoi2@gmail.com', 'Hưng Yên', b'1', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `id` int(11) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `DienThoai` varchar(10) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`id`, `HoTen`, `DiaChi`, `DienThoai`, `Email`, `created_at`, `updated_at`) VALUES
(1, 'Đỗ Đình Nam', 'Hà Nội', '0683728192', 'namanh@gmail.com', NULL, NULL),
(2, 'Hoàng Minh Quân', 'TP Hồ Chí Minh', '0367281921', 'Hquan@gmail.com', NULL, NULL),
(3, 'Nguyễn Chí Tôn', 'Lạng Sơn', '0927396621', 'ton@gmail.com', NULL, NULL),
(4, 'Cao Thanh Duy', 'Thanh Hóa', '0932517772', 'ctduy@gmail.com', NULL, NULL),
(5, 'Nguyễn Thị Mai Anh', 'Hà Nội', '092817321', 'anh@gmail.com', NULL, NULL),
(6, 'Nguyễn Trúc Bạch', 'Yên Bái', '0982637728', 'bach@gmail.com', NULL, NULL),
(7, 'Mai Thị Thảo', 'Hà Nội', '0974683221', 'thao@gmail.com', NULL, NULL),
(8, 'Lê Tiến Đạt', 'Cao Bằng', '0364719212', 'dat@gmail.com', NULL, NULL),
(9, 'Ngô Hoàng Nam', 'Hà Nội', '0364738212', 'nam@gmail.com', NULL, NULL),
(10, 'sd', 'Hà Nội', '0123456786', 'minhkhoj2002@gmail.com', '2023-05-19 01:05:36', '2023-05-19 01:05:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `opdienthoai`
--

CREATE TABLE `opdienthoai` (
  `id` int(11) NOT NULL,
  `TenOp` varchar(255) NOT NULL,
  `MaLOp` int(11) NOT NULL,
  `Anh` varchar(500) DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL,
  `Giaban` float DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `opdienthoai`
--

INSERT INTO `opdienthoai` (`id`, `TenOp`, `MaLOp`, `Anh`, `Soluong`, `Giaban`, `MoTa`, `created_at`, `updated_at`) VALUES
(1, 'IPhone 11', 1, '5.jpg', 50, 50000, 'Ốp đẹp chất lượng cao', NULL, '2023-04-20 19:40:14'),
(2, 'Samsung A13', 2, 'ss-A13.jpg', 50, 70000, 'Ốp đẹp chất lượng cao', NULL, '2023-04-20 19:40:47'),
(3, 'Xiaomi Note 7', 3, 'Note-7.jpg', 30, 50000, 'Ốp đẹp chất lượng cao', NULL, '2023-04-20 19:41:32'),
(4, 'Iphone X', 1, 'iphone-x.jpg', 100, 70000, 'Ốp đẹp chất lượng cao', NULL, '2023-04-20 19:42:12'),
(5, 'Vivo y21', 5, 'vivo-y21.jpg', 50, 50000, 'Ốp đẹp chất lượng cao', NULL, '2023-04-20 19:42:37'),
(6, 'Iphone X', 1, '1.jpg', 45, 55000, 'Ốp đẹp chất lượng cao', '2023-04-20 19:36:33', '2023-04-20 19:36:33'),
(7, 'Iphone 8plus', 1, '1_iphone-8-plus.jpg', 56, 50000, 'Ốp đẹp chất lượng cao', '2023-04-20 19:37:03', '2023-04-20 19:37:03'),
(8, 'Redmi note 8', 3, '1-Note8.jpg', 60, 45000, 'Ốp đẹp chất lượng cao', '2023-04-20 19:37:25', '2023-04-20 19:47:12'),
(9, 'OPPO f1s', 4, '1-oppo-f1s.jpg', 100, 60000, 'Ốp đẹp chất lượng cao', '2023-04-20 19:38:00', '2023-04-20 19:38:00'),
(10, 'Redmi K40', 3, '1-RedmiK40.jpg', 123, 50000, 'Ốp đẹp chất lượng cao', '2023-04-20 19:38:32', '2023-04-20 19:38:32'),
(11, 'Samsung A13', 2, '1-SsA13.jpg', 120, 70000, 'Ốp đẹp chất lượng cao', '2023-04-20 19:38:56', '2023-04-20 20:14:04'),
(12, 'Vivo Y81', 5, '1-Y81.jpg', 60, 50000, 'Ốp đẹp chất lượng cao', '2023-04-20 19:39:31', '2023-04-20 19:39:31'),
(13, 'Iphone 7plus', 1, '2-iphone-7-plus.jpg', 60, 65000, 'Ốp đẹp chất lượng cao', '2023-04-20 19:43:08', '2023-04-20 19:43:08'),
(14, 'Iphone 12pro', 1, '2.jpg', 60, 58000, 'Ốp đẹp chất lượng cao', '2023-04-20 19:43:42', '2023-04-20 19:43:42'),
(15, 'Samsung j2 Prime', 2, '2-J2Prime.jpg', 60, 45000, 'Ốp đẹp chất lượng cao', '2023-04-20 19:44:05', '2023-04-20 19:44:05'),
(16, 'Redmi 11', 3, '2-Mi11.jpg', 60, 50000, 'Ốp đẹp chất lượng cao', '2023-04-20 19:44:32', '2023-04-20 19:44:32'),
(17, 'Vivo Y20', 5, '2-Y20.jpg', 60, 40000, 'Ốp đẹp chất lượng cao', '2023-04-20 19:45:35', '2023-04-20 19:45:35'),
(18, 'Redmi 8', 3, '2-Mi-8.jpg', 60, 50000, 'Ốp đẹp chất lượng cao', '2023-04-20 19:47:33', '2023-04-20 19:47:33'),
(19, 'Galaxy A34', 2, 'Galaxy-A34.jpg', 60, 100000, 'Ốp chất lượng cao', '2023-05-21 22:04:38', '2023-05-21 22:08:51'),
(21, 'Galaxy S23+', 2, 'Galaxy-S23.jpg', 60, 150000, 'Ốp chất lượng cao', '2023-05-21 22:14:56', '2023-05-21 22:15:09'),
(22, 'Galaxy S23 Ultra', 2, 'Galaxy-S23ultra.jpg', 60, 150000, 'Ốp chất lượng cao', '2023-05-21 22:21:03', '2023-05-21 22:21:03'),
(23, 'Galaxy S20 Ultra', 2, 'Galaxy-S20Ultra.jpg', 50, 10000, 'Ốp chất lượng cao', '2023-05-21 22:22:54', '2023-05-21 22:23:05'),
(24, 'Galaxy S20 Ultra', 2, 'g.jpg', 50, 10000, 'Ốp chất lượng cao', '2023-05-21 22:23:47', '2023-05-21 22:23:47'),
(25, 'Galaxy S20', 2, 'Galaxy-S20.jpg', 50, 10000, 'Ốp chất lượng cao', '2023-05-21 22:25:50', '2023-05-21 22:25:50'),
(26, 'Iphone 14 Promax', 1, 'iphone-14promax.jpg', 60, 150000, 'Ốp chất lượng cao', '2023-05-21 22:29:24', '2023-05-21 22:29:24'),
(27, 'Iphone 14 Promax', 1, 'iphone-14promax1.jpg', 60, 100000, 'Ốp chất lượng cao', '2023-05-21 22:29:46', '2023-05-21 22:29:46'),
(28, 'Iphone 14 Pro', 1, 'iphone-14pro.jpg', 60, 100000, 'Ốp chất lượng cao', '2023-05-21 22:30:13', '2023-05-21 22:30:13'),
(29, 'Poco C40', 3, 'Poco-C40.jpg', 50, 30000, 'Ốp chất lượng cao', '2023-05-21 22:33:25', '2023-05-21 22:33:25'),
(30, 'Redmi 9C', 3, 'Redmi-9C1.jpg', 50, 100000, 'Ốp chất lượng cao', '2023-05-21 22:33:59', '2023-05-21 22:33:59'),
(31, 'Redmi 12C', 3, 'Redmi-12C.jpg', 60, 100000, 'Ốp chất lượng cao', '2023-05-21 22:34:43', '2023-05-21 22:34:43'),
(32, 'Redmi 9C', 3, 'r.jpg', 60, 100000, 'Ốp chất lượng cao', '2023-05-21 22:35:05', '2023-05-21 22:35:05'),
(33, 'OPPO A96', 4, 'oppo-A96.jpg', 60, 100000, 'Ốp chất lượng cao', '2023-05-21 22:38:04', '2023-05-21 22:38:04'),
(34, 'OPPO A57', 4, 'oppo-A57.jpg', 60, 150000, 'Ốp chất lượng cao', '2023-05-21 22:38:26', '2023-05-21 22:38:26'),
(35, 'OPPO A54', 4, 'oppo-A54.jpg', 50, 30000, 'Ốp chất lượng cao', '2023-05-21 22:38:51', '2023-05-21 22:38:51'),
(36, 'OPPO A12', 4, 'oppo-A12.jpg', 40, 30000, 'Ốp chất lượng cao', '2023-05-21 22:39:19', '2023-05-21 22:39:19'),
(37, 'OPPO A15', 4, 'o.jpg', 40, 10000, 'Ốp chất lượng cao', '2023-05-21 22:40:24', '2023-05-21 22:40:24'),
(38, 'OPPO A15', 4, 'oppo-A15.jpg', 50, 30000, 'Ốp đẹp chất lượng cao', '2023-05-21 22:41:51', '2023-05-21 22:41:51'),
(39, 'OPPO A54', 4, 'oppo-A541.jpg', 40, 100000, 'Ốp đẹp chất lượng cao', '2023-05-21 22:42:14', '2023-05-21 22:42:14'),
(40, 'OPPO A57', 4, 'oppo-A571.jpg', 50, 100000, 'Ốp đẹp chất lượng cao', '2023-05-21 22:43:13', '2023-05-21 22:43:13'),
(41, 'Vivo Y02', 5, 'vivo-y02.jpg', 40, 50000, 'Ốp đẹp chất lượng cao', '2023-05-21 22:46:54', '2023-05-21 22:46:54'),
(42, 'Vivo Y12', 5, 'vivo-y12.jpg', 60, 50000, 'Ốp đẹp chất lượng cao', '2023-05-21 22:47:29', '2023-05-21 22:47:29'),
(43, 'Vivo Y02', 5, 'vivo-y021.jpg', NULL, 10000, 'Ốp đẹp chất lượng cao', '2023-05-21 22:47:49', '2023-05-21 22:47:49'),
(44, 'Vivo Y21', 5, 'vivo-y21.jpg', 60, 100000, 'Ốp đẹp chất lượng cao', '2023-05-21 22:48:15', '2023-05-21 22:48:15'),
(45, 'Vivo V11', 5, 'vivo-v11.jpg', 60, 100000, 'Ốp đẹp chất lượng cao', '2023-05-21 22:49:37', '2023-05-21 22:49:37'),
(46, 'Vivo Y50', 5, 'vivo-50.jpg', 50, 150000, 'Ốp đẹp chất lượng cao', '2023-05-21 22:49:57', '2023-05-21 22:49:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `TieuDe` varchar(100) DEFAULT NULL,
  `NgayTao` date DEFAULT NULL,
  `NoiDung` text DEFAULT NULL,
  `Anh` varchar(200) DEFAULT NULL,
  `MaNguoiDung` int(11) DEFAULT NULL,
  `TrangThai` bit(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'khoi', 'khoi@gmail.com', NULL, '$2y$10$Aj6fquvT7T4u8DchzUG.o.hBP49HuqsDmYJ5xMWA.bsnZEFMdJyE.', NULL, '2023-05-10 15:43:22', '2023-05-10 15:43:22');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadonban`
--
ALTER TABLE `chitiethoadonban`
  ADD PRIMARY KEY (`MaOp`,`MaHoaDon`),
  ADD KEY `MaHoaDon` (`MaHoaDon`);

--
-- Chỉ mục cho bảng `chitiethoadonnhap`
--
ALTER TABLE `chitiethoadonnhap`
  ADD PRIMARY KEY (`MaHoaDonNhap`,`MaOp`),
  ADD KEY `MaOp` (`MaOp`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `hoadonban`
--
ALTER TABLE `hoadonban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaKhachHang` (`MaKhachHang`);

--
-- Chỉ mục cho bảng `hoadonnhap`
--
ALTER TABLE `hoadonnhap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaNhaCungCap` (`MaNhaCungCap`),
  ADD KEY `MaNguoiDung` (`MaNguoiDung`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaiop`
--
ALTER TABLE `loaiop`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `opdienthoai`
--
ALTER TABLE `opdienthoai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaLOp` (`MaLOp`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaNguoiDung` (`MaNguoiDung`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadonban`
--
ALTER TABLE `hoadonban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hoadonnhap`
--
ALTER TABLE `hoadonnhap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loaiop`
--
ALTER TABLE `loaiop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `opdienthoai`
--
ALTER TABLE `opdienthoai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadonban`
--
ALTER TABLE `chitiethoadonban`
  ADD CONSTRAINT `chitiethoadonban_ibfk_1` FOREIGN KEY (`MaOp`) REFERENCES `opdienthoai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadonban_ibfk_2` FOREIGN KEY (`MaHoaDon`) REFERENCES `hoadonban` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitiethoadonnhap`
--
ALTER TABLE `chitiethoadonnhap`
  ADD CONSTRAINT `chitiethoadonnhap_ibfk_1` FOREIGN KEY (`MaHoaDonNhap`) REFERENCES `hoadonnhap` (`id`),
  ADD CONSTRAINT `chitiethoadonnhap_ibfk_2` FOREIGN KEY (`MaOp`) REFERENCES `opdienthoai` (`id`);

--
-- Các ràng buộc cho bảng `hoadonban`
--
ALTER TABLE `hoadonban`
  ADD CONSTRAINT `hoadonban_ibfk_1` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadonnhap`
--
ALTER TABLE `hoadonnhap`
  ADD CONSTRAINT `hoadonnhap_ibfk_1` FOREIGN KEY (`MaNhaCungCap`) REFERENCES `nhacungcap` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoadonnhap_ibfk_2` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `opdienthoai`
--
ALTER TABLE `opdienthoai`
  ADD CONSTRAINT `opdienthoai_ibfk_1` FOREIGN KEY (`MaLOp`) REFERENCES `loaiop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
