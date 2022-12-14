<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chính sách bảo mật</title>
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
                    <li>Chính sách bảo mật</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->

    <!-- privacy -->
    <div class="terms py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                <span>C</span>hính
                <span>S</span>ách
                <span>B</span>ảo
                <span>M</span>ật
            </h3>
            <!-- //tittle heading -->
            <h6 class="my-md-4 my-3">Chính sách bảo mật</h6>
            <p class="font-weight-light pl-sm-4 mb-2">Chúng tôi tôn trọng quyền riêng tư của người dùng và đã phát triển
                chính sách bảo mật này (“Chính sách Bảo mật”) để tuyên bố cam kết của mình để bảo vệ sự riêng tư của
                bạn. Chính sách Bảo mật nhằm mô tả cho bạn, với tư cách cá nhân là người sử dụng Ứng dụng của chúng tôi
                hoặc của các dịch vụ được cung cấp thông qua Ứng dụng (cùng với Ứng dụng, “Dịch vụ”), thông tin chúng
                tôi thu thập, thông tin đó có thể được sử dụng, với người mà nó có thể được chia sẻ, và lựa chọn của bạn
                về việc sử dụng như vậy và tiết lộ.
            </p>
            <p class="font-weight-light pl-sm-4 mb-2">Chúng tôi khuyến khích bạn đọc Chính sách Bảo mật này một cách cẩn
                thận khi sử dụng Dịch vụ. Bằng cách truy cập Dịch vụ, bạn thừa nhận và đồng ý rằng bạn đã đọc, chấp nhận
                đầy đủ và sẽ tuân thủ Chính sách Bảo mật này.</p>

            <h6 class="my-md-4 my-3">Thông tin chúng tôi thu thập được về bạn</h6>
            <p class="font-weight-light pl-sm-4 mb-2">Thông tin bạn cung cấp hoặc có sẵn. Chúng tôi có thể thu thập và
                lưu trữ bất kỳ thông tin nào bạn nhập thông qua Ứng dụng hoặc cung cấp cho chúng tôi theo một số cách
                khác, chẳng hạn như thông qua việc sử dụng một số Dịch vụ của chúng tôi hoặc cung cấp thông tin của bạn
                thông qua Facebook hoặc các mạng xã hội khác mà bạn kết nối với dịch vụ của chúng tôi.</p>
            <p class="font-weight-light pl-sm-4 mb-2">Thông tin nhận dạng cá nhân. Mặc dù chúng tôi không yêu cầu
                nhiều mục mà sẽ được coi là thông tin nhận dạng cá nhân, thông tin mà chúng tôi thu thập có thể bao gồm
                các mục như tên, địa chỉ email và độ tuổi của bạn để chúng tôi có thể xác minh bạn đủ điều kiện sử dụng
                các dịch vụ.</p>

            <h6 class="my-md-4 my-3">Cách chúng tôi sử dụng thông tin mà chúng tôi thu thập được</h6>
            <p class="font-weight-light pl-sm-4 mb-2">Thông thường, chúng tôi có thể sử dụng thông tin mà chúng tôi thu
                thập về bạn để.</p>
            <p class="font-weight-light pl-sm-4 mb-2">Tạo điều kiện và tăng cường việc sử dụng Dịch vụ của bạn;</p>

            <h6 class="my-md-4 my-3">Cách chúng tôi bảo vệ thông tin cá nhân của bạn</h6>
            <p class="font-weight-light pl-sm-4 mb-2"> 1. Tạo điều kiện và tăng cường việc sử dụng Dịch vụ của bạn;
            <p class="font-weight-light pl-sm-4 mb-2"> 2. Thực hiện nghiên cứu và phân tích về việc bạn sử dụng hoặc
                quan tâm đến trang web, Dịch vụ và nội dung do chúng tôi cung cấp hoặc các sản phẩm, dịch vụ và nội dung
                do người khác cung cấp;</p>

            <h6 class="my-md-4 my-3">Sự lựa chọn của bạn về thu thập và sử dụng thông tin của bạn</h6>
            <p class="font-weight-light pl-sm-4 mb-2">Sự lựa chọn của bạn về thu thập và sử dụng thông tin của bạn
            </p>

            <h6 class="my-md-4 my-3">Sự riêng tư của trẻ em</h6>
            <ol start="1" class="pl-sm-4 pl-3">
                <li>Mặc dù Dịch vụ dành cho đối tượng chung, nhưng chúng tôi hạn chế việc sử dụng chúng cho các cá nhân
                    từ 13 tuổi trở lên. Chúng tôi không cố ý tìm kiếm hoặc thu thập thông tin cá nhân từ trẻ em dưới 13
                    tuổi.
                </li>
                <li>Do đó, mặc dù chúng tôi thực hiện các bước để bảo mật thông tin của bạn, chúng tôi không hứa hẹn, và
                    bạn không nên mong đợi, rằng thông tin cá nhân, tìm kiếm của bạn, hoặc các thông tin liên lạc khác
                    sẽ luôn được bảo mật. Người dùng cũng nên quan tâm đến cách họ xử lý và tiết lộ thông tin cá nhân
                    của họ và tránh phải gửi thông tin cá nhân qua email không an toàn.</li>

            </ol>
            <h6 class="mb-md-4 mb-3">Liên lạc với chúng tôi bằng cách nào</h6>
            <p class="font-weight-light pl-sm-4 mb-2">Nếu bạn có bất kỳ câu hỏi nào về Chính sách Bảo mật hoặc các thông
                lệ xử lý thông tin của chúng tôi hoặc nếu bạn muốn yêu cầu thông tin về việc tiết lộ thông tin cá nhân
                của chúng tôi cho các bên thứ ba vì mục đích tiếp thị trực tiếp của họ, vui lòng liên hệ với chúng tôi.
            </p>
        </div>
    </div>
    <!-- //privacy -->

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