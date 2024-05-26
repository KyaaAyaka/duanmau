<?php
    function loadall_sanpham() {
        $sql = "SELECT * FROM sanpham WHERE 1 order by id desc LIMIT 0,9";
        $result = pdo_query($sql);
        return $result;
    }

    function loadall_spbanchay() {
        $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY luotxem ASC LIMIT 0,10";
        $result = pdo_query($sql);
        return $result;
    }

    function load_sanphamct($idct) {
        $sql = "SELECT * FROM sanpham WHERE id = ".$idct;
        $load_sanphamct = pdo_query_one($sql);
        return $load_sanphamct;
    }
    
    function load_spcungloai($id, $iddm) {
        $sql = "SELECT * FROM sanpham WHERE iddm = '$iddm' AND id <> '$id'";
        $load_spcl = pdo_query($sql);
        return $load_spcl;
    }

    function search_sanpham($keySearch) {
        $sql = "SELECT * FROM sanpham WHERE 1 and name LIKE '%".$keySearch."%' order by id desc";
        $result = pdo_query($sql);
        return $result;
    }

    function loadall_sanphamdanhmuc($iddm) {
        $sql = "SELECT * FROM sanpham WHERE 1 and iddm = '$iddm'";
        $result = pdo_query($sql);
        return $result;
    }
?>