<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";

    $idpro = $_REQUEST['idpro'];
    $dsbl = loadall_binhluan($idpro);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="mb">
        <div class="box_title">BÌNH LUẬN</div>
        <div class="box_content2 product_portfolio binhluan">
            <table class="table table-success table-striped">
                <tr>
                    <th>STT</th>
                    <th>Nội dung</th>
                    <th>Người bình luận</th>
                    <th>Ngày bình luận</th>
                </tr>
                <?php
                    foreach ($dsbl as $bl) {
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

        <div class="mb" style="margin: 10px 0;">
            <div class="box_search">
                <form action="<?= $_SERVER['PHP_SELF']; ?>" style=" display:flex; justify-content: center; text-align: center;" method="POST">
                    <div style="display: flex;">
                        <input type="hidden" name="idpro" value="<?= $idpro ?>">
                        <input type="text" style="width: 450px; margin-right: 10px;" class="form-control" placeholder="Viết bình luận..." name="noidung">
                        <input type="submit" style="background-color: #ccc; border-radius:4px;" name="guibinhluan" value="Gửi bình luận">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['hanh']['id']; // lấy id 
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $ngaybinhluan = date("Y-m-d H:i:s");
            insert_binhluan($iduser,$idpro,$noidung,$ngaybinhluan);
            header('Location:'.$_SERVER['HTTP_REFERER']);
        }
    ?>
</body>

</html>