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
    $array = array(array(
        "STT"    => "1",
    "Ten"  => "Sieu xay da",
    "Lop"  => "101181",
    "level" => "0",
    ),array(
        "STT"    => "1",
    "Ten"  => "Sieu xay da",
    "Lop"  => "101181",
    "level" => "0",
    )
        
    );
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($array as $key => $value) {?>
            <tr>
                <th scope="row"><?php echo $value['STT']?></th>
                <td><?php echo $value['Ten']?></td>
                <td><?php echo $value['Lop']?></td>
                <td><?php echo $value['level']?></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</body>

</html>