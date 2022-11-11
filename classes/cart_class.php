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
	//INSERT INTO `cart`(`p_id`, `ip_add`, `c_id`, `qty`) select 10,'::1',4,1 from dual WHERE NOT EXISTS(Select * from cart where `p_id`=10 and `ip_add`='::1' and `c_id`=4)

/*public function add_to_cart($id,$ip,$cid,$quantity)
	{
		$sql="INSERT INTO `cart`(`p_id`, `ip_add`, `c_id`, `qty`) VALUES ('$id','$ip','$cid','$quantity')";
		return $this->db_query($sql);
	}*/
	public function add_to_cart($id,$ip,$cid,$quantity)
	{
		$sql="INSERT INTO `cart`(`p_id`, `ip_add`, `c_id`, `qty`) select '$id','$ip','$cid','$quantity' from dual WHERE NOT EXISTS(Select * from cart where `p_id`='$id' and `ip_add`='$ip' and `c_id`='$cid')";
		$this->db_query($sql);
		
		if (mysqli_affected_rows($this->db)==0){
			$sql1="UPDATE `cart` set `qty`=`qty`+'$quantity' where `p_id`='$id' and `ip_add`='$ip' and `c_id`='$cid'";
			return $this->db_query($sql1);
		} else{
			return $this->db_query($sql);
		}
		
	}

public function show_cart($cid,$ip)
	{
		$sql="SELECT * from `cart` where `c_id`='$cid' and `ip_add`='$ip' ";
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