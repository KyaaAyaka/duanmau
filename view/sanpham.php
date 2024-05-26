<main class="catalog mb boxcenter">
    <div class="boxleft">
        <div class="items">
            <?php
                foreach($load_sanpham as $sp) {
                    extract($sp);
                    ?>
                        <div class="box_items">
                            <div class="box_items_img">
                                <img style="padding: 10px;" src="upload/<?= $img ?>" alt="">
                                <div class="add" href="">
                                    <h2><a class="a__click" href="index.php?act=sanphamct&idsp=<?= $id ?>"><?= $name ?></a></h2>
                                    <h3><?= number_format($price, 0, ',', '.'); ?> VNĐ</h3>
                                    
                                    <form action="index.php?act=addtocart" method="post">
                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <input type="hidden" name="name" value="<?= $name ?>">
                                        <input type="hidden" name="price" value="<?= $price ?>">
                                        <input type="hidden" name="img" value="<?= $img ?>">
                                        <!-- <a class="add_cart" href="index.php?act=addTocart"></a> -->
                                        <input type="submit" name="addtocart" class="add_cart" value="ADD TO CART">
                                    </form>
                                </div>
                            </div>
                            <a class="item__prd item_name" href="index.php?act=sanphamct&idsp=<?= $id ?>"><?= $name ?></a>
                            <p class="price"><?= number_format($price, 0, ',', '.'); ?> VNĐ</p>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
    
    <?php
        include "boxright.php";
    ?>
</main>