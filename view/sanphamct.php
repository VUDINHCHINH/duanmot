<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/ionicons@5.5.1/dist/css/ionicons.min.css">
    <style>
        .tark{
            background-color: #D9D9D9;
            height: 90px;
            color: black;
            margin-top: 80px;
        }
        .tark-h2{
            padding-top: 30px;
            padding-left: 10px;
            color: rgb(57, 59, 60);
        }
        /* phần size */
                form {
            display: flex;
        }

        label {
            margin-right: 10px;
            display: flex;
            align-items: center;
        }

        input[type="radio"] {
            display: none;
        }

        span {
            margin-left: 5px;
        }

        input[type="radio"]:checked+span {
            font-weight: bold;
            color: #141010; /* Màu sắc khi chọn, bạn có thể thay đổi */
            border: 1px solid black;
        }
        /* end size */
        /* cộng trù sp */
        .product {
        display: flex;
        align-items: center;
        }

        input {
            width: 40px;
            text-align: center;
        }

        button {
            padding: 5px 10px;
            cursor: pointer;
        }
        /* end cộng trù */
        .sanphamct{
            margin-top: 50px;
            margin-left: 50px;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        .sanphamct-img img{
            height: 400px;
            width: 620px;
        }
        .sanphamct-text h2{
            font-size: 34px;
        }
        .price{
            color: red;
            margin-bottom: 30px;
            font-size: 30px;
        }
        .form-size{
            margin-bottom: 30px;
            font-size: 20px;
        }
        .form-size form p{
            margin-right: 20px;
        }
        #quantity{
            height: 26px;
        }
        .minus-btn{
            width: 50px;
        }
        .plus-btn{
            width: 50px;
        }
        .congtrusp{
            margin-bottom: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        .themgiohang-btn{
            background-color: red;
            border: 1px solid red;
            border-radius: 10px;
            color: white;
            width: 190px;
            height: 40px;
        }
        .themgiohang-btn:hover{
            background-color: rgb(184, 36, 26);
        }
        .muangay{
            border-radius: 10px;
            width: 550px;
            background-color: red;
            border: 1px solid red;
            color: white;
            margin-top: 20px;
        }
        .muangay:hover{
            background-color: rgb(184, 36, 26);
        }
        .form-blsp{
            border: 1px solid black;
            margin-top: 100px;
            margin-left: 20px;
            height: 400px;
            width: 1440px;
            border-radius: 20px;
        }
        .form-blsp h2{
            padding: 10px 0 0 20px;
        }
        .form-blsp form{
            padding: 320px 0 0 20px;
        }
        .form-blsp-text{
            width: 200px;
            height: 20px;
        }
        .form-blsp-btn{
            width: 80px;
        }
        .sanphamcungloai{
            text-align: center;
        }
        .sanphamcungloai-title{
            text-align: center;
            padding-bottom: 50px;
            margin-top: 50px;
            font-size: 30px;
            color: #9d8282;
        }
        .sanphamcungloai-product{
            width: 90%;
            margin-left: 80px;
        }
        .sanphamcungloai-product-top{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 20px;
            padding-bottom: 20px;
        }
        .mota-spct h2{
            margin-top: 20px;
        }
        .mota-spct p{
            font-size: 20px;
            padding-top: 20px;
        }
        .mota-spct{
            margin-left: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        
    <main>
    <?php
    extract($onesp);
    ?>
    <div class="tark">
                <h2 class="tark-h2">CHI TIẾT SẢN PHẨM</h2>
            </div>
    <div class="sanphamct">
        <div class="sanphamct-img">
            <?php 
            $img = $img_path.$img;
            ?>
            <img src="<?= $img ?>" alt="">
        </div>
        <div class="sanphamct-text">
            <h2><?= $mota ?></h2>
            <div class="line"></div>
            <p class="price"><?= $price ?> VND</p>
            <div class="form-size">
                <form>
                    <p>SIZE</p>
                    <label>
                        <input type="radio" name="size" value="36">
                        <span>36</span>
                    </label>
            
                    <label>
                        <input type="radio" name="size" value="37">
                        <span>37</span>
                    </label>
            
                    <label>
                        <input type="radio" name="size" value="38">
                        <span>38</span>
                    </label>
            
                    <label>
                        <input type="radio" name="size" value="39">
                        <span>39</span>
                    </label>
                </form>
            </div>
            <div class="congtrusp">
                <div class="product">
                    <button class="minus-btn" onclick="decreaseQuantity()">-</button>
                    <input type="text" id="quantity" value="1">
                    <button class="plus-btn" onclick="increaseQuantity()">+</button>
                </div>
                <div class="themgiohang">
                    <a href="#"><button class="themgiohang-btn">Thêm vào giỏ hàng</button></a>
                </div>
            </div>
            <a href="#"><button class="muangay"><h1>Mua ngay</h1><p>gọi điện xác nhận và giao hàng tận nơi</p></button></a>
        </div>
    </div>
    <!-- end spct -->
    <div class="mota-spct">
        <h2>Mô tả :</h2>
        <p><?= $mota ?></p>
    </div>
    <!-- start bình luận sp -->
    <div class="form-blsp">
        <h2>Form bình luận sản phẩm</h2>
        <form action="">
           <input type="text" class="form-blsp-text" name="">
           <input type="button" class="form-blsp-btn" name="guibinhluan" value="GỬI">
        </form>
    </div>
    <!-- end bình luận sp -->
    <!-- start sản phẩm cùng loại -->
    <div class="sanphamcungloai">
        <div class="sanphamcungloai-title">
            <h2>SẢN PHẨM CÙNG LOẠI</h2>
        </div>
        <div class="sanphamcungloai-product">
                <div class="sanphamcungloai-product-top">
                <?php
                    $i = 0;
                    foreach ($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
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
                        if ($i >= 8) {
                            break; // Dừng vòng lặp sau khi đã hiển thị 8 sản phẩm
                        }
                    }                    
                ?>            
            </div>    
        </div>
 </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
    function increaseQuantity() {
        var quantityInput = document.getElementById("quantity");
        var currentQuantity = parseInt(quantityInput.value, 10);
        quantityInput.value = currentQuantity + 1;
    }

    function decreaseQuantity() {
        var quantityInput = document.getElementById("quantity");
        var currentQuantity = parseInt(quantityInput.value, 10);
        
        // Ensure quantity is not negative
        if (currentQuantity > 1) {
            quantityInput.value = currentQuantity - 1;
        }
    }

</script>
</body>
</html>