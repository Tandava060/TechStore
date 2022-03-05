<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=aspect-ratio,forms"></script>
    <link rel="stylesheet" href="assets/css/index.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <?php
    include 'assets/elem/header.php';
    if (isset($_GET['sts'])) {
      echo  '<div id="alert" class=" mt-6 flex max-w-6xl mx-auto p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
        <svg class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
        </svg>
        <div id="alertText" class="ml-3 text-sm font-medium text-green-700 dark:text-green-800"> Successfully Deleted!</div>
        <button  class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300">
            <span class="sr-only">Close</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>';
    }
    ?>
 <script>var arr = []; </script>

<section style="min-height: 80vh;" class=" mt-10">
<button onclick='location.href="/ecommerce/addProduct.php"' class="btnPos flex items-center mt-4 px-3 py-2 bg-indigo-800 text-white text-sm uppercase font-medium rounded hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500">
                        Add Product</button>
<table class="mx-auto  table p-8 bg-white shadow rounded-lg">
    <thead>
        <tr>
            <th class="border-b-2 p-8 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                no
            </th>
            <th class="border-b-2 p-8 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
               Name
            </th>
            <th class="border-b-2 p-8 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                Category
            </th>
            <th class="border-b-2 p-8 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                Stock
            </th>
            <th class="border-b-2 p-8 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                view
            </th>
            <th class="border-b-2 p-8 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                Delete
            </th>
        </tr>
    </thead>
    <tbody id="bodyProd">

    <?php
            $query = 'SELECT * FROM product ORDER BY pId DESC';
            $run_query = mysqli_query($con, $query);
            if (mysqli_num_rows($run_query) > 0) {
                $i = 1;
                while ($row = mysqli_fetch_array($run_query)) {
                   
                  
                        $id = $row['pId'];
                        $name = $row['name'];
                        $stock = $row['stock'];
                        $category = $row['category'];

                        echo '<tr class="text-gray-700">
                        <td class="border-b-2 p-8 dark:border-dark-5">
                            '.$i.'
                        </td>
                        <td class="border-b-2 p-8 dark:border-dark-5">
                        '.$name.'
                        </td>
                        <td class="border-b-2 p-8 dark:border-dark-5">
                        '.$category.'
                        </td>
                        <td class="border-b-2 p-8 dark:border-dark-5">
                        '.$stock.'
                        </td>
                        <td class="border-b-2 p-8 dark:border-dark-5">
                        <a href="/ecommerce/product.php?id=' . $id . '"><i class="material-icons">remove_red_eye</i></a>
                        </td>
                        <td class="border-b-2 p-8 dark:border-dark-5">
                        <a href="/ecommerce/delProduct.php?id=' . $id . '"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>';
                    $i++;
                }
            }

            ?>


        <!-- <tr class="text-gray-700">
            <td class="border-b-2 p-8 dark:border-dark-5">
                2
            </td>
            <td class="border-b-2 p-8 dark:border-dark-5">
                Eric
            </td>
            <td class="border-b-2 p-8 dark:border-dark-5">
                Prouve
            </td>
            <td class="border-b-2 p-8 dark:border-dark-5">
                prouveE
            </td>
            <td class="border-b-2 p-8 dark:border-dark-5">
                prouveE
            </td>
            <td class="border-b-2 p-8 dark:border-dark-5">
                prouveE
            </td>
        </tr> -->
        
    </tbody>
</table>
</section>



<?php
        include 'assets/elem/footer.php';
    ?>
</body>
</html>
