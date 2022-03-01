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
        <div id="register" class="px-4 py-12 mx-auto max-w-12xl sm:px-6 md:px-12 lg:px-24 lg:py-12 2xl:py-24">
            <div class="justify-center mx-auto text-left align-bottom bg-white rounded-lg sm:align-middle sm:max-w-4xl 2xl:max-w-5xl sm:w-full">
                <div class="grid flex-wrap items-center justify-center grid-cols-1 mx-auto shadow-none lg:shadow-xl lg:grid-cols-5 rounded-xl">
                    <div class="w-full px-6 py-3 col-span-3">
                        <div class="mt-3 text-left sm:mt-5">
                            <h3 class="text-4xl text-center text-indigo-600 font-medium lg:text-5xl">Register</h3>
                        </div>
                        <form id="registration" name="registration" class="mt-6 space-y-5" novalidate>
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
                                    <input type="rePassword" name="rePassword" id="rePassword" class="w-full px-5  py-3 placeholder-gray-400 inputTrans border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-300" placeholder=" Re-enter your Password">
                                </div>
                            </div>




                            <div class="flex flex-col mt-4 lg:space-y-2">
                                <button type="submit" class=" flex items-center justify-center  w-full  px-8  py-3 font-medium  text-center text-white inputTrans  bg-indigo-600 rounded-xl hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 "> Register </button>

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
    <script src="assets/js/index.js"></script>
    <script src="assets/js/registerValidate.js"></script>
</body>

</html>