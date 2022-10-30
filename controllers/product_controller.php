<?php
//connect to the user account class
require("../classes/product_class.php");

//sanitize data


//--Insert Brand--//
function add_brand_ctr($name){
	$addbrand=new product_class();
	return $addbrand->add_brand($name);
}

//--Select All Brands--//
function select_all_brands_ctr(){
	$seebrands=new product_class();
	return $seebrands->select_all_brands();
}

//--Insert Category--//
function add_category_ctr($name){
	$addcategory=new product_class();
	return $addcategory->add_category($name);
}

//--Select All Categories--//
function select_all_categories_ctr(){
	$seecategories=new product_class();
	return $seecategories->select_all_categories();
}
//--UPDATE--//
function update_brand_ctr($name,$id){
	$updatebrand=new product_class();
	return $updatebrand->update_brand($name,$id);
}

function update_category_ctr($name,$id){
	$updatecategory=new product_class();
	return $updatecategory->update_category($name,$id);
}
//--DELETE--//
function delete_brand_ctr($id){
	$deletebrand=new product_class();
	return $deletebrand->delete_brand($id);
}

function delete_category_ctr($id){
	$deletecategory=new product_class();
	return $deletecategory->delete_category($id);
}
?>