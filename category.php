<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=aspect-ratio,forms"></script>
    <link rel="stylesheet" href="assets/css/index.css" />
</head>

<body>
    <?php
    include 'assets/elem/header.php';
    include 'assets/elem/searchBar.php';
    ?>

    <?php
    $url_cat = $_GET['cat'];
    ?>

    <section class="flex items-center py-4 whitespace-nowrap mx-16">
        <a href="#" class="text-gray-600 dark:text-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
        </a>

        <span class="mx-5 text-gray-500 dark:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
        </span>

        <a href="#" class="text-gray-600 dark:text-gray-200 hover:underline">
            Categories
        </a>

        <span class="mx-5 text-gray-500 dark:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
        </span>

        <a href="#" class="text-indigo-700 hover:text-indigo-500">
            <?php
             echo $url_cat;
            ?>
        </a>
    </section>

    <section>
        <div class="bg-white">
            <div>


                <main class="mx-auto px-4 sm:px-6 lg:px-20">
                    <div class="relative z-10 flex justify-end pb-6">

                        <div class="flex items-center">
                            <div onmouseover="dropdown(this)" onmouseout="dropdownOut(this)" class="relative inline-block text-left">
                                <div>
                                    <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
                                        Sort
                                        <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>


                                <div class="hidden origin-top-right absolute right-0 w-40 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                    <div class="py-1" role="none">
                                        <a href="#" class="text-gray-500 block px-4 py-2 text-sm hover:font-medium hover:bg-gray-100 hover:text-indigo-600"> Newest </a>

                                        <a href="#" class="text-gray-500 block px-4 py-2 text-sm hover:font-medium hover:bg-gray-100 hover:text-indigo-600"> Best Rating </a>

                                        <a href="#" class="text-gray-500 block px-4 py-2 text-sm hover:font-medium hover:bg-gray-100 hover:text-indigo-600"> Most Popular </a>

                                        <a href="#" class="text-gray-500 block px-4 py-2 text-sm hover:font-medium hover:bg-gray-100 hover:text-indigo-600"> Price: Low to High </a>

                                        <a href="#" class="text-gray-500 block px-4 py-2 text-sm hover:font-medium hover:bg-gray-100 hover:text-indigo-600"> Price: High to Low </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <section aria-labelledby="products-heading" class="pt-6 pb-24">

                        <div class="grid grid-cols-1 lg:grid-cols-6 gap-x-16 gap-y-10">
                            <!-- Filters -->
                            <form class="hidden lg:block ">
                                <h3 class="sr-only">Categories</h3>
                                <ul role="list" class="text-sm font-medium text-gray-900 space-y-4 pb-6 border-b border-gray-200">
                                    <li>
                                        <a href="#"> Laptops </a>
                                    </li>

                                    <li>
                                        <a href="#"> Monitors </a>
                                    </li>

                                    <li>
                                        <a href="#"> Gaming Pc </a>
                                    </li>

                                    <li>
                                        <a href="#"> Keyboards </a>
                                    </li>

                                    <li>
                                        <a href="#"> Mouses </a>
                                    </li>
                                </ul>

                                <div class="border-b border-gray-200 py-6">
                                    <h3 class="-my-3 flow-root">
                                        <button type="button" class="py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                                            <span class="font-medium text-gray-900"> Color </span>
                                            <span class="ml-6 flex items-center">
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                                </svg>
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </button>
                                    </h3>
                                    <div class="pt-6" id="filter-section-0">
                                        <div class="space-y-4">
                                            <div class="flex items-center">
                                                <input name="color" value="white" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600">
                                                <label class="ml-3 text-sm text-gray-600"> White </label>
                                            </div>

                                            <div class="flex items-center">
                                                <input name="color" value="beige" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600">
                                                <label class="ml-3 text-sm text-gray-600"> Black </label>
                                            </div>

                                            <div class="flex items-center">
                                                <input name="color" value="blue" type="checkbox" checked class="h-4 w-4 border-gray-300 rounded text-indigo-600">
                                                <label class="ml-3 text-sm text-gray-600"> Blue </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-b border-gray-200 py-6">
                                    <h3 class="-my-3 flow-root">
                                        <button type="button" class="py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-1" aria-expanded="false">
                                            <span class="font-medium text-gray-900"> Ram </span>
                                            <span class="ml-6 flex items-center">
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                                </svg>
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </button>
                                    </h3>
                                    <div class="pt-6">
                                        <div class="space-y-4">
                                            <div class="flex items-center">
                                                <input name="ram" value="new-arrivals" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600">
                                                <label class="ml-3 text-sm text-gray-600">8gb</label>
                                            </div>

                                            <div class="flex items-center">
                                                <input id="" name="ram" value="sale" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600">
                                                <label for="" class="ml-3 text-sm text-gray-600"> 16gb </label>
                                            </div>

                                            <div class="flex items-center">
                                                <input id="" name="ram" value="travel" type="checkbox" checked class="h-4 w-4 border-gray-300 rounded text-indigo-600">
                                                <label for="" class="ml-3 text-sm text-gray-600"> 32gb </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="border-b border-gray-200 py-6">
                                    <h3 class="-my-3 flow-root">
                                        <button type="button" class="py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-2" aria-expanded="false">
                                            <span class="font-medium text-gray-900"> Storage </span>
                                            <span class="ml-6 flex items-center">
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                                </svg>
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </button>
                                    </h3>
                                    <div class="pt-6" id="filter-section-2">
                                        <div class="space-y-4">
                                            <div class="flex items-center">
                                                <input id="" name="Storage" value="2l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600">
                                                <label for="" class="ml-3 text-sm text-gray-600"> 256 Gb ssd </label>
                                            </div>

                                            <div class="flex items-center">
                                                <input id="" name="Storage" value="6l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600">
                                                <label for="" class="ml-3 text-sm text-gray-600"> 512 Gb nvme ssd </label>
                                            </div>

                                            <div class="flex items-center">
                                                <input id="" name="Storage" value="12l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600">
                                                <label for="" class="ml-3 text-sm text-gray-600"> 1 Tb HDD </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </form>


                            <div class="col-span-5">
                                <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-12">


                                    <?php
                                    $url_cat = $_GET['cat'];
                                    $query = 'SELECT * FROM product WHERE category = "' . $url_cat .'"';
                                    $run_query = mysqli_query($con, $query);
                                    if (mysqli_num_rows($run_query) > 0) {
                                        while ($row = mysqli_fetch_array($run_query)) {
                                            $prod_id = $row['pId'];
                                            $prod_name = $row['name'];
                                            $prod_descri = $row['description'];
                                            $prod_price = $row['price'];

                                            echo '<li class="swiper-slide"><a class="relative block" href="/ecommerce/product.php?id=' . $prod_id . '"><img class="object-cover w-full h-64  rounded-t-2xl" src="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Sports Trainer White" loading="lazy" /><button class="absolute p-2 text-white bg-indigo-800 rounded-full right-4 top-3" type="button"> <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg></button><div><div class="px-4 py-6 border-gray-100 border-x"><p class=" font-semibold text-s text-indigo-800 text-right">Rs ' . $prod_price . '</p><h5 class="font-medium">' . $prod_name . '</h5><p class="mt-1 text-xs leading-relaxed text-gray-700">' . substr($prod_descri, 0, 150) . '...</p></div></div></a><button  onclick="<?php ' . add_to_cart($con, $prod_id) . '?>" class="w-full rounded-b-2xl p-3 text-xs tracking-wide text-center text-white uppercase bg-indigo-800 hover:bg-indigo-600" type="button"> Add to Cart </button></li>';

                                        };
                                    }


                                    ?>
                                    

                                </div>

                                <!-- <div class="mx-auto mt-3">
                                    <ol class="flex justify-center space-x-1 text-xs font-medium">
                                        <li>
                                            <a href="" class="inline-flex items-center justify-center w-8 h-8 border border-gray-100 rounded-full hover:bg-blue-500 hover:text-white hover:border-none">
                                                < </a>
                                        </li>

                                        <li>
                                            <a href="" class="block w-8 h-8 leading-8 text-center text-white bg-blue-600  rounded-full hover:bg-blue-500 hover:text-white hover:border-none"> 1 </a>
                                        </li>

                                        <li class="block w-8 h-8 leading-8 text-center border border-gray-100 rounded-full hover:bg-blue-500 hover:text-white hover:border-none">2</li>

                                        <li>
                                            <a href="" class="block w-8 h-8 leading-8 text-center border border-gray-100 rounded-full hover:bg-blue-500 hover:text-white hover:border-none"> 3 </a>
                                        </li>

                                        <li>
                                            <a href="" class="block w-8 h-8 leading-8 text-center border border-gray-100 rounded-full hover:bg-blue-500 hover:text-white hover:border-none"> 4 </a>
                                        </li>

                                        <li>
                                            <a href="" class="inline-flex items-center justify-center w-8 h-8 border border-gray-100 rounded-full hover:bg-blue-500 hover:text-white hover:border-none">
                                                >
                                            </a>
                                        </li>
                                    </ol>

                                </div> -->
                            </div>

                        </div>
                    </section>
                </main>
            </div>
        </div>
    </section>

    <script src="assets/js/index.js"></script>
</body>

</html>