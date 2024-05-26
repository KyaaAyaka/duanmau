<?php
    // Xử lí Model Danh Mục Admin
    function loadall_danhmuc() {
        $sql = "SELECT * FROM danhmuc WHERE 1 ORDER BY id ASC";
        $result = pdo_query($sql);
        return $result;
    }
    function add_danhmucsanpham($name) {
        $sql = "INSERT INTO danhmuc (`name`) VALUES ('$name')";
        pdo_execute($sql);
    }

    function sua_danhmuc($id) {
        $sql = "SELECT * FROM danhmuc WHERE id = '$id'";
        $result = pdo_query_one($sql);
        return $result;
    }

    function update_danhmuc($name,$id) {
        $sql = "UPDATE `danhmuc` SET name = '".$name."' WHERE id = '".$id."'";
        pdo_execute($sql);
    }
    function xoa_danhmuc($id) {
        $sql = "DELETE FROM danhmuc WHERE id = '".$id."'";
        $result = pdo_query_one($sql);
        return $result;
    }

    // Xử lí Model Sản phẩm Admin
    function loadall_sanpham() {
        $sql = "SELECT 
                    sanpham.id,
                    sanpham.name,
                    sanpham.price,
                    sanpham.img,
                    sanpham.mota,
                    sanpham.iddm,
                    danhmuc.id AS idDanhmuc,
                    danhmuc.name AS nameDanhmuc
                FROM 
                    sanpham 
                INNER JOIN 
                    danhmuc ON sanpham.iddm = danhmuc.id;
                ";
        $result = pdo_query($sql);
        return $result;
    }
    function add_sanphamsanpham($iddm,$tensanpham,$gia,$image,$mota) {
        $sql = "INSERT INTO `sanpham`(`name`, `price`, `img`, `mota`,`iddm`) 
            VALUES 
                ('".$tensanpham."','".$gia."','".$image."','".$mota."','".$iddm."')";
        pdo_execute($sql);
    }

    function sua_sanpham($id) {
        $sql = "SELECT * FROM sanpham WHERE id =".$id;
        $result = pdo_query_one($sql);
        return $result;
    }

    function update_sanpham($name,$price,$filename,$mota,$iddm,$id) {
        
        if($filename != "") {
            $sql = "UPDATE sanpham SET name='".$name."',price='".$price."',img='".$filename."',mota='".$mota."',iddm='".$iddm."' WHERE id =".$id;
        } else {
            $sql = "UPDATE sanpham SET name='".$name."',price='".$price."',mota='".$mota."',iddm='".$iddm."' WHERE id =".$id;
        }
        pdo_execute($sql);
        
    }
    function xoa_sanpham($id) {
        $sql = "DELETE FROM sanpham WHERE id = '".$id."'";
        $result = pdo_query_one($sql);
        return $result;
    }


    // Xử lí Model Tài khoản khách hàng Admin
    function select_all_taikhoan() {
        $sql = "SELECT * FROM taikhoan WHERE 1 ORDER BY id ASC";
        $result = pdo_query($sql);
        return $result;
    }

    function sua_taikhoan($id) {
        $sql = "SELECT * FROM taikhoan WHERE id =".$id;
        $result = pdo_query_one($sql);
        return $result;
    }

    function update_taikhoankhachhang($id,$user,$email,$pass,$address,$tel) {
        $sql = "UPDATE taikhoan SET user='".$user."',email='".$email."',pass='".$pass."',address='".$address."',tel='".$tel."' WHERE id = ".$id;
        pdo_execute($sql);
    }

    function xoa_taikhoankhachhang($id) {
        $sql = "DELETE FROM taikhoan WHERE id = ".$id;
        pdo_execute($sql);
    }

    
    // Xử lí Model Bình luận Admin

    function selectall_binhluan() {
        $sql = "SELECT 
                    binhluan.id,
                    binhluan.noidung,
                    binhluan.iduser,
                    binhluan.idpro,
                    binhluan.ngaybinhluan,
                    taikhoan.id AS idTaikhoan,
                    taikhoan.user AS userTaikhoan,
                    sanpham.id AS idSanpham,
                    sanpham.name AS nameSanpham
                FROM
                    binhluan
                INNER JOIN
                    taikhoan ON binhluan.iduser = taikhoan.id
                INNER JOIN
                    sanpham ON binhluan.idpro = sanpham.id;
        ";
        $result = pdo_query($sql);
        return $result;
    }

    function sua_binhluan($id) {
        $sql = "SELECT * FROM binhluan WHERE id = ".$id;
        $result = pdo_query_one($sql);
        return $result;
    }

    function update_binhluan($noidung,$ngaybinhluan,$id) {
        $sql = "UPDATE binhluan SET noidung = '".$noidung."', ngaybinhluan = '".$ngaybinhluan."' WHERE id = ".$id;
        pdo_execute($sql);
    }

    function xoa_binhluan($id) {
        $sql = "DELETE FROM binhluan WHERE id = ".$id;
        $result = pdo_query_one($sql);
        return $result;
    }
?>