-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2022 lúc 04:37 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_dongho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `password`, `admin_name`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Thuận Phát'),
(2, 'admin2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Nhựt Trường');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `baiviet_id` int(11) NOT NULL,
  `tenbaiviet` varchar(100) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `danhmuctin_id` int(11) NOT NULL,
  `baiviet_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`baiviet_id`, `tenbaiviet`, `tomtat`, `noidung`, `danhmuctin_id`, `baiviet_image`) VALUES
(1, 'BLACK FRIDAY LÀ NGÀY GÌ? NHỮNG CÚ LỪA GIẢM GIÁ CỰC MẠNH', 'Khi nói đến “Black Friday là gì” thì lập tức bạn nghĩ ngay đến việc săn hàng giảm giá đợt cuối năm. Tuy nhiên, bên cạnh các mặt hàng chính hãng thì các nơi bán luôn tranh thủ cơ hội để đẩy hàng tồn. Vậy, Black Friday là ngày gì và làm sao để tránh được những “bẫy lừa” chuyên nghiệp sắp tới?', 'Mặc dù Black Friday rất phổ biến nhưng nguồn gốc thật sự của ngày lễ này vẫn đang là một dấu chấm hỏi. Cụ thể:\r\n\r\nTheo Wikipedia (Bách khoa toàn thư thế giới), Black Friday được nhắc đến khi tình trạng tắc nghẽn giao thông tại Philadelphia diễn ra sau ngày Lễ Tạ Ơn năm 1965. Khi đó, hàng trăm ngàn người Mỹ chen chúc nhau trên các con phố để sửa soạn mua sắm cho lễ Noel.', 1, 'giaitri.png'),
(2, 'TỪ ĐIỂN KIẾN THỨC ĐỒNG HỒ, TRA CỨU Ý NGHĨA, GIẢI THÍCH THUẬT NGỮ ANH-VIỆT', 'Thế giới đồng hồ có vô vàn kiến thức để khám phá nhưng nếu không hệ thống thì hẳn rất khó để tìm hiểu về đồng hồ, đó là lý do mà bạn cần đến bộ từ điển đồng hồ đeo tay mà Hải Triều đã tổng hợp bên dưới được phân chia thành các phần: bộ máy đồng hồ, vật liệu đồng hồ, chức năng đồng hồ, thuật ngữ đồng hồ, trang trí hoàn thiện đồng hồ, linh kiện phụ tùng đồng hồ.', 'BỘ MÁY ĐỒNG HỒ\r\nTiếng Anh gọi là Movement/Watch Movement, viết tắt là Movt/Mov’t, hoặc Caliber và Calibre trong tiếng Pháp, viết tắt là Cal. Bộ máy là linh hồn của đồng hồ, vận hành các chức năng và được bảo vệ trong bộ vỏ bên ngoài.\r\nCƠ – CƠ KHÍ – MECHANICAL\r\nCách gọi chung tất cả bộ máy (tự động, lên dây thủ công) được tạo ra từ các bộ phận cơ khí, không có mạch điện, hoạt động bằng nguồn năng lượng sinh ra từ dây cót. Thường dùng để chỉ máy lên dây thủ công.', 2, 'tudien.png'),
(3, 'ĐỒNG HỒ DYOSS', 'Đồng hồ Dyoss tự thiết kế gây ấn tượng với phương châm “Không bao giờ nhìn lại”, mang ý nghĩa sản phẩm tốt hơn theo thời gian. Để hiểu thêm về chất lượng của thương hiệu này, hãy cùng Hải Triều khám phá Dyoss là đồng hồ nước nào, có tốt không. ', 'Dyoss Watch xuất xứ ở đâu cũng ảnh hưởng ít nhiều đến độ uy tín của sản phẩm. Chúng tôi xin giải đáp đây là thương hiệu đồng hồ được sáng lập với nhóm du học sinh gốc Việt. Thành lập từ năm 2014, Dyoss Watch – đồng hồ tự thiết kế thu hút sự chú ý nhờ cách thức kinh doanh độc đáo.\r\n\r\nThương hiệu Việt đem đến trải nghiệm mới lạ khi để khách hàng tự lên ý tưởng cho kiểu dáng, màu sắc. Bạn có thể truy cập website http://custom.dyoss.com để tham gia vào khâu thiết kế. Dyoss cũng thể hiện rõ sứ mệnh này qua ý nghĩa tên hãng Design Your Own Styles. \r\n\r\nNếu muốn phá cách với cá tính riêng thì trưng diện cùng đồng hồ Dyoss là lựa chọn lý tưởng. Biến tấu trong phong cách nhưng nét đẹp tối giản luôn là biểu tượng trên “cỗ máy thời gian” nhà Dyoss. ', 3, 'dongho1.png'),
(4, 'REVIEW ĐỒNG HỒ SEIKO EXCELINE', 'Review đồng hồ Seiko Exceline, các chức năng và mức giá của Seiko Exceline Lady chính hãng giá bao nhiêu? Mẫu đồng hồ nữ này có gì nổi bật, tìm hiểu cùng Đồng Hồ Hải Triều!', 'Về nguồn gốc xuất xứ thương hiệu, Seiko là một hãng đồng hồ danh tiếng lâu năm – với hơn 130 năm kinh nghiệm. Đến từ đất nước mặt trời mọc, Nhật Bản, Seiko là một thương hiệu mang những nét đặc trưng của quốc gia này, với mức giá hợp lý cho người dùng cùng với sự bền bỉ của những sản phẩm', 4, 'tinmoi3.jpg'),
(5, 'ĐÁNH GIÁ ĐỒNG HỒ ORIENT SUN AND MOON GEN', 'Khi khách hàng có nhu cầu mua sắm đồng hồ cơ Nhật Bản, thì Hải Triều luôn ưu ái nhiều hơn cho Orient bởi các sản phẩm của hãng thật sự tốt. Trong đó, bộ sưu tập đồng hồ Orient Sun and Moon Gen 3 hẳn là không còn quá xa lạ đối với anh em chơi đồng hồ tại Việt Nam.', 'Orient Sun and Moon ra mắt lần đầu tiên vào năm 2014, tính đến thời điểm hiện tại, ​​Orient Sun and Moon đã xuất hiện gần 10 năm trên thị trường.\r\n\r\n“Tuổi thọ” này không quá cao nhưng cũng không phải dạng vừa và Orient Sun and Moon được xếp vào những bộ sưu tập có tuổi đời cao nhất của Orient.\r\n\r\n', 4, 'tinmoi2.png'),
(6, 'ĐỒNG HỒ MICHAEL KORS XÁCH TAY TẠI MỸ CÓ RẺ HƠN Ở VIỆT NAM?', 'Thay vì chọn mua ở đại lý ủy quyền, nhiều người lại có xu hướng mua đồng hồ Michael Kors xách tay. Vậy trên thực tế, bài toán về đồng hồ Michael Kors tại Mỹ có thật sự rẻ hơn khi mua ở Việt Nam?   MỤC LỤC › Xách tay đồng hồ Michael Kors tại Mỹ nguy hiểm khôn lường Thứ nhất, mặt hàng…', '', 4, 'tinmoi1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(3, 'Cặp đôi'),
(4, 'Nữ'),
(5, 'Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc_tin`
--

