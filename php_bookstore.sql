-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 06:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `special` tinyint(1) DEFAULT 0,
  `sale_off` int(3) DEFAULT 0,
  `picture` text DEFAULT NULL,
  `created` date DEFAULT '0000-00-00',
  `created_by` varchar(255) DEFAULT NULL,
  `modified` date DEFAULT '0000-00-00',
  `modified_by` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `ordering` int(11) DEFAULT 10,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `description`, `price`, `special`, `sale_off`, `picture`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`, `category_id`) VALUES
(12, 'Harry Potter', 'Functional ', '250000', 1, 20, 'fbt8ewui.jpg', '2013-12-12', 'admin', '2013-12-25', 'admin', 0, 3, 5),
(13, 'Driven Backpack', 'Functional programming ', '35000', 1, 25, '851kij7x.jpg', '2013-12-12', 'admin', '2013-12-13', 'admin', 0, 1, 11),
(14, 'Wayfarer Messenger Bag', 'Sinh viên không vi phạm qui chế thi', '45000', 1, 20, '1v7ejuf6.jpg', '2013-12-12', 'admin', '2013-12-12', 'admin', 0, 2, 2),
(16, 'Chaz Kangeroo Hoodie', ' He also thoroughly covers threads and multithreaded programming, and socket-based IPC.', '36000', 1, 2, 'zl6xv14n.jpg', '2013-12-12', 'admin', '2013-12-13', 'admin', 0, 3, 7),
(17, 'Joust Duffle Bag', ' Progressing from elementary concepts to advanced effects, budding game developers will have their first game up and running by the end of this book.', '36000', 1, 12, 'wkz5yor6.jpg', '2013-12-12', 'admin', '2013-12-12', 'admin', 0, 3, 11),
(18, 'Scala Cookbook', 'Author Alvin Alexander (creator of DevDaily.com) provides solutions based on his experience using Scala for highly scalable, component-based applications that support concurrency and distribution.', '46000', 1, 0, '3snefz65.jpg', '2013-12-12', 'admin', '2013-12-12', 'admin', 0, 10, 2),
(19, 'PostgreSQL Server', 'PostgreSQL Server Programming will show you that PostgreSQL is so much more than a database server. In fact, it could even be seen as an application development framework, with the added bonuses of transaction support, massive data storage, journaling, recovery and a host of other features that the PostgreSQL engine provides.', '54000', 1, 5, 'yelwfxzt.jpg', '2013-12-12', 'admin', '2013-12-12', 'admin', 0, 3, 2),
(20, 'Entities', 'Programming Drupal 7 Entities is a practical, hands-on guide that provides you with a thorough knowledge of Drupal entity paradigm and a number of clear step-by-step exercises, which will help you take advantage of the real power that is available when developing using entities.', '58000', 1, 4, 'fo43krbc.jpg', '2013-12-12', 'admin', '2013-12-12', 'admin', 0, 3, 2),
(21, 'Fusion Backpack', 'The author says it best, I hope to move you, a little at a time,from understanding C to the point where C++ becomes your mindset. This remarkable book is designed to streamline the process of learning C++ in a way that discusses programming problems, why they exist, and the approach C++ has taken to solve such problems.\r\n\r\nYou cant just look at C++ as a collection of features; some of the features make no sense in isolation. You can only use the sum of the parts if you are thinking about design, not simply coding. To understand C++, you must understand the problems with C and with programming in general. This book discusses programming problems, why they are problems, and the approach C++ has taken to solve such problems. Thus, the set of features that I explain in each chapter will be based on the way that I see a particular type of problem being solved in C++.', '36000', 1, 0, '3kb2zmn5.jpg', '2013-12-12', 'admin', '2013-12-12', 'admin', 0, 3, 10),
(34, 'Nếu Chỉ Còn Một Ngày Để Sống – Nicola Yoon', 'Nếu Chỉ Còn Một Ngày Để Sống – nguyên tác Everything, Everything – là một trong những tác phẩm văn học nước ngoài bán chạy bình chọn trên tạp chí New York Times. Quyển sách cũng đã được chuyển thể thành phim điện ảnh, gây bão phòng vé trên toàn thế giới từ đó quyển sách càng được nhiều độc giả đón đọc.', '30000', 1, 0, 's95ou2qz.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 10, 10),
(36, 'Colorful – Mori Eto', 'Colorful men theo những bất an bình thường mà ai cũng có thể gặp phải trong cuộc sống, nhưng một số người lại thấy chúng quá dị thường, quá kinh khủng, dẫn đến khổ tâm dằn vặt và rồi không thể vượt được qua. Để giải phóng những bình thường ấy, Colorful trình chiếu một giải pháp đặc biệt khác thường. Cuộc đời có muôn vàn nghiệm đúng, người ta tùy ý sống theo cách mình thích, nhưng một khi đã rút lui khỏi nó, thì chẳng còn nghiệm nào cho ta lựa chọn cả.', '200000', 1, 5, 'gr6lkhj4.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 10, 10),
(37, 'Người Đua Diều – Khaled Hosseini', 'Tác phẩm văn học nước ngoài này là câu chuyện có thật của nhà văn người Mỹ gốc Afghanistan Amir về những năm tháng tuổi thơ đầy niềm vui cũng như lỗi lầm cho đến khi trưởng thành lưu lạc trên đất khách quê người, và cuộc hành trình hồi hương để chuộc lại tội lỗi bản thân. Khi còn là một cậu bé, Amir sinh ra và được nuôi nấng bởi một gia đình nhiều của cải quyền thế. Người bạn gắn bó thuở ấu thời là Hassan, con trai người quản gia Ali, rất lanh lợi, mạnh mẽ luôn bảo vệ Amir.\r\nTrong một lần Hassan ra sức bảo vệ chiếc diều xanh của Amir trước bọn trẻ xấu dẫn đến bị hành hung và nhục mạ. Nhưng Amir đã để bản tính hèn nhát chiếm lĩnh và thậm chí bịa chuyển nhằm đuổi Hassan và cha Ali ra ngoài. Và chính điều đó đã ám ảnh tâm can của Amir cho dù nay đã trưởng thành và được sống sung túc trên đất Hoa Kỳ. Chính vì thế, Amir quyết định cuộc lỗi bằng cách trở về Afghanistan để cứu con trai Hassan khỏi tay bọn Taliban cũng là để cứu rỗi linh hồn mình.', '250000', 1, 0, 'm0sr5qto.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 9),
(38, 'Bố Con Cá Gai – Cho Chang – In', 'Bố Con Cá Gai đã để lại một câu chuyện mãi được yêu thương trong lòng độc giả Hàn Quốc, và chắc chắn câu chuyện cảm động này sẽ nằm tron trái tim bạn đọc rất lâu nữa. Đây là câu chuyện về một em nhỏ đã phải chiến đấu chống lại bệnh tật từ lúc lên ba, nhưng hãy khoan buồn vì em, hay quá lo lắng. Vi em chịu tiêm rất giỏi, em không khóc, ngoài những lúc mệt quá ngủ thiếp đi, em còn bận đỏ bừng mặt nghĩ tới bạn Eun Mi kẹp-tóc-hoa, bận xếp hình tàu cướp biển, bận lật giở cuốn truyện Bảy viên ngọc rồng…', '250000', 1, 10, 'n6k0lq5z.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 10, 10),
(39, 'Hachiko: Chú Chó Đợi Chờ – Luis Prats', 'Hachiko đã trở thành biểu tượng về lòng trung thành. Tượng của chú được đặt trang trọng tại nhà ga Shibuya. Câu chuyện về Hachiko được kể lại với lời văn sâu lắng của nhà văn Luis Prats cùng hình minh họa màu nước ấn tượng của Zuzanna Celej sẽ làm lay động trái tim và truyền cảm hứng cho bạn theo cách mà Hachiko đã làm rung động hàng triệu con tim trên thế giới.', '250000', 1, 0, 'xl4gfwo9.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 1),
(40, 'Tiếng Gọi Nơi Hoang Dã – Jack London', 'Nguyên tác của tác phẩm văn học nước ngoài này là The Call of the Wild đã luôn nằm trong danh sách bán chạy và khuyên đọc trên khắp thế giới. Đây là câu chuyện về một chú chó Bấc trung thành, qua nhiều biến cố Bấc đã dần đánh mất mối liên hệ với con người để từ đó cuốn theo tiếng gọi nơi hoang đã trở thành một con sói hoang.', '20000', 1, 0, 'qxif5ac1.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 1000, 1),
(41, 'Bay Trên Tổ Chim Cúc Cu', 'Mọi chuyện ở một trại tâm thần đầy quy tắc dường như đảo lộn khi McMurphy xuất hiện. Bất trị như một chú ngựa hoang, hắn vào viện để trốn án lao động khổ sai và không hề có ý định cứu thế. Nhưng trong những ngày ở đó, cái phần tốt đẹp yêu tự do, thích tung hoành của hắn đã làm nên một cuộc cách mạng, tạo ra mối liên kết giữa những thân xác yếu ớt, những trí não bị tổn thương, nhắc họ nhớ về cá tính, về chính mình hoặc về những kẻ đã-từng-là-mình. Sự nổi loạn đó thách thức trật tự đạo đức giả mà Liên hợp áp đặt.. Cuộc chiến bất cân sức bắt đầu. Và rồi đúng như cuộc đời, kẻ yếu đã không thể thắng. McMurphy đã chết dữ dội như cách hắn sống, nhưng Liên hợp không giết được hắn, cũng không thể bắt hắn sống theo cách nó đặt ra…', '5000000', 1, 50, 'n86h3trx.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 12, 1),
(42, 'Phía Nam Biên Giới, Phía Tây Mặt Trời – Haruki Murakami', 'Tác phẩm văn học nước ngoài này chứa dựng nhiều nhất con người thật của tác giả Haruki Murakami. Và là một trong những câu chuyện đơn giản nhất mà ông từng kể. Nhưng đơn giản không đồng nghĩa là dễ hiểu, lối kể chuyện tuy giản dị những vẫn mang phong cách đặc trưng của Haruki là sự bí ẩn ấn chứa bên trong tác phẩm.', '250000', 1, 0, '8jesktyl.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 12, 1),
(43, 'Và Rồi Núi Vọng – Khaled Hosseini', 'Abdullah và Pari sống cùng cha, mẹ kế và em khác mẹ trong ngôi làng nhỏ xác xơ Shadbagh, nơi đói nghèo và mùa đông khắc nghiệt luôn chực chờ cướp đi sinh mệnh lũ trẻ. Abdullah yêu thương em vô ngần, còn với Pari, anh trai chẳng khác gì người cha, chăm lo cho nó từng bữa ăn, giấc ngủ. Mùa thu năm ấy hai anh em theo cha băng qua sa mạc tới thành Kabul náo nhiệt, không mảy may hay biết số phận nào đang chờ đón phía trước: một cuộc chia ly sẽ mãi đè nặng lên Abdullah và để lại nỗi trống trải mơ hồ không thể lấp đầy trong tâm hồn Pari…', '250000', 1, 0, 'fxmgwroj.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 10, 1),
(44, 'Thế Gian Này, Nếu Chẳng Còn Mèo – Kawamura Genki', 'Trên đời, có quá nhiều thứ lặng lẽ tồn tại xung quanh, nhưng dường như ta không hề để tâm đến hoặc nghĩ rằng có cũng được, không cũng chẳng sao. Để rồi lúc mất đi mới nhận ra được tầm quan trọng của chúng đối với đời mình. Sống ngắn ngủi mà đầy ắp yêu thương và chấp nhận cả đớn đau, đầy ắp thành công mà chịu đựng cả thất bại… hay là sống vĩnh hằng, không hề vấp ngã nhưng quá khứ trắng tinh, hiện tại trơ lì và tương lai trống rỗng? Chỉ sống thôi thì có ý nghĩa gì? Ý nghĩa nằm ở chỗ mình sống thế nào chứ, đúng không?', '100000', 0, 0, 'k8p0qyce.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 1),
(45, 'Khải Hoàn Môn – Erich Maria Remarque', 'Ravic, một bác sĩ tài năng người Đức, đến Paris trong hành trình trốn chạy đế chế Quốc xã tàn bạo. Đã quen với những lần bị truy đuổi, bị bắt giam và bị trục xuất, Ravic vẫn trụ vững được trước những nỗi bất hạnh mà số phận của một người lưu vong đã ném vào anh. Cuộc sống của anh từ lâu chỉ tính bằng ngày, với một mục đích duy nhất: trả thù tên Quốc xã đã hành hạ anh và bức tử người bạn gái của anh khi còn ở Đức.', '75000', 0, 0, '2z84gbrl.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 10),
(46, 'Đèn Không Hắt Bóng – Watanabe Dzunichi', 'Tác phẩm văn học nước ngoài Đèn Không Hắt Bóng đã không còn quá xa lạ với những người yêu đọc sách. Có thể bạn chưa đọc, và chỉ nghe thoáng qua tựa sách đã thấy thân quen, bởi vì đây là một trong những kiệt tác văn học viết bới Watanabe Dzunichi trong giai đoạn khoảng năm 1971.', '250000', 0, 12, 'fyx52j7k.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 12, 1),
(47, 'Chân Trời Đảo Ngược – Marc Levy', 'Ý thức của chúng ta nằm ở đâu? Liệu chúng ta có thể sao chép và lưu giữ ký ức bên ngoài thân xác con người không? Liệu tình yêu có thể đảo ngược quy luật khắc nghiệt về sự hữu hạn của cuộc sống trong thời gian và không gian? Trong Chân Trời Đảo Ngược, Marc Levy sẽ dẫn dắt chúng ta đến với câu chuyện tình thách thức thời gian, không gian và bệnh tật, khiến ta trân trọng hơn những điều tưởng chừng nhỏ bé trong cuộc sống. Có thể nói tác phẩm văn học nước ngoài này là một trong những tiểu thuyết xúc động nhất của Marc Levy. Người đẹp ngủ trong rừng phiên bản 2.0, với một trong những nhân vật nữ thành công nhất.', '250000', 0, 12, 'v0oq8hid.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 12, 1),
(48, 'Con Của Noé – Eric – Emmanuel Schmitt', 'Với tác phẩm văn học nước ngoài này, bạn có thể cười nghiêng ngả ở một số đoạn xong rồi lại rơm rớm nước mắt được ngay, và đây cũng là một cuốn tiểu thuyết ngắn nhưng thuần khiết và đượm chất triết học. Một cuốn tiểu thuyết ngắn đầy xáo động đã đưa Eric-Emmanuel Schmitt trở thành một trong những tác gia Pháp được đọc nhiều nhất trên thế giới.', '250000', 1, 0, 'hqivgrjo.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 12, 2),
(49, 'Hai Số Phận – Jeffrey Archer', 'Hai Số Phận được sáng tác từ những năm 1979 bởi tác giả người Anh Jeffrey Archer. Quyển tiểu thuyết này có nguyên tác tiếng Anh là Kane & Abel, cũng là 2 nhân vật chính trong tác phẩm văn học nước ngoài này. Họ sinh ra cùng một ngày, một giờ, ở hai xứ sở hoàn toàn xa lạ. Người giàu sang, kẻ khốn khó nhưng họ giống nhau đến kỳ lạ, đều có tham vọng và nghị lực phi thường. Dù ở khu ổ chuột hay căn phòng hoa lệ, dù học nhờ hay có gia sư riêng, họ luôn chứng tỏ được sự thông minh và óc quan sát nhạy bén của mình.', '120000', 1, 0, 'lhdgu7q6.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 2),
(50, 'Cô Gái Trong Trang Sách – Guillaume Musso', 'Đây là quyển sách vô cùng đặc biệt, một màn kịch sắc sảo và hồi hộp, một mối tình lãng mạn và hư ảo diễn ra khi sự sống chỉ phụ thuộc vào một quyển sách. Tom Boyd là một nhà văn nổi tiếng. Giữa lúc cạn kiệt cảm hứng thì anh bỗng gặp một cô gái tự xưng là nhân vật chính trong cuốn tiểu thuyết anh đang viết dở. Cô xuất hiện một cách đột ngột, ướt sũng từ đầu đến chân và trên người không mặc bất cứ thứ gì, cô gái xuất hiện trên sân hiên nhà anh giữa một đêm giông bão và nói rằng cô  đến từ chính quyển sách của anh.', '200000', 0, 0, 'wvzqreng.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 200, 2),
(51, 'Ông Trùm Cuối Cùng – Mario Puzo', 'Trong Ông Trùm Cuối Cùng, Mario Puzo xây dựng câu chuyện trên bối cảnh tại Mỹ về nhà Clericuzio, một gia đình Mafia hùng mạnh nhất với ông trùm già Domenico Clericuzio và những mưu tính của ông nhằm đưa tất cả các thành viên hòa nhập với xã hội hợp pháp. Nhưng mọi thứ không diễn ra suông sẻ dễ dàng, mà vấp phải những mưu đồ bẩn thỉu đe dọa làm chao đảo gia đình từ chính đứa cháu của mình. Có thể nói, Ông trùm cuối cùng là tác phẩm về một thế hệ mafia mới, những gã trai trẻ bằng cách này hay cách khác muốn tìm chỗ đứng cho mình. Nhưng liệu họ có được tự do vùng vẫy, hay tất cả vẫn nằm trong bàn tay sắp đặt của ông trùm đã gần đất xa trời? Bạn hãy cùng tiểu thuyết gia nổi tiếng Mario Puzo tìm hiểu kết cục qua tác phẩm văn học nước ngoài chủ đề tội phạm này.', '20000', 1, 0, 'cyldwgm7.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 2),
(52, 'Hai Cuốn Nhật Ký – Tanizaki Junichiro', 'Tác phẩm của Tanizaki thường đi sâu vào lĩnh vực cấm kỵ. Từ sự khiêu dâm tinh tế đến tình dục bệnh hoạn đều được ông đưa cả vào sách của mình. Ông lãng mạn hóa sự khổ dâm, thi vị hóa sự dày vò tình cảm, ông viết chân thực về những xúc cảm dục vọng thầm kín của đàn ông, ông phanh trần ẩn ức dục vọng đàn bà. Người đọc có thể phì cười vì nỗi ám ảnh khiêu dâm trong sách của ông, nhưng cũng rất dễ dàng nhận thấy đó là sự hân hoan háo hức đòi hỏi cũng rất con người. Ông đưa tình dục của con người ta đi về một bến bờ nào đó xa lắc xa lơ.', '10000', 0, 0, 'kdbmuyp3.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 3),
(53, 'Thành Phố Hồn Rỗng – Ransom Riggs', 'Thành Phố Hồn Rỗng là tập thứ 2 trong series Trại trẻ đặc biệt của cô Peregrine. Trong phần này, câu chuyện được tiếp diễn khi 10 đứa trẻ đặc biệt chạy trốn khỏi đám quái vật “hồn rỗng” đang săn đuổi mình. Trong khi người duy nhất có thể giúp đỡ chúng là cô phụ trách Peregrine đang mắc kẹt trong hình dạng một con chim, thì bọn trẻ đang bị đe dọa mạng sống và chúng buộc phải dấn thân tìm sự giúp đỡ. Jacob Portman và bạn bè của cậu bắt đầu cuộc hành trình đầy bất trắc khó lường, hy vọng có thể tìm được người giúp cô phụ trách yêu quý trở lại dạng người. Nhưng nơi mà họ tìm đến, London năm 1940, đã là một thành phố tan hoang dưới tầm bom đạn, và những nguy hiểm chết người ẩn giấu mọi nơi, chưa kể thứ rùng rợn nhất: những xác sống, hồn rỗng.', '20000', 0, 0, '0su6jx82.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 3),
(54, 'Chiến Tranh Không Có Một Khuôn Mặt Phụ Nữ – Svetlana Alexievich', 'Đây là tác phẩm văn học nước ngoài của tác giả Svetlana Alexievich đoạt giải Nobel văn chương vào năm 2015. Chiến tranh không có một khuôn mặt phụ nữ sử dụng chất liệu là cuộc chiến tranh thế giới thứ 2, nhưng không nói nhiều về người lính về bom đạn về hy sinh hay sự dũng cảm chiến đấu, mà nói về những câu chuyện chưa bao giờ được đưa ra ánh sáng, những số phận gắn liền với chiến tranh.', '150000', 0, 0, 'g3qnedl9.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 200, 3),
(55, 'Đường Đua Của Những Giấc Mơ – Wendelin Van Draanen', 'Thông điệp của tác phẩm văn học nước ngoài này là: Cuộc đời gập ghềnh đá sỏi ngoài kia chẳng có thể ngăn được bước chân bạn dù những cơn giông bão luôn lăm le muốn quật ngã bạn bất cứ lúc nào. Bạn có tưởng tượng được rằng, nếu một ngày bạn mất đi vĩnh viễn chân của mình, thì cuộc đời bạn sẽ thế nào không? Và sẽ càng tồi tệ hơn khi bạn là một vận động viên điền kinh…\r\nVà đó cũng chính là câu chuyện được kể lại trong quyển sách này, Jessica đã phải hứng chịu một cuộc đời mất mát và đớn đau khi mất đi đôi chân của mình, và cũng mất đi những ước mơ hoài bảo lớn lao. Một người bình thường bỗng chốc trở thành tàn tật và phải hứng chịu bao nhiêu ánh mắt thương hại của những người xung quanh. Liệu cô gái có mạnh mẽ để quay trở lại cuộc sống bình thường như trước kia và còn hơn thế nữa là làm được những điều không ai nghĩ rằng cô có thể?', '50000', 0, 0, 'f2i4r3cy.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 300, 3),
(56, 'Ký Ức Về Cha – Lưu Tử Khiết', 'Ký ức về cha là tâm sự của chính tác giả Lưu Tử Khiết – người đã rời xa quê hương để đi làm – trong bảy ngày sau khi cha cô qua đời. Sự ảnh hưởng của cha đến cuộc sống của cô đã được tái hiện qua từng trang giấy bằng giọng văn hài hước cũng như có phần bất cần. Thế nhưng ẩn chứa trong đó là tình thân vĩnh viễn không thể thay đổi giữa con gái và cha.', '250000', 0, 0, '5eiru1qn.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 3),
(57, 'Ác Mộng Trong Đêm – Jeff Lindsay', 'Quyển sách này được xuất bản năm 2004, là cuốn sách đầu tiên trong series truyện viết về kẻ giết người hàng loạt Dexter Morgan. Cuốn sách đã dành được Giải thưởng Dilys vào năm 2005 và đạ được chuyển thể thành phim truyền hình dài tập mang tựa đề Dexter. Nhân vật chính của cuốn tiểu thuyết này là Dexter Morgan, một chuyên gia phân tích mẫu máu tại sở cảnh sát Miami, và cũng đồng thời là một kẻ giết người “một cách hoàn hảo”.', '40000', 0, 0, 'lduvsikf.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 200, 3),
(58, 'Tù Nhân Của Thiên Đường – Carlos Ruiz Zafón', 'Năm 1957 tại Barcelona. Chỉ còn một tuần nữa là đến Giáng Sinh, Daniel Sempere đã lập gia đình và có một cậu con trai kháu khỉnh, trong khi đó người bạn thân của anh, Fermín, cũng đang bận rộn chuẩn bị lễ cưới chính mình vào năm mới. Mọi việc tưởng chừng rất êm đẹp, bỗng một ngày nọ xuất hiện kẻ lạ mặt với bộ dạng khó nhìn, chân đi khập khiễng bước vào hiệu sách của Daniel.Quyển sách ông ta muốn mua là một bản Bá Tước Monte Cristo có minh họa cực kì đắt tiền, kèm theo lời đề tặng: “Tặng Fermín Romero de Torres, Người từ cõi chết trở về Và nắm giữ chìa khóa đi vào tương lai”', '250000', 1, 0, 'cwnsglrj.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 3),
(59, 'Bố Già', 'Thế giới ngầm được phản ánh trong tiểu thuyết Bố già là sự gặp gỡ giữa một bên là ý chí cương cường và nền tảng gia tộc chặt chẽ theo truyền thống Mafia xứ Sicily với một bên là xã hội Mỹ nhập nhằng đen trắng, mảnh đất màu mỡ cho những cơ hội làm ăn bất chính hứa hẹn những món lợi kếch xù. Trong thế giới ấy, hình tượng Bố già được tác giả dày công khắc họa đã trở thành bức chân dung bất hủ trong lòng người đọc.', '20000', 0, 0, 'opd9lw10.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 3),
(60, 'Chúa Tể Những Chiếc Nhẫn', 'Kỷ Đệ Nhất, các Valar kết liễu Morgoth.\r\n\r\nKỷ Đệ Nhị, Tiên và Người đánh bại Sauron.\r\n\r\nVà nay, giữa Kỷ Đệ Tam tưởng đã hòa bình, báu vật của Sauron lại ngóc đầu trong lòng núi. Và thêm một anh chàng Hobbit bỗng thấy mình từ biệt tổ ấm yên bình, dấn vào cuộc phiêu lưu mỗi bước lại thêm xa, thêm gian nan, thêm hệ trọng.', '250000', 0, 0, 's8ndoaqt.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 4),
(61, 'Đại Gia Gatsby', '“Gatsby đã tin vào đốm sáng xanh ấy, vào cái tương lai mê đắm đến cực điểm đang rời xa trước mắt chúng ta năm này qua năm khác. Ừ thì nó đã tuột khỏi tay chúng ta, nhưng có làm sao đâu – ngày mai chúng ta sẽ lại chạy nhanh hơn, vươn tay ra xa hơn…”', '250000', 0, 12, '1b09836j.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 4),
(62, 'Forrest Gump', 'Cuốn sách này được viết ra không nhằm cho ta một bài học về tài chính hay kinh doanh gì cả. Một cuốn sách được viết với phong cách nhẹ nhàng, đơn giản và dễ hiểu. Nó không cỗ vũ chúng ta tin vào số mệnh hay vận may rủi. Cuốn sách đơn giản cho chúng ta nhìn cuộc sống qua một lăng kính khác, lăng kính của một người có chỉ số IQ thấp, một người mà chúng ta cho rằng bất thường hơn so với số đông còn lại. Chúng ta biết và hiểu được cuộc sống cũng như cách suy nghĩ của Forrest Gump. Nhờ đó, ta thấy cuộc đời thực ra rất đơn giản, như cách mà Forrest Gump sống và trải nghiệm nó vậy.', '250000', 1, 10, '8tibl9jp.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 4),
(63, 'Hai Số Phận', 'Hai Số Phận (có tên gốc tiếng Anh là: Kane and Abel) là một cuốn tiểu thuyết được sáng tác vào năm 1979 bởi nhà văn người Anh Jeffrey Archer. Tựa đề Kane and Abel dựa theo câu chuyện của anh em: Cain và Abel trong Kinh Thánh Cựu Ước.\r\n\r\nTác phẩm được xuất bản tại Vương quốc Anh vào năm 1979 và tại Hoa Kỳ vào tháng 2 năm 1980, cuốn sách phổ biến thành công trên thế giới. Sách đạt danh hiệu sách bán chạy nhất theo danh sách của tờ New York Times và năm 1985 nó được đưa lên chương trình truyền hình miniseries của CBS với tên là Kane & Abel bắt đầu với Peter Strauss vai Rosnovski và Sam Neill vai Kane.\r\nHai Số Phận (có tên gốc tiếng Anh là: Kane and Abel) là một cuốn tiểu thuyết được sáng tác vào năm 1979 bởi nhà văn người Anh Jeffrey Archer. Tựa đề Kane and Abel dựa theo câu chuyện của anh em: Cain và Abel trong Kinh Thánh Cựu Ước.\r\n\r\nTác phẩm được xuất bản tại Vương quốc Anh vào năm 1979 và tại Hoa Kỳ vào tháng 2 năm 1980, cuốn sách phổ biến thành công trên thế giới. Sách đạt danh hiệu sách bán chạy nhất theo danh sách của tờ New York Times và năm 1985 nó được đưa lên chương trình truyền hình miniseries của CBS với tên là Kane & Abel bắt đầu với Peter Strauss vai Rosnovski và Sam Neill vai Kane.\r\n\r\n\r\n', '250000', 0, 10, 'n2z4i5jg.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 4),
(64, 'Suối Nguồn', 'Bản chất của con người – và của bất cứ sinh vật nào – không phải là đầu hàng, hoặc phỉ nhổ và nguyền rủa sự tồn tại của mình; điều ấy thực ra đòi hỏi cả một quá trình suy đồi mà tốc độ của nó tuỳ thuộc mỗi người. Một vài người đầu hàng vào lần đầu tiên tiếp xúc với áp lực; một vài người mặc nhiên đầu hàng; một số khác đi xuống từ từ và cứ thế mất dần ngọn lửa mà chính họ cũng không hề nhận ra nó đã tàn lụi như thế nào. Sau đó, tất cả biến mất trong cái đầm lầy khổng lồ gồm những người già cỗi, những người rao giảng rằng trưởng thành bao hàm việc chối bỏ chính kiến, rằng sự ổn định bao hàm việc chối bỏ những giá trị riêng, và rằng sống thực tế có nghĩa là phải gạt bỏ sự tồn tại. Chỉ một số ít người kiên quyết không đầu hàng và tiếp tục tiến lên; họ biết rằng không thể phản bội ngọn lửa kia; họ học cách nuôi dưỡng nó, cho nó hình hài, mục đích và sự sống… Tóm lại, dù tương lai mỗi người khác nhau, ở vào thời điểm bắt đầu cuộc sống, nhân loại luôn tìm kiếm một hình ảnh cao cả về bản chất con người cũng như về cuộc sống.', '10000', 0, 0, 'ed0uhat7.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 6),
(65, 'Tiếng Chim Hót Trong Bụi Mận Gai', 'Tình yêu giữa Meggie với Ralph thật đáng nể phục. Cô gái Mecghi chỉ yêu một lần trong đời, nhưng yêu bằng tình yêu mãnh liệt nhất thế gian. Mecghi vượt lên nỗi đau đớn thân xác và linh hồn để chiến thắng Chúa Trời. “Nỗi đau cũng chính là niềm kiêu hãnh trong nàng. Bởi có ai dám vì tình yêu mà giành giật cả linh mục (Ralph) – người sinh ra vốn đã thuộc về Chúa?', '20000', 1, 0, 'odk9lbz8.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 4),
(66, 'Sự Im Lặng Của Bầy Cừu', 'Sự Im Lặng Của Bầy Cừu kể về vụ án giết người hàng loạt xảy ra nhưng không để lại dấu vết. Điều kỳ lạ là Lecter – một bác sĩ tâm lý bị tâm thần đang điều trị tại Dưỡng Trí Viện biết rất rõ về hành vi của kẻ sát nhân nhưng chỉ im lặng. Cho đến khi con gái của thượng nghị sĩ bị bắt cóc thì cuộc đối đầu của nữ nhân viên thực tập FBI và vị bác sĩ tâm thần đã đến cực điểm. Cuối cùng tất cả cũng đều lộ diên, thủ phạm là một tên có nhân cách bệnh hoạn, một kẻ tâm thần rối loạn cựu kỳ nguy hiểm…', '75000', 0, 0, 'rqxvle86.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 4),
(67, 'Ông Trăm Tuổi Trèo Qua Cửa Sổ Và Biến Mất', 'Vào ngày sinh nhật lần thứ 100 của mình, cụ ông Allan Karlsson đột nhiên trèo qua của sổ ngôi nhà dưỡng lão – Nhà Già – và biến mất. Ở cái tuổi 100 hiếm ai đạt tới thì cụ có thể đi đâu được? Một cuộc truy tìm trên khắp nước Thụy Điển diễn ra từ phía những người có trách nhiệm chăm nom cụ cũng như chính quyền sở tại. Song song với cuộc truy tìm nhân đạo ấy, một cuộc truy tìm đuổi bắt khác gay cấn hơn, xảy đến từ một tên tội phạm, kẻ đã ngớ ngẩn hoặc đúng hơn, bất cẩn trao vali 50 triệu crown vào tay cụ già này. Nhưng một người đã sống qua một thế kỷ thì không dễ gì tóm cụ ta được.', '100000', 0, 0, '38hsjpao.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 4),
(68, 'Giết Con Chim Nhại', 'Câu chuyện trong quyển sách mang lại rất nhiều bài học quí về tình người và cho người đọc cảm nhận được cuộc sống của những con người vào thời điểm ấy. Một ông luật sư tận tâm với thân chủ của mình và đấu tranh chống lại cái bất công trong xã hội với chế độ phân biệt chủng tộc tàn nhẫn mà người da đen Mỹ đã phải hứng chịu suốt một thời gian dài.\r\n\r\nCâu chuyện mang lại một bài học nhân văn sâu sắc về tình người, về cuộc sống, về sự bất công trong xã hội. Rất hay, rất đáng đọc.', '10000', 0, 0, 'e3pxca6l.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 1000, 4),
(69, 'Khi Lỗi Thuộc Về Những Vì Sao', 'Mặc dù phép màu y học đã giúp thu hẹp khối u và ban thêm vài năm sống cho Hazel nhưng cuộc đời cô bé đang ở vào giai đoạn cuối, từng chương kế tiếp được viết theo kết quả chẩn đoán. Nhưng khi có một nhân vật điển trai tên là Augustus Waters đột nhiên xuất hiện tại Hội Tương Trợ Bệnh Nhi Ung Thư, câu chuyện của Hazel sắp được viết lại hoàn toàn.', '250000', 0, 0, 'o0v1jarf.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 5),
(70, 'Totto-Chan Bên Cửa Sổ', 'Vừa vào lớp một được vài ngày, Totto-chan đã bị đuổi học!!!\r\n\r\nKhông còn cách nào khác, mẹ đành đưa Totto-chan đến một ngôi trường mới, trường Tomoe. Đấy là một ngôi trường kỳ lạ, lớp học thì ở trong toa xe điện cũ, học sinh thì được thoả thích thay đổi chỗ ngồi mỗi ngày, muốn học môn nào trước cũng được, chẳng những thế, khi đã học hết bài, các bạn còn được cô giáo cho đi dạo. Đặc biệt hơn ở đó còn có một thầy hiệu trưởng có thể chăm chú lắng nghe Totto-chan kể chuyện suốt bốn tiếng đồng hồ! Chính nhờ ngôi trường đó, một Totto-chan hiếu động, cá biệt đã thu nhận được những điều vô cùng quý giá để lớn lên thành một con người hoàn thiện, mạnh mẽ.', '160000', 0, 0, 'hqp9ezfm.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 5),
(71, 'Không Gia Đình', 'Không Gia Đình là một chuyến phiêu lưu mà Rêmi là nhân vật chính. Em nghèo khổ, em cô độc, em không có người thân. Cuộc đời Rêmi gắn liền với gánh xiếc rong, với những thử thách mà em gặp phải trên đường đời trải rộng khắp nước Pháp tươi đẹp. Rêmi lớn lên trong đau khổ, lang thang mọi nơi, bị tù đày… nhưng dù trong hoàn cảnh nào, em vẫn đứng thẳng lưng, ngẩng cao đầu, giữ phẩm chất làm người – điều em đã học từ cụ Vitali trong cuộc đời lang bạt của mình.', '20000', 0, 0, 'lxh7p13e.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 5),
(72, 'Hãy Chăm Sóc Mẹ', 'Tác phẩm Hãy chăm sóc mẹ của nhà văn Hàn Quốc Kyung-sook Shin mở đầu bằng khung cảnh xáo trộn của một gia đình. Mẹ bị lạc khi chuẩn bị bước lên tàu điện ngầm cùng bố ở ga Seoul. Hai ông bà dự định lên đây thăm cậu con cả. Con gái đầu, Chi-hon, là người đứng ra viết thông báo tìm người lạc thay cho cả gia đình. “Ngoại hình: Tóc ngắn đã muối tiêu, xương gò má cao, khi đi lạc đang mặc áo sơ mi xanh da trời, áo khoác trắng, váy xếp nếp màu be”. Trong tiềm thức của mình, Chi-hon vẫn nghĩ mẹ là người thường“bước đi giữa biển người với phong thái có thể đe dọa cả những tòa nhà lừng lững đang nhìn thẳng xuống từ trên cao”. Trong khi đó, những người qua đường đáp lại thông báo tìm người lạc của cô bằng miêu tả về một “một bà già cứ lững thững bước đi, thỉnh thoảng lại ngồi bệt xuống đường hay đứng thẫn thờ trước cầu thang cuốn”. Liệu đó có phải là người mẹ mà cả gia đình cô đang cất công tìm kiếm?', '20000', 1, 0, 'zeorq9bp.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 5),
(73, 'Hỏa Ngục', 'Hỏa Ngục của Dan Brown, truyện bàn về vấn đề bùng nổ dân số. một vấn đề bức thiết, gây ra nhiều ảnh hưởng đến cuộc sống và môi trường sống nhưng ít ai trong chúng ta để tâm đến nhiều.\r\n\r\nVẫn cách dẫn truyện quen thuộc, hồi hộp gây cấn ngay từ trang đầu, đưa chúng ta đến nước Ý lãng mạn với nhiều công trình kiến trúc nghệ thuật độc đáo. Người đọc vừa phiêu lưu cùng nhân vật, vừa như được thưởng lãm một nền văn hóa nghệ thuật lâu đời. Cách miêu tả khai thác tối đa trí tưởng tượng cũng như óc phán đoán của người đọc., tuy vậy kết cuộc vẫn luôn là bất ngờ nằm hoàn toàn ngoài dự đoán.', '250000', 1, 0, 's25nljkc.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 5),
(74, 'Cuộc Đời Của Pi', 'Piscine Molitor Patel, tên thường gọi là Pi, quốc tịch Ấn Độ, là người sống sót duy nhất trong vụ đắm tàu Tsimtsum ngày 2 tháng 7 năm 1977, đã lênh đênh trên biển suốt 227 ngày với xuồng cứu hộ và một con hổ Bengal tên là Richard Parker. Nói như Ravi – anh trai của Pi, thì là “Phiêu lưu đang vẫy gọi”, chỉ có điều 227 ngày phiêu lưu này cũng là 227 ngày đấu tranh và giành giật sự sống trên bề mặt mênh mông của Thái Bình Dương.\r\n\r\nCuộc Đời Của Pi là một cuốn sách nhỏ, không quá dày và không nổi bật với bìa sách màu xanh biển mênh mông có đàn cá làm nền cho chiếc xuồng cứu hộ. Pi và Richard Parker nằm trên hai đầu của chiếc xuồng ấy, lặng lẽ và tuyệt vọng với cái chết rình rập quanh mình.', '250000', 1, 0, 'djvuhbrp.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 6),
(75, 'Từ Thăm Thẳm Lãng Quên', 'Một câu chuyện bỗng nhiên hiện ra từ quá khứ mịn màng. Lúc nào người ta cũng tự hỏi, làm cách nào, bằng thứ giả thuật kim nào, mà tác giả có thể tạo ra những ký ức tinh xảo đến thế.\r\n\r\nNhưng Jaquenline, Van Bever rồi Peter Rachman, Paris và London của giai đoạn hậu chiến trong “Từ thăm thẳm lãng quên” dần dà làm cho chúng ta hiểu rằng vỏ bọc quá khứ mịn màng hoàn toàn có thể chứa đựng những kỷ niệm đâu đớn đến thế nào, những kỷ niệm ngủ yên nhưng sẽ quay trở lại quấy nhiễu chúng ta sau từng quãng thời gian mười lăm năm.', '20000', 1, 0, 'f1g3dpun.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 5),
(76, 'Ở Quán Cà Phê Của Tuổi Trẻ Lạc Lối', 'Tuổi trẻ là một khối dồn nén. Nó có sức phá hoại đến nỗi, vào một thời điểm những tưởng đã quay lưng với cuộc đời, ta chợt nhìn lại và thấy vần vũ quanh mình những gương mặt, mối tình, những lần gặp gỡ, các cảm xúc chân thực và sống động như dao cứa. Đó là tình cảnh của Roland, nhân vật tuy xuất hiện về cuối trong “Ở quán cà phê của tuổi trẻ lạc lối” (Trần Bạch Lan dịch, Nhã Nam & NXB Văn Học) nhưng lại là mắt xích giải đáp cho mớ ngổn ngang còn lại. Một ngày bước qua quán cà phê La Condé thời xưa cũ rồi nhận ra quán đã đổi thành một cửa hiệu khác, Roland tái dựng ký ức về một cô gái mà anh đã gặp, đã yêu và đánh mất.', '10000', 0, 0, 'at6m5ncq.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 5),
(77, 'Ông Già Và Biển Cả', 'Ông già và Biển cả (tên tiếng Anh: The Old Man and the Sea) là một tiểu thuyết ngắn được Ernest Hemingway viết ở Cuba năm 1951 và xuất bản năm 1952. Nó là truyện ngắn dạng viễn tưởng cuối cùng được viết bởi Hemingway. Đây cũng là tác phẩm nổi tiếng và là một trong những đỉnh cao trong sự nghiệp sáng tác của nhà văn. Tác phẩm này đoạt giải Pulitzer cho tác phẩm hư cấu năm 1953. Nó cũng góp phần quan trọng để nhà văn được nhận Giải Nobel văn học năm 1954.\r\n\r\nTrong tác phẩm này, ông đã triệt để dùng nguyên lý mà ông gọi là “tảng băng trôi”, chỉ mô tả một phần nổi còn lại bảy phần chìm, khi mô tả sức mạnh của con cá, sự chênh lệch về lực lượng, về cuộc chiến đấu không cân sức giữa con cá hung dữ với ông già. Tác phẩm ca ngợi niềm tin, sức lao động và khát vọng của con người.', '250000', 0, 0, 'a68ltock.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 6),
(78, 'Zen and the Art of Motorcycle Maintenance  (Tác giả Robert M. Pirsig)', 'Viết về một hành trình đi khắp nước Mỹ trong mùa hè của một người cha và cậu con trai, cuốn sách Zen And The Art Of Motorcycle Maintenance còn là một hành trình triết học với đầy những câu hỏi cơ bản về cuộc sống và cách sống trên đời.', '20000', 0, 0, 'qy1nh076.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 6),
(79, ' Watership Down - Đồi Thỏ  (Tác giả Richard Adams) Watership Down', 'Đồi Thỏ viết về hành trình đi tìm vùng đất mới của một nhóm các chú thỏ khi biết trước nơi chúng đang ở sẽ bị con người và máy móc phá hủy. Cuốn sách thiếu nhi này gây ngạc nhiên với người đọc bởi vì có độ dày như sách dành cho người lớn. Tuy nhiên cũng chính bởi vậy, bạn đọc đặc biệt là trẻ em có thể trải qua nhiều cuộc phiêu lưu nối tiếp cùng nhóm thỏ. Với trẻ nhỏ các em sẽ hiểu được phần nào sự nguy hiểm khi sống giữa thiên nhiên hoang dã, ý chí vượt qua khó khăn và sức mạnh của tinh thần đoàn kết, nhưng độc giả lớn tuổi đã có ít nhiều trải nghiệm cuộc sống sẽ nhìn thấy ở đó câu chuyện của cuộc sống, xã hội. Sách đã được xuất bản tại Việt Nam và chuyển thể thành phim hoạt hình cùng tên.', '250000', 0, 0, 'jb52fkoh.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 6),
(80, 'The Last Lecture - Bài giảng cuối cùng (Tác giả Randy Pausch & Jeffrey Zaslow) Randy Pausch', 'Giáo sư khoa học máy tính tại Đại học Carnegie Mellon- Mỹ, trở nên nổi tiếng sau khi đưa ra một bài giảng lạc quan mang tên \"Bài giảng cuối: Để thật sự đạt được ước mơ thời thơ ấu của bạn\" ở thời điểm ông biết mình bị ung thư tuyến tụy và chỉ có thể sống tốt trong vòng 3-6 tháng nữa. Sau thành công của bài giảng, ông cùng một người bạn viết nên cuốn sách The Last Lecture - Bài giảng cuối cùng khuyến khích mọi người tận hưởng mọi giây phút của cuộc sống. Sách đã được xuất bản tại Việt Nam.', '10000', 0, 0, '52o4bzfw.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 6),
(81, 'A Short History of Nearly Everything - Lược sử vạn vật (Tác giả Bill Bryson)', 'Trong cuốn sách A Short History of Nearly Everything - Lược sử vạn vật này Bill Bryson mô tả một cách đơn giản và thô mộc mọi thứ từ kích thước và lịch sử của vũ trụ cho tới lịch sử của nhân loại. Ông cũng dành thời gian nói về các nhà khảo cổ học lập dị, nhân chủng học, và các nhà toán học đã đóng góp cho những khám phá vĩ đại nhất của thế giới. A Short History of Nearly Everything- Lược sử vạn vật là cuốn sách về khoa học bán chạy nhất ở Anh năm 2005 với hơn 300,000 bản in được bán ra, đồng thời cũng là cuốn sách khoa học bán chạy nhất tại Mỹ. Cuốn sách cũng đồng thời đạt hai giải thưởng danh giá là Giải Aventis (2004) cho cuốn sách khoa học đại cương hay nhất, và giải Descartes (2005) về truyền thông khoa học. Sách đã được Alpha Books dịch và xuất bản tại Việt Nam.', '250000', 0, 0, 'q0l5y14v.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 6),
(82, 'Man\'s Search for Meaning - Đi tìm lẽ sống (Tác giả Viktor Frankl) ', 'Man\'s Search for Meaning - Đi tìm lẽ sống được viết bởi Viktor Frankl từ chính kinh nghiệm của mình là tù nhân trong trại tập trung Auschwitz trong Thế chiến II . Với sự hiểu biết phong phú và trải nghiệm tâm lý của người tù, Frankl ngẫm lại những ý nghĩa của cuộc sống, và cách làm thế nào mà xã hội lại có những người đứng đắn và không đứng đắn.', '250000', 0, 0, 'ynestm4v.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 6),
(83, 'The Forever War (Tác giả Joe Haldeman)', 'The Forever War viết về sự trở về của chiến binh miễn cưỡng William Mandella sau khi rời trái đất để chiến đấu với các chủng tộc người ngoài hành tinh bí ẩn Taurans. Nhưng vì thời gian giãn nở, nên William mới đi 10 năm, nhưng trên trái đất thì đã 700 năm trôi qua. Khi Mandella trở lại, trái đất đã biến thành một hành tinh hoàn toàn khác, khiến anh không còn nhận ra. Được viết bởi cựu binh tham gia chiến tranh Việt Nam, cuốn tiểu thuyết The Forever War là một ẩn dụ về cuộc sống của người lính sau khi tham gia cuộc chiến tranh này.', '10000', 0, 0, 'ecl2hyp8.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 7),
(84, 'Cosmos - Vũ trụ (Tác giả Carl Sagan)', 'Cuốn sách Cosmos - Vũ trụ này giúp mọi độc giả, kể cả những người không có nhiều kiến thức về khoa học, cũng có thể hiểu được lịch sử 15 tỷ năm của vũ trụ của chúng ta. Sách đã được dịch và xuất bản tại Việt Nam.', '10000', 0, 0, '6873zkyc.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 7),
(85, 'Bartleby The Scrivener: A Story of Wall-Street (Tác giả Herman Melville)', 'Bartleby The Scrivener là một tiểu thuyết ngắn viết về câu chuyện ngớ ngẩn của một người đàn ông tên Bartleby làm việc tại một công ty luật New York. Bartleby là một nhân viên tuyệt vời, cho đến một ngày anh được yêu cầu đọc lại tài liệu bất kỳ và chỉ đơn giản nói \"Tôi không muốn!\", cho đến khi câu nói đó trở thành phản ứng thụ động và làm thay đổi cuộc sống của anh sau đó.', '250000', 0, 0, 'smncoeib.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 7),
(86, 'Maus: A Survivor\'s Tale (Tác giả Art Spiegelman)', 'Maus là cuốn tiểu thuyết hoạt hình (graphic novel) đạt giải thưởng Pulitzer, kể về câu chuyện của một người sống sót của người Do Thái Holocaust và con trai ông, một họa sĩ truyện tranh đang cố gắng để dung hòa với câu chuyện của cha mình. Maus là sự thật ảm đạm và kinh hoàng về của cuộc sống dưới thời Hitler, cũng như câu chuyện về mối quan hệ của người con trai với người cha già của mình.', '250000', 0, 0, '2sfqy5rb.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 7),
(87, 'For Whom the Bell Tolls - Chuông nguyện hồn ai (Tác giả Ernest Hemingway)', 'Tác phẩm truyện tranh này viết về Robert Jordan, một chuyên gia phá hủy trẻ và lý tưởng của Mỹ, chiến đấu cùng lực lượng chống phát xít trong nội chiến Tây Ban Nha năm 1937. For Whom the Bell Tolls - Chuông nguyện hồn ai diễn ra trong vòng 68 giờ, trong khi Jordan đang cố gắng tìm cách để thổi bay một cây cầu của địch, đấu tranh với các nhà lãnh đạo thụ động của lực lượng du kích, và rơi vào tình yêu với một người phụ nữ trẻ người Tây Ban Nha. Sách đã được xuất bản tại Việt Nam.', '250000', 1, 0, 'eyum3nj1.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 7),
(88, 'Kafka on the Shore - Kafka bên bờ biển (Tác giả Haruki Murakami)', 'Kafka on the Shore - Kafka bên bờ biển là sự pha trộn các chương viết về hai nhân vật, cậu bé Kafka 15 tuổi trong hành trình chạy trốn lời nguyền: mày sẽ ngủ với mẹ và chị gái mày sau khi giết cha. Và nhân vật còn lại là ông già Nakata, bị một tai nạn từ nhỏ, mất trí nhớ và khả năng đọc, viết; bù lại ông có thể giao tiếp với loài mèo, vì thế ông nhận sứ mệnh đi tìm con quỷ giết mèo hàng loạt, tìm một phiến đá bí ẩn… Hai số phận tưởng chừng như không liên quan, mà đan xen vào nhau để trở thành một tấm gương phản chiếu lẫn nhau... thành một hành trình siêu hình đầy tính hiện thực huyền diệu. Kafka on the Shore - Kafka bên bờ biển đã được xuất bản tại Việt Nam.', '250000', 0, 0, '90tyxlaf.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 7),
(89, 'The Little Prince - Hoàng tử bé (Tác giả Antoine de Saint-Exupéry)', 'Cuốn tiểu thuyết The Little Prince - Hoàng tử bé kể về câu chuyện của một phi công bị rơi máy bay trong sa mạc Sahara và được chào đón bởi một cậu bé tuyên bố mình là một hoàng tử nhỏ, từ một hành tinh khác đến. Trong quá trình sửa chữa máy bay, viên phi công đã biết cuộc đời của \"hoàng tử nhỏ\" và khao khát trở lại hành tinh quê hương của mình. Mặc dù được coi là một cuốn truyện thiếu nhi tinh tuyển, nhưng \"Hoàng tử bé\" cũng được coi là một trong những cuốn tiểu thuyết sâu sắc nhất của văn học Pháp. The Little Prince - Hoàng tử bé được nhiều đơn vị dịch và xuất bản tại Việt Nam.', '250000', 0, 12, '3srk5026.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 7),
(90, 'The Road - Cha và con (Tác giả Cormac McCarthy)', 'The Road - Cha và con là cuốn tiểu thuyết thứ 10 của nhà văn 74 tuổi Cormac McCarthy. Cuốn tiểu tiểu thuyết kể về cuộc rong ruổi của một người cha và con trai trong sự đối mặt với bạo lực, đói khát, bệnh tật. Năm 2007, The Road - Cha và con đã đoạt giải Pulitzer. Nhận xét về cuốn sách Book Forum viết: “Mỗi trang của cuốn truyện đều chứa đựng một sự lôi cuốn tự nhiên diệu kỳ khiến độc giả không thể cưỡng lại được ham muốn dõi theo cuộc sinh tồn khốc liệt của các nhân vật… Một khi đã cầm cuốn sách lên bạn sẽ không thể đặt nó xuống… Cho dù bạn là ai, bạn vẫn có thể cảm thụ được đầy đủ The Road - Cha và Con là một kiệt tác vừa bi thương, vừa sâu sắc” Cuốn tiểu thuyết đã được xuất bản tại Việt Nam.', '250000', 0, 0, '19vm6zg0.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 7),
(91, 'One Hundred Years of Solitude- Trăm năm cô đơn (Tác giả Gabriel Garcia Marquez)', 'One Hundred Years of Solitude - Trăm năm cô đơn là tác phẩm tiêu biểu của trường phái hiện thực huyền ảo, kể về dòng họ Buendia và ngôi làng họ sống qua một trăm năm. Dòng họ Buendia bao gồm 7 thế hệ, đã tự lưu đày vào cõi cô đơn để chạy trốn tội loạn luân. Người đầu tiên trong dòng họ là Jose Acardio Buendia và người cuối cùng của dòng họ là Aureliano đã bị kiến ăn khi vừa mới được sinh ra. Tác phẩm đã chuyển dịch qua hơn 30 ngôn ngữ trên thế giới trong đó có Việt Nam, và đoạt giải Nobel Văn học vào năm 1982. One Hundred Years of Solitude- Trăm năm cô đơn đã được dịch và xuất bản tại Việt Nam.', '10000', 0, 0, 'epxlwb3r.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 8),
(92, 'East of Eden- Phía Đông vườn Địa đàng (Tác giả John Steinbeck)', 'East of Eden - Phía Đông vườn Địa đàng viết về cuộc đấu tranh của các thế hệ thuộc 2 dòng họ Trasks và Hamiltons sống trong thung lũng Salinas, California với nhiều vấn đề về đạo đức, đúng, sai... Cuốn tiểu thuyết được coi là tái tạo và lý giải câu chuyện kể về Cain và Abel theo Thánh Kinh. Tác giả cuốn tiểu thuyết Steinbeck coi East of Eden - Phía Đông vườn Địa đàng là cuốn tiểu thuyết lớn nhất trong cuộc đời sáng tác của ông. Cuốn tiểu thuyết đã được dịch và xuất bản tại Việt Nam.', '250000', 0, 12, 'mpxytnf1.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 8),
(93, 'How to Win Friends and Influence People - Đắc nhân tâm (Tác giả Dale Carnegie)', 'How to Win Friends and Influence People - Đắc nhân tâm được viết vào những năm 1930, nhưng hầu hết các lời khuyên của Carnegie vẫn đúng với ngày hôm nay. Cuốn sách phát triển bản thân này cũng nằm trong nhiều Top sách gây ảnh hưởng và làm thay đổi cuộc sống của nhiều tờ báo, trang web uy tín. Cuốn sách thậm chí cũng nằm trong nhiều Top sách quản trị kinh doanh hay nhất mọi thời đại. How to Win Friends and Influence People - Đắc nhân tâm cũng đã được dịch và xuất bản tại Việt Nam.', '250000', 0, 0, 'ldu28qh9.png', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 8),
(94, 'Crime and Punishment - Tội ác và trừng phạt (Tác giả Fyodor Dostoyevsky)', 'Crime and Punishment - Tội ác và trừng phạt là một trong những tác phẩm có nội dung bi thảm nhất của nền văn học nhân loại. Tác giả đã dựng lên một bức tranh ảm đạm về số phận bế tắc của lớp người dưới đáy xã hội Nga, nhất là tầng lớp trẻ trong trắng, nhiều khát vọng. Trong cuốn tiểu thuyết này, Dostoyevsky đã chứng tỏ mình là một bậc thầy trong việc tìm hiểu bản chất con người. Crime and Punishment - Tội ác và trừng phạt đã được dịch và xuất bản tại Việt Nam.', '20000', 0, 0, 'em8fp52s.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 8),
(95, 'The Brothers Karamazov - Anh em nhà Karamazov (Tác giả Fyodor Dostoyevsky)', 'The Brothers Karamazov - Anh em nhà Karamazov là cuốn tiểu thuyết cuối cùng, cũng là tác phẩm vĩ đại nhất của Dostoevsky. Cuốn tiểu thuyết mô tả sinh động cuộc đấu tranh giữa các nguyên tắc đạo đức truyền thống, đức tin với sự nghi ngờ các giá trị truyền thống và ý chí tự do khi nước Nga bước vào công cuộc hiện đại hóa. The Brothers Karamazov - Anh em nhà Caramazov được đánh giá là một tác phẩm hiện thực đúng nghĩa, đồng thời là tác phẩm rất lôi cuốn khi khiến người đọc luôn hồi hộp với sự phát triển căng thẳng của cốt truyện hình sự được bố trí cực kỳ khéo léo. The Brothers Karamazov - Anh em nhà Caramazov đã được chuyển ngữ và xuất bản tại Việt Nam.', '20000', 0, 0, 'qxpj59i3.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 8),
(96, 'The Giving Tree - Cây táo yêu thương (Tác giả Shel Silverstein)', 'The Giving Tree - Cây táo yêu thương là một trong những cuốn sách đáng đọc nhất dành cho thiếu nhi. Trong cuốn sách này, Shel Silverstein kể về câu chuyện một cây táo yêu một cậu bé rất nhiều. Từ thuở bé cho đến khi lớn lên, cây đã cho anh tất cả những gì cây có, cho đến khi chỉ còn một gốc cây để cậu bé mệt mỏi và ngồi lại nghỉ ngơi trên đó. Truyền cảm hứng và gây tranh luận trái chiều với nhiều luồng ý kiến rất khác nhau về tình yêu thương và sự ích kỷ, dẫu vẫn The Giving Tree - Cây táo yêu thương vẫn là một trong những câu chuyện gây ấn tượng mạnh mẽ nhất từng được viết. The Giving Tree - Cây táo yêu thương đã được Alpha Books mua bản quyền và xuất bản tại Việt Nam.', '250000', 0, 0, 'gxy41h3p.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 8),
(97, 'To Kill A Mockingbird - Giết con chim nhại (Tác giả Harper Lee)', 'Giành giải thưởng Pulitzer, To Kill A Mockingbird - Giết con chim nhại cũng là tác phẩm kinh điển của văn học hiện đại Mỹ. Trong cuốn tiểu thuyết này, tác giả Harper Lee xây dựng các câu chuyện và nhân vật dựa trên quan sát của bản thân, những chuyện xảy ra với chính gia đình cô và những người hàng xóm. Mặc dù đề cập đến những vấn đề nghiêm trọng nhất của xã hội như: tội hiếp dân, bất bình đẳng, phân biệt chủng tộc, nhưng cuốn tiểu thuyết của Harper Lee vẫn nổi tiếng vì cách hành văn ấm áp và hài hước . Atticus Finch – cha của người kể chuyện đã trở thành biểu tượng cho công lý, chủ nghĩa anh hùng chủng tộc và hình mẫu hoàn hảo cho các luật sư. To Kill A Mockingbird - Giết con chim nhại đã được xuất bản tại Việt Nam.', '250000', 0, 0, 'pvgfuatx.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 8),
(98, 'Animal Farm - Chuyện ở nông trại (Tác giả George Orwell)', 'Trong tác phẩm Animal Farm - Chuyện ở nông trại, George Orwell đã dùng hình tượng những con gia súc trong trang trại để thể hiện những tiên đoán của ông về nhà nước Cộng sản Sô- viết. Cuốn sách đã được chuyển ngữ và xuất bản tại Việt Nam.', '250000', 0, 0, 'wp2jdusq.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 8),
(99, 'All Quiet on the Western Front - Phía Tây không có gì lạ (Tác giả Erich Maria Remarque)', 'Paul Baumer và các bạn cùng lớp của ông đã được thuyết phục tham gia quân đội Đức trong Chiến tranh thế giới thứ nhất. Sau những ngày tháng kinh hoàng trên chiến trường, cuối cùng Paul Baumer đã ngã xuống và đoạn kết của cuốn sách là: “Anh ta chết tháng mười, năm 1918, trong một ngày khắp cả mặt trận yên tĩnh, đến nỗi bản báo cáo quân đội chỉ ghi vắn tắt một dòng: Phía Tây không có gì lạ để thông báo”. Với cái kết đó, tác phẩm  All Quiet on the Western Front - Phía Tây không có gì lạ của Remarque đã nói được hết sự vô nghĩa của chiến tranh. Ông viết tác phẩm này dựa trên trải nghiệm của chính mình cũng như của các đồng đội khi họ phải ra chiến trận trong Thế chiến I. All Quiet on the Western Front - Phía Tây không có gì lạ đã được xuất bản tại Việt Nam.', '250000', 0, 0, 'r0gdm54n.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 9),
(100, 'The Count of Monte Cristo - Bá tước Monte Cristo (Tác giả Alexandre Dumas)', 'Tràn đầy âm mưu, tình yêu, sự trào phúng xã hội, đây là cuốn tiểu thuyết viết về trả thù và trừng phạt hay nhất. Cuổn tiểu thuyết The Count of Monte Cristo - Bá tước Monte Cristo cũng đã được xuất bản tại Việt Nam.', '250000', 0, 0, 'l75g8m0y.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 9),
(101, ' Do Androids Dream of Electric Sheep? (Tác giả Philip K. Dick)', 'Tiểu thuyết Do Androids Dream of Electric Sheep? phát hành năm 1968 của Philip K. Dick đã sớm có một cái nhìn đối với những người máy có trí thông minh như người và cách chúng tương tác với con người. Cuốn tiểu thuyết Do Androids Dream of Electric Sheep? cũng là nguồn cảm hứng để cho đạo diễn Ridley Scott tạo nên một trong những bộ phim giả tưởng hay nhất mọi thời đại Blade Runner.', '250000', 0, 0, 'w94xm857.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 9),
(102, ' Catch-22 (Tác giả Joseph Heller)', 'Mở đầu như một bộ phim hài, rồi cuộc sống từ từ biến thành một thảm kịch kinh hoàng khi chiến tranh ngày càng trở nên thực trong cuốn tiểu thuyết. Catch-22 được nhiều tạp chí bầu chọn là một trong những tiểu thuyết vĩ đại nhất của thời đại. Cuốn tiểu thuyết cũng được chuyển thể thành bộ phim cùng tên của đạo diễn Mike Nichols. Slaughterhouse.', '250000', 0, 0, 'd3k1u4ps.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 9),
(103, ' Five (Tác giả Kurt Vonnegut)', 'uất bản năm 1969, Slaughterhouse Five là tác phẩm phản chiến mang ý nghĩa đả kích, châm biếm nổi tiếng của Vonnegut. Cuốn tiểu thuyết này từng được coi là thánh kinh của những người Mỹ phản đối chiến tranh tại Việt Nam lúc bấy giờ, bởi nó được tác giả viết dựa trên kinh nghiệm bản thân khi suýt chết vì Đồng Minh oanh tạc. Slaughterhouse Five cũng là lời kêu gọi suy nghĩ về việc lạm dụng chiến tranh của các nhà cầm quyền, và sự tàn sát, hủy diệt không phân biệt của chiến tranh hiện đại.', '250000', 0, 12, 'ph12aedc.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 9);
INSERT INTO `book` (`id`, `name`, `description`, `price`, `special`, `sale_off`, `picture`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`, `category_id`) VALUES
(104, 'The Hitchhiker\'s Guide to the Galaxy ( Tác giả Douglas Adams)', 'Một buổi sáng khi vừa thức giấc, anh chàng Arthur Dent người Anh phát hiện sự thực khủng khiếp sắp xảy ra: Người ngoài hành tinh chuẩn bị hủy diệt trái đất. Đúng lúc nước sôi lửa bỏng, anh bạn lập dị Ford Prefect của Athur xuất hiện và tiết lộ rằng mình không phải là người bình thường, mà là người tới từ hành tinh Bettleguise đồng thời là nhà nghiên cứu của cuốn sách điện tử có tên The Hitch-Hiker\'s Guide to the Galaxy. Ford cứu Arthur khi trái đất bị người Vogons hủy diệt và đưa anh lên siêu xa lộ xuyên thiên hà. Hành trình bất đắc dĩ vào không gian của họ bắt đầu... Cuốn tiểu thuyết cũng đã được chuyển thể thành phim giả tưởng đình đám cùng tên.', '250000', 0, 0, 'sropg0k1.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 9),
(105, 'Watership Down - Đồi Thỏ  (Tác giả Richard Adams) Watership Down', 'Đồi Thỏ viết về hành trình đi tìm vùng đất mới của một nhóm các chú thỏ khi biết trước nơi chúng đang ở sẽ bị con người và máy móc phá hủy. Cuốn sách thiếu nhi này gây ngạc nhiên với người đọc bởi vì có độ dày như sách dành cho người lớn. Tuy nhiên cũng chính bởi vậy, bạn đọc đặc biệt là trẻ em có thể trải qua nhiều cuộc phiêu lưu nối tiếp cùng nhóm thỏ. Với trẻ nhỏ các em sẽ hiểu được phần nào sự nguy hiểm khi sống giữa thiên nhiên hoang dã, ý chí vượt qua khó khăn và sức mạnh của tinh thần đoàn kết, nhưng độc giả lớn tuổi đã có ít nhiều trải nghiệm cuộc sống sẽ nhìn thấy ở đó câu chuyện của cuộc sống, xã hội. Sách đã được xuất bản tại Việt Nam và chuyển thể thành phim hoạt hình cùng tên.', '250000', 0, 10, '7nde16pg.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 9),
(106, 'Brave New World (Tác giả Aldous Huxley)', 'Viết về xã hội loài người giả tưởng trong trong tương lai, khi London thống trị vào năm 2540, ở đó chính phủ điều hòa và khiến người dân mê lú rằng họ đang hạnh phúc. Bức tranh của Huxley về chủ nghĩa tư bản toàn cầu được tăng cường bởi năng lực mềm của quảng bá tiêu dùng... trong cuốn tiểu thuyết Brave New World này được đánh giá cũng giống như cái xã hội rối rắm nổi tiếng của Orwell.', '250000', 0, 0, 'pm7nvefd.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 10),
(107, 'Flowers for Algernon ', 'Charlie Gordon, 28 tuổi nhưng chỉ có trí thông minh của một bé 6 tuổi, hàng ngày làm việc cho một trung tâm phân phối hoa chuyên tạo việc làm cho những người có vấn đề về trí tuệ, và dĩ nhiên anh thường xuyên nhận được sự khinh khi của người đời. Sau khi một số nhà khoa học tuyên bố họ đã thành công trong thí nghiệm tăng cường trí thông minh cho một chú chuột tên là Algernon, Charlie chấp nhận là đối tượng thử nghiệm đầu tiên. Trí thông minh của anh đã tăng một cách ngoạn mục từ 68 lên đến 185, như một thiên tài. Cuốn tiểu thuyết giả tưởng Flowers for Algernon - Hoa trên mộ Algernon này miêu tả tiến trình chuyển đổi nhận thức của một con người qua hai giai đoạn: từ một kẻ đần độn trở thành thiên tài và từ một thiên tài trở lại kẻ đần độn, qua đó người đọc có thể thấy rõ bản chất cay độc của người đời, những giả dối lừa lọc, sự đạo đức giả, khinh rẻ những người khuyết tật, yếu kém, sự cô độc của nhiều phận người dù là thiên tài hay đần độn... Flowers for Algernon - Hoa trên mộ Algernon đã được chuyển ngữ và xuất bản tại Việt Nam.', '10000', 0, 0, 'dtrgqyx5.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 10),
(108, '1984', 'Gần 40 năm sau cuộc Chiến tranh Thế giới lần thứ 2, thế giới bị chia làm 3 siêu cường: Oceania, Eurasia, and Eastasia. Mọi người ở Oceania, trong đó có nhân vật chính John Smith được chính phù giám sát chặt chẽ. Và trong cuốn tiểu thuyết 1984 này, qua nhân vật chính, Orwell khai thác các vấn đề về kiểm duyệt, tuyên truyền, và chủ nghĩa cá nhân như cuộc đấu tranh để thoát khỏi sự tồn tại đơn điệu của mình. Nhận xét về cuốn sách, nhà văn Robert Harris viết: \"Tôi nghĩ, 1984 là tác phẩm văn học có ảnh hưởng rộng lớn nhất, cũng có nghĩa là cuốn sách vĩ đại nhất từng được viết. Tôi đọc nó khi còn là một cậu bé mới lớn và đã hoàn toàn bị thuyết phục. 1984 trình bày những quan điểm chính trị một cách vô cùng sống động, nó làm bật nổi hình ảnh của con người in dấu vào chính trường. Trong lần đọc lại mới đây, tôi lại bị ấn tượng bởi lối văn đơn giản của tác phẩm. Orwell không hề thể hiện sự màu mè, hoa mỹ của mình trong từng câu chữ. 60 năm trôi qua, những vấn đề chính trị biểu hiện trong một kiệt tác nghệ thuật của ông vẫn rất mới.\" ', '250000', 0, 0, 'pgilzjbh.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 10),
(109, '13 Nguyên Tắc Nghĩ Giàu Làm Giàu', ' 13 Nguyên Tắc Nghĩ Giàu Làm Giàu là cuốn sách “chỉ dẫn” duy nhất chỉ ra những nguồn lực bạn phải có để thành công. Cuốn sách sẽ giúp bạn trở nên giàu có, làm giàu thêm cho cuộc sống của bạn trên tất cả các phương diện của cuộc sống chứ không chỉ về tài chính và vật chất. Mặc dù những thông điệp trong cuốn sách được viết ra từ rất lâu nhưng vẫn mang tính “thời đại”. Ông đã bàn về những quan niệm như quản lý nhóm, dịch vụ chăm sóc khách hàng hoàn hảo, những công cụ hữu hình, trí tuệ tập thể và mục tiêu cần được viết ra trước khi hành động.', '250000', 1, 0, '0vtd7zrf.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 11),
(110, 'Tư Duy Như Một Kẻ Lập Dị', 'Mọi người thường có xu hướng suy nghĩ và hành động theo đám đông, do vậy với những vấn đề quan trọng, chúng ta thường phải hỏi xin lời khuyên từ bạn bè, đồng nghiệp và người thân. Điều này đương nhiên không có hại trong ngắn hạn. Thế nhưng về lâu về dài việc hỏi ý kiến những người xung quanh sẽ dẫn bạn đi theo lối mòn đã mở sẵn, một tư duy kém đổi mới mà nếu tự suy ngẫm, theo một hướng khác hơn, đột phá hơn, lập dị hơn, bạn sẽ mở ra một hướng giải quyết thông minh hơn và khôn ngoan hơn.', '250000', 0, 0, 'gc4rtpkx.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 11),
(111, 'Chiến Binh Cầu Vồng', 'Quyền được học hành là một trong những quyền cơ bản của con người. Thế nhưng vẫn có những hoàn cảnh khó khăn đến nỗi học hành chỉ có thể là ước mơ. Trong Chiến Binh Cầu Vồng, bạn sẽ bắt gặp những hoàn cảnh như thế của 10 đứa trẻ ham học tuy nghèo đói, 1 người cha nghèo khổ đánh cá gồng gánh hàng chục miệng ăn nhưng vấn quyết tâm cho con trai đi học, 1 thầy hiệu trưởng có tâm với nghề, 1 cô giáo đấu tranh giữ lại ngôi trường bé nhỏ xập xệ.', '20000', 0, 0, 'b1pqamyk.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 11),
(112, 'Người Giàu Có Nhất Thành Babylon', 'Trước mắt bạn, tương lai đang trải rộng con đường dẫn tới những miền đất xa xôi đầy hứa hẹn. Trên con đường đó, bạn háo hức, mong muốn thực hiện nhiều ước mơ, dự định, khát khao… của riêng mình.\r\n\r\nĐể những nguyện vọng của mình được thực hiện, ít nhất bạn phải thành công về mặt tiền bạc. Quyển sách này sẽ giúp bạn biết cách vận dụng những nguyên lý quan trọng để phát triển tài chính. Hãy để cuốn sách dẫn dắt bạn đi từ một hoàn cảnh khó khăn, tiêu biểu là một cái túi lép xẹp, đến một cuộc sống đầy đủ và hạnh phúc, tiêu biểu là một túi tiền căng phồng, sung túc.', '250000', 0, 0, 'giymjrlh.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 11),
(113, 'Thế Giới Phẳng', 'Chúng ta đã quen với những tác phẩm kinh điển trong văn học, nghệ thuật nhưng “Thế Giới Phẳng”, theo tôi là một tác phẩm kinh điển về thế kỷ 21 trong lĩnh vực kinh tế, chính trị và sự vận động của thế giới. Đây không phải là một cuốn sách lịch sử thế giới mà là một tác phẩm hoành tráng về thế giới trong thế kỷ 21, thế kỷ của bùng nổ công nghệ số và xu hướng toàn cầu hóa. Tác giả đã làm phẳng thế giới khi bỏ qua những rào cản về địa giới, văn hóa, tôn giáo… để nói về một thế giới với những vấn đề chung, những cơ hội và thách thức của các quốc gia, của toàn thế giới. Để từ đó từng quốc gia, doanh nghiệp, tổ chức và các cá nhân có thể nhìn thấy cơ hội và thách thức của riêng mình. Với nhiều năm làm nhà báo cho một trong những tờ báo lớn nhất thế giới New York Times, Thomas L. Friedman đã cho người đọc những sự kiện, những thông tin, những số liệu mà không dễ gì có được và không phải ai cũng có thể tiếp cận được. Điều đó chỉ có thể đến từ những nhà báo kỳ cựu như Friedman, một nhà báo lớn với 3 giải thưởng Publizer. Cuốn sách tuy khá dày, hơn 700 trang, nhưng nếu bạn thực sự quan tâm đến thế giới, quan tâm đến sự vận động của xã hội loài người trên hành tinh này thì cuốn sách như một dòng chảy đưa bạn qua nhiều góc nhìn khác nhau, qua nhiều vấn đề to lớn khác nhau của thế giới. Trong đó, nổi bật là xu hướng Toàn Cầu Hóa và vai trò địa chính trị của từng quốc gia trong sự bùng nổ không ngừng của thế giới về mọi mặt.', '250000', 0, 0, 'tsiykfdu.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 11),
(114, 'Hai số phậnTỷ Phú Bán Giày', 'Tỷ Phú Bán Giày, cuốn sách bán chạy nhất trên trang Amazon.com, xếp thứ 1 trong các sách về Dịch vụ khách hàng; xếp thứ 5 trong các sách về Marketing và Bán hàng; và xếp thứ 7 trong các sách về Quản lý. Cuốn sách là một câu chuyện về một doanh nghiệp thành công, trong đó, Tony Hseih chia sẻ những bài học kinh doanh khác nhau mà ông đã học được trong cuộc đời, từ một quầy bán nước chanh và cửa hàng bán pizza cho tới LinkExchange, Zappos.', '250000', 0, 0, 'z64hoc8t.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 11),
(115, 'Khuyến Học', 'Khuyến học không phải là tác phẩm đồ sộ và sâu sắc nhất của ông nhưng lại là tác phẩm có ảnh hưởng sâu rộng nhất đến công chúng Nhật Bản. Khi mới đựơc in lần đầu, cuốn sách này có một số lượng ấn bản kỷ lục là 3,4 triệu bản, trong khi dân số Nhật Bản thời đó chỉ khoảng ba mươi lăm triệu người. Chỉ riêng điều đó đã cho thấy đây thực sự là cuốn sách gối đầu giường của mọi người dân Nhật trong thời kỳ Duy Tân. Kể từ năm 1942 đến năm 2000, riêng nhà xuất bản Iwanami Bunko cũng đã tái bản đến bảy mươi sáu lần.', '250000', 0, 0, 'oy69dvem.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 12),
(116, 'Thép đã tôi thế đấy', 'Cuốn tiểu thuyết mô tả các sự kiện của thời đại trong cuộc nội chiến, những năm phục hồi của nền kinh tế nước Liên Xô và xây dựng xã hội chủ nghĩa. Trong hình ảnh của Pavel Korchagin, tác giả cho thấy phẩm chất con người tuyệt vời của giới trẻ Xô Viết đã lớn lên trong cuộc đấu tranh cách mạng: cống hiến sức lực trí tuệ cho Đảng, tình yêu của đất nước, can đảm và tinh khiết đạo đức. Do vậy, “Thép đã tôi thế đấy” đã một thời được coi là quyển sách gối đầu giường của bao thế hệ thanh niên Việt Nam, là một trong những cuốn sách hay nhất dành cho tất cả các bạn.', '250000', 0, 0, '6gxf9eaw.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 12),
(117, 'Hoàn thành mọi việc không hề khó', 'Hầu hết các doanh nhân trẻ khi chân ướt chân ráo khởi động doanh nghiệp của mình đều trong tình trạng thiếu hụt nguồn lực. Trong khi đó, đối thủ có sẵn trên thương trường thì luôn có lợi thế, kinh nghiệm và nhiều nguồn lực hơn. Để giành chiến thắng, người đến sau phải biết vận dụng những chiến thuật đặc biệt, linh hoạt, khôn ngoan và khéo léo, đúng theo tinh thần của chiến lược chiến tranh du kích.', '250000', 0, 0, 'dk04xnia.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 12),
(118, 'Dạy con làm giàu', 'Trong suốt bộ sách Dạy con làm giàu Robert đã dùng khéo léo câu chuyện cuộc đời mình để lý giải cho thắc mắc tại sao người giàu ngày càng giàu, người nghèo càng nghèo và tầng lớp trung lưu thì luôn ngập trong nợ nần. Ông cũng cho chúng ta thấy sự thiếu sót trong kiến thức về tiền bạc nếu chỉ học tại trường, nhưng chính những kiến thức về tiền bạc mới quyết định đến thành công và thịnh vượng tài chính trong cuộc sống của mỗi người. Với sự tác động của cả hai người cha, một người là cha ruột – cha nghèo – người kia là cha của bạn – cha giàu, Robert đã nhận ra được sự khác biệt và đã tự phát triển kiến thức tài chính của mình để đạt được sự tự do và thịnh vượng tài chính. Ông cũng minh chứng rằng không phải chỉ cần thông minh học giỏi thì sẽ đạt được thành công, mà phải hiểu được quy luật của trò chơi tiền bạc và tận dụng tối đa mọi ưu thế thì bạn sẽ sớm thoát khỏi khó khăn tài chính. Dạy con làm giàu là một trong những quyển sách hay kinh doanh phải đọc nếu bạn muốn thành công.', '250000', 0, 10, '2uwvtsh0.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, 12);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` varchar(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `books` text NOT NULL,
  `prices` text NOT NULL,
  `quantities` text NOT NULL,
  `names` text NOT NULL,
  `pictures` text NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `username`, `books`, `prices`, `quantities`, `names`, `pictures`, `status`, `date`) VALUES
('zNCZbn', '34', '[\"75\",\"118\"]', '[\"20000\",\"250000\"]', '[\"1\",\"1\"]', '[\"Từ Thăm Thẳm Lãng Quên\",\"Dạy con làm giàu – Robert T. Kiyosaki\"]', '[\"f1g3dpun.jpg\",\"2uwvtsh0.jpg\"]', 0, '2017-08-20 02:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` text DEFAULT NULL,
  `created` date DEFAULT '0000-00-00',
  `created_by` varchar(255) DEFAULT NULL,
  `modified` date DEFAULT '0000-00-00',
  `modified_by` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `ordering` int(11) DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `picture`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`) VALUES
(1, 'Văn học', 'doin260r.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 12),
(2, 'Kỹ năng sống', '6hp5s4we.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 10),
(3, 'Thiếu nhi', 'vje7b8a0.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 10),
(4, 'Kinh tế', '5bqyul1o.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 12),
(5, 'Y học', '486ktwb3.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 10),
(6, 'Lịch sử', 'tomjvxf2.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 10),
(7, 'Khoa học - Kỹ thuật', 'rakl9pcy.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 10),
(8, 'Khoa học & đời sống', '6y5edgs0.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 41),
(9, 'Gia đình ', '2ejvb4dw.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 12),
(10, 'Trí tuệ', 'g1qdj3rf.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 21),
(11, 'Tình cảm', '27p4rcuy.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100),
(12, 'Khám phá', 'phvo481k.jpg', '0000-00-00', NULL, '0000-00-00', NULL, 0, 100);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `ordering` int(11) NOT NULL,
  `created` varchar(255) NOT NULL,
  `created_by` date NOT NULL,
  `modified` varchar(255) NOT NULL,
  `modified_by` date NOT NULL,
  `question` varchar(255) NOT NULL,
  `asked` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `status`, `ordering`, `created`, `created_by`, `modified`, `modified_by`, `question`, `asked`) VALUES
(1, 1, 1, 'Admin', '2020-06-02', 'Admin', '2020-06-02', 'Who am I making this out to?', 'Morbo can\'t understand his teleprompter because he forgot how you say that letter that\'s shaped like a man wearing a hat. Also Zoidberg. Can we have Bender Burgers again? Goodbye, cruel world. Goodbye, cruel lamp. Goodbye, cruel velvet drapes, lined with '),
(3, 0, 0, '', '0000-00-00', '', '0000-00-00', 'Các thay đổi sắp đối với lịch sử dịch', 'Sắp tới, bạn chỉ có thể thấy lịch sử dịch khi đã đăng nhập và có thể quản lý tập trung lịch sử dịch trong phần Hoạt động của tôi. Lịch sử trong quá khứ sẽ bị xóa trong quá trình nâng cấp này, vì vậy hãy đảm bảo lưu bản dịch bạn muốn ghi nhớ để dễ truy cập');

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `group_acp` tinyint(1) DEFAULT 0,
  `created` date DEFAULT '0000-00-00',
  `created_by` varchar(45) DEFAULT NULL,
  `modified` date DEFAULT '0000-00-00',
  `modified_by` varchar(45) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `ordering` int(11) DEFAULT 10,
  `privilege_id` text NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id`, `name`, `group_acp`, `created`, `created_by`, `modified`, `modified_by`, `status`, `ordering`, `privilege_id`, `picture`) VALUES
(1, 'Admin', 1, '0000-00-00', NULL, '0000-00-00', NULL, 1, 2, '', ''),
(2, 'Manager', 0, '0000-00-00', NULL, '0000-00-00', NULL, 0, 41, '', ''),
(3, 'Member', 1, '0000-00-00', NULL, '0000-00-00', NULL, 0, 100, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

CREATE TABLE `privilege` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `module` varchar(45) NOT NULL,
  `controller` varchar(45) NOT NULL,
  `action` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`id`, `name`, `module`, `controller`, `action`) VALUES
(1, 'Hiển thị danh sách người dùng', 'admin', 'user', 'index'),
(2, 'Thay đổi status của người dùng', 'admin', 'user', 'status'),
(3, 'Cập nhật thông tin của người dùng', 'admin', 'user', 'form'),
(4, 'Thay đổi status của người dùng sử dụng Ajax', 'admin', 'user', 'ajaxStatus'),
(5, 'Xóa một hoặc nhiều người dùng', 'admin', 'user', 'trash'),
(6, 'Thay đổi vị trí hiển thị của các người dùng', 'admin', 'user', 'ordering'),
(7, 'Truy cập menu Admin Control Panel', 'admin', 'index', 'index'),
(8, 'Đăng nhập Admin Control Panel', 'admin', 'index', 'login'),
(9, 'Đăng xuất Admin Control Panel', 'admin', 'index', 'logout'),
(10, 'Cập nhật thông tin tài khoản quản trị', 'admin', 'index', 'profile');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created` int(11) NOT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `modified` int(11) NOT NULL,
  `register_date` datetime NOT NULL,
  `modified_by` varchar(45) DEFAULT NULL,
  `register_ip` varchar(25) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `ordering` int(11) DEFAULT 10,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `fullname`, `password`, `created`, `created_by`, `modified`, `register_date`, `modified_by`, `register_ip`, `status`, `ordering`, `group_id`) VALUES
(2, 'nvana', 0, 'nvana@gmail.com', 'Dinh Dam Dao', 'c6c9e80333513b4dd71a81cf133fb9c8', 0, '1', 0, '0000-00-00 00:00:00', '1', '1', 0, 40, 2),
(24, 'admin01', 0, 'boyhotboy1299@gmail.com', 'Lê Trương Định', 'c33367701511b4f6020ec61ded352059', 0, '1', 0, '0000-00-00 00:00:00', '1', '1', 1, 21, 2),
(27, 'admin', 0, 'admin123@gmail.com', 'Công Túa', 'fcea920f7412b5da7be0cf42b8c93759', 0, '1', 0, '0000-00-00 00:00:00', '1', '1', 0, 12, 1),
(33, 'boyhotboy3008', 909257897, 'admin321@gmail.com', 'Lê Trương Định', 'cb0e3b6784cbaace0813be76c3ca1e83', 0, NULL, 0, '2020-08-12 12:35:52', NULL, '::1', 0, 10, 3),
(34, 'codephp123', 909097739, 'admin12@gmail.com', '', '3313cf2908b6fb929322cc924124c987', 0, NULL, 0, '2020-08-13 09:40:40', NULL, '::1', 0, 10, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privilege`
--
ALTER TABLE `privilege`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `privilege`
--
ALTER TABLE `privilege`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
