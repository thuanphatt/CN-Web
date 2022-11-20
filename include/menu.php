<?php
$sql = "SELECT * FROM tbl_category ORDER BY category_id DESC";
$sql_category = $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="navbar-inner">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="agileits-navi_search">
                <form action="#" method="post">
                    <select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
                        <option value="">Danh mục sản phẩm</option>
                        <?php
                        foreach ($sql_category as $category) {
                        ?>
                        <option value="<?php echo $category['category_id'] ?>">
                            <?php echo $category['category_name'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </form>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center mr-xl-5">
                    <li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="index.php">Trang chủ
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <?php

                    foreach ($sql_category as $category_danhmuc) {
                    ?>
                    <li class="nav-item  mr-lg-2 mb-lg-0 mb-2">

                        <a class="nav-link " href="?quanly=danhmuc&id=<?php echo $category_danhmuc['category_id'] ?>"
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
                            foreach ($sql_danhmuctin as $sql_danhmuctin) {
                            ?>
                            <a class="dropdown-item"
                                href="index.php?quanly=tintuc&id_tin=<?php echo $sql_danhmuctin['danhmuctin_id'] ?>"><?php echo $sql_danhmuctin['tendanhmuc'] ?></a>
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