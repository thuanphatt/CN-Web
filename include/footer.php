<!-- footer -->
<footer>
    <div class="footer-top-first">
        <div class="container py-md-5 py-sm-4 py-3">
            <!-- footer first section -->
            <h2 class="footer-top-head-w3l font-weight-bold mb-2">Giới thiệu về chúng tôi</h2>
            <p class="footer-main mb-4">
                Dù mới được thành lập trong vài năm gần đây nhưng T-P Watch đã và đang sẽ vươn lên giữ vị trí số 1
                trong những cửa hàng bán lẽ đồng hồ tại Việt Nam, tiếp tục sứ mệnh mang vẻ đẹp, tinh hoa của những chiếc
                đồng hồ chính hãng cao cấp của các thương hiệu đồng hồ nổi tiếng đến với những người đam mê đồng hồ tại
                Việt Nam.

                Với mong muốn đem đến khách hàng những giá trị cao nhất, T-P Watch không chỉ bán những chiếc đồng hồ
                chính hãng tốt nhất tới khách hàng mà còn đem tới khách hàng những chế độ bảo hành, hậu mãi mà khó có
                cửa hàng nào đáp ứng được.
            </p>
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
                        <?php
                        $sql = 'SELECT * FROM tbl_category ORDER BY category_id DESC';
                        $sql_category_sidebar = $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($sql_category_sidebar as $category_sidebar) {
                        ?>
                        <li class="mb-3">
                            <!-- <input type="checkbox" class="checked"> -->
                            <span class="span"><a
                                    href="index.php?quanly=danhmuc&id=<?php echo $category_sidebar['category_id'] ?>"><?php echo $category_sidebar['category_name'] ?></a></span>
                        </li>
                        <?php
                        }
                        ?>
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