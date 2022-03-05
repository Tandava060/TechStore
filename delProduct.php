<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechNeva</title>
    <script src="https://cdn.tailwindcss.com?plugins=aspect-ratio,forms"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


 
</head>

<body>
    <?php
    include 'assets/elem/header.php';
    ?>

    
                <?php
                $url_id = $_GET['id'];
                $run_query = mysqli_query($con, $query);
                $query = "DELETE FROM images WHERE  Pid = ".$url_id;   
                mysqli_query($con, $query);
                $query = "DELETE FROM cart WHERE pId = ".$url_id;  
                mysqli_query($con, $query);
                $query = "DELETE FROM product WHERE pId = ".$url_id;  
                mysqli_query($con, $query);
                echo "<script> location.href='adminProduct.php?sts=true'; </script>'; </script>";
             
                ?>
           
</body>
</html>