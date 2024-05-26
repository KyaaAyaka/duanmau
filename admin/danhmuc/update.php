<?php
    if (is_array($suadanhmuc)) {
        extract($suadanhmuc);
    }
?>
<div class="row2">
    <div class="row2 font_title">
        <h1>CẬP NHẬT DANH MỤC</h1>
    </div>
    <div class="row2 form_content" style="border: 1px solid #ccc; border-radius: 8px; margin-top: 20px; padding: 20px;">
        <form action="index.php?act=updateDanhmuc" method="POST">
            <input type="hidden" name="id" value="<?= (isset($id) && ($id != "")) ? $id : "" ?>">
            <div class="row2 mb10">
                <label style="margin-bottom: 20px; color:#000;">TÊN DANH MUC</label> <br>
                <input type="text" style="height: 40px;" value="<?= (isset($name) && ($name != "")) ? $name : "" ?>" name="tenloai" placeholder="Nhập vào tên danh mục">
            </div>
            <div>
                <input type="submit" name="suadanhmuc" value="SỬA DANH MỤC">
                <input style="margin-left: 10px;" class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdanhmuc" class="btn btn-primary">DANH SÁCH DANH MỤC</a>
            </div>
        </form>
    </div>
</div>