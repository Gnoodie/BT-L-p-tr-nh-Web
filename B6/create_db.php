<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo Cơ Sở Dữ Liệu và Bảng</title>
</head>
<body>

<h2>Bấm vào nút để tạo cơ sở dữ liệu và bảng</h2>

<!-- Form có nút bấm -->
<form method="post">
    <button type="submit" name="create_db_table">Tạo CSDL và Bảng</button>
</form>

<?php
// Kiểm tra nếu nút bấm được bấm
if (isset($_POST['create_db_table'])) {
    $host = "localhost";
    $db_name = "b5_mydb";
    $username = "root";
    $password = "";
    $table_name = "my_guests";

    $conn = new mysqli($host, $username, $password);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "CREATE DATABASE IF NOT EXISTS $db_name CHARACTER SET utf8 COLLATE utf8_general_ci";
    if ($conn->query($sql) === TRUE) {
      echo "Database '$db_name' đã được tạo thành công!<br>";
    } else {
      echo "Lỗi khi tạo cơ sở dữ liệu: " . $conn->error;
    }
    $conn->close();
    $conn = new mysqli($host, $username, $password,$db_name);
    $sql = "CREATE TABLE $table_name (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
      echo "Tạo bảng $table_name thành công<br>";
    } else {
      echo "Error creating table: " . $this->conn->error;
    }
    $conn->close();
}
?>

</body>
</html>
