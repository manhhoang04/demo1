<?php
session_start();

if (isset($_SESSION["user"])) {

} else {
    header("location:dangnhap/index.php");
}

include "../../model/pdo.php";
include "../../model/danhmuc.php";
include "../../model/sanpham.php";
include "view/header.php";
include "view/boxleft.php";
include "view/topbar.php";
include "../../model/taikhoan.php";



if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

        // Thêm danh mục
        case "add_dm":
            if (isset($_POST['add_dm']) && $_POST['add_dm']) {
                $ten_dm = $_POST['ten_dm'];
                $mota_dm = $_POST['mota_dm'];
                $anh_dm = $_FILES["anh_dm"]["name"];
                $target_dir = "view/upload/";
                $target_file = $target_dir . basename($_FILES["anh_dm"]["name"]);
                if (move_uploaded_file($_FILES["anh_dm"]["tmp_name"], $target_file)) {

                } else {

                }
                insert_danhmuc($ten_dm, $mota_dm, $anh_dm);
                $message = "Danh mục đã được thêm thành công.";
            }

            include "view/danhmuc/add.php";
            break;

        // Danh sách danh mục
        case "list_dm":
            $list_dm = loadall_danhmuc();
            include "view/danhmuc/list.php";
            break;

        // Xóa tạm danh mục trong thùng rác
        case "xoa_dm_tam":
            if (isset($_GET['id_dm']) && $_GET['id_dm'] != "") {
                $id_dm = $_GET['id_dm'];
                xoa_tam_dm($id_dm);
                $message = "Danh mục đã được cho vào thùng rác.";
            }
            $list_dm = loadall_danhmuc();
            include "view/danhmuc/list.php";
            break;

        // Khôi phục danh mục trong thùng rác
        case "khoiphuc_dm_tam":
            if (isset($_GET['id_dm']) && $_GET['id_dm'] != "") {
                $id_dm = $_GET['id_dm'];
                khoi_phuc_dm($id_dm);
                $message = "Danh mục đã được khôi phục .";
            }
            $list_dm = loadall_danhmuc_thungrac();
            include "view/danhmuc/delete.php";
            break;

        // Xóa danh mục
        case "xoa_dm":
            if (isset($_GET['id_dm']) && $_GET['id_dm'] != "") {
                $id_dm = $_GET['id_dm'];
                delete_danhmuc($id_dm);
                $message = "Danh mục đã được xóa.";
            }
            $list_dm = loadall_danhmuc_thungrac();
            include "view/danhmuc/delete.php";
            break;

        // Sửa danh mục
        case 'sua_dm':
            if (isset($_GET['id_dm']) && ($_GET['id_dm'] > 0)) {
                $list_dm = loadone_danhmuc($_GET['id_dm']);
            }
            include "view/danhmuc/update.php";
            break;

        // Cập nhật danh mục
        case "update_dm":
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id_dm = $_POST['id_dm'];
                $ten_dm = $_POST['ten_dm'];
                $mota_dm = $_POST['mota_dm'];
                $anh_dm = $_FILES["anh_dm"]["name"];
                $target_dir = "view/upload/";
                $target_file = $target_dir . basename($_FILES["anh_dm"]["name"]);
                if (move_uploaded_file($_FILES["anh_dm"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                update_danhmuc($id_dm, $ten_dm, $mota_dm, $anh_dm);
                $message = "Danh mục đã được cập nhật .";

            }
            $list_dm = loadall_danhmuc();
            include "view/danhmuc/update.php";
            break;



        // Danh sách sản phẩm
        case "list_sp":
            // $list_sp=loadall_sanpham($kyw="",$iddm=0);
            include "view/sanpham/list.php";
            break;

        // Thêm sản phẩm
        case "add_sp":
            if (isset($_POST['them_moi_sp']) && ($_POST['them_moi_sp'])) {
                $ten_sp = $_POST['ten_sp'];
                $gia_goc = $_POST['gia_goc'];
                $mota_sp = $_POST['mota_sp'];
                $soluongtonkho = $_POST['soluongtonkho'];
                $id_dm = $_POST['id_dm'];
                $anh_sp = $_FILES["anh_sp"]["name"];
                $target_dir = "view/upload/";
                $target_file = $target_dir . basename($_FILES["anh_sp"]["name"]);
                if (move_uploaded_file($_FILES["anh_sp"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($ten_sp, $anh_sp, $gia_goc, $mota_sp, $soluongtonkho, $id_dm);
                $message = "Sản phẩm  đã được thêm thành công.";

            }
            $listdanhmuc = loadall_danhmuc();
            include "view/sanpham/add.php";
            break;

        // Sửa sản phẩm
        case 'sua_sp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {

                $sanpham = loadone_sanpham($_GET['id_sp']);
            }

            $list_dm = loadall_danhmuc();
            include "view/sanpham/update.php";
            break;

        // Cập nhật sản phẩm
        case 'update_sp':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id_sp = $_POST['id_sp'];
                $ten_sp = $_POST['ten_sp'];
                $gia_goc = $_POST['gia_goc'];
                $mota_sp = $_POST['mota_sp'];
                $soluongtonkho = $_POST['soluongtonkho'];
                $id_dm = $_POST['id_dm'];
                $anh_sp = $_FILES["anh_sp"]["name"];
                $target_dir = "view/upload/";
                $target_file = $target_dir . basename($_FILES["anh_sp"]["name"]);
                if (move_uploaded_file($_FILES["anh_sp"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }

                update_sanpham($id_sp, $ten_sp, $anh_sp, $gia_goc, $mota_sp, $soluongtonkho, $id_dm);
                $message = "Sản phẩm đã được cập nhật .";

            }
            $list_dm = loadall_danhmuc();
            $sanpham = loadall_sanpham();
            include "view/sanpham/update.php";
            break;

        // Danh sách sản phẩm
        case "danhsach_sp":
            $danhsach_sp = loadall_sanpham();
            include "view/sanpham/list.php";
            break;

        // Xóa sản phẩm
        case "xoa_sp":
            if (isset($_GET['id_sp']) && $_GET['id_sp'] != "") {
                $id_sp = $_GET['id_sp'];
                delete_sanpham($id_sp);
                $message = "Danh mục đã được xóa.";
            }
            $danhsach_sp = loadall_sanpham_rac();
            include "view/sanpham/delete.php";
            break;


        // Xóa sản phẩm trong thùng rác
        case "xoa_tam_sp":
            if (isset($_GET['id_sp']) && $_GET['id_sp'] != "") {
                $id_sp = $_GET['id_sp'];
                xoa_tam_sp($id_sp);
                $message = "Danh mục đã được cho vào thùng rác.";
            }
            $danhsach_sp = loadall_sanpham();
            include "view/sanpham/list.php";
            break;

        // Xóa sản phẩm
        case "delete_sp":
            $danhsach_sp = loadall_sanpham_rac();
            include "view/sanpham/delete.php";
            break;

        // Khôi phục sản phẩm trong thùng rác
        case "khoiphuc_sp":
            if (isset($_GET['id_sp']) && $_GET['id_sp'] != "") {
                $id_sp = $_GET['id_sp'];
                khoiphuc_sp($id_sp);
                $message = "Danh mục đã khôi phục .";
            }
            $danhsach_sp = loadall_sanpham_rac();
            include "view/sanpham/delete.php";
            break;


        // Danh sách tài khoản
        case "dskh":
            $listtaikhoan = loadall_taikhoan();
            include "view/taikhoan/list.php";
            break;

        // Thêm tài khoản
        case "them_tk":
            if (isset($_POST['them_tk']) && ($_POST['them_tk'])) {
                $ten = $_POST['ten'];
                $matkhau = $_POST['matkhau'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $sodienthoai = $_POST['sodienthoai'];
                $chucvu = $_POST['chucvu'];
                insert_taikhoan($ten, $matkhau, $email, $diachi, $sodienthoai, $chucvu);
                $message = "Thêm tài khoản thành công ";
            }
            include "view/taikhoan/add.php";
            break;

        // Xóa tạm tài khoản
        case "xoa_tam_tk":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                xoa_tam_tk($id);
                $message = "Danh mục đã được cho vào thùng rác.";
            }
            $listtaikhoan = loadall_taikhoan();
            include "view/taikhoan/list.php";
            break;

        // Khôi phục tài khoản
        case "khoiphuc_tk":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                khoiphuc_tk($id);
                $message = "Danh mục đã được cho vào thùng rác.";
            }
            $listtaikhoan = loadall_taikhoan_rac();
            include "view/taikhoan/delete.php";
            break;

        // Xóa tài khoản trong thùng rác
        case "delete_tk":
            $listtaikhoan = loadall_taikhoan_rac();
            include "view/taikhoan/delete.php";
            break;

        // xóa tài khoản
        case "xoa_tk":
            if (isset($_GET['id']) && $_GET['id'] != "") {
                $id = $_GET['id'];
                delete_taikhoan($id);
                $message = "Tài khoản đã được xóa.";
            }
            $listtaikhoan = loadall_taikhoan();
            include "view/taikhoan/list.php";
            break;

        // sửa tài khoản
        case 'suatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $listtaikhoan = loadone_taikhoan($id);
            }
            include "view/taikhoan/update.php";
            break;

        // Cập nhật tài khoản
        case "update_tk":
            if (isset($_POST['capnhap']) && $_POST['capnhap'] != "") {
                $id = $_POST['id'];
                $ten = $_POST['ten'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $sodienthoai = $_POST['sodienthoai'];
                $chucvu = $_POST['chucvu'];
                update_taikhoan($id, $ten, $email, $diachi, $sodienthoai, $chucvu);
                $message = "Tài khoản đã được cập nhật .";

            }
            $sql = "SELECT * FROM taikhoan order by id desc";
            $listtaikhoan = pdo_query($sql);
            include "view/taikhoan/list.php";
            break;

    }

}

include "view/footer.php";


