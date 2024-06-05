-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 04, 2024 lúc 08:55 PM
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
-- Cơ sở dữ liệu: `datn_test_2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cbnv`
--

CREATE TABLE `cbnv` (
  `ID_CBNV` varchar(20) NOT NULL,
  `HOTEN_CBNV` varchar(100) NOT NULL,
  `EMAIL_CBNV` varchar(100) NOT NULL,
  `ANH_CBNV` varchar(500) NOT NULL,
  `ID_QUYEN` int(11) NOT NULL,
  `MATKHAU` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cbnv`
--

INSERT INTO `cbnv` (`ID_CBNV`, `HOTEN_CBNV`, `EMAIL_CBNV`, `ANH_CBNV`, `ID_QUYEN`, `MATKHAU`) VALUES
('CB01234', 'Cán bộ nghiệp vụ', 'phuongphung301020@gmail.com', 'https://i.pinimg.com/236x/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg', 0, 'Ntu@1234'),
('CB01235', 'Cán bộ nghiệp vụ 2', 'phuongphung301020@gmail.com', 'https://i.pinimg.com/236x/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg', 0, 'Ntu@1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chamdrl`
--

CREATE TABLE `chamdrl` (
  `ID_BANGDIEM` varchar(20) NOT NULL,
  `ID_SV` varchar(20) NOT NULL,
  `ID_CBNV` varchar(20) NOT NULL,
  `HOCKY` int(11) NOT NULL,
  `NAMHOC` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chamdrl`
--

INSERT INTO `chamdrl` (`ID_BANGDIEM`, `ID_SV`, `ID_CBNV`, `HOCKY`, `NAMHOC`) VALUES
('62131632_HK1_2021', '62131632', 'CB01234', 1, '2020-2021'),
('62131632_HK2_2021', '62131632', 'CB01234', 2, '2020-2021');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdrl`
--

CREATE TABLE `chitietdrl` (
  `ID_CHITIET_DRL` varchar(20) NOT NULL,
  `ID_BANGDIEM` varchar(20) NOT NULL,
  `ID_TIEUCHI` varchar(20) NOT NULL,
  `DIEM` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdrl`
--

INSERT INTO `chitietdrl` (`ID_CHITIET_DRL`, `ID_BANGDIEM`, `ID_TIEUCHI`, `DIEM`) VALUES
('62131632TC1_HK1_2021', '62131632_HK1_2021', 'TC001', 15),
('62131632TC1_HK2_2021', '62131632_HK2_2021', 'TC001', 10),
('62131632TC2_HK1_2021', '62131632_HK1_2021', 'TC002', 15),
('62131632TC3_HK1_2021', '62131632_HK1_2021', 'TC003', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctdt`
--

CREATE TABLE `ctdt` (
  `ID_CTDT` varchar(20) NOT NULL,
  `TEN_CTDT` varchar(200) NOT NULL,
  `ID_NGANH` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ctdt`
--

INSERT INTO `ctdt` (`ID_CTDT`, `TEN_CTDT`, `ID_NGANH`) VALUES
('K62_CNTT', 'Công nghệ thông tin K62', '7480201'),
('K62_CNTT_CLC', 'Công nghệ thông tin CLC K62', '7480201PHE'),
('K62_TTQL', 'Hệ thống thông tin quản lý K62', '7340405'),
('K63_CNTT', 'Công nghệ thông tin K63', '7480201'),
('K63_CNTT_CLC', 'Công nghệ thông tin CLC K63', '7480201PHE'),
('K63_TTQL', 'Hệ thống thông tin quản lý K63', '7340405'),
('K64_CNTT', 'Công nghệ thông tin K64', '7480201'),
('K64_CNTT_CLC', 'Công nghệ thông tin CLC K64', '7480201PHE'),
('K64_TTQL', 'Hệ thống thông tin quản lý K64', '7340405'),
('K65_CNTT', 'Công nghệ thông tin K65', '7480201'),
('K65_CNTT_CLC', 'Công nghệ thông tin CLC K65', '7480201PHE'),
('K65_TTQL', 'Hệ thống thông tin quản lý K65', '7340405'),
('K66_CNTT', 'Công nghệ thông tin K66', '7480201'),
('K66_CNTT_CLC', 'Công nghệ thông tin K66 CLC', '7480201PHE'),
('K66_TTQL', 'Hệ thống thông tin quản lý K66', '7480201');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dkhp`
--

CREATE TABLE `dkhp` (
  `ID_DKHP` varchar(20) NOT NULL,
  `ID_HOCPHAN` varchar(20) NOT NULL,
  `HOCKY` int(11) NOT NULL,
  `NAMHOC` varchar(10) NOT NULL,
  `ID_SV` varchar(20) NOT NULL,
  `TINHTRANG` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dkhp`
--

INSERT INTO `dkhp` (`ID_DKHP`, `ID_HOCPHAN`, `HOCKY`, `NAMHOC`, `ID_SV`, `TINHTRANG`) VALUES
('DKHP_85064_HK1', '85064', 1, '2020-2021', '62130808', b'1'),
('DKHP_85064_HK1', '85064', 1, '2020-2021', '62131632', b'1'),
('DKHP_SOT320_HK1', 'SOT320', 2, '2020-2021', '62131632', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocphan`
--

CREATE TABLE `hocphan` (
  `ID_HOCPHAN` varchar(20) NOT NULL,
  `TEN_HOCPHAN` varchar(200) NOT NULL,
  `TINCHI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hocphan`
--

INSERT INTO `hocphan` (`ID_HOCPHAN`, `TEN_HOCPHAN`, `TINCHI`) VALUES
('85064', 'Giáo dục thể chất (Chạy)', 1),
('85066', 'Giáo dục thể chất (Bơi lội)', 1),
('85097', 'Giáo dục thể chất (Bóng đá)', 1),
('85098', 'Giáo dục thể chất (Bóng chuyền)', 1),
('85105', 'Giáo dục thể chất (Cầu lông)', 1),
('85108', 'Giáo dục thể chất (Taekwondo)', 1),
('851111', 'Giáo dục thể chất (Aerobic)', 1),
('ALA320', 'Kỹ thuật điện tử', 2),
('BIO308', 'TH Sinh học đại cương', 1),
('BIO319', 'Sinh học đại cương', 2),
('BUA319', 'Nhập môn Quản trị học', 2),
('DAA350', 'Phương pháp nghiên cứu khoa học', 2),
('DAA351', 'Đồ án tốt nghiệp/Khóa luận tốt nghiệp (ĐATN)', 10),
('ECS323', 'Kinh tế học đại cương', 2),
('ENE334', 'Biến đổi khí hậu', 2),
('EPM320', 'Con người và môi trường', 2),
('FLS314', 'Tiếng Anh B1.1', 4),
('FLS315', 'Tiếng Anh B1.2', 4),
('INS325', 'Hệ điều hành', 3),
('INS326', 'Cấu trúc dữ liệu và giải thuật', 3),
('INS330', 'Cơ sở dữ liệu', 3),
('INS335', 'Thống kê máy tính', 3),
('INS336', 'Hệ thống thông tin địa lý (GIS)', 3),
('INS337', 'Lập trình thiết bị nhúng', 3),
('INS339', 'Hệ quản trị cơ sở dữ liệu', 3),
('INS358', 'Xử lý dữ liệu lớn', 2),
('INS359', 'Đồ án Phân tích thiết kế hệ thống thông tin', 1),
('INS360', 'Phân tích thiết kế hệ thống thông tin', 3),
('INS362', 'Khai phá dữ liệu', 3),
('INS366', 'Công nghệ XML và ứng dụng', 3),
('MAT312', 'Đại số tuyến tính', 2),
('MAT313', 'Giải tích', 3),
('MAT322', 'Xác suất - Thống kê', 3),
('MAT323', 'Cơ sở toán cho tin học', 2),
('MEM322', 'Vẽ kỹ thuật', 2),
('NEC321', 'Kiến trúc máy tính', 3),
('NEC329', 'Mạng máy tính', 3),
('NEC337', 'Quản trị mạng', 3),
('NEC345', 'Hệ điều hành LINUX', 3),
('NEC349', 'Đồ án Thiết kế và cài đặt mạng', 1),
('NEC350', 'Thiết kế và cài đặt mạng', 3),
('NEC351', 'Thiết bị mạng và cấu hình', 3),
('NEC354', 'Chuyên đề tốt nghiệp (Công nghệ thông tin)', 5),
('NEC355', 'An toàn mạng', 3),
('NEC357', 'Lập trình mạng', 3),
('NEC359', 'Truyền thông đa phương tiện', 2),
('PHY307', 'Thực hành Vật lý đại cương', 1),
('PHY308', 'Vật lý đại cương', 3),
('POL301', 'Những NL CB của CN Mac-Lenin 1', 2),
('POL307', 'Triết học Mác - Lênin', 3),
('POL308', 'Chủ nghĩa xã hội khoa học', 2),
('POL309', 'Kinh tế chính trị Mac-Lenin', 2),
('POL310', 'Lịch sử Đảng Cộng sản Việt Nam', 2),
('POL318', 'Những NL CB của CN Mac-Lenin 2', 3),
('POL320', 'Logic học đại cương', 2),
('POL333', 'Tư tưởng Hồ Chí Minh', 2),
('POL340', 'Đường lối CM của Đảng CS Việt Nam', 3),
('QPAD011', 'Giáo dục Quốc phòng - An ninh 1 (Đường lối quốc phòng của Đảng Cộng sản Việt Nam)', 3),
('QPAD02', 'Giáo dục Quốc phòng - An ninh 2 (Công tác quốc phòng và an ninh)', 2),
('QPAD033', 'Giáo dục Quốc phòng - An ninh 3 (Quân sự chung)', 1),
('QPAD044', 'Giáo dục Quốc phòng - An ninh 4 (Kỹ thuật chiến đấu bộ binh và chiến thuật)', 2),
('SH1', 'Sinh hoạt cuối tuần', 0),
('SOT301', 'Nhập môn ngành Công nghệ thông tin', 1),
('SOT303', 'Tin học cơ sở', 2),
('SOT304', 'TH Tin học cơ sở', 1),
('SOT3099', 'Nhập môn Mỹ thuật', 2),
('SOT315', 'Nhập môn lập trình', 3),
('SOT320', 'Kỹ thuật lập trình (2LT + 1TH)', 3),
('SOT331', 'Lập trình hướng đối tượng', 3),
('SOT332', 'Toán rời rạc', 3),
('SOT336', 'Kỹ thuật đồ họa', 3),
('SOT341', 'Xử lý ảnh', 3),
('SOT344', 'Trí tuệ nhân tạo', 3),
('SOT347', 'Thiết kế web', 3),
('SOT348', 'Thực tập ngành (6 tuần)', 3),
('SOT349', 'Công nghệ phần mềm', 3),
('SOT352', 'Quản lý dự án phần mềm', 3),
('SOT353', 'Mẫu thiết kế', 3),
('SOT355', 'Phát triển ứng dụng web', 3),
('SOT356', 'Lập trình thiết bị di động', 3),
('SOT357', 'Kiểm thử phần mềm', 3),
('SOT358', 'Đồ án Phát triển ứng dụng web', 1),
('SOT366', 'Phát triển phần mềm mã nguồn mở', 3),
('SOT375', 'Tiếng Anh chuyên ngành (CNTT)', 3),
('SOT376', 'Thực tập cơ sở Công nghệ thông tin', 2),
('SSH313', 'Pháp luật đại cương', 2),
('SSH316', 'Tâm lý học đại cương', 2),
('SSH317', 'Nhập môn Hành chính nhà nước', 2),
('SSH318', 'Kỹ năng giao tiếp và làm việc nhóm', 2),
('SSH320', 'Kỹ thuật soạn thảo văn bản', 2),
('SSH321', 'Cơ sở văn hóa Việt Nam', 2),
('SSH325', 'Kỹ năng giải quyết vấn đề và đưa ra quyết định', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocphan_ctdt`
--

CREATE TABLE `hocphan_ctdt` (
  `ID_HOCPHAN` varchar(20) NOT NULL,
  `ID_CTDT` varchar(20) NOT NULL,
  `LOAIHOCPHAN` enum('Bắt buộc','Tự chọn','','') NOT NULL,
  `ID_NHOMHOCPHAN` varchar(20) NOT NULL,
  `HOCKY` int(11) NOT NULL,
  `NAMHOC` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hocphan_ctdt`
--

INSERT INTO `hocphan_ctdt` (`ID_HOCPHAN`, `ID_CTDT`, `LOAIHOCPHAN`, `ID_NHOMHOCPHAN`, `HOCKY`, `NAMHOC`) VALUES
('85064', 'K62_CNTT', 'Bắt buộc', 'BATBUOC_TCQP', 1, '2020-2021'),
('MAT313', 'K62_CNTT', 'Bắt buộc', 'BATBUOC_TOAN', 1, '2020-2021'),
('SOT301', 'K62_CNTT', 'Bắt buộc', 'BATBUOC_CSN', 1, '2020-2021'),
('SOT315', 'K62_CNTT', 'Bắt buộc', 'BATBUOC_CSN', 1, '2020-2021'),
('SOT320', 'K62_CNTT', 'Bắt buộc', 'BATBUOC_CSN', 2, '2020-2021');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa_vien`
--

CREATE TABLE `khoa_vien` (
  `ID_KHOAVIEN` varchar(20) NOT NULL,
  `TEN_KHOAVIEN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa_vien`
--

INSERT INTO `khoa_vien` (`ID_KHOAVIEN`, `TEN_KHOAVIEN`) VALUES
('K_CK', 'Khoa Cơ khí'),
('K_CNTP', 'Khoa Công nghệ thực phẩm'),
('K_CNTT', 'Khoa Công nghệ thông tin'),
('K_DDT', 'Khoa Điện - Điện tử'),
('K_DL', 'Khoa Du lịch'),
('K_KHXHNV', 'Khoa Khoa học Xã hội & Nhân văn'),
('K_KT', 'Khoa Kinh tế'),
('K_KTGT', 'Khoa Kỹ thuật Giao thông'),
('K_KTTC', 'Khoa Kế toán Tài chính'),
('K_NN', 'Khoa Ngoại ngữ'),
('K_XD', 'Khoa Xây dựng'),
('TT_GDQPAN', 'Trung tâm GD Quốc phòng và An ninh'),
('V_CNSHMT', 'Viện Công nghệ Sinh học & Môi trường'),
('V_KTTS', 'Viện KH&CN Khai thác Thủy sản'),
('V_NTTS', 'Viện Nuôi trồng Thủy sản');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kqht`
--

CREATE TABLE `kqht` (
  `ID_SV` varchar(20) NOT NULL,
  `ID_DKHP` varchar(20) NOT NULL,
  `DIEMBOPHAN` float NOT NULL,
  `DIEMGIUAKY` float NOT NULL,
  `DIEMCUOIKY` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `kqht`
--

INSERT INTO `kqht` (`ID_SV`, `ID_DKHP`, `DIEMBOPHAN`, `DIEMGIUAKY`, `DIEMCUOIKY`) VALUES
('62131632', 'DKHP_85064_HK1', 9, 7, 8),
('62131632', 'DKHP_SOT320_HK1', 9, 8, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kthb`
--

CREATE TABLE `kthb` (
  `ID_KTHB` varchar(20) NOT NULL,
  `TEN_KTHB` varchar(200) NOT NULL,
  `DIEUKIEN` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `kthb`
--

INSERT INTO `kthb` (`ID_KTHB`, `TEN_KTHB`, `DIEUKIEN`) VALUES
('KKHT_KHA', 'Khuyến khích học tập loại khá', '- ĐTB: >7.0 - Điểm thi các môn: >5.5 - Điểm rèn luyện: >70');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `ID_LOP` varchar(20) NOT NULL,
  `TEN_LOP` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`ID_LOP`, `TEN_LOP`) VALUES
('62.CNTT-1', '62.CNTT-1'),
('62.CNTT-2', '62.CNTT-2'),
('62.CNTT-3', '62.CNTT-3'),
('62.CNTT-4', '62.CNTT-4'),
('62.TTQL-1', '62.TTQL-1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganh`
--

CREATE TABLE `nganh` (
  `ID_NGANH` varchar(20) NOT NULL,
  `TEN_NGANH` varchar(100) NOT NULL,
  `ID_KHOAVIEN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nganh`
--

INSERT INTO `nganh` (`ID_NGANH`, `TEN_NGANH`, `ID_KHOAVIEN`) VALUES
('7220201', 'Ngôn ngữ Anh', 'K_NN'),
('7310101', 'Kinh tế', 'K_KT'),
('7310105', 'Kinh tế phát triển', 'K_KT'),
('7340101', 'Quản trị kinh doanh', 'K_KT'),
('7340101A', 'Quản trị kinh doanh CLC', 'K_KT'),
('7340115', 'Marketing', 'K_KT'),
('7340121', 'Kinh doanh thương mại', 'K_KT'),
('7340201', 'Tài chính - Ngân hàng', 'K_KTTC'),
('7340301', 'Kế toán', 'K_KT'),
('7340301PHE', 'Kế toán CLC', 'K_KTTC'),
('7340405', 'Hệ thống thông tin quản lý', 'K_CNTT'),
('7380101', 'Luật', 'K_KHXHNV'),
('7420201', 'Công nghệ sinh học', 'V_CNSHMT'),
('7480201', 'Công nghệ thông tin', 'K_CNTT'),
('7480201PHE', 'Công nghệ thông tin CLC', 'K_CNTT'),
('7510202', 'Công nghệ chế tạo máy', 'K_CK'),
('7520103', 'Kỹ thuật cơ khí', 'K_CK'),
('7520114', 'Kỹ thuật cơ điện tử', 'K_CK'),
('7520115', 'Kỹ thuật nhiệt', 'K_CK'),
('7520116', 'Kỹ thuật cơ khí động lực', 'K_KTGT'),
('7520122', 'Kỹ thuật tàu thủy', 'K_KTGT'),
('7520130', 'Kỹ thuật ô tô', 'K_KTGT'),
('7520201', 'Kỹ thuật điện', 'K_DDT'),
('7520216', 'Kỹ thuật điều khiển và tự động hóa', 'K_DDT'),
('7520301', 'Kỹ thuật hóa học', 'K_CNTP'),
('7520320', 'Kỹ thuật môi trường', 'V_CNSHMT'),
('7540101', 'Công nghệ thực phẩm', 'K_CNTP'),
('7540105', 'Công nghệ chế biến thủy sản', 'K_CNTP'),
('7540105MP', 'Công nghệ chế biến thủy sản - MP', 'K_CNTP'),
('7580201', 'Kỹ thuật xây dựng', 'K_XD'),
('7580205', 'Kỹ thuật xây dựng công trình giao thông', 'K_XD'),
('7620301', 'Nuôi trồng thủy sản', 'V_NTTS'),
('7620301MP', 'Nuôi trồng thủy sản - MP', 'V_NTTS'),
('7620303', 'Khoa học thủy sản', 'V_KTTS'),
('7620305', 'Quản lý thủy sản', 'V_KTTS'),
('7810103', 'Quản trị dịch vụ du lịch và lữ hành', 'K_DL'),
('7810103P', 'Quản trị dịch vụ du lịch và lữ hành CLC', 'K_DL'),
('7810201', 'Quản trị khách sạn', 'K_DL'),
('7810201PHE', 'Quản trị khách sạn CLC', 'K_DL'),
('7840106', 'Khoa học hàng hải', 'K_KTGT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhomhocphan`
--

CREATE TABLE `nhomhocphan` (
  `ID_NHOMHOCPHAN` varchar(20) NOT NULL,
  `TEN_NHOMHOCPHAN` varchar(100) NOT NULL,
  `SOTC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhomhocphan`
--

INSERT INTO `nhomhocphan` (`ID_NHOMHOCPHAN`, `TEN_NHOMHOCPHAN`, `SOTC`) VALUES
('BATBUOC_CSN', 'Học phần bắt buộc - Cơ sở ngành', 34),
('BATBUOC_NGANH', 'Học phần bắt buộc - NGÀNH', 34),
('BATBUOC_NN', 'Học phần bắt buộc - Ngoại ngữ', 8),
('BATBUOC_TCQP', 'Học phần bắt buộc - Thể chất, Quốc phòng', 9),
('BATBUOC_TOAN', 'Học phần bắt buộc - Toán, Tin', 15),
('BATBUOC_XH', 'Học phần bắt buộc - Xã hội, nhân văn, nghệ thuật', 18),
('DATN', 'Đồ án tốt nghiệp', 10),
('THAYTHE_DATN', 'Học phần thay thế ĐATN', 10),
('TUCHON_CSN', 'Học phần tự chọn - Cơ sở ngành', 3),
('TUCHON_NGANH', 'Học phần tự chọn - Ngành', 9),
('TUCHON_TCQL', 'Học phần tự chọn - Thể chất, Quốc phòng', 2),
('TUCHON_XV', 'Học phần tự chọn - Xã hội, nhân văn, nghệ thuật', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuhuynh`
--

CREATE TABLE `phuhuynh` (
  `ID_PHUHUYNH` varchar(20) NOT NULL,
  `HOTEN_PHUHUYNH` varchar(100) NOT NULL,
  `SDT_PHUHUYNH` varchar(10) NOT NULL,
  `DIACHI_PHUHUYNH` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phuhuynh`
--

INSERT INTO `phuhuynh` (`ID_PHUHUYNH`, `HOTEN_PHUHUYNH`, `SDT_PHUHUYNH`, `DIACHI_PHUHUYNH`) VALUES
('PH_62130607', 'Trần Thị Mão', '0374312829', 'Thôn Phong Ấp - Xã Ninh Bình - TX.Ninh Hòa - Tỉnh Khánh Hòa'),
('PH_62130654', 'Trần Thị Mão', '0374312829', 'Thôn Phong Ấp - Xã Ninh Bình - TX.Ninh Hòa - Tỉnh Khánh Hòa'),
('PH_62130757', 'Trần Thị Mão', '0374312829', 'Thôn Phong Ấp - Xã Ninh Bình - TX.Ninh Hòa - Tỉnh Khánh Hòa'),
('PH_62130808', 'Trần Thị Mão', '0374312829', 'Thôn Phong Ấp -  Xã Ninh Bình - TX.Ninh Hòa - Tỉnh Khánh Hòa'),
('PH_62131058', 'Trần Thị Mão', '0374312829', 'Thôn Phong Ấp - Xã Ninh Bình - TX.Ninh Hòa - Tỉnh Khánh Hòa'),
('PH_62131549', 'Trần Thị Mão', '0374312829', 'Thôn Phong Ấp - Xã Ninh Bình - TX.Ninh Hòa - Tỉnh Khánh Hòa'),
('PH_62131600', 'Trần Thị Mão', '0374312829', 'Thôn Phong Ấp - Xã Ninh Bình - TX.Ninh Hòa - Tỉnh Khánh Hòa'),
('PH_62131632', 'Trần Thị Mão', '0374312829', 'Thôn Phong Ấp - Xã Ninh Bình - TX.Ninh Hòa - Tỉnh Khánh Hòa'),
('PH_62131842', 'Trần Thị Mão', '0374312829', 'Thôn Phong Ấp - Xã Ninh Bình - TX.Ninh Hòa - Tỉnh Khánh Hòa'),
('PH_62131883', 'Trần Thị Mão', '0374312829', 'Thôn Phong Ấp - Xã Ninh Bình - TX.Ninh Hòa - Tỉnh Khánh Hòa'),
('PH_62131996', 'Trần Thị Mão', '0374312829', 'Thôn Phong Ấp - Xã Ninh Bình - TX.Ninh Hòa - Tỉnh Khánh Hòa'),
('PH_62132006', 'Trần Thị Mão', '0374312829', 'Thôn Phong Ấp - Xã Ninh Bình - TX.Ninh Hòa - Tỉnh Khánh Hòa'),
('PH_62132199', 'Trần Thị Mão', '0374312829', 'Thôn Phong Ấp - Xã Ninh Bình - TX.Ninh Hòa - Tỉnh Khánh Hòa'),
('PH_62132217', 'Trần Thị Mão', '0374312829', 'Thôn Phong Ấp - Xã Ninh Bình - TX.Ninh Hòa - Tỉnh Khánh Hòa'),
('PH_62132395', 'Trần Thị Mão', '0374312829', 'Thôn Phong Ấp - Xã Ninh Bình - TX.Ninh Hòa - Tỉnh Khánh Hòa'),
('PH_62132540', 'Trần Thị Mão', '0374312829', 'Thôn Phong Ấp - Xã Ninh Bình - TX.Ninh Hòa - Tỉnh Khánh Hòa'),
('PH_62132542', 'Trần Thị Mão', '0374312829', 'Thôn Phong Ấp - Xã Ninh Bình - TX.Ninh Hòa - Tỉnh Khánh Hòa'),
('PH_62132593', 'Trần Thị Mão', '0374312829', 'Thôn Phong Ấp - Xã Ninh Bình - TX.Ninh Hòa - Tỉnh Khánh Hòa'),
('PH_62133085', 'Trần Thị Mão', '0374312829', 'Thôn Phong Ấp - Xã Ninh Bình - TX.Ninh Hòa - Tỉnh Khánh Hòa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen`
--

CREATE TABLE `quyen` (
  `ID_QUYEN` int(11) NOT NULL,
  `TEN_QUYEN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quyen`
--

INSERT INTO `quyen` (`ID_QUYEN`, `TEN_QUYEN`) VALUES
(0, 'admin'),
(1, 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `ID_SV` varchar(20) NOT NULL,
  `HOTEN_SV` varchar(100) NOT NULL,
  `KHOAHOC` int(11) NOT NULL,
  `ID_LOP` varchar(20) NOT NULL,
  `ID_NGANH` varchar(20) NOT NULL,
  `ID_KHOAVIEN` varchar(20) NOT NULL,
  `HEDAOTAO` varchar(20) NOT NULL,
  `NGAYSINH` date NOT NULL,
  `NOISINH` varchar(200) NOT NULL,
  `GIOITINH` varchar(10) NOT NULL,
  `DANTOC` varchar(20) NOT NULL,
  `TONGIAO` varchar(20) NOT NULL,
  `HOKHAU` varchar(200) NOT NULL,
  `ID_PHUHUYNH` varchar(20) NOT NULL,
  `DIACHI` varchar(200) NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `CCCD` varchar(20) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `TINHTRANG` varchar(20) NOT NULL,
  `ANH_TK` varchar(500) NOT NULL,
  `ID_QUYEN` int(11) NOT NULL,
  `MATKHAU` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`ID_SV`, `HOTEN_SV`, `KHOAHOC`, `ID_LOP`, `ID_NGANH`, `ID_KHOAVIEN`, `HEDAOTAO`, `NGAYSINH`, `NOISINH`, `GIOITINH`, `DANTOC`, `TONGIAO`, `HOKHAU`, `ID_PHUHUYNH`, `DIACHI`, `SDT`, `CCCD`, `EMAIL`, `TINHTRANG`, `ANH_TK`, `ID_QUYEN`, `MATKHAU`) VALUES
('62130607', 'Trương Khánh Hòa', 62, '62.CNTT-3', '7480201', 'K_CNTT', 'Đại học', '2002-09-12', 'Cam Ranh', 'Nam', 'Kinh', 'Không', 'Cam Ranh', 'PH_62130607', 'Nha Trang', '0935148655', '056094009012', 'hoa.tk.62kdtm@ntu.edu.vn', 'Còn học', 'https://i.pinimg.com/564x/44/4f/66/444f66853decdc7f052868bf357a0826.jpg', 1, 'Khanhhoa123@'),
('62130808', 'Hồ Hoàng Kha', 62, '62.CNTT-3', '7480201', 'K_CNTT', 'Đại học', '2002-09-16', 'Tuy Hòa', 'Nam', 'Kinh', 'Không', 'Tuy Hòa - Phú Yên', 'PH_62130808', 'Tuy Hòa - Phú Yên', '0858043593', '056302003813', 'kha.hh.62cntt@ntu.edu.vn', 'Còn học', 'https://i.pinimg.com/564x/2a/74/b2/2a74b24b4a93076d19f81524013c1052.jpg', 1, 'Hoangkha123@'),
('62131632', 'Phùng Thị Phượng', 62, '62.CNTT-3', '7480201', 'K_CNTT', 'Đại học', '2002-10-30', 'TP.Hồ Chí Minh', 'Nữ', 'Kinh', 'Không', 'Ninh Hòa', 'PH_62131632', 'Ninh Hòa', '0858043593', '056302003813', 'phuong.pt.62cntt@ntu.edu.vn', 'Còn học', 'https://scontent-sin6-3.xx.fbcdn.net/v/t39.30808-1/427928502_1961328670935452_7680637097679518554_n.jpg?stp=dst-jpg_s200x200&_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_ohc=KALPIB-nAYAQ7kNvgF888j3&_nc_ht=scontent-sin6-3.xx&oh=00_AYALclGOlAebZ-OZCOQjCErF9lrQ3b5l2-BL8eg9UOYe1Q&oe=665CE838', 1, 'Phuong123@'),
('62132542', 'Phạm Ngọc Tuyển', 62, '62.CNTT-1', '7480201', 'K_CNTT', 'Đại học', '2000-09-06', 'Cam Ranh', 'Nam', 'Kinh', 'Không', 'Ninh Hòa', 'PH_62132542', 'Ninh Hòa', '0828737469', '098389208471', 'puoniie3102@gmail.com', 'Còn học', 'https://i.pinimg.com/564x/89/90/48/899048ab0cc455154006fdb9676964b3.jpg', 0, ''),
('62133085', 'Nguyễn Thị Diễm Kiều', 62, '62.CNTT-3', '7480201', 'K_CNTT', 'Đại học', '2002-07-22', 'Phú Yên', 'Nữ', 'Kinh', 'Không', 'Phú Yên', 'PH_62133085', 'Nha Trang', '0987654321', '056302003814', 'kieu.ntd.62cntt@ntu.edu.vn', 'Đã tốt nghiệp', 'https://scontent.fdad3-5.fna.fbcdn.net/v/t39.30808-1/440414221_1897169547406483_7844081500385923857_n.jpg?stp=dst-jpg_p200x200&_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFcRDp-V3c5gy-HQmrpSHA4LCPv_js7oFcsI-_-OzugV9ZEYippDztu4F73paN8f574gs2YPKU11GsjWsA0pNNT&_nc_ohc=nPl4-aHpSEcQ7kNvgHkBnlc&_nc_ht=scontent.fdad3-5.fna&oh=00_AYATcRmWQ54cQz8kmQcNc6Wit_SMrUxWP_43fKdHBlXXkg&oe=665158A4', 1, 'Kieu123@');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien_kthb`
--

CREATE TABLE `sinhvien_kthb` (
  `ID_SV_KTHB` varchar(20) NOT NULL,
  `ID_SV` varchar(20) NOT NULL,
  `ID_KTHB` varchar(20) NOT NULL,
  `HOCKY` int(11) NOT NULL,
  `NAMHOC` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien_kthb`
--

INSERT INTO `sinhvien_kthb` (`ID_SV_KTHB`, `ID_SV`, `ID_KTHB`, `HOCKY`, `NAMHOC`) VALUES
('SV_KTHB_000000001', '62131632', 'KKHT_KHA', 1, '2020-2021');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sv_ctdt`
--

CREATE TABLE `sv_ctdt` (
  `ID_SV` varchar(20) NOT NULL,
  `ID_CTDT` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sv_ctdt`
--

INSERT INTO `sv_ctdt` (`ID_SV`, `ID_CTDT`) VALUES
('62130607', 'K62_CNTT'),
('62130808', 'K62_CNTT'),
('62131632', 'K62_CNTT'),
('62133085', 'K62_CNTT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tieuchi_drl`
--

CREATE TABLE `tieuchi_drl` (
  `ID_TIEUCHI` varchar(20) NOT NULL,
  `TEN_TIEUCHI` varchar(200) NOT NULL,
  `MOTA` varchar(200) DEFAULT NULL,
  `DIEMCHUAN` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tieuchi_drl`
--

INSERT INTO `tieuchi_drl` (`ID_TIEUCHI`, `TEN_TIEUCHI`, `MOTA`, `DIEMCHUAN`) VALUES
('TC001', 'TC1_Kết quả học tập trong học kỳ ', NULL, 4),
('TC002', 'TC2_Tham gia các hoạt động học thuật', NULL, 10),
('TC003', 'TC3_Xếp loại về học tập', NULL, 5),
('TC004', 'TC4_Kết quả học tập học kỳ luôn duy trì ở loại khá trở lên hoặc vượt lên ít nhất một bậc xếp loại đối với loại kém, trung bình so với học kỳ trước', NULL, 1),
('TC005', 'TC5_Ý thức và việc chấp hành nội quy, quy chế trong nhà trường', NULL, 25),
('TC006', 'TC6_Đánh giá về ý thức và việc tham gia các hoạt động rèn luyện chính trị - xã hội, văn hóa Việt Nam, TDTT, phòng chống TNXH', NULL, 20),
('TC007', 'TC7_ĐÁNH GIÁ VỀ PHẨM CHẤT CÔNG DÂN VÀ QUAN HỆ CỘNG ĐỒNG', NULL, 25),
('TC008', 'TC8_ĐÁNH GIÁ VỀ Ý THỨC VÀ KẾT QUẢ THAM GIA HOẠT ĐỘNG CỦA ĐOÀN THỂ, TỔ CHỨC TRONG NHÀ TRƯỜNG ĐẠT THÀNH TÍCH TRONG HỌC TẬP VÀ RÈN LUYỆN', NULL, 10);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cbnv`
--
ALTER TABLE `cbnv`
  ADD PRIMARY KEY (`ID_CBNV`),
  ADD KEY `FK_ROLE_CBNV` (`ID_QUYEN`);

--
-- Chỉ mục cho bảng `chamdrl`
--
ALTER TABLE `chamdrl`
  ADD PRIMARY KEY (`ID_BANGDIEM`),
  ADD KEY `FK_SV_DRL` (`ID_SV`),
  ADD KEY `FK_CBNV_DRL` (`ID_CBNV`);

--
-- Chỉ mục cho bảng `chitietdrl`
--
ALTER TABLE `chitietdrl`
  ADD PRIMARY KEY (`ID_CHITIET_DRL`),
  ADD KEY `FK_BANG_DRL` (`ID_BANGDIEM`),
  ADD KEY `FK_TIEUCHI` (`ID_TIEUCHI`);

--
-- Chỉ mục cho bảng `ctdt`
--
ALTER TABLE `ctdt`
  ADD PRIMARY KEY (`ID_CTDT`),
  ADD KEY `FK_CTDT_NG` (`ID_NGANH`);

--
-- Chỉ mục cho bảng `dkhp`
--
ALTER TABLE `dkhp`
  ADD PRIMARY KEY (`ID_DKHP`,`ID_SV`),
  ADD KEY `FK_DKHP_HP` (`ID_HOCPHAN`),
  ADD KEY `FK_SV_DKHP` (`ID_SV`);

--
-- Chỉ mục cho bảng `hocphan`
--
ALTER TABLE `hocphan`
  ADD PRIMARY KEY (`ID_HOCPHAN`);

--
-- Chỉ mục cho bảng `hocphan_ctdt`
--
ALTER TABLE `hocphan_ctdt`
  ADD PRIMARY KEY (`ID_HOCPHAN`,`ID_CTDT`),
  ADD KEY `FK_HP_CTDT` (`ID_CTDT`),
  ADD KEY `FK_NHOMHOCPHAN` (`ID_NHOMHOCPHAN`);

--
-- Chỉ mục cho bảng `khoa_vien`
--
ALTER TABLE `khoa_vien`
  ADD PRIMARY KEY (`ID_KHOAVIEN`);

--
-- Chỉ mục cho bảng `kqht`
--
ALTER TABLE `kqht`
  ADD PRIMARY KEY (`ID_SV`,`ID_DKHP`),
  ADD KEY `FK_KQ_DK` (`ID_DKHP`);

--
-- Chỉ mục cho bảng `kthb`
--
ALTER TABLE `kthb`
  ADD PRIMARY KEY (`ID_KTHB`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`ID_LOP`);

--
-- Chỉ mục cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`ID_NGANH`),
  ADD KEY `FK_NGANH_KHOAVIEN` (`ID_KHOAVIEN`);

--
-- Chỉ mục cho bảng `nhomhocphan`
--
ALTER TABLE `nhomhocphan`
  ADD PRIMARY KEY (`ID_NHOMHOCPHAN`);

--
-- Chỉ mục cho bảng `phuhuynh`
--
ALTER TABLE `phuhuynh`
  ADD PRIMARY KEY (`ID_PHUHUYNH`);

--
-- Chỉ mục cho bảng `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`ID_QUYEN`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`ID_SV`),
  ADD KEY `FK_SINHVIEN_LOP` (`ID_LOP`),
  ADD KEY `FK_SINHVIEN_NGANH` (`ID_NGANH`),
  ADD KEY `ID_PHUHUYNH` (`ID_PHUHUYNH`),
  ADD KEY `FK_SINHVIEN_KHOAVIEN` (`ID_KHOAVIEN`),
  ADD KEY `ID_ROLE_SV` (`ID_QUYEN`);

--
-- Chỉ mục cho bảng `sinhvien_kthb`
--
ALTER TABLE `sinhvien_kthb`
  ADD PRIMARY KEY (`ID_SV_KTHB`),
  ADD KEY `FK_KTHB` (`ID_KTHB`),
  ADD KEY `FK_SV_KTHB` (`ID_SV`);

--
-- Chỉ mục cho bảng `sv_ctdt`
--
ALTER TABLE `sv_ctdt`
  ADD PRIMARY KEY (`ID_SV`,`ID_CTDT`),
  ADD KEY `FK_CTDT` (`ID_CTDT`);

--
-- Chỉ mục cho bảng `tieuchi_drl`
--
ALTER TABLE `tieuchi_drl`
  ADD PRIMARY KEY (`ID_TIEUCHI`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cbnv`
--
ALTER TABLE `cbnv`
  ADD CONSTRAINT `FK_ROLE_CBNV` FOREIGN KEY (`ID_QUYEN`) REFERENCES `quyen` (`ID_QUYEN`);

--
-- Các ràng buộc cho bảng `chamdrl`
--
ALTER TABLE `chamdrl`
  ADD CONSTRAINT `FK_CBNV_DRL` FOREIGN KEY (`ID_CBNV`) REFERENCES `cbnv` (`ID_CBNV`),
  ADD CONSTRAINT `FK_SV_DRL` FOREIGN KEY (`ID_SV`) REFERENCES `sinhvien` (`ID_SV`);

--
-- Các ràng buộc cho bảng `chitietdrl`
--
ALTER TABLE `chitietdrl`
  ADD CONSTRAINT `FK_BANG_DRL` FOREIGN KEY (`ID_BANGDIEM`) REFERENCES `chamdrl` (`ID_BANGDIEM`),
  ADD CONSTRAINT `FK_TIEUCHI` FOREIGN KEY (`ID_TIEUCHI`) REFERENCES `tieuchi_drl` (`ID_TIEUCHI`);

--
-- Các ràng buộc cho bảng `ctdt`
--
ALTER TABLE `ctdt`
  ADD CONSTRAINT `FK_CTDT_NG` FOREIGN KEY (`ID_NGANH`) REFERENCES `nganh` (`ID_NGANH`);

--
-- Các ràng buộc cho bảng `dkhp`
--
ALTER TABLE `dkhp`
  ADD CONSTRAINT `FK_DKHP_HP` FOREIGN KEY (`ID_HOCPHAN`) REFERENCES `hocphan` (`ID_HOCPHAN`),
  ADD CONSTRAINT `FK_SV_DKHP` FOREIGN KEY (`ID_SV`) REFERENCES `sinhvien` (`ID_SV`);

--
-- Các ràng buộc cho bảng `hocphan_ctdt`
--
ALTER TABLE `hocphan_ctdt`
  ADD CONSTRAINT `FK_HOCPHAN` FOREIGN KEY (`ID_HOCPHAN`) REFERENCES `hocphan` (`ID_HOCPHAN`),
  ADD CONSTRAINT `FK_HP_CTDT` FOREIGN KEY (`ID_CTDT`) REFERENCES `ctdt` (`ID_CTDT`),
  ADD CONSTRAINT `FK_NHOMHOCPHAN` FOREIGN KEY (`ID_NHOMHOCPHAN`) REFERENCES `nhomhocphan` (`ID_NHOMHOCPHAN`);

--
-- Các ràng buộc cho bảng `kqht`
--
ALTER TABLE `kqht`
  ADD CONSTRAINT `FK_KQ_DK` FOREIGN KEY (`ID_DKHP`) REFERENCES `dkhp` (`ID_DKHP`),
  ADD CONSTRAINT `FK_KQ_SV` FOREIGN KEY (`ID_SV`) REFERENCES `sinhvien` (`ID_SV`);

--
-- Các ràng buộc cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD CONSTRAINT `FK_NGANH_KHOAVIEN` FOREIGN KEY (`ID_KHOAVIEN`) REFERENCES `khoa_vien` (`ID_KHOAVIEN`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `FK_SINHVIEN_KHOAVIEN` FOREIGN KEY (`ID_KHOAVIEN`) REFERENCES `khoa_vien` (`ID_KHOAVIEN`),
  ADD CONSTRAINT `FK_SINHVIEN_LOP` FOREIGN KEY (`ID_LOP`) REFERENCES `lop` (`ID_LOP`),
  ADD CONSTRAINT `FK_SINHVIEN_NGANH` FOREIGN KEY (`ID_NGANH`) REFERENCES `nganh` (`ID_NGANH`),
  ADD CONSTRAINT `ID_PHUHUYNH` FOREIGN KEY (`ID_PHUHUYNH`) REFERENCES `phuhuynh` (`ID_PHUHUYNH`),
  ADD CONSTRAINT `ID_ROLE_SV` FOREIGN KEY (`ID_QUYEN`) REFERENCES `quyen` (`ID_QUYEN`);

--
-- Các ràng buộc cho bảng `sinhvien_kthb`
--
ALTER TABLE `sinhvien_kthb`
  ADD CONSTRAINT `FK_KTHB` FOREIGN KEY (`ID_KTHB`) REFERENCES `kthb` (`ID_KTHB`),
  ADD CONSTRAINT `FK_SV_KTHB` FOREIGN KEY (`ID_SV`) REFERENCES `sinhvien` (`ID_SV`);

--
-- Các ràng buộc cho bảng `sv_ctdt`
--
ALTER TABLE `sv_ctdt`
  ADD CONSTRAINT `FK_CTDT` FOREIGN KEY (`ID_CTDT`) REFERENCES `ctdt` (`ID_CTDT`),
  ADD CONSTRAINT `FK_SVCTDT` FOREIGN KEY (`ID_SV`) REFERENCES `sinhvien` (`ID_SV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
