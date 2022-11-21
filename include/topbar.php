<?php
if (isset($_POST['dangnhap_home'])) {
    $taikhoan = $_POST['email_login'];
    $matkhau = md5($_POST['password_login']);
    if ($taikhoan == '' || $matkhau == '') {
        echo '<script>alert("Làm ơn không để trống")</script>';
    } else {
        $sql_select_admin = "SELECT * FROM tbl_khachhang WHERE email='$taikhoan' AND password='$matkhau' LIMIT 1";
        $select_admin = $con->query($sql_select_admin)->fetch(PDO::FETCH_ASSOC);
        if ($select_admin > 0) {
            $_SESSION['dangnhap_home'] = $select_admin['name'];
            $_SESSION['khachhang_id'] = $select_admin['khachhang_id'];
            header('Location: index.php');
        } else {
            echo '<script>alert("Tài khoản mật khẩu sai")</script>';
        }
    }
} elseif (isset($_POST['dangky'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $note = $_POST['note'];
    $address = $_POST['address'];
    $giaohang = $_POST['giaohang'];


    $sql_khachhang =  "INSERT INTO tbl_khachhang(name,phone,email,address,note,giaohang,password) values ('$name','$phone','$email','$address','$note','$giaohang','$password')";
    $add_khachhang = $con->query($sql_khachhang)->fetch(PDO::FETCH_ASSOC);

    $sql_select_khachhang = "SELECT * FROM tbl_khachhang ORDER BY khachhang_id DESC LIMIT 1";
    $select_khachhang = $con->query($sql_select_khachhang)->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['dangnhap_home'] = $name;
    $_SESSION['khachhang_id'] = $select_khachhang['khachhang_id'];

    header('Location:index.php');
} else if (isset($_GET['login'])) {
    $dangxuat = $_GET['login'];
} else {
    $dangxuat = '';
}
if ($dangxuat == 'dangxuat') {
    session_destroy();
    header('Location: index.php');
}
?>

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
                        <a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['khachhang_id'] ?>"
                            class="text-white">
                            <i class="fas fa-truck mr-2"></i>Xem đơn hàng : <?php echo $_SESSION['dangnhap_home'] ?></a>
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
                        <form class="form-inline" action="index.php?quanly=timkiem" method="POST">
                            <input class="form-control mr-sm-2" name="search_product" type="search"
                                placeholder="Tìm kiếm sản phẩm" aria-label="Search" required>
                            <button class="btn my-2 my-sm-0" name="search_button" type="submit">Tìm kiếm</button>
                        </form>
                    </div>
                    <!-- //search -->
                    <!-- cart details -->
                    <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                        <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                            <button class="btn w3view-cart" type="submit" name="submit" value="">
                                <a href="?quanly=giohang" class="text-white">
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