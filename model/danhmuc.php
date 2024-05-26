<?php
    function load_dm() {
        $sql = "SELECT * FROM danhmuc ORDER BY id desc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }

    function load_spdanhmuc($id) {
        if($id > 0) {
            $sql = "SELECT * FROM danhmuc WHERE id = '$id'";
            $result = pdo_query_one($sql);
            extract($result);
            return $name;
        } else {
            $id = "";
        }
    }
?>