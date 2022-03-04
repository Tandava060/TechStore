<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=aspect-ratio,forms"></script>
    <link rel="stylesheet" href="assets/css/index.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

</head>

<body>
    <?php
    include 'assets/elem/header.php';
    ?>

    <section>
        <div class="px-4 py-12 mx-auto max-w-6xl sm:px-6 md:px-12 lg:px-24 lg:py-12 2xl:py-24">
               <div class="w-full px-6 py-3 col-span-3">
                        <div class="mt-3 text-left sm:mt-5">
                            <h3 class="text-4xl text-center text-indigo-600 font-medium lg:text-5xl">Add Product</h3>
                        </div>
                        <form id="registration" name="registration" action="register.php" method="post" class="mt-6 space-y-5" novalidate>
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="px-2 leading-10 text-sm text-gray-600">Name</label>
                                    <input type="text" name="name" id="name" class="w-full px-5  py-3 placeholder-gray-400 border border-transparent rounded-lg inputTrans  bg-gray-50 focus:ring-2 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-300
                        " placeholder="Msi">
                                </div>

                                <div>
                                    <label for="price" class="px-2 leading-10 text-sm text-gray-600">price</label>
                                    <input type="number" name="price" id="price" class="w-full px-5  py-3 placeholder-gray-400 border border-transparent rounded-lg inputTrans  bg-gray-50 focus:ring-2 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-300
                        " placeholder="Doe">
                                </div>
                            </div>

                     

                            <div>
                                <label for="email" class="px-2 leading-10 text-sm text-gray-600">Description</label>
                                <input type="text" name="email" id="email" class="w-full px-5  py-3 placeholder-gray-400 border border-transparent rounded-lg inputTrans  bg-gray-50 focus:ring-2 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-300
                " placeholder="e.g johndoe@gmail.com">
                            </div>




                            <div class="flex flex-col mt-4 lg:space-y-2">
                                <button type="submit" name="add" class=" flex items-center justify-center  w-full  px-8  py-3 font-medium  text-center text-white inputTrans  bg-indigo-600 rounded-xl hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 "> Register </button>

                            </div>
                        </form>
                    </div>
                 
                </div>
            </div>
        </div>
    </section>

    <?php
include 'config/dbconnect.php';


if (isset($_POST["add"])) {

	$fname = $_POST["fname"];
    $price = $_POST["price"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password= md5($_POST["password"]);

    $sql="SELECT * FROM user WHERE email='$email'"; 
    $run= mysqli_query($con,$sql);  
    if (mysqli_num_rows($run) > 0) {
        echo '<script>document.getElementById("alertText").innerHTML = "Account Already Exists!";
        document.getElementById("alert").style.display = "flex";</script>';
    } else {

    $sql = "INSERT INTO `user`(forename,surname,email,mob,pwdhash) VALUES ('$fname', '$price', '$email', '$mobile', '$password')";
    if(mysqli_query($con,$sql)){
        $_SESSION["uid"] = mysqli_insert_id($con);
        $_SESSION["name"] = $fname;
        
        echo "<script> location.href='index.php'; </script>";
        
        
    } else {
        echo '<script>document.getElementById("alertText").innerHTML = "Error Occured, Please try again later!";
        document.getElementById("alert").style.display = "flex";</script>';
    }

}
}
?>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/registerValidate.js"></script>
</body>

</html>