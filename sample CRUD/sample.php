<?php

class tbl_faqs
{

function connect()
{
	$con=mysqli_connect("localhost","root","","db_excellonservice");

	return($con);
}
	function Insert($FAQs,$FAQsAns,$Active)
	{
	$query=mysqli_query($this->connect(),"INSERT INTO `tbl_faqs`(`PK_Id`, `FAQs`, `FAQsAns`, `Active`, `DeleteLevel`, `CreatedDateTime`) VALUES ('','$FAQs','$FAQsAns','$Active','0','".date("Y/m/d H:i:s")."')");
	return $query;
	} 

	function Select()
	{
	$query=mysqli_query($this->connect(),"SELECT * FROM `tbl_faqs` WHERE `DeleteLevel`='0' ");	
	return ($query);
	}
	
		function SelectById($id)
	{
	$query=mysqli_query($this->connect(),"select * from tbl_faqs WHERE `PK_Id`=$id");	
	return($query);
	}
	
	
	function SelectTrash()
	{
	$query=mysqli_query($this->connect(),"SELECT * FROM `tbl_faqs` WHERE `DeleteLevel`='1' ");	
	return ($query);
	}
	
	
	function Update($PK_Id,$FAQs,$FAQsAns,$Active)
	{
		$query=mysqli_query($this->connect(),"UPDATE `tbl_faqs` SET `FAQs`='$FAQs',`FAQsAns`='$FAQsAns',`Active`='$Active',`UpdatedDateTime`='".date("Y/m/d H:i:s")."' WHERE `PK_Id`=$PK_Id");	
	    return($query);
	}
	function Delete($id)
	{
		$query=mysqli_query($this->connect(),"UPDATE `tbl_faqs` SET `DeleteLevel`='1',`DeletedDateTime`='".date("Y/m/d H:i:s")."' WHERE `PK_Id`= $id");
		return $query;
	}

		function UndoDelete($id)
	{
		$query=mysqli_query($this->connect(),"UPDATE `tbl_faqs` SET `DeleteLevel`='0' WHERE `PK_Id`= $id");
		return $query;
	}

	function PDelete($id)
	{
		$query=mysqli_query($this->connect(),"UPDATE `tbl_faqs` SET `DeleteLevel`='2',`DeletedDateTime`='".date("Y/m/d H:i:s")."' WHERE `PK_Id`= $id");
		return $query;
	}
}




?>