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
            $myfile = file("data.txt");
            foreach ($myfile as $key => $value) {
                $a=explode(',',$value) ?>
                <tr>
                    <td><?php echo $a[0]?></td>
                    <td><?php echo $a[1]?></td>
                    <td><?php echo $a[2]?></td>
                    <th><?php echo $a[3]?></th>
                    <td><?php echo $a[4]?></td>
                    <td><?php echo $a[5]?></td>
                    <td><?php echo $a[6]?></td>
                    <td><?php echo $a[7]?></td>
                    <td><?php echo $a[8]?></td>
                </tr>
            <?php }

            ?>

        </tbody>
    </table>
</body>

</html>