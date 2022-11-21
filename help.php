<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hỗ trợ</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="T-P Watch " />
    <link rel="icon" type="image/x-icon" href="./images/icon.png">
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Main css -->
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <!-- Font-Awesome-Icons-CSS -->
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- pop-up-box -->
    <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
    <!-- menu style -->
    <!-- //Custom-Files -->

    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!-- //web fonts -->

</head>

<body>
    <!-- top-header -->
    <div class="agile-main-top">
        <div class="container-fluid">
            <div class="row main-top-w3l py-2">
                <div class="col-lg-4 header-most-top">
                    <p class="text-white text-lg-left text-center">Cung cấp các dịch vụ hàng đầu Việt Nam
                        <i class="fas fa-shopping-cart ml-1"></i>
                    </p>
                </div>
                <div class="col-lg-8 header-right mt-lg-0 mt-2">
                    <!-- header lists -->
                    <ul>
                        <?php
                        if (isset($_SESSION['dangnhap_home'])) {

                        ?>
                            <li class="text-center border-right text-white">
                                <a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['khachhang_id'] ?>" class="text-white">
                                    <i class="fas fa-truck mr-2"></i>Xem đơn hàng :
                                    <?php echo $_SESSION['dangnhap_home'] ?></a>
                            </li>
                        <?php
                        }
                        ?>


                        <li class="text-center border-right text-white">
                            <i class="fas fa-phone mr-2"></i>369369369
                        </li>
                        <?php if (isset($_SESSION['dangnhap_home'])) : ?>
                            <li class="text-center border-right text-white">
                                <a href="?login=dangxuat" class="text-white">Đăng xuất</a>
                            </li>
                        <?php else : ?>
                            <li class="text-center border-right text-white">
                                <a href="#" data-toggle="modal" data-target="#dangnhap" class="text-white">
                                    <i class="fas fa-sign-in-alt mr-2"></i>Đăng nhập</a>
                            </li>
                            <li class="text-center text-white">
                                <a href="#" data-toggle="modal" data-target="#dangky" class="text-white">
                                    <i class="fas fa-sign-out-alt mr-2"></i>Đăng ký</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <!-- //header lists -->
                </div>
            </div>
        </div>
    </div>



    <!-- modals -->
    <!-- log in -->
    <div class="modal fade" id="dangnhap" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center">Đăng nhập</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label class="col-form-label">Email</label>
                            <input type="text" class="form-control" placeholder=" " name="email_login" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Mật khẩu</label>
                            <input type="password" class="form-control" placeholder=" " name="password_login" required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" name="dangnhap_home" value="Đăng nhập">
                        </div>

                        <p class="text-center dont-do mt-3">Chưa có tài khoản?
                            <a href="#" data-toggle="modal" data-target="#dangky">
                                Đăng ký</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- register -->
    <div class="modal fade" id="dangky" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Đăng ký</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label class="col-form-label">Tên khách hàng</label>
                            <input type="text" class="form-control" placeholder=" " name="name" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder=" " name="email" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Phone</label>
                            <input type="text" class="form-control" placeholder=" " name="phone" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Address</label>
                            <input type="text" class="form-control" placeholder=" " name="address" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="password" required="">
                            <input type="hidden" class="form-control" placeholder="" name="giaohang" value="0">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Ghi chú</label>
                            <textarea class="form-control" name="note"></textarea>
                        </div>

                        <div class="right-w3l">
                            <input type="submit" class="form-control" name="dangky" value="Đăng ký">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //modal -->
    <!-- //top-header -->

    <!-- header-bottom-->
    <div class="header-bot">
        <div class="container">
            <div class="row header-bot_inner_wthreeinfo_header_mid">
                <!-- logo -->
                <div class="col-md-3 logo_agile">
                    <h1 class="text-center">
                        <a href="index.php" class="font-weight-bold font-italic">
                            T-P Watch
                        </a>
                    </h1>
                </div>
                <!-- //logo -->
                <!-- header-bot -->
                <div class="col-md-9 header mt-4 mb-md-0 mb-4">
                    <div class="row">
                        <!-- search -->
                        <div class="col-10 agileits_search">
                            <form class="form-inline" action="#" method="post">
                                <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search" required>
                                <button class="btn my-2 my-sm-0" type="submit">Tìm kiếm</button>
                            </form>
                        </div>
                        <!-- //search -->
                        <!-- cart details -->
                        <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                            <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                                <button class="btn w3view-cart" type="submit" name="submit" value="">
                                    <a href="index.php?quanly=giohang" class="text-white">
                                        <i class="fas fa-cart-arrow-down"></i>
                                    </a>
                                </button>
                            </div>
                        </div>
                        <!-- //cart details -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop locator (popup) -->
    <!-- //header-bottom -->
    <!-- navigation -->
    <div class="navbar-inner">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="agileits-navi_search">
                    <form action="#" method="post">
                        <select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
                            <option value="">Danh mục sản phẩm</option>
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                            <option value="Cặp đôi">Cặp đôi</option>
                        </select>
                    </form>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-center mr-xl-5">
                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link" href="index.php">Trang chủ
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <?php
                        include('./db/connect.php');
                        $sql = 'SELECT * FROM tbl_category ORDER BY category_id DESC';
                        $sql_category_danhmuc = $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($sql_category_danhmuc as $category_danhmuc) {
                        ?>
                            <li class="nav-item  mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link " href="index.php?quanly=danhmuc&id=<?php echo $category_danhmuc['category_id'] ?>" role="button" aria-haspopup="true" aria-expanded="false">
                                    <?php echo $category_danhmuc['category_name'] ?>
                                </a>

                            </li>
                        <?php
                        }
                        ?>
                        <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                            <?php
                            $sql = "SELECT * FROM tbl_danhmuc_tin ORDER BY danhmuctin_id DESC";
                            $sql_danhmuctin = $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);

                            ?>
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tin tức
                            </a>
                            <div class="dropdown-menu">
                                <?php
                                foreach ($sql_danhmuctin as $danhmuctin) {
                                ?>
                                    <a class="dropdown-item" href="index.php?quanly=tintuc&id_tin=<?php echo $danhmuctin['danhmuctin_id'] ?>">
                                        <?php echo $danhmuctin['tendanhmuc'] ?>
                                    </a>
                                <?php
                                }
                                ?>
                            </div>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="contact.php">Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Về chúng tôi</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- //navigation -->

    <!-- banner-2 -->
    <div class="page-head_agile_info_w3l">

    </div>
    <!-- //banner-2 -->
    <!-- page -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="index.php">Trang chủ</a>
                        <i>|</i>
                    </li>
                    <li>Hỗ trợ</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->

    <!-- help -->
    <div class="faqs-w3l py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                <span>H</span>ỗ
                <span>T</span>rợ
            </h3>
            <!-- //tittle heading -->
            <!-- help content -->
            <div class="wthree-help mb-sm-5 mb-4">
                <div class="agile-left-help">
                    <h3 class="w3-head">Chúng tôi có thể giúp gì cho bạn ?</h3>
                    <form action="#" method="get">
                        <textarea placeholder="Điền vào đây ..." name="Message" required=""></textarea>
                        <input type="submit" value="Gửi">
                    </form>
                    <h5 class="my-sm-4 my-3">hoặc</h5>
                    <a href="contact.php">Liên hệ</a>
                </div>
            </div>
            <!-- //help content -->
            <!-- Faqs -->
            <h3 class="w3-head mb-2">Top 10 câu hỏi thường gặp</h3>
            <div class="faq-w3agile">
                <ul class="faq pl-4">
                    <li class="item1 mt-3 pl-2">
                        <a href="#" title="click here">Tại sao đồng hồ tôi mới mua và sử dụng, trong thời gian ngắn đã
                            hết pin?</a>
                        <ul>
                            <li class="subitem1">
                                <p> Trong quá trình sản xuất, trưng bày sản phẩm. Đồng hồ được kích pin hoạt động sẽ bị
                                    tiêu hao 1 phần năng lượng làm giảm đi tuổi thọ của viên Pin. T-P Watch Watch với
                                    chế độ bảo hành máy 10 năm, thay pin MIỄN PHÍ 10 NĂM cho quý khách hàng, tuổi thọ từ
                                    pin thứ 2 sẽ dao động từ 1 năm rưỡi- 2 năm.</p>
                            </li>
                        </ul>
                    </li>
                    <li class="item2 mt-3 pl-2">
                        <a href="#" title="click here">Chế độ bảo hành đồng hồ như thế nào?
                        </a>
                        <ul>
                            <li class="subitem1">
                                <p> Ngoài chế độ bảo hành quốc tế theo hãng quy định, T-P Watch có chế độ bảo hành máy
                                    lên đến 10 năm( riêng dòng Diamond D bảo hành trọn đời về máy và đá) , thay pin miễn
                                    phí 10 năm, về phần dây, vỏ và mặt kính sản phẩm không nằm trong chế độ bảo hành.
                                </p>
                            </li>
                        </ul>
                    </li>
                    <li class="item3 mt-3 pl-2">
                        <a href="#" title="click here">T-P Watch có dịch vụ giao hàng không, chi phí giao hàng như thế
                            nào?</a>
                        <ul>
                            <li class="subitem1">
                                <p>T-P Watch giao hàng theo hình thức COD, miễn phí vận chuyển trên toàn quốc đến địa
                                    chỉ quý khách hàng. Nhận hàng, kiểm tra hàng mới thanh toán.</p>
                            </li>
                        </ul>
                    </li>
                    <li class="item4 mt-3 pl-2">
                        <a href="#" title="click here">T-P Watch Watch có dịch vụ sửa chữa, bảo dưỡng đồng hồ ngoài (
                            không mua tại T-P Watch) không?</a>
                        <ul>
                            <li class="subitem1">
                                <p>T-P Watch Watch có dịch vụ sửa chữa, đồng hồ ngoài đối với tất cả các thương hiệu sản
                                    phẩm không mua tại T-P Watch.</p>
                            </li>
                        </ul>
                    </li>
                    <li class="item5 mt-3 pl-2">
                        <a href="#" title="click here">Mua hàng Online có được kiểm tra hàng trước không và sẽ bao gồm
                            giấy tờ gì khi nhận hàng?</a>
                        <ul>
                            <li class="subitem1">
                                <p> T-P Watch Watch với hình thức mua hàng ONLINE đảm bảo thủ tục đơn giản, nhanh gọn:
                                    <br />
                                    - Nhận hàng, kiểm tra hàng sau đó mới thanh toán cho bưu tá
                                    <br />
                                    - Giao hàng đảm bảo sản phẩm như hình ảnh đặt hàng, có đầy đủ hóa đơn lẻ bán hàng,
                                    thẻ bảo hành quốc tế, hộp hãng và Giấy tờ Hải Quan( nếu quý khách yêu cầu)
                                </p>
                            </li>
                        </ul>
                    </li>
                    <li class="item6 mt-3 pl-2">
                        <a href="#" title="click here">Kính cường lực thì có chống xước được không và nếu sau khi bị
                            xước có thể khắc phục không?</a>
                        <ul>
                            <li class="subitem1">
                                <p>Với sản phẩm đồng hồ sử dụng mặt kính cường lực, ưu điểm chịu lực chống va đập cao,
                                    tuy nhiên về độ chống xước so với kính saphire có kém hơn. Quý khách hàng sử dụng
                                    tránh va chạm, va đập mạnh vật cứng nhọn và có độ nhám cao
                                    <br />
                                    - Có thể sử dụng dịch vụ đánh bóng mặt kính khi bị trầy xước, nếu vết trầy xước khá
                                    sâu không đảm bảo đánh bóng sẽ phải thay kính tương đương hoặc sang loại kính khác.
                                    Có báo giá cụ thể cho quý khách hàng.
                                </p>
                            </li>
                        </ul>
                    </li>
                    <li class="item7 mt-3 pl-2">
                        <a href="#" title="click here">Anh không mua đồng hồ của T-P Watch,nhưng muốn thay dây có được
                            không?</a>
                        <ul>
                            <li class="subitem1">
                                <p>T-P Watch Watch phân phối dây da của các hãng, dây da thường T-P Watch. Với đa dạng
                                    size dây, thiết kế và màu sắc đảm bảo phù hợp với nhiều thiết kế đồng hồ.
                                    <br />
                                    - Quý khách có thể lựa chọn dây da tại website, hoặc trực tiếp showroom lựa chọn
                                    được hỗ trợ thay dây tại cửa hàng
                                    <br />
                                    - T-P Watch Watch miễn phí dịch vụ thay dây, đo tay cắt mắt sản phẩm.
                                </p>
                            </li>
                    </li>

                </ul>
                <li class="item8 mt-3 pl-2">
                    <a href="#" title="click here">Nếu anh mua đồng hồ dây kim loại nhưng muốn thay sang dây da được
                        không?</a>
                    <ul>
                        <li class="subitem1">
                            <p>Với sản phẩm có thiết kế dây kim loại và có thể thay được dây da. Quý khách hàng hoàn
                                toàn lựa chọn mẫu dây da phù hợp với sản phẩm và thay đổi theo ý thích. </p>
                        </li>
                    </ul>
                </li>
                <li class="item9 mt-3 pl-2">
                    <a href="#" title="click here"> Anh mới mua đồng hồ bên em,nhưng giờ đồng hồ anh hết pin,mà anh làm
                        mất thẻ bảo hành rồi thì có được bảo hành miễn phí không em?</a>
                    <ul>
                        <li class="subitem1">
                            <p>Ngoài chế độ bảo hành qua hóa đơn mua hàng, thẻ bảo hành. Quý khách hàng hoàn toàn được
                                bảo hành bằng hệ thống điện tử thông qua chính số điện thoại lúc mua hàng cung cấp cho
                                showroom.
                                <br />
                                - Mua sản phẩm showroom này, hoàn toàn bảo hành tại tất cả các showroom trên toàn hệ
                                thống T-P Watch.
                            </p>
                        </li>
                    </ul>
                </li>
                <li class="item10 mt-3 pl-2">
                    <a href="#" title="click here">Đã từng mua sản phẩm tại T-P Watch và sở hữu thẻ member, mình nhận
                        được ưu đãi gì khi mua hàng hay sử dụng dịch vụ tại T-P Watch</a>
                    <ul>
                        <li class="subitem1">
                            <p>Khi quý khách hàng đã sở hữu thẻ member- khách hàng thân thiết của T-P Watch :
                                <br />
                                - Tặng thêm 5% khi mua sản phẩm tại hệ thống T-P Watch( áp dụng cả dây da) và được áp
                                dụng đồng thời cùng 1 chương trình giảm giá, khuyến mãi khác( nếu có) tại thời điểm đó
                                <br />
                                - Khi sử dụng dịch vụ bảo dưỡng, thay thế linh phụ kiện mất phí( sản phẩm mua tại T-P
                                Watch), sẽ được giảm giá 10%.
                            </p>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- //Faqs -->
        </div>
    </div>
    <!-- //help -->

    <!-- middle section -->
    <div class="join-w3l1 py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="join-agile text-left p-4">
                        <div class="row">
                            <div class="col-sm-7 offer-name">
                                <h6>MINIMAL</h6>
                                <h4 class="mt-2 mb-3">Branded Watch</h4>
                                <p>Giảm tới 25% tất cả trong cửa hàng</p>
                            </div>
                            <div class="col-sm-5 offerimg-w3l">
                                <img src="images/banner1.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="join-agile text-left p-4">
                        <div class="row ">
                            <div class="col-sm-7 offer-name">
                                <h6>ESSENTIAL</h6>
                                <h4 class="mt-2 mb-3">Vintage Watch</h4>
                                <p>Miễn phí vận chuyển cho đơn hàng trên 1,000,000₫</p>
                            </div>
                            <div class="col-sm-5 offerimg-w3l">
                                <img src="images/banner2.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- middle section -->

    <!-- footer -->
    <footer>
        <div class="footer-top-first">
            <div class="container py-md-5 py-sm-4 py-3">

                <!-- footer second section -->
                <div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
                    <div class="col-md-4 offer-footer">
                        <div class="row">
                            <div class="col-4 icon-fot">
                                <i class="fas fa-dolly"></i>
                            </div>
                            <div class="col-8 text-form-footer">
                                <h3>Miễn phí vận chuyển</h3>
                                <p>Đơn hàng trên 1,000,000đ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 offer-footer my-md-0 my-4">
                        <div class="row">
                            <div class="col-4 icon-fot">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div class="col-8 text-form-footer">
                                <h3>Vận chuyển nhanh</h3>
                                <p>Toàn quốc</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 offer-footer">
                        <div class="row">
                            <div class="col-4 icon-fot">
                                <i class="far fa-thumbs-up"></i>
                            </div>
                            <div class="col-8 text-form-footer">
                                <h3>Tin cậy</h3>
                                <p>Sự đảm bảo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //footer second section -->
            </div>
        </div>
        <!-- footer third section -->
        <div class="w3l-middlefooter-sec">
            <div class="container py-md-5 py-sm-4 py-3">
                <div class="row footer-info w3-agileits-info">
                    <!-- footer categories -->
                    <div class="col-md-3 col-sm-6 footer-grids">
                        <h3 class="text-white font-weight-bold mb-3">Danh mục</h3>
                        <ul>
                            <li class="mb-3">
                                <a href="product.php">Nam</a>
                            </li>
                            <li class="mb-3">
                                <a href="product.php">Nữ</a>
                            </li>
                            <li class="mb-3">
                                <a href="product.php">TV, Cặp đôi</a>
                            </li>

                        </ul>
                    </div>
                    <!-- //footer categories -->
                    <!-- quick links -->
                    <div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
                        <h3 class="text-white font-weight-bold mb-3">Dịch vụ</h3>
                        <ul>
                            <li class="mb-3">
                                <a href="about.php">Về chúng tôi</a>
                            </li>
                            <li class="mb-3">
                                <a href="contact.php">Liên hệ</a>
                            </li>
                            <li class="mb-3">
                                <a href="help.php">Hỗ trợ</a>
                            </li>

                            <li class="mb-3">
                                <a href="terms.php">Điều khoản sử dụng</a>
                            </li>
                            <li>
                                <a href="privacy.php">Chính sách bảo mật</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
                        <h3 class="text-white font-weight-bold mb-3">Liên hệ</h3>
                        <ul>
                            <li class="mb-3">
                                <i class="fas fa-map-marker"></i> Can Tho, Viet Nam.
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-mobile"></i> 369 369 369
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-phone"></i> +099 999 999
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-envelope-open"></i>
                                <a href="mailto:zelorntp@gmail.com"> zelorntp@gmail.com</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
                        <!-- newsletter -->
                        <h3 class="text-white font-weight-bold mb-3">Newsletter</h3>
                        <p class="mb-3">Giao hàng miễn phí trên đơn đặt hàng đầu tiên của bạn!</p>
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email" required="">
                                <input type="submit" value="Go">
                            </div>
                        </form>
                        <!-- //newsletter -->
                        <!-- social icons -->
                        <div class="footer-grids  w3l-socialmk mt-3">
                            <h3 class="text-white font-weight-bold mb-3">Theo dõi</h3>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a class="icon fb" href="https://www.facebook.com/nthuanphatt/">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icon tw" href="https://twitter.com/callme_thphat">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icon gp" href="https://www.instagram.com/thuan.phatt/">
                                            <i class="fab fa-instagram" style="background: url(./images/bg-instagram.jpg);"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- //social icons -->
                    </div>
                </div>
                <!-- //quick links -->
            </div>
        </div>
        <!-- //footer third section -->


    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="copy-right py-3">
        <div class="container">
            <p class="text-center text-white">© 2022 T-P Watch. All rights reserved | Design by
                <a href="https://www.facebook.com/nthuanphatt/"> T-P Watch.</a>
            </p>
        </div>
    </div>
    <!-- //copyright -->

    <!-- js-files -->
    <!-- jquery -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //jquery -->

    <!-- nav smooth scroll -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //nav smooth scroll -->

    <!-- popup modal (for location)-->
    <script src="js/jquery.magnific-popup.js"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
    <!-- //popup modal (for location)-->



    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->

    <!-- smoothscroll -->
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smoothscroll -->

    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->

    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function() {
            /*
            var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //smooth-scrolling-of-move-up -->

    <!-- for bootstrap working -->
    <script src="js/bootstrap.js"></script>
    <!-- //for bootstrap working -->
    <!-- //js-files -->

</body>

</html>