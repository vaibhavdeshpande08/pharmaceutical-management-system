
<?php
error_reporting(E_ERROR|E_PARSE);
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
   $stock1=$_POST['val'];
   $new;
    // checking empty fields
    if(empty($name) || empty($Symptoms) || empty($Price) || empty($Stock) || empty($Shop)) {            
        if(empty($name)) {
            echo "<font color='red'></font><br/>";
        }
        
        if(empty($Symptoms)) {
            echo "<font color='red'></font><br/>";
        }
        
        if(empty($Price)) {
            echo "<font color='red'></font><br/>";
        }        
         if(empty($Stock)) {
            echo "<font color='red'>Stock field is empty.</font><br/>";
        }        
         if(empty($Shop)) {
            echo "<font color='red'></font><br/>";
        }        
    } else {    
        //updating the table
        if(($Stock > 0) && ($Stock <= $stock1)){
        $new=($stock1 - $Stock);
        $result = mysqli_query($mysqli,"UPDATE users SET Stock=$new where id=$id");
        
        //redirectig to the display page. In our case, it is index3.php
        header("refresh:0.5;url= index3.php");
        }else{
            echo '<script>alert("Invalid value entered.Click on Home tab ")</script>';
            //header("Location: index3.php");
           // $result = mysqli_query($mysqli,"UPDATE users SET Stock=$stock1 where id=$id");
        }
        
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id='$id'");
 
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
    <a href="index3.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit1.php" >
        <table border="0">
            <tr> 
                <td></td>
                <td><input type="hidden" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="hidden" name="val" value="<?php echo $Stock;?>"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="hidden" name="symptoms" value="<?php echo $Symptoms;?>"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="hidden" name="price" value="<?php echo $Price;?>"></td>
            </tr>
             <td>Enter Quantity : </td>
                <td><input type="text" name="stock" value="<?php echo $Stock;?>"></td>
            </tr>
             <td></td>
                <td><input type="hidden" name="shop" value="<?php echo $Shop;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <br/>
                <td><input type="submit" name="update" value="Click here to Purchase"></td>
            </tr>
        </table>
    </form>
</body>
</html>