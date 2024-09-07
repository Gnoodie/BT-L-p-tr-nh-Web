<?php
session_start(); // Bắt buộc phải có để khởi động session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $first_name = $_POST['f_name'];
    $last_name = $_POST['l_name'];
    $email = $_POST['mail'];
    $invoice = $_POST['invoice'];
    $categories = isset($_POST['category']) ? implode(", ", $_POST['category']) : '';
    $additional_info = $_POST['area'];

    // Lưu thông tin vào session
    $_SESSION['first_name'] = $first_name;
    $_SESSION['last_name'] = $last_name;
    $_SESSION['email'] = $email;
    $_SESSION['invoice'] = $invoice;
    $_SESSION['categories'] = $categories;
    $_SESSION['additional_info'] = $additional_info;

    

    // Sau khi submit, hiển thị thông tin từ session
    echo "<h2>Thông tin bạn đã nhập:</h2>";
    echo "First Name: " . $_SESSION['first_name'] . "<br>";
    echo "Last Name: " . $_SESSION['last_name'] . "<br>";
    echo "Email: " . $_SESSION['email'] . "<br>";
    echo "Invoice: " . $_SESSION['invoice'] . "<br>";
    echo "Categories: " . $_SESSION['categories'] . "<br>";
    echo "Additional Information: " . $_SESSION['additional_info'] . "<br>";

    // Hiển thị tên file đã tải lên nếu có
    if (isset($_SESSION['uploaded_file'])) {
        echo "File đã tải lên: " . $_SESSION['uploaded_file'] . "<br>";
    }
}
?>
