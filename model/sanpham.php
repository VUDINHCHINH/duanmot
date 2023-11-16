<?php
 function insert_sanpham($tensp,$price,$hinh,$mota,$iddm){
    $sql = "INSERT INTO sanpham(name,price,img,mota,iddm) values('$tensp','$price','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}

function loadall_sanpham($kyw="",$iddm=0){
    $sql = "SELECT * FROM sanpham where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham =  pdo_query($sql);
    return $listsanpham;
}
?>