<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Điều khoản</title>
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
                                    href="index.php?quanly=tintuc&id_tin=<?php echo $danhmuctin['danhmuctin_id'] ?>">
                                    <?php echo $danhmuctin['tendanhmuc'] ?>
                                </a>
                                <?php
                                }
                                ?>
                            </div>
                        </li>
                        <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link" href="payment.php">Thanh toán</a>

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
                    <li>Điều khoản</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->

    <!-- terms -->
    <div class="terms py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                <span>Đ</span>iều
                <span>K</span>hoản
            </h3>
            <!-- //tittle heading -->
            <h3 class="w3-head w3-secong-head text-capitalize">Xin vui lòng đọc kỹ càng những điều khoản sử dụng
                này.
            </h3>
            <h6 class="my-md-4 my-3">1. Đủ điều kiện</h6>
            <ol start="1" class="pl-sm-4 pl-3">
                <li class="font-weight-light pl-sm-4 mb-2">Phải trên 13 tuổi. Dịch vụ không dành cho những người dưới
                    13 tuổi. Nếu bạn dưới 13 tuổi, bạn bị nghiêm cấm sử dụng Dịch vụ và bạn không thể truy cập bất kỳ
                    tính năng nào cho phép bạn cung cấp thông tin cho chúng tôi hoặc truyền đạt và chia sẻ thông tin
                    với.
                </li>
                <li class="font-weight-light pl-sm-4 mb-2">Vô hiệu hóa trường hợp bị cấm. Bạn có trách nhiệm đảm bảo
                    rằng việc sử dụng Dịch vụ của bạn tuân thủ tất cả các luật, quy tắc và quy định áp dụng cho bạn. Các
                    điều khoản này đều vô hiệu hóa và việc sử dụng Dịch vụ không được phép khi việc sử dụng đó bị cấm.
                </li>

            </ol>

            <h6 class="my-md-4 my-3">2. Sử dụng Dịch vụ</h6>
            <p class="font-weight-light pl-sm-4 mb-2">Sử dụng thương mại. Bạn được phép sử dụng Ứng dụng và Dịch vụ của
                chúng tôi (cũng như API của chúng tôi) trong thương mại như một phương tiện để bán lại hoặc xây dựng
                hàng hoá và dịch vụ mà bạn sử dụng hoặc đưa ra thương mại, ngoại trừ trường hợp sản phẩm của bạn được
                thiết kế tương tự hoặc thiết kế để cạnh tranh trực tiếp với Dịch vụ được cung cấp bởi Đồng hồ Hải Triều.
            </p>
            <p class="font-weight-light pl-sm-4 mb-2"> An toàn cá nhân. An ninh và an toàn của bạn là điều tối quan
                trọng đối với chúng tôi. Dịch vụ tự nhiên thúc đẩy chia sẻ thông tin cá nhân giữa Người dùng. Chúng tôi
                không và không thể đảm bảo rằng bạn có thể liên hệ trực tiếp với bất kỳ cá nhân nào khác mà bạn tiếp xúc
                qua Dịch vụ. </p>
            <p class="font-weight-light pl-sm-4 mb-2">Sử dụng thông tin được cung cấp bởi người dùng khác. Bạn đồng ý sử
                dụng bất kỳ thông tin nào (cá nhân hoặc bằng cách khác) do Người dùng cung cấp, hoặc bằng cách khác
                thông qua Dịch vụ, một cách hợp pháp và có trách nhiệm. Bạn đồng ý rằng bạn sẽ không sử dụng thông tin
                về Người dùng vì bất kỳ lý do gì mà không có sự đồng ý trước của Người sử dụng đó.</p>

            <h6 class="my-md-4 my-3">3. Lệ phí sử dụng dịch vụ</h6>
            <p class="font-weight-light pl-sm-4 mb-2">Đồng hồ T-P Watch cung cấp Dịch vụ theo biểu phí. Vui lòng báo cáo
                cho chúng tôi nếu bạn muốn sử dụng bất kỳ nội dụng nào trên trang web này.</p>


            <h6 class="my-md-4 my-3">4. Bảo lưu quyền</h6>
            <p class="font-weight-light pl-sm-4 mb-2">Quyền Chấm dứt hoặc Từ chối Dịch Vụ. Bạn hiểu rằng theo quyết định
                riêng của chúng tôi vào bất kỳ lúc nào, vì bất kỳ lý do hoặc lý do gì, có thể từ chối hoặc chặn bất kỳ
                người dùng nào từ Dịch vụ và chấm dứt tài khoản của người dùng nếu người đó là Người dùng.</p>
            <p class="font-weight-light pl-sm-4 mb-2">Quyền tiết lộ. Bạn thừa nhận và đồng ý rằng chúng tôi có quyền
                tiết lộ thông tin bạn cung cấp nếu được yêu cầu theo luật pháp theo yêu cầu của bên thứ ba hoặc nếu
                chúng tôi quyết định cho rằng việc tiết lộ là hợp lý để (1) tuân thủ pháp luật, yêu cầu hoặc lệnh của cơ
                quan thực thi pháp luật hoặc bất kỳ quy trình pháp lý nào (cho dù luật pháp hiện hành có yêu cầu hay
                không); (2) bảo vệ quyền hoặc tài sản của chúng tôi, hoặc của bên thứ ba; hoặc (3) bảo vệ sức khoẻ hoặc
                an toàn của ai đó, chẳng hạn như khi có hại hoặc bạo lực đối với bất kỳ người nào (kể cả người dùng)
                đang bị đe dọa.</p>
            <p class="font-weight-light pl-sm-4 mb-2">Quyền xem xét Nội dung; Không có Nhiệm vụ Giám sát. Bạn thừa nhận
                và đồng ý rằng chúng tôi không có nghĩa vụ nào để kiểm tra trước, kiểm soát, giám sát hoặc chỉnh sửa nội
                dung do Người dùng đăng lên và chúng tôi không chịu trách nhiệm về nội dung do người khác cung cấp. Tuy
                nhiên, bạn hiểu và đồng ý rằng chúng tôi có thể, nhưng không bắt buộc, xem lại, chỉnh sửa và xóa bất kỳ
                nội dung, email, tin nhắn, hình ảnh, âm nhạc hoặc các nội dung khác mà theo quyết định của chúng tôi.
            </p>

            <h6 class="my-md-4 my-3">5. Quyền sở hữu; Sử dụng Giấy phép</h6>
            <p class="font-weight-light pl-sm-4 mb-2">Sở hữu. Chúng tôi và nhà cấp phép của chúng tôi sở hữu và duy trì
                tất cả các quyền sở hữu trong Dịch vụ. Dịch vụ có thể chứa tài liệu có bản quyền, thương hiệu và thông
                tin độc quyền khác của chúng tôi và bên cấp bản quyền (“Nội dung ứng dụng”).</p>
            <p class="font-weight-light pl-sm-4 mb-2">Sử dụng Giấy phép. Theo các Điều khoản này, chúng tôi cấp cho bạn
                một giấy phép hạn chế, có thể thu hồi được, không độc quyền, được thanh toán đầy đủ để truy cập Nội dung
                Ứng dụng vì mục đích duy nhất và hạn chế nhằm tạo thuận lợi cho việc sử dụng Dịch vụ của bạn.</p>

            <h6 class="my-md-4 my-3">6. Tuyên bố từ chối trách nhiệm/Hạn chế</h6>
            <p class="font-weight-light pl-sm-4 mb-2">Chúng tôi không có mối quan hệ đặc biệt với hoặc được ủy thác
                trách nhiệm với bạn. Bạn thừa nhận rằng chúng tôi không có quyền kiểm soát và không có nghĩa vụ thực
                hiện bất kỳ hành động nào liên quan đến:
            </p>
            <h6 class="my-md-4 my-3">7. Thẩm quyền và Lựa chọn Luật.</h6>
            <p class="font-weight-light pl-sm-4 mb-2">Nếu có bất kỳ tranh chấp nào phát sinh từ Dịch vụ, bằng cách sử
                dụng Dịch vụ bạn đồng ý rõ ràng rằng bất kỳ tranh chấp nào sẽ được điều chỉnh bởi luật pháp, không phụ
                thuộc vào các điều khoản xung đột của luật pháp để giải quyết bất kỳ tranh chấp nào.</p>
        </div>
    </div>
    <!-- //terms -->

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