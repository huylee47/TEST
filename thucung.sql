-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 18, 2024 lúc 04:17 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thucung`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_binhluan` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `danhgia` tinyint(4) NOT NULL,
  `trangthai` tinyint(4) NOT NULL,
  `ngaytao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_binhluan`, `id_sanpham`, `id_taikhoan`, `noidung`, `danhgia`, `trangthai`, `ngaytao`) VALUES
(2, 5, 2, 'B', 3, 1, '2024-03-23 10:12:59'),
(4, 5, 2, 'Hay', 3, 1, '2024-03-26 10:46:50'),
(15, 5, 1, '3123123', 4, 1, '2024-03-30 23:08:07'),
(16, 5, 1, '3123', 5, 1, '2024-03-30 23:08:13'),
(17, 35, 1, 'Xịn quá', 5, 1, '2024-04-02 21:04:48'),
(18, 34, 1, 'sajdgasjhgdagdasgdjasd', 5, 1, '2024-04-02 21:31:07'),
(19, 32, 1, 'ok vip pro', 3, 1, '2024-04-02 21:36:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_giohang`
--

CREATE TABLE `chitiet_giohang` (
  `id_giohang` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `so_luong` int(111) NOT NULL,
  `id_sanpham` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiet_giohang`
--

INSERT INTO `chitiet_giohang` (`id_giohang`, `id_taikhoan`, `so_luong`, `id_sanpham`) VALUES
(1, 1, 2, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_hoadon`
--

CREATE TABLE `chitiet_hoadon` (
  `id_cthd` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_hoadon` int(11) NOT NULL,
  `gia` double NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiet_hoadon`
--

INSERT INTO `chitiet_hoadon` (`id_cthd`, `id_sanpham`, `id_hoadon`, `gia`, `so_luong`) VALUES
(1, 7, 2, 888, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `ten_danhmuc`) VALUES
(1, 'Máy tính '),
(2, 'Laptop'),
(3, 'Điện thoại '),
(4, 'Thiết bị ngoại vi'),
(5, 'Consoles'),
(6, 'Thiết bị nghe nhìn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `SDT` int(11) NOT NULL,
  `id_voucher` int(11) DEFAULT NULL,
  `phuongthuc_thanhtoan` tinyint(4) NOT NULL,
  `tong_tien` double(10,2) NOT NULL,
  `diachi` text NOT NULL,
  `ghichu` text NOT NULL,
  `tinhtrang` int(11) NOT NULL DEFAULT 1,
  `ngaytao` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id_hoadon`, `id_taikhoan`, `ten`, `SDT`, `id_voucher`, `phuongthuc_thanhtoan`, `tong_tien`, `diachi`, `ghichu`, `tinhtrang`, `ngaytao`) VALUES
(2, 1, 'Admin', 938194069, NULL, 1, 1776.00, 'Hai Phong', 'OK', 1, '2024-04-10 16:05:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoanh`
--

CREATE TABLE `khoanh` (
  `id_anh` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `ten_anh` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `khoanh`
--

INSERT INTO `khoanh` (`id_anh`, `id_sanpham`, `ten_anh`) VALUES
(1, 1, '4.png'),
(2, 1, '2.png'),
(3, 1, '3.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id_lienhe` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `noidung` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `id_mausac` int(11) NOT NULL,
  `ten_mausac` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mausac`
--

INSERT INTO `mausac` (`id_mausac`, `ten_mausac`) VALUES
(1, 'Xanh'),
(2, 'Đỏ'),
(3, 'Tím'),
(4, 'Vàng'),
(5, 'Đen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `ten_sanpham` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `gia` int(11) NOT NULL,
  `ghichu` text NOT NULL,
  `so_luong` int(11) NOT NULL,
  `nha_san_xuat` varchar(255) NOT NULL,
  `xuatxu` varchar(255) NOT NULL,
  `ngaytao` datetime NOT NULL DEFAULT current_timestamp(),
  `id_mausac` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `id_danhmuc`, `ten_sanpham`, `img`, `gia`, `ghichu`, `so_luong`, `nha_san_xuat`, `xuatxu`, `ngaytao`, `id_mausac`) VALUES
(40, 1, 'chó', 'kisspng-cat-scratch-code-org-programming-language-clip-art-cartoon-cat-5ade8be4a8dc71.0366459715245342446917 (2).png', 100, 'đẹp', 2, 'mỹ', 'việt', '2024-04-18 20:12:37', '1'),
(41, 1, 'Laptop Acer2', 'iphone.png', 15000, 'zxcawd', 2, '1423', '123', '2024-04-18 21:13:52', '3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_taikhoan` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `quyen` tinyint(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `diachi` text NOT NULL,
  `SDT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_taikhoan`, `user`, `password`, `email`, `quyen`, `ten`, `diachi`, `SDT`) VALUES
(1, 'admin', '1', 'huyw300@gmail.com', 1, 'admin', 'Hai Phong', 938194069),
(2, 'user', '2', 'user', 0, 'User', 'HaiPhong', 123),
(5, 'user1', '1', 'user1@gmail.com', 0, 'user 1', 'HP', 2),
(6, 'minh', '1', 'dinhminh@gmail.com', 1, 'minh', 'hp', 423123);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id_tintuc` int(11) NOT NULL,
  `tieude` text NOT NULL,
  `noidung` longtext NOT NULL,
  `img` text NOT NULL,
  `ngaytao` datetime NOT NULL DEFAULT current_timestamp(),
  `id_nguoitao` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id_tintuc`, `tieude`, `noidung`, `img`, `ngaytao`, `id_nguoitao`) VALUES
(1, 'tai nghe', 'ok', 'logo.png', '2024-04-09 10:16:13', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher`
--

CREATE TABLE `voucher` (
  `id_voucher` int(11) NOT NULL,
  `ten_voucher` varchar(255) NOT NULL,
  `giagiam` int(11) NOT NULL,
  `ngaybatdau` datetime NOT NULL DEFAULT current_timestamp(),
  `ngayketthuc` datetime NOT NULL DEFAULT current_timestamp(),
  `ma_voucher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `voucher`
--

INSERT INTO `voucher` (`id_voucher`, `ten_voucher`, `giagiam`, `ngaybatdau`, `ngayketthuc`, `ma_voucher`) VALUES
(1, 'giảm 15%', 15, '2024-04-09 10:33:46', '2024-04-24 10:00:46', 'TBS15'),
(2, 'giảm 20%', 20, '2024-04-09 00:00:00', '2024-04-12 00:00:00', 'TBS20');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_binhluan`);

--
-- Chỉ mục cho bảng `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
  ADD PRIMARY KEY (`id_giohang`);

--
-- Chỉ mục cho bảng `chitiet_hoadon`
--
ALTER TABLE `chitiet_hoadon`
  ADD PRIMARY KEY (`id_cthd`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoadon`);

--
-- Chỉ mục cho bảng `khoanh`
--
ALTER TABLE `khoanh`
  ADD PRIMARY KEY (`id_anh`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`id_mausac`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_taikhoan`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id_tintuc`);

--
-- Chỉ mục cho bảng `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id_voucher`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
  MODIFY `id_giohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chitiet_hoadon`
--
ALTER TABLE `chitiet_hoadon`
  MODIFY `id_cthd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khoanh`
--
ALTER TABLE `khoanh`
  MODIFY `id_anh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id_lienhe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `mausac`
--
ALTER TABLE `mausac`
  MODIFY `id_mausac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id_tintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id_voucher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
