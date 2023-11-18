<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .box_items {
            float: left; /* hoặc sử dụng display: inline-block; */
            margin-right: 10px; /* tùy chỉnh khoảng cách giữa các sản phẩm */
        }

        .clear {
            clear: both;
        }
    </style>
    <title>Document</title>
</head>
<body>
<?php
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "global.php";
$sp_banchay = loadall_sanpham_banchay();
$i = 0;
        foreach ($sp_banchay as $sp) {
            extract($sp);
            $hinh = $img_path . $img;
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
        
            // Xác định biến $mr dựa trên chỉ số $i
            $mr = ($i % 4 == 1 || $i % 4 == 0) ? "" : "mr";
        
            echo '<div class="box_items ' . $mr . '">
                    <img src="' . $hinh . '" alt="" width=200>
                    <div class="sub">
                        <h2>' . $name . '</h2>
                        <p>' . $price . '</p>
                    </div>
                    <div class="content-button">
                        <a href="' . $linksp . '"><button>Xem Chi Tiết</button></a>
                    </div>
                    </div>';
        
            $i += 1;
        
            // Kiểm tra khi nào bắt đầu hàng mới
            if ($i % 4 == 0 && $i < count($sp_banchay)) {
                echo '<div style="clear:both;"></div>'; // Đặt hàng mới nếu chưa hết sản phẩm
            }
        
            if ($i >= 8) {
                break; // Dừng vòng lặp sau khi đã hiển thị 8 sản phẩm
            }
        }
        
 ?>
</body>
</html>
