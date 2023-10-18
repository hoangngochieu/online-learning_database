<?php
// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "menucap2pro");

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}


// Truy vấn danh mục món ăn từ bảng "categories"
$query = "SELECT * FROM major";
$result = mysqli_query($conn, $query);

// Kiểm tra và xử lý kết quả
if (!$result) {
    die("Lỗi truy vấn: " . mysqli_error($conn));
}
?>