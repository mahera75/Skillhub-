
<?php

include 'include/connection.php';
 
		
			$id = $_GET['stdid'];
	 
 
 
	
  			mysqli_query($conn, "UPDATE `appliedlist` SET `Status`='AdmissionApproved' WHERE `id`='$id'");
	
	header("location: DetailReport.php");
	
?>