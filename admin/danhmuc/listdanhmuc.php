<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH DANH MỤC</h1>
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
    <div class="row2 form_content" style="margin-top: 20px; border-radius: 6px;">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table class="table table-striped">
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th>THAO TÁC</th>
                    </tr>
                    <?php
                        foreach ($danhsachdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            ?>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><?= $id ?></td>
                                    <td><?= $name ?></td>
                                    <td><a href="index.php?act=suadanhmuc&iddm=<?= $id ?>" class="btn btn-success">Sửa</a> <a onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục ày không?')" href="index.php?act=xoadanhmuc&iddm=<?= $id ?>" class="btn btn-danger">Xóa</a></td>
                                </tr>
                            <?php
                        }
                    ?>

                </table>
            </div>
            <div>
                <a href="" class="btn btn-success">CHỌN TẤT CẢ</a>
                <a href="" class="btn btn-danger">BỎ CHỌN TẤT CẢ</a>
                <a href="index.php?act=adddm" class="btn btn-primary">NHẬP THÊM</a>
            </div>
        </form>
    </div>
</div>
</div>