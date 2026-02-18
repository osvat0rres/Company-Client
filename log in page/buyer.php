<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="buyers.css">

</head>
<body>

    <?php 
      $val = $_GET['item'];
      $val2 = $_GET['ID'];
      $val3 = $_GET['category'];
      $val4 = $_GET['price'];
      ?>

    <h1>Answer from the compani page</h1>
    <p>Item name: <?php echo $val; ?></p>
    <p>Item ID: <?php echo $val2; ?></p>
    <p>Category: <?php echo $val3; ?></p>
    <p>Price: <?php echo $val4; ?></p>

</body>
</html>