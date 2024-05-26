<main class="catalog mb boxcenter" style="margin-top: 20px;">
    <div class="boxleft">
        <div class="header_admin" style="margin-bottom: 20px; background-color: #0078ff !important; color: #fff; border:1px solid #ccc;">
            <h2 style="text-align: center; padding-top: 7px;">CẢM ƠN QUÝ KHÁCH ĐÃ ĐẶT HÀNG</h2>
        </div>

        <?php
            if(isset($listbill) && (is_array($listbill))) {
                // extract($listbill);
            }
        ?>


        <div class="header_admin" style="border-radius: 5px 5px 0px 0px !important">
            <h2 style="text-align: center; padding-top: 7px;">THÔNG TIN ĐƠN HÀNG</h2>
        </div>

        <div class="mb" style="border: 1px solid #ccc; border-radius:0px 0px 5px 5px; padding: 20px; text-align: center;">
            <li>Mã đơn hàng: DAM-<?= $id ?></li>
            <li>Ngày đặt hàng: <?= $listbill['name'] ?></li>
            <li>Tổng đơn hàng: <?= $listbill['bill_email'] ?></li>
            <li>Phương thức thanh toán: DAM-<?= $listbill['bill_pttt'] ?></li>
        </div>

        <div class="header_admin" style="border-radius: 5px 5px 0px 0px !important">
            <h2 style="text-align: center; padding-top: 7px;">THÔNG TIN ĐẶT HÀNG</h2>
        </div>

        <div class="mb" style="border: 1px solid #ccc; border-radius:0px 0px 5px 5px; padding: 20px; text-align: center;">
            <div class="group__dathang3">
                <span>Người đặt hàng</span>
                <div><?= $listbill['bill_name'] ?></div>
            </div>
            <div class="group__dathang3">
                <span>Địa chỉ</span>
                <div><?= $listbill['bill_address'] ?></div>
            </div>
            <div class="group__dathang3">
                <span>Email</span>
                <div><?= $listbill['bill_email'] ?></div>
            </div>
            <div class="group__dathang3">
                <span>Điện thoại</span>
                <div><?= $listbill['bill_tel'] ?></div>
            </div>
        </div>

        <div class="header_admin" style="border-radius: 5px 5px 0px 0px !important">
            <h2 style="text-align: center; padding-top: 7px;">CHI TIẾT GIỎ HÀNG</h2>
        </div>

        <div class="mb" style="border: 1px solid #ccc; border-radius:0px 0px 5px 5px; padding: 20px; text-align: center;">
            <table class="table">
                <?php
                    bill_chi_tiet($billct);
                ?>
            </table>
        </div>

    </div>
    <div class="boxright">
        <?php
        if (!isset($_SESSION['hanh'])) {
        ?>
            <div class="mb">
                <div class="box_title">TÀI KHOẢN</div>
                <div class="box_content form_account">
                    <div style="text-align: center; color:red;" style="padding: 20px !important;">
                        <?= (isset($success) && $success != "") ? $success : "" ?>
                    </div>
                    <form action="index.php?act=dangnhap" method="POST">
                        <h4>Tên đăng nhập</h4><br>
                        <input type="text" name="user" value="<?= isset($user) ? $user : "" ?>" id="">
                        <h4>Mật khẩu</h4><br>
                        <input type="password" name="pass" value="<?= isset($pass) ? $pass : "" ?>" id=""><br>
                        <input style="margin-right: 6px;" type="checkbox" name="" id="">Ghi nhớ tài khoản?
                        <br><input style="margin-top: 10px; background-color: #0078ff; color:#fff;" type="submit" name="dangnhap" value="Đăng nhập">
                    </form>
                    <li style="margin-top: 14px;" class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                    <li class="form_li"><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="mb" style="padding: 15px; text-align: center; width: 100%; font-size: 20px; border:1px solid #000; border-radius: 10px;">
                <div style="display:flex; justify-content: center; align-items: center;" class="box_dangnhapsuccess">
                    <?php
                    if (is_array($_SESSION['hanh'])) {
                        extract($_SESSION['hanh']);
                    }
                    ?>
                    Xin chào: <h4 style="color: blue"> <?= $user ?></h4>
                </div>
                <li style="margin-top: 14px;" class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                <li class="form_li"><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                <?php
                // phần này check nếu tài khoản có role == 0 thì đó là tài khoản admin và cho <li class="form_li"><a href="admin/index.php">Đăng nhập admin</a></li>
                if ($role == 0) {
                ?>
                    <li class="form_li"><a href="admin/index.php">Đăng nhập admin</a></li>
                <?php
                }
                ?>
                <div>
                    <a onclick="return confirm('Bạn có chắc chắn muốn đăng xuất hay không?')" style="text-decoration: none; margin-top:20px;" class="btn btn-danger" href="index.php?act=dangxuat">Đăng xuất</a>
                </div>
            </div>
        <?php
        }
        ?>

        <div class="mb">
            <div class="box_title">DANH MỤC</div>
            <div class="box_content2 product_portfolio">
                <ul>
                    <?php
                    foreach ($load_danhmuc as $danhmuc) {
                        extract($danhmuc);
                    ?>
                        <li><a href="index.php?act=danhmuc&iddm=<?= $id ?>"><?= $name ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
        <div class="mb">
            <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
            <div class="box_content">
                <?php
                foreach ($load_spcungloai as $sanpham) {
                    extract($sanpham);
                ?>
                    <div class="selling_products" style="width:100%;">
                        <img src="upload/<?= $img ?>" alt="anh">
                        <a href="index.php?act=sanphamct&idsp=<?= $id ?>"><?= $name ?></a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</main>