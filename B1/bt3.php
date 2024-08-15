<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php 
            $a =8;
            $b =4;
            echo "$a + $b =" . ($a +$b);
            echo "<br>$a - $b =" . ($a -$b);
            echo "<br>$a x $b =" . ($a *$b);
            echo "<br>$a : $b =" . ($a /$b);
            echo "<br>";
            function snt($x){
                for($i=2;$i<$x;$i++){
                    if($x%$i==0){
                        echo $x ." không là số nguyên tố<br>";
                        return;
                    }
                }
                echo $x ." là số nguyên tố <br>";
            }
            snt(7);
            snt(8);
            function chanle($x){
                if($x%2==0){
                    echo $x ." là số chẵn <br>";
                }else{
                    echo $x ." là số lẻ <br>";
                }
            }
            chanle(6);
            chanle(7);
        ?>
    </body>
</html>