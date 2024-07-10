<?php

function insert_sanpham($ten_sp, $anh_sp, $gia_goc, $mota_sp, $soluongtonkho, $id_dm){
    $sql = "INSERT INTO sanpham (ten_sp, anh_sp, gia_goc, mota_sp, soluongtonkho, id_dm) 
            VALUES ('$ten_sp', '$anh_sp', '$gia_goc', '$mota_sp','$soluongtonkho', '$id_dm')";
    pdo_execute($sql);
}


function loadall_sanpham(){
    $sql= "SELECT * FROM sanpham WHERE trangthai= 0 order by id_sp desc";
    $listsanpham= pdo_query($sql);
    return  $listsanpham;
}

function sanpham_chitietsanpham($id_sp){
    $sql= "SELECT sanpham.id_sp,sanpham.ten_sp,sanpham.anh_sp, sanpham.gia_goc,sanpham.mota_sp, sanpham.soluongtonkho,sanpham.luotxem,sanpham.luotmua, chitietsanpham.id_spct,chitietsanpham.gia_khuyen_mai, chitietsanpham.anh, chitietsanpham.thuong_hieu,chitietsanpham.tinh_nang_ky_thuat,chitietsanpham.khuyen_mai,chitietsanpham.mau_sac,chitietsanpham.bo_nho
    FROM sanpham
    LEFT JOIN chitietsanpham ON sanpham.id_sp = chitietsanpham.id_sp
    WHERE  sanpham.id_sp=".$id_sp;
       $sanpham_chitietsanpham= pdo_query_one($sql);
       return $sanpham_chitietsanpham;
}

function delete_sanpham($id_sp){
    $sql= "delete from sanpham where id_sp=".$id_sp;
    pdo_execute($sql);
}

function them_sp_chitiet($gia_khuyen_mai,$anh, $thuong_hieu, $tinh_nang_ky_thuat, $khuyen_mai, $mau_sac, $bo_nho, $id_sp){
    $sql= " INSERT INTO chitietsanpham ( gia_khuyen_mai, anh, thuong_hieu, tinh_nang_ky_thuat, khuyen_mai, mau_sac, bo_nho,id_sp) 
            VALUES ('$gia_khuyen_mai', '$anh', '$thuong_hieu', '$tinh_nang_ky_thuat', '$khuyen_mai', '$mau_sac', '$bo_nho', '$id_sp')
    ";
        pdo_execute($sql);
}
function  xoa_tam_sp($id_sp){
    $sql= "UPDATE sanpham SET trangthai= 1 WHERE id_sp=".$id_sp;
    pdo_execute($sql);
}
function loadall_sanpham_rac(){
    $sql= "SELECT * FROM sanpham WHERE trangthai= 1 order by id_sp desc";
    $listsanpham= pdo_query($sql);
    return  $listsanpham;
}
function  khoiphuc_sp($id_sp){
    $sql= "UPDATE sanpham SET trangthai= 0 WHERE id_sp=".$id_sp;
    pdo_execute($sql);
}

function loadall_sanpham_home(){
    $sql=" SELECT sanpham.id_sp,sanpham.ten_sp,sanpham.anh_sp, sanpham.gia_goc,sanpham.mota_sp, sanpham.soluongtonkho,sanpham.luotxem,sanpham.luotmua, chitietsanpham.id_spct,chitietsanpham.gia_khuyen_mai, chitietsanpham.anh, chitietsanpham.thuong_hieu,chitietsanpham.tinh_nang_ky_thuat,chitietsanpham.khuyen_mai,chitietsanpham.mau_sac,chitietsanpham.bo_nho
    FROM sanpham
    LEFT JOIN chitietsanpham ON sanpham.id_sp = chitietsanpham.id_sp
    where 1 order by id_sp desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}


function count_sanpham(){
    $sql= "SELECT COUNT(*) as total  FROM sanpham WHERE trangthai = 0";
    $soluong= pdo_query($sql);
    return $soluong;
}
function loadall_sanpham_dm($kyw = "", $id_dm = 0, $offset = 0, $limit = 16) {
    $sql = "SELECT sanpham.id_sp, sanpham.ten_sp, sanpham.anh_sp, sanpham.gia_goc, sanpham.mota_sp, sanpham.soluongtonkho, sanpham.luotxem, sanpham.luotmua, chitietsanpham.id_spct, chitietsanpham.gia_khuyen_mai, chitietsanpham.anh, chitietsanpham.thuong_hieu, chitietsanpham.tinh_nang_ky_thuat, chitietsanpham.khuyen_mai, chitietsanpham.mau_sac, chitietsanpham.bo_nho
    FROM sanpham
    LEFT JOIN chitietsanpham ON sanpham.id_sp = chitietsanpham.id_sp
    WHERE trangthai = 0 
    ";
    if ($kyw != "") {
        $sql .= " AND ten_sp LIKE '%" . $kyw . "%'";
    }
    if ($id_dm > 0) {
        $sql .= " AND id_dm ='" . $id_dm . "'";
    }
    $sql .= " ORDER BY id_sp DESC LIMIT $offset, $limit";

    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}




function loadall_sanpham_top10(){
    $sql="SELECT sanpham.id_sp,sanpham.ten_sp,sanpham.anh_sp, sanpham.gia_goc,sanpham.mota_sp, sanpham.soluongtonkho,sanpham.luotxem,sanpham.luotmua, chitietsanpham.id_spct,chitietsanpham.gia_khuyen_mai, chitietsanpham.anh, chitietsanpham.thuong_hieu,chitietsanpham.tinh_nang_ky_thuat,chitietsanpham.khuyen_mai,chitietsanpham.mau_sac,chitietsanpham.bo_nho
    FROM sanpham
    LEFT JOIN chitietsanpham ON sanpham.id_sp = chitietsanpham.id_sp
     where 1 order by luotxem desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function load_sanpham_cungloai($id_dm){
    $sql = "SELECT * from sanpham where id_dm =".$id_dm;
    $result = pdo_query($sql);
    return $result;
}

function loadone_sanpham_luotxem($id_sp){
    $sql= "UPDATE sanpham SET luotxem= luotxem + 1 WHERE id_sp=".$id_sp;
    pdo_execute($sql);
}

function loadall_sanpham_thinhhanh(){
    $sql="SELECT * FROM  sanpham where 1 order by luotmua desc limit 0,5";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function update_sanpham($id_sp, $ten_sp, $anh_sp, $gia_goc, $mota_sp, $soluongtonkho, $id_dm)

{
    if ($anh_sp != "") {
        $sql = "UPDATE sanpham SET id_dm='" . $id_dm . "', ten_sp='" . $ten_sp . "', gia_goc='" . $gia_goc . "', mota_sp='" . $mota_sp . "',soluongtonkho='" . $soluongtonkho . "', anh_sp='" . $anh_sp . "' WHERE id_sp=" . $id_sp;
    } else {
        $sql = "UPDATE sanpham SET id_dm='" . $id_dm . "', ten_sp='" . $ten_sp . "', gia_goc='" . $gia_goc . "', mota_sp='" . $mota_sp . "', soluongtonkho='" . $soluongtonkho . "'  WHERE id_sp=" . $id_sp;
    }

    pdo_execute($sql);
}

function loadone_sanpham($id_sp){
    $sql= "SELECT * FROM sanpham WHERE id_sp=".$id_sp;
    $sp= pdo_query_one($sql);
    return $sp;
}

?>

