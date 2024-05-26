<main class="catalog mb boxcenter" style="margin-top: 20px;">

    <div class="boxleft">
        <div class="box_title">Quên mật khẩu</div>
        <div class="box_content form_account" style="padding: 15px !important;">
            <form action="index.php?act=quenmk" method="post">
                <div>
                    <p>Email</p>
                    <input type="email" name="email" placeholder="Nhập email của bạn">
                </div>

                <input type="submit" value="Gửi" name="guiemail">
                <input type="reset" value="Nhập lại">
            </form>
            <div style="color:blue; font-weight: 500; font-size:20px;"><?= isset($successEmail) ? $successEmail : "" ?></div>
            <div style="color:red; font-weight: 500; font-size:20px;"><?= isset($errEmail) ? $errEmail : "" ?></div>
        </div>
    </div>

    <?php
        include "./view/boxright.php";
    ?>

</main>
<!-- BANNER 2 -->