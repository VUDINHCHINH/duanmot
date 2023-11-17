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
  <h2 class="mb-4">Thêm Sản Phẩm</h2>

  <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="productName">Tên Sản Phẩm:</label>
      <input type="text" class="form-control" id="productName" name="tensp" placeholder="Nhập tên sản phẩm" required>
    </div>
    <div class="form-group">
        <label> Danh mục</label> <br>
        <select name="iddm" >
            <?php
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$name.'</option>';
                }
            ?>
            
        </select>
    </div>
    <div class="form-group">
      <label for="productName">Hình Ảnh:</label>
      <input type="file" class="form-control" id="productName" name="hinh" placeholder="Nhập tên sản phẩm" required>
    </div>
    <div class="form-group">
      <label for="productDescription">Mô tả:</label>
      <textarea class="form-control" id="productDescription" rows="3" name="mota" placeholder="Nhập mô tả sản phẩm" required></textarea>
    </div>
    <div class="form-group">
      <label for="productPrice">Giá Sản Phẩm:</label>
      <input type="number" class="form-control" id="productPrice" name="giasp" placeholder="Nhập giá sản phẩm" required>
    </div>
    <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm Sản Phẩm">
    <a href="index.php?act=listsp"><input class="btn btn-primary" class="mr20" type="button" value="DANH SÁCH"></a>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
