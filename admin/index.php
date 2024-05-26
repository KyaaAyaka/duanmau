<?php
    include "../model/pdo.php";
    include "../model/modeladmin.php";
    include "../model/cart.php";

    include "header.php";

    if(isset($_GET['act'])) {
        $act = $_GET['act'];
        switch($act) {
            case "adddm":
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tenloai = $_POST['tenloai'];
                    add_danhmucsanpham($tenloai);
                    $themThanhCong = "Thêm Danh Mục Thành Công";
                }

                include "danhmuc/add.php";
                break;
            case "listdanhmuc":
                $danhsachdanhmuc = loadall_danhmuc();
                include "danhmuc/listdanhmuc.php";
                break;
            case "xoadanhmuc":
                if(isset($_GET['iddm']) && ($_GET['iddm']) > 0) {
                    $iddm = $_GET['iddm'];
                    $xoadanhmuc = xoa_danhmuc($iddm);
                } else {
                    $iddm = "";
                }

                $danhsachdanhmuc = loadall_danhmuc();
                include "danhmuc/listdanhmuc.php";
                break;
            case "suadanhmuc":
                if(isset($_GET['iddm']) && ($_GET['iddm']) > 0) {
                    $iddm = $_GET['iddm'];
                    $suadanhmuc = sua_danhmuc($iddm);
                } else {
                    $iddm = "";
                }

                include "danhmuc/update.php";
                break;
            case "updateDanhmuc":
                if(isset($_POST['suadanhmuc']) && ($_POST['suadanhmuc'])) {
                    $tenloai = $_POST['tenloai'];
                    $iddm = $_POST['id'];
                    update_danhmuc($tenloai,$iddm);
                    header('location: index.php?act=listdanhmuc');
                }

                $danhsachdanhmuc = loadall_danhmuc();
                break;
            case "addsp":
                if(isset($_POST['themsanpham']) && ($_POST['themsanpham'])) {
                    $iddm = $_POST['iddm'];
                    $tensanpham = $_POST['tensanpham'];
                    $gia = $_POST['gia'];
                    $mota = $_POST['mota'];

                    $filename =  time().basename($_FILES['image']['name']);
                    $target = "../upload/".$filename;
                    move_uploaded_file($_FILES['image']['tmp_name'], $target);

                    add_sanphamsanpham($iddm,$tensanpham,$gia,$filename,$mota);
                    $themThanhCong = "Thêm Sản Phẩm Mới Thành Công";
                }

                $select_danhmuc = loadall_danhmuc();
                $danhsachsp = loadall_sanpham();
                include "sanpham/add.php";
                break;
            case "listsanpham":
                $danhsachsp = loadall_sanpham();
                include "sanpham/list.php";
                break;
            case "xoasanpham":
                if(isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                    $idsp = $_GET['idsp'];
                    xoa_sanpham($idsp);
                } else {
                    $idsp = "";
                }

                $select_danhmuc = loadall_danhmuc();
                $danhsachsp = loadall_sanpham();
                include "sanpham/list.php";
                break;
            case "suasanpham":
                if(isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                    $idsp = $_GET['idsp'];
                    $suasanpham = sua_sanpham($idsp);
                } else {
                    $idsp = "";
                }
                $select_danhmuc = loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case "updateSanpham":
                if(isset($_POST['suasanpham']) && ($_POST['suasanpham'])) {
                    $id = $_POST['id'];
                    $tensanpham = $_POST['tensanpham'];
                    $gia = $_POST['gia'];
                    $mota = $_POST['mota'];
                    $iddm = $_POST['iddm'];
                    
                    $filename = "";

                    if($_FILES['image']['name']) {
                        $filename =  time().basename($_FILES['image']['name']);
                        $target = "../upload/".$filename;
                        unlink("../upload/".$target);
                        if(!move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                            echo "Thành công";
                        }  
                    } 
                    update_sanpham($tensanpham,$gia,$filename,$mota,$iddm,$id);
                    header('location: index.php?act=listsanpham');
                }
                
                $select_danhmuc = loadall_danhmuc();
                $danhsachsp = loadall_sanpham();
                break;
            case "listkhachhang":
                $danhsachtaikhoan = select_all_taikhoan();
                include "taikhoan/listtaikhoan.php";
                break;
            case "suataikhoan":
                if(isset($_GET['idtk']) && ($_GET['idtk'] > 0)) {
                    $idtk = $_GET['idtk'];
                    $listsuataikhoan = sua_taikhoan($idtk);
                } else {
                    $idtk = "";
                }

                include "taikhoan/updatetaikhoan.php";
                break;
            case "updateTaikhoan":
                if(isset($_POST['capnhattaikhoan']) && ($_POST['capnhattaikhoan'])) {
                    $id = $_POST['id'];
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    update_taikhoankhachhang($id,$user,$email,$pass,$address,$tel);
                    header('location: index.php?act=listkhachhang');
                }
                break;
            case "xoataikhoan":
                if(isset($_GET['idtk']) && ($_GET['idtk'] > 0)) {
                    $idtk = $_GET['idtk'];
                    xoa_taikhoankhachhang($idtk);
                    header('location: index.php?act=listkhachhang');
                } else {
                    $idtk = "";
                }
                break;
            case "danhsachbinhluan":
                $danhsachbinhluan = selectall_binhluan();
                include "binhluan/listbinhluan.php";
                break;
            case "suabinhluan":
                if(isset($_GET['idbl']) && ($_GET['idbl'] > 0)) {
                    $idbl = $_GET['idbl'];
                    $suabinhluan = sua_binhluan($idbl);
                    include "binhluan/updatebinhluan.php";
                } else {
                    $idbl = "";
                }
                break;
            case "updateBinhluan":
                if(isset($_POST['suabinhluan']) && ($_POST['suabinhluan'])) {
                    $id = $_POST['id'];
                    $noidung = $_POST['noidung'];
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $ngaybinhluan = date("Y-m-d H:i:s");
                    update_binhluan($noidung,$ngaybinhluan,$id);
                    header('location: index.php?act=danhsachbinhluan');
                }
                break;
            case "xoabinhluan":
                if(isset($_GET['idbl']) && ($_GET['idbl'] > 0)) {
                    $idbl = $_GET['idbl'];
                    $suabinhluan = xoa_binhluan($idbl);
                    header('location: index.php?act=danhsachbinhluan');
                } else {
                    $idbl = "";
                }
                break;
            case "thongke":
                $listthongke = loadall_thongke();
                include "thongke/listthongke.php";
                break;
            case "bieudo":
                $listthongke = loadall_thongke();
                include "bieudo.php";
                break;
            default:
                include "./home.php";
                break;
        }
    } else {
        include "home.php";
    }
    include "footer.php";
?>
