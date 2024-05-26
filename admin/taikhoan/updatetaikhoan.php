<?php
    if(is_array($listsuataikhoan)) {
        extract($listsuataikhoan);
    }
?>

<div class="row2">
    <div class="row2 font_title">
        <h1>CẬP NHẬT TÀI KHOẢN KHÁCH HÀNG</h1>
    </div>
    <div class="row2 form_content" style="border: 1px solid #ccc; border-radius: 8px; margin-top: 20px; padding: 20px;">
        <form action="index.php?act=updateTaikhoan" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10">
                <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">THÊM TÀI KHOẢN KHÁCH HÀNG</label> <br>
            </div>
            <div class="row2 mb10 form_content_container">
                <input type="hidden" class="form-control" value="<?= $id ?>" style="height: 40px;" name="id" placeholder="Nhập email">
            </div>
            <div class="row2 mb10 form_content_container">
                <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">Email</label> <br>
                <input type="email" class="form-control" value="<?= $email ?>" style="height: 40px;" name="email" placeholder="Nhập email">
            </div>
            <div class="row2 mb10">
                <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">Tên tài khoản</label> <br>
                <input type="text" class="form-control" value="<?= $user ?>" style="height: 40px;" name="user" placeholder="Nhập tài khoản">
            </div>
            <div class="row2 mb10">
                <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">Địa chỉ</label> <br>
                <input type="text" class="form-control" value="<?= $address ?>" style="height: 40px;" name="address" placeholder="Nhập địa chỉ">
            </div>
            <div class="row2 mb10">
                <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">Số điện thoại</label> <br>
                <input type="text" class="form-control" value="<?= $tel ?>" style="height: 40px;" name="tel" placeholder="Nhập số điện thoại">
            </div>
            <div class="row2 mb10">
                <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">Mật khẩu</label> <br>
                <input type="password" class="form-control" value="<?= $pass ?>" style="height: 40px;" name="pass" placeholder="Nhập mật khẩu">
            </div>
            <div>
                <input class="mr20" type="submit" name="capnhattaikhoan" value="CẬP NHẬT TÀI KHOẢN">
                <input class="mr20" type="reset" value="NHẬP LẠI">
            </div>
        </form>
    </div>
</div>