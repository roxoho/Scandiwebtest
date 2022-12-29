<?php

include_once("crud.php");

$crud=new crud;

if(isset($_POST['product-delete'])){
	$all_id=$_POST['product_delete_id'];
	foreach($all_id as $r)$data = $crud->del($r,'product');
	header("Location:index.php");
	
}
?>