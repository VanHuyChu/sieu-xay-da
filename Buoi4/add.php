<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    if (isset($_POST['sbm'])) {
        $masv = $_POST['masv'];
        $tensv = $_POST['tensv'];
        $diem1 = $_POST['diem1'];
        $diem2 = $_POST['diem2'];
        $diem3 = $_POST['diem3'];
        $diem4 = $_POST['diem4'];
        $diem5 = $_POST['diem5'];

        $check_item = file_get_contents('data.txt');
        if (strpos($check_item, $masv) !== false) {
            echo '<div class="alert alert-danger" role="alert">
        Sinh vien da ton tai!
          </div>';
        } else {
            $tongdiem = $diem1 + $diem2 + $diem3 + $diem4 + $diem5;
            $xeploai = '';
            if ($tongdiem < 10) {
                $xeploai = "Yeu";
            } elseif ($tongdiem >= 10 && $tongdiem < 20) {
                $xeploai = "Trung Binh";
            } elseif ($tongdiem >= 20 && $tongdiem < 30) {
                $xeploai = "Kha";
            } elseif ($tongdiem >= 30 && $tongdiem < 45) {
                $xeploai = "Tot";
            } elseif ($tongdiem >= 45) {
                $xeploai = "Xuat Sac";
            }
            $handle = fopen('data.txt', 'a');
            fwrite($handle, "\n$masv,$tensv,$diem1,$diem2,$diem3,$diem4,$diem5,$tongdiem,$xeploai");
            fclose($handle);
            header('Location: http://localhost/siEU-XAY-DA/Buoi3/vidu1.php');
        }
    }

    ?>
    <form method="POST" action="">
        <div class="form-group">
            <label for="exampleInputEmail1">Ma sinh vien</label>
            <input type="text" class="form-control" id="" placeholder="" name="masv">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Ten sinh vien</label>
            <input type="text" class="form-control" id="" placeholder="" name="tensv">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Diem 1</label>
            <input type="text" class="form-control" id="" placeholder="" name="diem1">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Diem 2</label>
            <input type="text" class="form-control" id="" placeholder="" name="diem2">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Diem 3</label>
            <input type="text" class="form-control" id="" placeholder="" name="diem3">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Diem 4</label>
            <input type="text" class="form-control" id="" placeholder="" name="diem4">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Diem 5</label>
            <input type="text" class="form-control" id="" placeholder="" name="diem5">
        </div>
        <button type="submit" class="btn btn-primary" name="sbm">Submit</button>
    </form>
</body>

</html>