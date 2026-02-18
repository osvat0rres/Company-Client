<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="compani.css">
</head>
<body>
    <h1>Inventory</h1>

    <table class="table">
        <tr>
            <th class="item" >Items</th>
        </tr>
        <tr>
            <td>
                <form action="buyer.php" method="post" class="form-box">
                    <table>
                        <tr>
                            <td>Item name:</td>
                             <td><input type="text" name="item"></td>
                        </tr>

                        <tr>
                            <td>Item ID:</td>
                            <td><input type="text" name="ID"></td>
                        </tr>

                         <!-- catergory -->
                          <tr> 
                            <td>Category:</td> 
                            <td> 
                                <input type="checkbox" name="category[]" value="Games"> Games <br> 
                                <input type="checkbox" name="category[]" value="Groceries"> Groceries <br> 
                                <input type="checkbox" name="category[]" value="Babies"> Babies <br>
                                <input type="checkbox" name="category[]" value="Kitchen"> Kitchen <br>
                                <input type="checkbox" name="category[]" value="Entertainment"> Entertainment 
                            </td> 
                           </tr> 
                           
                           <!-- Price -->
                            <tr>
                                <td>Price: </td>
                                <td><input type="number" name="price"></td>
                            </tr>

                            <!-- Avelable -->

                            <tr>
                                <td>Avalable</td>
                                <td><input type="number" name="avelability"></td>
                            </tr>

                            <tr style="margin-left: 100px;">
                                <td   class="submit"><input type="submit" value="uplode"></td>
                            </tr>
                    </table>
                
                </form>
            </td>
        </tr>
    </table>
</body>
</html>