<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row2 form_content" style="margin-top: 20px; border-radius: 6px;">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table class="table table-striped">
                    <tr>
                        <th></th>
                        <th>ID BÌNH LUẬN</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>NGƯỜI DÙNG</th>
                        <th>BÌNH LUẬN</th>
                        <th>NGÀY BÌNH LUẬN</th>
                        <th>THAO TÁC</th>
                    </tr>
                    <?php
                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        $ngayupdate = date("Y-m-d H:i:s");
                        foreach ($danhsachbinhluan as $binhluan) {
                            extract($binhluan);
                            ?>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><?= $id ?></td>
                                    <td><?= $nameSanpham ?></td>
                                    <td><?= $userTaikhoan ?></td>
                                    <td><?= $noidung ?></td>
                                    <td><?= $ngaybinhluan ?></td>
                                    <td>
                                        <a href="index.php?act=suabinhluan&idbl=<?= $id ?>" class="btn btn-success">Sửa</a> 
                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này không?')" href="index.php?act=xoabinhluan&idbl=<?= $id ?>" class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                            <?php
                        }
                    ?>

                </table>
            </div>
            <div>
                <a href="" class="btn btn-success">CHỌN TẤT CẢ</a>
                <a href="" class="btn btn-danger">BỎ CHỌN TẤT CẢ</a>
            </div>
        </form>
    </div>
</div>
</div>