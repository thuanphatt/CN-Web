<!-- top Products -->
<div class="ads-grid py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">Danh mục sản phẩm</h3>
            <!-- //tittle heading -->
            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-9">
                    <div class="wrapper">
                        <?php
                        $sql = "SELECT * FROM tbl_category ORDER BY category_id DESC";
                        $sql_cate_home = $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($sql_cate_home as $cate_home) {
                            $id_category = $cate_home['category_id'];
                        ?>
                        <!-- first section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                            <h3 class="heading-tittle text-center font-italic">
                                <?php echo $cate_home['category_name'] ?></h3>
                            <div class="row">
                                <?php
                                    $sql = "SELECT * FROM tbl_sanpham ORDER BY sanpham_id DESC";
                                    $sql_product = $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($sql_product as $product) {
                                        if ($product['category_id'] == $id_category) {
                                    ?>
                                <div class="col-md-4 product-men mt-5">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">
                                            <img src="images/<?php echo $product['sanpham_image'] ?>" alt=""
                                                style="height:200px ; width: 200px;">
                                            <a href="?quanly=chitietsp&id=<?php echo $product['sanpham_id'] ?>"
                                                class="link-product-add-cart">
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro"> </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a
                                                    href="?quanly=chitietsp&id=<?php echo $product['sanpham_id'] ?>"><?php echo $product['sanpham_name'] ?></a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span
                                                    class="item_price"><?php echo number_format($product['sanpham_giakhuyenmai']) . 'vnđ' ?></span>
                                                <del><?php echo number_format($product['sanpham_gia']) . 'vnđ' ?></del>
                                            </div>
                                            <div
                                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="?quanly=giohang" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="tensanpham"
                                                            value="<?php echo $product['sanpham_name'] ?>" />
                                                        <input type="hidden" name="sanpham_id"
                                                            value="<?php echo $product['sanpham_id'] ?>" />
                                                        <input type="hidden" name="giasanpham"
                                                            value="<?php echo $product['sanpham_gia'] ?>" />
                                                        <input type="hidden" name="hinhanh"
                                                            value="<?php echo $product['sanpham_image'] ?>" />
                                                        <input type="hidden" name="soluong" value="1" />
                                                        <input type="submit" name="themgiohang" value="Thêm giỏ hàng"
                                                            class="button" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                        }
                                    }
                                    ?>
                            </div>
                        </div>
                        <!-- //first section -->
                        <?php
                        }
                        ?>

                    </div>
                </div>
                <!-- //product left -->

                <!-- product right -->
                <div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
                    <div class="side-bar p-sm-4 p-3">
                        <div class="search-hotel border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Tìm kiếm</h3>
                            <form action="#" method="post">
                                <input type="search" placeholder="Sản phẩm..." name="search" required="">
                                <input type="submit" value=" ">
                            </form>
                        </div>
                        <div class="search-hotel border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Thương hiệu</h3>
                            <div class="left-side py-2">
                                <ul>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Orient</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Seiko</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Casio</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Doxa</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Calvin Klein</span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- Lọc theo giá -->
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Lọc theo giá</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">0₫ - 2000000₫</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">2000000₫ - 4000000₫</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">4000000₫ - 6000000₫</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">6000000₫ - 8000000₫</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">8000000₫ - 10000000₫</span>
                                </li>
                            </ul>
                        </div>
                        <!-- //Lọc theo giá -->
                        <!-- Chất liệu dây -->
                        <div class="range border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Chất liệu dây</h3>
                            <div class="w3l-range">
                                <ul>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <a href="#">Dây da</a>
                                    </li>
                                    <li class="my-1">
                                        <input type="checkbox" class="checked">
                                        <a href="#">Dây kim loại</a>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <a href="#">Dây Titanium</a>
                                    </li>
                                    <li class="my-1">
                                        <input type="checkbox" class="checked">
                                        <a href="#">Dây vải</a>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <a href="#">Dây da cá sấu</a>
                                    </li>
                                    <li class="mt-1">
                                        <input type="checkbox" class="checked">
                                        <a href="#">Dây nhựa/ Cao su</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- //Chất liệu dây -->
                        <!-- Giới tính -->
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Giới tính</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">Nam</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">Nữ</span>
                                </li>

                            </ul>
                        </div>
                        <!-- //Giới tính -->
                        <!-- reviews -->
                        <div class="customer-rev border-bottom left-side py-2">
                            <h3 class="agileits-sear-head mb-3">Khách hàng Review</h3>
                            <ul>
                                <li>
                                    <a href="#" style="color: #fdbc2c;">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>5.0</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- //reviews -->
                        <!-- electronics -->
                        <div class="left-side border-bottom py-2">

                            <h3 class="agileits-sear-head mb-3">Danh mục sản phẩm</h3>
                            <ul>
                                <?php
                                $sql = 'SELECT * FROM tbl_category ORDER BY category_id DESC';
                                $sql_category_sidebar = $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($sql_category_sidebar as $category_sidebar) {
                                ?>
                                <li>
                                    <!-- <input type="checkbox" class="checked"> -->
                                    <span class="span"><a
                                            href="danhmucsanpham.php?id=<?php echo $category_sidebar['category_id'] ?>"><?php echo $category_sidebar['category_name'] ?></a></span>
                                </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <!-- //electronics -->


                        <!-- best seller -->
                        <!-- <div class="f-grid py-2">
                            <h3 class="agileits-sear-head mb-3">Sản phẩm bán chạy</h3>
                            <div class="box-scroll">
                                <div class="scroll">
                                    <?php
                                    $sql = "SELECT * FROM tbl_sanpham WHERE sanpham_hot='0' ORDER BY sanpham_id DESC";
                                    $sql_product_sidebar = $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($sql_product_sidebar as $product_sidebar) {
                                    ?>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                            <img src="images/<?php echo $product_sidebar['sanpham_image'] ?>" alt=""
                                                class="img-fluid">
                                        </div>
                                        <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                            <a href=""><?php echo $product_sidebar['sanpham_name'] ?></a>
                                            <a href=""
                                                class="price-mar mt-2"><?php echo number_format($product_sidebar['sanpham_giakhuyenmai']) . 'vnđ' ?></a>
                                            <del><?php echo number_format($product_sidebar['sanpham_gia']) . 'vnđ' ?></del>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>


                                </div>
                            </div>
                        </div> -->
                        <!-- //best seller -->
                    </div>
                    <!-- //product right -->
                </div>
            </div>
    </div>
</div>
<!-- //top products -->