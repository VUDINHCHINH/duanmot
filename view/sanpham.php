<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/ionicons@5.5.1/dist/css/ionicons.min.css">
    <style>
        .box_items{
            width: 240px;
            margin-top: 20px;
        }
        .box_items img{
            width: 220px;
        }
        .sanphambanchay{
            margin-top: 80px;
        }
        .boxleft-bottom img{
            margin-top: 50px;
            height: 1120px;
            width: 360px;
            border-radius: 20px;
            border: 4px solid #D9D9D9;
            /* object-fit: cover;  */
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="boxcenter">
        <main class="mb cata">
            <div class="boxleft">
                <div class="boxleft-top">
                <div class="mb">
                    <div class="title"><h4>DANH MỤC SẢN PHẨM</h4></div>
                </div>
                <div class="box_content2 product_portfolio">
                    <ul>
                        <?php
                            foreach ($dsdm as $dm) {
                                extract($dm);
                                $linkdm = "index.php?act=sanpham&iddm=".$id;
                                echo '<li>       
                                        <a href="'.$linkdm.'">'.$name.'</a>                        
                                        <a href="'.$linkdm.'">'.$name.'</a>
                                    </li>';                              
                            }
                        ?>
                    </ul>
                    <br>
                    <div class="box_search">
                        <form action="index.php?act=sanpham" method="POST">
                            <input type="text" name="kyw" placeholder="Từ khóa tìm kiếm">
                            <input type="submit" name="timkiem" value="TÌM KIẾM">
                        </form>
                     </div>                    
                </div>
                </div>

                <div class="boxleft-bottom">
                <img src="img/double.jpg" alt="" width="250">
                </div>
            </div>      
<div class="boxright">
<main>
<div class="sanphambanchay">
        <div class="sanphamcungloai-product">
        <div class="sanphamcungloai-product-top">
    <?php
            $i = 0;
            foreach ($dssp as $dssp) {
                extract($dssp);
                $hinh = $img_path.$img;
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
                if ($i >= 30) {
                    break; // Dừng vòng lặp sau khi đã hiển thị n sản phẩm
                }
            }                    
    ?>                                
            </div>
            </div>
        </div>
</div>
</main>
        
    </div> 
    </div>    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>\
</body>
</html>