CREATE TABLE `tbl_danhmuc_tin` (
  `danhmuctin_id` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc_tin`
--

INSERT INTO `tbl_danhmuc_tin` (`danhmuctin_id`, `tendanhmuc`) VALUES
(1, 'Giải Trí'),
(2, 'Từ Điểm Kiến Thức Về Đồng Hồ'),
(3, 'Đồng Hồ'),
(4, 'Tin Tức Mới Nhất');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `donhang_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mahang` varchar(50) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tinhtrang` int(11) NOT NULL,
  `huydon` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`donhang_id`, `sanpham_id`, `soluong`, `mahang`, `khachhang_id`, `ngaythang`, `tinhtrang`, `huydon`) VALUES
(71, 31, 1, '4537', 0, '2022-11-20 14:21:46', 0, 0),
(72, 31, 1, '8977', 39, '2022-11-20 14:23:53', 0, 0),
(73, 30, 1, '8977', 39, '2022-11-20 14:23:53', 0, 0),
(74, 28, 1, '1502', 40, '2022-11-20 14:26:07', 0, 0),
(75, 33, 1, '1502', 40, '2022-11-20 14:26:07', 0, 0),
(76, 31, 10, '3719', 40, '2022-11-20 15:28:27', 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giaodich`
--

CREATE TABLE `tbl_giaodich` (
  `giaodich_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `magiaodich` varchar(50) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `khachhang_id` int(11) NOT NULL,
  `tinhtrangdon` int(11) NOT NULL DEFAULT 0,
  `huydon` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_giaodich`
--

INSERT INTO `tbl_giaodich` (`giaodich_id`, `sanpham_id`, `soluong`, `magiaodich`, `ngaythang`, `khachhang_id`, `tinhtrangdon`, `huydon`) VALUES
(3, 21, 2, '5737', '2019-10-04 02:57:00', 23, 0, 0),
(4, 26, 1, '6219', '2019-10-04 02:58:34', 24, 0, 0),
(5, 25, 3, '7785', '2019-10-04 03:11:52', 25, 0, 0),
(6, 22, 5, '7785', '2019-10-04 03:11:52', 25, 0, 0),
(7, 27, 2, '7785', '2019-10-04 03:11:52', 25, 0, 0),
(8, 21, 1, '5396', '2019-10-04 03:49:08', 26, 0, 0),
(9, 20, 3, '5396', '2019-10-04 03:49:08', 26, 0, 0),
(10, 20, 3, '7914', '2019-10-05 05:38:42', 28, 0, 0),
(11, 26, 1, '7914', '2019-10-05 05:38:42', 28, 0, 0),
(12, 25, 2, '6687', '2019-10-09 09:48:42', 27, 1, 2),
(13, 26, 3, '6687', '2019-10-09 09:48:42', 27, 1, 2),
(14, 27, 1, '6687', '2019-10-09 09:48:42', 27, 1, 2),
(15, 22, 1, '1125', '2019-10-09 09:47:17', 27, 1, 2),
(16, 24, 1, '1125', '2019-10-09 09:47:17', 27, 1, 2),
(17, 20, 1, '555', '2019-10-09 09:50:08', 27, 0, 2),
(18, 21, 2, '4917', '2022-11-10 16:57:20', 29, 0, 0),
(19, 27, 1, '4917', '2022-11-10 16:57:20', 29, 0, 0),
(20, 20, 1, '1639', '2022-11-10 16:57:45', 29, 0, 0),
(21, 21, 1, '6626', '2022-11-11 03:33:38', 30, 1, 1),
(22, 27, 1, '2290', '2022-11-14 04:07:26', 31, 0, 0),
(23, 21, 1, '2290', '2022-11-14 04:07:26', 31, 0, 0),
(24, 21, 1, '3161', '2022-11-19 16:03:42', 32, 0, 1),
(25, 33, 1, '4246', '2022-11-18 15:04:13', 33, 1, 0),
(26, 31, 1, '555', '2022-11-16 13:07:56', 34, 0, 0),
(27, 30, 1, '1783', '2022-11-19 15:51:59', 0, 0, 0),
(28, 31, 1, '1783', '2022-11-19 15:51:59', 0, 0, 0),
(29, 31, 1, '7853', '2022-11-19 15:52:55', 0, 0, 0),
(30, 31, 1, '1308', '2022-11-19 15:53:25', 0, 0, 0),
(31, 30, 1, '192', '2022-11-19 15:53:33', 0, 0, 0),
(32, 30, 1, '8122', '2022-11-19 15:54:20', 0, 0, 0),
(33, 30, 1, '7569', '2022-11-19 16:04:25', 32, 1, 0),
(34, 31, 1, '918', '2022-11-20 03:55:59', 32, 0, 0),
(35, 30, 1, '9032', '2022-11-20 04:37:37', 32, 0, 0),
(36, 31, 2, '4585', '2022-11-20 05:47:46', 0, 0, 0),
(37, 31, 1, '6617', '2022-11-20 05:50:32', 32, 0, 0),
(38, 31, 1, '8391', '2022-11-20 05:51:37', 37, 0, 0),
(39, 31, 10, '9885', '2022-11-20 05:53:11', 37, 0, 0),
(40, 31, 10, '8427', '2022-11-20 05:55:02', 37, 0, 0),
(41, 31, 10, '200', '2022-11-20 05:55:12', 37, 0, 0),
(42, 31, 10, '5009', '2022-11-20 05:55:38', 37, 0, 0),
(43, 33, 1, '3895', '2022-11-20 13:58:58', 32, 0, 0),
(44, 30, 1, '8682', '2022-11-20 14:00:05', 32, 0, 0),
(45, 30, 1, '2088', '2022-11-20 14:20:24', 32, 0, 1),
(46, 31, 1, '2517', '2022-11-20 15:22:40', 32, 0, 1),
(47, 29, 1, '2517', '2022-11-20 15:22:40', 32, 0, 1),
(48, 31, 1, '4537', '2022-11-20 14:21:46', 0, 0, 0),
(49, 31, 1, '8977', '2022-11-20 14:23:53', 39, 0, 0),
(50, 30, 1, '8977', '2022-11-20 14:23:53', 39, 0, 0),
(51, 28, 1, '1502', '2022-11-20 14:26:07', 40, 0, 0),
(52, 33, 1, '1502', '2022-11-20 14:26:07', 40, 0, 0),
(53, 31, 10, '3719', '2022-11-20 15:28:27', 40, 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `giohang_id` int(11) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `giasanpham` varchar(50) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`giohang_id`, `tensanpham`, `sanpham_id`, `giasanpham`, `hinhanh`, `soluong`) VALUES
(56, 'FOUETTÉ OR-FAIRY', 33, '40000000', 'nu2.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `khachhang_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `giaohang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`khachhang_id`, `name`, `phone`, `address`, `note`, `email`, `password`, `giaohang`) VALUES
(32, 'Nguyễn Thuận Phát', '+84977739431', 'vinh long', '123', 'phatb1910429@student.ctu.edu.vn', 'e10adc3949ba59abbe56e057f20f883e', 0),
(33, 'Nguyễn Thuận Phát', '+84977739431', 'vinh long', 'test1', 'thphat@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(34, 'thuan phat', '+84977739431', 'vinh long', '123', 'phatb1910429@student.ctu.edu.vn', '8c5c8d5110633d0341597a95de67cfbe', 1),
(35, 'Nguyễn Thuận Phát', '+84977739431', 'vinh long', '123', 'phatb1910429@student.ctu.edu.vn', 'e10adc3949ba59abbe56e057f20f883e', 0),
(36, 'Nguyễn Thuận Phát', '+84977739431', 'vinh long', '123', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(37, 'tan le', '0989526656', 'binh thuy', 'tesst', 'tanle@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(38, '232', '123123213', '123', '12312', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(39, 'truong', '0965155555', 'tra on', 'hot boy vinh xuan', 'nttruong@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(40, 'Thuận Phát', '09887515252', 'Trà Ôn, Vĩnh Long', 'Gò Tranh', 'phat@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `sanpham_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sanpham_name` varchar(255) NOT NULL,
  `sanpham_chitiet` text NOT NULL,
  `sanpham_mota` text NOT NULL,
  `sanpham_gia` varchar(100) NOT NULL,
  `sanpham_giakhuyenmai` varchar(100) NOT NULL,
  `sanpham_active` int(11) NOT NULL,
  `sanpham_hot` int(11) NOT NULL,
  `sanpham_soluong` int(11) NOT NULL,
  `sanpham_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`sanpham_id`, `category_id`, `sanpham_name`, `sanpham_chitiet`, `sanpham_mota`, `sanpham_gia`, `sanpham_giakhuyenmai`, `sanpham_active`, `sanpham_hot`, `sanpham_soluong`, `sanpham_image`) VALUES
