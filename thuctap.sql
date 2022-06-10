-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 07, 2022 lúc 11:41 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thuctap`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_cate` int(11) NOT NULL,
  `text` text NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp(),
  `img` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `title`, `slug`, `id_user`, `id_cate`, `text`, `time`, `img`, `status`) VALUES
(1, 'Car Selling', 'car-selling', 10, 2, '<p style=\"text-align: justify;\"><strong>\"Chị ăn b&uacute;n b&ograve; hay đi h&aacute;t?</strong>\", anh Ngọc H&agrave; chạy tới hỏi nh&oacute;m kh&aacute;ch mới v&agrave;o qu&aacute;n. Người đ&agrave;n &ocirc;ng tự nhận l&agrave; \"thợ đụng\" khi vừa l&agrave;m bảo vệ giữ xe, phục vụ karaoke lẫn nh&acirc;n vi&ecirc;n h&agrave;ng ăn. Anh Phạm L&ecirc; Ngọc H&agrave; (sinh năm 1979), nh&acirc;n vi&ecirc;n qu&aacute;n k</p>', '2022-04-15 07:26:23', '../uploads/img/1.jpg', 0),
(2, 'parts repair', 'parts-repair', 11, 3, 'Tầng trệt bán bún bò, lầu trên hát karaoke\r\nTrong giai đoạn karaoke đóng cửa dài ngày, đa số nhân viên đều bỏ về quê. Anh Hà cho biết lúc đó mình vẫn bám trụ và làm phục vụ quán bún bò 13-14 tiếng/ngày.\r\n\r\nCòn bây giờ hầu hết nhân viên đều đã quay lại. Qu', '2022-04-15 07:27:17', '../uploads/img/6.jpg', 0),
(3, 'car insurance', 'car-insurance', 10, 2, 'Anh Nguyễn Xuân Huy, chủ quán, cho biết gia đình anh bắt đầu tận dụng tầng trệt của karaoke để kinh doanh hàng ăn từ cuối năm 2020.\r\n\r\n&quot;Gia đình vợ tôi là người gốc Huế, nắm công thức nấu bún bò riêng nên sẵn mở bán luôn. Ban đầu chỉ tính làm thời gi', '2022-04-15 07:48:09', '../uploads/img/3.jpg', 0),
(4, 'battery replacement', 'battery-replacement', 12, 1, 'Quán karaoke kinh doanh cà phê, trà sữa\r\nTừ đầu năm 2022, quán karaoke Làn Sóng Xanh (đường Lê Văn Sỹ, quận 3) bắt đầu tận dụng tầng trệt và mặt tiền để mở thêm gian hàng phục vụ các loại đồ uống như cà phê, sinh tố, trà sữa, nước ép.\r\n\r\nNgoài bố trí thêm', '2022-04-15 07:48:56', '../uploads/img/5.jpg', 0),
(5, '24/7 support', '247-support', 11, 3, 'Lượng khách đi karaoke chưa thể ổn định như trước không chỉ vì dịch bệnh mà còn bởi khó khăn chung về kinh tế, thu nhập sụt giảm. Trước đây, chúng tôi có những khách quen hầu như tuần nào cũng đến hát nhưng giờ lâu lâu mới thấy ghé một lần.\r\n\r\nNgười hát k', '2022-04-15 07:49:16', '../uploads/img/7.jpg', 0),
(6, 'oil change', 'oil-change', 10, 2, 'Với trải nghiệm du lịch đa dạng từ nghỉ dưỡng, vui chơi cho đến tham quan học hỏi, Singapore là điểm đến lý tưởng cho những chuyến du lịch công ty và gắn kết tập thể.\r\nHoạt động du lịch góp phần tiếp thêm năng lượng cho các nhân viên trong công ty để cải ', '2022-04-15 07:50:23', '../uploads/img/2.jpg', 0),
(7, 'nội dung truyền cảm hứng', 'noi-dung-truyen-cam-hung', 11, 2, 'Adventure HQ là trung tâm của các trò chơi phiêu lưu phức hợp nhân tạo đầu tiên và lớn nhất tại đảo quốc sư tử. Với 4 tầng và tổng diện tích 2.800 m2, Adventure HQ phân thành 10 khu thử thách với cấp độ tăng dần, phù hợp cho mọi đối tượng mong muốn trải n', '2022-04-16 04:06:46', '../uploads/img/3.jpg', 0),
(9, 'Danh mục mới thêm nè', 'danh-muc-moi-them-ne', 10, 2, 'Sắp tới, sự kiện Speciality &amp; Fine Food Asia 2022 (SFFA) sẽ diễn ra tại Singapore. Đây là diễn đàn gặp gỡ, trao đổi và kết nối cho các nhà cung cấp cà phê hạt, cà phê rang xay và lá trà. Sự kiện diễn ra từ 22 đến 24/6 tại Trung tâm Triển lãm &amp; Hội', '2022-04-19 08:12:27', '../uploads/img/6.jpg', 0),
(18, 'Bài viết hay', 'bai-viet-hay', 10, 2, 'Chúng tôi rất vui vì', '2022-04-20 07:18:31', '../uploads/img/1.jpg', 0),
(20, 'Barca thua trận thứ 3 liên tiếp tại Camp Nou', 'barca-thua-tran-thu-3-lien-tiep-tai-camp-nou', 10, 2, '<p><strong>\"Bản th&acirc;n vốn kh&ocirc;ng th&iacute;ch du lịch v&agrave;o dịp lễ n&ecirc;n từ đầu, m&igrave;nh chủ đ&iacute;ch sắp xếp cho chuyến đi chơi của nh&agrave; kh&ocirc;ng rơi v&agrave;o đợt nghỉ 4 ng&agrave;y\"</strong>, Phương Ng&acirc;n (25 tuổi, H&agrave; Nội), n&oacute;i.<br>Vừa trở về sau chuyến đi Quy Nhơn 3 ng&agrave;y 2 đ&ecirc;m c&ugrave;ng hội bạn, Tuấn Phong (24 tuổi, H&agrave; Nội) cho biết đ&acirc;y l&agrave; kỳ nghỉ du lịch đầu ti&ecirc;n của anh sau nhiều th&aacute;ng ch&ocirc;n ch&acirc;n ở nh&agrave;.</p>\r\n<p>&ldquo;Th&ocirc;ng thường, cứ th&iacute;ch v&agrave; đủ tiền, xếp được thời gian l&agrave; m&igrave;nh đi chứ kh&ocirc;ng nhất thiết phải chờ đến dịp lễ được nghỉ. Cả nh&oacute;m chọn đi v&agrave;o ng&agrave;y thường cũng v&igrave; muốn tr&aacute;nh cảnh đ&ocirc;ng đ&uacute;c, c&ograve;n bản th&acirc;n m&igrave;nh hiếm khi du lịch v&agrave;o dịp nghỉ lễ&rdquo;, Phong n&oacute;i với Zing.</p>\r\n<p>Chuyến đi được l&ecirc;n kế hoạch trước ng&agrave;y xuất ph&aacute;t 3 tuần.</p>\r\n<p><img src=\"https://znews-photo.zingcdn.me/w860/Uploaded/ywfrd/2022_04_25/278481870_298401455650920_2751058768839123483_n.jpg\"></p>\r\n<p>B&agrave;i viết n&agrave;y rất hay v&agrave; bổ &iacute;ch, t&ocirc;i rất th&iacute;ch b&agrave;i viết n&agrave;y v&igrave; b&agrave;i viết n&agrave;y hay qu&aacute; t&ocirc;i kh&ocirc;ng thể n&agrave;o m&agrave; hkoont được đưoặ nwquw qtooi cũng kh&ocirc;ng biết ohari c&aacute;i quần qu&egrave; g&igrave; ở đ&acirc;y nữa nhưng m&agrave; t&ocirc;i sễ cố gắng ghi th&ecirc;m nhiều nhất c&oacute; thể để xem c&aacute;i n&agrave;y c&oacute; bị lỗi g&igrave; kh&ocirc;ng. Chắc l&agrave; kh&ocirc;ng c&oacute; bị lỗi g&igrave; đ&acirc;u mong l&agrave; đừng c&oacute; lỗi d&ugrave;m 1 c&aacute;i trời ạ dcm lỗi nữa l&agrave; hong biết đường sửa nha b&eacute; <span class=\"mce-annotation tox-comment\" data-mce-annotation-uid=\"mce-conversation_22322303321650854873878\" data-mce-annotation=\"tinycomments\">ơi<img src=\"https://znews-photo.zingcdn.me/w1024/Uploaded/ywfrd/2022_04_25/278802630_358774492982056_2460719196486780421_n.jpg\" alt=\"\" width=\"1024\" height=\"1238\"></span></p>\r\n<!--tinycomments|2.1|data:application/json;base64,eyJtY2UtY29udmVyc2F0aW9uXzIyMzIyMzAzMzIxNjUwODU0ODczODc4Ijp7InVpZCI6Im1jZS1jb252ZXJzYXRpb25fMjIzMjIzMDMzMjE2NTA4NTQ4NzM4NzgiLCJjb21tZW50cyI6W3sidWlkIjoibWNlLWNvbnZlcnNhdGlvbl8yMjMyMjMwMzMyMTY1MDg1NDg3Mzg3OCIsImF1dGhvciI6IkF1dGhvciBuYW1lIiwiYXV0aG9yTmFtZSI6IkF1dGhvciBuYW1lIiwiY29udGVudCI6ImZnaGZkZyIsImNyZWF0ZWRBdCI6IjIwMjItMDQtMjVUMDI6NDc6NTMuODc4WiIsIm1vZGlmaWVkQXQiOiIyMDIyLTA0LTI1VDAyOjQ3OjUzLjg3OFoifV19fQ==-->', '2022-04-25 02:21:58', '../uploads/img/2.jpg', 0),
(21, 'Bài viết vừa thêm xong', 'bai-viet-vua-them-xong', 10, 2, '', '2022-04-25 03:07:11', '../uploads/img/5.jpg', 0),
(22, 'Bài viết vừa thêm xong cái độp', 'bai-viet-vua-them-xong-cai-dop', 10, 2, '<p>&nbsp;B&agrave;i viết hay n&ecirc;n đừng bị lỗi, cần hỗ trợ B&agrave;i viết hay n&ecirc;n đừng bị lỗi, cần hỗ trợ B&agrave;i viết hay n&ecirc;n đừng bị lỗi, cần hỗ trợ B&agrave;i viết hay n&ecirc;n đừng bị lỗi, cần hỗ trợ B&agrave;i viết hay n&ecirc;n đừng bị lỗi, cần hỗ trợ, ok&nbsp;<br><br><br><br>viết v&agrave;i d&ograve;ng nữa coi&nbsp;</p>\r\n<p><img src=\"https://znews-photo.zingcdn.me/w360/Uploaded/ywfrd/2022_04_25/277955952_282726913928157_4411590905313543256_n.jpg\" alt=\"\" width=\"192\" height=\"256\"></p>', '2022-04-25 03:08:06', '../uploads/img/1.jpg', 0),
(23, 'Công bố 38 thí sinh vào chung kết Hoa hậu Thế giới Việt Nam 2022', 'cong-bo-38-thi-sinh-vao-chung-ket-hoa-hau-the-gioi-viet-nam-2022', 10, 3, '<p><strong>V&ograve;ng chung khảo năm nay diễn ra từ ng&agrave;y 4/4 đến 24/4. Trước đ&oacute;, v&ograve;ng sơ khảo được tổ chức ở ba th&agrave;nh phố l&agrave; H&agrave; Nội, Đ&agrave; Nẵng v&agrave; TP.HCM.</strong></p>\r\n<p>Từ 64 th&iacute; sinh, ban gi&aacute;m khảo chọn ra 45 c&ocirc; g&aacute;i bước tiếp v&agrave;o phần thi bikini. Cuối c&ugrave;ng, sau m&agrave;n tr&igrave;nh diễn dạ hội, 38 gương mặt xuất sắc được c&ocirc;ng bố đi tiếp v&agrave;o v&ograve;ng chung kết to&agrave;n quốc, dự kiến được tổ chức v&agrave;o th&aacute;ng 5.</p>\r\n<p>Trong 38 th&iacute; sinh được chọn, một v&agrave;i người đẹp đ&atilde; được kh&aacute;n giả biết đến từ trước như Nam Em, Huỳnh Nguyễn Mai Phương, L&ecirc; Nguyễn Bảo Ngọc, Hồ Thị Yến Nhi.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://znews-photo.zingcdn.me/w660/Uploaded/cqdhmdxwp/2022_04_25/NGUOI_DEP_TAI_NANG.JPG\" alt=\"\" width=\"660\" height=\"990\"></p>', '2022-04-25 03:46:35', '../uploads/img/6.jpg', 0),
(24, '12ip3j12;ọt12', '12ip3j12ot12', 10, 11, '<p>eqwqqdqwdqwaasd</p>', '2022-05-03 05:38:18', '../uploads/img/1.jpg', 0),
(25, 'Xuất hiện dòng tiền bắt đáy chứng khoán', 'xuat-hien-dong-tien-bat-day-chung-khoan', 10, 3, '<h3>VN-Index thủng mốc 1.240 điểm</h3>\n<p>Nối tiếp phi&ecirc;n lao dốc đầu tuần, thị trường chứng kho&aacute;n mở cửa phi&ecirc;n 10/5 tiếp tục bị b&aacute;n th&aacute;o mạnh mẽ tr&ecirc;n to&agrave;n mặt trận từ vốn h&oacute;a lớn đến nh&oacute;m vốn h&oacute;a vừa v&agrave; nhỏ, penny.</p>\n<p>VN-Index sau phi&ecirc;n ATO mất ngay 30 điểm (-2,3%) để lui về v&ugrave;ng dưới 1.240 điểm. S&agrave;n c&oacute; hơn 300 m&atilde; giảm gi&aacute; với 45 m&atilde; giảm s&agrave;n.</p>\n<p>HNX-Index khi mở cửa cũng lao dốc gần 10 điểm (-3%) về c&ograve;n 313 điểm với hơn 110 m&atilde; giảm gi&aacute;. UPCoM-Index c&oacute; mức giảm nhẹ 0,8% cũng c&oacute; hơn 100 m&atilde; giảm gi&aacute;.</p>\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://znews-photo.zingcdn.me/w660/Uploaded/iutmtn/2022_05_10/index_10_5_1.png\" alt=\"\" width=\"429\" height=\"154\"></p>\n<h3>28/30 m&atilde; chứng kho&aacute;n rổ VN30 giảm gi&aacute;</h3>\n<p>Nh&oacute;m vốn h&oacute;a lớn kh&ocirc;ng nằm ngo&agrave;i xu thế khi cũng xuy&ecirc;n thủng c&aacute;c mốc hỗ trợ quan trọng. Ri&ecirc;ng rổ VN30 đ&atilde; ghi nhận 28/30 m&atilde; giảm gi&aacute;, trong đ&oacute; c&oacute; một số m&atilde; giảm rất s&acirc;u như STB v&agrave; GVR rơi 5%, PLX v&agrave; GAS mất hơn 4%. Ngược lại 2 m&atilde; giữ được sắc xanh l&agrave; SAB của Sabeco tăng 3% v&agrave; VNM của Vinamilk tăng 0,4%.</p>\n<h3>Lực mua nhập cuộc&nbsp;</h3>\n<p>Chỉ số xuống s&acirc;u đ&atilde; k&iacute;ch th&iacute;ch được nhu cầu bắt đ&aacute;y v&agrave; d&ograve;ng tiền mua v&agrave;o đ&atilde; gia nhập. VN-Index hồi phục nhanh ch&oacute;ng khi chỉ c&ograve;n giảm 12 điểm (-1%) về s&aacute;t mốc 1.260 điểm, số cổ phiếu giảm s&agrave;n cũng giảm nhanh ch&oacute;ng.&nbsp;</p>\n<p>&nbsp;Nh&oacute;m vốn h&oacute;a lớn nhất VN30 chỉ c&ograve;n 19/30 m&atilde; giảm gi&aacute;, một số cổ phiếu ng&acirc;n h&agrave;ng đ&atilde; chuyển sang sắc xanh như VCB, VPB, HDB. C&aacute;c chỉ số tại H&agrave; Nội cũng đ&atilde; thu nhẹp đ&agrave; giảm đi đ&aacute;ng kể khi sắc xanh bắt đ&agrave;u nhen nh&oacute;m trở lại.</p>', '2022-05-10 07:48:29', '../uploads/img/index_10_5_1.png', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `book`
--

INSERT INTO `book` (`id`, `name`) VALUES
(1, 'Long'),
(2, 'Hào'),
(12, '.123.'),
(13, '.Tôi đã đặt hôm nay.'),
(14, '.Longggggggggggggggggggggggggggg.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categogies_blog`
--

CREATE TABLE `categogies_blog` (
  `id_cate` int(11) NOT NULL,
  `name_cate` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categogies_blog`
--

INSERT INTO `categogies_blog` (`id_cate`, `name_cate`, `status`) VALUES
(1, 'Hướng dẫn', 0),
(2, 'Quảng cáo', 0),
(3, 'Giới thiệu', 0),
(4, 'Làm màu', 0),
(7, 'ádasd', 0),
(10, '12312312', 0),
(11, 'Tầm bậy', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories_products`
--

CREATE TABLE `categories_products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories_products`
--

INSERT INTO `categories_products` (`id`, `name`, `slug`, `status`) VALUES
(1, 'Rửa xe nè', 'bo-xe', 0),
(2, 'Đầu xe', 'dau-xe', 0),
(3, 'Bài này mới thêm nè', 'bai-nay-moi-them-ne', 1),
(5, 'Cái bô ', 'cai-bo', 0),
(6, 'Bô xe 2 3 4', 'bo-xe-2-3-4', 0),
(7, 'Danh mục tầm bậy tầm bạ', 'danh-muc-tam-bay-tam-ba', 0),
(8, 'Lốp xe', 'lop-xe', 0),
(9, 'Dịch vụ 10', '', 0),
(10, 'Mới thêm', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `slug_product` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price_product` float NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `vote` int(11) DEFAULT 0,
  `text` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `id_cate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name_product`, `slug_product`, `img`, `price_product`, `status`, `vote`, `text`, `quantity`, `brand`, `id_cate`) VALUES
(1, 'Sản phẩm 1', 'san-pham-1', '../uploads/img/1.jpg', 213, 0, 26, '<p>Ưu điểm:</p>\r\n<ul>\r\n<li>&nbsp;Dễ bảo h&agrave;nh</li>\r\n<li>Dễ sửa chữa</li>\r\n<li>Cam kết ch&iacute;nh h&atilde;ng</li>\r\n</ul>\r\n<p>Nhược điểm:</p>\r\n<ul>\r\n<li>Kh&oacute; xử l&yacute;</li>\r\n</ul>', 0, 'Toyota', 1),
(2, 'san pham moi', 'san-pham-moi', '../uploads/img/1.jpg', 1000, 0, 8, 'dfgdfgd', 123, 'BWM', 1),
(5, 'Sarn phamr 1', 'sarn-phamr-1', '../uploads/img/7.jpg', 123, 0, 8, '123', 1, 'Lambogrini', 2),
(6, 'sản phẩm tào lao', 'san-pham-tao-lao', '../uploads/img/1.jpg', 1000, 0, 14, '123', 23, 'Lambogrini', 5),
(7, 'sản phẩm demo', 'san-pham-demo', '../uploads/img/2.jpg', 23, 0, 7, '123', 2, 'BMW', 1),
(8, 'Sản phẩm demo2', 'san-pham-demo2', '../uploads/img/2.jpg', 123, 0, 5, '12312312', 123, 'Huyndai', 1),
(9, 'san pham đã sửa', 'san-pham-da-sua', '../uploads/img/2.jpg', 10000, 0, 7, '123', 12, 'Toyota', 1),
(10, 'sản phẩm tào lao 2', 'san-pham-tao-lao-2', '../uploads/img/4.jpg', 213, 0, 31, '123', 123, 'Misu Bisi', 3),
(11, 'Sản phẩm này tốt cho sức khỏe', 'san-pham-nay-tot-cho-suc-khoe', '../uploads/img/4.jpg', 300000, 0, 17, 'Sản phẩm rất tốt cho sức khỏe người tiêu dùng', 0, 'Misu Bisi', 6),
(12, 'Sản phẩm thêm vào ngày 26/04/2022', 'san-pham-them-vao-ngay-26042022', '../uploads/img/3.jpg', 123123, 0, 22, '<p>Sản phẩm rất được ưa chuộng của c&aacute;c Racing boizzz</p>\r\n<p>Ưu điểm</p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li>Ưu điểm a</li>\r\n<li>Ưu điểm b</li>\r\n<li>Ưu điểm c</li>\r\n</ul>\r\n<p>Nhược điểm</p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li>Kh&ocirc;ng c&oacute;</li>\r\n</ul>', 20, 'Vin Fast', 5),
(13, 'Lốp xe Audi', 'lop-xe-audi', '../uploads/img/bacd.jpg', 2575520, 0, 8, '<p>Tuy nhi&ecirc;n để l&agrave;m n&ecirc;n một thị trường xe &ocirc; t&ocirc; s&ocirc;i động với sự cạnh tranh quyết liệt th&igrave; kh&ocirc;ng thể n&agrave;o kh&ocirc;ng nhắc đến sự g&oacute;p mặt của một số h&atilde;ng xe như Nissan, Lotus, Mini v&agrave; mới đ&acirc;y Vinfast tại Việt Nam, nhờ sự g&oacute;p mặt của c&aacute;c h&atilde;ng n&agrave;y đ&atilde; tạo n&ecirc;n l&agrave;n gi&oacute; mới k&iacute;ch thước thị trường xe &ocirc; t&ocirc; ng&agrave;y c&agrave;ng ph&aacute;t triển hơn trong tương lai.</p>\r\n<p>&nbsp;</p>\r\n<p>Mỗi h&atilde;ng xe tr&ecirc;n thế giới đều c&oacute; nhiều loại thậm ch&iacute; rất nhiều loại, nhiều m&agrave;u sắc v&agrave; đặc biệt l&agrave; c&oacute; những d&ograve;ng theo từng ph&acirc;n kh&uacute;c ri&ecirc;ng như: ph&acirc;n kh&uacute;c tầm thường, ph&acirc;n kh&uacute;c si&ecirc;u xe, ph&acirc;n kh&uacute;c giới trẻ, ph&acirc;n kh&uacute;c thể thao, ph&acirc;n kh&uacute;c gia đ&igrave;nh, ph&acirc;n kh&uacute;c hạng sang,.. Từ đ&oacute; tạo n&ecirc;n một thị trường xe hơi phong ph&uacute; gi&uacute;p người ti&ecirc;u d&ugrave;ng c&oacute; nhiều sự lựa chọn hơn d&agrave;nh cho m&igrave;nh. H&atilde;y c&ugrave;ng t&igrave;m hiểu qua 56 thương hiệu v&agrave; logo của c&aacute;c h&atilde;ng xe &ocirc; t&ocirc; nổi tiếng tr&ecirc;n thế giới hiện nay nh&eacute;!</p>', 5, 'Audi', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `service`
--

INSERT INTO `service` (`id`, `name`, `status`) VALUES
(1, 'Rửa xe nè', 0),
(2, 'Gửi xe', 0),
(3, 'Thay nhớt', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `LoginName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(255) DEFAULT 'Trống',
  `Email` varchar(255) NOT NULL,
  `Phone` int(10) DEFAULT NULL,
  `Token` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT 0,
  `Level` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`UserID`, `Fullname`, `LoginName`, `Password`, `Address`, `Email`, `Phone`, `Token`, `img`, `Status`, `Level`) VALUES
(10, 'Long ad', 'admin99', '$2y$10$xWBkAAZYVOfjwzt22H79quadyUIZ175tTndM/imTBcu3xsDZqlh.S', 'Cà Mau', 'longne@gmail.com', 945119242, '37d1cd20d92e14087d3c8d8977892f94', '../uploads/img/bacd.jpg', 0, 1),
(11, 'Hội xinh gái', 'hoiad', '$2y$10$0nROgj5QmfL1a49kaTGnC./cks3juk9wD2W4Sz16YXYkvObhdAZ9u', 'Trống', 'hoi@gmail.com', NULL, '7f01d58b1557be449e8817ca845105b0', '', 0, 0),
(12, 'Long Vưu', 'longzhutb@gmail.com', 'encrypted', 'Trống', 'longzhutb@gmail.com', NULL, 'ya29.A0ARrdaM_WdVLIPMs3hhOzxLtXrwqlc6SoSoJ1oHPhFyBKbA-sc7QJBbHeNjMUCoSrhxpfdTyvNt6LU2UyKTw3k9aNtIAFN7tQ793H9SInGtFPSAVrPyWmicFyJx2D0Wu-vhEnvvPCyhkja1Y2SaFeZ__vBZi4', '', 0, 0),
(24, 'Vưu Phước Long 26.01.00', 'longzhudz@gmail.com', 'encrypted', 'Trống', 'longzhudz@gmail.com', NULL, 'ya29.A0ARrdaM8p2gmFbsbPhSf3p9gEyQJ7ADg-X1inng_4ok3kjNJyxbIQEbgLc9OZAPRF7cbMDK-_mplTbzaayOvdCZgHZY_U2R2aD6sRAI5ZUkZQNeNH-Z2YKMpZ-QlYr07C2OwdWAaxLXn9xzOr3seS1xydehjt', 'https://lh3.googleusercontent.com/a-/AOh14Gha3VaEriCaNVSwNNSm9UV_xn2YkY_tJIneG1Xl=s96-c', 0, 0),
(27, 'long1', '123123', '$2y$10$KrYVPhCIWhsruIVfOjrfNuwI97GzQzH3irJVH6U8Y9UA94NfBmUYW', 'Trống', '12312312@gmail.com', NULL, 'b2e2cd125599e76372bd49efe7c016d5', NULL, 0, 0),
(28, 'Long', 'admin', '$2y$10$Ncu8lMzyjUm4LMP3pIQwau8KPUVst8WOEr7dzQ/dneh.ZaVQRtRha', 'Trống', 'longadmin@gmail.com', NULL, '5f2a08b5f8b0ea387c8bb4b4ca1d6ea9', NULL, 0, 0),
(29, 'long 2021', 'long121', '$2y$10$LtK4vwbxEWi/WrZjWP4AoeNqRBJuZZErZc6zGALEG.UGbYyKBy0E2', 'Trống', '1231231122@gmail.com', 0, '2136622368e1701ca3bfe115a59de1db', './uploads/img/5.jpg', 0, 0),
(30, 'vưu long', 'longbangiay1@gmail.com', 'encrypted', 'Trống', 'longbangiay1@gmail.com', NULL, 'ya29.A0ARrdaM8QS54FtNwM_--dI-5BNbobuzvq8eXBj5YqP5MWprO_QuzZDANJijwt_S7AYRRJr7nZe7rDkF03_qtFm4EROsPxziSdchCryVaw-vFCqi7Gf8pm94dZl8q8G1CvVX2a7js_Bm59P0sh3AMt6xM2PtrE', 'https://lh3.googleusercontent.com/a/AATXAJx6N8VwHPlQbzsJwLdXT31an-P26zCqjyid4zs=s96-c', 0, 0),
(31, 'Phạm Minh Nhật', 'nhat123', '$2y$10$lubwsaCVlODVctyWFNt9YeIkEM7KgOTlD8VJS8DRNKCYzO1G/pP.m', 'Trống', 'phamminhnhat362@gmail.com', NULL, '288e7098e24909e8768d9202ba63690d', NULL, 0, 0),
(32, 'Dương Phước Lực', 'duongphuocluc2404@gmail.com', 'encrypted', 'Trống', 'duongphuocluc2404@gmail.com', NULL, 'ya29.A0ARrdaM9u_8SgkkY3dsVgInzzDakFGc6zjtT26i4dq7Ce9VwoD6D_3f25yIQHuXR-PSrWB7rBnBwX4dDTeIAVX4FQPhoBghFGioI1DYVbW5Pg7eNLzqBKu0F_PLOZ3uztTcs5ikpB_LXCHNgL-t4ex6mh4p_P', 'https://lh3.googleusercontent.com/a-/AOh14GjEpspIcijPNo7Xef-HjbwH0o-GhogjfigE_UDtJw=s96-c', 0, 0),
(33, 'vuu phuoc long', 'admin9x', '$2y$10$HlhV/BXfIgS7Fa4OzhUA7OBC.ndJ.oy4mvEcyiN1/vNYp2HwY1tn6', 'Trống', 'aaaaaa@gmail.com', 0, 'b449c3db9fcb52dfc1c8251b446fe834', '../uploads/img/3.jpg', 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_blog_user` (`id_user`),
  ADD KEY `fk_blog_cate` (`id_cate`);

--
-- Chỉ mục cho bảng `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categogies_blog`
--
ALTER TABLE `categogies_blog`
  ADD PRIMARY KEY (`id_cate`);

--
-- Chỉ mục cho bảng `categories_products`
--
ALTER TABLE `categories_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cate_product` (`id_cate`);

--
-- Chỉ mục cho bảng `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `categogies_blog`
--
ALTER TABLE `categogies_blog`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `categories_products`
--
ALTER TABLE `categories_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `fk_blog_cate` FOREIGN KEY (`id_cate`) REFERENCES `categogies_blog` (`id_cate`),
  ADD CONSTRAINT `fk_blog_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`UserID`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_cate_product` FOREIGN KEY (`id_cate`) REFERENCES `categories_products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
