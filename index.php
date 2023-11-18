<?php
 include "model/pdo.php";
 include "model/danhmuc.php";
 include "model/sanpham.php";

 include "global.php";
 include "view/header.php";

 $dsdm = loadall_danhmuc();
 $sp_banchay = loadall_sanpham_banchay();
 $sp_new = loadall_sanpham_new();
 if((isset($_GET['act'])) && ($_GET['act'] !="")){
    $act = $_GET['act'];
   switch ($act) {
        case 'sanphamct':
            if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);

                extract($onesp);
                $sp_cung_loai=load_sanpham_cungloai($id,$iddm);
                include "view/sanphamct.php";
            }else {
                include "view/home.php";
            }
        break;
        case 'sanpham':
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                $kyw = $_POST['kyw'];                       
            } else{
                $kyw = "";
            }
            if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                $iddm = $_GET['iddm'];
            }else {
                $iddm = 0;
            }
            $dssp=loadall_sanpham($kyw,$iddm);
            $tendm=load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
     
    default:
        include "view/home.php";
        break;
   }
}else{
  include "view/home.php";
}
include "view/footer.php";

?>