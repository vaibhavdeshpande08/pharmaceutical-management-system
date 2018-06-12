<html>
<head>
    <title>Add Data</title>
    <style>            body  {
    background-image: url("bgs.jpg");
}</style>
</head>
<body>
    <a href="index1.php">Home</a>
    <br/><br/>
    <form action="add1.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>Symptoms</td>
                <td><input type="text" name="symptoms"></td>
            </tr>
            <tr> 
                <td>Price</td>
                <td><input type="text" name="price"></td>
            </tr>
             <tr> 
                <td>Stock</td>
                <td><input type="text" name="stock"></td>
            </tr>
             <tr> 
                <td>Shop</td>
                <td><input type="text" name="shop"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>