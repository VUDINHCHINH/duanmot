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
function delete_sanpham(){
    $sql = "DELETE FROM sanpham where id=".$_GET['id'];
    pdo_execute($sql);
}

function loadone_sanpham($id){
    $sql = "SELECT * from sanpham where id=".$id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
    if ($hinh!=""){
        $sql = "UPDATE `sanpham` SET `name` = '{$tensp}', `price` ='{$giasp}',`mota`='{$mota}'
        ,`img`='{$hinh}',`iddm` ='{$iddm}' where `sanpham`.`id`=$id";
    }else{
        $sql = "UPDATE `sanpham` SET `name` = '{$tensp}', `price` ='{$giasp}',`mota`='{$mota}'
        ,`img`='{$hinh}',`iddm` ='{$iddm}' where `sanpham`.`id`=$id";
    }
    pdo_execute($sql);
}
function load_ten_dm($iddm){
    if($iddm>0){
    $sql = "SELECT * from danhmuc where id=".$iddm;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $name;
    }else{
        return "";
    }
}
function loadall_sanpham_banchay(){
    $sql = "SELECT * FROM sanpham where 1 order by luotxem desc limit 0,8";
    $listsanpham =  pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_new(){
    $sql = "SELECT * FROM sanpham where 1 order by id desc limit 0,8";
    $listsanpham =  pdo_query($sql);
    return $listsanpham;
}
function load_sanpham_cungloai($id,$iddm){
    $sql = "SELECT * from sanpham where iddm=".$iddm." AND id <>".$id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
?>