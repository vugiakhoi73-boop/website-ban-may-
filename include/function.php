<?php
// Hàm tự động nạp Class
function loadClass($c) {
    $file = "classes/" . $c . ".php";
    if (file_exists($file)) {
        include_once $file;
    } else {
        $file_alt = __DIR__ . "/../classes/" . $c . ".php";
        if (file_exists($file_alt)) {
            include_once $file_alt;
        }
    }
}

// Hàm lấy tham số điều hướng (Sửa lỗi dòng 2 mode.php)
function getIndex() {
    $r = "home"; 
    if (isset($_GET['mod'])) {
        $r = $_GET['mod'];
    }
    return $r;
}

// Hàm lấy tham số hành động (Nếu web bạn có dùng)
function getP(($n) {
    $r = "";
    if (isset($_GET[$n])) {
        $r = $_GET[$n];
    }
    return $r;
}
?>
