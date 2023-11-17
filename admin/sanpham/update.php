<?php
    if (is_array($sanpham)) {
        extract($sanpham);
    }
    $hinhsp= "../upload/".$img;
    if (is_file($hinhsp)) {
      $hinhsp = "<img src= '" .$hinhsp."'width = '100px' height ='100px'>";
    }else{
      $hinhsp = "Loi";
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
  <h2 class="mb-4">Sửa Sản Phẩm</h2>

  <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="productName">Tên Sản Phẩm:</label>
      <input type="text" class="form-control" id="productName" name="tensp" placeholder="Nhập tên sản phẩm" value="<?=$name?>">
    </div>
    <div class="form-group">
        <label> Danh mục</label> <br>
        <select name="iddm" >
            <?php
               foreach($listdanhmuc as $key =>$value){
                if ($iddm == $value['id']) {
                  echo '<option value ="'.$value['id'].'"selected>'.$value['name'].'</option>';
                }else{
                  echo '<option value ="'.$value['id'].'">'.$value['name'].'</option>';
                }
              } 
            ?>
            
        </select>
    </div>
    <div class="form-group">
      <label for="productName">Hình Ảnh:</label>
      <input type="file" class="form-control" id="productName" name="hinh" placeholder="Nhập tên sản phẩm" value="<?= $hinhsp ?>">
    </div>
    <div class="form-group">
      <label for="productDescription">Mô tả:</label>
      <textarea name="mota" class="form-control" id="productDescription" cols="30" rows="10" value="<?=$mota?>"></textarea>
    </div>
    <div class="form-group">
      <label for="productPrice">Giá Sản Phẩm:</label>
      <input type="number" class="form-control" id="productPrice" name="giasp" placeholder="Nhập giá sản phẩm" value="<?=$price?>">
    </div>
    <div class="form-group">
        <input type="hidden" name="id" value="<?=$id?>">
        <input class="btn btn-primary" type="submit"name="capnhat" value="CẬP NHẬT">
        <input  class="btn btn-primary" type="reset" value="NHẬP LẠI">
        <a href="index.php?act=listsp"><input  class="btn btn-primary" type="button" value="DANH SÁCH"></a>
        <?php
          if(isset($thongbao)&&($thongbao != "")) echo $thongbao;
        ?>
      </div>        
</form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
