<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

class cart_class extends db_connection
{
	//--INSERT--//
public function add_to_cart($id,$ip,$cid,$quantity)
	{
		$sql="INSERT INTO `cart`(`p_id`, `ip_add`, `c_id`, `qty`) VALUES ('$id','$ip','$cid','$quantity')";
		return $this->db_query($sql);
	}

public function show_cart($cid,$ip)
	{
		$sql="SELECT `p_id`,`c_id`,Count(*) as quantity from `cart` where `c_id`='$cid' and `ip_add`='$ip'  group by `p_id`,`c_id` ";
		return $this->db_fetch_all($sql);
	}

public function select_one_product($id)
	{
		$sql="SELECT * FROM `products` WHERE `product_id`='$id'";
		return $this->db_fetch_one($sql);
	}

public function delete_from_cart($cid,$pid)
	{
		$sql="DELETE FROM `cart` WHERE `c_id`='$cid' and `p_id`='$pid'";
		return $this->db_query($sql);
	}

}

?>