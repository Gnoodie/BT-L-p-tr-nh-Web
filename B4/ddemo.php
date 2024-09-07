<?php
// Xử lý dữ liệu form và lưu vào cookie
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    // Lưu dữ liệu vào cookie, cookie hết hạn sau 1 giờ
    setcookie("name", $name, time() + 3600, "/");
    setcookie("email", $email, time() + 3600, "/");

    echo "Dữ liệu đã được lưu vào cookie.<br>";
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Cookie</title>
</head>
<body>
    <form method="post" action="">
        <label for="name">Tên:</label>
        <input type="text" id="name" name="name">
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br><br>
        <input type="submit" value="Gửi">
    </form>

    <h2>Thông tin từ Cookie:</h2>
    <?php
    // Hiển thị dữ liệu từ cookie
    if (isset($_COOKIE["name"]) && isset($_COOKIE["email"])) {
        echo "Tên: " . $_COOKIE["name"] . "<br>";
        echo "Email: " . $_COOKIE["email"] . "<br>";
    } else {
        echo "Chưa có dữ liệu cookie.";
    }
    ?>
</body>
</html>
