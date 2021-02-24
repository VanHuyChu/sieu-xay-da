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
    <button type="button" class="btn btn-success"><a href="add.php">Them moi</a></button>
    <form action="" method="get">
        <input type="text" name="search"><input type="submit" name="sbm" value="Search">
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Ma sv</th>
                <th scope="col">Ten sv</th>
                <th scope="col">Diem 1</th>
                <th scope="col">Diem 2</th>
                <th scope="col">Diem 3</th>
                <th scope="col">Diem 4</th>
                <th scope="col">Diem 5</th>
                <th scope="col">Diem 6</th>
                <th scope="col">Xep loai</th>
            </tr>
        </thead>
        <tbody>


            <?php
            if (isset($_GET['sbm'])) {
                $tt = 1;
                $tam = $_GET['search'];
                $tam = trim($tam);
                $a = explode(' ', $tam);
                $reg = "/";
                foreach ($a as $value) {
                    $reg .= "($value)+.*";
                }
                $reg .= "/iu";
                echo $reg;
                $lines = file('data.txt');
                foreach ($lines as $x) {
                    if (preg_match($reg, $x)) {
                        $a = explode(',', $x);

            ?>
                        <tr>
                            <td><?php echo $tt++ ?></td>
                            <td><?php echo $a[0] ?></td>
                            <td><?php echo $a[1] ?></td>
                            <td><?php echo $a[2] ?></td>
                            <td><?php echo $a[3] ?></td>
                            <td><?php echo $a[4] ?></td>
                            <td><?php echo $a[5] ?></td>
                            <td><?php echo $a[6] ?></td>
                            <td><?php echo $a[7] ?></td>
                            <td><?php echo $a[8] ?></td>
                        </tr>
            <?php
                    }
                }
            } ?>

        </tbody>
    </table>
</body>

</html>