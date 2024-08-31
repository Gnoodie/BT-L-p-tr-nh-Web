<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị từ các input
    $firstName = trim($_POST['f_name']);
    $lastName = trim($_POST['l_name']);
    $email = trim($_POST['mail']);
    $invoiceId = trim($_POST['invoice']);
    $categories = isset($_POST['category']) ? $_POST['category'] : [];

    // Biến để lưu lỗi
    $errors = [];

    // Validate dữ liệu
    if (empty($firstName)) {
        $errors[] = "First Name is required";
    }

    if (empty($lastName)) {
        $errors[] = "Last Name is required";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($invoiceId)) {
        $errors[] = "Invoice ID is required";
    } elseif (!ctype_digit($invoiceId)) {
        $errors[] = "Invoice ID must be a number";
    }

    if (empty($categories)) {
        $errors[] = "At least one category must be selected";
    }

    // Nếu có lỗi, hiển thị lỗi
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        echo "<p><a href='javascript:history.back()'>Go back to fix the errors</a></p>";
    } else {
        // Nếu không có lỗi, hiển thị kết quả
        echo "<h2>Form Submitted Successfully</h2>";
        echo "<p><strong>First Name:</strong> $firstName</p>";
        echo "<p><strong>Last Name:</strong> $lastName</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Invoice ID:</strong> $invoiceId</p>";
        echo "<p><strong>Categories Selected:</strong> " . implode(", ", $categories) . "</p>";
    }
} else {
    // Nếu người dùng truy cập trực tiếp vào submit.php mà không qua form
    echo "<p>Invalid request method</p>";
}
?>
