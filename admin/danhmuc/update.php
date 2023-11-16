<?php
  if(is_array($dm)){
    extract($dm);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Quản lý sản phẩm</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

</head>
<body>
<div class="container mt-5">
            <h2 class="mb-4">CẬP NHẬP LOẠI HÀNG HÓA</h2>
        <div class="row2 form_content ">
            <form action="index.php?act=updatedm" method="POST">
                <div class="form-group">
                    <label> Mã loại </label> <br>
                    <input type="text" class="form-control" name="maloai" placeholder="auto number" disabled>
                </div>
                <div class="form-group">
                    <label>Tên loại </label> <br>
                    <input type="text" class="form-control" id="productName" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name ;?>">
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id > 0)) echo $id ;?>">
                    <input class="btn btn-primary" type="submit" name="capnhat" value="CẬP NHẬT">
                    <input class="btn btn-primary" type="reset" value="NHẬP LẠI">

                    <a  href="index.php?act=lisdm"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
                </div>
                <?php
                    if(isset($thongbao) && ($thongbao!="")) echo $thongbao;
                ?>
            </form>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
