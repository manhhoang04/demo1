<?php

 session_start();

 
 include "model/pdo.php";
 include "model/taikhoan.php";
 include "model/danhmuc.php";
 include "model/sanpham.php";

 $list_thinhhanh=loadall_sanpham_thinhhanh() ;
 $list_dm=loadall_danhmuc();
 $list_sp_danhsach=loadall_sanpham_dm($kyw="",$id_dm="");
 $list_sp_home=loadall_sanpham_home() ;
 $dstop10 = loadall_sanpham_top10();
 include "views/header.php"; 
 if(isset($_GET['act']) && ($_GET['act'] !="")){
    $act= $_GET['act'];
    switch($act){


      case 'sanpham':
         $list_dm = loadall_danhmuc();
     
         // Xác định id_dm và ten_dm
         $id_dm = isset($_GET['id_dm']) && !empty($_GET['id_dm']) ? $_GET['id_dm'] : 0;
         $ten_dm = load_ten_dm($id_dm);
     
         // Xác định kyw
         $kyw = isset($_GET['kyw']) && !empty($_GET['kyw']) ? $_GET['kyw'] : '';
     
         // Xác định trang hiện tại
         $cr_page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
     
         // Load dữ liệu sản phẩm cho trang hiện tại
         $limit = 9;
         $offset = ($cr_page - 1) * $limit;
         $dssp = loadall_sanpham_dm($kyw, $id_dm, $offset, $limit);
     
         // Tính tổng số trang
         $total = count(loadall_sanpham_dm($kyw, $id_dm));
         $num_pages = ceil($total / $limit);
     
         // Include view
         include 'views/sanpham/list.php';
         break;
     
     
      case "chitietsanpham":
         if(isset($_GET["id_sp"]) && $_GET["id_sp"] != ""){
         $id_sp= $_GET["id_sp"];
         $sanphamchitiet=sanpham_chitietsanpham($id_sp);
         loadone_sanpham_luotxem($id_sp);
         
         }
         include "views/sanpham/chitietsanpham.php";
      break;
         
    }
 }
 else{
 include "views/home.php";
 }
include "views/footer.php";



