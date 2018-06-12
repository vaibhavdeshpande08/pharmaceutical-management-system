<html>
<head>
    <title>Add Data</title>
    <style>           
        body  {
    background-image: url("ora.jpg");
}
    </style>
</head>
<body>
<?php
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $name = $_POST['name'];
    $Symptoms = $_POST['symptoms'];
    $Price = $_POST['price'];
    $Stock = $_POST['stock'];
    $Shop = $_POST['shop'];
        
    if(empty($name) || empty($Symptoms) || empty($Price)|| empty($Stock)|| empty($Shop)) {                
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
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        $result = mysqli_query($mysqli, "INSERT INTO users(name,symptoms,price,stock,shop) VALUES('$name','$Symptoms','$Price','$Stock','$Shop')");
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index5.php'>View Result</a>";
    }
}
?>
</body>
</html>