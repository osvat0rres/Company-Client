<?php
include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Products</title>
    <link rel="stylesheet" href="buyer.css">
</head>
<body>

<h1>Available Products</h1>

<table>
    <tr>
        <th>Item Name</th>
        <th>Item ID</th>
        <th>Category</th>
        <th>Price</th>
        <th>Available</th>
    </tr>

<?php
$sql = "SELECT * FROM inventory";
$result = $connect->query($sql);

if($result->num_rows > 0){
    while($rows = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $rows['item'] . "</td>";
        echo "<td>" . $rows['id'] . "</td>";
        echo "<td>" . $rows['category'] . "</td>";
        echo "<td>$" . number_format($rows['price'], 2) . "</td>";
        echo "<td>" . $rows['availability'] . "</td>";
        echo "</tr>";
    }
}else{
    echo "<tr><td colspan='5'>No data found</td></tr>";
}
?>

</table>

</body>
</html>