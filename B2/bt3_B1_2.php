<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kết Quả Phép Tính</title>
</head>
<body>
    <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $operation = $_POST['operation'];
        $result = null;

        switch ($operation) {
            case 'cong':
                $result = $num1 + $num2;
                $operationText = 'Cộng';
                break;
            case 'tru':
                $result = $num1 - $num2;
                $operationText = 'Trừ';
                break;
            case 'nhan':
                $result = $num1 * $num2;
                $operationText = 'Nhân';
                break;
            case 'chia':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Lỗi: Không thể chia cho 0';
                }
                $operationText = 'Chia';
                break;
            default:
                $result = 'Phép tính không hợp lệ';
                $operationText = '';
        }

        echo "<p>Chọn phép tính: <strong>$operationText</strong></p>";
        echo "<p>Số 1: <strong>$num1</strong></p>";
        echo "<p>Số 2: <strong>$num2</strong></p>";
        echo "<p>Kết quả: <strong>$result</strong></p>";
    }
    ?>

    <br><br>
    <a href="bt3_B1.php">Quay lại trang trước</a>
</body>
</html>
