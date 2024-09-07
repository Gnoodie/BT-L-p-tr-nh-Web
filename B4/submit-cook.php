<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $first_name = $_POST['f_name'];
    $last_name = $_POST['l_name'];
    $email = $_POST['mail'];
    $invoice = $_POST['invoice'];
    $categories = isset($_POST['category']) ? implode(", ", $_POST['category']) : '';
    $additional_info = $_POST['area'];

    // Lưu thông tin vào cookie, hết hạn sau 1 giờ
    setcookie("first_name", $first_name, time() + 3600, "/");
    setcookie("last_name", $last_name, time() + 3600, "/");
    setcookie("email", $email, time() + 3600, "/");
    setcookie("invoice", $invoice, time() + 3600, "/");
    setcookie("categories", $categories, time() + 3600, "/");
    setcookie("additional_info", $additional_info, time() + 3600, "/");


    // Sau khi submit, hiển thị thông tin từ cookie
    echo"Nếu muốn lấy giá trị bạn vừa nhập, vui lòng nhấn F5 hoặc tải lại trang";
    echo "<h2>Thông tin bạn đã nhập:</h2>";
    echo "First Name: " . $_COOKIE['first_name'] . "<br>";
    echo "Last Name: " . $_COOKIE['last_name'] . "<br>";
    echo "Email: " . $_COOKIE['email'] . "<br>";
    echo "Invoice: " . $_COOKIE['invoice'] . "<br>";
    echo "Categories: " . $_COOKIE['categories'] . "<br>";
    echo "Additional Information: " . $_COOKIE['additional_info'] . "<br>";

    
}
?>
