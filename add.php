<?php

include_once("crud.php");

$crud=new crud;

if(isset($_POST['save']));
    $sku = $_POST['sku'];	
	$name = $_POST['name'];
	$price = $_POST['price'];
	$size = $_POST['size'];
	$weight = $_POST['weight'];
	$height = $_POST['height'];
	$width = $_POST['width'];
	$length = $_POST['length'];
	if($height==''){ $dimension='';}
	else {$dimension = "".$height . " x " . $width . " x " . $length;}
	$sql=$crud->get("SELECT * FROM product");
	$k=false;
	foreach ($sql as $product){
		if($product['sku']==$sku){$k=true;
		break;}}
	if($k==false){$result = $crud->run("INSERT INTO product (sku,name,price,size,weight,dimension) VALUES('$sku','$name','$price','$size','$weight','$dimension') ");
	header("Location:index.php");
	}
	else{
	header("Location:addproduct.php");
}
?>