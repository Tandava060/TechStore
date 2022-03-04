<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=aspect-ratio,forms"></script>
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>

    <?php
    include 'assets/elem/header.php';
    ?>
 <script>var arr = []; </script>

<section style="min-height: 80vh;" class=" mt-10">
<table class="mx-auto table p-4 bg-white shadow rounded-lg">
    <thead>
        <tr>
            <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                no
            </th>
            <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
               Name
            </th>
            <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                Category
            </th>
            <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                Stock
            </th>
            <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                Edit
            </th>
            <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                Delete
            </th>
        </tr>
    </thead>
    <tbody id="bodyProd">

    <?php
            $query = 'SELECT * FROM product ORDER BY pId DESC';
            $run_query = mysqli_query($con, $query);
            if (mysqli_num_rows($run_query) > 0) {
                while ($row = mysqli_fetch_array($run_query)) {
                    echo '<script> 
                            var obj = {
                                id: ' . $row['pId'] . ',
                                name: "' . $row['name'] . '",
                                stock : "' . $row['stock'] . '",
                                category: "' . $row['category'] . '"
                            }; 
                            arr.push(obj);
                        </script>';
                }
            }

            ?>

<script>
               let tab = document.getElementById("bodyProd");
               let trow = "";
               arr.forEach((prod, index) => {
                trow = `
                <tr class="text-gray-700">
            <td class="border-b-2 p-4 dark:border-dark-5">
                ${index}
            </td>
            <td class="border-b-2 p-4 dark:border-dark-5">
            ${prod.name}
            </td>
            <td class="border-b-2 p-4 dark:border-dark-5">
            ${prod.category}
            </td>
            <td class="border-b-2 p-4 dark:border-dark-5">
            ${prod.stock}
            </td>
            <td class="border-b-2 p-4 dark:border-dark-5">
                prouveE
            </td>
            <td class="border-b-2 p-4 dark:border-dark-5">
                prouveE
            </td>
        </tr>
                `;
                tab.innerHTML += trow;
               })

            </script>
        
        <!-- <tr class="text-gray-700">
            <td class="border-b-2 p-4 dark:border-dark-5">
                2
            </td>
            <td class="border-b-2 p-4 dark:border-dark-5">
                Eric
            </td>
            <td class="border-b-2 p-4 dark:border-dark-5">
                Prouve
            </td>
            <td class="border-b-2 p-4 dark:border-dark-5">
                prouveE
            </td>
            <td class="border-b-2 p-4 dark:border-dark-5">
                prouveE
            </td>
            <td class="border-b-2 p-4 dark:border-dark-5">
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
