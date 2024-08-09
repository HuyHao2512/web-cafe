-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 18, 2024 lúc 04:12 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ct299`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_don_dat_hang`
--

CREATE TABLE `chi_tiet_don_dat_hang` (
  `DDH_MA` int(6) NOT NULL,
  `SP_MA` int(6) NOT NULL,
  `SOLUONG` int(11) DEFAULT NULL,
  `GIA` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_gio_hang`
--

CREATE TABLE `chi_tiet_gio_hang` (
  `GH_MA` int(6) NOT NULL,
  `SP_MA` int(6) NOT NULL,
  `SOLUONG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_phieu_nhap`
--

CREATE TABLE `chi_tiet_phieu_nhap` (
  `NL_MA` int(6) NOT NULL,
  `PN_MA` int(6) NOT NULL,
  `SOLUONG` int(11) DEFAULT NULL,
  `DONGIA` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_phieu_xuat`
--

CREATE TABLE `chi_tiet_phieu_xuat` (
  `PX_MA` int(6) NOT NULL,
  `SP_MA` int(6) NOT NULL,
  `SOLUONG` int(11) DEFAULT NULL,
  `DONGIA` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_trang_thai`
--

CREATE TABLE `chi_tiet_trang_thai` (
  `TT_MA` int(6) NOT NULL,
  `DDH_MA` int(6) NOT NULL,
  `NGAYCAPNHAT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dia_chi_giao_hang`
--

CREATE TABLE `dia_chi_giao_hang` (
  `DCGH_MA` int(6) NOT NULL,
  `ID_KHACH_HANG` int(6) NOT NULL,
  `DCGH_TENKHACHHANG` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DCGH_MOTA` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_dat_hang`
--

CREATE TABLE `don_dat_hang` (
  `DDH_MA` int(6) NOT NULL,
  `ID_KHACH_HANG` int(6) NOT NULL,
  `DCGH` varchar(255) DEFAULT NULL,
  `NV_MA` int(6) NOT NULL,
  `DDH_PHIGIAOHANG` bigint(20) NOT NULL,
  `DDH_NGAYDAT` date NOT NULL,
  `DDH_TONGTIEN` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `don_dat_hang`
--

INSERT INTO `don_dat_hang` (`DDH_MA`, `ID_KHACH_HANG`, `DCGH`, `NV_MA`, `DDH_PHIGIAOHANG`, `DDH_NGAYDAT`, `DDH_TONGTIEN`) VALUES
(1, 7, 'An Giang', 7, 27000, '2024-04-17', 80000),
(3, 6, 'An Giang', 6, 6000, '2024-04-18', 40000),
(4, 6, 'An Giang', 10, 31000, '2024-04-18', 40000),
(5, 7, 'An Giang', 1, 35000, '2024-04-18', 40000),
(6, 7, 'An Giang', 3, 29000, '2024-04-18', 40000),
(7, 6, 'An Giang', 6, 11000, '2024-04-18', 80000),
(8, 6, 'An Giang', 5, 38000, '2024-04-18', 40000),
(9, 7, 'An Giang', 2, 40000, '2024-04-18', 30000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gio_hang`
--

CREATE TABLE `gio_hang` (
  `GH_MA` int(6) NOT NULL,
  `GH_NGAYCAPNHAT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `gio_hang`
--

INSERT INTO `gio_hang` (`GH_MA`, `GH_NGAYCAPNHAT`) VALUES
(1, '2024-03-09'),
(2, '2020-08-09'),
(3, '2009-11-01'),
(4, '2019-03-09'),
(5, '2024-01-07'),
(6, NULL),
(7, NULL),
(8, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ID_KHACH_HANG` int(6) NOT NULL,
  `GH_MA` int(6) NOT NULL,
  `KH_HOTEN` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `KH_SDT` char(10) NOT NULL,
  `KH_GIOITINH` tinyint(1) NOT NULL,
  `KH_EMAIL` char(20) NOT NULL,
  `KH_NGAYSINH` date NOT NULL,
  `KH_TAIKHOAN` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `KH_MATKHAU` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ID_KHACH_HANG`, `GH_MA`, `KH_HOTEN`, `KH_SDT`, `KH_GIOITINH`, `KH_EMAIL`, `KH_NGAYSINH`, `KH_TAIKHOAN`, `KH_MATKHAU`) VALUES
(1, 1, 'Nguyễn Thanh Tân', '0911232231', 0, 'tannguyen@gmail.com', '2005-09-29', 'ngthia01', 'qwe0@'),
(2, 2, 'Nguyễn Thi Thi', '0998778542', 1, 'ngthithi@gmail.com', '2004-11-29', 'ngthib02', 'qwe0@'),
(3, 3, 'Lý Thanh Thảo', '0358799454', 1, 'thaotaotao@gmail.c', '1998-10-29', 'trva03', 'qwe0@'),
(4, 4, 'Võ Văn Việt', '0225879481', 0, 'h3school@gmail.com', '2001-07-20', 'ngvh04', 'qwe0@'),
(5, 5, 'Lý Kế Toán', '0984555123', 0, 'lkt@gmail.com', '2004-07-20', 'ngckt05', 'qwe0@'),
(6, 6, 'Hồ Huy Hào', '0385794810', 0, 'hao@gmail.com', '2003-12-25', NULL, NULL),
(7, 7, 'Nguyễn Việt Anh', '0123444578', 0, 'anh@gmail.com', '1999-04-25', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `L_MA` int(6) NOT NULL,
  `L_TENLOAI` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`L_MA`, `L_TENLOAI`) VALUES
(18, 'Cà phê'),
(19, 'Đá xay'),
(20, 'Nước ép'),
(21, 'Trà sữa'),
(22, 'Đóng chai');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `NV_MA` int(6) NOT NULL,
  `NV_HOTEN` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `NV_SDT` char(10) NOT NULL,
  `NV_DIACHI` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `NV_GIOITINH` tinyint(1) NOT NULL,
  `NV_NGAYSINH` date NOT NULL,
  `NV_EMAIL` char(20) NOT NULL,
  `NV_TAIKHOAN` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `NV_MATKHAU` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`NV_MA`, `NV_HOTEN`, `NV_SDT`, `NV_DIACHI`, `NV_GIOITINH`, `NV_NGAYSINH`, `NV_EMAIL`, `NV_TAIKHOAN`, `NV_MATKHAU`) VALUES
(1, 'Nguyễn Tiến Thành', '0912348795', 'Cái Khế, Ninh Kiều, Cần Thơ', 0, '1999-05-06', 'tienthanh@gmail.com', 'nguyevana0', 'vanaday@101'),
(2, 'Trần Văn An', '0912123432', 'Tân An, Ninh Kiều, Cần Thơ', 0, '2001-05-18', 'vanan801@gmail.com', 'nvb02', 'vanbhihi@101'),
(3, 'Nguyễn Thanh Thanh', '0225879457', 'Xuân Khánh, Ninh Kiều, Cần Thơ', 1, '2003-05-01', 'thanh211@gmail.com', 'nvc01', 'vanc@101'),
(4, 'Trần Chí Trung', '0333545841', 'An Bình, Ninh Kiều, Cần Thơ', 0, '2003-04-01', 'tct@gmail.com', 'ttb04', '040103'),
(5, 'Trần Thị Quế Trân', '0254854656', 'Trần Thị Quế Trân', 1, '2003-10-30', 'trankeo@gmail.com', 'ttb05', '120903');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `SP_MA` int(6) NOT NULL,
  `L_MA` int(6) NOT NULL,
  `SP_TENSANPHAM` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SP_HINHANH` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SP_GIA` bigint(20) NOT NULL,
  `SP_MOTA` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`SP_MA`, `L_MA`, `SP_TENSANPHAM`, `SP_HINHANH`, `SP_GIA`, `SP_MOTA`) VALUES
(13, 18, 'Americano', 'americano.jpg', 40000, 'Americano'),
(14, 18, 'Cà phê đen', 'caphedenda.jpg', 20000, 'Cà phê pha máy'),
(15, 18, 'Cà phê muối', 'caphemuoi.jpg', 30000, 'Cà phê muối'),
(16, 18, 'Cà phê sữa', 'caphesua.jpg', 35000, 'Cà phê sữa đá'),
(17, 18, 'Cà phê trứng', 'caphetrung.jpg', 30000, 'Cà phê trứng'),
(18, 18, 'Capuchino', 'capuchino.jpg', 60000, 'Cà phê capuchino'),
(19, 18, 'Coldbrew', 'coldbrew.jpg', 40000, 'Cà phê pha lạnh'),
(20, 18, 'Coldbrew sữa tươi', 'coldbrewsuatuoi.jpg', 50000, 'Coldbrew sữa tươi'),
(21, 18, 'Espresso', 'espresso.jpg', 60000, 'Cà phê pha máy đặc biệt'),
(22, 18, 'Latte', 'latte.jpg', 40000, 'Cà phê latte'),
(23, 19, 'Cà phê đá xay', 'caphedaxay.jpg', 30000, 'Cà phê đá xay'),
(24, 19, 'Caramel đá xay', 'carameldaxay.jpg', 40000, 'Caramel đá xay'),
(25, 19, 'Đá chanh xay', 'chanhdaxay.jpg', 25000, 'Nước ép đá chanh xay'),
(26, 19, 'Chocolate đá xay', 'chocolatedaxay.jpg', 35000, 'Chocolate đá xay'),
(27, 19, 'Đá dâu xay', 'daudaxay.jpg', 30000, 'Sinh tố dâu đá xay'),
(28, 19, 'Dưa hấu đá xay', 'duahaudaxay.jpg', 40000, 'Sinh tố dưa hấu đá xay'),
(29, 19, 'Matcha đá xay', 'matchadaxay.jpg', 40000, 'Matcha đá xay'),
(30, 18, 'Nho đá xay', 'nhodayxay.jpg', 40000, 'Sinh tố nho đá xay'),
(31, 19, 'Oreo đá xay', 'oreodaxay.jpg', 30000, 'Oreo đá xay'),
(32, 19, 'Viết quất đá xay', 'vietquatdaxay.jpg', 35000, 'Sinh tố việt quất đá xay'),
(33, 20, 'Nước ép cà rốt', 'ca_rot_ep.jpg', 20000, 'Nước ép cà rốt'),
(34, 18, 'Nước ép cam', 'cam_ep.jpg', 30000, 'Nước ép cam'),
(35, 20, 'Nước ép dâu', 'dau_ep.jpg', 30000, 'Nước ép dâu tây'),
(36, 20, 'Nước ép dứa', 'dua_ep.jpg', 30000, 'Nước ép dứa'),
(37, 20, 'Nước ép dưa hấu', 'dua_hau_ep.jpg', 30000, 'Nước ép dưa hấu không đường'),
(38, 20, 'Nước ép dưa leo', 'dua_leo_ep.jpg', 20000, 'Nước ép dưa leo mix chanh'),
(39, 20, 'Nước ép lựu', 'luu_ep.jpg', 30000, 'Nước ép lựu'),
(40, 20, 'Nước ép nho', 'nho_ep.jpg', 40000, 'Nước ép nho đen'),
(41, 20, 'Nước ép ổi', 'oi_ep.jpg', 30000, 'Nước ép ổi mix chanh'),
(42, 20, 'Nước ép táo', 'tao_ep.jpg', 40000, 'Nước ép táo'),
(43, 21, 'Trà sữa bạc hà', 'ts_bac_ha.jpg', 40000, 'Trà sữa bạc hà 7 loại topping'),
(44, 21, 'Trà sữa caramel', 'ts_caramel.jpg', 40000, 'Trà sữa caramel'),
(45, 21, 'Trà sữa kem cheese', 'ts_kem_cheese.jpg', 50000, 'Trà sữa kem cheese'),
(46, 21, 'Trà sữa khoai môn', 'ts_khoai_mon.jpg', 40000, 'Trà sữa khoai môn trân châu đen'),
(47, 21, 'Trà sữa oreo', 'ts_oreo.jpg', 40000, 'Trà sữa oreo'),
(48, 21, 'Trà sữa pudding', 'ts_pudding_chocolate.jpg', 50000, 'Trà sữa pudding chocolate'),
(49, 21, 'Trà sữa sương sáo', 'ts_suong_sao.jpg', 40000, 'Trà sữa sương sáo'),
(50, 21, 'Trà sữa đường đen', 'ts_tran_chau_duong_den.jpg', 50000, 'Trà sữa trân châu đường đen'),
(51, 21, 'Trà sữa truyền thống', 'ts_truyen_thong.jpg', 35000, 'Trà sữa truyền thống 9 loại toppig'),
(52, 21, 'Trà sữa dâu đỏ', 'ts_pudding_dau_do.jpg', 40000, 'Trà sữa pudding dâu đỏ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trang_thai`
--

CREATE TABLE `trang_thai` (
  `TT_MA` int(6) NOT NULL,
  `TT_MOTA` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `trang_thai`
--

INSERT INTO `trang_thai` (`TT_MA`, `TT_MOTA`) VALUES
(1, 'Da thanh toan'),
(2, 'Huy'),
(3, 'Chua thanh toan');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', NULL, '$2y$10$bbls8YaHOQT5tfaq8SVa3ekgQuE5YBgqjVOdYPiY.wVzi2r13SKBW', NULL, NULL, NULL),
(6, 'Hồ Huy Hào', 'Hao@gmail.com', 'user', NULL, '$2y$10$LIbcHgKiE/.KiwrV2c3Ml.GIabzhx0c2IWWEfRQ2o5BRb06ZzuhWS', NULL, '2024-04-16 01:18:56', '2024-04-16 01:18:56'),
(7, 'Nguyễn Việt Anh', 'anh@gmail.com', 'user', NULL, '$2y$10$K5O156IPJRIuFWeA.viW7OGrXG4Jd.VLjDGe4lr1kLGJCUJXYw3RC', NULL, '2024-04-16 09:47:03', '2024-04-16 09:47:03');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_tiet_don_dat_hang`
--
ALTER TABLE `chi_tiet_don_dat_hang`
  ADD PRIMARY KEY (`DDH_MA`,`SP_MA`),
  ADD KEY `FK_SANPHAM_CHITIETDONDATHANG` (`SP_MA`);

--
-- Chỉ mục cho bảng `chi_tiet_gio_hang`
--
ALTER TABLE `chi_tiet_gio_hang`
  ADD PRIMARY KEY (`GH_MA`,`SP_MA`),
  ADD KEY `FK_SANPHAM_CHITIETGIOHANG` (`SP_MA`);

--
-- Chỉ mục cho bảng `chi_tiet_phieu_nhap`
--
ALTER TABLE `chi_tiet_phieu_nhap`
  ADD PRIMARY KEY (`NL_MA`,`PN_MA`);

--
-- Chỉ mục cho bảng `chi_tiet_phieu_xuat`
--
ALTER TABLE `chi_tiet_phieu_xuat`
  ADD PRIMARY KEY (`PX_MA`,`SP_MA`);

--
-- Chỉ mục cho bảng `chi_tiet_trang_thai`
--
ALTER TABLE `chi_tiet_trang_thai`
  ADD PRIMARY KEY (`TT_MA`,`DDH_MA`),
  ADD KEY `FK_DONDATHANG_CHITIETTRANGTHAI` (`DDH_MA`);

--
-- Chỉ mục cho bảng `dia_chi_giao_hang`
--
ALTER TABLE `dia_chi_giao_hang`
  ADD PRIMARY KEY (`DCGH_MA`),
  ADD KEY `FK_DIACHIGIAOHANG_KHACHHANG` (`ID_KHACH_HANG`);

--
-- Chỉ mục cho bảng `don_dat_hang`
--
ALTER TABLE `don_dat_hang`
  ADD PRIMARY KEY (`DDH_MA`);

--
-- Chỉ mục cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`GH_MA`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ID_KHACH_HANG`),
  ADD KEY `FK_KHACHHANG_GIOHANG` (`GH_MA`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`L_MA`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`NV_MA`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`SP_MA`),
  ADD KEY `FK_LOAI_SANPHAM` (`L_MA`);

--
-- Chỉ mục cho bảng `trang_thai`
--
ALTER TABLE `trang_thai`
  ADD PRIMARY KEY (`TT_MA`);

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
-- AUTO_INCREMENT cho bảng `dia_chi_giao_hang`
--
ALTER TABLE `dia_chi_giao_hang`
  MODIFY `DCGH_MA` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `don_dat_hang`
--
ALTER TABLE `don_dat_hang`
  MODIFY `DDH_MA` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `GH_MA` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ID_KHACH_HANG` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `L_MA` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `NV_MA` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `SP_MA` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `trang_thai`
--
ALTER TABLE `trang_thai`
  MODIFY `TT_MA` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chi_tiet_don_dat_hang`
--
ALTER TABLE `chi_tiet_don_dat_hang`
  ADD CONSTRAINT `FK_DONHANG_CHITIETDONDATHANG` FOREIGN KEY (`DDH_MA`) REFERENCES `don_dat_hang` (`DDH_MA`),
  ADD CONSTRAINT `FK_SANPHAM_CHITIETDONDATHANG` FOREIGN KEY (`SP_MA`) REFERENCES `san_pham` (`SP_MA`);

--
-- Các ràng buộc cho bảng `chi_tiet_gio_hang`
--
ALTER TABLE `chi_tiet_gio_hang`
  ADD CONSTRAINT `FK_GIOHANG_CHITIETGIOHANG` FOREIGN KEY (`GH_MA`) REFERENCES `gio_hang` (`GH_MA`),
  ADD CONSTRAINT `FK_SANPHAM_CHITIETGIOHANG` FOREIGN KEY (`SP_MA`) REFERENCES `san_pham` (`SP_MA`);

--
-- Các ràng buộc cho bảng `chi_tiet_trang_thai`
--
ALTER TABLE `chi_tiet_trang_thai`
  ADD CONSTRAINT `FK_DONDATHANG_CHITIETTRANGTHAI` FOREIGN KEY (`DDH_MA`) REFERENCES `don_dat_hang` (`DDH_MA`),
  ADD CONSTRAINT `FK_TRANGTHAI_CHITIETTRANGTHAI` FOREIGN KEY (`TT_MA`) REFERENCES `trang_thai` (`TT_MA`);

--
-- Các ràng buộc cho bảng `dia_chi_giao_hang`
--
ALTER TABLE `dia_chi_giao_hang`
  ADD CONSTRAINT `FK_DIACHIGIAOHANG_KHACHHANG` FOREIGN KEY (`ID_KHACH_HANG`) REFERENCES `khach_hang` (`ID_KHACH_HANG`);

--
-- Các ràng buộc cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD CONSTRAINT `FK_KHACHHANG_GIOHANG` FOREIGN KEY (`GH_MA`) REFERENCES `gio_hang` (`GH_MA`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `FK_LOAI_SANPHAM` FOREIGN KEY (`L_MA`) REFERENCES `loai` (`L_MA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
