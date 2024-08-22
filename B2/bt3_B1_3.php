<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kết Quả Kiểm Tra</title>
</head>
<body>
    <h2>KẾT QUẢ KIỂM TRA</h2>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num3 = $_POST['num3'];
        $operation = $_POST['ktra'];
        $result = null;

        switch ($operation) {
            case 'snt':
                $check=true;
                for($i=2;$i<$num3;$i++){
                    if($num3 %$i==0){
                        $result = "không là số nguyên tố";
                        $check=false;
                        break;
                    }
                }
                if($check) $result = "là số nguyên tố";
                $operationText = 'Số nguyên tố';
                break;
            case 'chanle':
                if($num3 %2==0){
                    $result = "là số chẵn";
                }else{
                    $result = "là số lẻ";
                }
                $operationText = 'Chẵn lẻ';
                break;
            default:
                $result = 'Chưa nhập số cần kiểm tra hoặc chưa chọn phương thức kiểm tra';
                $operationText = '';
        }

        echo "<p>Kiểu kiểm tra: <strong>$operationText</strong></p>";
        echo "<p><strong>$num3</strong> <strong>$result</strong></p>";
    }
    ?>

    <br><br>
    <a href="bt3_B1.php">Quay lại trang trước</a>
</body>
</html>
