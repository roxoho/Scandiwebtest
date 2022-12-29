<?php
include_once("crud.php");
$var=new crud();
$query = "SELECT * FROM product ORDER BY id DESC";
$data = $var->get($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="bg-light">

<nav class="navbar p-2">
    <div class="container-fluid">
        <h1 style="font-size:40px" class="navbar-brand">Product List</h1>
        <span class="d-flex">
            <a href="addproduct.php" class="btn btn-dark m-2" type="submit">ADD</a>
            <form action="delete.php" method="post" id="delete-form">
                <button class="btn btn-dark m-2" id="delete-product-btn" name="product-delete" type="submit">MASS DELETE</button>
            </form>
        </span>
    </div>
</nav>
<hr>
<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
      <?php foreach ($data as $product) : ?>
        <div class="col mt-2">
            <div class="card border-dark" style="width:500px">
                <div class="card-input"> 
                    <input form="delete-form" type="checkbox" name="product_delete_id[]" class="delete-checkbox form-check-input bg-dark m-2" value="<?= $product['id'] ?>">
                </div>
                <div class="card-body">
                    <p class="card-text text-center">Sku :   <?php echo $product['sku']; ?></p>
                    <p class="card-text text-center">Name :   <?php echo $product['name']; ?></p>
                    <p class="card-text text-center">Price :   <?php echo $product['price']; ?> $</p>
                    <p class="card-text text-center"><?php echo $var->desc($product['size'],$product['weight'],$product['dimension']); ?></p>
				
                </div>
            </div>
        </div>
      <?php endforeach; ?>
    </div>
</div>

<br><br><br><br><br>
<footer class="footer pt-5 mt-5 py-3 text-center">
        <div class="container">
            <div class="h4 pb-2 mb-4 text-danger border-bottom border-white"></div>
            <span class="text-center mt-2">Scandiweb test assignment</span>
        </div>
    </footer>
    </body>
</html>