<?php
    if(is_array($suasanpham)) {
        extract($suasanpham);
    }
?>
<div class="row2">
    <div class="row2 font_title">
        <h1>SỬA SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content" style="border: 1px solid #ccc; border-radius: 8px; margin-top: 20px; padding: 20px;">
        <form action="index.php?act=updateSanpham" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="row2 mb10">
                <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">Danh muc sản phẩm</label> <br>
                <select class="form-select" name="iddm" aria-label="Default select example">
                    <?php
                        foreach($select_danhmuc as $optiondanhmuc) {
                            extract($optiondanhmuc);
                            if($iddm == $id) {
                                ?>
                                    <option value="<?= $id ?>" selected><?= $name ?></option>
                                <?php
                            } else {
                                ?>
                                    <option value="<?= $id ?>"><?= $name ?></option>
                                <?php
                            }
                        }
                    ?>
                </select>
            </div>

            <div class="row2 mb10 form_content_container">
                <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">Tên sản phẩm</label> <br>
                <input type="text" style="height: 40px;" value="<?= $suasanpham['name'] ?>" name="tensanpham" placeholder="Nhập vào tên sản phẩm">
            </div>
            <div class="row2 mb10">
                <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">Giá sản phẩm</label> <br>
                <input type="text" style="height: 40px;" value="<?= $price ?>" name="gia" placeholder="Nhập vào giá">
            </div>
            <div class="row2 mb10">
                <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">Ảnh sản phẩm</label> <br>
                <input type="file" class="form-control" name="image" style="height: 40px;">
                <input type="hidden" class="form-control" value="<?= $oldImage ?>" name="oldImage" style="height: 40px;">
                <img style="width: 300px; height:200px; margin: 20px 0; border: 1px solid #000; border-radius: 6px; padding:10px;" src="../../../tranvietanh_duanmau/upload/<?= $img ?>" alt="">
            </div>
            <div class="row2 mb10">
                <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">Mô tả sản phẩm</label> <br>
                <textarea class="form-control" placeholder="Nhập mô tả của bạn" name="mota"  cols="20" rows="10"><?= $mota ?></textarea>
            </div>
            <div>
                <input class="mr20" type="submit" name="suasanpham" value="CẬP NHẬT">
                <input class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsanpham" class="btn btn-primary">DANH SÁCH</a>
            </div>
        </form>
    </div>
</div>