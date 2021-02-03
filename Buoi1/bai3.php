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
<!-- https://viettuts.vn/php/sap-xep-mang-trong-php -->
    <?php

    if (isset($_POST['sbm'])) {
        $so1 = $_POST['so1'];
        $so2 = $_POST['so2'];
        $so3 = $_POST['so3'];
        $so4 = $_POST['so4'];
        $tang = array($so1, $so2, $so3, $so4);
        $giam = array($so1, $so2, $so3, $so4);
        sort($tang);
        rsort($giam);
    }

    ?>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h3>Bai 2:</h3>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nhap</label>
                        <input type="number" name="so1" class="form-control">
                        <input type="number" name="so2" class="form-control">
                        <input type="number" name="so3" class="form-control">
                        <input type="number" name="so4" class="form-control">
                    </div>
                    <button type="submit" name="sbm" class="btn btn-primary">Submit</button>
                    </br>
                    <samp>Day so sau khi duoc sap xep tang dan: <?php foreach ($tang as $n) {
                                                            echo "$n ";
                                                        } ?></samp><br>
                    <samp>Day so sau khi duoc sap xep giam dan: <?php foreach ($giam as $n) {
                                                            echo "$n ";
                                                        } ?></samp><br>
                </form>
            </div>
        </div>
    </div>

</body>

</html>