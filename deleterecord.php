<?php

	$studentid = $_GET['studentid'];
	
	$con = mysqli_connect("localhost","root","password","myschool");
	
	$sql = "Delete from studentdata
			where studentid = $studentid";
	
	// echo $sql;
			
	$result = mysqli_query($con,$sql);
	
	if($result){
		
		header("location:handlerecord.php");
		
		
	}else {
		
		echo "<h1>Record cannot be deleted due to she/he has already enrolled classes</h1>";
		
		
	}



?>