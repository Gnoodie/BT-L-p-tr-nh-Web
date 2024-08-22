<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phép Tính Trên Hai Số</title>
</head>
<body>
    <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
    <form action="bt3_B1_2.php" method="post" >
        <label>Chọn phép tính:</label><br>
        <input type="radio" name="operation" value="cong"> Cộng
        <input type="radio" name="operation" value="tru"> Trừ
        <input type="radio" name="operation" value="nhan"> Nhân
        <input type="radio" name="operation" value="chia"> Chia<br><br>

        <label>Số thứ nhất:</label><br>
        <input type="number" name="num1"><br><br>

        <label>Số thứ hai:</label><br>
        <input type="number" name="num2" ><br><br>
        
        <button type="submit">Tính</button><br><br>
    </form>
    <form action="bt3_B1_3.php" method="post">
        <label>Chọn kiểu số muốn kiểm tra: </label> <br>
        <input type="radio" name="ktra" value="snt"> Số nguyên tố <br>
        <input type="radio" name="ktra" value="chanle"> Chẵn lẻ <br>
        <label>Số cần kiểm tra: </label>
        <input type="number" name="num3" ><br><br>
        <button type="submit">Check</button><br><br>
    </form>
</body>
</html>
