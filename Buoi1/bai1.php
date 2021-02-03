<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    if (isset($_POST['sbm'])) {
        $n = $_POST['n'];
        $tong = 0;
        $tich = 1;
        for ($i = 1; $i <= $n; $i++) {
            $tong += $i;
            $tich *= $i;
        }
        
    }

    ?>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h3>Bai 1:</h3>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nhap n</label>
                        <input type="text" name="n" class="form-control">
                    </div>
                    <button type="submit" name="sbm" class="btn btn-primary">Submit</button>
                    </br>
                    <samp>Tong: <?php echo $tong; ?></samp><br>
                    <samp>Tich: <?php echo $tich; ?></samp><br>
                    <samp>Cac so chia het cho 3: <?php for ($ii = 1; $ii <= $n; $ii++) {
            if ($ii % 3 == 0) {
               echo $ii;
            }
        } ?></samp>
                </form>
            </div>
        </div>

    </div>

</body>

</html>