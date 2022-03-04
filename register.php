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
        <div id="register" class="px-4 py-12 mx-auto max-w-12xl sm:px-6 md:px-12 lg:px-24 lg:py-12 2xl:py-24">
            <div class="justify-center mx-auto text-left align-bottom bg-white rounded-lg sm:align-middle sm:max-w-4xl 2xl:max-w-5xl sm:w-full">
            <div id="alert" class="hidden  p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
  <svg class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <div id="alertText" class=" ml-3 text-sm font-medium text-red-700 dark:text-red-800">
    Error! Incorrect Password.
  </div>
  <button type="button" onclick="(function(){ document.getElementById('alert').style.display = 'none'; })()" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300" data-collapse-toggle="alert-2" aria-label="Close">
    <span class="sr-only">Close</span>
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
  </button>
</div>   
            <div class="grid flex-wrap items-center justify-center grid-cols-1 mx-auto shadow-none lg:shadow-xl lg:grid-cols-5 rounded-xl">
                    <div class="w-full px-6 py-3 col-span-3">
                        <div class="mt-3 text-left sm:mt-5">
                            <h3 class="text-4xl text-center text-indigo-600 font-medium lg:text-5xl">Register</h3>
                        </div>
                        <form id="registration" name="registration" action="register.php" method="post" class="mt-6 space-y-5" novalidate>
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                <div>
                                    <label for="fname" class="px-2 leading-10 text-sm text-gray-600">First Name</label>
                                    <input type="ftext" name="fname" id="fname" class="w-full px-5  py-3 placeholder-gray-400 border border-transparent rounded-lg inputTrans  bg-gray-50 focus:ring-2 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-300
                        " placeholder="John">
                                </div>

                                <div>
                                    <label for="lname" class="px-2 leading-10 text-sm text-gray-600">Last Name</label>
                                    <input type="text" name="lname" id="lname" class="w-full px-5  py-3 placeholder-gray-400 border border-transparent rounded-lg inputTrans  bg-gray-50 focus:ring-2 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-300
                        " placeholder="Doe">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">


                                <div>
                                    <label for="email" class="px-2 leading-10 text-sm text-gray-600">Email</label>
                                    <input type="text" name="email" id="email" class="w-full px-5  py-3 placeholder-gray-400 border border-transparent rounded-lg inputTrans  bg-gray-50 focus:ring-2 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-300
                        " placeholder="johndoe@gmail.com">
                                </div>

                                <div>
                                    <label for="mobile" class="px-2 leading-10 text-sm text-gray-600">Mobile</label>
                                    <input type="text" name="mobile" id="mobile" class="w-full px-5  py-3 placeholder-gray-400 border border-transparent rounded-lg inputTrans  bg-gray-50 focus:ring-2 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-300
                        " placeholder="57123456">
                                </div>


                            </div>

                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                <div>
                                    <label for="password" class="px-2 leading-10 text-sm text-gray-600">Password</label>
                                    <input type="password" name="password" id="password" class="w-full px-5  py-3 placeholder-gray-400 inputTrans border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-300" placeholder="Password">
                                </div>

                                <div>
                                    <label for="rePassword" class="px-2 leading-10 text-sm text-gray-600">Re-Enter your Password</label>
                                    <input type="Password" name="rePassword" id="rePassword" class="w-full px-5  py-3 placeholder-gray-400 inputTrans border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-300" placeholder=" Re-enter your Password">
                                </div>
                            </div>




                            <div class="flex flex-col mt-4 lg:space-y-2">
                                <button type="submit" name="register" class=" flex items-center justify-center  w-full  px-8  py-3 font-medium  text-center text-white inputTrans  bg-indigo-600 rounded-xl hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 "> Register </button>

                            </div>
                        </form>
                    </div>
                    <div class="order-first hidden w-full lg:block col-span-2">
                        <img class="object-cover h-full bg-cover rounded-l-lg" src="https://images.unsplash.com/photo-1597938430467-c7a5f65c24f2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
include 'config/dbconnect.php';


if (isset($_POST["register"])) {

	$fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password= md5($_POST["password"]);

    $sql="SELECT * FROM user WHERE email='$email'"; 
    $run= mysqli_query($con,$sql);  
    if (mysqli_num_rows($run) > 0) {
        echo '<script>document.getElementById("alertText").innerHTML = "Account Already Exists!";
        document.getElementById("alert").style.display = "flex";</script>';
    } else {

    $sql = "INSERT INTO `user`(forename,surname,email,mob,pwdhash) VALUES ('$fname', '$lname', '$email', '$mobile', '$password')";
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