-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2024 at 10:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanxuong`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `id_spct` int(11) NOT NULL,
  `gia_khuyen_mai` int(11) DEFAULT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `thuong_hieu` varchar(50) DEFAULT NULL,
  `tinh_nang_ky_thuat` text DEFAULT NULL,
  `khuyen_mai` varchar(100) DEFAULT NULL,
  `mau_sac` varchar(50) DEFAULT NULL,
  `bo_nho` int(11) DEFAULT NULL,
  `id_sp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`id_spct`, `gia_khuyen_mai`, `anh`, `thuong_hieu`, `tinh_nang_ky_thuat`, `khuyen_mai`, `mau_sac`, `bo_nho`, `id_sp`) VALUES
(16, 3200, 'oppo-a77s-xanh.webp', 'Oppo', 'Hệ điều hành: Android 7.1 (Nougat)\r\nChipset: MediaTek MT6750T\r\nCPU: Octa-core (4x1.5 GHz Cortex-A53 & 4x1.0 GHz Cortex-A53)\r\nGPU: Mali-T860MP2\r\nBộ nhớ trong: 64 GB\r\nRAM: 4 GB\r\nMàn hình: IPS LCD, 5.5 inches, độ phân giải 720 x 1280 pixels\r\nCamera chính: 13 MP, f/2.2, tự động lấy nét, đèn flash LED\r\nCamera phụ: 16 MP, f/2.0\r\nPin: Li-Ion 3200 mAh', 'sale', 'hồng', 256, 24),
(17, 4600, 'iphone-13-pro-max.webp', 'Oppo', 'Màn hình: iPhone 15 được trang bị màn hình OLED Super Retina với độ phân giải cao, mang đến hình ảnh sắc nét và màu sắc chân thực.\r\n\r\nHiệu năng: Với bộ vi xử lý mạnh mẽ và RAM nâng cấp, iPhone 15 cho phép bạn thực hiện nhiều tác vụ cùng một lúc một cách mượt mà và nhanh chóng.\r\n\r\nCamera: Hệ thống camera kép trên iPhone 15 cho phép bạn chụp ảnh chất lượng cao và quay video 4K với độ phân giải tuyệt vời.\r\n\r\nThời lượng pin: iPhone 15 được trang bị pin dung lượng lớn, cho phép bạn sử dụng thiết bị trong thời gian dài mà không cần lo lắng về việc sạc pin.\r\n\r\nBảo mật: Với công nghệ nhận diện khuôn mặt Face ID tiên tiến, iPhone 15 đảm bảo an toàn và bảo mật cho dữ liệu cá nhân của bạn.', 'hot', 'đỏ xanh ', 256, 23),
(18, 2255555, 'x_mmas.webp', 'Apple', 'iPad Pro 13 là một sản phẩm công nghệ đỉnh cao của Apple. Với màn hình Retina Liquid XDR 13 inch, iPad Pro 13 mang đến trải nghiệm hình ảnh tuyệt vời và chân thực. Sức mạnh của chip M1 giúp iPad Pro 13 vượt trội về hiệu năng, đáp ứng mọi nhu cầu công việc và giải trí. Với Apple Pencil và Magic Keyboard, bạn có thể sáng tạo và làm việc một cách linh hoạt. iPad Pro 13 là sự lựa chọn hoàn hảo cho những người yêu công nghệ và muốn trải nghiệm một thiết bị di động mạnh mẽ và tiện ích.', 'hot', 'đỏ xanh ', 1, 28),
(19, 344444, 'iphone-13-pro-max.webp', 'xaomi', 'ko', 'hot', 'hồng', 256, 35),
(20, 200000, 'a38.jpeg', 'IPhone', 'được ra mắt vào năm 2019. Điện thoại này có màn hình Liquid Retina kích thước 6.1 inch, độ phân giải 1792 x 828 pixel. iPhone 11 được trang bị bộ vi xử lý A13 Bionic, giúp nó hoạt động mạnh mẽ và hiệu quả. Nó cũng có camera kép 12MP, cho phép người dùng chụp ảnh chất lượng cao và quay video 4K.', 'sale', 'đỏ xanh ', 123, 34);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc_sanpham`
--

CREATE TABLE `danhmuc_sanpham` (
  `id_dm` int(11) NOT NULL,
  `ten_dm` varchar(255) NOT NULL,
  `mota_dm` varchar(255) DEFAULT NULL,
  `anh_dm` varchar(255) NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 0 COMMENT '0_hien thi 1_ xoa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc_sanpham`
