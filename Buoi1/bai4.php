<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải hệ phương trình</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <input type="text" name="x1" placeholder="Nhập x1"><br>
    <input type="text" name="x2" placeholder="Nhập x2"><br>
    <input type="text" name="x3" placeholder="Nhập x3"><br>
    <input type="text" name="x4" placeholder="Nhập x4"><br>
    <input type="text" name="a1" placeholder="Nhập a1"><br>
    <input type="text" name="a2" placeholder="Nhập a2"><br>
    <input type="submit" value="Tính" name="Hept">
    </form>
    <?php
        function giaihephuongtrinh($x1,$x2,$x3,$x4,$a1,$a2){
            $y1=$x2*$x3;
            $y2=$x4*$x1;
            $v1=$a1*$x3;
            $v2=$a2*$x1;
            $u1=$y1-$y2;
            $u2=$v1-$v2;
            $ketqua_y=0;
            $ketqua_x=0;
            try {
                $ketqua_y=$u2/$u1;
                $ketqua_x=($a1-$ketqua_y*$x2)/$x1;
                return "Cặp nghiệm của phương trình là: x: $ketqua_x và y: $ketqua_y"."<br/>";
            } catch (\Throwable $th) {
                return "Các tham số nhập vào không đúng";
            }
        }
        if(isset($_POST['Hept'])){
            $x6=$_REQUEST['x1'];
            $x7=$_REQUEST['x2'];
            $x8=$_REQUEST['x3'];
            $x9=$_REQUEST['x4'];
            $a3=$_REQUEST['a1'];
            $a4=$_REQUEST['a2'];
            echo giaihephuongtrinh($x6,$x7,$x8,$x9,$a3,$a4,);
        }
    ?>
</body>
</html>