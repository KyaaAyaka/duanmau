<div class="row2">
    <div class="row2 font_title">
        <h1>THÊM MỚI DANH MỤC</h1>
    </div>
    <?php
        if(isset($themThanhCong) && $themThanhCong != "") {
            ?>
                <div style="font-size:25px;margin-top: 100px; background-color: greenyellow; border:1px solid green; border-radius:5px; padding:10px; text-align:center;">
                    <?=$themThanhCong?>
                </div>
            <?php
        } else {
            $themThanhCong = "";
        }
    ?>
    <div class="row2 form_content" style="border: 1px solid #ccc; border-radius: 8px; margin-top: 20px; padding: 20px;">
        <form action="index.php?act=adddm" method="POST">
            <!-- <div class="row2 mb10 form_content_container">
                <label> Mã loại </label> <br>
                <input type="text" style="height: 40px;" name="maloai" placeholder="Nhập vào mã loại">
            </div> -->
            <div class="row2 mb10">
                <label style="margin-bottom: 20px; color:#000;">TÊN DANH MUC</label> <br>
                <input type="text" style="height: 40px;" name="tenloai" placeholder="Nhập vào tên danh mục">
            </div>
            <div>
                <input type="submit" name="themmoi" value="THÊM DANH MỤC">
                <input style="margin-left: 10px;" class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdanhmuc" class="btn btn-primary">DANH SÁCH DANH MỤC</a>
            </div>
        </form>
    </div>
</div>