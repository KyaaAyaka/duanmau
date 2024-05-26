<?php
    function loadall_binhluan($idsp) {
        $sql = "SELECT
                binhluan.id,
                binhluan.noidung,
                binhluan.iduser,
                binhluan.idpro,
                binhluan.ngaybinhluan,
                taikhoan.id,
                taikhoan.user
            FROM 
                binhluan
            INNER JOIN
                taikhoan ON binhluan.iduser = taikhoan.id
            INNER JOIN
                sanpham ON binhluan.idpro = sanpham.id
            WHERE 
                sanpham.id = $idsp
        ";

        $result = pdo_query($sql);
        return $result;
    }

    function insert_binhluan($iduser,$idpro,$noidung,$date) {
        // date_default_timezone_set('Asia/Ho_Chi_Minh');
        // $date = date("Y-m-d H:i:s");
        $sql = "INSERT INTO binhluan
                    (noidung, iduser, idpro, ngaybinhluan) 
                VALUES 
                    ('$noidung','$iduser','$idpro','$date');
        ";
        pdo_execute($sql);
    }
?>