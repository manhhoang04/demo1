<?php
session_start();

include "../../model/pdo.php";
include "../../model/taikhoan.php";
checkRole();
if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangnhap':
            if (isset($_POST['btnsubmit'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $result = checkAccount($email, $password);
                if ($result) {
                    $_SESSION['user'] = $result;
                    header("location:../index.php");
                }
            }
            include "login.php";
            break;

        case 'dangki':
            if (isset($_POST['them']) && $_POST['them']) {
                $ten = $_POST['ten'];
                $email = $_POST['email'];
                $matkhau = $_POST['matkhau'];
                insertaccount($ten, $email, $matkhau);
                // Sau khi đăng ký thành công
                header("location: register.php?registered=success");

            }
            include "register.php";

            break;

        case "dangxuat":

            include "logout.php";
            break;


        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {

                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['matkhau'];
                } else {
                    $thongbao = "Email này không tồn tại !";
                }

            }

            include "forgotpassword.php";
            break;

        default: {
                include 'login.php';
                break;
            }
    }
} else {
    include 'login.php';
}

?>