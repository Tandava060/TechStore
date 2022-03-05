<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=aspect-ratio,forms"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <style>
        .prose h3 {
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid rgb(243 244 246);

        }

        .swiper-pagination {
            bottom: 0;
            position: relative;
        }
    </style>

</head>

<body>
    <?php
    include 'assets/elem/header.php';
    ?>

    <section>
        <div class="relative max-w-screen-xl px-4 py-8 mx-auto">


            <div class="grid gap-8 lg:items-start lg:grid-cols-4">
                <div class="lg:col-span-3">
                    <script>
                        var arr = [];
                    </script>
                    <?php
                    $url_id = $_GET['id'];
                    $query = 'SELECT * FROM images WHERE pId = ' . $url_id . ' ORDER BY id DESC';
                    $run_query = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_array($run_query)) {
                        echo '<script> arr.push("data:image/jpg;charset=utf8;base64,' . base64_encode($row['image']) . '");</script>';
                    }
                    ?>
                    <div id="main_img" class="relative mt-4">
                        <img alt="" src="" class="w-full rounded-xl h-72 lg:h-[540px] object-contain" />
                    </div>

                    <ul id="allImgs" class="flex gap-1 mt-5">
                        <!-- 
                        <li>
                            <img class="object-cover w-16 h-16 rounded-md border-2 border-indigo-400" src="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" />
                        </li>

                        <li>
                            <img class="object-cover w-16 h-16 rounded-md" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1472&q=80" />
                        </li>

                        <li>
                            <img class="object-cover w-16 h-16 rounded-md" src="https://images.unsplash.com/photo-1603302576837-37561b2e2302?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1468&q=80" />
                        </li>

                        <li>
                            <img class="object-cover w-16 h-16 rounded-md" src="https://images.unsplash.com/photo-1544006659-f0b21884ce1d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" />
                        </li>

                        <li>
                            <img class="object-cover w-16 h-16 rounded-md" src="https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" />
                        </li> -->
                    </ul>

                    <script>
                        arr.forEach((img, i) => {
                            document.getElementById('allImgs').innerHTML += '<li> <img onclick="set_main_img('+i+')" class = "object-contain w-16 h-16 rounded-md" src = "' + img + '" / ></li>'
                        })

                        function set_main_img(index) {
                            unselect();
                            document.getElementById('main_img').children[0].src = arr[index];
                            document.getElementById('allImgs').children[index].children[0].classList.add("border-2");
                            document.getElementById('allImgs').children[index].children[0].classList.add("border-indigo-400");
                        }

                        function unselect() {
                            for (let index = 0; index < document.getElementById('allImgs').children.length; index++) {
                                var element = document.getElementById('allImgs').children[index];
                                element.children[0].classList.remove('border-2')
                                element.children[0].classList.remove("border-indigo-400");
                            }
                        }
                        set_main_img(0);
                    </script>
                </div>

                <?php

                $query = 'SELECT * FROM product WHERE pId = ' . $url_id;
                $run_query = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($run_query)) {

                    $prod_name = $row['name'];
                    $prod_descri = $row['description'];
                    $prod_price = $row['price'];
                    $prod_cat = $row['category'];

                    echo '<div class="lg:flex lg:flex-col lg:justify-center lg:h-full">
                    <form class="space-y-4 lg:pt-8">

                        <div>
                            <h1 class="text-2xl text-center font-medium lg:text-3xl sm:mb-6">
                               ' . $prod_name . '
                            </h1>

                            <p class="text-2xl text-center text-indigo-700 font-bold">
                                Rs ' . $prod_price . '
                            </p>
                        </div>

                        <div class="mt-2 flex justify-evenly w-64">
                            <label class=" text-lg font-medium" for="count">Quantity:</label>
                            <div class="flex items-center">
                                <button class=" focus:outline-none focus:text-gray-600">
                                    <svg class="h-8 w-8" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </button>
                                <span class=" text-xlg mx-2">20</span>
                                <button class=" focus:outline-none focus:text-gray-600">
                                    <svg class="h-8 w-8" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <button type="submit" class="w-full px-6 py-3 text-sm font-bold tracking-wide text-white uppercase bg-indigo-700 rounded">
                            Add to cart
                        </button>

                        <button type="button" class="w-full relative px-6 py-3 text-sm font-bold overflow-hidden text-indigo-600 border border-current rounded group active:text-indigo-700 focus:outline-none focus:ring">
                            <span class="absolute right-0 transition-transform translate-x-full group-hover:-translate-x-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </span>

                            <span class="text-sm font-bold uppercase transition-all group-hover:mr-4">
                                Add To WishList
                            </span>
                        </button>
                    </form>
                </div>

                <div class="lg:col-span-3">
                    <div class="max-w-none">
                        <h3 class="text-2xl font-medium text-indigo-700">Description</h3>
                        ' . $prod_descri . '
                        <!-- <p>Dell Inspiron 3511 Intel 11th Gen Processor 15.6-inch FHD (1920 x 1080) Anti-glare LED, Windows 11 Home, Carbon Black, 4 Years Warranty</p>
                        <h4 class="text-xl font-small text-indigo-700 mt-5">Features: </h4>
                        <ul>
                            <li>15.6" FHD, IPS-Level 144Hz 45%NTSC | 1920x1080 16:9</li>
                            <li>Intel Core i7-10750H 2.6-5.0 GHz</li>
                            <li>NVIDIA GeForce RTX3060 Max-Q 6GB GDDR6</li>
                            <li>16GB (8G*2) DDR4 3200MHz; 2 Sockets, Max Memory 64GB | 512GB NVMe SSD</li>
                            <li>RTL8111HS-CG | Intel Wi-Fi 6 AX201(2*2 ax) | BT 5.1</li>

                        </ul> -->
                    </div>
                </div>';
                };
                ?>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8 mt-6 sm:mt-12">
        <h2 class="text-3xl font-medium text-indigo-800 text-center mb-12">
            Similar Products
        </h2>

        <div class="mt-8 swiper">
            <ul class="swiper-wrapper">

                <?php
                $url_id = $_GET['id'];
                $query = 'SELECT * FROM product WHERE category = (SELECT category FROM product WHERE pId = ' . $url_id . ');';
                $run_query = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($run_query)) {
                    $prod_id = $row['pId'];
                    $prod_name = $row['name'];
                    $prod_price = $row['price'];
                    $prod_descri = $row['description'];
                    echo '<li class="swiper-slide"><a class="relative block" href="/ecommerce/product.php?id=' . $prod_id . '"><img class="object-cover w-full h-64  rounded-t-2xl" src="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Sports Trainer White" loading="lazy" /><button class="absolute p-2 text-white bg-indigo-800 rounded-full right-4 top-3" type="button"> <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg></button><div><div class="px-4 py-6 border-gray-100 border-x"><p class=" font-semibold text-s text-indigo-800 text-right">Rs ' . $prod_price . '</p><h5 class="font-medium">' . $prod_name . '</h5><p class="mt-1 text-xs leading-relaxed text-gray-700">' . substr($prod_descri, 0, 150) . '...</p></div></div></a><button  onclick="<?php ' . add_to_cart($con, $prod_id) . '?>" class="w-full rounded-b-2xl p-3 text-xs tracking-wide text-center text-white uppercase bg-indigo-800 hover:bg-indigo-600" type="button"> Add to Cart </button></li>';

                };
                ?>

                
            </ul>
            <div class="mt-12 swiper-pagination"></div>
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
    <script src="assets/js/index.js"></script>
</body>

</html>