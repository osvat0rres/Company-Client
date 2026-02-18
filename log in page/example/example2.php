<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
      $val1 = $_POST['username'];
      $val2 = $_POST['id'];
    ?>

    <h1>Answer</h1>
    <p>Username: <?php echo $val1; ?></p>
    <p>ID: <?php echo $val2; ?></p>
</body>
</html>