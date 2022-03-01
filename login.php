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

</head>

<body>
    <?php
    include 'assets/elem/header.php';
    ?>

    <section>
        <div id="login" class="px-4 py-12 mx-auto max-w-7xl sm:px-6 md:px-12 lg:px-24 lg:py-12 2xl:py-24">
            <div class="justify-center mx-auto text-left align-bottom bg-white rounded-lg sm:align-middle sm:max-w-xl 2xl:max-w-3xl sm:w-full">
                <div class="grid flex-wrap items-center justify-center grid-cols-1 mx-auto shadow-none lg:shadow-xl lg:grid-cols-2 rounded-xl">
                    <div class="w-full px-6 py-3">
                        <div class="mt-3 text-left sm:mt-5">
                            <h3 class="text-4xl text-center text-indigo-600 font-medium lg:text-5xl">Login</h3>
                        </div>
                        <form id="loginForm" name="loginForm" class="mt-6 space-y-5" novalidate>
                            <div>
                                <label for="email" class="px-2 leading-10 text-sm text-gray-600">Email</label>
                                <input type="text" name="email" id="email" class="w-full px-5  py-3 placeholder-gray-400 border border-transparent rounded-lg inputTrans  bg-gray-50 focus:ring-2 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-300
                " placeholder="e.g johndoe@gmail.com">
                            </div>
                            <div>
                                <label for="password" class="px-2 leading-10 text-sm text-gray-600">Password</label>
                                <input type="password" name="password" id="password" class="w-full px-5  py-3 placeholder-gray-400 inputTrans border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-300" placeholder="Enter your password">
                            </div>
                            <div class="flex flex-col mt-4 lg:space-y-2">
                                <button type="submit" class=" flex items-center justify-center  w-full  px-8  py-3 font-medium  text-center text-white inputTrans  bg-indigo-600 rounded-xl hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 "> Login </button>
                                <a href="#" type="button" class="inline-flex justify-center py-4  text-base font-medium text-gray-500   focus:outline-none  hover:text-neutral-600  focus:text-blue-600 sm:text-sm "> Forgot your Password? </a>
                            </div>
                        </form>
                    </div>
                    <div class="order-first hidden w-full lg:block">
                        <img class="object-cover h-full bg-cover rounded-l-lg" src="https://images.unsplash.com/photo-1597938430467-c7a5f65c24f2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/loginValidate.js"></script>
</body>

</html>