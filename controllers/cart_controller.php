<?php
//connect to the user account class
require("../classes/cart_class.php");

//sanitize data


//--Add to cart--//
function add_to_cart_ctr($id,$ip,$cid,$quantity){
	$addcart=new cart_class();
	return $addcart->add_to_cart($id,$ip,$cid,$quantity);
}

//--Show Cart--//
function show_cart_ctr($cid,$ip){
	$showcart=new cart_class();
	return $showcart->show_cart($cid,$ip);
}


function select_one_prod_ctr($id){
	$oneproduct=new cart_class();
	return $oneproduct->select_one_product($id);
}



//--UPDATE--//

//--DELETE--//
function delete_from_cart_ctr($cid,$pid){
	$delfromcart=new cart_class();
	return $delfromcart->delete_from_cart($cid,$pid);
}

?>