--

INSERT INTO `danhmuc_sanpham` (`id_dm`, `ten_dm`, `mota_dm`, `anh_dm`, `trangthai`) VALUES
(13, 'Apple', 'Apple là một trong những công ty công nghệ hàng đầu trên thế giới, được biết đến với các sản phẩm và dịch vụ như iPhone, iPad, Mac, Apple Watch và Apple TV. Công ty này còn cung cấp các dịch vụ như App Store, iTunes và iCloud. Apple nổi tiếng với việc thi', 'icon2.png', 0),
(14, 'Samsung', 'Samsung là một trong những tập đoàn công nghệ lớn nhất trên thế giới, có trụ sở chính tại Hàn Quốc. Công ty này hoạt động trong nhiều lĩnh vực khác nhau bao gồm điện tử tiêu dùng, viễn thông, dịch vụ tài chính và công nghệ thông tin. Samsung nổi tiếng với', 'icon3.png', 0),
(15, 'Xiaomi', ' Xiaomi là một công ty công nghệ đa quốc gia, có trụ sở tại Bắc Kinh, Trung Quốc. Công ty này nổi tiếng với việc sản xuất các sản phẩm điện tử tiêu dùng, bao gồm điện thoại thông minh, máy tính bảng, và các thiết bị gia dụng thông minh. Xiaomi được biết đ', 'icon4.png', 0),
(16, 'Oppo', 'Oppo là một thương hiệu công nghệ hàng đầu có trụ sở tại Trung Quốc, chuyên sản xuất các sản phẩm điện tử tiêu dùng, đặc biệt là điện thoại thông minh. Oppo nổi tiếng với việc thiết kế đẹp mắt, camera chất lượng cao và các tính năng sáng tạo trên sản phẩm', 'icon6.png', 0),
(17, 'Vivo', 'Vivo là một thương hiệu công nghệ hàng đầu có trụ sở tại Trung Quốc, chuyên sản xuất các sản phẩm điện tử tiêu dùng, đặc biệt là điện thoại thông minh. Vivo được biết đến với việc tập trung vào việc phát triển công nghệ camera tiên tiến và thiết kế sang t', 'icon7.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(255) DEFAULT NULL,
  `anh_sp` varchar(255) DEFAULT NULL,
  `gia_goc` int(11) DEFAULT NULL,
  `mota_sp` text DEFAULT NULL,
  `soluongtonkho` int(11) DEFAULT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `luotmua` int(11) NOT NULL DEFAULT 0,
  `trangthai` int(2) NOT NULL DEFAULT 0,
  `id_dm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `anh_sp`, `gia_goc`, `mota_sp`, `soluongtonkho`, `luotxem`, `luotmua`, `trangthai`, `id_dm`) VALUES
(37, 'iPhone 15 Plus 128GB', 'iphone-15-plus_1__1.webp', 23, ' iPhone 15 Plus được đánh giá cao bởi màn hình Dynamic Island 6.7 inch với mặt kính lưng pha màu ấn tượng, chip A16 Bionic mạnh mẽ cùng cổng sạc USB-C cho khả năng sạc đầy nhanh chóng. Ngoài ra, phiên bản Plus thuộc series iPhone 15 còn sở hữu 5 phiên bản màu pastel thanh lịch phù hợp với nhiều đối tượng khách hàng: hồng, vàng, xanh lá, xanh dương, đen. Xem thêm các thông tin hữu ích khác về điện thoại iPhone 15 Plus sau đây! ', 176, 10, 0, 0, 13),
(38, 'iPhone 14 Pro 128GB', 'iphone-14_1.webp', 17, '    iPhone 14 128GB sở hữu màn hình Retina XDR OLED kích thước 6.1 inch cùng độ sáng vượt trội lên đến 1200 nits. Máy cũng được trang bị camera kép 12 MP phía sau cùng cảm biến điểm ảnh lớn, đạt 1.9 micron giúp cải thiện khả năng chụp thiếu sáng. Mẫu iPhone 14 mới cũng mang trong mình con chip Apple A15 Bionic phiên bản 5 nhân mang lại hiệu suất vượt trội.\r\n\r\niPhone 14', 42, 1, 0, 0, 13),
(39, 'iPhone 14 Pro 128GB', 'iphone-14-plus_1_.webp', 17, '    iPhone 14 128GB sở hữu màn hình Retina XDR OLED kích thước 6.1 inch cùng độ sáng vượt trội lên đến 1200 nits. Máy cũng được trang bị camera kép 12 MP phía sau cùng cảm biến điểm ảnh lớn, đạt 1.9 micron giúp cải thiện khả năng chụp thiếu sáng. Mẫu iPhone 14 mới cũng mang trong mình con chip Apple A15 Bionic phiên bản 5 nhân mang lại hiệu suất vượt trội.\r\n\r\niPhone 14', 32, 2, 0, 0, 13),
(40, 'iPhone 15 Pro Max 256GB', 'a2.jpeg', 30, '  iPhone 15 Pro Max thiết kế mới với chất liệu titan chuẩn hàng không vũ trụ bền bỉ, trọng lượng nhẹ, đồng thời trang bị nút Action và cổng sạc USB-C tiêu chuẩn giúp nâng cao tốc độ sạc. Khả năng chụp ảnh đỉnh cao của iPhone 15 bản Pro Max đến từ camera chính 48MP, camera UltraWide 12MP và camera telephoto có khả năng zoom quang học đến 5x. Bên cạnh đó, iPhone 15 ProMax sử dụng chip A17 Pro mới mạnh mẽ. Xem thêm chi tiết những điểm nổi bật của sản phẩm qua thông tin sau!  ', 34, 2, 0, 0, 13),
(41, 'vivo Y17s 4GB 128GB', 'vivo-y17s_4__1.jpg', 3, 'vivo Y17s được trang bị bộ vi xử lý MediaTek Helio G85 ổn định, đi kèm một màn hình LCD với kích thước 6.56 inch, mang đến trải nghiệm tuyệt vời. Ngoài ra, Y17s còn sở hữu camera chính 50MP, cùng viên pin dung lượng lên đến 5000 mAh. ', 12, 0, 0, 0, 17),
(42, 'Vivo Y36 8GB 128GB', 'vivo-y36.jpg', 4, 'vivo Y36 sở hữu khả năng xử lý ấn tượng thông qua chipset Snapdragon 680, cùng chất lượng hiển thị sắc nét tới từ tấm nền LCD 6.64 inch. Nhờ sở hữu cụm camera cao cấp với cảm biến lên tới 50MP, Y36 vivo giúp nâng tầm trải nghiệm quay chụp, bắt kịp mọi khách khắc đáng nhớ. Chưa hết, thiết bị còn được tích hợp viên pin 5.000mAh cùng công nghệ sạc nhanh 44W cho thời gian sử dụng cả dài ngày không lo bị gián đoạn.', 7, 0, 0, 0, 17),
(43, 'OPPO Reno10 5G 8GB 256GB ', 'reno10_5g_-_combo_product_-_blue.jpg', 8, '  Điện thoại OPPO Reno 10 sở hữu hiệu năng vô cùng mạnh mẽ khi được trang bị chipset MediaTek Dimensity 7050. Chất lượng hình ảnh của máy có độ sắc nét, mượt mà nhờ sở hữu tấm nền 3D AMOLED hiện đại với độ phân giải FHD+ 2412 × 1080 pixel cùng tần số quét 120Hz. Bên cạnh đó, Reno 10 còn sở hữu một vài ưu điểm khác như dung lượng Pin 5000mAh với sạc nhanh SUPERVOOC 67W cùng cụm camera 64MP sắc nét giúp nâng cao trải nghiệm của người dùng.  ', 53, 0, 0, 0, 16),
(44, 'OPPO Find N3 16GB 512GB', 'oppo-find-n3.jpg', 41, 'OPPO Find N3 được chính thức ra mắt ngày 26/10 tại thị trường Việt Nam mang đến nhiều nâng cấp mới mẻ. Trên phiên bản điện thoại gập thế hệ thứ 3 này, OPPO tạo ra một mẫu flagship mạnh mẽ hơn với chip Qualcomm Snapdragon® 8 Gen 2 Mobile Platform, 16GB RAM, màn hình chính 7.82 inch, màn hinh ngoài 6.31 inch cùng hệ thống camera Hasselblad đầy ấn tượng.', 324, 0, 0, 0, 16),
(45, 'Samsung Galaxy S22 Ultra (12GB - 512GB)', 'samsung-galaxy-s22-ultra-12gb-256gb.jpg', 36, 'Điện thoại Samsung Galaxy S22 Ultra phiên bản 12GB/512GB được trang bị màn hình 6.8 inch bo cong nhẹ nhàng giúp tăng thêm phần thẩm mỹ mà không dẫn đến tình trạng cấn màn hình. Bên cạnh đó thì trải nghiệm về mặt hình ảnh hiển thị trên S22 Ultra thật sự tuyệt với với độ phân giải đến 2K cùng tấm nền Dynamic AMOLED 2X, vuốt chạm vô cùng mượt mà nhờ tần số quét 120 Hz.', 3, 0, 0, 0, 14),
(46, 'Xiaomi 13T Pro 5G (12GB - 512GB)', 'xiaomi-13t_2__2_2.jpg', 14, ' Xiaomi 13T Pro là flagship mới nhất nhà Xiaomi, mạnh mẽ ấn tượng với chip MediaTek Dimensity 9200+, cùng với đó là RAM 12GB và bộ nhớ trong lên tới 512GB. Đặc biệt, khả năng chụp ảnh đỉnh cao nhờ cụm camera siêu chất, viên pin lớn 5000mAh cùng sạc nhanh 120W. Tất cả sẽ mang tới một siêu phẩm đình đám giúp bạn có được trải nghiệm độc đáo và khẳng định được cá tính của mình. ', 65, 0, 0, 0, 15),
(47, 'OPPO Find N3 Flip 12GB 256GB', 'oppo-find-n3-flip_4_.jpg', 22, 'OPPO Find N3 Flip chính thức ra mắt thị trường Việt Nam ngày 26/10 sở hữu nhiều ưu điểm vượt trội: chip Dimensity 9200, RAM 12GB cùng bộ nhớ trong 256GB. Cạnh đó, camera điện thoại gập Find N3 Flip hợp tác cùng Hasselblad, ống kính chính độ phân giải 50MP và màn hình AMOLED 6.8 inch cho trải nghiệp quay chụp chuyên nghiệp hơn bao giờ hết.', 23, 0, 0, 0, 16),
(48, 'iPhone 15 Pro Max 1TB', 'iphone15-pro-max-titan-nau.jpg', 44, 'Điện thoại iPhone 15 Pro Max 1TB mới là một sự kết hợp hoàn hảo giữa thiết kế đẳng cấp và hiệu năng vượt trội. Với dung lượng lưu trữ lớn đến 1TB, người dùng có đủ không gian cho hàng ngàn hình ảnh, video và ứng dụng yêu thích. Điểm đáng chú ý là sự tích hợp của chip A17 Pro tiên tiến giúp chiếc điện thoại iPhone 15 phiên bản cao cấp nhất này hoạt động mượt mà và xử lý nhanh chóng mọi tác vụ.', 10, 0, 0, 0, 13),
(49, 'Samsung Galaxy Fold5 12GB 1TB', 'galaxy-z-fold-5-xanh-1_1_2.jpg', 47, 'Samsung Galaxy Z Fold5 12GB 1TB được tích hợp màn hình hiển thị Dynamic AMOLED 2X siêu sắc nét cùng hiệu suất tuyệt vời tới từ chipset Snapdragon 8 Gen 2 for Galaxy. Nổi bật với cụm 3 camera cải tiến mới với độ rõ nét 50MP + 10MP +12MP, bạn có thể thỏa sức quay phim chụp ảnh với chất lượng cao nhất. Bên cạnh đó, máy còn sở hữu viên pin 4400mAh cùng sạc nhanh 25W, giúp kéo dài thời lượng sử dụng suốt ngày dài.', 3, 0, 0, 0, 14);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `sodienthoai` varchar(20) DEFAULT NULL,
  `chucvu` int(11) NOT NULL DEFAULT 0 COMMENT '1-Admin 0- Người dùng',
  `trangthai` int(5) NOT NULL DEFAULT 0 COMMENT '0_hieenrthi 1_xoatam'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `ten`, `matkhau`, `email`, `diachi`, `sodienthoai`, `chucvu`, `trangthai`) VALUES
(10, 'Hoàng Văn Mạnh', '07042004', 'manhhvph43447@fpt.edu.vn', 'Tây Mỗ, Nam Từ Liêm, Hà Nội', '0392342336', 1, 0),
(12, 'Hoàng Nam', '12345678', 'namhoang@1221', 'Lạng Sơn', '0239593523', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`id_spct`);

--
-- Indexes for table `danhmuc_sanpham`
--
ALTER TABLE `danhmuc_sanpham`
  ADD PRIMARY KEY (`id_dm`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `lk_sanpham_danhmuc` (`id_dm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  MODIFY `id_spct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `danhmuc_sanpham`
--
ALTER TABLE `danhmuc_sanpham`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
