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

class general_class extends db_connection
{
	//--INSERT--//
	public function add_contact($a,$b)
	{
		$sql="INSERT INTO `phonebook`( `pname`, `pphoned`) VALUES ('$a','$b')";
		/*$db1=new db_connection
		return $db1.db_query($sql);*/
		return $this->db_query($sql);
	}

	//--SELECT--//
	public function select_one_contact($id)
	{
		$sql="SELECT * FROM `phonebook` WHERE `pid`='$id'";
		return $this->db_fetch_all($sql);
	}

	public function select_all_contacts()
	{
		$sql="SELECT * FROM `phonebook`";
		return $this->db_fetch_all($sql);
	}


	//--UPDATE--//
	public function update_contact($id,$a,$b)
	{
		$sql="UPDATE `phonebook` SET `pname`='$a',`pphoned`='$b' WHERE `pid`='$id'";
		return $this->db_query($sql);
	}



	//--DELETE--//
	public function delete_contact($id)
	{
		$sql="DELETE FROM `phonebook` WHERE `pid`='$id'";
		return $this->db_query($sql);
	}


}

?>