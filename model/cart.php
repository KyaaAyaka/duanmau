<?php
    function viewcart($check) {
        // unset($_SESSION['mycart']);      
        $tong = 0;
        $i = 0;
        if($check == 1) {
            $theth = '<th>Thao tác</th>';
        } else {
            $theth = '';
        }
        ?>
            <tr style="border:1px solid #ccc; border-radius: 6px">
                <th>STT</th>
                <th>ẢNH SẢN PHẨM</th>
                <th>TÊN SẢN PHẨM</th>
                <th>GIÁ SẢN PHẨM</th>
                <th>SỐ LƯỢNG</th>
                <th>THÀNH TIỀN</th>
                <?= $theth ?>
            </tr>
        <?php

        foreach($_SESSION['mycart'] as $key => $cart) {
            $thanhtien = $cart[3] * $cart[4];
            $tong += $thanhtien;
            if($check == 1) {
                $thetd = '<td><a href="index.php?act=xoaspgiohang&idcart='.$i.'" class="btn btn-danger">Xóa</a></td>';
            } else {
                $thetd = '';
            }
            ?>
                <tr>
                    <td><?= $key+1 ?></td>
                    <td><a href="index.php?act=sanphamct&idsp=<?= $cart[0] ?>"><img style="width: 150px;" src="../../../tranvietanh_duanmau/upload/<?= $cart[2] ?>" alt=""></a></td>
                    <td><a href="index.php?act=sanphamct&idsp=<?= $cart[0] ?>"><?= $cart[1] ?></a></td>
                    <td><?= number_format($cart[3], 0, ',', '.'); ?></td>
                    <td><?= $cart[4] ?></td>
                    <td><?= $thanhtien ?></td>
                    <?= $thetd ?>
                </tr>
            <?php
            $i+=1;
        }
        ?>
        </table>
            <div class="header_admin" style="margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center;">
                <h2>Tổng Tiền Đơn Hàng:</h2>
                <div>
                    <h2><?= number_format($tong, 0, ',', '.'); ?> VNĐ</h2>
                </div>
            </div>
        <?php
        
    }

    function bill_chi_tiet($listbil) {
        // unset($_SESSION['mycart']);      
        $tong = 0;
        $i = 0;
        ?>
            <tr style="border:1px solid #ccc; border-radius: 6px">
                <th>STT</th>
                <th>ẢNH SẢN PHẨM</th>
                <th>TÊN SẢN PHẨM</th>
                <th>GIÁ SẢN PHẨM</th>
                <th>SỐ LƯỢNG</th>
                <th>THÀNH TIỀN</th>
            </tr>
        <?php

        foreach($listbil as $key => $cart) {
            $tong += $cart['thanhtien'];

            ?>
                <tr>
                    <td><?= $key+1 ?></td>
                    <td><a href="index.php?act=sanphamct&idsp=<?= $cart['id'] ?>"><img style="width: 150px;" src="../../../tranvietanh_duanmau/upload/<?= $cart['img'] ?>" alt=""></a></td>
                    <td><a href="index.php?act=sanphamct&idsp=<?= $cart['id'] ?>"><?= $cart['name'] ?></a></td>
                    <td><?= number_format($cart['price'], 0, ',', '.'); ?></td>
                    <td><?= $cart['soluong'] ?></td>
                    <td><?= $cart['thanhtien'] ?></td>
                </tr>
            <?php
            $i+=1;
        }
        ?>
        </table>
            <div class="header_admin" style="margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center;">
                <h2>Tổng Tiền Đơn Hàng:</h2>
                <div>
                    <h2><?= number_format($tong, 0, ',', '.'); ?> VNĐ</h2>
                </div>
            </div>
        <?php
        
    }


    function tongdonhang() {    
        $tong = 0;

        foreach($_SESSION['mycart'] as $key => $cart) {
            $thanhtien = $cart[3] * $cart[4];
            $tong += $thanhtien;
        }
        return $tong;
    }

    function insert_bill($iduser,$name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang) {
        $sql = "INSERT INTO `bill`(`iduser`,`bill_name`, `bill_email`, `bill_address`, `bill_tel`, `bill_pttt`, `ngaydathang`, `total`) 
                VALUES 
                ('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
        return pdo_execute_returnLastInsertId($sql);
    }

    function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill) {
        $sql = "INSERT INTO `cart`(`iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) 
            VALUES 
                ('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
        return pdo_execute($sql);
    }

    function loadone_bill($id) {
        $sql = "SELECT * FROM bill WHERE id = ?";
        $load_bill = pdo_query_one($sql,$id);
        return $load_bill;
    }

    function loadone_cart($idbill) {
        $sql = "SELECT * FROM cart WHERE idbill = ?";
        $load_bill_cart = pdo_query_one($sql,$idbill);
        return $load_bill_cart;
    }

    function loadall_thongke() {
        $sql = "SELECT danhmuc.id AS madm, danhmuc.name AS tendm, COUNT(sanpham.id) AS countSp, MIN(sanpham.price) AS minPrice, MAX(sanpham.price) AS maxPrice, AVG(sanpham.price) AS avgPrice";
        $sql .= " FROM sanpham LEFT JOIN danhmuc ON danhmuc.id = sanpham.iddm";
        $sql .= " GROUP BY danhmuc.id ORDER BY danhmuc.id DESC";
        $list_danhsach_thongke = pdo_query($sql);
        return $list_danhsach_thongke;
    }
?>