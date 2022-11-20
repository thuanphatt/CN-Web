<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Payment Page</title>
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
    <link
        href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
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


                        <li class="text-center border-right text-white">
                            <i class="fas fa-phone mr-2"></i>369369369
                        </li>
                        <li class="text-center border-right text-white">
                            <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
                                <i class="fas fa-sign-in-alt mr-2"></i>Đăng nhập</a>
                        </li>
                        <li class="text-center text-white">
                            <a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
                                <i class="fas fa-sign-out-alt mr-2"></i>Đăng ký</a>
                        </li>
                    </ul>
                    <!-- //header lists -->
                </div>
            </div>
        </div>
    </div>


    <!-- modals -->
    <!-- log in -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center">Log In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder=" " name="Name" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="Password" required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Log in">
                        </div>
                        <div class="sub-w3l">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
                            </div>
                        </div>
                        <p class="text-center dont-do mt-3">Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#exampleModal2">
                                Register Now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- register -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label class="col-form-label">Your Name</label>
                            <input type="text" class="form-control" placeholder=" " name="Name" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder=" " name="Email" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="Password" id="password1"
                                required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder=" " name="Confirm Password"
                                id="password2" required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Register">
                        </div>
                        <div class="sub-w3l">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
                                <label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms
                                    & Conditions</label>
                            </div>
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
                                <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm sản phẩm"
                                    aria-label="Search" required>
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
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                            <a class="nav-link "
                                href="index.php?quanly=danhmuc&id=<?php echo $category_danhmuc['category_id'] ?>"
                                role="button" aria-haspopup="true" aria-expanded="false">
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
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Tin tức
                            </a>
                            <div class="dropdown-menu">
                                <?php
                                foreach ($sql_danhmuctin as $danhmuctin) {
                                ?>
                                <a class="dropdown-item"
                                    href="index.php?quanly=tintuc&id_tin=<?php echo $danhmuctin['danhmuctin_id'] ?>"><?php echo $danhmuctin['tendanhmuc'] ?></a>
                                <?php
                                }
                                ?>
                            </div>
                        </li>
                        <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link active" href="payment.php">Thanh toán</a>

                        </li>
                        <li class="nav-item">
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
                    <li>Thanh toán</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->
    <!-- payment page-->
    <div class="privacy py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                <span>T</span>hanh
                <span>T</span>oán
            </h3>
            <!-- //tittle heading -->
            <div class="checkout-right">
                <!--Horizontal Tab-->
                <div id="parentHorizontalTab">
                    <ul class="resp-tabs-list hor_1">
                        <li>Thanh toán khi nhận hàng (COD)</li>
                        <li>Thẻ tín dụng /thẻ ghi nợ</li>
                        <li>Chuyển khoản</li>
                    </ul>
                    <div class="resp-tabs-container hor_1">

                        <div>
                            <div class="vertical_post check_box_agile">
                                <h5>COD</h5>
                                <div class="checkbox">
                                    <div class="check_box_one cashon_delivery">
                                        <label class="anim">
                                            <input type="checkbox" class="checkbox">
                                            <span> Chúng tôi cũng chấp nhận Thẻ dụng /Thẻ ghi nợ khi giao hàng. Vui lòng
                                                kiểm tra với đại lý.</span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div>
                            <form action="#" method="post" class="creditly-card-form agileinfo_form">
                                <div class="creditly-wrapper wthree, w3_agileits_wrapper">
                                    <div class="credit-card-wrapper">
                                        <div class="first-row form-group">
                                            <div class="controls">
                                                <label class="control-label">Họ tên thẻ</label>
                                                <input class="billing-address-name form-control" type="text" name="name"
                                                    placeholder="Nguyen Thuan Phat">
                                            </div>
                                            <div class="w3_agileits_card_number_grids my-3">
                                                <div class="w3_agileits_card_number_grid_left">
                                                    <div class="controls">
                                                        <label class="control-label">Số thẻ</label>
                                                        <input class="number credit-card-number form-control"
                                                            type="text" name="number" inputmode="numeric"
                                                            autocomplete="cc-number" autocompletetype="cc-number"
                                                            x-autocompletetype="cc-number"
                                                            placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                    </div>
                                                </div>
                                                <div class="w3_agileits_card_number_grid_right mt-2">
                                                    <div class="controls">
                                                        <label class="control-label">CVV</label>
                                                        <input class="security-code form-control" Â· inputmode="numeric"
                                                            type="text" name="security-code"
                                                            placeholder="&#149;&#149;&#149;">
                                                    </div>
                                                </div>
                                                <div class="clear"> </div>
                                            </div>
                                            <div class="controls">
                                                <label class="control-label">Ngày hết hạn</label>
                                                <input class="expiration-month-and-year form-control" type="text"
                                                    name="expiration-month-and-year" placeholder="MM / YY">
                                            </div>
                                        </div>
                                        <button class="submit mt-3">
                                            <span>Thanh toán</span>
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div>
                            <div class="vertical_post">
                                <form action="#" method="post">
                                    <h5>Chọn ngân hàng để thanh toán</h5>
                                    <div class="section_room_pay">
                                        <select class="year">
                                            <option value="">=== Tên ngân hàng ===</option>
                                            <option value="Techcombank">Ngân hàng TMCP Kỹ Thương Việt Nam</option>
                                            <option value="VPBank">Ngân hàng TMCP Việt Nam Thịnh Vượng</option>
                                            <option value="ACB">Ngân hàng TMCP Á Châu</option>
                                            <option value="TPBank">Ngân hàng TMCP Tiên Phong</option>
                                            <option value="VIB">Ngân hàng TMCP Quốc Tế Việt Nam</option>
                                            <option value="HDBank">Ngân hàng TMCP Phát triển TP. Hồ Chí Minh</option>
                                            <option value="Sacombank">Ngân hàng TMCP Sài Gòn Thương Tín</option>
                                            <option value="SHB">Ngân hàng TMCP Sài Gòn-Hà Nội</option>
                                            <option value="OCB">Ngân hàng TMCP Phương Đông</option>
                                            <option value="MSB">Ngân hàng TMCP Hàng Hải Việt Nam</option>
                                        </select>
                                    </div>
                                    <input type="submit" value="Thanh toán ngay">
                                </form>
                            </div>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
                <!--Plug-in Initialisation-->
            </div>
        </div>
    </div>
    <!-- //payment page -->

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
                <!-- footer first section -->

                <!-- //footer first section -->
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
                                <a href="faqs.php">FAQs</a>
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
                                            <i class="fab fa-instagram"
                                                style="background: url(./images/bg-instagram.jpg);"></i>
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

    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
    paypals.minicarts
        .render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

    paypals.minicarts.cart.on('checkout', function(evt) {
        var items = this.items(),
            len = items.length,
            total = 0,
            i;

        // Count the number of each item in the cart
        for (i = 0; i < len; i++) {
            total += items[i].get('quantity');
        }

        if (total < 3) {
            alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
            evt.preventDefault();
        }
    });
    </script>
    <!-- //cart-js -->

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

    <!-- easy-responsive-tabs -->
    <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
    <script src="js/easyResponsiveTabs.js"></script>

    <script>
    $(document).ready(function() {
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
    </script>
    <!-- //easy-responsive-tabs -->

    <!-- credit-card -->
    <script src="js/creditly.js"></script>
    <link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />
    <script>
    $(function() {
        var creditly = Creditly.initialize(
            '.creditly-wrapper .expiration-month-and-year',
            '.creditly-wrapper .credit-card-number',
            '.creditly-wrapper .security-code',
            '.creditly-wrapper .card-type');


        $(".creditly-card-form .submit").click(function(e) {
            e.preventDefault();
            var output = creditly.validate();
            if (output) {
                // Your validated credit card output
                console.log(output);
            }
        });
    });
    </script>

    <!-- creditly2 (for paypal) -->
    <script src="js/creditly2.js"></script>
    <script>
    $(function() {
        var creditly = Creditly2.initialize(
            '.creditly-wrapper .expiration-month-and-year-2',
            '.creditly-wrapper .credit-card-number-2',
            '.creditly-wrapper .security-code-2',
            '.creditly-wrapper .card-type');

        $(".creditly-card-form-2 .submit").click(function(e) {
            e.preventDefault();
            var output = creditly.validate();
            if (output) {
                // Your validated credit card output
                console.log(output);
            }
        });
    });
    </script>

    <!-- //credit-card -->


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