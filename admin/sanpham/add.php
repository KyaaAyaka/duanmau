<div class="row2">
    <div class="row2 font_title">
        <h1>THÊM MỚI SẢN PHẨM</h1>
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
        <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10">
                <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">Danh muc sản phẩm</label> <br>
                <select class="form-select" name="iddm" aria-label="Default select example">
                    <?php
                        foreach($select_danhmuc as $optiondanhmuc) {
                            extract($optiondanhmuc);
                            ?>
                                <option value="<?= $id ?>"><?= $name ?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>
            <div class="row2 mb10 form_content_container">
                <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">Tên sản phẩm</label> <br>
                <input type="text" style="height: 40px;" name="tensanpham" placeholder="Nhập vào tên sản phẩm">
            </div>
            <div class="row2 mb10">
                <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">Giá sản phẩm</label> <br>
                <input type="text" style="height: 40px;" name="gia" placeholder="Nhập vào giá">
            </div>
            <div class="row2 mb10">
                <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">Ảnh sản phẩm</label> <br>
                <input type="file" class="form-control" name="image" style="height: 40px;" name="tenloai" placeholder="Nhập vào tên">
            </div>
            <div class="row2 mb10">
                <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">Mô tả sản phẩm</label> <br>
                <textarea class="form-control" placeholder="Nhập mô tả của bạn" name="mota"  cols="20" rows="10"></textarea>
            </div>
            <div>
                <input class="mr20" type="submit" name="themsanpham" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsanpham" class="btn btn-primary">DANH SÁCH</a>
            </div>
        </form>
    </div>
</div>