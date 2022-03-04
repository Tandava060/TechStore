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
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
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
                        <form  enctype="multipart/form-data" name="registration" action="addProduct.php" method="post" class="mt-6 space-y-5">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="px-2 leading-10 text-sm text-gray-600">Name</label>
                                    <input required type="text" name="name" id="name" class="w-full px-5  py-3 placeholder-gray-400 border border-transparent rounded-lg inputTrans  bg-gray-50 focus:ring-2 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-300 " placeholder="Msi">
                                </div>

                                <div>
                                    <label for="price" class="px-2 leading-10 text-sm text-gray-600">price</label>
                                    <input required type="number" name="price" id="price" class="w-full px-5  py-3 placeholder-gray-400 border border-transparent rounded-lg inputTrans  bg-gray-50 focus:ring-2 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-300" placeholder="20000">
                                </div>
                            </div>

                     

                            <div>
                                <label for="email" class="px-2 leading-10 text-sm text-gray-600">Description</label>
                                <textarea required id="summernote" name="description"></textarea>
                            </div>


                            <div class="form-control w-full max-w-xs">
                            <label for="category" class="px-2 leading-10 text-sm text-gray-600">Category</label>
  <select  required name="category" class="w-full px-5  py-3 placeholder-gray-400 border border-transparent rounded-lg inputTrans  bg-gray-50 focus:ring-2 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-300">
    <option disabled selected>Pick one</option>
    <option value="Gaming">Gaming</option>
    <option value="Laptops & Gaming">Laptops & Gaming</option>
    <option value="Mobile & Tablets">Mobile & Tablets</option>
    <option value="Accessories">Accessories</option>
  </select>

</div>

            <div>
            <label>Select Image File:</label>
    <input  required type="file" name="image[]" multiple accept="image/x-png,image/gif,image/jpeg">
   
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

	$name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $category= $_POST["category"];
   
    
  

    $sql = "INSERT INTO `product`(name,price,description,category) VALUES ('$name', '$price', '$description', '$category')";
   
    if(mysqli_query($con,$sql)){
        $pId = mysqli_insert_id($con);
        $fileNames = array_filter($_FILES['image']['name']); 
    if(!empty( $fileNames)) { 
       
        
        foreach($_FILES['image']['name'] as $key=>$val){
            
            $image = $_FILES['image']['tmp_name'][$key]; 
            $imgContent = addslashes(file_get_contents($image)); 
            
         $sql = "INSERT into images (image, pId) VALUES ('$imgContent', '$pId')";
            $insert = $con->query($sql); 
            echo "<script>console.log('a')</script>";
        }
      
           
    }

      
        echo "<script> location.href='addProduct.php'; </script>";
        
        
    } else {
        echo("Error description: " . $con -> error);
    }
}
?>

<script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['fontname'],
          ['view', ['fullscreen', 'codeview', 'help']],
        ]
      });
    </script>

    <script src="assets/js/index.js"></script>
    <script src="assets/js/registerValidate.js"></script>
</body>

</html>