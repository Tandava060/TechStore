<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=aspect-ratio,forms"></script>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <style>
        .swiper-pagination {
            bottom: 0;
            position: relative;
        }
    </style>
</head>

<body>

    <?php
    include 'assets/elem/header.php';
    include 'assets/elem/searchBar.php';
  
    ?>



    <section id="category" class="container mx-auto px-6 mt-16">
        <div class="h-64 rounded-md overflow-hidden bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1538481199705-c710c4e965fc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1565&q=80')">
            <div class="bg-gray-900 bg-opacity-50 categoryContainer">
                <div class="px-10 max-w-xl">
                    <h2 class="text-2xl text-white font-semibold">Gaming</h2>
                    <p class="mt-2 text-gray-200">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                    <button class="flex items-center mt-4 px-3 py-2 bg-indigo-800 text-white text-sm uppercase font-medium rounded hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500">
                        <span>Shop Now</span>
                        <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="md:flex mt-8 md:-mx-4">
            <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2" style="background-image: url('https://images.unsplash.com/photo-1603302576837-37561b2e2302?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1168&q=80')">
                <div class="bg-gray-900 bg-opacity-50 categoryContainer">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-2xl text-white font-semibold">Laptops & Computers</h2>
                        <p class="mt-2 text-gray-200">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                        <button class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:text-indigo-500 focus:outline-none">
                            <span>Shop Now</span>
                            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2" style="background-image: url('https://images.unsplash.com/photo-1596742578443-7682ef5251cd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2154&q=80')">
                <div class="bg-gray-900 bg-opacity-50 categoryContainer">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-2xl text-white font-semibold">Mobile & Tablets</h2>
                        <p class="mt-2 text-gray-200">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                        <button class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:text-indigo-500 focus:outline-none">
                            <span>Shop Now</span>
                            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2" style="background-image: url('https://images.unsplash.com/photo-1596207891316-23851be3cc20?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80')">
                <div class="bg-gray-900 bg-opacity-50 categoryContainer">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-2xl text-white font-semibold">Accessories</h2>
                        <p class="mt-2 text-gray-200">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                        <button class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:text-indigo-500 focus:outline-none">
                            <span>Shop Now</span>
                            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8 mt-6 sm:mt-20">
        <h2 class="text-3xl font-medium text-indigo-800 text-center mb-12">
            Featured Products
        </h2>

        <div class="mt-8 swiper">
            <ul class="swiper-wrapper">
                <li class="swiper-slide">
                    <a class="relative block" href="/product/sports-trainer">
                        <img class="object-cover w-full h-64  rounded-t-2xl" src="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Sports Trainer White" loading="lazy" />

                        <button class="absolute p-2 text-white bg-indigo-800 rounded-full right-4 top-3" type="button">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>

                        <div>
                            <div class="px-4 py-6 border-gray-100 border-x">

                                <p class=" font-semibold text-s text-indigo-800 text-right">
                                    Rs54000
                                </p>

                                <h5 class="font-medium">
                                    Dell Inspiron 3511
                                </h5>


                                <p class="mt-1 text-xs leading-relaxed text-gray-700">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque corporis reprehenderit blanditiis sit at est deserunt!
                                </p>
                            </div>

                            <button class="w-full rounded-b-2xl p-3 text-xs tracking-wide text-center text-white uppercase bg-indigo-800 hover:bg-indigo-600" type="button">
                                Add to Cart
                            </button>
                        </div>
                    </a>
                </li>

                <li class="swiper-slide">
                    <a class="relative block" href="/product/sports-trainer">
                        <img class="object-cover w-full h-64  rounded-t-2xl" src="https://images.unsplash.com/photo-1624705002806-5d72df19c3ad?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" alt="Sports Trainer White" loading="lazy" />

                        <button class="absolute p-2 text-white bg-indigo-800 rounded-full right-4 top-4" type="button">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>

                        <div>
                            <div class="px-4 py-6 border-gray-100 border-x relative">

                                <p class=" font-semibold text-s text-indigo-800 text-right">
                                    Rs54000
                                </p>


                                <h5 class="font-medium">
                                    Gaming Desktop TD500
                                </h5>

                                <p class="mt-1 text-xs leading-relaxed text-gray-700">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque corporis reprehenderit blanditiis sit at est deserunt!
                                </p>
                            </div>

                            <button class="w-full rounded-b-2xl p-3 text-xs tracking-wide text-center text-white uppercase bg-indigo-800 hover:bg-indigo-600" type="button">
                                Add to Cart
                            </button>
                        </div>
                    </a>
                </li>

                <li class="swiper-slide">
                    <a class="relative block" href="/product/sports-trainer">
                        <img class="object-cover w-full h-64  rounded-t-2xl" src="https://images.unsplash.com/photo-1613483187550-1458bbdb0996?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="Sports Trainer White" loading="lazy" />

                        <button class="absolute p-2 text-white bg-indigo-800 rounded-full right-4 top-4" type="button">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>

                        <div>
                            <div class="px-4 py-6 border-gray-100 border-x relative">

                                <p class=" font-semibold text-s text-indigo-800 text-right">
                                    Rs54000
                                </p>

                                <h5 class="font-medium">
                                    AMD Ryzen 5 5600G
                                </h5>


                                <p class="mt-1 text-xs leading-relaxed text-gray-700">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque corporis reprehenderit blanditiis sit at est deserunt!
                                </p>
                            </div>

                            <button class="w-full rounded-b-2xl p-3 text-xs tracking-wide text-center text-white uppercase bg-indigo-800 hover:bg-indigo-600" type="button">
                                Add to Cart
                            </button>
                        </div>
                    </a>
                </li>

                <li class="swiper-slide">
                    <a class="relative block" href="/product/sports-trainer">
                        <img class="object-cover w-full h-64  rounded-t-2xl" src="https://images.unsplash.com/photo-1617294864705-eaf3c911259f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Sports Trainer White" loading="lazy" />

                        <button class="absolute p-2 text-white bg-indigo-800 rounded-full right-4 top-4" type="button">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>

                        <div>
                            <div class="px-4 py-6 border-gray-100 border-x">

                                <p class=" font-semibold text-s text-indigo-800 text-right">
                                    Rs54000
                                </p>

                                <h5 class="font-medium">
                                    MSI GF65 Thin 10 UE-047
                                </h5>



                                <p class="mt-1 text-xs leading-relaxed text-gray-700">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque corporis reprehenderit blanditiis sit at est deserunt!
                                </p>
                            </div>

                            <button class="w-full rounded-b-2xl p-3 text-xs tracking-wide text-center text-white uppercase bg-indigo-800 hover:bg-indigo-600" type="button">
                                Add to Cart
                            </button>
                        </div>
                    </a>
                </li>

                <li class="swiper-slide">
                    <a class="relative block" href="/product/sports-trainer">
                        <img class="object-cover w-full h-64  rounded-t-2xl" src="https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" alt="Sports Trainer White" loading="lazy" />

                        <button class="absolute p-2 text-white bg-indigo-800 rounded-full right-4 top-4" type="button">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>

                        <div>
                            <div class="px-4 py-6 border-gray-100 border-x">

                                <p class=" font-semibold text-s text-indigo-800 text-right">
                                    Rs54000
                                </p>

                                <h5 class="font-medium">
                                    ASUS Laptop L410
                                </h5>



                                <p class="mt-1 text-xs leading-relaxed text-gray-700">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque corporis reprehenderit blanditiis sit at est deserunt!
                                </p>
                            </div>

                            <button class="w-full rounded-b-2xl p-3 text-xs tracking-wide text-center text-white uppercase bg-indigo-800 hover:bg-indigo-600" type="button">
                                Add to Cart
                            </button>
                        </div>
                    </a>
                </li>

                <li class="swiper-slide">
                    <a class="relative block" href="/product/sports-trainer">
                        <img class="object-cover w-full h-64 rounded-t-2xl" src="https://images.unsplash.com/photo-1601070124916-5ad3dd628d28?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=627&q=80" alt="Sports Trainer White" loading="lazy" />

                        <button class="absolute p-2 text-white bg-indigo-800 rounded-full right-4 top-4" type="button">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>

                        <div>
                            <div class="px-4 py-6 border-gray-100 border-x relative">

                                <p class=" font-semibold text-s text-indigo-800 text-right">
                                    Rs54000
                                </p>

                                <h5 class="font-medium">
                                    Samsung Galaxy Note 20
                                </h5>

                                <p class="mt-1 text-xs leading-relaxed text-gray-700">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque corporis reprehenderit blanditiis sit at est deserunt!
                                </p>
                            </div>

                            <button class="w-full rounded-b-2xl p-3 text-xs tracking-wide text-center text-white uppercase bg-indigo-800 hover:bg-indigo-600" type="button">
                                Add to Cart
                            </button>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="mt-12 swiper-pagination"></div>
        </div>
    </section>

    <section class="max-w-screen-xl px-4 pb-12 mx-auto sm:px-6 lg:px-8 sm:mt-10">
        <h2 class="text-3xl font-medium text-indigo-800 text-center mb-12">
            Our Products
        </h2>

        <div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-4">
            <div class="mb-10">
                <a class="relative block" href="/singleProduct.html">
                    <img class="object-cover w-full h-64 rounded-t-2xl" src="https://images.unsplash.com/photo-1601070124916-5ad3dd628d28?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=627&q=80" alt="Sports Trainer White" loading="lazy" />

                    <button class="absolute p-2 text-white bg-indigo-800 rounded-full right-4 top-4" type="button">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>

                    <div>
                        <div class="px-4 py-6 border-gray-100 border-x relative">

                            <p class=" font-semibold text-s text-indigo-800 text-right">
                                Rs54000
                            </p>

                            <h5 class="font-medium">
                                Samsung Galaxy Note 20
                            </h5>

                            <p class="mt-1 text-xs leading-relaxed text-gray-700">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque corporis reprehenderit blanditiis sit at est deserunt!
                            </p>
                        </div>

                        <button class="w-full rounded-b-2xl p-3 text-xs tracking-wide text-center text-white uppercase bg-indigo-800 hover:bg-indigo-600" type="button">
                            Add to Cart
                        </button>
                    </div>
                </a>
            </div>

            <div class="mb-10">
                <a class="relative block" href="/product/sports-trainer">
                    <img class="object-cover w-full h-64  rounded-t-2xl" src="https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" alt="Sports Trainer White" loading="lazy" />

                    <button class="absolute p-2 text-white bg-indigo-800 rounded-full right-4 top-4" type="button">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>

                    <div>
                        <div class="px-4 py-6 border-gray-100 border-x">

                            <p class=" font-semibold text-s text-indigo-800 text-right">
                                Rs54000
                            </p>

                            <h5 class="font-medium">
                                ASUS Laptop L410
                            </h5>



                            <p class="mt-1 text-xs leading-relaxed text-gray-700">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque corporis reprehenderit blanditiis sit at est deserunt!
                            </p>
                        </div>

                        <button class="w-full rounded-b-2xl p-3 text-xs tracking-wide text-center text-white uppercase bg-indigo-800 hover:bg-indigo-600" type="button">
                            Add to Cart
                        </button>
                    </div>
                </a>
            </div>

            <div class="mb-10">
                <a class="relative block" href="/product/sports-trainer">
                    <img class="object-cover w-full h-64  rounded-t-2xl" src="https://images.unsplash.com/photo-1617294864705-eaf3c911259f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Sports Trainer White" loading="lazy" />

                    <button class="absolute p-2 text-white bg-indigo-800 rounded-full right-4 top-4" type="button">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>

                    <div>
                        <div class="px-4 py-6 border-gray-100 border-x">

                            <p class=" font-semibold text-s text-indigo-800 text-right">
                                Rs54000
                            </p>

                            <h5 class="font-medium">
                                MSI GF65 Thin 10 UE-047
                            </h5>



                            <p class="mt-1 text-xs leading-relaxed text-gray-700">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque corporis reprehenderit blanditiis sit at est deserunt!
                            </p>
                        </div>

                        <button class="w-full rounded-b-2xl p-3 text-xs tracking-wide text-center text-white uppercase bg-indigo-800  hover:bg-indigo-600" type="button">
                            Add to Cart
                        </button>
                    </div>
                </a>
            </div>

            <div class="mb-10">
                <a class="relative block" href="/product/sports-trainer">
                    <img class="object-cover w-full h-64  rounded-t-2xl" src="https://images.unsplash.com/photo-1613483187550-1458bbdb0996?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="Sports Trainer White" loading="lazy" />

                    <button class="absolute p-2 text-white bg-indigo-800 rounded-full right-4 top-4" type="button">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>

                    <div>
                        <div class="px-4 py-6 border-gray-100 border-x relative">

                            <p class=" font-semibold text-s text-indigo-800 text-right">
                                Rs54000
                            </p>

                            <h5 class="font-medium">
                                AMD Ryzen 5 5600G
                            </h5>


                            <p class="mt-1 text-xs leading-relaxed text-gray-700">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque corporis reprehenderit blanditiis sit at est deserunt!
                            </p>
                        </div>

                        <button class="w-full rounded-b-2xl p-3 text-xs tracking-wide text-center text-white uppercase bg-indigo-800 hover:bg-indigo-600" type="button">
                            Add to Cart
                        </button>
                    </div>
                </a>
            </div>

            <div class="mb-10">
                <a class="relative block" href="/product/sports-trainer">
                    <img class="object-cover w-full h-64  rounded-t-2xl" src="https://images.unsplash.com/photo-1624705002806-5d72df19c3ad?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" alt="Sports Trainer White" loading="lazy" />

                    <button class="absolute p-2 text-white bg-indigo-800 rounded-full right-4 top-4" type="button">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>

                    <div>
                        <div class="px-4 py-6 border-gray-100 border-x relative">

                            <p class=" font-semibold text-s text-indigo-800 text-right">
                                Rs54000
                            </p>


                            <h5 class="font-medium">
                                Gaming Desktop TD500
                            </h5>

                            <p class="mt-1 text-xs leading-relaxed text-gray-700">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque corporis reprehenderit blanditiis sit at est deserunt!
                            </p>
                        </div>

                        <button class="w-full rounded-b-2xl p-3 text-xs tracking-wide text-center text-white uppercase bg-indigo-800 hover:bg-indigo-600" type="button">
                            Add to Cart
                        </button>
                    </div>
                </a>
            </div>

            <div class="mb-10">
                <a class="relative block" href="/product/sports-trainer">
                    <img class="object-cover w-full h-64  rounded-t-2xl" src="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Sports Trainer White" loading="lazy" />

                    <button class="absolute p-2 text-white bg-indigo-800 rounded-full right-4 top-3" type="button">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>

                    <div>
                        <div class="px-4 py-6 border-gray-100 border-x">

                            <p class=" font-semibold text-s text-indigo-800 text-right">
                                Rs54000
                            </p>

                            <h5 class="font-medium">
                                Dell Inspiron 3511
                            </h5>


                            <p class="mt-1 text-xs leading-relaxed text-gray-700">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque corporis reprehenderit blanditiis sit at est deserunt!
                            </p>
                        </div>

                        <button class="w-full rounded-b-2xl p-3 text-xs tracking-wide text-center text-white uppercase bg-indigo-800 hover:bg-indigo-600" type="button">
                            Add to Cart
                        </button>
                    </div>
                </a>
            </div>

            <div class="mb-10">
                <a class="relative block" href="/product/sports-trainer">
                    <img class="object-cover w-full h-64 rounded-t-2xl" src="https://images.unsplash.com/photo-1601070124916-5ad3dd628d28?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=627&q=80" alt="Sports Trainer White" loading="lazy" />

                    <button class="absolute p-2 text-white bg-indigo-800 rounded-full right-4 top-4" type="button">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>

                    <div>
                        <div class="px-4 py-6 border-gray-100 border-x relative">

                            <p class=" font-semibold text-s text-indigo-800 text-right">
                                Rs54000
                            </p>

                            <h5 class="font-medium">
                                Samsung Galaxy Note 20
                            </h5>

                            <p class="mt-1 text-xs leading-relaxed text-gray-700">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque corporis reprehenderit blanditiis sit at est deserunt!
                            </p>
                        </div>

                        <button class="w-full rounded-b-2xl p-3 text-xs tracking-wide text-center text-white uppercase bg-indigo-800 hover:bg-indigo-600" type="button">
                            Add to Cart
                        </button>
                    </div>
                </a>
            </div>

            <div class="mb-10">

                <a class="relative block" href="/product/sports-trainer">
                    <img class="object-cover w-full h-64  rounded-t-2xl" src="https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" alt="Sports Trainer White" loading="lazy" />

                    <button class="absolute p-2 text-white bg-indigo-800 rounded-full right-4 top-4" type="button">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>

                    <div>
                        <div class="px-4 py-6 border-gray-100 border-x">

                            <p class=" font-semibold text-s text-indigo-800 text-right">
                                Rs54000
                            </p>

                            <h5 class="font-medium">
                                ASUS Laptop L410
                            </h5>



                            <p class="mt-1 text-xs leading-relaxed text-gray-700">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque corporis reprehenderit blanditiis sit at est deserunt!
                            </p>
                        </div>

                        <button class="w-full rounded-b-2xl p-3 text-xs tracking-wide text-center text-white uppercase bg-indigo-800 hover:bg-indigo-600" type="button">
                            Add to Cart
                        </button>
                    </div>
                </a>

            </div>



        </div>

        <div class="mx-auto mt-3">
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

        </div>

    </section>


    <?php
        include 'assets/elem/footer.php';
    ?>

    <script>
        new Swiper('.swiper', {
            loop: true,
            spaceBetween: 32,
            slidesPerView: 1,
            pagination: {
                clickable: true,
                el: '.swiper-pagination',
            },
            autoplay: {
                delay: 2500,
                pauseOnMouseEnter: true,
                disableOnInteraction: false
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 4,
                },
            },
        })
    </script>

</body>

</html>