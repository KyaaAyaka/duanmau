<main class="catalog  mb boxcenter" style="margin-top: 20px;">

    <div class="boxleft">
        <?php
            if((isset($_SESSION['hanh'])) && (is_array($_SESSION['hanh']))) {
                extract($_SESSION['hanh']);
            }
        ?>
        <div class="box_title">Đăng ký thành viên</div>
        <div class="box_content form_account" style="padding: 15px !important;">
            <form action="index.php?act=dangky" method="post">
                <div>
                    Email
                    <input type="email" name="email" style="margin-top: 10px;" placeholder="Nhập email của bạn">
                </div>
                <div>
                    Tên đăng nhập
                    <input type="text" name="user" style="margin-top: 10px;" placeholder="Nhập tên đăng nhập">
                </div>
                Mật khẩu
                <div>
                    <input type="password" name="pass" style="margin-top: 10px;" placeholder="Nhập mật khẩu mới">
                </div>
                <input type="submit" value="Đăng ký" name="dangky">
                <input type="reset" value="Nhập lại">
            </form>
            <div style="width:100%; color: blue; font-size: 25px; display:flex; justify-content: center; align-items: center; padding: 10px;">
                <?= (isset($successDangky) && $successDangky != "") ? $successDangky : "" ?>
            </div>
        </div>

    </div>

    <?php
        include "./view/boxright.php";
    ?>

</main>
<!-- BANNER 2 -->