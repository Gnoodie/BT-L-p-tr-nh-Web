<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submit =true;
    // Lấy giá trị từ các input
    $firstName = trim($_POST['f_name']);
    $lastName = trim($_POST['l_name']);
    $email = trim($_POST['mail']);
    $invoiceId = trim($_POST['invoice']);
    $categories = isset($_POST['category']) ? $_POST['category'] : [];
    $addtion=trim($_POST['area']);

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
        echo "<button><a href='javascript:history.back()'>Go back to fix the errors</a></button>";
    } else {
        // Nếu không có lỗi, hiển thị kết quả
        $submit=false;
        echo "<h2>Form Submitted Successfully</h2>";
        echo "<p><strong>First Name:</strong> $firstName</p>";
        echo "<p><strong>Last Name:</strong> $lastName</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Invoice ID:</strong> $invoiceId</p>";
        echo "<p><strong>Categories Selected:</strong> " . implode(", ", $categories) . "</p>";
        echo "<p><strong>Additional Information:</strong> $addtion</p>";
    }
} else {
    $submit=false;
    // Nếu người dùng truy cập trực tiếp vào submit.php mà không qua form
    echo "<p>Invalid request method</p>";
}

    $target_dir = "";  // Thư mục đích để lưu file
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);  // Đường dẫn đầy đủ của tệp
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Kiểm tra nếu tệp đã tồn tại
    if (file_exists($target_file)) {
    echo "Tệp đã tồn tại.";
    $uploadOk = 0;
    }

    // Giới hạn loại tệp (chỉ cho phép hình ảnh ví dụ)
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" 
    && $imageFileType != "gif" ) {
        echo "Chỉ cho phép các tệp JPG, JPEG, PNG & GIF.";
        $uploadOk = 0;
    }

    // Kiểm tra nếu có lỗi xảy ra trong quá trình tải lên
    if ($uploadOk == 0) {
    echo "Ảnh không thể được tải lên.";
    } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Ảnh " . htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " đã được tải lên.";
        echo "<br><img src='" . $target_file . "' alt='Tải ảnh lên thành công' width='300'>";
    } else {
        echo "Đã xảy ra lỗi khi tải ảnh lên.";
    }
    }
?>
