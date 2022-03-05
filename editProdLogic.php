<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechNeva</title>
    <script src="https://cdn.tailwindcss.com?plugins=aspect-ratio,forms"></script>
    <link rel="stylesheet" href="assets/css/index.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
<body>
<?php

include 'config/dbconnect.php';
    include 'assets/elem/header.php';
    $url_id = $_GET['id'];
    

if (isset($_POST["update"])) {

	$name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $category= $_POST["category"];
    $stock= $_POST["stock"];
   
    
  

    $sql = "UPDATE `product` SET name='$name', price='$price', description='$description', category = '$category', stock='$stock' WHERE pId=".$url_id;  
    if(mysqli_query($con,$sql)){
        $pId = mysqli_insert_id($con);
     
        echo "<script> location.href='adminProduct.php?sts=update'; </script>";
        
        
    } else {
        echo "<script> location.href='addProduct.php?sts=".$con -> error."; </script>";
    }
}
?>

</body>

</html>