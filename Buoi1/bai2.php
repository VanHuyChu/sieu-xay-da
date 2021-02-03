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
        $k = $_POST['k'];
        $n = $_POST['n'];

        $giai_thua_n=1;
        $giai_thua_k=1;
        $giai_thua_n_k=1;

        for($i = 2; $i <= $n; $i ++) {
            $giai_thua_n *= $i;
        }
        //echo 'giai thua n '. $giai_thua_n.'<br>';

        for($i = 2; $i <= $k; $i ++) {
            $giai_thua_k *= $i;
        }
        //echo 'giai thua k '.$giai_thua_k.'<br>';

        for($i = 2; $i <= $n-$k; $i ++) {
            $giai_thua_n_k *= $i;
        }
        // echo 'giai thua n-k '.$giai_thua_n_k.'<br>';
        // echo 'k: '.$k.'<br>';
        // echo 'n: '.$n;

        $tohop=$giai_thua_n/($giai_thua_k*$giai_thua_n_k);
        $chinhhop=$giai_thua_n/$giai_thua_n_k;
    }

    ?>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h3>Bai 2:</h3>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nhap k</label>
                        <input type="text" name="k" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nhap n</label>
                        <input type="text" name="n" class="form-control">
                    </div>
                    <button type="submit" name="sbm" class="btn btn-primary">Submit</button>
                    </br>
                    <samp>To hop: <?php echo $tohop; ?></samp><br>
                    <samp>Chinh hop: <?php echo $chinhhop; ?></samp><br>
                </form>
            </div>
        </div>
    </div>

</body>

</html>