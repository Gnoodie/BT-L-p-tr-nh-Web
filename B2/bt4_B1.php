
<?php 
    $list_number = array(5, 2, 9, 1, 7, 3);

    function solonnhat($list_number){
        return max($list_number);
    }

    function sonhonhat($list_number){
        return min($list_number);
    }

    function Tong($list_number){
        return array_sum($list_number);
    }

    function sapxep($list_number){
        sort($list_number);
        return $list_number;
    }
    function timso($list_number,$a){
        if (in_array($a,$list_number)){
            return "có trong mảng";
        }else {
            return "không có trong mảng" ;
        }
    }
    $sapxep = sapxep($list_number);
    $timso = timso($list_number,5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bt4.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>
        <h3> Array Functions</h3>
        <label> Mảng ban đầu là: </label>
        <a><?php echo implode(", ", $list_number) ?></a> <br>
        <label>Giá trị lớn nhất trong mảng là: </label>
        <a><?php echo max($list_number) ?></a> <br>
        <label>Giá trị nhỏ nhất trong mảng là: </label>
        <a><?php echo min($list_number) ?></a> <br>
        <label>Tổng các số trong mảng là: </label>
        <a><?php echo array_sum($list_number) ?></a><br>
        <label>Mảng sau khi sắp xếp là: </label>
        <a><?php echo implode(", ", $sapxep); ?></a><br>
        <label>Số 5 </label>
        <a><?php echo $timso; ?></a><br>
</body>
</html>
