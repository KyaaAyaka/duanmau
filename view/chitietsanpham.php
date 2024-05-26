<main class="catalog mb boxcenter" style="margin-top:20px;">
    <div class="boxleft">
        <div class="mb">
            <?php
                extract($load_sanphamct);
            ?>
            <div class="box_title">CHI TIẾT SẢN PHẨM</div>
            <div class="box_content" style="display:flex !important;">
                <img style="width:450px;" src="upload/<?= $img ?>">
                <div style="margin-left: 50px;">
                    <div>
                        <h3>Tên Sản Phẩm:</h3>
                        <h3 style="font-weight: 400;"><?= $name ?></h3>
                    </div>
                    <div style="margin-top: 25px;">
                        <h3>Giá Sản Phẩm:</h3>
                        <h4 style="color:red; font-weight: 400;"><?= number_format($price, 0, ',', '.'); ?> VNĐ</h4>
                    </div>
                    <div style="margin-top: 15px; display:flex; align-items: center;">
                        <h3>Lượt xem: </h3>
                        <h4 style="color:blue; margin-left: 8px; margin-bottom: 6px !important"> <?= $luotxem ?></h4>
                    </div>
                    <form action="index.php?act=addtocart" class="form__group_add" method="post">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="hidden" name="name" value="<?= $name ?>">
                        <input type="hidden" name="price" value="<?= $price ?>">
                        <input type="hidden" name="img" value="<?= $img ?>">
                        <!-- <a class="add_cart" href="index.php?act=addTocart"></a> -->
                        <input style="margin-top: 30px;" type="submit" name="addtocart" class="add_cart" value="ADD TO CART">
                    </form>
                </div>
            </div>
        </div>

        <div class="mb" >
            <div class="box_title">MÔ TẢ</div>
            <p style="line-height: 30px; text-align:justify; width:100%;padding: 15px; border:1px solid #000; border-radius: 0 0 10px 10px;"><?= $mota ?></p>
        </div>


        <?php
            if(isset($_SESSION['hanh'])) {
                ?>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                    <script>
                        $(document).ready(function(){
                            $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?= $id ?>});
                        });
                    </script>
                    <div class="row" id="binhluan">
                        
                    </div>
                <?php
            } else {
                ?>
                    <div class="box_title">BÌNH LUẬN</div>
                    <div class="box_content2 product_portfolio binhluan" style="margin-bottom: 30px;">
                        <table class="table table-success table-striped">
                            <tr>
                                <th>STT</th>
                                <th>Nội dung</th>
                                <th>Người bình luận</th>
                                <th>Ngày bình luận</th>
                            </tr>
                            <?php
                                foreach ($danhsachbinhluan as $bl) {
                                    extract($bl);
                                    ?>
                                        <tr>
                                            <td><?= $id ?></td>
                                            <td><?= $noidung ?></td>
                                            <td><?= $user ?></td>
                                            <td><?= date("d/m/Y H:i:s", strtotime($ngaybinhluan)) ?></td>
                                        </tr>
                                    <?php
                                }
                            ?>
                        </table>
                    </div>
                    <div class="box_title" style="margin-bottom: 30px; height: 40px; font-size: 20px; border:1px solid #000; border-radius:4px;">
                        Vui lòng đăng nhập để viết bình luận
                    </div>
                <?php
            }
        ?>

        <div class=" mb">
            <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
            <div class="box_content">
                <ul class="ul__box">
                    <?php
                        foreach($spcungloai as $sanpham) {
                            extract($sanpham)
                            ?>
                                <li class="li_spcungloai" style="display: flex">
                                    <div class="div_imgcungloai" style="border: 1px solid #444;padding: 5px; margin: 10px 0; border-radius:5px;">
                                        <img width="100px" src="../tranvietanh_duanmau/upload/<?= $img ?>" alt="">
                                    </div>
                                    <div style="margin-top: 10px; margin-left: 20px;">
                                        <a href="index.php?act=sanphamct&idsp=<?= $id ?>"><?= $name ?></a>
                                        <div style="display: flex; margin-top: 5px;">
                                            <p>Giá:</p>
                                            <p style="color: red; margin-left: 5px;"><?= $price ?></p>
                                        </div>
                                    </div>
                                </li>
                            <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <?php
        include "boxright.php";
    ?>
</main>
<!-- BANNER 2 -->