<div class="banner">

</div>
</div>
<main>
        <!-- bắt đầu sản phẩm bán chạy -->
         <div class="sanphambanchay">
                <div class="sanphambanchay-title">
                    <h2># Sản phẩm bán chạy</h2>
                    <p>Top những sản phẩm được mua nhiều nhất</p>
                </div>
                <div class="sanphambanchay-product">
                        <div class="sanphambanchay-product-top">                          
                                <?php
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
                                       }
                                   
                                       if ($i >= 8) {
                                           break; // Dừng vòng lặp sau khi đã hiển thị 8 sản phẩm
                                       }
                                   }                    
                                ?>                          
                        </div>
                </div>
         </div>
        <!-- end sản phẩm bán chạy -->
         <div class="banner2"><img src="img/banner2.jpg" alt=""></div>

        <!-- bắt đầu sản phẩm mới về -->
        <div class="sanphammoive">
            <div class="sanphammoive-title">
                <h2># Sản phẩm mới về</h2>
                <p>Những sản phẩm mới nhất được shop nhập về phục vụ tín đồ</p>
            </div>
            <div class="sanphammoive-product">
                    <div class="sanphammoive-product-top">
                    <?php
                                   $i = 0;
                                   foreach ($sp_new as $sp) {
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
                                       }
                                   
                                       if ($i >= 8) {
                                           break; // Dừng vòng lặp sau khi đã hiển thị 8 sản phẩm
                                       }
                                   }                    
                                ?>                            
                    </div>

            </div>
     </div>
    </main>