<div class="row2">
    <div class="row2 font_title">
        <h1>THỐNG KÊ SẢN PHẨM THEO LOẠI</h1>
    </div>
    <div class="row2 form_content" style="margin-top: 20px; border-radius: 6px;">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table class="table table-striped">
                    <tr>
                        <th>MÃ DANH MỤC</th>
                        <th>TÊN DANH MỤC</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>

                    <?php
                        foreach($listthongke as $thongke) {
                            extract($thongke);
                            ?>
                                <tr>
                                    <td><?= $madm ?></td>
                                    <td><?= $tendm ?></td>
                                    <td><?= $countSp ?></td>
                                    <td><?= $maxPrice ?></td>
                                    <td><?= $minPrice ?></td>
                                    <td><?= $avgPrice ?></td>
                                </tr>
                            <?php
                        }
                    ?>
                </table>
            </div>
            <div>
                <a href="index.php?act=bieudo" class="btn btn-primary">XEM BIỂU ĐỒ</a>
            </div>
        </form>
    </div>
</div>
</div>