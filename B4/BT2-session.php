<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="bt2.css">
    </head>
    <body>
        <h1>Thông tin vẫn sẽ được lưu khi bạn thoát ra và sẵn sàng khi bạn vào lại</h1>
        <div class="form_vali">
            <h1>Payment Receipt Upload Form</h1>
            <hr>
            <form method="post" action="submit-session.php" id="paymentForm" enctype="multipart/form-data">
                <div class="container">
                    <div class="title">Name</div>
                    <div class="title"></div>
                    <div>
                        <input type="text" name="f_name" value="<?php echo isset($_SESSION['first_name']) ? $_SESSION['first_name'] : ''; ?>"><br>
                        First Name
                    </div>
                    <div>
                        <input type="text" name="l_name" value="<?php echo isset($_SESSION['last_name']) ? $_SESSION['last_name'] : ''; ?>"><br>
                        Last Name
                    </div>
                    <div class="title">Email</div>
                    <div class="title">Invoice ID</div>
                    <div>
                        <input type="text" name="mail" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>"><br>
                        example@gmail.com
                    </div>
                    <div>
                        <input type="text" name="invoice" value="<?php echo isset($_SESSION['invoice']) ? $_SESSION['invoice'] : ''; ?>"><br>
                    </div>
                    <div class="title">Pay for</div>
                    <div class="title"></div>
                    <div>
                        <input type="checkbox" name="category[]" value="15k Category" <?php echo (isset($_SESSION['categories']) && strpos($_SESSION['categories'], '15k Category') !== false) ? 'checked' : ''; ?>>15K Category<br>
                        <br><input type="checkbox" name="category[]" value="55k Category" <?php echo (isset($_SESSION['categories']) && strpos($_SESSION['categories'], '55k Category') !== false) ? 'checked' : ''; ?>>55K Category<br>
                        <br><input type="checkbox" name="category[]" value="116k Category" <?php echo (isset($_SESSION['categories']) && strpos($_SESSION['categories'], '116k Category') !== false) ? 'checked' : ''; ?>>116K Category<br>
                        <br><input type="checkbox" name="category[]" value="Shuttle Two Ways" <?php echo (isset($_SESSION['categories']) && strpos($_SESSION['categories'], 'Shuttle Two Ways') !== false) ? 'checked' : ''; ?>>Shuttle Two Ways<br>
                        <br><input type="checkbox" name="category[]" value="Compressport T-shirt Merchandise" <?php echo (isset($_SESSION['categories']) && strpos($_SESSION['categories'], 'Compressport T-shirt Merchandise') !== false) ? 'checked' : ''; ?>>Compressport T-shirt Merchandise<br>
                        <br><input type="checkbox" name="category[]" value="Other" <?php echo (isset($_SESSION['categories']) && strpos($_SESSION['categories'], 'Other') !== false) ? 'checked' : ''; ?>>Other
                    </div>
                    <div>
                        <input type="checkbox" name="category[]" value="35K Category" <?php echo (isset($_SESSION['categories']) && strpos($_SESSION['categories'], '35k Category') !== false) ? 'checked' : ''; ?>>35K Category<br>
                        <br><input type="checkbox" name="category[]" value="75K Category" <?php echo (isset($_SESSION['categories']) && strpos($_SESSION['categories'], '75k Category') !== false) ? 'checked' : ''; ?>>75K Category<br>
                        <br><input type="checkbox" name="category[]" value="Shuttle One Way" <?php echo (isset($_SESSION['categories']) && strpos($_SESSION['categories'], 'Shuttle One Way') !== false) ? 'checked' : ''; ?>>Shuttle One Way<br>
                        <br><input type="checkbox" name="category[]" value="Training Cap Merchandise" <?php echo (isset($_SESSION['categories']) && strpos($_SESSION['categories'], 'Training Cap Merchandise ') !== false) ? 'checked' : ''; ?>>Training Cap Merchandise<br>
                        <br><input type="checkbox" name="category[]" value="Buf Merchandise" <?php echo (isset($_SESSION['categories']) && strpos($_SESSION['categories'], 'Buf Merchandise') !== false) ? 'checked' : ''; ?>>Buf Merchandise
                    </div>
                </div>
                <div class="title" style="margin-left: 5%;">Please upload your payment receipt
                <br>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <br>jpg, jpeg, png, gif (1mb max)
                <br>
                <?php 
                if (isset($_SESSION['uploaded_file'])) {
                    echo "File đã tải lên: " . $_SESSION['uploaded_file'];
                }
                ?>
                </div>
                <div class="title" style="margin-left: 5%;">
                    Additional Information<br>
                    <textarea style="width: 75%;height:100px;" name="area"><?php echo isset($_SESSION['additional_info']) ? $_SESSION['additional_info'] : 'Type here...'; ?></textarea>
                </div>
                <div style="text-align: center;"><button type="submit">Submit</button></div>
            </form>
            
        </div>
    </body>
</html>
