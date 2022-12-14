 <?php
    if (isset($_POST['search_button'])) {

        $tukhoa = $_POST['search_product'];


        $sql_product =  "SELECT * FROM tbl_sanpham WHERE sanpham_name LIKE '%$tukhoa%' ORDER BY sanpham_id DESC";
        $search_product = $con->query($sql_product)->fetchAll(PDO::FETCH_ASSOC);

        $title = $tukhoa;
    }
    ?>
 <!-- top Products -->
 <div class="ads-grid py-sm-5 py-4">
     <div class="container py-xl-4 py-lg-2">
         <!-- tittle heading -->
         <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">Từ khóa tìm kiếm : <?php echo $title ?></h3>
         <!-- //tittle heading -->
         <div class="row">
             <!-- product left -->
             <div class="agileinfo-ads-display col-lg-9">
                 <div class="wrapper">
                     <!-- first section -->
                     <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                         <div class="row d-flex justify-content-center">
                             <?php
                                foreach ($search_product as $row_sanpham) {
                                ?>
                             <div class="col-md-4 product-men mt-5">
                                 <div class="men-pro-item simpleCart_shelfItem">
                                     <div class="men-thumb-item text-center">
                                         <img src="images/<?php echo $row_sanpham['sanpham_image'] ?>" alt=""
                                             style="height:200px ; width: 200px;">
                                         <a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ?>"
                                             class="link-product-add-cart">
                                             <div class="men-cart-pro">
                                                 <div class="inner-men-cart-pro"> </div>
                                             </div>
                                         </a>
                                     </div>
                                     <div class="item-info-product text-center border-top mt-4">
                                         <h4 class="pt-1">
                                             <a
                                                 href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ?>"><?php echo $row_sanpham['sanpham_name'] ?></a>
                                         </h4>
                                         <div class="info-product-price my-2">
                                             <span
                                                 class="item_price"><?php echo number_format($row_sanpham['sanpham_giakhuyenmai']) . 'vnđ' ?></span>
                                             <del><?php echo number_format($row_sanpham['sanpham_gia']) . 'vnđ' ?></del>
                                         </div>
                                         <div
                                             class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                             <form action="?quanly=giohang" method="post">
                                                 <fieldset>
                                                     <input type="hidden" name="tensanpham"
                                                         value="<?php echo $row_sanpham['sanpham_name'] ?>" />
                                                     <input type="hidden" name="sanpham_id"
                                                         value="<?php echo $row_sanpham['sanpham_id'] ?>" />
                                                     <input type="hidden" name="giasanpham"
                                                         value="<?php echo $row_sanpham['sanpham_gia'] ?>" />
                                                     <input type="hidden" name="hinhanh"
                                                         value="<?php echo $row_sanpham['sanpham_image'] ?>" />
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
                                ?>
                         </div>
                     </div>
                     <!-- //first section -->
                 </div>
             </div>
             <!-- //product left -->
             <!-- product right -->
             <div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
                 <div class="side-bar p-sm-4 p-3">
                     <div class="search-hotel border-bottom py-2">
                         <h3 class="agileits-sear-head mb-3">Thương hiệu</h3>
                         <form action="#" method="post">
                             <input type="search" placeholder="Search Brand..." name="search" required="">
                             <input type="submit" value=" ">
                         </form>
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
                     <!-- Chất liệu mặt kính -->
                     <div class="left-side border-bottom py-2">
                         <h3 class="agileits-sear-head mb-3">Chất liệu mặt kính</h3>
                         <ul>
                             <li>
                                 <input type="checkbox" class="checked">
                                 <span class="span">Kính cứng</span>
                             </li>
                             <li>
                                 <input type="checkbox" class="checked">
                                 <span class="span">Kính sapphire</span>
                             </li>
                             <li>
                                 <input type="checkbox" class="checked">
                                 <span class="span">Kính nhựa</span>
                             </li>
                         </ul>
                     </div>
                     <!-- //Chất liệu mặt kính -->
                     <!-- Bộ máy và năng lượng -->
                     <div class="left-side border-bottom py-2">
                         <h3 class="agileits-sear-head mb-3">Bộ máy và năng lượng</h3>
                         <ul>
                             <li>
                                 <input type="checkbox" class="checked">
                                 <span class="span">Pin(Quartz)</span>
                             </li>
                             <li>
                                 <input type="checkbox" class="checked">
                                 <span class="span">Cơ(Automatic)</span>
                             </li>
                             <li>
                                 <input type="checkbox" class="checked">
                                 <span class="span">Năng lượng ánh sáng</span>
                             </li>
                             <li>
                                 <input type="checkbox" class="checked">
                                 <span class="span">Vừa Pin - Vừa tự động</span>
                             </li>
                         </ul>
                     </div>
                     <!-- //Bộ máy và năng lượng -->
                     <!-- Màu mặt số -->
                     <div class="left-side border-bottom py-2">
                         <h3 class="agileits-sear-head mb-3">Màu mặt số</h3>
                         <ul>
                             <li>
                                 <input type="checkbox" class="checked">
                                 <span class="span">Trắng</span>
                             </li>
                             <li>
                                 <input type="checkbox" class="checked">
                                 <span class="span">Đen</span>
                             </li>
                             <li>
                                 <input type="checkbox" class="checked">
                                 <span class="span">Vàng</span>
                             </li>
                             <li>
                                 <input type="checkbox" class="checked">
                                 <span class="span">Nâu</span>
                             </li>
                             <li>
                                 <input type="checkbox" class="checked">
                                 <span class="span">Khác</span>
                             </li>
                         </ul>
                     </div>
                     <!-- //Màu mặt số -->
                 </div>
                 <!-- //product right -->
             </div>
         </div>
     </div>
 </div>
 <!-- //top products -->