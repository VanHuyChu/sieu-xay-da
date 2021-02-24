<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Format Email</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    $emailRegetx = '/^[a-z\d._-]+@([a-z\d-]+\.)+[a-z]{2,6}$/i';
    $kq = '';
    $color = "blue";
    if (isset($_POST['sbm'])) {
        $email = $_POST['email'];
        if (preg_match($emailRegetx, $email)) {
            $color = 'blue';
            $kq = 'OK';
        } else {
            $color = 'red';
            $kq = '0 OK';
        }
    }

    ?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" name="email" class="form-control" placeholder="Enter email">
        </div>
        <button type="submit" name="sbm" class="btn btn-primary">Submit</button>
        <label for="" style="color: <?php echo $color ?>"><?php echo $kq ?></label>
    </form>

</body>

</html>