(17, 2, 'Tủ lạnh A10', 'dasdasdasadasd', 'dasdasddsadasds', '6000000', '5500000', 0, 0, 10, 'k2.jpg'),
(22, 2, 'Tủ lạnh sony ', 'dasdad', 'dasdas', '75000000', '68000000', 0, 0, 5, 'k2.jpg'),
(23, 2, 'Tủ lạnh Samsung', 'dasdaddasda', 'dasdasdasd', '105000000', '94000000', 0, 0, 10, 'k2.jpg'),
(24, 1, 'Laptop Sony', 'sfsdf', 'adsf', '6000000', '5500000', 0, 0, 10, 'mk6.jpg'),
(25, 1, 'Laptop A15', 'sfsdf', 'adsf', '6600000', '5300000', 0, 0, 10, 'mk6.jpg'),
(26, 3, 'CASIO ĐÔI', 'Có thanh toán: Trả Góp khi mua Online (Qua thẻ tín dụng)', 'Mẫu Casio đôi mạ vàng sang trọng trên phần dây vỏ đồng hồ, thiết kế độc đáo với các ô lịch tạo nên kiểu dáng 6 kim trên nền mặt số.', '105000000', '99000000', 0, 0, 10, 'capdoi2-removebg-preview.png'),
(27, 3, 'DOXA ĐÔI', 'Có thanh toán: Trả Góp khi mua Online (Qua thẻ tín dụng)', 'Mẫu Doxa đôi phiên bản kim giây với thiết kế không đồng trục tạo nên vẻ độc đáo trên mặt số, vỏ máy mạ bạc sang trọng kiểu máy pin mỏng chỉ 6mm.', '37330000', '35330000', 0, 0, 10, 'capdoi1-removebg-preview.png'),
(28, 3, 'CALVIN KLEIN ĐÔI', 'Có thanh toán: Trả Góp khi mua Online (Qua thẻ tín dụng)', 'Mẫu Calvin Klein đôi dây đeo phiên bản dây lưới tone vàng hồng thời trang phối cùng thiết kế tối giản 2 kim trên nền mặt số.', '50000000', '45000000', 0, 0, 10, 'capdoi3-removebg-preview.png'),
(29, 5, 'TISSOT ', 'Có thanh toán: Trả Góp khi mua Online (Qua thẻ tín dụng)', 'Đồng hồ Tissot T035.410.16.051.00 với thiết kế nền đen mặt số, nổi bật kim chỉ và gạch số mỏng, dây đeo bằng da đen bóng, làm tô điểm nét mạnh mẽ, nam tính cho phái mạnh.', '70000000', '60000000', 0, 0, 10, 'nam1.jpg'),
(30, 5, 'CITIZEN ', 'Có thanh toán: Trả Góp khi mua Online (Qua thẻ tín dụng)', 'Đồng hồ nam Citizen NJ0080-50A kích thước mặt số dày dặn với trải nghiệm bộ máy cơ dành cho phái nam, nổi bật với kim chỉ kiểu dáng mỏng tinh tế được phối tông màu xanh trẻ trung trên nền mặt số trắng trang nhã.', '55000000', '45999999', 0, 0, 10, 'nam2.jpg'),
(31, 5, 'DOXA D203SBU', 'Có thanh toán: Trả Góp khi mua Online (Qua thẻ tín dụng)', 'Mẫu Doxa D203SBU kiểu dáng mỏng mang lại vẻ ngoài trẻ trung tinh tế với nền mặt số được tạo hình hoa văn nổi phối cùng tông màu xanh nổi bật thời trang trước nền mặt kính Sapphire.', '90000000', '85000000', 0, 0, 0, 'nam3.jpg'),
(32, 4, 'DOXA EXECUTIVE', 'Có thanh toán: Trả Góp khi mua Online (Qua thẻ tín dụng)', 'Ẩn bên dưới mặt kính Sapphire với nền mặt số được gia công tinh xảo đính các viên kim cương tạo nên phụ kiện thời trang sang trọng dành cho phái đẹp với phiên bản Doxa D221RSV.', '15000000', '10000000', 0, 0, 10, 'nu1.jpg'),
(33, 4, 'FOUETTÉ OR-FAIRY', 'Có thanh toán: Trả Góp khi mua Online (Qua thẻ tín dụng)', 'Mẫu Fouetté OR-FAIRY II phiên bản giới hạn 99 chiếc trên toàn thế giới mang trên mình một thiết kế độc đáo khắc họa lên hình ảnh một vũ công ba lê trên nền mặt số xà cừ size 38mm.', '40000000', '35000000', 0, 0, 10, 'nu2.jpg'),
(34, 4, 'DANIEL WELLINGTON', 'Có thanh toán: Trả Góp khi mua Online (Qua thẻ tín dụng)', 'Mẫu đồng hồ nữ Daniel Wellington DW00100161 khi kết hợp giữa vỏ máy cùng dây đeo kim loại dạng lưới cùng chung tông màu vàng hồng tạo nên phụ kiện thời trang trẻ trung dành riêng cho phái đẹp.', '90000000', '850000000', 0, 0, 10, 'nu3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` varchar(100) NOT NULL,
  `slider_caption` text NOT NULL,
  `slider_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_image`, `slider_caption`, `slider_active`) VALUES
(1, 'slider1.png', 'Sale up to 50%', 1),
(2, 'b2.jpg', 'Minimalism and Practicality', 2),
(3, 'slider3.jpg', 'Giảm 50% tất cả sản phẩm', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`baiviet_id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_danhmuc_tin`
--
ALTER TABLE `tbl_danhmuc_tin`
  ADD PRIMARY KEY (`danhmuctin_id`);

--
-- Chỉ mục cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`donhang_id`);

--
-- Chỉ mục cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  ADD PRIMARY KEY (`giaodich_id`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`giohang_id`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`khachhang_id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`sanpham_id`);

--
-- Chỉ mục cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `baiviet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc_tin`
--
ALTER TABLE `tbl_danhmuc_tin`
  MODIFY `danhmuctin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `donhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  MODIFY `giaodich_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `giohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
