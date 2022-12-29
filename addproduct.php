<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Add</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
.a{
	display:none;
}  </style>
</head>
<body class="bg-light">

<nav class="navbar">
    <div class="container-fluid">
        <h1 style="font-size:40px" class="navbar-brand">Product Add</h1>
        <span class="d-flex">
            
                <button class="btn btn-dark m-2" type="submit" form="product_form" name="save">Save</button>
    
            <a href="index.php" type="button" class="btn btn-dark m-2" type="submit">Cancel</a>
            
        </span>
    </div>
</nav>
<hr class="mx-3 py-1">

<div class="container-fluid p-5">
 
        <form action="add.php" method="POST" id="product_form" >
            <div class="row mb-3">
                <label for="sku" class="col-sm-2 col-form-label">SKU (Must be Unique)</label>
                <div class="col-sm-auto">
                    <input required type="text" class="form-control needs-validation" novalidate id="sku" 
                        name="sku">

                </div>
            </div>

            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-auto">
                    <input required type="text" class="form-control needs-validation" novalidate id="name"
                        name="name">
                    
                </div>

            </div>

            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Price ($)</label>
                <div class="col-sm-auto">
                    <input required type="number" class="form-control needs-validation" novalidate id="price" min="0.01" step="0.01"
                         name="price">
                   
                </div>

            </div>


<div class="row mb-3">
                <label for="productType" class="col-sm-2 col-form-label">Product Type Switcher</label>
                <div class="col-sm-auto">
                    <select required class="form-select needs-validation" novalidate id="productType" name="type">
                         <option>Type Switcher</option>
                         <option value="disc">DVD</option>
                         <option value="furniture">Furniture</option>
                         <option value="book">Book</option>
                         </select>
                         
                </div>
            </div>


            <div class="row mb-3">
                 <div class="a" name="disc" id="disc">
                    <label for="size" class="col-sm-2 col-form-label">Size</label>
                    <div class="col-sm-auto">
                    <input type="number" name="size" class="form-control " id="size" min="1" step="1">
                    <small>Please provide size in MB format.</small>
                    
                </div>
                </div>
                </div>

                <div class="row mb-3">
                <div class="a" name="book" id="book">
                    <label for="weight" class="col-sm-2 col-form-label">Weight</label>
                    <div class="col-sm-auto">
                    <input type="number" name="weight" class="form-control w-50" id="weight" min="0.01" step="0.01">
                    <small>Please provide weight in Kg format.</small>
                    </div>
                </div>
                </div>

                <div class="row mb-3">
                <div class="a" name="furniture" id="furniture">
                    <label for="height" class="col-sm-2 col-form-label">Height</label>
                    <div class="col-sm-auto">
                    <input type="number" name="height" class="form-control w-50" id="height"  min="1" step="1">
                    </div>
                    <label for="width" class="col-sm-2 col-form-label">Width</label>
                    <div class="col-sm-auto">
                    <input type="number" name="width" class="form-control w-50" id="width"  min="1" step="1">
                    </div>
                    <label for="length" class="col-sm-2 col-form-label">Length</label>
                    <div class="col-sm-auto">
                    <input type="number" name="length" class="form-control w-50" id="length"  min="1" step="1">
                    </div>
                    <small>Please provide dimensions in HxWxL format.</small>
                </div></div>
    </form>



    <br><br><br><br>
    <footer class="footer pt-5 mt-5 py-3 text-center">
        <div class="container-fluid">
            <div class="h4 pb-2 mb-4 text-danger border-bottom border-dark"></div>
            <span class="text-center mt-2">Scandiweb test assignment</span>
        </div>
    </footer>


</div>  
<script>

    $("#productType").on("change", function(){

        $(".a").hide();
        const a = $("#" + $(this).val()).show();
        console.log(a);
    });

</script> 

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>


   