<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="bt2.css">
        
    </head>
    <body>
        <div class="form_vali">
            <h1>Payment Receipt Upload Form</h1>
            <hr>
            <form method="post" action="submit.php" id="paymentForm" enctype="multipart/form-data">
                <div class="container">
                    <div class="title">Name</div>
                    <div class="title"></div>
                    <div>
                        <input type="text" name="f_name"><br>
                        First Name
                    </div>
                    <div>
                        <input type="text" name="l_name"><br>
                        Last Name
                    </div>
                    <div class="title">Email</div>
                    <div class="title">Invoice ID</div>
                    <div>
                        <input type="text" name="mail"><br>
                        example@gmail.com
                    </div>
                    <div>
                        <input type="text" name="invoice"><br>
                        
                    </div>
                    <div class="title">Pay for</div>
                    <div class="title"></div>
                    <div>
                        <input type="checkbox" name="category[]" value="15k Category">15K Category<br>
                        <br><input type="checkbox" name="category[]" value="55k Category">55K Category<br>
                        <br><input type="checkbox" name="category[]" value="116k Category">116K Category<br>
                        <br><input type="checkbox" name="category[]" value="Shuttle Two Ways">Shuttle Two Ways<br>
                        <br><input type="checkbox" name="category[]" value="Compressport T-shirt Merchandise ">Compressport T-shirt Merchandise<br>
                        <br><input type="checkbox" name="category[]" value="Other">Other
                    </div>
                    <div>
                        <input type="checkbox" name="category[]" value="35K Category">35K Category<br>
                        <br><input type="checkbox" name="category[]" value="75K Category">75K Category<br>
                        <br><input type="checkbox" name="category[]" value="Shuttle One Way">Shuttle One Way<br>
                        <br><input type="checkbox" name="category[]" value="Training Cap Merchandise">Training Cap Merchandise<br>
                        <br><input type="checkbox" name="category[]" value="Buf Merchandise">Buf Merchandise
                    </div>
                </div>
                <div class="title" style="margin-left: 5%;">Please upload your payment receipt
                <br>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <br>jpg, jpeg, png, gif (1mb max)
                </div>
                <div class="title" style="margin-left: 5%;">
                    Additional Information<br>
                    <textarea style="width: 75%;height:100px;" name="area">Type here...</textarea>
                </div>
                <div style="text-align: center;"><button type="submit">Submit</button></div>
            </form>
            
        </div>
    </body>
</html>