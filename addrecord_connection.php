<?php

  // print_r($_POST);
  
  $name = $_POST['name'];
  
  $dob = $_POST['dob'];
  
  $gender = $_POST['gender'];
  
  $grade = $_POST['grade'];
  
  $classinput = $_POST['classinput'];
  
  $classname = $grade.$classinput;
  
  // $photo = $_POST['photo'];
  
  // echo "<p>$pname $price $supplier $photo";
  
  // Connect to the database
  
  $con = mysqli_connect("localhost","root","password","myschool");
  
  // Write a SQL command
  
  $sql = "Insert into studentdata(name,dob,gender,classname)
          values('$name','$dob','$gender','$classname')";
		  
  $result = mysqli_query($con,$sql);

  if($result) {
	  
	 // echo "<p>Record is added</p>";
	header("location:listrecord.php");
  
  
  } else {
	  
	  echo "<p>Record cannot be added</p>";
  }  
  
?>










