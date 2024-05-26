<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH TÀI KHOẢN KHÁCH HÀNG</h1>
    </div>
    <div class="row2 form_content" style="margin-top: 20px; border-radius: 6px;">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table class="table table-striped">
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>EMAIL</th>
                        <th>TÊN TÀI KHOẢN</th>
                        <th>ĐỊA CHỈ</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                        <th>VAI TRÒ</th>
                        <th>THAO TÁC</th>
                    </tr>
                    <?php
                        foreach($danhsachtaikhoan as $taikhoan) {
                            extract($taikhoan);
                            ?>
                                 <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><?= $id ?></td>
                                    <td><?= $email ?></td>
                                    <td><?= $user ?></td>
                                    <td><?= $address ?></td>
                                    <td><?= $tel ?></td>
                                    <td><?= $role ?></td>
                                    <td>
                                        <a href="index.php?act=suataikhoan&idtk=<?= $id ?>" class="btn btn-success">Sửa</a>
                                        <a href="index.php?act=xoataikhoan&idtk=<?= $id ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa tài khoản này không?')" class="btn btn-danger">Xóa</a>
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
            </div>
        </form>
    </div>
</div>
</div>