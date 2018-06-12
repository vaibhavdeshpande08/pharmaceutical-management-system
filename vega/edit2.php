
<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $name=$_POST['name'];
    $Symptoms=$_POST['symptoms'];
    $Price=$_POST['price'];  
    $Stock=$_POST['stock'];
    $Shop=$_POST['shop'];  
    
    // checking empty fields
    if(empty($name) || empty($Symptoms) || empty($Price) || empty($Stock) || empty($Shop)) {            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($Symptoms)) {
            echo "<font color='red'>Symptom field is empty.</font><br/>";
        }
        
        if(empty($Price)) {
            echo "<font color='red'>Price field is empty.</font><br/>";
        }        
         if(empty($Stock)) {
            echo "<font color='red'>Stock field is empty.</font><br/>";
        }        
         if(empty($Shop)) {
            echo "<font color='red'>Shop field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE users SET name='$name',symptoms='$Symptoms',price='$Price',stock='$Stock',shop='$Shop' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index5.php
        header("Location: index5.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $name=$res['name'];
    $Symptoms=$res['symptoms'];
    $Price=$res['price'];  
    $Stock=$res['stock'];
    $Shop=$res['shop']; 
}
?>
<html>
<head>    
    <title>Edit Data</title>
    <style>            body  {
    background-image: url("mds.jpg");
}</style>
</head>
 
<body>
    <a href="index5.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit2.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr> 
                <td>Symptoms</td>
                <td><input type="text" name="symptoms" value="<?php echo $Symptoms;?>"></td>
            </tr>
            <tr> 
                <td>Price</td>
                <td><input type="text" name="price" value="<?php echo $Price;?>"></td>
            </tr>
             <td>Stock</td>
                <td><input type="text" name="stock" value="<?php echo $Stock;?>"></td>
            </tr>
             <td><input type="hidden" name="shop" value="<?php echo $Shop;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html