<main class="catalog boxcenter mb" style="margin-top: 20px;">

    <div class="boxleft">
        <?php
            if(isset($_SESSION['hanh'])) {
                extract($_SESSION['hanh']);
            }
        ?>
        <div class="box_title">CẬP NHẬT TÀI KHOẢN</div>
        <div class="box_content form_account" style="padding: 20px !important;">
            <form action="index.php?act=edit_taikhoan" method="post">
                <div>
                    <p>Email</p>
                    <input type="email" value="<?= isset($email) ? $email : "" ?>" name="email" placeholder="Nhập email của bạn">
                </div>
                <div>
                    Tên đăng nhập
                    <input type="text" value="<?= isset($user) ? $user : "" ?>" name="user" placeholder="Nhập tên đăng nhập">
                </div>
                <div>
                    Mật khẩu
                    <input type="password" value="<?= isset($pass) ? $pass : "" ?>" name="pass" placeholder="Nhập mật khẩu">
                </div>
                <div>
                    Địa chỉ
                    <input type="text" value="<?= isset($address) ? $address : "" ?>" name="address" placeholder="Địa chỉ">
                </div>
                <div>
                    Điện thoại
                    <input type="text" value="<?= isset($tel) ? $tel : "" ?>" name="tel" placeholder="Số điện thoại">
                </div>
                <input type="hidden" value="<?= isset($id) ? $id : "" ?>" name="id">
                <input type="submit" value="Cập nhật" name="capnhat">
                <input type="reset" value="Nhập lại">
            </form>
            <div style="width:100%; color: blue; font-size: 25px; display:flex; justify-content: center; align-items: center; padding: 10px;">
                <?= (isset($successEmail) && $successEmail != "") ? $successEmail : "" ?>
            </div>
        </div>

    </div>

    <?php
        include "./view/boxright.php";
    ?>

</main>
<!-- BANNER 2 -->