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

class product_class extends db_connection
{
	//--INSERT--//
	public function add_brand($name)
	{
		$sql="INSERT INTO `brands`(`brand_name`) VALUES ('$name')";
		/*$db1=new db_connection
		return $db1.db_query($sql);*/
		return $this->db_query($sql);
	}

	public function add_category($name)
	{
		$sql="INSERT INTO `categories`(`cat_name`) VALUES ('$name')";
		/*$db1=new db_connection
		return $db1.db_query($sql);*/
		return $this->db_query($sql);
	}

	public function select_all_brands()
	{
		$sql="SELECT * FROM `brands`";
		return $this->db_fetch_all($sql);
	}

	public function select_all_categories()
	{
		$sql="SELECT * FROM `categories`";
		return $this->db_fetch_all($sql);
	}

	public function update_brand($name,$id)
	{
		$sql="UPDATE `brands` SET `brand_name`='$name' WHERE `brand_id`=$id";
		/*$db1=new db_connection
		return $db1.db_query($sql);*/
		return $this->db_query($sql);
	}

	public function update_category($name,$id)
	{
		$sql="UPDATE `categories` SET `cat_name`='$name' WHERE `cat_id`=$id";
		/*$db1=new db_connection
		return $db1.db_query($sql);*/
		return $this->db_query($sql);
	}

	public function update_category($name,$id)
	{
		$sql="UPDATE `categories` SET `cat_name`='$name' WHERE `cat_id`=$id";
		/*$db1=new db_connection
		return $db1.db_query($sql);*/
		return $this->db_query($sql);
	}

	public function count_brands()
	{
		$sql="SELECT * FROM `brands`";
		return db_count();
	}


}

?>