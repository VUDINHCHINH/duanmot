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
  <h2 class="mb-4">Thêm Danh Mục</h2>

  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="productName">Mã Danh Mục:</label>
      <input type="text" class="form-control" id="productName" placeholder="auto number" name="maloai" disabled>
    </div>
    <div class="form-group">
      <label for="productName">Tên Danh Mục:</label>
      <input type="text" class="form-control" id="productName" placeholder="Nhập tên danh mục" name="tenloai" required>
    </div>
    <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm Sản Phẩm">
    <a href="index.php?act=listdm"><input class="btn btn-primary" class="mr20" type="button" value="DANH SÁCH"></a>
    <?php
    //    if(isset($thongbao) && ($thongbao!="")){
    //     echo $thongbao;
    //    }
    ?>
  </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
