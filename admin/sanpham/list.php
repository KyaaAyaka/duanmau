<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content" style="margin-top: 20px; border-radius: 6px;">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table class="table table-striped">
                    <tr>
                        <th></th>
                        <th>DANH MỤC</th>
                        <th>MÃ SẢN PHẨM</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>GIÁ SẢN PHẨM</th>
                        <th>ẢNH SẢN PHẨM</th>
                        <th>MÔ TẢ SẢN PHẨM</th>
                        <th>THAO TÁC</th>
                    </tr>
                    <?php
                        foreach($danhsachsp as $key => $sanpham) {
                            ?>
                                 <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><?= $sanpham['nameDanhmuc'] ?></td>
                                    <td><?= ($key+1) ?></td>
                                    <td><?= $sanpham['name'] ?></td>
                                    <td><?= $sanpham['price'] ?></td>
                                    <td><img style="width:150px; height:120px;" src="../upload/<?= $sanpham['img'] ?>" alt=""></td>
                                    <td style="text-align: justify;"><?= $sanpham['mota'] ?></td>
                                    <td>
                                        <a href="index.php?act=suasanpham&idsp=<?= $sanpham['id'] ?>" class="btn btn-success">Sửa</a>
                                        <a href="index.php?act=xoasanpham&idsp=<?= $sanpham['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')" class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                            <?php
                        }
                    ?>

                </table>
            </div>
            <div>
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="index.php?act=addsp" class="btn btn-primary">NHẬP THÊM</a>
            </div>
        </form>
    </div>
</div>
</div>