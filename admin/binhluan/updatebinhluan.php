<?php
    if(is_array($suabinhluan)) {
        extract($suabinhluan);
    }

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $ngayupdate = date("Y-m-d H:i:s");
?>

<div class="row2">
    <div class="row2 font_title">
        <h1>SỬA BÌNH LUẬN KHÁCH HÀNG</h1>
    </div>
    <div class="row2 form_content" style="border: 1px solid #ccc; border-radius: 8px; margin-top: 20px; padding: 20px;">
        <form action="index.php?act=updateBinhluan" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10">
                <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">SỬA BÌNH LUẬN KHÁCH HÀNG</label> <br>
            </div>
            <div class="row2 mb10 form_content_container">
                <input type="hidden" value="<?= $id ?>" name="id">
            </div>
            <div class="row2 mb10 form_content_container">
                <label style="color:#000; text-transform: uppercase; margin-bottom: 20px;">Nội dung</label> <br>
                <input type="text" value="<?= $noidung ?>" class="form-control" style="height: 40px;" name="noidung" placeholder="Nhập nội dung bình luận">
            </div>
            <div class="row2 mb10">
                <input type="hidden" value="<?= $ngaybinhluan ?>" class="form-control" style="height: 40px;" name="date">
            </div>
            <div>
                <input class="mr20" type="submit" name="suabinhluan" value="SỬA BÌNH LUẬN">
                <input class="mr20" type="reset" value="NHẬP LẠI">            
            </div>
        </form>
    </div>
</div>