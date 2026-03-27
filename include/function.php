<?php
function loadClass($c) {
    // Sử dụng đường dẫn tương đối để an toàn hơn
    $file = "classes/" . $c . ".php";
    if (file_exists($file)) {
        include_once $file;
    } else {
        // Dự phòng nếu dùng hằng số ROOT
        $file_alt = __DIR__ . "/../classes/" . $c . ".php";
        if (file_exists($file_alt)) {
            include_once $file_alt;
        }
    }
}
?>

